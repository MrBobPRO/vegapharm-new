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
                <a class="greeting__link" href="#"> Все препараты
                    <span class="material-icons-outlined greeting__link-icon">arrow_forward</span>
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
</section>  {{-- Greeting end --}}


{{-- Stars start --}}
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
</section>  {{-- Greeting end --}}


{{-- Stars start --}}
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
</section>  {{-- Greeting end --}}


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
</section>  {{-- Greeting end --}}

@endsection