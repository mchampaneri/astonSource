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
        <div class="col-md-2"></div>
        <div class="col-md-8" >
            <form action="{{route('assignments.update',['id'=>$assignment->id])}}" method="post">
                {{csrf_field()}}
                <input type="hidden" value="put" name="_method">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="name" class="control-label">Title</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" value="{{ $assignment->title }}" name="title" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class=" col-md-2">
                            <label for="name" class="control-label">Semester</label>
                        </div>
                        <div class="col-md-9" >
                            <select name="sem"   class="form-control">
                                @for($i=1; $i<=8;$i++)
                                    <option value="{{$i}}" @if($assignment->id==$i) selected @endif> Semester {{$i}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="name" class="control-label">Subject</label>
                        </div>
                        <div class="col-md-9">
                            <select name="subject_id"  class="form-control">
                                <option value="1" >yo</option>
                            </select>
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

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        @if(isset($question))
                <form action="{{route('questions.update',['id'=>$question->id])}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" value="put" name="_method">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="" class="control-label">Question</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="question" value="{{$question->question}}" class="form-control">
                            </div>
                            <input type="hidden" name="assignment_id" value="{{$assignment->id}}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-11">
                                <input type="submit" value="Update Question" class="btn btn-sm btn-success pull-right">
                            </div>
                        </div>
                    </div>
                </form>
        @else
            <form action="{{route('questions.store')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                       <div class="row">
                           <div class="col-md-2">
                               <label for="" class="control-label">Question</label>
                           </div>
                           <div class="col-md-9">
                               <input type="text" name="question" class="form-control">
                           </div>
                           <input type="hidden" name="assignment_id" value="{{$assignment->id}}">
                       </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-11">
                            <input type="submit" value="Add Question" class="btn btn-sm btn-success pull-right">
                        </div>
                    </div>
                </div>
            </form>
         @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @if($assignment->questions()->count() > 0)
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Question</td>
                        <td>Edit</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($assignment->questions()->get() as $question)
                    <tr>
                        <td>{{ $question->id }}</td>
                        <td>{{ $question->question }}</td>
                        <td><a href="{{route('questions.edit',['id'=>$question->id])}}" class="btn btn-default">Edit</a></td>
                    </tr>
                     @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
@stop

@section('page-js')

@stop