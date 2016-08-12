@extends('workspace.layout.main')

@include('workspace.faculty.partial.faculty_menu')

@include('workspace.faculty.assingments.page_menu')

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
                @if(isset($questions) && sizeof($questions) > 0)
                    @foreach($questions as $question)
                     <tr>
                         <td>{{$question->question}}</td>
                         <td>{{$question->imp_level}}</td>
                         <td>
                             <a href="{{route('workspace.faculty.assingments.questions.edit',['id1'=>$assingment->id,'id2'=>$question->id])}}"
                                class="btn btn-sm btn-primary">Edit</a>
                         </td>
                     </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

    </div>
@stop()