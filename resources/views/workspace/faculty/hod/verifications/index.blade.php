@extends('AstonLayouts::templates.resource')

@section('page-title')
    Aston | Hod/Verify/Account
@stop

@section('page-heading')
    <i class="fa fa-lg fa-book"> </i> Users
@stop

@section('page-heading-small')
    Of Your Department
@stop

@section('panel-heading')
    Users
@stop()

@section('page-buttons')

@stop

@section('panel-body')

    @if(isset($users) && $users->count() > 0)
        <table class="table table-hover aston-datatable">
            <thead>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>
                        {{ App\User::RoleMap($user->role) }}
                    </td>
                    <td><a href="{{route('verify.show',['id'=>$user->id])}}"
                           class="btn btn-sm btn-primary">Go Verify
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

@section('page-js')

@stop