@extends('layouts.app')
@section('main')

{{-- Greeting start --}}
<section class="greeting products-greeting">
    <div class="greeting__inner main-container">
        <div class="greeting__image-container">
            <img class="greeting__image" src="{{ asset('img/products/' . $product->translate('image')) }}" alt="{{ $product->translate('title') }}">
            <img class="greeting__absolute-pill" src="{{ asset('img/main/pill-2.png') }}" alt="pill">
        </div>

        <div class="greeting__body">
            <div class="greeting__text">
                <h2 class="greeting__subtitle">{{ $product->categories()->first()->translate('title') }}</h2>
                <h1 class="greeting__title">{{ $product->translate('title') }}</h1>
                <a class="greeting__link button button--main button_with_red_icon" href="{{ route('products.index') }}"> {{ __('Все препараты') }}
                    <span class="material-icons-outlined">arrow_forward</span>
                </a>
            </div>

            <x-navbar />
        </div>
    </div>
</section>  {{-- Greeting end --}}

{{-- Products Filter start --}}
<section class="products-show-filter-section">
    <div class="products-show-filter-section__inner main-container">
        <div class="products-show-filter filter">
            <x-search-filter />
            <x-popular-products-list />
        </div>  
    </div>
</section>  {{-- Products Filter end --}}

{{-- About Product start --}}
<section class="about-product">
    <div class="about-product__inner main-container">
        <div class="about-product__title-container title-container">
            <h1 class="main-title about-product__title">
                @foreach ($product->categories as $cat)
                    {{ $cat->translate('title') }}
                    @if(!$loop->last)
                        |
                    @endif
                @endforeach
            </h1>
            
            <ul class="breadcrumbs">
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link" href="{{ route('home') }}">{{ __('Главная') }}</a>
                </li>

                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link" href="{{ route('products.index') }}">{{ __('Продукты') }}</a>
                </li>

                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link" href="{{ route('products.show', $product->slug) }}">{{ $product->translate('title') }}</a>
                </li>
            </ul>
        </div>

        <div class="about-product__main">
            <div class="about-product-card about-product-card--{{ $product->prescription ? 'rx' : 'otc' }}">
                <div class="about-product-card__image-container">
                    <img class="about-product-card__image" src="{{ asset('img/products/' . $product->translate('image')) }}" alt="{{ $product->translate('title') }}">
                </div>

                <div class="about-product-card__text-conent">
                    <h3 class="product-card__title">{{ $product->translate('title') }}</h3>
                    <span class="product-card__prescription">{{ $product->prescription ? 'RX' : 'OTC' }}</span>
                    <p class="product-card__description">{{ $product->translate('description') }}</p>

                    <div class="product-card-collapse__button-container">
                        <button class="product-card-collapse__button">
                            <span class="material-icons-outlined">east</span> {{ __('Состав') }}
                        </button>

                        <button class="product-card-collapse__button">
                            <span class="material-icons-outlined">east</span> {{ __('Показания к применению') }}
                        </button>

                        <button class="product-card-collapse__button">
                            <span class="material-icons-outlined">east</span> {{ __('Способ применения') }}
                        </button>
                    </div>

                    <a class="product-instruction-link button button--main button_with_red_icon" href="#">
                        Скачать инструкцию
                        <span class="material-icons-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>

            <div class="about-product-collapse-body">

            </div>
        </div>
    </div>
</section>  {{-- About Product end --}}

{{-- Similar Products start --}}
<section class="similar-products">
    <div class="similar-products__inner main-container">
        <h1 class="similar-products__title main-title">{{ __('Похожие препараты') }}</h1>
        <x-products-carousel :products="$similarProducts" />
    </div>
</section>  {{-- Similar Products end --}}

{{-- Popular products start --}}
<section class="popular-products products-show-popular-products">
    <div class="popular-products__inner main-container">
        <h1 class="popular-products__title main-title">{{ __('Популярные препараты') }}</h1>
        <x-products-carousel :products="$popularProducts" />
    </div>
</section>  {{-- Popular products end --}}

@endsection