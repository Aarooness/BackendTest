<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestión de Tareas')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Gestión de Tareas</a>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="text-center mt-4">
        <p>&copy; 2025 - Aplicación de Gestión de Tareas</p>
    </footer>
</body>
</html>
