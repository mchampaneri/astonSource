@extends('AstonLayouts::templates.resource')

@section('page-title')
    Aston
@stop

@section('page-heading')
    Assignments
@stop

@section('page-buttons')
    <a href="{{route('subjects.create')}}" class="btn btn-success">
        <i class="fa fa-plus fa-sm"></i> Add Assignments
    </a>

@stop