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
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="{{ route('house') }}">Home</a>
                    <a class="nav-link active" aria-current="page" href="{{ route('memory') }}">Memory</a>
                    <a class="nav-link active" aria-current="page" href="{{ route('register') }}">Register</a>
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