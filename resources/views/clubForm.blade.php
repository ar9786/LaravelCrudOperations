@include('include.header')
<style>
  .btn-group>.multiselect{margin-bottom: 24px; border: 1px solid #ced4da; background: #e9ecef; text-align: left; color: #495057;}
   .btn-group>.multiselect:after{    border-top: 8px solid;
    border-right: 8px solid transparent;
    border-bottom: 0;
    border-left: 8px solid transparent;
    right: 10px;
    border-radius: 3px;
    position: absolute;
    top: 16px;}
</style>
@if (\Session::has('club_form_msg'))
<script>
$(function () {
toastr.success('{!! \Session::get('club_form_msg') !!}',"", {"timeOut": "1000","extendedTImeout": "0" });
});
$("#clbfrm")[0].reset();
</script>
@endIf
  <!-- the jumbotron starts here -->
  <div class="thejumbotron pagebanner">
    <div class="jumbo_img_wrapper">
      <img src="{{ asset('public/images/howitworks_banner.jpg') }}" alt="Slide Img" class="img-fluid">
    </div>
    <div class="page_name_wrap">
      <div class="page_name_data">
        <h3 class="text-uppercase">@lang('static.static24')</h3>
      </div>
    </div>
  </div>
  <!-- / the jumbotron ends here -->

  
  <!-- 
@if ($errors->any())
	{{ implode('', $errors->all('<div>:message</div>')) }}
@endif -->

  <section class="form_section pt-5 pb-5">
      <div class="container card_form pt-5 pb-5">
        <h4 class="ml-4 mb-5">@lang('static.static15')</h4>
        <form autocomplete="off" action="{{url('/clubformsubmit')}}" method="POST" class="ml-4 club_form_st" enctype="multipart/form-data" id="clbfrm">
          <div class="row">
            <div class="col-md-5">
              <div class="col_selector">
                <div class="form-group mb-4">
                  <input type="text" name="camp_name" class="form-control rounded-0 coustom_input_bg" placeholder="Camp/Clinic Name" value="{{ old('camp_name') }}" id="camp_name">
					@if ($errors->has('camp_name'))
					  <div class="text-danger"><!--{{ $errors->first('camp_name') }} -->Required</div>
					@endif
                </div>
			
                <div class="form-group mb-4 icon_form">
                  <select  class="form-control rounded-0 coustom_input_bg dropdown-toggle" option name="gender" value="{{ old('gender') }}" id="gender">
                    <option value="male">@lang('home.male')</option>
                    <option value="female">@lang('home.female')</option>
                    <option value="both">@lang('home.both')</option>
                  </select>
                  @if ($errors->has('gender'))
					          <div class="text-danger">Required</div>
				          @endif	
                </div>
                <div class="form-group mb-4 icon_form">
                  <div class="dropdown club_form_wrapper">
                      
					<select  class="form-control rounded-0 coustom_input_bg dropdown-toggle" option name="is_multiple_session" value="{{ old('is_multiple_session') }}" id="dropdownMenuButton1">
						<option value="">@lang('home.multiple_session')</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>                    
					</select>
					@if ($errors->has('is_multiple_session'))
					  <div class="text-danger">Required</div>
					@endif
                      <!--<i class="fa fa-caret-down custom_icon fz24"></i>-->
                  </div>
                </div>
                <div class="form-group mb-4 icon_form">
                  <input type="text" name="start_date" id="start_date" class="form-control rounded-0 coustom_input_bg" value="{{ old('start_date') }}" placeholder="@lang('home.start_date')" readonly>
					@if ($errors->has('start_date'))
					  <div class="text-danger">Required</div>
					@endif
                  <i class="fa fa-calendar custom_icon fz24"></i>
                </div>
				<div class="form-group mb-4 icon_form">
                  <input type="text" name="start_time_duration" id="start_time_duration" class="form-control rounded-0 coustom_input_bg" placeholder="@lang('home.start_time_duration')" value="{{ old('start_time_duration') }}">
					@if ($errors->has('start_time_duration'))
					  <div class="text-danger">Required</div>
					@endif
                  <i class="fa fa-clock-o custom_icon fz24"></i>
                </div>
                
				<div class="form-group mb-4">
                  <input type="text" id="price" name="price" value="{{ old('price') }}" class="form-control rounded-0 coustom_input_bg" placeholder="@lang('home.price')">
					@if ($errors->has('price'))
					  <div class="text-danger">Required</div>
					@endif
                </div>
              </div>
            </div>
            <div class="col-md-5">
            <div class="form-group mb-4 icon_form">
				<select id="sporttype" name="sporttype[]" value="{{ old('sporttype[]') }}" multiple="multiple" class="form-control rounded-0 coustom_input_bg dropdown-toggle">
      				<option value="1">Camp</option>
      				<option value="2">Clinic</option>
      				<option value="3">Tournament</option>
    			</select>
				@if ($errors->has('sporttype'))
					  <div class="text-danger">Required</div>
				@endif				
				</div>
              <div class="form-group mb-4 icon_form">
              <select id="selectsport" name="is_sport[]" value="{{ old('is_sport[]') }}" multiple="multiple" class="form-control rounded-0 coustom_input_bg dropdown-toggle">
                  <option value="@lang('home.content14')">@lang('home.content14')</option>
                  <option value="@lang('home.content15')">@lang('home.content15')</option>
                  <option value="@lang('home.content16')">@lang('home.content16') </option>
                  <option value="@lang('home.content17')">@lang('home.content17')</option>
                </select>
              @if ($errors->has('is_sport'))
					        <div class="text-danger">Required</div>
					    @endif
              </div>
              <div class="form-group mb-4 icon_form">
                <select id="multiselect" name="age_group[]" value="{{ old('age_group[]') }}" multiple="multiple" class="form-control rounded-0 coustom_input_bg dropdown-toggle">
                  <option value="8-11">8 - 11</option>
                  <option value="12-15">12 - 15</option>
                  <option value="16-18">16 - 18 </option>
                  <option value="18-50">@lang('home.above_18')</option>
                </select>
                @if ($errors->has('age_group'))
                <div class="text-danger">Required</div>
                @endif
            </div>
                <div class="form-group mb-4 icon_form">
                  <input type="text" name="end_date" value="{{ old('end_date') }}" readonly id="end_date" class="form-control rounded-0 coustom_input_bg" placeholder="@lang('home.end_date')">
                  @if ($errors->has('end_date'))
                  <div class="text-danger">Required</div>
                  @endif
                  <i class="fa fa-calendar custom_icon fz24"></i>
                </div>
                <div class="form-group mb-4 icon_form">
                  <input type="text" name="end_time_duration" value="{{ old('end_time_duration') }}" class="form-control rounded-0 coustom_input_bg" placeholder="@lang('home.end_time_duration')" id="end_time_duration" >
                  @if ($errors->has('end_time_duration'))
					          <div class="text-danger">Required</div>
					        @endif
                  <i class="fa fa-clock-o custom_icon fz24"></i>
					
                </div>
                
				<div class="form-group mb-4">
                <input type="text" name="location" value="{{ old('location') }}" class="form-control rounded-0 coustom_input_bg" placeholder="@lang('home.location')" id="mailing_address">
                @if ($errors->has('location'))
					        <div class="text-danger">Required</div>
					      @endif
                <div id="showmap_address"></div>
					
              </div>
            </div>
            <div class="col-md-10">
              
              <div class="form-group mb-4">
                <textarea cols="30" rows="3" placeholder="@lang('home.description')" name="description" class="form-control rounded-0 coustom_input_bg" id="description" >{{ old('description') }}</textarea>
                @if ($errors->has('description'))
                  <div class="text-danger">Required</div>
                @endif
              </div>
              <p class="mt-4 mb-4">@lang('home.upload_image_and_video') :-</p>
              <div class="p-2 mb-4">
                <label for="customFile" class="mb-0">
                  <i class="fa fa-upload upload_btn fz50 pt-3 pb-3 pl-4 pr-4"></i>
                </label>
                <input type="file" multiple onchange="readURL(this);"  name="image_video[]" class="custom-file-input d-none" id="customFile">
                @if (\Session::has('file_error'))
                <div class="text-danger">Wrong Format Or size greater than 2 MB</div>
                @endIf
				<div class="img_preview">
					
				</div>
                <?php /*
                @if (count($errors) > 0 && ($errors->has('image_video')))
                {{$errors->first('image_video')}}
                @foreach ($errors->image_video as $error)
                <li>{{ $error }}</li>
                <div class="text-danger">Required</div>
                @endforeach
                @endif */ ?>
              </div>
			  <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="pt-3">
                <button class="btn themebg_dark color_white rounded-0 mr-4 mb-3" type="submit">SUBMIT</button>
                <a href="{{ url('/atleti') }}"><button type="button" class="btn invite_btn color_white rounded-0 mr-4 mb-3">@lang('static.static25')</button></a>
                <a href="{{ url('/società') }}"><button type="button" class="btn invite_btn color_white rounded-0 mb-3">@lang('static.static26')</button></a>
              </div>
            </div>
          </div>
        </form>
      </div>   
  </section>
  @yield('js')
@include('include.footer')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>

<script>

 function readURL(input) {
	 $('.img_preview').html("");
            if (input.files && input.files[0]) {
				for(var jk = 0; jk<10 ; jk++){
					$('.img_preview').append(input.files[jk].name+" ")
				}           
            }
        }


$('#clbfrm').submit(function(){
	var flag = 1;
	var camp_name = $('#camp_name').val();
	var sporttype = $('#sporttype').val();
	var gender = $('#gender').val();
	var selectsport = $('#selectsport').val();
	var start_time_duration = $('#start_time_duration').val();
	var multiselect = $('#multiselect').val();
	var start_date = $('#start_date').val();
	var end_date = $('#end_date').val();
	var dropdownMenuButton1 = $('#dropdownMenuButton1').val();
	var end_time_duration = $('#end_time_duration').val();
	var price = $('#price').val();
	var mailing_address = $('#mailing_address').val();
	var description = $('#description').val();
	
	if(camp_name == ''){
		flag = 0;
		$('#camp_name').addClass('invalid_input');
	}else{
		$('#camp_name').removeClass('invalid_input');
	}
	if(!sporttype){
		flag = 0;
		$('#sporttype').parent().addClass('invalid_input');
	}else{ 
		$('#sporttype').parent().removeClass('invalid_input');
	}
	if(gender == ''){
		flag = 0;
		$('#gender').addClass('invalid_input');
	}else{ 
		$('#gender').removeClass('invalid_input');
	}
	if(!selectsport){
		flag = 0;
		$('#selectsport').parent().addClass('invalid_input');
	}else{ 
		$('#selectsport').parent().removeClass('invalid_input');
	}
	if(start_time_duration == ''){
		flag = 0;
		$('#start_time_duration').addClass('invalid_input');
	}else{ 
		$('#start_time_duration').removeClass('invalid_input');
	}
	if(!multiselect){
		flag = 0;
		$('#multiselect').parent().addClass('invalid_input');
	}else{ 
		$('#multiselect').parent().removeClass('invalid_input');
	}
	if(start_date == ''){
		flag = 0;
		$('#start_date').addClass('invalid_input');
	}else{ 
		$('#start_date').removeClass('invalid_input');
	}
	if(end_date == ''){
		flag = 0;
		$('#end_date').addClass('invalid_input');
	}else{ 
		$('#end_date').removeClass('invalid_input');
	}
	if(dropdownMenuButton1 == ''){
		flag = 0;
		$('#dropdownMenuButton1').addClass('invalid_input');
	}else{ 
		$('#dropdownMenuButton1').removeClass('invalid_input');
	}
	if(end_time_duration == ''){
		flag = 0;
		$('#end_time_duration').addClass('invalid_input');
	}else{ 
		$('#end_time_duration').removeClass('invalid_input');
	}
	if(price == ''){
		flag = 0;
		$('#price').addClass('invalid_input');
	}else{ 
		$('#price').removeClass('invalid_input');
	}
	if(mailing_address == ''){
		flag = 0;
		$('#mailing_address').addClass('invalid_input');
	}else{ 
		$('#mailing_address').removeClass('invalid_input');
	}
	if(description == ''){
		flag = 0;
		$('#description').addClass('invalid_input');
	}else{ 
		$('#description').removeClass('invalid_input');
	}
	if(flag == 0)
		return false;
	else
		return true;
});

$( function() {
$( "#end_date" ).datepicker({ dateFormat: 'dd-mm-yy',minDate: 0 }).val();
$( "#start_date" ).datepicker({ dateFormat: 'dd-mm-yy',minDate: 0 }).val();
} );
/*
$(function () {
    $("#start_date").datepicker({
		dateFormat: 'dd-mm-yy',
		minDate: 0 ,
        numberOfMonths: 2,
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $("#end_date").datepicker("option", "minDate", dt);
        }
    });
    $("#end_date").datepicker({
        numberOfMonths: 2,
		minDate: 0 ,
		dateFormat: 'dd-mm-yy',
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() - 1);
            $("#start_date").datepicker("option", "maxDate", dt);
        }
    });
});
*/

$(document).ready(function() {
  $('#multiselect').multiselect({
    buttonWidth : '100%',
    includeSelectAllOption : true,
		nonSelectedText: '@lang("home.age_group")'
  });
  $('#sporttype').multiselect({
    buttonWidth : '100%',
    includeSelectAllOption : true,
		nonSelectedText: '@lang("home.cct")'
  });
  $('#selectsport').multiselect({
    buttonWidth : '100%',
    includeSelectAllOption : true,
		nonSelectedText: '@lang("home.select_sport")'
  });
  
});

function getSelectedValues() {
  var selectedVal = $("#multiselect").val();
	for(var i=0; i<selectedVal.length; i++){
		function innerFunc(i) {
			setTimeout(function() {
				location.href = selectedVal[i];
			}, i*2000);
		}
		innerFunc(i);
	}
	var sporttype = $("#sporttype").val();
	for(var i=0; i<sporttype.length; i++){
		function innerFunc(i) {
			setTimeout(function() {
				location.href = sporttype[i];
			}, i*2000);
		}
		innerFunc(i);
	}
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtnZ8LRWDzIpzyBe5Kuj8taIfu4Qb__6s&libraries=places&callback=initAutocomplete"  async defer></script>
<script type="text/javascript">
   function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('showmap_address'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13,
          mapTypeId: 'roadmap'
        });
        
        // Create the search box and link it to the UI element.
        var input = document.getElementById('mailing_address');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }
 </script>