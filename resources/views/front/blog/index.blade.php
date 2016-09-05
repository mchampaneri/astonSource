@extends('front.layout.main')

@section('page-content')
    @foreach(AstonCalls::Posts() as $post)
        <h3> {{ $post->title  }}</h3>
    @endforeach
@stop()