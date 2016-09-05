@extends('workspace.layout.main')

@include('workspace.faculty.partial.faculty_menu')

@include('workspace.faculty.assingments.page_menu')

@section('page-content')


    <form action="{{route('workspace.faculty.assingments.questions.store',['id'=>$assingment->id])}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <div class="row">
                <div class="col-md-2">
                    <label for="#">Question</label>
                </div>

                <div class="col-md-9">
                    <input type="text" name="question" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-2">
                    <label for="">Type</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="type" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-2">
                    Importance Level
                </div>
                <div class="col-md-9">
                    <input type="text" name="imp_level" class="form-control">

                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-12">
                    <input type="submit" value="Add" class="btn btn-sm btn-success">
                </div>
            </div>
        </div>
    </form>
@stop