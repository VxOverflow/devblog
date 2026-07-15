<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,500&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,500&family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    @include('events.header')
    <main>
        @yield('content')
    </main>
    <footer>
     @include('events.footer')
    </footer>
   
</body>
</html>