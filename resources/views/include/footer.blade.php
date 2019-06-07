@if (\Session::has('newsletter'))
<script>
$(function () {
toastr.success('{!! \Session::get('newsletter') !!}',"", {"timeOut": "1000","extendedTImeout": "0" });
});
</script>
@endIf
		<!-- footer starts here -->
		<footer class="footer" id="footer" href="footer">
			<div class="prefooter pt-5 pb-5 text-center text-md-left">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="col-selector">
								<div class="footer_info">
									<img src="{{ asset('public/images/footer_logo.png') }}" alt="" class="img-fluid footer_logo">
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="col-selector">
								<div class="footer_info">
									<h3 class="footer_heading fz20">@lang('home.Contact')</h3>
									<p><strong>Tel:</strong> <a href="tel:+39 335 8767099">+39 335 8767099</a></p>
									<p><strong>Email:</strong> <a href="mailto:mail@sportstrives.com">mail@sportstrives.com</a></p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="col-selector">
								<div class="footer_info">
									<h3 class="footer_heading fz20">Sportstrives</h3>
									<p><a href="javascript:void(0);">@lang('home.terms_n_condtn')</a></p>
									<p><a href="javascript:void(0);">@lang('home.privacy_policy')</a></p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="col-selector">
								<div class="footer_info">
									<h3 class="footer_heading fz20">@lang('home.newsletter')</h3>
									<form class="newsletter_form" method="POST" action="{{ url('/newsletter') }}">
										<input type="text" name="email" class="form-control" placeholder="@lang('home.your_email_address')"  >
										@if ($errors->has('email'))
										<div class="text-danger">{{ $errors->first('email') }}</div>
										@endif
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<button type="submit" class="btn btn-primary" name="submit_newsletter"><i class="fa fa-paper-plane"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer_social">
				<ul class="list-unstyled list-inline text-center social_list">
					<li class="list-inline-item">
						<a href="https://www.facebook.com/sportstrives/" target="_blank" data-toggle="tooltip" title="Facebook">
							<img src="{{ asset('public/images/social/fb.png') }}" alt="">
						</a>
					</li>
					<li class="list-inline-item">
						<a href="https://twitter.com/sportstrives/" target="_blank" data-toggle="tooltip" title="Twitter">
							<img src="{{ asset('public/images/social/twitter.png') }}" alt="">
						</a>
					</li>
					<li class="list-inline-item">
						<a href="https://www.linkedin.com/company/sportstrives/" target="_blank" data-toggle="tooltip" title="Linkedin">
							<img src="{{ asset('public/images/social/linkedlin.png') }}" alt="">
						</a>
					</li><!--
					<li class="list-inline-item">
						<a href="javascript:void(0);" target="_blank" data-toggle="tooltip" title="Google Plus">
							<img src="{{ asset('public/images/social/gplus.png') }}" alt="">
						</a>
					</li>-->
					<li class="list-inline-item">
						<a href="https://www.youtube.com/channel/UC7s1GCt8_OyQVyd53Sa2UFw" target="_blank" data-toggle="tooltip" title="Youtube">
							<img src="{{ asset('public/images/social/yt.png') }}" alt="">
						</a>
					</li>
					<li class="list-inline-item">
						<a href="https://www.instagram.com/sportstrives/" target="_blank" data-toggle="tooltip" title="Instagram">
							<img src="{{ asset('public/images/social/insta.png') }}" alt="">
						</a>
					</li>
				</ul>
			</div>
			<div class="copyright_section">
				<p class="m-0 text-light p-2 text-center">Copyright 2018 Sportstrives. @lang('home.all_right_reserved').</p>
			</div>
		</footer>
		<a class="gototop hashscroll" href="#gototop">
      <img src="{{ asset('public/images/gototop.jpg') }}" alt="top arrow">
    </a>
		<!-- / footer ends here -->


		<!-- login modal starts here -->
		<div class="login_signup_wrap">
			<div class="modal fade" id="login_modal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header  d-none">
							<h4 class="modal-title text-center w-100">@lang('home.sign_in')</h4>
							<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								<span class="sr-only">Close</span>
							</button> -->
						</div>
						<div class="modal-body">
							<div class="theForm_wrap">
								<h3 class="text-center base_color">@lang('home.sign_in')</h3>
								<a href="javascript:void(0);" class="close_modal_btn d-block d-lg-none" data-dismiss="modal"><i class="fa fa-times"></i></a>
								<div class="register_width">
									<strong class="d-block text-center mb-3">@lang('home.login_wih_social')</strong>
					<!--				<ul class="list-inline">
										<li class="list-inline-item">
											<a href="{{url('/fbredirect')}}">
												<img src="{{ asset('public/images/fb.jpg') }}" alt="">
											</a>
										</li>
										<li class="list-inline-item">
											<a href="{{url('/gredirect')}}">
												<img src="{{ asset('public/images/gp.jpg') }}" alt="">
											</a>
										</li>
										<li class="list-inline-item">
											<a href="javascript:void(0);">
												<img src="{{ asset('public/images/insta.jpg') }}" alt="">
											</a>
										</li>
									</ul>-->
									<div class="register_width">
								<div class="mb-4 text-center mt-4">
									<div class="custom-control custom-radio custom-control-inline">
									  <input type="radio" id="customRadi" name="role" class="custom-control-input" value="3">
									  <label class="custom-control-label" for="customRadi">@lang('home.young_athlete')</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
									  <input type="radio" id="customRad" name="role" class="custom-control-input" value="2">
									  <label class="custom-control-label" for="customRad">@lang('home.content25')</label>
									</div>
									<span class="text-danger role-error" style="display:none;" >This field is required.</span>
								</div>
									
									<ul class="list-inline">
										<li class="list-inline-item">
											<a href="{{url('/fbredirect')}}" class="social_clik roletype" dat-val='fb'>
												<img src="{{ asset('public/images/fb.jpg') }}" alt="">
											</a>
										</li>
										<li class="list-inline-item">
											<a href="{{url('/gredirect')}}" class="social_clik roletype" dat-val='g'>
												<img src="{{ asset('public/images/gp.jpg') }}" alt="">
											</a>
										</li>
										<li class="list-inline-item">
											<a href="{{url('/instaredirect')}}" class="social_clik roletype" dat-val='insta'>
												<img src="{{ asset('public/images/insta.jpg') }}" alt="">
											</a>
										</li>
									</ul>
								</div>
								</div>
								<div class="ordivider">
									<span>or</span>
								</div>
								<form  class="mt-4" id="user_signing">
								<span class="text-danger wrong-credentials"></span>
									<div class="form-group">
										<input type="text" name="login_email" class="form-control rounded-0" placeholder="@lang('home.content10')" @if (isset($data["cookie_data"]["cookie_email"])   ) value="{{ $data["cookie_data"]["cookie_email"] }}" @endIf><span class="text-danger"></span>
									</div>
									<div class="form-group">
										<input type="password" name="login_password" class="form-control rounded-0" placeholder="@lang('home.content13')" @if (isset($data["cookie_data"]["cookie_pass"]  )) value="{{ $data["cookie_data"]["cookie_pass"] }}" @endIf>
										<span class="text-danger"></span>
									</div>
									<input type="hidden" name="_token" value="{{ csrf_token() }}" id="login_csrf">
									
									<input type="hidden"  value="{{ URL::full() }}" id="previous">
									
									<button type="submit" class="btn btn-primary rounded-0 themebg_dark text-uppercase">Login</button>
									<div class="row mt-3">
										<div class="col-6">
											<div class="remember_pass">
												<input type="checkbox"  name="remember_token"  class="keep_pass" id="keep_pass" @if (isset($data["cookie_data"]["cookie_pass"]) ) checked @endIf >
												<label for="keep_pass"><i class="fa fa-check fz14 mr-3"></i> <span>@lang('home.rembr_me')</span></label>
											</div>
										</div>
										<div class="col-6">
											<div class="forgot_pass">
												<img src="{{ asset('public/images/lock.png') }}" alt="">
												<a href="javascript:void(0);" class="ml-3 base_color" data-toggle="modal" data-target="#forgot_modal" data-dismiss="modal" >@lang('home.forgot_pas')</a>
											</div>
										</div>
									</div>
									<p class="mt-3 mb-5 text-center"><span class="text-muted">@lang('home.nt_mmbr_yet')</span> <a href="javascript:void(0);" data-dismiss="modal" data-toggle="modal" data-target="#signup_modal">@lang('home.Signup')</a> </p>
								</form>
							</div>
						</div>
						<div class="modal-footer d-none">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			<div class="modal fade" id="signup_modal">
				<div class="modal-dialog modal-md" role="document">
					<div class="modal-content">
						<div class="modal-header  d-none">
							<h4 class="modal-title text-center w-100">Sign in</h4>
							<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								<span class="sr-only">Close</span>
							</button> -->
						</div>
						<form action="{{url('/signup')}}" method="POST" class="mt-4" id="signup_form">
						<div class="modal-body">
							<div class="theForm_wrap">
								<h3 class="text-center base_color">@lang('home.Signup')</h3>
								<a href="javascript:void(0);" class="close_modal_btn d-block d-lg-none" data-dismiss="modal"><i class="fa fa-times"></i></a>
								<div class="register_width">
								<div class="mb-4 text-center mt-4">
									<div class="custom-control custom-radio custom-control-inline">
									  <input type="radio" id="customRadi1" name="role" class="custom-control-input" value="3">
									  <label class="custom-control-label" for="customRadi1">@lang('home.young_athlete')</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
									  <input type="radio" id="customRad1" name="role" class="custom-control-input" value="2">
									  <label class="custom-control-label" for="customRad1">@lang('home.content25')</label>
									</div>
									<span class="text-danger role-error" style="display:none;" >This field is required.</span>
								</div>
									<strong class="d-block text-center mb-3">@lang('home.content21')</strong>
									<ul class="list-inline">
										<li class="list-inline-item">
											<a href="{{url('/fbredirect')}}" class="social_clik roletype" dat-val='fb'>
												<img src="{{ asset('public/images/fb.jpg') }}" alt="">
											</a>
										</li>
										<li class="list-inline-item">
											<a href="{{url('/gredirect')}}" class="social_clik roletype" dat-val='g'>
												<img src="{{ asset('public/images/gp.jpg') }}" alt="">
											</a>
										</li>
										<li class="list-inline-item">
											<a href="{{url('/instaredirect')}}" class="social_clik roletype" dat-val='insta'>
												<img src="{{ asset('public/images/insta.jpg') }}" alt="">
											</a>
										</li>
									</ul>
								</div>
								<div class="ordivider">
									<span>or</span>
								</div>

								<div class="row signup_row gutter_16">
									<div class="col-6">
										<div class="form-group">
											<input type="text" name="first_name" class="form-control rounded-0" placeholder="@lang('home.content8')" id="first_name">
											<span class="text-danger"></span>
										</div>
										
									</div>
									<div class="col-6">
										<div class="form-group">
											<input type="text" name="last_name" class="form-control rounded-0" placeholder="@lang('home.content9')">
											<span class="text-danger"></span>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<input type="text" name="email" class="form-control rounded-0" placeholder="@lang('home.content10')">
											<span class="text-danger"></span>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<input type="password" name="password" class="form-control rounded-0" placeholder="@lang('home.content13')">
											<span class="text-danger"></span>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<input type="text" name="phone_no" class="form-control rounded-0" placeholder="@lang('home.content11')">
											<span class="text-danger"></span>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<input type="text" name="postal_code" class="form-control rounded-0" placeholder="@lang('home.content12')">
											<span class="text-danger"></span>
										</div>
									</div>
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
								</div>
								<div class="row mt-3">
									<div class="col-7">
										<div class="remember_pass">
											<input type="checkbox" name="privacy-policy" class="keep_pass" id="t_and_c"><span class="text-danger"></span>
											<label for="t_and_c"><i class="fa fa-check fz14 mr-3"></i> <span class="text-muted">@lang('home.content19')</span>  <a href="javascript:void(0);" class="text-primary">@lang('home.terms_n_condtn')</a>  <span class="text-muted">@lang('home.content20')</span>  <a href="javascript:void(0);" class="text-primary">@lang('home.privacy_policy')</a></label>
										</div>
									</div>
								<button type="submit" class="btn btn-primary rounded-0 themebg_dark text-uppercase">@lang('home.Signup')</button>
									<div class="col-5">
										<div class="forgot_pass">
											<p href="javascript:void(0);" class="ml-3 text-right"><span class="text-muted">@lang('home.content7')  </span> <a href="javascript:void(0);" data-dismiss="modal" data-toggle="modal" data-target="#login_modal">@lang('home.Login')</a></p>
										</div>
									</div>
								</div>
								
							</div>
						</div></form>
						<div class="modal-footer d-none">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
		<!-- / login modal ends here -->

		<!-- The Forgot Modal -->
		  <div class="modal fade" id="forgot_modal">
		    <div class="modal-dialog modal-dialog-centered">
		      <div class="modal-content">
		        <!-- Modal body -->
		        <div class="modal-body">
		          	<div class="modal-body">
						<div class="theForm_wrap">
							<h3 class="text-center base_color">@lang('home.content22')</h3>
							<form  class="mt-4" id="resetPassword" method="POST">
							<span class="text-danger wrong-credentials"></span>
								<div class="form-group">
									<input type="text" name="email" id="resetEmail" class="form-control rounded-0" placeholder="@lang('home.content10')"><span class="text-danger"></span>
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
								</div>								
								<div class="text-center pt-3">
									<button type="submit" class="btn btn-primary rounded-0 themebg_dark text-uppercase">@lang('home.submit')</button>
								</div>
								<p class="mt-3 mb-4 text-center"><span class="text-muted">@lang('home.content7')</span> <a href="javascript:void(0);" data-dismiss="modal" data-toggle="modal" data-target="#login_modal">@lang('home.Login')</a> </p>
							</form>
						</div>
					</div>
		        </div>		        
		      </div>
		    </div>
		  </div>
		  <!-- The Forgot Modal end -->
		<!-- jQuery -->
		
		
	
		<!-- owl carousel js -->
		<script src="{{ asset('public/owl_carousel/owl.carousel.min.js') }}"></script>
		<!-- Bootstrap JavaScript -->
		<script src="{{ asset('public/js/popper.min.js') }}"></script>
		<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('public/js/manual.js') }}"></script>
		
		<script>
		//Role
		$('.roletype').click(function(){
			var role;
			var href = $(this).attr('href');
				role = $(".custom-control-input:checked").val();
				if(role){
				$.ajax({
					type:"GET",
					url:'{{url("/ajaxRequest")}}?role=' + role,
					success: function(response){
							if(response == 1){
								window.location.href=href;
							}else{
								alert('No response from server');
							}
						},
					error: function(xhr, status, error) {
					var err = eval("(" + xhr.responseText + ")");
					alert(err.Message);
					}
				});
				}else{
					$('.role-error').show();
				}
			return false; 
		});
		// Reset Password 
		$('#resetPassword').submit(function(){
			 $.ajax({
					type:"POST",
					url:'{{url("/resetTokenPssword")}}',
					data:$("#resetPassword").serialize(),
					success: function(response){
							if(response.email){
								$('#resetEmail').next('.text-danger').show().html(response.email);
							}
							if(response.exist){
								$('#resetEmail').next('.text-danger').show().html(response.exist);
							}else{
               // $('#login_modal').modal('show');
							}
						},
					error: function(xhr, status, error) {
						alert("Server Error,Try Again");
					}
  		});
			return false;
		});
		$('#submit_reset').submit(function(){
			$.ajax({
            type:"POST",
            url:'{{url('/resetPasswordSubmit')}}',
            data:$("#submit_reset").serialize(),//only input
            success: function(response){
							if(response.password){
									$('#resetPassErr').html(response.password);
							}else{
								$('#login_modal').modal('show');
							}
            }
        });
			return false;
		});



		// Signup Code
		$('#signup_form').submit(function(){
			$.ajax({
            type:"POST",
            url:'{{url('/signup')}}',
            data:$("#signup_form").serialize(),//only input
            success: function(response){
				if(response == 1){
					$('#signup_modal').modal('hide');
					window.location.href="{{url('/')}}";
				}else{
				$("input[type=text],[type='password'],[type='checkbox'],[type='radio']").each(function(){
					tbx = $(this);
					var form_name = $(this).attr('name');
					$.each(response, function( index, value ) {
						if(form_name == index){
							tbx.next('.text-danger').show().html(value);
						}
						if(index == 'role'){
						$('.role-error').show();
						}else{
							$('.role-error').hide();
						}
					});
				});
			}
            }
        });
			return false;
		});

		// Login Code
		$('#user_signing').submit(function(){
			var previous = $('#previous').val();
			$.ajax({
				type:"POST",
				url:'{{url('/userlogin')}}',
				data:$("#user_signing").serialize(),//only input
				success: function(response){
					if(response.csrf == 999){
						$('#login_csrf').val(response.csrf_val);
						alert("Please Try Again");
					}
					if(response == 2){
						$('.wrong-credentials').html("Wrong Username Or Password");
					}else if(response == 1){
						$('#signup_modal').modal('hide');
						window.location.href=previous;
					}else if(response == 0){
						window.location.href="{{url('/adminDashboard')}}";
					}else{
						$("input[type=text],[type='password']").each(function(){
							tbx = $(this);
							var form_name = $(this).attr('name');
							$.each(response, function( index, value ) {
								if(form_name == index){
									tbx.next('.text-danger').show().html(value);
								}
							});
						});
					}
				}
			});
			return false;
		});
		// End - Login Code
		$("input[type=text]").attr("autocomplete","nope");
		$("input[type=text],[type='password'],[type='checkbox'],textarea").click(function(){
			$(this).next('.text-danger').hide();
		});
		
		// Sport Club Page Js
$('#addSport').click(function(){
	
	var data_val = $(this).attr('data_val');
	if(data_val == 'clubform'){
		$('#previous').val("{{url('/clubform')}}");
	}
  $.ajax({
					type:"GET",
					url:'{{url("/ajaxRequest")}}?checkLogin',
					success: function(response){
							if(response == 1){
								if(data_val == 'clubform'){
									window.location.href="{{ url('/') }}/clubform";
								}
								$('#blogModal').modal('show');
							}else{
                $('#login_modal').modal('show');
							}
						},
					error: function(xhr, status, error) {
					var err = eval("(" + xhr.responseText + ")");
					alert(err.Message);
					}
  });
  return false;
});
$('#search_camp').click(function(){

	var page_value = $('#page_value').val(); 
  var age_group = $('#age_group').val();
  var camp_name = $('#camp_name').val();
  var location = $('#location').val();
  var _token = $('#_token').val();
  if($("#customRadioInline1").is(":checked")){
    var gender = $("#customRadioInline1").val();
  }else  if($('#customRadioInline2').is(":checked")){
    var gender = $("#customRadioInline2").val();
  }else{
    var gender = '';
  }
  $.ajax({
					type:"POST",
					url:"{{url('/searchCamp')}}",
          data: {
            age_group : age_group,
            camp_name : camp_name,
            location  : location,
            gender    : gender,
						page_value : page_value,
            _token    : _token
          },
					success: function(response){
							if(response){
                $('#related_search').html(response);
							}else{
                $('#related_search').html("No related Search");
							}
						},
					error: function(xhr, status, error) {
					var err = eval("(" + xhr.responseText + ")");
					//alert(err.Message);
					}
  });
});

