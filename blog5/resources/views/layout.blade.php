<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <header>
        <!-- header content  -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- footer content -->
    </footer>
    
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>

