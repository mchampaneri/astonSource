<html>
    <head>
        <title> @yield('page-title') </title>
        @include('AstonLayouts::head')
    </head>
    <body>
        @include('AstonLayouts::header')
        {{--@include('AstonLayouts::sidebar')--}}
        <div class="container">
            <div class="content">
                    @yield('page-content')
            </div>
        </div>
        @include('AstonLayouts::footer')
        @include('AstonLayouts::foot')

         @yield('page-js')
    </body>
</html>