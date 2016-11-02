<html>
    <head>
        @include('./partials/head')
    </head>
    <body>
        <div class="page container">
            <header>
                @include('./partials/header')
            </header>
            <div class="content container">
                @yield('content')
            </div>
            <footer>
                @include('./partials/footer')
            </footer>
        </div>
    </body>
</html>
