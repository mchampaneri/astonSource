@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston | Hod/Subjects/Create
@stop

@section('page-heading')
    Aston | New Subject
@stop

@section('page-buttons')

    <a href="{{route('assignments.index')}}" class="btn btn-default">Back</a>
@stop

@section('page-body')
    <div class="row">
        <div class="col-md-8" >
            {{csrf_field()}}
            <Question id="1"></Question>
        </div>
    </div>
@stop

@section('page-js')
    <script src="{{asset('core/vue/all.js')}}"></script>
@stop