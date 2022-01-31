<section class="official-form-107 padd-20" id="official-form-107">
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
					<h4>Official Form 107 </h4>
					<h2 class="font-lg-22">Statement of Financial Affairs for Individuals Filing
						for
						Bankruptcy
					</h2>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-subheading">
					<p class="font-lg-14"><strong>Be as complete and accurate as possible. If
							two
							married people are filing together, both are equally responsible for
							supplying correct
							information. If more space is needed, attach a separate sheet to
							this
							form. On the top of any additional pages, write your name and case
							number (if known). Answer every question.
						</strong></p>
				</div>
			</div>
		</div>
		<!-- Part 1 -->
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="part-form-title mb-3">
					<span>Part 1</span>
					<h2 class="font-lg-18">Give Details About Your Marital Status and Where You
						Lived Before</h2>
				</div>
			</div>
		</div>
		<!-- Row 1 -->
		<?php
				$finacial_affairs=$financialaffairs_info;
				// dump($finacial_affairs);
				// $loan_own_type_property=true;
			?>
		<div class="form-border mb-3">
			<div class="row">
				<div class="col-md-12">
					<div class="input-group d-inline-block">
						<label for="">
							<strong class="d-block">1. What is your current marital status?
							</strong>
						</label>
					</div>
					<div class="input-group">
						<input type="checkbox">
						<label>Married</label>
					</div>
					<div class="input-group">
						<input type="checkbox">
						<label>Not married</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="input-group d-inline-block">
						<label for="">
							<strong class="d-block">2. During the last 3 years, have you lived
								anywhere other than where you live now?
							</strong>
						</label>
					</div>
					<div class="input-group">
						<input type="checkbox">
						<label>No</label>
					</div>
					<div class="input-group">
						<input type="checkbox">
						<label>Yes. List all of the places you lived in the last 3 years. Do not
							include where you live now.</label>
					</div>
				</div>
			</div>
			<div class="row mt-3 border-bottm-1">
				<?php
					if(!empty($finacial_affairs['prev_address']['address'])){
						for($i=0;$i<count($finacial_affairs['prev_address']['address']);$i++){
				?>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-8">
							<div class="column-heading">
								<h4>Debtor 1:</h4>
							</div>
							<div class="row mt-25">
								<div class="col-md-4">
									<div class="input-group">
										<label>Number</label>
										<input type="number" value="<?php echo Helper::validate_key_loop_value("address",$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-8">
									<div class="input-group">
										<label>City</label>
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
						<div class="col-md-4 p-0 ">
							<div class="column-heading">
								<h4>Dates Debtor 1
									lived there</h4>
							</div>

							<div class="input-group mt-3">
								<label>From</label>
								<input type="date" value="<?php echo Helper::validate_key_loop_value("from",$finacial_affairs,$i);?>" class="form-control">
							</div>
							<div class="input-group">
								<label>To</label>
								<input type="date" value="<?php echo Helper::validate_key_loop_value("to",$finacial_affairs,$i);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			<?php }}?>				
			</div>			
			<div class="row">
				<div class="col-md-12">
					<div class="input-group d-inline-block">
						<label for="">
							<strong class="d-block">1. What is your current marital status?
							</strong>
						</label>
					</div>
					<div class="input-group">
						<input type="checkbox">
						<label>Married</label>
					</div>
					<div class="input-group">
						<input type="checkbox">
						<label>Not married</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="input-group d-inline-block">
						<label for="">
							<strong class="d-block">3. Within the last 8 years, did you ever
								live
								with a spouse or legal equivalent in a community property state
								or
								territory?
							</strong>(Community property
							states and territories include Arizona, California, Idaho,
							Louisiana, Nevada, New Mexico, Puerto Rico, Texas, Washington, and
							Wisconsin.
						</label>
					</div>
					<div class="input-group">
						<input type="checkbox" <?php echo Helper::validate_key_toggle('living_domestic_partner',$finacial_affairs,0);?>>
						<label>No</label>
					</div>
					<div class="input-group">
						<input type="checkbox" <?php echo Helper::validate_key_toggle('living_domestic_partner',$finacial_affairs,1);?>>
						<label>Yes. Make sure you fill out Schedule H: Your Codebtors (Official
							Form
							106H)</label>
					</div>
				</div>
			</div>
		</div>
		<!-- Part 2 -->
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="part-form-title mb-3">
					<span>Part 2</span>
					<h2 class="font-lg-18">Explain the Sources of Your Income</h2>
				</div>
			</div>
		</div>
		<!-- Row 1 -->
		<div class="form-border">
			<div class="row border-bottm-1">
				<div class="col-md-12">
					<div class="input-group d-inline-block">
						<label for="">
							<strong class="d-block">4. Did you have any income from employment
								or
								from
								operating a business during this year or the two previous
								calendar
								years?
							</strong>Fill in the total amount of income you received from all
							jobs
							and
							all businesses, including part-time activities.
							If you are filing a joint case and you have income that you receive
							together, list it only once under Debtor 1.
						</label>
					</div>
					<div class="input-group">
						<input type="checkbox" <?php echo Helper::validate_key_toggle('total_amount_income',$finacial_affairs,0);?>>
						<label>No</label>
					</div>
					<div class="input-group">
						<input type="checkbox" <?php echo Helper::validate_key_toggle('total_amount_income',$finacial_affairs,1);?>>
						<label>Yes. Fill in the details.</label>
					</div>
				</div>
				<div class="col-md-12">
					<!-- First Row Heading -->
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<div class="colum-heading-main">
										<h4>Debtor 1</h4>
									</div>
								</div>
								<div class="col-md-6">
									<div class="column-heading">
										<label for=""><strong class="d-block">
												Sources of income
											</strong>Check all that apply</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="column-heading">
										<label for=""><strong class="d-block">
												Gross income
											</strong>(before deductions and
											exclusions)</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<div class="colum-heading-main">
										<h4>Debtor 2</h4>
									</div>
								</div>
								<div class="col-md-6">
									<div class="column-heading">
										<label for=""><strong class="d-block">
												Sources of income
											</strong>Check all that apply</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="column-heading">
										<label for=""><strong class="d-block">
												Gross income
											</strong>(before deductions and
											exclusions)</label>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Second Row Body -->
					<div class="row">
						<div class="col-md-4">
							<div class="input-group">
								<label for=""><strong>
										From January 1 of current year until
										the date you filed for bankruptcy:
									</strong></label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="checkbox">
										<label for="">Wages, commissions,
											bonuses, tips</label>
									</div>
									<div class="input-group">
										<input type="checkbox">
										<label for="">Operating a business</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group d-flex mt-3">
										<div class="input-group-append">
											<span class="input-group-text"
												id="basic-addon2">$</span>
										</div>
										<input type="text" value="<?php echo Helper::validate_key_value('total_amount_this_year_income',$finacial_affairs);?>" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="checkbox">
										<label for="">Wages, commissions,
											bonuses, tips</label>
									</div>
									<div class="input-group">
										<input type="checkbox">
										<label for="">Operating a business</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group d-flex mt-3">
										<div class="input-group-append">
											<span class="input-group-text"
												id="basic-addon2">$</span>
										</div>
										<input type="text" value="<?php echo Helper::validate_key_value('total_amount_spouse_this_year_income',$finacial_affairs);?>" class="form-control">
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- Third Row Body -->
					<div class="row">
						<div class="col-md-4">
							<div class="input-group">
								<label for=""><strong>
										For last calendar year:
									</strong>(January 1 to December 31,</label>
								<input type="text" value="" class="form-control" placeholder="YYYY">
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="checkbox">
										<label for="">Wages, commissions,
											bonuses, tips</label>
									</div>
									<div class="input-group">
										<input type="checkbox">
										<label for="">Operating a business</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group d-flex mt-3">
										<div class="input-group-append">
											<span class="input-group-text"
												id="basic-addon2">$</span>
										</div>
										<input type="text" value="<?php echo Helper::validate_key_value('total_amount_last_year_income',$finacial_affairs);?>" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="checkbox">
										<label for="">Wages, commissions,
											bonuses, tips</label>
									</div>
									<div class="input-group">
										<input type="checkbox">
										<label for="">Operating a business</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group d-flex mt-3">
										<div class="input-group-append">
											<span class="input-group-text"
												id="basic-addon2">$</span>
										</div>
										<input type="text" value="<?php echo Helper::validate_key_value('total_amount_spouse_last_year_income',$finacial_affairs);?>" class="form-control">
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- Fourth Row Body -->
					<div class="row">
						<div class="col-md-4">
							<div class="input-group">
								<label for=""><strong>
										For last calendar year:
									</strong>(January 1 to December 31,</label>
								<input type="text" value="" class="form-control" placeholder="YYYY">
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="checkbox">
										<label for="">Wages, commissions,
											bonuses, tips</label>
									</div>
									<div class="input-group">
										<input type="checkbox">
										<label for="">Operating a business</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group d-flex mt-3">
										<div class="input-group-append">
											<span class="input-group-text"
												id="basic-addon2">$</span>
										</div>
										<input type="text" value="<?php echo Helper::validate_key_value('total_amount_lastbefore_year_income',$finacial_affairs);?>" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="checkbox">
										<label for="">Wages, commissions,
											bonuses, tips</label>
									</div>
									<div class="input-group">
										<input type="checkbox">
										<label for="">Operating a business</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group d-flex mt-3">
										<div class="input-group-append">
											<span class="input-group-text"
												id="basic-addon2">$</span>
										</div>
										<input type="text" value="<?php echo Helper::validate_key_value('total_amount_spouse_lastbefore_year_income',$finacial_affairs);?>" class="form-control">
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-12">
					<div class="input-group d-inline-block">
						<label for="">
							<strong class="d-block">5. Did you receive any other income during
								this
								year or the two previous calendar years?
							</strong>Include income regardless of whether that income is
							taxable.
							Examples of other income are alimony; child support; Social
							Security,
							unemployment, and other public benefit payments; pensions; rental
							income; interest; dividends; money collected from lawsuits;
							royalties; and
							gambling and lottery winnings. If you are filing a joint case and
							you have income that you received together, list it only once under
							Debtor 1.
							List each source and the gross income from each source separately.
							Do not include income that you listed in line 4.
						</label>
					</div>
					<div class="input-group">
						<input type="checkbox" <?php echo Helper::validate_key_toggle('other_income_received_income',$finacial_affairs,0);?>>
						<label>No</label>
					</div>
					<div class="input-group">
						<input type="checkbox" <?php echo Helper::validate_key_toggle('other_income_received_income',$finacial_affairs,1);?>>
						<label>Yes. Fill in the details.</label>
					</div>
				</div>
				<div class="col-md-12">
					<!-- First Row Heading -->
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<div class="colum-heading-main">
										<h4>Debtor 1</h4>
									</div>
								</div>
								<div class="col-md-6">
									<div class="column-heading">
										<label for=""><strong class="d-block">
												Sources of income
											</strong>Check all that apply</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="column-heading">
										<label for=""><strong class="d-block">
												Gross income
											</strong>(before deductions and
											exclusions)</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<div class="colum-heading-main">
										<h4>Debtor 2</h4>
									</div>
								</div>
								<div class="col-md-6">
									<div class="column-heading">
										<label for=""><strong class="d-block">
												Sources of income
											</strong>Check all that apply</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="column-heading">
										<label for=""><strong class="d-block">
												Gross income
											</strong>(before deductions and
											exclusions)</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Second Row Body -->
				<div class="col-md-12 border-bottm-1">
					<div class="row mt-3">
						<div class="col-md-4">
							<div class="input-group">
								<label for=""><strong>
										From January 1 of current year until
										the date you filed for bankruptcy:
									</strong></label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" value="<?php echo Helper::validate_key_value('other_income_received_this_year',$finacial_affairs);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group d-flex">
										<div class="input-group-append">
											<span class="input-group-text"
												id="basic-addon2">$</span>
										</div>
										<input type="text" value="<?php echo Helper::validate_key_value('other_amount_this_year_income',$finacial_affairs);?>" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" value="" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group d-flex">
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
										<input type="text" value="" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group d-flex">
										<div class="input-group-append">
											<span class="input-group-text"
												id="basic-addon2">$</span>
										</div>
										<input type="text" value="" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" value="<?php echo Helper::validate_key_value('other_income_received_spouse_this_year',$finacial_affairs);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group d-flex ">
										<div class="input-group-append">
											<span class="input-group-text"
												id="basic-addon2">$</span>
										</div>
										<input type="text" value="<?php echo Helper::validate_key_value('other_amount_spouse_this_year_income',$finacial_affairs);?>" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" value="" class="form-control">
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
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" value="" class="form-control">
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
				<div class="col-md-12 mt-3 border-bottm-1">
					<!-- Fourth Row Body -->
					<div class="row">
						<div class="col-md-4">
							<div class="input-group">
								<label for=""><strong>
										For last calendar year:
									</strong>(January 1 to December 31,</label>
								<input type="text" value="" class="form-control" placeholder="YYYY">
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" value="<?php echo Helper::validate_key_value('other_income_received_last_year',$finacial_affairs);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group d-flex">
										<div class="input-group-append">
											<span class="input-group-text"
												id="basic-addon2">$</span>
										</div>
										<input type="text" value="<?php echo Helper::validate_key_value('other_amount_last_year_income',$finacial_affairs);?>" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" value="" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group d-flex">
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
										<input type="text" value="" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group d-flex">
										<div class="input-group-append">
											<span class="input-group-text"
												id="basic-addon2">$</span>
										</div>
										<input type="text" value="" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" value="<?php echo Helper::validate_key_value('other_income_received_spouse_last_year',$finacial_affairs);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group d-flex ">
										<div class="input-group-append">
											<span class="input-group-text"
												id="basic-addon2">$</span>
										</div>
										<input type="text" value="<?php echo Helper::validate_key_value('other_amount_last_year_income',$finacial_affairs);?>" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" value="" class="form-control">
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
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" value="" class="form-control">
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
				<div class="col-md-12 mt-3">
					<!-- Fourth Row Body -->
					<div class="row">
						<div class="col-md-4">
							<div class="input-group">
								<label for=""><strong>
										For last calendar year:
									</strong>(January 1 to December 31,</label>
								<input type="text" value="" class="form-control" placeholder="YYYY">
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" value="<?php echo Helper::validate_key_value('other_income_received_lastbefore_year',$finacial_affairs);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group d-flex">
										<div class="input-group-append">
											<span class="input-group-text"
												id="basic-addon2">$</span>
										</div>
										<input type="text" value="<?php echo Helper::validate_key_value('other_amount_lastbefore_year_income',$finacial_affairs);?>" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" value="" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group d-flex">
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
										<input type="text" value="" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group d-flex">
										<div class="input-group-append">
											<span class="input-group-text"
												id="basic-addon2">$</span>
										</div>
										<input type="text" value="" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" value="<?php echo Helper::validate_key_value('other_income_received_spouse_lastbefore_year',$finacial_affairs);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group d-flex ">
										<div class="input-group-append">
											<span class="input-group-text"
												id="basic-addon2">$</span>
										</div>
										<input type="text" value="<?php echo Helper::validate_key_value('other_amount_spouse_lastbefore_year_income',$finacial_affairs);?>" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" value="" class="form-control">
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
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" value="" class="form-control">
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
			</div>
		</div>

		<!-- Part 3 -->
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="part-form-title mb-3">
					<span>Part 3</span>
					<h2 class="font-lg-18">List Certain Payments You Made Before You Filed for
						Bankruptcy</h2>
				</div>
			</div>
		</div>
		<!-- Row 6 -->
		<div class="form-border">
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for="">
						<strong class="d-block">6. Are either Debtor 1’s or Debtor 2’s debts
							primarily consumer debts?</strong>
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox">
					<label>No <strong>Neither Debtor 1 nor Debtor 2 has primarily consumer
							debts.</strong> Consumer debts are defined in 11 U.S.C. § 101(8) as
						“incurred by an individual primarily for a personal, family, or
						household
						purpose.”
						During the 90 days before you filed for bankruptcy, did you pay any
						creditor
						a total of $6,825* or more?</label>
				</div>
				<div class="input-group">
					<input type="checkbox" >
					<label>No. Go to line 7.</label>
				</div>
				<div class="input-group">
					<input type="checkbox" >
					<label>Yes. List below each creditor to whom you paid a total of $6,825* or
						more
						in one or more payments and the
						total amount you paid that creditor. Do not include payments for
						domestic
						support obligations, such as
						child support and alimony. Also, do not include payments to an attorney
						for
						this bankruptcy case.
						* Subject to adjustment on 4/01/22 and every 3 years after that for
						cases
						filed on or after the date of adjustment.</label>
				</div>
				<div class="input-group">
					<input type="checkbox">
					<label>Yes <strong> Debtor 1 or Debtor 2 or both have primarily consumer
							debts.
						</strong> During the 90 days before you filed for bankruptcy, did you
						pay
						any creditor a total of $600 or more?</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('primarily_consumer_debets',$finacial_affairs,0);?>>
					<label>No. Go to line 7.</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('primarily_consumer_debets',$finacial_affairs,1);?>>
					<label>Yes. List below each creditor to whom you paid a total of $600 or
						more
						and the total amount you paid that
						creditor. Do not include payments for domestic support obligations, such
						as
						child support and
						alimony. Also, do not include payments to an attorney for this
						bankruptcy
						case</label>
				</div>
			</div>
			<!-- First Row Heading -->
			<div class="row  mt-3">
				<div class="col-md-4"></div>
				<div class="col-md-2">
					<div class="column-heading">
						<h4>Dates of
							payment</h4>
					</div>
				</div>
				<div class="col-md-2">
					<div class="column-heading">
						<h4>Total amount paid </h4>
					</div>
				</div>
				<div class="col-md-2">
					<div class="column-heading">
						<h4>Amount you still owe </h4>
					</div>
				</div>
				<div class="col-md-2">
					<div class="column-heading">
						<h4>Was this payment for… </h4>
					</div>
				</div>
			</div>
			<?php
			// dump($finacial_affairs['primarily_consumer_debets_data']);
				if(!empty($finacial_affairs['primarily_consumer_debets_data']['creditor_address'])){
					for($i=0;$i<count($finacial_affairs['primarily_consumer_debets_data']['creditor_address']);$i++){
						$finacial_affairst=$finacial_affairs['primarily_consumer_debets_data'];
			?>
			<!-- Second Row Body -->
			<div class="col-md-12 border-bottm-1">
				<div class="row">
					<div class="col-md-4">
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
									<input type="text" value="<?php echo Helper::validate_key_loop_value('creditor_street',$finacial_affairst,$i);?>" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="input-group">
									<label>City</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('creditor_city',$finacial_affairst,$i);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<label>State</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('creditor_state',$finacial_affairst,$i);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-group">
									<label>Zip Code</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('creditor_zip',$finacial_affairst,$i);?>" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 ">
						<div class="input-group mt-3">
							<input type="text" value="" class="form-control">
						</div>
					</div>
					<div class="col-md-2">
						<div class="input-group d-flex mt-3">
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">$</span>
							</div>
							<input type="text" value="<?php echo Helper::validate_key_loop_value('total_amount_paid',$finacial_affairst,$i);?>" class="form-control">
						</div>
					</div>
					<div class="col-md-2">
						<div class="input-group d-flex mt-3">
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">$</span>
							</div>
							<input type="text" value="<?php echo Helper::validate_key_loop_value('amount_still_owed',$finacial_affairst,$i);?>" class="form-control">
						</div>
					</div>

					<div class="col-md-2">
						<div class="mt-3">
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('creditor_payment_for',$finacial_affairst,1,$i);?>>
								<label for="">Mortgage</label>
							</div>
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('creditor_payment_for',$finacial_affairst,2,$i);?>>
								<label for="">Car</label>
							</div>
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('creditor_payment_for',$finacial_affairst,3,$i);?>>
								<label for="">Credit card</label>
							</div>
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('creditor_payment_for',$finacial_affairst,4,$i);?>>
								<label for="">Loan repayment</label>
							</div>
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('creditor_payment_for',$finacial_affairst,5,$i);?>>
								<label for="">Suppliers or vendors</label>
							</div>
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('creditor_payment_for',$finacial_affairst,6,$i);?>>
								<label for="">Other</label>
							</div>
						</div>
					</div>
				</div>
			</div>
				<?php }}?>			
		</div>

		<!-- Row 7	 -->
		<div class="form-border mb-3">
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for="">
						<strong class="d-block">7. Within 1 year before you filed for
							bankruptcy,
							did you make a payment on a debt you owed anyone who was an
							insider?</strong>Insiders include your relatives; any general
						partners;
						relatives of any general partners; partnerships of which you are a
						general
						partner;
						corporations of which you are an officer, director, person in control,
						or
						owner of 20% or more of their voting securities; and any managing
						agent, including one for a business you operate as a sole proprietor. 11
						U.S.C. § 101. Include payments for domestic support obligations,
						such as child support and alimony
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('payment_past_one_year',$finacial_affairs,0);?>>
					<label>No</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('payment_past_one_year',$finacial_affairs,1);?>>
					<label>Yes. List all payments to an insider</label>
				</div>
			</div>
			<!-- First Row Heading -->
			<div class="row  mt-3">
				<div class="col-md-4"></div>
				<div class="col-md-2">
					<div class="column-heading">
						<h4>Dates of
							payment</h4>
					</div>
				</div>
				<div class="col-md-2">
					<div class="column-heading">
						<h4>Total amount paid </h4>
					</div>
				</div>
				<div class="col-md-2">
					<div class="column-heading">
						<h4>Amount you still owe </h4>
					</div>
				</div>
				<div class="col-md-2">
					<div class="column-heading">
						<h4>Reason for this payment </h4>
					</div>
				</div>
			</div>

			<!-- Second Row Body -->
			<div class="col-md-12 border-bottm-1">
				<div class="row">
					<div class="col-md-4">
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
									<input type="text" value="<?php echo Helper::validate_key_loop_value('creditor_street_past_one_year',$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="input-group">
									<label>City</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value("creditor_city_past_one_year",$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<label>State</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value("creditor_state_past_one_year",$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-group">
									<label>Zip Code</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value("creditor_zip_past_one_year",$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 ">
						<div class="input-group mt-3">
							<input type="text" value="<?php echo Helper::validate_key_loop_value("past_one_year_payment_dates",$finacial_affairs,$i);?>" class="form-control">
						</div>
					</div>
					<div class="col-md-2">
						<div class="input-group d-flex mt-3">
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">$</span>
							</div>
							<input type="text" value="<?php echo Helper::validate_key_loop_value("past_one_year_total_amount_paid",$finacial_affairs,$i);?>" class="form-control">
						</div>
					</div>
					<div class="col-md-2">
						<div class="input-group d-flex mt-3">
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">$</span>
							</div>
							<input type="text" value="<?php echo Helper::validate_key_loop_value("past_one_year_amount_still_owed",$finacial_affairs,$i);?>" class="form-control">
						</div>
					</div>

					<div class="col-md-2">
						<div class="mt-3">
							<textarea name="" id="" cols="20" rows="7"
								class="form-control"><?php echo Helper::validate_key_loop_value("past_one_year_payment_reason",$finacial_affairs,$i);?></textarea>
						</div>
					</div>
				</div>
			</div>
			<!-- Third Row Body -->
			
		</div>

		<!-- Part 4 -->
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="part-form-title mb-3">
					<span>Part 4</span>
					<h2 class="font-lg-18">Identify Legal Actions, Repossessions, and
						Foreclosures
					</h2>
				</div>
			</div>
		</div>
		<!-- Row 9	 -->
		<div class="form-border">
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for="">
						<strong class="d-block">9. Within 1 year before you filed for
							bankruptcy,
							were you a party in any lawsuit, court action, or administrative
							proceeding?</strong>List all such matters, including personal injury
						cases, small claims actions, divorces, collection suits, paternity
						actions,
						support or custody modifications,
						and contract disputes.
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('list_lawsuits',$finacial_affairs,0);?>>
					<label>No</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('list_lawsuits',$finacial_affairs,1);?>>
					<label>Yes. List all payments to an insider</label>
				</div>
			</div>
			<!-- First Row Heading -->
			<div class="row  mt-3">
				<div class="col-md-3"></div>
				<div class="col-md-3">
					<div class="column-heading">
						<h4>Nature of the case</h4>
					</div>
				</div>
				<div class="col-md-3">
					<div class="column-heading">
						<h4>Total amount paid </h4>
					</div>
				</div>
				<div class="col-md-3">
					<div class="column-heading">
						<h4>Status of the case </h4>
					</div>
				</div>
			</div>

			<!-- Second Row Body -->
			<div class="col-md-12 border-bottm-1">
				<div class="row">
					<div class="col-md-3">
						<div class="input-group">
							<label>Case title</label>
							<input type="text" value="<?php echo Helper::validate_key_loop_value('case_title',$finacial_affairs,$i);?>" class="form-control">
						</div>
						<div class="input-group">
							<label>Case Number</label>
							<input type="number" value="<?php echo Helper::validate_key_loop_value('case_number',$finacial_affairs,$i);?>" class="form-control">
						</div>
					</div>
					<div class="col-md-3">
						<div class="input-group">
							<textarea class="form-control" cols="30" rows="7"><?php echo Helper::validate_key_loop_value('case_nature',$finacial_affairs,$i);?></textarea>
						</div>
					</div>
					<div class="col-md-3">
						<div class="row">
							<div class="col-md-12">
								<div class="input-group">
									<label>Court Name</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('agency_location',$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<label>Number</label>
									<input type="number" value="" class="form-control">
								</div>
							</div>
							<div class="col-md-8">
								<div class="input-group">
									<label>Street</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('agency_street',$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="input-group">
									<label>City</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('agency_city',$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<label>State</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('agency_state',$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-group">
									<label>Zip Code</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('agency_zip',$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="col-md-12">
							<div class="input-group">
								<label for="">Pending</label>
								<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('list_lawsuits_data',$finacial_affairs,1,'disposition');?>>
							</div>
							<div class="input-group">
								<label for="">On appeal</label>
								<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('list_lawsuits_data',$finacial_affairs,2,'disposition');?>>
							</div>
							<div class="input-group">
								<label for="">Concluded</label>
								<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('list_lawsuits_data',$finacial_affairs,3,'disposition');?>>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Third Row Body -->
			<div class="col-md-12 mt-3">
				<div class="row">
					<div class="col-md-3">
						<div class="input-group">
							<label>Case title</label>
							<input type="text" value="" class="form-control">
						</div>
						<div class="input-group">
							<label>Case Number</label>
							<input type="number" value="" class="form-control">
						</div>
					</div>
					<div class="col-md-3">
						<div class="input-group">
							<textarea class="form-control" cols="30" rows="7"></textarea>
						</div>
					</div>
					<div class="col-md-3">
						<div class="row">
							<div class="col-md-12">
								<div class="input-group">
									<label>Court Name</label>
									<input type="text" value="" class="form-control">
								</div>
							</div>
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
					<div class="col-md-3">
						<div class="col-md-12">
							<div class="input-group">
								<label for="">Pending</label>
								<input type="checkbox">
							</div>
							<div class="input-group">
								<label for="">On appeal</label>
								<input type="checkbox">
							</div>
							<div class="input-group">
								<label for="">Concluded</label>
								<input type="checkbox">
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- Row 10	 -->
		<div class="form-border mb-3">
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for="">
						<strong class="d-block">10. . Within 1 year before you filed for
							bankruptcy,
							was any of your property repossessed, foreclosed, garnished,
							attached,
							seized, or levied?</strong>Check all that apply and fill in the
						details
						below.
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('property_repossessed',$finacial_affairs,0);?>>
					<label>No. Go to line 11</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('property_repossessed',$finacial_affairs,1);?>>
					<label>Yes. Fill in the information below</label>
				</div>
			</div>
			<!-- First Row Heading -->
			<div class="row mt-3">
				<div class="col-md-3"></div>
				<div class="col-md-4">
					<div class="column-heading">
						<h4>Describe the property</h4>
					</div>
				</div>
				<div class="col-md-2">
					<div class="column-heading">
						<h4>Date </h4>
					</div>
				</div>
				<div class="col-md-3">
					<div class="column-heading">
						<h4>Value of the property </h4>
					</div>
				</div>
			</div>

			<!-- Second Row Body -->
			<div class="col-md-12 border-bottm-1">
				<?php
					if(!empty($finacial_affairs['property_repossessed_data']['creditor_address'])){
						for($i=0;$i<count($finacial_affairs['property_repossessed_data']['creditor_address']);$i++){
							
							$finacial_affairsp=$finacial_affairs['property_repossessed_data']
				?>
				<div class="row">
					<div class="col-md-3">
						<div class="row">
							<div class="col-md-12">
								<div class="input-group">
									<label>Creditor’s Name</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('creditor_address',$finacial_affairsp,$i);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<label>Number</label>
									<input type="number" value="" class="form-control">
								</div>
							</div>
							<div class="col-md-8">
								<div class="input-group">
									<label>Street</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('creditor_street',$finacial_affairsp,$i);?>" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="input-group">
									<label>City</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('creditor_city',$finacial_affairsp,$i);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<label>State</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('creditor_state',$finacial_affairsp,$i);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-group">
									<label>Zip Code</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('creditor_zip',$finacial_affairsp,$i);?>" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="input-group">
							<textarea class="form-control" cols="30" rows="7"><?php echo Helper::validate_key_loop_value('creditor_Property',$finacial_affairsp,$i);?></textarea>
						</div>
						<div class="input-group column-heading">
							<label for="">Explain what happened </label>
						</div>
						<div class="input-group">
							<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('what_happened',$finacial_affairsp,1,$i);?>>
							<label for="">Property was repossessed.</label>
						</div>
						<div class="input-group">
							<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('what_happened',$finacial_affairsp,2,$i);?>>
							<label for="">Property was foreclosed.</label>
						</div>
						<div class="input-group">
							<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('what_happened',$finacial_affairsp,3,$i);?>>
							<label for="">Property was garnished.</label>
						</div>
						<div class="input-group">
							<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('what_happened',$finacial_affairsp,4,$i);?>>
							<label for="">Property was attached, seized, or levied.</label>
						</div>
					</div>
					<div class="col-md-2">
						<div class="input-group">
							<input type="text" value="<?php echo Helper::validate_key_loop_value('property_repossessed_date',$finacial_affairsp,$i);?>" class="form-control">
						</div>
					</div>
					<div class="col-md-3">
						<div class="input-group d-flex">
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">$</span>
							</div>
							<input type="text" value="" class="form-control">
						</div>
					</div>
				</div>
				<?php }}?>
			</div>
			<!-- Third Row Body -->
			

			<!-- Row 11	 -->

			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for="">
						<strong class="d-block">11. Within 90 days before you filed for
							bankruptcy,
							did any creditor, including a bank or financial institution, set off
							any
							amounts from your
							accounts or refuse to make a payment because you owed a
							debt?</strong>
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('setoffs_creditor',$finacial_affairs,0);?>>
					<label>No.</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('setoffs_creditor',$finacial_affairs,1);?>>
					<label>Yes. Fill in the details</label>
				</div>
			</div>
			<!-- First Row Heading -->
			<div class="row mt-3">
				<div class="col-md-3"></div>
				<div class="col-md-4">
					<div class="column-heading">
						<h4>Describe the action the creditor took</h4>
					</div>
				</div>
				<div class="col-md-2">
					<div class="column-heading">
						<h4>Date action
							was taken </h4>
					</div>
				</div>
				<div class="col-md-3">
					<div class="column-heading">
						<h4>Amount
						</h4>
					</div>
				</div>
			</div>

			<!-- Second Row Body -->
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<div class="row">
							<div class="col-md-12">
								<div class="input-group">
									<label>Creditor’s Name</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('creditors_address',$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<label>Number</label>
									<input type="number" value="" class="form-control">
								</div>
							</div>
							<div class="col-md-8">
								<div class="input-group">
									<label>Street</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value("creditor_street",$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="input-group">
									<label>City</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value("creditor_city",$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<label>State</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value("creditor_state",$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-group">
									<label>Zip Code</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value("creditor_zip",$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="input-group">
							<textarea class="form-control" cols="30" rows="7"><?php echo Helper::validate_key_loop_value('creditors_action',$finacial_affairs,$i);?></textarea>
						</div>
						<div class="input-group column-heading">
							<label for="">Explain what happened </label>
						</div>
						<div class="input-group">
							<label for="">Last 4 digits of account number: XXXX</label>
							<input type="text" value="<?php echo Helper::validate_key_loop_value('account_number',$finacial_affairs,$i);?>" class="form-control">
						</div>
					</div>
					<div class="col-md-2">
						<div class="input-group">
							<input type="text" value="<?php echo Helper::validate_key_loop_value('date_action',$finacial_affairs,$i);?>" class="form-control">
						</div>
					</div>
					<div class="col-md-3">
						<div class="input-group d-flex">
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">$</span>
							</div>
							<input type="text" value="<?php echo Helper::validate_key_loop_value('amount_data',$finacial_affairs,$i);?>" class="form-control">
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for="">
						<strong class="d-block">12. Within 1 year before you filed for
							bankruptcy,
							was any of your property in the possession of an assignee for the
							benefit of
							creditors, a court-appointed receiver, a custodian, or another
							official?</strong>
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php //echo Helper::validate_key_toggle('court_appointed',$finacial_affairs,0);?>>
					<label>No.</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php //echo Helper::validate_key_toggle('court_appointed',$finacial_affairs,1);?>>
					<label>Yes.</label>
				</div>
			</div>
		</div>

		<!-- Part 5 -->
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="part-form-title mb-3">
					<span>Part 5</span>
					<h2 class="font-lg-18">List Certain Gifts and Contributions
					</h2>
				</div>
			</div>
		</div>
		<div class="form-border mb-3">
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for="">
						<strong class="d-block">13. Within 2 years before you filed for
							bankruptcy,
							did you give any gifts with a total value of more than $600 per
							person?</strong>
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('list_any_gifts',$finacial_affairs,0);?>>
					<label>No</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('list_any_gifts',$finacial_affairs,1);?>>
					<label>Yes. Fill in the details for each gift</label>
				</div>
			</div>
			<!-- Row 13	 -->
			<!-- First Row Heading -->
			<div class="row  mt-3">
				<div class="col-md-3">
					<div class="column-heading">
						<h4>Gifts with a total value of more than $600
							per person</h4>
					</div>
				</div>

				<div class="col-md-5">
					<div class="column-heading">
						<h4>Describe the gifts</h4>
					</div>
				</div>
				<div class="col-md-2">
					<div class="column-heading">
						<h4>Dates you gave
							the gifts </h4>
					</div>
				</div>
				<div class="col-md-2">
					<div class="column-heading">
						<h4>Value </h4>
					</div>
				</div>
			</div>
			<!-- Second Row Body -->
			<div class="col-md-12 border-bottm-1">
				<div class="row">
					<div class="col-md-3">
						<div class="row">
							<div class="col-md-12">
								<div class="input-group">
									<label>Person to Whom You Gave the Gift</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('recipient_address',$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<label>Number</label>
									<input type="number" value="" class="form-control">
								</div>
							</div>
							<div class="col-md-8">
								<div class="input-group">
									<label>Street</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('creditor_street',$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="input-group">
									<label>City</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('creditor_city',$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<label>State</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('creditor_state',$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-group">
									<label>Zip Code</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('creditor_zip',$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-group">
									<label>Person’s relationship to you</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('relationship',$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="input-group">
							<textarea class="form-control" cols="30" rows="7"><?php echo Helper::validate_key_loop_value('gifts',$finacial_affairs,$i);?></textarea>
						</div>
					</div>
					<div class="col-md-2">
						<div class="row">
							<div class="col-md-12">
								<div class="input-group">
									<input type="text" value="<?php echo Helper::validate_key_loop_value('gifts_date_from',$finacial_affairs,$i);?>" class="form-control">
								</div>
								<div class="input-group">
									<input type="text" value="<?php echo Helper::validate_key_loop_value('gifts_date_to',$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="input-group d-flex">
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">$</span>
							</div>
							<input type="text" value="<?php echo Helper::validate_key_loop_value('gifts_value',$finacial_affairs,$i);?>" class="form-control">
						</div>
						<div class="input-group d-flex">
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">$</span>
							</div>
							<input type="text" value="" class="form-control">
						</div>
					</div>
				</div>
			</div>
			<!-- Third Row Body -->
			<div class="col-md-12 mt-3">
				<div class="row">
					<div class="col-md-3">
						<div class="row">
							<div class="col-md-12">
								<div class="input-group">
									<label>Person to Whom You Gave the Gift</label>
									<input type="text" value="" class="form-control">
								</div>
							</div>
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
							<div class="col-md-12">
								<div class="input-group">
									<label>Person’s relationship to you</label>
									<input type="text" value="" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="input-group">
							<textarea class="form-control" cols="30" rows="7"></textarea>
						</div>
					</div>
					<div class="col-md-2">
						<div class="row">
							<div class="col-md-12">
								<div class="input-group">
									<input type="text" value="" class="form-control">
								</div>
								<div class="input-group">
									<input type="text" value="" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="input-group d-flex">
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">$</span>
							</div>
							<input type="text" value="" class="form-control">
						</div>
						<div class="input-group d-flex">
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">$</span>
							</div>
							<input type="text" value="" class="form-control">
						</div>
					</div>
				</div>
			</div>

			<!-- Row 14	 -->

			<!-- First Row Heading -->
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for="">
						<strong class="d-block">14. Within 2 years before you filed for
							bankruptcy,
							did you give any gifts or contributions with a total value of more
							than
							$600 to any charity?
						</strong>
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('gifts_charity',$finacial_affairs,0);?>>
					<label>No</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('gifts_charity',$finacial_affairs,1);?>>
					<label>Yes. Fill in the details for each gift or contribution.</label>
				</div>
			</div>
			<div class="row  mt-3">
				<div class="col-md-3">
					<div class="column-heading">
						<h4>Gifts with a total value of more than $600
							per person</h4>
					</div>
				</div>

				<div class="col-md-5">
					<div class="column-heading">
						<h4>Describe the gifts</h4>
					</div>
				</div>
				<div class="col-md-2">
					<div class="column-heading">
						<h4>Dates you gave
							the gifts </h4>
					</div>
				</div>
				<div class="col-md-2">
					<div class="column-heading">
						<h4>Value </h4>
					</div>
				</div>
			</div>

			<!-- Second Row Body -->
			<div class="col-md-12 border-bottm-1">
				<div class="row">
					<div class="col-md-3">
						<div class="row">
							<div class="col-md-12">
								<div class="input-group">
									<label>Person to Whom You Gave the Gift</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('charity_address',$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group">
									<label>Number</label>
									<input type="number" value="" class="form-control">
								</div>
							</div>
							<div class="col-md-8">
								<div class="input-group">
									<label>Street</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('charity_street',$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="input-group">
									<label>City</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('charity_city',$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<label>State</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('charity_state',$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-group">
									<label>Zip Code</label>
									<input type="text" value="<?php echo Helper::validate_key_loop_value('charity_zip',$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="input-group">
							<textarea class="form-control" cols="30" rows="7"><?php echo Helper::validate_key_loop_value('charity_contribution',$finacial_affairs,$i);?></textarea>
						</div>
					</div>
					<div class="col-md-2">
						<div class="row">
							<div class="col-md-12">
								<div class="input-group">
									<input type="text" value="<?php echo Helper::validate_key_loop_value('charity_contribution_date',$finacial_affairs,$i);?>" class="form-control">
								</div>
								<div class="input-group">
									<input type="text" value="" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="input-group d-flex">
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">$</span>
							</div>
							<input type="text" value="<?php echo Helper::validate_key_loop_value('charity_contribution_value',$finacial_affairs,$i);?>" class="form-control">
						</div>
						<div class="input-group d-flex">
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">$</span>
							</div>
							<input type="text" value="" class="form-control">
						</div>
					</div>
				</div>
			</div>
			<!-- Third Row Body -->
			<div class="col-md-12 mt-3">
				<div class="row">
					<div class="col-md-3">
						<div class="row">
							<div class="col-md-12">
								<div class="input-group">
									<label>Person to Whom You Gave the Gift</label>
									<input type="text" value="" class="form-control">
								</div>
							</div>
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
							<div class="col-md-12">
								<div class="input-group">
									<label>Person’s relationship to you</label>
									<input type="text" value="" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="input-group">
							<textarea class="form-control" cols="30" rows="7"></textarea>
						</div>
					</div>
					<div class="col-md-2">
						<div class="row">
							<div class="col-md-12">
								<div class="input-group">
									<input type="text" value="" class="form-control">
								</div>
								<div class="input-group">
									<input type="text" value="" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="input-group d-flex">
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">$</span>
							</div>
							<input type="text" value="" class="form-control">
						</div>
						<div class="input-group d-flex">
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">$</span>
							</div>
							<input type="text" value="" class="form-control">
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Part 6 -->
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="part-form-title mb-3">
					<span>Part 6</span>
					<h2 class="font-lg-18">List Certain Losses
					</h2>
				</div>
			</div>
		</div>
		<div class="form-border mb-3">
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for="">
						<strong class="d-block">15. Within 1 year before you filed for
							bankruptcy or
							since you filed for bankruptcy, did you lose anything because of
							theft,
							fire, other
							disaster, or gambling?
						</strong>
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php //echo Helper::validate_key_toggle('losses_from_fire',$finacial_affairs,0);?>>
					<label>No</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php //echo Helper::validate_key_toggle('losses_from_fire',$finacial_affairs,1);?>>
					<label>Yes. Fill in the details.
					</label>
				</div>
			</div>
			<div class="col-md-12 mt-3">
				<!-- First Row Heading -->
				<div class="row mt-3">
					<div class="col-md-3">
						<div class="column-heading">
							<h4>Describe the property you lost and
								how the loss occurred</h4>
						</div>
					</div>

					<div class="col-md-5">
						<div class="column-heading">
							<h4>Describe any insurance coverage for the loss</h4>
							<p>Include the amount that insurance has paid. List pending
								insurance
								claims on line 33 of Schedule A/B: Property.
							</p>
						</div>
					</div>
					<div class="col-md-2">
						<div class="column-heading">
							<h4>Date of your
								loss </h4>
						</div>
					</div>
					<div class="col-md-2">
						<div class="column-heading">
							<h4>Value of property
								lost </h4>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="input-group">
							<input type="text" value="<?php echo Helper::validate_key_loop_value('loss_occurred',$finacial_affairs,$i);?>" class="form-control">
						</div>
					</div>
					<div class="col-md-5">
						<div class="input-group">
							<input type="text" value="<?php echo Helper::validate_key_loop_value('insurance_coverage',$finacial_affairs,$i);?>" class="form-control">
						</div>
					</div>
					<div class="col-md-2">
						<div class="row">
							<div class="col-md-12">
								<div class="input-group">
									<input type="text" value="<?php echo Helper::validate_key_loop_value('loss_date',$finacial_affairs,$i);?>" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="input-group d-flex">
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">$</span>
							</div>
							<input type="text" value="<?php echo Helper::validate_key_loop_value('loss_property_value',$finacial_affairs,$i);?>" class="form-control">
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Part 7 -->
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="part-form-title mb-3">
					<span>Part 7</span>
					<h2 class="font-lg-18">List Certain Payments or Transfers
					</h2>
				</div>
			</div>
		</div>
		<div class="form-border mb-3">
			<!-- 16 -->
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for="">
						<strong class="d-block">16. Within 1 year before you filed for
							bankruptcy,
							did you or anyone else acting on your behalf pay or transfer any
							property to anyone
							you consulted about seeking bankruptcy or preparing a bankruptcy
							petition?
						</strong>Include any attorneys, bankruptcy petition preparers, or credit
						counseling agencies for services required in your bankruptcy.
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('property_transferred',$finacial_affairs,0);?>>
					<label>No</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('property_transferred',$finacial_affairs,1);?>>
					<label>Yes. Fill in the details.
					</label>
				</div>
			</div>
			<div class="col-md-12 mt-3">
				<!-- First Row Heading -->
				<div class="row mt-3">
					<div class="col-md-3"></div>
					<div class="col-md-5">
						<div class="column-heading">
							<h4>Description and value of any property transferred </h4>
						</div>
					</div>
					<div class="col-md-2">
						<div class="column-heading">
							<h4>Date payment or
								transfer was
								made</h4>
						</div>
					</div>
					<div class="col-md-2">
						<div class="column-heading">
							<h4>Amount of payment </h4>
						</div>
					</div>
				</div>
				<!-- body -->
				<div class="col-md-12 border-bottm-1">
					<div class="row">
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Person Who Was Paid </label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value('person_paid',$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="input-group">
										<label>Number</label>
										<input type="number" value="" class="form-control">
									</div>
								</div>
								<div class="col-md-8">
									<div class="input-group">
										<label>Street</label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value("person_paid_street",$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<label>City</label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value("person_paid_city",$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group">
										<label>State</label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value("person_paid_state",$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="input-group">
										<label>Zip Code</label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value("person_paid_zip",$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="input-group">
										<label> Email or website address</label>
										<input type="text" value="" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="input-group">
										<label>Person Who Made the Payment, if Not You</label>
										<input type="text" value="" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="input-group">
								<textarea class="form-control" cols="30" rows="9"><?php echo Helper::validate_key_loop_value('property_transferred_value',$finacial_affairs,$i);?></textarea>
							</div>
						</div>
						<div class="col-md-2">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<input type="text" value="<?php echo Helper::validate_key_loop_value('property_transferred_date',$finacial_affairs,$i);?>" class="form-control">
									</div>
									<div class="input-group">
										<input type="text" value="" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="input-group d-flex">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo Helper::validate_key_loop_value('property_transferred_payment',$finacial_affairs,$i);?>" class="form-control">
							</div>
							<div class="input-group d-flex">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="" class="form-control">
							</div>
						</div>
					</div>
				</div>
				<!-- Body 2 -->
				<div class="col-md-12 ">
					<div class="row">
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Person Who Was Paid </label>
										<input type="text" value="" class="form-control">
									</div>
								</div>
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
								<div class="col-md-12">
									<div class="input-group">
										<label> Email or website address</label>
										<input type="text" value="" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="input-group">
										<label>Person Who Made the Payment, if Not You</label>
										<input type="text" value="" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="input-group">
								<textarea class="form-control" cols="30" rows="9"></textarea>
							</div>
						</div>
						<div class="col-md-2">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<input type="text" value="" class="form-control">
									</div>
									<div class="input-group">
										<input type="text" value="" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="input-group d-flex">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="" class="form-control">
							</div>
							<div class="input-group d-flex">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- 17 -->
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for="">
						<strong class="d-block">17. Within 1 year before you filed for
							bankruptcy,
							did you or anyone else acting on your behalf pay or transfer any
							property to anyone who
							promised to help you deal with your creditors or to make payments to
							your creditors?
						</strong>Do not include any payment or transfer that you listed on line
						16.
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('property_transferred_creditors',$finacial_affairs,0);?>>
					<label>No</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('property_transferred_creditors',$finacial_affairs,1);?>>
					<label>Yes. Fill in the details.
					</label>
				</div>
			</div>
			<div class="col-md-12 mt-3">
				<!-- First Row Heading -->
				<div class="row mt-3">
					<div class="col-md-3"></div>
					<div class="col-md-5">
						<div class="column-heading">
							<h4>Description and value of any property transferred </h4>
						</div>
					</div>
					<div class="col-md-2">
						<div class="column-heading">
							<h4>Date payment or
								transfer was
								made</h4>
						</div>
					</div>
					<div class="col-md-2">
						<div class="column-heading">
							<h4>Amount of payment </h4>
						</div>
					</div>
				</div>
				<!-- body -->
				<div class="col-md-12 border-bottm-1">
					<div class="row">
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Person Who Was Paid </label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value('person_paid_address',$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="input-group">
										<label>Number</label>
										<input type="number" value="" class="form-control">
									</div>
								</div>
								<div class="col-md-8">
									<div class="input-group">
										<label>Street</label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value('person_paid_street',$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<label>City</label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value('person_paid_city',$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group">
										<label>State</label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value('person_paid_state',$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="input-group">
										<label>Zip Code</label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value('person_paid_zip',$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="input-group">
								<textarea class="form-control" cols="30" rows="9"><?php echo Helper::validate_key_loop_value('property_transfer_value',$finacial_affairs,$i);?></textarea>
							</div>
						</div>
						<div class="col-md-2">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<input type="text" value="<?php echo Helper::validate_key_loop_value('property_transfer_date',$finacial_affairs,$i);?>" class="form-control">
									</div>
									<div class="input-group">
										<input type="text" value="" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="input-group d-flex">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo Helper::validate_key_loop_value('property_transfer_amount_payment',$finacial_affairs,$i);?>" class="form-control">
							</div>
							<div class="input-group d-flex">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="" class="form-control">
							</div>
						</div>
					</div>
				</div>
				<!-- Body 2 -->
				<div class="col-md-12 ">
					<div class="row">
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Person Who Was Paid </label>
										<input type="text" value="" class="form-control">
									</div>
								</div>
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
								<div class="col-md-12">
									<div class="input-group">
										<label> Email or website address</label>
										<input type="text" value="" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="input-group">
										<label>Person Who Made the Payment, if Not You</label>
										<input type="text" value="" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="input-group">
								<textarea class="form-control" cols="30" rows="9"></textarea>
							</div>
						</div>
						<div class="col-md-2">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<input type="text" value="" class="form-control">
									</div>
									<div class="input-group">
										<input type="text" value="" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="input-group d-flex">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="" class="form-control">
							</div>
							<div class="input-group d-flex">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- 18 -->
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for="">
						<strong class="d-block">18. Within 2 years before you filed for
							bankruptcy,
							did you sell, trade, or otherwise transfer any property to anyone,
							other
							than property
							transferred in the ordinary course of your business or financial
							affairs?
						</strong>Include both outright transfers and transfers made as security
						(such as the granting of a security interest or mortgage on your
						property).
						Do not include gifts and transfers that you have already listed on this
						statement.
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('Property_all',$finacial_affairs,0);?>>
					<label>No</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('Property_all',$finacial_affairs,1);?>>
					<label>Yes. Fill in the details
					</label>
				</div>
			</div>
			<div class="col-md-12 mt-3">
				<!-- First Row Heading -->
				<div class="row mt-3">
					<div class="col-md-3"></div>
					<div class="col-md-3">
						<div class="column-heading">
							<h4>Description and value of any property transferred </h4>
						</div>
					</div>
					<div class="col-md-4">
						<div class="column-heading">
							<h4>Date payment or
								transfer was
								made</h4>
						</div>
					</div>
					<div class="col-md-2">
						<div class="column-heading">
							<h4>Date transfer
								was made </h4>
						</div>
					</div>
				</div>
				<!-- body -->
				<div class="col-md-12 border-bottm-1">
					<div class="row">
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Person Who Received Transfer </label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value('person_address',$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
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
						<div class="col-md-3">
							<div class="input-group">
								<textarea class="form-control" cols="30" rows="9"><?php echo Helper::validate_key_loop_value('property_transfer_value',$finacial_affairs,$i);?></textarea>
							</div>
						</div>
						<div class="col-md-4">
							<div class="input-group">
								<textarea class="form-control" cols="30" rows="9"><?php echo Helper::validate_key_loop_value('property_transfer_any_value',$finacial_affairs,$i);?></textarea>
							</div>
						</div>
						<div class="col-md-2">
							<div class="input-group">
								<input type="text" value="<?php echo Helper::validate_key_loop_value('property_transfer_date',$finacial_affairs,$i);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
				<!-- Body 2 -->
				<div class="col-md-12 mt-3">
					<div class="row">
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Person Who Received Transfer </label>
										<input type="text" value="" class="form-control">
									</div>
								</div>
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
						<div class="col-md-3">
							<div class="input-group">
								<textarea class="form-control" cols="30" rows="9"></textarea>
							</div>
						</div>
						<div class="col-md-4">
							<div class="input-group">
								<textarea class="form-control" cols="30" rows="9"></textarea>
							</div>
						</div>
						<div class="col-md-2">
							<div class="input-group">
								<input type="text" value="" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- 19 -->
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for="">
						<strong class="d-block">19. Within 10 years before you filed for
							bankruptcy,
							did you transfer any property to a self-settled trust or similar
							device
							of which you
							are a beneficiary?
						</strong> (These are often called asset-protection devices.)
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('all_property_transfer_10_year',$finacial_affairs,0);?>>
					<label>No</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('all_property_transfer_10_year',$finacial_affairs,1);?>>
					<label>Yes. Fill in the details
					</label>
				</div>
			</div>
			<div class="col-md-12 mt-3">
				<!-- First Row Heading -->
				<div class="row mt-3">
					<div class="col-md-3"></div>
					<div class="col-md-7">
						<div class="column-heading">
							<h4>Description and value of the property transferred </h4>
						</div>
					</div>
					<div class="col-md-2">
						<div class="column-heading">
							<h4>Date transfer
								was made </h4>
						</div>
					</div>
				</div>
				<!-- body -->
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-3">
							<div class="input-group">
								<label>Name of trust </label>
								<input type="text" value="<?php echo Helper::validate_key_loop_value('trust_name',$finacial_affairs,$i);?>" class="form-control">
							</div>
						</div>
						<div class="col-md-7">
							<div class="input-group">
								<textarea class="form-control" cols="30" rows="9"><?php echo Helper::validate_key_loop_value('10year_property_transfer',$finacial_affairs,$i);?></textarea>
							</div>
						</div>
						<div class="col-md-2">
							<div class="input-group">
								<input type="text" value="<?php echo Helper::validate_key_loop_value('10year_property_transfer_date',$finacial_affairs,$i);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>

		<!-- Part 7 -->
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="part-form-title mb-3">
					<span>Part 8</span>
					<h2 class="font-lg-18">: List Certain Financial Accounts, Instruments, Safe
						Deposit Boxes, and Storage Units
					</h2>
				</div>
			</div>
		</div>
		<div class="form-border mb-3">
			<!-- 20 -->
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for="">
						20. Within 1 year before you filed for bankruptcy, were any financial
						accounts or instruments held in your name, or for your benefit,
						closed, sold, moved, or transferred?
						Include checking, savings, money market, or other financial accounts;
						certificates of deposit; shares in banks, credit unions,
						brokerage houses, pension funds, cooperatives, associations, and other
						financial institutions.
						>Include any attorneys, bankruptcy petition preparers, or credit
						counseling agencies for services required in your bankruptcy.
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('list_all_financial_accounts',$finacial_affairs,0);?>>
					<label>No</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('list_all_financial_accounts',$finacial_affairs,1);?>>
					<label>Yes. Fill in the details.
					</label>
				</div>
			</div>

			<div class="col-md-12 mt-3">
				<!-- First Row Heading -->
				<div class="row mt-3">
					<div class="col-md-3"></div>
					<div class="col-md-2">
						<div class="column-heading">
							<h4>Last 4 digits of account number </h4>
						</div>
					</div>
					<div class="col-md-3">
						<div class="column-heading">
							<h4>Type of account or
								instrument</h4>
						</div>
					</div>
					<div class="col-md-2">
						<div class="column-heading">
							<h4>Date account was
								closed, sold, moved,
								or transferred </h4>
						</div>
					</div>
					<div class="col-md-2">
						<div class="column-heading">
							<h4>Date account was
								closed, sold, moved,
								or transferred </h4>
						</div>
					</div>
				</div>
				<!-- body -->
				<?php
					if(!empty($finacial_affairs['list_all_financial_accounts_data']['institution_name'])){
						for($i=0;$i<count($finacial_affairs['list_all_financial_accounts_data']['institution_name']);$i++){
							$finacial_affairs_list_all=$finacial_affairs['list_all_financial_accounts_data'];
				?>
				<div class="col-md-12 border-bottm-1">
					<div class="row">
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Name of Financial Institution </label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value('institution_name',$finacial_affairs_list_all,$i);?>" class="form-control">
									</div>
								</div>
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
						<div class="col-md-2">
							<div class="input-group">
								<label for="">XXXX</label>
								<input type="text" value="<?php echo Helper::validate_key_loop_value('account_number',$finacial_affairs_list_all,$i);?>" class="form-control">
							</div>
						</div>
						<div class="col-md-3">
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('type_of_account',$finacial_affairs_list_all,1,$i);?>>
								<label for="">Checking</label>
							</div>
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('type_of_account',$finacial_affairs_list_all,2,$i);?>>
								<label for="">Savings</label>
							</div>
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('type_of_account',$finacial_affairs_list_all,3,$i);?>>
								<label for="">Money market</label>
							</div>
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('type_of_account',$finacial_affairs_list_all,4,$i);?>>
								<label for="">Brokerage</label>
							</div>
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('type_of_account',$finacial_affairs_list_all,5,$i);?>>
								<label for="">Other</label>
							</div>
						</div>
						<div class="col-md-2">
							<div class="input-group">
								<input type="text" value="" class="form-control">
							</div>
						</div>
						<div class="col-md-2">
							<div class="input-group d-flex">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="" class="form-control">
							</div>
						</div>
					</div>
				</div>
				<?php }}?>
				<!-- Body 2 -->
				<div class="col-md-12 mt-3">
					<div class="row">
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Name of Financial Institution </label>
										<input type="text" value="" class="form-control">
									</div>
								</div>
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
						<div class="col-md-2">
							<div class="input-group">
								<label for="">XXXX</label>
								<input type="text" value="" class="form-control">
							</div>
						</div>
						<div class="col-md-3">
							<div class="input-group">
								<input type="checkbox">
								<label for="">Checking</label>
							</div>
							<div class="input-group">
								<input type="checkbox">
								<label for="">Savings</label>
							</div>
							<div class="input-group">
								<input type="checkbox">
								<label for="">Money market</label>
							</div>
							<div class="input-group">
								<input type="checkbox">
								<label for="">Brokerage</label>
							</div>
							<div class="input-group">
								<input type="checkbox">
								<label for="">Other</label>
							</div>
						</div>
						<div class="col-md-2">
							<div class="input-group">
								<input type="text" value="" class="form-control">
							</div>
						</div>
						<div class="col-md-2">
							<div class="input-group d-flex">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- 21 -->
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for=""><strong class="d-block">
							21. Do you now have, or did you have within 1 year before you filed
							for
							bankruptcy, any safe deposit box or other depository for
							securities, cash, or other valuables?</strong>
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('list_safe_deposit',$finacial_affairs,0);?>>
					<label>No</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('list_safe_deposit',$finacial_affairs,1);?>>
					<label>Yes. Fill in the details.
					</label>
				</div>
			</div>

			<div class="col-md-12 mt-3">
				<!-- First Row Heading -->
				<div class="row mt-3">
					<div class="col-md-3"></div>
					<div class="col-md-3">
						<div class="column-heading">
							<h4>Who else had access to it? </h4>
						</div>
					</div>
					<div class="col-md-4">
						<div class="column-heading">
							<h4>Describe the contents</h4>
						</div>
					</div>
					<div class="col-md-2">
						<div class="column-heading">
							<h4>Do you still
								have it? </h4>
						</div>
					</div>
				</div>
				<!-- body -->
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Name of Financial Institution </label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value('financial_institution',$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
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
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Name </label>
										<input type="text" value="" class="form-control">
									</div>
								</div>
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
						<div class="col-md-4">
							<div class="input-group">
								<textarea class="form-control" cols="30" rows="10"><?php echo Helper::validate_key_loop_value('contents',$finacial_affairs,$i);?></textarea>
							</div>
						</div>
						<div class="col-md-2">
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_toggle('still_have_safe_deposite',$finacial_affairs,0);?>>
								<label for="">No</label>
							</div>
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_toggle('still_have_safe_deposite',$finacial_affairs,1);?>>
								<label for="">Yes</label>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- 22 -->
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for=""><strong class="d-block">
							22. Have you stored property in a storage unit or place other than
							your
							home within 1 year before you filed for bankruptcy?</strong>
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('list_storage_unit',$finacial_affairs,0);?>>
					<label>No</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('list_storage_unit',$finacial_affairs,1);?>>
					<label>Yes. Fill in the details.
					</label>
				</div>
			</div>

			<div class="col-md-12 mt-3">
				<!-- First Row Heading -->
				<div class="row mt-3">
					<div class="col-md-3"></div>
					<div class="col-md-3">
						<div class="column-heading">
							<h4>Who else had access to it? </h4>
						</div>
					</div>
					<div class="col-md-4">
						<div class="column-heading">
							<h4>Describe the contents</h4>
						</div>
					</div>
					<div class="col-md-2">
						<div class="column-heading">
							<h4>Do you still
								have it? </h4>
						</div>
					</div>
				</div>
				<!-- body -->
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Name of Storage Facility </label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value('storage_facility',$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
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
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Name </label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value('access_box_facility',$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
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
						<div class="col-md-4">
							<div class="input-group">
								<textarea class="form-control" cols="30" rows="10"><?php echo Helper::validate_key_loop_value('contents',$finacial_affairs,$i);?></textarea>
							</div>
						</div>
						<div class="col-md-2">
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('list_storage_unit_data',$finacial_affairs,0,'still_have_storage_unit');?>>
								<label for="">No</label>
							</div>
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('list_storage_unit_data',$finacial_affairs,1,'still_have_storage_unit');?>>
								<label for="">Yes</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Part 9 -->
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="part-form-title mb-3">
					<span>Part 9</span>
					<h2 class="font-lg-18">: Identify Property You Hold or Control for Someone
						Else
					</h2>
				</div>
			</div>
		</div>

		<!-- 22 -->
		<div class="form-border mb-3">
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for=""><strong class="d-block">
							23. Do you hold or control any property that someone else owns?
							Include
							any property you borrowed from, are storing for,
							or hold in trust for someone.</strong>
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('list_property_you_hold',$finacial_affairs,0);?>>
					<label>No</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('list_property_you_hold',$finacial_affairs,1);?>>
					<label>Yes. Fill in the details.
					</label>
				</div>
			</div>
			<div class="col-md-12 mt-3">
				<!-- First Row Heading -->
				<div class="row mt-3">
					<div class="col-md-3"></div>
					<div class="col-md-3">
						<div class="column-heading">
							<h4>Where is the property? </h4>
						</div>
					</div>
					<div class="col-md-4">
						<div class="column-heading">
							<h4>Describe the contents</h4>
						</div>
					</div>
					<div class="col-md-2">
						<div class="column-heading">
							<h4>Value </h4>
						</div>
					</div>
				</div>
				<!-- body -->
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Owner’s Name </label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value('owner_address',$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
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
						<div class="col-md-3">
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
										<input type="text" value="<?php echo Helper::validate_key_loop_value('property_location',$finacial_affairs,$i);?>" class="form-control">
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
						<div class="col-md-4">
							<div class="input-group">
								<textarea class="form-control" cols="30" rows="10"><?php echo Helper::validate_key_loop_value('property_desc',$finacial_affairs,$i);?></textarea>
							</div>
						</div>
						<div class="col-md-2">
							<div class="input-group d-flex">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">$</span>
								</div>
								<input type="text" value="<?php echo Helper::validate_key_loop_value('property_value',$finacial_affairs,$i);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Part 10 -->
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="part-form-title mb-3">
					<span>Part 10</span>
					<h2 class="font-lg-18">: Give Details About Environmental Information
					</h2>
				</div>
			</div>
		</div>

		<!-- 24 -->
		<div class="form-border mb-3">
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for="">For the purpose of Part 10, the following definitions apply:
					</label>
				</div>

				<div class="input-group">
					<ul>
						<li>
							Environmental law means any federal, state, or local statute or
							regulation concerning pollution, contamination, releases of
							hazardous or toxic substances, wastes, or material into the air,
							land,
							soil,
							surface water, groundwater, or other medium,
							including statutes or regulations controlling the cleanup of these
							substances, wastes, or material.
						</li>
						<li>
							Site means any location, facility, or property as defined under any
							environmental law, whether you now own, operate, or
							utilize it or used to own, operate, or utilize it, including
							disposal
							sites.
						</li>
						<li>
							Hazardous material means anything an environmental law defines as a
							hazardous waste, hazardous substance, toxic
							substance, hazardous material, pollutant, contaminant, or similar
							term.
						</li>
					</ul>
				</div>

				<div class="input-group">
					<label>
						Report all notices, releases, and proceedings that you know about,
						regardless of when they occurred.
						24. Has any governmental unit notified you that you may be liable or
						potentially liable under or in violation of an environmental law?
					</label>
				</div>
				<div class="input-group">
					<label><Strong>24. Has any governmental unit notified you that you may be
							liable
							or potentially liable under or in violation of an environmental
							law?</Strong>

					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('list_noticeby_gov',$finacial_affairs,0);?>>
					<label>No</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('list_noticeby_gov',$finacial_affairs,1);?>>
					<label>Yes. Fill in the details.
					</label>
				</div>
			</div>
			<div class="col-md-12 mt-3">
				<!-- First Row Heading -->
				<div class="row mt-3">
					<div class="col-md-3"></div>
					<div class="col-md-3">
						<div class="column-heading">
							<h4>Governmental unit </h4>
						</div>
					</div>
					<div class="col-md-4">
						<div class="column-heading">
							<h4>Environmental law, if you know it</h4>
						</div>
					</div>
					<div class="col-md-2">
						<div class="column-heading">
							<h4>Date of notice </h4>
						</div>
					</div>
				</div>
				<!-- body -->
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Name of site </label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value('site_address',$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
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
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Governmental unit</label>
										<input type="text" value="><?php echo Helper::validate_key_loop_value('governmental_unit_address',$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
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
						<div class="col-md-4">
							<div class="input-group">
								<textarea class="form-control" cols="30" rows="10"><?php echo Helper::validate_key_loop_value('environmental_law',$finacial_affairs,$i);?></textarea>
							</div>
						</div>
						<div class="col-md-2">
							<div class="input-group">
								<input type="text" value="<?php echo Helper::validate_key_loop_value('notice_date',$finacial_affairs,$i);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- 25 -->
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for=""><strong class="d-block">
							25. Have you notified any governmental unit of any release of
							hazardous
							material?</strong>
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('list_environment_law',$finacial_affairs,0);?>>
					<label>No</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('list_environment_law',$finacial_affairs,1);?>>
					<label>Yes. Fill in the details.
					</label>
				</div>
			</div>
			<div class="col-md-12 mt-3">
				<!-- First Row Heading -->
				<div class="row mt-3">
					<div class="col-md-3"></div>
					<div class="col-md-3">
						<div class="column-heading">
							<h4>Governmental unit </h4>
						</div>
					</div>
					<div class="col-md-4">
						<div class="column-heading">
							<h4>Environmental law, if you know it</h4>
						</div>
					</div>
					<div class="col-md-2">
						<div class="column-heading">
							<h4>Date of notice </h4>
						</div>
					</div>
				</div>
				<!-- body -->
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Name of site </label>
										<input type="text" value="<?php echo Helper::validate_key_toggle('list_environment_law',$finacial_affairs,1);?>" class="form-control">
									</div>
								</div>
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
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Governmental unit</label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value('governmental_unit_address',$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
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
						<div class="col-md-4">
							<div class="input-group">
								<textarea class="form-control" cols="30" rows="10"><?php echo Helper::validate_key_loop_value('environment_law_know',$finacial_affairs,$i);?></textarea>
							</div>
						</div>
						<div class="col-md-2">
							<div class="input-group">
								<input type="text" value="<?php echo Helper::validate_key_loop_value('notice_date',$finacial_affairs,$i);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- 26 -->
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for=""><strong class="d-block">
							26. Have you been a party in any judicial or administrative
							proceeding
							under any environmental law? Include settlements and orders</strong>
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('list_judicial_proceedings',$finacial_affairs,0);?>>
					<label>No</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('list_judicial_proceedings',$finacial_affairs,1);?>>
					<label>Yes. Fill in the details.
					</label>
				</div>
			</div>
			<div class="col-md-12 mt-3">
				<!-- First Row Heading -->
				<div class="row mt-3">
					<div class="col-md-3"></div>
					<div class="col-md-3">
						<div class="column-heading">
							<h4>Court or agency </h4>
						</div>
					</div>
					<div class="col-md-4">
						<div class="column-heading">
							<h4>Nature of the case</h4>
						</div>
					</div>
					<div class="col-md-2">
						<div class="column-heading">
							<h4>Status of the
								case</h4>
						</div>
					</div>
				</div>
				<!-- body -->
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Case title </label>
										<input type="text" value="" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="input-group">
										<label>Case Number</label>
										<input type="number" value="<?php echo Helper::validate_key_loop_value('case_number',$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Court Name</label>
										<input type="text" value="" class="form-control">
									</div>
								</div>
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
						<div class="col-md-4">
							<div class="input-group">
								<textarea class="form-control" cols="30" rows="10"><?php echo Helper::validate_key_loop_value('agency_address',$finacial_affairs,$i);?></textarea>
							</div>
						</div>
						<div class="col-md-2">
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('list_judicial_proceedings_data',$finacial_affairs,1,'nature_case');?>>
								<label for="">Pending</label>
							</div>
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('list_judicial_proceedings_data',$finacial_affairs,2,'nature_case');?>>
								<label for="">On appeal</label>
							</div>
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_loop_toggle('list_judicial_proceedings_data',$finacial_affairs,3,'nature_case');?>>
								<label for="">Concluded</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Part 11 -->
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="part-form-title mb-3">
					<span>Part 11</span>
					<h2 class="font-lg-18">: Give Details About Your Business or Connections to
						Any
						Business
					</h2>
				</div>
			</div>

		</div>

		<!-- 27 -->
		<div class="form-border mb-3">
			<div class="col-md-12">
				<div class="input-group">
					<label for=""><strong>27. Within 4 years before you filed for bankruptcy,
							did
							you own a business or have any of the following connections to any
							business?</strong></label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('employer_identification',$finacial_affairs,1);?>>
					<label for="">A sole proprietor or self-employed in a trade, profession, or
						other activity, either full-time or part-time</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('employer_identification',$finacial_affairs,2);?>>
					<label for="">A member of a limited liability company (LLC) or limited
						liability
						partnership (LLP)</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('employer_identification',$finacial_affairs,3);?>>
					<label for="">A partner in a partnership</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('employer_identification',$finacial_affairs,4);?>>
					<label for="">An officer, director, or managing executive of a
						corporation</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php echo Helper::validate_key_toggle('employer_identification',$finacial_affairs,5);?>>
					<label for="">An owner of at least 5% of the voting or equity securities of
						a
						corporation</label>
				</div>
				<div class="input-group">
					<input type="checkbox">
					<label for="">No. None of the above applies. Go to Part 12.
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox">
					<label for="">Yes. Check all that apply above and fill in the details below
						for
						each business.</label>
				</div>


			</div>
			<div class="col-md-12 mt-3">
				<!-- First Row Heading -->
				<div class="row mt-3">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="column-heading">
							<h4>Describe the nature of the business</h4>
						</div>
					</div>
					<div class="col-md-4">
						<div class="column-heading">
							<h4>Employer Identification number
								Do not include Social Security number or ITIN.</h4>
						</div>
					</div>
				</div>
				<!-- body -->
				<div class="col-md-12">
					<div class="row border-bottm-1">
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Business Name </label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value('business_address',$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
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
						<div class="col-md-4">
							<div class="input-group">
								<textarea class="form-control" cols="30" rows="5"></textarea>
							</div>
							<div class="input-group">
								<label for="">Name of accountant or bookkeeper </label>
								<textarea class="form-control" cols="30" rows="5"><?php echo Helper::validate_key_loop_value('business_accountant',$finacial_affairs,$i);?></textarea>
							</div>
						</div>
						<div class="col-md-4">
							<div class="input-group">
								<label for="">EIN:</label>
								<input type="number" value="<?php echo Helper::validate_key_loop_value('eiin',$finacial_affairs,$i);?>" class="form-control">
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label for="">Dates business existed</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group">
										<label for="">from</label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value('operation_date',$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group">
										<label for="">To</label>
										<input type="text" value="" class="form-control">
									</div>
								</div>
							</div>




						</div>
					</div>
					
				</div>
			</div>

			<div class="col-md-12">
				<div class="input-group">
					<label for=""><strong>28. Within 2 years before you filed for bankruptcy,
							did
							you give a financial statement to anyone about your business?
							Include
							all financial
							institutions, creditors, or other parties.</strong></label>
				</div>
			</div>
			<div class="col-md-12 mt-3">
				<!-- First Row Heading -->
				<div class="row mt-3">
					<div class="col-md-4">

					</div>
					<div class="col-md-4">
						<div class="column-heading">
							<h4>Date issued</h4>
						</div>
					</div>
				</div>
				<!-- body -->
				<div class="col-md-12">
					<div class="row ">
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<div class="input-group">
										<label>Name </label>
										<input type="text" value="<?php echo Helper::validate_key_loop_value('address_name',$finacial_affairs,$i);?>" class="form-control">
									</div>
								</div>
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
						<div class="col-md-4">
							<div class="input-group">
								<label for="">Date</label>
								<input type="text" value="<?php echo Helper::validate_key_loop_value('date_issued',$finacial_affairs,$i);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Part 12 -->
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="part-form-title mb-3">
					<span>Part 12</span>
					<h2 class="font-lg-18">Sign Below
					</h2>
				</div>
			</div>
		</div>
		<!-- 28 -->
		<div class="form-border">
			<div class="col-md-12">
				<div class="input-group">
					<label for=""><strong>I have read the answers on this Statement of Financial
							Affairs and any attachments, and I declare under penalty of perjury
							that
							the
							answers are true and correct. I understand that making a false
							statement, concealing property, or obtaining money or property by
							fraud
							in connection with a bankruptcy case can result in fines up to
							$250,000,
							or imprisonment for up to 20 years, or both.
							18 U.S.C. §§ 152, 1341, 1519, and 3571. </strong></label>
				</div>
				<div class="row mt-3">
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
				<div class="input-group">
					<label for=""><strong>Did you attach additional pages to Your Statement of
							Financial Affairs for Individuals Filing for Bankruptcy (Official
							Form
							107)?</strong></label>
					<div class="input-group">
						<input type="checkbox">
						<label for="">No</label>
					</div>
					<div class="input-group">
						<input type="checkbox">
						<label for="">Yes</label>
					</div>
				</div>
				<div class="input-group">
					<label for=""><strong>Did you pay or agree to pay someone who is not an
							attorney
							to help you fill out bankruptcy forms? </strong></label>
					<div class="input-group">
						<input type="checkbox">
						<label for="">No</label>
					</div>
					<div class="input-group">
						<input type="checkbox">
						<label for="">Name of person</label>
						<input type="text" value="" class="form-control">
						<i class="text-bold"> Attach the Bankruptcy Petition Preparer’s Notice,
							Declaration, and Signature (Official Form 119).</i>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
