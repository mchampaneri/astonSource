@extends('AstonLayouts::templates.dashboard')

@section('page-title')
    Aston | Home
@stop
@section('page-heading')
    Faculty Dashboard
@stop
@section('page-heading-small')
    See the summary
@stop
@section('panel-heading')
    Have A nice day
@stop

@section('catalogs')
    <div class="row">

        <div class="col-sm-3">
            <div class="panel dashboard-catalog">
                <div class="panel-body">
                    <p class="caption">Total Posts <br> {{$post_count}}</p>
                    <i class="fa fa-users ico"></i>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="panel dashboard-catalog">
                <div class="panel-body">
                    <p class="caption">Total Assignment <br> {{$assignments->count()}}</p>
                    <i class="fa fa-building ico"></i>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="panel dashboard-catalog">
                <div class="panel-body">
                    <p class="caption">Total Subjects <br> {{$subject_count}}</p>
                    <i class="fa fa-book ico"></i>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>



        <div class="col-sm-12">
            <div class="panel ">
                <div class="panel-body">
                    <table class="table-hover table ">
                    <thead>
                    <th>Lecture Title</th>
                    <th>Subject</th>
                    <th>Info</th>
                    </thead>
                    <tbody>
                    @foreach( $lectures as $lecture)
                        <tr>
                            <td>{{$lecture->title}}</td>
                            <td>{{$lecture->subject()->name}}</td>
                            <td>{{$lecture->info}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>

    </div>


@stop