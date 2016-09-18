@extends('front.layout.main')

@section('page-content')
        @if(!isset($post))
            <h2> Opps! Not Such a Post Found </h2>
        @else
            <div class="row">
                <div class="col-sm-10">
                    <h3> {{ $post->title }}</h3>
                    <h5> By <a href="{{url('/posts/by/'.$post->user_id)}}" class="aston-theme-text-light">{{ App\User::Name($post->user_id) }} </a></h5>
                </div>
                <div class="col-sm-2">
                    <img  src="{{url('images/'.$post->thumb)}}" width="200px" height="auto" alt="">
                </div>
            </div>
            <pre style="margin-top: 10px"> {!! $post->detail !!}</pre>
        @endif
@stop()