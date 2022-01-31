@extends('layouts.attorney')
@section('content')
@include("layouts.flash")
<!-- [ Main Content ] start -->
 <div class="row">
	<!--[ Recent Users ] start-->
	<div class="col-xl-12 col-md-12">
		<div class="card listing-card">
			<div class="card-header">
				<div class="add-btn">
					<div class="search-list">
						<div class="pcoded-header">
						<form action="{{route('attorney_client_management')}}" method="GET">
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
									Attorney Name
								</th>
								<th>
									Action
								</th>
							</tr>
						</thead>
						<tbody>
						<?php if(!empty($client) && count($client)>0){?>
						<?php foreach($client as $val){?>
                        <input type="hidden" id="retainer_agreement_box<?php echo $val['id']?>" value="<?php echo $val['retainer_agreement_box']?>">
							<tr class="unread">
								<td><span>{{$val['name']}}</span></td>
								<td><span>{{$val['email']}}</span></td>
								<td>
									<span>{{Auth::user()->name}}</h6></span>
								</td>
								<td><a <?php if(!empty($form_completed_clients[$val['id']]) && $form_completed_clients[$val['id']]==6){?>href="{{route('attorney_form_submission_view',['id'=>$val['id']])}}" <?php }?>
										class="label theme-bg text-white rounded action-btn"
										data-toggle="tooltip" title="View"><i
											class="feather icon-eye"></i></a>
									<?php if(!empty($form_completed_clients[$val['id']]) && $form_completed_clients[$val['id']]==6){?>
									<a href="{{route('attorney_offical_form',['id'=>$val['id']])}}" 
										class="label theme-bg text-white rounded action-btn"
										data-toggle="tooltip" title="Official form"><i
											class="feather icon-octagon"></i></a> 
									<?php }?>
									<?php if(!in_array($val['id'],$client_with_payments) && empty($val['user_added_by'])){?>
									<a href="javascript:void(0)"
										class="label theme-bg text-white rounded action-btn"
										 <?php //if(!empty($form_completed_clients[$val['id']]) && $form_completed_clients[$val['id']]==6){?> data-toggle="modal" onclick="make_payment(this,<?php echo $val['id'];?>);" <?php //}?>><i
											class="feather icon-navigation"
											data-toggle="tooltip" title="Send"></i></a>
									<?php }?>
									<a href="javascript:void(0);"
										class="label theme-bg text-white rounded action-btn"
										data-toggle="modal" onclick="edit_client(this,<?php echo $val['id'];?>);"><i
											class="feather icon-edit" data-toggle="tooltip"
											title="Edit"></i></a>
									<a href="{{route('attorney_client_uploaded_documents',['id'=>$val['id']])}}"
										class="label theme-bg text-white rounded action-btn"
										data-toggle="tooltip" title="View Documents"><i
											class="feather icon-file-text"></i></a>
									<?php if(!empty($editable[$val['id']]) && $editable[$val['id']]==2){?>
									<a href="javascript:void(0);" onclick="request_msg_modal(this,<?php echo $val['id'];?>);"
										class="label theme-bg text-white rounded action-btn"
										data-toggle="tooltip" title="Send Edit Request"><i
											class="feather icon-hash"></i></a>

									<?php }?>
									<a href="{{route('attorney_signed_doc',['id'=>$val['id']])}}"
										class="label theme-bg text-white rounded action-btn"
										data-toggle="tooltip" title="Add Signed Documents"><i
											class="feather icon-file-text"></i></a>
									<a href="#" onclick="file_upload_modal(<?php echo $val['id'];?>);"
										class="label theme-bg text-white rounded action-btn"
										data-toggle="tooltip" title="Upload Credit Report"><i
											class="feather feather icon-upload"></i></a>
									<a href="#" data-toggle="tooltip" onclick="report_edit_modal(<?php echo $val['id'];?>);"
										class="label theme-bg text-white rounded action-btn" title="Edit Credit Report"><i
											class="feather feather icon-edit"></i></a>
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
<link rel="stylesheet" href="{{ asset('assets/css/uploaded-doc.css')}}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.4/css/select.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>
@if ($errors->any())
<script>
$(document).ready(function(){
	var client_name="<?php echo old('name', '');?>";
	var client_email="<?php echo old('email', '');?>";
	var client_id="<?php echo old('client_id', '');?>";
	$("#client_id").val(client_id);
	$("#client_name").val(client_name);
	$("#client_email").val(client_email);
	$("#edit_client").modal('show');
});
</script>
@endif
<script>
$(document).ready(function(){
	$('#editable_section').SumoSelect({placeholder: 'Select options to make active'});
	$('#credit-edit-report').DataTable( {
        columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        order: [[ 1, 'asc' ]]
    } );
});
function edit_client(obj,id){
	var main_parent	=	$(obj).parents(".unread");
	var client_name	=	$(main_parent).find('td:eq(0)>span').text();
	var client_email= 	$(main_parent).find('td:eq(1)>span').text();
	$("#client_id").val(id);
	$("#client_name").val(client_name);
	$("#client_email").val(client_email);
	if($("#retainer_agreement_box"+id).val()=="1"){
	    $("#retainer_agreement_box").prop("checked",true);
    }else{
        $("#retainer_agreement_box").prop("checked",false);
    }
	$("#edit_client").modal('show');
}
function make_payment(obj,id){
	$("#payment_client_id").val(id);
	$("#send_data").modal('show');
}
function request_msg_modal(obj,id){
	$("#request_msg_modal").find("#client_id").val(id);
	// $.ajax({
		// url: "{{route('client_editable_sections')}}",
		// type: 'GET',
		// data:{client_id:id},
		// success: function (data) {
			// var data=JSON.parse(data);
			// if(data){
				// for (const item of data){
					// $('#editable_section')[0].sumo.selectItem(item);
				// }
			// }
		// }
	// });
	$("#request_msg_modal").modal('show');
}

function file_upload_modal(client_id){
	$("#image_document_upload_modal").find("#client_id").val(client_id);
	$("#image_document_upload_modal").modal('show');
}

function report_edit_modal(client_id){
	$("#report_edit_modal").find("#client_id").val(client_id);
	$("#report_edit_modal").modal('show');
}

</script>
<!-- Modal -->
<div id="edit_client" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Client</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form action="{{route('attorney_edit_client')}}" method="post" novalidate>
			@csrf
			<div class="modal-body">
				<div class="row ">
					<div class="col-sm-12">
						<input type="text" class="form-control mb-4 {{ $errors->has('name') ? 'btn-outline-danger' : '' }}" placeholder="Name " name="name" id="client_name">
					@if ($errors->has('name'))
						<p class="help-block text-danger">{{ $errors->first('name') }}</p>
					@endif
					</div>
					<div class="col-sm-12">
						<input type="text" class="form-control mb-4 {{ $errors->has('email') ? 'btn-outline-danger' : '' }}" placeholder="Email " name="email" id="client_email">
					@if ($errors->has('email'))
						<p class="help-block text-danger">{{ $errors->first('email') }}</p>
					@endif
					</div>
                    <div class="col-sm-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" value="1" id="retainer_agreement_box" name="retainer_agreement_box">
                        <label class="form-check-label" for="flexCheckDefault">
                            Retainer Agreement Box
                        </label>
                        @if ($errors->has('retainer_agreement_box'))
                            <p class="help-block text-danger">{{ $errors->first('retainer_agreement_box') }}</p>
                        @endif
                    </div>
					<div class="col-sm-12">
						<input type="hidden" class="form-control" id="client_id" name="client_id" value="{{Auth::user()->id}}">
						@if ($errors->has('client_attorney'))
							<p class="help-block text-danger">{{ $errors->first('client_attorney') }}</p>
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
<div id="send_data" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Payment Information</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
			<form action="{{route('attorney_client_application_payment')}}" method="post" novalidate>
			@csrf
				<div class="row ">
					<div class="col-md-7">
						<div class="stripe-crad px-2 pb-3">
							<div class="row g-0">
								<div class="col-md-12">
									<label>Card Number</label>
									<?php
									if(!empty($attorneycards->last4)){
										$attorneycards->last4='xxxxxxxxxxxx'.$attorneycards->last4;
									}
									?>
									<div class="input-field">
										<input type="text" class="form-control mb-2" value="{{old('card_name',(!empty($attorneycards->last4))?$attorneycards->last4:'')}}"  placeholder="4242 4242 4242">
									</div>
								</div>
								<div class="col-md-12">
									<label>Month/Year</label>
									<div class="input-field">
										<input type="text" class="form-control mb-2 " placeholder="MM/DD " value="<?php echo @$attorneycards->exp_month." / ".@$attorneycards->exp_year?>">
									</div>
								</div>
								<div class="col-md-12">
									<label>CVC</label>
									<div class="input-field">
										<input type="number" class="form-control" placeholder="CVC">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-5">
						<?php
							if(!empty(Auth::user()->flat_fee)){
								$payment_settings->payment_charge=Auth::user()->flat_fee;
							}
						?>
						<h4 class="">Price Details</h4>
						<div class="row pb-3">
							<div class="col-md-6 col-6">
								<span class="text-secondary">Total MRP</span>
							</div>
							<div class="col-md-6 col-6">
								<span class="text-right d-block"><?php echo (!empty($payment_settings->payment_charge))?"$".$payment_settings->payment_charge:"$45";?></span>
							</div>
						</div>
						<div class="row pb-3">
							<div class="col-md-6 col-6">
								<span class="text-secondary">Discount On MRP</span>
							</div>
							<div class="col-md-6 col-6">
								<span class="text-right d-block"><?php echo  (!empty($payment_settings->payment_charge))?"$".$payment_settings->payment_charge:"$45";?></span>
							</div>
						</div>
						<!--div class="row pb-3">
							<div class="col-md-12">
								<div class="promo ">
									<div id="promo_code">
										<div class="shadow-none">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Enter a promo code">
												<div class="input-group-append">
													<span class="btn btn-theme-black" id="basic-addon2">Apply</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div-->
						<div class="total-amount border-1 border-top pt-2">
							<div class="row">
								<div class="col-md-6 col-6">
									<h4>Total Amount</h4>
								</div>
								<div class="col-md-6 col-6">
									<h4 class="text-right d-block"><?php echo (!empty($payment_settings->payment_charge))?"$".$payment_settings->payment_charge:"$45";?></h4>
								</div>
							</div>
						</div>
						<input type="hidden" name="amount" value="<?php echo (!empty($payment_settings->payment_charge))?$payment_settings->payment_charge:"45";?>">
						<input type="hidden" name="client_id" id="payment_client_id" value="">
						<div class="pay pt-3">
							<button type="submit" class="btn btn-theme-black w-100 font-lg-18">Pay <?php echo (!empty($payment_settings->payment_charge))?"$".$payment_settings->payment_charge:"$45";?> </button>
						</div>
					</div>

				</div>
				</form>
			</div>
		</div>

	</div>
</div>
<div id="request_msg_modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Send Edit Request</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form action="{{route('attorney_client_send_request')}}" method="post" novalidate>
			@csrf
			<input type="hidden" class="form-control" id="client_id" name="client_id" value="">
			<div class="modal-body">
				<div class="row ">
					<div class="col-md-12">
						<div class="form-group">
							<select name="editable_section[]" id="editable_section" class="form-control" multiple>
								<option value="1">Basic info</option>
								<option value="2">Property</option>
								<option value="3">Debts</option>
								<option value="4">Current Income</option>
								<option value="5">Current Expense</option>
								<option value="6">Statement of Financial Affairs</option>
							</select>
						</div>
					</div>
					<div class="col-sm-12">
						<textarea name="request_msg" class="form-control"></textarea>
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
<div class="modal fade documents-modal" id="image_document_upload_modal" tabindex="-1" role="dialog"
	aria-labelledby="driving-licenceTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content ">
			<form name="form-image" id="form-image" action="{{route('credit_report_uploads')}}" method="post" enctype="multipart/form-data" novalidate>
			@csrf
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="upload-area">
							<!-- Header -->
							<div class="upload-area__header">
								<h4 class="text-c-blue upload-area__title f-w-800 font-lg-22">Please Attach a file
								</h4>
								<p class="upload-area__paragraph">
									File should be an PDF
								</p>
							</div>
							<!-- End Header -->
							<!-- Drop Zoon -->
							<div class="upload-area__drop-zoon drop-zoon">
								<span class="drop-zoon__icon">
									<i class='feather icon-file-text'></i>
								</span>
								<div class="doc-upload">
									<div class="doc-edit">
											<input type="hidden" name="client_id" id="client_id" value="">
											<input type='file'  name="report_file" id="image-licence" accept=".pdf"/>
											<label for="driving-licence">Drop your file here or Click to
												browse</label>
									</div>
								</div>
							</div>
							<div class="doc-preview hide_img_preview position-relative" id="img__preview__DL">
								<img id="image-licence-imagePreview" src="../assets/images/licence.png"
									alt="User profile picture">
								<span class="edit-img"><i class="feather icon-edit"></i></span>
							</div>
							<!-- End Drop Zoon -->
						</div>
					</div>

				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
			</form>
		</div>
	</div>
</div>
<div id="report_edit_modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content" style="min-width: 700px;">
			<div class="modal-header">
				<h4 class="modal-title">Creditor Merge</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form action="{{route('attorney_edit_client_report')}}" method="post" novalidate>
			@csrf
			<input type="hidden" class="form-control" id="client_id" name="client_id" value="">
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<table class="display" id="credit-edit-report">
						  <thead class="thead-light">
						  	<tr>
						      <th scope="col">#</th>
						      <th scope="col">Creditor</th>
						      <th scope="col">Account #</th>
						      <th scope="col">Address</th>
						      <th scope="col">Type of Credit</th>
						      <th scope="col">Balance</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td></td>
						      <td></td>
						      <td></td>
						      <td></td>
						      <td></td>
						    </tr>
						  </tbody>
						</table>
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
@endsection
