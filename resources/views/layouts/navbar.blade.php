@auth
    <ul class="navbar-nav">

        @if(Auth::user()->userrole->name == 'waffle' or Auth::user()->userrole->name == 'dev')
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dev</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('dev.user.index')}}">All Users</a>
                    <a class="dropdown-item" href="{{route('dev.user.create')}}">Add User</a>
                    <a class="dropdown-item" href="{{route('roles')}}">View My Roles</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('role.index')}}">View All Roles</a>
                    <a class="dropdown-item" href="{{route('role.create')}}">Add Role</a>

                </div>
            </li>
        @endif

            @if(Auth::user()->userrole->name == 'super admin' or Auth::user()->userrole->name == 'dev' or Auth::user()->userrole->id == 2)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Super Admin</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('superadmin.user.index')}}">View All Users</a> <a class="dropdown-item" href="{{route('superadmin.user.create')}}">Add User</a> <a class="dropdown-item" href="#">Log</a>
                    </div>
                </li>
            @endif


        @if(Auth::user()->userrole->name == 'admin' or Auth::user()->userrole->name == 'dev' or Auth::user()->userrole->id == 2)
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Admin</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('user.index')}}">View All Users</a> <a class="dropdown-item" href="{{route('user.create')}}">Add User</a> <a class="dropdown-item" href="#">Log</a>
                </div>
            </li>
        @endif






        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Materials</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('material.index')}}">View Approved Materials</a>
                @if(Auth::user()->materialrole->name == 'author' or Auth::user()->materialrole->name == 'full')
                    <a class="dropdown-item" href="">View Rejected Materials</a>
                @endif
                @if(Auth::user()->materialrole->name == 'author' or Auth::user()->materialrole->name == 'full')
                    <a class="dropdown-item" href="{{route('material.create')}}">Add Material</a>
                @endif
                @if(Auth::user()->materialrole->name == 'approver' or Auth::user()->materialrole->name == 'full')
                    <a class="dropdown-item" href="{{route('approve.index')}}">Approvals</a>
                @endif
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('materialtype.index')}}">View Material Types</a>
                @if(Auth::user()->materialrole->name == 'author' or Auth::user()->materialrole->name == 'full')
                    <a class="dropdown-item" href="{{route('materialtype.create')}}">Add Material Type</a>
                @endif
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Inventory</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="">View All</a> <a class="dropdown-item" href="">Add/Remove From Inventory</a> <a class="dropdown-item" href="#">Approvals</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">MPRs</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="">View All</a> <a class="dropdown-item" href="">New MPR Version</a> <a class="dropdown-item" href="#">Approve MPR Version</a>

            </div>
        </li>

        <li class="nav-item">

        </li>

    </ul>

@endauth
