@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston
@stop


@section('page-heading')
    Assignments
@stop

@section('page-buttons')

@stop

@section('page-body')

    @if(isset($assignments) && $assignments->count() > 0)
        <table class="table table-hover  text-center aston-datatable">
            <thead>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Answered/Total Question</th>
                <th>Faculty</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            @foreach($assignments as $assignment)
                <tr>
                    <td>{{$assignment->id}}</td>
                    <td>{{$assignment->title}}</td>
                    <td>{{App\Subject::name($assignment->subject_id)}}</td>
                    <td>{{$assignment->myAnswers()->count()}}/{{$assignment->questions()->count()}}</td>
                    <td>{{App\Faculty::where('user_id',$assignment->user_id)->first()->name}}</td>
                    <td><a href="{{route('assignment.edit',['id'=>$assignment->id])}}"
                           class="btn btn-sm btn-primary">Answer
                        </a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p class="aston-empty-message-text text-center"> <i class="fa fa-plus fa-lg icon"></i>
            Add your first Subject by clicking the <span class="label label-info">Add Subject</span>
            Button </p>
    @endif

@stop


@section('page-js')

@stop