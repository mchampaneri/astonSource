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
                <h3>{{$Subject_Name}} : {{ $lecture->title }}</h3>
            </div>
            <div class="container-fluid">
               <pre>
                   {!!  $lecture->lecture !!}
               </pre>
            </div>
        </div>
    </div>
@stop
