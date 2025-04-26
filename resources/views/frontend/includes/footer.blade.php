<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <img width="140" height="62" class="footer-logo" src="{{ asset('images/logo.svg') }}" alt="logo">
            <ul class="footer-menu">
                <li class="footer-menu__item">
                    <a class="footer-menu__link {{ active_link('home') }}" href="{{ route('home') }}">Головна</a>
                </li>
                <li class="footer-menu__item">
                    <a class="footer-menu__link {{ active_link('services') }}" href="{{ route('services') }}">Кредитні сервіси</a>
                </li>
                <li class="footer-menu__item">
                    <a class="footer-menu__link {{ active_link('blog') }}" href="{{ route('blog') }}">Блог</a>
                </li>
                <li class="footer-menu__item">
                    <a class="footer-menu__link {{ active_link('about') }}" href="{{ route('about') }}">Про нас</a>
                </li>
            </ul>

            @if (auth('web')->user())

            <a class="example__link btn-1" href="{{ route('services') }}">Подивитись рейтинг</a>

            @else

            <button class="footer__btn btn-1 modal-btn" type="button" data-target="sign-up">Зареєструватись</button>

            @endif



        </div>
        <p class="copyright">(с) Всі права захищено 2024</p>
    </div>
</footer>