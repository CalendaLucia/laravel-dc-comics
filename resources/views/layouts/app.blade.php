<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Includiamo gli assets con la direttiva @vite --}}
    @vite('resources/js/app.js')
    <title>Laravel DC Comics</title>
</head>
<body>
    <h1>ciao</h1>
    <main>
        @yield('content')
    </main>
</body>
</html>