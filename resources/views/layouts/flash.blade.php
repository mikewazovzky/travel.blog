@if($flash = session('message'))
	<div id="flash-message" class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{ $flash }}&nbsp;&nbsp;
	</div>
@endif


@if($flash = session('alert'))
	<div id="flash-message" class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{ $flash }}&nbsp;&nbsp;
	</div>
@endif