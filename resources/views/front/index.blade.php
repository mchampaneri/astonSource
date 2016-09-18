@extends('front.layout.main')

@section('page-content')
        @foreach( \Aston\AstonCalls::Faculties() as $id=>$faculty)
            <a href="{{url('/faculty/'.$id)}}">
                <div class="col-sm-2 ">
                    <div class="aston-theme-color" style="padding: 10px">
                        <img src="{{asset('/images/nobody_m.original.jpg')}}" alt="" width="100%" height="150px">
                        <h4 class="text-center">{{ $faculty }}</h4>
                    </div>
                </div>
            </a>
        @endforeach
@stop()