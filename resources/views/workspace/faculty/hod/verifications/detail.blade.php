@extends('AstonLayouts::templates.dashboard')

@section('page-title')
    Aston | Home
@stop
@section('page-heading')
    Verify Account
@stop
@section('page-heading-small')
    Your Departments
@stop
@section('panel-heading')
    Have A nice day
@stop

@section('catalogs')
    <div class="row">

        <h4>Name : {{ $user->name  }}</h4>

        <h4>As : {{\App\User::RoleMap($user->role)}}</h4>

        <h4>Department : {{ \App\Department::Name($user->department_id) }}</h4>

        <h4>Semester : {{ $user->sem }}</h4>

        <h4>Phone Number : {{$user->contact_no}}</h4>

        <h4>Address : {{$user->address}}</h4>

        <form action="{{route('verify.update',['id'=>$user->id])}}" method="post">
            {{ csrf_field() }}
            {{ method_field('put') }}
            <input type="submit" value="Verify & Activate" class="btn btn-sm btn-primary">
        </form>
    </div>


@stop