@include('include.header')
<?php // echo "<pre>"; print_r($data['related_added_sports']); exit;?>
  <!-- the jumbotron starts here -->
  <div class="thejumbotron pagebanner">
    <div class="jumbo_img_wrapper">
      <img src="{{ asset('public/images/howitworks_banner.jpg') }}" alt="Slide Img" class="img-fluid main_banner">
    </div>
    <div class="page_name_wrap">
      <div class="page_name_data">
        <h3 class="text-uppercase">@lang('home.content37')</h3>
      </div>
    </div>
  </div>
  @include('include.filterCamp')
  <!-- / the jumbotron ends here 
  <div class="section_form pt-5 pb-5">
    <div class="container">
      <form action="">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="col_selector">
              <div class="form-group mb-lg-0">
                <input type="text" id="camp_name" class="form-control rounded-0 pl-5" placeholder="Find Sport/Sport Name">
                <img src="{{ asset('public/images/search.png') }}" class="form_input_icon" alt="">
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="col_selector">
              <div class="form-group mb-lg-0">
                <input type="text" id="location" class="form-control rounded-0 pl-5" placeholder="Location">
                <img src="{{ asset('public/images/location.png') }}" class="form_input_icon" alt="">
              </div>
            </div>
          </div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="col_selector">
              <div class="form-group mb-lg-0">
                <input type="text" name="" class="form-control rounded-0 pl-5 dropdown-toggle" id="dropdownMenuButton" placeholder="Gender Age" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('public/images/gender.png') }}" class="form_input_icon" alt="">
                <div class="dropdown keep-inside-clicks-open">
                  <div class="dropdown-menu input_dropdown rounded-0 p-3" aria-labelledby="dropdownMenuButton">
                    <div class="row">
                      <div class="col-8">
                        <div class="col_selector">
                          <p class="fz15 mb-3">Who's Participating</p>
                            <div class="custom-control custom-radio custom-control-inline mr-2">
                              <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" value="Male">
                              <label class="custom-control-label" for="customRadioInline1">Male</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline mr-2">
                              <input type="radio" id="customRadioInline2" name="customRadioInline1" value="Female" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline2">Female</label>
                            </div>
                            <!--<button type="submit" class="btn btn-primary mt-3 rounded-0 w-50 themebg_dark">Submit</button>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="col_selector">
                          <p class="fz15 mb-3">What Age?</p>
                          <input type="number" id="age_group" class="form-control rounded-0">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="col_selector w-75 input_form_submit">
              <button type="button" id="search_camp" class="btn btn-primary themebg_dark w-100 form_btn">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>-->
  <!-- // multiple games  -->
  <div class="multiple_games pt-5 pb-5">
    <div class="container">
      <div class="add_sport text-center mb-5">
        <button class="btn btn-primary pt-2 pb-2 add_camp_clinic_btn" data_val="clubform" id="addSport">@lang('home.add_camp_clinc')</button>
      </div>
      <div class="row">
      <div id="related_search"></div>
      </div>
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
            <span>@lang('home.content30')</span>
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