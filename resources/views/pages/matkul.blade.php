@extends('layouts.app')

{{-- 1. Judul halaman --}}
@section('title', 'Mata Kuliah - Portal TPL SVIPB')

{{-- 2. Penanda navigasi aktif --}}
@section('nav_matkul', 'active') 

@push('styles')
<link rel="stylesheet" href="{{ asset('css/matkul.css') }}">
@endpush

{{-- 3. INI ADALAH SLOT KONTEN UTAMA (@yield('content') di app.blade.php) --}}
@section('content')
<main class="dosen-section info-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <header class="info-header">
                    <h2>Mata Kuliah Teknologi Rekayasa Perangkat Lunak SV IPB </h2>
                    <hr>
                </header>

                {{-- Semester 1 & 2 --}}
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card semester-card shadow-sm">
                            <div class="card-header">
                                <h3>Semester 1</h3>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr><th>Kode</th><th>Mata Kuliah</th><th>SKS</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>TPL1101</td><td>Berpikir Komputasional</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL1102</td><td>Dasar Pemrograman</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL2101</td><td>Logika Informatika</td><td>3(1-2)</td></tr>
                                        <tr><td>SVI110</td><td>Bahasa Inggris</td><td>2(1-1)</td></tr>
                                        <tr><td>SVI1101</td><td>Pendidikan Agama Islam</td><td>3(2-1)</td></tr>
                                        <tr><td>SVI1102</td><td>Pendidikan Agama Katolik</td><td>3(2-1)</td></tr>
                                        <tr><td>SVI1103</td><td>Pendidikan Agama Protestan</td><td>3(2-1)</td></tr>
                                        <tr><td>SVI1104</td><td>Pendidikan Agama Hindu</td><td>3(2-1)</td></tr>
                                        <tr><td>SVI1105</td><td>Pendidikan Agama Budha</td><td>3(2-1)</td></tr>
                                        <tr><td>SVI1106</td><td>Pendidikan Agama Konghucu Kepercayaan Kepada Tuhan Yang Maha Esa</td><td>3(2-1)</td></tr>
                                        <tr><td>SVI1109</td><td>Bahasa Indonesia</td><td>2(1-1)</td></tr>
                                        <tr class="table-total"><td>Total</td><td></td><td>16(7-9)</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 mb-4">
                        <div class="card semester-card shadow-sm">
                            <div class="card-header">
                                <h3>Semester 2</h3>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr><th>Kode</th><th>Mata Kuliah</th><th>SKS</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>TPL1107</td><td>Matematika Terapan</td><td>3(2-1)</td></tr>
                                        <tr><td>TPL1109</td><td>Algoritma dan Struktur Data</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL1105</td><td>Teknologi Multimedia</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL2102</td><td>Perancangan Web</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL1207</td><td>Probabilitas dan Statistika</td><td>2(1-1)</td></tr>
                                        <tr><td>SVI1107</td><td>Pendidikan Pancasila</td><td>2(1-0)</td></tr>
                                        <tr><td>SVI1108</td><td>Pendidikan Kewarganegaraan</td><td>2(1-1)</td></tr>
                                        <tr><td>MNI1101</td><td>Pertanian Inovatif</td><td>2(2-0)</td></tr>
                                        <tr class="table-total"><td>Total</td><td></td><td>19(10-9)</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Semester 3 & 4 --}}
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card semester-card shadow-sm">
                            <div class="card-header">
                                <h3>Semester 3</h3>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr><th>Kode</th><th>Mata Kuliah</th><th>SKS</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>TPL1112</td><td>Rekayasa Kebutuhan Perangkat Lunak</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL1202</td><td>Matematika Informatika</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL1103</td><td>Komunikasi Data dan Jaringan</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL2201</td><td>Pengalaman Pengguna</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL1206</td><td>Analisis dan Perancangan Perangkat Lunak</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL1111</td><td>Sistem Basis Data</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL2202</td><td>Keamanan Perangkat Lunak</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL1110</td><td>Pemrograman Berorientasi Objek</td><td>3(1-2)</td></tr>
                                        <tr class="table-total"><td>Total</td><td></td><td>24(9-15)</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 mb-4">
                        <div class="card semester-card shadow-sm">
                            <div class="card-header">
                                <h3>Semester 4</h3>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr><th>Kode</th><th>Mata Kuliah</th><th>SKS</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>TPL1209</td><td>Sistem Informasi</td><td>2(1-1)</td></tr>
                                        <tr><td>TPL1205</td><td>Komputasi Awan</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL1210</td><td>Teknologi Virtual</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL1212</td><td>Pengembangan Karakter dan Etika Profesional</td><td>2(1-1)</td></tr>
                                        <tr><td>TPL2306</td><td>Technopreneurship</td><td>2(1-1)</td></tr>
                                        <tr><td>TPL1203</td><td>Pemrograman Web</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL1204</td><td>Pemrograman Mobile</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL1301</td><td>Analisis dan Visualisasi Data</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL1304</td><td>Teknik Penambangan data</td><td>3(1-2)</td></tr>
                                        <tr class="table-total"><td>Total</td><td></td><td>24(9-15)</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Semester 5 & 6 --}}
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card semester-card shadow-sm">
                            <div class="card-header">
                                <h3>Semester 5</h3>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr><th>Kode</th><th>Mata Kuliah</th><th>SKS</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>TPL1303</td><td>Manajemen Proyek Teknologi Informasi</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL1302</td><td>Pemrosesan Citra Terapan</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL1309</td><td>Teknologi Big Data</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL1211</td><td>Sistem Informasi Geografis</td><td>3(1-2)</td></tr>
                                        <tr><td>TPL2310</td><td>Visual Komputer Cerdas</td><td>2(1-1)</td></tr>
                                        <tr><td>TPL1305</td><td>Pengujian dan Penjaminan Kualitas Perangkat Lunak</td><td>3(1-2)</td></tr>
                                        <tr class="table-total"><td>Total</td><td></td><td>17(6-11)</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 mb-4">
                        <div class="card semester-card shadow-sm">
                            <div class="card-header">
                                <h3>Semester 6</h3>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr><th>Kode</th><th>Mata Kuliah</th><th>SKS</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>-</td><td>Enrichment Course</td><td>22(0-22)</td></tr>
                                        <tr class="table-total"><td>Total</td><td></td><td>22(0-22)</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Semester 7 & 8 --}}
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card semester-card shadow-sm">
                            <div class="card-header">
                                <h3>Semester 7</h3>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr><th>Kode</th><th>Mata Kuliah</th><th>SKS</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>SVI2401</td><td>Immersive Program</td><td>14(0-14)</td></tr>
                                        <tr><td>SVI2402</td><td>Work Plan</td><td>1(0-1)</td></tr>
                                        <tr class="table-total"><td>Total</td><td></td><td>15(0-15)</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 mb-4">
                        <div class="card semester-card shadow-sm">
                            <div class="card-header">
                                <h3>Semester 8</h3>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr><th>Kode</th><th>Mata Kuliah</th><th>SKS</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>SVI12403</td><td>Seminar</td><td>1(0-1)</td></tr>
                                        <tr><td>SVI12404</td><td>Laporan Proyek Akhir</td><td>6(0-6)</td></tr>
                                        <tr class="table-total"><td>Total</td><td></td><td>7(0-7)</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection