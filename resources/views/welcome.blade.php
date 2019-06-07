@include('include.header')
  <!-- the jumbotron starts here -->
  <div class="thejumbotron">
    <div class="jumbo_img_wrapper">
      <img src="{{ asset('public/images/slide_image.jpg') }}" alt="Slide Img" class="img-fluid main_banner d-none d-sm-block">
      <img src="{{ asset('public/images/second_image.jpg') }}" alt="Slide Img" class="img-fluid main_banner d-block d-sm-none">
    </div>
    <div class="the_caption_top">
      <div class="the_caption_data">
        <span class="caption_1">@lang('home.the_best_way_to')</span>
        <span class="text-uppercase">@lang('home.find')</span>
        <span class="text-uppercase">@lang('home.participate')</span>
        <span class="text-uppercase">@lang('home.promote')</span>
        <span class="text-uppercase">@lang('home.sports_camps_clinics_tournaments')</span>
      </div>
    </div>
    <div class="caption_links_wrap d-none d-lg-block">
      <div class="caption_links">
        <ul class="clearfix list-unstyled text-center">
          <li><a href="{{ url('/sportCamp')}}">@lang('home.sports_camp_clinics')</a></li>
          <li><a href="{{ url('/tornei')}}">@lang('home.tournaments')</a></li>
          <li><a href="{{ url('/atleti')}}">@lang('home.young_athlete')</a></li>
          <li class="mr-0"><a href="{{ url('/società')}}">@lang('home.sports_club_sports_association')</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- / the jumbotron ends here -->
	<div class="thesections">  
	  <ul class="navbar-nav">
	    <li class="nav-item">
	      <a class="nav-link hashscroll" href="#section1"></a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link hashscroll" href="#section2"></a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link hashscroll" href="#section3"></a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link hashscroll" href="#section4"></a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link hashscroll" href="#section5"></a>
	    </li>
	  </ul>
	</div>

  <div id="section2" class="whoweare blockspacing themebg_light">
    <div class="container">
    	<div class="row">
        <div class="col-12 col-md-7 order-md-2">
          <div class="col-selector">
            <div class="whoweare_img_wrap img_shadow">
              <img src="{{ asset('public/images/who_we_are.jpg') }}" alt="" class="img-fluid w-100">
            </div>
          </div>
        </div>
    		<div class="col-12 col-md-5 order-md-1">
    			<div class="col-selector">
    				<div class="thecontent">
    					<h1 class="main_heading pr_hamb text-uppercase base_color">@lang('home.who_we_are')</h1>
    					<p class="base_color">@lang('home.sport_platform')</p>
    					<a href="{{url('/chi-siamo')}}" class="btn btn-default btn_shadowed">@lang('home.read_more')</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
  </div>
  <div id="section3" class="whoweare blockspacing themebg_dark howitworks">
    <div class="container">
    	<div class="row">
        <div class="col-12 col-md-6">
          <div class="col-selector">
            <div class="whoweare_img_wrap">
              <img src="{{ asset('public/images/video.jpg') }}" alt="" class="img-fluid w-100">
            </div>
          </div>
        </div>
    		<div class="col-12 col-md-6">
    			<div class="col-selector">
    				<div class="thecontent text-sm-right">
    					<h1 class="main_heading ap_hamb text-uppercase color_white">@lang('home.how_it_works')</h1>
    					<p class="color_white">@lang('home.content_how_it_works')</p>
    					<a href="{{url('/come-funziona')}}" class="btn btn-default btn_shadowed">@lang('home.read_more')</a>
    					<div class="desc2">
    						<p class="color_white">@lang('home.content_how_it_works2')</p>
    						<a href="{{url('/come-funziona')}}" class="btn btn-default btn_shadowed">@lang('home.read_more')</a>
    						</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
  </div>
  <div id="section4" class="whoweare blockspacing themebg_light">
    <div class="container">
    	<div class="row">
        <div class="col-12 col-md-6 order-md-2">
          <div class="col-selector">
            <div class="whoweare_img_wrap img_shadow">
              <img src="{{ asset('public/images/sportstrives_square.jpg') }}" alt="" class="img-fluid w-100">
            </div>
          </div>
        </div>
    		<div class="col-12 col-md-6 order-md-1">
    			<div class="col-selector">
    				<div class="thecontent">
    					<h1 class="main_heading pr_hamb text-uppercase base_color">@lang('home.sportstrives_square')</h1>
    					<p class="base_color">@lang('home.content_sportstrives_square')</p>
    					<a href="{{ url('/st-square') }}" class="btn btn-default btn_shadowed">@lang('home.read_more')</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
  </div>
  <div id="section5" class="whoweare blockspacing themebg_dark">
    <h1 class="main_heading ap_hamb text-uppercase color_white text-center">testimonials</h1>
    <div id="testimonials_slider" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ul class="carousel-indicators d-none">
        <li data-target="#testimonials_slider" data-slide-to="0" class="active"></li>
        <li data-target="#testimonials_slider" data-slide-to="1"></li>
        <li data-target="#testimonials_slider" data-slide-to="2"></li>
      </ul>
      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="testimonial_data text-center color_white">
          	<img src="{{ asset('public/images/testimonial_cercle.png') }}" alt="" class="img-fluid">
          	<p class="mt-5 mb-5">@lang('home.content_testimonial')</p>
          	<h4 class="m-0 fz22">Linda</h4>
          	<p>Web Developer</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="testimonial_data text-center color_white">
            <img src="{{ asset('public/images/testimonial_cercle.png') }}" alt="" class="img-fluid">
            <p class="mt-5 mb-5">@lang('home.content_testimonial')</p>
            <h4 class="m-0 fz22">Linda</h4>
            <p>Web Developer</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="testimonial_data text-center color_white">
            <img src="{{ asset('public/images/testimonial_cercle.png') }}" alt="" class="img-fluid">
            <p class="mt-5 mb-5">@lang('home.content_testimonial')</p>
            <h4 class="m-0 fz22">Linda</h4>
            <p>Web Developer</p>
          </div>
        </div>
      </div>
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#testimonials_slider" data-slide="prev">
        <i class="fa fa-angle-left"></i>
      </a>
      <a class="carousel-control-next" href="#testimonials_slider" data-slide="next">
        <i class="fa fa-angle-right"></i>
      </a>
    </div>
  </div>

@include('include.footer')