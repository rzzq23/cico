
@extends('layouts.app')
@section('title', 'History')
@section('content')
  <header>
    <button aria-label="Back"><img src="{{ asset('assets/images/icon/bring back.svg') }}" alt="back button" height="20" width="20"></button>
    <h1>History</h1>
    <a href="{{ route('notification') }}" class="{{ request()->routeIs('notification') ? 'choose' : '' }}" aria-label="Notifications">
      <img src="{{ asset('assets/images/icon/Vector.svg') }}" alt="bell notification" height="25" width="20">
    </a>      </header>

  <div class="content-scroll">
    <section class="flex-between">
      <div class="balance-box">
        <div>Total Balance</div>
        <div><strong>$7,783.00</strong></div>
      </div>
    </section>

    <section class="income-expense-container">
      <div class="income-expense-box">
        <div><img src="{{ asset('assets/images/icon/income yellow.svg') }}" alt=" Income" height="25" width="25"></div>
        <div>Income</div>
        <div><strong>$4,000.00</strong></div>
      </div>
      <div class="income-expense-box">
        <div><img src="{{ asset('assets/images/icon/expense yellow.svg') }}" alt="expense" height="25" width="25"></div>
        <div>Expense</div>
        <div><strong>$1,187.40</strong></div>
      </div>
    </section>

    <section class="transactions-box" style="padding-bottom: 6rem;">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
        <h3>April</h3>
        <button>See all</button>
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
        <div class="income-expense-box">
          <div><img src="gambar/expense yellow.svg" alt="expense" height="25" width="25"></div>
          <div>Expense</div>
          <div><strong>$1,187.40</strong></div>
      </div>
    </section>
  
    <section class="transactions-box" style="padding-bottom: 6rem;">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
        <h3>April</h3>
        <button>See all</button>
      </div>
      <ul>
        <li>
          <div class="icon-circle"><img src="gambar/salary.svg" alt="Salary"></div>
          <div class="transaction-info">
            <div>Salary</div>
            <div>18:27 - April 30</div>
          </div>
          <div class="category">Monthly</div>
          <div><strong>$4,000,00</strong></div>
        </li>
        <li>
          <div class="icon-circle"><img src="gambar/groceries.svg" height="25" width="20" alt="Groceries"></div>
          <div class="transaction-info">
            <div>Groceries</div>
            <div>17:00 - April 24</div>
          </div>
          <div class="category">Pantry</div>
          <div><strong>-$100,00</strong></div>
        </li>
        <li>
          <div class="icon-circle"><img src="gambar/rent.svg" alt="Rent" height="20" width="25"></div>
          <div class="transaction-info">
            <div>Rent</div>
            <div>8:30 - April 15</div>
          </div>
          <div class="category">Rent</div>
          <div><strong>-$674,40</strong></div>
        </li>
        <li>
          <div class="icon-circle"><img src="gambar/transport.svg" alt="Transport" height="25" width="25"></div>
          <div class="transaction-info">
            <div>Transport</div>
            <div>5:30 - April 08</div>
          </div>
          <div class="category">Fuel</div>
          <div><strong>-$4,13</strong></div>
        </li>
      </ul>
      <h3>March</h3>
      <ul>
          <li>
              <div class="icon-circle"><img src="gambar/food.svg" alt="Food" height="25" width="20"></div>
              <div class="transaction-info">
                <div>Food</div>
                <div>19:30 - March 31</div>
              </div>
              <div class="category">Dinner</div>
              <div><strong>-$70,40</strong></div>
          </li>
      </ul>
    </ul>
    </section>
  </div>

  <div class="add-expense-container">
    <button class="add-income">Add Income</button>
    <button class="add-expense">Add Expense</button>
  </div>

@endsection
