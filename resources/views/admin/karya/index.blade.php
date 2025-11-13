<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portal TPL SVIPB - Kelola Karya</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="{{ asset('css/admin/kelolakarya.css') }}">
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
      <a href="{{ route('admin.karya.index') }}" class="active">Kelola Karya</a>
      <a href="#">Dashboard</a>
      <a href="#">Info Prodi</a>
      <a href="#">Validasi Konten</a>
      <a href="#">Dosen</a>
    </div>

    <div class="content">
      <div class="grid-container">
        {{-- Karya Sukses --}}
        <div class="column sukses">
          <h3>Karya Disetujui</h3>

          @forelse($karya->where('status_validasi', 'disetujui') as $item)
            <div class="card">
              <div class="info">
                <i data-feather="file-text"></i>
                <div>
                  <strong>{{ $item->judul }}</strong><br>
                  <small>{{ $item->user->name ?? 'Anonim' }}</small>
                </div>
              </div>
              <div class="right-side">
                <span class="status sukses">Disetujui</span>
                <button class="edit-btn" 
                        type="button" 
                        onclick="window.location.href='{{ route('admin.karya.show', $item->id) }}'">
                        Lihat
                </button>
              </div>
            </div>
          @empty
            <p>Tidak ada karya disetujui.</p>
          @endforelse
        </div>

        {{-- Karya Ditolak --}}
        <div class="column ditolak">
          <h3>Karya Ditolak</h3>

          @forelse($karya->where('status_validasi', 'ditolak') as $item)
            <div class="card">
              <div class="info">
                <i data-feather="file-text"></i>
                <div>
                  <strong>{{ $item->judul }}</strong><br>
                  <small>{{ $item->user->name ?? 'Anonim' }}</small>
                </div>
              </div>
              <div class="right-side">
                <span class="status ditolak">Ditolak</span>
                <button class="edit-btn" 
                        type="button" 
                        onclick="window.location.href='{{ route('admin.karya.show', $item->id) }}'">
                        Lihat
                </button>
              </div>
            </div>
          @empty
            <p>Tidak ada karya ditolak.</p>
          @endforelse
        </div>
      </div>

      <button class="btn-tambahkarya" type="button" onclick="window.location.href='{{ route('admin.karya.create') }}'">
        + Tambah Karya
      </button>
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
