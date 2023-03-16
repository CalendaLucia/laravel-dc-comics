<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Includiamo gli assets con la direttiva @vite --}}
    @vite('resources/js/app.js')
    <title>Laravel DC Comics @yield('page-title')</title>
</head>
<body>

    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>