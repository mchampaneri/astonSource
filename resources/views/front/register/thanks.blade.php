@extends('front.layout.main')

@section('page-title')
    Registration Complete | Thanks
@stop

@section('page-content')
    @if(isset($user))
    <div class="container">
        <h3>Thank you For Registering With Us ! </h3>

        <h2> {{ $user->name  }}</h2>

        <h4> You has registered for  {{ $user->role  }} account </h4>
        <h5> Now wait for 48hrs or contact to your Head of Department to get your account activated </h5>

        <h5> Have A Nice Day</h5>
    </div>
    @else()
    <div class="container">

        <h4> Have A Nice Day !</h4>
    </div>
    @endif
@stop