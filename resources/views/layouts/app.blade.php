<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- Add CSS Files -->
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     <link rel="javascript" href="js/hero.js">

    <title>@yield('title', 'Shahin Alam')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>
<body>
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main>
        <section>
            @yield('content')
        </section>
       
    </main>
    <!-- Footer -->
    @include('partials.footer')

    <!-- Add JavaScript Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
