@extends('layouts.app')

@section('title', 'Agridation Festival')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/berita.css') }}">
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
<main class="article-section info-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                
                <h1 class="article-title mb-3">Agridation Festival</h1>
                
                <div class="article-meta mb-4">
                    <span class="text-muted"><i class="bi bi-person-fill me-1"></i> Admin Portal</span>
                    <span class="text-muted ms-3"><i class="bi bi-calendar-event-fill me-1"></i> 24 Oktober 2025</span>
                </div>

                <img src="https://placehold.co/800x400/e9ecef/333?text=Agridation+Festival" alt="Gambar Agridation Festival" class="img-fluid rounded article-image mb-4">

                <div class="article-content">
                    <p>Tim dari TPL SVIPB berhasil mempersembahkan aplikasi karya inovatif mereka dalam ajang bergengsi Agridation Festival. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    
                    <p>Aplikasi yang diberi nama "AgriConnect" ini bertujuan untuk menjembatani komunikasi antara petani dengan pasar secara langsung. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    
                    <blockquote class="blockquote my-4">
                        <p>"Kami berharap AgriConnect dapat membantu meningkatkan kesejahteraan petani dan efisiensi rantai pasok pertanian," ujar ketua tim.</p>
                    </blockquote>
                    
                    <p>Festival ini menjadi ajang pembuktian bahwa mahasiswa TPL SV IPB mampu menghasilkan solusi teknologi yang relevan dengan kebutuhan sektor pertanian modern. Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula.</p>
                </div>

                <hr class="my-4">

                <div class="share-section">
                    <strong>Bagikan Artikel:</strong>
                    <a href="#" class="ms-2 share-icon"><i class="bi bi-facebook fs-4"></i></a>
                    <a href="#" class="ms-2 share-icon"><i class="bi bi-twitter fs-4"></i></a>
                    <a href="#" class="ms-2 share-icon"><i class="bi bi-whatsapp fs-4"></i></a>
                </div>

            </div>
        </div>
    </div>
</main>
@endsection