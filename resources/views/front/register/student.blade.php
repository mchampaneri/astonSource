@extends('front.layout.main')

@section('page-title')
    Student Registration | Aston
@stop


@section('page-content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                Student Registration Form
            </div>
            <form action="{{route('register.student.store')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6 card-block">
                        <div class="form-group">
                          <div class="row">
                              <div class="col-md-4">
                                  <label for="">Name</label>
                              </div>
                              <div class="col-md-8">
                                  <input type="text" name="name" class="form-control">
                              </div>
                          </div>
                      </div>
                        <div class="form-group">
                          <div class="row">
                              <div class="col-md-4">
                                  <label for="">Email</label>
                              </div>
                              <div class="col-md-8">
                                  <input type="text" name="email" class="form-control">
                              </div>
                          </div>
                      </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Password</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                              <label for="">Phone Number</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" name="phone_no" value="" class="form-control">
                            </div>
                        </div>
                      </div>
                        <div class="form-group">
                          <div class="row">
                              <div class="col-md-4">
                                  <label for="">Address</label>
                              </div>
                              <div class="col-md-8">
                                  <textarea name="address" class="form-control" rows="8" cols="40"></textarea>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6 card-block">
                        <div class="form-group">
                          <div class="row">
                              <div class="col-md-4">
                                  <label for="">Enrollment Number</label>
                              </div>
                              <div class="col-md-8">
                                  <input type="text" name="enrollment_no" class="form-control">
                              </div>
                          </div>
                      </div>
                        <div class="form-group">
                          <div class="row">
                              <div class="col-md-4">
                                  <label for="">Department</label>
                              </div>
                              <div class="col-md-8">
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
                              <div class="col-md-4">
                                  Semester
                              </div>
                              <div class="col-md-8">
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
                <div class="row">
                    <div class="col-md-12 card-block">
                        <div class="form-group">
                            <input type="submit" class="btn btn-sm btn-success pull-right" value="Register me ">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
