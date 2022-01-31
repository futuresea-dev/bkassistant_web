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
				<form action="{{route('admin_client_edit',['id'=>$User['id']])}}" method="post" novalidate>
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
						<select class="form-control" id="client_attorney" name="client_attorney">
							<option value="">Choose Attorney</option>
							<?php if(!empty($attorney)){?>
							<?php foreach($attorney as $val){?>
							<option value="<?php echo $val['id']; ?>" <?php echo (!empty($User['attorney_id']) && $User['attorney_id']==$val['id'])?"selected":"";?>><?php echo $val['name']; ?></option>
							<?php }}?>
						</select>
					@if ($errors->has('client_attorney'))
						<p class="help-block text-danger">{{ $errors->first('client_attorney') }}</p>
					@endif
					</div>
					<input type="hidden" name="clients_attorney_id" value="<?php echo (!empty($User['clients_attorney_id']))?$User['clients_attorney_id']:"";?>">
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