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
        <div class="col-md-8" >
            <form action="{{route('assignments.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="name"  class="control-label">Title</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" v-model="title" name="title" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class=" col-md-2">
                            <label for="name" class="control-label">Semester</label>
                        </div>
                        <div class="col-md-9" >
                            <select name="sem" id="" v-model="sem">
                                @for($i=1;$i<=8;$i++)
                                    <option value="{{$i}}">{{$i}}</option>
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
                            <select name="subject_id" id="" v-model="" class="form-control">

                                    <option value="1">yo</option>

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
                <textarea name="" id="" cols="30" rows="10" class="form-control aston-summernote"></textarea>
            </form>
            <Question></Question>

        </div>
    </div>
@stop

@section('page-js')
    <script src="{{asset('core/vue/all.js')}}"></script>
@stop