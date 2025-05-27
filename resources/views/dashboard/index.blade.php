{{-- resources/views/dashboard/index.blade.php --}}

@php
    function getIcon($category) {
        switch (strtolower($category)) {
            case 'salary': return asset('assets/images/icon/salary.svg');
            case 'savings': return asset('assets/images/icon/saving.svg');
            case 'food': return asset('assets/images/icon/food.svg');
            case 'transport': return asset('assets/images/icon/transport.svg');
            case 'groceries': return asset('assets/images/icon/groceries.svg');
            case 'entertainment': return asset('assets/images/icon/entertainment.svg');
            default: return asset('icons/default.svg');
        }
    }
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  {{-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" /> --}}
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Dashboard</title>
  {{-- <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}"> --}}
  @vite(['resources/sass/style.scss', 'resources/js/app.js'])
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div>
        <h1>Hi, Selamat Datang</h1>
        <p>{{ Auth::user()->name ?? 'User' }}</p>
    </div>
    <a href="{{ route('notification') }}" class="{{ request()->routeIs('notification') ? 'choose' : '' }}" aria-label="Notifications">
      <img src="{{ asset('assets/images/icon/Vector.svg') }}" alt="bell notification" height="25" width="20">
    </a>    
  </header>

  <div class="content-scroll">
    <section class="flex-between" style="margin-bottom: 70px;">
      <div style="text-align: center;">
          <div><img src="{{ asset('assets/images/icon/income.svg') }}" alt="Income" height="25" width="25"></div>
          <div>Total Income</div>
          <div><strong>Rp. {{ number_format($totalIncome, 2) }}</strong></div>
      </div>
      <div style="text-align: center;">
          <div><img src="{{ asset('assets/images/icon/expense.svg') }}" alt="expense" height="25" width="25"></div>
          <div>Total Expense</div>
          <div><strong>Rp. {{ number_format($totalExpense, 2) }}</strong></div>
      </div>
    </section>

    <section class="transactions-box" style="padding-bottom: 6rem;">
      <section class="revenue-box">
        <div class="icon-circle"><img src="{{ asset('assets/images/icon/salary.svg') }}" alt="salary" height="20" width="20"></div>
        <div class="transaction-info">
          <div>Revenue Last Week</div>
          <div><strong>$4.000.00</strong></div>
        </div>
        <div class="icon-circle"><img src="{{ asset('assets/images/icon/food.svg') }}" alt="food" height="25" width="20"></div>
        <div class="transaction-info">
          <div>Food Last Week</div>
          <div><strong>-$100.00</strong></div>
        </div>
      </section>
      
      <div class="btn-back">
        <button class="terpilih">Daily</button>
        <button class="no-terpilih">Weekly</button>
        <button class="no-terpilih">Monthly</button>  
      </div>


      @foreach ($grouped as $month => $transactions)
      <h3>{{ $month }}</h3>
      <ul>
          @foreach ($transactions as $transaction)
              <li>
                  <div class="icon-circle">
                      <img src="{{ getIcon($transaction['category']) }}" alt="icon" width="18">
                  </div>
                  <div class="transaction-info">
                      <div>{{ $transaction['title'] }}</div>
                      <div>{{ \Carbon\Carbon::parse($transaction['date'])->format('H:i - F d') }}</div>
                  </div>
                  <div class="category">{{ $transaction['category'] }}</div>
                  <div>
                      <strong>
                          {{ $transaction['type'] === 'income' ? '+' : '-' }}
                          Rp. {{ number_format($transaction['amount'], 2) }}
                      </strong>
                  </div>
              </li>
          @endforeach
      </ul>
  @endforeach

    </section>
  </div>

  <div class="add-expense-container">
    <a href="{{ route('income.create') }}" class="add-income" style="text-decoration: none">Add Income</a>
    <a href="{{ route('expense.create') }}" class="add-expense" style="text-decoration: none">Add Expense</a>    
  </div>

  <nav>
    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'choose' : '' }}" aria-label="Home">
      <svg class="iconav">
        <use xlink:href="{{ asset('assets/images/icons/icon.svg') }}#Home"></use>
      </svg>
    </a>
    <a href="{{ route('statistik') }}" class="{{ request()->routeIs('statistik') ? 'choose' : '' }}" aria-label="Statistics">
      <svg class="iconav">
        <use xlink:href="{{ asset('assets/images/icons/icon.svg') }}#Analysis"></use>
      </svg>
    </a>
    <a href="{{ route('history') }}" class="{{ request()->routeIs('history') ? 'choose' : '' }}" aria-label="History">
      <svg class="iconav">
        <use xlink:href="{{ asset('assets/images/icons/icon.svg') }}#Transactions"></use>
      </svg>
    </a>
    <a href="{{ route('category') }}" class="{{ request()->routeIs('category') ? 'choose' : '' }}" aria-label="Category">
      <svg class="iconav">
        <use xlink:href="{{ asset('assets/images/icons/icon.svg') }}#Category"></use>
      </svg>
    </a>
    <a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'choose' : '' }}" aria-label="User">
      <svg class="iconav" viewBox="-3 0 35 35">
        <use xlink:href="{{ asset('assets/images/icons/icon.svg') }}#Profile"></use>
      </svg>
    </a>
  </nav>
  
  <script>
    // Mencegah zoom dengan Ctrl + Scroll
    document.addEventListener('wheel', function(e) {
      if (e.ctrlKey) {
        e.preventDefault();
      }
    }, { passive: false });

    // Mencegah zoom dengan Ctrl + + / -
    document.addEventListener('keydown', function(e) {
      if ((e.ctrlKey || e.metaKey) && (e.key === '+' || e.key === '-' || e.key === '=')) {
        e.preventDefault();
      }
    });
  </script>
</body>
</html>
