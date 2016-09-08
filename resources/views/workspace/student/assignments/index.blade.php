@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston
@stop


@section('page-heading')
    Assignments
@stop

@section('page-buttons')

@stop

@section('panel-body')

    @if(isset($assignments) && $assignments->count() > 0)
        <table class="table table-hover  text-center aston-datatable">
            <thead>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Answered/Total Question</th>
                <th>Faculty</th>
                <th>Status</th>
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
                    @if( \App\Submit::submitExists($assignment->id) )
                        <td>{{  \App\Submit::submitStatus($assignment->id) }}</td>
                        <td><a href="{{route('submits.edit',['id'=> \App\Submit::submitId($assignment->id)])}}"
                               class="btn btn-sm btn-primary">Update
                            </a>
                        </td>
                        @else
                        <td> UnAttmpted </td>
                        <td>
                            <form action="{{route('submits.store')}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="assignment_id" value="{{$assignment->id}}">
                                <input type="submit" value="attempt"
                                   class="btn btn-sm btn-primary">
                                </input>
                            </form>
                        </td>
                    @endif

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