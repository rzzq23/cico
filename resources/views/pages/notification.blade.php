@extends('layouts.app')

@section('title', 'Notification')

@section('content')
    <header>
        <a href="{{ url()->previous() }}">
            <button aria-label="Back"><img src="{{ asset('assets/images/icon/bring back.svg') }}" alt="back button"
                    height="20" width="20"></button>
        </a>
        <h1>Notification</h1>
        <button class="choose" aria-label="Notifications">
            <img src="{{ asset('assets/images/icon/Vector.svg') }}" alt="bell notification" height="25" width="20">
        </button>
    </header>

    <div class="content-scroll">
        <section class="transactions-box" style="padding-bottom: 2rem;">

            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                <h3>Today</h3>
            </div>
            <ul>
                <li>
                    <div class="icon-circle"><img src="{{ asset('assets/images/icon/Vector.svg') }}" alt="Reminder"></div>
                    <div class="transaction-info">
                        <div>Reminder!</div>
                        <div>Set up your automatic savings to meet your savings goal...</div>
                    </div>
                </li>
                <div class="date">17:00 - April 24</div>
                <li>
                    <div class="icon-circle"><img src="{{ asset('assets/images/icon/star.svg') }}" alt="New Update"></div>
                    <div class="transaction-info">
                        <div>New Update</div>
                        <div>Set up your automatic savings to meet your savings goal...</div>
                    </div>
                </li>
                <div class="date">17:00 - April 24</div>
            </ul>

            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                <h3>Yesterday</h3>
            </div>
            <ul>
                <li>
                    <div class="icon-circle"><img src="{{ asset('assets/images/icon/dolar.svg') }}" alt="Transaction"></div>
                    <div class="transaction-info">
                        <div>Transactions</div>
                        <div>A new transaction has been registered.</div>
                        <div class="category">Groceries</div>
                        <div class="category">Pantry</div>
                        <div class="category">-$100,00</div>
                    </div>
                </li>
                <div class="date">17:00 - April 24</div>
                <li>
                    <div class="icon-circle"><img src="{{ asset('assets/images/icon/Vector.svg') }}" alt="Reminder"></div>
                    <div class="transaction-info">
                        <div>Reminder!</div>
                        <div>Set up your automatic savings to meet your savings goal...</div>
                    </div>
                </li>
                <div class="date">17:00 - April 24</div>
            </ul>

            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                <h3>This Weekend</h3>
            </div>
            <ul>
                <li>
                    <div class="icon-circle"><img src="{{ asset('assets/images/icon/expensere.svg') }}"
                            alt="Expense Record"></div>
                    <div class="transaction-info">
                        <div>Expense Record</div>
                        <div>We recommend that you be more attentive to your finances.</div>
                    </div>
                </li>
                <div class="date">17:00 - April 24</div>
                <li>
                    <div class="icon-circle"><img src="{{ asset('assets/images/icon/Dolar.svg') }}" alt="Transaction"></div>
                    <div class="transaction-info">
                        <div>Transactions</div>
                        <div>A new transaction has been registered.</div>
                        <div class="category">Food</div>
                        <div class="category">Dinner</div>
                        <div class="category">-$70,40</div>
                    </div>
                </li>
                <div class="date">17:00 - April 24</div>
            </ul>
        </section>
    </div>
    <script>
        // Mencegah zoom dengan Ctrl + Scroll
        document.addEventListener('wheel', function(e) {
            if (e.ctrlKey) {
                e.preventDefault();
            }
        }, {
            passive: false
        });

        // Mencegah zoom dengan Ctrl + + / -
        document.addEventListener('keydown', function(e) {
            if ((e.ctrlKey || e.metaKey) && (e.key === '+' || e.key === '-' || e.key === '=')) {
                e.preventDefault();
            }
        });
    </script>
@endsection
