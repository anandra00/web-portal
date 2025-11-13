<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah Karya - Portal TPL SVIPB</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="{{ asset('css/admin/kelolakarya1.css') }}">
</head>

<body>
  <div class="nav-container1">
    <img src="{{ asset('images/logo_TPL.png') }}" alt="Logo TPL SVIPB" class="logo-TPL">
  </div>

  <div class="nav-container2">
    <h2>Selamat Datang Di Portal Karya Teknologi Rekayasa Perangkat Lunak SV IPB</h2>
    <p>Syntax Error Compile Lagi</p>
  </div>

  <div class="container">
    <div class="sidebar">
      <a href="{{ route('admin.karya.index') }}">Dashboard</a>
      <a href="{{ route('admin.karya.index') }}" class="active">Kelola Karya</a>
      <a href="#">Info Prodi</a>
      <a href="#">Validasi Konten</a>
      <a href="#">Dosen</a>
    </div>

    <div class="content">
      <h2 class="title-halaman">Tambah Karya</h2>

      {{-- Tampilkan pesan sukses / error --}}
      @if(session('success'))
        <div class="alert success">{{ session('success') }}</div>
      @elseif(session('error'))
        <div class="alert error">{{ session('error') }}</div>
      @endif

      {{-- FORM TAMBAH KARYA --}}
      <div class="form-container">
        <form action="{{ route('admin.karya.store') }}" method="POST" enctype="multipart/form-data">
          @csrf


@section('content')
<div class="content">
  <h2 class="title-halaman">Tambah Karya</h2>

  <div class="form-container">
    <form action="{{ route('admin.karya.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <label>Judul Karya</label>
      <input type="text" name="judul" placeholder="Masukkan judul karya" required>

      <label>Deskripsi</label>
      <textarea name="deskripsi" placeholder="Masukkan deskripsi karya" required></textarea>

      <label>Kategori</label>
      <input type="text" name="kategori" placeholder="Masukkan kategori" required>

      <label>Tahun</label>
      <input type="number" name="tahun" placeholder="Masukkan tahun" required>

      <label>File Karya (PDF/Link)</label>
      <input type="file" name="file_karya" accept=".pdf,image/*">

      <label>Preview (opsional)</label>
      <input type="file" name="preview_karya" accept="image/*">

      <label>Tim Pembuat</label>
      <input type="text" name="tim_pembuat" placeholder="Masukkan nama tim pembuat" required>

      <button class="btn-submit" type="submit">Simpan</button>
    </form>
  </div>
</div>


    
  <footer>
    <div class="footer-container">
      <div class="footer-left">
        <div class="location">
          <i data-feather="map-pin"></i>
          <div class="address">
            <p><strong>KAMPUS BOGOR</strong> — Jl. Raya Pajajaran, Kota Bogor, Jawa Barat 16128</p>
            <p><strong>KAMPUS SUKABUMI</strong> — Jl. Sarasa No. 46, Babakan, Kec. Cibeureum, Kota Sukabumi, Jawa Barat 43142</p>
          </div>
        </div>
      </div>

      <div class="footer-right">
        <div class="contact-item">
          <i data-feather="phone"></i>
          <span>(0251) 8348007</span>
        </div>
        <div class="contact-item">
          <i data-feather="mail"></i>
          <span>sv@apps.ipb.ac.id</span>
        </div>
      </div>
    </div>
    <hr>
    <div class="footer-bottom">
      <p>© 2025 IPB University — Sekolah Vokasi</p>
    </div>
    <script>feather.replace();</script>
  </footer>
</body>
</html>
