<div class="form-main mt-3 w-100 vehicle-form removeDiv">
<?php 
$vehicle_car_loan=(!empty($vehicle['vehicle_car_loan']))?json_decode($vehicle['vehicle_car_loan'],1):[];
// dump($vehicle);
?>
			<?php if(!empty($vehicle['id'])){?>
			<input type="hidden" class="property_vehicle_ids"  name="property_vehicle[id][<?php echo $i;?>]" value="<?php echo Helper::validate_value($vehicle['id']);?>">
			<?php }?>
			<div class="col-md-12 getOwnTypeProperty_obj_data">
				<div class="form-group">
					<label class="d-block">Do you own this type of property?
					</label>
					<div class="d-inline radio-primary">
						<input type="radio" required  id="own_type_property_yes_<?php echo $i;?>"
							onchange="getOwnTypeProperty_obj('yes',this);" class="own_any_property" name="property_vehicle[own_any_property][<?php echo $i;?>]" value="1" <?php echo Helper::validate_key_toggle('own_any_property',$vehicle,1);?>>
						<label for="own_type_property_yes_<?php echo $i;?>" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary">
						<input type="radio" required  id="own_type_property_no_<?php echo $i;?>"
							onchange="getOwnTypeProperty_obj('no', this);" class="own_any_property" name="property_vehicle[own_any_property][<?php echo $i;?>]" value="0" <?php echo Helper::validate_key_toggle('own_any_property',$vehicle,0);?>>
						<label for="own_type_property_no_<?php echo $i;?>" class="cr">No</label>
					</div>

				</div>
			</div>
			<!-- Condition data -->
			<div class="col-md-12 <?php echo Helper::key_hide_show_v('own_any_property',$vehicle);?> pt-3 getOwnTypeProperty" >
			 
			<div class="row">
					<div class="col-md-6">
						<div class="form-group">
			<select class="form-control property_type required" name="property_vehicle[property_type][<?php echo $i;?>]">
				<option value="">Vehicle</option>
				<option value="Motorcycle" <?php if(Helper::validate_key_value('property_type',$vehicle) == 'Motorcycle')  echo'selected'; else '' ?> >Motorcycle</option>
				<option value="Watercraft" <?php if(Helper::validate_key_value('property_type',$vehicle) == 'Watercraft')  echo'selected'; else '' ?> >Watercraft</option>
				<option value="Aircraft" <?php if(Helper::validate_key_value('property_type',$vehicle) == 'Aircraft')  echo'selected'; else '' ?> >Aircraft</option>
				<option value="Motor Home" <?php if(Helper::validate_key_value('property_type',$vehicle) == 'Motor Home')  echo'selected'; else '' ?> >Motor Home</option>
				<option value="Recreational Vehicles" <?php if(Helper::validate_key_value('property_type',$vehicle) == 'Recreational Vehicles')  echo'selected'; else '' ?> >Recreational Vehicles</option>
			</select>

			</div>
			</div>
			</div>

				<h5 class="mb-2">Description</h5>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Year
							</label>
							<input type="text" class="form-control required vehicle_property_year"
								placeholder="Year" name="property_vehicle[property_year][<?php echo $i;?>]" value="<?php echo Helper::validate_key_value('property_year',$vehicle);?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Make
							</label>
							<input type="text" class="form-control required vehicle_property_make"
								placeholder="Make"  name="property_vehicle[property_make][<?php echo $i;?>]" value="<?php echo Helper::validate_key_value('property_make',$vehicle);?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Model
							</label>
							<input type="text" class="form-control required vehicle_property_model"
								placeholder="Model"  name="property_vehicle[property_model][<?php echo $i;?>]" value="<?php echo Helper::validate_key_value('property_model',$vehicle);?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Mileage
							</label>
							<input type="text" class="form-control required vehicle_property_mileage"
								placeholder="Mileage"  name="property_vehicle[property_mileage][<?php echo $i;?>]" value="<?php echo Helper::validate_key_value('property_mileage',$vehicle);?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Style of vehicle
							</label>
							<input type="text" class="form-control required vehicle_property_other_info"
								placeholder="Other information"  name="property_vehicle[property_other_info][<?php echo $i;?>]" value="<?php echo Helper::validate_key_value('property_other_info',$vehicle);?>">
						</div>
					</div>
					<div class="col-md-12 pt-3">

						<h5 class="mb-2">Estimated <strong> Value of </strong>Property
						<span style="font-size:12px; padding:0 12px">
							You can find out the value of your car here <a target="_blank" href="https://www.kbb.com">kbb.com</a> and/or <a href="https://www.nada.com" target="_blank">nada.com</a>
						</span>
						</h5> 
						<div class="form-group">
							<label>Property Value</label>
							<div class="input-group col-md-6">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">$</span>
								 </div>
								<input type="text" class="form-control required vehicle_property_estimated_value"
								placeholder="Property value" name="property_vehicle[property_estimated_value][<?php echo $i;?>]" value="<?php echo Helper::validate_key_value('property_estimated_value',$vehicle);?>">
							</div>
						</div>
					</div>
                    

                    <div class="col-md-6 form-group">
                        <label class="d-block">Would you like to retain the above property?
                        </label>
                        <div class="d-inline radio-primary">
                            <input type="radio" required  id="retain_above_property_yes_<?php echo $i;?>"
                                   class="currently_lived" name="property_vehicle[retain_above_property][<?php echo $i;?>]" value="1" <?php echo Helper::validate_key_toggle('retain_above_property',$vehicle,1);?>>
                            <label for="retain_above_property_yes_<?php echo $i;?>" class="cr">Yes</label>
                        </div>
                        <div class="d-inline radio-primary">
                            <input type="radio" required  id="retain_above_property_no_<?php echo $i;?>"
                                   class="currently_lived" name="property_vehicle[retain_above_property][<?php echo $i;?>]" value="0" <?php echo Helper::validate_key_toggle('retain_above_property',$vehicle,0);?>>
                            <label for="retain_above_property_no_<?php echo $i;?>" class="cr">No</label>
                        </div>

                    </div>

					<div class="col-md-12 pt-3">
						<h5 class="mb-2"><strong class="d-block"> Owned by:</strong>
							<p class="fs-4 pt-2">You, your spouse, both you and your
								spouse,
								you and at least one
								person other than your
								spouse.</p>
						</h5>
						<div class="form-group">
							<div class="d-inline radio-primary">
								<input type="radio" required  id="owned_by_vehicle_you"
									  class="own_by_property" name="property_vehicle[own_by_property][<?php echo $i;?>]" value="1" <?php echo Helper::validate_key_toggle('own_type_property',$vehicle,1);?>>
								<label for="owned_by_vehicle_you" class="cr">
									You</label>
							</div>
							<div class="d-inline radio-primary">
								<input type="radio" required  id="owned_by_vehicle_spouse"
									  class="own_by_property" name="property_vehicle[own_by_property][<?php echo $i;?>]" value="2" <?php echo Helper::validate_key_toggle('own_by_property',$vehicle,2);?>>
								<label for="owned_by_vehicle_spouse" class="cr">
									Spouse</label>
							</div>
							<div class="d-inline radio-primary">
								<input type="radio" required  id="owned_by_vehicle_joint"
									  class="own_by_property" name="property_vehicle[own_by_property][<?php echo $i;?>]" value="3" <?php echo Helper::validate_key_toggle('own_by_property',$vehicle,3);?>>
								<label for="owned_by_vehicle_joint" class="cr">
									Joint</label>
							</div>
							<div class="d-inline radio-primary">
								<input type="radio" required  id="owned_by_vehicle_other"
									  class="own_by_property" name="property_vehicle[own_by_property][<?php echo $i;?>]" value="4"<?php echo Helper::validate_key_toggle('own_by_property',$vehicle,4);?>>
								<label for="owned_by_vehicle_other" class="cr">
									Other</label>
							</div>
						</div>
					</div>
				</div>
			<div class="col-md-12 laon_property_obj_data">
				<div class="form-group">
					<label class="d-block">Do you have a loan on this property?
					</label>
					<div class="d-inline radio-primary">
						<input type="radio" required  id="loan_own_type_property_yes_<?php echo $i;?>"
							onchange="laon_property_obj('yes',this);" class="loan_own_type_property" name="property_vehicle[loan_own_type_property][<?php echo $i;?>]" value="1" <?php echo Helper::validate_key_toggle('loan_own_type_property',$vehicle,1);?>>
						<label for="loan_own_type_property_yes_<?php echo $i;?>" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary">
						<input type="radio" required  id="loan_own_type_property_no_<?php echo $i;?>"
							onchange="laon_property_obj('no', this);" class="loan_own_type_property" name="property_vehicle[loan_own_type_property][<?php echo $i;?>]" value="0" <?php echo Helper::validate_key_toggle('loan_own_type_property',$vehicle,0);?>>
						<label for="loan_own_type_property_no_<?php echo $i;?>" class="cr">No</label>
					</div>

				</div>
			</div>
			<div class="col-md-12 loan_own_type_property_sec <?php echo Helper::key_hide_show_v('loan_own_type_property',$vehicle);?>">
				<div class="col-md-12" style="margin-top:46px;">
                    <h5 class="mb-2"><strong>Car Loan</strong><span class="text-c-blue" style="font-size: 13px; padding: 0 12px;">(Please upload your most recent auto loan statement into the document system)</span></h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Amount Owed <i> (amount of claim):</i></label>
                                <input type="number" class="form-control vehicle_amount_own required" name="property_vehicle[vehicle_car_loan][amount_own][<?php echo $i;?>]" placeholder="Amount Owed" value="<?php echo Helper::validate_key_value('amount_own',$vehicle_car_loan);?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Account Number, if any:</label>
                                <input type="number" class="form-control vehicle_account_number required" name="property_vehicle[vehicle_car_loan][account_number][<?php echo $i;?>]" placeholder="Account Number" value="<?php echo Helper::validate_key_value('account_number',$vehicle_car_loan);?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date debt was incurred:</label>
                                <input type="text" class="form-control vehicle_debt_incurred_date required" name="property_vehicle[vehicle_car_loan][debt_incurred_date][<?php echo $i;?>]" placeholder="Date debt was incurred" value="<?php echo Helper::validate_key_value('debt_incurred_date',$vehicle_car_loan);?>">
                            </div>
                        </div>
						<div class="col-md-6">
                            <div class="form-group">
                                <label>Monthly payment amount:</label>
                                <input type="number" class="form-control vehicle_monthly_payment required" name="property_vehicle[vehicle_car_loan][monthly_payment][<?php echo $i;?>]" placeholder="Monthly payment" value="<?php echo Helper::validate_key_value('monthly_payment',$vehicle_car_loan);?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Creditor Name and Address <!--<i class="text-c-blue"> (upload your most recent auto loan statement into the document system):</i>--></label>
								<input type="text" class="form-control vehicle_creditor_name required" name="property_vehicle[vehicle_car_loan][creditor_name][<?php echo $i;?>]" placeholder="Creditor Name" value="<?php echo Helper::validate_key_value('creditor_name',$vehicle_car_loan);?>">
							</div>
							<div class="form-group">
								<label>Street Address</label>
                                <input type="text" class="form-control vehicle_creditor_name_addresss required" name="property_vehicle[vehicle_car_loan][creditor_name_addresss][<?php echo $i;?>]" placeholder="Street Address" value="<?php echo Helper::validate_key_value('creditor_name_addresss',$vehicle_car_loan);?>">
                            </div>
                        </div>
						<div class="col-md-4">
							<div class="form-group">
								<label>City</label>
								<input type="text" class="form-control vehicle_creditor_city required" name="property_vehicle[vehicle_car_loan][creditor_city][<?php echo $i;?>]" placeholder="City" value="<?php echo Helper::validate_key_value('creditor_city',$vehicle_car_loan);?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>State</label>
								{{-- <input type="text" class="form-control vehicle_creditor_state required" name="property_vehicle[vehicle_car_loan][creditor_state][<?php echo $i;?>]" placeholder="State" value="<?php echo Helper::validate_key_value('creditor_state',$vehicle_car_loan);?>"> --}}

								<select class="form-control vehicle_creditor_state required" name="property_vehicle[vehicle_car_loan][creditor_state][<?php echo $i;?>]">
						<option disabled="">Please Select State</option>
	
				<option value="AL" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'AL')  echo'selected'; else '' ?> >Alabama (AL)</option>
				
				<option value="AK" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'AK')  echo'selected'; else '' ?> >Alaska (AK)</option>
				
				<option value="AZ" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'AZ')  echo'selected'; else '' ?> >Arizona (AZ)</option>
				
				<option value="AR" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'AR')  echo'selected'; else '' ?> >Arkansas (AR)</option>
				
				<option value="CA" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'CA')  echo'selected'; else '' ?> >California (CA)</option>
				
				<option value="CO" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'CO')  echo'selected'; else '' ?> >Colorado (CO)</option>
				
				<option value="CT" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'CT')  echo'selected'; else '' ?> >Connecticut (CT)</option>
				
				<option value="DE" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'DE')  echo'selected'; else '' ?> >Delaware (DE)</option>
				
				<option value="DC" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'DC')  echo'selected'; else '' ?> >District Of Columbia (DC)</option>
				
				<option value="FL" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'FL')  echo'selected'; else '' ?> >Florida (FL)</option>
				
				<option value="GA" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'GA')  echo'selected'; else '' ?> >Georgia (GA)</option>
				
				<option value="HI" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'HI')  echo'selected'; else '' ?> >Hawaii (HI)</option>
				
				<option value="ID" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'ID')  echo'selected'; else '' ?> >Idaho (ID)</option>
				
				<option value="IL" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'IL')  echo'selected'; else '' ?> >Illinois (IL)</option>
				
				<option value="IN" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'IN')  echo'selected'; else '' ?> >Indiana (IN)</option>
				
				<option value="IA" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'IA')  echo'selected'; else '' ?> >Iowa (IA)</option>
				
				<option value="KS" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'KS')  echo'selected'; else '' ?> >Kansas (KS)</option>
				
				<option value="KY" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'KY')  echo'selected'; else '' ?> >Kentucky (KY)</option>
				
				<option value="LA" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'LA')  echo'selected'; else '' ?> >Louisiana (LA)</option>
				
				<option value="ME" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'ME')  echo'selected'; else '' ?> >Maine (ME)</option>
				
				<option value="MD" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'MD')  echo'selected'; else '' ?> >Maryland (MD)</option>
				
				<option value="MA" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'MA')  echo'selected'; else '' ?> >Massachusetts (MA)</option>
				
				<option value="MI" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'MI')  echo'selected'; else '' ?> >Michigan (MI)</option>
				
				<option value="MN" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'MN')  echo'selected'; else '' ?> >Minnesota (MN)</option>
				
				<option value="MS" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'MS')  echo'selected'; else '' ?> >Mississippi (MS)</option>
				
				<option value="MO" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'MO')  echo'selected'; else '' ?> >Missouri (MO)</option>
				
				<option value="MT" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'MT')  echo'selected'; else '' ?> >Montana (MT)</option>
				
				<option value="NE" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'NE')  echo'selected'; else '' ?> >Nebraska (NE)</option>
				
				<option value="NV" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'NV')  echo'selected'; else '' ?> >Nevada (NV)</option>
				
				<option value="NH" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'NH')  echo'selected'; else '' ?> >New Hampshire (NH)</option>
				
				<option value="NJ" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'NJ')  echo'selected'; else '' ?> >New Jersey (NJ)</option>
				
				<option value="NM" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'NM')  echo'selected'; else '' ?> >New Mexico (NM)</option>
				
				<option value="NY" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'NY')  echo'selected'; else '' ?> >New York (NY)</option>
				
				<option value="NC" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'NC')  echo'selected'; else '' ?> >North Carolina (NC)</option>
				
				<option value="ND" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'ND')  echo'selected'; else '' ?> >North Dakota (ND)</option>
				
				<option value="OH" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'OH')  echo'selected'; else '' ?> >Ohio (OH)</option>
				
				<option value="OK" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'OK')  echo'selected'; else '' ?> >Oklahoma (OK)</option>
				
				<option value="OR" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'OR')  echo'selected'; else '' ?> >Oregon (OR)</option>
				
				<option value="PA" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'PA')  echo'selected'; else '' ?> >Pennsylvania (PA)</option>
				
				<option value="RI" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'RI')  echo'selected'; else '' ?> >Rhode Island (RI)</option>
				
				<option value="SC" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'SC')  echo'selected'; else '' ?> >South Carolina (SC)</option>
				
				<option value="SD" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'SD')  echo'selected'; else '' ?> >South Dakota (SD)</option>
				
				<option value="TN" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'TN')  echo'selected'; else '' ?> >Tennessee (TN)</option>
				
				<option value="TX" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'TX')  echo'selected'; else '' ?> >Texas (TX)</option>
				
				<option value="UT" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'UT')  echo'selected'; else '' ?> >Utah (UT)</option>
				
				<option value="VT" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'VT')  echo'selected'; else '' ?> >Vermont (VT)</option>
				
				<option value="VA" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'VA')  echo'selected'; else '' ?> >Virginia (VA)</option>
				
				<option value="WA" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'WA')  echo'selected'; else '' ?> >Washington (WA)</option>
				
				<option value="WV" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'WV')  echo'selected'; else '' ?> >West Virginia (WV)</option>
				
				<option value="WI" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'WI')  echo'selected'; else '' ?> >Wisconsin (WI)</option>
				
				<option value="WY" <?php if(Helper::validate_key_value('creditor_state',$vehicle_car_loan) == 'WY')  echo'selected'; else '' ?> >Wyoming (WY)</option>
			</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Zip</label>
								<input type="number" class="form-control vehicle_creditor_zip required" name="property_vehicle[vehicle_car_loan][creditor_zip][<?php echo $i;?>]" placeholder="Zip" value="<?php echo Helper::validate_key_value('creditor_zip',$vehicle_car_loan);?>">
							</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h5 class="mb-2"><strong>Property Information:</strong></h5>
                    <div class="row">  
						<div class="col-md-6">
                            <div class="form-group">
                                <label>Number of payment remaining:</label>
                                <input type="number" class="form-control vehicle_payment_remaining required" name="property_vehicle[vehicle_car_loan][payment_remaining][<?php echo $i;?>]" placeholder="Number of payment remaining" value="<?php echo Helper::validate_key_value('payment_remaining',$vehicle_car_loan);?>">
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
                                    <input type="radio" id="who_owes_the_debt_you" class="vehicle_debt_owned_by" name="property_vehicle[vehicle_car_loan][debt_owned_by][<?php echo $i;?>]" required  value="1" <?php echo Helper::validate_key_toggle('debt_owned_by',$vehicle_car_loan,1);?>>
                                    <label for="who_owes_the_debt_you" class="cr"> Self</label>
                                </div>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="who_owes_the_debt_spouse" class="vehicle_debt_owned_by" name="property_vehicle[vehicle_car_loan][debt_owned_by][<?php echo $i;?>]" required  value="2" <?php echo Helper::validate_key_toggle('debt_owned_by',$vehicle_car_loan,2);?>>
                                    <label for="who_owes_the_debt_spouse" class="cr"> Spouse</label>
                                </div>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="who_owes_the_debt_joint" class="vehicle_debt_owned_by" name="property_vehicle[vehicle_car_loan][debt_owned_by][<?php echo $i;?>]" required  value="3" <?php echo Helper::validate_key_toggle('debt_owned_by',$vehicle_car_loan,3);?>>
                                    <label for="who_owes_the_debt_joint" class="cr"> Joint</label>
                                </div>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="who_owes_the_debt_other" class="vehicle_debt_owned_by" name="property_vehicle[vehicle_car_loan][debt_owned_by][<?php echo $i;?>]" required  value="4" <?php echo Helper::validate_key_toggle('debt_owned_by',$vehicle_car_loan,4);?>>
                                    <label for="who_owes_the_debt_other" class="cr"> Other</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 codebtor_cosigner_data_obj">
                            <div class="form-group">
                                <label class="d-block">Is there a codebtor or cosigner on this loan?</label>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="codebtor_cosigner_yes_<?php echo $i;?>" class="vehicle_codebtor" name="property_vehicle[vehicle_car_loan][codebtor][<?php echo $i;?>]" required onchange="geCodebtorCosignerItems('yes',this);"  value="1" <?php echo Helper::validate_key_toggle('codebtor',$vehicle_car_loan,1);?>>
                                    <label for="codebtor_cosigner_yes_<?php echo $i;?>" class="cr"> Yes</label>
                                </div>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="codebtor_cosigner_no_<?php echo $i;?>" class="vehicle_codebtor" name="property_vehicle[vehicle_car_loan][codebtor][<?php echo $i;?>]" required onchange="geCodebtorCosignerItems('no',this);"  value="0" <?php echo Helper::validate_key_toggle('codebtor',$vehicle_car_loan,0);?>>
                                    <label for="codebtor_cosigner_no_<?php echo $i;?>" class="cr"> No</label>
                                </div>
                            </div>
                        </div>
                        <!-- Condition data -->
                        <div class="col-md-12 <?php echo Helper::key_hide_show_v('codebtor',$vehicle_car_loan);?> pt-3 codebtor_cosigner_data" >
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Please provide name and address: </label>
                                        <textarea class="form-control vehicle_codebtor_info required" name="property_vehicle[vehicle_car_loan][codebtor_info][<?php echo $i;?>]" cols="30" rows="4" placeholder="Name & Addresss"><?php echo Helper::validate_key_value('codebtor_info',$vehicle_car_loan);?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Condition data End-->
                    </div>
                </div>
            </div>
		</div>
</div>

	<script>
		$(document).ready(function(){
			$(".vehicle_property_year" ).datepicker({dateFormat: 'yy',changeYear: true,});
		});
	</script>
