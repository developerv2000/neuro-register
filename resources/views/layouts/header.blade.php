<header class="header styled-box">
    <div class="header__inner main-container">
        <x-other.logo class="header__logo" />

        <form class="logout-form" action="/logout" method="POST">
            @csrf
            <x-form.submit class="logout-form__button" style="transparent">Выйти</x-form.submit>
        </form>
    </div>
</header>
