@include('include.header')
  <!-- the jumbotron starts here -->
  <div class="thejumbotron pagebanner">
    <div class="jumbo_img_wrapper">
      <img src="{{ asset('public/images/howitworks_banner.jpg') }}" alt="Slide Img" class="img-fluid main_banner">
    </div>
    <div class="page_name_wrap">
      <div class="page_name_data">
        <h3 class="text-uppercase">@lang('home.how_it_works')</h3>
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
              <img src="{{ asset('public/images/boys.jpg') }}" alt="" class="img-fluid w-100">
            </div>
          </div>
        </div>
    		<div class="col-12 col-md-6 order-md-1">
    			<div class="col-selector">
    				<div class="thecontent sq_content mt-5 mt-md-0">
    					<p class="mb-3">@lang('home.content_how_it_works')</p>
              <p class="mb-2"><b>@lang('home.its_vry_spl')</b></p>
              <ul class="mb-4 pl-4 sportsuse_link">
                <li><a href="javascript:void(0);" data-toggle="modal" data-target="#login_modal">@lang('home.sign_in')</a></li>
                <li><a href="{{ url('/athelets_club') }}">@lang('home.choose_your_sport')</a></li>
                <li><a href="javascript:">@lang('home.find_yur_fvort')</a></li>
                <li><a href="javscript:">@lang('home.bok_it')</a></li>
              </ul>
    					<!-- <a href="javascript:void(0);" class="btn btn-default btn_shadowed text-uppercase">Registration</a> -->
    				</div>
    			</div>
    		</div>
    	</div>
      <div class="row mt-5">
        <div class="col-12 col-md-6">
          <div class="col-selector">
            <div class="whoweare_img_wrap img_shadow">
              <img src="{{ asset('public/images/volley.jpg') }}" alt="" class="img-fluid w-100">
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="col-selector">
            <div class="thecontent sq_content mt-5 mt-md-0">
              <p class="mb-3">  @lang('home.howitworks1') </p>
              <p class="mb-2"><b>@lang('home.its_vry_spl')</b></p>
              <ul class="mb-4 pl-4 sportsuse_link">
                <li><a href="javascript:void(0);" data-toggle="modal" data-target="#login_modal">@lang('home.sign_in')</a></li>
                <li><a href="{{ url('/società') }}">@lang('home.choose_your_sport')</a></li>
                <li><a href="{{ url('/società') }}">@lang('home.howitworks2')</a></li>
                <li><a href="javscript:">@lang('home.content1')</a></li>
              </ul>
              <!-- <a href="javascript:void(0);" class="btn btn-default btn_shadowed text-uppercase">Registration</a> -->
            </div>
          </div>
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