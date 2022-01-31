@extends('layouts.app')
@section('content')
@include("layouts.flash")
<form method="POST" action="{{ route('login') }}">
<div class="auth-wrapper">
	 @csrf
	<!--<div class="img-login">
		<img src="{{ url('assets/images/login-img.jpg')}}" alt="">
		 <img src="../assets/images/login-img2.png" alt="">
	</div> -->
	<div class="auth-content">
		<div class="card-wrapper">
			<div class="card-body">
				<div class="login-title">
					<h3 class="mb-3 mt-3">Attorney Login</h3>

				</div>
				<div class="input-group mb-3">
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
				</div>
				@if ($errors->has('email'))
					<p class="help-block text-danger">{{ $errors->first('email') }}</p>
				@endif
				<div class="input-group mb-4">
					<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
				</div>
				@if ($errors->has('password'))
					<p class="help-block text-danger">{{ $errors->first('password') }}</p>
				@endif
				<div class="login-btn action-auth">
					<button class="btn btn-primary shadow-2 mb-4" type="submit">Login</button>
				</div>
				<div class="forget-pass">
					<p class="mb-0 text-muted"> <a href="{{ route('password.request') }}">Forget Password ?</a></p>
				</div>
				<div class="or-test text-center ">
					<p class="mb-0 text-muted">Or </p>
				</div>
				<div class="no-account">
					<p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('register') }}">Signup</a></p>
				</div>

			</div>
		</div>
	</div>
</div>
</form>
@endsection
