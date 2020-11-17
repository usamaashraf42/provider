@extends('layouts.app')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
	<div class="kt-subheader-search ">
		
	</div>
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		
		<div class="kt-portlet kt-portlet--mobile">
			<div class="kt-portlet__head kt-portlet__head--lg">
				<div class="kt-portlet__head-label">
					<span class="kt-portlet__head-icon">
						<i class="kt-font-brand flaticon2-line-chart"></i>
					</span>
					<h3 class="kt-portlet__head-title">
					All Users
					</h3>
				</div>
				<div class="kt-portlet__head-toolbar">
					<div class="kt-portlet__head-wrapper">
						<div class="kt-portlet__head-actions">
							<div class="dropdown dropdown-inline">
								
							</div>
							&nbsp;
							
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<table class="table  table-hover  text-center" id="myTable">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<td>Full Name</th>
							<th>Email</th>
							<th>Phone Number</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					@php
					$count=1
					@endphp
						@foreach($user as $cat)
						<tr>
							<td scope="row">{{$count++}}</td>
							<td>{{$cat->fullname}}</td>
							<td>{{$cat->email}}</td>
							<td>{{$cat->phone}}</td>
						
					
							<td>
								 @if($cat->status==0)
                                               <button type="button" class="btn waves-effect waves-light  btn-primary button-status" data-id="{{$cat->id}}"><i class="fa fa-check-circle" rel="tooltip" title="Activate"></i></button>
                                              @else
                                               <button type="button" class="btn waves-effect waves-light  btn-primary button-status" data-id="{{$cat->id}}"><i class="fa fa-ban" rel="tooltip" title="Deactivate"></i></button>

                                              @endif
                                              <!-- <button class="button-status" data-id="{{$cat->id}}" data-toggle="tooltip" title="Activate"><i style="color: blue" class="fas fa-ban fa-2x "></i></button> -->
								&nbsp 
							<button type="button" class="btn waves-effect waves-light  btn-danger del-button" data-id="{{$cat->id}}"><i class="fas fa-trash-alt fa-2x"></i></button>
						</td>

							@endforeach
						</tr>
					</tbody>
				</table>
				<!--end: Datatable -->
			</div>
		</div>
	</div>
	<!-- end:: Content -->
</div>
@push('scripts')
<script type="text/javascript">
$(document).ready( function () {
    $('#myTable').DataTable();
} );
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});

$(document).ready(function(){
   $(document).on('click','.button-status',function(){
           		
             var id = $(this).data("id");

             bootbox.confirm("Do you really want to change the status?", function(getresult) {
               if(getresult){
              $.ajax({
                url:"{{url('worker/status')}}/"+id,
                method : 'get',
                
                success: function(result){

                  if(result.status == 0){
                    bootbox.alert({
          title: "Message",
          message:result.message,
          callback: function(){
              window.setTimeout(function(){location.reload()},2000);

}
});
                  }
                  else{
        
                    bootbox.alert({
              title: "Message",
              message:result.message,
              callback: function(){
               //window.setTimeout(function(){location.reload()},1000)
              }
              });
                  }
                }});
              }
              });
            });
      });
	
$(document).ready(function(){
   $(document).on('click','.del-button',function(){
           		var el=this;
            var token = $("meta[name='csrf-token']").attr("content");
             var id = $(this).data("id");

             bootbox.confirm("Do you really want to delete record?", function(getresult) {
               if(getresult){
              $.ajax({
                url:"{{ url('worker/delete')}}/"+id,
                method : 'post',
                data: { id: id,
                  "_token": token,
                 },
                success: function(result){

                  if(result.status == 0){
                    bootbox.alert({
          title: "Message",
          message:result.message,
          callback: function(){
              window.setTimeout(function(){location.reload()},2000);

}
});
                  }
                  else{
                  	// $(el).closest('tr').css('background','tomato');
                   //  $(el).closest('tr').fadeOut(800,function(){
                   //  $(this).remove();
                   //  });
      
                    bootbox.alert({
              title: "Message",
              message:result.message,
              callback: function(){
               //window.setTimeout(function(){location.reload()},1000)
              }
              });
                  }
                }});
              }
              });
            });
      });
	
</script>

@endpush

@endsection