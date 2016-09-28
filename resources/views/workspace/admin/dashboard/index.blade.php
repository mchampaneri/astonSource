@extends('AstonLayouts::templates.dashboard')

@section('page-title')
    Aston | Home
@stop
@section('page-heading')
   Admin Dashboard
@stop
@section('page-heading-small')
    See the summary
@stop
@section('panel-heading')
    Admin Bhai zindabad
@stop

@section('catalogs')
    <div class="row">

        <div class="col-sm-3">
            <div class="panel dashboard-catalog">
                <div class="panel-body">
                <p class="caption">Total Users <br> {{$user_count}}</p>
                <i class="fa fa-users ico"></i>
                <div style="clear:both"></div>
                </div>
            </div>
         </div>

        <div class="col-sm-3">
            <div class="panel dashboard-catalog">
                <div class="panel-body">
                    <p class="caption">Total Departments <br> {{$department_count}}</p>
                    <i class="fa fa-building ico"></i>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>

    </div>
@stop