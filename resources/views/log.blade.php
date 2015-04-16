@extends ('layout')
{{ print_r($data->flare) }}
@section ('content')
	<button class="header-button">Logout</button>
	<div class="form-wrapper">
		<h2>Symptom Tracker</h2>
		<form  class="log" method="POST" action="{{ URL::full() }}/create">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div id="radio-1">
				<h3>Flare</h3>
				<label for="flare-yes">Yes</label><input id="flare-yes" type="radio" name="flare" value="1">
				<label for="flare-no">No</label><input id="flare-no" type="radio" name="flare" value="0">				
			</div>
			<h2>Symptoms</h2>
			<div id="radio-2">
				<h3>Fatigue Scale (1 feeling no fatigue)</h3>
				<label for="fatigue-1">1</label><input id="fatigue-1" type="radio" name="fatigue" value="1">				
				<label for="fatigue-2">2</label><input id="fatigue-2" type="radio" name="fatigue" value="2">				
				<label for="fatigue-3">3</label><input id="fatigue-3" type="radio" name="fatigue" value="3">
				<label for="fatigue-4">4</label><input id="fatigue-4" type="radio" name="fatigue" value="4">				
				<label for="fatigue-5">5</label><input id="fatigue-5" type="radio" name="fatigue" value="5">
			</div>
			<div id="radio-3">
				<h3>Headache Scale (1 having no headache)</h3>
				<label for="headache-1">1</label><input id="headache-1" type="radio" name="headache" value="1">				
				<label for="headache-2">2</label><input id="headache-2" type="radio" name="headache" value="2">				
				<label for="headache-3">3</label><input id="headache-3" type="radio" name="headache" value="3">
				<label for="headache-4">4</label><input id="headache-4" type="radio" name="headache" value="4">				
				<label for="headache-5">5</label><input id="headache-5" type="radio" name="headache" value="5">
			</div>
			<div id="radio-4">
				<h3>Swelling Scale (1 having no swelling)</h3>
				<label for="swelling-1">1</label><input id="swelling-1" type="radio" name="swelling" value="1">				
				<label for="swelling-2">2</label><input id="swelling-2" type="radio" name="swelling" value="2">				
				<label for="swelling-3">3</label><input id="swelling-3" type="radio" name="swelling" value="3">
				<label for="swelling-4">4</label><input id="swelling-4" type="radio" name="swelling" value="4">				
				<label for="swelling-5">5</label><input id="swelling-5" type="radio" name="swelling" value="5">
			</div>
			<div id="radio-5">
				<h3>Rash Scale (1 having no rash)</h3>
				<label for="rash-1">1</label><input id="rash-1" type="radio" name="rash" value="1">				
				<label for="rash-2">2</label><input id="rash-2" type="radio" name="rash" value="2">				
				<label for="rash-3">3</label><input id="rash-3" type="radio" name="rash" value="3">
				<label for="rash-4">4</label><input id="rash-4" type="radio" name="rash" value="4">				
				<label for="rash-5">5</label><input id="rash-5" type="radio" name="rash" value="5">
			</div>
			<div id="radio-6">
				<h3>Joint Pain (1 having no joint pain)</h3>
				<label for="joint-pain-1">1</label><input id="joint-pain-1" type="radio" name="joint_pain" value="1">				
				<label for="joint-pain-2">2</label><input id="joint-pain-2" type="radio" name="joint_pain" value="2">				
				<label for="joint-pain-3">3</label><input id="joint-pain-3" type="radio" name="joint_pain" value="3">
				<label for="joint-pain-4">4</label><input id="joint-pain-4" type="radio" name="joint_pain" value="4">				
				<label for="joint-pain-5">5</label><input id="joint-pain-5" type="radio" name="joint_pain" value="5">
			</div>
			<div id="radio-7">
				<h2>Activities</h2>
				<h3>Amount of Sleep (1 having a full night's sleep)</h3>
				<label for="sleep-1">1</label><input id="sleep-1" type="radio" name="sleep" value="1">				
				<label for="sleep-2">2</label><input id="sleep-2" type="radio" name="sleep" value="2">				
				<label for="sleep-3">3</label><input id="sleep-3" type="radio" name="sleep" value="3">
				<label for="sleep-4">4</label><input id="sleep-4" type="radio" name="sleep" value="4">				
				<label for="sleep-5">5</label><input id="sleep-5" type="radio" name="sleep" value="5">
			</div>
			<div id="radio-8">
				<h3>Excercise (1 doing no excercise)</h3>
				<label for="excercise-1">1</label><input id="excercise-1" type="radio" name="excercise" value="1">				
				<label for="excercise-2">2</label><input id="excercise-2" type="radio" name="excercise" value="2">				
				<label for="excercise-3">3</label><input id="excercise-3" type="radio" name="excercise" value="3">
				<label for="excercise-4">4</label><input id="excercise-4" type="radio" name="excercise" value="4">				
				<label for="excercise-5">5</label><input id="excercise-5" type="radio" name="excercise" value="5">
			</div>
			<div class="textarea-label">
				<h3>Additional Comments</h3>
			</div>
			<div>
				<textarea name="notation" placeholder="Add any other comments about your day"></textarea>
			</div>
			<button>Save</button>
		</form>
	</div>
@endsection