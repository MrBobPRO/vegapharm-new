<header class="header">
    <div class="header__inner main-container">
        <a class="logo header__logo" href="{{ App\Support\Helper::generateRoute('home') }}">
            <img class="logo__image" src="{{ asset('img/main/logo.png') }}" alt="Vegapharm logo">
        </a>
    
        <div class="header__actions">
            <ul class="header__contacts">
                <li>
                    <a class="header__contacts-link">
                        {{ __('Телефон') }}: <br>
                        {{ App\Models\Option::getByKey('phone')->translate('value') }}
                    </a>
                </li>
        
                <li>
                    <a class="header__contacts-link" href="#">
                        {{ __('Почта') }}: <br>
                        {{ App\Models\Option::getByKey('email')->translate('value') }}
                    </a>
                </li>
            </ul>
    
            <div class="dropdown locale-dropdown">
                <button class="dropdown__btn">{{ app()->getLocale() }}</button>
    
                <ul class="dropdown__list">
                    @foreach ($locales as $locale)
                        <li class="dropdown__item">
                            @if($locale->value == App\Models\Locale::where('main', true)->first()->value)
                                <a class="dropdown__link" href="{{ route('default.home') }}">{{ $locale->value }}</a>
                            @else
                                <a class="dropdown__link" href="{{ route('home', ['locale' => $locale->value]) }}">{{ $locale->value }}</a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
    
            <ul class="header__socials">
                <li>
                    <a class="header__socials-link" href="{{ App\Models\Option::getByKey('instagram-link')->translate('value') }}">
                        <svg>
                            <use href="#facebook-svg"></use>
                        </svg>
                    </a>
                </li>
    
                <li>
                    <a class="header__socials-link" href="{{ App\Models\Option::getByKey('facebook-link')->translate('value') }}">
                        <svg>
                            <use href="#instagram-svg"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</header>