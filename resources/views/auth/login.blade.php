@extends('auth.app', ['page' => 'login-page'])

@section('main')
    <div class="auth-box styled-box">
        <x-other.logo class="auth-box__logo" />

        <form class="form login-form" action="/login" method="POST">
            @csrf

            <x-form.group-validateable label="Электронная почта" error-name="email" required="true">
                <input class="input" type="email" name="email" value="{{ old('email') }}" autofocus required>
            </x-form.group-validateable>

            <x-form.group-validateable label="Пароль" error-name="password" required="true">
                <input class="input" type="password" name="password" autocomplete="current-password" minlength="4" required>
            </x-form.group-validateable>

            <x-form.submit style="main">Войти</x-form.submit>
        </form>
    </div>
@endsection
