@include('include.header')
  <!-- the jumbotron starts here -->
  <div class="thejumbotron pagebanner">
    <div class="jumbo_img_wrapper">
      <img src="{{ asset('public/images/howitworks_banner.jpg') }}" alt="Slide Img" class="img-fluid main_banner">
    </div>
    <div class="page_name_wrap">
      <div class="page_name_data">
        <h3 class="text-uppercase">@lang('home.find_your_cc')</h3>
      </div>
    </div>
  </div>
  <!-- / the jumbotron ends here -->

 @include('include.filterCamp')
 
  <!-- // multiple games  -->
  <div class="multiple_games pt-5 pb-5">
    <div class="container">
      <div class="row">
      <div id="related_search"></div>
      </div>
      <div class="col_selector">
        <div class="sports_selected mb-5">
          <span>@lang('static.static27')</span>
        </div>
      </div>
      @if(count($fetch_clubs) > 0 && isset($fetch_clubs))
      <div class="row" id="grid">
      @foreach ($fetch_clubs as $data)
        <div class="col-12 col-md-4">
          <div class="col_selector Tournament_images mb-5">
            <div class="img_seperation">
              <img src="{{ asset('public/site_images/'.$data['image_video']) }}" class="img-fluid w-100 img_tournamt_seperation" alt="{{ $data['camp_name'] }}">
            </div>
            <div class="image_text text-center p-3 w-100">
              <h4 class="mb-0"><a href='{{url("/sport-detail?sport_id=$data[id]")}}' class="d-block">{{ $data['camp_name'] }}</a></h4>
            </div>
          </div>
        </div>
        @endforeach
        @else
        <p>No Active Records</p>
        @endif
        </div>
        <div class="row">
        <input type="hidden" id="load_more" record_index="3" value=""/>
          <div class="col-12 col-md-4 load">
           
          </div>
        </div>
      </div>
    </div>
  </div>
@include('include.footer')
<script>
$(window).scroll(function(){
if ($(window).scrollTop() == $(document).height() - $(window).height()){
  loadMore();
}
});
function loadMore(){
  var pageNumber = $('#load_more').attr('record_index');
    $.ajax({
        type : 'GET',
        url: '{{ url("/athelets_club")}}?pageNumber='+pageNumber,
        success : function(data){
                if(data.html == 0){
                  $('.load').html("No more Data");
                }else{
                  pageNumber = parseInt(pageNumber) +  parseInt(3);
                    $('#grid').append(data.html);
                    $('#load_more').attr('record_index',pageNumber)
                }
        },error: function(data){

        },
    });
}
</script>