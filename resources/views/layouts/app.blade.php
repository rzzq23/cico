<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'My App')</title>
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
  {{-- Konten utama --}}
  <main>
    @yield('content')
  </main>

  {{-- Footer opsional --}}
 
    <nav>
      <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'choose' : '' }}" aria-label="Home">
        <img src="{{ asset('assets/images/icon/home.svg') }}" alt="Home">
      </a>
      <a href="{{ route('statistik') }}" class="{{ request()->routeIs('statistik') ? 'choose' : '' }}" aria-label="Statistics">
        <img src="{{ asset('assets/images/icon/analysis.svg') }}" alt="Statistics">
      </a>
      <a href="{{ route('history') }}" class="{{ request()->routeIs('history') ? 'choose' : '' }}" aria-label="History">
        <img src="{{ asset('assets/images/icon/Transactions.svg') }}" alt="History">
      </a>
      <a href="{{ route('category') }}" class="{{ request()->routeIs('category') ? 'choose' : '' }}" aria-label="Category">
        <img src="{{ asset('assets/images/icon/category.svg') }}" alt="Category">
      </a>
      <a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'choose' : '' }}" aria-label="User">
        <img src="{{ asset('assets/images/icon/Profile.svg') }}" alt="User">
      </a>
    </nav>

  {{-- Tambahkan JS global jika ada --}}
  <script src="{{ asset('js/app.js') }}"></script>

  {{-- Tambahan script per halaman --}}
  @stack('scripts')
</body>
</html>
