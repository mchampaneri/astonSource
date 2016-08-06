@extends('workspace.layout.main')

@include('workspace.faculty.partial.faculty_menu')

@include('workspace.faculty.hodtasks.page_menu')

@section('page-title')
    Add Subject | Aston
@stop


@section('page-content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="{{route('workspace.faculty.hod_tasks.subjects.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="" class="control-label">Subject Name</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="" class="control-label">Subject Code</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="code" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="" class="control-label">Semester</label>
                            </div>
                            <div class="col-md-9">
                                <select name="sem" id="" class="form-control">
                                    @for($i=1;$i<=8;$i++)
                                        <option value="{{$i}}">Semester {{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="" class="control-label">Description</label>
                            </div>
                            <div class="col-md-9">
                                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                         <input type="submit" value="Add" class="btn btn-sm btn-success">
                    </div>
                </form>
            </div>
        </div>

    </div>
@stop