<div class="header">

    <div class="header-top">
        <div class="container">
            <div class="row">

                <!-- Sidebar Puller for small screens -->
                <div class="sidebar-puller">
                    <a href="#" onclick="toggle()" class="btn btn-default"><i class="fa fa-bars fa-lg"></i></a>
                </div>
                <!-- // Sidebar puller -->

                <div class="col-sm-5">
                    <div class="logo">
                        <h1 class="logo">ASTON <span class="aston-theme-text">SYSTEMS</span> </h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="header-top-menu">
                        <ul class="nav nav-pills">

                            <!--  Workspace Top Menu ----------------------->
                            <?php $user = 'hod'; ?>
                            @foreach(config('menu.'.$user.'.'.$user.'-top') as $menu)
                                @if( isset($menu['has-child']) && sizeof($menu['has-child']) > 0)
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-md {{$menu['icon']}}"></i>
                                        </a>
                                        <ul class="dropdown-menu-right dropdown-menu">
                                            @foreach($menu['has-child'] as $sub_menu)
                                                <li> <a class="dropdown-item btn btn-md" href="{{url($sub_menu['link'])}}">
                                                        <i class="fa fa-sm {{$sub_menu['icon']}}"></i>
                                                        {{$sub_menu['title']}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-lg {{$menu['icon']}}"></i></a>
                                    </li>
                                @endif
                            @endforeach

                            <!-- // Workspace Top Menu ----------------------->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>