<footer class="footer">
    <div class="footer__inner main-container">
        <a class="logo footer__logo" href="{{ route('home') }}">
            <img class="logo__image" src="{{ asset('img/main/logo-white.png') }}" alt="Vegapharm logo">
        </a>

        <div class="footer__main">
            <x-navbar />

            <div class="footer__contacts">
                <p class="footer__contacts-item">
                    © 2009-2021 Vegapharm.<br>
                    Все права защищены.
                </p>

                <p class="footer__contacts-item">
                    Адрес регионального офиса:<br>
                    “Vegapharm” улица Н.Карабаева 78/1
                </p>

                <p class="footer__contacts-item">
                    Телефон:<br>
                    (+992) 93-444-26-44
                </p>

                <p class="footer__contacts-item">
                    Почта:<br>
                    info@vegapharm.tj
                </p>
            </div>
        </div>

        <button class="scroll-top"><span class="material-icons-outlined">arrow_upward</span></button>
    </div>
</footer>