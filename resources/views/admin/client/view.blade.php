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
				<div class="container ">
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control {{ $errors->has('name') ? 'btn-outline-danger' : '' }}" placeholder="Name " name="name" value="<?php echo (!empty($User['name']))?$User['name']:"";?>" readonly>					
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control {{ $errors->has('email') ? 'btn-outline-danger' : '' }}" placeholder="Email " name="email" value="<?php echo (!empty($User['email']))?$User['email']:"";?>" readonly>					
					</div>
					<div class="form-group">
						<label>Antorney Name</label>
						<input type="text" class="form-control {{ $errors->has('company') ? 'btn-outline-danger' : '' }}" placeholder="Company Name " name="company" value="<?php echo (!empty($User['attorney_name']))?$User['attorney_name']:"";?>" readonly>					
					</div>	
					<a href="{{route('admin_attorney_list')}}" class="btn btn-theme-black">Back</a>
				</div>					
			</div>
		</div>
	</div>
	<!--[ Recent Users ] end-->
</div>

<!-- [ Main Content ] end -->
@endsection