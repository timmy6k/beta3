@auth
    <ul class="navbar-nav">

        @if(Auth::user()->userrole->id == 2)
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dev</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="">For Testing/</a>
                    <a class="dropdown-item" href="">Development Purposes</a>
                    <a class="dropdown-item" href="{{route('roles')}}">Roles</a>

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
                    <a class="dropdown-item" href="{{route('material.index')}}">View All</a>
                @if(Auth::user()->materialrole->name == 'author' or Auth::user()->materialrole->name == 'full')
                    <a class="dropdown-item" href="{{route('material.create')}}">Add Material</a>
                @endif
                @if(Auth::user()->materialrole->name == 'approver' or Auth::user()->materialrole->name == 'full')
                    <a class="dropdown-item" href="{{route('material.approve')}}">Approvals</a>
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
