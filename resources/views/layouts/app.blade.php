<!DOCTYPE html>
<html>
    <head>
        @include('partials.head')
    </head>
    <body>
        <header>
            @include('partials.navbar')
        </header>

        <main>
            @include('sweetalert::alert')
            @yield('content')
        </main>

        <footer>
            @include('partials.footer')
        </footer>

    </body>
</html>
