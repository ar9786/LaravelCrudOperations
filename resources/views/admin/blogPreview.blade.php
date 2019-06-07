@include('admin.include.adminHeader')

    <!-- right sidebar statrs here -->
    <div class="right_sidebar">
        <div class="right_content">
        	<section class="view_detail mb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col_selector">
						<div class="card">
							<div class="content_center mb-5">
								<div class="card-body clearfix">
					  				<div class="clearfix">
					  					<p class="pull-left fz20 title_card">{{ $data['blogData']['title'] }}<span class="date fz13">{{ $data['blogData']['email'] }}</span></p>
					  			  		<p class="pull-right fz14">{{ date('M,d Y',strtotime($data['blogData']['created_at'])) }}</p>
					  				</div>
							    	<h5 class="card-title pt-5 pb-2 mb-0">Technology</h5>
							    	<p class="card-text text-justify mt-2">{{ $data['blogData']['content'] }}</p>
						  		</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		</section> 	
      </div>
    </div>
    <!-- / right sidebar ends here -->
@include('admin.include.adminFooter')
<script>
	$(document).ready(function(){
		$(".reply_btn").click(function(){
			$(this).siblings(".comment_form").slideToggle(500);
		});
	});
</script>