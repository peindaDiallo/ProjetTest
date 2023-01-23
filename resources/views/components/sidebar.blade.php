<div>

    <aside class="aside is-placed-left is-expanded">

        <div class="menu is-menu-main">
            <p class="menu-label">General</p>
            <ul class="menu-list">
                <li class="--set-active-index-html">
                    <a href="index.html">
                        <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                        <span class="menu-item-label">Dashboard</span>
                    </a>
                </li>
            </ul>
            <p class="menu-label">Examples</p>
            <ul class="menu-list">

                <li>
                    <a class="dropdown">
                        <span class="icon"><i class="mdi mdi-view-list"></i></span>
                        <span class="menu-item-label">Configuration</span>
                        <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
                    </a>
                    <ul>
                        <li class="nav-item">
                            <a href="{{route('admin.users.index')}}" :active="request()->routeIs('admin.user.index')">
                                <i class="far fa-circle nav-icon"></i> <p>{{__('main.user')}}</p>

                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.roles.index')}}" :active="request()->routeIs('admin.roles.index)">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{__('main.rolePermission')}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>
</div>
