@extends('layouts.app')

@section('title', 'Karya Mahasiswa')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/karya.css') }}">
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
<section class="info-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <header class="info-header text-center mb-4">
                    <h2>Kumpulan Karya Mahasiswa TPL SV IPB</h2>
                    <hr>
                </header>
            
                {{-- Search Bar --}}
                <div class="row justify-content-center mb-4">
                    <div class="col-md-8 col-lg-6">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control" placeholder="Cari karya..." id="searchInput">
                        </div>
                    </div>
                </div>
                    
                {{-- Carousel --}}
                <div id="karyaCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        {{-- Slide 1 --}}
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-4 mb-4">
                                    <div class="card h-100 shadow-sm border-0">
                                        <img src="https://placehold.co/600x400/333/white?text=Aplikasi+1" class="card-img-top" alt="Karya">
                                        <div class="card-body d-flex flex-column">
                                            <span class="badge text-white mb-2" style="background-color: var(--warna-utama);">Web Development</span>
                                            <h5 class="card-title">Sistem Distribusi Obat</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Oleh: Tim StockNest</h6>
                                            <div class="text-warning mb-2">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <h6 class="mt-2 text-muted">5.0 (200 ulasan)</h6>
                                            </div>
                                            <a href="{{ route('detailkarya', 1) }}" class="btn btn-tpl btn-sm mt-auto">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mb-4">
                                    <div class="card h-100 shadow-sm border-0">
                                        <img src="https://placehold.co/600x400/333/white?text=Aplikasi+2" class="card-img-top" alt="Karya">
                                        <div class="card-body d-flex flex-column">
                                            <span class="badge text-white mb-2" style="background-color: var(--warna-utama);">Data Science</span>
                                            <h5 class="card-title">Aplikasi Manajemen Data</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Oleh: Tim DataPro</h6>
                                            <div class="text-warning mb-2">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                                <h6 class="mt-2 text-muted">4.5 (150 ulasan)</h6>
                                            </div>
                                            <a href="{{ route('detailkarya', 2) }}" class="btn btn-tpl btn-sm mt-auto">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mb-4">
                                    <div class="card h-100 shadow-sm border-0">
                                        <img src="https://placehold.co/600x400/333/white?text=Aplikasi+3" class="card-img-top" alt="Karya">
                                        <div class="card-body d-flex flex-column">
                                            <span class="badge text-white mb-2" style="background-color: var(--warna-utama);">Mobile Apps</span>
                                            <h5 class="card-title">BookNest - Perpustakaan</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Oleh: Tim BookWorms</h6>
                                            <div class="text-warning mb-2">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <h6 class="mt-2 text-muted">4.0 (120 ulasan)</h6>
                                            </div>
                                            <a href="{{ route('detailkarya', 3) }}" class="btn btn-tpl btn-sm mt-auto">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 mb-4">
                                    <div class="card h-100 shadow-sm border-0">
                                        <img src="https://placehold.co/600x400/555/white?text=Aplikasi+4" class="card-img-top" alt="Karya">
                                        <div class="card-body d-flex flex-column">
                                            <span class="badge text-white mb-2" style="background-color: var(--warna-utama);">IoT</span>
                                            <h5 class="card-title">Smart Farm System</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Oleh: Tim Agro</h6>
                                            <div class="text-warning mb-2">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                                <i class="bi bi-star"></i>
                                                <h6 class="mt-2 text-muted">3.5 (80 ulasan)</h6>
                                            </div>
                                            <a href="{{ route('detailkarya', 4) }}" class="btn btn-tpl btn-sm mt-auto">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mb-4">
                                    <div class="card h-100 shadow-sm border-0">
                                        <img src="https://placehold.co/600x400/555/white?text=Aplikasi+5" class="card-img-top" alt="Karya">
                                        <div class="card-body d-flex flex-column">
                                            <span class="badge text-white mb-2" style="background-color: var(--warna-utama);">Game Dev</span>
                                            <h5 class="card-title">Educational Game</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Oleh: Tim GameMakers</h6>
                                            <div class="text-warning mb-2">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <h6 class="mt-2 text-muted">4.0 (110 ulasan)</h6>
                                            </div>
                                            <a href="{{ route('detailkarya', 5) }}" class="btn btn-tpl btn-sm mt-auto">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mb-4">
                                    <div class="card h-100 shadow-sm border-0">
                                        <img src="https://placehold.co/600x400/555/white?text=Aplikasi+6" class="card-img-top" alt="Karya">
                                        <div class="card-body d-flex flex-column">
                                            <span class="badge text-white mb-2" style="background-color: var(--warna-utama);">AI/ML</span>
                                            <h5 class="card-title">Crop Disease Detection</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Oleh: Tim AI Squad</h6>
                                            <div class="text-warning mb-2">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <h6 class="mt-2 text-muted">5.0 (250 ulasan)</h6>
                                            </div>
                                            <a href="{{ route('detailkarya', 6) }}" class="btn btn-tpl btn-sm mt-auto">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Slide 2 --}}
                        <div class="carousel-item">
                            <div class="row">
                                @for($i = 7; $i <= 12; $i++)
                                <div class="col-4 mb-4">
                                    <div class="card h-100 shadow-sm border-0">
                                        <img src="https://placehold.co/600x400/777/white?text=Aplikasi+{{ $i }}" class="card-img-top" alt="Karya">
                                        <div class="card-body d-flex flex-column">
                                            <span class="badge text-white mb-2" style="background-color: var(--warna-utama);">Kategori</span>
                                            <h5 class="card-title">Judul Karya {{ $i }}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Oleh: Tim {{ $i }}</h6>
                                            <div class="text-warning mb-2">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <h6 class="mt-2 text-muted">4.0 (100 ulasan)</h6>
                                            </div>
                                            <a href="{{ route('detailkarya', $i) }}" class="btn btn-tpl btn-sm mt-auto">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>

                    {{-- Carousel Controls --}}
                    <button class="carousel-control-prev" type="button" data-bs-target="#karyaCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#karyaCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection