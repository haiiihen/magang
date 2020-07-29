<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="/" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                
                @hasrole('admin')
                <li><a href="/admin/profile" class=""><i class="lnr lnr-user"></i><span>Profile</span></a></li>
                <li><a href="{{ route('admin.users.index') }}" class=""><i class="lnr lnr-users"></i><span>Daftar User</span></a></li>
                <!-- <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr lnr-tag"></i> <span>Website</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="#" class=""><i class="lnr lnr-pushpin"></i><span>Event</span></a></li>
                            <li><a href="#" class=""><i class="lnr lnr-pushpin"></i><span>Content</span></a></li>
                        </ul>
                    </div>
                </li> -->
                @endhasrole
                @hasrole('user')
                <li><a href="{{ route('users.profile') }}" class=""><i class="lnr lnr-user"></i><span>Profile</span></a></li>
                <li><a href="{{ route('users.users.index') }}" class=""><i class="lnr lnr-users"></i><span>Daftar Anggota</span></a></li>
                @endhasrole
                @impersonate()
                <li class="nav-item">
                    <a href="{{ route('impersonate.destroy') }}"><i class="lnr lnr-warning"></i><span>Stop Impersonate</span></a>
                </li>
                @endimpersonate
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                        <i class="lnr lnr-power-switch lnr-danger"></i> <span>{{ __('Logout') }}</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</div>