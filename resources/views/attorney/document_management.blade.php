@extends('layouts.attorney')
@section('content')
@include("layouts.flash")
<!-- [ Main Content ] start -->
 <div class="row">
	<!--[ Recent Users ] start-->
	<div class="col-xl-12 col-md-12">
		<div class="card listing-card">
			<form action="{{route('attorney_document_selection')}}" method="post" >
				@csrf
				<div class="doc_selection">
				<div class="form-group">
				<?php
				$document_selection_items=array(
				'Drivers_License'=>'Drivers License/ Gov ID',
				'Social_Security_Card'=>'Social Security Card/ITIN',
				'Last_3_months_Pay_Stubs'=>'Last 3 months Pay Stubs',
				'Credit_Counseling_Certificate'=>'Credit Counseling Certificate',
				'Last_2_years_Tax_Returns'=>'Last years Filed Tax Return',
				'Credit_Report_2_reports'=>'Prior Year Filed Tax Return',
				'Current_Auto_Loan_Statement'=>'Current Auto Loan Statement',
				'Current_Mortgage_Statement'=>'Current Mortgage Statement',
				'Life_Insurance_Declaration_Pages'=>'Insurance Documents',
				'Miscellaneous_Doucments'=>'Miscellaneous Documents'
				);
				$document_selection=(!empty($document_selection->document_selection))?explode(',',$document_selection->document_selection):[];
				?>
					<select name="document_selection[]" id="document_selection" class="form-control" multiple>
					<?php foreach($document_selection_items as $key=>$val){?>
						<option value="{{$key}}" <?php if(!empty($document_selection) && in_array($key,$document_selection)){?> selected='selected' <?php }?>>{{$val}}</option>
					<?php }?>
					</select>
				</div>
				&nbsp;
				<div class="add-btn">
					<button class="label theme-bg2 text-white f-12" type="submit">
					<span class="input-group-append search-btn">Make Document Selection</span></button>
				</div>
				</div>
			</form>
			<div class="card-header">
				<div class="add-btn">
					<a onclick="$('#add_document').modal('show')" class="label theme-bg2 text-white f-12">
					<span class="input-group-append search-btn">Add Document</span></a>
				</div>
			</div>
			<div class="card-block px-0 py-0">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>
									Id
								</th>
								<th>
									Name
								</th>								
								<th>
									Action
								</th>
							</tr>
						</thead>
						<tbody>
						<?php if(!empty($documents) && count($documents)>0){?>
						<?php foreach($documents as $val){?>
							<tr class="unread">
								<td><span>{{$val['id']}}</span></td>
								<td><span>{{$val['document_name']}}</span></td>
								<td>
									<a href="javascript:void(0);"
										class="label theme-bg text-white rounded action-btn"
										data-toggle="modal" onclick="edit_document(this,<?php echo $val['id'];?>);"><i
											class="feather icon-edit" data-toggle="tooltip"
											title="Edit"></i></a>
									<!--a href="{{route('attorney_client_uploaded_documents',['id'=>$val['id']])}}"
										class="label theme-bg text-white rounded action-btn"
										data-toggle="tooltip" title="View Documents"><i
											class="feather icon-file-text"></i></a-->
									
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
					<?php if(!empty($documents) && count($documents)>0){?>
					{{ $documents->links() }}
					<?php }?>
				</div>
			</div>
		</div>
	</div>
	<!--[ Recent Users ] end-->

</div>
<!-- [ Main Content ] end -->
</div>
<style>
.add-btn a,.add-btn button{height: 41px;}
.doc_selection {
    display: flex;
    float: right;
}
</style>
<script>
$(document).ready(function(){
	$('#document_selection').SumoSelect({placeholder: 'Select options to make active'});
});
function edit_document(obj,id){
	var main_parent	=	$(obj).parents(".unread");	
	var document_name= 	$(main_parent).find('td:eq(1)>span').text();
	console.log(document_name);
	$("#document_id").val(id);
	$("#document_name").val(document_name);
	
	$("#edit_document").modal('show');
}
</script>
<div id="add_document" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Document</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form action="{{route('attorney_document_mgt')}}" method="post" >
			@csrf
			<div class="modal-body">
				<div class="row ">
					<div class="col-sm-12">
						<input type="text" class="form-control mb-4 {{ $errors->has('name') ? 'btn-outline-danger' : '' }}" placeholder="Name " name="document_name" required>
					@if ($errors->has('name'))
						<p class="help-block text-danger">{{ $errors->first('name') }}</p>
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
<div id="edit_document" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Edit Document</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form action="{{route('attorney_document_edit')}}" method="post" >
			@csrf
			<div class="modal-body">
				<div class="row ">
					<div class="col-sm-12">
						<input type="hidden" class="form-control" id="document_id" name="document_id" value="">
						<input type="text" class="form-control mb-4 {{ $errors->has('name') ? 'btn-outline-danger' : '' }}" placeholder="Name " name="document_name" id="document_name" value="" required>
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
