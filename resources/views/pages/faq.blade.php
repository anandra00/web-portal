@extends('layouts.app')

@section('title', 'FAQ')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/faq.css') }}">
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
<main class="faq-section info-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <header class="info-header">
                    <h2>Frequently Asked Questions (FAQ)</h2>
                    <hr>
                </header>

                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                Apa itu Program Studi Teknologi Rekayasa Perangkat Lunak (TPL)?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <strong>Jawaban:</strong> TPL adalah program studi vokasi (D4/Sarjana Terapan) di Sekolah Vokasi IPB University yang fokus pada pengembangan perangkat lunak, mulai dari analisis kebutuhan, desain, implementasi, pengujian, hingga pemeliharaan, dengan penekanan pada aplikasi di bidang pertanian, kelautan, dan biosains tropika.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                Apakah karya mahasiswa di portal ini dapat diunduh?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <strong>Jawaban:</strong> Kebijakan pengunduhan karya dapat bervariasi tergantung pada jenis karya dan izin dari mahasiswa pembuatnya. Beberapa karya mungkin tersedia untuk diunduh (misalnya laporan atau demo aplikasi), sementara yang lain mungkin hanya bisa dilihat atau diakses melalui tautan eksternal. Silakan periksa detail pada setiap halaman karya.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                Apa perbedaan TPL dengan program studi Informatika?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <strong>Jawaban:</strong> TPL (Sarjana Terapan/D4) lebih menekankan pada aspek praktis dan penerapan langsung teknologi rekayasa perangkat lunak untuk menghasilkan solusi siap pakai. Program studi Informatika (Sarjana/S1) seringkali lebih fokus pada aspek teoritis, fundamental ilmu komputer, dan penelitian yang lebih mendalam. Keduanya saling melengkapi di dunia industri.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                Apakah mahasiswa bisa langsung mengunggah karyanya ke portal?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <strong>Jawaban:</strong> Umumnya, proses pengunggahan karya melibatkan verifikasi atau kurasi oleh pihak pengelola portal atau dosen pembimbing untuk memastikan kualitas dan kelayakan konten. Mahasiswa mungkin perlu mengirimkan karyanya melalui prosedur tertentu yang ditetapkan oleh program studi. Informasi lebih lanjut dapat ditanyakan kepada koordinator portal atau dosen terkait.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection