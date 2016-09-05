@section('workspace-page-menu')

    <li><a data-toggle="collapse" data-parent="#accordion1" href="#subject"><i class="fa fa-angle-down sub-menu-icon"></i>Subjects </a>
        <ul class="menu submenu collapse" id="subject">
            <li><a href="{{route('workspace.faculty.hod_tasks.subjects.index')}}"><i class="fa fa-list sub-menu-icon"></i> All Subjects   </a></li>
            <li><a href="{{route('workspace.faculty.hod_tasks.subjects.create')}}"><i class="fa fa-plus sub-menu-icon"></i>Add Subject</a></li>
        </ul>
    </li>

    <li><a data-toggle="collapse" data-parent="#accordion1" href="#subject"><i class="fa fa-angle-down sub-menu-icon"></i> Assign Subjects</a>
        <ul class="menu submenu collapse" id="subject">
            <li><a href="{{route('workspace.faculty.hod_tasks.subjects.index')}}"><i class="fa fa-list sub-menu-icon"></i> All Subjects   </a></li>
            <li><a href="{{route('workspace.faculty.hod_tasks.subjects.create')}}"><i class="fa fa-plus sub-menu-icon"></i>Add Subject</a></li>
        </ul>
    </li>

@stop
