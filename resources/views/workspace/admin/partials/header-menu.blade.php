@section('header-top-menu')

            @foreach(config('menu.admin.admin-top') as $menu)
                @if( isset($menu['has-child']) && sizeof($menu['has-child']) > 0)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-md {{$menu['icon']}}"></i>
                        </a>
                        <div class="dropdown-menu">
                            @foreach($menu['has-child'] as $sub_menu)
                                <a class="dropdown-item">{{$sub_menu['title']}}</a>
                            @endforeach
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-lg {{$menu['icon']}}"></i></a>
                    </li>
                @endif
            @endforeach

@stop


@section('header-bottom-menu')

    @foreach(config('menu.admin.admin-bottom') as $menu)
            @if( isset($menu['has-child']) && sizeof($menu['has-child']) > 0)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-md {{$menu['icon']}}"> {{$menu['title']}}</i>
                    </a>
                    <div class="dropdown-menu">
                        @foreach($menu['has-child'] as $sub_menu)
                            <a class="dropdown-item"> {{$sub_menu['title']}}</a>
                        @endforeach
                    </div>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-lg {{$menu['icon']}}"></i> {{$menu['title']}}</a>
                </li>
            @endif
    @endforeach
@stop