// Blog Detail Comment Page

$('#submit_commnt').submit(function(){
		$.ajax({
			url: "{{url('/blogComments')}}",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
		success: function(data){
			if(data == 1){
				$(function () {
					toastr.success(" @lang('static.static30') ");
				});
			}else{
				$(function () {
					toastr.success("Please Try Again ");
				});
			}
		},
		error: function(){

		}       
		});
	return false;
});


$('.devplr_cls').submit(function(){
	var thiss = $(this);
		$.ajax({
			url: "{{url('/blogComments')}}",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
		success: function(data){
			if(data == 1){
				thiss.closest('.comment_form').toggle();
				$(function () {
					toastr.success(" @lang('static.static30') ");
				});
			}else{
				$(function () {
					toastr.success("Please Try Again ");
				});
			}
		},
		error: function(){

		}       
		});
	return false;
});







// Header Flag Js
	if('{{ Lang::locale() }}' == 'it'){
		$('#flag_1').html('<a href="locale/it" class="d-inline-block flag_event" ><img src="{{ asset('public/images/italian.png') }}" alt="" width="30" ><span class="base_color fz20 ml-2 align-middle">IT</span></a>');
		$('#flag_2').html('<a href="locale/en" class="d-inline-block"><img src="{{ asset('public/images/english.png') }}" alt="" width="30" class="flag_ln"><span class="base_color fz20 ml-2 align-middle">EN</span></a>');
	}else{
		$('#flag_1').html('<a href="locale/en" class="d-inline-block"><img src="{{ asset('public/images/english.png') }}" alt="" width="30" class="flag_ln"><span class="base_color fz20 ml-2 align-middle">EN</span></a>');
		$('#flag_2').html('<a href="locale/it" class="d-inline-block flag_event" ><img src="{{ asset('public/images/italian.png') }}" alt="" width="30" ><span class="base_color fz20 ml-2 align-middle">IT</span></a>');
	}
		</script>
	</body>
</html>