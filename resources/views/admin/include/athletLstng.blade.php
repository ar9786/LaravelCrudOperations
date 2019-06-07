@if(count($athletes) > 0)
<table class="table table-bordered table-striped">
    <thead>
        <tr>
        <th scope="col">S.NO</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Created</th>
        <th scope="col">Status</th>
        <th scope="col">View</th>
        </tr>
    </thead>
    <tbody>
    <?php $cnt = 1; ?>
    @foreach ($athletes as $data)
        <tr data-id="{{ $data->id }}" data-value="{{ $data->status }}">
        <th scope="row">{{ $cnt }}</th>
        <td>{{$data->first_name}}</td>
        <td>{{$data->last_name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->phone_no}}</td>
        <td>{{date('d-M-Y',strtotime($data->created_at))}}</td>
        <td>@if ($data->status == 1 ) <button  type="button" class="btn btn-success changeStatus"><i class="fa fa-edit"></i> Active </button> @else <button  type="button" class="btn btn-danger changeStatus"> <i class="fa fa-edit"></i>  Inactive</button> </button>@endif</td>
        <td><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye view_user"></i></td>
        </tr>
        <?php $cnt++; ?>
    @endforeach
    </tbody>
</table>
<div class="modal fade" id="myModal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
          <h4 class="modal-title">Detail</h4>
        </div>
        <div class="modal-body" id="athlete_detail">
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
{!! $athletes->render() !!} 
@else
    <p>No Active Records</p>
 @endif
 @include('admin.include.adminFooter')
 
<script type="text/javascript">
$('table tbody tr').on('click',".changeStatus",function(){
    var this_value = $(this);
    var id = $(this).parents('tr').attr('data-id');
    var value = $(this).parents('tr').attr('data-value');
    $.ajax(
        {
			
            url: '{{url("/athletesListing")}}?id='+id+'&value='+value,
            type: "get",
            datatype: "html"
        })
        .done(function(data){
          //  console.log(data);
            if(data == 0){
                $(this_value).parents('tr').attr('data-value',data);
                $(this_value).removeClass("btn-success").addClass("btn-danger").html('<i class="fa fa-edit"></i> Inactive');
            }else{
                $(this_value).parents('tr').attr('data-value',data);
                $(this_value).removeClass("btn-danger").addClass('btn-success').html('<i class="fa fa-edit"></i> Active');
            }
        })
        .fail(function(jqXHR, ajaxOptions, thrownError){
              alert('No response from server');
        });
});

$('.view_user').click(function(){
    var this_value = $(this);
    var id = $(this).parents('tr').attr('data-id');
    $.ajax({
        url: '{{url("/athletesListing")}}?id='+id+'&viewProfile=1',
				type : 'get',
				dataType : 'json',
				success : function(msg){
                $('#athlete_detail').html('<table class="table table-dark"><thead><tr><th scope="col"></th><th scope="col"></th></tr></thead><tbody><tr><th scope="row">First Name</th><td>'+ msg[0].first_name+'</td></tr><tr><th scope="row">Last Name</th><td>'+ msg[0].last_name+'</td></tr><tr><th scope="row">Postal Code</th><td>'+ msg[0].postal_code+'</td></tr><tr><th scope="row">Contact Number</th><td>'+ msg[0].phone_no+'</td></tr><tr><th scope="row">Email</th><td>'+ msg[0].email+'</td></tr><tr><th scope="row">Created On</th><td>'+ msg[0].created_at+'</td></tr></tbody></table>');
				},
				error: function(msg){
					alert('No response from server');
				}
	});
});

</script>