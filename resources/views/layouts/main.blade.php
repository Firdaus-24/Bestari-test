<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="{{ asset('/') }}assets/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Bestada</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!-- Example split danger button -->
                        <div class="btn-group">
                            <button type="button" class="btn">Point 1</button>
                            <button type="button" class="btn dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" aria-current="page" href="{{ url('customers') }}">Bagian 1</a>
                                <li><a class="dropdown-item" href="{{ url('orders') }}">Bagian 2</a></li>
                                <li><a class="dropdown-item" href="{{ route('send') }}">Bagian 3</a></li>
                            </ul>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Point 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Point 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('point4') }}">Point 4</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('container')
    </div>

    <script src="{{ asset('/') }}assets/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('/') }}assets/js/script.js"></script>
</body>

</html>
