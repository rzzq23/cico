@extends('layouts.app')
@section('title', 'History')
@section('content')

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

    <header>
        <button aria-label="Back"><img src="{{ asset('assets/images/icon/bring back.svg') }}" alt="back button" height="20"
                width="20"></button>
        <h1>History</h1>
        <a href="{{ route('notification') }}" class="{{ request()->routeIs('notification') ? 'choose' : '' }}"
            aria-label="Notifications">
            <img src="{{ asset('assets/images/icon/Vector.svg') }}" alt="bell notification" height="25" width="20">
        </a>
    </header>

    <div class="content-scroll" style="max-height: 85vh;">
        <section class="flex-between">
            <div class="balance-box">
                <div>Total Balance</div>
                <div><strong>Rp. {{ number_format($totalBalance, 2) }}</strong></div>
            </div>
        </section>

        <section class="income-expense-container">
            <div class="income-expense-box">
                <div>
                    {{-- <img src="{{ asset('assets/images/icon/income yellow.svg') }}" alt=" Income" height="25" width="25"> --}}
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.04167" y="23.9583" width="22.9167" height="22.9167" rx="5.20833"
                            transform="rotate(-90 1.04167 23.9583)" stroke="#FBE538" stroke-width="2.08333" />
                        <path
                            d="M19.7917 6.25C19.7917 5.6747 19.3253 5.20833 18.75 5.20833L9.375 5.20833C8.7997 5.20833 8.33333 5.6747 8.33333 6.25C8.33333 6.8253 8.7997 7.29167 9.375 7.29167L17.7083 7.29167L17.7083 15.625C17.7083 16.2003 18.1747 16.6667 18.75 16.6667C19.3253 16.6667 19.7917 16.2003 19.7917 15.625L19.7917 6.25ZM6.25 18.75L6.98657 19.4866L19.4866 6.98657L18.75 6.25L18.0134 5.51343L5.51343 18.0134L6.25 18.75Z"
                            fill="#FBE538" />
                    </svg>
                </div>
                <div>Income</div>
                <div><strong>Rp. {{ number_format($totalIncome, 2) }}</strong></div>
            </div>
            <div class="income-expense-box">
                <div>
                    {{-- <img src="{{ asset('assets/images/icon/expense yellow.svg') }}" alt="expense" height="25" width="25"> --}}
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.04167" y="1.04167" width="22.9167" height="22.9167" rx="5.20833" stroke="#FBE538"
                            stroke-width="2.08333" />
                        <path
                            d="M18.75 19.7917C19.3253 19.7917 19.7917 19.3253 19.7917 18.75L19.7917 9.375C19.7917 8.7997 19.3253 8.33333 18.75 8.33333C18.1747 8.33333 17.7083 8.7997 17.7083 9.375V17.7083H9.375C8.7997 17.7083 8.33333 18.1747 8.33333 18.75C8.33333 19.3253 8.7997 19.7917 9.375 19.7917L18.75 19.7917ZM6.25 6.25L5.51343 6.98657L18.0134 19.4866L18.75 18.75L19.4866 18.0134L6.98657 5.51343L6.25 6.25Z"
                            fill="#FBE538" />
                    </svg>
                </div>
                <div>Expense</div>
                <div><strong>Rp. {{ number_format($totalExpense, 2) }}</strong></div>
            </div>
        </section>
        <section class="transactions-box" style="padding-bottom: 8rem;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                <h3 style="margin: 0; padding: 0;">History Transactions</h3>
                <button>Edit</button>
            </div>
    
            @foreach ($grouped as $month => $transactions)
            <h3 style="margin-bottom: 1rem;">{{ $month }}</h3>
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
