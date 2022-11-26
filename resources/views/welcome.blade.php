<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Start</title>

    <style>
        @font-face {
            font-family: "Nerko";
            src: url("resources/css/Fonts/NerkoOne-Regular.ttf")
        }

    </style>

    <style>
        body {
            font-family: "18thCentury", sans-serif;
            justify-content: center;
            align-items: center;
            display: flex;
            min-height: 50vh;
            font-size: xx-large;
        }

        .welcome-page{
            display: block;
            text-align: center;
            width: 500px;
            background: #4a5568;
            padding: 4rem;
            border-radius: 10px;

        }

        #signin {
            word-spacing: 50px;
        }



    </style>

</head>
<body class="antialiased">
<div class="welcome-page">
    <div class="startPage-logo">
        <img src="{{URL::asset('/image/Logo.png')}}" alt="profile Pic" height="100" width="100">
    </div>
    <div class="startPageText">
        <h1>Welcome to Uni Style</h1>
        <p>To proceed to our website please log in or register if you have yet to do so</p>
    </div>





    <div id="signin" class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

</div>
</body>
</html>
