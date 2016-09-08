@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston
@stop


@section('page-heading')
    <i class="fa fa-lg fa-picture-o"> </i> Posts
@stop

@section('page-heading-small')
    You have created
@stop

@section('panel-heading')
    Posts of Yours
@stop()

@section('page-buttons')
    <a href="{{route('posts.create')}}" class="btn btn-success">
        <i class="fa fa-plus fa-sm"></i> Add Post
    </a>

@stop

@section('panel-body')

    @if($posts->count() > 0)
        <table class="table table-hover aston-datatable">
            <thead>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td><a href="{{route('posts.edit',['id'=>$post->id])}}"
                           class="btn btn-sm btn-primary">Edit
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p class="aston-empty-message-text text-center"> <i class="fa fa-plus fa-lg icon"></i>
            Add your first Post by clicking the <span class="label label-info">Add Post</span>
            Button </p>
    @endif

@stop


@section('page-js')

@stop