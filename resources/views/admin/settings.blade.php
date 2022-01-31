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
				<form action="{{route('admin_payment_settings')}}" method="post" novalidate>
				@csrf	
				<div class="container ">
					<div class="form-group">
						<label>Payment Charge</label>
						<input type="text" class="form-control {{ $errors->has('payment_charge') ? 'btn-outline-danger' : '' }}" placeholder="Discount Percentage" name="payment_charge" value="<?php echo (!empty($payment_settings->payment_charge))?$payment_settings->payment_charge:"40";?>" maxlength="3">
						@if ($errors->has('payment_charge'))
							<p class="help-block text-danger">{{ $errors->first('payment_charge') }}</p>
						@endif
					</div>
					<div class="form-group">
						<label>Discount Percentage</label>
						<input type="text" class="form-control {{ $errors->has('discount_percentage') ? 'btn-outline-danger' : '' }}" placeholder="Discount Percentage" name="discount_percentage" value="<?php echo (!empty($payment_settings->discount_percentage))?$payment_settings->discount_percentage:"";?>" maxlength="2">
						@if ($errors->has('discount_percentage'))
						<p class="help-block text-danger">{{ $errors->first('discount_percentage') }}</p>
						@endif
					</div>	
					<input type="hidden" name="setting_id" value="<?php echo (!empty($payment_settings->id))?$payment_settings->id:"";?>">					
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