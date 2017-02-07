<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Select2 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css"/>  
	
    <!-- Lity -->
    <link rel="stylesheet" href="/css/libs/lity.css">  

	<!-- Sweetalert -->
	<link rel="stylesheet" href="/css/libs/sweetalert.css"> 
	
    <!-- Custom Styles -->
    <link rel="stylesheet" href="/css/app.css">
	
	@yield('header.styles')

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

    <div id="app">

		@include('layouts.nav')

        @yield('content')

	</div>
    
	<hr>
    @include('layouts.footer'); 

    <!-- jQuery --
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Select2 JavaScript --
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>	

	<!-- Bootstrap core JavaScript --
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	-->
		
	<script src="/js/app.js"></script>
	<script src="/js/libs/sweetalert-dev.js"></script>
	
	@yield('footer.scripts')
    
    @include('flash');    
	
</body>
</html>
