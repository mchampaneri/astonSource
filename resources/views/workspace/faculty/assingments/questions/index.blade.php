@extends('workspace.layout.main')

@include('workspace.faculty.partial.faculty_menu')

@include('workspace.faculty.assingments.page_menu')

@section('page-content')

    <div class="container">

        <table class="table table-hover">
            <thead>
                <th>
                    <td>Question</td>
                    <td>Imp level</td>
                    <td>Action</td>
                </th>
            </thead>
            <tbody>
                @if(isset($questions) && sizeof($questions) > 0)
                    @foreach($questions as $question)
                     <tr>
                         <td>{{$question->question}}</td>
                         <td>{{$question->imp_level}}</td>
                         <td>Add/edd/Edit</td>
                     </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

    </div>
@stop()