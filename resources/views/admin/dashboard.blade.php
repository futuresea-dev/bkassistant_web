@extends("layouts.admin")
@section('content')
<!-- [ Main Content ] start -->
<div class="row">
	<div class="col-md-6 col-xl-4">
		<div class="card dashboard-cards">
			<div class="card-block position-relative">
				<h6 class="mb-4">{{$client_count}}</h6>
				<span class="card-icon"><i class="feather icon-bar-chart"></i></span>
				<div class="row">
					<div class="col-12">
						<h4 class="f-w-500 m-b-0">
							Total number of clients </h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-xl-4">
		<div class="card dashboard-cards">
			<div class="card-block position-relative">
				<h6 class="mb-4">{{$users_count[2]}}</h6>
				<span class="card-icon"><i class="feather icon-users"></i></span>
				<div class="row">
					<div class="col-12">
						<h4 class="f-w-500 m-b-0">
							Total number of Attorney </h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-xl-4">
		<div class="card dashboard-cards">
			<div class="card-block position-relative">
				<h6 class="mb-4">{{$signed_documents}}</h6>
				<span class="card-icon"><i class="feather icon-package"></i></span>
				<div class="row">
					<div class="col-12">
						<h4 class="f-w-500 m-b-0">
							Total Singed document </h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-xl-4">
		<div class="card dashboard-cards">
			<div class="card-block position-relative">
				<h6 class="mb-4">{{$pending_documents}}</h6>
				<span class="card-icon"><i class="feather icon-package"></i></span>
				<div class="row">
					<div class="col-12">
						<h4 class="f-w-500 m-b-0">
							Total Pending Document </h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-xl-4">
		<div class="card dashboard-cards">
			<div class="card-block position-relative">
				<h6 class="mb-4">{{$payment_sum}}</h6>
				<span class="card-icon"><i class="feather icon-codepen"></i></span>
				<div class="row">
					<div class="col-12">
						<h4 class="f-w-500 m-b-0">
							Total Money Received </h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ Main Content ] end -->
@endsection
   

