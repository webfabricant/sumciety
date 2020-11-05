<!-- LOGO -->
<div class="topbar-left">
    <div class="">
        <!--<a href="index.html" class="logo text-center">Admiria</a>-->
        <a href="index.html" class="logo"><img src="{{ asset('backend/assets/images/logo-sm.png')}}" height="36" alt="logo"></a>
    </div>
</div>

<div class="sidebar-inner slimscrollleft">
    <div id="sidebar-menu">
        <ul>

            <li class="menu-title">Main</li>

            <li>
                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard</span> </a>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> Blog Posts <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('blog.index')}}">All Posts</a></li>
                </ul>
            </li>
            <li>
                <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Calendar </span></a>
            </li>

            <li class="menu-title">Components</li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-buffer"></i> <span> User Interface <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                <ul class="list-unstyled">
                    <li><a href="ui-buttons.html">Buttons</a></li>
                    <li><a href="ui-colors.html">Colors</a></li>
                    <li><a href="ui-cards.html">Cards</a></li>
                    <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                    <li><a href="ui-modals.html">Modals</a></li>
                    <li><a href="ui-sessiontimeout.html">Session Timeout</a></li>
                </ul>
            </li>



        </ul>
    </div>
    <div class="clearfix"></div>
</div>
