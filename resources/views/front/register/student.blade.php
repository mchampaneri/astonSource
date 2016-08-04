@extends('front.layout.main')

@section('page-title')
    Student Registration | Aston
@stop


@section('page-content')

    <div class="container">
        <form action="">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-2">
                              <label for="">Name</label>
                          </div>
                          <div class="col-md-6">
                              <input type="text" name="name" class="form-control">
                          </div>
                      </div>
                  </div>
                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-2">
                              <label for="">Email</label>
                          </div>
                          <div class="col-md-6">
                              <input type="text" name="email" class="form-control">
                          </div>
                      </div>
                  </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                          <label for="">Phone Number</label>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="phone_no" value="" class="form-control">
                        </div>
                    </div>
                  </div>
                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-2">
                              <label for="">Address</label>
                          </div>
                          <div class="col-md-6">
                              <textarea name="name" class="form-control" rows="8" cols="40"></textarea>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-2">
                              <label for="">Enrollment Number</label>
                          </div>
                          <div class="col-md-6">
                              <input type="text" name="enrollment_no" class="form-control">
                          </div>
                      </div>
                  </div>
                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-2">
                              <label for="">Department</label>
                          </div>
                          <div class="col-md-6">
                              <select class="form-control" name="department_id">
                                @if(isset($departments) && sizeof($departments) > 0)
                                    @foreach($departments as $id => $department)
                                      <option value="{{$id}}">{{$department}}</option>
                                    @endforeach
                                @endif
                              </select>
                          </div>
                      </div>
                  </div>
                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-2">
                              Semester
                          </div>
                          <div class="col-md-6">
                              <select class="form-control" name="sem">
                                @for($i=1; $i<=8 ; $i++)
                                 <option value="{{$i}}">Semester {{$i}}</option>
                                @endfor
                              </select>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </form>
    </div>

@stop
