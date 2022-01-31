<style>
 .pdf-download img {
    width: 90px;
    display: block;
    margin: 0 auto;
}


 </style>
<div class="scan-os cstm-id">
	<a class="btn shadow-2 mb-4 download-form" data-toggle="modal" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video" data-video="https://www.youtube.com/embed/8-kOvjekt5I" data-video2="https://www.youtube.com/embed/GU0D3qcEDt4">
		<img src="{{url('assets/images/video-play.jpg')}}" style="height: 36px;display: block;margin: 1px auto;">
		Click for Step by Step video 
	</a>
</div>
 <div class="auth-wrapper1 debts-form-main">
 <?php
 // dump($debts);
 ?>
        <div class="container">
            <div class="debts-form pt-5">
			<form name="client_debts_step2" id="client_debts_step2" action="{{route('client_debts_step2')}}" method="post">
					@csrf
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-main-title text-c-blue f-w-800">Debts</h3>

                        <p class="pt-3">You can either list out your debts and collection accounts in the table below or
                            you can upload your current credit reports for free

                            <br>
                            <br>
                            To get your credit report click <a href="https://www.annualcreditreport.com//index.action" target="_blank">https://www.annualcreditreport.com//index.action</a>
                            <br>
                            <br>
                            Follow these simple instructions and upload 2 of the three reports to:

                        </p>

                    </div>

                    <div class="col-md-4 my-3">
                        <div class="pdf-download">
                            <a href="#" class="d-block" onclick="both_upload_modal('Transunion');">							
                                <img src="{{url('assets/images/business-credit-report.png')}}" download="" class="img-fluid d-block">
                                <h4 class="pt-3 text-center">Transunion</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 my-3">
                        <div class="pdf-download">
                            <a href="#" class="d-block" onclick="both_upload_modal('Experian');">
                                <img src="{{url('assets/images/business-credit-report.png')}}" download="" class="img-fluid d-block">
                                <h4 class="pt-3 text-center">Experian</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 my-3">
                        <div class="pdf-download">
                            <a href="#" class="d-block" onclick="both_upload_modal('Equifax');">
                                <img src="{{url('assets/images/business-credit-report.png')}}" download="" class="img-fluid d-block">
                                <h4 class="pt-3 text-center">Equifax</h4>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-2 pt-2">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="checkinputdebt" name="checkinputdebt" <?php echo Helper::validate_key_toggle('checkinputdebt',$debts,1);?>>
                            <label class="form-check-label font-weight-bold" for="flexCheckDefault">
                                <h5><strong>OR Input your debts below:</strong></h5>
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="second_step_debt <?php echo Helper::key_hide_show_v('checkinputdebt',$debts);?>" id="second_step_debt_div">
               
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label> Any credit card, collection or any other type of unsecured debts: </label>
							<?php
							$cards_collections=['1'=>"Choose Debt",'2'=>"Credit Card Debt (Such as Visa, Mastercard, American Express, etc.)",'3'=>"Collection, Past Due, and/or Charged Off Account",'4'=>"Other Debt (Any type of unsecured debt not already listed)",'5'=>"Student Loan",'6'=>"Law Suit (Pending or concluded as judgment)",'7'=>"Cash Advances" ,];
							?>
                            <select class="form-control required" id="type_of_debt" name="cards_collections">
							<?php foreach($cards_collections as $key=>$val){?>
                                <option value="{{$key}}" <?php echo Helper::validate_key_option('cards_collections',$debts,$key);?>>{{$val}}</option>                               
							<?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
						<div class="form-group">
							<label> Creditor Information (Name &amp; Address from Statement)</label>
							<input type="text" class="form-control required" name="creditor_name" placeholder="Creditor Name" value="<?php echo Helper::validate_key_value('creditor_name',$debts);?>">
						</div>
                        <div class="form-group ">
                            <label>
                                Street Address
                            </label>
                            <input type="text" name="creditor_information" class="form-control  required" placeholder="Street Address" value="<?php echo Helper::validate_key_value('creditor_information',$debts);?>">
                        </div>
                    </div>
					<div class="col-md-4">
						<div class="form-group">
							<label>City</label>
							<input type="text" class="form-control required" name="creditor_city" placeholder="City" value="<?php echo Helper::validate_key_value('creditor_city',$debts);?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>State</label>
							{{-- <input type="text" class="form-control required" name="creditor_state" placeholder="State" value="<?php echo Helper::validate_key_value('creditor_state',$debts);?>"> --}}
                                <select  class="form-control required" name="creditor_state">

                    <option disabled="">Please Select State</option>
    
                <option value="AL" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'AL')  echo'selected'; else '' ?> >Alabama (AL)</option>
                
                <option value="AK" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'AK')  echo'selected'; else '' ?> >Alaska (AK)</option>
                
                <option value="AZ" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'AZ')  echo'selected'; else '' ?> >Arizona (AZ)</option>
                
                <option value="AR" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'AR')  echo'selected'; else '' ?> >Arkansas (AR)</option>
                
                <option value="CA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'CA')  echo'selected'; else '' ?> >California (CA)</option>
                
                <option value="CO" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'CO')  echo'selected'; else '' ?> >Colorado (CO)</option>
                
                <option value="CT" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'CT')  echo'selected'; else '' ?> >Connecticut (CT)</option>
                
                <option value="DE" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'DE')  echo'selected'; else '' ?> >Delaware (DE)</option>
                
                <option value="DC" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'DC')  echo'selected'; else '' ?> >District Of Columbia (DC)</option>
                
                <option value="FL" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'FL')  echo'selected'; else '' ?> >Florida (FL)</option>
                
                <option value="GA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'GA')  echo'selected'; else '' ?> >Georgia (GA)</option>
                
                <option value="HI" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'HI')  echo'selected'; else '' ?> >Hawaii (HI)</option>
                
                <option value="ID" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'ID')  echo'selected'; else '' ?> >Idaho (ID)</option>
                
                <option value="IL" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'IL')  echo'selected'; else '' ?> >Illinois (IL)</option>
                
                <option value="IN" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'IN')  echo'selected'; else '' ?> >Indiana (IN)</option>
                
                <option value="IA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'IA')  echo'selected'; else '' ?> >Iowa (IA)</option>
                
                <option value="KS" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'KS')  echo'selected'; else '' ?> >Kansas (KS)</option>
                
                <option value="KY" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'KY')  echo'selected'; else '' ?> >Kentucky (KY)</option>
                
                <option value="LA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'LA')  echo'selected'; else '' ?> >Louisiana (LA)</option>
                
                <option value="ME" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'ME')  echo'selected'; else '' ?> >Maine (ME)</option>
                
                <option value="MD" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MD')  echo'selected'; else '' ?> >Maryland (MD)</option>
                
                <option value="MA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MA')  echo'selected'; else '' ?> >Massachusetts (MA)</option>
                
                <option value="MI" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MI')  echo'selected'; else '' ?> >Michigan (MI)</option>
                
                <option value="MN" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MN')  echo'selected'; else '' ?> >Minnesota (MN)</option>
                
                <option value="MS" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MS')  echo'selected'; else '' ?> >Mississippi (MS)</option>
                
                <option value="MO" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MO')  echo'selected'; else '' ?> >Missouri (MO)</option>
                
                <option value="MT" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MT')  echo'selected'; else '' ?> >Montana (MT)</option>
                
                <option value="NE" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NE')  echo'selected'; else '' ?> >Nebraska (NE)</option>
                
                <option value="NV" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NV')  echo'selected'; else '' ?> >Nevada (NV)</option>
                
                <option value="NH" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NH')  echo'selected'; else '' ?> >New Hampshire (NH)</option>
                
                <option value="NJ" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NJ')  echo'selected'; else '' ?> >New Jersey (NJ)</option>
                
                <option value="NM" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NM')  echo'selected'; else '' ?> >New Mexico (NM)</option>
                
                <option value="NY" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NY')  echo'selected'; else '' ?> >New York (NY)</option>
                
                <option value="NC" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NC')  echo'selected'; else '' ?> >North Carolina (NC)</option>
                
                <option value="ND" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'ND')  echo'selected'; else '' ?> >North Dakota (ND)</option>
                
                <option value="OH" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'OH')  echo'selected'; else '' ?> >Ohio (OH)</option>
                
                <option value="OK" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'OK')  echo'selected'; else '' ?> >Oklahoma (OK)</option>
                
                <option value="OR" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'OR')  echo'selected'; else '' ?> >Oregon (OR)</option>
                
                <option value="PA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'PA')  echo'selected'; else '' ?> >Pennsylvania (PA)</option>
                
                <option value="RI" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'RI')  echo'selected'; else '' ?> >Rhode Island (RI)</option>
                
                <option value="SC" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'SC')  echo'selected'; else '' ?> >South Carolina (SC)</option>
                
                <option value="SD" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'SD')  echo'selected'; else '' ?> >South Dakota (SD)</option>
                
                <option value="TN" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'TN')  echo'selected'; else '' ?> >Tennessee (TN)</option>
                
                <option value="TX" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'TX')  echo'selected'; else '' ?> >Texas (TX)</option>
                
                <option value="UT" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'UT')  echo'selected'; else '' ?> >Utah (UT)</option>
                
                <option value="VT" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'VT')  echo'selected'; else '' ?> >Vermont (VT)</option>
                
                <option value="VA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'VA')  echo'selected'; else '' ?> >Virginia (VA)</option>
                
                <option value="WA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'WA')  echo'selected'; else '' ?> >Washington (WA)</option>
                
                <option value="WV" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'WV')  echo'selected'; else '' ?> >West Virginia (WV)</option>
                
                <option value="WI" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'WI')  echo'selected'; else '' ?> >Wisconsin (WI)</option>
                
                <option value="WY" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'WY')  echo'selected'; else '' ?> >Wyoming (WY)</option>
            </select>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>Zip</label>
							<input type="number" class="form-control required" name="creditor_zip" placeholder="Zip" value="<?php echo Helper::validate_key_value('creditor_zip',$debts);?>">
						</div>
					</div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                Amount Owned (amount of claim)
                            </label>
							<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">$</span>
									 </div>
                            <input type="text" class="form-control  required" name="amount_owned" placeholder="Amount of Claim" value="<?php echo Helper::validate_key_value('amount_owned',$debts);?>">
							</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                Account Number, if any
                            </label>
                            <input type="number" class="form-control  required" name="amount_number" placeholder="Account Number" value="<?php echo Helper::validate_key_value('amount_number',$debts);?>">
                        </div>
                    </div>
                </div>

              
                    <div class="row" id="all_dependents">
                   <?php if(!empty($debts['another_debts_creditor_information']) && count($debts['another_debts_creditor_information'])<6){?>
				   <div class="col-md-12">
						<div class="add-m-btn">
							<button class="btn btn-primary shadow-2 rounded-0" id="add-more-residence-form" onclick="addanotherDebts();return false;"><i class="feather icon-plus mr-0"></i> Add
								More </button>
						
                            <?php }else{?>
                            <div class="col-md-12">
                                <button class="btn btn-primary shadow-2 rounded-0" id="add-more-residence-form" onclick="addanotherDebts();return false;"><i class="feather icon-plus mr-0"></i> Add
                                    More </button>
                            </div>
                            <?php }?>
                            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-extraDebt-names text-danger cursor-pointer" name="part1[any_other_name][trash][1]"></i>
                        </div>    
                    </div>
					
                </div>
               
                </div>
                
                <div class="row py-5">
                    <div class="col-md-12">
                        <h3 class="section-main-title text-c-blue f-w-800">Tax Debts :</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="d-block">Do you have any back taxes owned to the <i class="text-c-blue">State?</i></label>

                            <div class="d-inline radio-primary radio">
                                <input type="radio" id="tax-owned-state_yes" name="tax_owned_state" onchange="getTaxowned(&#39;yes&#39;);" value="1" required <?php echo Helper::validate_key_toggle('tax_owned_state',$debts,1);?>>
                                <label for="tax-owned-state_yes" class="cr">Yes</label>
                            </div>
                            <div class="d-inline radio-primary radio">
                                <input type="radio" id="tax-owned-state_no" name="tax_owned_state" onchange="getTaxowned(&#39;no&#39;);" value="0" required <?php echo Helper::validate_key_toggle('tax_owned_state',$debts,0);?>>
                                <label for="tax-owned-state_no" class="cr">No</label>
                            </div>
                        </div>
                    </div>
					<div class="col-md-6 franchise_tax_board">						
						<p>Creditor :</p>
						<p>State Franchise Tax Board:</p>
						<p>Franchise Tax Board Bankruptcy Section, MS: A-340</p>
						<p>P.O. Box 2952</p>
						<p>Sacramento, CA 95812</p>
						<p></p>
                    </div>
                    <div class="row <?php echo Helper::key_hide_show_v('tax_owned_state',$debts);?>"" id="tax-owned-state">
                        <div class="col-md-12">
                            <div class="form-main w-100">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>For what year or years</label>
                                            <input type="text" class="form-control required" name="tax_whats_year" placeholder="Whats Year" value="<?php echo Helper::validate_key_value('tax_whats_year',$debts);?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>How much total due:</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1">$</span>
												 </div>
                                            <input type="text" class="form-control required" name="tax_total_due" placeholder="Total Due" value="<?php echo Helper::validate_key_value('tax_total_due',$debts);?>">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><i class="text-c-blue">If You have a copy of Statement, please upload it into the Misc. Tab
                                                under documents</i></label>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
					<div class="col-md-6">
                        <div class="form-group">
                            <label class="d-block">Do you owe any back taxes to the <i class="text-c-blue">IRS?</i></label>

                            <div class="d-inline radio-primary radio">
                                <input type="radio" id="tax-owned-irs_yes" name="tax_owned_irs" onchange="common_toggle_fn('yes','tax-owned-irs');" value="1" required <?php echo Helper::validate_key_toggle('tax_owned_irs',$debts,1);?>>
                                <label for="tax-owned-irs_yes" class="cr">Yes</label>
                            </div>
                            <div class="d-inline radio-primary radio">
                                <input type="radio" id="tax-owned-irs_no" name="tax_owned_irs" onchange="common_toggle_fn('no','tax-owned-irs');" value="0" required <?php echo Helper::validate_key_toggle('tax_owned_irs',$debts,0);?>>
                                <label for="tax-owned-irs_no" class="cr">No</label>
                            </div>
                        </div>
                    </div>
					<div class="col-md-6 revenue_service">
						<p>Creditor :</p>
						<p>Internal Revenue Service</p>
						<p>P.O. Box 7346</p>
						<p>Philadelphia, PA 19101</p>
						<p></p>
                    </div>
					<div class="row <?php echo Helper::key_hide_show_v('tax_owned_irs',$debts);?>" id="tax-owned-irs">
                        <div class="col-md-12">
                            <div class="form-main w-100">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>For what year or years</label>
                                            <input type="text" class="form-control required" name="tax_irs_whats_year" placeholder="Whats Year" value="<?php echo Helper::validate_key_value('tax_irs_whats_year',$debts);?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>How much total due:</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1">$</span>
												 </div>
                                            <input type="text" class="form-control required" name="tax_irs_total_due" placeholder="Total Due" value="<?php echo Helper::validate_key_value('tax_irs_total_due',$debts);?>">
											</div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><i class="text-c-blue">If You have a copy of Statement, please upload it into the Misc. Tab under documents</i></label>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-md-12">
                        <h3 class="section-main-title text-c-blue f-w-800">Domestic Support Debts :</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="d-block">Do you owe any current and/or back child support or alimony ?</label>

                            <div class="d-inline radio-primary radio">
                                <input type="radio" id="domestic-support_yes" name="domestic_support" onchange="common_toggle_fn('yes','domestic-support');" value="1" required <?php echo Helper::validate_key_toggle('domestic_support',$debts,1);?>>
                                <label for="domestic-support_yes" class="cr">Yes</label>
                            </div>
                            <div class="d-inline radio-primary radio">
                                <input type="radio" id="domestic-support_no" name="domestic_support" onchange="common_toggle_fn('no','domestic-support');" value="0" required <?php echo Helper::validate_key_toggle('domestic_support',$debts,0);?>>
                                <label for="domestic-support_no" class="cr">No</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="second_step_domestic_debts <?php echo Helper::key_hide_show_v('checkinputdebt',$debts);?>" id="second_step_domestic_debts_div">
                <!--<div class="col-md-12 text-right">-->
                <!--            <a href="javascript:void(0)" class='btn btn-danger' id="remvoe_domestic_debts" onClick="removeDomesticForm(this);"><i class="fa fa-trash m-0"></i></a>-->
                <!--</div>-->
                <div class="row <?php echo Helper::key_hide_show_v('domestic_support',$debts);?>" id="domestic-support">
                        <!-- <a href="javascript:void(0)" class='btn btn-danger' id="remvoe_domestic_debts" onClick="removeDomesticForm(this);"><i class="fa fa-trash m-0"></i></a> -->
                       
                        <div class="col-md-12">
                            <div class="form-main w-100">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control required" name="domestic_support_name" placeholder="Name of person" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control required" name="domestic_support_address" placeholder="Street address of person" value="">
                                        </div>
                                        <div class="form-group">
                                            <div colspan="3">
                                                <input type="text" class="form-control required" name="domestic_support_city" placeholder="City" value=""> &nbsp;
							
                                                <select  class="form-control required" name="creditor_state">
                                                    <option disabled="">Please Select State</option>
                                        
                                                    <option value="AL" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'AL')  echo'selected'; else '' ?> >Alabama (AL)</option>
                                                    
                                                    <option value="AK" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'AK')  echo'selected'; else '' ?> >Alaska (AK)</option>
                                                    
                                                    <option value="AZ" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'AZ')  echo'selected'; else '' ?> >Arizona (AZ)</option>
                                                    
                                                    <option value="AR" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'AR')  echo'selected'; else '' ?> >Arkansas (AR)</option>
                                                    
                                                    <option value="CA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'CA')  echo'selected'; else '' ?> >California (CA)</option>
                                                    
                                                    <option value="CO" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'CO')  echo'selected'; else '' ?> >Colorado (CO)</option>
                                                    
                                                    <option value="CT" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'CT')  echo'selected'; else '' ?> >Connecticut (CT)</option>
                                                    
                                                    <option value="DE" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'DE')  echo'selected'; else '' ?> >Delaware (DE)</option>
                                                    
                                                    <option value="DC" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'DC')  echo'selected'; else '' ?> >District Of Columbia (DC)</option>
                                                    
                                                    <option value="FL" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'FL')  echo'selected'; else '' ?> >Florida (FL)</option>
                                                    
                                                    <option value="GA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'GA')  echo'selected'; else '' ?> >Georgia (GA)</option>
                                                    
                                                    <option value="HI" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'HI')  echo'selected'; else '' ?> >Hawaii (HI)</option>
                                                    
                                                    <option value="ID" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'ID')  echo'selected'; else '' ?> >Idaho (ID)</option>
                                                    
                                                    <option value="IL" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'IL')  echo'selected'; else '' ?> >Illinois (IL)</option>
                                                    
                                                    <option value="IN" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'IN')  echo'selected'; else '' ?> >Indiana (IN)</option>
                                                    
                                                    <option value="IA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'IA')  echo'selected'; else '' ?> >Iowa (IA)</option>
                                                    
                                                    <option value="KS" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'KS')  echo'selected'; else '' ?> >Kansas (KS)</option>
                                                    
                                                    <option value="KY" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'KY')  echo'selected'; else '' ?> >Kentucky (KY)</option>
                                                    
                                                    <option value="LA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'LA')  echo'selected'; else '' ?> >Louisiana (LA)</option>
                                                    
                                                    <option value="ME" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'ME')  echo'selected'; else '' ?> >Maine (ME)</option>
                                                    
                                                    <option value="MD" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MD')  echo'selected'; else '' ?> >Maryland (MD)</option>
                                                    
                                                    <option value="MA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MA')  echo'selected'; else '' ?> >Massachusetts (MA)</option>
                                                    
                                                    <option value="MI" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MI')  echo'selected'; else '' ?> >Michigan (MI)</option>
                                                    
                                                    <option value="MN" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MN')  echo'selected'; else '' ?> >Minnesota (MN)</option>
                                                    
                                                    <option value="MS" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MS')  echo'selected'; else '' ?> >Mississippi (MS)</option>
                                                    
                                                    <option value="MO" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MO')  echo'selected'; else '' ?> >Missouri (MO)</option>
                                                    
                                                    <option value="MT" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MT')  echo'selected'; else '' ?> >Montana (MT)</option>
                                                    
                                                    <option value="NE" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NE')  echo'selected'; else '' ?> >Nebraska (NE)</option>
                                                    
                                                    <option value="NV" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NV')  echo'selected'; else '' ?> >Nevada (NV)</option>
                                                    
                                                    <option value="NH" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NH')  echo'selected'; else '' ?> >New Hampshire (NH)</option>
                                                    
                                                    <option value="NJ" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NJ')  echo'selected'; else '' ?> >New Jersey (NJ)</option>
                                                    
                                                    <option value="NM" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NM')  echo'selected'; else '' ?> >New Mexico (NM)</option>
                                                    
                                                    <option value="NY" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NY')  echo'selected'; else '' ?> >New York (NY)</option>
                                                    
                                                    <option value="NC" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NC')  echo'selected'; else '' ?> >North Carolina (NC)</option>
                                                    
                                                    <option value="ND" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'ND')  echo'selected'; else '' ?> >North Dakota (ND)</option>
                                                    
                                                    <option value="OH" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'OH')  echo'selected'; else '' ?> >Ohio (OH)</option>
                                                    
                                                    <option value="OK" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'OK')  echo'selected'; else '' ?> >Oklahoma (OK)</option>
                                                    
                                                    <option value="OR" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'OR')  echo'selected'; else '' ?> >Oregon (OR)</option>
                                                    
                                                    <option value="PA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'PA')  echo'selected'; else '' ?> >Pennsylvania (PA)</option>
                                                    
                                                    <option value="RI" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'RI')  echo'selected'; else '' ?> >Rhode Island (RI)</option>
                                                    
                                                    <option value="SC" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'SC')  echo'selected'; else '' ?> >South Carolina (SC)</option>
                                                    
                                                    <option value="SD" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'SD')  echo'selected'; else '' ?> >South Dakota (SD)</option>
                                                    
                                                    <option value="TN" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'TN')  echo'selected'; else '' ?> >Tennessee (TN)</option>
                                                    
                                                    <option value="TX" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'TX')  echo'selected'; else '' ?> >Texas (TX)</option>
                                                    
                                                    <option value="UT" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'UT')  echo'selected'; else '' ?> >Utah (UT)</option>
                                                    
                                                    <option value="VT" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'VT')  echo'selected'; else '' ?> >Vermont (VT)</option>
                                                    
                                                    <option value="VA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'VA')  echo'selected'; else '' ?> >Virginia (VA)</option>
                                                    
                                                    <option value="WA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'WA')  echo'selected'; else '' ?> >Washington (WA)</option>
                                                    
                                                    <option value="WV" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'WV')  echo'selected'; else '' ?> >West Virginia (WV)</option>
                                                    
                                                    <option value="WI" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'WI')  echo'selected'; else '' ?> >Wisconsin (WI)</option>
                                                    
                                                    <option value="WY" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'WY')  echo'selected'; else '' ?> >Wyoming (WY)</option>
                                                </select>
                                                 &nbsp;
                                                <input type="text" class="form-control required" name="domestic_support_zipcode" placeholder="Zip code" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1">$</span>
												 </div>
                                            <input type="text" class="form-control required" name="domestic_support_monthlypay" placeholder="Current monthly payment" value="">
											</div>
                                        </div>
                                        <div class="form-group">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1">$</span>
												 </div>
                                            <input type="text" class="form-control required" name="domestic_support_past_due" placeholder="Past due amount" value="">
											</div>
                                        </div>
                                        <div class="form-group">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1">$</span>
												 </div>
                                            <input type="text" class="form-control required" name="domestic_support_account" placeholder="Account" value="">
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
						
                    </div>
                    <div class="col-md-12 p-0">
						<div class="add-m-btn">
							<?php if(!empty($debts['another_domestic_support_form']) && count($debts['another_domestic_support_form'])<6){?>
							
								<button class="btn btn-primary shadow-2 rounded-0" id="add-more-domestic-form" onclick="addAnotherDomesticForm();return false;"><i class="feather icon-plus mr-0"></i> Add
									More</button>
							
							<?php }else{?>
							
								<button class="btn btn-primary shadow-2 rounded-0" id="add-more-domestic-form" onclick="addAnotherDomesticForm();return false;"><i class="feather icon-plus mr-0"></i> Add
									More</button>
							
							<?php }?>
							<i class="fas fa-trash fa-lg mb-2 mt-2 text-danger cursor-pointer remove-extraDebtDomestic-names"  name="part1[any_other_name][trash][1]"></i>
						</div>
                    </div>
                </div>
            </div>
                </div>
                
                <div class="row py-5">
                    <div class="col-md-12">
                        <h3 class="section-main-title text-c-blue f-w-800">Additional liens secured by real or personal property not already listed :</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group additionalCheck">
                            <label class="d-block">Do you have any additional liens or loans secured against any real or personal property not already listed?</label>
                                <label><i class="text-c-blue">(Examples of these: HOA liens, 2nd or 3rd mortgages, car title loans any loans secured against property)</i></label>
                            <div class="d-inline radio-primary radio">
                                <input type="radio" id="additional-liens_yes" name="additional_liens" onchange="common_toggle_fn('yes','additional_liens');" value="1" required <?php echo Helper::validate_key_toggle('additional_liens',$debts,1);?>>
                                <label for="additional-liens_yes" class="cr"></label>Yes
                            </div>
                            <div class="d-inline radio-primary radio">
                                <input type="radio" id="additional-liens_no" name="additional_liens" onchange="common_toggle_fn('no','additional_liens');" value="0" required <?php echo Helper::validate_key_toggle('additional_liens',$debts,0);?>>
                                <label for="additional-liens_no" class="cr"></label>No
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="second_step_additional_liens <?php echo Helper::key_hide_show_v('checkinputdebt',$debts);?>" id="second_step_additional_liens_div">
                   <div class="row <?php echo Helper::key_hide_show_v('domestic_support',$debts);?>" id="additional_liens">
                           <div class="col-md-12">
                               <div class="form-main w-100">
                                   <div class="row">
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <input type="text" class="form-control required" name="domestic_support_name" placeholder="Name of person" value="">
                                           </div>
                                           <div class="form-group">
                                               <input type="text" class="form-control required" name="domestic_support_address" placeholder="Street address of person" value="">
                                           </div>
                                           <div class="form-group">
                                            <div colspan="3">
                                                <input type="text" class="form-control required" name="domestic_support_city" placeholder="City" value=""> &nbsp;
							
                                                <select  class="form-control required" name="creditor_state">
                                                    <option disabled="">Please Select State</option>
                                        
                                                    <option value="AL" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'AL')  echo'selected'; else '' ?> >Alabama (AL)</option>
                                                    
                                                    <option value="AK" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'AK')  echo'selected'; else '' ?> >Alaska (AK)</option>
                                                    
                                                    <option value="AZ" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'AZ')  echo'selected'; else '' ?> >Arizona (AZ)</option>
                                                    
                                                    <option value="AR" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'AR')  echo'selected'; else '' ?> >Arkansas (AR)</option>
                                                    
                                                    <option value="CA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'CA')  echo'selected'; else '' ?> >California (CA)</option>
                                                    
                                                    <option value="CO" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'CO')  echo'selected'; else '' ?> >Colorado (CO)</option>
                                                    
                                                    <option value="CT" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'CT')  echo'selected'; else '' ?> >Connecticut (CT)</option>
                                                    
                                                    <option value="DE" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'DE')  echo'selected'; else '' ?> >Delaware (DE)</option>
                                                    
                                                    <option value="DC" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'DC')  echo'selected'; else '' ?> >District Of Columbia (DC)</option>
                                                    
                                                    <option value="FL" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'FL')  echo'selected'; else '' ?> >Florida (FL)</option>
                                                    
                                                    <option value="GA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'GA')  echo'selected'; else '' ?> >Georgia (GA)</option>
                                                    
                                                    <option value="HI" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'HI')  echo'selected'; else '' ?> >Hawaii (HI)</option>
                                                    
                                                    <option value="ID" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'ID')  echo'selected'; else '' ?> >Idaho (ID)</option>
                                                    
                                                    <option value="IL" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'IL')  echo'selected'; else '' ?> >Illinois (IL)</option>
                                                    
                                                    <option value="IN" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'IN')  echo'selected'; else '' ?> >Indiana (IN)</option>
                                                    
                                                    <option value="IA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'IA')  echo'selected'; else '' ?> >Iowa (IA)</option>
                                                    
                                                    <option value="KS" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'KS')  echo'selected'; else '' ?> >Kansas (KS)</option>
                                                    
                                                    <option value="KY" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'KY')  echo'selected'; else '' ?> >Kentucky (KY)</option>
                                                    
                                                    <option value="LA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'LA')  echo'selected'; else '' ?> >Louisiana (LA)</option>
                                                    
                                                    <option value="ME" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'ME')  echo'selected'; else '' ?> >Maine (ME)</option>
                                                    
                                                    <option value="MD" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MD')  echo'selected'; else '' ?> >Maryland (MD)</option>
                                                    
                                                    <option value="MA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MA')  echo'selected'; else '' ?> >Massachusetts (MA)</option>
                                                    
                                                    <option value="MI" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MI')  echo'selected'; else '' ?> >Michigan (MI)</option>
                                                    
                                                    <option value="MN" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MN')  echo'selected'; else '' ?> >Minnesota (MN)</option>
                                                    
                                                    <option value="MS" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MS')  echo'selected'; else '' ?> >Mississippi (MS)</option>
                                                    
                                                    <option value="MO" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MO')  echo'selected'; else '' ?> >Missouri (MO)</option>
                                                    
                                                    <option value="MT" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'MT')  echo'selected'; else '' ?> >Montana (MT)</option>
                                                    
                                                    <option value="NE" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NE')  echo'selected'; else '' ?> >Nebraska (NE)</option>
                                                    
                                                    <option value="NV" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NV')  echo'selected'; else '' ?> >Nevada (NV)</option>
                                                    
                                                    <option value="NH" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NH')  echo'selected'; else '' ?> >New Hampshire (NH)</option>
                                                    
                                                    <option value="NJ" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NJ')  echo'selected'; else '' ?> >New Jersey (NJ)</option>
                                                    
                                                    <option value="NM" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NM')  echo'selected'; else '' ?> >New Mexico (NM)</option>
                                                    
                                                    <option value="NY" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NY')  echo'selected'; else '' ?> >New York (NY)</option>
                                                    
                                                    <option value="NC" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'NC')  echo'selected'; else '' ?> >North Carolina (NC)</option>
                                                    
                                                    <option value="ND" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'ND')  echo'selected'; else '' ?> >North Dakota (ND)</option>
                                                    
                                                    <option value="OH" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'OH')  echo'selected'; else '' ?> >Ohio (OH)</option>
                                                    
                                                    <option value="OK" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'OK')  echo'selected'; else '' ?> >Oklahoma (OK)</option>
                                                    
                                                    <option value="OR" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'OR')  echo'selected'; else '' ?> >Oregon (OR)</option>
                                                    
                                                    <option value="PA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'PA')  echo'selected'; else '' ?> >Pennsylvania (PA)</option>
                                                    
                                                    <option value="RI" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'RI')  echo'selected'; else '' ?> >Rhode Island (RI)</option>
                                                    
                                                    <option value="SC" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'SC')  echo'selected'; else '' ?> >South Carolina (SC)</option>
                                                    
                                                    <option value="SD" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'SD')  echo'selected'; else '' ?> >South Dakota (SD)</option>
                                                    
                                                    <option value="TN" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'TN')  echo'selected'; else '' ?> >Tennessee (TN)</option>
                                                    
                                                    <option value="TX" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'TX')  echo'selected'; else '' ?> >Texas (TX)</option>
                                                    
                                                    <option value="UT" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'UT')  echo'selected'; else '' ?> >Utah (UT)</option>
                                                    
                                                    <option value="VT" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'VT')  echo'selected'; else '' ?> >Vermont (VT)</option>
                                                    
                                                    <option value="VA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'VA')  echo'selected'; else '' ?> >Virginia (VA)</option>
                                                    
                                                    <option value="WA" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'WA')  echo'selected'; else '' ?> >Washington (WA)</option>
                                                    
                                                    <option value="WV" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'WV')  echo'selected'; else '' ?> >West Virginia (WV)</option>
                                                    
                                                    <option value="WI" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'WI')  echo'selected'; else '' ?> >Wisconsin (WI)</option>
                                                    
                                                    <option value="WY" <?php if(Helper::validate_key_value('creditor_state',$debts) == 'WY')  echo'selected'; else '' ?> >Wyoming (WY)</option>
                                                </select>
                                                 &nbsp;
                                                <input type="text" class="form-control required" name="domestic_support_zipcode" placeholder="Zip code" value="">
                                            </div>
                                        </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <div class="input-group">
                                                   <div class="input-group-prepend">
                                                       <span class="input-group-text" id="basic-addon1">$</span>
                                                    </div>
                                               <input type="text" class="form-control required" name="additional_liens_due" placeholder="Amount Due" value="">
                                               </div>
                                           </div>
                                           <div class="form-group">
                                               <div class="input-group">
                                                   <div class="input-group-prepend">
                                                       <span class="input-group-text" id="basic-addon1">$</span>
                                                    </div>
                                               <input type="text" class="form-control required" name="additional_liens_account" placeholder="Account" value="">
                                               </div>
                                           </div>
                                           <div class="form-group">
                                               <div class="input-group">
                                               <input type="text" placeholder="Date of liens" class="form-control required" name="additional_liens_date" value="">
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-12">
                       </div>
                       <div class="col-md-12 p-0">
                             <div class="add-m-btn">   
                                <?php if(!empty($debts['another_liens_form']) && count($debts['another_liens_form'])<6){?>
                                
                                    <button class="btn btn-primary shadow-2 rounded-0" id="add-more-domestic-form" onclick="addAdditionalLiensForm();return false;"><i class="feather icon-plus mr-0"></i> Add
                                        More</button>
                                
                                <?php }else{?>
                                
                                    <button class="btn btn-primary shadow-2 rounded-0" id="add-more-domestic-form" onclick="addAdditionalLiensForm();return false;"><i class="feather icon-plus mr-0"></i> Add
                                        More </button>
                                
                                <?php }?>
                                <i class="fas fa-trash fa-lg mb-2 mt-2 remove-extraDebtAdditionalLines-names text-danger cursor-pointer" name="part1[any_other_name][trash][1]"></i>
                                <!-- <a href="javascript:void(0)" class='btn btn-danger' id="remvoe_additional_liens" onClick="removeAdditionalLiensForm(this);"><i class="fa fa-trash m-0"></i></a> -->
                            </div> 
                        </div>
                   </div>
               </div>
                </div>
                   
				<div class="row">
					<div class="col-md-12">
						<div class="next-part-btn text-right">
						<?php if(!empty($can_editable)){?>
						<?php if(!empty($debts['id'])){?>
						<input type="hidden" class="debt_tax_ids"  name="id" value="<?php echo Helper::validate_value($debts['id']);?>">
						<?php }?>
							<a href="{{route('client_debts')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
							<button type="submit" class="btn btn-primary shadow-2 mb-4">Submit </button>
						</div>
						<?php }else{?>
								<a href="{{route('client_income')}}" class="btn btn-primary shadow-2 mb-4">Submit</a>
						<?php }?>
					</div>
				</div>
				</form>
            </div>
        </div>
    </div>
