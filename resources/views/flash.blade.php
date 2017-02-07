@if( $flash = session('flash_message_aside'))
	<div id="flash-message" class="alert alert-{{ $flash['level'] }}">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{ $flash['message'] }}&nbsp;&nbsp;
	</div>
@endif

@if (session()->has('flash_message'))
	<script type="text/javascript">
		swal({
		  title: "{{ session('flash_message.title') }}",
		  text: "{{ session('flash_message.message') }}",
		  type: "{{ session('flash_message.level') }}",
		  timer: 2000,
		  showConfirmButton: false
		});	
	</script>
@endif

@if (session()->has('flash_message_overlay'))
	<script type="text/javascript">
		swal({
		  title: "{{ session('flash_message_overlay.title') }}",
		  text: "{{ session('flash_message_overlay.message') }}",
		  type: "{{ session('flash_message_overlay.level') }}",
		  confirmButtonText: 'Okay'
		});	
	</script>
@endif


