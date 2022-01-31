@extends('layouts.client')
@section('content')
@include("layouts.flash")
<div class="row">
<?php
$attorneydocumentselection=(!empty($attorneydocumentselection->document_selection))?explode(',',$attorneydocumentselection->document_selection):[];
// dump($attorneydocumentselection);
?>
	<div class="col-md-12">
		<div class="questionnaire-wrapper-content pt-3">
			<div class="questionnaire-main-title text-center">
				<div class="row">
				<div class="col-md-12 col-12">
				<h3 class="text-c-blue f-w-800"> Please Upload the Documents</h3>
				</div>
				<div class="col-md-12 col-12">
				<!--p>Here is the list of documents</p-->
				<p class="pt-3 use-document-content container text-secondary">Most if not ALL of the documents we need uploaded are going to the Court and/or the Trustee assigned to your case. So its important they are clear and legible.If you don’t have a scanner you can use your phone or tablet. To scan your documents using your phone:</p>
				</div>
				</div>

    				<div class="row scan-os cstm-id">

					<div class="col-md-4 col-12">
					<a href="https://apps.apple.com/us/app/microsoft-lens-pdf-scanner/id975925059" class="scan text-black" target="_blank">
							  <span style=" display: block;" class="span">Apple</span>
							<span>Microsoft Lens App </span>
						</a>
					</div>

					<div class="col-md-4 col-12">
					<a class="btn shadow-2 mb-4 download-form" data-toggle="modal" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video" data-video="https://www.youtube.com/embed/CNfXARUAfNM" data-video2="https://www.youtube.com/embed/TfPx8TfwKDY">
							<img src="{{url('assets/images/video-play.jpg')}}" style="height: 36px;display: block;margin: 1px auto;"> Click for Step by Step video
						</a>
					</div>

					<div class="col-md-4 col-12">
					<a href="https://play.google.com/store/apps/details?id=com.microsoft.office.officelens&hl=en_IN&gl=US" class="scan text-black" target="_blank">
							<span style=" display: block;" class="span">Android</span>
							<span> Microsoft Lens App </span>
						</a>
					</div>		
					
					</div>
			</div>
		</div>
		<div class="container-1140">
			<div class="upload-documents-wrapper">
				<div class="row">
					<?php if(in_array('Drivers_License',$attorneydocumentselection)){ ?>
					<div class="col-md-6 col-12">
						<a class="btn shadow-2 mb-4 download-form" data-video="https://www.youtube.com/embed/W55GygNJCEg" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video" data-video2="https://www.youtube.com/embed/Z4ujgDx6teY">
						<img src="{{url('assets/images/video-play.jpg')}}" style="height: 36px;display: block;margin: 1px auto;"> Click for Step by Step video
						</a>
						<a href="javascript:void(0);" class="doc-card-main" data-toggle="modal" data-type="Drivers_License" onclick="both_upload_modal($(this).data('type'))">
							<div class="doc-card">
								<span class="doc-img d-block">
									<img src="{{url('assets/images/documents/licence.png')}}" class="licence-img">
								</span>
								<span class="doc-type d-block">
									<h4 class="text-c-blue f-w-800">Drivers License/ Gov ID </h4>
									<span class="file-size text-secondary">3MB</span>
								</span>
							</div>
							<?php if(in_array('Drivers_License',@$documentuploaded)){?>
							<div class="doc-done">
								<img src="{{url('assets/images/documents/doc-done.png')}}">
							</div>
							<?php }?>
						</a>
					</div>
					<?php }?>
					<?php if(in_array('Social_Security_Card',$attorneydocumentselection)){ ?>
					<div class="col-md-6 col-12">

						<a href="javascript:void(0);" class="doc-card-main" data-toggle="modal" data-type="Social_Security_Card" onclick="both_upload_modal($(this).data('type'))">
							<div class="doc-card">
								<span class="doc-img d-block">
									<img src="{{url('assets/images/documents/guard.png')}}" alt="">
								</span>
								<span class="doc-type d-block">
									<h4 class="text-c-blue f-w-800">Social Security Card/ITIN </h4>
									<span class="file-size text-secondary">3MB</span>
								</span>
							</div>
							<?php if(in_array('Social_Security_Card',@$documentuploaded)){?>
							<div class="doc-done">
								<img src="{{url('assets/images/documents/doc-done.png')}}">
							</div>
							<?php }?>
						</a>
							<a class="btn shadow-2 mb-4 download-form" data-video="https://www.youtube.com/embed/QIL2RGvdyek" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video" data-video2="https://www.youtube.com/embed/Q7rpc5wdY0g">
						<img src="{{url('assets/images/video-play.jpg')}}" style="height: 36px;display: block;margin: 1px auto;"> Click for Step by Step video
						</a>
					</div>
					<?php }?>
					<?php if(in_array('Last_3_months_Pay_Stubs',$attorneydocumentselection)){ ?>
					<div class="col-md-6 col-12">
						<a class="btn shadow-2 mb-4 download-form" data-video="https://www.youtube.com/embed/ysuJge2uwjY" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video" data-video2="https://www.youtube.com/embed/MM5yNXHMzFg">
						 <img src="{{url('assets/images/video-play.jpg')}}" style="height: 36px;display: block;margin: 1px auto;"> Click for Step by Step video
						</a>
						<a href="javascript:void(0);" class="doc-card-main" data-toggle="modal" data-type="Last_3_months_Pay_Stubs" onclick="mutiple_upload_modal($(this).data('type'))">

							<div class="doc-card">
								<span class="doc-img d-block">
									<img src="{{url('assets/images/documents/credit-card.png')}}" alt="">
								</span>
								<span class="doc-type d-block">
									<h4 class="text-c-blue f-w-800">Last 3 months Pay Stubs </h4>
									<span class="file-size text-secondary">4MB</span>
								</span>
							</div>
							<?php if(in_array('Last_3_months_Pay_Stubs',@$documentuploaded)){?>
							<div class="doc-done">
								<img src="{{url('assets/images/documents/doc-done.png')}}">
							</div>
							<?php }?>
						</a>
					</div>
					<?php }?>
					<?php if(in_array('Credit_Counseling_Certificate',$attorneydocumentselection)){ ?>
					<div class="col-md-6 col-12">
						<a href="javascript:void(0);" class="doc-card-main" data-toggle="modal" data-type="Credit_Counseling_Certificate" onclick="both_upload_modal($(this).data('type'))">

							<div class="doc-card">
								<span class="doc-img d-block">
									<img src="{{url('assets/images/documents/Counseling.png')}}" alt="">
								</span>
								<span class="doc-type d-block">
									<h4 class="text-c-blue f-w-800">Credit Counseling Certificate </h4>
									<span class="file-size text-secondary">3MB</span>
								</span>
							</div>
							<?php if(in_array('Credit_Counseling_Certificate',@$documentuploaded)){?>
							<div class="doc-done">
								<img src="{{url('assets/images/documents/doc-done.png')}}">
							</div>
							<?php }?>
						</a>
						<a class="btn shadow-2 mb-4 download-form" data-video="https://www.youtube.com/embed/qqCMrVFELrg" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video" data-video2="https://www.youtube.com/embed/O7avARMhU04">
					 <img src="{{url('assets/images/video-play.jpg')}}" style="height: 36px;display: block;margin: 1px auto;"> 	Click for Step by Step video
						</a>
					</div>
					<?php }?>
					<?php if(in_array('Last_2_years_Tax_Returns',$attorneydocumentselection)){ ?>
					<div class="col-md-6 col-12">
						<a class="btn shadow-2 mb-4 download-form" data-video="https://www.youtube.com/embed/v1bzuyyMjxw" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video"  data-video2="https://www.youtube.com/embed/23JHyOGkqbQ" >
					 <img src="{{url('assets/images/video-play.jpg')}}" style="height: 36px;display: block;margin: 1px auto;"> 	Click for Step by Step video
						</a>

						<a href="javascript:void(0);" class="doc-card-main" data-toggle="modal" data-type="Last_2_years_Tax_Returns" onclick="mutiple_upload_modal($(this).data('type'))">

							<div class="doc-card">
								<span class="doc-img d-block">
									<img src="{{url('assets/images/documents/tax.png')}}" alt="">
								</span>
								<span class="doc-type d-block">
									<h4 class="text-c-blue f-w-800">Last years Filed Tax Return </h4>
									<span class="file-size text-secondary">5MB</span>
								</span>
							</div>
							<?php if(in_array('Last_2_years_Tax_Returns',@$documentuploaded)){?>
							<div class="doc-done">
								<img src="{{url('assets/images/documents/doc-done.png')}}">
							</div>
							<?php }?>
						</a>
					</div>
					<?php }?>
					<?php if(in_array('Credit_Report_2_reports',$attorneydocumentselection)){ ?>
					<div class="col-md-6 col-12">
						<a href="javascript:void(0);" class="doc-card-main" data-toggle="modal" data-type="Credit_Report_2_reports" onclick="mutiple_upload_modal($(this).data('type'))">

							<div class="doc-card">
								<span class="doc-img d-block">
									<img src="{{url('assets/images/documents/report.png')}}" alt="">
								</span>
								<span class="doc-type d-block">
									<h4 class="text-c-blue f-w-800">Prior Year Filed Tax Return</h4>
									<span class="file-size text-secondary">5MB</span>
								</span>
							</div>
							<?php if(in_array('Credit_Report_2_reports',@$documentuploaded)){?>
							<div class="doc-done">
								<img src="{{url('assets/images/documents/doc-done.png')}}">
							</div>
							<?php }?>
						</a>
								<a class="btn shadow-2 mb-4 download-form" data-video="https://www.youtube.com/embed/v1bzuyyMjxw" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video"  data-video2="https://www.youtube.com/embed/23JHyOGkqbQ" >
						 <img src="{{url('assets/images/video-play.jpg')}}" style="height: 36px;display: block;margin: 1px auto;"> Click for Step by Step video
						</a>
					</div>
					<?php }?>
					
				</div>
				<div class="optional-document ">
					<!--<h3 class=" f-w-800 pb-3"> Optional Documents</h3>-->
					<div class="row">
						
					<?php if(in_array('Current_Auto_Loan_Statement',$attorneydocumentselection)){ ?>
						<div class="col-md-6 col-12">
							<a class="btn shadow-2 mb-4 download-form" data-video="https://www.youtube.com/embed/j-YbFrVDEEI" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video"  data-video2="https://www.youtube.com/embed/1fAp3bm1G4Y" >
							 <img src="{{url('assets/images/video-play.jpg')}}" style="height: 36px;display: block;margin: 1px auto;"> Click for Step by Step video
							</a>
							<a href="javascript:void(0);" class="doc-card-main" data-toggle="modal" data-type="Current_Auto_Loan_Statement" onclick="both_upload_modal($(this).data('type'))">
								<div class="doc-card">
									<span class="doc-img d-block">
										<img src="{{url('assets/images/documents/cashback.png')}}" class="licence-img">
									</span>
									<span class="doc-type d-block">
										<h4 class="text-c-blue f-w-800">Current Auto Loan Statement </h4>
										<span class="file-size text-secondary">3MB</span>
									</span>
								</div>
								<?php if(in_array('Current_Auto_Loan_Statement',@$documentuploaded)){?>
								<div class="doc-done">
									<img src="{{url('assets/images/documents/doc-done.png')}}">
								</div>
								<?php }?>
							</a>
						</div>
						<?php }?>
					<?php if(in_array('Current_Mortgage_Statement',$attorneydocumentselection)){ ?>
						<div class="col-md-6 col-12">

							<a href="javascript:void(0);" class="doc-card-main" data-toggle="modal" data-type="Current_Mortgage_Statement" onclick="both_upload_modal($(this).data('type'))">
								<div class="doc-card">
									<span class="doc-img d-block">
										<img src="{{url('assets/images/documents/mortgage.png')}}" class="licence-img">
									</span>
									<span class="doc-type d-block">
										<h4 class="text-c-blue f-w-800">Current Mortgage Statement </h4>
										<span class="file-size text-secondary">3MB</span>
									</span>
								</div>
								<?php if(in_array('Current_Mortgage_Statement',@$documentuploaded)){?>
								<div class="doc-done">
									<img src="{{url('assets/images/documents/doc-done.png')}}">
								</div>
								<?php }?>
							</a>
								<a class="btn shadow-2 mb-4 download-form" data-video="https://www.youtube.com/embed/FEQMs9DhXtY" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video"  data-video2="https://www.youtube.com/embed/Ejmu1tBAPr8" >
							 <img src="{{url('assets/images/video-play.jpg')}}" style="height: 36px;display: block;margin: 1px auto;"> Click for Step by Step video
							</a>
						</div>
						<?php }?>
					<?php if(in_array('Life_Insurance_Declaration_Pages',$attorneydocumentselection)){ ?>
						<div class="col-md-6 col-12">
							<a class="btn shadow-2 mb-4 download-form" data-video="https://www.youtube.com/embed/HEYqESHchko" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video"  data-video2="https://www.youtube.com/embed/677Gdwv0WHg" >
						 <img src="{{url('assets/images/video-play.jpg')}}" style="height: 36px;display: block;margin: 1px auto;"> 	Click for Step by Step video
							</a>

							<a href="javascript:void(0);" class="doc-card-main" data-toggle="modal" data-type="Life_Insurance_Declaration_Pages" onclick="both_upload_modal($(this).data('type'))">
								<div class="doc-card">
									<span class="doc-img d-block">
										<img src="{{url('assets/images/documents/life-insurance.png')}}"
											class="licence-img">
									</span>
									<span class="doc-type d-block">
										<h4 class="text-c-blue f-w-800">Insurance Documents </h4>
										<span class="file-size text-secondary">4MB</span>
									</span>
								</div>
								<?php if(in_array('Life_Insurance_Declaration_Pages',@$documentuploaded)){?>
								<div class="doc-done">
									<img src="{{url('assets/images/documents/doc-done.png')}}">
								</div>
								<?php }?>
							</a>
						</div>
					<?php }?>
					<?php if(in_array('Miscellaneous_Doucments',$attorneydocumentselection)){ ?>


						<div class="col-md-6 col-12">

							<a href="javascript:void(0);" class="doc-card-main" data-toggle="modal" data-type="Miscellaneous_Doucments" onclick="both_upload_modal($(this).data('type'))">
								<div class="doc-card">
									<span class="doc-img d-block">
										<img src="{{url('assets/images/documents/report.png')}}" class="licence-img">
									</span>
									<span class="doc-type d-block">
										<h4 class="text-c-blue f-w-800">Miscellaneous Documents </h4>
										<span class="file-size text-secondary">4MB</span>
									</span>
								</div>
								<?php if(in_array('Miscellaneous_Doucments',@$documentuploaded)){?>
								<div class="doc-done">
									<img src="{{url('assets/images/documents/doc-done.png')}}">
								</div>
								<?php }?>
							</a>
								<a class="btn shadow-2 mb-4 download-form" data-video="https://www.youtube.com/embed/qzy1wbK4yNE" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video"  data-video2="https://www.youtube.com/embed/koIGfZ_YYAU" >
						<img src="{{url('assets/images/video-play.jpg')}}" style="height: 36px;display: block;margin: 1px auto;"> 	Click for Step by Step video
							</a>
						</div>
						<?php }?>
					
					</div>
				</div>
				<div class="optional-document ">
					<div class="row">
						<?php if(!empty($attorneydocuments)){?>
						<?php foreach($attorneydocuments as $val){?>
							<div class="col-md-6 col-12">

							<a href="javascript:void(0);" class="doc-card-main" data-toggle="modal" data-type="{{$val['document_name']}}" onclick="both_upload_modal($(this).data('type'))">
								<div class="doc-card">
									<span class="doc-img d-block">
										<img src="{{url('assets/images/documents/report.png')}}" class="licence-img">
									</span>
									<span class="doc-type d-block">
										<h4 class="text-c-blue f-w-800">{{$val['document_name']}} </h4>
										<span class="file-size text-secondary">4MB</span>
									</span>
								</div>
								<?php if(in_array($val['document_name'],@$documentuploaded)){?>
								<div class="doc-done">
									<img src="{{url('assets/images/documents/doc-done.png')}}">
								</div>
								<?php }?>
							</a>
								
						</div>
						<?php }}?>
					</div>
				</div>
				<div class="optional-document ">
					<!--<h3 class=" f-w-800 pb-3"> Retainer Documents</h3>-->
					<div class="row justify-content-center">
						<div class="col-md-4 col-12">
							<a href="{{route('client_retainer_documents')}}" class="btn btn-primary shadow-2 mb-4" style="width: 355px; margin: 0 auto;display: block; ">Final Submit to Attorney for Preparation</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<div class="modal fade documents-modal" id="image_document_upload_modal" tabindex="-1" role="dialog"
	aria-labelledby="driving-licenceTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content ">
			<form name="form-image" id="form-image" action="{{route('client_document_uploads')}}" method="post" enctype="multipart/form-data" novalidate>
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
									File should be an image Like .png, .jpg, .jpeg
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
											<input type="hidden" name="document_type" id="document_type" value="">
											<input type='file'  name="document_file" id="image-licence" accept=".png, .jpg, .jpeg"/>
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
<div class="modal fade documents-modal" id="mutiple_document_upload_modal" tabindex="-1" role="dialog"
	aria-labelledby="driving-licenceTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content ">
			<form name="form-pdf" id="form-pdf" action="{{route('client_mutiple_document_uploads')}}" method="post" enctype="multipart/form-data" novalidate>
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
									File should be an Pdf Format
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
											<input type="hidden" name="document_type" id="document_type" value="">
											<input type='file'  name="document_file[]" id="pdf-licence" accept=".png, .jpg, .jpeg, .pdf,.doc,.docx" multiple />
											<label for="driving-licence">Drop your file here or Click to
												browse</label>
											<label id="dropmutiple_file_name" class="dropmutiple_file_name">Drop your file here or Click to
												browse</label>
									</div>
								</div>
							</div>
							<div class="doc-preview hide_img_preview position-relative" id="pdf__preview__DL">

								<iframe id="pdf-licence-imagePreview" src="../assets/images/licence.png"
									alt="User profile picture" width="150"height="150" type="application/pdf"></iframe>
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
<div class="modal fade documents-modal" id="both_document_upload_modal" tabindex="-1" role="dialog"
	aria-labelledby="driving-licenceTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content ">
			<form name="form-both" id="form-both" action="{{route('client_document_uploads')}}" method="post" enctype="multipart/form-data" novalidate>
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
									File should be an image Like .png, .jpg, .jpeg  .pdf,.doc, docx
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
											<input type="hidden" name="document_type" id="document_type" value="">
											<input type='file'  name="document_file" id="both-licence" accept=".png, .jpg, .jpeg, .pdf,.doc,.docx"/>
											<label for="driving-licence">Drop your file here or Click to
												browse</label>
											<label id="drop_file_name" class="drop_file_name">Drop your file here or Click to
												browse</label>
									</div>

								</div>
							</div>
							<div class="doc-preview hide_img_preview position-relative" id="both__preview__DL">
								<img id="both-licence-imagePreview" src="../assets/images/licence.png"
									alt="User profile picture">
								<iframe id="pdfboth-licence-imagePreview" src="../assets/images/licence.png"
									alt="User profile picture" width="150"height="150" ></iframe>
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
<!-- Modal -->
<div class="modal fade" id="video_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
    <div class="modal-content">
        <div class="container absolute-swich-btn">
		  <div class="text-center btn-cstm-toggle">
			  <span class="text-gray">English</span>
				  <label class="switch">
					  <input type="checkbox" name="graduate">
					  <span class="slider round"></span>
				  </label>
			  <span class="text-primary">Spanish</span>
			</div>

		<div class="col-md-12 ug mt-5">

		   <div class="card bg-light">
			<div class="card-body text-center">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Jfrjeg26Cwk" id="video"  allowscriptaccess="always" allow="autoplay" style="width: 100%;height: 390px"></iframe>
			</div>
		  </div>

		  </div>

		<div class="col-md-12 mt-5 phd" style="display: none" >
			<div class="card bg-primary">
			<div class="card-body text-center">
			  <iframe id="player1" style="width: 100%;height: 390px"  src="https://www.youtube.com/embed/mtvASE3jjxI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
			</div>
		  </div>

		  </div>
	</div>


 <!-- <div class="modal-body">-->
 <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button> -->
	<!--<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Jfrjeg26Cwk" id="video"  allowscriptaccess="always" allow="autoplay" style="width: 100%;height: 80%"></iframe>-->

 <!-- </div>-->
    </div>
  </div>
</div>
<style>
.drop_file_name,.dropmutiple_file_name{display:none;top: 74px; color:#012cae;}
/*21  10 21*/
@media  screen and (min-width: 320px) and (max-width: 767px) {
    #video_modal .modal-content {
    width: 95% !important;
    height: 390px !important;
}
#video_modal .modal-dialog {
    width: 100% !important;
}
.text-center.btn-cstm-toggle iframe {
    width: 100% !important;
    height: 190px !important;
}
body .upload-documents-wrapper a.btn.shadow-2.mb-4.download-form {
    width: 22%;
    font-size: 13px;
    padding: 10px 0;
}
.optional-document a.btn.btn-primary.shadow-2.mb-4 {
    width: 100% !important;
}
body .upload-documents-wrapper a.doc-card-main {
    width: 73%;
    float: left;
    white-space: normal;
    word-break: break-word;
}
body .upload-documents-wrapper span.doc-type.d-block h4 {
    word-break: break-word;
    width: 74%;
}}
span.text-gray {
    right: 10px;
}
span.text-primary {
    left: 10px;
}
span.text-gray, span.text-primary {
    position: relative;
    bottom: 22px;
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}
.text-center.btn-cstm-toggle {
    position: absolute;
    top: 11px;
    z-index: 9;
    width: 100%;
}
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

/*TOGGLE END*/


.upload-documents-wrapper a.btn.shadow-2.mb-4.download-form {
    width: 21%;
    float: left;
    word-break: break-word;
    white-space: normal;
    font-size: 11px;
    padding: 10px;
    box-shadow: none;
}
.upload-documents-wrapper a.doc-card-main {
    width: 77%;
    float: left;
}
.upload-documents-wrapper span.doc-type.d-block h4 {
    font-size: 16px;
    font-weight: bold;
}
.upload-documents-wrapper .doc-img img {
    width: 39px;
}
.container.absolute-swich-btn .card.bg-primary {
    width: 97%;
}
/*END 21-10-21*/




#video_modal .modal-dialog {
  height: 90%; /* = 90% of the .modal-backdrop block = %90 of the screen */
  width: 900px;
}
#video_modal .modal-content {
    height: 596px;
    width: 900px;
    overflow: hidden;
}
.modal {
  text-align: center;
}

@media screen and (min-width: 768px) {
  #video_modal.modal:before {
    display: inline-block;
    vertical-align: middle;
    content: " ";
    height: 100%;
  }
}

#video_modal .modal-dialog {
	max-width: 100%;
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}
.questionnaire-main-title .text-center{display:none;}
</style>
<link rel="stylesheet" href="{{ asset('assets/css/uploaded-doc.css')}}">
<script src="{{ asset('assets/js/upload-document.js')}}"></script>

<script>
    $(document).ready(function(){
        $('[name="graduate"]').change(function(){
            if($('[name="graduate"]:checked').is(":checked")){
                $('.ug').hide();
				$iframe = $('.ug').find("iframe");
				$iframe.attr("src", $iframe.attr("src"));
                $('.phd').show();
            }else{
                $('.ug').show();
                $('.phd').hide();
				$iframe = $('.phd').find("iframe");
				$iframe.attr("src", $iframe.attr("src"));
            }
        });
    });
function run_tutorial_videos(obj,element){
	var video_src=$(obj).attr('data-video');
	var video_src2=$(obj).attr('data-video2');
	$("#video").attr('src',video_src);
	$("#player1").attr('src',video_src2);
	$(element).modal('show');
}
$(function(){
  $('#video_modal').on('hidden.bs.modal', function (e) {
    $iframe = $(this).find("iframe");
    $iframe.attr("src", $iframe.attr("src"));
  });
});
</script>
@endsection
