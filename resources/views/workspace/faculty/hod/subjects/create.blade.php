@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston | Admin/Departments/Create
@stop

@section('page-heading')
    Aston | New Subject
@stop

@section('page-buttons')

    <a href="{{route('subjects.index')}}" class="btn btn-default">Back</a>
@stop

@section('page-body')
    <div class="row">
        <div class="col-md-8">
            <form action="{{route('subjects.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="name" class="control-label">Name</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class=" col-md-2">
                            <label for="name" class="control-label">Semester</label>
                        </div>
                        <div class="col-md-9">
                            <select name="sem" id="">
                                @for($i=1;$i<=8;$i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="name" class="control-label">Department</label>
                        </div>
                        <div class="col-md-9">
                        <select name="department" id="" class="form-control">
                            @foreach($app['departments'] as $department)
                            <option value="{{$department['id']}}">{{$department['name']}}</option>
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