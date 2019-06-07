@include('include.header')
  <!-- the jumbotron starts here -->
  <div class="thejumbotron pagebanner">
    <div class="jumbo_img_wrapper">
      <img src="{{ asset('public/images/camp_banner.jpg') }}" alt="tournament" class="img-fluid main_banner">
    </div>
    <div class="page_name_wrap">
      <div class="page_name_data">
        <h3 class="text-uppercase">@lang('home.tournaments')</h3>
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
                <h3 class="base_color">@lang('static.static10')</h3>
                <p class="">@lang('static.static11')</p>
                <div class="camp_btns mt-5">
                  <a href="{{url('/tournaments_club')}}" class="btn btn-default btn_shadowed camp_btn mr-sm-4">@lang('home.content31')</a>
                  <a href="#" id="addSport" data_val="clubform" class="btn btn-default btn_shadowed">@lang('home.content32')</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div id="section4" class="whoweare blockspacing themebg_light news_section tournament_strive">
    <div class="container">
      <h1 class="base_color text-uppercase">@lang('home.how_sport_works')</h1>
      <div class="row">
        <div class="col-12 col-lg-4 col-xls-2">
          <div class="col-selector">
            <div class="sportcamp_block mt-5">
              <div class="work_img">
                <img src="{{ asset('public/images/sports_works5.png') }}" alt="">
              </div>
              <h3>@lang('home.for_sport_club')</h3>
              <p>@lang('static.static18')</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 col-xls-2">
          <div class="col-selector">
            <div class="sportcamp_block mt-5">
              <div class="work_img">
                <img src="{{ asset('public/images/football.png') }}" alt="">
              </div>
              <h3>@lang('home.choose_your_sport')</h3>
              <p>@lang('static.static19')</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 col-xls-2">
          <div class="col-selector">
            <div class="sportcamp_block mt-5">
              <div class="work_img">
                <img src="{{ asset('public/images/lens.png') }}" alt="">
              </div>
              <h3>@lang('home.content33')</h3>
              <p>@lang('static.static20')</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 col-xls-2">
          <div class="col-selector">
            <div class="sportcamp_block mt-5">
              <div class="work_img">
                <img src="{{ asset('public/images/speaker.png') }}" alt="">
              </div>
              <h3>@lang('home.promote_your_camp')</h3>
              <p>@lang('static.static21')</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 col-xls-2">
          <div class="col-selector">
            <div class="sportcamp_block mt-5">
              <div class="work_img">
                <img src="{{ asset('public/images/trophy.png') }}" alt="">
              </div>
              <h3>@lang('home.invite_athlete') </h3>
              <p>@lang('static.static22')</p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  @include('include.footer')