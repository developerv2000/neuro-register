<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('img/main/favicon.png') }}">

    <title>НЕЙРОРЕГИСТР</title>

    <link rel="stylesheet" href="{{ asset('plugins/normalize.css') }}">

    {{-- Selectize --}}
    <link rel="stylesheet" href="{{ asset('plugins/selectize/selectize.css') }}">

    {{-- Simditor v2.3.28 --}}
    <link rel="stylesheet" href="{{ asset('plugins/simditor/simditor.css') }}">

    {{-- Styles --}}
    @vite('resources/css/app.css')
</head>

<body class="body {{ $page }}">
    @include('layouts.header')

    <main class="main main-container">
        @yield('main')
        <x-other.spinner />
    </main>

    {{-- JQuery --}}
    <script src="{{ asset('plugins/jquery/jquery-3.6.4.min.js') }}"></script>

    {{-- Selectize --}}
    <script src="{{ asset('plugins/selectize/selectize.min.js') }}"></script>

    {{-- Simditor v2.3.28 --}}
    <script src="{{ asset('plugins/simditor/module.js') }}"></script>
    <script src="{{ asset('plugins/simditor/hotkeys.js') }}"></script>
    <script src="{{ asset('plugins/simditor/uploader.js') }}"></script>
    <script src="{{ asset('plugins/simditor/simditor.js') }}"></script>

    {{-- Scripts --}}
    @vite('resources/js/app.js')
</body>

</html>
