<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        @component('components.header')
        @endcomponent
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>