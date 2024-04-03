<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio ADUT</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="antialiased bg-success p-2 text-dark bg-opacity-25 ">
    <div class="container ">
        <div class="row justify-content-end pt-3">
            @if (Route::has('login'))
                <div class="col-sm-4 text-right">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
                        <a href="#" class="btn btn-primary">Primary</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">Iniciar sesión</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">Registrate</a>

                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <div class="text-center">
                    <img src="../public/images/logo.jpeg" class="img-fluid" alt="Logo">
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
