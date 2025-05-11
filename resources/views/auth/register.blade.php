<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/signup-style.css') }}" /> --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/sass/register.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="signup-container">
        <div class="top-section">
            <h2>Buat Akunmu</h2>
        </div>
    
        <!-- Form Registrasi -->
        <form class="form-section" method="POST" action="{{ route('register') }}">
            @csrf
    
            <!-- Menangani error jika ada -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
            <!-- Nama Lengkap -->
            <div class="form-group">
                <label for="name">Nama Panjang</label>
                <input type="text" name="name" id="name" placeholder="Your Full Name" required value="{{ old('name') }}" />
            </div>
    
            <!-- Email -->
            <div class="form-group yellow">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="example@gmail.com" required value="{{ old('email') }}" />
            </div>
    
            <!-- Nomor Telepon -->
            <div class="form-group">
                <label for="phone">Nomor Telepon</label>
                <input type="tel" name="phone" id="phone" placeholder="+628123456789" required value="{{ old('phone') }}" />
            </div>
    
            <!-- Tanggal Lahir -->
            <div class="form-group yellow">
                <label for="dob">Tanggal Lahir</label>
                <input type="date" name="dob" id="dob" required value="{{ old('dob') }}" />
            </div>
    
            <!-- Kata Sandi -->
            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" name="password" id="password" placeholder="••••••••" required />
            </div>
    
            <!-- Konfirmasi Kata Sandi -->
            <div class="form-group yellow">
                <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" required />
            </div>
    
            <!-- Teks kebijakan -->
            <p class="policy-text">
                Dengan melanjutkan, Anda menyetujui <a href="#">Syarat Penggunaan</a> dan <a href="#">Kebijakan Privasi</a>.
            </p>
    
            <!-- Tombol submit -->
            <button type="submit" class="signup-btn">Sign Up</button>
    
            <!-- Tautan login -->
            <p class="bottom-text">
                Sudah punya akun? <a href="{{ route('login') }}">Log In</a>
            </p>
        </form>
    </div>
</body>
</html>
