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
							Update Category
							</h3>
						</div>
					</div>
					
					<!--begin::Form-->
					<form class="kt-form" id="update-form"  enctype="multipart/form-data">
						@csrf
						<div class="kt-portlet__body">
							<div class="kt-section kt-section--first">
								<div class="form-group">
									<input type="hidden" name="id" value="{{$categories->id}}">
									<label>Category Name:</label>
									<input type="text" class="form-control" placeholder="" value="{{$categories->name}}" name="name">
									<span class="form-text  name_error" style="font-size: 16px;color: red;"></span>
								</div>
								<div class="form-group">
									<label>Add Image</label>
									<div>
										<img src="@if($categories){{url('project_assets/category/images/'.@$categories->image)}} @else{{asset('project_assets/category/images/no-image.jpg')}} @endif" class="rounded-circle z-depth-1-half avatar-pic"  height="120px" width="120px" id="avatar" style="border-radius: 15px 50px;
										
										padding: 10px;">
										</div>
									
									
									<input type="file" id="image" name="image" class="form-control">
									<span class="form-text  image_error" style="font-size: 16px;color: red;"></span>
									
								</div>
								
								
							</div>
						</div>
						<div class="kt-portlet__foot">
							<div class="kt-form__actions">
								
								<input type="submit" value="Update" class="btn btn-primary update">								
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
				jQuery('#update-form').submit(function(e){
                  e.preventDefault();
                  $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                  });
                  var myForm = document.getElementById('update-form');
                  var formData = new FormData(myForm);
                    jQuery.ajax({
                      url: "{{ url('category/update') }}",
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
                   $("#update-form").trigger("reset");
                              $('.image_error').html('');
                              $('.category_error').html('');
                              $('.show_image').css('display','none');
                }   
              });


                        }
                      }});
                  });

                 
				});
			
		</script>	
@endpush

@endsection