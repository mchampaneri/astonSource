@extends('front.layout.main')

@section('page-content')


    @foreach($posts as $post)
    <div class="row">
        <div class="col-sm-2">
            <img src="{{url('/images/'.$post->thumb)}}" width="100%" alt="">
        </div>
        <div class="col-sm-8">
        <a href="{{url('/post/'.$post->id)}}" class="aston-theme-text-light"><h3> {{ $post->title  }}</h3></a>
            by <a href="{{url('/posts/by/'.$post->user_id)}}" class="aston-theme-text-light"><h5> {{ \App\User::Name( $post->user_id )  }}</h5></a>
        </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-sm-12">
            {{ $posts->links() }}
        </div>
    </div>
@stop()