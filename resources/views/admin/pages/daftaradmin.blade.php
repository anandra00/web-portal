<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portal Karya Teknologi RPL - SV IPB</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/admin/loginadmin01.css') }}">
</head>
<body>
  <div class="login-container">

    <div class="left-panel">
      <div class="logos">
      </div>
      
      <div class="welcome-text">
        <h1>Selamat datang di...</h1>
        <h2>Portal Karya Teknologi Rekayasa Perangkat Lunak</h2>
        <p>Sekolah Vokasi IPB University</p>
      </div>
    </div>

    <div class="right-panel">
      <div class="login-box">
        <h2>Daftar</h2>
        <p>Daftar untuk dapat mengeksplore karya!</p>
        <form action="dashboard.html" method="POST">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Masukkan email" required>

          <label for="password">Buat kata sandi</label>
          <input type="password" id="password" name="password" placeholder="Buat kata sandi?" required>

          <label for="password">Konfirmasi Kata Sandi</label>
          <input type="password" id="password" name="password" placeholder="Konfirmasi kata sandi" required>

          <button class="login-btn" type="button" onclick="window.location.href='{{ route('dashboard') }}'"> Daftar</button>

          <div class="links">
            <p>Sudah punya akun? <a href="loginadmin01.html" class="signup">Masuk</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
