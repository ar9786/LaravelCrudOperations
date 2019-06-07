<?php include 'include/header.php'; ?>
  <!-- the jumbotron starts here -->
  <div class="thejumbotron pagebanner">
    <div class="jumbo_img_wrapper">
      <img src="images/howitworks_banner.jpg" alt="Slide Img" class="img-fluid">
    </div>
    <div class="page_name_wrap">
      <div class="page_name_data">
        <h3 class="text-uppercase">Find Your Camp, CliNIC OR Tournament</h3>
      </div>
    </div>
  </div>
  <!-- / the jumbotron ends here -->

  <div class="section_form p-5">
    <div class="container">
      <form action="">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="col_selector">
              <div class="form-group mb-0">
                <input type="text" name="" class="form-control rounded-0 pl-5" placeholder="Find Sport/Sport Name">
                <img src="images/search.png" class="form_input_icon" alt="">
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="col_selector">
              <div class="form-group mb-0">
                <input type="text" name="" class="form-control rounded-0 pl-5" placeholder="Location">
                <img src="images/location.png" class="form_input_icon" alt="">
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="col_selector">
              <div class="form-group mb-0">
                <input type="text" name="" class="form-control rounded-0 pl-5 dropdown-toggle" id="dropdownMenuButton" placeholder="Gender Age" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="images/gender.png" class="form_input_icon" alt="">
                <div class="dropdown keep-inside-clicks-open">
                  <div class="dropdown-menu input_dropdown rounded-0 p-3" aria-labelledby="dropdownMenuButton">
                    <div class="row">
                      <div class="col-8">
                        <div class="col_selector">
                          <p class="fz15 mb-3">Who's Participating</p>
                          <form action="">
                            <div class="custom-control custom-radio custom-control-inline mr-2">
                              <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline1">Male</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline mr-2">
                              <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline2">Female</label>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3 rounded-0 w-50 themebg_dark">Submit</button>
                          </form>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="col_selector">
                          <p class="fz15 mb-3">What Age?</p>
                          <input type="number" name="" class="form-control rounded-0">
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
              <button type="submit" class="btn btn-primary themebg_dark w-100">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- // multiple games  -->
  <div class="multiple_games p-5">
    <div class="container">
      <div class="add_sport text-center mb-5">
        <button class="btn btn-primary pt-2 pb-2" onclick="javascript:window.location.href='form.php'">ADD SPORT</button>
      </div>
      <div class="col_selector">
        <div class="sports_selected mb-5">
          <span>Sports added by you</span>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-4">
          <div class="col_selector Tournament_images mb-5">
            <img src="images/game1.png" class="img-fluid" alt="">
            <div class="image_text text-center p-3 w-100">
              <h4 class="mb-0"><a href="sports_detail.php" class="d-block">Tournament</a></h4>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="col_selector Tournament_images mb-5">
            <img src="images/game2.png" class="img-fluid" alt="">
            <div class="image_text text-center p-3 w-100">
              <h4 class="mb-0"><a href="sports_detail.php" class="d-block">Camp-Clinic</a></h4>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="col_selector Tournament_images mb-5">
            <img src="images/game3.png" class="img-fluid" alt="">
            <div class="image_text text-center p-3 w-100">
              <h4 class="mb-0"><a href="sports_detail.php" class="d-block">Tournament</a></h4>
            </div>
          </div>
        </div>
        <div class="col_selector ml-3 mr-3 w-100">
          <div class="sports_selected mb-5">
            <span>Related Sports</span>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="col_selector Tournament_images mb-5">
            <img src="images/game4.png" class="img-fluid" alt="">
            <div class="image_text text-center p-3 w-100">
              <h4 class="mb-0"><a href="javascript:void(0);" class="d-block">Camp-Clinic</a></h4>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="col_selector Tournament_images mb-5">
            <img src="images/game5.png" class="img-fluid" alt="">
            <div class="image_text text-center p-3 w-100">
              <h4 class="mb-0"><a href="javascript:void(0);" class="d-block">Tournament</a></h4>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="col_selector Tournament_images mb-5">
            <img src="images/game6.png" class="img-fluid" alt="">
            <div class="image_text text-center p-3 w-100">
              <h4 class="mb-0"><a href="javascript:void(0);" class="d-block">Camp-Clinic</a></h4>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="col_selector Tournament_images mb-5">
            <img src="images/game7.png" class="img-fluid" alt="">
            <div class="image_text text-center p-3 w-100">
              <h4 class="mb-0"><a href="javascript:void(0);" class="d-block">Tournament</a></h4>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="col_selector Tournament_images mb-5">
            <img src="images/game8.png" class="img-fluid" alt="">
            <div class="image_text text-center p-3 w-100">
              <h4 class="mb-0"><a href="javascript:void(0);" class="d-block">Camp-Clinic</a></h4>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="col_selector Tournament_images mb-5">
            <img src="images/game9.png" class="img-fluid" alt="">
            <div class="image_text text-center p-3 w-100">
              <h4 class="mb-0"><a href="javascript:void(0);" class="d-block">Tournament</a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
 
  

<?php include 'include/footer.php'; ?>