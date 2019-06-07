@include('include.header')
<?php // echo "<pre>"; print_r($data['related_added_sports']); exit;?>
  <!-- the jumbotron starts here -->
  <div class="thejumbotron pagebanner">
    <div class="jumbo_img_wrapper">
      <img src="{{ asset('public/images/howitworks_banner.jpg') }}" alt="Slide Img" class="img-fluid main_banner">
    </div>
    <div class="page_name_wrap">
      <div class="page_name_data">
        <h3 class="text-uppercase">@lang('home.content36')</h3>
      </div>
    </div>
  </div>
  <!-- / the jumbotron ends here -->
  @include('include/filterCamp')
  <!-- // multiple games  -->
  <div class="multiple_games pt-5 pb-5">
    <div class="container">
      <div class="add_sport text-center mb-5">
        <!--<button class="btn btn-primary pt-2 pb-2 add_camp_clinic_btn" id="addSport">Add camp and clinic</button>-->
      </div>
      <div id="related_search"></div>
      @if (@isset(Session::get('authData')['userId']))
      <div class="col_selector">
        <div class="sports_selected mb-5">
          <span>@lang('static.static27')</span>
        </div>
      </div>
      @endif
      <div class="row">
      @if (@isset(Session::get('authData')['userId']))
      @if(count($data['user_added_sports']) > 0)
      @foreach ($data['user_added_sports'] as $value)
        <div class="col-12 col-md-4">
          <div class="col_selector Tournament_images mb-5">
            <img src="{{ asset('public/site_images/'.$value['image_video']) }}" class="img-fluid w-100" alt="">
            <div class="image_text text-center p-3 w-100">
              <h4 class="mb-0"><a href='{{url("/sport-detail?sport_id=$value[id]")}}' class="d-block">{{ $value['camp_name'] }}</a></h4>
            </div>
          </div>
        </div>
        @endforeach
        @else
        <p>No Active Records</p>
        @endif
        @endif
        @if(count($data['related_added_sports']) > 0)
        <div class="col_selector ml-3 mr-3 w-100">
          <div class="sports_selected mb-5">
            <span>@lang('home.reltd_spots')</span>
          </div>
        </div>
        
        @foreach ($data['related_added_sports'] as $value)
        <div class="col-12 col-md-4">
          <div class="col_selector Tournament_images mb-5">
            <div class="img_seperation">
              <img src="{{ asset('public/site_images/'.$value['image_video']) }}" class="img-fluid w-100 img_tournamt_seperation" alt="">
            </div>
            <div class="image_text text-center p-3 w-100">
              <h4 class="mb-0"><a href='{{url("/sport-detail?sport_id=$value[id]")}}' class="d-block">{{ $value['camp_name'] }}</a></h4>
            </div>
          </div>
        </div>
        @endforeach
        @else
        <p>No Active Records</p>
        @endif
      </div>
    </div>
  </div>
@include('include.footer')