@extends('AstonLayouts::main')

@section('page-content')

    {{--Setting the page header with Left pulled buttons--}}
    <div class="page-header">
        <div class="pull-left">
            <h3> @yield('page-heading')
                <small> @yield('page-heading-small')</small>
            </h3>
        </div>
        <div class="pull-right" style="padding-top: 20px">
            @yield('page-buttons')
        </div>
        <div style="clear: both"></div>
    </div>

    {{-- Bootstrap panel with heading and body --}}
    <div class="panel panel-default">
        <div class="panel-heading">
            @yield('panel-heading')
        </div>
        <div class="panel-body">
            @yield('panel-body')
        </div>
    </div>


@stop



