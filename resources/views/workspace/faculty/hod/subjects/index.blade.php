@extends('AstonLayouts::templates.resource')

@section('page-title')
    Aston | Admin/Departments
@stop

@section('page-heading')
    <i class="fa fa-lg fa-book"> </i> Subjects
@stop

@section('page-heading-small')
    Of Your Department
@stop

@section('panel-heading')
    Subjects
@stop()

@section('page-buttons')
    <a href="{{route('subjects.create')}}" class="btn btn-success">
        <i class="fa fa-plus fa-sm"></i> Add Subject
    </a>

@stop

@section('panel-body')

    @if(isset($subjects) && $subjects->count() > 0)
        <table class="table table-hover aston-datatable">
            <thead>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Assigned To</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            @foreach($subjects as $subject)
                <tr>
                    <td>{{$subject->id}}</td>
                    <td>{{$subject->name}}</td>
                    <td>
                        @if($subject->users()->count() > 0 )
                            @foreach($subject->users()->get() as $user)
                                {{ $user->faculty()->name }}
                            @endforeach
                        @endif
                    </td>
                    <td><a href="{{route('subjects.edit',['id'=>$subject->id])}}"
                           class="btn btn-sm btn-primary">Edit
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