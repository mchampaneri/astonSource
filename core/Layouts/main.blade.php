<!DOCTYPE html>
<html>
    <head>
        <title> @yield('page-title') </title>
        @include('AstonLayouts::head')
    </head>
    <body id="app">
        <div class="cover"></div>

        @include('AstonLayouts::sidebar')
            <div class="page">
                @include('AstonLayouts::header')
                <div class="content">
                        @yield('page-content')
                </div>
            </div>
        @include('AstonLayouts::footer')
        @include('AstonLayouts::foot')
        @yield('page-js')
        @include('AstonLayouts::partials.flash')
    </body>
</html>