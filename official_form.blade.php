@extends('layouts.attorney_form')
@section('content')
@include("layouts.flash")
<!-- [ Main Content ] start -->
<div class="main-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-3 hide-print hide-small-screen">
				<ul class="nav flex-column nav-pills" role="tablist" id="sidebar">
					<li><a href="#official-form-121" class="nav-link text-left active " id="section1-tab"
							role="tab">Official Form 121</a></li>
					<li><a href="#official-form-101" class="nav-link text-left" id="section2-tab"
							role="tab">Official
							Form 101</a></li>
					<li><a href="#official-form-106sum" class="nav-link text-left " id="section3-tab"
							role="tab">Official Form 106Sum
						</a>
					</li>
					<li><a href="#official-form-106a_and_b" class="nav-link text-left " id="section4-tab"
							role="tab">Official Form 106A/B
						</a>
					</li>
					<li><a href="#official-form-106c" class="nav-link text-left " id="section5-tab"
							role="tab">Official Form 106C
						</a>
					</li>
					<li><a href="#official-form-106d" class="nav-link text-left " id="section6-tab"
							role="tab">Official Form 106D
						</a>
					</li>
					<li><a href="#official-form-106e_and_f" class="nav-link text-left " id="section7-tab"
							role="tab">Official Form 106E/F
						</a>
					</li>
					<li><a href="#official-form-106g" class="nav-link text-left " id="section8-tab"
							role="tab">Official Form 106G
						</a>
					</li>
					<li><a href="#official-form-106h" class="nav-link text-left " id="section9-tab"
							role="tab">Official Form 106H
						</a>
					</li>
					<li><a href="#official-form-106i" class="nav-link text-left " id="section10-tab"
							role="tab">Official Form 106I
						</a>
					</li>
					<li><a href="#official-form-106j" class="nav-link text-left " id="section11-tab"
							role="tab">Official Form 106J
						</a>
					</li>
					<li><a href="#official-form-106dec" class="nav-link text-left " id="section12-tab"
							role="tab">Official Form 106Dec
						</a>
					</li>
					<li><a href="#official-form-107" class="nav-link text-left " id="section13-tab"
							role="tab">Official Form 107
						</a>
					</li>
					<li><a href="#official-form-108" class="nav-link text-left " id="section14-tab"
							role="tab">Official Form 108
						</a>
					</li>
					<li><a href="#official-form-109" class="nav-link text-left " id="section15-tab"
							role="tab">Official Form 109
						</a>
					</li>
					<li><a href="#official-form-122a─1supp" class="nav-link text-left" id="section16-tab"
							role="tab">Official Form 122A─1Supp
						</a>
					</li>
					<li><a href="#official-form-122a─2" class="nav-link text-left " id="section17-tab"
							role="tab">Official Form 122A–2
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9">
				<div class="main-wrapper-body">
					<!-- Official Form 121 -->
					<section class="Official-Form-121 padd-20" id="official-form-121">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<div class="section-box">
										<div class="section-header bg-back text-white">
											<p class="font-lg-20">Fill in this information to identify your case</p>
										</div>
										<div class="section-body padd-20">
											<div class="row">
												<div class="col-md-12"><label>United States Bankruptcy Court for
														the:</label></div>
												<div class="col-md-12">
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-12">
													<label>District Of</label>
													<div class="input-group">
													<select>
														<option value="0" class="col-md-12">Middle District Of Alabama</option>
														<option value="1" class="form-control">Northern District Of Alabama</option>
														<option value="2" class="form-control">Southern District of Alabama</option>
														<option value="3" class="form-control">District of Alaska</option>
														<option value="4" class="form-control">District of Arizona</option>
													</select>
													</div>
												</div>
												<div class="col-md-12">
													<div class="input-group">
														<label>Case number (if known)</label>
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12 padd-20">
									<div class="row">
										<div class="col-md-12">
											<div class="form-title mb-3">
												<h4>Official Form 121</h4>
												<h2 class="font-lg-22">Statement About Your Social Security Numbers
												</h2>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-subheading">
												<p class="font-lg-14">Use this form to tell the court about any
													Social
													Security
													or federal
													Individual Taxpayer
													Identification numbers you have used. Do not file this
													form as part of the public case file. This form must be
													submitted
													separately
													and must
													not be
													included in the court’s public electronic records.
													Please consult local court procedures for submission
													requirements.
													To protect your privacy, the court will not make this form
													available
													to
													the
													public. You
													should not include a full Social Security Number or
													Individual Taxpayer Number on any other document filed with the
													court.
													The
													court will
													make
													only the last four digits of your numbers known
													to the public. However, the full numbers will be available to
													your
													creditors, the U.S.
													Trustee or bankruptcy administrator, and the trustee
													assigned to your case.
													Making a false statement, concealing property, or obtaining
													money or
													property by fraud
													in
													connection with a bankruptcy case can result in
													fines up to $250,000, or imprisonment for up to 20 years, or
													both.
													18
													U.S.C.
													§§ 152,
													1341,
													1519, and 3571.</p>
											</div>
										</div>
									</div>
								</div>
								<!-- Part 1 -->
								<?php 
									
									$BasicInfoPartA=$basic_info['BasicInfoPartA'];
									$BasicInfoPartB=$basic_info['BasicInfoPartB'];
									$final_BasicInfo_PartB=[];
									if(!empty($BasicInfoPartB)){
										foreach($BasicInfoPartB->toArray() as $k=>$v){
											if(is_array(json_decode($v,1))){
												$adata[$k]=json_decode($v,1);				
												$final_BasicInfo_PartB[$k]=$adata[$k];
											}else{
												$final_BasicInfo_PartB[$k]=$v;
											}
										}
									}
									$BasicInfoPartB=$final_BasicInfo_PartB;
								?>
									<div class="row align-items-center">
										<div class="col-md-12">
											<div class="part-form-title mb-3">
												<span>Part 1</span>
												<h2 class="font-lg-18">Tell the Court About Yourself and Your spouse
													if
													Your
													Spouse is
													Filing
													With You</h2>
											</div>
										</div>
										<div class="col-md-2">
											<div class="input-group">
												<strong>1. Your name</strong>
											</div>
										</div>
										<div class="col-md-5">
											<p class="column-heading text-center">For Debtor 1:</p>
											<div class="input-group">
												<label>First Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartA);?>" class="form-control">
											</div>
											<div class="input-group">
												<label>Middle Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartA);?>" class="form-control">
											</div>
											<div class="input-group">
												<label>Last Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartA);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-5">
											<p class="column-heading text-center">For Debtor 2 (Only If Spouse Is
												Filing):
											</p>
											<div class="input-group">
												<label>First Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartB);?>" class="form-control">
											</div>
											<div class="input-group">
												<label>Middle Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartB);?>" class="form-control">
											</div>
											<div class="input-group">
												<label>Last Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartB);?>" class="form-control">
											</div>
										</div>
									</div>
								<!-- Part 2 -->
									<div class="row border-bottm-1 mb-3">
										<div class="col-md-12">
											<div class="part-form-title mb-3">
												<span>Part 2</span>
												<h2 class="font-lg-18">Tell the Court About all of Your Social
													Security
													or
													Federal
													Individual
													Taxpayer Identification Numbers</h2>
											</div>
										</div>

										<div class="col-md-2">
											<div class="input-group">
												<strong>2. All Social Security
													Numbers you have
													used</strong>
											</div>
										</div>
										<div class="col-md-5">
											<div class="input-group">
												<input type="number" value="<?php echo Helper::validate_key_value('security_number',$BasicInfoPartA);?>" class="form-control">
											</div>
											<div class="input-group">
												<input type="number" value="" class="form-control">
											</div>
											<div class="input-group">
												<input type="checkbox" <?php echo Helper::validate_key_toggle('has_security_number',$BasicInfoPartA,1);?>>
												<label for="">You do not have a Social Security number.</label>
											</div>
										</div>
										<div class="col-md-5">
											<div class="input-group">
												<input type="number" value="<?php echo Helper::validate_key_value('social_security_number',$BasicInfoPartB);?>" class="form-control">
											</div>
											<div class="input-group">
												<input type="number" value="" class="form-control">
											</div>
											<div class="input-group">
												<input type="checkbox" <?php echo Helper::validate_key_toggle('has_security_number',$BasicInfoPartB,1);?>>
												<label for="">You do not have a Social Security number.</label>
											</div>
										</div>
									</div>
							
									<div class="row">
										<div class="col-md-2">
											<div class="input-group">
												<strong>3. All federal Individual
													Taxpayer
													Identification
													Numbers (ITIN) you
													have used</strong>
											</div>
										</div>
										<div class="col-md-5">
											<div class="input-group">
												<input type="number" value="<?php echo Helper::validate_key_value('itin',$BasicInfoPartA);?>" class="form-control">
											</div>
											<div class="input-group">
												<input type="number" value="" class="form-control">
											</div>
											<div class="input-group">
												<input type="checkbox" <?php echo Helper::validate_key_toggle('has_security_number',$BasicInfoPartA,0);?>>
												<label for="">You do not have an ITIN.</label>
											</div>
										</div>
										<div class="col-md-5">
											<div class="input-group">
												<input type="number" value="<?php echo Helper::validate_key_value('itin',$BasicInfoPartB);?>" class="form-control">
											</div>
											<div class="input-group">
												<input type="number" value="" class="form-control">
											</div>
											<div class="input-group">
												<input type="checkbox" <?php echo Helper::validate_key_toggle('has_security_number',$BasicInfoPartB,0);?>>
												<label for="">You do not have an ITIN.</label>
											</div>
										</div>
									</div>
									<!-- Part 3 -->
									<div class="row align-items-center">
										<div class="col-md-12">
											<div class="part-form-title mb-3">
												<span>Part 3</span>
												<h2 class="font-lg-18">Sign Below</h2>
											</div>
										</div>
										<div class="col-md-2">
										</div>
										<div class="col-md-5">
											<p class="column-heading text-center">Under penalty of perjury, I
												declare
												that
												the
												information
												I have provided in this form is true and correct. </p>
											<div class="input-group signature-field">
												<p>Signature of Debtor 1</p>
												<span></span>
												<label for="">You do not have a Social Security number.</label>
											</div>
											<div class="input-group">
												<label>Date</label>
												<input type="date" class="form-control">
											</div>

										</div>
										<div class="col-md-5">
											<p class="column-heading text-center">Under penalty of perjury, I
												declare
												that
												the
												information
												I have provided in this form is true and correct. </p>
											<div class="input-group signature-field">
												<p>Signature of Debtor 2</p>
												<span></span>
												<label for="">You do not have a Social Security number.</label>
											</div>
											<div class="input-group">
												<label>Date</label>
												<input type="date" class="form-control">
											</div>
										</div>
									</div>
							</div>
					</section>

					<!-- Official Form 101 -->
					<section class="official-form-101 padd-20" id="official-form-101">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<div class="section-box">
										<div class="section-header bg-back text-white">
											<p class="font-lg-20">Fill in this information to identify your case</p>
										</div>
										<div class="section-body padd-20">
											<div class="row">
												<div class="col-md-12">
													<label>United States Bankruptcy Court for the:</label>
												</div>
												<div class="col-md-12">
													<div class="input-group">
														<select class="form-control">
															<option value="1" selected>Data 1 </option>
															<option value="1">Data 1 </option>
															<option value="1">1</option>
															<option value="1">1</option>
														</select>
													</div>
												</div>

												<div class="col-md-12">
													<div class="input-group">
														<label>Case number (if known)</label>
														<input type="text" value="" class="form-control" placeholder="State">
													</div>
												</div>

												<div class="col-md-12">
													<div class="input-group">
														<input type="checkbox">
														<label>Check if this is an
															amended filing</label>
													</div>
												</div>
												<div class="col-md-12">
													<div class="input-group">
														<label>Chapter you are filing under:</label>
														<div class="checkbox-cust">
															<input type="checkbox">
															<label>Chapter 7</label>
														</div>
														<div class="checkbox-cust">
															<input type="checkbox">
															<label>Chapter 11</label>
														</div>
														<div class="checkbox-cust">
															<input type="checkbox">
															<label>Chapter 12</label>
														</div>
														<div class="checkbox-cust">
															<input type="checkbox">
															<label>Chapter 13</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row padd-20">
								<div class="col-md-12 mb-3">
									<div class="form-title">
										<h4>Official Form 101</h4>
										<h2 class="font-lg-22">Voluntary Petition for Individuals Filing for
											Bankruptcy
										</h2>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-subheading">
										<p class="font-lg-14">The bankruptcy forms use you and Debtor 1 to refer to
											a
											debtor
											filing
											alone. A married couple
											may file a bankruptcy case together—called a
											joint case—and in joint cases, these forms use you to ask for
											information
											from
											both debtors.
											For example, if a form asks, “Do you own a car,”
											the answer would be yes if either debtor owns a car. When information is
											needed
											about the
											spouses separately, the form uses Debtor 1 and
											Debtor 2 to distinguish between them. In joint cases, one of the spouses
											must
											report
											information as Debtor 1 and the other as Debtor 2. The
											same person must be Debtor 1 in all of the forms.
											Be as complete and accurate as possible. If two married people are
											filing
											together, both are
											equally responsible for supplying correct
											information. If more space is needed, attach a separate sheet to this
											form.
											On
											the top of
											any additional pages, write your name and case number
											(if known). Answer every question.</p>
									</div>
								</div>
							</div>
							<!-- Part 1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 1</span>
										<h2 class="font-lg-18">Identify Yourself</h2>
									</div>
								</div>
							</div>
							<div class="form-border">
								<div class="row ">
									<div class="col-md-2 mt-4">
										<div class="input-group">
											<strong>1. Your name</strong>
											<p>Write the name that is on your
												government-issued picture
												identification (for example,
												your driver’s license or
												passport).
												Bring your picture
												identification to your meeting
												with the trustee.</p>
										</div>
									</div>
									<div class="col-md-5">
										<p class="column-heading text-center">About Debtor 1:</p>
										<div class="input-group">
											<label>First Name</label>
											<input type="text" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartA);?>" class="form-control">
										</div>
										<div class="input-group">
											<label>Middle Name</label>
											<input type="text" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartA);?>" class="form-control">
										</div>
										<div class="input-group">
											<label>Last Name</label>
											<input type="text" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartA);?>" class="form-control">
										</div>
										<div class="input-group">
											<label> Suffix Sr., Jr., II, III</label>
											<input type="text" value="" class="form-control">
										</div>
									</div>
									<div class="col-md-5">
										<p class="column-heading text-center">About Debtor 2 (Spouse Only in a Joint
											Case):
										</p>
										<div class="input-group">
											<label>First Name</label>
											<input type="text" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartB);?>" class="form-control">
										</div>
										<div class="input-group">
											<label>Middle Name</label>
											<input type="text" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartB);?>" class="form-control">
										</div>
										<div class="input-group">
											<label>Last Name</label>
											<input type="text" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartB);?>" class="form-control">
										</div>
										<div class="input-group">
											<label> Suffix Sr., Jr., II, III</label>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<?php 
								
								$BasicInfo_AnyOtherName=$basic_info['BasicInfo_AnyOtherName'];
								$final_BasicInfo_AnyOtherName=[];
								if(!empty($BasicInfo_AnyOtherName)){
									foreach($BasicInfo_AnyOtherName->toArray() as $k=>$v){
										if(is_array(json_decode($v,1))){
											$adata[$k]=json_decode($v,1);				
											$final_BasicInfo_AnyOtherName[$k]=$adata[$k];
										}else{
											$final_BasicInfo_AnyOtherName[$k]=$v;
										}
									}
								}								
								$BasicInfo_AnyOtherName=$final_BasicInfo_AnyOtherName;
							?>
							<div class="form-border">
								<div class="row mb-3">
									<div class="col-md-2 ">
										<div class="input-group">
											<strong>2. All other names you
												have used in the last 8
												years</strong>
											<p>Include your married or
												maiden names.</p>
										</div>
									</div>
									<div class="col-md-5">
									<?php
									$k=0;				
									if(!empty($BasicInfo_AnyOtherName['name']) && is_array($BasicInfo_AnyOtherName['name'])){
										if(count($BasicInfo_AnyOtherName['name'])>0){
										for($k=0;$k<count($BasicInfo_AnyOtherName['name']);$k++){
									?>
										<div class="input-group">
											<label>First Name</label>
											<input type="text" value="<?php echo Helper::validate_key_loop_value('name',$BasicInfo_AnyOtherName,$k);?>" class="form-control">
										</div>
										<div class="input-group">
											<label>Middle Name</label>
											<input type="text" value="<?php echo Helper::validate_key_loop_value('middle_name',$BasicInfo_AnyOtherName,$k);?>" class="form-control">
										</div>
										<div class="input-group">
											<label>Last Name</label>
											<input type="text" value="<?php echo Helper::validate_key_loop_value('last_name',$BasicInfo_AnyOtherName,$k);?>" class="form-control">
										</div>
									<?php }}}?>

									</div>
									<div class="col-md-5">
									<?php
									$j=0;				
									if(!empty($BasicInfoPartB['spouse_other_name']) && is_array($BasicInfoPartB['spouse_other_name'])){
										if(count($BasicInfoPartB['spouse_other_name'])>0){
										for($j=0;$j<count($BasicInfoPartB['spouse_other_name']);$j++){
									?>
										<div class="input-group">
											<label>First Name</label>
											<input type="text" value="<?php echo Helper::validate_key_loop_value('spouse_other_name',$BasicInfoPartB,$j);?>" class="form-control">
										</div>
										<div class="input-group">
											<label>Middle Name</label>
											<input type="text" value="<?php echo Helper::validate_key_loop_value('spouse_other_middle_name',$BasicInfoPartB,$j);?>" class="form-control">
										</div>
										<div class="input-group">
											<label>Last Name</label>
											<input type="text" value="<?php echo Helper::validate_key_loop_value('spouse_other_last_name',$BasicInfoPartB,$j);?>" class="form-control">
										</div>
									<?php }}}?>
									</div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-md-6">
									<div class="col-md-121 ">
										<p class="column-heading">Debtor 1</p>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="input-group">
												<label>First Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartA);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Middle Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartA);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Last Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartA);?>" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="input-group">
												<label>Case number (if known)</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<div class="col-md-6">
									<div class="col-md-121 ">
										<p class="column-heading">Debtor 2</p>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="input-group">
												<label>First Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartB);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Middle Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartB);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Last Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartB);?>" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<!-- <div class="input-group">
												<label>Case number (if known)</label>
												<input type="text" value="" class="form-control">
											</div> -->
										</div>

									</div>
								</div>

							</div>
							<div class="form-border">
								<div class="row">
									<div class="col-md-2">
										<div class="input-group">
											<strong>3. Only the last 4 digits of
												your Social Security
												number or federal
												Individual Taxpayer
												Identification number
												(ITIN)</strong>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<input type="number" value="<?php echo substr(Helper::validate_key_value('security_number',$BasicInfoPartA),-4);?>" class="form-control">
										</div>
										<div class="or input-group text-center">
											<h4>OR</h4>
										</div>
										<div class="input-group">
											<input type="number" value="<?php echo substr(Helper::validate_key_value('itin',$BasicInfoPartA),-4);?>" class="form-control">
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<input type="number" value="<?php echo substr(Helper::validate_key_value('social_security_number',$BasicInfoPartB),-4);?>" class="form-control">
										</div>
										<div class="or input-group text-center">
											<h4>OR</h4>
										</div>
										<div class="input-group">
											<input type="number" value="<?php echo substr(Helper::validate_key_value('itin',$BasicInfoPartB),-4);?>" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<?php
							$BasicInfo_PartRest=$basic_info['BasicInfo_PartRest'];
							
							$used_business_data=[];
							
							if(!empty($BasicInfo_PartRest['used_business_ein_data'])){
								$used_business_dta_info=json_decode($BasicInfo_PartRest['used_business_ein_data'],1);					
								$used_business_data= (!empty($used_business_dta_info) && is_array($used_business_dta_info))?$used_business_dta_info:[];
							}
		
							for($j=0;$j<(is_countable($used_business_data['own_business_name']));$j++){
							?>													
							<div class="form-border">
								<div class="row">
									<div class="col-md-2">
										<div class="input-group">
											<strong>4. Any business names
												and Employer
												Identification Numbers
												(EIN) you have used in
												the last 8 years</strong>
											<p>Include trade names and
												doing business as names</p>
										</div>
									</div>
									<div class="col-md-5">
										<p class="column-heading text-center">About Debtor 1:</p>
										<div class="input-group">
											<input type="checkbox" <?php echo Helper::validate_key_toggle('used_business_ein',$BasicInfo_PartRest,0);?>>
											<label for="">I have not used any business names or EINs.</label>
										</div>
										<div class="input-group"><?php ?>
											<label>Business name</label>
											<input type="text" value="<?php echo Helper::validate_key_loop_value('own_business_name',$used_business_data,$j);?>" class="form-control">
										</div>
										<div class="input-group">
											<label>Business name</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label>EIN</label>
											<input type="text" value="<?php echo substr_replace(Helper::validate_key_loop_value('own_ein_no',$used_business_data,$j),'-','2',0);?>" class="form-control">
										</div>
										<div class="input-group">
											<label>EIN</label>
											<input type="number" value="" class="form-control">
										</div>
									</div>
									
									<div class="col-md-5">
										<p class="column-heading text-center">About Debtor 2 (Spouse Only in a Joint
											Case):
										</p>
										<div class="input-group">
											<input type="checkbox" <?php echo Helper::validate_key_toggle('used_business_ein',$BasicInfo_PartRest,0);?>>
											<label for="">I have not used any business names or EINs.</label>
										</div>
										<div class="input-group">
											<label>Business name</label>
											<input type="text" value="<?php echo Helper::validate_key_value('spaouse_business_name',$used_business_data);?>" class="form-control">
										</div>
										<div class="input-group">
											<label>Business name</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label>EIN</label>
											<input type="text" value="<?php echo substr_replace(Helper::validate_key_value('spouse_ein_no',$used_business_data),'-','2',0);?>" class="form-control">
										</div>
										<div class="input-group">
											<label>EIN</label>
											<input type="number" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>	
							<?php } ?>						
							<div class="form-border">
								<div class="row mb-3">
									<div class="col-md-2">
										<div class="input-group">
											<strong>5. Where you live</strong>
										</div>
									</div>
									<div class="col-md-5">
										<p class="mb-3">.</p>
										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<label>Number</label>
													<input type="number" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-8">
												<div class="input-group">
													<label>Street</label>
													<input type="text" value="<?php echo Helper::validate_key_value('Address',$BasicInfoPartA);?>" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="input-group">
													<label>City</label>
													<input type="text" value="<?php echo Helper::validate_key_value('City',$BasicInfoPartA);?>" class="form-control">
												</div>
											</div>
											<div class="col-md-3">
												<div class="input-group">
													<label>State</label>
													<input type="text" value="<?php echo Helper::validate_key_value('state',$BasicInfoPartA);?>" class="form-control">
												</div>
											</div>
											<div class="col-md-3">
												<div class="input-group">
													<label>Zip Code</label>
													<input type="text" value="<?php echo Helper::validate_key_value('zip',$BasicInfoPartA);?>" class="form-control">
												</div>
											</div>
										</div>
										<div class="input-group">
											<label>Country</label>
											<input type="text" value="<?php echo Helper::validate_key_value('country',$BasicInfoPartA);?>" class="form-control">
										</div>
										<div class="input-group">
											<label for=""><strong>If your mailing address is different from the one
													above, fill it in here.</strong> Note that the court will send
												any notices to you at this mailing address.</label>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<label>Number</label>
													<input type="number" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-8">
												<div class="input-group">
													<label>Street</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="input-group">
											<label>P.O. Box</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="input-group">
													<label>City</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-3">
												<div class="input-group">
													<label>State</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-3">
												<div class="input-group">
													<label>Zip Code</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<?php
											$BasicInfoPartB['City']=(!empty($BasicInfoPartB['spouse_different_address']))?$BasicInfoPartB['City']:$BasicInfoPartA['City'];
											
											$BasicInfoPartB['Address']=(!empty($BasicInfoPartB['spouse_different_address']))?$BasicInfoPartB['Address']:$BasicInfoPartA['Address'];
											
											$BasicInfoPartB['state']=(!empty($BasicInfoPartB['spouse_different_address']))?$BasicInfoPartB['state']:$BasicInfoPartA['state'];
											
											$BasicInfoPartB['zip']=(!empty($BasicInfoPartB['spouse_different_address']))?$BasicInfoPartB['zip']:$BasicInfoPartA['zip'];
											
											$BasicInfoPartB['country']=(!empty($BasicInfoPartB['spouse_different_address']))?$BasicInfoPartB['country']:$BasicInfoPartA['country'];
										?>
									<div class="col-md-5">
										<p class="mb-3">.</p>
										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<label>Number</label>
													<input type="number" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-8">
												<div class="input-group">
													<label>Street</label>
													<input type="text" value="<?php echo Helper::validate_key_value('Address',$BasicInfoPartB);?>" class="form-control">
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-6">
												<div class="input-group">
													<label>City</label>
													<input type="text" value="<?php echo Helper::validate_key_value('City',$BasicInfoPartB);?>" class="form-control">
												</div>
											</div>
											<div class="col-md-3">
												<div class="input-group">
													<label>State</label>
													<input type="text" value="<?php echo Helper::validate_key_value('state',$BasicInfoPartB);?>" class="form-control">
												</div>
											</div>
											<div class="col-md-3">
												<div class="input-group">
													<label>Zip Code</label>
													<input type="text" value="<?php echo Helper::validate_key_value('zip',$BasicInfoPartB);?>" class="form-control">
												</div>
											</div>
										</div>
										<div class="input-group">
											<label>Country</label>
											<input type="text" value="<?php echo Helper::validate_key_value('country',$BasicInfoPartB);?>" class="form-control">
										</div>
										<div class="input-group">
											<label for=""><strong>If your mailing address is different from the one
													above, fill it in here.</strong> Note that the court will send
												any notices to you at this mailing address.</label>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<label>Number</label>
													<input type="number" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-8">
												<div class="input-group">
													<label>Street</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="input-group">
											<label>P.O. Box</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="input-group">
													<label>City</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-3">
												<div class="input-group">
													<label>State</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-3">
												<div class="input-group">
													<label>Zip Code</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-md-6">
									<div class="col-md-12 ">
										<p class="column-heading">Debtor 1</p>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="input-group">
												<label>First Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartA);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Middle Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartA);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Last Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartA);?>" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="input-group">
												<label>Case number (if known)</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<div class="col-md-6">
									<div class="col-md-12 ">
										<p class="column-heading">Debtor 2</p>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="input-group">
												<label>First Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartB);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Middle Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartB);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Last Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartB);?>" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="input-group">
												<label>Case number (if known)</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>

							</div>
							<div class="form-border">
								<div class="row">
									<div class="col-md-2">
										<div class="input-group">
											<strong>6. Why you are choosing
												this district to file for
												bankruptcy </strong>
										</div>
									</div>
									<div class="col-md-5">
										<p class="column-heading">Check one:</p>
										<div class="input-group">
											<input type="checkbox" checked>
											<label for="">Over the last 180 days before filing this petition,
												I have lived in this district longer than in any
												other district.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for="">I have another reason. Explain.
												(See 28 U.S.C. § 1408.)</label>
										</div>
										<div class="input-group">
											<textarea cols="5" rows="5" class="form-control"></textarea>
										</div>
									</div>
									<div class="col-md-5">
										<p class="column-heading">Check one:</p>
										<div class="input-group">
											<input type="checkbox" checked>
											<label for="">Over the last 180 days before filing this petition,
												I have lived in this district longer than in any
												other district.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for="">I have another reason. Explain.
												(See 28 U.S.C. § 1408.)</label>
										</div>
										<div class="input-group">
											<textarea cols="5" rows="5" class="form-control"></textarea>
										</div>
									</div>
								</div>
							</div>
							<!-- Part 2 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title my-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Tell the Court About Your Bankruptcy Case</h2>
									</div>
								</div>
							</div>
							<div class="form-border">
								<div class="row">
									<div class="col-md-2">
										<div class="input-group">
											<strong>7. The chapter of the
												Bankruptcy Code you
												are choosing to file
												under</strong>
										</div>
									</div>
									<div class="col-md-10">
										<div class="input-group">
											<label for=""><i class="text-black text-bold"> Check one. (For a brief
													description of each,
													see
													Notice Required by 11 U.S.C. § 342(b) for Individuals Filing
													for Bankruptcy (Form 2010)). Also, go to the top of page 1 and
													check
													the
													appropriate
													box.</i></label>
										</div>
										<div class="checkbox-cust">
											<input type="checkbox" checked>
											<label>Chapter 7</label>
										</div>
										<div class="checkbox-cust">
											<input type="checkbox">
											<label>Chapter 11</label>
										</div>
										<div class="checkbox-cust">
											<input type="checkbox">
											<label>Chapter 12</label>
										</div>
										<div class="checkbox-cust">
											<input type="checkbox">
											<label>Chapter 13</label>
										</div>
									</div>

								</div>
							</div>
							<div class="form-border">
								<div class="row">
									<div class="col-md-2">
										<div class="input-group">
											<strong>8. How you will pay the fee</strong>
										</div>
									</div>
									<div class="col-md-10">
										<div class="checkbox-cust font-lg-14">
											<input type="checkbox" checked>
											<label><strong>I will pay the entire fee when I file my
													petition.</strong>
												Please check with
												the
												clerk’s office in your
												local court for more details about how you may pay. Typically, if
												you
												are
												paying the fee
												yourself, you may pay with cash, cashier’s check, or money order. If
												your
												attorney is
												submitting your payment on your behalf, your attorney may pay with a
												credit
												card or
												check
												with a pre-printed address.</label>
										</div>
										<div class="checkbox-cust my-3 font-lg-14">
											<input type="checkbox">
											<label><strong>I need to pay the fee in installments.</strong>If you
												choose
												this
												option,
												sign
												and attach the
												<i class="text-black text-bold">Application for Individuals to Pay
													The
													Filing Fee in
													Installments </i>(Official Form 103A).</label>
										</div>
										<div class="checkbox-cust font-lg-14">
											<input type="checkbox">
											<label><strong>I request that my fee be waived </strong> (You may
												request
												this
												option only
												if
												you are filing for Chapter 7.
												By law, a judge may, but is not required to, waive your fee, and may
												do
												so
												only if your
												income is
												less than 150% of the official poverty line that applies to your
												family
												size
												and you are
												unable to
												pay the fee in installments). If you choose this option, you must
												fill
												out
												the
												Application
												to Have the
												Chapter 7 Filing Fee Waived (Official Form 103B) and file it with
												your
												petition.</label>
										</div>

									</div>

								</div>
							</div>
							<?php 
							$BasicInfo_PartC=$basic_info['BasicInfo_PartC'];
							$final_BasicInfo_PartC=[];
							if(!empty($BasicInfo_PartC)){
								foreach($BasicInfo_PartC->toArray() as $k=>$v){
									if(is_array(json_decode($v,1))){
										$data[$k]=json_decode($v,1);
										if(!empty($data[$k])){
											foreach($data[$k] as $kkey=>$vv){
												$final_BasicInfo_PartC[$kkey]=$vv;
											}
										}
									}else{
										$final_BasicInfo_PartC[$k]=$v;
									}
								}
							}

							
							for($j=0;$j<count($final_BasicInfo_PartC);$j++){
							?>
							<div class="form-border">
								<div class="row mb-3">
									<div class="col-md-2">
										<div class="input-group">
											<strong>9. Have you filed for
												bankruptcy within the
												last 8 years?</strong>
										</div>
									</div>
									<div class="col-md-10">
										<div class="checkbox-cust font-lg-14">
											<input type="checkbox" <?php echo Helper::validate_key_toggle('filed_bankruptcy_case_last_8years',$BasicInfo_PartC,0);?>>
											<label>No</label>
										</div>
										<div class="checkbox-cust font-lg-14">
											<input type="checkbox" <?php echo Helper::validate_key_toggle('filed_bankruptcy_case_last_8years',$BasicInfo_PartC,1);?>>
											<label>Yes</label>
										</div>

										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<label>District</label>
													<input type="text" value="<?php echo Helper::validate_key_loop_value('case_filed_state',$BasicInfo_PartC,$j);?>" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<label>When</label>
													<input type="text" value="<?php echo Helper::validate_key_loop_value('date_filed',$BasicInfo_PartC,$j);?>" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<label>Case number</label>
													<input type="text" value="<?php echo Helper::validate_key_loop_value('case_number',$BasicInfo_PartC,$j);?>" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<label>District</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<label>When</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<label>Case number</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<label>District</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<label>When</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<label>Case number</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							<?php } ?>
							<div class="row mt-3">								
								<div class="col-md-6">
									<div class="col-md-12 ">
										<p class="column-heading">Debtor 1</p>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="input-group">
												<label>First Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartA);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Middle Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartA);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Last Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartA);?>" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="input-group">
												<label>Case number (if known)</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<div class="col-md-6">
									<div class="col-md-12 ">
										<p class="column-heading">Debtor 1</p>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="input-group">
												<label>First Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartB);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Middle Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartB);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Last Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartB);?>" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<!-- <div class="input-group">
												<label>Case number (if known)</label>
												<input type="text" value="" class="form-control">
											</div> -->
										</div>

									</div>
								</div>

							</div>
							<div class="form-border">
								<div class="row mb-3">
									<div class="col-md-2">
										<div class="input-group">
											<strong>10. Are any bankruptcy
												cases pending or being
												filed by a spouse who is
												not filing this case with
												you, or by a business
												partner, or by an
												affiliate?</strong>
										</div>
									</div>
									<div class="col-md-10">
										<div class="checkbox-cust font-lg-14">
											<input type="checkbox" <?php echo Helper::validate_key_toggle('any_bankruptcy_cases_pending',$BasicInfo_PartC,0);?>>
											<label>No</label>
										</div>
										<div class="checkbox-cust font-lg-14">
											<input type="checkbox" <?php echo Helper::validate_key_toggle('any_bankruptcy_cases_pending',$BasicInfo_PartC,1);?>>
											<label>Yes</label>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="input-group">
													<label>Debtor</label>
													<input type="text" value="<?php echo Helper::validate_key_value('debator_name',$BasicInfo_PartC);?>" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group">
													<label>Relationship to you</label>
													<input type="text" value="<?php echo Helper::validate_key_value('your_relationship',$BasicInfo_PartC);?>" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<div class="input-group">
													<label>District</label>
													<input type="text" value="<?php echo Helper::validate_key_value('district',$BasicInfo_PartC);?>" class="form-control">
												</div>
											</div>
											<div class="col-md-3">
												<div class="input-group">
													<label>When</label>
													<input type="text" value="<?php echo Helper::validate_key_value('partner_date_filed',$BasicInfo_PartC);?>" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group">
													<label> Case number, if known</label>
													<input type="text" value="<?php echo Helper::validate_key_value('partner_case_number',$BasicInfo_PartC);?>" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="input-group">
													<label>Debtor</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group">
													<label>Relationship to you</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<div class="input-group">
													<label>District</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-3">
												<div class="input-group">
													<label>When</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group">
													<label> Case number, if known</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>


									</div>
								</div>
							</div>
							<div class="form-border">
								<div class="row mb-3">
									<div class="col-md-2">
										<div class="input-group">
											<strong>11. Do you rent your
												residence?</strong>
										</div>
									</div>
									<div class="col-md-10">
										<div class="checkbox-cust font-lg-14">
											<input type="checkbox">
											<label>No</label>
										</div>
										<div class="checkbox-cust font-lg-14">
											<input type="checkbox">
											<label>Yes</label>
										</div>
									</div>
								</div>
							</div>
							<!-- Part 3 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title my-3">
										<span>Part 3</span>
										<h2 class="font-lg-18">Report About Any Businesses You Own as a Sole
											Proprietor
										</h2>
									</div>
								</div>
							</div>
							
							<div class="form-border">
								<div class="row">
									<div class="col-md-2">
										<div class="input-group">
											<strong>12. Are you a sole proprietor
												of any full- or part-time
												business?</strong>
											<p>A sole proprietorship is a
												business you operate as an
												individual, and is not a
												separate legal entity such as
												a corporation, partnership, or
												LLC.
												If you have more than one
												sole proprietorship, use a
												separate sheet and attach it
												to this petition.
											</p>
										</div>
									</div>
									<div class="col-md-10">
										<div class="checkbox-cust font-lg-14">
											<input type="checkbox" <?php echo Helper::validate_key_toggle('sole_proprietor',$BasicInfo_PartRest,0);?>>
											<label>No</label>
										</div>
										<div class="checkbox-cust font-lg-14">
											<input type="checkbox" <?php echo Helper::validate_key_toggle('sole_proprietor',$BasicInfo_PartRest,1);?>>
											<label>Yes</label>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Name of business, if any</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label>Street Address</label>
													<input type="number" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label>Address 2</label>
													<input type="number" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group">
													<label>City</label>
													<input type="number" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>ZIP Code</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<p><i class="text-bold">Check the appropriate box to describe your
														business:</i></p>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<input type="checkbox">
													<label>Health Care Business (as defined in 11 U.S.C. §
														101(27A))</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<input type="checkbox">
													<label> Single Asset Real Estate (as defined in 11 U.S.C. §
														101(51B))</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<input type="checkbox">
													<label>Stockbroker (as defined in 11 U.S.C. § 101(53A))</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<input type="checkbox">
													<label>Commodity Broker (as defined in 11 U.S.C. §
														101(6))</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<input type="checkbox">
													<label>None of the above</label>
												</div>
											</div>

										</div>


									</div>
								</div>
							</div>
							<!-- Part 4 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title my-3">
										<span>Part 4</span>
										<h2 class="font-lg-18">Report if You Own or Have Any Hazardous Property or
											Any
											Property That
											Needs Immediate Attention</h2>
									</div>
								</div>
							</div>
							<div class="form-border">
								<div class="row mb-3">
									<div class="col-md-2">
										<div class="input-group">
											<strong>12. Do you own or have any
												property that poses or is
												alleged to pose a threat
												of imminent and
												identifiable hazard to
												public health or safety?
												Or do you own any
												property that needs
												immediate attention?</strong>
											<p>For example, do you own
												perishable goods, or livestock
												that must be fed, or a building
												that needs urgent repairs?
											</p>
										</div>
									</div>
									<div class="col-md-10">
										<div class="checkbox-cust font-lg-14">
											<input type="checkbox" <?php echo Helper::validate_key_toggle('hazardous_property',$BasicInfo_PartRest,0);?>>
											<label>No</label>
										</div>
										<div class="checkbox-cust font-lg-14">
											<input type="checkbox" <?php echo Helper::validate_key_toggle('hazardous_property',$BasicInfo_PartRest,1);?>>
											<label>Yes</label>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>What is the hazard?</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>

											<div class="col-md-12">
												<div class="input-group">
													<label>If immediate attention is needed, why is it
														needed?</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>

											<div class="col-md-12">
												<div class="row">

													<!-- <div class="col-md-6">
														<div class="input-group">
															<label>Number</label>
															<input type="text" value="" class="form-control">
														</div>
													</div> -->

													<div class="col-md-6">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group">
													<label>City</label>
													<input type="number" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>ZIP Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row mt-3">								
								<div class="col-md-6">
									<div class="col-md-121 ">
										<p class="column-heading">Debtor 1</p>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="input-group">
												<label>First Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartA);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Middle Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartA);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Last Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartA);?>" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="input-group">
												<label>Case number (if known)</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<div class="col-md-6">
									<div class="col-md-121 ">
										<p class="column-heading">Debtor 2</p>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="input-group">
												<label>First Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartB);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Middle Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartB);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Last Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartB);?>" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<!-- <div class="input-group">
												<label>Case number (if known)</label>
												<input type="text" value="" class="form-control">
											</div> -->
										</div>

									</div>
								</div>

							</div>

							<!-- Part 5 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title my-3">
										<span>Part 5</span>
										<h2 class="font-lg-18">Explain Your Efforts to Receive a Briefing About
											Credit
											Counseling
										</h2>
									</div>
								</div>
							</div>
							<div class="form-border">
								<div class="row mb-3">
									<div class="col-md-2">
										<div class="input-group">
											<strong>15.Tell the court whether
												you have received a
												briefing about credit
												counseling</strong>
											<p>The law requires that you
												receive a briefing about credit
												counseling before you file for
												bankruptcy. You must
												truthfully check one of the
												following choices. If you
												cannot do so, you are not
												eligible to file.
												If you file anyway, the court
												can dismiss your case, you
												will lose whatever filing fee
												you paid, and your creditors
												can begin collection activities
												again
											</p>
										</div>
									</div>
									<div class="col-md-10">
										<div class="row">
											<div class="col-md-6">
												<div class="col-md-12">
													<p class="column-heading text-center">About Debtor 1:</p>
													<p><i class="text-bold">You must check one:</i></p>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox" checked>
													<label><strong>I received a briefing from an approved credit
															counseling agency within the 180 days before I
															filed this bankruptcy petition, and I received a
															certificate of completion.</strong><br>
														Attach a copy of the certificate and the payment
														plan, if any, that you developed with the agency</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox">
													<label><strong>I received a briefing from an approved credit
															counseling agency within the 180 days before I
															filed this bankruptcy petition, but I do not have a
															certificate of completion.</strong><br>
														Within 14 days after you file this bankruptcy petition,
														you MUST file a copy of the certificate and payment
														plan, if any.</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox">
													<label><strong> certify that I asked for credit counseling
															services from an approved agency, but was
															unable to obtain those services during the 7
															days after I made my request, and exigent
															circumstances merit a 30-day temporary waiver
															of the requirement.</strong><br>
														To ask for a 30-day temporary waiver of the
														requirement, attach a separate sheet explaining
														what efforts you made to obtain the briefing, why
														you were unable to obtain it before you filed for
														bankruptcy, and what exigent circumstances
														required you to file this case.
														Your case may be dismissed if the court is
														dissatisfied with your reasons for not receiving a
														briefing before you filed for bankruptcy.
														If the court is satisfied with your reasons, you must
														still receive a briefing within 30 days after you file.
														You must file a certificate from the approved
														agency, along with a copy of the payment plan you
														developed, if any. If you do not do so, your case
														may be dismissed.
														Any extension of the 30-day deadline is granted
														only for cause and is limited to a maximum of 15
														days.</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox">
													<label class="mb-3"><strong> I am not required to receive a
															briefing
															about
															credit counseling because of:</strong>
														<div class="checkbox-cust font-lg-14 mb-3">
															<input type="checkbox">
															<label><strong> Incapacity</strong> &nbsp;I have a
																mental
																illness or a
																mental
																deficiency that makes me
																incapable of realizing or making
																rational decisions about finances.
															</label>
														</div>
														<div class="checkbox-cust font-lg-14 mb-3">
															<input type="checkbox">
															<label><strong> Disability</strong> &nbsp;My physical
																disability causes me
																to be unable to participate in a
																briefing in person, by phone, or
																through the internet, even after I
																reasonably tried to do so.
															</label>
														</div>
														<div class="checkbox-cust font-lg-14 mb-3">
															<input type="checkbox">
															<label><strong> Active duty</strong> &nbsp; I am
																currently
																on active
																military
																duty in a military combat zone.
															</label>
														</div>
														If you believe you are not required to receive a
														briefing about credit counseling, you must file a
														motion for waiver of credit counseling with the court.

													</label>
												</div>
											</div>
											<div class="col-md-6">
												<div class="col-md-12">
													<p class="column-heading text-center">About Debtor 2 (Spouse
														Only in
														a
														Joint Case):
													</p>
													<p><i class="text-bold">You must check one:</i></p>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox">
													<label><strong>I received a briefing from an approved credit
															counseling agency within the 180 days before I
															filed this bankruptcy petition, and I received a
															certificate of completion.</strong><br>
														Attach a copy of the certificate and the payment
														plan, if any, that you developed with the agency</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox">
													<label><strong>I received a briefing from an approved credit
															counseling agency within the 180 days before I
															filed this bankruptcy petition, but I do not have a
															certificate of completion.</strong><br>
														Within 14 days after you file this bankruptcy petition,
														you MUST file a copy of the certificate and payment
														plan, if any.</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox">
													<label><strong> certify that I asked for credit counseling
															services from an approved agency, but was
															unable to obtain those services during the 7
															days after I made my request, and exigent
															circumstances merit a 30-day temporary waiver
															of the requirement.</strong><br>
														To ask for a 30-day temporary waiver of the
														requirement, attach a separate sheet explaining
														what efforts you made to obtain the briefing, why
														you were unable to obtain it before you filed for
														bankruptcy, and what exigent circumstances
														required you to file this case.
														Your case may be dismissed if the court is
														dissatisfied with your reasons for not receiving a
														briefing before you filed for bankruptcy.
														If the court is satisfied with your reasons, you must
														still receive a briefing within 30 days after you file.
														You must file a certificate from the approved
														agency, along with a copy of the payment plan you
														developed, if any. If you do not do so, your case
														may be dismissed.
														Any extension of the 30-day deadline is granted
														only for cause and is limited to a maximum of 15
														days.</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox">
													<label class="mb-3"><strong> I am not required to receive a
															briefing
															about
															credit counseling because of:</strong>
														<div class="checkbox-cust font-lg-14 mb-3">
															<input type="checkbox">
															<label><strong> Incapacity</strong> &nbsp;I have a
																mental
																illness or a
																mental
																deficiency that makes me
																incapable of realizing or making
																rational decisions about finances.
															</label>
														</div>
														<div class="checkbox-cust font-lg-14 mb-3">
															<input type="checkbox">
															<label><strong> Disability</strong> &nbsp;My physical
																disability causes me
																to be unable to participate in a
																briefing in person, by phone, or
																through the internet, even after I
																reasonably tried to do so.
															</label>
														</div>
														<div class="checkbox-cust font-lg-14 mb-3">
															<input type="checkbox">
															<label><strong> Active duty</strong> &nbsp; I am
																currently
																on active
																military
																duty in a military combat zone.
															</label>
														</div>
														If you believe you are not required to receive a
														briefing about credit counseling, you must file a
														motion for waiver of credit counseling with the court.

													</label>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>

							<div class="row mt-3">								
								<div class="col-md-6">
									<div class="col-md-121 ">
										<p class="column-heading">Debtor 1</p>
									</div>

									<div class="row">
										<div class="col-md-4">
											<div class="input-group">
												<label>First Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartA);?>" class="form-control">
											</div>
										</div>

										<div class="col-md-4">
											<div class="input-group">
												<label>Middle Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartA);?>" class="form-control">
											</div>
										</div>

										<div class="col-md-4">
											<div class="input-group">
												<label>Last Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartA);?>" class="form-control">
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="input-group">
												<label>Case number (if known)</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<div class="col-md-6">
									<div class="col-md-121 ">
										<p class="column-heading">Debtor 2</p>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="input-group">
												<label>First Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartB);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Middle Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartB);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Last Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartB);?>" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<!-- <div class="input-group">
												<label>Case number (if known)</label>
												<input type="text" value="" class="form-control">
											</div> -->
										</div>

									</div>
								</div>
							</div>

							<!-- Part 6 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title my-3">
										<span>Part 6</span>
										<h2 class="font-lg-18">Answer These Questions for Reporting Purposes</h2>
									</div>
								</div>
							</div>
							<div class="form-border">
								<div class="row mb-3">
									<div class="col-md-2">
										<div class="input-group">
											<strong>16. What kind of debts do
												you have?</strong>
										</div>
									</div>
									<div class="col-md-10">
										<div class="row">
											<div class="col-md-12">
												<div class="checkbox-cust font-lg-14 mb-3">
													<label class=" mb-3"><strong>16a. Are your debts primarily
															consumer
															debts? </strong>
														Consumer debts are defined in 11 U.S.C. § as “incurred by an
														individual
														primarily
														for a personal, family, or household purpose.”
													</label><br>
													<div class="checkbox-cust font-lg-14">
														<input type="checkbox">
														<label class=" mb-3">No</label>
													</div>
													<div class="checkbox-cust font-lg-14">
														<input type="checkbox" checked>
														<label class=" mb-3">Yes</label>
													</div>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<label class=" mb-3"><strong>16b. Are your debts primarily
															business
															debts?</strong>
														Business debts are debts that you incurred to obtain
														money for a business or investment or through the operation
														of
														the
														business or
														investment.
														101(8)</label><br>
													<div class="checkbox-cust font-lg-14">
														<input type="checkbox">
														<label class=" mb-3">No</label>
													</div>
													<div class="checkbox-cust font-lg-14">
														<input type="checkbox">
														<label class=" mb-3">Yes</label>
													</div>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<label class=" mb-3"><strong>16c.</strong> State the type of
														debts
														you
														owe that are
														not
														consumer debts or
														business debts.</label><br>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>


											</div>

										</div>

									</div>
								</div>
							</div>
							<div class="form-border">
								<div class="row mb-3">
									<div class="col-md-2">
										<div class="input-group">
											<strong>17. Are you filing under
												Chapter 7?<br><br>
												Do you estimate that after
												any exempt property is
												excluded and
												administrative expenses
												are paid that funds will be
												available for distribution
												to unsecured creditors?</strong>
										</div>
									</div>
									<div class="col-md-10">
										<div class="row">
											<div class="col-md-12">

												<div class="checkbox-cust font-lg-14 mb-3">
													<div class="checkbox-cust font-lg-14">
														<input type="checkbox"><label class=" mb-3">No. I am not
															filing
															under Chapter 7.
															Go to line 18.
														</label>
													</div>
													<div class="checkbox-cust font-lg-14">
														<input type="checkbox" checked>
														<label class=" mb-3">Yes. I am filing under Chapter 7. Do
															you
															estimate that
															after any exempt property is excluded and
															administrative expenses are paid that funds will be
															available to
															distribute
															to unsecured creditors?
														</label>
														<div class="checkbox-cust font-lg-14">
															<input type="checkbox" checked><label class=" mb-3">No
															</label>
														</div>
														<div class="checkbox-cust font-lg-14">
															<input type="checkbox"><label class=" mb-3">Yes
															</label>
														</div>

													</div>
												</div>

											</div>

										</div>

									</div>
								</div>
							</div>
							<div class="form-border">
								<div class="row mb-3">
									<div class="col-md-2">
										<div class="input-group">
											<strong>18. How many creditors do
												you estimate that you
												owe?</strong>
										</div>
									</div>
									<div class="col-md-10">
										<div class="row">
											<div class="col-md-4">
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>1-49
													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														50-99
													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														100-199
													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														200-999
													</label>
												</div>

											</div>
											<div class="col-md-4">
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>1,000-5,000
													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														5,001-10,000
													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														10,001-25,000
													</label>
												</div>
											</div>
											<div class="col-md-4">
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>25,001-50,000
													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														50,001-100,000
													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														More than 100,000
													</label>
												</div>
											</div>

										</div>

									</div>

								</div>
							</div>
							<div class="form-border">
								<div class="row mb-3">
									<div class="col-md-2">
										<div class="input-group">
											<strong>19. How much do you
												estimate your assets to
												be worth?</strong>
										</div>
									</div>
									<div class="col-md-10">
										<div class="row">
											<div class="col-md-4">
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>$0-$50,000
													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														$50,001-$100,000

													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														$100,001-$500,000

													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														$500,001-$1 million
													</label>
												</div>
											</div>
											<div class="col-md-4">
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>$1,000,001-$10 million

													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														$10,000,001-$50 million

													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														$50,000,001-$100 million

													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														$100,000,001-$500 million

													</label>
												</div>
											</div>
											<div class="col-md-4">
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>$500,000,001-$1 billion

													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														$1,000,000,001-$10 billion

													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														$10,000,000,001-$50 billion
													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														More than $50 billion
													</label>
												</div>
											</div>

										</div>

									</div>

								</div>
							</div>
							<div class="form-border ">
								<div class="row">
									<div class="col-md-2">
										<div class="input-group">
											<strong>20. How much do you
												estimate your liabilities
												to be?</strong>
										</div>
									</div>
									<div class="col-md-10">
										<div class="row">
											<div class="col-md-4">
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>$0-$50,000

													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														$50,001-$100,000
													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														$100,001-$500,000
													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														$500,001-$1 million
													</label>
												</div>
											</div>
											<div class="col-md-4">
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>$1,000,001-$10 million

													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														$10,000,001-$50 million

													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														$50,000,001-$100 million

													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														$100,000,001-$500 million

													</label>
												</div>
											</div>
											<div class="col-md-4">
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>$500,000,001-$1 billion

													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														$1,000,000,001-$10 billion

													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														$10,000,000,001-$50 billion
													</label>
												</div>
												<div class="checkbox-cust font-lg-14 mb-3">
													<input type="checkbox"><label>
														More than $50 billion
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="part-form-title mb-3">
											<span>Part 7</span>
											<h2 class="font-lg-18">Sign Below</h2>
										</div>
									</div>
									<div class="col-md-2">
										<strong>For You</strong>
									</div>
									<div class="col-md-10">
										<div class="input-group">
											<p>I have examined this petition, and I declare under penalty of perjury
												that
												the
												information
												provided is true and
												correct.
												If I have chosen to file under Chapter 7, I am aware that I may
												proceed,
												if
												eligible,
												under
												Chapter 7, 11,12, or 13
												of title 11, United States Code. I understand the relief available
												under
												each chapter,
												and I
												choose to proceed
												under Chapter 7.
												If no attorney represents me and I did not pay or agree to pay
												someone
												who
												is not an
												attorney to help me fill out
												this document, I have obtained and read the notice required by 11
												U.S.C.
												§
												342(b).
												I request relief in accordance with the chapter of title 11, United
												States
												Code,
												specified
												in this petition.
												I understand making a false statement, concealing property, or
												obtaining
												money or
												property
												by fraud in connection
												with a bankruptcy case can result in fines up to $250,000, or
												imprisonment
												for up to 20
												years, or both.
												18 U.S.C. §§ 152, 1341, 1519, and 3571.</p>

										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="input-group signature-field">
													<p>Signature of Debtor 1</p>
													<span></span>
												</div>
												<div class="input-group signature-field">
													<label for="">Executed on</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group signature-field">
													<p>Signature of Debtor 2</p>
													<span></span>
													<div class="input-group signature-field">
														<label for="">Executed on</label>
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

							
							<div class="row mt-3">
								<div class="col-md-6">
									<div class="col-md-121 ">
										<p class="column-heading">Debtor 1</p>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="input-group">
												<label>First Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartA);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Middle Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartA);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Last Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartA);?>" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="input-group">
												<label>Case number (if known)</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<div class="col-md-6">
									<div class="col-md-121 ">
										<p class="column-heading">Debtor 2</p>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="input-group">
												<label>First Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartB);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Middle Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartB);?>" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Last Name</label>
												<input type="text" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartB);?>" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<!-- <div class="input-group">
												<label>Case number (if known)</label>
												<input type="text" value="" class="form-control">
											</div> -->
										</div>

									</div>
								</div>

							</div>

							<div class="form-border ">
								<div class="row">
									<div class="col-md-2">
										<div class="input-group">
											<strong>For your attorney, if you are
												represented by one
												If you are not represented
												by an attorney, you do not
												need to file this page.</strong>
										</div>
									</div>
									<div class="col-md-10">
										<div class="input-group">
											<p>I, the attorney for the debtor(s) named in this petition, declare
												that I
												have
												informed
												the debtor(s) about eligibility
												to proceed under Chapter 7, 11, 12, or 13 of title 11, United States
												Code,
												and have
												explained the relief
												available under each chapter for which the person is eligible. I
												also
												certify that I
												have delivered to the debtor(s)
												the notice required by 11 U.S.C. § 342(b) and, in a case in which §
												707(b)(4)(D)
												applies, certify that I have no
												knowledge after an inquiry that the information in the schedules
												filed
												with
												the petition
												is incorrect. </p>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="input-group signature-field">
													<p>Signature of Attorney for Debtor</p>
													<span></span>
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group">
													<label for="">Date</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label for="">Printed name</label>
													<input type="text" value="<?php echo Auth::user()->name; ?>" class="form-control">
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label for="">Firm name</label>
													<input type="text" value="<?php echo Helper::validate_key_value('company_name',$attorney_company);?>" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<!-- <div class="col-md-4">
												<div class="input-group">
													<label>Number</label>
													<input type="number" value="" class="form-control">
												</div> 
											</div> -->
											<div class="col-md-8">
												<div class="input-group">
													<label>Street</label>
													<input type="text" value="<?php echo Helper::validate_key_value('attorney_address',$attorney_company);?>"" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="input-group">
													<label>City</label>
													<input type="text" value="<?php echo Helper::validate_key_value('attorney_city',$attorney_company);?>"" class="form-control">
												</div>
											</div>
											<div class="col-md-3">
												<div class="input-group">
													<label>State</label>
													<input type="text" value="<?php echo Helper::validate_key_value('attorney_state',$attorney_company);?>"" class="form-control">
												</div>
											</div>
											<div class="col-md-3">
												<div class="input-group">
													<label>Zip Code</label>
													<input type="text" value="<?php echo Helper::validate_key_value('attorney_zip',$attorney_company);?>"" class="form-control">
												</div>
											</div>
										</div>
										<?php ?>
										<div class="row">
											<div class="col-md-6">
												<div class="input-group">
													<label>Contact phone</label>
													<input type="text" value="<?php echo Helper::validate_key_value('attorney_phone',$attorney_company);?>" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group">
													<label>Email address</label>
													<input type="email" value="<?php echo Auth::user()->email; ?>" class="form-control">
												</div>
											</div>

										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="input-group">
													<label>Bar number</label>
													<input type="number" value="<?php echo Helper::validate_key_value('state_bar',$attorney_company);?>" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group">
													<label>State</label>
													<input type="text" value="<?php echo Helper::validate_key_value('attorney_state',$attorney_company);?>" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row my-3">
								<div class="col-md-12">
									<div class="text-center">
										<h2>STATEMENT OF RELATED CASES<br>
											INFORMATION REQUIRED BY LBR 1015-2<br>
											UNITED STATES BANKRUPTCY COURT, CENTRAL DISTRICT OF CALIFORNIA</h2>
									</div>
								</div>
								<div class="col-md-12 mt-3">
									<div class="input-group mb-5">
										<label for="" class="mb-5 d-block"><strong>1. </strong>A petition under the
											Bankruptcy Act of
											1898 or the Bankruptcy Reform Act of
											1978 has previously been filed by or
											against the debtor, his/her spouse, his or her current or former
											domestic
											partner, an
											affiliate of the debtor, any
											copartnership or joint venture of which debtor is or formerly was a
											general
											or
											limited
											partner, or member, or any
											corporation of which the debtor is a director, officer, or person in
											control, as
											follows:
											(Set forth the complete number
											and title of each such of prior proceeding, date filed, nature thereof,
											the
											Bankruptcy Judge
											and court to whom
											assigned, whether still pending and, if not, the disposition thereof. If
											none,
											so indicate.
											Also, list any real property
											included in Schedule A/B that was filed with any such prior
											proceeding(s).</label>
									</div>
									<div class="input-group mb-3">
										<label for="" class="mb-3"><strong>2. </strong>(If petitioner is a
											partnership
											or
											joint venture)
											A petition under the Bankruptcy Act of 1898 or the Bankruptcy Reform
											Act of 1978 has previously been filed by or against the debtor or an
											affiliate
											of the
											debtor, or a general partner in the
											debtor, a relative of the general partner, general partner of, or person
											in
											control of the
											debtor, partnership in which the
											debtor is a general partner, general partner of the debtor, or person in
											control
											of the
											debtor as follows: (Set forth the
											complete number and title of each such prior proceeding, date filed,
											nature
											of
											the
											proceeding, the Bankruptcy Judge
											and court to whom assigned, whether still pending and, if not, the
											disposition
											thereof. If
											none, so indicate. Also, list
											any real property included in Schedule A/B that was filed with any such
											prior
											proceeding(s).)</label>
									</div>
									<div class="input-group mb-3">
										<label for="" class="mb-3"><strong>3. </strong>(If petitioner is a
											corporation)
											A
											petition under
											the Bankruptcy Act of 1898 or the Bankruptcy Reform Act of 1978 has
											previously been filed by or against the debtor, or any of its affiliates
											or
											subsidiaries, a
											director of the debtor, an officer
											of the debtor, a person in control of the debtor, a partnership in which
											the
											debtor is
											general partner, a general partner
											of the debtor, a relative of the general partner, director, officer, or
											person
											in control of
											the debtor, or any persons, firms
											or corporations owning 20% or more of its voting stock as follows: (Set
											forth
											the complete
											number and title of each
											such prior proceeding, date filed, nature of proceeding, the Bankruptcy
											Judge
											and court to
											whom assigned, whether
											still pending, and if not, the disposition thereof. If none, so
											indicate.
											Also,
											list any
											real property included in Schedule
											A/B that was filed with any such prior proceeding(s).)</label>
									</div>
									<div class="input-group mb-3">
										<label for="" class="mb-3"><strong>4. </strong>. (If petitioner is an
											individual) A
											petition
											under the Bankruptcy Reform Act of 1978, including amendments thereof,
											has
											been filed by or against the debtor within the last 180 days: (Set forth
											the
											complete number
											and title of each such
											prior proceeding, date filed, nature of proceeding, the Bankruptcy Judge
											and
											court to whom
											assigned, whether still
											pending, and if not, the disposition thereof. If none, so indicate.
											Also,
											list
											any real
											property included in Schedule A/B
											that was filed with any such prior proceeding(s).)</label>
									</div>
									<div class="input-group mb-3">
										<label for="" class="mb-3">I declare, under penalty of perjury, that the
											foregoing
											is true and
											correct.</label>
									</div>
									<div class="row ">
										<div class="col-md-6 ">
											<div class="row align-items-center">
												<div class="col-md-8">
													<div class="input-group">
														<label for="">Executed at</label>
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div class="input-group">
														<label for="">California</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="input-group">
												<label for="">Date</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-group signature-field">
												<p>Signature of Debtor 2</p>
												<span></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<!-- official-form-106sum -->
					<section class="official-form-106sum padd-20" id="official-form-106sum">
						<div class="container">
							<div class="row">
								<div class="col-md-9">
									<div class="section-box">
										<div class="section-header bg-back text-white">
											<p class="font-lg-20">Fill in this information to identify your case</p>
										</div>
										<div class="section-body padd-20">
											<div class="row">
												<div class="col-md-12">
													<label>Debtor 1 </label>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<div class="input-group">
																<label>First Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Middle Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Last Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>

												</div>
												<div class="col-md-12">
													<label class="d-block">Debtor 2 </label>
													<span class="font-lg-14">(Spouse, if filing)</span>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<div class="input-group">
																<label>First Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Middle Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Last Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>

												</div>
												<div class="col-md-12">
													<div class="input-group">
														<label for="">United States Bankruptcy Court for the</label>
														<select class="form-control">
															<option value="1">1</option>
															<option value="1">1</option>
															<option value="1">1</option>
														</select>
													</div>
												</div>

												<div class="col-md-12">
													<div class="input-group">
														<label>Case number (if known)</label>
														<input type="text" value="" class="form-control">
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row padd-20">
								<div class="col-md-12 mb-3">
									<div class="form-title">
										<h4>Official Form 106Sum </h4>
										<h2 class="font-lg-22">Summary of Your Assets and Liabilities and Certain
											Statistical Information
										</h2>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-subheading">
										<p class="font-lg-14">Be as complete and accurate as possible. If two
											married
											people are filing together, both are equally responsible for supplying
											correct
											information. Fill out all of your schedules first; then complete the
											information on this form. If you are filing amended schedules after you
											file
											your original forms, you must fill out a new Summary and check the box
											at
											the top of this page. </p>
									</div>
								</div>
							</div>
							<!-- Part 1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 1</span>
										<h2 class="font-lg-18">Summarize Your Assets</h2>
									</div>
								</div>
							</div>
							<div class="form-border mb-3">
								<div class="row">
									<div class="col-md-12">
										<div class="input-group column-heading d-inline-block"
											style="float: right;">
											<strong class="d-block">Your assets
											</strong>
											<p>Value of what you own </p>
										</div>
										<div class="input-group" style="clear: both;">
											<p><strong>1.</strong> Schedule A/B: Property (Official Form 106A/B)</p>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="input-group">
													<label>1a. Copy line 55, Total real estate, from Schedule
														A/B</label>
												</div>
											</div>
											<div class="col-md-5">
												<div class="input-group">
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group">
													<input type="number" value="" class="form-control" placeholder="$">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-5">
												<div class="input-group">
													<label>1b. Copy line 62, Total personal property, from Schedule
														A/B</label>
												</div>
											</div>
											<div class="col-md-5">
												<div class="input-group">
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group">
													<input type="number" value="" class="form-control" placeholder="$">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="input-group">
													<label>1c. Copy line 63, Total of all property on Schedule
														A/B</label>
												</div>
											</div>
											<div class="col-md-5">
												<div class="input-group">
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group">
													<input type="number" value="" class="form-control" placeholder="$">
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- Part 2 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Summarize Your Liabilities</h2>
									</div>
								</div>
							</div>
							<div class="form-border mb-3">
								<div class="row">
									<div class="col-md-12">
										<div class="input-group column-heading d-inline-block"
											style="float: right;">
											<strong class="d-block">Your assets
											</strong>
											<p>Value of what you own </p>
										</div>
										<div class="input-group" style="clear: both;">
											<p><strong>2.</strong> Schedule D: Creditors Who Have Claims Secured by
												Property (Official Form 106D)</p>
										</div>
										<div class="row">
											<div class="col-md-8">
												<div class="input-group">
													<label>2a. Copy the total you listed in Column A, Amount of
														claim,
														at the bottom of the last page of Part 1 of Schedule
														D</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group">
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group">
													<input type="number" value="" class="form-control" placeholder="$">
												</div>
											</div>
										</div>
										<div class="input-group" style="clear: both;">
											<p><strong>3.</strong> Schedule E/F: Creditors Who Have Unsecured Claims
												(Official Form 106E/F)</p>
										</div>
										<div class="row">
											<div class="col-md-8">
												<div class="input-group">
													<p><strong>3a.</strong> a. Copy the total claims from Part 1
														(priority unsecured claims) from line 6e of Schedule E/F</p>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group">
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group">
													<input type="number" value="" class="form-control" placeholder="$">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8">
												<div class="input-group">
													<p><strong>3b.</strong>Copy the total claims from Part 2
														(nonpriority unsecured claims) from line 6j of Schedule E/F
													</p>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group">
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group">
													<input type="number" value="" class="form-control" placeholder="$">
												</div>
											</div>
										</div>


									</div>
								</div>
							</div>
							<!-- Part 3 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 3</span>
										<h2 class="font-lg-18">Summarize Your Income and Expenses</h2>
									</div>
								</div>
							</div>
							<div class="form-border mb-3">
								<div class="row">
									<div class="col-md-12">
										<div class="input-group">
											<p><strong>4.</strong> Schedule I: Your Income (Official Form 106I)</p>
										</div>
										<div class="row">
											<div class="col-md-7">
												<div class="input-group">
													<label>Copy your combined monthly income from line 12 of
														Schedule
														I</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="input-group">
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group">
													<input type="number" value="" class="form-control" placeholder="$">
												</div>
											</div>
										</div>
										<div class="input-group">
											<p><strong>5.</strong> Schedule J: Your Expenses (Official Form 106J)
											</p>
										</div>
										<div class="row">
											<div class="col-md-7">
												<div class="input-group">
													<p>Copy your monthly expenses from line 22c of Schedule J</p>
												</div>
											</div>
											<div class="col-md-3">
												<div class="input-group">
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group">
													<input type="number" value="" class="form-control" placeholder="$">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-md-12 ">
									<p class="column-heading">Debtor 1</p>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-4">
											<div class="input-group">
												<label>First Name</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Middle Name</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<label>Last Name</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-12">
											<div class="input-group">
												<label>Case number (if known)</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- Part 4-->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 4</span>
										<h2 class="font-lg-18">Answer These Questions for Administrative and
											Statistical
											Records</h2>
									</div>
								</div>
							</div>
							<div class="form-border">
								<div class="row">
									<div class="col-md-12">
										<div class="input-group">
											<p><strong>6. Are you filing for bankruptcy under Chapters 7, 11, or
													13?</strong></p>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>No. You have nothing to report on this part of the form. Check
												this
												box and submit this form to the court with your other
												schedules.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Yes</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-border">
								<div class="row">
									<div class="col-md-12">
										<div class="input-group">
											<p><strong>7.What kind of debt do you have?</strong></p>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label><strong>Your debts are primarily consumer debts.</strong>
												Consumer
												debts are those
												“incurred by an individual primarily for a personal,
												family, or household purpose.” 11 U.S.C. § 101(8). Fill out lines
												8-9g
												for statistical purposes. 28 U.S.C. § 159.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label><strong>Your debts are not primarily consumer debts. </strong>You
												have nothing to
												report on this part of the form. Check this box and submit
												this form to the court with your other schedules.</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-border">
								<div class="row">
									<div class="col-md-8">
										<div class="input-group">
											<input type="checkbox">
											<label><strong>8. From the Statement of Your Current Monthly
													Income:</strong> Copy your
												total current monthly income from Official
												Form 122A-1 Line 11; OR, Form 122B Line 11; OR, Form 122C-1 Line
												14.</label>
										</div>
									</div>
									<div class="col-md-4">
										<div class="input-group">
											<input type="text" value="" class="form-control" placeholder="$">

										</div>
									</div>
								</div>
							</div>
							<div class="form-border">
								<div class="row">
									<div class="col-md-12">
										<div class="input-group">
											<p><strong>9. Copy the following special categories of claims from Part
													4,
													line 6 of Schedule E/F:</strong></p>
										</div>
										<div class="row">
											<div class="col-md-8">
												<div class="column-heading">
													<strong>From Part 4 on Schedule E/F, copy the following:
													</strong>
												</div>
											</div>
											<div class="col-md-4">
												<div class="column-heading">
													<strong>Total claim</strong>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-8">
												<div class="input-group">
													<label><strong>9a. </strong>Domestic support obligations (Copy
														line 6a.)</label>
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<input type="text" value="" class="form-control" placeholder="$">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8">
												<div class="input-group ">
													<label><strong>9b. </strong>Taxes and certain other debts you
														owe
														the government. (Copy line 6b.)</label>
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<input type="text" value="" class="form-control" placeholder="$">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8">
												<div class="input-group ">
													<label><strong>9c. </strong>Claims for death or personal injury
														while you were intoxicated. (Copy line 6c)</label>
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<input type="text" value="" class="form-control" placeholder="$">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8">
												<div class="input-group ">
													<label><strong>9d. </strong>Student loans. (Copy line
														6f.)</label>
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<input type="text" value="" class="form-control" placeholder="$">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8">
												<div class="input-group ">
													<label><strong>9e. </strong>Obligations arising out of a
														separation
														agreement or divorce that you did not report as
														priority claims. (Copy line 6g.) </label>
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<input type="text" value="" class="form-control" placeholder="$">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8">
												<div class="input-group ">
													<label><strong>9f. </strong>Debts to pension or profit-sharing
														plans, and other similar debts. (Copy line 6h.) </label>
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<input type="text" value="" class="form-control" placeholder="$">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8">
												<div class="input-group ">
													<label><strong>9g. </strong><strong>Total. </strong> Add lines
														9a
														through 9f.
													</label>
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<input type="text" value="" class="form-control" placeholder="$">
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</section>

					<!-- #official-form-106a/b -->
					@include("attorney.official_form.form_property",['BasicInfoPartA'=>$BasicInfoPartA,'BasicInfoPartB'=>$BasicInfoPartB,'property_info'=>$property_info])

					<!-- Official Form 106C -->
					<section class="official-form-106sum padd-20" id="official-form-106c">
						<div class="container">
							<div class="row">
								<div class="col-md-9">
									<div class="section-box">
										<div class="section-header bg-back text-white">
											<p class="font-lg-20">Fill in this information to identify your case</p>
										</div>
										<div class="section-body padd-20">
											<div class="row">
												<div class="col-md-12">
													<label>Debtor 1 </label>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<div class="input-group">
																<label>First Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Middle Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Last Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>

												</div>
												<div class="col-md-12">
													<label class="d-block">Debtor 2 </label>
													<span class="font-lg-14">(Spouse, if filing)</span>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<div class="input-group">
																<label>First Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Middle Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Last Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>

												</div>

												<div class="col-md-12">
													<div class="input-group">
														<label>United States Bankruptcy Court for the</label>
														<input type="text" value="" class="form-control">
													</div>
												</div>


												<div class="col-md-12">
													<div class="input-group">
														<label>Case number</label>
														<input type="number" value="" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row padd-20">
								<div class="col-md-12 mb-3">
									<div class="form-title">
										<h4>Official Form 106C </h4>
										<h2 class="font-lg-22">Schedule C: The Property You Claim as Exempt
										</h2>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-subheading">
										<p class="font-lg-14">Be as complete and accurate as possible. If two
											married
											people are filing together, both are equally responsible for supplying
											correct information.
											Using the property you listed on Schedule A/B: Property (Official Form
											106A/B) as your source, list the property that you claim as exempt. If
											more
											space is needed, fill out and attach to this page as many copies of Part
											2:
											Additional Page as necessary. On the top of any additional pages, write
											your name and case number (if known). </p>
										<p class="font-lg-14"><strong>For each item of property you claim as exempt,
												you
												must specify the amount of the exemption you claim. One way of doing
												so
												is to state a
												specific dollar amount as exempt. Alternatively, you may claim the
												full
												fair market value of the property being exempted up to the amount
												of any applicable statutory limit. Some exemptions—such as those for
												health aids, rights to receive certain benefits, and tax-exempt
												retirement funds—may be unlimited in dollar amount. However, if you
												claim an exemption of 100% of fair market value under a law that
												limits the exemption to a particular dollar amount and the value of
												the
												property is determined to exceed that amount, your exemption
												would be limited to the applicable statutory amount. </strong> </p>
									</div>
								</div>
							</div>
							<!-- Part 1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 1</span>
										<h2 class="font-lg-18">Identify the Property You Claim as Exempt
										</h2>
									</div>
								</div>
							</div>
							<div class="form-border mb-3">
								<!-- Row 1 -->
								<div class="row">
									<div class="col-md-12">
										<div class="input-group d-inline-block">
											<label for="">
												<strong class="d-block">1. Which set of exemptions are you claiming?
												</strong>
												Check one only, even if your spouse is filing with you.
											</label>
										</div>
										<div class="input-group">
											<div class="input-group">
												<input type="checkbox">
												<label>You are claiming state and federal nonbankruptcy exemptions.
													11
													U.S.C. § 522(b)(3)</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label>You are claiming federal exemptions. 11 U.S.C. §
													522(b)(2)</label>
											</div>
										</div>

									</div>
								</div>

								<!-- Row 2 -->
								<div class="row">
									<div class="col-md-12">
										<div class="input-group">
											<div class="input-group">
												<label><strong class="d-block">2. For any property you list on
														Schedule
														A/B that you claim as exempt, fill in the information
														below.</strong></label>
											</div>
										</div>
									</div>
									<table class="table custom-table">
										<tr class="column-heading">
											<td>
												<div class="input-group">
													<strong>Brief description of the property and line on
														Schedule A/B that lists this property</strong>
												</div>
											</td>
											<td>
												<div class="input-group">
													<strong>Current value of the
														portion you own</strong>
													<p>Copy the value from
														Schedule A/B</p>
												</div>
											</td>
											<td>
												<div class="input-group">
													<strong>Amount of the exemption you claim</strong>
													<i>Check only one box for each exemption</i>
												</div>
											</td>
											<td>
												<div class="input-group">
													<strong>Specific laws that allow exemption</strong>
												</div>

											</td>
										</tr>
										<tbody>
											<tr>
												<td>
													<div class="input-group">
														<label class="font-lg-14">Brief
															description:</label>
														<div class="input-group">
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="input-group">
														<label class="font-lg-14">Line from
															Schedule A/B:</label>
														<div class="input-group">
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</td>
												<td>
													<div class="input-group d-flex">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</td>
												<td>
													<div class="input-group d-flex">
														<input type="checkbox">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
													<div class="input-group d-flex">
														<input type="checkbox">
														<label for=""> 100% of fair market value, up to
															any applicable statutory limit
														</label>
													</div>
												</td>
												<td>
													<div class="input-group">
														<textarea name="" id="" cols="15" rows="4"
															class="form-control"></textarea>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="input-group">
														<label class="font-lg-14">Brief
															description:</label>
														<div class="input-group">
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="input-group">
														<label class="font-lg-14">Line from
															Schedule A/B:</label>
														<div class="input-group">
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</td>
												<td>
													<div class="input-group d-flex">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</td>
												<td>
													<div class="input-group d-flex">
														<input type="checkbox">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
													<div class="input-group d-flex">
														<input type="checkbox">
														<label for=""> 100% of fair market value, up to
															any applicable statutory limit
														</label>
													</div>
												</td>
												<td>
													<div class="input-group">
														<textarea name="" id="" cols="15" rows="4"
															class="form-control"></textarea>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="input-group">
														<label class="font-lg-14">Brief
															description:</label>
														<div class="input-group">
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="input-group">
														<label class="font-lg-14">Line from
															Schedule A/B:</label>
														<div class="input-group">
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</td>
												<td>
													<div class="input-group d-flex">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</td>
												<td>
													<div class="input-group d-flex">
														<input type="checkbox">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
													<div class="input-group d-flex">
														<input type="checkbox">
														<label for=""> 100% of fair market value, up to
															any applicable statutory limit
														</label>
													</div>
												</td>
												<td>
													<div class="input-group">
														<textarea name="" id="" cols="15" rows="4"
															class="form-control"></textarea>
													</div>
												</td>
											</tr>
										</tbody>
									</table>

								</div>

								<!-- Row 3 -->
								<div class="row mt-3">
									<div class="col-md-12">
										<div class="input-group">
											<label><strong class="d-block">3. Are you claiming a homestead exemption
													of more than $170,350?</strong>(Subject to adjustment on 4/01/22
												and every 3 years after that for cases filed on or after the date of
												adjustment.)</label>
										</div>
									</div>
									<div class="col-md-12">
										<div class="input-group">
											<input type="checkbox">
											<label>No</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Yes. Did you acquire the property covered by the exemption within
												1,215 days before you filed this case?
											</label>
										</div>
									</div>
									<div class="col-md-12">
										<div class="input-group">
											<input type="checkbox">
											<label>No</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Yes
											</label>
										</div>
									</div>
								</div>

							</div>

							<!-- Part 2 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Additional Page
										</h2>
									</div>
								</div>
							</div>
							<div class="form-border mb-3">
								<table class="table custom-table">
									<tr class="column-heading">
										<td>
											<div class="input-group">
												<strong>Brief description of the property and line on
													Schedule A/B that lists this property</strong>
											</div>
										</td>
										<td>
											<div class="input-group">
												<strong>Current value of the
													portion you own</strong>
												<p>Copy the value from
													Schedule A/B</p>
											</div>
										</td>
										<td>
											<div class="input-group">
												<strong>Amount of the exemption you claim</strong>
												<i>Check only one box for each exemption</i>
											</div>
										</td>
										<td>
											<div class="input-group">
												<strong>Specific laws that allow exemption</strong>
											</div>

										</td>
									</tr>
									<tbody>
										<tr>
											<td>
												<div class="input-group">
													<label class="font-lg-14">Brief
														description:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="input-group">
													<label class="font-lg-14">Line from
														Schedule A/B:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<input type="checkbox">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
												<div class="input-group d-flex">
													<input type="checkbox">
													<label for=""> 100% of fair market value, up to
														any applicable statutory limit
													</label>
												</div>
											</td>
											<td>
												<div class="input-group">
													<textarea name="" id="" cols="15" rows="4"
														class="form-control"></textarea>
												</div>
											</td>
										</tr>
										<!-- Row end -->
										<tr>
											<td>
												<div class="input-group">
													<label class="font-lg-14">Brief
														description:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="input-group">
													<label class="font-lg-14">Line from
														Schedule A/B:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<input type="checkbox">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
												<div class="input-group d-flex">
													<input type="checkbox">
													<label for=""> 100% of fair market value, up to
														any applicable statutory limit
													</label>
												</div>
											</td>
											<td>
												<div class="input-group">
													<textarea name="" id="" cols="15" rows="4"
														class="form-control"></textarea>
												</div>
											</td>
										</tr>
										<!-- Row end -->
										<tr>
											<td>
												<div class="input-group">
													<label class="font-lg-14">Brief
														description:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="input-group">
													<label class="font-lg-14">Line from
														Schedule A/B:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<input type="checkbox">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
												<div class="input-group d-flex">
													<input type="checkbox">
													<label for=""> 100% of fair market value, up to
														any applicable statutory limit
													</label>
												</div>
											</td>
											<td>
												<div class="input-group">
													<textarea name="" id="" cols="15" rows="4"
														class="form-control"></textarea>
												</div>
											</td>
										</tr>
										<!-- Row end -->
										<tr>
											<td>
												<div class="input-group">
													<label class="font-lg-14">Brief
														description:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="input-group">
													<label class="font-lg-14">Line from
														Schedule A/B:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<input type="checkbox">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
												<div class="input-group d-flex">
													<input type="checkbox">
													<label for=""> 100% of fair market value, up to
														any applicable statutory limit
													</label>
												</div>
											</td>
											<td>
												<div class="input-group">
													<textarea name="" id="" cols="15" rows="4"
														class="form-control"></textarea>
												</div>
											</td>
										</tr>
										<!-- Row end -->
										<tr>
											<td>
												<div class="input-group">
													<label class="font-lg-14">Brief
														description:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="input-group">
													<label class="font-lg-14">Line from
														Schedule A/B:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<input type="checkbox">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
												<div class="input-group d-flex">
													<input type="checkbox">
													<label for=""> 100% of fair market value, up to
														any applicable statutory limit
													</label>
												</div>
											</td>
											<td>
												<div class="input-group">
													<textarea name="" id="" cols="15" rows="4"
														class="form-control"></textarea>
												</div>
											</td>
										</tr>
										<!-- Row end -->
										<tr>
											<td>
												<div class="input-group">
													<label class="font-lg-14">Brief
														description:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="input-group">
													<label class="font-lg-14">Line from
														Schedule A/B:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<input type="checkbox">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
												<div class="input-group d-flex">
													<input type="checkbox">
													<label for=""> 100% of fair market value, up to
														any applicable statutory limit
													</label>
												</div>
											</td>
											<td>
												<div class="input-group">
													<textarea name="" id="" cols="15" rows="4"
														class="form-control"></textarea>
												</div>
											</td>
										</tr>
										<!-- Row end -->
									</tbody>
								</table>
							</div>

							<!-- Part 3 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 3</span>
										<h2 class="font-lg-18">Additional Page
										</h2>
									</div>
								</div>
							</div>
							<div class="form-border mb-3">
								<table class="table custom-table">
									<tr class="column-heading">
										<td>
											<div class="input-group">
												<strong>Brief description of the property and line on
													Schedule A/B that lists this property</strong>
											</div>
										</td>
										<td>
											<div class="input-group">
												<strong>Current value of the
													portion you own</strong>
												<p>Copy the value from
													Schedule A/B</p>
											</div>
										</td>
										<td>
											<div class="input-group">
												<strong>Amount of the exemption you claim</strong>
												<i>Check only one box for each exemption</i>
											</div>
										</td>
										<td>
											<div class="input-group">
												<strong>Specific laws that allow exemption</strong>
											</div>

										</td>
									</tr>
									<tbody>
										<tr>
											<td>
												<div class="input-group">
													<label class="font-lg-14">Brief
														description:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="input-group">
													<label class="font-lg-14">Line from
														Schedule A/B:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<input type="checkbox">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
												<div class="input-group d-flex">
													<input type="checkbox">
													<label for=""> 100% of fair market value, up to
														any applicable statutory limit
													</label>
												</div>
											</td>
											<td>
												<div class="input-group">
													<textarea name="" id="" cols="15" rows="4"
														class="form-control"></textarea>
												</div>
											</td>
										</tr>
										<!-- Row end -->
										<tr>
											<td>
												<div class="input-group">
													<label class="font-lg-14">Brief
														description:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="input-group">
													<label class="font-lg-14">Line from
														Schedule A/B:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<input type="checkbox">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
												<div class="input-group d-flex">
													<input type="checkbox">
													<label for=""> 100% of fair market value, up to
														any applicable statutory limit
													</label>
												</div>
											</td>
											<td>
												<div class="input-group">
													<textarea name="" id="" cols="15" rows="4"
														class="form-control"></textarea>
												</div>
											</td>
										</tr>
										<!-- Row end -->
										<tr>
											<td>
												<div class="input-group">
													<label class="font-lg-14">Brief
														description:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="input-group">
													<label class="font-lg-14">Line from
														Schedule A/B:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<input type="checkbox">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
												<div class="input-group d-flex">
													<input type="checkbox">
													<label for=""> 100% of fair market value, up to
														any applicable statutory limit
													</label>
												</div>
											</td>
											<td>
												<div class="input-group">
													<textarea name="" id="" cols="15" rows="4"
														class="form-control"></textarea>
												</div>
											</td>
										</tr>
										<!-- Row end -->
										<tr>
											<td>
												<div class="input-group">
													<label class="font-lg-14">Brief
														description:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="input-group">
													<label class="font-lg-14">Line from
														Schedule A/B:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<input type="checkbox">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
												<div class="input-group d-flex">
													<input type="checkbox">
													<label for=""> 100% of fair market value, up to
														any applicable statutory limit
													</label>
												</div>
											</td>
											<td>
												<div class="input-group">
													<textarea name="" id="" cols="15" rows="4"
														class="form-control"></textarea>
												</div>
											</td>
										</tr>
										<!-- Row end -->
										<tr>
											<td>
												<div class="input-group">
													<label class="font-lg-14">Brief
														description:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="input-group">
													<label class="font-lg-14">Line from
														Schedule A/B:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<input type="checkbox">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
												<div class="input-group d-flex">
													<input type="checkbox">
													<label for=""> 100% of fair market value, up to
														any applicable statutory limit
													</label>
												</div>
											</td>
											<td>
												<div class="input-group">
													<textarea name="" id="" cols="15" rows="4"
														class="form-control"></textarea>
												</div>
											</td>
										</tr>
										<!-- Row end -->
										<tr>
											<td>
												<div class="input-group">
													<label class="font-lg-14">Brief
														description:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="input-group">
													<label class="font-lg-14">Line from
														Schedule A/B:</label>
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</td>
											<td>
												<div class="input-group d-flex">
													<input type="checkbox">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
												<div class="input-group d-flex">
													<input type="checkbox">
													<label for=""> 100% of fair market value, up to
														any applicable statutory limit
													</label>
												</div>
											</td>
											<td>
												<div class="input-group">
													<textarea name="" id="" cols="15" rows="4"
														class="form-control"></textarea>
												</div>
											</td>
										</tr>
										<!-- Row end -->
									</tbody>
								</table>
							</div>
						</div>
					</section>

					<!-- official-form-106d -->
					@include("attorney.official_form.form_property_homeloan",['BasicInfoPartA'=>$BasicInfoPartA,'BasicInfoPartB'=>$BasicInfoPartB,'property_info'=>$property_info])
					<!-- Official Form 106E/F -->
					<section class="official-form-106e-f padd-20" id="official-form-106e_and_f">
						<div class="container">
							<div class="row">
								<div class="col-md-9">
									<div class="section-box">
										<div class="section-header bg-back text-white">
											<p class="font-lg-20">Fill in this information to identify your case</p>
										</div>
										<div class="section-body padd-20">
											<div class="row">
												<div class="col-md-12">
													<label>Debtor 1 </label>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<div class="input-group">
																<label>First Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Middle Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Last Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>

												</div>
												<div class="col-md-12">
													<label class="d-block">Debtor 2 </label>
													<span class="font-lg-14">(Spouse, if filing)</span>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<div class="input-group">
																<label>First Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Middle Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Last Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>

												</div>

												<div class="col-md-6">
													<div class="input-group">
														<label>United States Bankruptcy Court for the</label>
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-group">
														<label>District of</label>
														<input type="text" value="" class="form-control">
													</div>
												</div>


												<div class="col-md-12">
													<div class="input-group">
														<label>Case number</label>
														<input type="number" value="" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row padd-20">
								<div class="col-md-12 mb-3">
									<div class="form-title">
										<h4>Official Form 106E/F </h4>
										<h2 class="font-lg-22">Schedule E/F: Creditors Who Have Unsecured Claims
										</h2>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-subheading">
										<p class="font-lg-14"><strong>Be as complete and accurate as possible. Use
												Part
												1 for creditors with PRIORITY claims and Part 2 for creditors with
												NONPRIORITY claims.
												List the other party to any executory contracts or unexpired leases
												that
												could result in a claim. Also list executory contracts on Schedule
												A/B: Property (Official Form 106A/B) and on Schedule G: Executory
												Contracts and Unexpired Leases (Official Form 106G). Do not include
												any
												creditors with partially secured claims that are listed in Schedule
												D:
												Creditors Who Have Claims Secured by Property. If more space is
												needed, copy the Part you need, fill it out, number the entries in
												the
												boxes on the left. Attach the Continuation Page to this page. On the
												top
												of
												any additional pages, write your name and case number (if known).
											</strong></p>
									</div>
								</div>
							</div>

							<!-- Part 1.1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 1</span>
										<h2 class="font-lg-18">List All of Your PRIORITY Unsecured Claims
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<!-- Row 1 -->
								<div class="row">
									<div class="col-md-12">
										<div class="input-group d-inline-block">
											<label for="">
												<strong class="d-block">1. Do any creditors have priority unsecured
													claims against you?
												</strong>
											</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>No. Go to Part 2</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Yes</label>
										</div>
									</div>
								</div>
								<div class="row ">
									<div class="col-md-12 column-heading">
										<div class="input-group d-inline-block">
											<label><strong class="mb-0">2. List all of your priority unsecured
													claims.
													If a creditor has more than one priority unsecured claim, list
													the
													creditor separately for each claim. For
													each claim listed, identify what type of claim it is. If a claim
													has
													both priority and nonpriority amounts, list that claim here and
													show
													both priority and
													nonpriority amounts. As much as possible, list the claims in
													alphabetical order according to the creditor’s name. If you have
													more than two priority
													unsecured claims, fill out the Continuation Page of Part 1. If
													more
													than one creditor holds a particular claim, list the other
													creditors
													in Part 3.
													(For an explanation of each type of claim, see the instructions
													for
													this form in the instruction booklet.)</strong>
											</label>
										</div>
									</div>
									<div class="col-md-8"></div>
									<div class="col-md-4 column-heading">
										<div class="row">
											<div class="col-md-4">
												<strong>Total claim</strong>

											</div>
											<div class="col-md-4">
												<strong>Priority
													amount</strong>
											</div>
											<div class="col-md-4">
												<strong>Nonpriority
													amount</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12">
										<Strong>2.1</Strong>
									</div>
									<div class="col-md-3">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-4 mt-4">
										<div class="row">
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<Strong>2.2</Strong>
									</div>
									<div class="col-md-3">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-4 mt-4">
										<div class="row">
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


							<!-- Part 1.2 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 1</span>
										<h2 class="font-lg-18">Your PRIORITY Unsecured Claims ─ Continuation Page
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<div class="row column-heading">
									<div class="col-md-8 ">
										<div class="input-group d-inline-block">
											<label><strong class="mb-0">After listing any entries on this page,
													number
													them beginning with 2.3, followed by 2.4, and so forth.</strong>
											</label>
										</div>
									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-4">
												<strong>Total claim</strong>

											</div>
											<div class="col-md-4">
												<strong>Priority
													amount</strong>
											</div>
											<div class="col-md-4">
												<strong>Nonpriority
													amount</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-3">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-4 mt-4">
										<div class="row">
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-3">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-4 mt-4">
										<div class="row">
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row 3 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-3">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-4 mt-4">
										<div class="row">
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


							<!-- Part 1.3 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 1</span>
										<h2 class="font-lg-18">Your PRIORITY Unsecured Claims ─ Continuation Page
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<div class="row column-heading">
									<div class="col-md-8 ">
										<div class="input-group d-inline-block">
											<label><strong class="mb-0">After listing any entries on this page,
													number
													them beginning with 2.3, followed by 2.4, and so forth.</strong>
											</label>
										</div>
									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-4">
												<strong>Total claim</strong>

											</div>
											<div class="col-md-4">
												<strong>Priority
													amount</strong>
											</div>
											<div class="col-md-4">
												<strong>Nonpriority
													amount</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12">
										<Strong class="square-box-no"></Strong>
									</div>
									<div class="col-md-3">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-4 mt-4">
										<div class="row">
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-3">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-4">
										<div class="row mt-4">
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row 3 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-3">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-4 mt-4">
										<div class="row">
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


							<!-- Part 1.4 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 1</span>
										<h2 class="font-lg-18">Your PRIORITY Unsecured Claims ─ Continuation Page
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<div class="row column-heading">
									<div class="col-md-8 ">
										<div class="input-group d-inline-block">
											<label><strong class="mb-0">After listing any entries on this page,
													number
													them beginning with 2.3, followed by 2.4, and so forth.</strong>
											</label>
										</div>
									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-4">
												<strong>Total claim</strong>

											</div>
											<div class="col-md-4">
												<strong>Priority
													amount</strong>
											</div>
											<div class="col-md-4">
												<strong>Nonpriority
													amount</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12">
										<Strong class="square-box-no"></Strong>
									</div>
									<div class="col-md-3">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-4 mt-4">
										<div class="row">
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-3">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-4">
										<div class="row mt-4">
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row 3 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-3">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-4 mt-4">
										<div class="row">
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>



							<!-- Part 2 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">List All of Your NONPRIORITY Unsecured Claims
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 4.1 -->
							<div class="form-border">
								<div class="row">
									<div class="col-md-12">
										<div class="input-group d-inline-block">
											<label for="">
												<strong class="d-block">3. Do any creditors have nonpriority
													unsecured
													claims against you?
												</strong>
											</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>No. You have nothing to report in this part. Submit this form to
												the
												court with your other schedules.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Yes</label>
										</div>
									</div>
								</div>
								<div class="row ">
									<div class="col-md-12 column-heading">
										<div class="input-group d-inline-block">
											<label><strong class="mb-0">4. List all of your nonpriority unsecured
													claims
													in the alphabetical order of the creditor who holds each claim
												</strong>If a creditor has more than one
												nonpriority unsecured claim, list the creditor separately for each
												claim. For each claim listed, identify what type of claim it is. Do
												not
												list claims already
												included in Part 1. If more than one creditor holds a particular
												claim,
												list the other creditors in Part 3.If you have more than three
												nonpriority unsecured
												claims fill out the Continuation Page of Part 2.
											</label>
										</div>
									</div>
									<div class="col-md-10"></div>
									<div class="col-md-2 column-heading">
										<div class="row">
											<div class="col-md-12">
												<strong>Total claim</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12">
										<Strong>4.1</Strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Nonpriority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row 4.2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<Strong>4.2</Strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 4.3 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<Strong>4.3</Strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>


							<!-- Your NONPRIORITY Unsecured Claims ─ Continuation Page -->
							<!-- Part 2.1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Your NONPRIORITY Unsecured Claims ─ Continuation Page
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<!-- Row 1 -->
								<div class="row column-heading">
									<div class="col-md-10 ">
										<div class="input-group d-inline-block">
											<label><strong class="mb-0">After listing any entries on this page,
													number
													them beginning with 4.4, followed by 4.5, and so forth.</strong>
											</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-12">
												<strong>Total claim</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Nonpriority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>

							<!-- Your NONPRIORITY Unsecured Claims ─ Continuation Page -->

							<!-- Part 2.1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Your NONPRIORITY Unsecured Claims ─ Continuation Page
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<!-- Row 1 -->
								<div class="row column-heading">
									<div class="col-md-10 ">
										<div class="input-group d-inline-block">
											<label><strong class="mb-0">After listing any entries on this page,
													number
													them beginning with 4.4, followed by 4.5, and so forth.</strong>
											</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-12">
												<strong>Total claim</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Nonpriority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Your NONPRIORITY Unsecured Claims ─ Continuation Page -->

							<!-- Part 2.1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Your NONPRIORITY Unsecured Claims ─ Continuation Page
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<!-- Row 1 -->
								<div class="row column-heading">
									<div class="col-md-10 ">
										<div class="input-group d-inline-block">
											<label><strong class="mb-0">After listing any entries on this page,
													number
													them beginning with 4.4, followed by 4.5, and so forth.</strong>
											</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-12">
												<strong>Total claim</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Nonpriority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Your NONPRIORITY Unsecured Claims ─ Continuation Page -->

							<!-- Part 2.1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Your NONPRIORITY Unsecured Claims ─ Continuation Page
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<!-- Row 1 -->
								<div class="row column-heading">
									<div class="col-md-10 ">
										<div class="input-group d-inline-block">
											<label><strong class="mb-0">After listing any entries on this page,
													number
													them beginning with 4.4, followed by 4.5, and so forth.</strong>
											</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-12">
												<strong>Total claim</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Nonpriority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Your NONPRIORITY Unsecured Claims ─ Continuation Page -->

							<!-- Part 2.1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Your NONPRIORITY Unsecured Claims ─ Continuation Page
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<!-- Row 1 -->
								<div class="row column-heading">
									<div class="col-md-10 ">
										<div class="input-group d-inline-block">
											<label><strong class="mb-0">After listing any entries on this page,
													number
													them beginning with 4.4, followed by 4.5, and so forth.</strong>
											</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-12">
												<strong>Total claim</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Nonpriority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Your NONPRIORITY Unsecured Claims ─ Continuation Page -->

							<!-- Part 2.1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Your NONPRIORITY Unsecured Claims ─ Continuation Page
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<!-- Row 1 -->
								<div class="row column-heading">
									<div class="col-md-10 ">
										<div class="input-group d-inline-block">
											<label><strong class="mb-0">After listing any entries on this page,
													number
													them beginning with 4.4, followed by 4.5, and so forth.</strong>
											</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-12">
												<strong>Total claim</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Nonpriority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Your NONPRIORITY Unsecured Claims ─ Continuation Page -->

							<!-- Part 2.1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Your NONPRIORITY Unsecured Claims ─ Continuation Page
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<!-- Row 1 -->
								<div class="row column-heading">
									<div class="col-md-10 ">
										<div class="input-group d-inline-block">
											<label><strong class="mb-0">After listing any entries on this page,
													number
													them beginning with 4.4, followed by 4.5, and so forth.</strong>
											</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-12">
												<strong>Total claim</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Nonpriority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Your NONPRIORITY Unsecured Claims ─ Continuation Page -->

							<!-- Part 2.1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Your NONPRIORITY Unsecured Claims ─ Continuation Page
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<!-- Row 1 -->
								<div class="row column-heading">
									<div class="col-md-10 ">
										<div class="input-group d-inline-block">
											<label><strong class="mb-0">After listing any entries on this page,
													number
													them beginning with 4.4, followed by 4.5, and so forth.</strong>
											</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-12">
												<strong>Total claim</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Nonpriority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Your NONPRIORITY Unsecured Claims ─ Continuation Page -->

							<!-- Part 2.1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Your NONPRIORITY Unsecured Claims ─ Continuation Page
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<!-- Row 1 -->
								<div class="row column-heading">
									<div class="col-md-10 ">
										<div class="input-group d-inline-block">
											<label><strong class="mb-0">After listing any entries on this page,
													number
													them beginning with 4.4, followed by 4.5, and so forth.</strong>
											</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-12">
												<strong>Total claim</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Nonpriority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Your NONPRIORITY Unsecured Claims ─ Continuation Page -->

							<!-- Part 2.1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Your NONPRIORITY Unsecured Claims ─ Continuation Page
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<!-- Row 1 -->
								<div class="row column-heading">
									<div class="col-md-10 ">
										<div class="input-group d-inline-block">
											<label><strong class="mb-0">After listing any entries on this page,
													number
													them beginning with 4.4, followed by 4.5, and so forth.</strong>
											</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-12">
												<strong>Total claim</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Nonpriority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Your NONPRIORITY Unsecured Claims ─ Continuation Page -->

							<!-- Part 2.1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Your NONPRIORITY Unsecured Claims ─ Continuation Page
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<!-- Row 1 -->
								<div class="row column-heading">
									<div class="col-md-10 ">
										<div class="input-group d-inline-block">
											<label><strong class="mb-0">After listing any entries on this page,
													number
													them beginning with 4.4, followed by 4.5, and so forth.</strong>
											</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-12">
												<strong>Total claim</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Nonpriority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Your NONPRIORITY Unsecured Claims ─ Continuation Page -->

							<!-- Part 2.1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Your NONPRIORITY Unsecured Claims ─ Continuation Page
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<!-- Row 1 -->
								<div class="row column-heading">
									<div class="col-md-10 ">
										<div class="input-group d-inline-block">
											<label><strong class="mb-0">After listing any entries on this page,
													number
													them beginning with 4.4, followed by 4.5, and so forth.</strong>
											</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-12">
												<strong>Total claim</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Nonpriority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Your NONPRIORITY Unsecured Claims ─ Continuation Page -->

							<!-- Part 2.1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Your NONPRIORITY Unsecured Claims ─ Continuation Page
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<!-- Row 1 -->
								<div class="row column-heading">
									<div class="col-md-10 ">
										<div class="input-group d-inline-block">
											<label><strong class="mb-0">After listing any entries on this page,
													number
													them beginning with 4.4, followed by 4.5, and so forth.</strong>
											</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-12">
												<strong>Total claim</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Nonpriority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Your NONPRIORITY Unsecured Claims ─ Continuation Page -->

							<!-- Part 2.1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Your NONPRIORITY Unsecured Claims ─ Continuation Page
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<!-- Row 1 -->
								<div class="row column-heading">
									<div class="col-md-10 ">
										<div class="input-group d-inline-block">
											<label><strong class="mb-0">After listing any entries on this page,
													number
													them beginning with 4.4, followed by 4.5, and so forth.</strong>
											</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-12">
												<strong>Total claim</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Nonpriority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Your NONPRIORITY Unsecured Claims ─ Continuation Page -->

							<!-- Part 2.1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Your NONPRIORITY Unsecured Claims ─ Continuation Page
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<!-- Row 1 -->
								<div class="row column-heading">
									<div class="col-md-10 ">
										<div class="input-group d-inline-block">
											<label><strong class="mb-0">After listing any entries on this page,
													number
													them beginning with 4.4, followed by 4.5, and so forth.</strong>
											</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-12">
												<strong>Total claim</strong>
											</div>
										</div>
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Nonpriority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>


									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<div class="row ">
									<div class="col-md-12">
										<strong class="square-box-no"></strong>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label><strong>Who incurred the debt?</strong> Check
														one.</label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Debtor 1 and Debtor 2 only </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>At least one of the debtors and another </label>
												</div>
												<div class="input-group">
													<input type="text" value="" class="form-control">
													<label>Check if this claim relates to a
														community debt </label>
												</div>
												<div class="input-group">
													<label><strong>Is the claim subject to offset? </strong></label>
													<input type="checkbox">
													<label>No</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes</label>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label><strong>Last 4 digits of account number</strong> </label>
											<input type="number" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>When was the debt incurred?:</strong> :</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="input-group">
											<label><strong>As of the date you file, the claim is:</strong> : Check
												all
												that apply.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Contingent </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Unliquidated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Disputed </label>
										</div>


										<div class="input-group">
											<label><strong>Type of PRIORITY unsecured claim:</strong> </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Domestic support obligations </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Taxes and certain other debts you owe the government </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Claims for death or personal injury while you were
												intoxicated </label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Other. Specify </label>
										</div>
									</div>
									<div class="col-md-2 mt-4">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
							</div>


							<!-- Repeated By 16 times Your NONPRIORITY Unsecured Claims ─ Continuation Page End -->



							<!-- Part 3 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 3</span>
										<h2 class="font-lg-18">List Others to Be Notified About a Debt That You
											Already
											Listed
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3 ">
								<div class="row">
									<div class="col-md-12 mb-3">
										<div class="input-group">
											<strong>5. Use this page only if you have others to be notified about
												your
												bankruptcy, for a debt that you already listed in Parts 1 or 2. For
												example, if a collection agency is trying to collect from you for a
												debt
												you owe to someone else, list the original creditor in Parts 1 or
												2, then list the collection agency here. Similarly, if you have more
												than one creditor for any of the debts that you listed in Parts 1 or
												2,
												list the
												additional creditors here. If you do not have additional persons to
												be
												notified for any debts in Parts 1 or 2, do not fill out or submit
												this
												page</strong>
										</div>
									</div>
								</div>
								<!-- Row part 3.1 -->
								<div class="row border-bottm-1">
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-7">
										<div class="input-group">
											<label><strong>On which entry in Part 1 or Part 2 did you list the
													original
													creditor? </strong> </label>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="input-group">
													<label>Line of (Check one):</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-7">
												<div class="input-group">
													<input type="checkbox">
													<label> Part 1: Creditors with Priority Unsecured Claims</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Part 2: Creditors with Nonpriority Unsecured
														Claims</label>
												</div>
											</div>
											<div class="col-md-12">
												<label><strong>Last 4 digits of account number</strong> :</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<!-- Row part 3.2 -->
								<div class="row border-bottm-1">
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-7">
										<div class="input-group">
											<label><strong>On which entry in Part 1 or Part 2 did you list the
													original
													creditor? </strong> </label>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="input-group">
													<label>Line of (Check one):</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-7">
												<div class="input-group">
													<input type="checkbox">
													<label> Part 1: Creditors with Priority Unsecured Claims</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Part 2: Creditors with Nonpriority Unsecured
														Claims</label>
												</div>
											</div>
											<div class="col-md-12">
												<label><strong>Last 4 digits of account number</strong> :</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<!-- Row part 3.3 -->
								<div class="row border-bottm-1">
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-7">
										<div class="input-group">
											<label><strong>On which entry in Part 1 or Part 2 did you list the
													original
													creditor? </strong> </label>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="input-group">
													<label>Line of (Check one):</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-7">
												<div class="input-group">
													<input type="checkbox">
													<label> Part 1: Creditors with Priority Unsecured Claims</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Part 2: Creditors with Nonpriority Unsecured
														Claims</label>
												</div>
											</div>
											<div class="col-md-12">
												<label><strong>Last 4 digits of account number</strong> :</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<!-- Row part 3.4 -->
								<div class="row border-bottm-1">
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-7">
										<div class="input-group">
											<label><strong>On which entry in Part 1 or Part 2 did you list the
													original
													creditor? </strong> </label>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="input-group">
													<label>Line of (Check one):</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-7">
												<div class="input-group">
													<input type="checkbox">
													<label> Part 1: Creditors with Priority Unsecured Claims</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Part 2: Creditors with Nonpriority Unsecured
														Claims</label>
												</div>
											</div>
											<div class="col-md-12">
												<label><strong>Last 4 digits of account number</strong> :</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<!-- Row part 3.5 -->
								<div class="row border-bottm-1">
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-7">
										<div class="input-group">
											<label><strong>On which entry in Part 1 or Part 2 did you list the
													original
													creditor? </strong> </label>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="input-group">
													<label>Line of (Check one):</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-7">
												<div class="input-group">
													<input type="checkbox">
													<label> Part 1: Creditors with Priority Unsecured Claims</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Part 2: Creditors with Nonpriority Unsecured
														Claims</label>
												</div>
											</div>
											<div class="col-md-12">
												<label><strong>Last 4 digits of account number</strong> :</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<!-- Row part 3.6 -->
								<div class="row border-bottm-1">
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-7">
										<div class="input-group">
											<label><strong>On which entry in Part 1 or Part 2 did you list the
													original
													creditor? </strong> </label>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="input-group">
													<label>Line of (Check one):</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-7">
												<div class="input-group">
													<input type="checkbox">
													<label> Part 1: Creditors with Priority Unsecured Claims</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Part 2: Creditors with Nonpriority Unsecured
														Claims</label>
												</div>
											</div>
											<div class="col-md-12">
												<label><strong>Last 4 digits of account number</strong> :</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<!-- Row part 3.7 -->
								<div class="row">
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-7">
										<div class="input-group">
											<label><strong>On which entry in Part 1 or Part 2 did you list the
													original
													creditor? </strong> </label>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="input-group">
													<label>Line of (Check one):</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-7">
												<div class="input-group">
													<input type="checkbox">
													<label> Part 1: Creditors with Priority Unsecured Claims</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Part 2: Creditors with Nonpriority Unsecured
														Claims</label>
												</div>
											</div>
											<div class="col-md-12">
												<label><strong>Last 4 digits of account number</strong> :</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
							</div>


							<!-- Part 3.1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 3</span>
										<h2 class="font-lg-18">List Others to Be Notified About a Debt That You
											Already
											Listed
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3 ">
								<div class="row">
									<div class="col-md-12 mb-3">
										<div class="input-group">
											<strong>5. Use this page only if you have others to be notified about
												your
												bankruptcy, for a debt that you already listed in Parts 1 or 2. For
												example, if a collection agency is trying to collect from you for a
												debt
												you owe to someone else, list the original creditor in Parts 1 or
												2, then list the collection agency here. Similarly, if you have more
												than one creditor for any of the debts that you listed in Parts 1 or
												2,
												list the
												additional creditors here. If you do not have additional persons to
												be
												notified for any debts in Parts 1 or 2, do not fill out or submit
												this
												page</strong>
										</div>
									</div>
								</div>
								<!-- Row part 3.1 -->
								<div class="row border-bottm-1">
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-7">
										<div class="input-group">
											<label><strong>On which entry in Part 1 or Part 2 did you list the
													original
													creditor? </strong> </label>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="input-group">
													<label>Line of (Check one):</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-7">
												<div class="input-group">
													<input type="checkbox">
													<label> Part 1: Creditors with Priority Unsecured Claims</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Part 2: Creditors with Nonpriority Unsecured
														Claims</label>
												</div>
											</div>
											<div class="col-md-12">
												<label><strong>Last 4 digits of account number</strong> :</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<!-- Row part 3.2 -->
								<div class="row border-bottm-1">
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-7">
										<div class="input-group">
											<label><strong>On which entry in Part 1 or Part 2 did you list the
													original
													creditor? </strong> </label>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="input-group">
													<label>Line of (Check one):</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-7">
												<div class="input-group">
													<input type="checkbox">
													<label> Part 1: Creditors with Priority Unsecured Claims</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Part 2: Creditors with Nonpriority Unsecured
														Claims</label>
												</div>
											</div>
											<div class="col-md-12">
												<label><strong>Last 4 digits of account number</strong> :</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<!-- Row part 3.3 -->
								<div class="row border-bottm-1">
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-7">
										<div class="input-group">
											<label><strong>On which entry in Part 1 or Part 2 did you list the
													original
													creditor? </strong> </label>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="input-group">
													<label>Line of (Check one):</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-7">
												<div class="input-group">
													<input type="checkbox">
													<label> Part 1: Creditors with Priority Unsecured Claims</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Part 2: Creditors with Nonpriority Unsecured
														Claims</label>
												</div>
											</div>
											<div class="col-md-12">
												<label><strong>Last 4 digits of account number</strong> :</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<!-- Row part 3.4 -->
								<div class="row border-bottm-1">
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-7">
										<div class="input-group">
											<label><strong>On which entry in Part 1 or Part 2 did you list the
													original
													creditor? </strong> </label>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="input-group">
													<label>Line of (Check one):</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-7">
												<div class="input-group">
													<input type="checkbox">
													<label> Part 1: Creditors with Priority Unsecured Claims</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Part 2: Creditors with Nonpriority Unsecured
														Claims</label>
												</div>
											</div>
											<div class="col-md-12">
												<label><strong>Last 4 digits of account number</strong> :</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<!-- Row part 3.5 -->
								<div class="row border-bottm-1">
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-7">
										<div class="input-group">
											<label><strong>On which entry in Part 1 or Part 2 did you list the
													original
													creditor? </strong> </label>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="input-group">
													<label>Line of (Check one):</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-7">
												<div class="input-group">
													<input type="checkbox">
													<label> Part 1: Creditors with Priority Unsecured Claims</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Part 2: Creditors with Nonpriority Unsecured
														Claims</label>
												</div>
											</div>
											<div class="col-md-12">
												<label><strong>Last 4 digits of account number</strong> :</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<!-- Row part 3.6 -->
								<div class="row border-bottm-1">
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-7">
										<div class="input-group">
											<label><strong>On which entry in Part 1 or Part 2 did you list the
													original
													creditor? </strong> </label>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="input-group">
													<label>Line of (Check one):</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-7">
												<div class="input-group">
													<input type="checkbox">
													<label> Part 1: Creditors with Priority Unsecured Claims</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Part 2: Creditors with Nonpriority Unsecured
														Claims</label>
												</div>
											</div>
											<div class="col-md-12">
												<label><strong>Last 4 digits of account number</strong> :</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
								<!-- Row part 3.7 -->
								<div class="row">
									<div class="col-md-5">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-7">
										<div class="input-group">
											<label><strong>On which entry in Part 1 or Part 2 did you list the
													original
													creditor? </strong> </label>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="input-group">
													<label>Line of (Check one):</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-7">
												<div class="input-group">
													<input type="checkbox">
													<label> Part 1: Creditors with Priority Unsecured Claims</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Part 2: Creditors with Nonpriority Unsecured
														Claims</label>
												</div>
											</div>
											<div class="col-md-12">
												<label><strong>Last 4 digits of account number</strong> :</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>

									</div>
								</div>
							</div>



							<!-- Part 3.1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 3</span>
										<h2 class="font-lg-18">Add the Amounts for Each Type of Unsecured Claim
										</h2>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3 ">
								<div class="row">
									<div class="col-md-12 mb-3">
										<div class="input-group">
											<strong>6. Total the amounts of certain types of unsecured claims. This
												information is for statistical reporting purposes only. 28 U.S.C. §
												159.
												Add the amounts for each type of unsecured claim.</strong>
										</div>
									</div>
								</div>
								<!-- Row part 3.1 -->
								<div class="row mb-3">
									<div class="col-md-6"></div>
									<div class="col-md-6 column-heading text-center ">
										<strong class="padd-10 d-block">Total claim</strong>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-2 column-heading">
												<div class="input-group">
													<label>Total claims
														from Part 1
													</label>
												</div>
											</div>
											<div class="col-md-10">
												<div class="input-group mb-3">
													<label> <strong>6a. Domestic support obligations</strong>
													</label>
												</div>
												<div class="input-group mb-3">
													<label> <strong>6b. Taxes and certain other debts you owe the
															government </strong>
													</label>
												</div>
												<div class="input-group mb-3">
													<label> <strong>6c. Claims for death or personal injury while
															you
															were
															intoxicated</strong>
													</label>
												</div>
												<div class="input-group mb-3">
													<label> <strong>6d. Other</strong> Add all other priority
														unsecured
														claims.
														Write that amount here.
													</label>
												</div>
												<div class="input-group mb-3">
													<label> <strong>6e. Total</strong> Add lines 6a through 6d.
													</label>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-6">

										<div class="row mb-3 align-items-center">
											<div class="col-md-2">
												<div class="input-group">
													<label>6f.
													</label>
												</div>
											</div>
											<div class="col-md-10">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row mb-3 align-items-center">
											<div class="col-md-2">
												<div class="input-group">
													<label>6g.
													</label>
												</div>
											</div>
											<div class="col-md-10">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row mb-3 align-items-center">
											<div class="col-md-2">
												<div class="input-group">
													<label>6h.
													</label>
												</div>
											</div>
											<div class="col-md-10">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row mb-3 align-items-center">
											<div class="col-md-2">
												<div class="input-group">
													<label>6i.
													</label>
												</div>
											</div>
											<div class="col-md-10">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row mb-3 align-items-center">
											<div class="col-md-2">
												<div class="input-group">
													<label>6j.
													</label>
												</div>
											</div>
											<div class="col-md-10">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Row part 3.1 -->
								<div class="row ">
									<div class="col-md-6"></div>
									<div class="col-md-6 column-heading text-center ">
										<strong class="padd-10 d-block">Total claim</strong>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-2 column-heading">
												<div class="input-group">
													<label>Total claims
														from Part 1
													</label>
												</div>
											</div>
											<div class="col-md-10">
												<div class="input-group mb-3">
													<label> <strong>6a. Domestic support obligations</strong>
													</label>
												</div>
												<div class="input-group mb-3">
													<label> <strong>6b. Taxes and certain other debts you owe the
															government </strong>
													</label>
												</div>
												<div class="input-group mb-3">
													<label> <strong>6c. Claims for death or personal injury while
															you
															were
															intoxicated</strong>
													</label>
												</div>
												<div class="input-group mb-3">
													<label> <strong>6d. Other</strong> Add all other priority
														unsecured
														claims.
														Write that amount here.
													</label>
												</div>
												<div class="input-group mb-3">
													<label> <strong>6e. Total</strong> Add lines 6a through 6d.
													</label>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-6">

										<div class="row mb-3 align-items-center">
											<div class="col-md-2">
												<div class="input-group">
													<label>6f.
													</label>
												</div>
											</div>
											<div class="col-md-10">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row mb-3 align-items-center">
											<div class="col-md-2">
												<div class="input-group">
													<label>6g.
													</label>
												</div>
											</div>
											<div class="col-md-10">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row mb-3 align-items-center">
											<div class="col-md-2">
												<div class="input-group">
													<label>6h.
													</label>
												</div>
											</div>
											<div class="col-md-10">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row mb-3 align-items-center">
											<div class="col-md-2">
												<div class="input-group">
													<label>6i.
													</label>
												</div>
											</div>
											<div class="col-md-10">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row mb-3 align-items-center">
											<div class="col-md-2">
												<div class="input-group">
													<label>6j.
													</label>
												</div>
											</div>
											<div class="col-md-10">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<!-- Official Form 106G -->
					<section class="official-form-106g padd-20" id="official-form-106g">
						<div class="container">
							<div class="row">
								<div class="col-md-9">
									<div class="section-box">
										<div class="section-header bg-back text-white">
											<p class="font-lg-20">Fill in this information to identify your case</p>
										</div>
										<div class="section-body padd-20">
											<div class="row">
												<div class="col-md-12">
													<label>Debtor 1 </label>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<div class="input-group">
																<label>First Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Middle Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Last Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>

												</div>
												<div class="col-md-12">
													<label class="d-block">Debtor 2 </label>
													<span class="font-lg-14">(Spouse, if filing)</span>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<div class="input-group">
																<label>First Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Middle Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Last Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>

												</div>
												<div class="col-md-12">
													<div class="input-group">
														<label>United States Bankruptcy Court for the</label>
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-12">
													<div class="input-group">
														<label>Case number</label>
														<input type="number" value="" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row padd-20">
								<div class="col-md-12 mb-3">
									<div class="form-title">
										<h4>Official Form 106G </h4>
										<h2 class="font-lg-22">Schedule G: Executory Contracts and Unexpired Leases
										</h2>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-subheading">
										<p class="font-lg-14"><strong>Be as complete and accurate as possible. If
												two
												married people are filing together, both are equally responsible for
												supplying correct
												information. If more space is needed, copy the additional page, fill
												it
												out, number the entries, and attach it to this page. On the top of
												any
												additional pages, write your name and case number (if known)
											</strong></p>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="row">
								<div class="col-md-12">
									<div class="input-group d-inline-block">
										<label for="">
											<strong class="d-block">1. Do you have any executory contracts or
												unexpired
												leases?
											</strong>
										</label>
									</div>
									<div class="input-group">
										<input type="checkbox">
										<label>No. Check this box and file this form with the court with your other
											schedules. You have nothing else to report on this form</label>
									</div>
									<div class="input-group">
										<input type="checkbox">
										<label>Yes. Fill in all of the information below even if the contracts or
											leases
											are listed on Schedule A/B: Property (Official Form 106A/B)</label>
									</div>
								</div>
								<div class="col-md-12">
									<div class="input-group d-inline-block">
										<label for="">
											<strong class="d-block">2. List separately each person or company with
												whom
												you have the contract or lease. Then state what each contract or
												lease
												is for (for
												example, rent, vehicle lease, cell phone).
											</strong> See the instructions for this form in the instruction booklet
											for
											more examples of executory contracts and
											unexpired leases.
										</label>
									</div>
								</div>
							</div>


							<div class="form-border">
								<div class="row column-heading">
									<div class="col-md-6">
										<div class="input-group ">
											<label><strong class="mb-0">Person or company with whom you have the
													contract or
													lease</strong>
											</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-group ">
											<label><strong class="mb-0">State what the contract or lease is
													for</strong>
											</label>
										</div>
									</div>

								</div>
								<!-- Row 2.1 -->
								<div class="row border-bottm-1">
									<div class="col-md-7"><strong>2.1</strong></div>
									<div class="col-md-6">

										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="col-md-6">
										<div class="input-group mt-4">
											<textarea class="form-control" cols="15" rows="8"></textarea>
										</div>
									</div>
								</div>
								<!-- Row 2.1 -->
								<div class="row border-bottm-1">
									<div class="col-md-7"><strong>2.2</strong></div>
									<div class="col-md-6">

										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="col-md-6">
										<div class="input-group mt-4">
											<textarea class="form-control" cols="15" rows="8"></textarea>
										</div>
									</div>
								</div>
								<!-- Row 2.3 -->
								<div class="row border-bottm-1">
									<div class="col-md-7"><strong>2.3</strong></div>
									<div class="col-md-6">

										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="col-md-6">
										<div class="input-group mt-4">
											<textarea class="form-control" cols="15" rows="8"></textarea>
										</div>
									</div>
								</div>
								<!-- Row 2.4 -->
								<div class="row border-bottm-1">
									<div class="col-md-7"><strong>2.4</strong></div>
									<div class="col-md-6">

										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="col-md-6">
										<div class="input-group mt-4">
											<textarea class="form-control" cols="15" rows="8"></textarea>
										</div>
									</div>
								</div>
								<!-- Row 2.5 -->
								<div class="row ">
									<div class="col-md-7"><strong>2.5</strong></div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="col-md-6">
										<div class="input-group mt-4">
											<textarea class="form-control" cols="15" rows="8"></textarea>
										</div>
									</div>
								</div>
							</div>
							<!-- Additional Page if You Have More Contracts or Leases -->
							<div class="row">
								<div class="col-md-12 my-3">
									<h4>Additional Page if You Have More Contracts or Leases</h4>
								</div>
							</div>
							<div class="form-border">
								<div class="row column-heading">
									<div class="col-md-6">
										<div class="input-group ">
											<label><strong class="mb-0">Person or company with whom you have the
													contract or
													lease</strong>
											</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-group ">
											<label><strong class="mb-0">State what the contract or lease is
													for</strong>
											</label>
										</div>
									</div>

								</div>
								<!-- Row 2.1 -->
								<div class="row border-bottm-1">
									<div class="col-md-7"><strong>2.</strong></div>
									<div class="col-md-6">

										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="col-md-6">
										<div class="input-group mt-4">
											<textarea class="form-control" cols="15" rows="8"></textarea>
										</div>
									</div>
								</div>
								<!-- Row 2.1 -->
								<div class="row border-bottm-1">
									<div class="col-md-7"><strong>2.</strong></div>
									<div class="col-md-6">

										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="col-md-6">
										<div class="input-group mt-4">
											<textarea class="form-control" cols="15" rows="8"></textarea>
										</div>
									</div>
								</div>
								<!-- Row 2.3 -->
								<div class="row border-bottm-1">
									<div class="col-md-7"><strong>2.</strong></div>
									<div class="col-md-6">

										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="col-md-6">
										<div class="input-group mt-4">
											<textarea class="form-control" cols="15" rows="8"></textarea>
										</div>
									</div>
								</div>
								<!-- Row 2.4 -->
								<div class="row border-bottm-1">
									<div class="col-md-7"><strong>2.</strong></div>
									<div class="col-md-6">

										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="col-md-6">
										<div class="input-group mt-4">
											<textarea class="form-control" cols="15" rows="8"></textarea>
										</div>
									</div>
								</div>
								<!-- Row 2.5 -->
								<div class="row ">
									<div class="col-md-7"><strong>2.</strong></div>
									<div class="col-md-6">

										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<label>Priority Creditor’s Name </label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="col-md-6">
										<div class="input-group mt-4">
											<textarea class="form-control" cols="15" rows="8"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<!-- Official Form 106H -->
					<section class="official-form-106h padd-20" id="official-form-106h">
						<div class="container">
							<div class="row">
								<div class="col-md-9">
									<div class="section-box">
										<div class="section-header bg-back text-white">
											<p class="font-lg-20">Fill in this information to identify your case</p>
										</div>
										<div class="section-body padd-20">
											<div class="row">
												<div class="col-md-12">
													<label>Debtor 1 </label>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<div class="input-group">
																<label>First Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Middle Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Last Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>

												</div>
												<div class="col-md-12">
													<label class="d-block">Debtor 2 </label>
													<span class="font-lg-14">(Spouse, if filing)</span>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<div class="input-group">
																<label>First Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Middle Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Last Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>

												</div>
												<div class="col-md-12">
													<div class="input-group">
														<label>United States Bankruptcy Court for the</label>
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-12">
													<div class="input-group">
														<label>Case number</label>
														<input type="number" value="" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row padd-20">
								<div class="col-md-12 mb-3">
									<div class="form-title">
										<h4>Official Form 106H </h4>
										<h2 class="font-lg-22">Schedule H: Your Codebtors
										</h2>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-subheading">
										<p class="font-lg-14"><strong>Codebtors are people or entities who are also
												liable for any debts you may have. Be as complete and accurate as
												possible. If two married people
												are filing together, both are equally responsible for supplying
												correct
												information. If more space is needed, copy the Additional Page, fill
												it
												out,
												and number the entries in the boxes on the left. Attach the
												Additional
												Page to this page. On the top of any Additional Pages, write your
												name
												and
												case number (if known). Answer every question.
											</strong></p>
									</div>
								</div>
							</div>
							<div class="form-border">
								<!-- Row 1 -->
								<div class="row">
									<div class="col-md-12">
										<div class="input-group d-inline-block">
											<label for="">
												<strong class="d-block">1. Do you have any codebtors? (If you are
													filing
													a
													joint case, do not list either spouse as a codebtor.)
												</strong>
											</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>No.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Yes.</label>
										</div>
									</div>
									<div class="col-md-12">
										<div class="input-group d-inline-block">
											<label for="">
												<strong class="d-block">2. Within the last 8 years, have you lived
													in a
													community property state or territory?
												</strong> (Community property states and territories include
												Arizona, California, Idaho, Louisiana, Nevada, New Mexico, Puerto
												Rico,
												Texas, Washington, and Wisconsin.)
											</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>No.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Yes.</label>
										</div>
									</div>
									<div class="col-md-8">
										<div>
											<div class="input-group d-inline-block">
												<label for="">
													Did your spouse, former spouse, or legal equivalent live with
													you at
													the
													time?
												</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label>No.</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label>Yes.</label>
											</div>

										</div>
										<div class="row">

											<div class="col-md-10">
												<div class="input-group">
													<label for="">
														Fill in the name and current address of that person.
													</label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="input-group">
													<label>Name of your spouse, former spouse, or legal equivalent
													</label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>Number</label>
															<input type="number" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-8">
														<div class="input-group">
															<label>Street</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="input-group">
															<label>City</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="input-group">
															<label>State</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="input-group">
															<label>Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>

								</div>

								<div class="row mt-3">
									<div class="col-md-12 mb-3">
										<label><strong class="mb-0">3. In Column 1, list all of your codebtors. Do
												not include your spouse as a codebtor if your spouse is filing with
												you. List the person
												shown in line 2 again as a codebtor only if that person is a
												guarantor or cosigner. Make sure you have listed the creditor on
												Schedule D (Official Form 106D), Schedule E/F (Official Form
												106E/F), or Schedule G (Official Form 106G). Use Schedule D,
												Schedule E/F, or Schedule G to fill out Column 2.</strong>
										</label>
									</div>
									<div class="col-md-7 column-heading">
										<div class="input-group ">
											<label><strong class="mb-0"><i>Column 1</i>: Your codebtor</strong>
											</label>
										</div>
									</div>
									<div class="col-md-5 column-heading">
										<div class="input-group ">
											<label><strong class="mb-0"><i>Column 2</i>: The creditor to whom you
													owe
													the
													debt<br>
													Check all schedules that apply: </strong>
											</label>
										</div>
									</div>
								</div>
								<!-- 3.1 Row -->
								<div class="row border-bottm-1">
									<div class="col-md-9 ">
										<strong>3.1</strong>
									</div>
									<div class="col-md-8">
										<div class="input-group">
											<label>Name </label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<label>Number</label>
													<input type="number" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-8">
												<div class="input-group">
													<label>Street</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<label>City</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<label>State</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<label>Zip Code</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 mt-3">
										<div class="input-group">
											<input type="checkbox">
											<label for="">Schedule D, line</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for="">Schedule E/F, line</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for="">Schedule E/F, line</label>
										</div>
									</div>
								</div>
								<!-- 3.2 Row -->
								<div class="row border-bottm-1">
									<div class="col-md-9 ">
										<strong>3.2</strong>
									</div>
									<div class="col-md-8">
										<div class="input-group">
											<label>Name </label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<label>Number</label>
													<input type="number" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-8">
												<div class="input-group">
													<label>Street</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<label>City</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<label>State</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<label>Zip Code</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 mt-3">
										<div class="input-group">
											<input type="checkbox">
											<label for="">Schedule D, line</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for="">Schedule E/F, line</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for="">Schedule E/F, line</label>
										</div>
									</div>
								</div>
								<!-- 3.3 Row -->
								<div class="row">
									<div class="col-md-9 ">
										<strong>3.3</strong>
									</div>
									<div class="col-md-8">
										<div class="input-group">
											<label>Name </label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<label>Number</label>
													<input type="number" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-8">
												<div class="input-group">
													<label>Street</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<label>City</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<label>State</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<label>Zip Code</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 mt-3">
										<div class="input-group">
											<input type="checkbox">
											<label for="">Schedule D, line</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for="">Schedule E/F, line</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for="">Schedule E/F, line</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-border">
								<div class="row mt-3">
									<div class="col-md-12 mb-3">
										<label><strong class="mb-0">Additional Page to List More Codebtors</strong>
										</label>
									</div>
									<div class="col-md-7 column-heading">
										<div class="input-group ">
											<label><strong class="mb-0"><i>Column 1</i>: Your codebtor</strong>
											</label>
										</div>
									</div>
									<div class="col-md-5 column-heading">
										<div class="input-group ">
											<label><strong class="mb-0"><i>Column 2</i>: The creditor to whom you
													owe
													the
													debt<br>
													Check all schedules that apply: </strong>
											</label>
										</div>
									</div>
								</div>
								<!-- 3.1 Row -->
								<div class="row border-bottm-1">
									<div class="col-md-9 ">
										<strong>3.</strong>
									</div>
									<div class="col-md-8">
										<div class="input-group">
											<label>Name </label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<label>Number</label>
													<input type="number" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-8">
												<div class="input-group">
													<label>Street</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<label>City</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<label>State</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<label>Zip Code</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 mt-3">
										<div class="input-group">
											<input type="checkbox">
											<label for="">Schedule D, line</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for="">Schedule E/F, line</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for="">Schedule E/F, line</label>
										</div>
									</div>
								</div>
								<!-- 3.2 Row -->
								<div class="row border-bottm-1">
									<div class="col-md-9 ">
										<strong>3.</strong>
									</div>
									<div class="col-md-8">
										<div class="input-group">
											<label>Name </label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<label>Number</label>
													<input type="number" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-8">
												<div class="input-group">
													<label>Street</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<label>City</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<label>State</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<label>Zip Code</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 mt-3">
										<div class="input-group">
											<input type="checkbox">
											<label for="">Schedule D, line</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for="">Schedule E/F, line</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for="">Schedule E/F, line</label>
										</div>
									</div>
								</div>
								<!-- 3.3 Row -->
								<div class="row ">
									<div class="col-md-9 ">
										<strong>3.</strong>
									</div>
									<div class="col-md-8">
										<div class="input-group">
											<label>Name </label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<label>Number</label>
													<input type="number" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-8">
												<div class="input-group">
													<label>Street</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<label>City</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<label>State</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<label>Zip Code</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 mt-3">
										<div class="input-group">
											<input type="checkbox">
											<label for="">Schedule D, line</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for="">Schedule E/F, line</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for="">Schedule E/F, line</label>
										</div>
									</div>
								</div>
							</div>

						</div>
					</section>

					<!-- Official Form 106I -->
					@include("attorney.official_form.form_income",['BasicInfoPartA'=>$BasicInfoPartA,'BasicInfoPartB'=>$BasicInfoPartB,'income_info'=>$income_info])	
					<!-- Official Form 106J -->
					@include("attorney.official_form.form_expenses",['BasicInfoPartA'=>$BasicInfoPartA,'BasicInfoPartB'=>$BasicInfoPartB,'expenses_info'=>$expenses_info])
					<!-- Official Form 106Dec -->
					<section class="official-form-106dec padd-20" id="official-form-106dec">
						<div class="container">
							<div class="row">
								<div class="col-md-9">
									<div class="section-box">
										<div class="section-header bg-back text-white">
											<p class="font-lg-20">Fill in this information to identify your case</p>
										</div>
										<div class="section-body padd-20">
											<div class="row">
												<div class="col-md-12">
													<label>Debtor 1 </label>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<div class="input-group">
																<label>First Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Middle Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Last Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>

												</div>
												<div class="col-md-12">
													<label class="d-block">Debtor 2 </label>
													<span class="font-lg-14">(Spouse, if filing)</span>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<div class="input-group">
																<label>First Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Middle Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Last Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>

												</div>
												<div class="col-md-12">
													<div class="input-group">
														<label>United States Bankruptcy Court for the</label>
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-12">
													<div class="input-group">
														<label>Case number</label>
														<input type="number" value="" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row padd-20">
								<div class="col-md-12 mb-3">
									<div class="form-title">
										<h4>Official Form 106Dec </h4>
										<h2 class="font-lg-22">Declaration About an Individual Debtor’s Schedules
										</h2>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-subheading">
										<p class="font-lg-14"><strong>If two married people are filing together,
												both
												are equally responsible for supplying correct information.
												You must file this form whenever you file bankruptcy schedules or
												amended schedules. Making a false statement, concealing property, or
												obtaining money or property by fraud in connection with a bankruptcy
												case can result in fines up to $250,000, or imprisonment for up to
												20
												years, or both. 18 U.S.C. §§ 152, 1341, 1519, and 3571.
											</strong></p>
									</div>
								</div>
							</div>
							<!-- Part 1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 1</span>
										<h2 class="font-lg-18">Sign Below</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<div class="row">
									<div class="col-md-12">
										<div class="input-group d-inline-block">
											<label for="">
												<strong class="d-block">Did you pay or agree to pay someone who is
													NOT
													an attorney to help you fill out bankruptcy forms?
												</strong>
											</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>No Go to line 2.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Yes. Name of person</label>
										</div>
										<div class="input-group">
											<input type="text" value="" class="form-control">
											<label>Attach Bankruptcy Petition Preparer’s Notice, Declaration, and
												Signature (Official Form 119).</label>
										</div>
									</div>
									<div class="col-md-12 mt-3">
										<div class="input-group d-inline-block">
											<label for="">
												<strong class="d-block">Under penalty of perjury, I declare that I
													have
													read the summary and schedules filed with this declaration and
													that they are true and correct.
												</strong>
											</label>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="input-group signature-field">
													<p>Signature of Debtor 1</p>
													<span></span>
													<label for="">You do not have a Social Security number.</label>
												</div>
												<div class="input-group">
													<label>Date</label>
													<input type="date" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group signature-field">
													<p>Signature of Debtor 2</p>
													<span></span>
													<label for="">You do not have a Social Security number.</label>
												</div>
												<div class="input-group">
													<label>Date</label>
													<input type="date" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<!-- Official Form 107 -->
					@include("attorney.official_form.form_financial_affairs",['BasicInfoPartA'=>$BasicInfoPartA,'BasicInfoPartB'=>$BasicInfoPartB,'financialaffairs_info'=>$financialaffairs_info])
					<!-- Official Form 108 -->
					<section class="official-form-108 padd-20" id="official-form-108">
						<div class="container">
							<div class="row">
								<div class="col-md-9">
									<div class="section-box">
										<div class="section-header bg-back text-white">
											<p class="font-lg-20">Fill in this information to identify your case</p>
										</div>
										<div class="section-body padd-20">
											<div class="row">
												<div class="col-md-12">
													<label>Debtor 1 </label>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<div class="input-group">
																<label>First Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Middle Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Last Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>

												</div>
												<div class="col-md-12">
													<label class="d-block">Debtor 2 </label>
													<span class="font-lg-14">(Spouse, if filing)</span>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<div class="input-group">
																<label>First Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Middle Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Last Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>

												</div>
												<div class="col-md-12">
													<div class="input-group">
														<label>United States Bankruptcy Court for the</label>
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-12">
													<div class="input-group">
														<label>Case number</label>
														<input type="number" value="" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row padd-20">
								<div class="col-md-12 mb-3">
									<div class="form-title">
										<h4>Official Form 108 </h4>
										<h2 class="font-lg-22">Statement of Intention for Individuals Filing Under
											Chapter 7
										</h2>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-subheading">
										<div class="input-group">
											<strong>
												If you are an individual filing under chapter 7, you must fill out
												this
												form if:
												<ul>
													<li>creditors have claims secured by your property, or</li>
													<li>you have leased personal property and the lease has not
														expired.
													</li>

												</ul>
												You must file this form with the court within 30 days after you file
												your bankruptcy petition or by the date set for the meeting of
												creditors,
												whichever is earlier, unless the court extends the time for cause.
												You
												must also send copies to the creditors and lessors you list on the
												form.<br>
												If two married people are filing together in a joint case, both are
												equally responsible for supplying correct information.
												<br>
												Both debtors must sign and date the form.
												<br>
												Be as complete and accurate as possible. If more space is needed,
												attach
												a separate sheet to this form. On the top of any additional pages,
												write your name and case number (if known)
											</strong>
										</div>
									</div>
								</div>
							</div>
							<!-- Part 1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 1</span>
										<h2 class="font-lg-18">List Your Creditors Who Have Secured Claims</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border mb-3">
								<!-- First Row Heading -->
								<div class="row  mt-3">
									<div class="col-md-4">
										<div class="column-heading">
											<h4>Identify the creditor and the property that is collateral </h4>
										</div>
									</div>
									<div class="col-md-4">
										<div class="column-heading">
											<h4>What do you intend to do with the property that
												secures a debt?</h4>
										</div>
									</div>
									<div class="col-md-4">
										<div class="column-heading">
											<h4>Did you claim the property
												as exempt on Schedule C?</h4>
										</div>
									</div>
								</div>
								<!-- Second Row Body -->
								<div class="col-md-12 border-bottm-1">
									<div class="row">
										<div class="col-md-4">
											<div class="input-group">
												<label>Creditor’s
													name:</label>
												<input type="number" value="" class="form-control">
											</div>
											<div class="input-group">
												<label>Description of
													property
													securing debt</label>
												<textarea name="" id="" cols="20" rows="5"
													class="form-control"></textarea>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<input type="checkbox">
												<label>Surrender the property</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label>Retain the property and redeem it.</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label>Retain the property and enter into a
													Reaffirmation Agreement.</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label>Retain the property and [explain]:</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<input type="checkbox">
												<label>No</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label>Yes</label>
											</div>
										</div>
									</div>
								</div>
								<!-- Third Row Body -->
								<div class="col-md-12 border-bottm-1">
									<div class="row">
										<div class="col-md-4">
											<div class="input-group">
												<label>Creditor’s
													name:</label>
												<input type="number" value="" class="form-control">
											</div>
											<div class="input-group">
												<label>Description of
													property
													securing debt</label>
												<textarea name="" id="" cols="20" rows="5"
													class="form-control"></textarea>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<input type="checkbox">
												<label>Surrender the property</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label>Retain the property and redeem it.</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label>Retain the property and enter into a
													Reaffirmation Agreement.</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label>Retain the property and [explain]:</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<input type="checkbox">
												<label>No</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label>Yes</label>
											</div>
										</div>
									</div>
								</div>
								<!-- Fourth Row Body -->
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-4">
											<div class="input-group">
												<label>Creditor’s
													name:</label>
												<input type="number" value="" class="form-control">
											</div>
											<div class="input-group">
												<label>Description of
													property
													securing debt</label>
												<textarea name="" id="" cols="20" rows="5"
													class="form-control"></textarea>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<input type="checkbox">
												<label>Surrender the property</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label>Retain the property and redeem it.</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label>Retain the property and enter into a
													Reaffirmation Agreement.</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label>Retain the property and [explain]:</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<input type="checkbox">
												<label>No</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label>Yes</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Part 2 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">List Your Unexpired Personal Property Leases</h2>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<!-- First Row Heading -->
								<div class="row  mt-3">
									<div class="col-md-12">
										<div class="input-group mb-3">
											<strong>For any unexpired personal property lease that you listed in
												Schedule G: Executory Contracts and Unexpired Leases (Official Form
												106G),
												fill in the information below. Do not list real estate leases.
												Unexpired
												leases are leases that are still in effect; the lease period has not
												yet
												ended. You may assume an unexpired personal property lease if the
												trustee does not assume it. 11 U.S.C. § 365(p)(2).</strong>
										</div>
									</div>
									<div class="col-md-8">
										<div class="column-heading">
											<h4>Describe your unexpired personal property leases </h4>
										</div>
									</div>
									<div class="col-md-4">
										<div class="column-heading">
											<h4>What do you intend to do with the property that
												secures a debt?</h4>
										</div>
									</div>
								</div>

								<!-- Second Row Body -->
								<div class="col-md-12 border-bottm-1">
									<div class="row">
										<div class="col-md-8">
											<div class="input-group">
												<label>Lessor’s name:</label>
												<input type="text" value="" class="form-control">
											</div>
											<div class="input-group">
												<label>Description of leased
													property: </label>
												<textarea name="" id="" cols="20" rows="5"
													class="form-control"></textarea>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<input type="checkbox">
												<label>No</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label>Yes</label>
											</div>
										</div>
									</div>
								</div>
								<!-- Third Row Body -->
								<div class="col-md-12 border-bottm-1">
									<div class="row">
										<div class="col-md-8">
											<div class="input-group">
												<label>Lessor’s name:</label>
												<input type="text" value="" class="form-control">
											</div>
											<div class="input-group">
												<label>Description of leased
													property: </label>
												<textarea name="" id="" cols="20" rows="5"
													class="form-control"></textarea>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<input type="checkbox">
												<label>No</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label>Yes</label>
											</div>
										</div>
									</div>
								</div>
								<!-- Fourth Row Body -->
								<div class="col-md-12 border-bottm-1">
									<div class="row">
										<div class="col-md-8">
											<div class="input-group">
												<label>Lessor’s name:</label>
												<input type="text" value="" class="form-control">
											</div>
											<div class="input-group">
												<label>Description of leased
													property: </label>
												<textarea name="" id="" cols="20" rows="5"
													class="form-control"></textarea>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<input type="checkbox">
												<label>No</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label>Yes</label>
											</div>
										</div>
									</div>
								</div>
								<!-- Fifth Row Body -->
								<div class="col-md-12 border-bottm-1">
									<div class="row">
										<div class="col-md-8">
											<div class="input-group">
												<label>Lessor’s name:</label>
												<input type="text" value="" class="form-control">
											</div>
											<div class="input-group">
												<label>Description of leased
													property: </label>
												<textarea name="" id="" cols="20" rows="5"
													class="form-control"></textarea>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<input type="checkbox">
												<label>No</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label>Yes</label>
											</div>
										</div>
									</div>
								</div>
								<!-- Sixth Row Body -->
								<div class="col-md-12 ">
									<div class="row">
										<div class="col-md-8">
											<div class="input-group">
												<label>Lessor’s name:</label>
												<input type="text" value="" class="form-control">
											</div>
											<div class="input-group">
												<label>Description of leased
													property: </label>
												<textarea name="" id="" cols="20" rows="5"
													class="form-control"></textarea>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-group">
												<input type="checkbox">
												<label>No</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label>Yes</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Part 2 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 3</span>
										<h2 class="font-lg-18">Sign Below</h2>
									</div>
								</div>
							</div>
							<!-- Row 2 -->
							<div class="form-border mb-3">
								<!-- First Row Heading -->
								<div class="row">
									<div class="col-md-12">
										<div class="input-group mb-3">
											<strong>Under penalty of perjury, I declare that I have indicated my
												intention about any property of my estate that secures a debt and
												any
												personal property that is subject to an unexpired lease</strong>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="input-group signature-field">
											<p>Signature of Debtor 1</p>
											<span></span>
										</div>
										<div class="input-group signature-field">
											<label for="">Executed on</label>
											<input type="date" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-group signature-field">
											<p>Signature of Debtor 2</p>
											<span></span>
											<div class="input-group signature-field">
												<label for="">Executed on</label>
												<input type="date" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>


							<!-- Notice -->
							<div class="row mt-4">
								<div class="col-md-12">
									<div class="text-center mb-3">
										<h2 class="font-lg-18">Notice Required by 11 U.S.C. § 342(b) for
											Individuals Filing for Bankruptcy (Form 2010)</h2>
									</div>
								</div>
								<div class="col-md-12">
									<div class="notice-box">
										<strong class="d-block">This notice is for you if:</strong>
										<p><strong> You are an individual filing for bankruptcy,
												and</strong>
											<strong> Your debts are primarily consumer debts.</strong>
											Consumer debts are defined in 11 U.S.C.
											§ 101(8) as “incurred by an individual
											primarily for a personal, family, or
											household purpose.”
										</p>
									</div>

									<div class="input-group mt-3">
										<h3>
											The types of bankruptcy that are
											available to individuals
										</h3>
										<p>Individuals who meet the qualifications may file
											under one of four different chapters of the
											Bankruptcy Code:</p>
										<ul>
											<li>Chapter 7 — Liquidation</li>
											<li>Chapter 11— Reorganization</li>
											<li>Chapter 12— Voluntary repayment plan
												for family farmers or
												fishermen</li>
											<li>Chapter 13— Voluntary repayment plan
												for individuals with regular
												income</li>
										</ul>
										<strong>You should have an attorney review your
											decision to file for bankruptcy and the choice of
											chapter. </strong>
									</div>
									<div class="input-group mt-3 liquidation-chap">
										<h3>
											Chapter 7: Liquidation
										</h3>
										<p class="mt-3">$245 filing fee<br>
											$78 administrative fee<br>
											+ $15 trustee surcharge<br>
										<div class="total">
											$338 total fee
										</div>
										</p>

										<p>Chapter 7 is for individuals who have financial
											difficulty preventing them from paying their
											debts and who are willing to allow their nonexempt property to be used
											to
											pay their
											creditors. The primary purpose of filing under
											chapter 7 is to have your debts discharged. The
											bankruptcy discharge relieves you after
											bankruptcy from having to pay many of your
											pre-bankruptcy debts. Exceptions exist for
											particular debts, and liens on property may still
											be enforced after discharge. For example, a
											creditor may have the right to foreclose a home
											mortgage or repossess an automobile.<br><br>
											However, if the court finds that you have
											committed certain kinds of improper conduct
											described in the Bankruptcy Code, the court
											may deny your discharge.<br><br>
											You should know that even if you file
											chapter 7 and you receive a discharge, some
											debts are not discharged under the law.
											Therefore, you may still be responsible to pay:</p>
										<ul>
											<li>most taxes;
											</li>
											<li>most student loans;</li>
											<li>domestic support and property settlement
												obligations;</li>
											<li>most fines, penalties, forfeitures, and
												criminal restitution obligations; and</li>
											<li>certain debts that are not listed in your
												bankruptcy papers.</li>

										</ul>
										<p>You may also be required to pay debts arising
											from:</p>
										<ul>
											<li>fraud or theft;</li>
											<li>fraud or defalcation while acting in breach
												of fiduciary capacity;</li>
											<li>intentional injuries that you inflicted; and </li>
											<li>most fines, penalties, forfeitures, and
												criminal restitution obligations; and</li>
											<li>death or personal injury caused by
												operating a motor vehicle, vessel, or
												aircraft while intoxicated from alcohol or
												drugs. </li>

										</ul>
										<p>
											If your debts are primarily consumer debts, the
											court can dismiss your chapter 7 case if it finds
											that you have enough income to repay
											creditors a certain amount. You must file
											Chapter 7 Statement of Your Current Monthly
											Income (Official Form 122A–1) if you are an
											individual filing for bankruptcy under
											chapter 7. This form will determine your
											current monthly income and compare whether
											your income is more than the median income
											that applies in your state.<br>
											If your income is not above the median for
											your state, you will not have to complete the
											other chapter 7 form, the Chapter 7 Means
											Test Calculation (Official Form 122A–2).<br>
											If your income is above the median for your
											state, you must file a second form —the
											Chapter 7 Means Test Calculation (Official
											Form 122A–2). The calculations on the form—
											sometimes called the Means Test—deduct
											from your income living expenses and
											payments on certain debts to determine any
											amount available to pay unsecured creditors. If
											your income is more than the
											median income
											for your state of residence and family size,
											depending on the results of the Means Test, the
											U.S. trustee, bankruptcy administrator, or
											creditors can file a motion to dismiss your case
											under § 707(b) of the Bankruptcy Code. If a
											motion is filed, the court will decide if your
											case should be dismissed. To avoid dismissal,
											you may choose to proceed under another
											chapter of the Bankruptcy Code.<br>
											If you are an individual filing for chapter 7
											bankruptcy, the trustee may sell your property
											to pay your debts, subject to your right to
											exempt the property or a portion of the
											proceeds from the sale of the property. The
											property, and the proceeds from property that
											your bankruptcy trustee sells or liquidates that
											you are entitled to, is called exempt property.
											Exemptions may enable you to keep your
											home, a car, clothing, and household items or
											to receive some of the proceeds if the property
											is sold.<br>
											Exemptions are not automatic. To exempt
											property, you must list it on Schedule C: The
											Property You Claim as Exempt (Official Form
											106C). If you do not list the property, the
											trustee may sell it and pay all of the proceeds
											to your creditors.<br>
										</p>
									</div>
									<div class="input-group mt-3 liquidation-chap">
										<h3>
											Chapter 11: Reorganization
										</h3>
										<p class="mt-3">$1,167 filing fee<br>
											+ $571 administrative fee<br>
										<div class="total">
											$1,738 total fee
										</div>
										<p class="mt-3">Chapter 11 is often used for reorganizing a
											business, but is also available to individuals.
											The provisions of chapter 11 are too
											complicated to summarize briefly. </p>
									</div>
									<div class="warning-box">
										<div class="war-header">
											<h4>Read These Important Warnings</h4>
										</div>
										<div class="warn-body">
											<strong>
												Because bankruptcy can have serious long-term financial and legal
												consequences, including loss of
												your property, you should hire an attorney and carefully consider
												all of
												your options before you file.
												Only an attorney can give you legal advice about what can happen as
												a
												result of filing for bankruptcy
												and what your options are. If you do file for bankruptcy, an
												attorney
												can help you fill out the forms
												properly and protect you, your family, your home, and your
												possessions.<br><br>
												Although the law allows you to represent yourself in bankruptcy
												court,
												you should understand that
												many people find it difficult to represent themselves successfully.
												The
												rules are technical, and a
												mistake or inaction may harm you. If you file without an attorney,
												you
												are still responsible for knowing
												and following all of the legal requirements.<br><br>
												You should not file for bankruptcy if you are not eligible to file
												or if
												you do not intend to file the
												necessary documents.<br><br>
												Bankruptcy fraud is a serious crime; you could be fined and
												imprisoned
												if you commit fraud in your
												bankruptcy case. Making a false statement, concealing property, or
												obtaining money or property by
												fraud in connection with a bankruptcy case can result in fines up to
												$250,000, or imprisonment for up to
												20 years, or both. 18 U.S.C. §§ 152, 1341, 1519, and 3571.
											</strong>
										</div>
									</div>
									<div class="input-group mt-3 liquidation-chap">
										<h3>
											Chapter 12: Repayment plan for family
											farmers or fishermen
										</h3>
										<p class="mt-3">$200 filing fee<br>
											+ $78 administrative fee<br>
										<div class="total">
											$278 total fee
										</div>
										<p class="mt-3">Similar to chapter 13, chapter 12 permits
											family farmers and fishermen to repay their
											debts over a period of time using future
											earnings and to discharge some debts that are
											not paid. </p>
									</div>
									<div class="input-group mt-3 liquidation-chap">
										<h3>
											Chapter 13: Repayment plan for
											individuals with regular
											income
										</h3>
										<p class="mt-3">$235 filing fee<br>
											+ $78 administrative fee<br>
										<div class="total">
											$313 total fee
										</div>
										<p class="mt-3">Chapter 13 is for individuals who have regular
											income and would like to pay all or part of
											their debts in installments over a period of time
											and to discharge some debts that are not paid.
											You are eligible for chapter 13 only if your
											debts are not more than certain dollar amounts
											set forth in 11 U.S.C. § 109Under chapter 13, you must file with the
											court
											a plan to repay your creditors all or part of the
											money that you owe them, usually using your
											future earnings. If the court approves your
											plan, the court will allow you to repay your
											debts, as adjusted by the plan, within 3 years or
											5 years, depending on your income and other
											factors.<br>
											<br>
											After you make all the payments under your
											plan, many of your debts are discharged. The
											debts that are not discharged and that you may
											still be responsible to pay include:<br>
											<br>
										<ul>
											<li>
												domestic support obligations,
											</li>
											<li>
												most student loans,
											</li>
											<li>
												certain taxes,
											</li>
											<li>
												debts for fraud or theft,
											</li>
											<li>
												debts for fraud or defalcation while acting
												in a fiduciary capacity,
											</li>
											<li>
												most criminal fines and restitution
												obligations,
											</li>
											<li>
												certain debts that are not listed in your
												bankruptcy papers,
											</li>
											<li>
												certain debts for acts that caused death or
												personal injury, and
											</li>
											<li> certain long-term secured debts</li>
										</ul>
										</p>
									</div>

									<div class="warning-form">
										<h4>Warning: File Your Forms on Time</h4>
										<p>
											Section 521(a)(1) of the Bankruptcy Code
											requires that you promptly file detailed information
											about your creditors, assets, liabilities, income,
											expenses and general financial condition. The
											court may dismiss your bankruptcy case if you do
											not file this information within the deadlines set by
											the Bankruptcy Code, the Bankruptcy Rules, and
											the local rules of the court.
											For more information about the documents and
											their deadlines, go to:
											<a href="http://www.uscourts.gov/forms/bankruptcy-forms">
												http://www.uscourts.gov/forms/bankruptcy-forms</a>

										</p>
									</div>
									<div class="input-group">
										<h3>Bankruptcy crimes have serious
											consequences</h3>
										<p>
										<ul>
											<li>
												If you knowingly and fraudulently conceal
												assets or make a false oath or statement
												under penalty of perjury—either orally or
												in writing—in connection with a
												bankruptcy case, you may be fined,
												imprisoned, or both.
											</li>
											<li>
												All information you supply in connection
												with a bankruptcy case is subject to
												examination by the Attorney General acting
												through the Office of the U.S. Trustee, the
												Office of the U.S. Attorney, and other
												offices and employees of the U.S.
												Department of Justice.
											</li>
										</ul>
										</p>
									</div>
									<div class="input-group">
										<h3>Make sure the court has your
											mailing address</h3>
										<p>

											The bankruptcy court sends notices to the
											mailing address you list on Voluntary Petition
											for Individuals Filing for Bankruptcy (Official
											Form 101). To ensure that you receive
											information about your case, Bankruptcy
											Rule 4002 requires that you notify the court of
											any changes in your address.A married couple may file a bankruptcy case
											together—called a joint case. If you file a joint
											case and each spouse lists the same mailing
											address on the bankruptcy petition, the
											bankruptcy court generally will mail you and
											your spouse one copy of each notice, unless
											you file a statement with the court asking that
											each spouse receive separate copies.

										</p>
									</div>
									<div class="input-group">
										<h3>Understand which services you
											could receive from credit
											counseling agencies</h3>
										<p>

											The law generally requires that you receive a
											credit counseling briefing from an approved
											credit counseling agency. 11 U.S.C. § 109(h).
											If you are filing a joint case, both spouses must
											receive the briefing. With limited exceptions,
											you must receive it within the 180 days before
											you file your bankruptcy petition. This briefing
											is usually conducted by telephone or on the
											Internet.<br>
											In addition, after filing a bankruptcy case, you
											generally must complete a financial
											management instructional course before you
											can receive a discharge. If you are filing a joint
											case, both spouses must complete the course.<br>
											You can obtain the list of agencies approved to
											provide both the briefing and the instructional
											course from:
											<a
												href="http://www.uscourts.gov/servicesforms/bankruptcy/credit-counseling-and-debtoreducation-courses">http://www.uscourts.gov/servicesforms/bankruptcy/credit-counseling-and-debtoreducation-courses</a>.<br>
											In Alabama and North Carolina, go to:<br>
											<a
												href="http://www.uscourts.gov/servicesforms/bankruptcy/credit-counseling-anddebtor-education-courses">http://www.uscourts.gov/servicesforms/bankruptcy/credit-counseling-anddebtor-education-courses</a>
											<br>If you do not have access to a computer, the
											clerk of the bankruptcy court may be able to
											help you obtain the list.

										</p>
									</div>
								</div>
								<div class="col-md-6"></div>
							</div>

							<!-- United States Bankruptcy Court -->

							<div class="row">
								<div class="col-md-12">
									<div class="heading-court text-center">
										<h4>United States Bankruptcy Court</h4>
										<p>CENTRAL DISTRICT OF CALIFORNIA</p>
									</div>
								</div>
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-8">
											<div class="row">
												<div class="col-md-2">
													<strong>In re</strong>
												</div>
												<div class="col-md-10">
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="row">
												<div class="col-md-2">
													<strong>Debtor</strong>
												</div>
												<div class="col-md-10">
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="row">
												<div class="col-md-3">
													<strong>Case No</strong>
												</div>
												<div class="col-md-9">
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="row">
												<div class="col-md-3">
													<strong>Chapter</strong>
												</div>
												<div class="col-md-9">
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<h4 class="my-3 text-center">DISCLOSURE OF COMPENSATION OF ATTORNEY FOR DEBTOR
									</h4>

									<div class="input-group">
										<label for="">1. Pursuant to 11 U .S.C. § 329(a) and Fed. Bankr. P. 2016(b),
											I
											certify that I am the attorney for the above
											named debtor(s) and that compensation paid to me within one year before
											the
											filing of the petition in
											bankruptcy, or agreed to be paid to me, for services rendered or to be
											rendered on behalf of the debtor(s) in
											contemplation of or in connection with the bankruptcy case is as
											follows:</label>
										<div class="row mt-3">
											<div class="col-md-5">
												<label>For legal services, I have agreed to accept</label>
											</div>
											<div class="col-md-3">
												<input type="text" value="" class="form-control">
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-5">
												<label>Prior to the filing of this statement I have received
													.</label>
											</div>
											<div class="col-md-3">
												<input type="text" value="" class="form-control">
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<label>Balance Due </label>
											</div>
											<div class="col-md-5">
												<input type="text" value="" class="form-control">
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>

										<div class="row mt-3 align-items-center">
											<div class="col-md-12">
												<label for="">2.The source of the compensation paid to me
													was:</label>
											</div>
											<div class="col-md-3">
												<input type="checkbox">
												<label>Debtor </label>
											</div>
											<div class="col-md-3">
												<input type="checkbox">
												<label>Other (specify) </label>
											</div>
											<div class="col-md-6">
												<div class="input-group">
													<textarea class="form-control" cols="30" rows="2"></textarea>
												</div>
											</div>
										</div>
										<div class="row mt-3 align-items-center">
											<div class="col-md-12">
												<label for="">3. The source of compensation to be paid to me is:
												</label>
											</div>
											<div class="col-md-3">
												<input type="checkbox">
												<label>Debtor </label>
											</div>
											<div class="col-md-3">
												<input type="checkbox">
												<label>Other (specify) </label>
											</div>
											<div class="col-md-6">
												<div class="input-group">
													<textarea class="form-control" cols="30" rows="2"></textarea>
												</div>
											</div>
										</div>
										<div class="row mt-3 align-items-center">
											<div class="col-md-12">
												<div class="input-group">
													<label for="">4.</label>
													<input type="checkbox">
													<label for=""> I have not agreed to share the above-disclosed
														compensation with any other person unless they are
														members and associates of my law firm.
													</label>
												</div>
												<div class="input-group">
													<label for=""></label>
													<input type="checkbox">
													<label for="">I have agreed to share the above-disclosed
														compensation with a other person or persons who are not
														members or associates of my law firm. A copy of the
														agreement,
														together with a list of the names of the
														people sharing in the compensation, is attached.
													</label>
												</div>
											</div>
										</div>
										<div class="row mt-3 align-items-center">
											<div class="col-md-12">
												<div class="input-group">
													<label for="">5.</label>
													<label for=""> In return for the above-disclosed fee, I have
														agreed
														to render legal service for all aspects of the bankruptcy
														case, including:
													</label>
												</div>
												<div class="pl-3">
													<div class="input-group mt-3">
														<label for=""> a. Analysis of the debtor' s financial
															situation,
															and
															rendering advice to the debtor in determining whether to
															file a petition in bankruptcy;
														</label>
													</div>
													<div class="input-group">
														<label for=""> b. Preparation and filing of any petition,
															schedules,
															statements of affairs and plan which may be required;
														</label>
													</div>
													<div class="input-group">
														<label for=""> c. Representation of the debtor at the
															meeting of
															creditors and confirmation hearing, and any adjourned
															hearings thereof;
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

							<div class="row mt-3">
								<div class="col-md-12">
									<label for=""><strong>4. Limited Scope of Services.</strong> A limited scope of
										appearance is
										permitted under LBR 2090-1(a)(3), unless otherwise
										required by the presiding judge. In return for the fee disclosed above, I
										have
										agreed to provide the required legal
										services indicated below in paragraph “a”, and, if any are indicated, the
										additional services checked in
										paragraph “4.b”</label>

									<div class="pl-3 mt-3">
										<label for=""><strong>a. Services required to be provided:</strong> </label>
										<div class="pl-3">
											<p>i. Analysis of the Debtor’s financial situation, and advice to the
												Debtor
												in determining whether to file a
												bankruptcy petition;</p>
											<p>ii. Preparation and filing of any petition, lists, schedules and
												statements and any other required case
												commencement documents; and</p>
											<p>iii. Representation of the Debtor at the initial § 341(a) meeting of
												creditors</p>
										</div>
										<label for=""><strong>b. <input type="checkbox"> Additional legal services I
												will provide:</strong> </label>
										<div class="pl-3">
											<p>i. <input type="checkbox">
												<label for="">Any proceeding related to relief from stay
													motions</label>
											</p>
											<p>ii. <input type="checkbox">
												<label for="">Any proceeding involving an objection to the Debtor’s
													discharge pursuant to 11 U.S.C. § 727.
												</label>
											</p>
											<p>iii. <input type="checkbox">
												<label for="">Any proceeding to determine whether a specific debt is
													nondischargeable under 11 U.S.C. § 523.</label>
											</p>
											<p>iv. <input type="checkbox">
												<label for="">Reaffirmation of a debt.</label>
											</p>
											<p>v <input type="checkbox">
												<label for="">Any lien avoidance under 11 U.S.C. § 522(f)</label>
											</p>
											<p>vi. <input type="checkbox">
												<label for="">Other (specify):</label>
											</p>
										</div>
									</div>
								</div>


								<div class="col-md-12">
									<label for="">5. If in the future I agree to represent the Debtor in additional
										matters, I will complete and file the Attorney’s Disclosure
										of Postpetition Compensation, LBR form F 2016-1.4.ATTY.COMP.DISCLSR.</label>
								</div>
								<div class="mt-3 decalaration-form">
									<div class="text-center">
										<h3>DECLARATION OF ATTORNEY FOR THE DEBTOR</h3>
										<p>I declare under penalty of perjury that the foregoing is a complete
											statement
											of
											any agreement or
											arrangement for payment to me for representation of the Debtor in this
											bankruptcy case
										</p>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="row">
												<div class="col-md-3">
													<label for="">Date</label>
												</div>
												<div class="col-md-9">
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-8">
											<div class="input-group signature-field ">
												<span class="pb-3"></span>
												<p>Signature of attorney for the Debtor</p>
											</div>
											<div class="input-group signature-field ">
												<span class="pb-3"></span>
												<p>Printed name of attorney</p>
											</div>
											<div class="input-group signature-field ">
												<span class="pb-3"></span>
												<p>Printed name of law firm</p>
											</div>
										</div>
									</div>
								</div>
								<div class="mt-3 decalaration-form">
									<div class="text-center">
										<h3>DECLARATION OF THE DEBTOR</h3>
										<p>I/we declare under penalty of perjury that my attorney has explained to
											me/us
											the limited scope of
											representation as outlined above. I/we understand that I/we have paid or
											agreed to pay solely for the required
											services listed in paragraph 4a, and the additional services (if any)
											that
											are checked off in paragraph 4b
											above, and that I/we am representing myself/ourselves for any other
											proceedings unless a new agreement is
											reached with an attorney
										</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="row">
												<div class="col-md-3">
													<label for="">Date</label>
												</div>
												<div class="col-md-9">
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="input-group signature-field ">
												<span></span>
												<p>Signature of Debtor 1</p>
											</div>
											<div class="input-group signature-field ">
												<span class="pb-3"></span>
												<p>Printed name of Debtor 1 </p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="row">
												<div class="col-md-3">
													<label for="">Date</label>
												</div>
												<div class="col-md-9">
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="input-group signature-field ">
												<span></span>
												<p>Signature of Debtor 2 (Joint Debtor)(if applicable)</p>
											</div>
											<div class="input-group signature-field ">
												<span class="pb-3"></span>
												<p>Printed name of Debtor 2 </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<!-- Official Form 106Dec -->
					<section class="official-form-109 padd-20" id="official-form-109">
						<div class="container">
							<div class="row">
								<div class="col-md-7">
									<div class="section-box">
										<div class="section-header bg-back text-white">
											<p class="font-lg-20">Fill in this information to identify your case</p>
										</div>
										<div class="section-body padd-20">
											<div class="row">
												<div class="col-md-12">
													<label>Debtor 1 </label>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<div class="input-group">
																<label>First Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Middle Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Last Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>

												</div>
												<div class="col-md-12">
													<label class="d-block">Debtor 2 </label>
													<span class="font-lg-14">(Spouse, if filing)</span>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<div class="input-group">
																<label>First Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Middle Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Last Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>

												</div>
												<div class="col-md-12">
													<div class="input-group">
														<label>United States Bankruptcy Court for the</label>
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-12">
													<div class="input-group">
														<label>Case number</label>
														<input type="number" value="" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-5">
									<div class="section-box second-section-box">
										<div class="section-header bg-back text-white">
											<p class="font-lg-20">Check one box only as directed in this form and in
												Form 122A-1Supp:</p>
										</div>
										<div class="section-body padd-20">
											<div class="row">
												<div class="col-md-12">
													<div class="input-group">
														<label>1. There is no presumption of abuse </label>
														<input type="checkbox">
													</div>
													<div class="input-group">
														<label>2. The calculation to determine if a presumption of
															abuse applies will be made under Chapter 7
															Means Test Calculation (Official Form 122A–2). </label>
														<input type="checkbox">
													</div>
													<div class="input-group">
														<label>3. The Means Test does not apply now because of
															qualified military service but it could apply
															later</label>
														<input type="checkbox">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row padd-20">
								<div class="col-md-12 mb-3">
									<div class="form-title">
										<h4>Official Form 122A─1 </h4>
										<h2 class="font-lg-22">Chapter 7 Statement of Your Current Monthly Income
										</h2>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-subheading">
										<div class="input-group">
											<strong>
												Be as complete and accurate as possible. If two married people are
												filing together, both are equally responsible for being accurate. If
												more
												space is needed, attach a separate sheet to this form. Include the
												line
												number to which the additional information applies. On the top of
												any
												additional pages, write your name and case number (if known). If you
												believe that you are exempted from a presumption of abuse because
												you
												do not have primarily consumer debts or because of qualifying
												military
												service, complete and file Statement of Exemption from Presumption
												of
												Abuse Under § 707(b)(2) (Official Form 122A-1Supp) with this form.
											</strong>
										</div>
									</div>
								</div>
							</div>

							<!-- Part 1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 1</span>
										<h2 class="font-lg-18">Calculate Your Current Monthly Income</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border mb-3">
								<label for="">
									<strong>1. What is your marital and filing status? </strong>Check one only
								</label>
								<div class="input-group">
									<input type="checkbox">
									<label for=""><strong>Not married.</strong> Fill out Column A, lines
										2-11</label>
								</div>
								<div class="input-group">
									<input type="checkbox">
									<label for=""><strong>Married and your spouse is filing with you.</strong> Fill
										out
										both Columns A and B, lines 2-11.
									</label>
								</div>
								<div class="input-group">
									<input type="checkbox">
									<label for=""><strong>Married and your spouse is NOT filing with you. You and
											your
											spouse are:</strong>
									</label>
									<div class="pl-3">
										<div class="input-group">
											<input type="checkbox">
											<label for=""><strong>Living in the same household and are not legally
													separated.</strong> Fill out both Columns A and B, lines 2-11.
											</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for=""><strong>Living separately or are legally
													separated.</strong>
												Fill out Column A, lines 2-11; do not fill out Column B. By checking
												this box, you declare
												under penalty of perjury that you and your spouse are legally
												separated
												under nonbankruptcy law that applies or that you and your
												spouse are living apart for reasons that do not include evading the
												Means Test requirements. 11 U.S.C. § 707(b)(7)(B).
											</label>
										</div>
									</div>
								</div>
								<div class="input-group">
									<div class="column-heading">
										<label for=""><strong>Fill in the average monthly income that you received
												from
												all sources, derived during the 6 full months before you file this
												bankruptcy case.</strong> 11 U.S.C. § 101(10A). For example, if you
											are
											filing on
											September 15, the 6-month period would be March 1 through
											August 31. If the amount of your monthly income varied during the 6
											months, add the income for all 6 months and divide the total by 6.
											Fill in the result. Do not include any income amount more than once. For
											example, if both spouses own the same rental property, put the
											income from that property in one column only. If you have nothing to
											report for any line, write $0 in the space</label>
									</div>
								</div>


								<!-- Row 1 -->
								<div class="row mb-3 mt-3">
									<div class="col-md-8"></div>
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-6">
												<div class="column-heading">
													<h4>Column A
														Debtor 1</h4>
												</div>
											</div>
											<div class="col-md-6">
												<div class="column-heading">
													<h4>Column B
														Debtor 2 or
														non-filing spouse</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Row 2 -->
								<div class="row">
									<div class="col-md-8">
										<div class="input-group">
											<label for="" class="d-block">
												<strong>2. Your gross wages, salary, tips, bonuses, overtime, and
													commissions</strong>(before all payroll deductions).
											</label>
										</div>
									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Row 3 -->
								<div class="row">
									<div class="col-md-8">
										<div class="input-group">
											<label for="" class="d-block">
												<strong>3. Alimony and maintenance payments</strong> Do not include
												payments from a spouse if
												Column B is filled in.
											</label>
										</div>
									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Row 4 -->
								<div class="row">
									<div class="col-md-8">
										<div class="input-group">
											<label for="" class="d-block">
												<strong>4. All amounts from any source which are regularly paid for
													household expenses
													of you or your dependents, including child
													support</strong>Include
												regular contributions
												from an unmarried partner, members of your household, your
												dependents,
												parents,
												and roommates. Include regular contributions from a spouse only if
												Column B is not
												filled in. Do not include payments you listed on line 3.
											</label>
										</div>
									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Row 5 -->
								<div class="row">
									<div class="col-md-8 mb-3">
										<div class="row">
											<div class="col-md-8">
												<div class="input-group">
													<label for="" class="d-block">
														<strong>5. Net income from operating a business, profession,
															or farm</strong>
													</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="column-heading">
													<strong>Debtor 1</strong>
												</div>
											</div>
											<div class="col-md-2">
												<div class="column-heading">
													<strong>Debtor 2</strong>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-8">
										<div class="row">
											<div class="col-md-8">
												<div class="input-group">
													<label for="" class="d-block">
														Gross receipts (before all deductions)
													</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-8">
										<div class="row">
											<div class="col-md-8">
												<div class="input-group">
													<label for="" class="d-block">
														Ordinary and necessary operating expenses
													</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-8">
										<div class="row">
											<div class="col-md-8">
												<div class="input-group">
													<label for="" class="d-block">
														Net monthly income from a business, profession, or farm
													</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Row 6 -->
								<div class="row">
									<div class="col-md-8 mb-3">
										<div class="row">
											<div class="col-md-8">
												<div class="input-group">
													<label for="" class="d-block">
														<strong>6. Net income from rental and other real
															property</strong>
													</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="column-heading">
													<strong>Debtor 1</strong>
												</div>
											</div>
											<div class="col-md-2">
												<div class="column-heading">
													<strong>Debtor 2</strong>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-8">
										<div class="row">
											<div class="col-md-8">
												<div class="input-group">
													<label for="" class="d-block">
														Gross receipts (before all deductions)
													</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-8">
										<div class="row">
											<div class="col-md-8">
												<div class="input-group">
													<label for="" class="d-block">
														Ordinary and necessary operating expenses
													</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-8">
										<div class="row">
											<div class="col-md-8">
												<div class="input-group">
													<label for="" class="d-block">
														Net monthly income from a business, profession, or farm
													</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Row 7 -->
								<div class="row">
									<div class="col-md-8">
										<div class="input-group">
											<label for="" class="d-block">
												<strong>7. Interest, dividends, and royalties</strong>
											</label>
										</div>
									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Row 8 -->
								<div class="row">
									<div class="col-md-8">
										<div class="input-group">
											<label for="" class="d-block">
												<strong>8. Unemployment compensation</strong>Do not enter the amount
												if
												you contend that the amount received was a benefit
												under the Social Security Act. Instead, list it here:
											</label>
											<input type="text" value="" class="form-control">
										</div>
										<div class="row mt-3 align-items-center">
											<div class="col-md-3">
												<label for="">
													For you
												</label>
											</div>
											<div class="col-md-6">
												<input type="text" value="" class="form-control">
											</div>
											<div class="col-md-3">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row mt-3 align-items-center">
											<div class="col-md-3">
												<label for="">
													For your spouse
												</label>
											</div>
											<div class="col-md-6">
												<input type="text" value="" class="form-control">
											</div>
											<div class="col-md-3">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Row 9 -->
								<div class="row">
									<div class="col-md-8">
										<div class="input-group">
											<label for="" class="d-block">
												<strong>9. Pension or retirement income.</strong>Do not include any
												amount received that was a
												benefit under the Social Security Act. Also, except as stated in the
												next sentence, do
												not include any compensation, pension, pay, annuity, or allowance
												paid
												by the
												United States Government in connection with a disability,
												combat-related
												injury or
												disability, or death of a member of the uniformed services. If you
												received any retired
												pay paid under chapter 61 of title 10, then include that pay only to
												the
												extent that it
												does not exceed the amount of retired pay to which you would
												otherwise
												be entitled if
												retired under any provision of title 10 other than chapter 61 of
												that
												title
											</label>
										</div>
									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Row 10 -->
								<div class="row">
									<div class="col-md-8">
										<div class="input-group">
											<label for="" class="d-block">
												<strong>10. Income from all other sources not listed
													above</strong>e.
												Specify the source and amount. Do
												not include any benefits received under the Social Security Act;
												payments made under
												the Federal law relating to the national emergency declared by the
												President under the
												National Emergencies Act (50 U.S.C. 1601 et seq.) with respect to
												the
												coronavirus
												disease 2019 (COVID-19); payments received as a victim of a war
												crime, a
												crime
												against humanity, or international or domestic terrorism; or
												compensation, pension,
												pay, annuity, or allowance paid by the United States Government in
												connection with a
												disability, combat-related injury or disability, or death of a
												member of
												the uniformed
												services. If necessary, list other sources on a separate page and
												put
												the total below
											</label>
										</div>

									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-8">
										<div class="input-group ">
											<input type="text" value="" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-8">
										<div class="input-group ">
											<input type="text" value="" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Row 11 -->
								<div class="row">
									<div class="col-md-8">
										<div class="input-group">
											<label for="" class="d-block">
												<strong>11. Calculate your total current monthly income.</strong>
												Add
												lines 2 through 10 for each
												column. Then add the total for Column A to the total for Column B.
											</label>
										</div>
									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-4 p-0">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4 p-0">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>

											</div>
											<div class="col-md-4 p-0">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
												<label for="">Total current
													monthly income</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Part 2 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Determine Whether the Means Test Applies to You</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border mb-3">
								<!-- Row 12 -->
								<div class="row">
									<div class="col-md-12">
										<label for="">
											<strong>12. Calculate your current monthly income for the year.
											</strong>Follow these steps:
										</label>
									</div>
									<div class="col-md-10">
										<div class="input-group">
											<label for="">12a. Copy your total current monthly income from line 11
											</label>
											<input type="text" value="" class="form-control">
										</div>
									</div>
									<div class="col-md-2">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-10">
										<div class="input-group">
											<label for="">12b. The result is your annual income for this part of the
												form.
											</label>
											<input type="text" value="" class="form-control">
										</div>
									</div>
									<div class="col-md-2">
										<div class="input-group d-flex ">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">$</span>
											</div>
											<input type="text" value="" class="form-control">
										</div>
									</div>
								</div>

								<!-- Row 13 -->
								<div class="row">
									<div class="col-md-12">
										<label for="">
											<strong>13. Calculate the median family income that applies to you.
											</strong>Follow these steps:
										</label>
									</div>
									<div class="col-md-10">
										<div class="row mb-3">
											<div class="col-md-8">
												<div class="input-group">
													<label for="">Fill in the state in which you live.
													</label>
												</div>
											</div>
											<div class="col-md-4">
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-md-8">
												<div class="input-group">
													<label for="">Fill in the number of people in your household.
													</label>
												</div>
											</div>
											<div class="col-md-4">
												<input type="text" value="" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-md-12 mb-3">
										<div class="row">
											<div class="col-md-6">
												<label for="">Fill in the median family income for your state and
													size
													of household
												</label>
											</div>
											<div class="col-md-4">
												<input type="text" value="" class="form-control">
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<label for=""> To find a list of applicable median income amounts, go online
											using the link specified in the separate
											instructions for this form. This list may also be available at the
											bankruptcy clerk’s office.
										</label>

									</div>

								</div>

								<!-- Row 14 -->
								<div class="row">
									<div class="col-md-12">
										<label for="">
											<strong>14. How do the lines compare?
											</strong>
										</label>
									</div>
									<div class="col-md-12">
										<div class="pl-3">
											<div class="input-group">
												<label for="">14a.
													<input type="checkbox">
													Line 12b is less than or equal to line 13. On the top of page 1,
													check box 1, There is no presumption of abuse.
													Go to Part 3. Do NOT fill out or file Official Form 122A-2
												</label>
											</div>
											<div class="input-group">
												<label for="">14b.
													<input type="checkbox">
													Line 12b is more than line 13. On the top of page 1, check box
													2,
													The presumption of abuse is determined by Form 122A-2.
													Go to Part 3 and fill out Form 122A–2
												</label>
											</div>
										</div>

									</div>

								</div>
							</div>
							<!-- Part 3 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 3</span>
										<h2 class="font-lg-18">Sign Below</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<div class="row">
									<div class="col-md-12">
										<div class="input-group d-inline-block">
											<label for="">
												<strong class="d-block">By signing here, I declare under penalty of
													perjury that the information on this statement and in any
													attachments is true and correct.
												</strong>
											</label>
										</div>
									</div>
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-6">
												<div class="input-group signature-field">
													<p>Signature of Debtor 1</p>
													<span></span>
												</div>
												<div class="input-group">
													<label>Date</label>
													<input type="date" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group signature-field">
													<p>Signature of Debtor 2</p>
													<span></span>
												</div>
												<div class="input-group">
													<label>Date</label>
													<input type="date" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<!-- Official Form 122A─1Supp -->
					<section class="official-form-122a─1supp padd-20" id="official-form-122a─1supp">
						<div class="container">
							<div class="row">
								<div class="col-md-8">
									<div class="section-box">
										<div class="section-header bg-back text-white">
											<p class="font-lg-20">Fill in this information to identify your case</p>
										</div>
										<div class="section-body padd-20">
											<div class="row">
												<div class="col-md-12">
													<label>Debtor 1 </label>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<div class="input-group">
																<label>First Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Middle Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Last Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>

												</div>
												<div class="col-md-12">
													<label class="d-block">Debtor 2 </label>
													<span class="font-lg-14">(Spouse, if filing)</span>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<div class="input-group">
																<label>First Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Middle Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Last Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>

												</div>
												<div class="col-md-12">
													<div class="input-group">
														<label>United States Bankruptcy Court for the</label>
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-12">
													<div class="input-group">
														<label>Case number</label>
														<input type="number" value="" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row padd-20">
								<div class="col-md-12 mb-3">
									<div class="form-title">
										<h4>Official Form 122A─1Supp </h4>
										<h2 class="font-lg-22">Statement of Exemption from Presumption of Abuse
											Under §
											707(b)(2)
										</h2>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-subheading">
										<div class="input-group">
											<strong>
												File this supplement together with Chapter 7 Statement of Your
												Current
												Monthly Income (Official Form 122A-1), if you believe that you are
												exempted from a presumption of abuse. Be as complete and accurate as
												possible. If two married people are filing together, and any of the
												exclusions in this statement applies to only one of you, the other
												person should complete a separate Form 122A-1 if you believe that
												this
												is
												required by 11 U.S.C. § 707(b)(2)(C).
											</strong>
										</div>
									</div>
								</div>
							</div>

							<!-- Part 1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 1</span>
										<h2 class="font-lg-18">Identify the Kind of Debts You Have</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border mb-3">
								<label for="">
									<strong>1. Are your debts primarily consumer debts?</strong> Consumer debts are
									defined in 11
									U.S.C. § 101(8) as “incurred by an individual primarily for a
									personal, family, or household purpose.” Make sure that your answer is
									consistent with the answer you gave at line 16 of the Voluntary Petition for
									Individuals Filing for Bankruptcy (Official Form 101).
								</label>
								<div class="input-group">
									<input type="checkbox">
									<label for="">No. Go to Form 122A-1; on the top of page 1 of that form, check
										box 1,
										There is no presumption of abuse, and sign Part 3. Then
										submit this supplement with the signed Form 122A-1.</label>
								</div>
								<div class="input-group">
									<input type="checkbox">
									<label for="">Yes. Go to Part 2.
									</label>
								</div>
							</div>

							<!-- Part 2 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Determine Whether Military Service Provisions Apply
											to
											You</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border mb-3">
								<!-- Row 2 -->
								<div class="row">
									<div class="col-md-12">
										<label for="">
											<strong>2. Are you a disabled veteran (as defined in 38 U.S.C. §
												3741(1))?
											</strong>
										</label>
										<div class="input-group">
											<input type="checkbox">
											<label for="">No. Go to line 3.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for="">Yes. Did you incur debts mostly while you were on active
												duty
												or while you were performing a homeland defense activity?
												10 U.S.C. § 101(d)(1); 32 U.S.C. § 901(1).
											</label>
										</div>
										<div class="pl-3">
											<div class="input-group">
												<input type="checkbox">
												<label for="">No. Go to line 3</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label for="">Yes. Go to Form 122A-1; on the top of page 1 of that
													form,
													check box 1, There is no presumption of abuse, and sign Part 3.
													Then submit this supplement with the signed Form 122A-1</label>
											</div>
										</div>
									</div>
								</div>
								<!-- Row 3 -->
								<div class="row">
									<div class="col-md-12">
										<label for="">
											<strong>3. Are you or have you been a Reservist or member of the
												National
												Guard?
											</strong>
										</label>

										<div class="input-group">
											<input type="checkbox">
											<label for="">No. Complete Form 122A-1. Do not submit this
												supplement.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for="">Yes. Were you called to active duty or did you perform a
												homeland
												defense activity? 10 U.S.C. § 101(d)(1); 32 U.S.C. § 901(1)
											</label>
										</div>
										<div class="pl-3">
											<div class="input-group">
												<input type="checkbox">
												<label for="">No. Complete Form 122A-1. Do not submit this
													supplement</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label for="">Yes. Check any one of the following categories that
													applies:</label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="pl-3">
												<div class="input-group">
													<input type="checkbox">
													<label for=""><strong>I was called to active duty after
															September
															11, 2001,</strong> for at least
														90 days and remain on active duty.</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label for=""><strong>I was called to active duty after
															September
															11, 2001,</strong>, for at least
														90 days and was released from active duty on</label>
													<input type="text" value="" class="form-control">
													<label for="">which is fewer than 540 days before I file this
														bankruptcy case.</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label for=""><strong>I am performing a homeland defense
															activity
															for at least 90 days</strong></label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label for=""><strong>I performed a homeland defense activity
															for at
															least 90 days</strong>,ending on</label>
													<input type="text" value="" class="form-control">
													<label for="">which is fewer than 540 days
														before I file this bankruptcy case.</label>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="column-heading">
												<p>If you checked one of the categories to the left, go to
													Form 122A-1. On the top of page 1 of Form 122A-1,
													check box 3, The Means Test does not apply now, and
													sign Part 3. Then submit this supplement with the signed
													Form 122A-1. You are not required to fill out the rest of
													Official Form 122A-1 during the exclusion period. The
													exclusion period means the time you are on active duty
													or are performing a homeland defense activity, and for
													540 days afterward. 11 U.S.C. § 707(b)(2)(D)(ii).
													If your exclusion period ends before your case is closed,
													you may have to file an amended form later</p>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</section>

					<!-- Official Form 122A–2-->
					<section class="official-form-122a─2 padd-20" id="official-form-122a─2">
						<div class="container">
							<div class="row">
								<div class="col-md-7">
									<div class="section-box">
										<div class="section-header bg-back text-white">
											<p class="font-lg-20">Fill in this information to identify your case</p>
										</div>
										<div class="section-body padd-20">
											<div class="row">
												<div class="col-md-12">
													<label>Debtor 1 </label>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<div class="input-group">
																<label>First Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Middle Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Last Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>

												</div>
												<div class="col-md-12">
													<label class="d-block">Debtor 2 </label>
													<span class="font-lg-14">(Spouse, if filing)</span>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<div class="input-group">
																<label>First Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Middle Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="input-group">
																<label>Last Name </label>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>

												</div>
												<div class="col-md-12">
													<div class="input-group">
														<label>United States Bankruptcy Court for the</label>
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-12">
													<div class="input-group">
														<label>Case number</label>
														<input type="number" value="" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-5">
									<div class="section-box second-section-box">
										<div class="section-header bg-back text-white">
											<p class="font-lg-20">Check the appropriate box as directed in
												lines 40 or 42:</p>
										</div>
										<div class="section-body padd-20">
											<div class="row">
												<div class="col-md-12">
													<div class="input-group">
														<label>According to the calculations required by
															this Statement: </label>
													</div>
													<div class="input-group">
														<label>1. There is no presumption of abuse </label>
														<input type="checkbox">
													</div>
													<div class="input-group">
														<label>2. There is a presumption of abuse.</label>
														<input type="checkbox">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row padd-20">
								<div class="col-md-12 mb-3">
									<div class="form-title">
										<h4>Official Form 122A–2 </h4>
										<h2 class="font-lg-22">Chapter 7 Means Test Calculation
										</h2>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-subheading">
										<div class="input-group">
											<strong>
												To fill out this form, you will need your completed copy of Chapter
												7
												Statement of Your Current Monthly Income (Official Form 122A-1).
												Be as complete and accurate as possible. If two married people are
												filing together, both are equally responsible for being accurate. If
												more space
												is needed, attach a separate sheet to this form. Include the line
												number
												to which the additional information applies. On the top of any
												additional
												pages, write your name and case number (if known).
											</strong>
										</div>
									</div>
								</div>
							</div>

							<!-- Part 1 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 1</span>
										<h2 class="font-lg-18">Determine Your Adjusted Income</h2>
									</div>
								</div>
							</div>
							<div class="form-border mb-3">
								<div class="row">
									<div class="col-md-12">
										<!-- Row 1 -->
										<div class="row">
											<div class="col-md-8">
												<label for="">
													<strong>1. Copy your total current monthly income. </strong>
													<input type="text" value="" class="form-control">Copy line 11 from
													Official
													Form 122A-1 here
												</label>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<!-- Row 2 -->
										<label for="">
											<strong>2. Did you fill out Column B in Part 1 of Form 122A–1?</strong>
										</label>
										<div class="input-group">
											<input type="checkbox">
											<label for="">No. Fill in $0 for the total on line 3.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for="">Yes. Is your spouse filing with you?.
											</label>
										</div>
										<div class="pl-3">
											<div class="input-group">
												<input type="checkbox">
												<label for="">No. Go to line 3.
												</label>
											</div>
											<div class="input-group">
												<input type="checkbox">
												<label for=""> Yes. Fill in $0 for the total on line 3.
												</label>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<!-- Row 3 -->
										<div class="row">
											<div class="col-md-8">
												<label for="">
													<strong>3. Adjust your current monthly income by subtracting any
														part of
														your spouse’s income not used to pay for the
														household expenses of you or your dependents.</strong>
													Follow
													these
													steps:<br>

													On line 11, Column B of Form 122A–1, was any amount of the
													income
													you
													reported for your spouse NOT
													regularly used for the household expenses of you or your
													dependents?
												</label>
												<div class="input-group">
													<input type="checkbox">
													<label for="">No. Fill in 0 for the total on line 3</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label for="">Yes. Fill in the information below:
													</label>
												</div>
											</div>
										</div>

										<div class="pl-3">
											<div class="row my-3">
												<div class="col-md-8">
													<div class="column-heading">
														<label for="">
															<strong>
																State each purpose for which the income was used
															</strong>For example, the income is used to pay your
															spouse’s tax debt or to support
															people other than you or your dependents </label>
													</div>
												</div>
												<div class="col-md-4">
													<div class="column-heading">
														<label for="">
															<strong>
																Fill in the amount you
																are subtracting from
																your spouse’s income
															</strong> </label>
													</div>
												</div>
											</div>
											<!-- body -->
											<div class="row mb-3">
												<div class="col-md-8">
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div class="input-group d-flex ">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</div>
											<div class="row mb-3">
												<div class="col-md-8">
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div class="input-group d-flex ">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</div>
											<div class="row mb-3">
												<div class="col-md-8">
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div class="input-group d-flex ">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="input-group">
														<label for="">Total</label>
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-2">
													<div class="input-group d-flex ">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div class="input-group d-flex ">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-10">
													<div class="input-group">
														<label for="">Adjust your current monthly
															income.<strong>Subtract the total on line 3 from line
																1.</strong> </label>
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-2">
													<div class="input-group d-flex ">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

							<!-- Part 2 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 2</span>
										<h2 class="font-lg-18">Calculate Your Deductions from Your Income</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border mb-3">
								<!-- Row 2 -->
								<div class="row">
									<div class="col-md-12">
										<label for="">
											<strong>The Internal Revenue Service (IRS) issues National and Local
												Standards for certain expense amounts. Use these amounts to
												answer the questions in lines 6-15. To find the IRS standards, go
												online
												using the link specified in the separate instructions for
												this form. This information may also be available at the bankruptcy
												clerk’s office.
											</strong>
											Deduct the expense amounts set out in lines 6-15 regardless of your
											actual
											expense. In later parts of the form, you will use some of your
											actual expenses if they are higher than the standards. Do not deduct any
											amounts that you subtracted from your spouse’s income in line 3
											and do not deduct any operating expenses that you subtracted from income
											in
											lines 5 and 6 of Form 122A–1.<br><br>

											If your expenses differ from month to month, enter the average expense.
											Whenever this part of the form refers to you, it means both you and your
											spouse if Column B of Form 122A–1 is filled in.<br><br>
										</label>
										<div class="input-group">
											<div class="row">
												<div class="col-md-8">
													<label for="">
														<strong>5. The number of people used in determining your
															deductions from
															income
														</strong>
														Fill in the number of people who could be claimed as
														exemptions
														on your
														federal income tax return,
														plus the number of any additional dependent
													</label>
												</div>
												<div class="col-md-4">
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</div>
										</div>

										<div class="column-heading">
											<label for=""><strong>National Standards</strong>You must use the IRS
												National Standards to answer the questions in lines 6-7</label>
										</div>
										<div class="row">
											<div class="col-md-9">
												<label for="">
													<strong>6. Food, clothing, and other items
													</strong>
													: Using the number of people you entered in line 5 and the IRS
													National Standards, fill
													in the dollar amount for food, clothing, and other items
												</label>
											</div>
											<div class="col-md-3">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-9">
												<label for="">
													<strong>7. Out-of-pocket health care allowance:
													</strong>
													Using the number of people you entered in line 5 and the IRS
													National Standards,
													fill in the dollar amount for out-of-pocket health care. The
													number of people is split into two categoriespeople who are
													under 65 and people who are 65 or olderbecause older people
													have a higher IRS allowance for health care costs. If your
													actual expenses are higher than this IRS amount, you may deduct
													the additional amount on line 22.
												</label>
											</div>
											<div class="col-md-12 my-3">
												<div class="pl-3">
													<div class="row">
														<div class="col-md-6">
															<div class="column-heading  mb-3">
																<strong>People who are under 65 years of age
																</strong>
															</div>
															<div class="row mb-3">
																<div class="col-md-8">
																	<label for="">7a. Out-of-pocket health care
																		allowance
																		per person</label>
																</div>
																<div class="col-md-4">
																	<div class="input-group d-flex ">
																		<div class="input-group-append">
																			<span class="input-group-text"
																				id="basic-addon2">$</span>
																		</div>
																		<input type="text" value="" class="form-control">
																	</div>
																</div>
															</div>
															<div class="row mb-3">
																<div class="col-md-8">
																	<label for="">7b. Number of people who are under
																		65</label>
																</div>
																<div class="col-md-4">
																	<div class="input-group d-flex ">
																		<div class="input-group-append">
																			<span class="input-group-text"
																				id="basic-addon2">$</span>
																		</div>
																		<input type="text" value="" class="form-control">
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-8">
															<div class="row mb-3">
																<div class="col-md-6">
																	<label for="">7c. Subtotal. Multiply line 7a by
																		line 7b</label>
																</div>
																<div class="col-md-3">
																	<div class="input-group d-flex ">
																		<div class="input-group-append">
																			<span class="input-group-text"
																				id="basic-addon2">$</span>
																		</div>
																		<input type="text" value="" class="form-control">
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="input-group d-flex ">
																		<div class="input-group-append">
																			<span class="input-group-text"
																				id="basic-addon2">$</span>
																		</div>
																		<input type="text" value="" class="form-control">
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col-md-6">
															<div class="column-heading  mb-3">
																<strong>People who are 65 years of age or older
																</strong>
															</div>
															<div class="row mb-3">
																<div class="col-md-8">
																	<label for="">7d. Out-of-pocket health care
																		allowance
																		per person</label>
																</div>
																<div class="col-md-4">
																	<div class="input-group d-flex ">
																		<div class="input-group-append">
																			<span class="input-group-text"
																				id="basic-addon2">$</span>
																		</div>
																		<input type="text" value="" class="form-control">
																	</div>
																</div>
															</div>
															<div class="row mb-3">
																<div class="col-md-8">
																	<label for="">7e. Number of people who are under
																		65</label>
																</div>
																<div class="col-md-4">
																	<div class="input-group d-flex ">
																		<div class="input-group-append">
																			<span class="input-group-text"
																				id="basic-addon2">$</span>
																		</div>
																		<input type="text" value="" class="form-control">
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-8">
															<div class="row mb-3">
																<div class="col-md-6">
																	<label for="">7f. Subtotal. Multiply line 7a by
																		line 7b</label>
																</div>
																<div class="col-md-3">
																	<div class="input-group d-flex ">
																		<div class="input-group-append">
																			<span class="input-group-text"
																				id="basic-addon2">$</span>
																		</div>
																		<input type="text" value="" class="form-control">
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="input-group d-flex ">
																		<div class="input-group-append">
																			<span class="input-group-text"
																				id="basic-addon2">$</span>
																		</div>
																		<input type="text" value="" class="form-control">
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-12">
															<div class="row">
																<div class="col-md-6">
																	<label for="">7g. Total. Add lines 7c and
																		7f</label>
																	<input type="text" value="" class="form-control">
																</div>
																<div class="col-md-3">
																	<div class="input-group d-flex ">
																		<div class="input-group-append">
																			<span class="input-group-text"
																				id="basic-addon2">$</span>
																		</div>
																		<input type="text" value="" class="form-control">
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="input-group d-flex ">
																		<div class="input-group-append">
																			<span class="input-group-text"
																				id="basic-addon2">$</span>
																		</div>
																		<input type="text" value="" class="form-control">
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
								<div class="row">
									<div class="col-md-12">
										<div class="column-heading">
											<label for=""><strong>Local Standards </strong>You must use the IRS
												Local
												Standards to answer the questions in lines 8-15.</label>
										</div>
									</div>
									<div class="col-md-12 mt-3">
										<div class="input-group">
											<label for=""><strong>Housing and utilities – Insurance and operating
													expenses
												</strong></label>
										</div>
										<div class="input-group">
											<label for=""><strong>Housing and utilities – Mortgage or rent expenses
												</strong></label>
										</div>
									</div>
									<div class="col-md-12">
										<div class="input-group">
											<label for=""><strong>To answer the questions in lines 8-9, use the U.S.
													Trustee Program chart
												</strong></label>
										</div>
										<div class="input-group">
											<label for="">To find the chart, go online using the link specified in
												the
												separate instructions for this form.
												This chart may also be available at the bankruptcy clerk’s office.
											</label>
										</div>
									</div>
									<!-- 8 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-6">
												<div class="input-group">
													<label for=""><strong>8. Housing and utilities – Insurance and
															operating
															expenses:
														</strong>Using the number of people you entered in line 5,
														fill
														in the
														dollar amount listed for your county for insurance and
														operating
														expenses.</label>

												</div>
											</div>
											<div class="col-md-3">
												<div class="input-group ">
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-3">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<!-- 9 -->
									<div class="col-md-12 mt-3">
										<div class="input-group">
											<label for=""><strong>9. Housing and utilities – Mortgage or rent
													expenses:
												</strong></label>
										</div>
										<div class="pl-3">
											<div class="row">
												<div class="col-md-6">
													<div class="input-group">
														<label for="">9a. Using the number of people you entered in
															line
															5, fill in the dollar amount listed
															for your county for mortgage or rent expenses</label>

													</div>
												</div>
												<div class="col-md-3">
													<div class="input-group ">
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-3">
													<div class="input-group d-flex ">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</div>
											<!-- 9b -->
											<div class="row">
												<div class="col-md-6">
													<div class="input-group">
														<label for="">9b. Total average monthly payment for all
															mortgages and other debts secured by your home.<br><br>
															To calculate the total average monthly payment, add all
															amounts that are
															contractually due to each secured creditor in the 60
															months
															after you file for
															bankruptcy. Then divide by 60.
														</label>
													</div>
													<div class="column-heading my-3">
														<div class="row">
															<div class="col-md-8">
																<strong>Name of the creditor </strong>
															</div>
															<div class="col-md-4">
																<strong>Average monthly
																	payment </strong>
															</div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col-md-8">
															<input type="text" value="" class="form-control">
														</div>
														<div class="col-md-4">
															<div class="input-group d-flex ">
																<div class="input-group-append">
																	<span class="input-group-text"
																		id="basic-addon2">$</span>
																</div>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>
													<div class="row  mb-3">
														<div class="col-md-8">
															<input type="text" value="" class="form-control">
														</div>
														<div class="col-md-4">
															<div class="input-group d-flex ">
																<div class="input-group-append">
																	<span class="input-group-text"
																		id="basic-addon2">$</span>
																</div>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>
													<div class="row  mb-3">
														<div class="col-md-8">
															<input type="text" value="" class="form-control">
														</div>
														<div class="col-md-4">
															<div class="input-group d-flex ">
																<div class="input-group-append">
																	<span class="input-group-text"
																		id="basic-addon2">$</span>
																</div>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="text-right">
														<label for=""> Total average monthly payment</label>
													</div>
												</div>
												<div class="col-md-2">
													<div class="input-group d-flex ">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-2">
													<div class="input-group d-flex ">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-2">
													<div class="input-group">
														<label for=""> Repeat this
															amount on
															line 33a.</label>
													</div>
												</div>
											</div>
											<!-- 9c -->
											<div class="row mt-3">
												<div class="col-md-6">
													<div class="input-group">
														<label for="">9c. Net mortgage or rent expense. <br>

															Subtract line 9b (total average monthly payment) from
															line
															9a (mortgage or
															rent expense). If this amount is less than $0, enter
															$0</label>

													</div>
												</div>
												<div class="col-md-3">
													<div class="input-group ">
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-3">
													<div class="input-group d-flex ">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- 10 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>10. If you claim that the U.S. Trustee
															Program’s division of the IRS Local Standard for housing
															is
															incorrect and affects
															the calculation of your monthly expenses, fill in any
															additional amount you claim.
														</strong></label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group">
													<label for="">Explain Why</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<!-- 11 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>11. Local transportation expenses
														</strong>: Check the number of vehicles for which you claim
														an
														ownership or operating expense.</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label for="">0. Go to line 14.</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label for="">1. Go to line 12.</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label for="">2 or more. Go to line 12.</label>
												</div>
											</div>
										</div>
									</div>
									<!-- 12 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>12. Vehicle operation expense
														</strong>: Using the IRS Local Standards and the number of
														vehicles for which you claim the
														operating expenses, fill in the Operating Costs that apply
														for
														your Census region or metropolitan statistical area.</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>

									<!-- 13 -->
									<div class="col-md-12 mt-3">
										<div class="input-group">
											<label for=""><strong>13. Vehicle ownership or lease expense:
												</strong> Using the IRS Local Standards, calculate the net ownership
												or
												lease expense
												for each vehicle below. You may not claim the expense if you do not
												make
												any loan or lease payments on the vehicle.
												In addition, you may not claim the expense for more than two
												vehicles.</label>
										</div>
										<div class="border-bottm-1">
											<div class="row">
												<div class="col-md-8">
													<div class="column-heading">
														<strong>Vehicle 1</strong>
													</div>
													<div class="input-group">
														<label for="">Describe Vehicle 1:</label>
														<textarea class="form-control" cols="30"
															rows="4"></textarea>
													</div>
												</div>
											</div>

											<div class="pl-3">
												<div class="row">
													<div class="col-md-8">
														<div class="row">
															<div class="col-md-6">
																<div class="input-group">
																	<label for="">13a. Ownership or leasing costs
																		using
																		IRS
																		Local
																		Standard.</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="input-group ">
																	<input type="text" value="" class="form-control">
																</div>
															</div>
															<div class="col-md-3">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">$</span>
																	</div>
																	<input type="text" value="" class="form-control">
																</div>
															</div>
														</div>
													</div>
												</div>

												<!-- 13b -->
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label for="">13b. Average monthly payment for all debts
																secured
																by Vehicle 1.<br><br>
																Do not include costs for leased vehicles. <br><br>
																To calculate the average monthly payment here and on
																line
																13e, add all
																amounts that are contractually due to each secured
																creditor
																in the 60 months
																after you filed for bankruptcy. Then divide by 60
															</label>
														</div>
														<div class="column-heading my-3">
															<div class="row">
																<div class="col-md-8">
																	<strong>Name of each creditor for Vehicle
																		1</strong>
																</div>
																<div class="col-md-4">
																	<strong>Average monthly
																		payment </strong>
																</div>
															</div>
														</div>
														<div class="row mb-3">
															<div class="col-md-8">
																<input type="text" value="" class="form-control">
															</div>
															<div class="col-md-4">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">$</span>
																	</div>
																	<input type="text" value="" class="form-control">
																</div>
															</div>
														</div>
														<div class="row  mb-3">
															<div class="col-md-8">
																<input type="text" value="" class="form-control">
															</div>
															<div class="col-md-4">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">$</span>
																	</div>
																	<input type="text" value="" class="form-control">
																</div>
															</div>
														</div>
														<div class="row  mb-3">
															<div class="col-md-8">
																<input type="text" value="" class="form-control">
															</div>
															<div class="col-md-4">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">$</span>
																	</div>
																	<input type="text" value="" class="form-control">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="text-right">
															<label for=""> Total average monthly payment</label>
														</div>
													</div>
													<div class="col-md-2">
														<div class="input-group d-flex ">
															<div class="input-group-append">
																<span class="input-group-text"
																	id="basic-addon2">$</span>
															</div>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-2">
														<div class="input-group d-flex ">
															<div class="input-group-append">
																<span class="input-group-text"
																	id="basic-addon2">$</span>
															</div>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-2">
														<div class="input-group">
															<label for=""> Repeat this
																amount on
																line 33a.</label>
														</div>
													</div>
												</div>
												<!-- 13c -->
												<div class="row mt-3">
													<div class="col-md-6">
														<div class="input-group">
															<label for="">13c. . Net Vehicle 1 ownership or lease
																expense
																<br>
																Subtract line 13b from line 13a. If this amount is
																less
																than
																$0, enter $0</label>
														</div>
													</div>
													<div class="col-md-3">
														<div class="input-group ">
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-3">
														<div class="input-group d-flex ">
															<div class="input-group-append">
																<span class="input-group-text"
																	id="basic-addon2">$</span>
															</div>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="dupliacte-13">
											<div class="row">
												<div class="col-md-8">
													<div class="column-heading">
														<strong>Vehicle 2</strong>
													</div>
													<div class="input-group">
														<label for="">Describe Vehicle 2:</label>
														<textarea class="form-control" cols="30"
															rows="4"></textarea>
													</div>
												</div>
											</div>

											<div class="pl-3">
												<div class="row">
													<div class="col-md-8">
														<div class="row">
															<div class="col-md-6">
																<div class="input-group">
																	<label for="">13d. Ownership or leasing costs
																		using
																		IRS
																		Local
																		Standard.</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="input-group ">
																	<input type="text" value="" class="form-control">
																</div>
															</div>
															<div class="col-md-3">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">$</span>
																	</div>
																	<input type="text" value="" class="form-control">
																</div>
															</div>
														</div>
													</div>
												</div>

												<!-- 13b -->
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label for="">13e. Average monthly payment for all debts
																secured
																by Vehicle 1.<br><br>
																Do not include costs for leased vehicles. <br><br>
																To calculate the average monthly payment here and on
																line
																13e, add all
																amounts that are contractually due to each secured
																creditor
																in the 60 months
																after you filed for bankruptcy. Then divide by 60
															</label>
														</div>
														<div class="column-heading my-3">
															<div class="row">
																<div class="col-md-8">
																	<strong>Name of each creditor for Vehicle
																		1</strong>
																</div>
																<div class="col-md-4">
																	<strong>Average monthly
																		payment </strong>
																</div>
															</div>
														</div>
														<div class="row mb-3">
															<div class="col-md-8">
																<input type="text" value="" class="form-control">
															</div>
															<div class="col-md-4">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">$</span>
																	</div>
																	<input type="text" value="" class="form-control">
																</div>
															</div>
														</div>
														<div class="row  mb-3">
															<div class="col-md-8">
																<input type="text" value="" class="form-control">
															</div>
															<div class="col-md-4">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">$</span>
																	</div>
																	<input type="text" value="" class="form-control">
																</div>
															</div>
														</div>
														<div class="row  mb-3">
															<div class="col-md-8">
																<input type="text" value="" class="form-control">
															</div>
															<div class="col-md-4">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">$</span>
																	</div>
																	<input type="text" value="" class="form-control">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="text-right">
															<label for=""> Total average monthly payment</label>
														</div>
													</div>
													<div class="col-md-2">
														<div class="input-group d-flex ">
															<div class="input-group-append">
																<span class="input-group-text"
																	id="basic-addon2">$</span>
															</div>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-2">
														<div class="input-group d-flex ">
															<div class="input-group-append">
																<span class="input-group-text"
																	id="basic-addon2">$</span>
															</div>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-2">
														<div class="input-group">
															<label for=""> Repeat this
																amount on
																line 33a.</label>
														</div>
													</div>
												</div>
												<!-- 13c -->
												<div class="row mt-3">
													<div class="col-md-6">
														<div class="input-group">
															<label for="">13f. . Net Vehicle 1 ownership or lease
																expense
																<br>
																Subtract line 13b from line 13a. If this amount is
																less
																than
																$0, enter $0</label>
														</div>
													</div>
													<div class="col-md-3">
														<div class="input-group ">
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-3">
														<div class="input-group d-flex ">
															<div class="input-group-append">
																<span class="input-group-text"
																	id="basic-addon2">$</span>
															</div>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- 14 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>14. Public transportation expense :
														</strong>If you claimed 0 vehicles in line 11, using the IRS
														Local Standards, fill in the
														Public Transportation expense allowance regardless of
														whether
														you use public transportation.</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<!-- 15 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>15. Additional public transportation
															expense:
														</strong>If you claimed 1 or more vehicles in line 11 and if
														you
														claim that you may also
														deduct a public transportation expense, you may fill in what
														you
														believe is the appropriate expense, but you may not claim
														more than the IRS Local Standard for Public
														Transportation</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<!-- 16 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>16. Taxes
														</strong>The total monthly amount that you will actually owe
														for
														federal, state and local taxes, such as income taxes,
														selfemployment taxes, Social Security taxes, and Medicare
														taxes.
														You may include the monthly amount withheld from your
														pay for these taxes. However, if you expect to receive a tax
														refund, you must divide the expected refund by 12 and
														subtract that number from the total monthly amount that is
														withheld to pay for taxes<br></label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<!-- 17 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>17. Involuntary deductions:
														</strong>The total monthly payroll deductions that your job
														requires, such as retirement contributions,
														union dues, and uniform costs.
														Do not include amounts that are not required by your job,
														such
														as voluntary 401(k) contributions or payroll
														savings.</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<!-- 18 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>18. Life insurance
														</strong>The total monthly premiums that you pay for your
														own
														term life insurance. If two married people are filing
														together, include payments that you make for your spouse’s
														term
														life insurance. Do not include premiums for life
														insurance on your dependents, for a non-filing spouse’s life
														insurance, or for any form of life insurance other than
														term.</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<!-- 19 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>19. Court-ordered payments:
														</strong>The total monthly amount that you pay as required
														by
														the order of a court or administrative
														agency, such as spousal or child support payments.<br>
														Do not include payments on past due obligations for spousal
														or
														child support. You will list these obligations in line
														35.</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<!-- 20 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong class="d-block">20. Education: The total
															monthly amount that
															you pay for education that is either required:</strong>
													</label>
													<ul>
														<li>
															as a
															condition for your job, or
														</li>
														<li>
															for your
															physically or mentally challenged dependent child if no
															public
															education is available for similar services.
														</li>
													</ul>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<!-- 21 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>21. Childcare:
														</strong>The total monthly amount that you pay for
														childcare,
														such as babysitting, daycare, nursery, and preschool.
														Do not include payments for any elementary or secondary
														school
														education.</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<!-- 22 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>22. Additional health care expenses,
															excluding
															insurance costs:
														</strong>: The monthly amount that you pay for health care
														that
														is required for the health and welfare of you or your
														dependents
														and that is not reimbursed by insurance or paid by a
														health savings account. Include only the amount that is more
														than the total entered in line 7.
														Payments for health insurance or health savings accounts
														should
														be listed only in line 25.</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<!-- 23 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>22. Optional telephones and telephone
															services
														</strong>: The total monthly amount that you pay for
														telecommunication services for
														you and your dependents, such as pagers, call waiting,
														caller
														identification, special long distance, or business cell
														phone
														service, to the extent necessary for your health and welfare
														or
														that of your dependents or for the production of income, if
														it
														is not reimbursed by your employer.<br>
														Do not include payments for basic home telephone, internet
														and
														cell phone service. Do not include self-employment
														expenses, such as those reported on line 5 of Official Form
														122A-1, or any amount you previously deducted</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<!-- 24 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>24. Add all of the expenses allowed under
															the
															IRS expense allowances
														</strong>:Add lines 6 through 23.
													</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-12 mt-3">
										<div class="row column-heading">
											<div class="col-md-6">
												<div class="input-group">
													<label for=""><strong>Additional Expense Deductions
														</strong>
													</label>
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group ">
													<p>These are additional deductions allowed by the Means
														Test.<br>
														Note: Do not include any expense allowances listed in lines
														6-24
													</p>
												</div>
											</div>
										</div>
									</div>

									<!-- 25 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>25.Health insurance, disability insurance,
															and
															health savings account expenses.
														</strong>The monthly expenses for health
														insurance, disability insurance, and health savings accounts
														that are reasonably necessary for yourself, your spouse, or
														your
														dependents
													</label>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-6">
																<label for="">Health insurance</label>
															</div>
															<div class="col-md-6">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">$</span>
																	</div>
																	<input type="text" value="" class="form-control">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label for="">Disability insurance</label>
															</div>
															<div class="col-md-6">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">$</span>
																	</div>
																	<input type="text" value="" class="form-control">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<label for="">Health savings account</label>
															</div>
															<div class="col-md-6">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">$</span>
																	</div>
																	<input type="text" value="" class="form-control">
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-3">
														<label for="">Total</label>
													</div>
													<div class="col-md-3">
														<div class="input-group d-flex ">
															<div class="input-group-append">
																<span class="input-group-text"
																	id="basic-addon2">$</span>
															</div>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-3">
														<div class="input-group ">
															<label for="">Copy total here</label>
														</div>
													</div>
													<div class="col-md-2">
														<div class="input-group d-flex ">
															<div class="input-group-append">
																<span class="input-group-text"
																	id="basic-addon2">$</span>
															</div>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="row align-items-center">
													<div class="col-md-6">
														<label for="">Do you actually spend this total
															amount?</label>
														<div class="input-group ">
															<input type="checkbox">
															<label for="">No. How much do you actually
																spend?</label>
														</div>
														<div class="input-group ">
															<input type="checkbox">
															<label for="">Yes</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-group d-flex ">
															<div class="input-group-append">
																<span class="input-group-text"
																	id="basic-addon2">$</span>
															</div>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>


											</div>
										</div>
									</div>
									<!-- 26 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>26. Continuing contributions to the care
															of
															household or family members
														</strong>: The actual monthly expenses that you will
														continue to pay for the reasonable and necessary care and
														support of an elderly, chronically ill, or disabled member
														of
														your
														household or member of your immediate family who is unable
														to
														pay for such expenses. These expenses may include
														contributions to an account of a qualified ABLE program. 26
														U.S.C. § 529A(b).
													</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<!-- 27 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>27. Protection against family violence
														</strong>:The reasonably necessary monthly expenses that you
														incur to maintain the safety of
														you and your family under the Family Violence Prevention and
														Services Act or other federal laws that apply.
														By law, the court must keep the nature of these expenses
														confidential.
													</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<!-- 28 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>28. Additional home energy costs.
														</strong>:Your home energy costs are included in your
														insurance and operating expenses on line 8.
														If you believe that you have home energy costs that are more
														than the home energy costs included in expenses on line
														8, then fill in the excess amount of home energy costs.
														You must give your case trustee documentation of your actual
														expenses, and you must show that the additional amount
														claimed is reasonable and necessary.

													</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<!-- 29 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>29. Education expenses for dependent
															children
															who are younger than 18
														</strong>:The monthly expenses (not more than $170.83*
														per child) that you pay for your dependent children who are
														younger than 18 years old to attend a private or public
														elementary or secondary school.<br>
														You must give your case trustee documentation of your actual
														expenses, and you must explain why the amount claimed is
														reasonable and necessary and not already accounted for in
														lines
														6-23.<br>
														* Subject to adjustment on 4/01/22, and every 3 years after
														that
														for cases begun on or after the date of adjustment
													</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<!-- 30 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>30. Additional food and clothing expense
														</strong>The monthly amount by which your actual food and
														clothing expenses are higher
														than the combined food and clothing allowances in the IRS
														National Standards. That amount cannot be more than 5% of
														the
														food and clothing allowances in the IRS National Standards.
														To find a chart showing the maximum additional allowance, go
														online using the link specified in the separate instructions
														for
														this form. This chart may also be available at the
														bankruptcy
														clerk’s office.
														You must show that the additional amount claimed is
														reasonable
														and necessary.
													</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<!-- 31 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>31. Continuing charitable
															contributions.</strong> The
														amount that you will continue to contribute in the form of
														cash or financial
														instruments to a religious or charitable organization. 26
														U.S.C. § 170(c)(1)-(2).
													</label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<!-- 32 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>32. Add all of the additional expense
															deductions.</strong>
													</label>Add lines 25 through 31.
												</div>
											</div>
											<div class="col-md-2">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-12">
												<div class="column-heading">
													<strong>Deductions for Debt Payment</strong>
												</div>
											</div>
										</div>
									</div>
									<!-- 33 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>For debts that are secured by an interest
															in
															property that you own, including home mortgages, vehicle
															loans, and other secured debt, fill in lines 33a through
															33e.</strong>
													</label>To calculate the total average monthly payment, add all
													amounts that are contractually due to each secured
													creditor in the 60 months after you file for bankruptcy. Then
													divide
													by 60
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-10 mb-3">
												<div class="row align-items-center">
													<div class="col-md-8">
														<strong>Mortgages on your home:
														</strong>
													</div>
													<div class="col-md-4">
														<div class="column-heading">
															<strong>Average monthly
																payment</strong>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-10">
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label for="">33a. Copy line 9b here .</label>
														</div>
													</div>
													<div class="col-md-3">
														<div class="input-group ">
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-3">
														<div class="input-group d-flex ">
															<div class="input-group-append">
																<span class="input-group-text"
																	id="basic-addon2">$</span>
															</div>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 my-3">
												<strong>Loans on your first two vehicles:
												</strong>
											</div>
										</div>
										<!-- 33b -->
										<div class="row">
											<div class="col-md-10">
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label for="">33b. Copy line 13b here</label>
														</div>
													</div>
													<div class="col-md-3">
														<div class="input-group ">
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-3">
														<div class="input-group d-flex ">
															<div class="input-group-append">
																<span class="input-group-text"
																	id="basic-addon2">$</span>
															</div>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- 33c -->
										<div class="row">
											<div class="col-md-10">
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label for="">33c. Copy line 13e here</label>
														</div>
													</div>
													<div class="col-md-3">
														<div class="input-group ">
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-3">
														<div class="input-group d-flex ">
															<div class="input-group-append">
																<span class="input-group-text"
																	id="basic-addon2">$</span>
															</div>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- 33d -->
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for="">33d. List other secured debts: </label>
												</div>
											</div>
											<div class="pl-3 mt-3">
												<div class="col-md-10 mb-3">
													<div class="row">
														<div class="col-md-3">
															<div class="column-heading">
																<strong>Name of each creditor for other
																	secured debt</strong>
															</div>
														</div>
														<div class="col-md-3">
															<div class="column-heading">
																<strong>Identify property that
																	secures the debt</strong>
															</div>
														</div>
														<div class="col-md-3">
															<div class="column-heading">
																<strong>Does payment
																	include taxes
																	or insurance?</strong>
															</div>
														</div>
														<div class="col-md-3"></div>
													</div>
												</div>
												<!-- body 33d 1 -->
												<div class="col-md-10 mb-3">
													<div class="row">
														<div class="col-md-3">
															<div class="input-group">
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-3">
															<div class="input-group">
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-3">
															<div class="input-group">
																<input type="checkbox">
																<label for="">No</label>
															</div>
															<div class="input-group">
																<input type="checkbox">
																<label for="">Yes</label>
															</div>
														</div>
														<div class="col-md-3">
															<div class="input-group d-flex ">
																<div class="input-group-append">
																	<span class="input-group-text"
																		id="basic-addon2">$</span>
																</div>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>
												</div>
												<!-- body 33d 2 -->
												<div class="col-md-10 mb-3">
													<div class="row">
														<div class="col-md-3">
															<div class="input-group">
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-3">
															<div class="input-group">
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-3">
															<div class="input-group">
																<input type="checkbox">
																<label for="">No</label>
															</div>
															<div class="input-group">
																<input type="checkbox">
																<label for="">Yes</label>
															</div>
														</div>
														<div class="col-md-3">
															<div class="input-group d-flex ">
																<div class="input-group-append">
																	<span class="input-group-text"
																		id="basic-addon2">$</span>
																</div>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>
												</div>
												<!-- body 33d 3 -->
												<div class="col-md-10 mb-3">
													<div class="row">
														<div class="col-md-3">
															<div class="input-group">
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-3">
															<div class="input-group">
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-3">
															<div class="input-group">
																<input type="checkbox">
																<label for="">No</label>
															</div>
															<div class="input-group">
																<input type="checkbox">
																<label for="">Yes</label>
															</div>
														</div>
														<div class="col-md-3">
															<div class="input-group d-flex ">
																<div class="input-group-append">
																	<span class="input-group-text"
																		id="basic-addon2">$</span>
																</div>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- 33e -->
										<div class="row">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-6">
														<div class="input-group">
															<label for="">33e. Total average monthly payment. Add
																lines
																33a through 33d</label>
														</div>
													</div>
													<div class="col-md-2">
														<div class="input-group ">
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-2">
														<div class="input-group d-flex ">
															<div class="input-group-append">
																<span class="input-group-text"
																	id="basic-addon2">$</span>
															</div>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-2">
														<div class="input-group d-flex ">
															<div class="input-group-append">
																<span class="input-group-text"
																	id="basic-addon2">$</span>
															</div>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- 34 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-8">
												<div class="input-group">
													<label for=""><strong>34. Are any debts that you listed in line
															33
															secured by your primary residence, a vehicle,
															or other property necessary for your support or the
															support
															of your dependents?
														</strong>
													</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>No. Go to line 35.</label>
												</div>
												<div class="input-group">
													<input type="checkbox">
													<label>Yes. State any amount that you must pay to a creditor, in
														addition to the payments
														listed in line 33, to keep possession of your property
														(called
														the cure amount).
														Next, divide by 60 and fill in the information
														below.</label>
												</div>
												<div class="row pl-3">
													<div class="col-md-12 mb-3">
														<div class="row">
															<div class="col-md-3">
																<div class="column-heading">
																	<strong>Name of the creditor</strong>
																</div>
															</div>
															<div class="col-md-3">
																<div class="column-heading">
																	<strong>Identify property that
																		secures the debt</strong>
																</div>
															</div>
															<div class="col-md-2">
																<div class="column-heading">
																	<strong>Total cure
																		amount </strong>
																</div>
															</div>
															<div class="col-md-2"></div>
															<div class="col-md-2">
																<div class="column-heading">
																	<strong>Monthly cure
																		amount </strong>
																</div>
															</div>
														</div>
													</div>
													<!-- body 34 1 -->
													<div class="col-md-12 mb-3">
														<div class="row">
															<div class="col-md-3">
																<div class="input-group">
																	<input type="text" value="" class="form-control">
																</div>
															</div>
															<div class="col-md-3">
																<div class="input-group">
																	<input type="text" value="" class="form-control">
																</div>
															</div>
															<div class="col-md-2">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">$</span>
																	</div>
																	<input type="text" value="" class="form-control">
																</div>
															</div>
															<div class="col-md-2">
																<strong>÷ 60 =</strong>
															</div>
															<div class="col-md-2">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">$</span>
																	</div>
																	<input type="text" value="" class="form-control">
																</div>
															</div>
														</div>
													</div>

													<!-- body 34 2 -->
													<div class="col-md-12 mb-3">
														<div class="row">
															<div class="col-md-3">
																<div class="input-group">
																	<input type="text" value="" class="form-control">
																</div>
															</div>
															<div class="col-md-3">
																<div class="input-group">
																	<input type="text" value="" class="form-control">
																</div>
															</div>
															<div class="col-md-2">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">$</span>
																	</div>
																	<input type="text" value="" class="form-control">
																</div>
															</div>
															<div class="col-md-2">
																<strong>÷ 60 =</strong>
															</div>
															<div class="col-md-2">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">$</span>
																	</div>
																	<input type="text" value="" class="form-control">
																</div>
															</div>
														</div>
													</div>

													<!-- body 34 3 -->
													<div class="col-md-12 mb-3">
														<div class="row">
															<div class="col-md-3">
																<div class="input-group">
																	<input type="text" value="" class="form-control">
																</div>
															</div>
															<div class="col-md-3">
																<div class="input-group">
																	<input type="text" value="" class="form-control">
																</div>
															</div>
															<div class="col-md-2">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">$</span>
																	</div>
																	<input type="text" value="" class="form-control">
																</div>
															</div>
															<div class="col-md-2">
																<strong>÷ 60 =</strong>
															</div>
															<div class="col-md-2">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">$</span>
																	</div>
																	<input type="text" value="" class="form-control">
																</div>
															</div>
														</div>
													</div>

												</div>
											</div>
											<!-- body 34 3 -->
											<div class="col-md-12 mb-3">
												<div class="row">
													<div class="col-md-2">

													</div>
													<div class="col-md-2">

													</div>
													<div class="col-md-2">

													</div>
													<div class="col-md-2">
														<strong>Total </strong>
													</div>
													<div class="col-md-2">
														<div class="input-group d-flex ">
															<div class="input-group-append">
																<span class="input-group-text"
																	id="basic-addon2">$</span>
															</div>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-2">
														<div class="input-group d-flex ">
															<div class="input-group-append">
																<span class="input-group-text"
																	id="basic-addon2">$</span>
															</div>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- 35 -->
									<div class="col-md-12 mt-3">
										<div class="input-group">
											<label for=""><strong>35. Do you owe any priority claims such as a
													priority
													tax, child support, or alimony ─
													that are past due as of the filing date of your bankruptcy case?
													11
													U.S.C. § 507.
												</strong>
											</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>No. Go to line 35.</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Yes. Fill in the total amount of all of these priority claims. Do
												not
												include current or
												ongoing priority claims, such as those you listed in line 19.
											</label>
										</div>
										<div class="pl-3">
											<div class="row align-items-center">
												<div class="col-md-4">
													<label>Total amount of all past-due priority claims</label>
												</div>
												<div class="col-md-2">
													<div class="input-group">
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-2">
													<div class="input-group d-flex ">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-2">
													<strong>÷ 60 =</strong>
												</div>
												<div class="col-md-2">
													<div class="input-group d-flex ">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- 36 -->
									<div class="col-md-12 mt-3">
										<div class="input-group">
											<label for=""><strong>36. Are you eligible to file a case under Chapter
													13?
													11 U.S.C. § 109(e).
												</strong><br>
												For more information, go online using the link for Bankruptcy Basics
												specified in the separate
												instructions for this form. Bankruptcy Basics may also be available
												at
												the bankruptcy clerk’s office.
											</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>No. Go to line 37</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label>Yes. Fill in the following information</label>
										</div>
										<div class="pl-3">
											<div class="row align-items-center">
												<div class="col-md-8">
													<label>Projected monthly plan payment if you were filing under
														Chapter 13</label>
												</div>
												<div class="col-md-2">
													<div class="input-group d-flex ">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-md-8">
													<label>Current multiplier for your district as stated on the
														list
														issued by the
														Administrative Office of the United States Courts (for
														districts
														in Alabama and
														North Carolina) or by the Executive Office for United States
														Trustees (for all
														other districts).</label>
												</div>
												<div class="col-md-2">
													<div class="input-group d-flex ">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">X</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-md-8">
													<label>To find a list of district multipliers that includes your
														district, go online using the
														link specified in the separate instructions for this form.
														This
														list may also be
														available at the bankruptcy clerk’s office. </label>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-md-8">
													<label>Average monthly administrative expense if you were filing
														under Chapter 13</label>
												</div>
												<div class="col-md-2">
													<div class="input-group d-flex ">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">X</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-2">
													<div class="input-group d-flex ">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">X</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- 37 -->
									<div class="col-md-12 mt-3">
										<div class="input-group">
											<label for=""><strong>37. Add all of the deductions for debt payment
												</strong>
											</label>
										</div>
										<div class="pl-3">
											<div class="row align-items-center">
												<div class="col-md-6">
													<label>Add lines 33e through 36</label>
												</div>
												<div class="col-md-4">
													<input type="text" value="" class="form-control">
												</div>
												<div class="col-md-2">
													<div class="input-group d-flex ">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>


									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-12">
												<div class="column-heading">
													<strong>Total Deductions from Income</strong>
												</div>
											</div>
										</div>
									</div>
									<!-- 38 -->
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
													<label for=""><strong>38. Add all of the allowed deductions.
														</strong>
													</label>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="row align-items-center">
															<div class="col-md-8">
																<label for="">Copy line 24, All of the expenses
																	allowed
																	under IRS expense allowances</label>
																<input type="text" value="" class="form-control">
															</div>
															<div class="col-md-4">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">$</span>
																	</div>
																	<input type="text" value="" class="form-control">
																</div>
															</div>
														</div>
														<!-- 2 -->
														<div class="row align-items-center">
															<div class="col-md-8">
																<label for="">Copy line 32, All of the additional
																	expense deductions .</label>
																<input type="text" value="" class="form-control">
															</div>
															<div class="col-md-4">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">$</span>
																	</div>
																	<input type="text" value="" class="form-control">
																</div>
															</div>
														</div>
														<!-- 3 -->
														<div class="row align-items-center">
															<div class="col-md-8">
																<label for="">Copy line 37, All of the deductions
																	for
																	debt payment</label>
																<input type="text" value="" class="form-control">
															</div>
															<div class="col-md-4">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">$</span>
																	</div>
																	<input type="text" value="" class="form-control">
																</div>
															</div>
														</div>

													</div>
													<!-- 3 -->

												</div>
											</div>
											<div class="col-md-12">
												<div class="row align-items-center">
													<div class="col-md-6 text-right">
														<label for="">Total deductions</label>
													</div>
													<div class="col-md-2">
														<div class="input-group d-flex ">
															<div class="input-group-append">
																<span class="input-group-text"
																	id="basic-addon2">$</span>
															</div>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-2">
														<div class="input-group d-flex ">
															<label for="">Copy total here</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-2">
														<div class="input-group d-flex ">
															<div class="input-group-append">
																<span class="input-group-text"
																	id="basic-addon2">$</span>
															</div>
															<input type="text" value="" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
							<!-- Part 3 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 3</span>
										<h2 class="font-lg-18">Determine Whether There Is a Presumption of Abuse
										</h2>
									</div>
								</div>
							</div>
							<div class="form-border mb-3">
								<!-- 39 -->
								<div class="col-md-12 mt-3">
									<div class="row">
										<div class="col-md-10">
											<div class="input-group">
												<label for=""><strong>39. Calculate monthly disposable income for 60
														months
													</strong>
												</label>
											</div>
											<div class="row">
												<div class="col-md-8">
													<div class="row align-items-center">
														<div class="col-md-8">
															<label for="">39a. Copy line 4, adjusted current monthly
																income</label>
															<input type="text" value="" class="form-control">
														</div>
														<div class="col-md-4">
															<div class="input-group d-flex ">
																<div class="input-group-append">
																	<span class="input-group-text"
																		id="basic-addon2">$</span>
																</div>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>
													<!-- 2 -->
													<div class="row align-items-center">
														<div class="col-md-8">
															<label for="">39b. Copy line 38, Total
																deductions</label>
															<input type="text" value="" class="form-control">
														</div>
														<div class="col-md-4">
															<div class="input-group d-flex ">
																<div class="input-group-append">
																	<span class="input-group-text"
																		id="basic-addon2">$</span>
																</div>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>
													<!-- 3 -->
													<div class="row align-items-center">
														<div class="col-md-8">
															<label for="">39c. Monthly disposable income. 11 U.S.C.
																§
																707(b)(2).
																Subtract line 39b from line 39a.</label>
															<input type="text" value="" class="form-control">
														</div>
														<div class="col-md-2">
															<div class="input-group d-flex ">
																<div class="input-group-append">
																	<span class="input-group-text"
																		id="basic-addon2">$</span>
																</div>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-2">
															<div class="input-group d-flex ">
																<div class="input-group-append">
																	<span class="input-group-text"
																		id="basic-addon2">$</span>
																</div>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>
													<div class="pl-3">
														<div class="row align-items-center">
															<div class="col-md-8">
																<label for="">For the next 60 months (5
																	years).</label>
																<input type="text" value="" class="form-control">
															</div>
															<div class="col-md-4">
																<div class="input-group d-flex ">
																	<div class="input-group-append">
																		<span class="input-group-text"
																			id="basic-addon2">x 60</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- 4 -->
													<div class="row align-items-center">
														<div class="col-md-8">
															<label for="">39d. Total. Multiply line 39c by
																60</label>
															<input type="text" value="" class="form-control">
														</div>
														<div class="col-md-2">
															<div class="input-group d-flex ">
																<div class="input-group-append">
																	<span class="input-group-text"
																		id="basic-addon2">$</span>
																</div>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-2">
															<div class="input-group d-flex ">
																<div class="input-group-append">
																	<span class="input-group-text"
																		id="basic-addon2">$</span>
																</div>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>
												</div>
												<!-- 3 -->

											</div>
										</div>
										<div class="col-md-12">
											<div class="row align-items-center">
												<div class="col-md-6 text-right">
													<label for="">Total deductions</label>
												</div>
												<div class="col-md-2">
													<div class="input-group d-flex ">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-2">
													<div class="input-group d-flex ">
														<label for="">Copy total here</label>
														<input type="text" value="" class="form-control">
													</div>
												</div>
												<div class="col-md-2">
													<div class="input-group d-flex ">
														<div class="input-group-append">
															<span class="input-group-text"
																id="basic-addon2">$</span>
														</div>
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- 40 -->
								<div class="col-md-12 mt-3">
									<div class="input-group">
										<label for=""><strong>40. Find out whether there is a presumption of
												abuse.
											</strong>Check the box that applies:
										</label>
									</div>
									<div class="input-group">
										<input type="checkbox">
										<label for="">
											<strong>The line 39d is less than $8,175*</strong> On
											the top of page 1 of this form, check box 1, There is no
											presumption of abuse. Go to
											Part 5.
										</label>
									</div>
									<div class="input-group">
										<input type="checkbox">
										<label for="">
											<strong>The line 39d is more than $13,650</strong> . On the top of
											page 1 of this form, check box 2, There is a presumption of abuse.
											You
											may fill out Part 4 if you claim special circumstances. Then go to
											Part 5.

										</label>
									</div>
									<div class="input-group">
										<input type="checkbox">
										<label for="">
											<strong>The line 39d is at least $8,175*, but not more than
												$13,650*</strong> . Go to line 41.
											* Subject to adjustment on 4/01/22, and every 3 years after that for
											cases filed on or after the date of adjustment.
										</label>
									</div>
								</div>

								<!-- 41 -->
								<div class="col-md-12 mt-3">
									<div class="row">
										<div class="col-md-10">
											<div class="input-group">
												<label for=""><strong>39. Calculate monthly disposable income for 60
														months
													</strong>
												</label>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="row align-items-center">
														<div class="col-md-8">
															<label for=""><strong>41. 41a. Fill in the amount of
																	your
																	total nonpriority unsecured debt.</strong>If you
																filled out A
																Summary of Your Assets and Liabilities and Certain
																Statistical Information Schedules
																(Official Form 106Sum), you may refer to line 3b on
																that
																form</label>
															<input type="text" value="" class="form-control">
														</div>
														<div class="col-md-2">
															<div class="input-group d-flex ">
																<div class="input-group-append">
																	<span class="input-group-text"
																		id="basic-addon2">$</span>
																</div>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>
													<!-- 2 -->
													<div class="row align-items-center">
														<div class="col-md-8">
															<label for=""><strong>41b. 25% of your total nonpriority
																	unsecured debt</strong>. 11 U.S.C. §
																707(b)(2)(A)(i)(I).
																Multiply line 41a by 0.25. </label>
															<input type="text" value="" class="form-control">
														</div>
														<div class="col-md-2">
															<div class="input-group d-flex ">
																<div class="input-group-append">
																	<span class="input-group-text"
																		id="basic-addon2">$</span>
																</div>
																<input type="text" value="" class="form-control">
															</div>
														</div>
														<div class="col-md-2">
															<div class="input-group d-flex ">
																<div class="input-group-append">
																	<span class="input-group-text"
																		id="basic-addon2">$</span>
																</div>
																<input type="text" value="" class="form-control">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>

								<!-- 42 -->
								<div class="col-md-12 mt-3">
									<div class="input-group">
										<label for=""><strong>40. Find out whether there is a presumption of
												abuse.
											</strong>Check the box that applies:
										</label>
									</div>
									<div class="input-group">
										<input type="checkbox">
										<label for="">
											<strong>Determine whether the income you have left over after
												subtracting
												all allowed deductions
												is enough to pay 25% of your unsecured, nonpriority debt.</strong>
											Check
											the box that applies:
										</label>
									</div>
									<div class="input-group">
										<input type="checkbox">
										<label for="">
											<strong>Line 39d is less than line 41b</strong> On the top of page 1 of
											this
											form, check box 1, There is no presumption of abuse.
											Go to Part 5.

										</label>
									</div>
									<div class="input-group">
										<input type="checkbox">
										<label for="">
											<strong>Line 39d is equal to or more than line 41b</strong> On the top
											of
											page 1 of this form, check box 2, There is a presumption
											of abuse. You may fill out Part 4 if you claim special circumstances.
											Then
											go to Part 5
										</label>
									</div>
								</div>
							</div>



							<!-- Part 4 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 4</span>
										<h2 class="font-lg-18">Give Details About Special Circumstances </h2>
									</div>
								</div>
							</div>
							<div class="form-border mb-3">
								<!-- 42 -->
								<div class="col-md-12 mt-3">
									<div class="input-group">
										<label for=""><strong>43. Do you have any special circumstances that justify
												additional expenses or adjustments of current monthly income for
												which
												there is no
												reasonable alternative?
											</strong> 11 U.S.C. § 707(b)(2)(B).
										</label>
									</div>
									<div class="input-group">
										<input type="checkbox">
										<label for="">
											<strong>No. Go to Part 5.</strong>
										</label>
									</div>
									<div class="input-group">
										<input type="checkbox">
										<label for="">
											Yes. Fill in the following information. All figures should reflect your
											average monthly expense or income adjustment
											for each item. You may include expenses you listed in line 25.

										</label>
									</div>
									<div class="input-group">
										<label for="">
											You must give a detailed explanation of the special circumstances that
											make
											the expenses or income
											adjustments necessary and reasonable. You must also give your case
											trustee
											documentation of your actual
											expenses or income adjustments.
										</label>
									</div>
									<div class="pl-3">
										<div class="row my-3">
											<div class="col-md-8">
												<div class="column-heading">
													<strong>Give a detailed explanation of the special
														circumstances</strong>
												</div>
											</div>
											<div class="col-md-4">
												<div class="column-heading">
													<strong>Average monthly expense
														or income adjustment</strong>
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-md-8">
												<div class="input-group">
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-md-8">
												<div class="input-group">
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-md-8">
												<div class="input-group">
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-md-8">
												<div class="input-group">
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group d-flex ">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">$</span>
													</div>
													<input type="text" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
							<!-- Part 3 -->
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="part-form-title mb-3">
										<span>Part 5</span>
										<h2 class="font-lg-18">Sign Below</h2>
									</div>
								</div>
							</div>
							<!-- Row 1 -->
							<div class="form-border">
								<div class="row">
									<div class="col-md-12">
										<div class="input-group d-inline-block">
											<label for="">
												<strong class="d-block">By signing here, I declare under penalty of
													perjury that the information on this statement and in any
													attachments is true and correct
												</strong>
											</label>
										</div>
									</div>
									<div class="col-md-12 mt-3">
										<div class="row">
											<div class="col-md-6">
												<div class="input-group signature-field">
													<p>Signature of Debtor 1</p>
													<span></span>
												</div>
												<div class="input-group">
													<label>Date</label>
													<input type="date" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group signature-field">
													<p>Signature of Debtor 2</p>
													<span></span>
												</div>
												<div class="input-group">
													<label>Date</label>
													<input type="date" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="attorney-box my-3">
								<div class="row">
									<div class="col-md-6">
										<label for="">Attorney or Party Name, Address, Telephone & FAX
											Nos., State Bar No. & Email Address</label>
										<textarea name="" id="" cols="30" rows="8" class="form-control"></textarea>
										<div class="input-group">
											<input type="checkbox">
											<label for="">Debtor(s) appearing without attorney</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for="">Attorney for Debtor</label>
										</div>
									</div>
									<div class="col-md-6">
										<label for="">FOR COURT USE ONLY</label>
									</div>
									<div class="col-md-12">
										<h3 class="text-center padd-10">UNITED STATES BANKRUPTCY COURT<br>
											CENTRAL DISTRICT OF CALIFORNIA <select name="" id="">
												<option value="1">1</option>
												<option value="1">2</option>
											</select></h3>
									</div>
									<div class="col-md-6">
										<label for="">In re:</label>
										<textarea name="" id="" cols="30" rows="8" class="form-control"></textarea>
										<div class="input-group text-right">
											<label for="">Debtor(s)</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-4">
												<label for="">FOR COURT USE ONLY</label>
											</div>
											<div class="col-md-8">
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<label for="">CHAPTER</label>
											</div>
											<div class="col-md-8">
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 border-none ">
												<div class="verification-master text-center">
													<h3>
														VERIFICATION OF MASTER
														MAILING LIST OF CREDITORS
														[LBR 1007-1(a)]
													</h3>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label class="font-lg-18">Pursuant to LBR 1007-1(a), the Debtor, or the Debtor’s
										attorney if
										applicable, certifies under
										penalty of perjury that the master mailing list of creditors filed in this
										bankruptcy case, consisting of
										___ sheet(s) is complete, correct, and consistent with the Debtor’s
										schedules and I/we assume all
										responsibility for errors and omissions. </label>
								</div>
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-12 mt-3">
											<div class="row align-items-center">
												<div class="col-md-6">
													<div class="input-group">
														<label>Date</label>
														<input type="date" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-group signature-field mb-3">
														<span class="pb-3"></span>
														<p>Signature of Debtor 1</p>
													</div>

												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-md-6">
													<div class="input-group">
														<label>Date</label>
														<input type="date" class="form-control">
													</div>

												</div>
												<div class="col-md-6">
													<div class="input-group signature-field mb-3">
														<span class="pb-3"></span>
														<p>Signature of Debtor 2 (joint debtor) (if applicable)</p>
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-md-6">
													<div class="input-group">
														<label>Date</label>
														<input type="date" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-group signature-field mb-3">
														<span class="pb-3"></span>
														<p>Signature of Attorney for Debtor (if applicable)</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>




							<div class="attorney-box my-3">
								<div class="row">
									<div class="col-md-6">
										<label for="">Attorney or Party Name, Address, Telephone & FAX
											Nos., State Bar No. & Email Address</label>
										<textarea name="" id="" cols="30" rows="8" class="form-control"></textarea>
										<div class="input-group">
											<input type="checkbox">
											<label for="">Debtor(s) appearing without attorney</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for="">Attorney for Debtor</label>
										</div>
									</div>
									<div class="col-md-6">
										<label for="">CASE NO</label>
									</div>
									<div class="col-md-12">
										<h3 class="text-center padd-10">UNITED STATES BANKRUPTCY COURT<br>
											CENTRAL DISTRICT OF CALIFORNIA <select name="" id="">
												<option value="1">1</option>
												<option value="1">2</option>
											</select></h3>
									</div>
									<div class="col-md-6">
										<label for="">In re:</label>
										<textarea name="" id="" cols="30" rows="8" class="form-control"></textarea>
										<div class="input-group text-right">
											<label for="">Debtor(s)</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-4">
												<label for="">CASE NO</label>
											</div>
											<div class="col-md-8">
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<label for="">CHAPTER</label>
											</div>
											<div class="col-md-8">
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 border-none ">
												<div class="verification-master text-center">
													<h3>
														DECLARATION BY DEBTOR(S)
														AS TO WHETHER INCOME WAS RECEIVED
														FROM AN EMPLOYER WITHIN 60 DAYS OF
														THE PETITION DATE
													</h3>
													<p>[11 U.S.C. § 521(a)(1)(B)(iv)]</p>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label class="font-lg-18">Debtor(s) provides the following declaration(s) as to
										whether income was received from an employer within 60 days of the
										Debtor(s) filing this bankruptcy case (Petition Date), as required by 11
										U.S.C.
										§ 521(a)(1)(B)(iv):
									</label>
								</div>
								<div class="col-md-12 mb-3">
									<div class="form-title">
										<h4>Declaration of Debtor 1 </h4>
									</div>
								</div>
								<div class="col-md-12">
									<div class="input-group">
										<input type="checkbox">
										<label for="">1. I am Debtor 1 in this case, and I declare under penalty of
											perjury that the following information is true and correct:
										</label>
									</div>
									<div class="pl-3">
										<div class="input-group">
											<label for="" class="mb-3 d-block"><strong>During the 60-day period
													before
													the Petition Date
												</strong>(Check only ONE box below):</label>
											<input type="checkbox">
											<label for=""><strong>I was paid by an employer.</strong> . Attached are
												copies of all statements of earnings, pay stubs, or other proof of
												employment income I received from my employer during this 60-day
												period.
												(If the Debtor’s social security
												number or bank account is on a pay stub or other proof of income,
												the
												Debtor must cross out (redact) the
												number(s) before filing this declaration.)
											</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for=""><strong>I was paid by an employer.</strong>because I was
												either self-employed only, or not employed
											</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="input-group">
											<label>Date</label>
											<input type="date" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="input-group signature-field">
											<span class="pb-3"></span>
											<p>Printed name of Debtor 1</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="input-group signature-field">
											<span class="pb-3"></span>
											<p>Signature of Debtor 1</p>
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-title">
										<h4>Declaration of Debtor 2 (Joint Debtor) (if applicable) </h4>
									</div>
								</div>
								<div class="col-md-12">
									<div class="input-group">
										<input type="checkbox">
										<label for="">1. I am Debtor 2 in this case, and I declare under penalty of
											perjury that the following information is true and correct:
										</label>
									</div>
									<div class="pl-3">
										<div class="input-group">
											<label for="" class="mb-3 d-block"><strong>During the 60-day period
													before
													the Petition Date
												</strong>(Check only ONE box below):</label>
											<input type="checkbox">
											<label for=""><strong>I was paid by an employer.</strong> . Attached are
												copies of all statements of earnings, pay stubs, or other proof of
												employment income I received from my employer during this 60-day
												period.
												(If the Debtor’s social security
												number or bank account is on a pay stub or other proof of income,
												the
												Debtor must cross out (redact) the
												number(s) before filing this declaration.)
											</label>
										</div>
										<div class="input-group">
											<input type="checkbox">
											<label for=""><strong>I was paid by an employer.</strong>because I was
												either self-employed only, or not employed
											</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="input-group">
											<label>Date</label>
											<input type="date" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="input-group signature-field">
											<span class="pb-3"></span>
											<p>Printed name of Debtor 1</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="input-group signature-field">
											<span class="pb-3"></span>
											<p>Signature of Debtor 1</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
