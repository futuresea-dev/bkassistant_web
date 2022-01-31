@extends("layouts.admin")
@section('content')
@include("layouts.flash")
<div class="row">
	<!--[ Recent Users ] start-->
	<div class="col-xl-12 col-md-12">
		<div class="card listing-card">
			<div class="card-header">
				<div class="add-btn">
					<div class="search-list">
						<div class="pcoded-header">
							<div class="main-search open">
								<div class="input-group">
									<input type="text" class="form-control"
										placeholder="Search . . .">
									<span
										class="input-group-append search-btn btn btn-primary">
										<i class="feather icon-search input-group-text"></i>
									</span>
								</div>
							</div>
						</div>
					</div>
					<a href="#" class="label theme-bg2 text-white f-12" data-toggle="modal"
						data-target="#add_attorney"><i class="feather icon-plus"></i> <span
							class="card-title-text">Add</span></a>
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
									Company Name
								</th>
								<th>
									Action
								</th>
							</tr>
						</thead>
						<tbody>
						<?php if(!empty($attorney)){?>
						<?php foreach($attorney as $val){?>
							<tr class="unread">
								<td><span>{{$val['name']}}</span></td>
								<td><span>{{$val['email']}}</span></td>
								<td>
									<span>{{$val['company']}}</h6></span>
								</td>
								<td><a href="{{route('admin_attorney_view',['id'=>$val['id']])}}" class="label theme-bg2 text-white f-12">View</a>
									<a href="{{route('admin_attorney_edit',['id'=>$val['id']])}}" class="label theme-bg text-white f-12">Edit</a>
								</td>
							</tr>
						<?php }}?>	
						</tbody>
					</table>
				</div>
				<div class="pagination px-2">
					<?php if(!empty($attorney)){?>
					{{ $attorney->links() }}
					<?php }?>
				</div>
			</div>
		</div>
	</div>
	<!--[ Recent Users ] end-->

</div>
@if ($errors->any())
<script>
$(document).ready(function(){
	$("#add_attorney").modal('show');
});
</script>
@endif
    <!-- Modal -->
<div id="add_attorney" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Attorney</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form action="{{route('admin_attorney_add')}}" method="post" novalidate>
			@csrf			
			<div class="modal-body">
				<div class="row ">
					<div class="col-sm-12">
						<input type="text" class="form-control mb-4 {{ $errors->has('name') ? 'btn-outline-danger' : '' }}" placeholder="Name " name="name">
					@if ($errors->has('name'))
						<p class="help-block text-danger">{{ $errors->first('name') }}</p>
					@endif
					</div>
					<div class="col-sm-12">
						<input type="text" class="form-control mb-4 {{ $errors->has('email') ? 'btn-outline-danger' : '' }}" placeholder="Email " name="email">
					@if ($errors->has('email'))
						<p class="help-block text-danger">{{ $errors->first('email') }}</p>
					@endif
					</div>
					<div class="col-sm-12">
						<input type="text" class="form-control mb-4 {{ $errors->has('company') ? 'btn-outline-danger' : '' }}" placeholder="Company Name " name="company">
					@if ($errors->has('company'))
						<p class="help-block text-danger">{{ $errors->first('company') }}</p>
					@endif
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-theme-black">Submit</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			</form>
		</div>

	</div>
</div>
<!-- [ Main Content ] end -->
@endsection