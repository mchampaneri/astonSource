@extends('front.layout.main')

@section('page-content')

    <div class="container">

        @include('front.layout.partial.facultyinfo')

        <hr>
        <div class="row">
            <div class="col-sm-12">
                <h3>{{$subject}} : {{ $lecture->title }}</h3>
            </div>
            <div class="container-fluid">
               <pre>
                   {!!  $lecture->lecture !!}
               </pre>
            </div>
        </div>
    </div>
@stop
