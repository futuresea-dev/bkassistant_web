<div class="form-main mt-3 col-md-12 residence_form">
<?php 
$home_car_loan=(!empty($resident['home_car_loan']))?json_decode($resident['home_car_loan'],1):[];
// dump($vehicle);
?>
	<div class="col-md-12">
		<div class="form-group">
			<?php if(!empty($resident['id'])){?>
			<input type="hidden" name="property_resident[id][<?php echo $i;?>]" value="<?php echo Helper::validate_value($resident['id']);?>">
			<?php }?>
		</div>
	</div>
	<div class="col-md-12">
		<div class="currently_lived_parents">
				<div class="form-group">
					<label class="d-block">Do you rent or own where you currently live?
					</label>
					<div class="d-inline radio-primary">
						
						<input type="radio" required  id="currently_lived_yes_<?php echo $i;?>"
							onchange="currently_lived_property('yes',this);" class="currently_lived" name="property_resident[currently_lived][<?php echo $i;?>]" value="1" <?php echo Helper::validate_key_toggle('currently_lived',$resident,1);?>>
						<label for="currently_lived_yes_<?php echo $i;?>" class="cr">Own</label>
					</div>
					<div class="d-inline radio-primary">
						<input <?php echo empty($resident)? "checked" : ""; ?> type="radio" required  id="currently_lived_no_<?php echo $i;?>"
							onchange="currently_lived_property('no',this);" class="currently_lived" name="property_resident[currently_lived][<?php echo $i;?>]" value="0" <?php echo Helper::validate_key_toggle('currently_lived',$resident,0);?>>
						<label for="currently_lived_no_<?php echo $i;?>" class="cr">Rent</label>
					</div>
				</div>
			</div>

			<div class="col-md-12 <?php echo Helper::key_hide_show_v('currently_lived',$resident);?> pt-3 currently_lived_data">
		<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label class="d-block">What is the property? Check
					all that apply.</label>

				<div class="d-inline radio-primary">
					<input type="radio" id="single-family-home"
						name="property_resident[property][<?php echo $i;?>]" value="1" class="property required" <?php echo Helper::validate_key_toggle('property',$resident,1);?>>
					<label for="single-family-home" class="cr">Single family
						home</label>
				</div>
				<div class="d-inline radio-primary">
					<input type="radio" id="duplex-building"
						name="property_resident[property][<?php echo $i;?>]" value="2" class="property required" <?php echo Helper::validate_key_toggle('property',$resident,2);?>>
					<label for="duplex-building" class="cr"> Duplex or
						multi-unit
						building</label>
				</div>
				<div class="d-inline radio-primary">
					<input type="radio" id="condominium-or-cooperative"
						name="property_resident[property][<?php echo $i;?>]" value="3" class="property required" <?php echo Helper::validate_key_toggle('property',$resident,3);?>>
					<label for="condominium-or-cooperative" class="cr">
						Condominium or
						cooperative</label>
				</div>
				<div class="d-inline radio-primary">
					<input type="radio" id="manufactured-or-mobile-home"
						name="property_resident[property][<?php echo $i;?>]" value="4" class="property required" <?php echo Helper::validate_key_toggle('property',$resident,4);?>>
					<label for="manufactured-or-mobile-home" class="cr">
						Manufactured or mobile home</label>
				</div>
				<div class="d-inline radio-primary">
					<input type="radio" id="land" name="property_resident[property][<?php echo $i;?>]" value="5" class="property required" <?php echo Helper::validate_key_toggle('property',$resident,5);?>>
					<label for="land" class="cr">
						Land</label>
				</div>
				<div class="d-inline radio-primary">
					<input type="radio" id="investment"
						name="property_resident[property][<?php echo $i;?>]" value="6" class="property required" <?php echo Helper::validate_key_toggle('property',$resident,6);?>>
					<label for="investment" class="cr"> Investment
						property</label>
				</div>
				<div class="d-inline radio-primary">
					<input type="radio" id="timeshare"
						name="property_resident[property][<?php echo $i;?>]" value="7" class="property required" <?php echo Helper::validate_key_toggle('property',$resident,7);?>>
					<label for="timeshare" class="cr"> Timeshare
					</label>
				</div>
				<div class="d-inline radio-primary">
					<input type="radio" id="address-other"
						name="property_resident[property][<?php echo $i;?>]" value="8" class="property required" <?php echo Helper::validate_key_toggle('property',$resident,8);?>>
					<label for="address-other" class="cr"> Other:
					</label>
				</div>
			</div>
			<h5 class="mb-2"><strong class="d-block">List all mortgages,
					home
					equity loans
					and other liens against the property:</strong>
				<p class="fs-4 pt-2">Please provide details requested below.
				</p>
			</h5>
			<div class="row">
				<div class="col-md-12">
					<label class="pt-3 d-none">Who issued the mortgage, lien or
							loan?
							<i>(Name and Address).</i></label>
					<div class="form-group d-none">
						
						<input type="text" class="form-control required mortgage_name"
							placeholder="Name" name="property_resident[mortgage_name][<?php echo $i;?>]" value="<?php echo Helper::validate_key_value('mortgage_name',$resident);?>">
					</div>
					<div class="form-group payment_not_primary_address_parents">
						<label class="d-block pt-3">Is this property your primary residence? </label>
						<div class="d-inline radio-primary">
							<input type="radio" id="payment_not_primary_address_no_<?php echo $i;?>"
								name="property_resident[not_primary_address][<?php echo $i;?>]" value="1"  class="not_primary_address" <?php echo Helper::validate_key_toggle('not_primary_address',$resident,1);?> required onchange="not_primary_address_property('no',this);">
							<label for="payment_not_primary_address_no_<?php echo $i;?>"
								class="cr">No
							</label>
						</div>
						<div class="d-inline radio-primary">
							<input type="radio" id="payment_not_primary_address_yes_<?php echo $i;?>"
								name="property_resident[not_primary_address][<?php echo $i;?>]" value="0" class="not_primary_address" <?php echo Helper::validate_key_toggle('not_primary_address',$resident,0);?> required onchange="not_primary_address_property('yes',this);">
							<label for="payment_not_primary_address_yes_<?php echo $i;?>"
								class="cr">Yes
							</label>
						</div>
					</div>
					<div class="col-md-12 <?php echo Helper::key_hide_show_v('not_primary_address',$resident);?> pt-3 payment_not_primary_address_data">
						<div class="form-group">
							<label>Street Address</label>
							<input type="text" class="form-control required mortgage_address" name="property_resident[mortgage_address][<?php echo $i;?>]" placeholder="Street Address" value="<?php echo Helper::validate_key_value('mortgage_address',$resident);?>">
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label>City</label>
									<input type="text" class="form-control required mortgage_city" name="property_resident[mortgage_city][<?php echo $i;?>]" placeholder="City" value="<?php echo Helper::validate_key_value('mortgage_city',$resident);?>">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>State</label>
									<select class="form-control required mortgage_state" name="property_resident[mortgage_state][<?php echo $i;?>]">
                                        <option disabled="">Please Select State</option>
                                        <option value="AL" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'AL')  echo'selected'; else '' ?> >Alabama (AL)</option>
                                        <option value="AK" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'AK')  echo'selected'; else '' ?> >Alaska (AK)</option>
                                        <option value="AZ" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'AZ')  echo'selected'; else '' ?> >Arizona (AZ)</option>
                                        <option value="AR" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'AR')  echo'selected'; else '' ?> >Arkansas (AR)</option>
                                        <option value="CA" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'CA')  echo'selected'; else '' ?> >California (CA)</option>
                                        <option value="CO" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'CO')  echo'selected'; else '' ?> >Colorado (CO)</option>
                                        <option value="CT" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'CT')  echo'selected'; else '' ?> >Connecticut (CT)</option>
                                        <option value="DE" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'DE')  echo'selected'; else '' ?> >Delaware (DE)</option>
                                        <option value="DC" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'DC')  echo'selected'; else '' ?> >District Of Columbia (DC)</option>
                                        <option value="FL" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'FL')  echo'selected'; else '' ?> >Florida (FL)</option>
                                        <option value="GA" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'GA')  echo'selected'; else '' ?> >Georgia (GA)</option>
                                        <option value="HI" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'HI')  echo'selected'; else '' ?> >Hawaii (HI)</option>
                                        <option value="ID" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'ID')  echo'selected'; else '' ?> >Idaho (ID)</option>
                                        <option value="IL" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'IL')  echo'selected'; else '' ?> >Illinois (IL)</option>
                                        <option value="IN" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'IN')  echo'selected'; else '' ?> >Indiana (IN)</option>
                                        <option value="IA" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'IA')  echo'selected'; else '' ?> >Iowa (IA)</option>
                                        <option value="KS" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'KS')  echo'selected'; else '' ?> >Kansas (KS)</option>
                                        <option value="KY" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'KY')  echo'selected'; else '' ?> >Kentucky (KY)</option>
                                        <option value="LA" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'LA')  echo'selected'; else '' ?> >Louisiana (LA)</option>
                                        <option value="ME" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'ME')  echo'selected'; else '' ?> >Maine (ME)</option>
                                        <option value="MD" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'MD')  echo'selected'; else '' ?> >Maryland (MD)</option>
                                        <option value="MA" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'MA')  echo'selected'; else '' ?> >Massachusetts (MA)</option>
                                        <option value="MI" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'MI')  echo'selected'; else '' ?> >Michigan (MI)</option>
                                        <option value="MN" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'MN')  echo'selected'; else '' ?> >Minnesota (MN)</option>
                                        <option value="MS" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'MS')  echo'selected'; else '' ?> >Mississippi (MS)</option>
                                        <option value="MO" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'MO')  echo'selected'; else '' ?> >Missouri (MO)</option>
                                        <option value="MT" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'MT')  echo'selected'; else '' ?> >Montana (MT)</option>
                                        <option value="NE" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'NE')  echo'selected'; else '' ?> >Nebraska (NE)</option>
                                        <option value="NV" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'NV')  echo'selected'; else '' ?> >Nevada (NV)</option>
                                        <option value="NH" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'NH')  echo'selected'; else '' ?> >New Hampshire (NH)</option>
                                        <option value="NJ" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'NJ')  echo'selected'; else '' ?> >New Jersey (NJ)</option>
                                        <option value="NM" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'NM')  echo'selected'; else '' ?> >New Mexico (NM)</option>
                                        <option value="NY" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'NY')  echo'selected'; else '' ?> >New York (NY)</option>
                                        <option value="NC" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'NC')  echo'selected'; else '' ?> >North Carolina (NC)</option>
                                        <option value="ND" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'ND')  echo'selected'; else '' ?> >North Dakota (ND)</option>
                                        <option value="OH" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'OH')  echo'selected'; else '' ?> >Ohio (OH)</option>
                                        <option value="OK" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'OK')  echo'selected'; else '' ?> >Oklahoma (OK)</option>
                                        <option value="OR" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'OR')  echo'selected'; else '' ?> >Oregon (OR)</option>
                                        <option value="PA" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'PA')  echo'selected'; else '' ?> >Pennsylvania (PA)</option>
                                        <option value="RI" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'RI')  echo'selected'; else '' ?> >Rhode Island (RI)</option>
                                        <option value="SC" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'SC')  echo'selected'; else '' ?> >South Carolina (SC)</option>
                                        <option value="SD" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'SD')  echo'selected'; else '' ?> >South Dakota (SD)</option>
                                        <option value="TN" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'TN')  echo'selected'; else '' ?> >Tennessee (TN)</option>
                                        <option value="TX" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'TX')  echo'selected'; else '' ?> >Texas (TX)</option>
                                        <option value="UT" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'UT')  echo'selected'; else '' ?> >Utah (UT)</option>
                                        <option value="VT" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'VT')  echo'selected'; else '' ?> >Vermont (VT)</option>
                                        <option value="VA" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'VA')  echo'selected'; else '' ?> >Virginia (VA)</option>
                                        <option value="WA" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'WA')  echo'selected'; else '' ?> >Washington (WA)</option>
                                        <option value="WV" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'WV')  echo'selected'; else '' ?> >West Virginia (WV)</option>
                                        <option value="WI" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'WI')  echo'selected'; else '' ?> >Wisconsin (WI)</option>
                                        <option value="WY" <?php if(Helper::validate_key_value('mortgage_state',$resident) == 'WY')  echo'selected'; else '' ?> >Wyoming (WY)</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Zip Code</label>
									<input type="number" class="form-control required mortgage_zip" name="property_resident[mortgage_zip][<?php echo $i;?>]" placeholder="Zip" value="<?php echo Helper::validate_key_value('mortgage_zip',$resident);?>">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>County</label>
									<input type="text" class="form-control required mortgage_county" name="property_resident[mortgage_county][<?php echo $i;?>]" placeholder="County" value="<?php echo Helper::validate_key_value('mortgage_county',$resident);?>">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 d-none">
					<div class="form-group">
						<label>What is the amount of the mortgage, lien or loan?</label>
						<input type="number" class="form-control required mortgage_loan"
							placeholder="Enter amount" name="property_resident[mortgage_loan][<?php echo $i;?>]" value="<?php echo Helper::validate_key_value('mortgage_loan',$resident);?>">
					</div>
				</div>
				<div class="col-md-6 d-none">
					<div class="form-group">
						<label>What is your current interest rate on the loan?</label>
						<input type="number" class="form-control required mortgage_loan_rate"
							placeholder="Enter a interest rate" name="property_resident[mortgage_loan_rate][<?php echo $i;?>]" value="<?php echo Helper::validate_key_value('mortgage_loan_rate',$resident);?>">
					</div>
				</div>
				<div class="col-md-6 d-none">
					<div class="form-group">
						<label>What is your monthly payment?</label>
						<input type="number" class="form-control required monthly_payment"
							placeholder="Enter monthly payment" name="property_resident[monthly_payment][<?php echo $i;?>]" value="<?php echo Helper::validate_key_value('monthly_payment',$resident);?>">
					</div>
				</div>
				<div class="col-md-6 d-none">
					<div class="form-group">
						<label class="d-block">Does payment include taxes
							and/or
							insurance?</label>
						<div class="d-inline radio-primary">
							<input type="radio" id="payment_include_tax_no"
								name="property_resident[taxes_insurance][<?php echo $i;?>]" value="1"  class="taxes_insurance" <?php echo Helper::validate_key_toggle('taxes_insurance',$resident,1);?> required>
							<label for="payment_include_tax_no"
								class="cr">No
							</label>
						</div>
						<div class="d-inline radio-primary">
							<input type="radio" id="payment_include_tax_yes"
								name="property_resident[taxes_insurance][<?php echo $i;?>]" value="2" class="taxes_insurance" <?php echo Helper::validate_key_toggle('taxes_insurance',$resident,2);?> required>
							<label for="payment_include_tax_yes"
								class="cr">Yes
							</label>
						</div>
					</div>
				</div>
				<div class="col-md-6 pt-3">
					<h5 class="mb-2">Estimated<strong> Value of</strong>
						Property <span style="font-size:12px; padding:0 12px">You can find out the value of your home here <a href="https://www.zillow.com" target="_blank">zillow.com</a> and/or <a href="https://www.redfin.com" target="_blank">redfin.com</a></span></h5>
					<div class="form-group">
						<label>Property Value</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">$</span>
							 </div>
							<input type="number" class="form-control required estimated_property_value"
							placeholder="Property value" name="property_resident[estimated_property_value][<?php echo $i;?>]" value="<?php echo Helper::validate_key_value('estimated_property_value',$resident);?>">
						</div>
					</div>


				</div>
			<div class="col-md-6 pt-3">
				<h5 class="mb-2"><strong class="d-block"> Owned by:</strong>
					<p class="fs-4 pt-2">You, your spouse, both you and your spouse,
						you and at least one
						person other than your
						spouse.</p>
				</h5>
				<div class="form-group">
				<div class="d-inline radio-primary">
					<input type="radio" id="owned_by_you" class="property_owned_by required" name="property_resident[property_owned_by][<?php echo $i;?>]"
						onchange="getHiddenOwnedByYou('you');" value="1" <?php echo Helper::validate_key_toggle('property_owned_by',$resident,1);?>>
					<label for="owned_by_you" class="cr">
						You</label>
				</div>
				<div class="d-inline radio-primary">
					<input type="radio" id="owned_by_spouse" class="property_owned_by required" name="property_resident[property_owned_by][<?php echo $i;?>]"
						onchange="getHiddenOwnedByYou('spouse');" value="2" <?php echo Helper::validate_key_toggle('property_owned_by',$resident,2);?>>
					<label for="owned_by_spouse" class="cr">
						Spouse</label>
				</div>
				<div class="d-inline radio-primary">
					<input type="radio" id="owned_by_joint" class="property_owned_by required" name="property_resident[property_owned_by][<?php echo $i;?>]"
						onchange="getHiddenOwnedByYou('joint');" value="3" <?php echo Helper::validate_key_toggle('property_owned_by',$resident,3);?>>
					<label for="owned_by_joint" class="cr">
						Joint</label>
				</div>
				<div class="d-inline radio-primary">
					<input type="radio" id="owned_b_other" class="property_owned_by required" name="property_resident[property_owned_by][<?php echo $i;?>]"
						onchange="getHiddenOwnedByYou('other');" value="4" <?php echo Helper::validate_key_toggle('property_owned_by',$resident,4);?>>
					<label for="owned_b_other" class="cr">
						Other</label>
				</div>
				</div>
			</div>
			<div class="col-md-12 laon_property_obj_data">
				<div class="form-group">
					<label class="d-block">Do you have a loan on this property?
					</label>
					<div class="d-inline radio-primary">
						<input type="radio" required  id="loan_own_type_property_yes_<?php echo $i;?>"
							onchange="laon_property_obj('yes',this);" class="loan_own_type_property" name="property_resident[loan_own_type_property][<?php echo $i;?>]" value="1" <?php echo Helper::validate_key_toggle('loan_own_type_property',$resident,1);?>>
						<label for="loan_own_type_property_yes_<?php echo $i;?>" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary">
						<input type="radio" required  id="loan_own_type_property_no_<?php echo $i;?>"
							onchange="laon_property_obj('no', this);" class="loan_own_type_property" name="property_resident[loan_own_type_property][<?php echo $i;?>]" value="0" <?php echo Helper::validate_key_toggle('loan_own_type_property',$resident,0);?>>
						<label for="loan_own_type_property_no_<?php echo $i;?>" class="cr">No</label>
					</div>

				</div>
			</div>
			<div class="col-md-12 loan_own_type_property_sec <?php echo Helper::key_hide_show_v('loan_own_type_property',$resident);?>">
				<div class="col-md-12" style="margin-top:46px;">
                    <h5 class="mb-2"><strong>Home Loan</strong><span class="text-c-blue" style="font-size: 13px; padding: 0 12px;">(Please upload your most recent statement in the document system)</span></h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Amount Owed <i> (amount of claim):</i></label>
                                <input type="number" class="form-control vehicle_amount_own required" name="property_resident[home_car_loan][amount_own][<?php echo $i;?>]" placeholder="Amount Owed" value="<?php echo Helper::validate_key_value('amount_own',$home_car_loan);?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Account Number, if any:</label>
                                <input type="number" class="form-control vehicle_account_number required" name="property_resident[home_car_loan][account_number][<?php echo $i;?>]" placeholder="Account Number" value="<?php echo Helper::validate_key_value('account_number',$home_car_loan);?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date when debt was incurred:</label>
                                <input type="text" class="form-control vehicle_debt_incurred_date required" name="property_resident[home_car_loan][debt_incurred_date][<?php echo $i;?>]" placeholder="Date when debt was incurred"  value="<?php echo Helper::validate_key_value('debt_incurred_date',$home_car_loan);?>">
                            </div>
                        </div>
						<div class="col-md-6">
                            <div class="form-group">
                                <label>Monthly payment amount:</label>
                                <input type="number" class="form-control vehicle_monthly_payment required" name="property_resident[home_car_loan][monthly_payment][<?php echo $i;?>]" placeholder="Monthly payment" value="<?php echo Helper::validate_key_value('monthly_payment',$home_car_loan);?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Creditor Name <!--<i class="text-c-blue"> (upload your most recent auto loan statement into the document system):</i>--></label>
                                <input type="text" class="form-control vehicle_creditor_name required" name="property_resident[home_car_loan][creditor_name][<?php echo $i;?>]" placeholder="Creditor Name" value="<?php echo Helper::validate_key_value('creditor_name',$home_car_loan);?>">
							</div>
							<div class="form-group">
								<label>Street Address</label>
								<input type="text" class="form-control vehicle_creditor_name_addresss required" name="property_resident[home_car_loan][creditor_name_addresss][<?php echo $i;?>]" placeholder="Street Address" value="<?php echo Helper::validate_key_value('creditor_name_addresss',$home_car_loan);?>">
                            </div>
							
                        </div>                                              
                       
						<div class="col-md-4">
							<div class="form-group">
								<label>City</label>
								<input type="text" class="form-control vehicle_creditor_city required" name="property_resident[home_car_loan][creditor_city][<?php echo $i;?>]" placeholder="City" value="<?php echo Helper::validate_key_value('creditor_city',$home_car_loan);?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>State</label>
								{{-- <input type="text" class="form-control vehicle_creditor_state required" name="property_resident[home_car_loan][creditor_state][<?php echo $i;?>]" placeholder="State" value="<?php echo Helper::validate_key_value('creditor_state',$home_car_loan);?>"> --}}
								<select class="form-control vehicle_creditor_state required" name="property_resident[home_car_loan][creditor_state][<?php echo $i;?>]">

					<option disabled="">Please Select State</option>
	
				<option value="AL" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'AL')  echo'selected'; else '' ?> >Alabama (AL)</option>
				
				<option value="AK" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'AK')  echo'selected'; else '' ?> >Alaska (AK)</option>
				
				<option value="AZ" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'AZ')  echo'selected'; else '' ?> >Arizona (AZ)</option>
				
				<option value="AR" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'AR')  echo'selected'; else '' ?> >Arkansas (AR)</option>
				
				<option value="CA" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'CA')  echo'selected'; else '' ?> >California (CA)</option>
				
				<option value="CO" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'CO')  echo'selected'; else '' ?> >Colorado (CO)</option>
				
				<option value="CT" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'CT')  echo'selected'; else '' ?> >Connecticut (CT)</option>
				
				<option value="DE" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'DE')  echo'selected'; else '' ?> >Delaware (DE)</option>
				
				<option value="DC" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'DC')  echo'selected'; else '' ?> >District Of Columbia (DC)</option>
				
				<option value="FL" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'FL')  echo'selected'; else '' ?> >Florida (FL)</option>
				
				<option value="GA" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'GA')  echo'selected'; else '' ?> >Georgia (GA)</option>
				
				<option value="HI" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'HI')  echo'selected'; else '' ?> >Hawaii (HI)</option>
				
				<option value="ID" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'ID')  echo'selected'; else '' ?> >Idaho (ID)</option>
				
				<option value="IL" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'IL')  echo'selected'; else '' ?> >Illinois (IL)</option>
				
				<option value="IN" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'IN')  echo'selected'; else '' ?> >Indiana (IN)</option>
				
				<option value="IA" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'IA')  echo'selected'; else '' ?> >Iowa (IA)</option>
				
				<option value="KS" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'KS')  echo'selected'; else '' ?> >Kansas (KS)</option>
				
				<option value="KY" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'KY')  echo'selected'; else '' ?> >Kentucky (KY)</option>
				
				<option value="LA" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'LA')  echo'selected'; else '' ?> >Louisiana (LA)</option>
				
				<option value="ME" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'ME')  echo'selected'; else '' ?> >Maine (ME)</option>
				
				<option value="MD" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'MD')  echo'selected'; else '' ?> >Maryland (MD)</option>
				
				<option value="MA" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'MA')  echo'selected'; else '' ?> >Massachusetts (MA)</option>
				
				<option value="MI" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'MI')  echo'selected'; else '' ?> >Michigan (MI)</option>
				
				<option value="MN" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'MN')  echo'selected'; else '' ?> >Minnesota (MN)</option>
				
				<option value="MS" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'MS')  echo'selected'; else '' ?> >Mississippi (MS)</option>
				
				<option value="MO" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'MO')  echo'selected'; else '' ?> >Missouri (MO)</option>
				
				<option value="MT" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'MT')  echo'selected'; else '' ?> >Montana (MT)</option>
				
				<option value="NE" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'NE')  echo'selected'; else '' ?> >Nebraska (NE)</option>
				
				<option value="NV" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'NV')  echo'selected'; else '' ?> >Nevada (NV)</option>
				
				<option value="NH" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'NH')  echo'selected'; else '' ?> >New Hampshire (NH)</option>
				
				<option value="NJ" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'NJ')  echo'selected'; else '' ?> >New Jersey (NJ)</option>
				
				<option value="NM" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'NM')  echo'selected'; else '' ?> >New Mexico (NM)</option>
				
				<option value="NY" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'NY')  echo'selected'; else '' ?> >New York (NY)</option>
				
				<option value="NC" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'NC')  echo'selected'; else '' ?> >North Carolina (NC)</option>
				
				<option value="ND" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'ND')  echo'selected'; else '' ?> >North Dakota (ND)</option>
				
				<option value="OH" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'OH')  echo'selected'; else '' ?> >Ohio (OH)</option>
				
				<option value="OK" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'OK')  echo'selected'; else '' ?> >Oklahoma (OK)</option>
				
				<option value="OR" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'OR')  echo'selected'; else '' ?> >Oregon (OR)</option>
				
				<option value="PA" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'PA')  echo'selected'; else '' ?> >Pennsylvania (PA)</option>
				
				<option value="RI" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'RI')  echo'selected'; else '' ?> >Rhode Island (RI)</option>
				
				<option value="SC" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'SC')  echo'selected'; else '' ?> >South Carolina (SC)</option>
				
				<option value="SD" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'SD')  echo'selected'; else '' ?> >South Dakota (SD)</option>
				
				<option value="TN" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'TN')  echo'selected'; else '' ?> >Tennessee (TN)</option>
				
				<option value="TX" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'TX')  echo'selected'; else '' ?> >Texas (TX)</option>
				
				<option value="UT" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'UT')  echo'selected'; else '' ?> >Utah (UT)</option>
				
				<option value="VT" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'VT')  echo'selected'; else '' ?> >Vermont (VT)</option>
				
				<option value="VA" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'VA')  echo'selected'; else '' ?> >Virginia (VA)</option>
				
				<option value="WA" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'WA')  echo'selected'; else '' ?> >Washington (WA)</option>
				
				<option value="WV" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'WV')  echo'selected'; else '' ?> >West Virginia (WV)</option>
				
				<option value="WI" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'WI')  echo'selected'; else '' ?> >Wisconsin (WI)</option>
				
				<option value="WY" <?php if(Helper::validate_key_value('creditor_state',$home_car_loan) == 'WY')  echo'selected'; else '' ?> >Wyoming (WY)</option>
			</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Zip Code</label>
								<input type="number" class="form-control vehicle_creditor_zip required" name="property_resident[home_car_loan][creditor_zip][<?php echo $i;?>]" placeholder="Zip" value="<?php echo Helper::validate_key_value('creditor_zip',$home_car_loan);?>">
							</div>
                        </div>
                                                                    
                    </div>
                </div>
                <div class="col-md-12">
                    <h5 class="mb-2"><strong>Property Information:</strong></h5>
                    <div class="row"> 
						<div class="col-md-6">
                            <div class="form-group">
                                <label>What is your current interest rate?:</label>
                                <input type="number" class="form-control vehicle_payment_remaining required" name="property_resident[home_car_loan][payment_remaining][<?php echo $i;?>]" placeholder="What is your current interest rate?" value="<?php echo Helper::validate_key_value('payment_remaining',$home_car_loan);?>">
                            </div>
                        </div>
						<div class="col-md-6">
                                <label>Do your payments include taxes and/or insurance?:</label> 
                            <div class="form-group">
								<div class="d-inline radio-primary">
									<input type="radio" id="vehicle_payment_tax_insurance_no"
										name="property_resident[home_car_loan][payment_tax_insurance][<?php echo $i;?>]" value="1"  class="vehicle_payment_tax_insurance" <?php echo Helper::validate_key_toggle('payment_tax_insurance',$home_car_loan,1);?> required>
									<label for="vehicle_payment_tax_insurance_no"
										class="cr">No
									</label>
								</div>
								<div class="d-inline radio-primary">
									<input type="radio" id="vehicle_payment_tax_insurance_yes"
										name="property_resident[home_car_loan][payment_tax_insurance][<?php echo $i;?>]" value="2" class="vehicle_payment_tax_insurance" <?php echo Helper::validate_key_toggle('payment_tax_insurance',$home_car_loan,2);?> required>
									<label for="vehicle_payment_tax_insurance_yes"
										class="cr">Yes
									</label>
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
                                    <input type="radio" id="who_owes_the_debt_you" class="vehicle_debt_owned_by" name="property_resident[home_car_loan][debt_owned_by][<?php echo $i;?>]" required  value="1" <?php echo Helper::validate_key_toggle('debt_owned_by',$home_car_loan,1);?>>
                                    <label for="who_owes_the_debt_you" class="cr"> Self</label>
                                </div>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="who_owes_the_debt_spouse" class="vehicle_debt_owned_by" name="property_resident[home_car_loan][debt_owned_by][<?php echo $i;?>]" required  value="2" <?php echo Helper::validate_key_toggle('debt_owned_by',$home_car_loan,2);?>>
                                    <label for="who_owes_the_debt_spouse" class="cr"> Spouse</label>
                                </div>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="who_owes_the_debt_joint" class="vehicle_debt_owned_by" name="property_resident[home_car_loan][debt_owned_by][<?php echo $i;?>]" required  value="3" <?php echo Helper::validate_key_toggle('debt_owned_by',$home_car_loan,3);?>>
                                    <label for="who_owes_the_debt_joint" class="cr"> Joint</label>
                                </div>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="who_owes_the_debt_other" class="vehicle_debt_owned_by" name="property_resident[home_car_loan][debt_owned_by][<?php echo $i;?>]" required  value="4" <?php echo Helper::validate_key_toggle('debt_owned_by',$home_car_loan,4);?>>
                                    <label for="who_owes_the_debt_other" class="cr"> Other</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 codebtor_cosigner_data_obj">
                            <div class="form-group">
                                <label class="d-block">Is there a codebtor or cosigner on this loan?</label>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="codebtor_cosigner_yes_<?php echo $i;?>" class="vehicle_codebtor" name="property_resident[home_car_loan][codebtor][<?php echo $i;?>]" required onchange="geCodebtorCosignerItems('yes',this);"  value="1" <?php echo Helper::validate_key_toggle('codebtor',$home_car_loan,1);?>>
                                    <label for="codebtor_cosigner_yes_<?php echo $i;?>" class="cr"> Yes</label>
                                </div>
                                <div class="d-inline radio-primary">
                                    <input type="radio" id="codebtor_cosigner_no_<?php echo $i;?>" class="vehicle_codebtor" name="property_resident[home_car_loan][codebtor][<?php echo $i;?>]" required onchange="geCodebtorCosignerItems('no',this);"  value="0" <?php echo Helper::validate_key_toggle('codebtor',$home_car_loan,0);?>>
                                    <label for="codebtor_cosigner_no_<?php echo $i;?>" class="cr"> No</label>
                                </div>
                            </div>
                        </div>
                        <!-- Condition data -->
                        <div class="col-md-12 <?php echo Helper::key_hide_show_v('codebtor',$home_car_loan);?> pt-3 codebtor_cosigner_data" >
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Please provide name and address: </label>
                                        <textarea class="form-control vehicle_codebtor_info required" name="property_resident[home_car_loan][codebtor_info][<?php echo $i;?>]" cols="30" rows="4" placeholder="Name & Addresss"><?php echo Helper::validate_key_value('codebtor_info',$home_car_loan);?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Condition data End-->
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="d-block">Would you like to retain the above property?
                </label>
                <div class="d-inline radio-primary">
                    <input type="radio" required  id="retain_above_property_yes_<?php echo $i;?>"
                           class="retain_above_property" name="property_resident[retain_above_property][<?php echo $i;?>]" value="1" <?php echo Helper::validate_key_toggle('retain_above_property',$resident,1);?>>
                    <label for="retain_above_property_yes_<?php echo $i;?>" class="cr">Yes</label>
                </div>
                <div class="d-inline radio-primary">
                    <input type="radio" required  id="retain_above_property_no_<?php echo $i;?>"
                           class="retain_above_property" name="property_resident[retain_above_property][<?php echo $i;?>]" value="0" <?php echo Helper::validate_key_toggle('retain_above_property',$resident,0);?>>
                    <label for="retain_above_property_no_<?php echo $i;?>" class="cr">No</label>
                </div>

            </div>


		</div>




		</div>
	</div>


	</div>
	



	</div>
	<hr>
</div>
