@extends('workspace.layout.main')

@include('workspace.faculty.partial.faculty_menu')

@include('workspace.faculty.hodtasks.page_menu')

@section('page-title')
    Add Subject | Aston
@stop


@section('page-content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="{{route('workspace.faculty.hod_tasks.subjects.update',['id'=>$subject->id])}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="put">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="" class="control-label" >Subject Name</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="name" value="{{$subject->name}}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="" class="control-label">Subject Code</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="code" value="{{$subject->code}}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="" class="control-label">Semester</label>
                            </div>
                            <div class="col-md-9">
                                <select name="sem" id="" class="form-control">
                                    @for($i=1;$i<=8;$i++)
                                        <option value="{{$i}}" @if($subject->sem == $i) selected @endif>Semester {{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="" class="control-label">Description</label>
                            </div>
                            <div class="col-md-9">
                                <textarea name="description" id="" cols="30" rows="10" class="form-control">
                                    {{$subject->description}}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="" class="control-label">Assing To Faculty</label>
                            </div>
                            <div class="col-md-9">
                                <select name="faculties[]" id="" class="form-control" multiple>
                                    @if(isset($faculties) && sizeof($faculties) > 0)
                                        @foreach($faculties as $faculty)
                                            <option value="{{$faculty->id}}" @if(in_array($faculty->id,$subject->faculties()->get()->toArray(),true)) selected @endif>
                                                {{$faculty->name}}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <?php
                                if(in_array(3,$subject->faculty_subject->toArray(),true))
                                {
                                    echo "done";
                                }
                                else
                                    {
                                        echo "please check";
                                        echo $subject->faculties()->get();
                                    }
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-sm btn-success">
                    </div>
                </form>
            </div>
        </div>

    </div>
@stop