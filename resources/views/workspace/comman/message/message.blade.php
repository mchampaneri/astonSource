@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston
@stop


@section('page-heading')
    Assignments
@stop

@section('page-buttons')
    <a href="{{route('messages.create')}}" class="btn btn-default">Add Result</a>
@stop

@section('page-body')
    <div class="row">
        <div class="col-md-12">
           <div class="row">
               <div class="col-md-4 text-center">From : {{ App\User::name($message->sender_id) }}</div>
               <div class="col-md-4 text-center"></div>
               <div class="col-md-4 text-center">To : {{ App\User::name($message->receiver_id) }}</div>
           </div>
            <div class="row">
                <div class=" col-md-4 text-center"> Date : {{ $message->created_at }} </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    Subject : <p>{{ $message->subject }}</p>
                </div>
                <hr>
                <div class="col-md-12">
                    Message :
                    </p> {{ $message->message }}</p>
                </div>
            </div>
        </div>
    </div>

@stop