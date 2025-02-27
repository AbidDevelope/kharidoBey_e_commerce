<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KharidoBey Marketing</title>
    @include('user.includes.link')
</head>
<body>
    <!-- Header -->
    <header>
        @include('user.includes.header')
    </header>

    <!-- Main Body -->
     @yield('content')
    
    <!-- Footer  -->
    @include('user.includes.footer')
</body>
</html>