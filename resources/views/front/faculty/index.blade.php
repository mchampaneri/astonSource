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
            <div class="col-md-12">
            <h4 class="text-center"> Subjects </h4>
            </div>
            @foreach( $faculty->user()->subjects()->get() as $subject)
                <div class="col-sm-2 ">
                    <a href="{{url('/faculty/'.$faculty->id.'/subject/'.$subject->id)}}">
                        <div  class="text-center aston-theme-color" style="padding: 10px;border:1px solid rgba(0,0,0,0.1)">
                            <p>{{ $subject->name }}</p>
                            <p>Sem {{ $subject->sem }}</p>
                            <p>{{\App\Department::Name($subject->department_id)}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-12">
                <h4 class="text-center"> Latest Posts </h4>
            </div>
            @foreach( $faculty->user()->posts()->get() as $post)
                <div class="col-sm-2 ">
                    <a href="{{url('/post/'.$post->id)}}">
                        <div  class="text-center aston-theme-color" style="padding: 10px;border:1px solid rgba(0,0,0,0.1)">
                            <p>{{ $post->title }}</p>
                            <p>Sem {{ $post->info }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


@stop