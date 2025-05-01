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
          <label for="email">Username Atau Email</label>
          <input type="email" id="email" name="email" placeholder="example@gmail.com" class="input yellow" required />
  
          <label for="password">Kata Sandi</label>
          <div class="password-wrapper">
            <input type="password" id="password" name="password" placeholder="•••••••" class="input" required />
            <span class="toggle-password" onclick="togglePassword('password')">👁️</span>
          </div>
  
          <button type="submit" class="btn white">Log In</button>
          <p class="forgot"><a href="forgot.html">Lupa Kata Sandi?</a></p>
          <button class="btn yellow" onclick="redirectTo('signup.html')">Daftar</button>
  
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
</body>
</html>
