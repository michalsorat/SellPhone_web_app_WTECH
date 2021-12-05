<!DOCTYPE html>
<html>
    <head>
        @include('partials.head')
    </head>
    <body>
        <header>
            @if(\Illuminate\Support\Facades\Request::is('/'))
                @include('partials.customerNavbar')
            @else
                @include('partials.adminNavbar')
            @endif
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
