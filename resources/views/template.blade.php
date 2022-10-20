<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Journal</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <!-- Nav bar starts -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">My Journal</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav me-auto py-1 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('house') ? 'text-secondary fw-bold' : '' }}" href="{{ route('house') }}">House</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link {{ request()->routeIs('register') || request()->routeIs('memories') ? 'text-secondary fw-bold' : '' }} dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Memories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="{{ route('register') }}">Register memory</a></li>
                                <li><a class="dropdown-item" href="{{ route('memories') }}">Show memories</a></li>
                            </ul>
                        </li>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Nav bar ends -->

        <!-- Main starts -->
        <main>
            @yield('content')
        </main>
        <!-- Main ends -->

        <!-- Footer starts -->
        <div class="alert alert-secondary" role="alert">
            María Guadalupe Franco Ramírez 2022 ©
        </div>
    </div>
</body>

</html>