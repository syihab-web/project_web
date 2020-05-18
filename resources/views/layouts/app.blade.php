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
                                <a href="{{ url('/') }}">
                                    <h4>The Covid Project</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-3">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="{{ route('home') }}">home</a></li>
                                        <li><a href="about.html">Pandemic</a></li>
                                        <li><a href="project.html">Infected</a></li>
                                        <li><a href="service.html">Defend</a></li>
                                        <li class="nav-item">
                                            <form action="">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search..." aria-label="Search with two button addons" aria-describedby="button-addon4">
                                                <div class="input-group-append" id="button-addon4">
                                                  <button class="btn btn-outline-secondary" type="button">Search</button>
                                                </div>
                                              </div>
                                            </form>
                                        </li>
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                       
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="login">
                                <a href="#" class="boxed-btn">Login</a>
                                <a href="#" class="boxed-btn">Register</a>
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
