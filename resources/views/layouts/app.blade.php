<!DOCTYPE html>
<html>
    <head>
        @include('head')
    </head>
    <body>
        <header>
            @include('navbar')
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            @include('footer')
        </footer>

    </body>
</html>
