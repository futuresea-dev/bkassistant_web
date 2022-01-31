@extends('layouts.attorney')
@section('content')
@include("layouts.flash")
<!-- [ Main Content ] start -->
<div class="row">
	<div class="col-md-6 col-xl-4">
		<div class="card dashboard-cards">
			<div class="card-block position-relative">
				<h6 class="mb-4"><?php if(!empty($client_count)){ echo count($client_count);}else{echo "0";} ?></h6>
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
				<h6 class="mb-4">{{$signed_documents}}</h6>
				<span class="card-icon"><i class="feather icon-users"></i></span>
				<div class="row">
					<div class="col-12">
						<h4 class="f-w-500 m-b-0">
							Total Number of Signed documents </h4>
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
							Pending documents </h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="card attorney-listing">
			<div class="card-header justify-content-start">
			   <h4>List of client</h4>
			   <div class="add-btn">
					<a href="#" class="label theme-bg2 text-white f-12" data-toggle="modal"
						data-target="#add_attorney" style="margin-left: 61px"><i class="feather icon-plus"></i> <span
							class="card-title-text">Add</span></a>
				</div>
			</div>
			<div class="card-block px-0 py-0">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>
									Client Name
								</th>
								<th>
									Client Email
								</th>
								<th>
									Status
								</th>
							</tr>
						</thead>
						<tbody>
						<?php if(!empty($client) && count($client)>0){?>
						<?php foreach($client as $val){?>
							<tr class="unread">
								<td><span>{{$val['name']}}</span></td>
								<td><span>{{$val['email']}}</span></td>
								<td>
									<span>Active</h6></span>
								</td>
								<!--td><a href="{{route('admin_client_view',['id'=>$val['id']])}}" class="label theme-bg2 text-white f-12">View</a>
									<a href="{{route('admin_client_edit',['id'=>$val['id']])}}" class="label theme-bg text-white f-12">Edit</a>
								</td-->
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
</div>
<!-- [ Main Content ] end -->
</div>
@if ($errors->any())
<script>
$(document).ready(function(){
	$("#add_attorney").modal('show');
});
</script>
@endif

<!-- Modal -->
<?php if(isset($user_data)){?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" style="max-width:90%" role="document">
        <div class="modal-content">
            <div class="modal-body" style="max-height:500px;overflow-x: hidden;overflow-y: scroll">
                @include("terms")
            </div>
            <div class="modal-footer">
                By clicking continue you agree to the terms of service contained herein.
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-primary" data-dismiss="modal">Continue</button>
            </div>
        </div>
    </div>
</div>
<?php }?>

    <!-- Modal -->
<div id="add_attorney" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Client</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form action="{{route('attorney_client_add')}}" method="post" novalidate>
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
						<input type="hidden" class="form-control" id="client_attorney" name="client_attorney" value="{{Auth::user()->id}}">
						@if ($errors->has('client_attorney'))
							<p class="help-block text-danger">{{ $errors->first('client_attorney') }}</p>
						@endif
					</div>
                    <!-- <div class="col-sm-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" value="1" id="retainer_agreement_box" name="retainer_agreement_box">
                        <label class="form-check-label" for="flexCheckDefault">
                            Retainer Agreement Box
                        </label>
                    @if ($errors->has('retainer_agreement_box'))
						<p class="help-block text-danger">{{ $errors->first('retainer_agreement_box') }}</p>
					@endif
					</div> -->
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-theme-black" >Submit</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			</form>
		</div>

	</div>
</div>
<script>
    $(document).ready(function(){
        <?php if(@$user_data->show_terms==1){?>
        $('#myModal').modal('show');
        <?php }?>
    });
</script>
@endsection
