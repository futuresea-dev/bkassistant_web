@extends('layouts.attorney')
@section('content')
@include("layouts.flash")
<!-- [ Main Content ] start -->
 <div class="row">
	<div class="col-md-12">
		<div class="questionnaire-wrapper-content pt-3">
			<div class="questionnaire-main-title text-center">
				<h3 class="text-c-blue f-w-800"> Uploaded Documents</h3>
				<p>Here is the list of documents</p>
			</div>
		</div>
		 <p class="text-center upload-doc-instr">
			Most if not ALL of the documents we need uploaded are going to the Court and/or the Trustee assigned to your case. So its important they are clear and legible.If you don’t have a scanner you can use your phone or tablet.
			To scan your documents using your phone:
		</p>
		<div class="container-1140">
			<div class="upload-documents-wrapper">
				<div class="row">
					<div class="col-md-6 col-12">
					  <a href="https://apps.apple.com/us/app/scanner-pro-document-scanning/id333710667" target="_blank" class="d-block text-black text-right">
						  <div class="scan-os">
							  <span>Scanner Pro App</span>
						  </div>
						  </a>
					</div>
					<div class="col-md-6 col-12">
						<a href="https://play.google.com/store/apps/details?id=com.thegrizzlylabs.geniusscan.free&hl=en_IN&gl=US" target="_blank" class="d-block text-black">
							<div class="scan-os">
								 <span>Scanner App</span>
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-12">
					<?php
					$drivers_license="javascript:void(0);";
					if(!empty($documentuploaded_files['Drivers_License']) && file_exists(public_path().'/'.$documentuploaded_files['Drivers_License'])){
						$drivers_license=url($documentuploaded_files['Drivers_License']);
					}
					?>
						<a href="{{$drivers_license}}" class="doc-card-main"  data-type="Drivers_License" download>
							<div class="doc-card">
								<span class="doc-img d-block">
									<img src="{{url('assets/images/documents/licence.png')}}" class="licence-img">
								</span>
								<span class="doc-type d-block">
									<h4 class="text-c-blue f-w-800">Drivers License </h4>
									<span class="file-size text-secondary">70kb</span>
								</span>
							</div>
							<?php if(in_array('Drivers_License',@$documentuploaded)){?>
							<div class="doc-done">
								<img src="{{url('assets/images/documents/doc-done.png')}}">
							</div>
							<?php }?>
						</a>
					</div>
					<?php
					$Social_Security_Card="javascript:void(0);";
					if(!empty($documentuploaded_files['Social_Security_Card']) && file_exists(public_path().'/'.$documentuploaded_files['Social_Security_Card'])){
						$Social_Security_Card=url($documentuploaded_files['Social_Security_Card']);
					}
					?>
					<div class="col-md-6 col-12">
						<a href="{{$Social_Security_Card}}" class="doc-card-main"  data-type="Social_Security_Card" download>
							<div class="doc-card">
								<span class="doc-img d-block">
									<img src="{{url('assets/images/documents/guard.png')}}" alt="">
								</span>
								<span class="doc-type d-block">
									<h4 class="text-c-blue f-w-800">Social Security Card </h4>
									<span class="file-size text-secondary">70kb</span>
								</span>
							</div>
							<?php if(in_array('Social_Security_Card',@$documentuploaded)){?>
							<div class="doc-done">
								<img src="{{url('assets/images/documents/doc-done.png')}}">
							</div>
							<?php }?>
						</a>
					</div>
					<?php
					$Credit_Report_2_reports="javascript:void(0);";
					if(!empty($documentuploaded_files['Credit_Report_2_reports']) && file_exists(public_path().'/'.$documentuploaded_files['Credit_Report_2_reports'])){
						$Credit_Report_2_reports=url($documentuploaded_files['Credit_Report_2_reports']);
					}
					?>
					<div class="col-md-6 col-12">
						<a href="{{$Credit_Report_2_reports}}" class="doc-card-main"  data-type="Credit_Report_2_reports" download>
							<div class="doc-card">
								<span class="doc-img d-block">
									<img src="{{url('assets/images/documents/report.png')}}" alt="">
								</span>
								<span class="doc-type d-block">
									<h4 class="text-c-blue f-w-800">Credit Report (2 reports) </h4>
									<span class="file-size text-secondary">70kb</span>
								</span>
							</div>
							<?php if(in_array('Credit_Report_2_reports',@$documentuploaded)){?>
							<div class="doc-done">
								<img src="{{url('assets/images/documents/doc-done.png')}}">
							</div>
							<?php }?>
						</a>
					</div>
					<?php
					$Last_2_years_Tax_Returns="javascript:void(0);";
					if(!empty($documentuploaded_files['Last_2_years_Tax_Returns']) && file_exists(public_path().'/'.$documentuploaded_files['Last_2_years_Tax_Returns'])){
						$Last_2_years_Tax_Returns=url($documentuploaded_files['Last_2_years_Tax_Returns']);
					}
					?>
					<div class="col-md-6 col-12">
						<a href="{{$Last_2_years_Tax_Returns}}" class="doc-card-main"  data-type="Last_2_years_Tax_Returns" download>
							<div class="doc-card">
								<span class="doc-img d-block">
									<img src="{{url('assets/images/documents/tax.png')}}" alt="">
								</span>
								<span class="doc-type d-block">
									<h4 class="text-c-blue f-w-800">Last 2 years Tax Returns </h4>
									<span class="file-size text-secondary">70kb</span>
								</span>
							</div>
							<?php if(in_array('Last_2_years_Tax_Returns',@$documentuploaded)){?>
							<div class="doc-done">
								<img src="{{url('assets/images/documents/doc-done.png')}}">
							</div>
							<?php }?>
						</a>
					</div>
					<?php
					$Last_3_months_Pay_Stubs="javascript:void(0);";
					if(!empty($documentuploaded_files['Last_3_months_Pay_Stubs']) && file_exists(public_path().'/'.$documentuploaded_files['Last_3_months_Pay_Stubs'])){
						$Last_3_months_Pay_Stubs=url($documentuploaded_files['Last_3_months_Pay_Stubs']);
					}
					?>
					<div class="col-md-6 col-12">
						<a href="{{$Last_3_months_Pay_Stubs}}" class="doc-card-main"  data-type="Last_3_months_Pay_Stubs" download>
							<div class="doc-card">
								<span class="doc-img d-block">
									<img src="{{url('assets/images/documents/credit-card.png')}}" alt="">
								</span>
								<span class="doc-type d-block">
									<h4 class="text-c-blue f-w-800">Last 3 months Pay Stubs </h4>
									<span class="file-size text-secondary">70kb</span>
								</span>
							</div>
							<?php if(in_array('Last_3_months_Pay_Stubs',@$documentuploaded)){?>
							<div class="doc-done">
								<img src="{{url('assets/images/documents/doc-done.png')}}">
							</div>
							<?php }?>
						</a>
					</div>
					<?php
					$Credit_Counseling_Certificate="javascript:void(0);";
					if(!empty($documentuploaded_files['Credit_Counseling_Certificate']) && file_exists(public_path().'/'.$documentuploaded_files['Credit_Counseling_Certificate'])){
						$Credit_Counseling_Certificate=url($documentuploaded_files['Credit_Counseling_Certificate']);
					}
					?>
					<div class="col-md-6 col-12">
						<a href="{{$Credit_Counseling_Certificate}}" class="doc-card-main"  data-type="Credit_Counseling_Certificate" download>
							<div class="doc-card">
								<span class="doc-img d-block">
									<img src="{{url('assets/images/documents/Counseling.png')}}" alt="">
								</span>
								<span class="doc-type d-block">
									<h4 class="text-c-blue f-w-800">Credit Counseling Certificate </h4>
									<span class="file-size text-secondary">70kb</span>
								</span>
							</div>
							<?php if(in_array('Credit_Counseling_Certificate',@$documentuploaded)){?>
							<div class="doc-done">
								<img src="{{url('assets/images/documents/doc-done.png')}}">
							</div>
							<?php }?>
						</a>
					</div>
				</div>
				<hr>
				<div class="optional-document ">
					<h3 class=" f-w-800 pb-3"> Optional Documents</h3>
					<div class="row">
						<?php
						$Life_Insurance_Declaration_Pages="javascript:void(0);";
						if(!empty($documentuploaded_files['Life_Insurance_Declaration_Pages']) && file_exists(public_path().'/'.$documentuploaded_files['Life_Insurance_Declaration_Pages'])){
							$Life_Insurance_Declaration_Pages=url($documentuploaded_files['Life_Insurance_Declaration_Pages']);
						}
						?>
						<div class="col-md-6 col-12">
							<a href="{{$Life_Insurance_Declaration_Pages}}" class="doc-card-main"  data-type="Life_Insurance_Declaration_Pages" download>
								<div class="doc-card">
									<span class="doc-img d-block">
										<img src="{{url('assets/images/documents/life-insurance.png')}}"
											class="licence-img">
									</span>
									<span class="doc-type d-block">
										<h4 class="text-c-blue f-w-800">Life Insurance Declaration Pages </h4>
										<span class="file-size text-secondary">70kb</span>
									</span>
								</div>
								<?php if(in_array('Life_Insurance_Declaration_Pages',@$documentuploaded)){?>
								<div class="doc-done">
									<img src="{{url('assets/images/documents/doc-done.png')}}">
								</div>
								<?php }?>
							</a>
						</div>
						<?php
						$Current_Mortgage_Statement="javascript:void(0);";
						if(!empty($documentuploaded_files['Current_Mortgage_Statement']) && file_exists(public_path().'/'.$documentuploaded_files['Current_Mortgage_Statement'])){
							$Current_Mortgage_Statement=url($documentuploaded_files['Current_Mortgage_Statement']);
						}
						?>
						<div class="col-md-6 col-12">
							<a href="{{$Current_Mortgage_Statement}}" class="doc-card-main"  data-type="Current_Mortgage_Statement" download>
								<div class="doc-card">
									<span class="doc-img d-block">
										<img src="{{url('assets/images/documents/mortgage.png')}}" class="licence-img">
									</span>
									<span class="doc-type d-block">
										<h4 class="text-c-blue f-w-800">Current Mortgage Statement </h4>
										<span class="file-size text-secondary">70kb</span>
									</span>
								</div>
								<?php if(in_array('Current_Mortgage_Statement',@$documentuploaded)){?>
								<div class="doc-done">
									<img src="{{url('assets/images/documents/doc-done.png')}}">
								</div>
								<?php }?>
							</a>
						</div>
						<?php
						$Current_Auto_Loan_Statement="javascript:void(0);";
						if(!empty($documentuploaded_files['Current_Auto_Loan_Statement']) && file_exists(public_path().'/'.$documentuploaded_files['Current_Auto_Loan_Statement'])){
							$Current_Auto_Loan_Statement=url($documentuploaded_files['Current_Auto_Loan_Statement']);
						}
						?>
						<div class="col-md-6 col-12">
							<a href="{{$Current_Auto_Loan_Statement}}" class="doc-card-main"  data-type="Current_Auto_Loan_Statement" download>
								<div class="doc-card">
									<span class="doc-img d-block">
										<img src="{{url('assets/images/documents/cashback.png')}}" class="licence-img">
									</span>
									<span class="doc-type d-block">
										<h4 class="text-c-blue f-w-800">Current Auto Loan Statement </h4>
										<span class="file-size text-secondary">70kb</span>
									</span>
								</div>
								<?php if(in_array('Current_Auto_Loan_Statement',@$documentuploaded)){?>
								<div class="doc-done">
									<img src="{{url('assets/images/documents/doc-done.png')}}">
								</div>
								<?php }?>
							</a>
						</div>
						<?php
						$Miscellaneous_Doucments="javascript:void(0);";
						if(!empty($documentuploaded_files['Miscellaneous_Doucments']) && file_exists(public_path().'/'.$documentuploaded_files['Miscellaneous_Doucments'])){
							$Miscellaneous_Doucments=url($documentuploaded_files['Miscellaneous_Doucments']);
						}
						?>
						<div class="col-md-6 col-12">
							<a href="{{$Miscellaneous_Doucments}}" class="doc-card-main"  data-type="Miscellaneous_Doucments"  download>
								<div class="doc-card">
									<span class="doc-img d-block">
										<img src="{{url('assets/images/documents/report.png')}}" class="licence-img">
									</span>
									<span class="doc-type d-block">
										<h4 class="text-c-blue f-w-800">Miscellaneous Documents </h4>
										<span class="file-size text-secondary">70kb</span>
									</span>
								</div>
								<?php if(in_array('Miscellaneous_Doucments',@$documentuploaded)){?>
								<div class="doc-done">
									<img src="{{url('assets/images/documents/doc-done.png')}}">
								</div>
								<?php }?>
							</a>
						</div>
						<?php
						//dump(url($retainer_documents->retainer_document));
						if(!empty($retainer_documents->retainer_document) && file_exists(public_path().'/'.$retainer_documents->retainer_document)){
							$retainer_document_url=url($retainer_documents->retainer_document);

						?>
							<div class="col-md-6 col-12">
								<a href="{{$retainer_document_url}}" class="doc-card-main"  data-type="Miscellaneous_Doucments" download>
									<div class="doc-card">
										<span class="doc-img d-block">
											<img src="{{url('assets/images/documents/report.png')}}" class="licence-img">
										</span>
										<span class="doc-type d-block">
											<h4 class="text-c-blue f-w-800">Retainer Documents </h4>
											<span class="file-size text-secondary">70kb</span>
										</span>
									</div>
									<?php if(in_array('Miscellaneous_Doucments',@$documentuploaded)){?>
									<div class="doc-done">
										<img src="{{url('assets/images/documents/doc-done.png')}}">
									</div>
									<?php }?>
								</a>
							</div>
						<?php }?>
					</div>
				</div>
				<div class="optional-document ">
					<h3 class=" f-w-800 pb-3"> Uploaded Credit Reports</h3>
					<div class="row">
						<?php
						$Transunion_Doucments="javascript:void(0);";
						if(!empty($debts_documents['Transunion']) && file_exists(public_path().'/'.$debts_documents['Transunion'])){
							$Transunion_Doucments=url($debts_documents['Transunion']);
						}
						?>
						<div class="col-md-6 col-12">
							<a href="{{$Transunion_Doucments}}" class="doc-card-main"  data-type="Transunion"  download>
								<div class="doc-card">
									<span class="doc-img d-block">
										<img src="{{url('assets/images/documents/report.png')}}" class="licence-img">
									</span>
									<span class="doc-type d-block">
										<h4 class="text-c-blue f-w-800">Transunion Documents </h4>
										<span class="file-size text-secondary">70kb</span>
									</span>
								</div>
								<?php if(!empty($debts_documents['Transunion'])){?>
								<div class="doc-done">
									<img src="{{url('assets/images/documents/doc-done.png')}}">
								</div>
								<?php }?>
							</a>
						</div>
						<?php
						$Experian_Doucments="javascript:void(0);";
						if(!empty($debts_documents['Experian']) && file_exists(public_path().'/'.$debts_documents['Experian'])){
							$Experian_Doucments=url($debts_documents['Experian']);
						}
						?>
						<div class="col-md-6 col-12">
							<a href="{{$Experian_Doucments}}" class="doc-card-main"  data-type="Experian"  download>
								<div class="doc-card">
									<span class="doc-img d-block">
										<img src="{{url('assets/images/documents/report.png')}}" class="licence-img">
									</span>
									<span class="doc-type d-block">
										<h4 class="text-c-blue f-w-800">Experian Documents </h4>
										<span class="file-size text-secondary">70kb</span>
									</span>
								</div>
								<?php if(!empty($debts_documents['Experian'])){?>
								<div class="doc-done">
									<img src="{{url('assets/images/documents/doc-done.png')}}">
								</div>
								<?php }?>
							</a>
						</div>
						<?php
						$Equifax_Doucments="javascript:void(0);";
						if(!empty($debts_documents['Equifax']) && file_exists(public_path().'/'.$debts_documents['Equifax'])){
							$Equifax_Doucments=url($debts_documents['Equifax']);
						}
						?>
						<div class="col-md-6 col-12">
							<a href="{{$Equifax_Doucments}}" class="doc-card-main"  data-type="Equifax"  download>
								<div class="doc-card">
									<span class="doc-img d-block">
										<img src="{{url('assets/images/documents/report.png')}}" class="licence-img">
									</span>
									<span class="doc-type d-block">
										<h4 class="text-c-blue f-w-800">Equifax Documents </h4>
										<span class="file-size text-secondary">70kb</span>
									</span>
								</div>
								<?php if(!empty($debts_documents['Equifax'])){?>
								<div class="doc-done">
									<img src="{{url('assets/images/documents/doc-done.png')}}">
								</div>
								<?php }?>
							</a>
						</div>
						<?php
						$Sign_Doucments="javascript:void(0);";
						if(!empty($sign_document->sign_document) && file_exists(public_path().'/'.$sign_document->sign_document)){
							$Sign_Doucments=url($sign_document->sign_document);
						
						?>
						<div class="col-md-6 col-12">
							<a href="{{$Sign_Doucments}}" class="doc-card-main"  data-type="Equifax"  download>
								<div class="doc-card">
									<span class="doc-img d-block">
										<img src="{{url('assets/images/documents/report.png')}}" class="licence-img">
									</span>
									<span class="doc-type d-block">
										<h4 class="text-c-blue f-w-800">Sign Documents </h4>
										<!--span class="file-size text-secondary">70kb</span-->
									</span>
								</div>
								<?php if(!empty($sign_document->sign_document)){?>
								<div class="doc-done">
									<img src="{{url('assets/images/documents/doc-done.png')}}">
								</div>
								<?php }?>
							</a>
						</div>
						<?php }?>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>
<!-- [ Main Content ] end -->
</div>
<style>
.doc-img img {
    width: 60px;
}
.doc-card {
    display: flex;
}
.doc-done img {
    width: 25px;
    position: absolute;
    right: 34px;
    top: 19px;
}
.doc-card-main {
    display: block;
    width: 100%;
    box-shadow: 0 3px 10px 0 rgb(0 0 0 / 5%);
    padding: 17px 20px;
    max-width: 680px;
    margin: 0 auto 30px;
    border-radius: 9px;
    position: relative;
}
.mobile_descp_sec li{list-style: none; display: inline-block; width: 49%; font-size: 15px; font-weight: 600;}
</style>
@endsection
