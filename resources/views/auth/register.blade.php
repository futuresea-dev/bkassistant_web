@extends('layouts.app')
@section('content')
@include("layouts.flash")
<form method="POST" action="{{ route('register') }}">
<div class="auth-wrapper">
	 @csrf
	<!--<div class="img-login">-->
	<!--	<img src="{{ url('assets/images/login-img.jpg')}}" alt="">-->
		<!-- <img src="../assets/images/login-img2.png" alt=""> -->
	<!--</div>-->
	<div class="auth-content">
		<div class="card-wrapper">
			<div class="card-body">
				<div class="login-title">
					<h3 class="mb-3 mt-3">Sign Up</h3>
				</div>
				<div class="input-group mb-3">
					 <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">
				</div>
				@if ($errors->has('name'))
					<p class="help-block text-danger">{{ $errors->first('name') }}</p>
				@endif
				<div class="input-group mb-3">
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
				</div>
				@if ($errors->has('email'))
					<p class="help-block text-danger">{{ $errors->first('email') }}</p>
				@endif
				<div class="input-group mb-3">
					<input type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}" required autocomplete="company" placeholder="Company Name">
				</div>
				@if ($errors->has('company'))
					<p class="help-block text-danger">{{ $errors->first('company') }}</p>
				@endif
				<div class="input-group mb-4">
					<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
				</div>
				@if ($errors->has('password'))
					<p class="help-block text-danger">{{ $errors->first('password') }}</p>			
				@endif
				
                <div class="trmcondition">
                     <input type="checkbox" id="scales" name="scales">
                      <label for="scales"> By signing up, you confirm that you've read and accepted our <a href="http://bkassistant.net/terms-of-services" target="_blank">Terms of Service </a></label>
                </div>
				<div class="login-btn action-auth">
					<button class="btn btn-primary shadow-2 mb-4" type="submit">Sign up</button>
				</div>				
				<div class="no-account already-account">
                    <p class="mb-0 text-muted">Allready have an account? <a href="{{ route('login') }}"> Log in</a></p>
                </div>				
			</div>
		</div>
	</div>
</div>
</form>
@endsection
