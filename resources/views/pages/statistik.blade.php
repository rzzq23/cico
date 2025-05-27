@extends('layouts.app')

@section('title', 'Statistik')

@section('content')
    <header>
        <button aria-label="Back"><img src="{{ asset('assets/images/icon/bring back.svg') }}" alt="back button" height="20"
                width="20"></button>
        <h1>Analysis</h1>
        <a href="{{ route('notification') }}" class="{{ request()->routeIs('notification') ? 'choose' : '' }}"
            aria-label="Notifications">
            <img src="{{ asset('assets/images/icon/Vector.svg') }}" alt="bell notification" height="25" width="20">
        </a>
    </header>

    <div class="content-scroll">
        <section class="flex-between" style="margin-bottom: 40px;">
            <div style="text-align: center; margin-bottom: 30px;">
                <div><span style="margin-bottom: 0"><svg width="13" height="13" viewBox="0 0 25 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.04167" y="23.9583" width="22.9167" height="22.9167" rx="5.20833"
                                transform="rotate(-90 1.04167 23.9583)" stroke="#000000" stroke-width="2.08333" />
                            <path
                                d="M19.7917 6.25C19.7917 5.6747 19.3253 5.20833 18.75 5.20833L9.375 5.20833C8.7997 5.20833 8.33333 5.6747 8.33333 6.25C8.33333 6.8253 8.7997 7.29167 9.375 7.29167L17.7083 7.29167L17.7083 15.625C17.7083 16.2003 18.1747 16.6667 18.75 16.6667C19.3253 16.6667 19.7917 16.2003 19.7917 15.625L19.7917 6.25ZM6.25 18.75L6.98657 19.4866L19.4866 6.98657L18.75 6.25L18.0134 5.51343L5.51343 18.0134L6.25 18.75Z"
                                fill="#000000" />
                        </svg></span> Total Income</div>
                <div><strong>Rp. {{ number_format($totalIncome, 2) }}</strong></div>
            </div>

            <div style="text-align: center; margin-bottom: 30px;">
                <div><span> <svg width="13" height="13" viewBox="0 0 25 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.04167" y="1.04167" width="22.9167" height="22.9167" rx="5.20833" stroke="#000000"
                                stroke-width="2.08333" />
                            <path
                                d="M18.75 19.7917C19.3253 19.7917 19.7917 19.3253 19.7917 18.75L19.7917 9.375C19.7917 8.7997 19.3253 8.33333 18.75 8.33333C18.1747 8.33333 17.7083 8.7997 17.7083 9.375V17.7083H9.375C8.7997 17.7083 8.33333 18.1747 8.33333 18.75C8.33333 19.3253 8.7997 19.7917 9.375 19.7917L18.75 19.7917ZM6.25 6.25L5.51343 6.98657L18.0134 19.4866L18.75 18.75L19.4866 18.0134L6.98657 5.51343L6.25 6.25Z"
                                fill="#000000" />
                        </svg> </span> Total Expense</div>
                <div style="font-weight: 600; font-size=24px;">Rp. {{ number_format($totalExpense, 2) }}</div>
            </div>
        </section>
    </div>

    <div class="profil" style=" height: 70vh; padding: 20px; margin-top:20px;">
        <div class="btn-back">
            <button class="terpilih">Daily</button>
            <button class="no-terpilih">Weekly</button>
            <button class="no-terpilih">Monthly</button>
        </div>


        <div id="myChart" style="margin-top: 30px;"></div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
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

        var options = {
            chart: {
                type: 'bar',
                height: 300
            },
            series: [{
                    name: 'Income',
                    data: [100000, 120000, 110000, 95000]
                },
                {
                    name: 'Expense',
                    data: [50000, 75000, 60000, 70000]
                }
            ],
            xaxis: {
                categories: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4']
            }

        };

        var chart = new ApexCharts(document.querySelector("#myChart"), options);
        chart.render();
    </script>
@endsection
