<!DOCTYPE html>
<html>
    <head>
        @include('head')
    </head>
    <body>
        @include('navbar')

        @yield('content')

        @include('footer')
    </body>
</html>
