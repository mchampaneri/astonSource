@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston | Admin/Departments/Create
@stop

@section('page-heading')
    <i class="fa fa-lg fa-book"> </i> Subjects
@stop

@section('page-heading-small')
    Update
@stop

@section('panel-heading')
    Update the subject information
@stop()

@section('page-buttons')

    <a href="{{route('subjects.index')}}" class="btn btn-default">Back</a>
@stop

@section('panel-body')
    <div class="row">
        <div class="col-md-8">
            <form action="{{route('subjects.update',['id'=>$subject->id])}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="name" class="control-label">Name</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="name" value="{{$subject->name}}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class=" col-md-2">
                            <label for="name" class="control-label">Semester</label>
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
                            <label for="" class="control-label"> Faculty</label>
                        </div>
                        <div class="col-md-9">
                            <select name="faculties[]" id="" class="form-control" multiple="multiple">
                                @foreach($faculties as $faculty)
                                    <option value="{{$faculty->id}}"
                                            @if(in_array($faculty->id,$faculty_selected,true)) selected @endif
                                    >{{$faculty->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-11">
                            <input type="submit" value="Save" class="btn btn-sm btn-success pull-right">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
