

<ul class="menu">
    <li class="sidebar-item">
        <a href="{{route(currentUser().'.dashboard')}}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>{{__('dashboard') }}</span>
        </a>
    </li>
    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'><i class="bi bi-boxes"></i><span>{{__('DO Setting')}}</span>
        </a>
        <ul class="submenu">
            <li class="py-1"><a href="#" >{{__('Do')}}</a></li>
		</ul>
    </li>


</ul>
