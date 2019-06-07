@include('admin.include.adminHeader')

    <!-- right sidebar statrs here -->
    <div class="right_sidebar">
        <div class="right_content">
        	<section class="blogs mb-5">
        	    <div class="container">
                    <h1 class="text_heading fz50 pt-5 pb-5 text-center m-0">@lang('static.static29')</h1>
        	      <div class="row">
								@if(count($data['blogData']) > 0)
        @foreach ($data['blogData'] as $value)
          <div class="col-md-4">
            <div class="col_selector mb-4">
              <div class="card">
                <div class="card-body clearfix">
                	<div class="clearfix">
                		<p class="pull-left fz20 title_card">{{ $value['title'] }} <span class="date fz13">{{ $value['title'] }}</span></p>
                  	<p class="pull-right fz14">{{ date('M-d,Y',strtotime($value['created_at'])) }}</p>
                	</div>
                  <h5 class="card-title pt-5 pb-2 mb-0 text-left">Technology</h5>                  
                  <p class="card-text text-justify mt-3">
                  {{ substr($value['content'],0,200) }}...
                  </p>
                  <a href='{{url("/").'/blogManagment/'.$value["id"] }}' class="btn btn-primary pull-right view_details">View Details</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        @else
        <p> No Post Published</p>
        @endIf
        	        
                </div>
        	      </div>
        	    </div>
        	</section> 	
        </div>
    </div>
    <!-- / right sidebar ends here -->
@include('admin.include.adminFooter')