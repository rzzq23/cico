{{-- resources/views/dashboard/index.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
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
          <div><strong>$4,000.00</strong></div>
      </div>
      <div style="text-align: center;">
          <div><img src="{{ asset('assets/images/icon/expense.svg') }}" alt="expense" height="25" width="25"></div>
          <div>Total Expense</div>
          <div><strong>$1,187.40</strong></div>
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

      <ul>
        <li>
          <div class="icon-circle"><img src="{{ asset('assets/images/icon/salary.svg') }}" alt="Salary"></div>
          <div class="transaction-info">
            <div>Salary</div>
            <div>18:27 - April 30</div>
          </div>
          <div class="category">Monthly</div>
          <div><strong>$4,000,00</strong></div>
        </li>
        <li>
          <div class="icon-circle"><img src="{{ asset('assets/images/icon/groceries.svg') }}" height="25" width="20" alt="Groceries"></div>
          <div class="transaction-info">
            <div>Groceries</div>
            <div>17:00 - April 24</div>
          </div>
          <div class="category">Pantry</div>
          <div><strong>-$100,00</strong></div>
        </li>
        <li>
          <div class="icon-circle"><img src="{{ asset('assets/images/icon/rent.svg') }}" alt="Rent" height="20" width="25"></div>
          <div class="transaction-info">
            <div>Rent</div>
            <div>8:30 - April 15</div>
          </div>
          <div class="category">Rent</div>
          <div><strong>-$674,40</strong></div>
        </li>
        <li>
          <div class="icon-circle"><img src="{{ asset('assets/images/icon/transport.svg') }}" alt="Transport" height="25" width="25"></div>
          <div class="transaction-info">
            <div>Transport</div>
            <div>5:30 - April 08</div>
          </div>
          <div class="category">Fuel</div>
          <div><strong>-$4,13</strong></div>
        </li>
        <li>
          <div class="icon-circle"><img src="{{ asset('assets/images/icon/food.svg') }}" alt="Food" height="25" width="20"></div>
          <div class="transaction-info">
            <div>Food</div>
            <div>19:30 - March 31</div>
          </div>
          <div class="category">Dinner</div>
          <div><strong>-$70,40</strong></div>
        </li>
      </ul>
    </section>
  </div>

  <div class="add-expense-container">
    <button class="add-income">Add Income</button>
    <button class="add-expense">Add Expense</button>
  </div>

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
</body>
</html>
