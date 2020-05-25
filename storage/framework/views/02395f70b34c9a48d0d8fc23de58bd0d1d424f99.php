<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="<?php echo e(URL('assets/js/bootstrap.min.js')); ?>" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo e(URL('assets/css/bootstrap.min.css')); ?>"  crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- Styles -->
    <link href="<?php echo asset('assets/css/layout.css'); ?>" rel="stylesheet">
</head>
<body>
    <header>
        <div id="app" class="header-area">
            <div id="sticky-header" class="main-header-area white-bg">
                <div class="container-fluid p-0">
                    <div class="row align-items-center justify-content-between no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="title">
                                <a href="<?php echo e(url('/')); ?>">
                                    <h4>The Covid Project</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-3">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="<?php echo e(url('/')); ?>">home</a></li>
                                        <li><a href="<?php echo e(url('/pandemic')); ?>">Pandemic</a></li>
                                        <li><a href="<?php echo e(url('/infected')); ?>">Infected</a></li>
                                        <li><a href="<?php echo e(url('/defend')); ?>">Defend</a></li>
                                        <li><a href="<?php echo e(url('/country')); ?>">Country</a></li>
                                        <li>
                                            <div class="login">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      Account
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                      <a class="dropdown-item" href="#">Login</a>
                                                      <a class="dropdown-item" href="#">Register</a>
                                                    </div>
                                                  </div>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block ">
                            <form action="/search" method="get">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Search..." aria-label="Search with two button addons" aria-describedby="button-addon4">
                                    <div class="input-group-append" id="button-addon4">
                                      <button class="btn btn-outline-secondary" type="submit">Search</button>
                                    </div>
                                  </div>
                              </form>
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
            <?php echo $__env->yieldContent('content'); ?>
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
<?php /**PATH C:\xampp\htdocs\project_covid\project_web\resources\views/layouts/app.blade.php ENDPATH**/ ?>