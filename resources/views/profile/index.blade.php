@extends('layouts/'.$template)

@section('content')

    </div>
    <div class="container bootstrap snippets bootdeys">
        <div class="row" id="user-profile">
            <div class="col-lg-3 col-md-4 col-sm-4">
                <div class="main-box clearfix">
                    <h2>{{ $userAuth->name . ' '. $userAuth->last_name}}</h2>
                    <div class="profile-status">
                        <i class="fa fa-check-circle"></i> Online
                    </div>
                    @if(isset($userAuth->avatar))
                        <img src="{{ asset('/storage/' .  $userAuth->avatar)}}" alt="" class="profile-img img-responsive center-block">
                        @else
                        <img src="https://crypto.ru/wp-content/plugins/q-auth/assets/img/default-user.png">
                    @endif
                    <form method="post" action="{{ route('profile.upload')}}" enctype="multipart/form-data" class="my-4">
                        {{ csrf_field() }}
                        <div class="input__wrapper">
                            <input type="file" name="input__file" id="input__file" class="input input__file">
                            <button type="submit" class="btn btn-primary upload-ava" >загрузить</button>
                        </div>
                    </form>
                    <div class="profile-label">
                        <span class="label label-danger">Admin</span>
                    </div>

                    <div class="profile-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <span>Super User</span>
                    </div>

                    <div class="profile-since">
                        Member since: Jan 2012
                    </div>

                    <div class="profile-details">
                        <ul class="fa-ul">
                            <li><i class="fa-li fa fa-truck"></i>Orders: <span>456</span></li>
                            <li><i class="fa-li fa fa-comment"></i>Posts: <span>828</span></li>
                            <li><i class="fa-li fa fa-tasks"></i>Tasks done: <span>1024</span></li>
                        </ul>
                    </div>

                    <div class="profile-message-btn center-block text-center">
                        <a href="#" class="btn btn-success">
                            <i class="fa fa-envelope"></i> Send message
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-8 col-sm-8">
                <div class="main-box clearfix">
                    <div class="profile-header">
                        <h3><span>User info</span></h3>
                        <a href="#" class="btn btn-primary edit-profile">
                            <i class="fa fa-pencil-square fa-lg"></i> Edit profile
                        </a>
                        @if(Auth::user()->role == 1)
                            <a href="{{ route('admin.index') }}" class="btn btn-primary edit-profile adminPanel">
                                <i class="fa fa-pencil-square fa-lg"></i> Admin Panel
                            </a>
                        @endif
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" href="" class="btn btn-primary logout">
                                <i class="fa fa-pencil-square fa-lg"></i> logout
                            </button>
                        </form>
                    </div>

                    <div class="row profile-user-info">
                        <div class="col-sm-8">
                            <div class="profile-user-details clearfix">
                                <div class="profile-user-details-label">
                                    First Name
                                </div>
                                <div class="profile-user-details-value">
                                    {{ $userAuth->name}}
                                </div>
                            </div>
                            <div class="profile-user-details clearfix">
                                <div class="profile-user-details-label">
                                    Last Name
                                </div>
                                <div class="profile-user-details-value">
                                   {{ $userAuth->last_name }}
                                </div>
                            </div>
                            <div class="profile-user-details clearfix">
                                <div class="profile-user-details-label">
                                    Address
                                </div>
                                <div class="profile-user-details-value">
                                    10880 Malibu Point,
                                    <br> Malibu, Calif., 90265
                                </div>
                            </div>
                            <div class="profile-user-details clearfix">
                                <div class="profile-user-details-label">
                                    Email
                                </div>
                                <div class="profile-user-details-value">
                                    {{ $userAuth->email }}
                                </div>
                            </div>
                            <div class="profile-user-details clearfix">
                                <div class="profile-user-details-label">
                                    Phone number
                                </div>
                                <div class="profile-user-details-value">
                                    011 223 344 556 677
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 profile-social">
                            <ul class="fa-ul">
                                <li><i class="fa-li fa fa-twitter-square"></i><a href="#">@scjohansson</a></li>
                                <li><i class="fa-li fa fa-linkedin-square"></i><a href="#">John Doe </a></li>
                                <li><i class="fa-li fa fa-facebook-square"></i><a href="#">John Doe </a></li>
                                <li><i class="fa-li fa fa-skype"></i><a href="#">Black_widow</a></li>
                                <li><i class="fa-li fa fa-instagram"></i><a href="#">Avenger_Scarlett</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="tabs-wrapper profile-tabs">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab-activity" data-toggle="tab">Activity</a></li>
                            <li><a href="#tab-friends" data-toggle="tab">Friends</a></li>
                            <li><a href="#tab-chat" data-toggle="tab">Chat</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab-activity">

                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-comment"></i>
                                            </td>
                                            <td>
                                                John Doe  posted a comment in <a href="#">Avengers Initiative</a> project.
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-truck"></i>
                                            </td>
                                            <td>
                                                John Doe  changed order status from <span class="label label-primary">Pending</span> to <span class="label label-success">Completed</span>
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-check"></i>
                                            </td>
                                            <td>
                                                John Doe  posted a comment in <a href="#">Lost in Translation opening scene</a> discussion.
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-users"></i>
                                            </td>
                                            <td>
                                                John Doe  posted a comment in <a href="#">Avengers Initiative</a> project.
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-heart"></i>
                                            </td>
                                            <td>
                                                John Doe  changed order status from <span class="label label-warning">On Hold</span> to <span class="label label-danger">Disabled</span>
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-check"></i>
                                            </td>
                                            <td>
                                                John Doe  posted a comment in <a href="#">Lost in Translation opening scene</a> discussion.
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-truck"></i>
                                            </td>
                                            <td>
                                                John Doe  changed order status from <span class="label label-primary">Pending</span> to <span class="label label-success">Completed</span>
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="fa fa-users"></i>
                                            </td>
                                            <td>
                                                John Doe  posted a comment in <a href="#">Avengers Initiative</a> project.
                                            </td>
                                            <td>
                                                2014/08/08 12:08
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="tab-friends">
                                <ul class="widget-users row">
                                    <li class="col-md-6">
                                        <div class="img">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="name">
                                                <a href="#">John Doe </a>
                                            </div>
                                            <div class="time">
                                                <i class="fa fa-clock-o"></i> Last online: 5 minutes ago
                                            </div>
                                            <div class="type">
                                                <span class="label label-danger">Admin</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="img">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                        </div>
                                        <div class="details">
                                            <div class="name">
                                                <a href="#">Mila Kunis</a>
                                            </div>
                                            <div class="time online">
                                                <i class="fa fa-check-circle"></i> Online
                                            </div>
                                            <div class="type">
                                                <span class="label label-warning">Pending</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="img">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                        </div>
                                        <div class="details">
                                            <div class="name">
                                                <a href="#">Ryan Gossling</a>
                                            </div>
                                            <div class="time online">
                                                <i class="fa fa-check-circle"></i> Online
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="img">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                        </div>
                                        <div class="details">
                                            <div class="name">
                                                <a href="#">Robert Downey Jr.</a>
                                            </div>
                                            <div class="time">
                                                <i class="fa fa-clock-o"></i> Last online: Thursday
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="img">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                        </div>
                                        <div class="details">
                                            <div class="name">
                                                <a href="#">Emma Watson</a>
                                            </div>
                                            <div class="time">
                                                <i class="fa fa-clock-o"></i> Last online: 1 week ago
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="img">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                        </div>
                                        <div class="details">
                                            <div class="name">
                                                <a href="#">George Clooney</a>
                                            </div>
                                            <div class="time">
                                                <i class="fa fa-clock-o"></i> Last online: 1 month ago
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="img">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                        </div>
                                        <div class="details">
                                            <div class="name">
                                                <a href="#">Mila Kunis</a>
                                            </div>
                                            <div class="time online">
                                                <i class="fa fa-check-circle"></i> Online
                                            </div>
                                            <div class="type">
                                                <span class="label label-warning">Pending</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="img">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                        </div>
                                        <div class="details">
                                            <div class="name">
                                                <a href="#">Ryan Gossling</a>
                                            </div>
                                            <div class="time online">
                                                <i class="fa fa-check-circle"></i> Online
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <br>
                                <a href="#" class="btn btn-success pull-right">View all users</a>
                            </div>

                            <div class="tab-pane fade" id="tab-chat">
                                <div class="conversation-wrapper">
                                    <div class="conversation-content">
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 340px;">
                                            <div class="conversation-inner" style="overflow: hidden; width: auto; height: 340px;">

                                                <div class="conversation-item item-left clearfix">
                                                    <div class="conversation-user">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                                    </div>
                                                    <div class="conversation-body">
                                                        <div class="name">
                                                            Ryan Gossling
                                                        </div>
                                                        <div class="time hidden-xs">
                                                            September 21, 2013 18:28
                                                        </div>
                                                        <div class="text">
                                                            I don't think they tried to market it to the billionaire, spelunking, base-jumping crowd.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="conversation-item item-right clearfix">
                                                    <div class="conversation-user">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                                    </div>
                                                    <div class="conversation-body">
                                                        <div class="name">
                                                            Mila Kunis
                                                        </div>
                                                        <div class="time hidden-xs">
                                                            September 21, 2013 12:45
                                                        </div>
                                                        <div class="text">
                                                            Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="conversation-item item-right clearfix">
                                                    <div class="conversation-user">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                                    </div>
                                                    <div class="conversation-body">
                                                        <div class="name">
                                                            Mila Kunis
                                                        </div>
                                                        <div class="time hidden-xs">
                                                            September 21, 2013 12:45
                                                        </div>
                                                        <div class="text">
                                                            Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="conversation-item item-left clearfix">
                                                    <div class="conversation-user">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                                    </div>
                                                    <div class="conversation-body">
                                                        <div class="name">
                                                            Ryan Gossling
                                                        </div>
                                                        <div class="time hidden-xs">
                                                            September 21, 2013 18:28
                                                        </div>
                                                        <div class="text">
                                                            I don't think they tried to market it to the billionaire, spelunking, base-jumping crowd.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="conversation-item item-right clearfix">
                                                    <div class="conversation-user">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive"  alt="">
                                                    </div>
                                                    <div class="conversation-body">
                                                        <div class="name">
                                                            Mila Kunis
                                                        </div>
                                                        <div class="time hidden-xs">
                                                            September 21, 2013 12:45
                                                        </div>
                                                        <div class="text">
                                                            Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you.
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(0, 0, 0);"></div>
                                            <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div>
                                        </div>
                                    </div>
                                    <div class="conversation-new-message">
                                        <form>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="2" placeholder="Enter your message..."></textarea>
                                            </div>

                                            <div class="clearfix">
                                                <button type="submit" class="btn btn-success pull-right">Send message</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
