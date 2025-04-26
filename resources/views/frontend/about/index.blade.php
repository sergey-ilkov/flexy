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



{{-- ? about-hero --}}
<section class="about-hero">
    <div class="container">

        <div class="about-hero__items">
            <div class="about-hero__item">
                <h1 class="about-hero__title">
                    <span class="accent-color">Flexy –</span>
                    РОБИМО КРЕДИТИ ДЕШЕВШИМИ ТА ДОСТУПНІШИМИ
                </h1>
            </div>

            <div class="about-hero__item">
                <p class="about-hero__subtitle title-decor">
                    ХТО МИ
                </p>

                <div class="about-hero-content">
                    <p class="about-hero__text">
                        Flexy – команда ентузіастів, яка на власному досвіді знає як важко буває отримати кредит саме тоді, коли
                        це
                        найбільш потрібно.
                    </p>
                    <p class="about-hero__text">
                        І ми чудово розуміємо, як складно погашати кредит, враховуючи високі відсотки.
                    </p>

                </div>

            </div>

            <span class="about-hero-decor-1 decor-grd-1"></span>
            <span class="about-hero-decor-2 decor-grd-2"></span>

        </div>

    </div>
</section>

{{-- ? mission --}}
<section class="mission">
    <div class="container">
        <div class="mission__items">

            <div class="mission__item">
                <h2 class="mission__item__title title-decor">
                    Наша місія
                </h2>
                <p class="mission__text">
                    Надати людям можливість вільно користуватися кредитами без ризику потрапити в кредитну залежність через
                    великі нараховані відсотки.
                </p>
            </div>
            <div class="mission__item">
                <div class="mission-content">
                    <span class="mission-content__title">
                        Щоб допомогти вам, ми розробили сервіс, який:
                    </span>
                    <ul class="mission-list">
                        <li class="mission-list__item">
                            Дозволяє суттєво знизити вартість кредиту за рахунок промокодів.
                        </li>
                        <li class="mission-list__item">
                            Мати об'єктивну інформацію про кредитні сервіси з найкращими умовами саме для вас.
                        </li>
                    </ul>
                </div>

                <div class="mission-image">
                    <img width="648" height="552" class="mission__img" src="{{ asset('images/about/mission.webp') }}" alt="">
                </div>

            </div>



            <span class="mission-decor-1 decor-grd-1"></span>
            <span class="mission-decor-2 decor-grd-1"></span>
        </div>
    </div>
</section>

{{-- ? reviews --}}

@include('frontend.includes.reviews')




@endsection