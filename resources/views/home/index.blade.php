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
                <h2 class="greeting__subtitle">Vegapharm — Путеводная звезда</h2>
                <h1 class="greeting__title">Здоровья</h1>
                <a class="greeting__link button button--main button_with_red_icon" href="#"> Все препараты
                    <span class="material-icons-outlined">arrow_forward</span>
                </a>
            </div>

            <x-navbar />
        </div>
    </div>
</section>  {{-- Greeting end --}}

{{-- Stars start --}}
<section class="stars-section">
    <div class="stars-section__inner main-container">
        <h1 class="stars-section__title main-title">7 звезд Vegapharm</h1>
        <p>В основе крепкого здоровья и комфортного самочувствия лежит 7 добродетелей, 7 постулатов. Все они являются основой и для деятельности Vegapharm.</p>

        <div class="stars-carousel-container owl-carousel-container">
            <div class="stars-carousel owl-carousel" id="stars-carousel">
                @foreach ($stars as $star)
                    <div class="stars-carousel__item">
                        <div class="stars-carousel__item-header">
                            <span class="stars-carousel__item-icon">
                                <svg>
                                    <use href="#star-svg"></use>
                                </svg>
                            </span>
    
                            {{ $star->translate('title') }}
                        </div>
    
                        <p class="stars-carousel__item-text">{{ $star->translate('description') }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>  {{-- Stars end --}}


{{-- About us start --}}
<section class="about-us" style="background-image: url({{ asset('img/home/about-bg.png') }})">
    <div class="about-us__inner main-container">
        <h1 class="about-us__title main-title">О нас</h1>
        <div class="about-us__text">
            <p>Vegapharm – молодая и быстрорастущая фармацевтическая компания, основанная в 2000 году.</p>
            <p>В наше время открываются новые возможности, которые помогают преодолевать вызовы постоянно меняющегося окружения. Успешная фармацевтическая компания должно базироваться на гибких и на экономически целесообразных, международных бизнес- процессах, чтобы принять новые возможности для изменений.</p>
            <p>Компания Vegapharm – это именно та международная фармацевтическая компания, которая рассматривает любые изменения в окружающем нас мире не как препятствия, а как возможности и перспективы. Vegapharm занимается разработкой и маркетингом фармацевтической продукции.</p>
            <p>Она образована специалистами с большим стажем работы в области разработки, маркетинга и продвижения фармацевтической продукции. Благодаря деятельности нашей фармацевтической компании, врачи имеют возможность широкого выбора лекарственных препаратов и тщательного их подбора для конкретных пациентов. Они получают от наших сотрудников исчерпывающую информацию о новых разработках в области современной медицины.</p>
        </div>
    </div>
</section>  {{-- About us end --}}


{{-- Corporate culture start --}}
<section class="corporate-culture">
    <div class="corporate-culture__inner main-container">
        <ul class="corporate-culture__list">
            <li class="corporate-culture__card">
                <span class="corporate-culture__card-icon">
                    <svg>
                        <use href="#mission-svg"></use>
                    </svg>
                </span>

                <div class="corporate-culture__card-body">
                    <h2 class="corporate-culture__card-title">Миссия</h2>
                    <p class="corporate-culture__card-text">
                        Способствовать росту качественных и доступных лекарства на рынках стран присутствия, а также предлагать новые методы лечения для разных направлений современной медицины. Мы стремимся улучшать здоровье и жизнь наших соотечественников.
                    </p>
                </div>
            </li>

            <li class="corporate-culture__card">
                <span class="corporate-culture__card-icon">
                    <svg>
                        <use href="#vision-svg"></use>
                    </svg>
                </span>

                <div class="corporate-culture__card-body">
                    <h2 class="corporate-culture__card-title">Видение</h2>
                    <p class="corporate-culture__card-text">
                        Укрепление позиций Vegapharm как одной из ведущих мировых фармацевтических компаний. Мы реализуем видение будущего, оставаясь независимым предприятием и укрепляя коммерческие связи и партнерские отношения в области развития и рекламы.
                    </p>
                </div>
            </li>

            <li class="corporate-culture__card">
                <span class="corporate-culture__card-icon">
                    <svg>
                        <use href="#strategy-svg"></use>
                    </svg>
                </span>

                <div class="corporate-culture__card-body">
                    <h2 class="corporate-culture__card-title">Стратегия</h2>
                    <p class="corporate-culture__card-text">
                        Vegapharm постоянно развивается и растет. Мы сосредоточены на всём, что делаем, ставим чёткие цели и концентрируем на них наши усилия, внимание и энергию. Наша компания делает то, о чём говорит, и считает себя ответственными за все наши действия. 
                    </p>
                </div>
            </li>
        </ul>
    </div>
</section>  {{-- Corporate culture end --}}


{{-- Achievements start --}}
<section class="achievements-section">
    <div class="achievements-section__inner main-container">
        <h1 class="achievements-section__title main-title">Достижения и номинации</h1>
        <p>Vegapharm получил общественное признание за активный вклад в развитие медицины, которое выражается в многочисленных наградах и номинациях:</p>

        <div class="achievements-carousel-container owl-carousel-container">
            <div class="achievements-carousel owl-carousel" id="achievements-carousel">
                @foreach ($achievements as $achievement)
                    <div class="achievements-carousel__item">
                        <div class="achievements-carousel__item-header">
                            <span class="achievements-carousel__item-icon">
                                <svg>
                                    <use href="#achievement-svg"></use>
                                </svg>
                            </span>
    
                            <div class="achievements-carousel__item-header-text">
                                {{ $achievement->year }}<br>
                                {{ $achievement->translate('title') }}
                            </div>
                        </div>

                        <img class="achievements-carousel__item-image" src="{{ asset('img/achievements/' . $achievement->image) }}" alt="{{ $achievement->translate('title') }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>  {{-- Achievements end --}}


{{-- Activity start --}}
<section class="activity-section" style="background-image: url({{ asset('img/home/activity-bg.png') }})">
    <div class="activity-section__inner main-container">
        <h1 class="activity-section__title main-title">Общественная деятельность</h1>
        <div class="activity-section__text">
            <p>Являясь признанным лидером фармацевтической отрасли, Vegapharm успешно подает пример остальным, благодаря своей активной благотворительной деятельности. Время от времени компания организует благотворительные велопробеги для детей с сахарным диабетом и спонсирует детские представления в кукольном театре. Также ежегодно Vegapharm проводит праздник в поддержку детей с синдромом Дауна.</p>
        </div>
    </div>
</section>  {{-- Activity end --}}


{{-- Home Global start --}}
<section class="home__global">
    <div class="home__global__inner main-container">
        {{-- Home Products start --}}
        <div class="home-products">
            <h1 class="home-products__title main-title">Наша продукция</h1>
            <div class="home-products__text">
                <p>Мы производим качественные препараты для разной отрасли медицины</p>
            </div>

            <ul class="home-products__categories-list">
                @foreach ($categories as $category)
                    <li class="home-products__categories-item">
                        <a class="home-products__categories-link" href="#">
                            <span class="material-icons-outlined">east</span>
                            {{ $category->title }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <div class="home-products__categories-more-container">
                <a class="home-products__categories-more button button--main button_with_red_icon" href="#">
                    Все препараты
                    <span class="material-icons-outlined">arrow_forward</span>
                </a>
            </div>
        </div>  {{-- Home Products end --}}

        {{-- Our presence start --}}
        <div class="our-presence">
            <h1 class="our-presence__title main-title">Наше присутствие</h1>
            <div class="our-presence__text">
                <p>Основными достижениями компании Vegapharm является постоянно растущее число долгосрочных контрактов с клиентами, которые работают на мировом фармацевтическом рынке и партнеров производителей в Европе и Азии. Это подтверждает соответствие наших услуг существующим современным требованиям клиентов и партнеров. Компания постоянно работает над расширением спектра услуг аутсорсинга. В нашем лице Клиент получает не только исполнителя, но и надежного партнера.</p>
            </div>
        </div>  {{-- Our presence end --}}

        {{-- Presence Globe start --}}
        <div class="presence-globe">
            <div class="presence-globe__panel theme-styled-block">
                <div class="presence-globe__cities">
                    <h3 class="presence-globe__title">Основные региональные офисы</h3>
                    <ul class="presence-globe__list">
                        @foreach ($cities as $city)
                            <li>
                                <button class="presence-globe__button
                                    @if($loop->first) presence-globe__button--active @endif" data-action="switch-presence-tab" data-target-id="city{{ $city->id }}">{{ $city->translate('title') }}
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </div>
    
                <div class="presence-globe__countries">
                    <h3 class="presence-globe__title">Страны обслуживания</h3>
                    <ul class="presence-globe__list">
                        @foreach ($countries as $country)
                            <li>
                                <button class="presence-globe__button" data-action="switch-presence-tab" data-target-id="country{{ $country->id }}">{{ $country->translate('title') }}</button>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <img class="presence-globe__image" src="{{ asset('img/home/globe.png') }}" alt="globe">
            </div>

            <div class="presence-globe__tabs">
                @foreach ($cities as $city)
                    <div class="presence-globe__tabs-item @if($loop->first) presence-globe__tabs-item--active @endif" data-id="city{{ $city->id }}">
                        <p>Адрес регионального офиса:<br>{{ $city->translate('address') }}</p>
                        <p>Телефон:<br>{{ $city->translate('phone') }}</p>
                        <p>Почта:<br>{{ $city->translate('email') }}</p>
                    </div>
                @endforeach

                @foreach ($countries as $country)
                    <div class="presence-globe__tabs-item" data-id="country{{ $country->id }}">
                        <p>Адрес регионального офиса:<br>{{ $country->translate('address') }}</p>
                        <p>Телефон:<br>{{ $country->translate('phone') }}</p>
                        <p>Почта:<br>{{ $country->translate('email') }}</p>
                    </div>
                @endforeach
            </div>
        </div>  {{-- Presence Globe end --}}

        <div class="career-feedback-divider">
            <div class="career-feedback-divider__inner">
                <div class="career-block">
                    <h1 class="career-block__title main-title">Карьера</h1>
                    <div class="career-block__text theme-styled-block">
                        <p>Сотрудники – основной актив компании Vegapharm открывает свои двери всем желающим приобрести международный опыт в сфере фармацевтики. Мы придерживаемся высокой кадровой политики компании, которая направлена на развитие сплоченной команды высококвалифицированных, талантливых и амбициозных профессионалов.</p>
                        <p>Эффективные коммуникации внутри компании, вовлеченность каждого сотрудника в достижение поставленных целей, прозрачная система мотивации, профессионального и карьерного роста определяют успешное динамичное развитие компании Vegapharm.</p>
                    </div>
                </div>

                <div class="feedback-block">
                    <h1 class="feedback-block__title main-title">Обратная связь</h1> 
                    <form class="feedback-form theme-styled-block" action="#" method="POST">
                        <div class="form-group">
                            <input class="feedback-input" type="text" name="name" placeholder="Имя*" required>
                            <input class="feedback-input" type="text" name="email" placeholder="Почта*" required>
                        </div>

                        <div class="form-group">
                            <input class="feedback-input" type="text" name="theme" placeholder="Тема обращения">
                        </div>

                        <div class="form-group form-group--grow">
                            <textarea class="feedback-textarea" name="body" rows="5" placeholder="Ваш текст"></textarea>
                        </div>

                        <button class="feedback-submit button button--main button_with_light_icon">
                            Отправить <span class="material-icons-outlined">arrow_forward</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>  {{-- Home Global Inner end --}}
</section>  {{-- Home Global end --}}

@endsection