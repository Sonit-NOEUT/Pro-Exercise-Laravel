@guest
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('images/logo.svg') }}" alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{ asset('images/logo-mini.svg') }}" alt="logo" /></a>
        </div>
        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle " src="{{ asset('images/user-200.png') }}" alt="">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal">Free Account</h5>
                            <span>Member</span>
                        </div>
                    </div>

                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="index.html">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
                </a>
            </li>
        </ul>
    </nav>
@endguest
@auth
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="{{ route('home.index') }}"><img src="{{ asset('images/logo.svg') }}" alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini" href="{{ route('home.index') }}"><img src="{{ asset('images/logo-mini.svg') }}" alt="logo" /></a>
        </div>
        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle " src="{{ asset('images/photo_2022-09-21_22-48-33.jpg') }}" alt="">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal">{{auth()->user()->name}}</h5>
                            <span>User Now</span>
                        </div>
                    </div>
                    <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                    <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-settings text-primary"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-onepassword  text-info"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-calendar-today text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ route('home.index') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-speedometer"></i>
                    </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ route('posts.index') }}">
                    <span class="menu-icon">
                        <iconify-icon icon="mdi:post-it-note-edit-outline" width="18" class="text-success"></iconify-icon>
                    </span>
                    <span class="menu-title">Posts</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ route('clients.index') }}">
                    <span class="menu-icon">
                        <iconify-icon icon="material-symbols:group" width="18" class="text-warning"></iconify-icon>
                    </span>
                    <span class="menu-title">Clients</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ route('products.index') }}">
                    <span class="menu-icon">
                        <iconify-icon icon="material-symbols:add-shopping-cart" width="18" class="text-success"></iconify-icon>
                    </span>
                    <span class="menu-title">Products</span>
                </a>
            </li>
            @role('admin')
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('users.index') }}">
                        <span class="menu-icon">
                            <iconify-icon icon="mdi:user-check" width="18" class="text-warning"></iconify-icon>
                        </span>
                        <span class="menu-title">Users</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('roles.index') }}">
                        <span class="menu-icon">
                            <iconify-icon icon="eos-icons:role-binding-outlined" width="18" class="text-danger"></iconify-icon>
                        </span>
                        <span class="menu-title">Roles</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('permissions.index') }}">
                        <span class="menu-icon">
                            <iconify-icon icon="icon-park-twotone:permissions" width="18" class="text-info"></iconify-icon>
                        </span>
                        <span class="menu-title">Permissions</span>
                    </a>
                </li>
            @endrole
        </ul>
    </nav>
@endauth

