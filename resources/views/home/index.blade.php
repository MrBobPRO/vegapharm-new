@extends('layouts.app')
@section('main')

<section class="greeting">
    <div class="greeting__inner main-container">
        <div class="greeting__image-container">
            <img class="greeting__image" src="{{ asset('img/main/greeting.png') }}" alt="greeting">
            <img class="greeting__absolute-pill" src="{{ asset('img/main/pill-2.png') }}" alt="pill">
        </div>

        <div class="greeting__body">
            <div class="greeting__text">
                <h2 class="greeting__subtitle">Vegapharm — Путеводная звезда</h2>
                <h1 class="greeting__title">Здоровья</h1>
                <a class="greeting__link" href="#"> Все препараты
                    <span class="material-icons-outlined greeting__link-icon">arrow_forward</span>
                </a>
            </div>

            <x-navbar />
        </div>
    </div>
</section>

<section class="stars-section">
    <div class="stars-section__inner main-container">
        <h1 class="main-title">7 звезд Vegapharm</h1>
        <p>В основе крепкого здоровья и комфортного самочувствия лежит 7 добродетелей, 7 постулатов. Все они являются основой и для деятельности Vegapharm.</p>
    </div>
</section>

@endsection