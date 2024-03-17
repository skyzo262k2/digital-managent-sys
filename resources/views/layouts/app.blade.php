<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cmc andor</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex h-full ">
        <aside class="h-full w-1/6 bg-primary fixed top-0">
            <div class="logoSection">
                <a href="{{ route('Accueil') }}">
                    <img class="w-1/2 mx-auto my-7" src="{{ asset('images/cmcLogo.png') }}" alt="logcmc">
                </a>
            </div>
            <div class="menuSection">

                <ul class="text-white text-2xl ">
                    <li class="hover:bg-secondary hover:text-primary w-full p-5"><a class=""
                            href="{{ route('Emploi du temps') }}">Emploi du temps</a></li>
                    <li class="hover:bg-secondary hover:text-primary w-full p-5"><a
                            href="{{ route('Evenements') }}">Evenements</a>
                    </li>
                    <li class="hover:bg-secondary hover:text-primary w-full p-5"><a
                            href="{{ route('Actualités') }}">Actualités</a>
                    </li>
                    <li class="hover:bg-secondary hover:text-primary w-full p-5"><a
                            href="{{ route('Autres') }}">Autres</a>
                    </li>
                    
                </ul>
        </aside>
        <div class="h-full w-full ml-[16.666667%]">
            @yield('content')
        </div>
    </div>

</body>

</html>
