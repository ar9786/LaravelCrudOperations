@include('include.header')
	<div class="thejumbotron pagebanner">
	  <div class="jumbo_img_wrapper">
	    <img src="{{ asset('public/images/howitworks_banner.jpg') }}" alt="Slide Img" class="img-fluid main_banner">
	  </div>
	  <div class="page_name_wrap">
	    <div class="page_name_data">
	      <h3 class="text-uppercase">Find Your Camp Or Clinic</h3>
	    </div>
	  </div>
	</div>
	<!-- / the jumbotron ends here -->
	<section class="view_detail mb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col_selector">
						<div class="card">
							<div class="content_center mb-5">
								<div class="card-body clearfix">
						  			<div class="clearfix">
					  					<p class="pull-left fz20 title_card">{{ $data['blogData']['first_name'] }} <span class="date fz13">{{ $data['blogData']['email'] }}</span></p>
					  			  		<p class="pull-right fz14">{{ date('M,d Y',strtotime($data['blogData']['created_at'])) }}</p>
					  				</div>
							    	<h5 class="card-title pt-5 pb-2 mb-0">{{ $data['blogData']['title'] }}</h5>
									<p class="card-text text-justify mt-2">{{ $data['blogData']['content'] }}</p>
							    	
							    	
							    	
						  		</div>
							</div>

							<!-- new comment  -->
							<div class="newComment">
								<form id="submit_commnt">
									<textarea name="msg" rows="5" class="form-control" placeholder="Write a comment..."></textarea>
									<input type="hidden" name="blog_id" value="{{ $data['blogData']['id'] }}">
									<input name="_token" type="hidden" value="{{ csrf_token() }}">
									<button type="submit" class="btn btn-primary">Post Comment</button>
								</form>
							</div>
							<!-- / new comment  -->
							
							<div class="content_comment pl-3 pr-3">
								<h3 class="comment_title mb-4">Comments</h3>
								@foreach($data['comments'] as $val)
								<div class="comment_single pt-3 pb-3">
									<img src="https://via.placeholder.com/70x70" alt="" class="rounded-circle user_thumb">
									<div class="more_comment">
										<div class="comment_user_info">
											<h4 class="comment_name">{{ $val['first_name'] }}</h4>
											<span class="comment_designation">{{ $val['email'] }}</span>
										</div>
										<p class="mt-3">{{ $val['msg'] }}</p>
										@if($val['nested'])
										@foreach($val['nested'] as $nested)
										<div class="comment_reply">
											<div class="comment_user_info">
												<h4 class="comment_name">{{ $nested['first_name'] }}</h4>
												<span class="comment_designation">{{ $nested['email'] }}</span>
											</div>
											<p class="mt-3">{{ $nested['msg'] }}</p>
										</div>
										@endforeach
										@endif
										<div class="reply_comment">
											<a href="javascript:void(0);" class="btn btn-primary reply_btn mb-3"><span class="fa fa-reply"></span> Reply</a>
											<div class="comment_form mb-4">
												<form id="comt" class="devplr_cls">
													<div class="form-group">
													<input type="hidden" name="blog_id" value="{{ $val['id'] }}">
													<input type="hidden" name="posted_id" value="{{ $val['commt_id'] }}">
									<input name="_token" type="hidden" value="{{ csrf_token() }}">
														<textarea name="msg" placeholder="Comment" cols="30" class="form-control" rows="10"></textarea>
													</div>								
													<button type="submit" class="btn btn-primary submit_btn ">Submit</button>
												</form>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@include('include.footer')
<script>
	$(document).ready(function(){
		$(".reply_btn").click(function(){
			$(this).siblings(".comment_form").slideToggle(500);
		});
	});
</script>