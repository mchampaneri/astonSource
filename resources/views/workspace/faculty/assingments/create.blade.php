@extends('workspace.layout.main')

@include('workspace.faculty.partial.faculty_menu')

@include('workspace.faculty.assingments.page_menu')

@section('page-title')
  Create Assingment | Aston
@stop

@section('page-content')
  <div class="container">
    <div class="row">
        <div class="col-md-8">
          <form  action="{{route('workspace.faculty.assingments.store')}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="subject_id" value="{{$subject_id}}">
            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label for="" class="control-lable">Assinment Title</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control"  name="name" value="">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label for="" class="control-label">Description</label>
                </div>
                <div class="col-md-9">
                  <textarea name="description" class="form-control" rows="8" cols="40">
                  </textarea>
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-sm btn-sucess"  value="Add">
            </div>
          </form>
        </div>
    </div>
  </div>
@stop
