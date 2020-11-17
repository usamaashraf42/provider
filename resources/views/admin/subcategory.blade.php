@extends('layouts.app')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
	<div class="kt-subheader-search ">
		
	</div>
	<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<div class="row">
			<div class="col-lg-6">
				<!--begin::Portlet-->
				<div class="kt-portlet">
					<div class="kt-portlet__head">
						<div class="kt-portlet__head-label">
							<h3 class="kt-portlet__head-title">
							Add Subcategory
							</h3>
						</div>
					</div>
					<!--begin::Form-->
					<form class="kt-form" action="{{url('admin/savesubcategory')}}" method="POST" id="category-form" enctype="multipart/form-data">
						{!! csrf_field() !!}
						<div class="kt-portlet__body">
							<div class="kt-section kt-section--first">
								<div class="form-group">
									<label>Select Main Category</label>
									<select class="form-control" name="category_id">
										<option>
											--Select Main Category--
										</option>
										@foreach($category_list as $list)
										<option value="{{$list->id}}">{{$list->name}}</option>
										@endforeach
									</select>
									<span class="form-text  category_error" style="font-size: 16px;color: red;"></span>
								</div>
								<div class="form-group">
									<label>Subcategory Name:</label>
									<input type="text" class="form-control" placeholder="" name="name">
									<span class="form-text  name_error" style="font-size: 16px;color: red;"></span>
								</div>
								<div class="form-group">
									<label>Price:</label>
									<input type="text" class="form-control" placeholder="" name="price">
									<span class="form-text  price_error" style="font-size: 16px;color: red;"></span>
								</div>
								
								
								
							</div>
						</div>
						<div class="kt-portlet__foot">
							<div class="kt-form__actions">
								<button type="submit" class="btn btn-primary">Submit</button>
								<button type="reset" class="btn btn-secondary">Cancel</button>
							</div>
						</div>
					</form>
					<!--end::Form-->
				</div>
				<!--end::Portlet-->
				<!--begin::Portlet-->
				
				<!--end::Portlet-->
			</div>
			
		</div>
	</div>
	<!-- end:: Content -->
</div>
@push('scripts')
<script type="text/javascript">
	$(document).ready(function(){
$('#category-form').submit(function(e){
e.preventDefault();
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
}
});
var myForm = document.getElementById('category-form');
var formData = new FormData(myForm);
$.ajax({
url: "{{ url('/admin/savesubcategory') }}",
method : 'post',
data: formData,
contentType: false,
cache: false,
processData: false,
success: function(result){
if(result.success==0){
if(result.validation==0){
if(result.message.category_id)
{
$('.category_error').html(result.message.category_id[0]);
}
if(result.message.name)
{
$('.name_error').html(result.message.name[0]);
}else{
$('.name_error').html('');
}
if(result.message.price)
{
$('.price_error').html(result.message.price[0]);
}
}
}
else{
bootbox.alert({
title: "Message",
message:result.message,
callback: function(){
$("#category-form").trigger("reset");
$('.name_error').html('');
$('.category_error').html('');
$('.price_error').html('');
// $('.show_image').css('display','none');
}
});
}
}});
});
});
		
	
</script>
@endpush
@endsection