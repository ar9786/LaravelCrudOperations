<?php
$last_url = explode('/',Request::url());
$last_url = end($last_url);
?>

<div class="section_form pt-5 pb-5">
    <div class="container">
      <form action="">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="col_selector">
              <div class="form-group mb-lg-0">
                <input type="text" id="camp_name" class="form-control rounded-0 pl-5" @if($last_url == 'athelets_club' || $last_url == 'sports_club' || $last_url == 'atleti') placeholder="@lang('home.content28')" @endIf @if($last_url == 'tournaments_club' || $last_url == 'societ%C3%A0') placeholder="@lang('home.content35')  @endIf">
                <img src="{{ asset('public/images/search.png') }}" class="form_input_icon" alt="">
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="col_selector">
              <div class="form-group mb-lg-0">
                <input type="text" id="location" class="form-control rounded-0 pl-5" placeholder="@lang('home.location')">
                <img src="{{ asset('public/images/location.png') }}" class="form_input_icon" alt="">
              </div>
            </div>
          </div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="col_selector">
              <div class="form-group mb-lg-0">
                <input type="text" name="" class="form-control rounded-0 pl-5 dropdown-toggle" id="dropdownMenuButton" placeholder="@lang('home.gender') @lang('home.age')" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('public/images/gender.png') }}" class="form_input_icon" alt="">
                <div class="dropdown keep-inside-clicks-open">
                  <div class="dropdown-menu input_dropdown rounded-0 p-3" aria-labelledby="dropdownMenuButton">
                    <div class="row">
                      <div class="col-8">
                        <div class="col_selector">
                          <p class="fz15 mb-3">@lang('home.content26')</p>
                            <div class="custom-control custom-radio custom-control-inline mr-2">
                              <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" value="Male">
                              <label class="custom-control-label" for="customRadioInline1">@lang('home.male')</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline mr-2">
                              <input type="radio" id="customRadioInline2" name="customRadioInline1" value="Female" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline2">@lang('home.female')</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline mr-2">
                              <input type="radio" id="customRadioInline3" name="customRadioInline1" value="Both" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline3">@lang('home.both')</label>
                            </div>
                            <!--<button type="submit" class="btn btn-primary mt-3 rounded-0 w-50 themebg_dark">Submit</button>-->
                        </div>
                      </div>
                      @if($last_url == 'tournaments_club' || $last_url == 'sport_associations')
                      <input type="hidden" value="tournaments_club" id="page_value">
                      @endIf
                      @if($last_url == 'sports_club' || $last_url == 'youngathletes' || $last_url == 'athelets_club')
                      <input type="hidden" value="sports_club" id="page_value">
                      @endIf
                      <div class="col-4">
                        <div class="col_selector">
                          <p class="fz15 mb-3">@lang('home.content27')</p>
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
              <button type="button" id="search_camp" class="btn btn-primary themebg_dark w-100 form_btn">@lang('home.submit')</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>