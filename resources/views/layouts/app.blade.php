<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'My App')</title>
  {{-- <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}"> --}}
  @vite(['resources/sass/style.scss', 'resources/js/app.js'])
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
  {{-- Konten utama --}}
  <main>
    @yield('content')
  </main>

  {{-- Footer opsional --}}
 
    <nav>
      <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'choose' : '' }}" aria-label="Home">
        <svg class="iconav">
          <use xlink:href="{{ asset('assets/images/icons/icon.svg') }}#Home"></use>
        </svg>      </a>
      <a href="{{ route('statistik') }}" class="{{ request()->routeIs('statistik') ? 'choose' : '' }}" aria-label="Statistics">
        <svg class="iconav">
          <use xlink:href="{{ asset('assets/images/icons/icon.svg') }}#Analysis"></use>
        </svg>      </a>
      <a href="{{ route('history') }}" class="{{ request()->routeIs('history') ? 'choose' : '' }}" aria-label="History">
        <svg class="iconav">
          <use xlink:href="{{ asset('assets/images/icons/icon.svg') }}#Transactions"></use>
        </svg>      </a>
      <a href="{{ route('category') }}" class="{{ request()->routeIs('category') ? 'choose' : '' }}" aria-label="Category">
        <svg class="iconav">
          <use xlink:href="{{ asset('assets/images/icons/icon.svg') }}#Category"></use>
        </svg>      </a>
      <a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'choose' : '' }}" aria-label="User">
        <svg class="iconav" viewBox="-3 0 35 35">
          <use xlink:href="{{ asset('assets/images/icons/icon.svg') }}#Profile"></use>
        </svg>
      </a>
    </nav>

  {{-- Tambahkan JS global jika ada --}}
  <script src="{{ asset('js/app.js') }}"></script>

  {{-- Tambahan script per halaman --}}
  @stack('scripts')
</body>
</html>
