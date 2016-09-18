@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston
@stop


@section('page-heading')
    Assignments
@stop

@section('page-buttons')
    <a href="{{route('results.create')}}" class="btn btn-default">Add Result</a>
@stop

@section('panel-body')

    @if(isset($results) && $results->count() > 0)
        <table class="table table-hover aston-datatable">
            <thead>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            @foreach($results as $result)
                <tr>
                    <td>{{$result->id}}</td>
                    <td>{{$result->title}}</td>
                    <td><a href="{{route('results.edit',['id'=>$result->id])}}"
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
