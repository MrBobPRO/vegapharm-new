<footer class="footer">
    <div class="footer__inner main-container">
        <a class="logo footer__logo" href="{{ App\Support\Helper::generateRoute('home') }}">
            <img class="logo__image" src="{{ asset('img/main/logo-white.png') }}" alt="Vegapharm logo">
        </a>

        <div class="footer__main">
            <x-navbar />

            <div class="footer__contacts">
                <p class="footer__contacts-item">
                    © 2009-{{ date('Y') }} Vegapharm.<br>
                    {{ __('Все права защищены') }}.
                </p>

                <p class="footer__contacts-item">
                    {{ __('Адрес регионального офиса') }}:<br>
                    {{ App\Models\Option::getByKey('regional-office-address')->translate('value') }}
                </p>

                <p class="footer__contacts-item">
                    {{ __('Телефон') }}:<br>
                    {{ App\Models\Option::getByKey('phone')->translate('value') }}
                </p>

                <a class="footer__contacts-item" href="#">
                    {{ __('Почта') }}:<br>
                    {{ App\Models\Option::getByKey('email')->translate('value') }}
                </a>
            </div>
        </div>

        <button class="scroll-top"><span class="material-icons-outlined">arrow_upward</span></button>
    </div>
</footer>