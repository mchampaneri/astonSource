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
    {{ App\Assignment::Name($assignment_id) }}
@stop

@section('page-buttons')
    <a href="{{route('assignments.index')}}" class="btn btn-success">
        <i class="fa fa-plus fa-sm"></i> Back
    </a>
@stop

@section('panel-body')

    @if($submits->count() > 0)
        <table class="table  aston-datatable text-center">
            <thead>
            <tr>
                <th class="text-center">Status</th>
                <th class="text-center">Enrollment Number</th>
                <th class="text-center">Name</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($submits as $submit)
                <tr>
                    <td class="text-center"> @if($submit->status=="Rejected") <i class="fa fa-close"></i>
                        @elseif($submit->status=="Accepted") <i class="fa fa-check" aria-hidden="true"></i>
                        @else
                            <i class="fa fa-exclamation" aria-hidden="true"></i>
                        @endif </td>
                    <td>{{$submit->student()->enrollno}}</td>
                    <td>{{$submit->student()->name}}</td>
                    <td>
                        <a href="{{route('assignments.answersof',['submit_id'=>$submit->id])}}"
                           class="btn btn-sm btn-primary"> Review Answers</a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p class="aston-empty-message-text text-center"><i class="fa fa-plus fa-lg icon"></i>
            Add your first Subject by clicking the <span class="label label-info">Add Subject</span>
            Button </p>
    @endif

@stop


@section('page-js')

@stop