<section class="sidebar">
    <div class="iconbar">
        <ul class="menu">

          @yield('workspace-main-menu')

        </ul>
    </div>
    <div class="sub-sidebar">

        <div class="container">
            <a href="#" class="toggle pull-right" onclick="openNav()">Menu <i class="fa fa-navicon"></i></a>
        </div>
        <ul class="menu">
           @yield('workspace-page-menu')
        </ul>
        <div style="clear:both"></div>
    </div>
</section>
