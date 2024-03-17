@extends('layouts.app')

@section('content')
    <style>
        .homeDiv {
            background-image:
                linear-gradient(to right, rgba(255, 128, 0, 0.9) 50%, transparent 100%),
                url('{{ asset('images/CMC-Nadorhome.jpeg') }}');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .h-full {
            height: 100vh;
        }

        span {
            display: block;
            animation: spin_words 8s infinite;
            
        }
        .words {
            display: block;
            overflow: hidden;
        
        }
        @keyframes spin_words {
            10% {
                transform: translateY(-112%);

            }

            25% {
                transform: translateY(-100%);
            }

            35% {
                transform: translateY(-212%);
            }

            50% {
                transform: translateY(-200%);
            }

            60% {
                transform: translateY(-312%);
            }

            75% {
                transform: translateY(-300%);
            }

            85% {
                transform: translateY(-412%);
            }

            100% {
                transform: translateY(-400%);
            }
        }
    </style>
    <div class="homeDiv w-full h-full text-secondary p-72 pl-32 ">
        <h1 class="text-2xl mb-8">Bienvenue sur votre application scolaire !</h1>
        <div class="font-bold flex text-6xl h-[60px]">
            <p class="">
                Découvrez
            </p>
            <div class="words pl-9">
                <span class="greeting en">les horaires de vos cours .</span>
                <span class="greeting es">les dernières nouvelles .</span>
                <span class="greeting de">événements de l'institut .</span>
                <span class="greeting it">et bien plus encore .</span>
                <span class="greeting en">les horaires de vos cours .</span>
            </div>
        </div>
        <p class="mt-10 text-6xl">Restez informés et connectés avec votre établissement.</p>

    </div>
@endsection
