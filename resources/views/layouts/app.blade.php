<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
	<head>
		<base href="../../">
		<meta charset="utf-8" />
		<title>Multi Service</title>
		<meta name="description" content="Header dark skin example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<meta name="csrf-token" content="{{ csrf_token() }}">

		<!--begin::Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->

		<!--end::Page Vendors Styles -->

		<!--begin::Global Theme Styles(used by all pages) -->

		<!--begin:: Vendor Plugins -->
		<link href="{{url('/')}}/assets/plugins/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/plugins/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/plugins/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/plugins/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

		<!--end:: Vendor Plugins -->
		<link href="{{url('/')}}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--begin:: Vendor Plugins for custom pages -->
		<link href="{{url('/')}}/assets/plugins/custom/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/custom/@fullcalendar/core/main.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/custom/@fullcalendar/daygrid/main.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/custom/@fullcalendar/list/main.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/custom/@fullcalendar/timegrid/main.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/custom/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/custom/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/custom/datatables.net-autofill-bs4/css/autoFill.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/custom/datatables.net-colreorder-bs4/css/colReorder.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/custom/datatables.net-fixedcolumns-bs4/css/fixedColumns.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/custom/datatables.net-fixedheader-bs4/css/fixedHeader.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/custom/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/custom/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/custom/datatables.net-rowgroup-bs4/css/rowGroup.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/custom/datatables.net-rowreorder-bs4/css/rowReorder.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/custom/datatables.net-scroller-bs4/css/scroller.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/custom/datatables.net-select-bs4/css/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/custom/jstree/dist/themes/default/style.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/custom/jqvmap/dist/jqvmap.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/custom/uppy/dist/uppy.min.css" rel="stylesheet" type="text/css" />
		<!-- #datatable -->
		<link href="{{url('/')}}/assets2/plugins/custom/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets2/plugins/custom/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets2/plugins/custom/datatables.net-autofill-bs4/css/autoFill.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets2/plugins/custom/datatables.net-colreorder-bs4/css/colReorder.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets2/plugins/custom/datatables.net-fixedcolumns-bs4/css/fixedColumns.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets2/plugins/custom/datatables.net-fixedheader-bs4/css/fixedHeader.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets2/plugins/custom/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets2/plugins/custom/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets2/plugins/custom/datatables.net-rowgroup-bs4/css/rowGroup.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets2/plugins/custom/datatables.net-rowreorder-bs4/css/rowReorder.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets2/plugins/custom/datatables.net-scroller-bs4/css/scroller.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets2/plugins/custom/datatables.net-select-bs4/css/
		select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!------ Include the above in your HEAD tag ---------->
		<!--end:: Vendor Plugins for custom pages -->

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="{{url('/')}}/assets/media/logos/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<!-- <script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css"> -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="index&demo=demo6.html">
					<img alt="Logo" src="{{url('/')}}/assets/media/logos/logo-6-sm.png" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<div class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></div>
				<div class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></div>
				<div class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></div>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Aside -->
				<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
			@include('layouts.aside')

				<!-- end:: Aside -->
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					@include('layouts.header')

					<!-- end:: Header -->
					@yield('content')

					<!-- begin:: Footer -->
					<div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
						<div class="kt-container  kt-container--fluid ">
							<div class="kt-footer__copyright">
								2019&nbsp;&copy;&nbsp;<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">GDTC</a>
							</div>
							<div class="kt-footer__menu">
								<a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">About</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Team</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Contact</a>
							</div>
						</div>
					</div>

					<!-- end:: Footer -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->


		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->

		
		

		<!--ENd:: Chat-->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#22b9ff",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->

		<!--begin:: Vendor Plugins -->
		
		<script src="{{url('/')}}/assets/plugins/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="{{url('/')}}/assets/js/bootbox.js"></script>
		
		<script src="{{url('/')}}/assets/plugins/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/wnumb/wNumb.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/js/global/integration/plugins/bootstrap-datepicker.init.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/js/global/integration/plugins/bootstrap-timepicker.init.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/plugins/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/js/global/integration/plugins/bootstrap-switch.init.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/js/global/integration/plugins/dropzone.init.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/quill/dist/quill.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/@yaireo/tagify/dist/tagify.polyfills.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/@yaireo/tagify/dist/tagify.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/js/global/integration/plugins/bootstrap-markdown.init.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/js/global/integration/plugins/bootstrap-notify.init.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/js/global/integration/plugins/jquery-validation.init.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/dual-listbox/dist/dual-listbox.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/raphael/raphael.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/morris.js/morris.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/plugins/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/plugins/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/js/global/integration/plugins/sweetalert2.init.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/general/dompurify/dist/purify.js" type="text/javascript"></script>
		<!--end:: Vendor Plugins -->
		<script src="{{url('/')}}/assets/js/scripts.bundle.js" type="text/javascript"></script>

		<!--begin:: Vendor Plugins for custom pages -->
		<script src="{{url('/')}}/assets/plugins/custom/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/@fullcalendar/core/main.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/@fullcalendar/daygrid/main.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/@fullcalendar/google-calendar/main.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/@fullcalendar/interaction/main.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/@fullcalendar/list/main.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/@fullcalendar/timegrid/main.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/gmaps/gmaps.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/flot/dist/es5/jquery.flot.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/flot/source/jquery.flot.resize.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/flot/source/jquery.flot.categories.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/flot/source/jquery.flot.pie.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/flot/source/jquery.flot.stack.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/flot/source/jquery.flot.crosshair.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/flot/source/jquery.flot.axislabels.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/datatables.net-bs4/js/dataTables.bootstrap4.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/js/global/integration/plugins/datatables.init.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/datatables.net-autofill/js/dataTables.autoFill.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/datatables.net-autofill-bs4/js/autoFill.bootstrap4.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/jszip/dist/jszip.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/pdfmake/build/pdfmake.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/pdfmake/build/vfs_fonts.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/datatables.net-buttons/js/dataTables.buttons.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/datatables.net-buttons/js/buttons.colVis.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/datatables.net-buttons/js/buttons.flash.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/datatables.net-buttons/js/buttons.html5.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/datatables.net-buttons/js/buttons.print.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/datatables.net-colreorder/js/dataTables.colReorder.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/datatables.net-fixedcolumns/js/dataTables.fixedColumns.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/datatables.net-keytable/js/dataTables.keyTable.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/datatables.net-responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/datatables.net-rowgroup/js/dataTables.rowGroup.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/datatables.net-rowreorder/js/dataTables.rowReorder.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/datatables.net-scroller/js/dataTables.scroller.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/datatables.net-select/js/dataTables.select.min.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/jstree/dist/jstree.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/jqvmap/dist/jquery.vmap.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.world.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.russia.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.usa.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.germany.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.europe.js" type="text/javascript"></script>
		<script src="{{url('/')}}/assets/plugins/custom/uppy/dist/uppy.min.js" type="text/javascript"></script>
		<!-- #datatable -->
		<script src="{{url('/')}}/assets2/plugins/custom/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/datatables.net-bs4/js/dataTables.bootstrap4.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/js/global/integration/plugins/datatables.init.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/datatables.net-autofill/js/dataTables.autoFill.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/datatables.net-autofill-bs4/js/autoFill.bootstrap4.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/jszip/dist/jszip.min.js" type="text/javascript"></script>
