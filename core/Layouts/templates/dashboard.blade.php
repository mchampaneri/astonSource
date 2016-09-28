@extends('AstonLayouts::main')

@section('page-content')

    {{-- Page header with left pulled buttons --}}
    <div class="page-header">
        <div class="pull-left">
            <h3> @yield('page-heading')
                <small> @yield('page-heading-small')</small></h3>
        </div>
        <div class="pull-right" style="padding-top: 20px">
            @yield('page-buttons')
        </div>
        <div style="clear: both"></div>
    </div>

    {{-- Container for dashboard catalogs  --}}
    <div class="container">
        @yield('catalogs')
    </div>

@stop



