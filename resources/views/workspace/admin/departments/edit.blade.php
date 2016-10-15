@extends('AstonLayouts::templates.resource')

@section('page-title')
    Aston | Admin/Departments/Create
@stop

@section('page-heading')
    <i class="fa fa-building fa-lg"></i> Department
@stop

@section('page-heading-small')
    {{ $department->name }}
@stop

@section('panel-heading')
    Edit Department
@stop

@section('page-buttons')
    <a href="{{route('departments.index')}}" class="btn btn-default">Back</a>
@stop

@section('panel-body')
    <div class="row">
        <div class="col-md-8">
            <form action="{{route('departments.update',['id'=>$department->id])}}" method="post">
                <input type="hidden" name="_method" value="put">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-1">
                            <label for="name" class="control-label">Name</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" value="{{$department->name}}" name="name" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-1">
                            <label for="name" class="control-label">HOD</label>
                        </div>
                        <div class="col-md-9">
                            <select name="hod_id" id="" class="aston-select2 form-control">
                                @foreach( $department->faculties()->get() as $user)
                                    <option value="{{$user->id}}" @if($department->hod_id == $user->id ) selected @endif>{{ $user->name }}</option>
                                @endforeach
                            </select>
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