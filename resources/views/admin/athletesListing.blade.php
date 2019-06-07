@include('admin.include.adminHeader')

    <!-- right sidebar statrs here -->
    <div class="right_sidebar">
        <div class="right_content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="search-filter">
                            <input type="text" id="search_box" class="form-control" Placeholder="Search By Name/Email/Postal"/>                            
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <select id="drop_dwn"  class="form-control">
                            <option value="#">All</option>
                            <option value="first_name">Name</option>
                            <option value="email">Email</option>
                            <option value="postal_code">Postal Code</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive mt-3">
            
                    <div id="tag_container">
                         @include('admin/include/athletLstng')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / right sidebar ends here -->
@include('admin.include.adminFooter')
<script>
$('#drop_dwn').change(function(){
    var dropdw_value = $(this).val();
    var search_value = $('#search_box').val();
    $.ajax({
            url: '{{ url("/athletesListing")}}?dropdw_value=' + dropdw_value + '&search_value=' +search_value,
            type: "get",
            datatype: "html"
        }).done(function(data){
            $("#tag_container").empty().html(data);
        }).fail(function(jqXHR, ajaxOptions, thrownError){
              alert('No response from server');
        });
});

$(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            }else{
                getData(page);
            }
        }
    });
$(document).ready(function(){
     $(document).on('click', '.pagination a',function(event){
        event.preventDefault();
        $('li').removeClass('active');
        $(this).parent('li').addClass('active');
        var myurl = $(this).attr('href');
        var page=$(this).attr('href').split('page=')[1];
        getData(page);
    });
});
function getData(page){
        $.ajax(
        {
            url: '{{ url("/athletesListing")}}?page=' + page,
            type: "get",
            datatype: "html"
        })
        .done(function(data){
            $("#tag_container").empty().html(data);
            location.hash = page;
        })
        .fail(function(jqXHR, ajaxOptions, thrownError){
              alert('No response from server');
        });
}
</script>