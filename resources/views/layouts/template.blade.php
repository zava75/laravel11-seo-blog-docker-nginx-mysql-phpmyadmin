<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <link rel="canonical" href="{{ url()->current() }}">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
@include('layouts.nav')
<div class="container p-2">
    <div class="row">
        <div class="col-lg-9 col-md-8 col-12">
            <main>
                <h1 class="display-6">@yield('h1')</h1>
                @yield('content')
            </main>
        </div>
        <div class="col-lg-3 col-md-4 col-12">
            @include('layouts.sidebar')
        </div>
    </div>
</div>
@include('layouts.footer')
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
