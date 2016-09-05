@extends('front.layout.main')

@section('page-title')
    Login | Aston
@stop

@section('page-content')
    <div class="container">
        <form action="{{route('login.auth')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="" class="control-label">Email</label>
                <input type="text"  class="form-control" name="email">
            </div>
            
            <div class="form-group">
                <label for="" class="control-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-success btn-sm">
            </div>
        </form>
    </div>
@stop