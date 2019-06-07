@include('include.header')
  <!-- the jumbotron starts here -->
  <div class="thejumbotron pagebanner">
    <div class="jumbo_img_wrapper">
      <img src="{{ asset('public/images/whoweare_banner.jpg') }}" alt="Slide Img" class="img-fluid main_banner">
    </div>
    <div class="page_name_wrap">
      <div class="page_name_data">
        <h3 class="text-uppercase">@lang('home.who_we_are')</h3>
      </div>
    </div>
  </div>
  <!-- / the jumbotron ends here -->

  <div id="section2" class="whoweare blockspacing stsq">
    <div class="container">
    	<div class="row">
        <div class="col-12 col-md-6 order-md-2">
          <div class="col-selector">
            <div class="whoweare_img_wrap img_shadow">
              <img src="{{ asset('public/images/football_green.jpg') }}" alt="" class="img-fluid w-100">
            </div>
          </div>
        </div>
    		<div class="col-12 col-md-6 order-md-1">
    			<div class="col-selector">
    				<div class="thecontent sq_content mt-5 mt-md-0">
    					<p>@lang('home.content_who_we_are')</p>
              <p class="mt-4">@lang('home.who_we_ar_cont')</p>
              @lang('home.wwa')
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <div class="associated_sports mt-5">
      <div class="container">
        <div class="associated_data text-center">
       
          <div class="base_color clearfix">
            <!-- <p class="brand_name">SPORTSTRIVES</p>
            <p class="">is the best TeamMate for you</p> -->
            <p class="mb-5"> @lang('home.wwa2')</p>
            <!-- <p class="brand_name">SPORTSTRIVES</p>
            <p class=""><em>our strives for your success</em></p> -->
            <p>@lang('home.wwa3')</p>
          </div>
          <a href="{{ url('/')}}/sportCamp" class="btn btn-default btn_shadowed text-uppercase">@lang('home.wwa4')</a>
        </div>
      </div>
    </div>

  </div>
  
  <div id="section4" class="whoweare blockspacing themebg_light news_section">
    <div class="container">
      <h1 class="base_color">@lang('home.choose_your_sport')</h1>
    	@include('chooseSport')
    </div>
  </div>

@include('include.footer')