<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <style>
        body {
            margin-top: 20px;
        }

        /* User Cards */
        .user-box {
            width: 110px;
            margin: auto;
            margin-bottom: 20px;

        }

        .userpro {
            text-align: center;
            margin: 0 0 40px 0;
        }

        .user-box img {
            width: 150px !important;
            height: 120px;
            border-radius: 50%;
            box-shadow: 0px 0px 5px 1px grey;
        }

        .profile-card-2 .card {
            position: relative;
        }

        .profile-card-2 .card .card-body {
            z-index: 1;
        }

        .profile-card-2 .card::before {
            content: "";
            position: absolute;
            top: 0px;
            right: 0px;
            left: 0px;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            height: 112px;
            background-color: #e6e6e6;
        }



        /* btn css */
        a {
            text-decoration: none;
        }

        .btn-custom {
            background-color: #007bff;
            /* Primary color (Bootstrap primary blue) */
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 30px;
            transition: all 0.3s ease;
            float: right;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            /* Darker shade of blue */
            color: #ffffff;
            text-decoration: none;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-logout {
            background-color: #dc3545;
            /* Red for the logout button */
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .btn-logout:hover {
            background-color: #c82333;
            /* Darker red */
        }






        .profile-card-2 .card.profile-primary::before {
            background-color: #008cff;
        }

        .profile-card-2 .card.profile-success::before {
            background-color: #15ca20;
        }

        .profile-card-2 .card.profile-danger::before {
            background-color: #fd3550;
        }

        .profile-card-2 .card.profile-warning::before {
            background-color: #ff9700;
        }

        .profile-card-2 .user-box {
            margin-top: 30px;
        }

        .profile-card-3 .user-fullimage {
            position: relative;
        }

        .profile-card-3 .user-fullimage .details {
            position: absolute;
            bottom: 0;
            left: 0px;
            width: 100%;
        }

        .profile-card-4 .user-box {
            width: 110px;
            margin: auto;
            margin-bottom: 10px;
            margin-top: 15px;
        }

        .profile-card-4 .list-icon {
            display: table-cell;
            font-size: 30px;
            padding-right: 20px;
            vertical-align: middle;
            color: #223035;
        }

        .profile-card-4 .list-details {
            display: table-cell;
            vertical-align: middle;
            font-weight: 600;
            color: #223035;
            font-size: 15px;
            line-height: 15px;
        }

        .profile-card-4 .list-details small {
            display: table-cell;
            vertical-align: middle;
            font-size: 12px;
            font-weight: 400;
            color: #808080;
        }

        /*Nav Tabs & Pills */
        .nav-tabs .nav-link {
            color: #223035;
            font-size: 12px;
            text-align: center;
            letter-spacing: 1px;
            font-weight: 600;
            margin: 2px;
            margin-bottom: 0;
            padding: 12px 20px;
            text-transform: uppercase;
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;

        }

        .nav-tabs .nav-link:hover {
            border: 1px solid transparent;
        }

        .nav-tabs .nav-link i {
            margin-right: 2px;
            font-weight: 600;
        }

        .top-icon.nav-tabs .nav-link i {
            margin: 0px;
            font-weight: 500;
            display: block;
            font-size: 20px;
            padding: 5px 0;
        }

        .nav-tabs-primary.nav-tabs {
            border-bottom: 1px solid #008cff;
        }

        .nav-tabs-primary .nav-link.active,
        .nav-tabs-primary .nav-item.show>.nav-link {
            color: #008cff;
            background-color: #fff;
            border-color: #008cff #008cff #fff;
            border-top: 3px solid #008cff;
        }

        .nav-tabs-success.nav-tabs {
            border-bottom: 1px solid #15ca20;
        }

        .nav-tabs-success .nav-link.active,
        .nav-tabs-success .nav-item.show>.nav-link {
            color: #15ca20;
            background-color: #fff;
            border-color: #15ca20 #15ca20 #fff;
            border-top: 3px solid #15ca20;
        }

        .nav-tabs-info.nav-tabs {
            border-bottom: 1px solid #0dceec;
        }

        .nav-tabs-info .nav-link.active,
        .nav-tabs-info .nav-item.show>.nav-link {
            color: #0dceec;
            background-color: #fff;
            border-color: #0dceec #0dceec #fff;
            border-top: 3px solid #0dceec;
        }

        .nav-tabs-danger.nav-tabs {
            border-bottom: 1px solid #fd3550;
        }

        .nav-tabs-danger .nav-link.active,
        .nav-tabs-danger .nav-item.show>.nav-link {
            color: #fd3550;
            background-color: #fff;
            border-color: #fd3550 #fd3550 #fff;
            border-top: 3px solid #fd3550;
        }

        .nav-tabs-warning.nav-tabs {
            border-bottom: 1px solid #ff9700;
        }

        .nav-tabs-warning .nav-link.active,
        .nav-tabs-warning .nav-item.show>.nav-link {
            color: #ff9700;
            background-color: #fff;
            border-color: #ff9700 #ff9700 #fff;
            border-top: 3px solid #ff9700;
        }

        .nav-tabs-dark.nav-tabs {
            border-bottom: 1px solid #223035;
        }

        .nav-tabs-dark .nav-link.active,
        .nav-tabs-dark .nav-item.show>.nav-link {
            color: #223035;
            background-color: #fff;
            border-color: #223035 #223035 #fff;
            border-top: 3px solid #223035;
        }

        .nav-tabs-secondary.nav-tabs {
            border-bottom: 1px solid #75808a;
        }

        .nav-tabs-secondary .nav-link.active,
        .nav-tabs-secondary .nav-item.show>.nav-link {
            color: #75808a;
            background-color: #fff;
            border-color: #75808a #75808a #fff;
            border-top: 3px solid #75808a;
        }

        .tabs-vertical .nav-tabs .nav-link {
            color: #223035;
            font-size: 12px;
            text-align: center;
            letter-spacing: 1px;
            font-weight: 600;
            margin: 2px;
            margin-right: -1px;
            padding: 12px 1px;
            text-transform: uppercase;
            border: 1px solid transparent;
            border-radius: 0;
            border-top-left-radius: .25rem;
            border-bottom-left-radius: .25rem;
        }

        .tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #dee2e6;
        }

        .tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical .nav-tabs .nav-link.active {
            color: #495057;
            background-color: #fff;
            border-color: #dee2e6 #dee2e6 #fff;
            border-bottom: 1px solid #dee2e6;
            border-right: 0;
            border-left: 1px solid #dee2e6;
        }

        .tabs-vertical-primary.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #008cff;
        }

        .tabs-vertical-primary.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-primary.tabs-vertical .nav-tabs .nav-link.active {
            color: #008cff;
            background-color: #fff;
            border-color: #008cff #008cff #fff;
            border-bottom: 1px solid #008cff;
            border-right: 0;
            border-left: 3px solid #008cff;
        }

        .tabs-vertical-success.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #15ca20;
        }

        .tabs-vertical-success.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-success.tabs-vertical .nav-tabs .nav-link.active {
            color: #15ca20;
            background-color: #fff;
            border-color: #15ca20 #15ca20 #fff;
            border-bottom: 1px solid #15ca20;
            border-right: 0;
            border-left: 3px solid #15ca20;
        }

        .tabs-vertical-info.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #0dceec;
        }

        .tabs-vertical-info.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-info.tabs-vertical .nav-tabs .nav-link.active {
            color: #0dceec;
            background-color: #fff;
            border-color: #0dceec #0dceec #fff;
            border-bottom: 1px solid #0dceec;
            border-right: 0;
            border-left: 3px solid #0dceec;
        }

        .tabs-vertical-danger.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #fd3550;
        }

        .tabs-vertical-danger.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-danger.tabs-vertical .nav-tabs .nav-link.active {
            color: #fd3550;
            background-color: #fff;
            border-color: #fd3550 #fd3550 #fff;
            border-bottom: 1px solid #fd3550;
            border-right: 0;
            border-left: 3px solid #fd3550;
        }

        .tabs-vertical-warning.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #ff9700;
        }

        .tabs-vertical-warning.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-warning.tabs-vertical .nav-tabs .nav-link.active {
            color: #ff9700;
            background-color: #fff;
            border-color: #ff9700 #ff9700 #fff;
            border-bottom: 1px solid #ff9700;
            border-right: 0;
            border-left: 3px solid #ff9700;
        }

        .tabs-vertical-dark.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #223035;
        }

        .tabs-vertical-dark.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-dark.tabs-vertical .nav-tabs .nav-link.active {
            color: #223035;
            background-color: #fff;
            border-color: #223035 #223035 #fff;
            border-bottom: 1px solid #223035;
            border-right: 0;
            border-left: 3px solid #223035;
        }

        .tabs-vertical-secondary.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #75808a;
        }

        .tabs-vertical-secondary.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-secondary.tabs-vertical .nav-tabs .nav-link.active {
            color: #75808a;
            background-color: #fff;
            border-color: #75808a #75808a #fff;
            border-bottom: 1px solid #75808a;
            border-right: 0;
            border-left: 3px solid #75808a;
        }

        .nav-pills .nav-link {
            border-radius: .25rem;
            color: #223035;
            font-size: 12px;
            text-align: center;
            letter-spacing: 1px;
            font-weight: 600;
            text-transform: uppercase;
            margin: 3px;
            padding: 12px 20px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;

        }

        .nav-pills .nav-link:hover {
            background-color: #f4f5fa;
        }

        .nav-pills .nav-link i {
            margin-right: 2px;
            font-weight: 600;
        }

        .top-icon.nav-pills .nav-link i {
            margin: 0px;
            font-weight: 500;
            display: block;
            font-size: 20px;
            padding: 5px 0;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #008cff;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(0, 140, 255, 0.5);
        }

        .nav-pills-success .nav-link.active,
        .nav-pills-success .show>.nav-link {
            color: #fff;
            background-color: #15ca20;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(21, 202, 32, .5);
        }

        .nav-pills-info .nav-link.active,
        .nav-pills-info .show>.nav-link {
            color: #fff;
            background-color: #0dceec;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(13, 206, 236, 0.5);
        }

        .nav-pills-danger .nav-link.active,
        .nav-pills-danger .show>.nav-link {
            color: #fff;
            background-color: #fd3550;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(253, 53, 80, .5);
        }

        .nav-pills-warning .nav-link.active,
        .nav-pills-warning .show>.nav-link {
            color: #fff;
            background-color: #ff9700;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(255, 151, 0, .5);
        }

        .nav-pills-dark .nav-link.active,
        .nav-pills-dark .show>.nav-link {
            color: #fff;
            background-color: #223035;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(34, 48, 53, .5);
        }

        .nav-pills-secondary .nav-link.active,
        .nav-pills-secondary .show>.nav-link {
            color: #fff;
            background-color: #75808a;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(117, 128, 138, .5);
        }

        .card .tab-content {
            padding: 1rem 0 0 0;
        }

        .z-depth-3 {
            -webkit-box-shadow: 0 11px 7px 0 rgba(0, 0, 0, 0.19), 0 13px 25px 0 rgba(0, 0, 0, 0.3);
            box-shadow: 0 11px 7px 0 rgba(0, 0, 0, 0.19), 0 13px 25px 0 rgba(0, 0, 0, 0.3);
        }


        .team-single-icons ul li {
            display: inline-block;
            border: 1px solid #02c2c7;
            border-radius: 50%;
            color: #86bc42;
            margin-right: 8px;
            margin-bottom: 5px;
            -webkit-transition-duration: .3s;
            transition-duration: .3s
        }

        .team-single-icons ul li a {
            color: #02c2c7;
            display: block;
            font-size: 14px;
            height: 25px;
            line-height: 26px;
            text-align: center;
            width: 25px
        }

        .team-single-icons ul li:hover {
            background: #02c2c7;
            border-color: #02c2c7
        }

        .team-single-icons ul li:hover a {
            color: #fff
        }

        .team-social-icon li {
            display: inline-block;
            margin-right: 5px
        }

        .team-social-icon li:last-child {
            margin-right: 0
        }

        .team-social-icon i {
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            font-size: 15px;
            border-radius: 50px
        }

        .padding-30px-all {
            padding: 30px;
        }

        .bg-light-gray {
            background-color: #f7f7f7;
        }

        .text-center {
            text-align: center !important;
        }

        img {
            max-width: 100%;
            height: auto;
        }


        .list-style9 {
            list-style: none;
            padding: 0
        }

        .list-style9 li {
            position: relative;
            padding: 0 0 15px 0;
            margin: 0 0 15px 0;
            border-bottom: 1px dashed rgba(0, 0, 0, 0.1)
        }

        .list-style9 li:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0
        }


        .text-sky {
            color: #02c2c7
        }

        .text-orange {
            color: #e95601
        }

        .text-green {
            color: #5bbd2a
        }

        .text-yellow {
            color: #f0d001
        }

        .text-pink {
            color: #ff48a4
        }

        .text-purple {
            color: #9d60ff
        }

        .text-lightred {
            color: #ff5722
        }

        a.text-sky:hover {
            opacity: 0.8;
            color: #02c2c7
        }

        a.text-orange:hover {
            opacity: 0.8;
            color: #e95601
        }

        a.text-green:hover {
            opacity: 0.8;
            color: #5bbd2a
        }

        a.text-yellow:hover {
            opacity: 0.8;
            color: #f0d001
        }

        a.text-pink:hover {
            opacity: 0.8;
            color: #ff48a4
        }

        a.text-purple:hover {
            opacity: 0.8;
            color: #9d60ff
        }

        a.text-lightred:hover {
            opacity: 0.8;
            color: #ff5722
        }

        .custom-progress {
            height: 10px;
            border-radius: 50px;
            box-shadow: none;
            margin-bottom: 25px;
        }

        .progress {
            display: -ms-flexbox;
            display: flex;
            height: 1rem;
            overflow: hidden;
            font-size: .75rem;
            background-color: #e9ecef;
            border-radius: .25rem;
        }


        .bg-sky {
            background-color: #02c2c7
        }

        .bg-orange {
            background-color: #e95601
        }

        .bg-green {
            background-color: #5bbd2a
        }

        .bg-yellow {
            background-color: #f0d001
        }

        .bg-pink {
            background-color: #ff48a4
        }

        .bg-purple {
            background-color: #9d60ff
        }

        .bg-lightred {
            background-color: #ff5722
        }
    </style>
