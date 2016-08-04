<html>
    <head>
        <title>@yield('page-title')</title>
        @include('workspace.layout.head')
    </head>
    <body>
        @include('workspace.layout.sidebar')
        <div class="content">
        @yield('page-content')
        </div>
        @include('workspace.layout.footer')
        @include('workspace.layout.foot')
    </body>
</html>