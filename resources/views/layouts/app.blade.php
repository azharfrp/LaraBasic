<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Base') | {{ config('app.name', 'Gampangan') }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">{{ config('app.name', 'Gampangan') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarGampangan" aria-controls="navbarGampangan" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarGampangan">
                <ul class="navbar-nav mr-auto">
                    <li class="{{ request()->routeIs('index') ? 'nav-item active' : 'nav-item' }}">
                        <a class="{{ request()->routeIs('index') ? 'nav-link active' : 'nav-link' }}" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="{{ request()->routeIs('crud.list.global') ? 'nav-item active' : 'nav-item' }}">
                        <a class="{{ request()->routeIs('crud.list.global') ? 'nav-link active' : 'nav-link' }}" href="{{ route('crud.list.global') }}">CRUD</a>
                    </li>
                    <li class="{{ request()->routeIs('crud.lits.pagination') ? 'nav-item active' : 'nav-item' }}">
                        <a class="{{ request()->routeIs('crud.lits.pagination') ? 'nav-link active' : 'nav-link' }}" href="{{ route('crud.lits.pagination') }}">Pagination</a>
                    </li>
                    <li class="{{ request()->routeIs('relasi.1to1') ? 'nav-item active' : 'nav-item' }}">
                        <a class="{{ request()->routeIs('relasi.1to1') ? 'nav-link active' : 'nav-link' }}" href="{{ route('relasi.1to1') }}">Relasi One to One</a>
                    </li>
                    <li class="{{ request()->routeIs('relasi.1tom') ? 'nav-item active' : 'nav-item' }}">
                        <a class="{{ request()->routeIs('relasi.1tom') ? 'nav-link active' : 'nav-link' }}" href="{{ route('relasi.1tom') }}">Relasi One to Many</a>
                    </li>
                    <li class="{{ request()->routeIs('relasi.mtom') ? 'nav-item active' : 'nav-item' }}">
                        <a class="{{ request()->routeIs('relasi.mtom') ? 'nav-link active' : 'nav-link' }}" href="{{ route('relasi.mtom') }}">Relasi Many to Many</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Ini adalah bagian konten -->
    <section>
        @yield('content')
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>