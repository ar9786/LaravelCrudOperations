@include('include.header')
  <!-- the jumbotron starts here -->
  <div class="thejumbotron pagebanner">
    <div class="jumbo_img_wrapper">
      <img src="{{ asset('public/images/sq_banner.jpg') }}" alt="Slide Img" class="img-fluid main_banner d-none d-sm-block">
      <img src="{{ asset('public/images/sq_banner2.jpg') }}" alt="Slide Img" class="img-fluid main_banner d-block d-sm-none">
    </div>
    <div class="page_name_wrap">
      <div class="page_name_data">
        <h3 class="text-uppercase">Sportstrives Square</h3>
      </div>
    </div>
  </div>
  <!-- / the jumbotron ends here -->

  <div id="section2" class="whoweare blockspacing stsq">
    <div class="container">
    	<div class="row">
        <div class="col-12 col-md-5 order-md-2">
          <div class="col-selector">
            <div class="whoweare_img_wrap img_shadow">
              <img src="{{ asset('public/images/football.jpg') }}" alt="" class="img-fluid w-100">
            </div>
          </div>
        </div>
    		<div class="col-12 col-md-7 order-md-1">
    			<div class="col-selector">
    				<div class="thecontent sq_content mt-5 mt-md-0">
    					<p>@lang('home.content2')</p>
    					<a href="{{url('/blog')}}" class="btn btn-default btn_shadowed text-uppercase">@lang('home.content3')</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
  </div>
  
  <div id="section4" class="whoweare blockspacing themebg_light news_section">
    <div class="container">
      <h1 class="base_color">@lang('home.content5')</h1>
    	<div class="row">
        <div class="col-12 col-md-6">
          <div class="col-selector">
            <div class="whoweare_img_wrap">
              <img src="{{ asset('public/images/newsimg.jpg') }}" alt="" class="img-fluid w-100">
            </div>
          </div>
        </div>
    		<div class="col-12 col-md-6">
    			<div class="col-selector">
    				<div class="thecontent mt-5 mt-md-0 sportstrives_news">
    					@lang('home.content24')
              <h3 class="base_color mt-4 fz22">Cristian Pastorino</h3>
              <strong class="d-block fz18">Sportstrives founder</strong>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
  </div>
@include('include.footer')