<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="{{ asset('assets/css/signup-style.css') }}" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="signup-container">
        <div class="top-section">
          <h2>Buat Akunmu</h2>
        </div>
    
        <form class="form-section" method="POST" action="{{ route('register') }}">
          @csrf
    
          <div class="form-group">
            <label for="name">Nama Panjang</label>
            <input type="text" name="name" id="name" placeholder="Your Full Name" required />
          </div>
    
          <div class="form-group yellow">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="example@gmail.com" required />
          </div>
    
          <div class="form-group">
            <label for="phone">Nomor Telepon</label>
            <input type="tel" name="phone" id="phone" placeholder="+628123456789" required />
          </div>
    
          <div class="form-group yellow">
            <label for="dob">Tanggal Lahir</label>
            <input type="date" name="dob" id="dob" required />
          </div>
    
          <div class="form-group">
            <label for="password">Kata Sandi</label>
            <input type="password" name="password" id="password" placeholder="••••••••" required />
          </div>
    
          <div class="form-group yellow">
            <label for="password_confirmation">Konfirmasi Kata Sandi</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" required />
          </div>
    
          <p class="policy-text">
            Dengan melanjutkan, Anda menyetujui <a href="#">Syarat Penggunaan</a> dan <a href="#">Kebijakan Privasi</a>.
          </p>
    
          <button type="submit" class="signup-btn">Sign Up</button>
    
          <p class="bottom-text">
            Sudah punya akun? <a href="{{ route('login') }}">Log In</a>
          </p>
        </form>
</body>
</html>


  