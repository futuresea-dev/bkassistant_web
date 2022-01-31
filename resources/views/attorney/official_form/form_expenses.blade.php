<section class="official-form-106j padd-20" id="official-form-106j">
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
										<input type="text" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartA);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="input-group">
										<label>Middle Name </label>
										<input type="text" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartA);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="input-group">
										<label>Last Name </label>
										<input type="text" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartA);?>" class="form-control">
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
										<input type="text" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartB);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="input-group">
										<label>Middle Name </label>
										<input type="text" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartB);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="input-group">
										<label>Last Name </label>
										<input type="text" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartB);?>" class="form-control">
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
				<h4>Official Form 106J </h4>
				<h2 class="font-lg-22">Schedule J: Your Expenses
				</h2>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-subheading">
				<p class="font-lg-14"><strong>Be as complete and accurate as possible. If
						two
						married people are filing together, both are equally responsible for
						supplying correct
						information. If more space is needed, attach another sheet to this
						form.
						On the top of any additional pages, write your name and case number
						(if known). Answer every question
					</strong></p>
			</div>
		</div>
	</div>
	<!-- Part 1 -->
	<div class="row align-items-center">
		<div class="col-md-12">
			<div class="part-form-title mb-3">
				<span>Part 1</span>
				<h2 class="font-lg-18">Describe Your Household</h2>
			</div>
		</div>
	</div>
	<!-- Row 1 -->
	<?php 
		// dump($expenses_info);
	?>
	<div class="form-border">
		<div class="row">
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for="">
						<strong class="d-block">1. Is this a joint case?
						</strong>
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" >
					<label>No Go to line 2.</label>
				</div>
				<div class="input-group">
					<input type="checkbox">
					<label>Yes. </label>
				</div>
				<div class="input-group">
					Does Debtor 2 live in a separate household?
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('live_separately',$expenses_info,0);?>>
					<label>No</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('live_separately',$expenses_info,1);?>>
					<label>Yes. Debtor 2 must file Official Form 106J-2, Expenses for
						Separate
						Household of Debtor 2</label>
				</div>
			</div>
		</div>
	</div>
	<div class="form-border">
		<div class="row mt-3">
			<div class="col-md-3">
				<div class="input-group ">
					<label><strong class="mb-0">2. Do you have dependents?</strong>
					</label>Do not list Debtor 1 and<br>
					Debtor 2.<br>
					Do not state the dependents’<br>
					names.
				</div>
			</div>
			<div class="col-md-3">
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('any_dependents',$expenses_info,0);?>>
					<label>No </label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('any_dependents',$expenses_info,1);?>>
					<label>Yes. </label>
					<div class="input-group">
						<label>Fill out this information for
							each dependent</label>
						<input type="text" value="" class="form-control">
					</div>

				</div>
			</div>
			<div class="col-md-3">
				<div class="input-group column-heading">
					<label><strong class="mb-0">Dependent’s relationship to
							Debtor 1 or Debtor 2
						</strong>
					</label>
				</div>
				<div class="input-group mb-3 mt-3">
					<input type="text" value="" class="form-control">
				</div>
				<div class="input-group mb-3">
					<input type="text" value="" class="form-control">
				</div>
				<div class="input-group mb-3">
					<input type="text" value="" class="form-control">
				</div>
				<div class="input-group mb-3">
					<input type="text" value="" class="form-control">
				</div>
				<div class="input-group mb-3">
					<input type="text" value="" class="form-control">
				</div>
			</div>
			<div class="col-md-3">
				<div class="row">
					<div class="col-md-6">
						<div class="input-group column-heading">
							<label><strong class="mb-0 font-lg-10">Dependent’s
									age
								</strong>
							</label>
						</div>
						<div class="input-group mb-3 mt-3">
							<input type="text" value="" class="form-control">
						</div>
						<div class="input-group mb-3">
							<input type="text" value="" class="form-control">
						</div>
						<div class="input-group mb-3">
							<input type="text" value="" class="form-control">
						</div>
						<div class="input-group mb-3">
							<input type="text" value="" class="form-control">
						</div>
						<div class="input-group mb-3">
							<input type="text" value="" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="input-group column-heading">
							<label><strong class="mb-0 font-lg-10">Does dependent live
									with you?
								</strong>
							</label>
						</div>
						<div class="input-group">
							<input type="checkbox">
							<label for="">No</label>
						</div>
						<div class="input-group">
							<input type="checkbox">
							<label for="">Yes</label>
						</div>
						<div class="input-group">
							<input type="checkbox">
							<label for="">No</label>
						</div>
						<div class="input-group">
							<input type="checkbox">
							<label for="">Yes</label>
						</div>
						<div class="input-group">
							<input type="checkbox">
							<label for="">No</label>
						</div>
						<div class="input-group">
							<input type="checkbox">
							<label for="">Yes</label>
						</div>
						<div class="input-group">
							<input type="checkbox">
							<label for="">No</label>
						</div>
						<div class="input-group">
							<input type="checkbox">
							<label for="">Yes</label>
						</div>
						<div class="input-group">
							<input type="checkbox">
							<label for="">No</label>
						</div>
						<div class="input-group">
							<input type="checkbox">
							<label for="">Yes</label>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
	<div class="form-border mb-3">
		<div class="row">
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for="">
						<strong class="d-block">3. Do your expenses include
							expenses of people other than
							yourself and your dependents?
						</strong>
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox">
					<label>No </label>
				</div>
				<div class="input-group">
					<input type="checkbox">
					<label>Yes. </label>
				</div>
			</div>
		</div>
	</div>





	<!-- Part 2 -->
	<div class="row align-items-center">
		<div class="col-md-12">
			<div class="part-form-title mb-3">
				<span>Part 2</span>
				<h2 class="font-lg-18">Estimate Your Ongoing Monthly Expenses</h2>
			</div>
		</div>
	</div>
	<div class="form-border">
		<!-- Row 1 -->
		<div class="row mb-3">
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for="">
						<strong class="d-block">Estimate your expenses as of your bankruptcy
							filing date unless you are using this form as a supplement in a
							Chapter 13 case to report
							expenses as of a date after the bankruptcy is filed. If this is
							a
							supplemental Schedule J, check the box at the top of the form
							and
							fill in the
							applicable date <br>
							Include expenses paid for with non-cash government assistance if
							you
							know the value of
							such assistance and have included it on Schedule I: Your Income
							(Official Form 106I.)
						</strong>
					</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6 mb-3">
				<div class="column-heading">Your expenses </div>
			</div>
		</div>
		<!-- Row 4 -->
		<div class="row">
			<div class="col-md-8">
				<div class="input-group mb-3">
					<label for="">
						<strong class="d-block">4. The rental or home ownership expenses for
							your
							residence.
						</strong> Include first mortgage payments and
						any rent for the ground or lot.
					</label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<div class="input-group d-flex mb-3">
							<strong class="input-group-text">4</strong>
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">$</span>
							</div>
							<input type="text" value="<?php echo Helper::validate_key_value('rent_home_mortage',$expenses_info);?>" class="form-control">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="payroll-deduction">
			<!-- Row 4.a -->
			<div class="row">
				<div class="col-md-12">
					<div class="input-group">
						<strong>If not included in line 4:</strong>
					</div>
				</div>
				<div class="col-md-8">
					<div class="input-group">
						<label>4a. Real estate taxes</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">4a.</strong>
								<div class="input-group-append">
									<span class="input-group-text"
										id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo Helper::validate_key_value('estate_taxes_pay',$expenses_info);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row 4.b -->
			<div class="row">
				<div class="col-md-8">
					<div class="input-group">
						<label>4b. Property, homeowner’s, or renter’s insurance</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">4b.</strong>
								<div class="input-group-append">
									<span class="input-group-text"
										id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo Helper::validate_key_value('amount_include_property_pay',$expenses_info);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row 4 c -->
			<div class="row">
				<div class="col-md-8">
					<div class="input-group mb-3">
						<label>4c. Home maintenance, repair, and upkeep expenses</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">4b.</strong>
								<div class="input-group-append">
									<span class="input-group-text"
										id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo Helper::validate_key_value('amount_include_home_pay',$expenses_info);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row 4 d -->
			<div class="row">
				<div class="col-md-8">
					<div class="input-group mb-3">
						<label>4d. Homeowner’s association or condominium dues</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">4d.</strong>
								<div class="input-group-append">
									<span class="input-group-text"
										id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo Helper::validate_key_value('amount_include_homeowner_pay',$expenses_info);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Row 5 -->
		<div class="row">
			<div class="col-md-8">
				<div class="input-group mb-3">
					<label for="">
						<strong class="d-block">5. Additional mortgage payments for your
							residence
						</strong>such as home equity loans
					</label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group d-flex mb-3">
					<strong class="input-group-text">5</strong>
					<div class="input-group-append"><span class="input-group-text"
							id="basic-addon2">$</span>
					</div>
					<input type="text" value="<?php echo Helper::validate_key_value('mortgage_payments_pay',$expenses_info);?>" class="form-control">
				</div>
			</div>
		</div>
		<!-- Row 6 -->
		<?php
			$expenses_utilities_info=(!empty($expenses_info['utilities']))?$expenses_info['utilities']:[];
		?>
		<div class="payroll-deduction">
			<!-- Row 6.a -->
			<div class="row">
				<div class="col-md-12">
					<div class="input-group">
						<strong>6. Utilities:</strong>
					</div>
				</div>
				<div class="col-md-8">
					<div class="input-group">
						<label>6a. Electricity, heat, natural gas</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">6a.</strong>
								<div class="input-group-append">
									<span class="input-group-text"
										id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo Helper::validate_key_value('electricity_heating_price',$expenses_utilities_info);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row 6.b -->
			<div class="row">
				<div class="col-md-8">
					<div class="input-group">
						<label>6b. Water, sewer, garbage collection</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">6b.</strong>
								<div class="input-group-append">
									<span class="input-group-text"
										id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo Helper::validate_key_value('water_sewerl_price',$expenses_utilities_info);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row 6 c -->
			<div class="row">
				<div class="col-md-8">
					<div class="input-group mb-3">
						<label>6c. Telephone, cell phone, Internet, satellite, and cable
							services</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">6c.</strong>
								<div class="input-group-append">
									<span class="input-group-text"
										id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo Helper::validate_key_value('telephone_service_price',$expenses_utilities_info);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row 6 d -->
			<div class="row">
				<div class="col-md-8">
					<div class="input-group mb-3">
						<label>Other. Specify:</label>
						<input type="text" value="" class="form-control">
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">6d.</strong>
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
		<!-- Row 7 -->
		<div class="row">
			<div class="col-md-8">
				<div class="input-group mb-3">
					<label for="">
						<strong class="d-block">7. Food and housekeeping supplies
						</strong>
					</label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group d-flex mb-3">
					<strong class="input-group-text">7.</strong>
					<div class="input-group-append">
						<span class="input-group-text" id="basic-addon2">$</span>
					</div>
					<input type="text" value="<?php echo Helper::validate_key_value('food_housekeeping_price',$expenses_info);?>" class="form-control">
				</div>

			</div>
		</div>
		<!-- Row 8 -->
		<div class="row">
			<div class="col-md-8">
				<div class="input-group mb-3">
					<label for="">
						<strong class="d-block">8. Childcare and children’s education costs
						</strong>
					</label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group d-flex mb-3">
					<strong class="input-group-text">8.</strong>
					<div class="input-group-append">
						<span class="input-group-text" id="basic-addon2">$</span>
					</div>
					<input type="text" value="<?php echo Helper::validate_key_value('child_care_price',$expenses_info);?>" class="form-control">
				</div>

			</div>
		</div>
		<!-- Row 9 -->
		<div class="row">
			<div class="col-md-8">
				<div class="input-group mb-3">
					<label for="">
						<strong class="d-block">9. Clothing, laundry, and dry cleaning
						</strong>
					</label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group d-flex mb-3">
					<strong class="input-group-text">9.</strong>
					<div class="input-group-append">
						<span class="input-group-text" id="basic-addon2">$</span>
					</div>
					<input type="text" value="<?php echo Helper::validate_key_value('laundry_price',$expenses_info);?>" class="form-control">
				</div>

			</div>
		</div>
		<!-- Row 10 -->
		<div class="row">
			<div class="col-md-8">
				<div class="input-group mb-3">
					<label for="">
						<strong class="d-block">10. Personal care products and services
						</strong>
					</label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group d-flex mb-3">
					<strong class="input-group-text">10.</strong>
					<div class="input-group-append">
						<span class="input-group-text" id="basic-addon2">$</span>
					</div>
					<input type="text" value="<?php echo Helper::validate_key_value('personal_care_price',$expenses_info);?>" class="form-control">
				</div>

			</div>
		</div>
		<!-- Row 11 -->
		<div class="row">
			<div class="col-md-8">
				<div class="input-group mb-3">
					<label for="">
						<strong class="d-block">11. Medical and dental expenses
						</strong>
					</label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group d-flex mb-3">
					<strong class="input-group-text">11.</strong>
					<div class="input-group-append">
						<span class="input-group-text" id="basic-addon2">$</span>
					</div>
					<input type="text" value="<?php echo Helper::validate_key_value('medical_dental_price',$expenses_info);?>" class="form-control">
				</div>

			</div>
		</div>
		<!-- Row 12 -->
		<div class="row">
			<div class="col-md-8">
				<div class="input-group mb-3">
					<label for="">
						<strong class="d-block">12. Transportation.
						</strong> Include gas, maintenance, bus or train fare.
						Do not include car payments
					</label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group d-flex mb-3">
					<strong class="input-group-text">12.</strong>
					<div class="input-group-append">
						<span class="input-group-text" id="basic-addon2">$</span>
					</div>
					<input type="text" value="<?php echo Helper::validate_key_value('transportation_price',$expenses_info);?>" class="form-control">
				</div>

			</div>
		</div>
		<!-- Row 13 -->
		<div class="row">
			<div class="col-md-8">
				<div class="input-group mb-3">
					<label for="">
						<strong class="d-block">13. Entertainment, clubs, recreation,
							newspapers,
							magazines, and books
						</strong>
					</label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group d-flex mb-3">
					<strong class="input-group-text">13.</strong>
					<div class="input-group-append">
						<span class="input-group-text" id="basic-addon2">$</span>
					</div>
					<input type="text" value="<?php echo Helper::validate_key_value('entertainment_price',$expenses_info);?>" class="form-control">
				</div>

			</div>
		</div>
		<!-- Row 14 -->
		<div class="row">
			<div class="col-md-8">
				<div class="input-group mb-3">
					<label for="">
						<strong class="d-block">14. Charitable contributions and religious
							donations
						</strong>
					</label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group d-flex mb-3">
					<strong class="input-group-text">14.</strong>
					<div class="input-group-append">
						<span class="input-group-text" id="basic-addon2">$</span>
					</div>
					<input type="text" value="<?php echo Helper::validate_key_value('charitablet_price',$expenses_info);?>" class="form-control">
				</div>

			</div>
		</div>
		<!-- Row 15 -->
		<div class="payroll-deduction">
			<!-- Row 15.a -->
			<div class="row">
				<div class="col-md-12">
					<div class="input-group">
						<strong>15. Insurance.</strong>
						<p>Do not include insurance deducted from your pay or included in
							lines
							4 or 20</p>
					</div>
				</div>
				<div class="col-md-8">
					<div class="input-group">
						<label>15a. Life insurance</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">15a.</strong>
								<div class="input-group-append">
									<span class="input-group-text"
										id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo Helper::validate_key_value('life_insurance_price',$expenses_info);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row 15 b -->
			<div class="row">
				<div class="col-md-8">
					<div class="input-group">
						<label>15b. Health insurance</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">15b.</strong>
								<div class="input-group-append">
									<span class="input-group-text"
										id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo Helper::validate_key_value('health_insurance_price',$expenses_info);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row 6 c -->
			<div class="row">
				<div class="col-md-8">
					<div class="input-group mb-3">
						<label>15c. Vehicle insurance</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">15c.</strong>
								<div class="input-group-append">
									<span class="input-group-text"
										id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo Helper::validate_key_value('auto_insurance_price',$expenses_info);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row 15 d -->
			<div class="row">
				<div class="col-md-8">
					<div class="input-group mb-3">
						<label>15d. Other insurance. Specify</label>
						<input type="text" value="" class="form-control">
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">6d.</strong>
								<div class="input-group-append">
									<span class="input-group-text"
										id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo (!empty($expenses_info['other_insurance_price']) && is_array($expenses_info['other_insurance_price']))?array_sum($expenses_info['other_insurance_price']):$expenses_info['other_insurance_price'];?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Row 16 -->
		<div class="row">
			<div class="col-md-8">
				<div class="input-group mb-3">
					<label for="">
						<strong class="d-block">16. Taxes.
						</strong>Do not include taxes deducted from your pay or included in
						lines 4 or 20. Specify
					</label>
					<input type="text" value="" class="form-control">
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group d-flex mb-3">
					<strong class="input-group-text">16</strong>
					<div class="input-group-append">
						<span class="input-group-text" id="basic-addon2">$</span>
					</div>
					<input type="text" value="<?php echo (!empty($expenses_info['taxbills_price']) && is_array($expenses_info['taxbills_price']))?array_sum($expenses_info['taxbills_price']):$expenses_info['taxbills_price'];?>" class="form-control">
				</div>
			</div>
		</div>
		<!-- Row 17 -->
		<div class="payroll-deduction">
			<!-- Row 17.a -->
			<div class="row">
				<div class="col-md-12">
					<div class="input-group">
						<strong>17. Installment or lease payments:</strong>
						<p>Do not include insurance deducted from your pay or included in
							lines
							4 or 20</p>
					</div>
				</div>
				<div class="col-md-8">
					<div class="input-group">
						<label>17a. Car payments for Vehicle 1</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">17a.</strong>
								<div class="input-group-append">
									<span class="input-group-text"
										id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo (!empty($expenses_info['installmentpayments_price']))?array_sum($expenses_info['installmentpayments_price']):"";?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row 17 b -->
			<div class="row">
				<div class="col-md-8">
					<div class="input-group">
						<label>17b. Car payments for Vehicle 2</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">17b.</strong>
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
			<!-- Row 17 c -->
			<div class="row">
				<div class="col-md-8">
					<div class="input-group mb-3">
						<label>17c. Other. Specify</label>
						<input type="text" value="" class="form-control">
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">17c.</strong>
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
			<!-- Row 17 d -->
			<div class="row">
				<div class="col-md-8">
					<div class="input-group mb-3">
						<label>17d. Other. Specify</label>
						<input type="text" value="" class="form-control">
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">17d.</strong>
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

		<!-- Row 18 -->
		<div class="row">
			<div class="col-md-8">
				<div class="input-group mb-3">
					<strong>18. Your payments of alimony, maintenance, and support that you
						did
						not
						report as deducted from
						your pay on line 5, Schedule I, Your Income (Official Form
						106I).</strong>
					<input type="text" value="" class="form-control">
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<div class="input-group d-flex mb-3">
							<strong class="input-group-text">18.</strong>
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">$</span>
							</div>
							<input type="text" value="<?php echo Helper::validate_key_value('alimony_price',$expenses_info);?>" class="form-control">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Row 19 -->
		<div class="row">
			<div class="col-md-8">
				<div class="input-group mb-3">
					<strong>19. Other payments you make to support others who do not live
						with
						you.
						Specify</strong>
					<input type="text" value="" class="form-control">
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<div class="input-group d-flex mb-3">
							<strong class="input-group-text">19.</strong>
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">$</span>
							</div>
							<input type="text" value="" class="form-control">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Row 20 -->
		<div class="payroll-deduction">
			<!-- Row 20.a -->
			<div class="row">
				<div class="col-md-12">
					<div class="input-group">
						<strong>20. Other real property expenses not included in lines 4 or
							5 of
							this form or on Schedule I: Your Income</strong>
					</div>
				</div>
				<div class="col-md-8">
					<div class="input-group">
						<label>20a. Mortgages on other property</label>
					</div>
				</div>
				<?php
				$mortgage_property=(!empty($expenses_info['mortgage_property']))?$expenses_info['mortgage_property']:[];
				?>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">20a.</strong>
								<div class="input-group-append">
									<span class="input-group-text"
										id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo Helper::validate_key_value('other_real_estate_price',$mortgage_property);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row 20 b -->
			<div class="row">
				<div class="col-md-8">
					<div class="input-group">
						<label>20b. Real estate taxes </label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">20b.</strong>
								<div class="input-group-append">
									<span class="input-group-text"
										id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo Helper::validate_key_value('tax',$mortgage_property);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row 20 c -->
			<div class="row">
				<div class="col-md-8">
					<div class="input-group mb-3">
						<label>20c. Property, homeowner’s, or renter’s insurance</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">20c.</strong>
								<div class="input-group-append">
									<span class="input-group-text"
										id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo Helper::validate_key_value('rental_insurance_price',$mortgage_property);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row 20 d -->
			<div class="row">
				<div class="col-md-8">
					<div class="input-group mb-3">
						<label>20d. Maintenance, repair, and upkeep expenses</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">20d.</strong>
								<div class="input-group-append">
									<span class="input-group-text"
										id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo Helper::validate_key_value('home_maintenance_price',$mortgage_property);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- Row 21 -->
		<div class="row">
			<div class="col-md-8">
				<div class="input-group mb-3">
					<strong>21. Other. Specify</strong>
					<input type="text" value="" class="form-control">
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<div class="input-group d-flex mb-3">
							<strong class="input-group-text">21.</strong>
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">$</span>
							</div>
							<input type="text" value="" class="form-control">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Row 22 -->
		<div class="payroll-deduction">
			<!-- Row 22.a -->
			<div class="row">
				<div class="col-md-12">
					<div class="input-group">
						<strong>22. Calculate your monthly expenses</strong>
					</div>
				</div>
				<div class="col-md-8">
					<div class="input-group">
						<label>22a. Add lines 4 through 21.</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">22a.</strong>
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
			<!-- Row 20 b -->
			<div class="row">
				<div class="col-md-8">
					<div class="input-group">
						<label>22b. Copy line 22 (monthly expenses for Debtor 2), if any,
							from
							Official Form 106J-2 2 </label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">22b.</strong>
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
			<!-- Row 20 c -->
			<div class="row">
				<div class="col-md-8">
					<div class="input-group mb-3">
						<label>22c. Add line 22a and 22b. The result is your monthly
							expenses.</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">22c.</strong>
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
		<!-- Row 23 -->
		<div class="payroll-deduction">
			<!-- Row 22.a -->
			<div class="row">
				<div class="col-md-12">
					<div class="input-group">
						<strong>23. Calculate your monthly net income.</strong>
					</div>
				</div>
				<div class="col-md-8">
					<div class="input-group">
						<label>23a. Copy line 12 (your combined monthly income) from
							Schedule
							I.</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">23a.</strong>
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
			<!-- Row 20 b -->
			<div class="row">
				<div class="col-md-8">
					<div class="input-group">
						<label>23b. Copy your monthly expenses from line 22c above.</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">23b.</strong>
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
			<!-- Row 20 c -->
			<div class="row">
				<div class="col-md-8">
					<div class="input-group mb-3">
						<label>23c. Subtract your monthly expenses from your monthly income.
							The result is your monthly net income.</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">23c.</strong>
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
		<!-- Row 24 c -->
		<div class="row">
			<div class="col-md-8">
				<div class="input-group mb-3">
					<strong>24. Do you expect an increase or decrease in your expenses
						within
						the year after you file this form?.</strong>
					<p>For example, do you expect to finish paying for your car loan within
						the
						year or do you expect your
						mortgage payment to increase or decrease because of a modification
						to
						the terms of your mortgage?</p>
				</div>
				<div class="input-group">
					<input type="checkbox">
					<label for="">No</label>
				</div>
				<div class="input-group">
					<input type="checkbox">
					<label for="">Yes</label>
				</div>
			</div>
			<div class="col-md-8">
				<textarea class="form-control" cols="30" rows="5"></textarea>
			</div>
		</div>
	</div>

</div>
</section>
