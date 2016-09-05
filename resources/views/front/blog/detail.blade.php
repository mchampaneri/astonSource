@extends('front.layout.main')

@section('page-content')
        @if(!isset($post))
            <h2> Opps! Not Such a Post Found </h2>
        @else
            <div class="row text-center">
                <div class="col-md-6">
                    <h3> {{ $post->title }}</h3>
                    <h5> By {{ App\User::Name($post->user_id) }}</h5>
                </div>
                <div class="col-md-6">
                    <img src="{{url('image/'.$post->thumb)}}" alt="">
                </div>
            </div>
            <pre style="margin-top: 10px"> {!! $post->detail !!}</pre>
        @endif
@stop()