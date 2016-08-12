@extends('workspace.layout.main')

@include('workspace.student.partial.student_menu')

@include('workspace.student.assingments.page_menu')

@section('page-title')
    Assingment Fill | Aston
@stop

@section('page-content')

    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <a href="{{route('workspace.faculty.assingments.questions.create',['id'=>$assingment->id])}}"
                   class="btn btn-sm btn-success">
                    Create Question
                </a>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Question</th>
                <th>Imp level</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($assingment->questions) && sizeof($assingment->questions) > 0)
                @foreach($assingment->questions as $question)
                    <tr>
                        <td>{{$question->question}}</td>
                        <td>{{$question->imp_level}}</td>
                        <td>@if( !$question->isAnswered() )
                            <a href="{{route('workspace.student.answer.question.create',['id1'=>$question->assingment()->first()->id,'id2'=>$question->id])}}"
                               class="btn btn-sm btn-primary">Answer</a>
                            @else
                                <a href="{{route('workspace.student.answer.question.edit',['id1'=>$question->assingment()->first()->id,'id2'=>$question->id])}}"
                                   class="btn btn-sm btn-info">Update</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>

    </div>
@stop
