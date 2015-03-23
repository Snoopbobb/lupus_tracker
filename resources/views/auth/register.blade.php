@extends('layout')

@section('content')

	<div class="form-wrapper">
		<div>Register</div>
		@if (count($errors) > 0)
			<div>
				<strong>Whoops!</strong> There were some problems with your input.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<form method="POST" action="{{ url('/auth/register') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div>
				<label>E-Mail Address</label>
				<div>
					<input type="email" name="email" value="{{ old('email') }}">
				</div>
			</div>

			<div>
				<label>Password</label>
				<div>
					<input type="password" name="password">
				</div>
			</div>

			<div>
				<label>Confirm Password</label>
				<div>
					<input type="password" name="password_confirmation">
				</div>
			</div>

			<div>
				<div>
					<button type="submit">
						Register
					</button>
				</div>
			</div>
		</form>
	</div>
@endsection
