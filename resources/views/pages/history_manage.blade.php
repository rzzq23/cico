@extends('layouts.app')
@section('title', 'Manage History')
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

<div class="container">
    <h2>History Management</h2>
</div>

@endsection 