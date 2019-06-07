@include('include.header')
<!-- the jumbotron starts here -->
  <div class="thejumbotron pagebanner">
    <div class="jumbo_img_wrapper">
      <img src="{{ asset('public/images/camp_banner.jpg') }}" alt="Slide Img" class="img-fluid main_banner">
    </div>
    <div class="page_name_wrap">
      <div class="page_name_data">
        <h3 class="text-uppercase">@lang('home.camps_and_clinic')</h3>
      </div>
    </div>
  </div>
  <!-- / the jumbotron ends here -->

  <div id="section2" class="whoweare blockspacing stsq camp_section_page">
    <div class="container">
    	<div class="row">
        <div class="col-12">
          <div class="col-selector">
            <div class="whoweare_img_wrap">
              <div class="camp_data text-center">
                <h3 class="base_color">@lang('home.content4')</h3>
                <p class="">@lang('static.static1')</p>
                <div class="camp_btns mt-5">
                  <a href="{{ url('/athelets_club') }}" class="btn btn-default btn_shadowed camp_btn mr-3 mr-md-4 mb-0">@lang('home.young_athlete')</a>
                  <a href="{{ url('/sports_club') }}" class="btn btn-default btn_shadowed">@lang('home.sports_club')</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </div>
  </div>
  
  <div id="section4" class="whoweare blockspacing themebg_light news_section">
    <div class="container">
      <h1 class="base_color text-uppercase mb-5">@lang('home.how_sport_works')</h1>
    	<div class="row mb-5">
        <div class="col-12 col-md-6 col-xl-3">
          <div class="col-selector">
            <div class="sportcamp_block mt-5">
              <div class="work_img">
                <img src="{{ asset('public/images/sports_works1.png') }}" alt="">
              </div>
              <h3>@lang('home.for_athletes')</h3>
              <p>@lang('static.static2')</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
          <div class="col-selector">
            <div class="sportcamp_block mt-5">
              <div class="work_img">
                <img src="{{ asset('public/images/lens.png') }}" alt="">
              </div>
              <h3>@lang('home.choose_your_sport')</h3>
              <p>@lang('static.static3')</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
          <div class="col-selector">
            <div class="sportcamp_block mt-5">
              <div class="work_img">
                <img src="{{ asset('public/images/event.png') }}" alt="">
              </div>
              <h3>@lang('home.find_your_cc')</h3>
              <p>@lang('static.static4')</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
          <div class="col-selector">
            <div class="sportcamp_block mt-5">
              <div class="work_img">
                <img src="{{ asset('public/images/target.png') }}" alt="">
              </div>
              <h3>@lang('home.bok_camp_on_sportstrve')</h3>
              <p>@lang('static.static5')</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-12 col-md-6 col-xl-3">
          <div class="col-selector">
            <div class="sportcamp_block mt-5">
              <div class="work_img">
                <img src="{{ asset('public/images/sports_works5.png') }}" alt="">
              </div>
              <h3>@lang('home.for_sport_club')</h3>
              <p>@lang('static.static6')</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
          <div class="col-selector">
            <div class="sportcamp_block mt-5">
              <div class="work_img">
                <img src="{{ asset('public/images/football.png') }}" alt="">
              </div>
              <h3>@lang('home.choose_your_sport')</h3>
              <p>@lang('static.static7')</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
          <div class="col-selector">
            <div class="sportcamp_block mt-5">
              <div class="work_img">
                <img src="{{ asset('public/images/speaker.png') }}" alt="">
              </div>
              <h3>@lang('home.promote_your_camp')</h3>
              <p>@lang('static.static8')</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
          <div class="col-selector">
            <div class="sportcamp_block mt-5">
              <div class="work_img">
                <img src="{{ asset('public/images/trophy.png') }}" alt="">
              </div>
              <h3>@lang('home.invite_athlete')</h3>
              <p>@lang('static.static9')</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@include('include.footer')