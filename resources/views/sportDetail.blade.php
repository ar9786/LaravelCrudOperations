@include('include.header')
<style>
.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #f98323;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #f98323;  } 

</style>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (\Session::has('success'))
<script>
swal ( "Success" ,  "Data has been saved" ,  "success" );
</script>
@endif

  <!-- the jumbotron starts here -->
  <div class="thejumbotron pagebanner">
    <div class="jumbo_img_wrapper">
      <img src="{{ asset('public/images/howitworks_banner.jpg') }}" alt="Slide Img" class="img-fluid">
    </div>
    <div class="page_name_wrap">
      <div class="page_name_data">
        <h3 class="text-uppercase">{{$data['sportDetail'][0]['camp_name']}}</h3>
      </div>
    </div>
  </div>
  <!-- / the jumbotron ends here -->

  <!-- sports detail page start here -->
  <section class="sports_detail pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="col_selector">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
              @php
                $ik = 0
              @endphp
              @if(count($data['slider_images'])>0)
                @foreach ( $data['slider_images'] as $value)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$ik}}" @if($ik == 0)  class="active" @endif ></li>
                @php
                $ik ++
               @endphp
                @endforeach
              @endif
              </ol>
              @php
                $ik = 0
              @endphp
              <div class="carousel-inner">
              @if(count($data['slider_images'])>0)
              @foreach ( $data['slider_images'] as $value)
                <div class="carousel-item @if($ik == 0) active @endif">
                  <img src="{{ asset('public/site_images/'.$value) }}" class="d-block w-100 img-fluid" alt="...">
                </div>
                @php
                $ik ++
               @endphp
              @endforeach
              @endif
              </div>
              <a class="carousel-control-prev d-none" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next d-none" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <h4 class="mt-5 mb-5 fz28 heading_text pb-4">{{$data['sportDetail'][0]['camp_name']}} <span class="fz22">(Camp / Clinic / Tournament)</span></h4>
            <div class="address themebg_dark color_white p-4 mb-4">
              <div class="container">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="col_selector address_heading">
                      <p class="fz24 mt-3 address_heading">Address</p>
                      <p class="fz18 mb-3"><i class="fa fa-map-marker fz30 mr-3 align-middle"></i>{{$data['sportDetail'][0]['location']}}</p>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="col_selector pt-3">
                      <button class="btn w-100 mt-3 base_color view_map_btn fz20" data-toggle="modal" data-target="#myModal">View Map</button>
                      <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            
                              <!-- Modal Header -->
                              <div class="modal-header">
                                <!-- <h4 class="modal-title">Modal Heading</h4> -->
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              
                              <!-- Modal body -->
                              <div class="modal-body">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56072.2373264519!2d77.31223912350973!3d28.554299206726803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cef5a2e725963%3A0x928051c422f34004!2sMobileCoderz+Technologies!5e0!3m2!1sen!2sin!4v1549962621151" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                              </div>
                              
                              <!-- Modal footer -->
                              <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div> -->
                              
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card_table mt-1 mb-4 pb-5">
              <div class="table-responsive">
                <table class="table">
                    <thead>
                      <tr>
                        <th class="text-uppercase base_color fz24 pl-4">Pricing</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="w-50 pl-4">Fees Amount</td>
                        <td class="w-50 pl-4">{{$data['sportDetail'][0]['price']}}</td>
                      </tr>
                      <tr>
                        <td class="w-50 pl-4">Start Date</td>
                        <td class="w-50 pl-4">{{date('d-M-Y',strtotime($data['sportDetail'][0]['start_date']))}}</td>
                      </tr>
                      <tr>
                        <td class="w-50 pl-4">End Date</td>
                        <td class="w-50 pl-4">{{date('d-M-Y',strtotime($data['sportDetail'][0]['end_date']))}}</td>
                      </tr>
                      <tr>
                        <td class="w-50 pl-4">Gender</td>
                        <td class="w-50 pl-4">{{$data['sportDetail'][0]['gender']}}</td>
                      </tr>
                      <tr>
                        <td class="w-50 pl-4">Age Group</td>
                        <td class="w-50 pl-4">{{$data['sportDetail'][0]['age_group_primary']}} -{{$data['sportDetail'][0]['age_group_secondary']}}years</td>
                      </tr>
                      <tr>
                        <td class="w-50 pl-4">Start Time</td>
                        <td class="w-50 pl-4">{{$data['sportDetail'][0]['start_time_duration']}}</td>
                      </tr>
                      <tr>
                        <td class="w-50 pl-4">End Time</td>
                        <td class="w-50 pl-4">{{$data['sportDetail'][0]['end_time_duration']}}</td>
                      </tr>
                      <tr>
                        <td class="w-50 pl-4">Multiple Session</td>
                        <td class="w-50 pl-4">{{$data['sportDetail'][0]['is_multiple_session']}}</td>
                      </tr>
                    </tbody>
                </table>
                <div class="text_describe p-4">
                  <p class="fz18 mb-5">{{$data['sportDetail'][0]['description']}}</p>
                  <button class="btn book_btn color_white fz26" type="button">Book Now</button>
                </div>
              </div>
            </div>
            @if(count($data['reviewList']) > 0)
            <div class="card_table mt-1 mb-4 pb-5">
              <p class="p-4 base_color fz24 mb-0 heading_text">Camp/Clinic/Tournament Reviews</p>
              <div class="rating_section p-4">
              @foreach ($data['reviewList'] as $value)
                <div class="rating_paragraph pt-2">
                  <div class="profile_section">
                    <img src="images/rating1.png" class="user_pic" alt="">
                    <h4 class="base_color fz22 mb-0">{{ $value['first_name'] }}
                    @for ($i = floor($value['rating']); $i > 0; $i--)
                    <i class="fa fa-star stars_orange @if($i ==floor($value['rating'])) ml-3  @endif "></i>
                    @endfor
                    @if(strpos($value['rating'],'.') !== false )
                    <i class="fa fa-star stars_orange "></i>
                    @endif
                    </h4>
                    <span>{{ date('M d,Y',strtotime($value['created_at'])) }}</span>
                  </div>
                  <p class="fz18 pb-4 pt-3 rating_para">{{ $value['message'] }}</p>
                </div>
              @endforeach
              </div>
            </div>
            @endif
          </div>
        </div>
        <div class="col-md-4">
          <div class="col_selector">
            <div class="card_table mt-1 mb-4 pb-5">
            @if(count($data['relatedCamps']))
              <p class="p-4 base_color fz24 mb-0 heading_text">Related Sports</p>
              @foreach ($data['relatedCamps'] as $value)
              <div class="games_section pt-4 pl-3 pr-3">
                  <div class="container">
                    <div class="row">
                      <div class="col-5">
                        <div class="col_selector">
                          @php $img_name = explode(',',$value['image_video']); @endphp
                          <img src="{{ asset('public/site_images/'.$img_name[0]) }}" alt="" class="img-fluid games_1">
                        </div>
                      </div>
                      <a href="{{url('/sport-detail?sport_id='.$value['id'])}}" >
                      <div class="col-7">
                        <div class="col_selector">
                          <p class="fz24 pt-3">{{$value['camp_name']}}</p>
                        </div>
                      </div>
                      </a>
                      <div class="col-12"><hr></div>
                    </div>
                  </div>
                </div>
                @endforeach              
              </div>
              @endif
            <div class="review_section themebg_dark p-3 color_white">
              <p>Rate and Review</p>
              <hr>
              <p class="mb-0">Click to Rate</p>
              <form action="{{ url('/ratingSubmt') }}" method="POST" id="form_reviews" >
              <div class="form-group">
              <fieldset class="rating getRating">
              <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
              <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
              <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
              <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
              <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
              <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
              <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
              <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
              <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
              <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
              </fieldset>
              @if ($errors->has('rating'))
					        <div class="text-danger">{{ $errors->first('rating') }}</div>
					    @endif
              </div>
              <div class="form-group">
                <textarea  id="msg" cols="30" rows="10" placeholder="Review Description" class="form-control" name="message"></textarea>
                <p class="fz13 mb-0 text-right mt-1 textare_text">Minimum 50 Characters</p>
                @if ($errors->has('message'))
					        <div class="text-danger">{{ $errors->first('message') }}</div>
					      @endif
              </div>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="club_id" value="{{ base64_encode($data['sportDetail'][0]['id']) }}">
              <div class="form-group text-center">
                <button id="submit_review" type="submit" class="btn mt-4 review_submit w-75 fz22 base_color">Submit Review</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
@include('include.footer')
<script>
$('#submit_review').click(function(e){
  e.preventDefault();
  $.ajax({
					type:"GET",
					url:'{{url("/ajaxRequest")}}?checkLogin',
					success: function(response){
							if(response == 1){
                $('#form_reviews').submit();
							  }else{
                $('#login_modal').modal('show');
							}
						},
					error: function(xhr, status, error) {
					var err = eval("(" + xhr.responseText + ")");
					alert(err.Message);
					}
  });
});
</script>