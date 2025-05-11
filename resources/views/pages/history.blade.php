@extends('layouts.app')
@section('title', 'History')
@section('content')
    <header>
        <button aria-label="Back"><img src="{{ asset('assets/images/icon/bring back.svg') }}" alt="back button" height="20"
                width="20"></button>
        <h1>History</h1>
        <a href="{{ route('notification') }}" class="{{ request()->routeIs('notification') ? 'choose' : '' }}"
            aria-label="Notifications">
            <img src="{{ asset('assets/images/icon/Vector.svg') }}" alt="bell notification" height="25" width="20">
        </a>
    </header>

    <div class="content-scroll">
        <section class="flex-between">
            <div class="balance-box">
                <div>Total Balance</div>
                <div><strong>$7,783.00</strong></div>
            </div>
        </section>

        <section class="income-expense-container">
            <div class="income-expense-box">
                <div>
                  {{-- <img src="{{ asset('assets/images/icon/income yellow.svg') }}" alt=" Income" height="25" width="25"> --}}
                  <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="1.04167" y="23.9583" width="22.9167" height="22.9167" rx="5.20833" transform="rotate(-90 1.04167 23.9583)" stroke="#FBE538" stroke-width="2.08333"/>
                    <path d="M19.7917 6.25C19.7917 5.6747 19.3253 5.20833 18.75 5.20833L9.375 5.20833C8.7997 5.20833 8.33333 5.6747 8.33333 6.25C8.33333 6.8253 8.7997 7.29167 9.375 7.29167L17.7083 7.29167L17.7083 15.625C17.7083 16.2003 18.1747 16.6667 18.75 16.6667C19.3253 16.6667 19.7917 16.2003 19.7917 15.625L19.7917 6.25ZM6.25 18.75L6.98657 19.4866L19.4866 6.98657L18.75 6.25L18.0134 5.51343L5.51343 18.0134L6.25 18.75Z" fill="#FBE538"/>
                    </svg>                    
                </div>
                <div>Income</div>
                <div><strong>$4,000.00</strong></div>
            </div>
            <div class="income-expense-box">
                <div>
                  {{-- <img src="{{ asset('assets/images/icon/expense yellow.svg') }}" alt="expense" height="25" width="25"> --}}
                  <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="1.04167" y="1.04167" width="22.9167" height="22.9167" rx="5.20833" stroke="#FBE538" stroke-width="2.08333"/>
                    <path d="M18.75 19.7917C19.3253 19.7917 19.7917 19.3253 19.7917 18.75L19.7917 9.375C19.7917 8.7997 19.3253 8.33333 18.75 8.33333C18.1747 8.33333 17.7083 8.7997 17.7083 9.375V17.7083H9.375C8.7997 17.7083 8.33333 18.1747 8.33333 18.75C8.33333 19.3253 8.7997 19.7917 9.375 19.7917L18.75 19.7917ZM6.25 6.25L5.51343 6.98657L18.0134 19.4866L18.75 18.75L19.4866 18.0134L6.98657 5.51343L6.25 6.25Z" fill="#FBE538"/>
                    </svg>
                </div>
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
                    <div class="icon-circle">
                      <svg width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.6929 12.2071L11.3255 16.9353C11.1855 17.0252 11.007 17.029 10.8632 16.9453L1.62608 11.5652C1.33988 11.3985 1.33107 10.9882 1.60986 10.8094L16.6746 1.14625C16.8145 1.05647 16.993 1.05261 17.1367 1.13625L26.3737 6.51209C26.66 6.67871 26.6689 7.08908 26.3901 7.26797L22.0408 10.0586M18.6974 15.9623L11.3254 20.6907C11.1855 20.7805 11.007 20.7843 10.8633 20.7007L1.62597 15.3246C1.33976 15.1581 1.33075 14.7479 1.60936 14.5689L4.07041 12.9879M23.9296 8.84902L26.3734 10.2716C26.6598 10.4383 26.6686 10.8488 26.3896 11.0276L22.0005 13.841M24.1086 12.4869L26.4028 13.9087C26.6798 14.0804 26.683 14.4822 26.4087 14.6582L11.3255 24.3375C11.1855 24.4273 11.007 24.4312 10.8632 24.3475L1.62608 18.9674C1.33988 18.8007 1.33107 18.3904 1.60985 18.2116L3.97642 16.6935M12.1418 4.34101L21.7804 9.95304C21.9167 10.0324 22.0005 10.1782 22.0005 10.336V17.2414C22.0005 17.3922 21.9238 17.5327 21.7969 17.6142L19.3799 19.1664C19.085 19.3558 18.6974 19.1441 18.6974 18.7936V12.4617C18.6974 12.3041 18.6136 12.1583 18.4774 12.0789L9.2299 6.69043C8.94385 6.52375 8.93497 6.11366 9.21354 5.93476L11.6794 4.3511C11.8195 4.26118 11.998 4.25729 12.1418 4.34101Z" stroke="#052224" stroke-width="1.77237" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                        
                    </div>
                    <div class="transaction-info">
                        <div>Salary</div>
                        <div>18:27 - April 30</div>
                    </div>
                    <div class="category">Monthly</div>
                    <div><strong>$4,000,00</strong></div>
                </li>
                <li>
                    <div class="icon-circle">
                      <svg width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.6929 12.2071L11.3255 16.9353C11.1855 17.0252 11.007 17.029 10.8632 16.9453L1.62608 11.5652C1.33988 11.3985 1.33107 10.9882 1.60986 10.8094L16.6746 1.14625C16.8145 1.05647 16.993 1.05261 17.1367 1.13625L26.3737 6.51209C26.66 6.67871 26.6689 7.08908 26.3901 7.26797L22.0408 10.0586M18.6974 15.9623L11.3254 20.6907C11.1855 20.7805 11.007 20.7843 10.8633 20.7007L1.62597 15.3246C1.33976 15.1581 1.33075 14.7479 1.60936 14.5689L4.07041 12.9879M23.9296 8.84902L26.3734 10.2716C26.6598 10.4383 26.6686 10.8488 26.3896 11.0276L22.0005 13.841M24.1086 12.4869L26.4028 13.9087C26.6798 14.0804 26.683 14.4822 26.4087 14.6582L11.3255 24.3375C11.1855 24.4273 11.007 24.4312 10.8632 24.3475L1.62608 18.9674C1.33988 18.8007 1.33107 18.3904 1.60985 18.2116L3.97642 16.6935M12.1418 4.34101L21.7804 9.95304C21.9167 10.0324 22.0005 10.1782 22.0005 10.336V17.2414C22.0005 17.3922 21.9238 17.5327 21.7969 17.6142L19.3799 19.1664C19.085 19.3558 18.6974 19.1441 18.6974 18.7936V12.4617C18.6974 12.3041 18.6136 12.1583 18.4774 12.0789L9.2299 6.69043C8.94385 6.52375 8.93497 6.11366 9.21354 5.93476L11.6794 4.3511C11.8195 4.26118 11.998 4.25729 12.1418 4.34101Z" stroke="#052224" stroke-width="1.77237" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                        
                    </div>
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
                    <div class="icon-circle"><img src="gambar/transport.svg" alt="Transport" height="25" width="25">
                    </div>
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
