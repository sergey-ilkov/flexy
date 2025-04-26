@extends('frontend.layouts.base')





@section('content')


{{-- ? services-hero --}}
<section class="services-hero">
    <div class="container">
        <div class="services-hero__inner">
            <div class="services-hero-content">
                <h1 class="services-hero__title title-h1">
                    <span class="accent-color">Оберай найкращі сервіси </span>
                    <br>
                    Отримуй знижки
                    <br>
                    Використовуй можливості
                </h1>

                @if (!auth('web')->user())

                <div class="services-hero__actions">
                    <button class="services-hero__btn btn-1 modal-btn" type="button" data-target="sign-up">Зареєструватись</button>

                    <a class="services-hero__link btn-2" href="about.html">Про нас</a>
                </div>


                @endif




            </div>

            <div class="services-hero-example">
                <div class="example-box bg-grd-1">
                    <div class="example-service">
                        <div class="example-service__col">
                            <img width="160" height="80" class="example-service__logo" src="{{ asset('images/services/credit-kasa.png') }}"
                                alt="Логотип Credit-Kasa">
                            <span class="example-service__title">“Credit-Kasa”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service-chart">8.9</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>
                    <div class="example-service">
                        <div class="example-service__col">
                            <img width="160" height="80" class="example-service__logo" src="{{ asset('images/services/e-money.png') }}"
                                alt="Логотип Є-гроші">
                            <span class="example-service__title">“Є-гроші”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service-chart">8.2</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>
                    <div class="example-service">
                        <div class="example-service__col">
                            <img width="160" height="80" class="example-service__logo"
                                src="{{ asset('images/services/selfie-credit.png') }}" alt="Логотип Selfie-credit">
                            <span class="example-service__title">“Selfie-credit”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service-chart">9.5</span>

                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>
                    <div class="example-service">
                        <div class="example-service__col">
                            <img width="160" height="80" class="example-service__logo" src="{{ asset('images/services/credit-plus.png') }}"
                                alt="Логотип Credit-Plus">
                            <span class="example-service__title">“Credit-Plus”</span>
                        </div>
                        <div class="example-service__col">
                            <ul class="example-service__list">
                                <li class="example-service__item"><span>Від 0,01%</span> - ставка в день</li>
                                <li class="example-service__item"><span>До 30 днів</span> - макс. термін</li>
                                <li class="example-service__item"><span>До 10 000 грн</span> - макс. сума</li>
                            </ul>
                            <span class="example-service__btn-show">Детальніше</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__stars"></span>
                            <span class="example-service__rating">(<span>2427</span> голосів)</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service-chart">9.2</span>
                        </div>
                        <div class="example-service__col">
                            <span class="example-service__btn">Отримати позику</span>
                        </div>
                    </div>
                </div>
            </div>

            <span class="services-hero-1 decor-grd-1"></span>
            <span class="services-hero-2 decor-grd-2"></span>
        </div>
    </div>
</section>





{{-- ? services --}}
<section id="services" class="services">

    <div class="services-preloader">
        <span class="services-preloader-text">Завантаження даних...</span>
        <span class="services-preloader-svg"></span>
    </div>

    <div class="container">


        <div id="services-tabs" class="services-tabs">

            <div class="services-tabs__buttons">
                <button class="services-tabs__btn" type="button">Кращий рейтинг</button>
                <button class="services-tabs__btn" type="button">Краще схвалення</button>
                <button class="services-tabs__btn" type="button">Краща вартість</button>

                @if (auth('web')->user())

                <button class="services-tabs__btn" type="button">Історія кредитів</button>

                @endif

            </div>

            <div class="services-tabs__content">

                <div class="services-accordion">
                    <button class="services-accordion__btn" type="button">
                        <span>Кращий рейтинг</span>
                        <svg viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L7 7L13 1" stroke="currentColor" />
                        </svg>
                    </button>
                    <div class="services-tabs__panel">
                        <div class="services-tabs__panel-top">
                            <h2 class="services-tabs__panel-title">F-рейтинг кредитних сервісів</h2>

                            <ul class="services-tabs__list">
                                <li class="services-tabs__item">
                                    F-рейтинг постійно оновлюється штучним інтелектом на основі багатьох факторів (таких як
                                    рівень
                                    погодження заявок, час прийняття рішення, вартість кредиту, відгуки позичальників та
                                    популярність
                                    сервісу)
                                </li>
                            </ul>
                        </div>
                        <p class="services-tabs__panel-subtitle">Рейтинг кредитних сервісів</p>


                        <div class="credit-services" data-category="f-rating"></div>

                    </div>
                </div>

                <div class="services-accordion">

                    <button class="services-accordion__btn" type="button">
                        <span>Краще схвалення</span>
                        <svg viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L7 7L13 1" stroke="currentColor" />
                        </svg>
                    </button>
                    <div class="services-tabs__panel">
                        <div class="services-tabs__panel-top">
                            <h2 class="services-tabs__panel-title">Рейтинг F-схвалення кредитних сервісів</h2>

                            <ul class="services-tabs__list">
                                <li class="services-tabs__item">
                                    Високий показник F-схвалення означає високу вирогідність погодження кредиту
                                </li>
                            </ul>
                        </div>
                        <p class="services-tabs__panel-subtitle">Рейтинг кредитних сервісів</p>


                        <div class="credit-services" data-category="f-approve"></div>

                    </div>
                </div>

                <div class="services-accordion">
                    <button class="services-accordion__btn" type="button">
                        <span>Краща вартість</span>
                        <svg viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L7 7L13 1" stroke="currentColor" />
                        </svg>
                    </button>
                    <div class="services-tabs__panel">
                        <div class="services-tabs__panel-top">
                            <h2 class="services-tabs__panel-title">Рейтинг F-вартість кредитних сервісів</h2>

                            <ul class="services-tabs__list">
                                <li class="services-tabs__item">
                                    Високий показник F-варість означає кредитний сервіс має менші відсоткові ставки
                                </li>
                            </ul>
                        </div>
                        <p class="services-tabs__panel-subtitle">Рейтинг кредитних сервісів</p>



                        <div class="credit-services" data-category="f-cost"></div>

                    </div>
                </div>


                @if (auth('web')->user())

                <div class="services-accordion">
                    <button class="services-accordion__btn" type="button">
                        <span>Історія кредитів</span>
                        <svg viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L7 7L13 1" stroke="currentColor" />
                        </svg>
                    </button>
                    <div class="services-tabs__panel">
                        <div class="services-tabs__panel-top">
                            <h2 class="services-tabs__panel-title">
                                Для коректного відображення історії заявок вам необхідно:
                            </h2>


                            <ul class="services-tabs__list">
                                <li class="services-tabs__item">
                                    увійти в особистий кабінет Flexy
                                </li>
                                <li class="services-tabs__item">
                                    обрати кредитний сервіс та натиснути кнопку "Отримати позику"
                                </li>
                                <li class="services-tabs__item">
                                    вам відкриється сайт кредитного обраного кредитного сервісу
                                </li>
                                <li class="services-tabs__item">
                                    подати заявку на кредит.
                                </li>
                            </ul>

                            <p class="services-tabs__text">
                                Ми отримуємо інформацію автоматично від кредитних сервісів протягом декількох годин.
                            </p>

                        </div>


                    </div>
                </div>

                @endif


            </div>

        </div>




    </div>
</section>



@endsection