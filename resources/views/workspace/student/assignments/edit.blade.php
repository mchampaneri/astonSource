@extends('AstonLayouts::templates.resource')
@section('page-title')
    Aston | Hod/Subjects/Create
@stop
@section('page-heading')
    Aston | New Subject
@stop
@section('page-buttons')
    <form action="{{route('submits.update',['id'=>$submit->id])}}" method="post">
        {{ method_field('put') }}
        {{ csrf_field() }}
        <input value="Submit" type="submit"
           class="btn @if($submit->status == "unsubmitted")btn-default @else btn-success @endif">
            </input>
        <a href="{{route('submits.index')}}" class="btn btn-default">Back</a>
    </form>
@stop
@section('panel-body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @if($assignment->questions()->count() > 0)
                @foreach($assignment->questions()->get() as $question)
                    @if( ($question->answerByUser( \Auth::user()->id ) == null ) )
                    <form action="{{route('answers.store')}}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="" class="control-label">{{$question->question}}</label>
                            <input type="hidden" name="question_id" value="{{$question->id}}">
                            <textarea name="answer" class="form-control aston-summernote" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <input type="submit" value="Save" class="btn btn-success pull-right">
                                </div>
                            </div>
                        </div>
                    </form>
                    @else
                    <form action="{{route('answers.update',['id'=>$question->answerByUser()->id])}}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put">
                            <div class="form-group">
                                <label for="" class="control-label">{{$question->question}}</label>
                                <input type="hidden" name="question_id" value="{{$question->id}}">
                                <textarea name="answer" class="form-control aston-summernote" id="" cols="30" rows="10">{{$question->answerByUser(\Auth::user()->id)->answer}}</textarea>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input type="submit" value="Update" class="btn btn-success pull-right">
                                    </div>
                                </div>
                            </div>
                        </form>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
@stop

@section('page-js')

@stop