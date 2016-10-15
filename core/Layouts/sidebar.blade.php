{{-- Aton Main Sidebar  --}}
<div class="sidebar">
    <ul class="sidebar-menu">

        {{-- Get Role From the Session of user set at login --}}
        <?php
                $user = App\User::RoleMap(\Auth::user()->id);
        ?>


        {{-- Getting the relavent menu for user from the menu.php file --}}
        @foreach(config('menu.'.$user.'.'.$user.'-sidebar') as $menu)

            {{-- Checking if the current menu has further submenu --}}
            @if( isset($menu['has-child']) && sizeof($menu['has-child']) > 0)
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
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
                <li class="{{ set_active($menu['link'].'*') }}">
                    <a href="{{url($menu['link'])}}"><i class="fa fa-lg {{$menu['icon']}}"></i>
                        <p class="name">{{$menu['title']}}</p>
                    </a>
                </li>
            @endif

        @endforeach

        {{-- Special Check for hod privilage menu access --}}

        @if( \Auth::user()->role == 2)
        <!-- Putting Hod Menus -->
            @foreach(config('menu.hod.hod-sidebar') as $menu)
                @if( isset($menu['has-child']) && sizeof($menu['has-child']) > 0)
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button"
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
                    <li class="{{ set_active($menu['link'].'*') }}">
                        <a href="{{url($menu['link'])}}"><i class="fa fa-lg {{$menu['icon']}}"></i>
                            <p class="name">{{$menu['title']}}</p>
                        </a>
                    </li>
            @endif

        @endforeach
    @endif
    <!-- //  Workspace Sidebar menu ------------------------------------>

    </ul>
</div>