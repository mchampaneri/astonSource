@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston |
@stop

@section('page-heading')
    <i class="fa fa-lg fa-sticky-note"> </i> Assignments
@stop

@section('page-heading-small')
    Create A New One
@stop


@section('page-buttons')
    <a href="{{route('assignments.index')}}" class="btn btn-default">Back</a>
@stop

@section('panel-heading')
    Add Assignment
@stop

@section('panel-body')

<div class="row">
            <form action="{{route('assignments.store')}}" method="post">
                {{ csrf_field() }}
            <div class="col-md-4">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3 ">
                            <label for="name"  class="control-label">Title</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text"  name="title" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="name" class="control-label">Subject</label>
                        </div>
                        <div class="col-md-9">
                            <select name="subject_id"   class="form-control aston-select2">
                                @foreach($subjects as $subject)
                                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="control-label">Informaion</label>
                        </div>
                        <div class="col-md-9">
                            <textarea name="info" id="" cols="30" rows="4" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-11">
                            <input type="submit" value="Create"
                                   class="btn btn-sm btn-success pull-right">
                        </div>
                    </div>
                </div>
            </form>
</div>
@stop

@section('page-js')
    <script src="{{asset('core/vue/all.js')}}"></script>
@stop