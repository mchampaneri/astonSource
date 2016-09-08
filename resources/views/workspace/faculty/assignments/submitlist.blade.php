@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston
@stop


@section('page-heading')
    <i class="fa fa-lg fa-sticky-note"> </i> Assignments
@stop

@section('page-heading-small')
    Submit Requests,
@stop

@section('panel-heading')
    {{\App\Assignment::Name('1') }}
@stop
@section('page-buttons')
    <a href="{{route('assignments.index')}}" class="btn btn-success">
        <i class="fa fa-plus fa-sm"></i> Back
    </a>
@stop

@section('panel-body')

    @if($submits->count() > 0)
        <table class="table  aston-datatable">
            <thead>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($submits as $submit)
                <tr >
                    <td>{{$submit->id}}</td>
                    <td>{{\App\User::Name($submit->user_id)}}</td>
                    <td class=" @if($submit->status=="Rejected") bg-warning @elseif( $submit->status=="Accepted") bg-success @endif">
                        <a href="{{route('assignments.answersof',['submit_id'=>$submit->id])}}" class="btn btn-sm btn-primary"> Review Answers</a>
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