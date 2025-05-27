<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body>
  <div class="login-container">
    <div class="top-section">
        <h2>Selamat Datang Di</h2>
        <img src="{{ asset('assets/images/logo/Logo.png') }}" alt="CICO Logo" class="logo" />
      </div>
  
      <div class="form-section">
        <form method="POST" action="{{ route('login.post') }}">
          @csrf
          @if ($errors->any())
              <div class="alert alert-danger">
                  <p>
                      @foreach ($errors->all() as $error)
                          <p>{{ $error }}</p>
                      @endforeach
                  </p>
              </div>
          @endif
          
          <label for="email">Username Atau Email</label>
          <input type="email" id="email" name="email" placeholder="example@gmail.com" class="input yellow" required />
  
          <label for="password">Kata Sandi</label>
          <div class="password-wrapper">
            <input type="password" id="password" name="password" placeholder=" " class="input" required />
            <span class="toggle-password" onclick="togglePassword('password')"><svg margin-top="-2px" width="26" height="11" viewBox="0 0 26 11" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.81442 1C8.31712 8.32781 17.113 8.55139 22.815 1.66714C22.9933 1.45438 23.1646 1.2308 23.3394 1M13.0752 6.66895V10M18.6303 5.20123L20.4447 8.42157M22.8115 1.66715L25.1364 3.83447M7.50955 5.20123L5.69512 8.42157M3.32484 1.66715L1 3.83447" stroke="#0E3E3E" stroke-width="1.63636" stroke-linecap="round" stroke-linejoin="round"/>
              </svg></span>
            </div>
            <div class="button-group">
              <button type="submit" class="login-btn">Log In</button>
              <p class="forgot"><a href="forgot.html">Lupa Kata Sandi?</a></p>
              <a href="{{ route('register') }}" class="signup-btn">Sign Up</a>
            </div>
            <div class="or-social">
              <p>atau daftar dengan</p>
              <div class="icons">
                <img src="{{ asset('assets/images/icon/facebook.svg') }}" />
                <img src="{{ asset('assets/images/icon/google.svg') }}" />
              </div>
              <p class="account">Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
            </div>
          </form>
      </div>
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
                passwordIcon.textContent = "<svg margin-top="-2px" width="26" height="11" viewBox="0 0 26 11" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.81442 1C8.31712 8.32781 17.113 8.55139 22.815 1.66714C22.9933 1.45438 23.1646 1.2308 23.3394 1M13.0752 6.66895V10M18.6303 5.20123L20.4447 8.42157M22.8115 1.66715L25.1364 3.83447M7.50955 5.20123L5.69512 8.42157M3.32484 1.66715L1 3.83447" stroke="#0E3E3E" stroke-width="1.63636" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>"; // Kembalikan icon jika password tersembunyi
            }
        }
    </script>
</body>
</html>
