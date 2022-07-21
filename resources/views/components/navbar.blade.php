<nav class="navbar">
    <ul class="navbar__list">

        @switch(Illuminate\Support\Facades\Route::currentRouteName())
            @case('home')
            @case('default.home')
                <li>
                    <a class="navbar__link" href="#about-us">
                        {{ __('О Нас') }}
                    </a>
                </li>
        
                <li>
                    <a class="navbar__link navbar__link--highlight" href="{{ App\Support\Helper::generateRoute('products.index') }}">
                        {{ __('Продукты') }}
                    </a>
                </li>
        
                <li>
                    <a class="navbar__link" href="#our-presence">
                        {{ __('Контакты') }}
                    </a>
                </li>

                <li>
                    <a class="navbar__link" href="#career">
                        {{ __('Карьера') }}
                    </a>
                </li>
                @break
        
            @default
                <li>
                    <a class="navbar__link" href="{{ App\Support\Helper::generateRoute('home') . '#about-us' }}">
                        {{ __('О Нас') }}
                    </a>
                </li>
        
                <li>
                    <a class="navbar__link navbar__link--highlight" href="{{ App\Support\Helper::generateRoute('products.index') }}">
                        {{ __('Продукты') }}
                    </a>
                </li>
        
                <li>
                    <a class="navbar__link" href="{{ App\Support\Helper::generateRoute('home') . '#our-presence' }}">
                        {{ __('Контакты') }}
                    </a>
                </li>

                <li>
                    <a class="navbar__link" href="{{ App\Support\Helper::generateRoute('home') . '#career' }}">
                        {{ __('Карьера') }}
                    </a>
                </li>
                @break
        @endswitch
    </ul>
</nav>