@extends('AstonLayouts::templates.resource')
@section('page-title')
    Aston | Hod/Subjects/Create
@stop
@section('page-heading')
    Assignment
@stop

@section('page-heading-small')
    For Review ...
@stop

@section('panel-heading')
    Answer of {{ $assignment->title }} By {{ \App\User::Name($user_id) }}
@stop

@section('page-buttons')
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('assignments.accept',['id'=>$submit->id])}}" method="post">
                {{ csrf_field() }}
                <input value="Accept" type="submit"
                       class="btn btn-success ">
                </input>
            </form>
        </div>
        <div class="col-md-6">
            <a href="{{route('assignments.index')}}" class="btn btn-default">Back</a>
        </div>
    </div>

@stop
@section('panel-body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @if($assignment->questions()->count() > 0)
                @foreach($assignment->questions()->get() as $question)
                            <div class="form-group">
                                <label for="" class="control-label">{{$question->question}}</label>
                                @if( ($question->answerByUser( $user_id ) ) )
                                <p> {!! $question->answerByUser( $user_id )->answer !!} </p>
                                @else
                                <pre> Not Attempted  </pre>
                                @endif
                            </div>
                        <hr>
                @endforeach
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form action="{{route('assignments.reject',['id'=>$submit->id])}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="comment" class="form-control" row="3" cols="5"></textarea>
                </div>
                <div class="form-group">
                    <input value="Reject" type="submit"
                           class="btn btn-danger ">

                    </input>
                </div>
            </form>
        </div>
    </div>
@stop

@section('page-js')

@stop