@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston | Hod/Subjects/Create
@stop

@section('page-heading')
    <i class="fa fa-lg fa-sticky-note"> </i> Editing Assignment |  <span class="aston-theme-text-light">
        {{ $assignment->title }} </span>
@stop

@section('page-buttons')

    <a href="{{route('assignments.index')}}" class="btn btn-default">Back</a>
@stop

@section('page-body')


    <div class="row panel-body">
        <form action="{{route('assignments.update',['id'=>$assignment->id])}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            <div class="col-md-4">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3 ">
                            <label for="name"  class="control-label">Title</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text"  value={{$assignment->title}} name="title" class="form-control">
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
                                    <option value="{{$subject->id}}" @if($assignment->subject_id == $subject->id) selected @endif>{{$subject->name}}</option>
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
                            <textarea name="info" id="" cols="30" rows="3" class="form-control">{{$assignment->info}}</textarea>

                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">

                <div class="col-md-12">
                    <input type="submit" value="Update"
                           class="btn btn-sm btn-success pull-right">
                </div>
            </div>
        </form>
    </div>
    <hr>
    <div class="row ">
        @if (isset($question) )
            <form action="{{route('questions.update',['id'=>$question->id])}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="assignment_id" value="{{$assignment->id}}">
                <div class="col-md-7">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Question</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="question" value="{{$question->question}}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Impotnace Level</label>
                            </div>
                            <div class="col-md-9">
                                <select name="imp_lvl" class="form-control" id="">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-1">
                                <label for="">Hint</label>
                            </div>
                            <div class="col-md-11">
                                <textarea name="hint" id="" cols="30" rows="4" class="form-control">{{$question->hint}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="submit" value="Update Question" class="btn btn-success pull-right">
                    </div>
                </div>
            </form>
        @else
            <form action="{{route('questions.store')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="assignment_id" value="{{$assignment->id}}">
                <div class="col-md-7">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Question</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="question" class="form-control">
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Impotnace Level</label>
                            </div>
                            <div class="col-md-9">
                                <select name="imp_lvl" class="form-control" id="">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-1">
                            <label for="">Hint</label>
                        </div>
                        <div class="col-md-11">
                            <textarea name="hint" id="" cols="30" rows="4" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="submit" value="Add Question" class="btn btn-success pull-right">
                    </div>
                </div>
            </form>
        @endif
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
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
                        <td><a href="{{route('questions.edit',['id'=>$question->id])}}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p class="aston-empty-message-text text-center"> <i class="fa fa-plus fa-lg icon"></i>
                Add your first Question by clicking the <span class="label label-info">Add Questions</span>
            </p>
        @endif
        </div>
    </div>
@stop

@section('page-js')

@stop