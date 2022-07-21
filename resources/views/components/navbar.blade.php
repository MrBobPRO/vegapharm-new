<nav class="navbar">
    <ul class="navbar__list">
        <li>
            <a class="navbar__link" href="{{ route('home') . '#about-us'}}">
                {{ __('О Нас') }}
            </a>
        </li>

        <li>
            <a class="navbar__link navbar__link--highlight" href="{{ route('products.index') }}">
                {{ __('Продукты') }}
            </a>
        </li>

        <li>
            <a class="navbar__link" href="{{ route('home') . '#our-presence'}}">
                {{ __('Контакты') }}
            </a>
        </li>

        <li>
            <a class="navbar__link" href="{{ route('home') . '#career'}}">
                {{ __('Карьера') }}
            </a>
        </li>
    </ul>
</nav>