@extends('AstonLayouts::main')

@section('page-title')
    Aston | Home
@stop

@section('page-content')
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6">
                <div class="panel text-center">
                    <h4>Total  Departments </h4>
                    {{ \App\Department::all()->count() }}
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="panel text-center">
                    <h4>Total  Users </h4>
                    {{ \App\User::all()->count() }}
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="panel text-center">
                    <h4>Total  Departments </h4>
                    {{ \App\Department::all()->count() }}
                </div>
            </div>

        </div>

    </div>
@stop