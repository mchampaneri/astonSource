@section('workspace-page-menu')

    @if(isset($departments) && sizeof($departments) > 0)
        @foreach($departments as $department)
        <li><a href="{{route('workspace.admin.departments.edit',['id'=>$department->id])}}"><i class="fa fa-pencil sub-menu-icon"></i>{{$department->name}}</a></li>
        @endforeach
    @endif

    <li><a href="{{route('workspace.admin.departments.create')}}"><i class="fa fa-plus sub-menu-icon"></i>Add Department</a></li>

@stop