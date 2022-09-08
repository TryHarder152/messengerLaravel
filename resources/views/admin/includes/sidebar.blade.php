<ul id="slide-out" class="side-nav fixed z-depth-4">
    <li>
        <div class="userView">
            <div class="background">
                <img src="{{ asset('assets/admin/img/photo1.png') }}">
            </div>
            <a href="#!user"><img class="circle" src="{{ asset('assets/admin/img/avatar04.png') }}"></a>
            <a href="#!name"><span class="white-text name">Welcome back,</span></a>
            <a href="#!email"><span class="white-text email">user!</span></a>
        </div>
    </li>

{{--    <li>--}}
{{--        <form class="sidebar-form">--}}
{{--            <div class="input-group">--}}
{{--                <input id="accounts" type="text" name="username" class="form-control" placeholder="Universal Search" autocomplete="off" />--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </li>--}}

    <li><a class="active collapsible-header" href="{{ route('admin.index') }}"><i class="material-icons pink-item">dashboard</i>Dashboard</a></li>
    <li><div class="divider"></div></li>


    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header">User Management<i class="material-icons pink-item">person</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{ route('admin.users.index') }}">Users list</a></li>
                        <li><a href="#">Create user</a></li>
                        <li><a href="#">Delete user</a></li>
                        <li><a href="#">Edit user</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
</ul>
