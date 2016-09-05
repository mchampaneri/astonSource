@extends('workspace.layout.main')

@include('workspace.admin.partial.admin_menu')

@include('workspace.admin.department.page_menu')

@section('page-content')

    <div class="row">
        <div class="col-md-8">
            <form action="{{route('workspace.admin.departments.update',['id'=>$department->id])}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="" class="control-label">Department Name</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="name"  value="{{$department->name}}" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label">Description</label>
                        </div>
                        <div class="col-md-9">
                            <textarea name="description" id="" class="form-control" cols="30" rows="10">
                                {{$department->description}}
                            </textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="" class="control-label">Head of Department</label>
                        </div>
                        <div class="col-md-9">
                            <select name="hod_id" id="" class="form-control">
                                @if(isset($faculties) &&  sizeof($faculties) >0 )
                                    @foreach ($faculties as $faculty)
                                        <option value="{{$faculty->user_id}}"
                                        @if($department->hod_id == $faculty->user_id) selected @endif
                                        >{{$faculty->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-sm btn-success">
                </div>
            </form>
        </div>
    </div>

@stop