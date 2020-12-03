<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito';
        }

        .true {
            color: green;
        }

        .false {
            color: red;
        }

        .hover:hover {
            background-color: #f8f9fa;
        }

    </style>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <!-- main menu -->
                <a class="navbar-brand"
                    href=" {{ route('index') }} ">{{ config('app.name') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @auth
                            <li
                                class="nav-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                                <a class="nav-link" href=" {{ route('home') }} ">Recent
                                    quizzes</a>
                            </li>
                        @endauth
                        <li
                            class="nav-item {{ Route::currentRouteName() == 'quiz.index' ? 'active' : '' }}">
                            <a class="nav-link" href=" {{ route('quiz.index') }} ">New quiz</a>
                        </li>
                        @auth
                            @if(Auth::user()->is_admin)
                                <li class="nav-item {{ Route::currentRouteName() == 'questions.index' ||
                                            Route::currentRouteName() == 'questions.show' ||
                                            Route::currentRouteName() == 'questions.edit'? 'active' : '' }}">
                                    <a class="nav-link" href=" {{ route('questions.index') }} ">Manage
                                        questions</a>
                                </li>
                                <li
                                    class="nav-item {{ Route::currentRouteName() == 'questions.create' ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('questions.create') }}">New
                                        question</a>
                                </li>
                            @endif
                        @endauth
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @guest
                            @if(Route::has('login'))
                                <li
                                    class="nav-item
                                    {{ Route::currentRouteName() == 'login' ? 'active' : '' }}">
                                    <a class="nav-link"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if(Route::has('register'))
                                <li
                                    class="nav-item
                                    {{ Route::currentRouteName() == 'register' ? 'active' : '' }}">
                                    <a class="nav-link"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}"
                                        method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>
