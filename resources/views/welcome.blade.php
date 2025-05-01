<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}" />
</head>
<body>
 
    <div class="container">
      <img src="{{ asset('assets/images/logo/Logo.png') }}" alt="CICO Logo" class="logo" />
  
      <p class="desc">
        Dompet bocor? Pengeluaran nggak terkendali?<br />
        Tenang, CICO siap jadi solusi keuanganmu!
      </p>
  
      <h2 class="welcome-text">
        Selamat Datang di <span class="highlight">CICO</span>
      </h2>
  
      <div class="button-group">
        <button id="loginBtn" class="btn login" data-route-login="{{ route('login') }}">Log In</button>
        <button id="signupBtn" class="btn signup" data-route-register="{{ route('register') }}">Sign Up</button>                
      </div>
  
      <a href="#" id="forgotPassword" class="forgot-link">Lupa Password?</a>
    </div>
  
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>