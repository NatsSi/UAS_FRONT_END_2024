<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" ng-app="yogo">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Fonts -->
    {{--<link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('/css/Navbar.css')}}">
    @yield('head')

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <script src="{{asset('/angularjs/angular.min.js')}}"></script>
    <script src="{{asset('/angularjs/angular-route.min.js')}}"></script>
    <script src="{{asset('/js/appAngular.js')}}"></script>
    <script src="{{asset('/js/controllers.js')}}"></script>
    <script src="{{asset('/js/Navbar.js')}}" defer></script>

</head>

<body>
    <div id="nav">
        <div id="logo">
            <a href="/html/Home.html">
                <h1>Yogo</h1>
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="/html/Home.html" class="nav-link">Home</a></li>
                <li><a href="/html/Recipes.html" class="nav-link">Recipes</a></li>
                <li><a href="/html/Events.html" class="nav-link">Events</a></li>
                <li><a href="/html/Blog.html" class="nav-link">Blog</a></li>
                <li><a href="/html/Login.html" class="nav-link subscribe">Login</a></li>
                <li><a href="/html/Register.html" class="nav-link subscribe">Subscribe</a></li>
            </ul>
            <div id="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </div>

    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>

</html>