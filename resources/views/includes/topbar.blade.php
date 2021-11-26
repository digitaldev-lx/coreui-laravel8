<header class="c-header c-header-light c-header-fixed c-header-with-subheader">
    <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
            data-class="c-sidebar-show">

        <i class="c-sidebar-nav-icon cil-menu"></i>
    </button>
    <a class="c-header-brand d-lg-none" href="#">

        <i class="c-sidebar-nav-icon cil-menu"></i>
    </a>
    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
            data-class="c-sidebar-lg-show" responsive="true">
        <i class="c-sidebar-nav-icon cil-menu"></i>
    </button>
    {{-- TopBar navigation menu links --}}
    {{--<ul class="c-header-nav d-md-down-none">
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
    </ul>--}}
    <ul class="c-header-nav ml-auto mr-4">
        <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                <i class="c-sidebar-nav-icon cil-bell"></i>
            </a></li>
        <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                <i class="c-sidebar-nav-icon cil-list-rich"></i>
            </a></li>
        <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                <i class="c-sidebar-nav-icon cil-envelope-open"></i>
            </a></li>
        <li class="c-header-nav-item dropdown ml-3">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#"
               role="button" aria-haspopup="true" aria-expanded="false">
                <div class="c-avatar">
                    <img class="c-avatar-img" src="https://i.pravatar.cc/50" alt="user@email.com">
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
                <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
                <a class="dropdown-item" href="#">
                    <i class="c-sidebar-nav-icon cil-bell"></i>
                    Updates<span class="badge badge-info ml-auto">42</span></a><a class="dropdown-item" href="#">
                    <i class="c-sidebar-nav-icon cil-envelope-open"></i>
                    Messages<span class="badge badge-success ml-auto">42</span></a><a class="dropdown-item"
                                                                                      href="#">
                    <i class="c-sidebar-nav-icon cil-task"></i>
                    Tasks<span class="badge badge-danger ml-auto">42</span></a><a class="dropdown-item" href="#">
                    <i class="c-sidebar-nav-icon cil-comment-square"></i>
                    Comments<span class="badge badge-warning ml-auto">42</span></a>
                <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div>
                <a class="dropdown-item" href="#">
                    <i class="c-sidebar-nav-icon cil-user"></i>
                    Profile</a><a class="dropdown-item" href="#">
                    <i class="c-sidebar-nav-icon cil-settings"></i>
                    Settings</a><a class="dropdown-item" href="#">
                    <i class="c-sidebar-nav-icon cil-credit-card"></i>
                    Payments<span class="badge badge-secondary ml-auto">42</span></a><a class="dropdown-item"
                                                                                        href="#">
                    <i class="c-sidebar-nav-icon cil-file"></i>
                    Projects<span class="badge badge-primary ml-auto">42</span></a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">
                    <i class="c-sidebar-nav-icon cil-lock-locked"></i>
                    Lock Account</a>

                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="c-sidebar-nav-icon cil-account-logout"></i> {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
    <div class="c-subheader px-3">

        <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item">
                <button class="btn btn-danger">test</button>
            </li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Dashboard</li>

        </ol>
    </div>
</header>
