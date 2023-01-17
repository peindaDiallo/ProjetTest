<div>
    <nav id="navbar-main" class="navbar is-fixed-top">

        <div class="navbar-brand">
            <a class="navbar-item mobile-aside-button">
                <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
            </a>
            <div class="navbar-item">
                <div class="control"><input placeholder="Search everywhere..." class="input"></div>
            </div>
        </div>
               <div class="navbar-item dropdown has-divider has-user-avatar">
                    <a class="navbar-link">
                        <div class="user-avatar">
                        <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe" class="rounded-full">
                        </div>
                        <div class="is-user-name"><span>John Doe</span></div>
                        <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
                    </a>
                    <div class="navbar-dropdown">
                        <a href="profile.html" class="navbar-item">
                            <span class="icon"><i class="mdi mdi-account"></i></span>
                            <span>My Profile</span>
                        </a>
                        <a class="navbar-item">
                            <span class="icon"><i class="mdi mdi-settings"></i></span>
                            <span>Settings</span>
                        </a>
                        <a class="navbar-item">
                            <span class="icon"><i class="mdi mdi-email"></i></span>
                            <span>Messages</span>
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item">
                            <span class="icon"><i class="mdi mdi-logout"></i></span>
                            <span>Log Out</span>
                        </a>
            </div>
        </div>
        <ul class="menu-list">
            <li>
                <a class="dropdown ">
                    <span class="icon"><i class="mdi mdi-flag"></i></span>
                    <span>{{ __('main.language')}}</span>
                    <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
                </a>
                <ul>
                    <li class="nav-item lh-1 me-3">
                        <a  class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <x-current-language/>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" >
                            <x-atpro-internalisation/>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>

