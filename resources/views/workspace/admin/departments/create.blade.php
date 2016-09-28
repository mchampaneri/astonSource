@extends('AstonLayouts::templates.resource')

@section('page-title')
    Aston | Admin/Departments/Create
@stop

@section('page-heading')
    <i class="fa fa-lg fa-building"></i>Department
@stop

@section('page-heading-small')
    Add New one
@stop

@section('panel-heading')
    Add New Department
@stop

@section('page-buttons')
    <a href="{{route('departments.index')}}" class="btn btn-default">Back</a>
@stop

@section('panel-body')
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('departments.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-1">
                            <label for="name" class="control-label">Name</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-11">
                            <input type="submit" value="Save" class="btn btn-sm btn-success pull-right">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop