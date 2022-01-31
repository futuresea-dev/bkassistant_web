@extends('layouts.attorney')
@section('content')
@include("layouts.flash")
<!-- [ Main Content ] start -->
 <div class="row">
	<div class="col-md-4">
		<div class="nav flex-column nav-pills attorney-settings-pills" id="v-pills-tab"
			role="tablist" aria-orientation="vertical">
			<a class="nav-link <?php if($active==1){?>active <?php }?>" id="profile-tab" data-toggle="pill" href="#profile"
				role="tab" aria-controls="profile" aria-selected="false"><i
					class="feather icon-user"></i> Profile </a>
			<a class="nav-link <?php if($active==2){?>active <?php }?>" id="change-password-tab" data-toggle="pill"
				href="#change-password" role="tab" aria-controls="change-password"
				aria-selected="true"><i class="feather icon-lock"></i> Change Password</a>
			<a class="nav-link <?php if($active==3){?>active <?php }?>" id="dabit_card-tab" data-toggle="pill" href="#dabit_card"
				role="tab" aria-controls="dabit_card" aria-selected="false"><i
					class="feather icon-credit-card"></i> Update
				Credit/Debit Card</a>
			<a class="nav-link <?php if($active==4){?>active <?php }?>" id="retainer_doc_tab" data-toggle="pill" href="#retainer_doc" role="tab" aria-controls="dabit_card" aria-selected="false"><i
					class="feather icon-briefcase"></i> Retainer Agreement</a>
			<a class="nav-link <?php if($active==4){?>active <?php }?>" id="additional_add_tab" data-toggle="pill" href="#additional_add_ons" role="tab" aria-controls="dabit_card" aria-selected="false"><i
					class="feather icon-droplet"></i> Additional Add On's</a>
		</div>
	</div>
	<div class="col-md-8">
		<div class="tab-content p-0 shadow-none" id="v-pills-tabContent">
			<div class="tab-pane fade <?php if($active==1){?>show active <?php }?>" id="profile" role="tabpanel"
				aria-labelledby="profile-tab">
				<div class="card attorney-setting-table">
					<div class="card-header justify-content-start">
						<h4>Update Profile</h4>
					</div>
					<div class="card-block">
						<form name="company_profile_frm" id="company_profile_frm" action="{{route('attorney_company_profile')}}" method="post" enctype="multipart/form-data" novalidate>
						@csrf
						<input type="hidden" name="company_id" value="<?php echo (!empty($attorney_company->id))?$attorney_company->id:'';?>">
						<div class="row">
							<div class="col-md-12">
								<div class="avatar-upload">
									<div class="avatar-edit">										
											<input type='file' name="company_logo" id="imageUpload" accept=".png, .jpg, .jpeg" /> <label for="imageUpload"></label>										
									</div>
									<div class="avatar-preview">
									<?php if(!empty($attorney_company->company_logo) && file_exists(public_path().'/'.$attorney_company->company_logo)){?>
									<img class="profile-user-img img-responsive img-circle" id="imagePreview" src="{{url($attorney_company->company_logo)}}" alt="User profile picture">
									<?php }else{?>
										<img class="profile-user-img img-responsive img-circle" id="imagePreview" src="{{url('assets/images/user/avatar-2.jpg')}}" alt="User profile picture">
									<?php }?>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label> Attorny Name </label>
								<input type="text" class="form-control mb-4" name="attorney_name" value="{{old('card_name',(!empty(auth()->user()->name))?auth()->user()->name:'')}}"
									placeholder="Attorny Name ">
								@if ($errors->has('attorney_name'))
									<p class="help-block text-danger">{{ $errors->first('attorney_name') }}</p>
								@endif
							</div>
							<div class="col-sm-6">
								<label>State Bar # </label>
								<input type="text" class="form-control mb-4" name="state_bar" value="{{old('card_name',(!empty($attorney_company->state_bar))?$attorney_company->state_bar:'')}}"
									placeholder="State Bar ">
								@if ($errors->has('state_bar'))
									<p class="help-block text-danger">{{ $errors->first('state_bar') }}</p>
								@endif
							</div>
							<div class="col-sm-12">
								<label>Law Firm Name </label>
								<input type="text" class="form-control mb-4" name="company_name" value="{{old('company_name',(!empty($attorney_company->company_name))?$attorney_company->company_name:'')}}"
									placeholder="Law Firm Name ">
								@if ($errors->has('company_name'))
									<p class="help-block text-danger">{{ $errors->first('company_name') }}</p>
								@endif
							</div>
							<div class="col-sm-12">
								<label>Address </label>
								<textarea class="form-control mb-4" name="attorney_address"	placeholder="Address ">{{old('attorney_address',(!empty($attorney_company->attorney_address))?$attorney_company->attorney_address:'')}}</textarea>
								@if ($errors->has('attorney_address'))
									<p class="help-block text-danger">{{ $errors->first('attorney_address') }}</p>
								@endif
							</div>
							<div class="col-sm-6">
								<label>City </label>
								<input type="text" class="form-control mb-4" name="attorney_city" value="{{old('attorney_city',(!empty($attorney_company->attorney_city))?$attorney_company->attorney_city:'')}}"
									placeholder="City ">
								@if ($errors->has('attorney_city'))
									<p class="help-block text-danger">{{ $errors->first('attorney_city') }}</p>
								@endif
							</div>
							<div class="col-sm-3">
								<label>State </label>
								<input type="text" class="form-control mb-4" name="attorney_state" value="{{old('attorney_state',(!empty($attorney_company->attorney_state))?$attorney_company->attorney_state:'')}}"
									placeholder="State ">
								@if ($errors->has('attorney_state'))
									<p class="help-block text-danger">{{ $errors->first('attorney_state') }}</p>
								@endif
							</div>
							<div class="col-sm-3">
								<label>Zip </label>
								<input type="text" class="form-control mb-4" name="attorney_zip" value="{{old('attorney_zip',(!empty($attorney_company->attorney_zip))?$attorney_company->attorney_zip:'')}}"
									placeholder="Zip ">
								@if ($errors->has('attorney_zip'))
									<p class="help-block text-danger">{{ $errors->first('attorney_zip') }}</p>
								@endif
							</div>
							<div class="col-sm-12">
								<label>Phone #</label>
								<input type="text" class="form-control mb-4" name="attorney_phone" value="{{old('attorney_phone',(!empty($attorney_company->attorney_phone))?$attorney_company->attorney_phone:'')}}"
									placeholder="Phone ">
								@if ($errors->has('attorney_phone'))
									<p class="help-block text-danger">{{ $errors->first('attorney_phone') }}</p>
								@endif
							</div>
							<div class="col-sm-12">
								<label>Fax # </label>
								<input type="text" class="form-control mb-4" name="attorney_fax" value="{{old('attorney_fax',(!empty($attorney_company->attorney_fax))?$attorney_company->attorney_fax:'')}}"
									placeholder="Fax ">
								@if ($errors->has('attorney_fax'))
									<p class="help-block text-danger">{{ $errors->first('attorney_fax') }}</p>
								@endif
							</div>
							<div class="col-sm-12">
								<label>Email </label>
								<input type="text" class="form-control mb-4" name="attorney_email" value="{{old('card_name',(!empty(auth()->user()->email))?auth()->user()->email:'')}}"
									placeholder="Email ">
								@if ($errors->has('attorney_email'))
									<p class="help-block text-danger">{{ $errors->first('attorney_email') }}</p>
								@endif
							</div>
							<div class="col-sm-12 text-right">
								<button type="submit"
									class="btn btn-theme-black">Update</button>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
			<div class="tab-pane fade <?php if($active==2){?>show active <?php }?>" id="change-password" role="tabpanel"
				aria-labelledby="change-password-tab">
				<div class="card attorney-setting-table">
					<div class="card-header justify-content-start">
						<h4>Update Password</h4>
					</div>
					<div class="card-block">
						<form name="update_password_frm" id="update_password_frm" action="{{route('attorney_update_password')}}" method="post" enctype="multipart/form-data" novalidate>
						@csrf
						<div class="row ">
							<div class="col-sm-12">
								<label>Old Password </label>
								<input type="password" class="form-control mb-4"
									placeholder="Old Password " name="password" value="">
								@if ($errors->has('password'))
									<p class="help-block text-danger">{{ $errors->first('password') }}</p>
								@endif
							</div>
							<div class="col-sm-12">
								<label>New Password </label>
								<input type="password" class="form-control mb-4"
									placeholder="New Password " name="new_password" value="">
								@if ($errors->has('new_password'))
									<p class="help-block text-danger">{{ $errors->first('new_password') }}</p>
								@endif
							</div>
							<div class="col-sm-12">
								<label>Re-Enter New Password </label>
								<input type="password" class="form-control mb-4"
									placeholder="Re-Enter New Password " name="confirm_password" value="">
								@if ($errors->has('confirm_password'))
									<p class="help-block text-danger">{{ $errors->first('confirm_password') }}</p>
								@endif
							</div>
							<div class="col-sm-12 text-right">
								<button type="submit"
									class="btn btn-theme-black">Update</button>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
			<div class="tab-pane fade <?php if($active==3){?>show active <?php }?>" id="dabit_card" role="tabpanel"
				aria-labelledby="v-pills-profile-tab">
				<div class="card attorney-setting-table">
					<div class="card-header justify-content-start">
						<h4>Update Credit / Debit Card Details</h4>
					</div>
					<div class="card-block">
						<form name="payment_frm" id="payment_frm" action="{{route('attorney_payment')}}" method="post">
						@csrf
						<div class="row ">
							<div class="col-sm-12">
								<label>Card Holder Name </label>
								<input type="text" class="form-control mb-4" name="card_holder_name" value="{{old('card_name',(!empty($attorneycards->card_name))?$attorneycards->card_name:'')}}" placeholder="Card Holder ">
								@if ($errors->has('card_holder_name'))
									<p class="help-block text-danger">{{ $errors->first('card_holder_name') }}</p>
								@endif
							</div>
							<div class="col-sm-12">
								<?php 
									if(!empty($attorneycards->last4)){
										$attorneycards->last4='xxxxxxxxxxxx'.$attorneycards->last4;
									}
								?>
								<label>Card Number </label>
								<input type="text" class="form-control mb-4" name="card_number" value="{{old('card_number',(!empty($attorneycards->last4))?$attorneycards->last4:'')}}" placeholder="Card Number " maxlength="20">
								@if ($errors->has('card_number'))
									<p class="help-block text-danger">{{ $errors->first('card_number') }}</p>
								@endif
							</div>
							<div class="col-sm-12 mb-4">
								<div class="row">
									<div class="col-md-6 col-6">
										<label>Expiry Month</label>
										<?php 
										$months=['1'=>'January','2'=>'February','3'=>'March','4'=>'April','5'=>'May','6'=>'June','7'=>'July','8'=>'August','9'=>'September','10'=>'October','11'=>'November','12'=>'December'];
										?>
										<select id='expireMM' class="form-control"  name="exp_month">
											<option value=''>Month</option>
											<?php foreach($months as $key=>$val){?>
												<option value='{{$key}}' <?php echo (!empty($attorneycards->exp_month) && $key==$attorneycards->exp_month)?"selected='selected'":"";?>>{{$val}}</option>
											<?php }?>											
										</select>
										@if ($errors->has('exp_month'))
											<p class="help-block text-danger">{{ $errors->first('exp_month') }}</p>
										@endif
									</div>
									<div class="col-md-6 col-6">
										<label>Expiry Year</label>										
										<select name='exp_year' id='expireYY' class="form-control">
											<option value=''>Year</option>
											<?php $year=2020;
											for($i=0;$i<10;$i++){?>
											<option value='{{$year}}' <?php echo (!empty($attorneycards->exp_year) && $year==$attorneycards->exp_year)?"selected='selected'":"";?>>{{$year}}</option>
											<?php $year=$year+1;?>											
											<?php }?>							
										</select>
										@if ($errors->has('exp_year'))
											<p class="help-block text-danger">{{ $errors->first('exp_year') }}</p>
										@endif	
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<label>CVC</label>
								<input type="text" class="form-control mb-4" value="{{old('cvc','')}}" name='cvc' placeholder="cvc" maxlength="5">
								@if ($errors->has('cvc'))
									<p class="help-block text-danger">{{ $errors->first('cvc') }}</p>
								@endif	
							</div>
							<div class="col-sm-12 text-right">
								<button type="submit"
									class="btn btn-theme-black">Update</button>
							</div>
						</div>
						</form>
					</div>
				</div>

			</div>
			<div class="tab-pane fade <?php if($active==1){?>show active <?php }?>" id="retainer_doc" role="tabpanel"
				aria-labelledby="profile-tab">
				<div class="card attorney-setting-table">
					<div class="card-header justify-content-start">
						<h4>Retainer Agreement</h4>
					</div>
					<div class="card-block">
						<form name="attorney_retainer_doc_frm" id="attorney_retainer_doc_frm" action="{{route('attorney_retainer_doc')}}" method="post" enctype="multipart/form-data" novalidate>
							@csrf						
							<div class="row">
								<div class="col-md-12">
									<div class="avatar-upload">
										<div class="avatar-edit">										
											<input type='file' name="retainer_document" id="retainer_document" accept=".png, .jpg, .jpeg" /> <label for="retainer_document"></label>										
										</div>
										<div class="avatar-preview" id="retainer__preview__DL">
											<img class="profile-user-img img-responsive img-circle" id="retainer_document_imagePreview" src="{{url('assets/images/documents/report.png')}}" alt="Retainer Document">
										</div>
										<div class="doc-preview hide_img_preview position-relative" id="both__preview__DL">
											<iframe id="pdfboth-licence-imagePreview" src="../assets/images/licence.png"
											alt="User profile picture" width="150"height="150" type="application/pdf"></iframe>									
										</div>
									</div>
								</div>
								<input type="hidden" name="document_id" value="<?php echo @$retainer_documents->id;?>">
								<div class="col-sm-12 text-right">
									<?php if(!empty($retainer_documents->retainer_document) && file_exists(public_path().'/'.$retainer_documents->retainer_document)){?>
										<a href="{{url($retainer_documents->retainer_document)}}" class="btn btn-primary" download>Download</a>
									<?php }?>
									<button type="submit"
										class="btn btn-theme-black">Upload</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="tab-pane fade <?php if($active==1){?>show active <?php }?>" id="additional_add_ons" role="tabpanel"
				aria-labelledby="profile-tab">
				<div class="card attorney-setting-table">
					<div class="card-header justify-content-start">
						<h4>Additional Add On's</h4>
					</div>
					<div class="card-block">
						<div class="row">
							<div class="col-md-6">
								<div class="welcome-box">
										<div class="img">
											<img src="{{url('assets/images/welcome-2.png')}}" class="img-fluid" width="50px">
										</div>
										<div class="content-box">
											<h4>Additional cost</h4>
										</div>
									<div class="mt-3">
										<?php if(!empty($attorneycards)){?>
										<button type="button" class="btn btn-theme-black" onclick="video_subscription();">Manage</button>
										<?php }else{?>
										<button type="button" class="btn btn-theme-black" onclick="payment_pending();">Manage</button>
										<?php }?>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="welcome-box">
									<div class="img">
										<img src="{{url('assets/images/welcome-1.jpg')}}" class="img-fluid" width="50px">
									</div>
									<div class="content-box">
										<h4>Extended Storage</h4>
									</div>
									<div class="mt-3">
										<?php if(!empty($attorneycards)){?>
										<button type="button" class="btn btn-theme-black" onclick="storage_subscription();">Manage</button>
										<?php }else{?>
										<button type="button" class="btn btn-theme-black" onclick="payment_pending();">Manage</button>
										<?php }?>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="welcome-box">
									<div class="img">
										<img src="{{url('assets/images/welcome-2.png')}}" class="img-fluid" width="50px">
									</div>
									<div class="content-box">
										<h4>Welcome Video</h4>
									</div>
									<div class="mt-3">
										<?php if(!empty($attorneycards)){?>
										<button type="button" class="btn btn-theme-black" onclick="video_subscription();">Manage</button>
										<?php }else{?>
										<button type="button" class="btn btn-theme-black" onclick="payment_pending();">Manage</button>
										<?php }?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- [ Main Content ] end -->
</div>
<div id="subscribe_storage" class="modal fade" role="dialog">
	<div class="modal-dialog modal-md">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Subscription</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
			<form action="{{route('attorney_subscription')}}" method="post" novalidate>
			@csrf
				<div class="row ">
					<div class="col-sm-12">						
						<h4 class="">Subscribe Extended Storage</h4>						
						<input type="hidden" name="type" value="1">
						<input type="hidden" name="amount" value="5">
						<div class="pay pt-3">
							<?php if(!empty($storage_subscription->id)){?>
							<input type="hidden" name="id" value="<?php echo $storage_subscription->id; ?>">
							<?php if(!empty($storage_subscription->subscribe)){?>
								<input type="hidden" name="subscribe" value="0">
								<button type="submit" class="btn btn-theme-black w-100 font-lg-18">Unsubscribe</button>
								<?php }else{?>
								<input type="hidden" name="subscribe" value="1">
								<button type="submit" class="btn btn-theme-black w-100 font-lg-18">Pay <?php echo "$5";?> & Subscribe</button>
								<?php }?>
							<?php }else{?>
							<input type="hidden" name="subscribe" value="1">
							<button type="submit" class="btn btn-theme-black w-100 font-lg-18">Pay <?php echo "$5";?> & Subscribe</button>
							<?php }?>
						</div>
					</div>

				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div id="subscribe_welcome_video" class="modal fade" role="dialog">
	<div class="modal-dialog modal-md">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Subscription</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
			<form action="{{route('attorney_subscription')}}" method="post" novalidate enctype="multipart/form-data" id="video_subscription_frm">
			@csrf
				<div class="row ">
					<div class="col-sm-12">						
						<h4 class="">Subscribe Welcome Video</h4>
						<div class="col-sm-12">
							<label>Video Thumbnail image  </label>
							<input type="file" name="thumbnail_file" class="form-control required" accept=".png, .jpg, .jpeg">
						</div>
						<div class="col-sm-12">
							<label>Video Link  </label>
							<textarea name="video_link" class="form-control required" rows="6"><?php if(!empty($video_subscription->video_link)){ echo $video_subscription->video_link;}?></textarea>
						</div>
						<input type="hidden" name="type" value="2">
						<input type="hidden" name="amount" value="30">
						<div class="pay pt-3">
						<?php if(!empty($video_subscription->id)){?>
							<input type="hidden" name="id" value="<?php echo $video_subscription->id; ?>">
							<?php if(!empty($video_subscription->stripe_subscription_id) && !empty($video_subscription->subscribe)){?>
							<input type="hidden" name="subscribe" value="0">
							<button type="submit" class="btn btn-theme-black w-100 font-lg-18">Unsubscribe</button>
							<?php }else{?>
							<input type="hidden" name="subscribe" value="1">
							<button type="submit" class="btn btn-theme-black w-100 font-lg-18">Pay <?php echo "$30";?> & Subscribe</button>
							<?php }?>
						<?php }else{?>
							<input type="hidden" name="subscribe" value="1">
							<button type="submit" class="btn btn-theme-black w-100 font-lg-18">Pay <?php echo "$30";?> & Subscribe</button>
						<?php }?>
						</div>
					</div>

				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<style>
.hide_img_preview{display:none;}
</style>
<style>
	.welcome-box {
		box-shadow: rgb(50 50 93 / 25%) 0px 2px 5px -1px, rgb(0 0 0 / 30%) 0px 1px 3px -1px;
		text-align: center;
	}

	.welcome-box .img {
		border: 5px solid #cbcbcb;
		display: inline-block;
		padding: 30px;
		border-radius: 50%;
	}

	.welcome-box .content-box {
		padding-top: 20px;
	}

	.welcome-box {
		box-shadow: rgb(50 50 93 / 25%) 0px 2px 5px -1px, rgb(0 0 0 / 30%) 0px 1px 3px -1px;
		text-align: center;
		padding: 40px 15px;
	}
	.error{color:#ff0000;}
	
	.attorney-setting-table .card-block .col-md-6 {
   	 	margin: 0 0 30px 0;
	}

</style>
<script src="{{ asset('assets/js/jquery.validate.js' )}}"></script>
<script>
$(document).ready(function(){
	$("#video_subscription_frm").validate();	
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
	$("#retainer_document").change(function (data) {
		var imageFile = data.target.files[0];
		var type = data.target.files[0].type;
		var reader = new FileReader();
		reader.readAsDataURL(imageFile);

		reader.onload = function (evt) {
			if(type=='application/pdf'){
				$('#both__preview__DL').removeClass('hide_img_preview');
				$('#retainer__preview__DL').hide();
				$('#pdfboth-licence-imagePreview').attr('src', evt.target.result);
				$('#pdfboth-licence-imagePreview').hide();
				$('#pdfboth-licence-imagePreview').fadeIn(650);
			}else{
				$('#both__preview__DL').addClass('hide_img_preview');
				$('#retainer__preview__DL').show();
				$('#retainer_document_imagePreview').attr('src', evt.target.result);
				$('#retainer_document_imagePreview').hide();
				$('#retainer_document_imagePreview').fadeIn(650);
			}
		}

	});
});
function storage_subscription(){	
	$("#subscribe_storage").modal('show');
}
function video_subscription(){	
	$("#subscribe_welcome_video").modal('show');
}
function payment_pending(){
	alert("Please register your payment card before make subscription.");
}
</script>
@endsection
