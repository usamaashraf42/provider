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
					All Categories
					</h3>
				</div>
				<div class="kt-portlet__head-toolbar">
					<div class="kt-portlet__head-wrapper">
						<div class="kt-portlet__head-actions">
							<div class="dropdown dropdown-inline">
								
							</div>
							&nbsp;
							<a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
								<i class="la la-plus"></i>
								New Record
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<table class="table  table-hover  text-center" id="myTable">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th>Category Name</th>
							<th>Subcategory Name</th>
							<th>Status</th>
							<th>Price</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@php
						$count=1;
						@endphp
						@foreach($subcategories as $cat)
						<tr>
							<td scope="row">{{$count++}}</td>
							<td>{{$cat->category->name}}</td>
							<td>{{$cat->name}}</td>
							<td>{{$cat->status}}</td>
							<td>{{$cat->price}}</td>
							<td><a href="{{url('subcategory/edit/'.$cat->id)}}" class="btn btn-info btn-sm" title="">Edit</a> | <button  data-id="{{$cat->id}}" class=" btn btn-danger btn-sm del-button" title="">Delete</button></td>

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
// 
$(document).ready(function(){
   $(document).on('click','.del-button',function(){
           		var el=this;
            var token = $("meta[name='csrf-token']").attr("content");
             var id = $(this).data("id");
             bootbox.confirm("Do you really want to delete record?", function(getresult) {
               if(getresult){
              $.ajax({
                url:"{{ url('subcategory/delete')}}/"+id,
                method : 'post',
                data: { id: id,
                  "_token": token,
                 },
                success: function(result){

                  if(result.success == 0){
                    bootbox.alert({
          title: "Message",
          message:result.message,
          callback: function(){
              //window.setTimeout(function(){location.reload()},2000);

}
});
                  }
                  else{
                  	$(el).closest('tr').css('background','tomato');
                    $(el).closest('tr').fadeOut(800,function(){
                    $(this).remove();
                    });
      
                    bootbox.alert({
              title: "Message",
              message:result.message,
              callback: function(){
               window.setTimeout(function(){location.reload()},1000)
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