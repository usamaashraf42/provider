@extends('layouts.app')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
	<div class="kt-subheader-search ">
		
k	</div>
	<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<div class="row">
			<div class="col-lg-6">
				<!--begin::Portlet-->
				<div class="kt-portlet">
					<div class="kt-portlet__head">
						<div class="kt-portlet__head-label">
							<h3 class="kt-portlet__head-title">
							Add Category
							</h3>
						</div>
					</div>
					
					<!--begin::Form-->
					<form class="kt-form" method="POST" action=" {{url('admin/savecategory')}} " id="category-form" enctype="multipart/form-data">
						{!! csrf_field() !!}
						<div class="kt-portlet__body">
							<div class="kt-section kt-section--first">
								<div class="form-group">
									<label>Category Name:</label>
									<input type="text" class="form-control" placeholder="" value="{{@$categories->name}}" name="name">
									<span class="form-text  name_error" style="font-size: 16px;color: red;"></span>
								</div>
								<div class="form-group">
									<label>Add Image</label>
									<div>
										<img src="@if(@$categories){{url('project_assets/category/images/'.@$categories->image)}} @else{{asset('project_assets/category/images/no-image.jpg')}} @endif" class="rounded-circle z-depth-1-half avatar-pic"  height="120px" width="120px" id="avatar" style="border-radius: 15px 50px;
										
										padding: 10px;">
										</div>
									
									
									<input type="file" id="image" name="image" class="form-control">
									<span class="form-text  image_error" style="font-size: 16px;color: red;"></span>
									
								</div>
								
								
							</div>
						</div>
						<div class="kt-portlet__foot">
							<div class="kt-form__actions">
								@if(@$categories)
								<button id="product-form" type="submit"class="btn btn-primary update">Update</button>
								@else
								<button class="btn btn-primary">Add</button>
								@endif
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
		document.getElementById("image").onchange = function () {
var reader = new FileReader();
reader.onload = function (e) {
// get loaded data and render thumbnail.
document.getElementById("avatar").src = e.target.result;
};
// read the image file as a data URL.
reader.readAsDataURL(this.files[0]);
};
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
url: "{{ url('/admin/savecategory') }}",
method : 'post',
data: formData,
contentType: false,
cache: false,
processData: false,
success: function(result){
if(result.success==0){
if(result.validation==0){
if(result.message.name)
{
$('.name_error').html(result.message.name[0]);
}else{
$('.name_error').html('');
}
if(result.message.image)
{
$('.image_error').html(result.message.image[0]);
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
$('.image_error').html('');
$('#avatar').html('');
// $('.show_image').css('display','none');
}
});
}
}});
});

});


                 

              //   jQuery('#product-form').submit(function(e){
              //     e.preventDefault();
              //     $.ajaxSetup({
              //       headers: {
              //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
              //       }
              //     });
              //     var myForm = document.getElementById('product-form');
              //     var formData = new FormData(myForm);
              //       jQuery.ajax({
              //         url: "{{ url('update/{id}') }}",
              //         method : 'post',
              //         data: formData,
              //         contentType: false,
              //          cache: false,
              //          processData: false,
              //         success: function(result){
              //           if(result.success==0){
              //             if(result.validation==0){
              //               if(result.message.title)
              //               {
              //                 $('.title_error').html(result.message.title[0]);
              //               }
              //              if(result.message.image)
              //               {
              //                 $('.image_error').html(result.message.image[0]);
              //               }
              //               if(result.message.price)
              //               {
              //                 $('.price_error').html(result.message.price[0]);
              //               }
              //               if(result.message.description)
              //               {
              //                 $('.description_error').html(result.message.description[0]);
              //               }

              //             }
              //           }
                        
              //           else{
              //             bootbox.alert({
              //   title: "Message",
              //   message:result.message,
              //   callback: function(){
              //      $("#category-form").trigger("reset");
              //                 $('.image_error').html('');
              //                 $('.category_error').html('');
              //                 $('.show_image').css('display','none');
              //   }   
              // });


              //           }
              //         }});
              //     });

                 
                 // Update record
// $(document).on("click", ".update" , function() {
//   var edit_id = $(this).data('id');

//   var name = $('#name_'+edit_id).val();
//   var image = $('#image_'+edit_id).val();

//   if(name != '' && email != ''){
//     $.ajax({
//       url: "{{url('update')}}"/+id,
//       type: 'post',
//       data: {_token: CSRF_TOKEN,editid: edit_id,name: name,email: email},
//       success: function(response){
//         alert(response);
//       }
//     });
//   }else{
//     alert('Fill all fields');
//   }
// });


           
		
	
</script>
@endpush

@endsection