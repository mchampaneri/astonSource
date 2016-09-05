@extends('workspace.layout.main')

@include('workspace.student.partial.student_menu')

@include('workspace.student.assingments.page_menu')

@section('page-title')
    Assingment Fill | Aston
@stop

@section('page-content')

    <div class="container">
        <form action="{{route('workspace.student.answer.question.update',['id'=>$question->id])}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-8">
                        {{$question->question}}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-8">
                    <textarea name="answer" id="" cols="30" rows="10" class="form-control">{{$question->answer()->answer}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-sm btn-success">
            </div>
        </form>
    </div>

@stop