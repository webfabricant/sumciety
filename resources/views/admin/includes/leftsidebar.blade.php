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
                <a href="{{url('admin/dashboard')}}" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard</span> </a>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ion-ios7-folder-outline"></i><span> Category <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('category.index')}}">Main Category</a></li>
                    <li><a href="{{route('subcategory.index')}}">Sub Category</a></li>
                    <li><a href="{{route('childcategory.index')}}">Child Category</a></li>
                </ul>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ion-ios7-people"></i><span> Users <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('admin.orgnization')}}">Orgnization</a></li>
                    <li><a href="email-read.html">Artist</a></li>
                    <li><a href="email-compose.html">Traditional User</a></li>
                </ul>
            </li>

            <li class="menu-title">Components</li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-buffer"></i> <span> User Interface <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                <ul class="list-unstyled">
                    <li><a href="ui-buttons.html">Buttons</a></li>
                    <li><a href="ui-colors.html">Colors</a></li>
                    <li><a href="ui-cards.html">Cards</a></li>
                    <li><a href="ui-sessiontimeout.html">Session Timeout</a></li>
                </ul>
            </li>



        </ul>
    </div>
    <div class="clearfix"></div>
</div>
