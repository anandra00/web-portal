@extends('layouts.app')

@section('title', 'Dosen')
@section('nav_dosen', 'active') {{-- Menandai Dosen sebagai halaman aktif --}}

@push('styles')
<link rel="stylesheet" href="{{ asset('css/dosen.css') }}">
@endpush

@section('content')
<main class="dosen-section info-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <header class="info-header">
                    <h2>Dosen Teknologi Rekayasa Perangkat Lunak SV IPB </h2>
                    <hr>
                </header>
            
                <div class="row">
                    
                    {{-- Dosen 1: Bu Medha (Medhanita Dewi Renanti, S.kom., M.Kom.) --}}
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card dosen-card h-100 shadow-sm border-0 text-center">
                            <div class="card-body d-flex flex-column align-items-center">
                                {{-- FOTO: Bu Medha.png --}}
                                <img src="{{ asset('images/Bu Medha.png') }}" class="dosen-img rounded-circle mb-3" alt="Foto Bu Medha">
                                <h5 class="card-title mb-1">Medhanita Dewi Renanti, S.kom., M.Kom.</h5>
                                <p class="text-muted small mb-2">Teknologi Rekayasa Perangkat Lunak</p>
                                <span class="badge badge-aktif mt-auto">Aktif</span>
                            </div>
                        </div>
                    </div>

                    {{-- Dosen 2: P Adit (Aditya Wicaksono, S.Kom., M,Kom.) --}}
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card dosen-card h-100 shadow-sm border-0 text-center">
                            <div class="card-body d-flex flex-column align-items-center">
                                {{-- FOTO: P adit.png --}}
                                <img src="{{ asset('images/P adit.png') }}" class="dosen-img rounded-circle mb-3" alt="Foto P Adit">
                                <h5 class="card-title mb-1">Aditya Wicaksono, S.Kom., M,Kom.</h5>
                                <p class="text-muted small mb-2">Teknologi Rekayasa Perangkat Lunak</p>
                                <span class="badge badge-aktif mt-auto">Aktif</span>
                            </div>
                        </div>
                    </div>

                    {{-- Dosen 3: Bu Sofiyanti (Sofiyanti Indriasari, S.Kom.,M.Kom.) --}}
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card dosen-card h-100 shadow-sm border-0 text-center">
                            <div class="card-body d-flex flex-column align-items-center">
                                {{-- FOTO: Bu Sofiyanti.png --}}
                                <img src="{{ asset('images/Bu Sofiyanti.png') }}" class="dosen-img rounded-circle mb-3" alt="Foto Bu Sofiyanti">
                                <h5 class="card-title mb-1">Sofiyanti Indriasari, S.Kom.,M.Kom.</h5>
                                <p class="text-muted small mb-2">Teknologi Rekayasa Perangkat Lunak</p>
                                <span class="badge badge-aktif mt-auto">Aktif</span>
                            </div>
                        </div>
                    </div>

                    {{-- Dosen 4: Bu Aziezah (Nur Aziezah, S.Si., M.Si.) --}}
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card dosen-card h-100 shadow-sm border-0 text-center">
                            <div class="card-body d-flex flex-column align-items-center">
                                {{-- FOTO: Bu aziezah.png --}}
                                <img src="{{ asset('images/Bu aziezah.png') }}" class="dosen-img rounded-circle mb-3" alt="Foto Bu Aziezah">
                                <h5 class="card-title mb-1">Nur Aziezah, S.Si., M.Si.</h5>
                                <p class="text-muted small mb-2">Teknologi Rekayasa Perangkat Lunak</p>
                                <span class="badge badge-aktif mt-auto">Aktif</span>
                            </div>
                        </div>
                    </div>

                    {{-- Dosen 5: Bu Irma (Dra. Irma Rasita Gloria Barus, M.A.) --}}
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card dosen-card h-100 shadow-sm border-0 text-center">
                            <div class="card-body d-flex flex-column align-items-center">
                                {{-- FOTO: Bu Irma.png --}}
                                <img src="{{ asset('images/Bu Irma.png') }}" class="dosen-img rounded-circle mb-3" alt="Foto Bu Irma">
                                <h5 class="card-title mb-1">Dra. Irma Rasita Gloria Barus, M.A.</h5>
                                <p class="text-muted small mb-2">Teknologi Rekayasa Perangkat Lunak</p>
                                <span class="badge badge-aktif mt-auto">Aktif</span>
                            </div>
                        </div>
                    </div>

                    {{-- Dosen 6: Bu Ami (Amata Fami, M.Ds.) --}}
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card dosen-card h-100 shadow-sm border-0 text-center">
                            <div class="card-body d-flex flex-column align-items-center">
                                {{-- FOTO: Bu Ami.png --}}
                                <img src="{{ asset('images/Bu Ami.png') }}" class="dosen-img rounded-circle mb-3" alt="Foto Bu Ami">
                                <h5 class="card-title mb-1">Amata Fami, M.Ds.</h5>
                                <p class="text-muted small mb-2">Teknologi Rekayasa Perangkat Lunak</p>
                                <span class="badge badge-aktif mt-auto">Aktif</span>
                            </div>
                        </div>
                    </div>

                    {{-- Dosen 7: Bu Gema (Gema Parasti Mindara S.Si., M.Kom.) --}}
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card dosen-card h-100 shadow-sm border-0 text-center">
                            <div class="card-body d-flex flex-column align-items-center">
                                <img src="{{ asset('images/Bu Gema.png') }}" class="dosen-img rounded-circle mb-3" alt="Foto Bu Gema">
                                <h5 class="card-title mb-1">Gema Parasti Mindara S.Si., M.Kom.</h5>
                                <p class="text-muted small mb-2">Teknologi Rekayasa Perangkat Lunak</p>
                                <span class="badge badge-aktif mt-auto">Aktif</span>
                            </div>
                        </div>
                    </div>

                    {{-- Dosen 8: Bu Lathifunnisa (Lathifunnisa Fathonah S.ST,.M.T.) --}}
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card dosen-card h-100 shadow-sm border-0 text-center">
                            <div class="card-body d-flex flex-column align-items-center">
                                <img src="{{ asset('images/Bu Nisa.png') }}" class="dosen-img rounded-circle mb-3" alt="Foto Bu Lathifunnisa">
                                <h5 class="card-title mb-1">Lathifunnisa Fathonah S.ST,.M.T.</h5>
                                <p class="text-muted small mb-2">Teknologi Rekayasa Perangkat Lunak</p>
                                <span class="badge badge-aktif mt-auto">Aktif</span>
                            </div>
                        </div>
                    </div>

                    {{-- Dosen 9: Pak Nasir (Muhammad Nasir S.T.,M.Kom.) --}}
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card dosen-card h-100 shadow-sm border-0 text-center">
                            <div class="card-body d-flex flex-column align-items-center">
                                <img src="{{ asset('images/Pak Nasir.png') }}" class="dosen-img rounded-circle mb-3" alt="Foto Pak Nasir">
                                <h5 class="card-title mb-1">Muhammad Nasir S.T.,M.Kom.</h5>
                                <p class="text-muted small mb-2">Teknologi Rekayasa Perangkat Lunak</p>
                                <span class="badge badge-aktif mt-auto">Aktif</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection