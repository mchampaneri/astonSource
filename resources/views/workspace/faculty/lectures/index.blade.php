@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston
@stop


@section('page-heading')
    <i class="fa fa-lg fa-television"> </i> Lectures
@stop

@section('page-heading-small')
    You have created
@stop

@section('panel-heading')
    Lectures of Yours
@stop()

@section('page-buttons')
    <a href="{{route('lectures.create')}}" class="btn btn-success">
        <i class="fa fa-plus fa-sm"></i> Add Lectures
    </a>

@stop

@section('panel-body')

    @if($lectures->count() > 0)
        <table class="table table-hover aston-datatable">
            <thead>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            @foreach($lectures as $lecture)
                <tr>
                    <td>{{$lecture->id}}</td>
                    <td>{{$lecture->title}}</td>
                    <td>{{\App\Subject::Name($lecture->subject_id)}}</td>
                    <td><a href="{{route('lectures.edit',['id'=>$lecture->id])}}"
                           class="btn btn-sm btn-primary">Edit
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p class="aston-empty-message-text text-center"> <i class="fa fa-plus fa-lg icon"></i>
            Add your first Lecture by clicking the <span class="label label-info">Add Lecture</span>
            Button </p>
    @endif

@stop


@section('page-js')

@stop