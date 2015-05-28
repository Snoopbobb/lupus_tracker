<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Flare Tracker</title>
	<link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('fullcalendar/fullcalendar.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" >
	<script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/handlebars.js') }}"></script>
    <script src="{{ asset('js/d3.js') }}"></script>
	<script src="{{ asset('fullcalendar/moment.min.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.js') }}"></script>
	<script src="{{ asset('fullcalendar/fullcalendar.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<h3><a href="{{ url('/') }}">GOT SPOONS?</a></h3> 
		</div>
		@yield('content')
		<div class="footer">
			<h3>Footer</h3>
		</div>
	</div>
</body>
</html>