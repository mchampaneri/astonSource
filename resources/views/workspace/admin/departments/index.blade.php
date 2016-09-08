@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston | Admin/Departments
@stop


@section('page-heading')
     Departments
@stop

@section('page-heading-small')
   You have created
@stop
@section('panel-heading')
    All existing departments
@stop


@section('page-buttons')
    <a href="{{route('departments.create')}}" class="btn btn-success">
              <i class="fa fa-plus fa-sm"></i> Add Department
    </a>

@stop

@section('panel-body')

    @if(isset($departments) && $departments->count() > 0)
        <table class="table table-hover aston-datatable">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
            @foreach($departments as $department)
                <tr>
                    <td>{{$department->id}}</td>
                    <td>{{$department->name}}</td>
                    <td><a href="{{route('departments.edit',['id'=>$department->id])}}"
                           class="btn btn-sm btn-primary">Edit
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p class="aston-empty-message-text text-center"> <i class="fa fa-plus fa-lg icon"></i>
            Add your first department by clicking the <span class="label label-info">Add Department</span>
            Button </p>
    @endif

@stop


@section('page-js')

@stop