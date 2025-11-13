@extends('layouts.app')

@section('judul', 'Tentang TPL SVIPB')

@section('nav_tentang', 'active') {{-- Menandai Tentang sebagai aktif --}}

@push('styles')
<link rel="stylesheet" href="{{ asset('css/tentang.css') }}">
@endpush

{{-- CATATAN: Blok @section('hero') Dihapus karena Hero Section sudah di Layout Master --}}

@section('content')
<main class="tentang-section">
    <div class="profile-video"> 
        <div class="ratio ratio-16x9 shadow-sm" style="border-radius: 8px; max-height: 450px;">
            <video controls autoplay muted loop style="width: 100%; height: 100%; object-fit: cover;">
                
                {{-- KOREKSI: Menggunakan asset() dengan path video  --}}
                <source src="{{ asset('videos/TEKNOLOGI REKAYASA PERANGKAT LUNAK - Video Profil 2025 (1).mp4') }}" type="video/mp4">
                
                Browser Anda tidak mendukung tag video.
            </video>
        </div>
    </div>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                
                <div class="info-box">
                    <div class="info-box-header">
                        <h3>Visi</h3>
                    </div>
                    <div class="info-box-body">
                        <p>Menjadi program studi yang terdepan dan unggul di Indonesia dalam menyiapkan tenaga profesional sebagai Sarjana Terapan bidang Teknologi Rekayasa Perangkat Lunak yang ikut mendukung penerapan teknologi di bidang pertanian, kelautan, dan biosains tropika tahun 2030.</p>
                    </div>
                </div>

                <div class="info-box">
                    <div class="info-box-header">
                        <h3>Misi</h3>
                    </div>
                    <div class="info-box-body">
                        <ol>
                            <li>Menyelenggarakan pendidikan vokasi yang berkualitas untuk menyiapkan tenaga yang terampil dan terdidik di bidang Teknologi Rekayasa Perangkat Lunak yang profesional dan tanggap terhadap perkembangan zaman dengan berorientasi pada kebutuhan dunia kerja.</li>
                            <li>Menyelenggarakan penelitian terapan di bidang informatika yang sesuai dengan kebutuhan, ilmu dan teknologi serta menyelesaikan permasalahan di masyarakat khususnya pertanian, kelautan, dan biosains tropika.</li>
                            <li>Menyelenggarakan pengabdian kepada masyarakat dalam menyebarluaskan hasil pendidikan dan hasil penelitian terapan di bidang informatika.</li>
                            <li>Menjalin kerjasama dengan lembaga pemerintahan dan/atau instansi terkait dengan pencapaian kompetensi mahasiswa, penelitian terapan, pengabdian kepada masyarakat, dan lapangan pekerjaan bagi lulusan.</li>
                        </ol>
                    </div>
                </div>

                <div class="info-box">
                    <div class="info-box-header">
                        <h3>Capaian</h3>
                    </div>
                    <div class="info-box-body">
                        <ol>
                            <li>Mampu menunjukkan perilaku sesuai nilai agama, hukum, kemanusiaan, dan etika sesuai bidang keprofesian perangkat lunak.</li>
                            <li>Mampu melibatkan diri dalam pekerjaan kelompok dan individu secara bertanggungjawab, disiplin, serta berintegritas.</li>
                            <li>Mampu menganalisis kebutuhan guna mendukung penyelesaian permasalahan di bidang teknologi informatika khususnya pada pertanian, kelautan, biosains tropika, dan ekosistem.</li>
                            <li>Mampu mengimplementasi Solusi permasalahan Teknologi Informatika yang berjiwa kewirausahaan.</li>
                            <li>Mampu menggunakan teknik dan perangkat lunak yang relevan serta menerapkan keahlian pemecahan masalah (problem solving).</li>
                            <li>Mampu mempresentasikan hasil pekerjaan dalam bentuk lisan dan/atau tulisan sesuai bidang kajian.</li>
                            <li>Mampu menerapkan metode pengembangan perangkat lunak sesuai standar dan metodologi agrosystem.</li>
                            <li>Mampu menciptakan desain dan produk berbasis teknologi secara interdisiplin.</li>
                            <li>Mampu membangun portofolio visualisasi data.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection