@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston
@stop


@section('page-heading')
    Assignments
@stop

@section('page-buttons')
    <a href="{{route('results.create')}}" class="btn btn-default">Add Result</a>
@stop

@section('panel-body')
    <div class="row">
        <div class="col-md-8">
            <form action="{{route('results.update',['id'=>$result->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <input type="hidden" name="_method" value="put">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-1">
                            <label for="title" class="control-label">Title</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="title" value="{{$result->title}}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-1">
                            <label for="">Result Snap</label>
                        </div>
                        <div class="col-md-9">
                            <input type="file"  name="result_snap" class="form-control-file" >
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
    <div class="row">
        <div class="col-sm-12">
            <img src="{{url('/images/'.$result->path)}}" alt="" width="100%">
        </div>
    </div>
@stop