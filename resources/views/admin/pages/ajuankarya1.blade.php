<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portal TPL SVIPB - Dosen</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="{{ asset('css/admin/ajuankarya1.css') }}">
</head>

<body>
  <div class="nav-container1">
   <img src="{{ asset('images/logo_TPL.png') }}" alt="Logo TPL SVIPB" class="logo-TPL">
  </div>
  </div>
  <div class="nav-container2">
    <h2>Selamat Datang Di Portal Karya Teknologi Rekayasa Perangkat Lunak SV IPB</h2>
    <p>Syntax Error Compile Lagi</p>
  </div>

  <div class="container">
    <div class="sidebar">
      <a href="{{ route('dashboard') }}" class="active">Dashboard</a>
      <a href="{{ route('kelolakarya') }}">Kelola Karya</a>
      <a href="{{ route('infoprodi') }}">Info Prodi</a>
      <a href="{{ route('validasikonten') }}">Validasi Konten</a>
      <a href="{{ route('dosen') }}">Dosen</a>
    </div>

    <div class="content">
      <h2 class="title-halaman">Ajuan Karya</h2>
      <div class="form-container">
        <form id="editForm">
          <label>Judul Karya</label>
          <input type="text" id="judul" placeholder="Masukkan judul karya">
          <label>Deskripsi</label>
          <textarea id="deskripsi" placeholder="Masukkan deskripsi karya"></textarea>
          <label>Tim Pembuat</label>
          <input type="text" id="tim" placeholder="Masukkan nama tim pembuat">
          <label>Pengumpulan (Link/PDF)</label>
          <input type="text" id="pengumpulan" placeholder="Masukkan link atau PDF">
          <button class="btn-submit" type="button" onclick="window.location.href='{{ route('validasikonten') }}'"> Validasi</button>
        </form>
      </div>
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
