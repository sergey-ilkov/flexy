@extends('frontend.layouts.base')


@once

@push('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css">

@endpush



@push('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" defer></script>

@endpush


@endonce


@section('content')

{{-- ? hero --}}
<section class="hero">
    <div class="container">
        <div class="hero__inner">
            <div class="hero-content">
                <h1 class="hero__title title-h1">
                    робимо кредити <span class="accent-color">дешевими <br> та доступними</span>
                </h1>
                <ul class="hero__list">
                    <li class="hero__item">Рейтинг кредитних сервісів</li>
                    <li class="hero__item">Промокоди для економії</li>
                    <li class="hero__item">Висока імовірність отримання</li>
                </ul>


                @if (auth('web')->user())

                <a class="example__link btn-1" href="{{ route('services') }}">Подивитись рейтинг</a>

                @else

                <button class="hero__btn btn-1 modal-btn" type="button" data-target="sign-up">Зареєструватись</button>

                @endif



            </div>
            <img width="533" height="533" class="hero__img" src="{{ asset('images/home/hero.webp') }}" alt="Дівчина реєструється на flexy">
            <span class="hero-decor-1 decor-grd-1"></span>
            <span class="hero-decor-2 decor-grd-2"></span>
        </div>
    </div>
</section>

{{-- ? examples-services --}}
<section class="examples-services">
    <div class="container">
        <div class="examples">
            <div class="example example-1">
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
                            <div class="example-service-chart__box">
                                <span class="example-service-chart">9.5</span>
                                <span class="example-service-chart__name">F-рейтинг</span>
                            </div>

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
                <div class="example-content">
                    <h2 class="example__title title-h2">
                        <span class="accent-color"> F-Рейтинг</span>
                        <br>
                        кредитних сервісів
                    </h2>
                    <div class="example-desc">
                        <p class="example__text">
                            Обери сервіс для для отримання кредиту,
                            <br>
                            який відповідає твоїм потребам
                        </p>
                    </div>

                    <a class="example__link btn-1" href="{{ route('services') }}">Подивитись рейтинг</a>

                </div>

                <div class="example-1__decor-1 decor-grd-1"></div>
                <div class="example-1__decor-2 decor-grd-1"></div>

            </div>



            <div class="example example-2">
                <div class="example-content">
                    <h2 class="example__title title-h2">
                        <span class="accent-color"> F-Рейтинг</span> постійно оновлюється ШІ на основі
                    </h2>
                </div>

                <div class="example-scheme">

                    <div class="example-scheme__box">
                        <span class="example-scheme__box-rating">9.5</span>
                        <span class="example-scheme__box__name">F-рейтинг</span>
                    </div>

                    <div class="example-scheme__items">
                        <div class="example-scheme__item bg-grd-1">
                            <span class="example-scheme__item-icon"></span>
                            <span>Рівня схвалення заявок сервісом</span>
                        </div>
                        <div class="example-scheme__item bg-grd-1">
                            <span class="example-scheme__item-icon"></span>
                            <span>Вартості кредиту (відсотків)</span>
                        </div>
                        <div class="example-scheme__item bg-grd-1">
                            <span class="example-scheme__item-icon"></span>
                            <span>Популярності вибору сервісу</span>
                        </div>
                        <div class="example-scheme__item bg-grd-1">
                            <span class="example-scheme__item-icon"></span>
                            <span> Реальних відгуків про компанію</span>
                        </div>
                        <div class="example-scheme__item bg-grd-1">
                            <span class="example-scheme__item-icon"></span>
                            <span> Часу на прийняття рішення</span>
                        </div>
                    </div>
                </div>

                <div class="example-2__decor-1 decor-grd-1"></div>
                <div class="example-2__decor-2 decor-grd-1"></div>

            </div>



            <div class="example example-3">

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
                            <div class="example-service-chart__box">
                                <span class="example-service-chart">9.5</span>
                                <span class="example-service-chart__name">F-схвалення</span>
                            </div>

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

                <div class="example-content">
                    <h2 class="example__title title-h2">
                        <span class="accent-color"> F-схвалення</span>
                        <br>
                        Кредити
                        <span class="accent-color">без відмов</span>
                    </h2>
                    <div class="example-desc">

                        <p class="example__text">
                            Подавай заявки в кредитні сервіси
                            <br>
                            де найчастіше погоджують заявки
                            <br>
                            (на основі рейтингу F-схвалення)
                        </p>
                    </div>
                    <a class="example__link btn-1" href="{{ route('services') }}">Подивитись рейтинг</a>
                </div>

                <div class="example-3__decor-1 decor-grd-2"></div>
                <div class="example-3__decor-2 decor-grd-1"></div>

            </div>




            <div class="example example-4">

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
                            <div class="example-service-chart__box">
                                <span class="example-service-chart">9.5</span>
                                <span class="example-service-chart__name">F-вартість</span>
                            </div>

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

                <div class="example-content">
                    <h2 class="example__title title-h2">
                        <span class="accent-color"> F-Вартість</span>
                        <br>
                        Кредити
                        <span class="accent-color">без відсотків</span>
                    </h2>
                    <div class="example-desc">

                        <p class="example__text">
                            Подавай заявки в кредитні сервіси
                            <br>
                            із мінімальною відсотковою ставкою
                            <br>
                            (на основі рейтингу F-вартість)
                        </p>
                    </div>
                    <a class="example__link btn-1" href="{{ route('services') }}">Подивитись рейтинг</a>
                </div>

                <div class="example-4__decor-1 decor-grd-1"></div>
                <div class="example-4__decor-2 decor-grd-1"></div>

            </div>




            <div class="example example-5">

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
                    <div class="example-service example-service-column">
                        <div class="example-service-top">
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

                        <div class="example-service-promocode">
                            <div class="example-service-promocode__row">
                                <span class="example-service-promocode__col">Промокод:</span>
                                <span class="example-service-promocode__col">TRY100</span>
                            </div>
                            <div class="example-service-promocode__row">
                                <span class="example-service-promocode__col">Знижка по промокоду:</span>
                                <span class="example-service-promocode__col">50%</span>
                            </div>
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



                </div>

                <div class="example-content">
                    <h2 class="example__title title-h2">
                        Промокоди на
                        <br>
                        <span class="accent-color">знижку до 70%</span>
                    </h2>
                    <div class="example-desc">

                        <p class="example__text">
                            Реєструйся та дивись найвигідніши
                            <br>
                            промокоди в кредитних сервісах
                        </p>
                    </div>

                    @if (auth('web')->user())

                    <a class="example__link btn-1" href="{{ route('services') }}">Подивитись рейтинг</a>

                    @else

                    <button class="example__btn btn-1 modal-btn" type="button" data-target="sign-up">Зареєструватись</button>

                    @endif


                </div>

                <div class="example-5__decor-1 decor-grd-2"></div>
                <div class="example-5__decor-2 decor-grd-1"></div>

            </div>




            <div class="example example-6">

                <div class="example-box">

                    <p class="example-box__text">
                        Натомість ти користуєшся
                        <br>
                        <span class="accent-color">Flexy-промокодом</span>
                        і економиш
                        <span class="accent-color">150 грн.</span>
                    </p>
                    <div class="example-box__items">
                        <div class="example-box__item">
                            <span>Промокод</span>
                            <span>+86₴</span>
                        </div>
                        <div class="example-box__item">
                            <span>Промокод</span>
                            <span>+120₴</span>
                        </div>
                        <div class="example-box__item">
                            <span>Промокод</span>
                            <span>+258₴</span>
                        </div>
                    </div>


                </div>

                <div class="example-content">
                    <h2 class="example__title title-h2">
                        Приклад зменешення
                        <br>
                        витрат по кредиту
                        <br>
                        за рахунок промокоду
                    </h2>
                    <div class="example-desc">

                        <p class="example__text">
                            Тобі потрібно
                            <span class="color-white">2 000 грн</span>
                            до наступної з/п (на 15 днів).

                        </p>
                        <p class="example__text">

                            Якщо візьмеш цю суму без промокоду, то в
                            середньому переплатиш
                            <span class="color-red">300 грн відсотків.</span>
                        </p>
                    </div>

                    @if (auth('web')->user())

                    <a class="example__link btn-1" href="{{ route('services') }}">Подивитись рейтинг</a>

                    @else

                    <button class="example__btn btn-1 modal-btn" type="button" data-target="sign-up">Зареєструватись</button>

                    @endif

                </div>

                <div class="example-6__decor-1 decor-grd-2"></div>

            </div>





            <div class="example example-7">

                <div class="example-box">

                    <div id="services-slider" class="services-slider swiper">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="services-slider__item">
                                    <img width="160" height="80" class="services-slider__item-img"
                                        src="{{ asset('images/services/credit-kasa.png') }}" alt="Логотип Credit-Kasa">
                                    <span class="services-slider__item-title">Credit-Kasa</span>
                                    <span class="services-slider__item-btn">Змінити</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-slider__item">
                                    <img width="160" height="80" class="services-slider__item-img"
                                        src="{{ asset('images/services/selfie-credit.png') }}" alt="Логотип SELFIE credit">
                                    <span class="services-slider__item-title">SELFIE credit</span>
                                    <span class="services-slider__item-btn">Змінити</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-slider__item">
                                    <img width="160" height="80" class="services-slider__item-img"
                                        src="{{ asset('images/services/credit-plus.png') }}" alt="Логотип Credit-Plus">
                                    <span class="services-slider__item-title">Credit-Plus</span>
                                    <span class="services-slider__item-btn">Змінити</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-slider__item">
                                    <img width="160" height="80" class="services-slider__item-img"
                                        src="{{ asset('images/services/credit-kasa.png') }}" alt="Логотип Credit-Kasa">
                                    <span class="services-slider__item-title">Credit-Kasa</span>
                                    <span class="services-slider__item-btn">Змінити</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-slider__item">
                                    <img width="160" height="80" class="services-slider__item-img"
                                        src="{{ asset('images/services/selfie-credit.png') }}" alt="Логотип SELFIE credit">
                                    <span class="services-slider__item-title">SELFIE credit</span>
                                    <span class="services-slider__item-btn">Змінити</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services-slider__item">
                                    <img width="160" height="80" class="services-slider__item-img"
                                        src="{{ asset('images/services/credit-plus.png') }}" alt="Логотип Credit-Plus">
                                    <span class="services-slider__item-title">Credit-Plus</span>
                                    <span class="services-slider__item-btn">Змінити</span>
                                </div>
                            </div>



                        </div>

                        <div class="swiper-pagination"></div>

                    </div>

                </div>

                <div class="example-content">
                    <h2 class="example__title title-h2">
                        <span class="accent-color">Зміна</span>
                        кредитних
                        <br>
                        сервісів

                    </h2>
                    <div class="example-desc">

                        <p class="example__text">
                            Ми запам'ятаємо в яких сервісах ви вже взяли кредит та запропонуємо нові щоб ви обрали найкращий
                        </p>
                    </div>

                    @if (auth('web')->user())

                    <a class="example__link btn-1" href="{{ route('services') }}">Подивитись рейтинг</a>

                    @else

                    <button class="example__btn btn-1 modal-btn" type="button" data-target="sign-up">Зареєструватись</button>

                    @endif

                </div>

                <div class="example-7__decor-1 decor-grd-1"></div>

            </div>



            <div class="example example-8">

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
                    <div class="example-service example-service-column">
                        <div class="example-service-top">

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
                                <span class="example-service__btn-2">Отримати позику</span>
                            </div>
                        </div>
                        <div class="example-newbtn-wrapper">
                            <div class="example-newbtn">
                                <span class="example-newbtn-icon"></span>
                                <span>Сховати</span>
                            </div>
                            <span class="example-newbtn-decor"></span>
                        </div>

                    </div>

                </div>

                <div class="example-content">
                    <h2 class="example__title title-h2">
                        <span class="accent-color">Приховуйте сервіси</span>
                        <br>
                        які вам не підійшли
                    </h2>
                    <div class="example-desc">

                        <p class="example__text">
                            Щоб не звертати на них увагу
                            <br>
                            в майбутньому
                        </p>
                    </div>

                    @if (auth('web')->user())

                    <a class="example__link btn-1" href="{{ route('services') }}">Подивитись рейтинг</a>

                    @else

                    <button class="example__btn btn-1 modal-btn" type="button" data-target="sign-up">Зареєструватись</button>

                    @endif

                </div>

                <div class="example-8__decor-1 decor-grd-1"></div>


            </div>



            <div class="example example-9">

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
                    <div class="example-service example-service-column">
                        <div class="example-service-top">

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
                                <span class="example-service__btn-2">Отримати позику</span>
                            </div>
                        </div>
                        <div class="example-newbtn-wrapper">
                            <div class="example-newbtn">
                                <span class="example-newbtn-icon"></span>
                                <span>Історія</span>
                            </div>
                            <span class="example-newbtn-decor"></span>
                        </div>

                    </div>

                    <div class="example-modal bg-grd-1">
                        <span class="example-modal__title">Історія</span>
                        <div class="example-modal__items">
                            <div class="example-modal__item">
                                <span class="example-modal__item-col">Дія</span>
                                <span class="example-modal__item-col">Дата</span>
                            </div>
                            <div class="example-modal__item">
                                <span class="example-modal__item-col">Заявка на кредит (схвалено)</span>
                                <span class="example-modal__item-col">10.12.2024</span>
                            </div>
                            <div class="example-modal__item">
                                <span class="example-modal__item-col">Ви сховали сервіс</span>
                                <span class="example-modal__item-col">10.12.2024</span>
                            </div>
                            <div class="example-modal__item">
                                <span class="example-modal__item-col">Ви активували сервіс</span>
                                <span class="example-modal__item-col">10.12.2024</span>
                            </div>
                            <div class="example-modal__item">
                                <span class="example-modal__item-col">Заявка на кредит (на розгляді)</span>
                                <span class="example-modal__item-col">10.12.2024</span>
                            </div>
                        </div>

                        <span class="example-modal__btn">Закрити</span>
                    </div>

                </div>

                <div class="example-content">
                    <h2 class="example__title title-h2">
                        Ваша
                        <span class="accent-color">історія дій</span>
                    </h2>
                    <div class="example-desc">

                        <p class="example__text">
                            Дивіться історію взаємодії із кожним
                            <br>
                            кредитним сервісом щоб нічого не забути
                        </p>
                    </div>

                    @if (auth('web')->user())

                    <a class="example__link btn-1" href="{{ route('services') }}">Подивитись рейтинг</a>

                    @else

                    <button class="example__btn btn-1 modal-btn" type="button" data-target="sign-up">Зареєструватись</button>

                    @endif

                </div>

                <div class="example-9__decor-1 decor-grd-1"></div>

            </div>


        </div>

    </div>
</section>


{{-- ? why --}}
<section class="why">
    <div class="container">
        <h2 class="why__title title-h2">
            Чому
            <span class="accent-color">варто</span>
            обрати FLEXY
        </h2>
        <div class="why__items">
            <div class="why__item bg-grd-1">
                <span class="why__item-icon"></span>
                <h3 class="why__item-title">Рейтинг сервісів F-рейтинг</h3>
                <p class="why__item-text">
                    Ми постійно аналізуємо вартість, рівень погодження та зручність сервісів які пропонуємо вам
                </p>
            </div>
            <div class="why__item bg-grd-1">
                <span class="why__item-icon"></span>
                <h3 class="why__item-title">Економія грошей</h3>
                <p class="why__item-text">
                    Плати менше по відсотках застосовуючи промокоди
                </p>
            </div>
            <div class="why__item bg-grd-1">
                <span class="why__item-icon"></span>
                <h3 class="why__item-title">Секретні промокоди</h3>
                <p class="why__item-text">
                    Зареєструвавшись в сервісі ти отримуєш доступ до унікальних промокодів, яких немає в откритому доступі
                </p>
            </div>
            <div class="why__item bg-grd-1">
                <span class="why__item-icon"></span>
                <h3 class="why__item-title">Всі сервіси в одному місці</h3>
                <p class="why__item-text">
                    Ми зібрали для вас усі найкращі кредитні сервіси в одному місці, щоб ви не витрачали час на їх пошук та
                    аналіз
                </p>
            </div>
            <div class="why__item bg-grd-1">
                <span class="why__item-icon"></span>
                <h3 class="why__item-title">Персональні пропозиції</h3>
                <p class="why__item-text">
                    В вашому особистому кабінеті ми покажемо вам найкращі варіанти кредитів, сформовані на основі вашого
                    кредитного рейтингу та бонусів
                </p>
            </div>
            <div class="why__item bg-grd-1">
                <span class="why__item-icon"></span>
                <h3 class="why__item-title">Ваша історія</h3>
                <p class="why__item-text">
                    Дивіться історію ваших звернень в кредитні сервіси щоб розуміти ваши можливості звернутися в інші
                </p>
            </div>
        </div>
    </div>
</section>


{{-- ? reviews --}}

@include('frontend.includes.reviews')




{{-- ? why --}}
<section class="faq">
    <div class="container">
        <h2 class="faq__title title-h2">Часті питання</h2>

        <div id="faq-accordion" class="faq__items">

            <div class="faq__item">
                <button class="faq-item__btn" type="button">
                    Що таке кредитний кешбек
                    <span class="faq-item__btn-icon"></span>
                </button>
                <div class="faq-item-content">
                    <p class="faq-item__text">
                        Отримуйте додатковий дохід із сервісом кешбеку, який інколи навіть може перевищувати плату
                        закредитОтримуйте додатковий дохід із сервісом кешбеку, який інколи навіть може перевищувати плату
                        закредит
                    </p>
                </div>
            </div>
            <div class="faq__item">
                <button class="faq-item__btn" type="button">
                    Як отримати кредитний кешбек
                    <span class="faq-item__btn-icon"></span>
                </button>
                <div class="faq-item-content">
                    <p class="faq-item__text">
                        Отримуйте додатковий дохід із сервісом кешбеку, який інколи навіть може перевищувати плату
                        закредитОтримуйте додатковий дохід із сервісом кешбеку, який інколи навіть може перевищувати плату
                        закредит
                    </p>
                    <p class="faq-item__text">
                        Отримуйте додатковий дохід із сервісом кешбеку, який інколи навіть може перевищувати плату
                        закредитОтримуйте додатковий дохід із сервісом кешбеку, який інколи навіть може перевищувати плату
                        закредит
                    </p>
                </div>
            </div>
            <div class="faq__item">
                <button class="faq-item__btn" type="button">
                    Що таке кредитний кешбек
                    <span class="faq-item__btn-icon"></span>
                </button>
                <div class="faq-item-content">
                    <p class="faq-item__text">
                        Отримуйте додатковий дохід із сервісом кешбеку, який інколи навіть може перевищувати плату
                        закредитОтримуйте додатковий дохід із сервісом кешбеку, який інколи навіть може перевищувати плату
                        закредит
                    </p>
                </div>
            </div>
        </div>
        <div class="faq-decor decor-grd-1"></div>
    </div>
</section>



@endsection