<div class="modal fade documents-modal" id="both_document_upload_modal" tabindex="-1" role="dialog"
	aria-labelledby="driving-licenceTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content ">
			<form name="form-both" id="form-both" action="{{route('debts_documents')}}" method="post" enctype="multipart/form-data" novalidate>
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
									File should be an image Like .png, .jpg, .jpeg  .pdf
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
										<input type='file'  name="debts_document" id="both-licence" accept=".png, .jpg, .jpeg, .pdf"/>
										<label for="driving-licence">Drop your file here or Click to
												browse</label>										
									</div>
								</div>
							</div>
							<div class="doc-preview hide_img_preview position-relative" id="both__preview__DL">
								<img id="both-licence-imagePreview" src="../assets/images/licence.png"
									alt="User profile picture">
								<iframe id="pdfboth-licence-imagePreview" src="../assets/images/licence.png"
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
<link rel="stylesheet" href="{{ asset('assets/css/uploaded-doc.css')}}">
<style>
.revenue_service p,.franchise_tax_board p {
    margin: 0;
    color: blue;
}
</style>
<script>
	$(document).ready(function(){
		$("#client_debts_step2").validate({
			errorPlacement: function (error, element) {			
				if($(element).parents(".form-group").next('label').hasClass('error')){
					$(element).parents(".form-group").next('label').remove();
					$(element).parents(".form-group").after($(error)[0].outerHTML); 
				}else{
					$(element).parents(".form-group").after($(error)[0].outerHTML); 
				}          
			},
			success: function(label,element) {
				label.parent().removeClass('error');
				$(element).parents(".form-group").next('label').remove(); 
			},
		});
		$("#both-licence").on('change',function (data) {
			var imageFile = data.target.files[0];
			var type = data.target.files[0].type;
			// console.log(type);
			var reader = new FileReader();
			reader.readAsDataURL(imageFile);
			reader.onload = function (evt) {
				$('#both__preview__DL').removeClass('hide_img_preview');
				if(type=='application/pdf'){
					$('#both-licence-imagePreview').hide();
					$('#pdfboth-licence-imagePreview').attr('src', evt.target.result);
					$('#pdfboth-licence-imagePreview').hide();
					$('#pdfboth-licence-imagePreview').fadeIn(650);
				}else{
					$('#pdfboth-licence-imagePreview').hide();
					$('#both-licence-imagePreview').attr('src', evt.target.result);
					$('#both-licence-imagePreview').hide();
					$('#both-licence-imagePreview').fadeIn(650);
				}
			}
		});
	});
	function getTaxowned(value) {
		if (value == 'yes') {
			document.getElementById('tax-owned-state').classList.remove("hide-data");
		}
		else if (value == 'no') {
			document.getElementById('tax-owned-state').classList.add("hide-data");
		}
	}
	function getTaxowned_IRS(value) {
		if (value == 'yes') {
			// document.getElementById('tax-owned-state').classList.remove("hide-data");
		}
		else if (value == 'no') {
			// document.getElementById('tax-owned-state').classList.add("hide-data");
		}
	}
	function getAnotherDebts(value) {
		if (value == 'yes') {
			document.getElementById('all_dependents').classList.remove("hide-data");
		}
		else if (value == 'no') {
			document.getElementById('all_dependents').classList.add("hide-data");
		}
	}
	function addanotherDebts() {
		// var itm1 = document.getElementById("another_debts-1");
		// var cln1 = itm1.cloneNode(true);
		// document.getElementById("another_debts-2").appendChild(cln1);
		var clnln=$(document).find(".second_step_debt").length;

		if(clnln>29){
			alert("You can only insert 30 properties.");return false;
		}else{
			var itm = $(document).find(".second_step_debt").last();	
			
			var index_val = $(itm).index()+1;	
			
			var cln=$(itm).clone();				
			var another_debts_creditor_information=cln.find('.another_debts_creditor_information');
			var another_debts_amount_owned=cln.find('.another_debts_amount_owned');
			var another_debts_amount_number=cln.find('.another_debts_amount_number');
			
			
			$(another_debts_creditor_information).each(function() {
				$(this).attr('name','another_debts_creditor_information['+index_val+']');			
			});
			$(another_debts_amount_owned).each(function() {
				$(this).attr('name','another_debts_amount_owned['+index_val+']');			
			});
			$(another_debts_amount_number).each(function() {
				$(this).attr('name','another_debts_amount_number['+index_val+']');			
			});
			
			cln.find('input').val('');
			
			// cln.find('.add-m-btn').addClass('removeExtraBtns');
			
			$(itm).after(cln);
			$('.remove-extraDebt-names').click(function(){
				let x = $(document).find(".second_step_debt").length;
                console.log(x);
                if(x<2){
                     alert("You can't remove last element")
                }
                else{
                $(this).closest('.second_step_debt').remove();
                }
			})
		}
	} 
	
	var counter = 1;
	
	function addAnotherDomesticForm() {
	
		var clnln=$(document).find(".second_step_domestic_debts").length;

		if(clnln>4){
			alert("You can only insert 5 domestic debts.");return false;
		}else{
		
		    var newdiv = document.createElement('div');
		    newdiv.innerHTML = document.getElementById("domestic-support").innerHTML;
            newdiv.className = 'added';
        
			var itm = $(document).find(".second_step_domestic_debts").last();	
			
			var index_val = $(itm).index()+1;	
			
			var cln=$(itm).clone();				
			var another_domestic_support_form=cln.find('.another_domestic_support_form');
			
			$(another_domestic_support_form).each(function() {
			//   alert('ddd');
				$(this).attr('name','another_domestic_support_form['+index_val+']');			
			});
			
			counter++;

			cln.find('input').val('');
			$(itm).after(cln);
            $('.remove-extraDebtDomestic-names').click(function(){
                let x = $(document).find(".second_step_domestic_debts").length;
                console.log(x);
                if(x<2){
                     alert("You can't remove last element")
                }
                else{
                    $(this).closest('.second_step_domestic_debts').remove();
                }
            })
    
		}

        
	}
	
	
	function removeDomesticForm(obj)
	{
	   if (obj.parentNode.className == 'row') {
        obj.parentNode.parentNode.removeChild(obj.parentNode);
        counter--;
       }
	}
	
	function addAdditionalLiensForm() {
	
		var clnln=$(document).find(".second_step_additional_liens").length;

		if(clnln>4){
			alert("You can only insert 5 domestic debts.");return false;
		}else{
		
		    var newdiv = document.createElement('div');
		    newdiv.innerHTML = document.getElementById("additional_liens").innerHTML;
            newdiv.className = 'added';
        
			var itm = $(document).find(".second_step_additional_liens").last();	
			
			var index_val = $(itm).index()+1;	
			
			var cln=$(itm).clone();				
			var another_liens_form=cln.find('.another_liens_form');
			
			$(another_liens_form).each(function() {
			  alert('ddd');
				$(this).attr('name','another_liens_form['+index_val+']');			
			});
			
			counter++;
			
            cln.find('input').val('');

			$(itm).after(cln);

            $('.remove-extraDebtAdditionalLines-names').click(function(){
				let x = $(document).find(".second_step_additional_liens").length;
                console.log(x);
                if(x<2){
                     alert("You can't remove last element")
                }
                else{
                $(this).closest('.second_step_additional_liens').remove();
                }
			})
           
		}
	}
	
	function removeAdditionalLiensForm(obj)
	{
	   if (obj.parentNode.className == 'row') {
        obj.parentNode.parentNode.removeChild(obj.parentNode);
        counter--;
       }
	}
	
	function both_upload_modal(type){
		$("#both_document_upload_modal").find("#document_type").val(type);
		$("#both_document_upload_modal").modal('show');
	}
	
	$(document).ready(function(){
        $('input[name="checkinputdebt"]').click(function(){
            if($(this).prop("checked") == true){
                $("#second_step_debt_div").removeClass("hide-data");
            }
            else if($(this).prop("checked") == false){
                $("#second_step_debt_div").addClass("hide-data");
            }
        });
    });
</script>