<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Title Page</title><!-- Bootstrap CSS -->
    <link href="{{ asset('public/admin-assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin-assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin-assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin-assets/css/media.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('public/admin-assets/images/logo12.ico') }}">
</head>
<body class="scrollerNew">    
    <!-- header starts here -->
    <header class="header" id="header">
        <aside class="left_sidebar">
            <div class="left_inner_data scrollerNew">
                <div class="logo">
                    <a href="javascript:void(a);" class="glogo_text color_white fz30">ST</a>
                    <a href="javascript:void(0);" class="glogo">
                        <img src="{{ asset('public/admin-assets/images/logo.png') }}" alt="" class="img-fluid p-3">
                    </a>
                </div>
                <!-- <div class="profile_info">
                    <div class="row">
                        <div class="col-4 col-md-3">
                            <div class="col-selector">
                               <img src="http://via.placeholder.com/30x30" alt="" class="left_profile_img"> 
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-selector">
                                <span class="">Welcome, <strong>Admin</strong></span>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="sidemenu_listing">
                    <ul class="ul_nostyle main_menu_list">
                        <li>
                            <a class="clearfix active" href="{{url('/adminDashboard')}}" title="Dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a class="clearfix" href="{{url('/athletesListing')}}" title="Athletes"><i class="fa fa-users"></i> <span>Athletes</span></a>
                        </li>
                        <li>
                            <a class="clearfix" href="{{url('/companiesListing')}}" title="Companies"><i class="fa fa-users"></i> <span>Sports Organisations</span></a>
                        </li>
                        <li>
                            <a class="clearfix" href="{{url('/showNewsletter')}}" title="Newsletter"><i class="fa fa-envelope"></i> <span>Newsletter</span></a>
                        </li>
                        <li>
                            <a class="clearfix" href="{{url('/blogManagment')}}" title="BlogManagment"><i class="fa fa-rss"></i> <span>Blog Management</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <div class="top_right_navs">
            <div class="top_strip clearfix">
                <div class="pull-left">
                    <ul class="ul_nostyle list-inline">
                        <li class="vam list-inline-item">
                            <a href="javascript:void(0);" class="trigger_aside">
                                <i class="fa fa-bars base_color"></i>
                            </a>
                        </li>
                        <li class="vam list-inline-item">
                            <a href="javascript:void();" class="d-block ml-3 fz18">
                                <span class="base_color">Welcome, <strong>Admin</strong></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="pull-right">
                    <div class="post_login_name clearfix">
                        <ul class="ul_nostyle pull-right">
                            <li>
                                <a>
                                    <span class="font_bold vam">Admin</span>
                                    <img alt="" class="profile_thumbpic" src="http://via.placeholder.com/30x30"> 
                                    <a href="{{ url('/userLogout') }}"><span class="font_bold vam">Logout <i class="fa fa-sign-out"></i></span></a>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- / header ends here -->