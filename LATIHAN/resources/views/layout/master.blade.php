<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <!--Ini bagian Header-->
    @include('layout.header')

    <!--Ini bagian Sidebar-->
    @include('layout.sidebar')

    <!--Ini bagian Content-->
    @yield('content')

    <!--Ini bagian Footer-->
    @include('layout.footer')


</body>
</html>
