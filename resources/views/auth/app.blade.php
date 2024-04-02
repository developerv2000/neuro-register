<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('img/main/favicon.png') }}">

    <title>{{ __('Login') }}</title>

    {{-- Styles --}}
    @vite('resources/css/app.css')
</head>

<body class="body {{ $page }}" style="background-image: url('{{ asset('img/main/bg.png') }}')">
    <main class="main">
        @yield('main')
    </main>
</body>

</html>
