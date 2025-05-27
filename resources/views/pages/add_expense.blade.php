@extends('layouts.app')

@section('title', 'Add Expense')

@section('content')
    <header style="background-color: #ffffff; padding-bottom: 120px">
        <a href="{{ url()->previous() }}">
            <button aria-label="Back">
                <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.5642 1L0.999999 8.99685M0.999999 8.99685L11.5642 17M0.999999 8.99685L20 8.99686"
                        stroke="#052224" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </a>
        <h2 style="color: #052224;">Add Expense</h2>
        <a href="{{ route('notification') }}" class="{{ request()->routeIs('notification') ? 'choose' : '' }}"
            aria-label="Notifications">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Notification Icon Path -->
            </svg>
        </a>
    </header>

    <main>
        <div class="profil">
            <div class="form-container-add">
                <form action="{{ route('expense.store') }}" method="POST">
                    @csrf

                    <!-- Date -->
                    <div class="form-group-add">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" id="date" name="date" class="input-box" required
                            value="{{ old('date') }}" />
                        @error('date')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Category -->
                    <div class="form-group-add">
                        <label for="category" class="form-label">Category</label>
                        <div class="select-wrapper">
                            <select id="category" name="category" class="input-box select-box" required>
                                <option value="" disabled selected>Select the category</option>
                                <option value="food" {{ old('category') == 'food' ? 'selected' : '' }}>Food</option>
                                <option value="transport" {{ old('category') == 'transport' ? 'selected' : '' }}>Transport
                                </option>
                                <option value="utilities" {{ old('category') == 'utilities' ? 'selected' : '' }}>Utilities
                                </option>
                                <option value="entertainment" {{ old('category') == 'entertainment' ? 'selected' : '' }}>
                                    Entertainment</option>
                            </select>
                            {{-- <div class="dropdown-icon"></div> --}}
                        </div>
                        @error('category')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Amount -->
                    <div class="form-group-add">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" id="amount" name="amount" class="input-box" placeholder="e.g. 100.00"
                            required value="{{ old('amount') }}" />
                        @error('amount')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Expense Title -->
                    <div class="form-group-add">
                        <label for="title" class="form-label">Expense Title</label>
                        <input type="text" id="title" name="title" class="input-box"
                            placeholder="e.g. Grocery shopping" required value="{{ old('title') }}" />
                        @error('title')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Save Button -->
                    <button type="submit" class="save-button-wrapper">
                        <span class="save-button-text">Save</span>
                    </button>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                </form>
            </div>
        </div>
    </main>

@endsection <!-- Hapus atau sesuaikan jika perlu -->
