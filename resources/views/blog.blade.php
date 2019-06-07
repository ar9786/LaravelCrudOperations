@include('include.header')
  <div class="thejumbotron pagebanner">
    <div class="jumbo_img_wrapper">
      <img src="{{ asset('public/images/howitworks_banner.jpg') }}" alt="Slide Img" class="img-fluid main_banner">
    </div>
    <div class="page_name_wrap">
      <div class="page_name_data">
        <h3 class="text-uppercase">Blogs</h3>
      </div>
    </div>
  </div>
  <!-- / the jumbotron ends here -->
  
  <!-- // multiple games  -->
  <div class="multiple_games pt-5 pb-5">
    <div class="container">
      <div class="add_sport text-center mb-5">
        <button class="btn btn-primary pt-2 pb-2 add_camp_clinic_btn" data-toggle="modal" data-target="#blogModal" id="addSport">@lang('static.static28')</button>
      </div>
      <!-- The Modal -->
        <div class="modal fade" id="blogModal">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Share your Experience</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="modal-body">
                <form action="{{ url('/postSubmission') }}" method="POST">
                  <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <input type="text" name="keyword" class="form-control" placeholder="Keywords">
                  </div>
                  <div class="form-group">
                    <input type="text" name="description" class="form-control" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Content"></textarea>
                  </div>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>              
            </div>
          </div>
        </div>
    </div>
  </div>
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
                  <a href='{{url("/").'/blog/'.$value["blog_url"] }}' class="btn btn-primary pull-right view_details">View Details</a>
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
    </section>
@include('include.footer')
<link href="{{ asset('public/css/summernote.css') }}" rel="stylesheet">
<script src="{{ asset('public/js/summernote.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#content').summernote();
    });
</script>
