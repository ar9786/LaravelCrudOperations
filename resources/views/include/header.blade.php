<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@if (isset($data['metaContent']['title'])){{ $data['metaContent']['title'] }} @endif</title>
		<link href="{{ asset('public/fonts/stylesheet.css') }}" rel="stylesheet">
		<link href="{{ asset('public/css/font-awesome.min.css') }}" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link href="{{ asset('public/css/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{ asset('public/owl_carousel/owl.carousel.min.css') }}" rel="stylesheet">
	  <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
	  <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
	  <link href="{{ asset('public/css/media.css') }}" rel="stylesheet">
		<link rel="icon" href="{{ asset('public/images/logo12.ico') }}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/1.3.1/css/toastr.css"/>
		<script src="{{ asset('public/js/jquery-2.2.4.min.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/1.3.1/js/toastr.js"></script>
	</head>
	<body data-spy="scroll" data-target=".thesections" data-offset="50" id="section1">
		<!-- header starts here -->
		<div class="header_wrap" id="gototop">
			<header class="header" id="header">
				<div class="container">
					<div class="row">
						<div class="col-5 col-md-4 order-lg-2">
							<div class="col-selector">
								<div class="site_logo text-center">
									<a href="{{ url('/') }}" class="logo d-inline-block">
										<img src="{{ asset('public/images/logo.png') }}" alt="Sport Strive Logo" class="img-fluid">
									</a>
								</div>
							</div>
						</div>
						<div class="col-1 col-md-4 order-lg-1 d-none d-md-block">
							<div class="col-selector">
								<div class="menu_lg mt-3">
									<ul class="list-inline d-none d-lg-block">
										<li class="list-inline-item"><a href="{{ url('/chi-siamo') }}" class="base_color">@lang('home.who_we_are')</a></li>
										<li class="list-inline-item"><a href="{{ url('/come-funziona') }}" class="base_color">@lang('home.how_it_works')</a></li>
										<li class="list-inline-item"><a href="{{ url('/st-square') }}" class="base_color">@lang('home.sportstrives_square')</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-7 col-md-4 order-3">
							<div class="col-selector">
								<div class="lang_choose mt-3">
									<ul class="list-inline text-right">
										<!-- <li class="list-inline-item mr-4">
											<a href="locale/en">
												<img src="{{ asset('public/images/english.png') }}" alt="" width="30" class="flag_ln">
												<span class="base_color fz20 ml-2">EN</span>
											</a>
										</li>
										<li class="list-inline-item mr-4">
											<a href="locale/it">
												<img src="{{ asset('public/images/italian.png') }}" alt="" width="30" class="flag_ln">
												<span class="base_color fz20 ml-2">IT</span>
											</a>
										</li> -->
										
										<li class="list-inline-item language_select">
											<div class="dropdown" >
											    <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
													<div id="flag_1" class="d-inline-block">
												     	<a href="locale/en" class="d-inline-block">
												    		<img src="{{ asset('public/images/english.png') }}" alt="" width="30">
												    		<span class="base_color fz20 ml-2">EN</span>
												    	</a>
													</div>
											    </button>
											    <div class="dropdown-menu" id="flag_2" data-val ="IT">
											    	
											     	<a href="locale/it" class="d-inline-block flag_event" >
											     		<img src="{{ asset('public/images/italian.png') }}" alt="" width="30">
											     		<span class="base_color fz20 ml-2">IT</span>
											     	</a>
											    </div>
										  	</div>
										</li>
										<li class="list-inline-item">
											<a href="javascript:void(0);" class="base_color fz24 offset_trigger">
												<i class="fa fa-bars"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
		</div>
		<!-- / header ends here -->

		<!-- right sidebar offset menu starts here -->
		<div class="right_offset_wrap">
			<div class="offset_menu">
				<div class="offset_header clearfix mb-5 text-center">
					<a href="javascript:void(0);">
						<img src="{{ asset('public/images/logo.png') }}" alt="" class="w-50">
					</a>
					<a href="javascript:void(0);" class="offset_close" id="closeOffset"><i class="fa fa-times base_color fz24"></i></a>
				</div>
				<div class="post_login">
					<div class="dropdown-divider mb-3">
						
					</div>										
					@if (!@isset(Session::get('authData')['userId']))
					<ul class="list-unstyled text-center d-flex p-2">
						<li class="flex-fill text-left"><a class="d-block" href="javascript:void(0);" data-toggle="modal" data-target="#login_modal" data-toggle="modal" onclick="document.getElementById('closeOffset').click()"><img src="{{ asset('public/images/login.png') }}" class="mr-2">@lang('home.Login')</a></li>
						<li class="flex-fill text-left"><a class="d-block" href="javascript:void(0);" data-toggle="modal" data-target="#signup_modal" data-toggle="modal" onclick="document.getElementById('closeOffset').click()"><img src="{{ asset('public/images/signup.png') }}" class="mr-2">@lang('home.Signup')</a></li>
					</ul>
					@else
					<ul class="list-unstyled text-center d-flex p-2">
						<li class="flex-fill text-left"><a class="d-block" href="javascript:void(0);"><img src="https://via.placeholder.com/40" alt="" class="rounded-circle mr-3">{{ Session::get('authData')['FirstName'] }}</a></li>
						<li class="flex-fill text-left"><a class="d-block pt-1" href="{{url('/userLogout')}}" ><img src="{{ asset('public/images/logout.png') }}" class="mr-2">@lang('home.Logout')</a></li>
					</ul>
					@endif
					<div class="dropdown-divider"></div>
				</div>
				
				<!-- <div class="login_menu">
					<ul class="list-unstyled text-center">
					@if (!@isset($users['userId']))
						<li><a href="javascript:void(0);" data-toggle="modal" data-target="#login_modal" data-toggle="modal" onclick="document.getElementById('closeOffset').click()">Login</a></li>
						<li><a href="javascript:void(0);" data-toggle="modal" data-target="#signup_modal" data-toggle="modal" onclick="document.getElementById('closeOffset').click()">Register</a></li>
					@else
					<li><a href="/userLogout">Logout</a></li>
					@endif
					</ul>
				</div> -->
				
				<div class="tabmenu_ofindex">
				  <ul class="list-unstyled">
				  	<li class="base_color"><a href="{{url('/')}}">@lang('home.Home')</a></li>
				  	<li class="d-sm-block d-lg-none"><a href="{{ url('/chi-siamo') }}">@lang('home.who_we_are')</a></li>
				  	<li class="d-sm-block d-lg-none"><a href="{{ url('/come-funziona') }}">@lang('home.how_it_works')</a></li>
				  	<li class="d-sm-block d-lg-none"><a href="{{ url('/st-square') }}">@lang('home.sportstrives_square')</a></li>
				    <li><a href="{{ url('/sportCamp')}}">@lang('home.sports_camp_clinics')</a></li>
				    <li><a href="{{ url('/tornei')}}">@lang('home.tournaments')</a></li>
				    <li><a href="{{ url('/atleti')}}">@lang('home.young_athlete')</a></li>
				    <li><a href="{{ url('/società')}}">@lang('home.sports_club_sports_association')</a></li>
				  </ul>
				</div>
			</div>
		</div>
		<!-- / right sidebar offset menu ends here -->