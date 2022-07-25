@extends('layouts.app')
@section('main')

{{-- Greeting start --}}
<section class="greeting products-greeting">
    <div class="greeting__inner main-container">
        <div class="greeting__image-container">
            <img class="greeting__image" src="{{ asset('img/products/lindavit.png') }}" alt="greeting">
            <img class="greeting__absolute-pill" src="{{ asset('img/main/pill-2.png') }}" alt="pill">
        </div>

        <div class="greeting__body">
            <div class="greeting__text">
                <h2 class="greeting__subtitle">{{ __('Вся наша') }}</h2>
                <h1 class="greeting__title">{{ __('Продукция') }}</h1>
                <a class="greeting__link button button--main button_with_red_icon" href="{{ route('home') }}"> {{ __('Вернуться на главную') }}
                    <span class="material-icons-outlined">arrow_forward</span>
                </a>
            </div>

            <x-navbar />
        </div>
    </div>
</section>  {{-- Greeting end --}}

{{-- Our Products start --}}
<section class="our-products">
    <div class="our-products__inner main-container">
        <div class="our-products__text-container">
            <h1 class="our-products__title main-title">Наша продукция</h1>
            <div class="our-products__text">
                <p>Мы производим качественные препараты для разной отрасли медицины</p>
            </div>
        </div>

        <div class="prescription-filter">
            <div class="prescription-filter__item">
                <input class="prescription-filter__input" type="radio" name="prescription" value="0" id="prescription-otc">
                <label class="prescription-filter__label prescription-filter__label--otc" for="prescription-otc">
                    <span class="prescription-filter__label-icon">{{ __('OTC') }}</span>
                    <span class="prescription-filter__label-text">{{ __('Лекарства отпускаемые без рецепта') }}</span>
                </label>
            </div>

            <div class="prescription-filter__item">
                <input class="prescription-filter__input" type="radio" name="prescription" value="1" id="prescription-rx">
                <label class="prescription-filter__label prescription-filter__label--rx" for="prescription-rx">
                    <span class="prescription-filter__label-icon">{{ __('RX') }}</span>
                    <span class="prescription-filter__label-text">{{ __('Лекарства отпускаемые по рецепту') }}</span>
                </label>
            </div>
        </div>
    </div>
</section>  {{-- Our Products end --}}

{{-- Products section start --}}
<section class="products-section">
    <div class="products-section__inner main-container">
        <div class="filter">
            {{-- Filter by Categories start --}}
            <div class="filter__categories">
                <label for="categories-select">Категории</label>
                <div class="categories-select-container">
                    <select class="selectize-singular categories-select" id="categories-select">
                        <option>{{ __('Все препараты') }}</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>

                    <div class="categories-select__icon">
                        <svg>
                            <use href="#filter"></use>
                        </svg>
                    </div>
                </div>
            </div>  {{-- Filter by Categories end --}}

            {{-- Search start --}}
            <div class="filter__search">
                <div class="search-select-container">
                    <select class="selectize-singular search-select" placeholder="Поиск по ключевой информации">
                        <option></option>
                        @foreach($searchProducts as $product)
                            <option value="{{ $product->id }}">{{ $product->title }}</option>
                        @endforeach
                    </select>
                </div>

                <span class="material-icons-outlined search-select__icon">search</span>
            </div>  {{-- Search end --}}
        </div>  {{-- Filter end --}}
        
        {{-- Products List start --}}
        <div class="products-list-container">
            <div class="products-list__title-container title-container">
                <h1 class="main-title products-list-title">{{ __('Все препараты') }}</h1>
                
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a class="breadcrumbs__link" href="{{ route('home') }}">{{ __('Главная') }}</a>
                    </li>

                    <li class="breadcrumbs__item">
                        <a class="breadcrumbs__link" href="{{ route('products.index') }}">{{ __('Продукты') }}</a>
                    </li>
                </ul>
            </div>

            <x-products-list :products="$products" />
        </div>  {{-- Products List end --}}

    </div>  {{-- Products section inner end --}}
</section>  {{-- Products section end --}}

{{-- Popular products start --}}
<section class="popular-products">
    <div class="popular-products__inner main-container">
        <h1 class="popular-products__title main-title">{{ __('Популярные препараты') }}</h1>
        <x-products-carousel :products="$popularProducts" />
    </div>

    <div class="popular-products__foot"></div>
</section>  {{-- Popular products end --}}

@endsection