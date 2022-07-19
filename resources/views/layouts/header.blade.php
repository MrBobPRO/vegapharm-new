<header class="header">
    <div class="header__inner main-container">
        <a class="logo header__logo" href="{{ route('home') }}">
            <img class="logo__image" src="{{ asset('img/main/logo.png') }}" alt="Vegapharm logo">
        </a>
    
        <div class="header__actions">
            <ul class="header__contacts">
                <li>
                    <a class="header__contacts-link" href="#">
                        Телефон: <br>
                        (+992) 93-444-26-44
                    </a>
                </li>
        
                <li>
                    <a class="header__contacts-link" href="#">
                        Почта: <br>
                        info@vegapharm.tj
                    </a>
                </li>
            </ul>
    
            <div class="dropdown locale-dropdown">
                <button class="dropdown__btn">RU</button>
    
                <ul class="dropdown__list">
                    <li class="dropdown__item">
                        <a class="dropdown__link" href="{{ route('home', ['locale' => 'en']) }}">EN</a>
                    </li>
    
                    <li class="dropdown__item">
                        <a class="dropdown__link" href="{{ route('home', ['locale' => 'ru']) }}">RU</a>
                    </li>
                </ul>
            </div>
    
            <ul class="header__socials">
                <li>
                    <a class="header__socials-link" href="#">
                        <svg>
                            <use href="#facebook-svg"></use>
                        </svg>
                    </a>
                </li>
    
                <li>
                    <a class="header__socials-link" href="#">
                        <svg>
                            <use href="#instagram-svg"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</header>