@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston | Hod/Subjects/Create
@stop

@section('page-heading')
    <i class="fa fa-lg fa-picture-o"> </i> Posts
@stop

@section('page-heading-small')
    Existing one
@stop

@section('panel-heading')
    Edit your post
@stop()
@section('page-buttons')

    <form action="{{route('posts.destroy',['id'=>$post->id])}}" method="post">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        <a href="{{route('posts.index')}}" data-placement="left" data-singleton="true" data-toggle="confirmation" data-title="Did you Save you work?" class="btn btn-default">Back</a>
        <input type="submit" class="btn btn-danger" data-placement="left" data-singleton="true" data-toggle="confirmation" value="Delete">
    </form>
@stop

@section('panel-body')
    <div class="row panel-body">
            <form action="{{route('posts.update',['id'=>$post->id])}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="col-md-6">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="name"  class="control-label">Title</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" value="{{$post->title}}" name="title" class="form-control">
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="name" class="control-label">Thumbnail</label>
                        </div>
                        <div>
                            <div class="col-md-10">
                                <input type="file" name="thumb" class="aston-image-edit form-control">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="detail" id="" cols="30" rows="200"
                                      class="form-control aston-summernote">{{$post->detail }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Save"
                                   class="btn btn-sm btn-success pull-right">
                        </div>
                    </div>
                </div>
            </form>

    </div>
@stop

@section('page-js')
    <script src="{{asset('core/vue/all.js')}}"></script>
@stop