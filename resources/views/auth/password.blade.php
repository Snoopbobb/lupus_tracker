@extends('layout')

@section('content')

	<div class="form-wrapper">
		<div>Reset Password</div>
		@if (session('status'))
			<div>
				{{ session('status') }}
			</div>
		@endif

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

		<form method="POST" action="{{ url('/password/email') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div>
				<label>E-Mail Address</label>
				<div>
					<input type="email" name="email" value="{{ old('email') }}">
				</div>
			</div>

			<div>
				<div>
					<button type="submit">
						Send Password Reset Link
					</button>
				</div>
			</div>
		</form>
	</div>
@endsection
