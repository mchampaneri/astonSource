@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston | Hod/Subjects/Create
@stop

@section('page-heading')
    <i class="fa fa-lg fa-television"> </i> Lectures
@stop

@section('page-heading-small')
    Existing one
@stop

@section('panel-heading')
    Edit you lecture
@stop()
@section('page-buttons')
    <form>
        <a href="{{route('lectures.index')}}" data-placement="left" data-singleton="true" data-toggle="confirmation" data-title="Did you Save you work?" class="btn btn-default">Back</a>
        <input type="submit" class="btn btn-danger" data-placement="left" data-singleton="true" data-toggle="confirmation" value="Delete">
    </form>
@stop

@section('panel-body')
    <div class="row panel-body">

            <form action="{{route('lectures.update',['id'=>$lecture->id])}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="col-md-4">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="name"  class="control-label">Title</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text"  value="{{$lecture->title}}" name="title" class="form-control">
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="name" class="control-label">Subject</label>
                        </div>
                        <div class="col-md-10">
                            <select name="subject_id"   class="form-control">
                                @foreach($subjects as $subject)
                                    <option value="{{$subject->id}}" @if($lecture->subject_id == $subject->id)
                                    Selected @endif>{{$subject->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="due_date" v class="control-label">Date</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="due_date"  value="{{$lecture->due_date}}" class="form-control aston-datepicker">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label">Information</label>
                        </div>
                        <div class="col-md-10">
                            <textarea name="info" id="" cols="30" rows="10" class="form-control">{{$lecture->info}}</textarea>
                        </div>
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="lecture" id="" cols="30" rows="200"
                                      class="form-control aston-summernote">{{$lecture->lecture}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Save"
                                   class="btn btn-sm btn-success pull-right">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('page-js')
    <script src="{{asset('core/vue/all.js')}}"></script>
@stop