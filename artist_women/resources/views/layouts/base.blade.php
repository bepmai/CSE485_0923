<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <!-- header giong nhau  -->
        @include('layouts.header')
        <!-- main conten giong nhau -->
        @yield('main')
        <!-- footer giong nhau -->
        @include('layouts.footer')
    </div>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>

</html>