<!--div class="scan-os cstm-id">
	<a class="btn shadow-2 mb-4 download-form" data-toggle="modal" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video" data-video="https://www.youtube.com/embed/8-kOvjekt5I" data-video2="https://www.youtube.com/embed/GU0D3qcEDt4">
		<img src="{{url('assets/images/video-play.jpg')}}" style="height: 36px;display: block;margin: 1px auto;">
		Click for Step by Step Video 
	</a>
</div-->
<div class="tab-pane fade show active" id="section3" role="tabpanel" aria-labelledby="section3-tab">
    <h3 class="section-main-title text-c-blue f-w-800">Debts</h3>
    <!-- Debts Part-A -->
    <div id="debts-part-a">
		<form name="client_debts" id="client_debts" action="{{route('client_debts')}}" method="post">
		@csrf
        <div class="row mt-3">
            <div class="col-md-12">
                <p class="section-part-title"><span> Please list below all debts that you owe OR that creditors claim you owe that are secured by property. </span></p>
            </div>
			<?php if(!empty($debts['id'])){?>
			<input type="hidden" class="debt_id"  name="id" value="<?php echo Helper::validate_value($debts['id']);?>">
			<?php }?>
            <div class="form-main mt-3 w-100" id="debts_secured_property-form">
                <div class="col-md-12">
                    <h5 class="mb-2"><strong>Type of Debt</strong></h5>
					<?php //echo "<pre>";print_r($debts);echo"</pre>";?>
                    <div class="form-group">
                        <label>Home loan and/or mortgage</label>
                        <select class="form-control  required" name="home_loan_mortgage" id="type_of_debt" onchange="getUnpaidTaxesItems();">
                            <option value="1" <?php echo Helper::validate_key_option('home_loan_mortgage',$debts,1);?>>Home loan and/or mortgage</option>
                            <option value="2" <?php echo Helper::validate_key_option('home_loan_mortgage',$debts,2);?>>Car loans</option>
                            <option value="3" <?php echo Helper::validate_key_option('home_loan_mortgage',$debts,3);?>>Major credit card debts (Visa,Express, Master Card, Discover)</option>
                            <option value="4" <?php echo Helper::validate_key_option('home_loan_mortgage',$debts,4);?>>Major credit card debts (Visa,American Express, Master Card, Discover) </option>
                            <option value="5" <?php echo Helper::validate_key_option('home_loan_mortgage',$debts,5);?>>Department store credit card debts </option>
                            <option value="6" <?php echo Helper::validate_key_option('home_loan_mortgage',$debts,6);?>>Other credit card debts (gas cards, phone cards, etc.)</option>
                            <option value="7" <?php echo Helper::validate_key_option('home_loan_mortgage',$debts,7);?>>Cash advances</option>
                            <option value="8" <?php echo Helper::validate_key_option('home_loan_mortgage',$debts,8);?>>Unpaid taxes </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <h5 class="mb-2"><strong>Creditor Information</strong></h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Amount Owed <i> (amount of claim):</i></label>
								<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">$</span>
								 </div>
                                <input type="number" class="form-control  required" name="amount_own" placeholder="Amount Owed" value="<?php echo Helper::validate_key_value('amount_own',$debts);?>">
								</div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Account Number, if any:</label>
                                <input type="number" class="form-control  required" name="account_number" placeholder="Account Number" value="<?php echo Helper::validate_key_value('account_number',$debts);?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date/range of dates when debt was incurred:</label>
                                <input type="date" class="form-control  required" name="debt_incurred_date" value="<?php echo Helper::validate_key_value('debt_incurred_date',$debts);?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Creditor Name and Address:</label>
                                <textarea name="creditor_name_addresss" class="form-control  required" name="creditor_info" cols="30" rows="4" placeholder="Creditor Name and Address"><?php echo Helper::validate_key_value('creditor_name_addresss',$debts);?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Contact person's name and address if different:</label>
                                <textarea name="contact_name_addresss" class="form-control  required" name="contact_info" cols="30" rows="4" placeholder="Persons name and address"><?php echo Helper::validate_key_value('contact_name_addresss',$debts);?></textarea>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-12">
                    <h5 class="mb-2"><strong>Property Information:</strong></h5>
                    <div class="row">                      
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Monthly payment amount:</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">$</span>
									 </div>
                                <input type="number" class="form-control  required" name="monthly_payment" placeholder="Monthly payment" value="<?php echo Helper::validate_key_value('monthly_payment',$debts);?>">
								</div>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-12">
                    <h5 class="mb-2"><strong>Person(s) Responsible/Codebtor:</strong></h5>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="d-block">Who owes the debt?</label>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="who_owes_the_debt_you" name="debt_owned_by" required  value="1" <?php echo Helper::validate_key_toggle('debt_owned_by',$debts,1);?>>
                                    <label for="who_owes_the_debt_you" class="cr"> Self</label>
                                </div>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="who_owes_the_debt_spouse" name="debt_owned_by" required  value="2" <?php echo Helper::validate_key_toggle('debt_owned_by',$debts,2);?>>
                                    <label for="who_owes_the_debt_spouse" class="cr"> Spouse</label>
                                </div>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="who_owes_the_debt_joint" name="debt_owned_by" required  value="3" <?php echo Helper::validate_key_toggle('debt_owned_by',$debts,3);?>>
                                    <label for="who_owes_the_debt_joint" class="cr"> Joint</label>
                                </div>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="who_owes_the_debt_other" name="debt_owned_by" required  value="4" <?php echo Helper::validate_key_toggle('debt_owned_by',$debts,4);?>>
                                    <label for="who_owes_the_debt_other" class="cr"> Other</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="d-block">Is there a codebtor or cosigner on this loan?</label>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="codebtor_cosigner_yes" name="codebtor" required onchange="geCodebtorCosignerItems('yes');"  value="1" <?php echo Helper::validate_key_toggle('codebtor',$debts,1);?>>
                                    <label for="codebtor_cosigner_yes" class="cr"> Yes</label>
                                </div>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="codebtor_cosigner_no" name="codebtor" required onchange="geCodebtorCosignerItems('no');"  value="0" <?php echo Helper::validate_key_toggle('codebtor',$debts,0);?>>
                                    <label for="codebtor_cosigner_no" class="cr"> No</label>
                                </div>
                            </div>
                        </div>
                        <!-- Condition data -->
                        <div class="col-md-12 <?php echo Helper::key_hide_show_v('codebtor',$debts);?> pt-3" id="codebtor_cosigner_data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Please provide name and address: </label>
                                        <textarea name="codebtor_name_addresss" class="form-control  required" name="codebtor_info" cols="30" rows="4" placeholder="Name & Addresss"><?php echo Helper::validate_key_value('codebtor_name_addresss',$debts);?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Condition data End-->
                    </div>
                </div>
                <div class="col-md-12">
                    <h5 class="mb-2"><strong> Do you dispute the debt?</strong></h5>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="d-block">Do you dispute the debt?</label>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="dispute_the_debt_yes" name="debt_dispute" value="1" required <?php echo Helper::validate_key_toggle('debt_dispute',$debts,1);?>>
                                    <label for="dispute_the_debt_yes" class="cr"> Yes</label>
                                </div>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="dispute_the_debt_no" name="debt_dispute" value="0" required <?php echo Helper::validate_key_toggle('debt_dispute',$debts,0);?>>
                                    <label for="dispute_the_debt_no" class="cr"> No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="next-part-btn text-right">
				<?php if(!empty($can_editable)){?>
                    <button type="submit" class="btn btn-primary shadow-2 mb-4">Submit & Next Step</button>
                </div>
				<?php }else{?>
						<a href="{{route('client_debts_step2')}}" class="btn btn-primary shadow-2 mb-4">Submit & Next Step</a>
				<?php }?>
            </div>
        </div>
		</form>
    </div>
	<script>
	$(document).ready(function(){
		<!-- Debts Part-A End -->
		$("#client_debts").validate({
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
	});
	</script>
</div>
<!-- Tab 3 End-->
