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
          <form class="" action="{{route('workspace.faculty.assingments.update',['id'=>$assingment->id])}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label for="" class="control-lable">Assinment Title</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control"  name="name" value="{{$assingment->name}}">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label for="" class="control-label">Description</label>
                </div>
                <div class="col-md-9">
                  <textarea name="description" class="form-control" rows="8" cols="40">{{$assingment->description}}
                  </textarea>
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-sm btn-sucess"  value="Update">
            </div>
          </form>
        </div>
    </div>
    <div class="row">
      
    </div>
  </div>
@stop
