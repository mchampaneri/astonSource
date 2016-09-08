@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston | Hod/Subjects/Create
@stop

@section('page-heading')
    <i class="fa fa-lg fa-picture-o"> </i> Posts
@stop

@section('page-heading-small')
    Add new one
@stop

@section('panel-heading')
    Add new Post
@stop()

@section('page-buttons')

    <a href="{{route('posts.index')}}" class="btn btn-default">Back</a>
@stop

@section('panel-body')
    <div class="row panel-body">

            <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="col-md-6">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="name"  class="control-label">Title</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text"  name="title" class="form-control">
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
                            <div class="col-dm-10">
                                <input type="file" name="thumb" class="aston-image form-control">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="detail" id="" cols="30" rows="200"
                                      class="form-control aston-summernote"></textarea>
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
    </div>
@stop

@section('page-js')
    <script src="{{asset('core/vue/all.js')}}"></script>
@stop