@extends('AstonLayouts::main')

@section('page-content')


        <div class="panel">
            <div class="panel-heading">
                <div class="panel-head">
                    <div class="pull-left">
                       <h4> @yield('page-heading') </h4>
                    </div>
                    <div class="pull-right">
                        @yield('page-buttons')
                    </div>
                    <div style="clear: both"></div>
                </div>
            </div>
            <div class="panel-body">
                @yield('page-body')
            </div>

        </div>


@stop



