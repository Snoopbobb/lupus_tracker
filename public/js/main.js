$(function() {    

/***************Template Functions ***************
**************************************************/
	var renderEvent = function(){
		var source = $('#template-event').html();
		var template = Handlebars.compile(source);
		var output = template();
		return output;
	};

	var renderWeather = function(){
		var source = $('#template-weather').html();
		var template = Handlebars.compile(source);
		var output = template();
		return output;
	};

	var renderFood = function(){
		var source = $('#template-food').html();
		var template = Handlebars.compile(source);
		var output = template();
		return output;
	};

	var renderActivity = function(){
		var source = $('#template-activity').html();
		var template = Handlebars.compile(source);
		var output = template();
		return output;
	};

	/************** Event Handlers ****************
	***********************************************/

				// Handlebars Events //
	$('.button-main').on('click', function(event) {
		event.preventDefault();
		var output = renderEvent();
		$('.main').prepend(output); 
	});

	$('.main').on('click', '.weather', function(event) {
		event.preventDefault();
		var output = renderWeather();
		$('.main').prepend(output); 
	});

	$('.main').on('click', '.food', function(event) {
		event.preventDefault();
		var output = renderFood();
		$('.main').prepend(output); 
	});

	$('.main').on('click', '.activity', function(event) {
		event.preventDefault();
		var output = renderActivity();
		$('.main').prepend(output); 
	});

				// Page Events //
	$( ".refresh" ).click(function() {
         location.reload(true);
	});

	$('#calendar').fullCalendar({
    	dayClick: function(){
    		var date = this.data().date;
    		window.location.href += "/" +date;
    	}
	});

			// Mouse pointer for calendar
	$('#calendar').css('cursor', 'pointer');

	/**** jQueryui Buttons for Radios on symptom page ****
	*****************************************************/
	$(function() {
	  	$( "#radio-1" ).buttonset();
	});

	$(function() {
		$( "#radio-2" ).buttonset();
	});

	$(function() {
		$( "#radio-3" ).buttonset();
	});

	$(function() {
		$( "#radio-4" ).buttonset();
	});

	$(function() {
		$( "#radio-5" ).buttonset();
	});

	$(function() {
		$( "#radio-6" ).buttonset();
	});

	$(function() {
		$( "#radio-7" ).buttonset();
	});

	$(function() {
		$( "#radio-8" ).buttonset();
	});


});