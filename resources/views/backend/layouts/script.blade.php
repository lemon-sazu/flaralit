@jquery
@toastr_js
@toastr_render

		@include('sweet::alert')

		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
		<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('assets/js/custom/widgets.js')}}"></script>
		<script src="{{ asset('assets/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{ asset('assets/js/custom/intro.js')}}"></script>
		<script src="{{ asset('assets/js/custom/modals/upgrade-plan.js')}}"></script>
		<script src="{{ asset('assets/js/custom/modals/create-app.js')}}"></script>
		<script src="{{ asset('assets/js/custom/modals/new-target.js')}}"></script>
		<script src="{{ asset('assets/js/custom/modals/new-address.js')}}"></script>
		<script src="{{ asset('assets/js/custom/modals/users-search.js')}}"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
		<script>
			$(document).ready(function() {
			$('.select_2').select2();
			$('.select_tags').select2({
				tags: true,
    			tokenSeparators: [',', ' ']
			});

			$(".custom_date").flatpickr();

			$(".custom_datetime").flatpickr({
				
					enableTime: true,
					dateFormat: "Y-m-d H:i",
				
			});

			$(".custom_date_range").flatpickr(
				{
					mode: "range",
					minDate: "today",
    				maxDate: new Date().fp_incr(14) // 14 days from now
				}
			);

			$(".custom_time").flatpickr(
				{
					enableTime: true,
					noCalendar: true,
					dateFormat: "H:i",
				}
			);

		});
		</script>
		@stack('script')
		