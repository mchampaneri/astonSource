@extends('front.layout.main')

@section('page-content')

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h3>{{ $faculty->name }}</h3>
                <h5>{{ $faculty->info }}</h5>
                <h6>{{ $faculty->user()->email }}</h6>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-sm-12">
                <h3>{{$subject->name}}</h3>
            </div>
            <div class="col-sm-3 text-center">
            <ul class="list-group">
                @foreach( $lectures as $lecture)
                    <a href="{{url('/faculty/'.$faculty->id.'/subject/'.$subject->id.'/lecture/'.$lecture->id)}}"> <li class="list-group-item  aston-theme-color">{{ $lecture->title }}</li> </a>
                @endforeach
            </ul>
            </div>
        </div>
    </div>
@stop