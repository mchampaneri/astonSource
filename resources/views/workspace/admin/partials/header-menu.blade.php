@section('header-top-menu')

            @foreach(config('menu.admin.admin-top') as $menu)
                @if( isset($menu['has-child']) && sizeof($menu['has-child']) > 0)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-md {{$menu['icon']}}"></i>
                        </a>
                        <ul class="dropdown-menu-right dropdown-menu">
                            @foreach($menu['has-child'] as $sub_menu)
                               <li> <a class="dropdown-item btn btn-md"><i class="fa fa-sm {{$menu['icon']}}"></i> {{$sub_menu['title']}}</a> </li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-lg {{$menu['icon']}}"></i></a>
                    </li>
                @endif
            @endforeach

@stop


@section('sidebar-menu')

    @foreach(config('menu.admin.admin-sidebar') as $menu)
            @if( isset($menu['has-child']) && sizeof($menu['has-child']) > 0)
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fa  fa-md   {{$menu['icon']}}"> </i>
                    </a>
                    <ul class=" dropdown-menu">
                        @foreach($menu['has-child'] as $sub_menu)
                           <li> <a class="dropdown-item"> </a> </li>
                        @endforeach
                    </ul>
                </li>
            @else
                <li >
                    <a  href="#"><i class="fa fa-lg {{$menu['icon']}}"></i></a>
                </li>
            @endif
    @endforeach
@stop