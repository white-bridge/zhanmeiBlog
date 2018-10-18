<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            <p>
                侧边栏
            </p>
        @show
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>