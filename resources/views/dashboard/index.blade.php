{{-- resources/views/dashboard/index.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
  <header>
    <div>
        <h1>Hi, Selamat Datang</h1>
        <p>{{ Auth::user()->name ?? 'User' }}</p>
    </div>
    <button aria-label="Notifications">
      <img src="{{ asset('gambar/bell.png') }}" alt="bell notification" height="25" width="20">
    </button>
  </header>

  <div class="content-scroll">
    <section class="flex-between" style="margin-bottom: 70px;">
      <div style="text-align: center;">
          <div><img src="{{ asset('gambar/income yellow.png') }}" alt="Income" height="25" width="25"></div>
          <div>Total Income</div>
          <div><strong>$4,000.00</strong></div>
      </div>
      <div style="text-align: center;">
          <div><img src="{{ asset('gambar/expense yellow.png') }}" alt="expense" height="25" width="25"></div>
          <div>Total Expense</div>
          <div><strong>$1,187.40</strong></div>
      </div>
    </section>

    <section class="transactions-box" style="padding-bottom: 6rem;">
      <section class="revenue-box">
        <div class="icon-circle"><img src="{{ asset('gambar/salary.png') }}" alt="salary" height="20" width="20"></div>
        <div class="transaction-info">
          <div>Revenue Last Week</div>
          <div><strong>$4.000.00</strong></div>
        </div>
        <div class="icon-circle"><img src="{{ asset('gambar/food.png') }}" alt="food" height="25" width="20"></div>
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
          <div class="icon-circle"><img src="{{ asset('gambar/salary.png') }}" alt="Salary"></div>
          <div class="transaction-info">
            <div>Salary</div>
            <div>18:27 - April 30</div>
          </div>
          <div class="category">Monthly</div>
          <div><strong>$4,000,00</strong></div>
        </li>
        <li>
          <div class="icon-circle"><img src="{{ asset('gambar/groceries.png') }}" height="25" width="20" alt="Groceries"></div>
          <div class="transaction-info">
            <div>Groceries</div>
            <div>17:00 - April 24</div>
          </div>
          <div class="category">Pantry</div>
          <div><strong>-$100,00</strong></div>
        </li>
        <li>
          <div class="icon-circle"><img src="{{ asset('gambar/rent.png') }}" alt="Rent" height="20" width="25"></div>
          <div class="transaction-info">
            <div>Rent</div>
            <div>8:30 - April 15</div>
          </div>
          <div class="category">Rent</div>
          <div><strong>-$674,40</strong></div>
        </li>
        <li>
          <div class="icon-circle"><img src="{{ asset('gambar/transport.png') }}" alt="Transport" height="25" width="25"></div>
          <div class="transaction-info">
            <div>Transport</div>
            <div>5:30 - April 08</div>
          </div>
          <div class="category">Fuel</div>
          <div><strong>-$4,13</strong></div>
        </li>
        <li>
          <div class="icon-circle"><img src="{{ asset('gambar/food.png') }}" alt="Food" height="25" width="20"></div>
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
    <button class="choose" aria-label="Home"><img src="{{ asset('gambar/home.png') }}" alt="Home"></button>
    <button aria-label="Statistics"><img src="{{ asset('gambar/statistik.png') }}" alt="Statistics"></button>
    <button aria-label="History"><img src="{{ asset('gambar/history.png') }}" alt="History"></button>
    <button aria-label="Layers"><img src="{{ asset('gambar/category.png') }}" alt="Category"></button>
    <button aria-label="Profile"><img src="{{ asset('gambar/user.png') }}" alt="User"></button>
  </nav>
</body>
</html>
