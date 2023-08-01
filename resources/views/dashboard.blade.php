<!doctype html>
<html>
<head>
    <title>Authtenticación personalizada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-light navbar-expand-lg mb-5"style="...">
    <div class="container">
        <a class="navbar-brand mr-auto" href="#">VENTAS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collpase" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Regístrate!</a>
                    </li>
                @else
                <li class="nav-item" style="margin-right: 30px;">
                    <a class="nav-link" href="{{ url('/categories') }}">Categories</a>
                </li>
                <li class="nav-item" style="margin-right: 30px;">
                     <a class="nav-link" href="{{ url('/products') }}">Products</a>
                </li>
                <li class="nav-item" style="margin-right: 30px;">
                    <a class="nav-link" href="{{ url('/employees') }}">Employees</a>
                 </li>
                 <li class="nav-item" style="margin-right: 30px;">
                     <a class="nav-link" href="{{ url('/clients') }}">Clients</a>
                </li>
                <li class="nav-item" style="margin-right: 30px;">
                     <a class="nav-link" href="{{ url('/departments') }}">Departments</a>
                </li>
                <li class="nav-item" style="margin-right: 30px;">
                     <a class="nav-link" href="{{ url('/cities') }}">Cities</a>
                         </li>
                <li class="nav-item" style="margin-right: 30px;">
                     <a class="nav-link" href="{{ url('/providers') }}">Providers</a>
                </li>
                <li class="nav-item" style="margin-right: 20px;">
                                 <a class="nav-link" href="{{ url('/bills') }}">Bills</a>
                </li>
                <li class="nav-item" style="margin-right: 20px;">
                     <a class="nav-link" href="{{ url('/invoice_details') }}">Invoice Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: red;" href="{{ route('signout') }}">Salir</a>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@yield('content')
</body>
</html>