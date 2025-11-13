<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Karya;
use App\Http\Requests\StoreKaryaRequest;
use App\Http\Requests\UpdateKaryaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class KaryaManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Karya::with(['user', 'ratings']);

        // Filter berdasarkan status
        if ($request->has('status') && $request->status != '') {
            $query->byStatus($request->status);
        }

        // Filter berdasarkan kategori
        if ($request->has('kategori') && $request->kategori != '') {
            $query->byKategori($request->kategori);
        }

        // Filter berdasarkan tahun
        if ($request->has('tahun') && $request->tahun != '') {
            $query->byTahun($request->tahun);
        }

        // Search
        if ($request->has('search') && $request->search != '') {
            $query->search($request->search);
        }

        $karya = $query->latest('tanggal_upload')->paginate(10);

        // Hitung rata-rata rating untuk setiap karya
        foreach ($karya as $k) {
            $k->avg_rating = $k->averageRating();
        }

        return view('admin.karya.index', compact('karya'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ['Web Development', 'Mobile Development', 'IoT', 'Data Science', 'Game Development', 'Desktop Application'];
        return view('admin.karya.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string|max:100',
            'tahun' => 'required|integer',
            'file_karya' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'preview_karya' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'tim_pembuat' => 'required|string|max:255',
        ]);

        $karya = new Karya();
        $karya->user_id = Auth::id() ?? 1; // sementara isi 1 kalau belum ada login
        $karya->judul = $validated['judul'];
        $karya->deskripsi = $validated['deskripsi'];
        $karya->kategori = $validated['kategori'];
        $karya->tahun = $validated['tahun'];
        $karya->tim_pembuat = $validated['tim_pembuat'];

        // Upload file karya
        if ($request->hasFile('file_karya')) {
            $karya->file_karya = $request->file('file_karya')->store('karya/file', 'public');
        }

        // Upload preview
        if ($request->hasFile('preview_karya')) {
            $karya->preview_karya = $request->file('preview_karya')->store('karya/preview', 'public');
        }

        $karya->status_validasi = 'menunggu'; // default
        $karya->tanggal_upload = now();
        $karya->save();

        return redirect()->route('admin.karya.index')->with('success', 'Karya berhasil ditambahkan!');
    }
    


    /**
     * Display the specified resource.
     */
    public function show(Karya $karya)
    {
        $karya->load(['user', 'reviews.user', 'ratings']);
        $karya->avg_rating = $karya->averageRating();
        $karya->total_reviews = $karya->reviews()->count();
        $karya->total_ratings = $karya->ratings()->count();

        return view('admin.karya.show', compact('karya'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karya $karya)
    {
        $categories = ['Web Development', 'Mobile Development', 'IoT', 'Data Science', 'Game Development', 'Desktop Application'];
        return view('admin.karya.edit', compact('karya', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKaryaRequest $request, Karya $karya)
    {
        try {
            $data = $request->validated();

            // Upload file karya baru
            if ($request->hasFile('file_karya')) {
                // Hapus file lama
                if ($karya->file_karya && Storage::disk('public')->exists($karya->file_karya)) {
                    Storage::disk('public')->delete($karya->file_karya);
                }

                $file = $request->file('file_karya');
                $filename = time() . '_' . Str::slug($request->judul) . '.' . $file->getClientOriginalExtension();
                $data['file_karya'] = $file->storeAs('karya/files', $filename, 'public');
            }

            // Upload preview baru
            if ($request->hasFile('preview_karya')) {
                // Hapus preview lama
                if ($karya->preview_karya && Storage::disk('public')->exists($karya->preview_karya)) {
                    Storage::disk('public')->delete($karya->preview_karya);
                }

                $preview = $request->file('preview_karya');
                $previewName = time() . '_preview_' . Str::slug($request->judul) . '.' . $preview->getClientOriginalExtension();
                $data['preview_karya'] = $preview->storeAs('karya/previews', $previewName, 'public');
            }

            $karya->update($data);

            return redirect()->route('admin.karya.index')
                           ->with('success', 'Karya berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->back()
                           ->with('error', 'Gagal memperbarui karya: ' . $e->getMessage())
                           ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karya $karya)
    {
        try {
            // Hapus file karya
            if ($karya->file_karya && Storage::disk('public')->exists($karya->file_karya)) {
                Storage::disk('public')->delete($karya->file_karya);
            }

            // Hapus preview
            if ($karya->preview_karya && Storage::disk('public')->exists($karya->preview_karya)) {
                Storage::disk('public')->delete($karya->preview_karya);
            }

            $karya->delete();

            return redirect()->route('admin.karya.index')
                           ->with('success', 'Karya berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()
                           ->with('error', 'Gagal menghapus karya: ' . $e->getMessage());
        }
    }

    /**
     * Validasi karya (approve/reject)
     */
    public function updateStatus(Request $request, Karya $karya)
    {
        $request->validate([
            'status_validasi' => 'required|in:disetujui,ditolak'
        ]);

        try {
            $karya->update([
                'status_validasi' => $request->status_validasi
            ]);

            $message = $request->status_validasi == 'disetujui' 
                     ? 'Karya berhasil disetujui' 
                     : 'Karya ditolak';

            return redirect()->back()->with('success', $message);
        } catch (\Exception $e) {
            return redirect()->back()
                           ->with('error', 'Gagal mengubah status: ' . $e->getMessage());
        }
    }
}
