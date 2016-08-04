@extends('front.layout.main')

@section('page-title')
    Register | Aston
@stop

@section('page-content')
    <div class="container">
      <div class="row">
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header bg-success">
                  Register As Student
                  </div>
                  <div class="card-block">
                      If you are a <span class="bg-inverse text-info">student</span> thant click register button below to get your self
                      enrolled in the system
                      Best of Luck !
                  </div>
                  <div class="card-footer">
                      <a href="{{route('register.student')}}" class="btn btn-lg btn-success">Register</a>
                  </div>
              </div>
          </div>
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header bg-warning">
                      Register As Faculty
                  </div>
                  <div class="card-block">
                      If you are a <span class="bg-inverse text-info">Faculty</span> thant click register button below to get your self
                      enrolled in the system
                      Best of Luck !
                  </div>
                  <div class="card-footer">
                      <a href="{{route('register.faculty')}}" class="btn btn-lg btn-warning">Register</a>
                  </div>
              </div>
          </div>
      </div>
    </div>
@stop