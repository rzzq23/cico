<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

  <body class="login-page">
    <div class="container">
      <div class="header yellow-bg">
        <h2>Selamat Datang Di</h2>
        <img src="{{ asset('assets/images/logo/Logo.png') }}" alt="CICO Logo" class="logo" />
      </div>
  
      <div class="form-container">
        <form method="POST" action="{{ route('login.post') }}">
          @csrf
          
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          
          <label for="email">Username Atau Email</label>
          <input type="email" id="email" name="email" placeholder="example@gmail.com" class="input yellow" required />
  
          <label for="password">Kata Sandi</label>
          <div class="password-wrapper">
            <input type="password" id="password" name="password" placeholder="•••••••" class="input" required />
            <span class="toggle-password" onclick="togglePassword('password')">👁️</span>
          </div>
  
          <button type="submit" class="btn white">Log In</button>
          <p class="forgot"><a href="forgot.html">Lupa Kata Sandi?</a></p>
          <a href="{{ route('register') }}" class="btn yellow">Daftar</a>
  
          <div class="or-social">
            <p>atau daftar dengan</p>
            <div class="icons">
              <img src="{{ asset('assets/facebook-icon.svg') }}" />
              <img src="{{ asset('assets/google-icon.svg') }}" />
            </div>
            <p class="account">Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
          </div>
        </form>
      </div>
    </div>
  
    <script src="{{ asset('assets/js/Script.js') }}"></script>
    <script>
        function togglePassword(id) {
            var passwordField = document.getElementById(id);
            var passwordIcon = document.querySelector('.toggle-password');
            if (passwordField.type === "password") {
                passwordField.type = "text";
                passwordIcon.textContent = "🙈"; // Ubah icon jika password terbuka
            } else {
                passwordField.type = "password";
                passwordIcon.textContent = "👁️"; // Kembalikan icon jika password tersembunyi
            }
        }
    </script>
</body>
</html>