</head>

<body>

<div class="container">
    <h2 class="userpro">USER PROFILE</h2>
    <div class="row">
        <div class="col-lg-4">
            <div class="profile-card-4 z-depth-3">
                <div class="card">
                    <div class="card-body text-center bg-primary rounded-top">
                        <div class="user-box">
                            <img src="{{ asset('storage/' . $user->image) }}" alt="user avatar">
                        </div>
                        <h5 class="mb-1 text-white">{{ $user->fname }} {{ $user->lname }}</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group shadow-none">
                            <li class="list-group-item">
                                <div class="list-icon">
                                    <i class="fa fa-city"></i>
                                </div>
                                <div class="list-details">
                                    <span>{{ $user->city }}</span>
                                    <small>City Name</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="list-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="list-details">
                                    <span>{{ $user->email }}</span>
                                    <small>Email Address</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="list-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="list-details">
                                    <span>www.example.com</span>
                                    <small>Website Address</small>
                                </div>
                            </li>
                        </ul>
                        <div class="row text-center mt-4">
                            <div class="col p-2">
                                <a href="{{ route('logout') }}" class="btn-logout">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card z-depth-3">
                <div class="card-body">
                    <ul class="nav nav-pills nav-pills-primary nav-justified">
                        <li class="nav-item">
                            <a href="{{ route('profile')}}" data-target="#profile" data-toggle="pill" class="nav-link active show">
                                <i class="icon-user"></i> <span class="hidden-xs">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link">
                                <i class="icon-envelope-open"></i> <span class="hidden-xs">Post</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profile.edit')}}" data-target="#edit" data-toggle="pill" class="nav-link">
                                <i class="icon-note"></i> <span class="hidden-xs">Edit</span>
                            </a>
                        </li>
                    </ul>
                    <br><br>
                    <ul class="list-style9 no-margin">
                        <li>
                            <div class="row">
                                <div class="col-md-5 col-5">
                                    <i class="fas fa-user text-orange"></i>
                                    <strong class="margin-10px-left text-orange">First Name:</strong>
                                </div>
                                <div class="col-md-7 col-7">
                                    <p>{{ $user->fname }}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-5 col-5">
                                    <i class="far fa-user text-yellow"></i>
                                    <strong class="margin-10px-left text-yellow">Last Name:</strong>
                                </div>
                                <div class="col-md-7 col-7">
                                    <p>{{ $user->lname }}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-5 col-5">
                                    <i class="fas fa-envelope text-pink"></i>
                                    <strong class="margin-10px-left xs-margin-four-left text-pink">Email:</strong>
                                </div>
                                <div class="col-md-7 col-7">
                                    <p>{{ $user->email }}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-5 col-5">
                                    <i class="far fa-user text-lightred"></i>
                                    <strong class="margin-10px-left text-lightred">Gender:</strong>
                                </div>
                                <div class="col-md-7 col-7">
                                    <p>{{ ucfirst($user->gender) }}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-5 col-5">
                                    <i class="fas fa-map-marker-alt text-green"></i>
                                    <strong class="margin-10px-left text-green">City:</strong>
                                </div>
                                <div class="col-md-7 col-7">
                                    <p>{{ $user->city }}</p>
                                </div>
                            </div>
                        </li>
                        <div class="row">
                            <div class="col p-2">
                                <a href="{{ route('profile.edit') }}" class="btn-custom">Update Profile</a>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



</body>

</html>