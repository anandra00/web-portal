@extends('layouts.app')

@section('title', 'Unggah Karya')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/detailkarya.css') }}">
@endpush

@section('hero')
<section class="hero-section text-white text-center py-5">
    <div class="container">
        <h1 class="display-6">Unggah Karya Mahasiswa</h1>
        <p class="lead">Bagikan Karya Terbaikmu</p>
    </div>
</section>
@endsection

@section('content')
<main class="detail-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card p-4">
                    <h3 class="mb-4">Form Unggah Karya</h3>
                    
                    <form action="{{ route('karya.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        {{-- Judul Karya --}}
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Karya <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="judul" name="judul" required placeholder="Masukkan judul karya">
                        </div>

                        {{-- Kategori --}}
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori <span class="text-danger">*</span></label>
                            <select class="form-select" id="kategori" name="kategori" required>
                                <option value="">Pilih Kategori</option>
                                <option value="Web Development">Web Development</option>
                                <option value="Mobile Apps">Mobile Apps</option>
                                <option value="Data Science">Data Science</option>
                                <option value="IoT">Internet of Things</option>
                                <option value="Game Development">Game Development</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>

                        {{-- Nama Tim/Pembuat --}}
                        <div class="mb-3">
                            <label for="pembuat" class="form-label">Nama Tim/Pembuat <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="pembuat" name="pembuat" required placeholder="Contoh: Tim StockNest">
                        </div>

                        {{-- Email --}}
                        <div class="mb-3">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="pembuat@gmail.com">
                        </div>

                        {{-- Deskripsi --}}
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Karya <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required placeholder="Jelaskan detail tentang karyamu..."></textarea>
                        </div>

                        {{-- Upload Gambar --}}
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Screenshot/Gambar Karya <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
                            <small class="text-muted">Format: JPG, PNG, max 2MB</small>
                        </div>


                        {{-- Buttons --}}
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-tpl">
                                <i class="bi bi-upload me-2"></i>Unggah Karya
                            </button>
                            <a href="{{ route('home') }}" class="btn btn-secondary">
                                <i class="bi bi-x-circle me-2"></i>Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection