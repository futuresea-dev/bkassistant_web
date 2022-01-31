<style>
    .c-a-btn {
    display: flex;
    justify-content: space-between;
    align-items: center;
} 

.flex-input {flex-wrap: unset}

/*.flex-group {display: flex;}*/

.flex-group .col-md-7 {padding: 0;}

.flex-input input {width: 100% !important;}

.flex-group .col-md-5 {padding-right: 0;}

@media only screen and (max-width: 767px)
{
    .flex-input {margin: 10px 0 0 0}

    .flex-group {display: unset; flex-wrap: wrap}

    .flex-group .col-md-5 {padding: 0}
}

/*=============
 18 - 01 - 2022 
 ================*/

.flex-group .col-md-6 {-ms-flex: 0 0 50%;  flex: 0 0 50%;max-width: 100%;padding: 4px 0px;}

.flex-group {display:gregd}

.spech-cl .col-md-6 {-ms-flex: 0 0 50%;flex: 0 0 50%; max-width: 100%; padding: 0px;}
</style>

<!-- Tab 5 -->
<div class="scan-os cstm-id">
	<a class="btn shadow-2 mb-4 download-form" data-toggle="modal" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video" data-video="https://www.youtube.com/embed/AyGBwHGbWxY" data-video2="https://www.youtube.com/embed/q1y1U-JUgXI">
		<img src="{{url('assets/images/video-play.jpg')}}" style="height: 36px;display: block;margin: 1px auto;">
		Click for Step by Step video 
	</a>
