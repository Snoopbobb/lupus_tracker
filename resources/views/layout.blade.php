<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Flare Tracker</title>
	<link href="{{ asset('lupustracker/css/normalize.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('lupustracker/fullcalendar/fullcalendar.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('lupustracker/css/jquery-ui.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('lupustracker/css/main.css') }}" rel="stylesheet" type="text/css" >
	<script src="{{ asset('lupustracker/js/jquery.js') }}"></script>
    <script src="{{ asset('lupustracker/js/handlebars.js') }}"></script>
    <script src="{{ asset('lupustracker/js/d3.js') }}"></script>
	<script src="{{ asset('lupustracker/fullcalendar/moment.min.js') }}"></script>
	<script src="{{ asset('lupustracker/js/jquery-ui.js') }}"></script>
	<script src="{{ asset('lupustracker/fullcalendar/fullcalendar.js') }}"></script>
    <script src="{{ asset('lupustracker/js/main.js') }}"></script>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<h3><a href="{{ url('lupustracker/') }}">GOT SPOONS?</a></h3> 
		</div>
		@yield('content')
		<div class="footer">
			<h3>Footer</h3>
		</div>
	</div>
</body>
</html>