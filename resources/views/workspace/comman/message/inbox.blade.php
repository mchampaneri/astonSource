@extends('AstonLayouts::templates.resource')

@section('page-title')
    Aston | Messenger

@stop

@section('page-heading')
    Message On Air
@stop

@section('page-buttons')
    <a href="{{route('messages.create')}}" class="btn btn-primary">Create Message</a>
@stop


@section('page-body')
    @if(isset($messages) && $messages->count() > 0)
        <table class="table table-hover aston-datatable">
            <thead>
            <tr>
                <th>From</th>
                <th>Name</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{App\User::name($message->sender_id)}}</td>
                    <td>{{$message->subject}}</td>
                    <td><a href="{{route('messages.show',['id'=>$message->id])}}"
                           class="btn btn-sm btn-primary">View
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p class="aston-empty-message-text text-center"> <i class="fa fa-plus fa-lg icon"></i>
            Add your first Subject by clicking the <span class="label label-info">Add Subject</span>
            Button </p>
    @endif
@stop