</div>
<div class="tab-pane fade show active" id="section5" role="tabpanel" aria-labelledby="section5-tab">
    <h3 class="section-main-title text-c-blue f-w-800">Current Expenses</h3>
	<?php $i=0;?>
	<form name="client_expenses" id="client_expenses" action="{{route('client_expenses')}}" method="post">
	@csrf
    <div id="current-expenses-part-a">
        <div class="row mt-3">
            <!--<div class="col-md-12">-->
            <!--    <p class="section-part-title"><span>Debtor's Employer Information </span></p>-->
            <!--</div>-->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="d-block">Please list all dependents of you and your spouse with their age and relationship to you (if applicable).</label>

                    <div class="d-inline radio-primary">
                        <input type="radio" id="all_dependents_yes" name="any_dependents" onchange="getAllDependents('yes');" value="1" required <?php echo Helper::validate_key_toggle('any_dependents',$expenses,1);?>/>
                        <label for="all_dependents_yes" class="cr">Yes</label>
                    </div>
                    <div class="d-inline radio-primary">
                        <input type="radio" id="all_dependents_no" name="any_dependents" onchange="getAllDependents('no');" value="0" required <?php echo Helper::validate_key_toggle('any_dependents',$expenses,0);?>/>
                        <label for="all_dependents_no" class="cr">No</label>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row " id="all_dependents">
            <div class="col-md-12">
				<?php if(!empty($expenses['dependent_relationship'])){
				    // echo'<pre>';print_r($expenses);die;
					for($i=0;$i<count($expenses['dependent_relationship']);$i++){
				?>
                <div class="form-main w-100 all_dependents_form" id="all_dependents_form1">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Relationship</label>
                                <input type="text" class="form-control required dependent_relationship" name="dependent_relationship[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('dependent_relationship',$expenses, $i);?>" placeholder="Relationship" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" class="form-control required dependent_age" name="dependent_age[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('dependent_age',$expenses, $i);?>" placeholder="Age" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Does dependent live with you?</label><br>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="dependent_live_with" name="dependent_live_with[<?php echo $i;?>]" value="1" class="required dependent_live_with" required {{(@$expenses['dependent_live_with'][$i] == 1)?'checked':''}} />
                                    <label for="all_dependents_yes" class="cr">Yes</label>
                                </div>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="all_dependents_no" name="dependent_live_with[<?php echo $i;?>]" value="0" class="required dependent_live_with" required {{(@$expenses['dependent_live_with'][$i] == 0)?'checked':''}} />
                                    <label for="all_dependents_no" class="cr">No</label>
                                </div>
                                <!--<input type="text" class="form-control required dependent_live_with" name="dependent_live_with[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('dependent_live_with',$expenses, $i);?>" placeholder="Dependent " />-->
                            </div>
                        </div>
                    </div>
                </div>
				<?php }}else{?>
				<div class="form-main w-100 all_dependents_form" id="all_dependents_form1">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Relationship</label>
                                <input type="text" class="form-control required dependent_relationship" name="dependent_relationship[<?php echo $i;?>]" value="" placeholder="Relationship" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" class="form-control required dependent_age" name="dependent_age[<?php echo $i;?>]" value="" placeholder="Age" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Does dependent live with you?</label><br>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="dependent_live_with" name="dependent_live_with[<?php echo $i;?>]" value="1" class="required dependent_live_with" required />
                                    <label for="all_dependents_yes" class="cr">Yes</label>
                                </div>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="all_dependents_no" name="dependent_live_with[<?php echo $i;?>]" value="0" class="required dependent_live_with" required />
                                    <label for="all_dependents_no" class="cr">No</label>
                                </div>
                                <!--<input type="text" class="form-control required dependent_live_with" name="dependent_live_with[<?php echo $i;?>]" value="" placeholder="Dependent " />-->
                            </div>
                        </div>
                    </div>
                </div>
				<?php }?>
            </div>
			<?php if(!empty($expenses['dependent_relationship']) && count($expenses['dependent_relationship'])<6){?>
            <div class="col-md-6">
                <div class="c-a-btn">
                    <button class="btn btn-primary shadow-2 rounded-0"  onclick="addRelationshipForm();return false;"><i class="feather icon-plus mr-0"></i> Add More</button>
                    <?php }else{?>
                    <button class="btn btn-primary shadow-2 rounded-0"  onclick="addRelationshipForm();return false;"><i class="feather icon-plus mr-0"></i> Add More</button>
                    <?php }?>
                    <i class="fas fa-trash fa-lg mb-2 mt-2 removeRelationshipForm text-danger cursor-pointer"></i>
                </div>
            </div>
        </div>
        <div class="row">                
            <div class="col-md-12 pt-2">
                <div class="form-group">
                    <label class="d-block">Do you and your spouse live separately and maintain separate households?</label>
                    <div class="d-inline radio-primary">
                        <input type="radio" id="live_separately_yes" name="live_separately" onchange="getLiveSeparationData('yes');" value="1" required <?php echo Helper::validate_key_toggle('live_separately',$expenses,1);?>/>
                        <label for="live_separately_yes" class="cr">Yes</label>
                    </div>
                    <div class="d-inline radio-primary">
                        <input type="radio" id="live_separately_no" name="live_separately" onchange="getLiveSeparationData('no');" value="0" required <?php echo Helper::validate_key_toggle('live_separately',$expenses,0);?>/>
                        <label for="live_separately_no" class="cr">No</label>
                    </div>
                </div>
                <div class="form-group <?php echo Helper::key_hide_show_v('live_separately',$expenses);?>" id="live_separately_data">
                    <!-- <strong class="d-block"> Please let your attorney know and they will have to provide you with an additional copy of this section to detail the expenses for the completely separate household.</strong> -->
                    <!-- <p>REMOVE:<strong> Please let your attorney know and they will have to provide you with an additional copy of this section to detail the expenses for the completely separate household.</strong></p> -->
                </div>
            </div>
       
       
            <div class="col-md-12 py-3">
                <h3 class="font-lg-18">Indicate how much you pay for each item each month:</h3>
            </div>
            <div class="col-md-7 pt-2">
                <div class="form-group">
                    <label class="d-block">Primary rent or home mortgage:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                        </div>
                        <input type="number" class="form-control required" name="rent_home_mortage" value="<?php echo Helper::validate_key_value('rent_home_mortage',$expenses);?>"/>
                    </div>
                </div>
            </div>
			<?php //if($rented_flag==true){ //Appear only when property type is owned?>
            <div class="col-md-7 pt-2">
                <div class="form-group">
                    <label class="d-block">Does that amount include real estate taxes? </label>
                    <div class="d-inline radio-primary">
                        <input type="radio" id="real_estate_taxes_yes" name="real_estate_taxes" onchange="getRealEstateTaxData('no');" value="1" required <?php echo Helper::validate_key_toggle('real_estate_taxes',$expenses,1);?>/>
                        <label for="real_estate_taxes_yes" class="cr">Yes</label>
                    </div>
                    <div class="d-inline radio-primary">
                        <input type="radio" id="real_estate_taxes_no" name="real_estate_taxes" onchange="getRealEstateTaxData('yes');" value="0" required <?php echo Helper::validate_key_toggle('real_estate_taxes',$expenses,0);?>/>
                        <label for="real_estate_taxes_no" class="cr">No</label>
                    </div>
                </div>
                <div class="form-group <?php echo Helper::key_hide_show_v2('real_estate_taxes',$expenses);?>" id="real_estate_taxes_data">
                    <label class="d-block">how much do you pay?</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                        </div>
                        <input type="number" class="form-control required" name="estate_taxes_pay" value="<?php echo Helper::validate_key_value('estate_taxes_pay',$expenses);?>"/>
                    </div>
                </div>
            </div>
            <div class="col-md-7 pt-2">
                <div class="form-group">
                    <label class="d-block">Does that amount include property, homeowner's, or renter's insurance? </label>
                    <div class="d-inline radio-primary">
                        <input type="radio" id="amount_include_property_yes" name="amount_include_property" onchange="getAmountIncludePropertyData('no');" value="1" required <?php echo Helper::validate_key_toggle('amount_include_property',$expenses,1);?>/>
                        <label for="amount_include_property_yes" class="cr">Yes</label>
                    </div>
                    <div class="d-inline radio-primary">
                        <input type="radio" id="amount_include_property_no" name="amount_include_property" onchange="getAmountIncludePropertyData('yes');" value="0" required <?php echo Helper::validate_key_toggle('amount_include_property',$expenses,0);?>/>
                        <label for="amount_include_property_no" class="cr">No</label>
                    </div>
                </div>
                <div class="form-group <?php echo Helper::key_hide_show_v2('amount_include_property',$expenses);?>" id="amount_include_property_data">
                    <label class="d-block">how much do you pay?</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                        </div>
                        <input type="number" class="form-control required" name="amount_include_property_pay" value="<?php echo Helper::validate_key_value('amount_include_property_pay',$expenses);?>"/>
                    </div>
                </div>
            </div>
            <div class="col-md-7 pt-2">
                <div class="form-group">
                    <label class="d-block">Does that amount include any home maintenance, repair, or upkeep expenses? </label>
                    <div class="d-inline radio-primary">
                        <input type="radio" id="amount_include_home_yes" name="amount_include_home" onchange="getAmountIncludehomeData('no');" value="1" required <?php echo Helper::validate_key_toggle('amount_include_home',$expenses,1);?>/>
                        <label for="amount_include_home_yes" class="cr">Yes</label>
                    </div>
                    <div class="d-inline radio-primary">
                        <input type="radio" id="amount_include_home_no" name="amount_include_home" onchange="getAmountIncludehomeData('yes');" value="0" required <?php echo Helper::validate_key_toggle('amount_include_home',$expenses,0);?>/>
                        <label for="amount_include_home_no" class="cr">No</label>
                    </div>
                </div>
                <div class="form-group <?php echo Helper::key_hide_show_v2('amount_include_home',$expenses);?>" id="amount_include_home_data">
                    <label class="d-block">how much do you pay?</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                        </div>
                        <input type="number" class="form-control required" name="amount_include_home_pay" value="<?php echo Helper::validate_key_value('amount_include_home_pay',$expenses);?>"/>
                    </div>
                </div>
            </div>
            <div class="col-md-7 pt-2">
                <div class="form-group">
                    <label class="d-block">Does that amount include any homeowner's association or condominium dues? </label>
                    <div class="d-inline radio-primary">
                        <input type="radio" id="amount_include_homeowner_yes" name="amount_include_homeowner" onchange="getAmountIncludeHomeOwnerData('no');" value="1" required <?php echo Helper::validate_key_toggle('amount_include_homeowner',$expenses,1);?>/>
                        <label for="amount_include_homeowner_yes" class="cr">Yes</label>
                    </div>
                    <div class="d-inline radio-primary">
                        <input type="radio" id="amount_include_homeowner_no" name="amount_include_homeowner" onchange="getAmountIncludeHomeOwnerData('yes');" value="0" required <?php echo Helper::validate_key_toggle('amount_include_homeowner',$expenses,0);?>/>
                        <label for="amount_include_homeowner_no" class="cr">No</label>
                    </div>
                </div>
                <div class="form-group <?php echo Helper::key_hide_show_v2('amount_include_homeowner',$expenses);?>" id="amount_include_homeowner_data">
                    <label class="d-block">how much do you pay?</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                        </div>
                        <input type="number" class="form-control required" name="amount_include_homeowner_pay" value="<?php echo Helper::validate_key_value('amount_include_homeowner_pay',$expenses);?>"/>
                    </div>
                </div>
            </div>
            <div class="col-md-7 pt-2">
                <div class="form-group">
                    <label class="d-block">Are there additional mortgage payments on the above property?</label>
                    <div class="d-inline radio-primary">
                        <input type="radio" id="mortgage_payments_yes" name="mortgage_payments" onchange="getMortgagePaymentsrData('no');" value="1" required <?php echo Helper::validate_key_toggle('mortgage_payments',$expenses,0);?>/>
                        <label for="mortgage_payments_yes" class="cr">Yes</label>
                    </div>
                    <div class="d-inline radio-primary">
                        <input type="radio" id="mortgage_payments_no" name="mortgage_payments" onchange="getMortgagePaymentsrData('yes');" value="0" required <?php echo Helper::validate_key_toggle('mortgage_payments',$expenses,1);?>/>
                        <label for="mortgage_payments_no" class="cr">No</label>
                    </div>
                </div>
                <div class="form-group <?php echo Helper::key_hide_show_v2('mortgage_payments',$expenses);?>" id="mortgage_payments_data">
                    <label class="d-block">how much do you pay?</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                        </div>
                        <input type="number" class="form-control required" name="mortgage_payments_pay" value="<?php echo Helper::validate_key_value('mortgage_payments_pay',$expenses);?>"/>
                    </div>
                </div>
            </div>
			<?php //}?>
      
			
            <div class="col-md-7">
                <h3 class="font-lg-18">Utilities:</h3>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <label class="d-block">Electricity and heating fuel</label>
               
                    <!--div class="col-md-8">
                        <div class="form-group">
                            <input type="text" class="form-control required" name="utilities[electricity_heating_value]" value="<?php echo Helper::validate_key_loop_value('utilities',$expenses,'electricity_heating_value');?>"/>
                        </div>
                    </div-->
                    
                    
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                        </div>
                        <input type="number" class="form-control required" name="utilities[electricity_heating_price]" value="<?php echo Helper::validate_key_loop_value('utilities',$expenses,'electricity_heating_price');?>" aria-label="Username" aria-describedby="basic-addon1" />
                    </div>
                </div>
               
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <label class="d-block">Water and sewer</label>
               
                    <!--div class="col-md-8">
                        <div class="form-group">
                            <input type="text" class="form-control required" name="utilities[water_sewerl_value]" value="<?php //echo Helper::validate_key_loop_value('utilities',$expenses,'water_sewerl_value');?>"/>
                        </div>
                    </div-->
                   
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                        </div>
                        <input type="number" class="form-control required" name="utilities[water_sewerl_price]" value="<?php echo Helper::validate_key_loop_value('utilities',$expenses,'water_sewerl_price');?>"/>
                    </div>
                </div>  
            </div>
            <div class="col-md-7">
                <div class="form-group">
                     <label class="d-block">Telephone service/long distance:</label>
               
                    <!--div class="col-md-8">
                        <div class="form-group">
                            <input type="text" class="form-control required" name="utilities[telephone_service_value]" value="<?php //echo Helper::validate_key_loop_value('utilities',$expenses,'telephone_service_value');?>"/>
                        </div>
                    </div-->
                   
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                        </div>
                        <input type="number" class="form-control required" name="utilities[telephone_service_price]" value="<?php echo Helper::validate_key_loop_value('utilities',$expenses,'telephone_service_price');?>"/>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <label class="d-block">Do you have any other utility bills?</label>
                    <div class="d-inline radio-primary">
                        <input type="radio" id="utility_bills_yes" name="utility_bills" onchange="getUtilityBillsData('yes');" value="1" required <?php echo Helper::validate_key_toggle('utility_bills',$expenses,1);?>/>
                        <label for="utility_bills_yes" class="cr">Yes</label>
                    </div>
                    <div class="d-inline radio-primary">
                        <input type="radio" id="utility_bills_no" name="utility_bills" onchange="getUtilityBillsData('no');" value="0" required <?php echo Helper::validate_key_toggle('utility_bills',$expenses,0);?>/>
                        <label for="utility_bills_no" class="cr">No</label>
                    </div>
                </div>
                <div class="form-group <?php echo Helper::key_hide_show_v('utility_bills',$expenses);?>" id="utility_bills_data">
                    <label class="d-block">Describe additional utilities of combine amount:</label>
					<?php if(!empty($expenses['monthly_utilities_value'])){
						//for($i=0;$i<count($expenses['monthly_utilities_value']);$i++){
						?>
						<div class="form-main w-100 monthly_amount" id="monthly_amount1">
                          <div class="row">
                              <?php //dd($expenses); ?>
                                <div class="col-md-12">
                                <div class="input-group">
                                           <input type="text" value="<?php echo Helper::current(Helper::validate_key_value('monthly_utilities_bills',$expenses));?>" placeholder="Specify" name="monthly_utilities_bills" class="form-control required other_insurance_price"/>
                                        </div>
                                <div class="input-group pt-2">
                            
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                    </div> 
                                    <input type="number" class="form-control required monthly_utilities_value" name="monthly_utilities_value[<?php echo $i;?>]" value="<?php echo Helper::current(Helper::validate_key_value('monthly_utilities_value',$expenses));?>"/>
                                </div>
                        </div>
                        </div>
                        </div>
					<?php }?>
					
                    
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">   
                    <label class="d-block">Food and housekeeping supplies</label>
                   
                    <!--div class="col-md-8">
                        <div class="form-group">
                            <input type="text" class="form-control required" name="food_housekeeping_value" value="<?php //echo Helper::validate_key_value('food_housekeeping_value',$expenses);?>"/>
                        </div>
                    </div-->
                   
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                        </div>
                        <input type="number" class="form-control required" name="food_housekeeping_price" value="<?php echo Helper::validate_key_value('food_housekeeping_price',$expenses);?>"/>
                    </div>
                </div>
                
            </div>
            <div class="col-md-7">
                <div class="form-group">   
                    <label class="d-block">Childcare and Children Education Costs</label>
               
                    <!--div class="col-md-8">
                        <div class="form-group">
                            <input type="text" class="form-control required" name="childcare_value" value="<?php //echo Helper::validate_key_value('childcare_value',$expenses);?>"/>
                        </div>
                    </div-->
                   
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                        </div>
                        <input type="number" class="form-control required" name="childcare_price" value="<?php echo Helper::validate_key_value('childcare_price',$expenses);?>"/>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">   
                    
                    <label class="d-block">Clothing, laundry, and dry cleaning</label>
                
                    <!--div class="col-md-8">
                        <div class="form-group">
                            <input type="text" class="form-control required" name="laundry_value" value="<?php //echo Helper::validate_key_value('laundry_value',$expenses);?>"/>
                        </div>
                    </div-->
                   
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                        </div>
                        <input type="number" class="form-control required" name="laundry_price" value="<?php echo Helper::validate_key_value('laundry_price',$expenses);?>"/>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">   
                    <label class="d-block"> Personal care products and services:</label>
               
                    <!--div class="col-md-8">
                        <div class="form-group">
                            <input type="text" class="form-control required"  name="personal_care_value" value="<?php //echo Helper::validate_key_value('personal_care_value',$expenses);?>"/>
                        </div>
                    </div-->
                
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                        </div>
                        <input type="number" class="form-control required"  name="personal_care_price" value="<?php echo Helper::validate_key_value('personal_care_price',$expenses);?>"/>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">   
                    <label class="d-block">Medical and dental expenses:</label>
                   
                    <!--div class="col-md-8">
                        <div class="form-group">
                            <input type="text" class="form-control required" name="medical_dental_value" value="<?php //echo Helper::validate_key_value('medical_dental_value',$expenses);?>"/>
                        </div>
                    </div-->
                   
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                        </div>
                        <input type="number" class="form-control required" name="medical_dental_price" value="<?php echo Helper::validate_key_value('medical_dental_price',$expenses);?>"/>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">   
                    <label class="d-block"> Transportation (do NOT include car payments):</label>
               
                    <!--div class="col-md-8">
                        <div class="form-group">
                            <input type="text" class="form-control required" name="transportation_value" value="<?php //echo Helper::validate_key_value('transportation_value',$expenses);?>"/>
                        </div>
                    </div-->
                   
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                        </div>
                        <input type="number" class="form-control required" name="transportation_price" value="<?php echo Helper::validate_key_value('transportation_price',$expenses);?>"/>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">   
                     <label class="d-block">Recreation,entertainment, newspapers, magazines, and books: </label>
               
                    <!--div class="col-md-8">
                        <div class="form-group">
                            <input type="text" class="form-control required" name="entertainment_value" value="<?php //echo Helper::validate_key_value('entertainment_value',$expenses);?>"/>
                        </div>
                    </div-->
                   
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                        </div>
                        <input type="number" class="form-control required" name="entertainment_price" value="<?php echo Helper::validate_key_value('entertainment_price',$expenses);?>"/>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">   
                     <label class="d-block">Charitable contributions and religious donations:</label>
               
                    <!--div class="col-md-8">
                        <div class="form-group">
                            <input type="text" class="form-control required" name="charitablet_value" value="<?php //echo Helper::validate_key_value('charitablet_value',$expenses);?>"/>
                        </div>
                    </div-->
                  
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                        </div>
                        <input type="number" class="form-control required" name="charitablet_price" value="<?php echo Helper::validate_key_value('charitablet_price',$expenses);?>"/>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-12">
                <h3 class="font-lg-18 mt-3">
                    Insurance NOT deducted from wages or included in home mortgage payments or other real estate property expenses:</h3>
                <div class="row pt-2">
                    <div class="col-md-7">
                       
                        <div class="form-group">
                            <!--div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control required" name="life_insurance_value" value="<?php //echo Helper::validate_key_value('life_insurance_value',$expenses);?>"/>
                                </div>
                            </div-->
                            <label class="d-block">Life insurance</label>
                           
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">$</span>
                                </div>
                                <input type="number" class="form-control required" name="life_insurance_price" value="<?php echo Helper::validate_key_value('life_insurance_price',$expenses);?>"/>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-md-7">
                      
                        <div class="form-group">
                            <!--div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control required" name="health_insurance_value" value="<?php //echo Helper::validate_key_value('health_insurance_value',$expenses);?>"/>
                                </div>
                            </div-->
                            <label class="d-block">Health insurance</label>
                           
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                    </div>
                                    <input type="number" class="form-control required" name="health_insurance_price" value="<?php echo Helper::validate_key_value('health_insurance_price',$expenses);?>"/>
                                </div>
                           
                        </div>
                    </div>
                    <div class="col-md-7">
                       
                    <div class="form-group">
                            <!--div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control required" name="auto_insurance_value" value="<?php //echo Helper::validate_key_value('auto_insurance_value',$expenses);?>"/>
                                </div>
                            </div-->
                            <label class="d-block">Auto insurance</label>
                           
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                    </div>
                                    <input type="number" class="form-control required" name="auto_insurance_price" value="<?php echo Helper::validate_key_value('auto_insurance_price',$expenses);?>"/>
                                </div>
                            
                        </div>
                    </div>
					<?php
					//dump($expenses['other_insurance_value']);
					?>
                    <div class="col-md-7">
                    <label class="d-block">Do you have any other insurance not listed above? </label>
                    <div class="d-inline radio-primary">

                        <input type="radio" id="otherInsurance_notListed_yes" name="otherInsurance_notListed" onchange="getotherInsurance_notListed('yes');" value="1" required <?php echo Helper::validate_key_toggle('otherInsurance_notListed',$expenses,0);?>/>
                        <label for="otherInsurance_notListed_yes" class="cr">Yes</label>
                    </div>
                    <div class="d-inline radio-primary">
                        <input type="radio" id="otherInsurance_notListed_no" name="otherInsurance_notListed" onchange="getotherInsurance_notListed('no');" value="0" required <?php echo Helper::validate_key_toggle('otherInsurance_notListed',$expenses,1);?>/>
                        <label for="otherInsurance_notListed_no" class="cr">No</label>
                    </div>
						<?php if(!empty($expenses['other_insurance_price'])){
							//for($i=0;$i<count($expenses['other_insurance_price']);$i++){
						?>
					   <div class="form-main w-100 other_insurance <?php echo Helper::key_hide_show_v2('otherInsurance_notListed',$expenses);?>" id="other_insurance1">
                             <div class="form-group">
                                <!--div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control required other_insurance_value" name="other_insurance_value[<?php //echo $i;?>]" value="<?php //echo Helper::validate_key_loop_value('other_insurance_price',$expenses, $i);?>" placeholder="Describe here" />
                                    </div>
                                </div-->
                               
                                <div class="flex-group">
                                     <div class="col-md-6">   
                                        <div class="input-group">
                                           <input type="text" placeholder="Specify" name="other_insurance_value" class="form-control required other_insurance_value" value="<?php echo Helper::current(Helper::validate_key_value('other_insurance_value',$expenses));?>"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">   
                                        <div class="input-group flex-input">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">$</span>
                                            </div>
                                            <input type="number" class="form-control required other_insurance_price" name="other_insurance_price" value="<?php echo Helper::current(Helper::validate_key_value('other_insurance_price',$expenses));?>"/>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
						<?php }else{?>
						<div class="form-main w-100 other_insurance" id="other_insurance1">
                            <div class="row">
                                <!--div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control required other_insurance_value" name="other_insurance_value[<?php //echo $i;?>]" value="<?php //echo Helper::validate_key_value('other_insurance_value',$expenses);?>" placeholder="Describe here" />
                                    </div>
                                </div-->
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">$</span>
                                        </div>
                                        <input type="number" class="form-control required other_insurance_price" name="other_insurance_price[<?php echo $i;?>]" value="<?php echo Helper::validate_key_value('other_insurance_price',$expenses);?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php }?>
                    </div>

                    <div class="col-md-7">
                        <label class="d-block">Tax bills NOT deducted from wages or included in home mortgage payments or other real estate property expenses: </label>
						<?php if(!empty($expenses['taxbills_price'])){
							// for($i=0;$i<count($expenses['taxbills_price']);$i++){
						?>
                        <div class="form-main w-100 tax_bills" id="tax_bills1">
                            <div class="row">
                                <!--div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control required taxbills_value" name="taxbills_value[<?php //echo $i;?>]" value="<?php //echo Helper::validate_key_loop_value('taxbills_value',$expenses, $i);?>" placeholder="Describe here" />
                                    </div>
                                </div-->
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">$</span>
                                        </div>
                                        <input type="number" class="form-control required taxbills_price" name="taxbills_price" value="<?php echo Helper::current(Helper::validate_key_value('taxbills_price',$expenses));?>"/>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <?php }else{?>
						<div class="form-main w-100 tax_bills" id="tax_bills1">
                            <div class="row">
                                <!--div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control required taxbills_value" name="taxbills_value[<?php //echo $i;?>]" value="<?php //echo Helper::validate_key_value('taxbills_value',$expenses);?>" placeholder="Describe here" />
                                    </div>
                                </div-->
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">$</span>
                                        </div>
                                        <input type="number" class="form-control required taxbills_price" name="taxbills_price[<?php echo $i;?>]" value="<?php echo Helper::validate_key_value('taxbills_price',$expenses);?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
						</div>
                    </div>

                    <div class="row m-0">
                        <label class="d-block">Installment payments for car, furniture, etc. (Describe): </label>
						<?php if(!empty($expenses['installmentpayments_price'])){
							for($i=0;$i<count($expenses['installmentpayments_price']);$i++){
						?>
                        <div class="form-main w-100 installment_payments" id="installment_payments1">
                            <div class="row">
                                <!--div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control required installmentpayments_value" name="installmentpayments_value[<?php //echo $i;?>]" value="<?php //echo Helper::validate_key_loop_value('installmentpayments_value',$expenses, $i);?>" placeholder="Describe here" />
                                    </div>
                                </div-->
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">$</span>
                                        </div>
                                        <input type="number" class="form-control required installmentpayments_price" name="installmentpayments_price[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('installmentpayments_price',$expenses, $i);?>"/>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <?php }}else{?>
						<div class="form-main w-100 installment_payments" id="installment_payments1">
                            <div class="row">
                                <!--div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control required installmentpayments_value" name="installmentpayments_value[<?php //echo $i;?>]" value="<?php //echo Helper::validate_key_value('installmentpayments_value',$expenses);?>" placeholder="Describe here" />
                                    </div>
                                </div-->
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">$</span>
                                        </div>
                                        <input type="number" class="form-control required installmentpayments_price" name="installmentpayments_price[<?php echo $i;?>]" value="<?php echo Helper::validate_key_value('installmentpayments_price',$expenses);?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php }?>
						<?php if(!empty($expenses['installmentpayments_price']) && count($expenses['installmentpayments_price'])<6){?>
                        <div class="form-main w-100">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="add-more-btn c-a-btn">
                                        <button class="btn btn-primary shadow-2 rounded-0"  onclick="addInstallmentPaymentsForm();return false;"><i class="feather icon-plus mr-0"></i> Add More</button>
                                        <?php }else{?>
                                        
                                        <button class="btn btn-primary shadow-2 rounded-0"  onclick="addInstallmentPaymentsForm();return false;"><i class="feather icon-plus mr-0"></i> Add More</button>
                                        <?php }?>
                                        <i class="fas fa-trash fa-lg mb-2 mt-2 removeInstallmentPaymentsForm text-danger cursor-pointer"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <div class="row">
                            <!--div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control required" name="alimony_value" value="<?php //echo Helper::validate_key_value('alimony_value',$expenses);?>"/>
                                </div>
                            </div-->
                            <div class="col-md-7">
                            <label class="d-block">Alimony, maintenance and/or child support paid to others not already deducted:</label>
            
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                    </div>
                                    <input type="number" class="form-control required" name="alimony_price" value="<?php echo Helper::validate_key_value('alimony_price',$expenses);?>"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <label class="d-block"> Payments for support of additional dependents not living at your home:</label>
                        <div class="d-inline radio-primary">
                            <input type="radio" id="paymentforsupport_dependents_n_yes" name="paymentforsupport_dependents_n" onchange="getPaymentforsupport_n('yes');" value="1" required <?php echo Helper::validate_key_toggle('paymentforsupport_dependents_n',$expenses,0);?>/>
                            <label for="paymentforsupport_dependents_n_yes" class="cr">Yes</label>
                        </div>
                        <div class="d-inline radio-primary">
                            <input type="radio" id="paymentforsupport_dependents_n_no" name="paymentforsupport_dependents_n" onchange="getPaymentforsupport_n('no');" value="0" required <?php echo Helper::validate_key_toggle('paymentforsupport_dependents_n',$expenses,1);?>/>
                            <label for="paymentforsupport_dependents_n_no" class="cr">No</label>
                        </div>
                        <div class="row  <?php echo Helper::key_hide_show_v2('paymentforsupport_dependents_n',$expenses);?>" id="paymentforsupport_dependents_n1">
                            <div class="col-md-7">
                                <div class="flex-group">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control required" placeholder="Specify" name="payments_dependents_value" value="<?php echo Helper::validate_key_value('payments_dependents_value',$expenses);?>"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group flex-input">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">$</span>
                                            </div>
                                            <input type="number" class="form-control required" name="payments_dependents_price" value="<?php echo Helper::validate_key_value('payments_dependents_price',$expenses);?>"/>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <div class="form-group">
							<?php //if($rented_flag==false){?>
							<?php //Other Real Estate Property expenses NOT included with Rent or Home Mortgage Property?>
                            <label class="d-block">Do you have other real property expenses NOT already listed above</label>
							<div class="d-inline radio-primary">
                                <input type="radio" id="otherProperty_yes" name="mortgage_property1" onchange="getRealPropertyexpenses('yes');" value="1" required <?php echo Helper::validate_key_toggle('mortgage_property1',$expenses,0);?>/>
                                <label for="otherProperty_yes" class="cr">Yes</label>
                            </div>
                            <div class="d-inline radio-primary">
                                <input type="radio" id="otherProperty_no" name="mortgage_property1" onchange="getRealPropertyexpenses('no');" value="0" required <?php echo Helper::validate_key_toggle('mortgage_property1',$expenses,1);?>/>
                                <label for="otherProperty_no" class="cr">No</label>
                            </div>
                            <?php //}?>


                                <div class="spech-cl">

                            <div class="row <?php echo Helper::key_hide_show_v2('mortgage_property1',$expenses);?>" id="RealPropertyexpenses_data">
                                <div class="col-md-7">
							<?php //if($rented_flag==false){?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php //a. Mortgage payment on other Real Estate Property?>
                                        <label class="d-block"> Mortgage on other Property</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">$</span>
                                            </div>
                                            <input type="number" class="form-control required" name="mortgage_property[other_real_estate_price]" value="<?php echo Helper::validate_key_loop_value('mortgage_property',$expenses,'other_real_estate_price');?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php //b. Taxes on other Real Estate Property?>
                                        <label class="d-block">Real Estate Taxes</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">$</span>
                                            </div>
                                            <input type="number" class="form-control required" name="mortgage_property[tax]" value="<?php echo Helper::validate_key_loop_value('mortgage_property',$expenses,'tax');?>"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php //c. Other Real Property, Homeowner's, or Renter's Insurance payments?>
                                        <label class="d-block">Property, Homeowner's, or Renter's Insurance</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">$</span>
                                            </div>
                                            <input type="number" class="form-control required" name="mortgage_property[rental_insurance_price]" value="<?php echo Helper::validate_key_loop_value('mortgage_property',$expenses,'rental_insurance_price');?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
										<?php //d. Home maintenance(including repairs and upkeep) ?>
                                        </label>
                                        <label class="d-block">Maintenance, repair, and upkeep expenses</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">$</span>
                                            </div>
                                            <input type="number" class="form-control required" name="mortgage_property[home_maintenance_price]" value="<?php echo Helper::validate_key_loop_value('mortgage_property',$expenses,'home_maintenance_price');?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php //e. Homeowner's association or condominium dues ?>
                                        <label class="d-block">Homeowner's association or condominium dues </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">$</span>
                                            </div>
                                            <input type="number" class="form-control required" name="mortgage_property[condominium_price]" value="<?php echo Helper::validate_key_loop_value('mortgage_property',$expenses,'condominium_price');?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
							<?php //}?>
                                <div class="col-md-12" style="display:none">
                                    <label>
                                        Other expenses (Describe): <strong><i>(please see "Additional Expenses" below before putting anything here</i></strong>
                                    </label>
									<?php if(!empty($expenses['additional_expenses_price'])){
										for($i=0;$i<count($expenses['additional_expenses_price']);$i++){
									?>
                                    <div class="form-main w-100 other_expenses">
                                        <div class="row">
                                            <!--div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control required additional_expenses_value" name="additional_expenses_value[<?php //echo $i;?>]" value="<?php //echo Helper::validate_key_loop_value('additional_expenses_value',$expenses, $i);?>"/>
                                                </div>
                                            </div-->
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">$</span>
                                                    </div>
                                                    <input type="number" class="form-control additional_expenses_price" name="additional_expenses_price[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('additional_expenses_price',$expenses, $i);?>"/>
                                                </div>
                                            </div>
                                        </div><br>
                                    </div>
                                   <?php }}else{?>
									<div class="form-main w-100 other_expenses">
                                        <div class="row">
                                            <!--div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control required additional_expenses_value" name="additional_expenses_value[<?php //echo $i;?>]" value="<?php //echo Helper::validate_key_value('additional_expenses_value',$expenses);?>"/>
                                                </div>
                                            </div-->
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">$</span>
                                                    </div>
                                                    <input type="number" class="form-control additional_expenses_price" name="additional_expenses_price[<?php echo $i;?>]" value="<?php echo Helper::validate_key_value('additional_expenses_price',$expenses);?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<?php }?>
									<?php if(!empty($expenses['additional_expenses_price']) && count($expenses['additional_expenses_price'])<6){?>
                                    <div class="add-more-btn">
                                        <button class="btn btn-primary shadow-2 rounded-0"  onclick="addOtherExpensesForm();return false;"><i class="feather icon-plus mr-0"></i> Add More</button>
                                    </div>
									<?php }else{?>
									<div class="add-more-btn">
                                        <button class="btn btn-primary shadow-2 rounded-0"  onclick="addOtherExpensesForm();return false;"><i class="feather icon-plus mr-0"></i> Add More</button>
                                    </div>
									<?php }?>
                                </div>
                           
                                <div class="col-md-12" style="display:none">
                                    <label>Mandatory payroll deductions not already listed</label>
									<?php if(!empty($expenses['payroll_deductions_price'])){
										for($i=0;$i<count($expenses['payroll_deductions_price']);$i++){
									?>
                                    <div class="form-main w-100 payroll_deductions">
                                        <div class="row">
                                            <!--div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control required payroll_deductions_value" name="payroll_deductions_value[<?php //echo $i;?>]" value="<?php //echo Helper::validate_key_loop_value('payroll_deductions_value',$expenses, $i);?>"/>
                                                </div>
                                            </div-->
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">$</span>
                                                    </div>
                                                    <input type="number" class="form-control payroll_deductions_price" name="payroll_deductions_price[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('payroll_deductions_price',$expenses, $i);?>"/>
                                                </div>
                                            </div>
                                        </div><br>
                                    </div>
                                    <?php }}else{?>
									<div class="form-main w-100 payroll_deductions">
                                        <div class="row">
                                            <!--div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control required payroll_deductions_value" name="payroll_deductions_value[<?php //echo $i;?>]" value="<?php //echo Helper::validate_key_value('payroll_deductions_value',$expenses);?>"/>
                                                </div>
                                            </div-->
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">$</span>
                                                    </div>
                                                    <input type="number" class="form-control payroll_deductions_price" name="payroll_deductions_price[<?php echo $i;?>]" value="<?php echo Helper::validate_key_value('payroll_deductions_price',$expenses);?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<?php }?>
									<?php if(!empty($expenses['payroll_deductions_price']) && count($expenses['payroll_deductions_price'])<6){?>
                                    <div class="form-main w-100">
                                        <div class="row">
                                            <div class="c-a-btn">
                                                <button class="btn btn-primary shadow-2 rounded-0"  onclick="addPayrollDeductionsForm();return false;"><i class="feather icon-plus mr-0"></i> Add More</button>
                                                <?php }else{?>
                                                <button class="btn btn-primary shadow-2 rounded-0"  onclick="addPayrollDeductionsForm();return false;"><i class="feather icon-plus mr-0"></i> Add More</button>
                                                <i class="fas fa-trash fa-lg mb-2 mt-2 removeRelationshipForm text-danger cursor-pointer"></i>   
                                            </div>
									        <?php }?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 pt-3">
                                    <label>Court ordered payments not already listed:</label>
									<?php if(!empty($expenses['court_payments_price'])){
										for($i=0;$i<count($expenses['court_payments_price']);$i++){
									?>
                                    <div class="form-main w-100 ordered_payments">
                                        <div class="row">
                                            <!--div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control required court_payments_value" name="court_payments_value[<?php //echo $i;?>]" value="<?php //echo Helper::validate_key_loop_value('court_payments_value',$expenses, $i);?>"/>
                                                </div>
                                            </div-->
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">$</span>
                                                    </div>
                                                    <input type="number" class="form-control required court_payments_price" name="court_payments_price[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('court_payments_price',$expenses, $i);?>"/>
                                                </div>
                                            </div>
                                        </div>
										<br>
                                    </div>
									<?php }}else{?>
									<div class="form-main w-100 ordered_payments">
                                        <div class="row">
                                            <!--div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control required court_payments_value" name="court_payments_value[<?php //echo $i;?>]" value="<?php //echo Helper::validate_key_value('court_payments_value',$expenses);?>"/>
                                                </div>
                                            </div-->
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">$</span>
                                                    </div>
                                                    <input type="number" class="form-control required court_payments_price" name="court_payments_price[<?php echo $i;?>]" value="<?php echo Helper::validate_key_value('court_payments_price',$expenses);?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<?php }?>
									<?php if(!empty($expenses['court_payments_price']) && count($expenses['court_payments_price'])<6){?>
                                    <div class="add-more-btn">
                                        <button class="btn btn-primary shadow-2 rounded-0"  onclick="addOrderedPaymentsForm();return false;"><i class="feather icon-plus mr-0"></i> Add More</button>
                                    </div>
									<?php }else{?>
									<div class="add-more-btn">
                                        <button class="btn btn-primary shadow-2 rounded-0"  onclick="addOrderedPaymentsForm();return false;"><i class="feather icon-plus mr-0"></i> Add More</button>
                                    </div>
									<?php }?>
                                </div>

                                <div class="col-md-12 pt-3" style="display:none">
                                    <label class="d-block"> Education for employment or for a physically or mentally challenged child:</label>
                                    <div class="row">
                                        <!--div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control required" name="education_employment_value" value="<?php ///echo Helper::validate_key_value('education_employment_value',$expenses);?>"/>
                                            </div>
                                        </div-->
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">$</span>
                                                </div>
                                                <input type="number" class="form-control" name="education_employment_price" value="<?php echo Helper::validate_key_value('education_employment_price',$expenses);?>"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12" style="display: none">
                                    <label class="d-block">Child care <i>(baby sitting, day care, nursery & preschool, etc.):</i></label>
                                    <div class="row">
                                        <!--div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control required" name="child_care_value" value="<?php //echo Helper::validate_key_value('child_care_value',$expenses);?>"/>
                                            </div>
                                        </div--->
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">$</span>
                                                </div>
                                                <input type="number" class="form-control" name="child_care_price" value="<?php echo Helper::validate_key_value('child_care_price',$expenses);?>"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12" style="display: none">
                                    <label class="d-block"> Disability Insurance<i> (if not listed above):</i></label>
                                    <div class="row">
                                        <!--div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control required" name="disability_insurance_value" value="<?php //echo Helper::validate_key_value('disability_insurance_value',$expenses);?>"/>
                                            </div>
                                        </div-->
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">$</span>
                                                </div>
                                                <input type="number" class="form-control" name="disability_insurance_price" value="<?php echo Helper::validate_key_value('disability_insurance_price',$expenses);?>"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="display: none">
                                    <label class="d-block"> Health Savings Account:</label>
                                    <div class="row">
                                        <!--div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control required" name="health_savings_value" value="<?php //echo Helper::validate_key_value('health_savings_value',$expenses);?>"/>
                                            </div>
                                        </div-->
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">$</span>
                                                </div>
                                                <input type="number" class="form-control" name="health_savings_price" value="<?php echo Helper::validate_key_value('health_savings_price',$expenses);?>"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="display: none">
                                    <label class="d-block">Care for elderly, chronically ill or disabled family members:</label>
                                    <div class="row">
                                        <!--div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control required" name="elderly_value" value="<?php //echo Helper::validate_key_value('elderly_value',$expenses);?>"/>
                                            </div>
                                        </div-->
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">$</span>
                                                </div>
                                                <input type="number" class="form-control" name="elderly_price" value="<?php echo Helper::validate_key_value('elderly_price',$expenses);?>"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12" style="display:none;">
                                    <label class="d-block"> Education expense for your children under 18:</label>
                                    <div class="row">
                                        <!--div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control required" name="education_expense_value" value="<?php //echo Helper::validate_key_value('education_expense_value',$expenses);?>"/>
                                            </div>
                                        </div-->
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">$</span>
                                                </div>
                                                <input type="number" class="form-control" name="education_expense_price" value="<?php echo Helper::validate_key_value('education_expense_price',$expenses);?>"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="display: none">
                                    <label class="d-block"> Non-mandatory contributions to retirement accounts<i>(including loan repayments)</i> : </label>
									<?php if(!empty($expenses['non_mandatory_contributions_price'])){
										for($i=0;$i<count($expenses['non_mandatory_contributions_price']);$i++){
									?>
                                    <div class="form-main w-100 retirement_accounts">
                                        <div class="row">
                                            <!--div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control required retirement_account_value" name="non_mandatory_contributions_value[<?php //echo $i;?>]" value="<?php //echo Helper::validate_key_loop_value('non_mandatory_contributions_value',$expenses, $i);?>"/>
                                                </div>
                                            </div-->
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">$</span>
                                                    </div>
                                                    <input type="number" class="form-control retirement_account_price" name="non_mandatory_contributions_price[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('non_mandatory_contributions_price',$expenses, $i);?>"/>
                                                </div>
                                            </div>
                                        </div><br>
                                    </div>
                                    <?php }}else{?>
									<div class="form-main w-100 retirement_accounts">
                                        <div class="row">
                                            <!--div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control required retirement_account_value" name="non_mandatory_contributions_value[<?php //echo $i;?>]" value="<?php //echo Helper::validate_key_value('non_mandatory_contributions_value',$expenses);?>"/>
                                                </div>
                                            </div-->
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">$</span>
                                                    </div>
                                                    <input type="number" class="form-control required retirement_account_price" name="non_mandatory_contributions_price[<?php echo $i;?>]" value="<?php echo Helper::validate_key_value('non_mandatory_contributions_price',$expenses);?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<?php }?>
									<?php if(!empty($expenses['non_mandatory_contributions_price']) && count($expenses['non_mandatory_contributions_price'])<6){?>
                                    <div class="add-more-btn">
                                        <button class="btn btn-primary shadow-2 rounded-0"  onclick="addRetirementAccountsForm();return false;"><i class="feather icon-plus mr-0"></i> Add More</button>
                                    </div>
									 <?php }else{?>
									 <div class="add-more-btn">
                                        <button class="btn btn-primary shadow-2 rounded-0"  onclick="addRetirementAccountsForm();return false;"><i class="feather icon-plus mr-0"></i> Add More</button>
                                    </div>
									<?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 pt-3">
                <div class="form-group">
                    <label class="d-block">Do you expect any increase or decrease in expenses to occur in the next year?</label>

                    <div class="d-inline radio-primary">
                        <input onchange="getExpIncBox('yes');" type="radio" id="increase_decrease_expenses_option" name="increase_decrease_expenses_option"  value="1" required <?php echo Helper::validate_key_toggle('increase_decrease_expenses_option',$expenses,1);?>/>
                        <label for="all_dependents_yes" class="cr">Yes</label>
                    </div>
                    <div class="d-inline radio-primary">
                        <input onchange="getExpIncBox('no');" type="radio" id="increase_decrease_expenses_option" name="increase_decrease_expenses_option"  value="0" required <?php echo Helper::validate_key_toggle('increase_decrease_expenses_option',$expenses,0);?>/>
                        <label for="all_dependents_no" class="cr">No</label>
                    </div>

                    <div id="div_desc_incexp" class="<?php echo Helper::key_hide_show_v('increase_decrease_expenses_option',$expenses);?>">
                        <textarea id="increase_decrease_expenses" name="increase_decrease_expenses" class="form-control required" cols="30" rows="4" placeholder="Description"><?php echo Helper::validate_key_value('increase_decrease_expenses',$expenses);?></textarea>
                    </div>
                </div>
                </div> 
        </div>  
        <div class="row">
            <div class="col-md-12">
                <div class="next-part-btn text-right">
				<?php if(!empty($can_editable)){?>
				<?php if(!empty($expenses['id'])){?>
				<input type="hidden" class="property_vehicle_ids"  name="id" value="<?php echo Helper::validate_value($expenses['id']);?>">
                    <button class="btn btn-primary shadow-2 mb-4" type="submit">Save </button>
				<?php }else{?>
					<button class="btn btn-primary shadow-2 mb-4" type="submit">Submit </button>
				<?php }?>
				<?php }else{?>
						<a href="{{route('client_finacial_affairs')}}" class="btn btn-primary shadow-2 mb-4">Submit</a>
				<?php }?>
                </div>
            </div>
        </div>
    
	</form>
<script>
    $(document).ready(function(){
       
        $('.removeInstallmentPaymentsForm').click(function() {
            let x = $(document).find(".installment_payments").length;
            if (x < 2) {
                alert("You can't remove last element")
            } else {
                $('#installment_payments1').remove();
            }
        })

        $('.removeTaxbillsForm').click(function() {
            let x = $(document).find(".tax_bills").length;
            if (x < 2) {
                alert("You can't remove last element")
            } else {
                $('#tax_bills1').remove();
            }
        })

        $('.removeOtherInsuranceForm').click(function() {
            let x = $(document).find(".other_insurance").length;
            if (x < 2) {
                alert("You can't remove last element")
            } else {
                $('#other_insurance1').remove();
            }
        })
        
        $('.removeMonthyAmountForm').click(function() {
            let x = $(document).find(".monthly_amount").length;
            if (x < 2) {
                alert("You can't remove last element")
            } else {
                $('#monthly_amount1').remove();
            }
        })

        $('.removeRelationshipForm').click(function() {
            let x = $(document).find(".all_dependents_form").length;
            if (x < 2) {
                alert("You can't remove last element")
            } else {
                $('#all_dependents_form1').remove();
            }
        })

       

		$("#client_expenses").validate({
			errorPlacement: function (error, element) {
				if($(element).parents(".form-group").next('label').hasClass('error')){
					$(element).parents(".form-group").next('label').remove();
					$(element).parents(".form-group").after($(error)[0].outerHTML);
				}else{
					$(element).parents(".form-group").after($(error)[0].outerHTML);
				}
				if($(element).parents(".input-group").next('label').hasClass('error')){
					$(element).parents(".input-group").next('label').remove();
					$(element).parents(".input-group").after($(error)[0].outerHTML);
				}else{
					$(element).parents(".input-group").after($(error)[0].outerHTML);
				}
			},
			success: function(label,element) {
				label.parent().removeClass('error');
				$(element).parents(".form-group").next('label').remove();
				$(element).parents(".input-group").next('label').remove();
			},
		});
	});
    
</script>
</div>
<!-- Tab 5 End-->
