<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Laravel 11 CRUD Application Tutorial</title>

    <!-- Bootstrap & Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container mt-3">

        <!-- Heading and Logout Button -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="m-0">Simple Laravel 11 CRUD Application Tutorial</h3>

            @if (!Route::is('login'))
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </button>
                </form>
            @endif
        </div>

        <!-- Main Content -->
        @yield('content')

        <!-- Footer -->
        <div class="row justify-content-center text-center mt-4">
            <div class="col-md-12">
                <p>
                    Return to Website:
                    <a href="https://www.usjr.edu.ph/"><strong>University of San Jose - Recoletos</strong></a>
                </p>
            </div>
        </div>
    </div>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
