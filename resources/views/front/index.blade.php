@extends('front.layout.main')

@section('page-content')
        @foreach( $faculties as $faculty)
            <a href="{{url('/faculty/'.$faculty->id)}}">
                <div class="col-sm-2">
                    <div class="catalog">
                        <img src="{{asset('/images/nobody_m.original.jpg')}}" >
                        <p class="caption">{{ $faculty->name }}</p>
                    </div>
                </div>
            </a>
        @endforeach
@stop()