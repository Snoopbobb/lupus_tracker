@extends('layout')

@section('content')

	
	<div class="form-wrapper">
		<div>Login</div>
		@if (count($errors) > 0)
			<div class="errors">
				<strong>Whoops!</strong> There were some problems with your input.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<form method="POST" action="{{ url('/auth/login') }}">
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
				<div>
					<div>
						<label>
							<input type="checkbox" name="remember"> Remember Me
						</label>
					</div>
				</div>
			</div>

			<div>
				<div>
					<button type="submit">Login</button>

					<a href="{{ url('/password/email') }}">Forgot Your Password?</a>
				</div>
			</div>
		</form>
	</div>
@endsection