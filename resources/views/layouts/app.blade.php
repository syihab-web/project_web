<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{URL('assets/js/bootstrap.min.js')}}" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{URL('assets/css/bootstrap.min.css')}}"  crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL('assets/css/fontawesome.min.css')}}"  crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- Styles -->
    <link href="{!! asset('assets/css/layout.css') !!}" rel="stylesheet">
</head>
<body>
    <header>
        <div id="app" class="header-area">
            <div id="sticky-header" class="main-header-area white-bg">
                <div class="container-fluid p-0">
                    <div class="row align-items-center justify-content-between no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="title">
                                <a href="{{ url('/home') }}">
                                    <h4>The Covid Project</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-3">
                    <div class="main-menu d-none d-lg-block">
                    <nav>
                        <ul id="navigation">
                         @guest
                         <li>
                            <div class="login">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Account
                                    </button>
                                    <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                        <a class="" href="{{ route('login') }}">Login</a>
                                        @if (Route::has('register'))
                                         <a class="" href="{{ route('register') }}">Register</a>
                                      @endif
                                    </div>
                                  </div>
                            </div>
                        </li>
                        @else
                        <li><a href="{{ url('/home') }}">home</a></li>
                        <li><a href="{{ url('/pandemic') }}">Pandemic</a></li>
                        <li><a href="{{ url('/infected') }}">Infected</a></li>
                        <li><a href="{{ url('/defend') }}">Defend</a></li>
                        <li><a href="{{ url('/country') }}">Country</a></li>
                            <li class="dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="/profile/{{ Auth::user()->id }}">Edit Profile</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>


                            </li>
                        @endguest
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div>
        <main>
            @yield('content')
        </main>
    </div>
    <footer>
        <footer>
           <div>
               <p>The Covid Project</p>
           </div>
    </footer>
</body>
</html>
