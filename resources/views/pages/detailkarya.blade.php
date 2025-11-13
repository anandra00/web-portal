@extends('layouts.app')

@section('title', 'Detail Karya - BookNest')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/detailkarya.css') }}">
@endpush

@section('hero')
<section class="hero-section text-white text-center py-5">
    <div class="container">
        <h1 class="display-6">Selamat Datang Di Portal Teknologi Rekayasa Perangkat Lunak SV IPB</h1>
        <p class="lead">Syntax Error Compile Lagi</p>
    </div>
</section>
@endsection

@section('content')
<main class="detail-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                
                <div class="row g-4">
    
                    {{-- Main Content --}}
                    <div class="col-lg-8">
                        {{-- Author Card --}}
                        <div class="card p-3 mb-4 author-card">
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/80x80" alt="Avatar Penulis" class="avatar">
                                <div class="ms-3">
                                    <h5 class="mb-0 fw-bold">Misoel Dandi</h5>
                                    <small class="text-muted">pembuat@gmail.com</small>
                                </div>
                                <div class="rating-box text-end ms-auto">
                                    <h1 class="display-5 fw-bold mb-0">4.7</h1>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        {{-- Project Card --}}
                        <div class="card p-4 project-card">
                            <h2 class="h4 fw-bold">BookNest – Aplikasi Perpustakaan Digital</h2>
                            <img src="https://placehold.co/800x400/333/fff?text=Screenshot+Kode" alt="Screenshot Proyek" class="img-fluid rounded my-3">
                            
                            <h5 class="fw-bold">Deskripsi</h5>
                            <p>
                                BookNest adalah aplikasi perpustakaan digital yang memudahkan pengguna mencari, membaca, dan meminjam buku secara online. Dengan fitur pencarian cepat, rekomendasi bacaan, serta akses baca online maupun offline, aplikasi ini hadir untuk meningkatkan minat baca dan mempermudah pengelolaan koleksi secara modern.
                            </p>

                            <h5 class="fw-bold mt-4">Fitur Utama</h5>
                            <ul>
                                <li>Pencarian buku yang cepat dan akurat</li>
                                <li>Sistem rekomendasi berbasis AI</li>
                                <li>Akses offline untuk buku yang sudah diunduh</li>
                                <li>Dashboard admin untuk manajemen koleksi</li>
                                <li>Notifikasi pengingat pengembalian buku</li>
                            </ul>

                            <h5 class="fw-bold mt-4">Teknologi yang Digunakan</h5>
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <span class="badge bg-primary">Laravel</span>
                                <span class="badge bg-info">Vue.js</span>
                                <span class="badge bg-success">MySQL</span>
                                <span class="badge bg-warning text-dark">Bootstrap</span>
                                <span class="badge bg-danger">Redis</span>
                            </div>

                            <div class="mt-4">
                                <a href="#" class="btn btn-tpl me-2"><i class="bi bi-globe me-2"></i>Demo Live</a>
                                <a href="#" class="btn btn-outline-secondary"><i class="bi bi-github me-2"></i>GitHub</a>
                            </div>
                        </div>
                    </div>
    
                    {{-- Sidebar --}}
                    <div class="col-lg-4">
                        {{-- Feedback Form --}}
                        <div class="card p-3 mb-4">
                            <h5 class="fw-bold">Tulis Umpan Balik</h5>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div class="stars-input text-muted fs-4">
                                    <i class="bi bi-star" data-value="1"></i>
                                    <i class="bi bi-star" data-value="2"></i>
                                    <i class="bi bi-star" data-value="3"></i>
                                    <i class="bi bi-star" data-value="4"></i>
                                    <i class="bi bi-star" data-value="5"></i>
                                </div>
                                <span class="fw-bold text-muted" id="rating-display">N/A</span>
                            </div>
                            <textarea class="form-control my-2" rows="5" placeholder="Tulis reviewmu disini..."></textarea>
                            <input type="hidden" name="rating" id="rating-value" value="0">
                            <button class="btn btn-tpl w-100">Kirim</button>
                        </div>
    
                        {{-- Review 1 --}}
                        <div class="card p-3 mb-3 feedback-card">
                            <div class="d-flex align-items-center mb-2">
                                <img src="https://placehold.co/50x50" alt="Avatar Reviewer" class="avatar-sm">
                                <div class="ms-3">
                                    <h6 class="mb-0 fw-bold">Dandi</h6>
                                    <small class="text-muted">28 September 2025</small>
                                </div>
                                <div class="stars-display ms-auto text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star text-muted"></i>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                            </div>
                            <p class="mb-0 small">
                                BookNest sangat memudahkan tugas kuliah. Cari jurnal dan e-book jadi cepat, fitur rekomendasinya juga sering kasih bacaan relevan.
                            </p>
                        </div>
    
                        {{-- Review 2 --}}
                        <div class="card p-3 mb-3 feedback-card">
                            <div class="d-flex align-items-center mb-2">
                                <img src="https://placehold.co/50x50" alt="Avatar Reviewer" class="avatar-sm">
                                <div class="ms-3">
                                    <h6 class="mb-0 fw-bold">Salsabila</h6>
                                    <small class="text-muted">28 September 2025</small>
                                </div>
                                <div class="stars-display ms-auto text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                            </div>
                            <p class="mb-0 small">
                                Dashboard adminnya rapi dan mempermudah manajemen koleksi digital. Hanya berharap ada fitur laporan lebih detail.
                            </p>
                        </div>

                        {{-- Review 3 --}}
                        <div class="card p-3 mb-3 feedback-card">
                            <div class="d-flex align-items-center mb-2">
                                <img src="https://placehold.co/50x50" alt="Avatar Reviewer" class="avatar-sm">
                                <div class="ms-3">
                                    <h6 class="mb-0 fw-bold">Rizky</h6>
                                    <small class="text-muted">25 September 2025</small>
                                </div>
                                <div class="stars-display ms-auto text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                            <p class="mb-0 small">
                                Aplikasi yang sangat membantu! Interface-nya user friendly dan loading-nya cepat. Recommended banget buat perpustakaan digital!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@push('scripts')
<script>
// Star Rating System
document.querySelectorAll('.stars-input i').forEach(star => {
    star.addEventListener('click', function() {
        const value = this.getAttribute('data-value');
        document.getElementById('rating-value').value = value;
        document.getElementById('rating-display').textContent = value + '.0';
        
        // Reset all stars
        document.querySelectorAll('.stars-input i').forEach(s => {
            s.classList.remove('bi-star-fill');
            s.classList.add('bi-star');
        });
        
        // Fill stars up to clicked value
        for(let i = 1; i <= value; i++) {
            document.querySelector(`.stars-input i[data-value="${i}"]`).classList.add('bi-star-fill');
            document.querySelector(`.stars-input i[data-value="${i}"]`).classList.remove('bi-star');
        }
    });
});
</script>
@endpush
@endsection