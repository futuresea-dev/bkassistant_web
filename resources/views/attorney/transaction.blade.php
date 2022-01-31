@extends('layouts.attorney')
@section('content')
@include("layouts.flash")
<!-- [ Main Content ] start -->
 <div class="row">
	<!--[ Recent Users ] start-->
	<div class="col-xl-12 col-md-12">
		<div class="card table-row-shows">
			<div class="card-header">
				<div class="add-btn">
					<div class="search-list">
						<div class="pcoded-header">
							<form action="{{route('attorney_transactions')}}" method="GET">
							<div class="main-search open">
								<div class="input-group">
									<input type="text" name="q" class="form-control"
										placeholder="Search . . .">
									<button type="submit" style=" border: none; background: none; "><span
										class="input-group-append search-btn btn btn-primary">
										<i class="feather icon-search input-group-text"></i>
									</span></button>
								</div>
							</div>
							</form>
						</div>
					</div>
					<a href="#" class="label theme-bg2 text-white f-12 action-btn"><span
							class="card-title-text">Export</span></a>
				</div>

			</div>
			<div class="card-block px-0 py-0">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>
									Name
								</th>
								<th>
									Email
								</th>
								<th>
									Transactions
								</th>
								<!-- <th>
									Action
								</th> -->
							</tr>
						</thead>
						<tbody>
						<?php if(!empty($attorney_transactions) && count($attorney_transactions)>0){?>
						<?php foreach($attorney_transactions as $val){?>
							<tr class="unread">
								<td><span>{{$val->name}}</span></td>
								<td><span>{{$val->email}}</span></td>
								<td>
									<p class="mb-0">										
										<strong class="font-lg-18 f-w-500"> <b>${{$val->amount/100}}</b> </strong>
									</p>
									<p>{{trim($val->stripe_payment_intent,'pi_')}} </p>
								</td>
							</tr>
						<?php }}else{?>
							<tr class="unread">
								<td colspan="3">No Record Found.</td>
							</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
				<div class="pagination px-2">
					<?php if(!empty($client) && count($client)>0){?>
					{{ $client->links() }}
					<?php }?>
				</div>
			</div>
		</div>
	</div>
	<!--[ Recent Users ] end-->

</div>
<!-- [ Main Content ] end -->
</div>
<script>
$(document).ready(function(){
	 $("#imageUpload").change(function (data) {
		var imageFile = data.target.files[0];
		var reader = new FileReader();
		reader.readAsDataURL(imageFile);

		reader.onload = function (evt) {
			$('#imagePreview').attr('src', evt.target.result);
			$('#imagePreview').hide();
			$('#imagePreview').fadeIn(650);
		}

	});
});
</script>
@endsection
