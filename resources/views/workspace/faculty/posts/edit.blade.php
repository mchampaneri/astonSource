@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston | Hod/Subjects/Create
@stop

@section('page-heading')
    Aston | New Post
@stop

@section('page-buttons')

    <a href="{{route('posts.index')}}" class="btn btn-default">Back</a>
@stop

@section('page-body')
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