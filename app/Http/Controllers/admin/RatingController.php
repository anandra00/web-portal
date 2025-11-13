<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\Karya;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    // Store or update rating (DPPL.FR13)
    public function store(Request $request)
    {
        $request->validate([
            'id_karya' => 'required|exists:karyas,id_karya',
            'nilai' => 'required|integer|min:1|max:5',
        ]);

        $karya = Karya::findOrFail($request->id_karya);

        // Check if karya is approved
        if (!$karya->isApproved()) {
            return back()->withErrors(['message' => 'Karya belum divalidasi']);
        }

        // Check if user already rated
        $existingRating = Rating::where('id_karya', $request->id_karya)
            ->where('id_user', auth()->user()->id_user)
            ->first();

        if ($existingRating) {
            // Update existing rating
            $existingRating->update([
                'nilai' => $request->nilai,
                'tanggal_rating' => now(),
            ]);

            return back()->with('success', 'Rating berhasil diperbarui');
        }

        // Create new rating
        Rating::create([
            'id_rating' => 'RTG' . time() . rand(100, 999),
            'id_karya' => $request->id_karya,
            'id_user' => auth()->user()->id_user,
            'nilai' => $request->nilai,
            'tanggal_rating' => now(),
        ]);

        return back()->with('success', 'Rating berhasil diberikan');
    }

    // Delete rating
    public function destroy($id)
    {
        $rating = Rating::findOrFail($id);

        // Only rating owner or admin can delete
        if (!auth()->user()->isAdmin() && $rating->id_user != auth()->user()->id_user) {
            abort(403, 'Unauthorized action.');
        }

        $rating->delete();

        return back()->with('success', 'Rating berhasil dihapus');
    }
}