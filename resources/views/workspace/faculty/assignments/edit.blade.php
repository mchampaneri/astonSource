@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston | Hod/Subjects/Create
@stop

@section('page-heading')
    Aston | New Subject
@stop

@section('page-buttons')

    <a href="{{route('assignments.index')}}" class="btn btn-default">Back</a>
@stop

@section('page-body')
    <div class="row">
        <div class="col-md-6" >
            <div class="col-md-12" >
                <form action="{{route('assignments.update',['id'=>$assignment->id])}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="name"   class="control-label">Title</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" value="{{$assignment->title}}" name="title" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="name" class="control-label">Subject</label>
                            </div>
                            <div class="col-md-9">
                                <select name="subject_id"   class="form-control">
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}" @if($assignment->subject_id == $subject->id)
                                        Selected @endif>{{$subject->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label class="control-label">Informaion</label>
                            </div>
                            <div class="col-md-9">
                                <textarea name="info" id="" cols="30" rows="10" class="form-control">{{$assignment->title}}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-11">
                                <input type="submit" value="Save"
                                       class="btn btn-sm btn-success pull-right">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @if ( isset($question) )
            <div class="col-md-6">
                <div class="panel">
                    <form action="{{route('questions.update',['id'=>$question->id])}}" method="post">
                        <input type="hidden" name="_method" value="put">
                        <input type="hidden" name="assignment_id" value="{{$assignment->id}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="">Question</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" value="{{$question->question}}" name="question" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="">Imp Level</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" value="{{$question->imp_lvl}}" name="imp_lvl" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="">Question</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="hint">{{$question->hint}}"</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-11">
                                    <input type="submit" value="Update" class="btn btn-success pull-right">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @else
            <div class="col-md-6">
            <div class="panel">
                <form action="{{route('questions.store')}}" method="post">
                    <input type="hidden" name="assignment_id" value="{{$assignment->id}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="">Question</label>
                            </div>
                            <div class="col-md-9">
                            <input type="text" name="question" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="">Imp Level</label>
                            </div>
                            <div class="col-md-9">
                            <input type="text" name="imp_lvl" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="">Question</label>
                            </div>
                            <div class="col-md-9">
                            <textarea class="form-control" name="hint"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-11">
                                <input type="submit" value="Add" class="btn btn-success pull-right">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endif
    </div>
    <div class="row">
        @if ( $assignment->questions()->count() > 0)
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Question</th>
                    <th>Imp Level</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($assignment->questions()->get() as $question)
                    <tr>
                        <td>{{$question->question}}</td>
                        <td>{{$question->imp_lvl}}</td>
                        <td><a href="{{route('questions.edit',['id'=>$question->id])}}" class="btn btn-primary">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <p class="aston-empty-message-text text-center"> <i class="fa fa-plus fa-lg icon"></i>
                Add your first Question by clicking the <span class="label label-info">Add Department</span>
                Button </p>
        @endif

    </div>
@stop

@section('page-js')

@stop