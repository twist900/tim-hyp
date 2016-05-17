<html>
    <head>
        @include('shared._head')
    </head>
    <body>
        @include('shared._header')


        <div class="container">
            @yield('content')
        </div>

        @include('shared._footer')
        @include('shared._scripts')
    </body>
</html>