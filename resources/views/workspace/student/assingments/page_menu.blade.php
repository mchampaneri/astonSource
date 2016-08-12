@section('workspace-page-menu')


    @if(isset($subjects) && sizeof($subjects) > 0)
        @foreach($subjects as $subject)
            <li><a data-toggle="collapse" data-parent="#accordion1" href="#{{$subject->name}}">
                    <i class="fa fa-angle-down sub-menu-icon"></i>{{ $subject->name }} </a>
                <ul class="menu submenu collapse" id="{{$subject->name}}">
                    @if( $subject->assingments()->count() > 0)
                        @foreach($subject->assingments()->get() as $assingment)
                            <li><a href="{{route('workspace.student.fill.show',['id'=>$assingment->id])}}">{{$assingment->name}}</a></li>
                        @endforeach
                    @endif
                </ul>
            </li>
        @endforeach
    @endif

@stop
