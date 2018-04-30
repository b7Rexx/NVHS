@extends('Frontend.master')

@section('title')
    NVHS - Company
@endsection

@section('body')
    <div class="company_block">
        <div class="container">
            <br>
            @if($slugInfo == 'Food-Hygiene')
                @include('Frontend.pages.Company.Food')
            @elseif($slugInfo == 'Training')
                @include('Frontend.pages.Company.Training')
            @elseif($slugInfo == 'Home-Stay')
                @include('Frontend.pages.Company.Home')
            @elseif($slugInfo == 'Restaurant-Management')
                @include('Frontend.pages.Company.Restaurant')
            @else
                Select another company detail from navbar.
            @endif
        </div>
    </div>

@endsection