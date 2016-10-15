{{-- Main Header File --}}
<div class="header">

    <div class="header-top">

        <div class="container-fluid">

            <div class="row">
                {{-- Sidebar Puller button --}}
                <div class="sidebar-puller" style="margin-top: -5px">
                    <a href="#" onclick="toggle()" class="btn btn-default"><i class="fa fa-bars fa-lg"></i></a>
                </div>

                {{-- Sidebar Top-Left Menu --}}
                <div class="col-sm-6 pull-right">
                    <div class="header-top-menu">

                        {{-- Setting Menu for logged in user --}}
                        <ul class="nav nav-pills">

                            {{-- Get Role From the Session of user set at login --}}
                            <?php
                            $user = App\User::RoleMap(\Auth::user()->id);
                            ?>


                            {{-- Getting the relavent menu for user from the menu.php file --}}
                            @foreach(config('menu.'.$user.'.'.$user.'-top') as $menu)

                                {{-- Checking if the current menu has further submenu --}}
                                @if( isset($menu['has-child']) && sizeof($menu['has-child']) > 0)
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#"
                                           role="button"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-md {{$menu['icon']}}"></i>
                                            <p class="name">{{$menu['title']}}</p>
                                        </a>
                                        <ul class="dropdown-menu-right dropdown-menu">
                                            @foreach($menu['has-child'] as $sub_menu)
                                                <li><a class="dropdown-item btn btn-md pull-left"
                                                       href="{{url($sub_menu['link'])}}">
                                                        <i class="fa fa-sm {{$sub_menu['icon']}}"></i>
                                                        {{$sub_menu['title']}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-lg {{$menu['icon']}}"></i>
                                            <p class="name">{{$menu['title']}}</p>
                                        </a>
                                    </li>
                                @endif

                            @endforeach

                            {{-- Special Check for hod privilage menu access --}}
                            @if(\Auth::user()->role == 'faculty' && \Auth::user()->faculty()->is_hod)
                                @foreach(config('menu.hod.hod-top') as $menu)
                                    @if( isset($menu['has-child']) && sizeof($menu['has-child']) > 0)
                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                               role="button"
                                               aria-haspopup="true" aria-expanded="false">
                                                <i class="fa  fa-md   {{$menu['icon']}}"> </i>
                                                <p class="name">{{$menu['title']}}</p>
                                            </a>
                                            <ul class=" dropdown-menu">
                                                @foreach($menu['has-child'] as $sub_menu)
                                                    <li><a class="dropdown-item"> </a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{url($menu['link'])}}"><i class="fa fa-lg {{$menu['icon']}}"></i>
                                                <p class="name">{{$menu['title']}}</p>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>