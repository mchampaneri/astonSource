<html>
    <head>
        <title>@yield('page-title')</title>
        @include('front.layout.head')
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @yield('page-css')
    </head>
    <body>
        <div class="wrapper" style="height: 100%;width: 100%;">
            @include('front.layout.header')
                <div class="container" style="margin-top: 20px">
                    @yield('page-content')
                </div>
            @include('front.layout.footer')
            @include('front.layout.foot')
            @yield('page-js')
        </div>
    </body>
</html>