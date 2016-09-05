@section('workspace-page-menu')


  @if(isset($subjects) && sizeof($subjects) > 0)
      @foreach($subjects as $subject)
        <li><a data-toggle="collapse" data-parent="#accordion1" href="#{{$subject->name}}">
          <i class="fa fa-angle-down sub-menu-icon"></i>{{ $subject->name }} </a>
          <ul class="menu submenu collapse" id="{{$subject->name}}">
                  @if( \Auth::user()->asFaculty()->first()->hasAssingment($subject->id)->count())
                      @foreach(\Auth::user()->asFaculty()->first()->hasAssingment($subject->id) as $assingment)
                        <li><a href="{{route('workspace.faculty.assingments.show',['id'=>$assingment->id])}}">{{$assingment->name}}</a></li>
                      @endforeach
                  @endif
                  <li><a href="{{route('workspace.faculty.assingments.create',
                    ['id'=>$subject->id])}}">
                    <i class="fa fa-plus sub-menu-icon"></i>
                        Add Assingment
                  </a></li>
          </ul>
        </li>
      @endforeach
  @endif

@stop
