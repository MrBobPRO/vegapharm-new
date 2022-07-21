@extends('layouts.app')
@section('main')

{{-- Greeting start --}}
<section class="greeting">
    <div class="greeting__inner main-container">
        <div class="greeting__image-container">
            <img class="greeting__image" src="{{ asset('img/main/greeting.png') }}" alt="greeting">
            <img class="greeting__absolute-pill" src="{{ asset('img/main/pill-2.png') }}" alt="pill">
        </div>

        <div class="greeting__body">
            <div class="greeting__text">
                <h2 class="greeting__subtitle">{{ __('Вся наша') }}</h2>
                <h1 class="greeting__title">{{ __('Продукция') }}</h1>
                <a class="greeting__link button button--main button_with_red_icon" href="#"> {{ __('Вернуться на главную') }}
                    <span class="material-icons-outlined">arrow_forward</span>
                </a>
            </div>

            <x-navbar />
        </div>
    </div>
</section>  {{-- Greeting end --}}

@endsection