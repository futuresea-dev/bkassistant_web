<section class="official-form-106i padd-20" id="official-form-106i">
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
											<input type="text" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartB);?>" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="input-group">
											<label>Middle Name </label>
											<input type="text" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartB);?>" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="input-group">
											<label>Last Name </label>
											<input type="text" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartB);?>" class="form-control">
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
									<input type="number" value="<?php echo Helper::validate_key_value('case_number',$BasicInfoPartA);?>" class="form-control">
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
					<h4>Official Form 106I </h4>
					<h2 class="font-lg-22">Schedule I: Your Income
					</h2>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-subheading">
					<p class="font-lg-14"><strong>Be as complete and accurate as possible. If
							two
							married people are filing together (Debtor 1 and Debtor 2), both are
							equally responsible for
							supplying correct information. If you are married and not filing
							jointly, and your spouse is living with you, include information
							about
							your spouse.
							If you are separated and your spouse is not filing with you, do not
							include information about your spouse. If more space is needed,
							attach a
							separate sheet to this form. On the top of any additional pages,
							write
							your name and case number (if known). Answer every question.
						</strong></p>
				</div>
			</div>
		</div>
		<!-- Part 1 -->
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="part-form-title mb-3">
					<span>Part 1</span>
					<h2 class="font-lg-18">Describe Employment</h2>
				</div>
			</div>
		</div>
		<div class="form-border mb-3">
			<!-- Row 1 -->
			<div class="row">
				<div class="col-md-4">
					<div class="input-group d-inline-block">
						<label for="">
							<strong class="d-block">1. Fill in your employment
								information.
							</strong>
							If you have more than one job,
							attach a separate page with
							information about additional
							employers.
							Include part-time, seasonal, or
							self-employed work.
							Occupation may include student
							or homemaker, if it applies.
						</label>
					</div>
				</div>
				<?php 				
				$incomedebtoremployer=(!empty($income_info['incomedebtoremployer']))?$income_info['incomedebtoremployer']:[];
				?>
				<div class="col-md-4">
					<div class="row mb-3">
						<div class="col-md-12 column-heading">Debtor 1</div>
					</div>
					<div class="input-group">
						<strong>Employee Status</strong>
						<div class="input-group">
							<input type="checkbox" <?php echo Helper::validate_key_toggle('current_employed',$incomedebtoremployer,1);?>>
							<label>Employed.</label>
						</div>
						<div class="input-group">
							<input type="checkbox" <?php echo Helper::validate_key_toggle('current_employed',$incomedebtoremployer,0);?>>
							<label>Not employed.</label>
						</div>
					</div>
					<div class="input-group">
						<strong>Occupation</strong>
						<input type="text" value="<?php echo Helper::validate_key_value('employer_occupation',$incomedebtoremployer);?>" class="form-control">
					</div>
					<div class="input-group">
						<strong>Employer’s name</strong>
						<input type="text" value="<?php echo Helper::validate_key_value('employer_name',$incomedebtoremployer);?>" class="form-control">
					</div>

					<div class="input-group">
						<strong>Employer’s address</strong>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="input-group">
								<label>Number</label>
								<input type="text" value="<?php echo Helper::validate_key_value('employer_address_line',$incomedebtoremployer);?>" class="form-control">
							</div>
						</div>
						<div class="col-md-8">
							<div class="input-group">
								<label>Street</label>
								<input type="text" value="<?php echo Helper::validate_key_value('name_address_employer',$incomedebtoremployer);?>" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="input-group">
								<label>City</label>
								<input type="text" value="<?php echo Helper::validate_key_value('employer_city',$incomedebtoremployer);?>" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="input-group">
								<label>State</label>
								<input type="text" value="<?php echo Helper::validate_key_value('employer_state',$incomedebtoremployer);?>" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="input-group">
								<label>Zip Code</label>
								<input type="text" value="<?php echo Helper::validate_key_value('employer_zip',$incomedebtoremployer);?>" class="form-control">
							</div>
						</div>
					</div>
					<div class="input-group">
						<strong>How long employed there?</strong>
						<input type="number" value="<?php echo Helper::validate_key_value('employer_job_period',$incomedebtoremployer);?>" class="form-control">
					</div>
				</div>
				<?php 				
				$debtorspouseemployer=(!empty($income_info['debtorspouseemployer']))?$income_info['debtorspouseemployer']:[];
				?>
				<div class="col-md-4">
					<div class="row mb-3">
						<div class="col-md-12 column-heading">Debtor 2 or non-filing spouse
						</div>
					</div>
					<div class="input-group">
						<strong>Employee Status</strong>
						<div class="input-group">
							<input type="checkbox" <?php echo Helper::validate_key_toggle('current_employed',$debtorspouseemployer,1);?>>
							<label>Employed.</label>
						</div>
						<div class="input-group">
							<input type="checkbox" <?php echo Helper::validate_key_toggle('current_employed',$debtorspouseemployer,0);?>>
							<label>Not employed.</label>
						</div>
					</div>
					<div class="input-group">
						<strong>Occupation</strong>
						<input type="text" value="<?php echo Helper::validate_key_value('spouse_employer_occupation',$debtorspouseemployer);?>" class="form-control">
					</div>
					<div class="input-group">
						<strong>Employer’s name</strong>
						<input type="text" value="<?php echo Helper::validate_key_value('spouse_employer_name',$debtorspouseemployer);?>" class="form-control">
					</div>

					<div class="input-group">
						<strong>Employer’s address</strong>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="input-group">
								<label>Number</label>
								<input type="text" value="<?php echo Helper::validate_key_value('spouse_employer_address_line',$debtorspouseemployer);?>" class="form-control">
							</div>
						</div>
						<div class="col-md-8">
							<div class="input-group">
								<label>Street</label>
								<input type="text" value="<?php echo Helper::validate_key_value('name_address_spouse_employer',$debtorspouseemployer);?>" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="input-group">
								<label>City</label>
								<input type="text" value="<?php echo Helper::validate_key_value('spouse_employer_city',$debtorspouseemployer);?>" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="input-group">
								<label>State</label>
								<input type="text" value="<?php echo Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer);?>" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="input-group">
								<label>Zip Code</label>
								<input type="text" value="<?php echo Helper::validate_key_value('spouse_employer_zip',$debtorspouseemployer);?>" class="form-control">
							</div>
						</div>
					</div>
					<div class="input-group">
						<strong>How long employed there?</strong>
						<input type="number" value="<?php echo Helper::validate_key_value('spouse_employer_job_period',$debtorspouseemployer);?>" class="form-control">
					</div>
				</div>

			</div>

		</div>

		<!-- Part 2 -->
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="part-form-title mb-3">
					<span>Part 2</span>
					<h2 class="font-lg-18">Give Details About Monthly Income </h2>
				</div>
			</div>
		</div>
		<div class="form-border">
			<!-- Row 1 -->
			<div class="row mb-3">
				<div class="col-md-12">
					<div class="input-group d-inline-block">
						<label for="">
							<strong class="d-block">Estimate monthly income as of the date you
								file
								this form. If you have nothing to report for any line, write $0
								in
								the space. Include your non-filing
								spouse unless you are separated.
							</strong> If you or your non-filing spouse have more than one
							employer,
							combine the information for all employers for that person on the
							lines
							below. If you need more space, attach a separate sheet to this form.
						</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6"></div>
				<div class="col-md-6 mb-3">
					<div class="row">
						<div class="col-md-6 column-heading">For Debtor 1 </div>
						<div class="col-md-6 column-heading">For Debtor 2 </div>
					</div>
				</div>
			</div>
			<!-- Row 2 -->
			<?php 				
				$debtormonthlyincome=(!empty($income_info['debtormonthlyincome']))?$income_info['debtormonthlyincome']:[];
				$debtorspousemonthlyincome=(!empty($income_info['debtorspousemonthlyincome']))?$income_info['debtorspousemonthlyincome']:[];
			?>
			<div class="row">
				<div class="col-md-6">
					<div class="input-group mb-3">
						<label for="">
							<strong class="d-block">2. List monthly gross wages, salary, and
								commissions
							</strong> (before all payroll
							deductions). If not paid monthly, calculate what the monthly wage
							would
							be
						</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">2</strong>
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo $debtor_gross1=(!empty($debtormonthlyincome['debtor_gross_wages_month']))?array_sum($debtormonthlyincome['debtor_gross_wages_month']):"";?>" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">2</strong>
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo $debtorspouse_gross1=(!empty($debtorspousemonthlyincome['joints_debtor_gross_wages_month']))?array_sum($debtorspousemonthlyincome['joints_debtor_gross_wages_month']):"";?>" class="form-control">
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- Row 3 -->
			<div class="row">
				<div class="col-md-6">
					<div class="input-group mb-3">
						<label for="">
							<strong class="d-block">3. Estimate and list monthly overtime pay
							</strong>
						</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">3</strong>
								<div class="input-group-append">
									<span class="input-group-text">+</span><span
										class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo $debtor_gross2= Helper::validate_key_value('overtime_per_month',$debtormonthlyincome);?>" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="input-group d-flex mb-3">
								<div class="input-group-append">
									<span class="input-group-text">+</span><span
										class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo $debtorspouse_gross2= Helper::validate_key_value('joints_overtime_per_month',$debtorspousemonthlyincome);?>" class="form-control">
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- Row 3 -->
			<div class="row">
				<div class="col-md-6">
					<div class="input-group mb-3">
						<label for="">
							<strong class="d-block">4. Calculate gross income.
							</strong>Add line 2 + line 3
						</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">4.</strong>
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo intval($debtor_gross1)+intval($debtor_gross2);?>" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="input-group d-flex mb-3">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo intval($debtorspouse_gross1)+intval($debtorspouse_gross2);?>" class="form-control">
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- Row 4 -->
			<div class="row">
				<div class="col-md-6">
					<div class="input-group mb-3">
						<label for="">
							<strong class="d-block">4. Copy line 4 here
							</strong>
						</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">4.</strong>
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo intval($debtor_gross1)+intval($debtor_gross2);?>" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="input-group d-flex mb-3">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo intval($debtorspouse_gross1)+intval($debtorspouse_gross2);?>" class="form-control">
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- Row 5 -->
			<div class="row">
				<div class="col-md-12">
					<div class="input-group mb-3">
						<strong class="d-block">5. List all payroll deductions:
						</strong>
					</div>
				</div>
			</div>
			<div class="payroll-deduction">
				<!-- Row 5.1 -->
				<div class="row">
					<div class="col-md-6">
						<div class="input-group mb-3">
							<label>5a. Tax, Medicare, and Social Security deductions 5a.</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<strong class="input-group-text">5a.</strong>
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo Helper::validate_key_value('paycheck_for_security',$debtormonthlyincome);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo Helper::validate_key_value('joints_paycheck_for_security',$debtorspousemonthlyincome);?>" class="form-control">
								</div>
							</div>
						</div>

					</div>
				</div>
				<!-- Row 5.b -->
				<div class="row">
					<div class="col-md-6">
						<div class="input-group mb-3">
							<label>5a. Mandatory contributions for retirement plans</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<strong class="input-group-text">5b.</strong>
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo Helper::validate_key_value('paycheck_mandatory_contribution',$debtormonthlyincome);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo Helper::validate_key_value('joints_paycheck_mandatory_contribution',$debtorspousemonthlyincome);?>" class="form-control">
								</div>
							</div>
						</div>

					</div>
				</div>
				<!-- Row 5.c -->
				<div class="row">
					<div class="col-md-6">
						<div class="input-group mb-3">
							<label>5c. Voluntary contributions for retirement plans</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<strong class="input-group-text">5c.</strong>
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo Helper::validate_key_value('paycheck_voluntary_contribution',$debtormonthlyincome);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo Helper::validate_key_value('joints_paycheck_voluntary_contribution',$debtorspousemonthlyincome);?>" class="form-control">
								</div>
							</div>
						</div>

					</div>
				</div>
				<!-- Row 5d -->
				<div class="row">
					<div class="col-md-6">
						<div class="input-group mb-3">
							<label>5d. Required repayments of retirement fund loans</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<strong class="input-group-text">5d.</strong>
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo Helper::validate_key_value('paycheck_required_repayment',$debtormonthlyincome);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo Helper::validate_key_value('joints_paycheck_required_repayment',$debtorspousemonthlyincome);?>" class="form-control">
								</div>
							</div>
						</div>

					</div>
				</div>
				<!-- Row 5e -->
				<div class="row">
					<div class="col-md-6">
						<div class="input-group mb-3">
							<label>5e. Insurance</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<strong class="input-group-text">5e.</strong>
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo Helper::validate_key_value('automatically_deduction_insurance',$debtormonthlyincome);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo Helper::validate_key_value('joints_automatically_deduction_insurance',$debtorspousemonthlyincome);?>" class="form-control">
								</div>
							</div>
						</div>

					</div>
				</div>
				<!-- Row 5f -->
				<div class="row">
					<div class="col-md-6">
						<div class="input-group mb-3">
							<label>5f. Domestic support obligations </label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<strong class="input-group-text">5f.</strong>
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo Helper::validate_key_value('domestic_support_obligations',$debtormonthlyincome);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo Helper::validate_key_value('joints_domestic_support_obligations',$debtorspousemonthlyincome);?>" class="form-control">
								</div>
							</div>
						</div>

					</div>
				</div>
				<!-- Row 5g -->
				<div class="row">
					<div class="col-md-6">
						<div class="input-group mb-3">
							<label>5g. Union dues </label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<strong class="input-group-text">5g.</strong>
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo Helper::validate_key_value('union_dues_deducted',$debtormonthlyincome);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo Helper::validate_key_value('joints_union_dues_deducted',$debtorspousemonthlyincome);?>" class="form-control">
								</div>
							</div>
						</div>

					</div>
				</div>
				<!-- Row 5h -->
				<div class="row">
					<div class="col-md-6">
						<div class="input-group mb-3">
							<label>5h. Other deductions </label>
						</div>
						<div class="input-group mb-3">
							<label>specify </label>
							<input type="text" value="" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<strong class="input-group-text">5h.</strong>
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo Helper::validate_key_value('other_deduction',$debtormonthlyincome);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo Helper::validate_key_value('joints_other_deduction',$debtorspousemonthlyincome);?>" class="form-control">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<?php
				$debtor_payroll=[];
				$debtorspouse_payroll=[];
				$debtor_income_sumup=["paycheck_for_security","paycheck_mandatory_contribution","paycheck_voluntary_contribution" ,"paycheck_required_repayment","automatically_deduction_insurance" ,"domestic_support_obligations","union_dues_deducted","other_deduction"];
				
				$debtorspouse_income_sumup=["joints_paycheck_for_security","joints_paycheck_mandatory_contribution","joints_paycheck_voluntary_contribution" ,"joints_paycheck_required_repayment","joints_automatically_deduction_insurance" ,"joints_domestic_support_obligations","joints_union_dues_deducted","joints_other_deduction"];
				foreach($debtor_income_sumup as $val){
					if(!empty($debtormonthlyincome[$val])){
						$debtor_payroll[]=$debtormonthlyincome[$val];
					}
				}
				foreach($debtorspouse_income_sumup as $val){
					if(!empty($debtorspousemonthlyincome[$val])){
						$debtorspouse_payroll[]=$debtorspousemonthlyincome[$val];
					}
				}
				$debtor_payroll=(!empty($debtor_payroll))?array_sum($debtor_payroll):0;
				$debtorspouse_payroll=(!empty($debtorspouse_payroll))?array_sum($debtorspouse_payroll):0;
				
				$debtors_home_pay= intval($debtor_gross1)+intval($debtor_gross2);
				$debtorspouse_home_pay= intval($debtorspouse_gross1)+intval($debtorspouse_gross2);
				
				$total_monthly_debtors_home_pay=0;
				$total_monthly_debtorspouse_home_pay=0;
				
				if(isset($debtor_payroll) && $debtors_home_pay){
					$total_monthly_debtors_home_pay=$debtor_payroll-$debtors_home_pay;
				}
				
				if(isset($debtorspouse_payroll) && $debtorspouse_home_pay){
					$total_monthly_debtorspouse_home_pay=$debtorspouse_payroll-$debtorspouse_home_pay;
				}
			?>
			<!-- Row 6 -->
			<div class="row">
				<div class="col-md-6">
					<label for="">
						<strong class="d-block">6. Add the payroll deductions.
						</strong> Add lines 5a + 5b + 5c + 5d + 5e +5f + 5g + 5h
					</label>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">6.</strong>
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo $debtor_payroll;?>" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="input-group d-flex mb-3">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo $debtorspouse_payroll;?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row 7 -->
			<div class="row">
				<div class="col-md-6">
					<label for="">
						<strong class="d-block">7. Calculate total monthly take-home pay.
						</strong> Subtract line 6 from line 4.
					</label>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">7.</strong>
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="{{$total_monthly_debtors_home_pay}}" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="input-group d-flex mb-3">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="{{$total_monthly_debtorspouse_home_pay}}" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row 8 -->
			<div class="row">
				<div class="col-md-12">
					<label for="">
						<strong class="d-block">8. List all other income regularly received:
						</strong>
					</label>
				</div>
			</div>

			<div class="payroll-deduction">
				<!-- Row 8.a -->
				<div class="row">
					<div class="col-md-6">
						<div class="input-group mb-3">
							<label><strong>
									8a. Net income from rental property and from operating a
									business,
									profession, or farm
								</strong> Attach a statement for each property and business
								showing gross
								receipts, ordinary and necessary business expenses, and the
								total
								monthly net income. </label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<strong class="input-group-text">8a.</strong>
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo (!empty($debtormonthlyincome['operation_business_month']))?array_sum($debtormonthlyincome['operation_business_month']):"";?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo (!empty($debtorspousemonthlyincome['joints_operation_business_month']))?array_sum($debtorspousemonthlyincome['joints_operation_business_month']):"";?>" class="form-control">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Row 8.b -->
				<div class="row">
					<div class="col-md-6">
						<div class="input-group mb-3">
							<label>8b. Interest and dividends </label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<strong class="input-group-text">8b.</strong>
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo (!empty($debtormonthlyincome['royalties_month']))?array_sum($debtormonthlyincome['royalties_month']):"";?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo (!empty($debtorspousemonthlyincome['joints_royalties_month']))?array_sum($debtorspousemonthlyincome['joints_royalties_month']):"";?>" class="form-control">
								</div>
							</div>
						</div>

					</div>
				</div>
				<!-- Row 8 c -->
				<div class="row">
					<div class="col-md-6">
						<div class="input-group mb-3">
							<label><strong>
									8c. Family support payments that you, a non-filing spouse,
									or a dependent
									regularly receive
								</strong>Include alimony, spousal support, child support,
								maintenance, divorce
								settlement, and property settlement. </label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<strong class="input-group-text">8c.</strong>
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo (!empty($debtormonthlyincome['regular_contributions_month']))?array_sum($debtormonthlyincome['regular_contributions_month']):"";?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo (!empty($debtorspousemonthlyincome['joints_regular_contributions_month']))?array_sum($debtorspousemonthlyincome['joints_regular_contributions_month']):"";?>" class="form-control">
								</div>
							</div>
						</div>

					</div>
				</div>
				<!-- Row 8d -->
				<div class="row">
					<div class="col-md-6">
						<div class="input-group mb-3">
							<label>8d. Unemployment compensation</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<strong class="input-group-text">8d.</strong>
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo (!empty($debtormonthlyincome['unemployment_compensation_month']))?array_sum($debtormonthlyincome['unemployment_compensation_month']):"";?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo (!empty($debtorspousemonthlyincome['joints_unemployment_compensation_month']))?array_sum($debtorspousemonthlyincome['joints_unemployment_compensation_month']):"";?>" class="form-control">
								</div>
							</div>
						</div>

					</div>
				</div>
				<!-- Row 8e -->
				<div class="row">
					<div class="col-md-6">
						<div class="input-group mb-3">
							<label>8e. Social Security</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<strong class="input-group-text">8e.</strong>
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo (!empty($debtormonthlyincome['social_security_month']))?array_sum($debtormonthlyincome['social_security_month']):"";?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo (!empty($debtorspousemonthlyincome['joints_social_security_month']))?array_sum($debtorspousemonthlyincome['joints_social_security_month']):"";?>" class="form-control">
								</div>
							</div>
						</div>

					</div>
				</div>
				<!-- Row 8f -->
				<div class="row">
					<div class="col-md-6">
						<div class="input-group mb-3">
							<label><strong>
									8f. Other government assistance that you regularly receive
								</strong>Include cash assistance and the value (if known) of any
								non-cash assistance
								that you receive, such as food stamps (benefits under the
								Supplemental
								Nutrition Assistance Program) or housing subsidies. </label>
						</div>
						<div class="input-group mb-3">
							<label>Specify</label>
							<input type="text" value="" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<strong class="input-group-text">8f.</strong>
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo (!empty($debtormonthlyincome['other_sources_month']))?array_sum($debtormonthlyincome['other_sources_month']):"";?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group d-flex mb-3">
									<div class="input-group-append">
										<span class="input-group-text"
											id="basic-addon2">$</span>
									</div>
									<input type="text" value="<?php echo (!empty($debtorspousemonthlyincome['joints_other_sources_month']))?array_sum($debtorspousemonthlyincome['joints_other_sources_month']):0;?>" class="form-control">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- Row 9 -->
			<?php
				$debtor_other_total_income=[];				
				$debtorspouse_other_total_income=[];
				
				$debator_other_income=["operation_business_month","rent_real_property_month","royalties_month","retirement_income_month","regular_contributions_month","unemployment_compensation_month","social_security_month","other_sources_month"];
				
				$debator_spouse_other_income=["joints_operation_business_month","joints_rent_real_property_month","joints_royalties_month","joints_retirement_income_month","joints_regular_contributions_month","joints_unemployment_compensation_month","joints_social_security_month","joints_other_sources_month"];
				
				foreach($debator_other_income as $val){
					if(!empty($debtormonthlyincome[$val])){
						$debtor_other_total_income[]=(!empty($debtormonthlyincome[$val]))?array_sum($debtormonthlyincome[$val]):0;
					}
				}
				foreach($debator_spouse_other_income as $val){
					if(!empty($debtorspousemonthlyincome[$val])){
						$debtorspouse_other_total_income[]=(!empty($debtorspousemonthlyincome[$val]))?array_sum($debtorspousemonthlyincome[$val]):0;
					}
				}
			
			?>
			<div class="row">
				<div class="col-md-6">
					<div class="input-group mb-3">
						<label for="">
							<strong class="d-block">9. Add all other income.
							</strong> Add lines 8a + 8b + 8c + 8d + 8e + 8f +8g + 8h
						</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">9</strong>
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo array_sum(@$debtor_other_total_income);?>" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="input-group d-flex mb-3">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo array_sum(@$debtorspouse_other_total_income);?>" class="form-control">
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- Row 10 -->
			<div class="row">
				<div class="col-md-6">
					<div class="input-group mb-3">
						<label for="">
							<strong class="d-block">10. Calculate monthly income. Add line 7 +
								line
								9.
							</strong> Add the entries in line 10 for Debtor 1 and Debtor 2 or
							non-filing spouse.
						</label>
					</div>
				</div>
				<?php
					$debtor_caluculate_income=array_sum(@$debtor_other_total_income)+$total_monthly_debtors_home_pay;
					$debtorspouse_caluculate_income=array_sum(@$debtorspouse_other_total_income)+$total_monthly_debtorspouse_home_pay;
					
				?>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">10</strong>
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="{{$debtor_caluculate_income}}" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="input-group d-flex mb-3">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="{{$debtorspouse_caluculate_income}}" class="form-control">
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- Row 11 -->
			<div class="row">
				<div class="col-md-10">
					<div class="input-group mb-3">
						<label for="">
							<strong class="d-block">11. State all other regular contributions to
								the
								expenses that you list in Schedule J.
							</strong> Include contributions from an unmarried partner, members
							of
							your household, your dependents, your roommates, and other
							friends or relatives.

						</label>
						<div class="input-group mb-3">
							<label for=""> Do not include any amounts already included in lines
								2-10
								or amounts
								that are not available to pay expenses listed in Schedule J
							</label>
							<div class="input-group mb-3">
								<label for="">Specify</label>
								<input type="text" value="" class="form-control">
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">11</strong>
								<div class="input-group-append">
									<span class="input-group-text">+</span><span
										class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row 12 -->
			<div class="row">
				<div class="col-md-10">
					<div class="input-group mb-3">
						<label for="">
							<strong class="d-block">12. Add the amount in the last column of
								line 10
								to the amount in line 11.
							</strong>. The result is the combined monthly income.
							Write that amount on the Summary of Your Assets and Liabilities and
							Certain Statistical Information, if it applies
						</label>

					</div>
				</div>
				<div class="col-md-2">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group d-flex mb-3">
								<strong class="input-group-text">12</strong>
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row 13 -->
			<div class="row">
				<div class="col-md-12">
					<div class="input-group mb-3">
						<label for="">
							<strong class="d-block">13. Do you expect an increase or decrease
								within
								the
								year after you file this form?</strong>
						</label>
						<div class="input-group ">
							<input type="checkbox">
							<label for="" class="">No</label>
						</div>
						<div class="input-group ">
							<input type="checkbox">
							<label for="">Yes Explain</label>
							<div class="input-group ">
								<input type="text" value="" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

