@extends("layouts.admin")
@section('content')
@include("layouts.flash")
<div class="row">
	<!--[ Recent Users ] start-->
	<div class="col-xl-12 col-md-12">
		<div class="card listing-card">
			<div class="card-header">
				
			</div>
			<div class="card-block px-0 py-0">				
				<form action="{{route('admin_attorney_edit',['id'=>$User['id']])}}" method="post" novalidate>
				@csrf	
				<div class="container ">
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control {{ $errors->has('name') ? 'btn-outline-danger' : '' }}" placeholder="Name " name="name" value="<?php echo (!empty($User['name']))?$User['name']:"";?>">
					@if ($errors->has('name'))
						<p class="help-block text-danger">{{ $errors->first('name') }}</p>
					@endif
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control {{ $errors->has('email') ? 'btn-outline-danger' : '' }}" placeholder="Email " name="email" value="<?php echo (!empty($User['email']))?$User['email']:"";?>">
					@if ($errors->has('email'))
						<p class="help-block text-danger">{{ $errors->first('email') }}</p>
					@endif
					</div>
					<div class="form-group">
						<label>Company Name</label>
						<input type="text" class="form-control {{ $errors->has('company') ? 'btn-outline-danger' : '' }}" placeholder="Company Name " name="company" value="<?php echo (!empty($User['company']))?$User['company']:"";?>">
					@if ($errors->has('company'))
						<p class="help-block text-danger">{{ $errors->first('company') }}</p>
					@endif
					</div>
					<?php //dump($payment_settings->discount_percentage);?>					
					<div class="form-group">
						<label>Flat Fee</label>
						<input type="text" class="form-control" placeholder="Flat Fee" name="flat_fee" value="<?php echo (!empty($User['flat_fee']))?$User['flat_fee']:"";?>">
					</div>
					<a href="{{route('admin_attorney_list')}}" class="btn btn-theme-black">Back</a>
					<button type="submit" class="btn btn-theme-black">Submit</button>
				</div>			
				</form>							
			</div>
		</div>
	</div>
	<!--[ Recent Users ] end-->
</div>

<!-- [ Main Content ] end -->
@endsection