<script src="assets2/plugins/custom/pdfmake/build/pdfmake.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/pdfmake/build/vfs_fonts.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/datatables.net-buttons/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/datatables.net-buttons/js/buttons.colVis.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/datatables.net-buttons/js/buttons.flash.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/datatables.net-buttons/js/buttons.html5.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/datatables.net-buttons/js/buttons.print.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/datatables.net-colreorder/js/dataTables.colReorder.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/datatables.net-fixedcolumns/js/dataTables.fixedColumns.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/datatables.net-keytable/js/dataTables.keyTable.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/datatables.net-responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/datatables.net-rowgroup/js/dataTables.rowGroup.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/datatables.net-rowreorder/js/dataTables.rowReorder.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/datatables.net-scroller/js/dataTables.scroller.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/plugins/custom/datatables.net-select/js/dataTables.select.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets2/js/pages/crud/datatables/advanced/column-rendering.js" type="text/javascript"></script>


		<!--end:: Vendor Plugins for custom pages -->

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
<!-- 		<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script> -->

		<!--end::Page Vendors -->
		
		<!--begin::Page Scripts(used by this page) -->
		<script src="{{url('/')}}/assets/js/pages/dashboard.js" type="text/javascript"></script>
		<script  src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
		@yield('scripts')
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>