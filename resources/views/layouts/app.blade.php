<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')

    {{-- npm i
    npm run dev --}}

    <title> @yield('title') </title>
</head>
<body>

    <header>         
        <a href="{{route('contacts.index')}}">Accueil</a>
        <a href="{{route('contacts.create')}}">Créer contact</a>
</header>

    <h1> @yield('title-page') </h1>

    <main>

        @yield('content')

    </main>
    
</body>
</html>