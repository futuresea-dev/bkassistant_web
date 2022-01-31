<section class="official-form-106d padd-20" id="official-form-106d">
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
					<h4>Official Form 106D </h4>
					<h2 class="font-lg-22">Schedule D: Creditors Who Have Claims Secured by
						Property
					</h2>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-subheading">
					<p class="font-lg-14"><strong>Be as complete and accurate as possible. If
							two
							married people are filing together, both are equally responsible for
							supplying correct
							information. If more space is needed, copy the Additional Page, fill
							it
							out, number the entries, and attach it to this form. On the top of
							any
							additional pages, write your name and case number (if known).
						</strong></p>
				</div>
			</div>
			<!-- Row 1 -->
			<?php
				$propertyresident=$property_info['propertyresident']->toArray();
				// dump($propertyresident);
				$loan_own_type_property=true;
			?>
			<?php foreach($propertyresident as $val){
				if(!empty($val['loan_own_type_property'])){			
					$loan_own_type_property=true;
				}
			}
			?>
			<div class="col-md-12">
				<div class="input-group d-inline-block">
					<label for="">
						<strong class="d-block">1. Do any creditors have claims secured by your
							property?
						</strong>
					</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php if($loan_own_type_property!=true){?> checked <?php }?>>
					<label>No. Check this box and submit this form to the court with your other
						schedules. You have nothing else to report on this form.</label>
				</div>
				<div class="input-group">
					<input type="checkbox" <?php if($loan_own_type_property==true){?> checked <?php }?>>
					<label>Yes. Fill in all of the information below.</label>
				</div>
			</div>
		</div>
		
		<!-- Part 1 -->
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="part-form-title mb-3">
					<span>Part 1</span>
					<h2 class="font-lg-18">List All Secured Claims
					</h2>
				</div>
			</div>
		</div>
		<!-- Row 2 -->
		<div class="form-border">
			<div class="row column-heading">
				<div class="col-md-7">
					<div class="input-group d-inline-block">
						<label><strong class="mb-0">2. List all secured claims.</strong> If a
							creditor has more
							than one secured claim, list the creditor separately
							for each claim. If more than one creditor has a particular claim,
							list
							the other creditors in Part 2.
							As much as possible, list the claims in alphabetical order according
							to
							the creditor’s name.
						</label>
					</div>
				</div>
				<div class="col-md-5">
					<div class="row">
						<div class="col-md-4"><i class="text-bold">Column A</i>
							<strong>Amount of claim</strong>
							Do not deduct the
							value of collateral.
						</div>
						<div class="col-md-4"><i class="text-bold">Column B</i>
							<strong>Value of collateral
								that supports this
								claim</strong>
						</div>
						<div class="col-md-4"><i class="text-bold">Column C</i>
							<strong>Unsecured
								portion</strong>
							any
						</div>
					</div>
				</div>
			</div>
			<?php $i=1;foreach($propertyresident as $val){
				if(!empty($val['loan_own_type_property'])){
					$home_car_loan=json_decode($val['home_car_loan'],1);
			?>
			<div class="row ">
				<div class="col-md-12">
					<Strong>2.{{$i}}</Strong>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group">
								<label>Creditor’s Name </label>
								<input type="text" value="<?php echo Helper::validate_key_value('creditor_name',$home_car_loan);?>" class="form-control">
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
										<label>Street Address</label>
										<input type="text" value="<?php echo Helper::validate_key_value('creditor_name_addresss',$home_car_loan);?>" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<label>City</label>
										<input type="text" value="<?php echo Helper::validate_key_value('creditor_city',$home_car_loan);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group">
										<label>State</label>
										<input type="text" value="<?php echo Helper::validate_key_value('creditor_state',$home_car_loan);?>" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="input-group">
										<label>Zip Code</label>
										<input type="text" value="<?php echo Helper::validate_key_value('creditor_zip',$home_car_loan);?>" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="input-group">
								<label><strong>Who owes the debt?</strong> Check one.</label>
							</div>
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_toggle('debt_owned_by',$home_car_loan,1);?>>
								<label>Debtor 1 only </label>
							</div>
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_toggle('debt_owned_by',$home_car_loan,2);?>>
								<label>Debtor 2 only </label>
							</div>
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_toggle('debt_owned_by',$home_car_loan,3);?>>
								<label>Debtor 1 and Debtor 2 only </label>
							</div>
							<div class="input-group">
								<input type="checkbox" <?php echo Helper::validate_key_toggle('debt_owned_by',$home_car_loan,4);?>>
								<label>At least one of the debtors and another </label>
							</div>
							<div class="input-group">
								<input type="checkbox">
								<label>Check if this claim relates to a
									community debt </label>
							</div>
							<div class="input-group">
								<label><strong>Date debt was incurred </strong></label>
								<input type="text" value="<?php echo Helper::validate_key_value('debt_incurred_date',$home_car_loan);?>" class="form-control">
							</div>
						</div>
					</div>
				</div>


				<div class="col-md-4">
					<div class="input-group">
						<label>Describe the property that secures the claim: </label>
						<textarea name="" id="" cols="3" rows="2"
							class="form-control"></textarea>
					</div>
					<div class="input-group">
						<label><strong>As of the date you file, the claim is:</strong> : Check
							all
							that
							apply .</label>
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
						<label><strong>Nature of lien:</strong> : Chec Check all that
							apply</label>
					</div>
					<div class="input-group">
						<input type="checkbox">
						<label>An agreement you made (such as mortgage or secured
							car loan) </label>
					</div>
					<div class="input-group">
						<input type="checkbox">
						<label>Statutory lien (such as tax lien, mechanic’s lien) </label>
					</div>
					<div class="input-group">
						<input type="checkbox">
						<label>Judgment lien from a lawsui </label>
					</div>
					<div class="input-group">
						<input type="checkbox">
						<label>Other (including a right to offset </label>
					</div>
					<div class="input-group">
						<label><strong>Last 4 digits of account number</strong> </label>
						<input type="number" value="<?php echo Helper::validate_key_value('account_number',$home_car_loan);?>" class="form-control">
					</div>
				</div>
				<div class="col-md-5">
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
			<hr>
			<?php } $i++;}?>
		</div>
		
	      <!-- <div class="form-border">
			 <div class="row ">
				 <div class="col-md-12">
					 <div class="input-group mb-0">
						<label for="">
							Add the dollar value of your entries in Column A on this page. Write
							that
							number
							here:
						</label>
						<input type="text" value="" class="form-control">
					</div> 
				</div> 
			</div> 
		</div>  -->


		<!-- Part 1 Duplicate -->
		<div class="row align-items-center mt-3">
			<div class="col-md-12">
				<div class="part-form-title mb-3 two-line-title">
					<span>Part 1</span>
					<h2 class="font-lg-18">Additional Page
						<p>After listing any entries on this page, number them beginning with
							2.3,
							followed
							by 2.4, and so forth.</p>
					</h2>
				</div>
			</div>
		</div>
		<!-- Row 2 -->
		<div class="form-border">
			<div class="row column-heading">
				<div class="col-md-7">
					<div class="input-group d-inline-block">
						<label><strong class="mb-0">After listing any entries on this page,
								number
								them beginning with 2.3, followed by 2.4, and so forth</strong>
						</label>
					</div>
				</div>
				<div class="col-md-5">
					<div class="row">
						<div class="col-md-4"><i class="text-bold">Column A</i>
							<strong>Amount of claim</strong>
							Do not deduct the
							value of collateral.
						</div>
						<div class="col-md-4"><i class="text-bold">Column B</i>
							<strong>Value of collateral
								that supports this
								claim</strong>
						</div>
						<div class="col-md-4"><i class="text-bold">Column C</i>
							<strong>Unsecured
								portion</strong>
							any
						</div>
					</div>
				</div>
			</div>

			<div class="row ">

				<div class="col-md-3">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group">
								<label>Creditor’s Name </label>
								<input type="text" value="" class="form-control">
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
						<div class="col-md-12">
							<div class="input-group">
								<label><strong>Who owes the debt?</strong> Check one.</label>
							</div>

							
					<!-- <div class="input-group">
					<input type="checkbox" id="Contingent" name="Contingent" value="">
  					<label for="Contingent"> Contingent</label><br>
					<br>
					</div> -->

					<div class="input-group">
						<input type="checkbox" id="Debtor1" name="Debtor1" value="">
  						<label for="Debtor1">Debtor 1 only </label><br>
						<br>
					</div>

					<div class="input-group">
						<input type="checkbox" id="Debtor2" name="Debtor2" value="">
  						<label for="Debtor2">Debtor 2 only </label><br>
						<br>
					</div>

					<div class="input-group">
						<input type="checkbox" id="Debtor12" name="Debtor12" value="">
  						<label for="Debtor12">Debtor 1 and Debtor 2 only </label><br>
						<br>
					</div>

					<div class="input-group">
						<input type="checkbox" id="another" name="another" value="">
  						<label for="another">At least one of the debtors and another </label><br>
						<br>
					</div>

					<div class="input-group">
						<input type="checkbox" id="claim" name="claim" value="">
  						<label for="claim">Check if this claim relates to a
									community debt </label><br>
						<br>
					</div>

							<div class="input-group">
								<label><strong>Date debt was incurred </strong></label>
								<input type="text" value="" class="form-control">
							</div>
						</div>
					</div>
				</div>


				<div class="col-md-4">
					<div class="input-group">
						<label>Describe the property that secures the claim: </label>
						<textarea name="" id="" cols="3" rows="2"
							class="form-control"></textarea>
					</div>
					<div class="input-group">
						<label>0<strong>As of the date you file, the claim is:</strong> : Check
							all
							that
							apply .</label>
					</div>

					<div class="input-group">
					<input type="checkbox" id="Contingent" name="Contingent" value="">
  					<label for="Contingent"> Contingent</label><br>
					<br>
					</div>

					<div class="input-group">
					<input type="checkbox" id="Unliquidated" name="Unliquidated" value="">
  					<label for="Unliquidated"> Unliquidated</label><br>
					<br>
					</div>

					<div class="input-group">
					<input type="checkbox" id=" Disputed" name=" Disputed" value="">
  					<label for=" Disputed"> Disputed</label><br>
					<br>	
					</div>
					
					<div class="input-group">
						<label><strong>Nature of lien:</strong> : Chec Check all that
							apply</label>
					</div>

					<div class="input-group">
					<input type="checkbox" id="agreement" name="agreement" value="">
  					<label for="agreement">An agreement you made (such as mortgage or secured
							car loan) </label><br>
					<br>
					</div>

					<div class="input-group">
					<input type="checkbox" id="Statutory" name="Statutory" value="">
  					<label for="Statutory">Statutory lien (such as tax lien, mechanic’s lien)</label><br>
					<br>
					</div>

					<div class="input-group">
					<input type="checkbox" id="Judgment" name="Judgment" value="">
  					<label for="Judgment">Judgment lien from a lawsui </label><br>
					<br>
					</div>

					<div class="input-group">
					<input type="checkbox" id="Other" name="Other" value="">
  					<label for="Other">Other (including a right to offset  </label><br>
					<br>
				</div>

					<div class="input-group">
						<label><strong>Last 4 digits of account number</strong> </label>
						<input type="number" value="" class="form-control">
					</div>
				</div>

				<div class="col-md-5">
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
		<div class="form-border">
			<div class="row ">
				<div class="col-md-12">
					<Strong>2.2</Strong>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group">
								<label>Creditor’s Name </label>
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
						<div class="col-md-12">
							<div class="input-group">
								<label><strong>Who owes the debt?</strong> Check one.</label>
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
								<label><strong>Date debt was incurred </strong></label>
								<input type="text" value="" class="form-control">
							</div>
						</div>
					</div>
				</div>


				<div class="col-md-4">
					<div class="input-group">
						<label>Describe the property that secures the claim: </label>
						<textarea name="" id="" cols="3" rows="2"
							class="form-control"></textarea>
					</div>
					<div class="input-group">
						<label><strong>As of the date you file, the claim is:</strong> : Check
							all
							that
							apply .</label>
					</div>
					<div class="input-group">
						<input type="text" value="" class="form-control">
						<label>Contingent </label>
					</div>
					<div class="input-group">
						<input type="text" value="" class="form-control">
						<label>Unliquidated </label>
					</div>
					<div class="input-group">
						<input type="text" value="" class="form-control">
						<label>Disputed </label>
					</div>
					<div class="input-group">
						<label><strong>Nature of lien:</strong> : Chec Check all that
							apply</label>
					</div>
					<div class="input-group">
						<input type="text" value="" class="form-control">
						<label>An agreement you made (such as mortgage or secured
							car loan) </label>
					</div>
					<div class="input-group">
						<input type="text" value="" class="form-control">
						<label>Statutory lien (such as tax lien, mechanic’s lien) </label>
					</div>
					<div class="input-group">
						<input type="text" value="" class="form-control">
						<label>Judgment lien from a lawsui </label>
					</div>
					<div class="input-group">
						<input type="text" value="" class="form-control">
						<label>Other (including a right to offset </label>
					</div>
					<div class="input-group">
						<label><strong>Last 4 digits of account number</strong> </label>
						<input type="number" value="" class="form-control">
					</div>
				</div>
				<div class="col-md-5">
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

		<div class="form-border">
			<div class="row column-heading">
				<div class="col-md-7">
					<div class="input-group d-inline-block">
						<label><strong class="mb-0">After listing any entries on this page,
								number
								them beginning with 2.3, followed by 2.4, and so forth</strong>
						</label>
					</div>
				</div>
				<div class="col-md-5">
					<div class="row">
						<div class="col-md-4"><i class="text-bold">Column A</i>
							<strong>Amount of claim</strong>
							Do not deduct the
							value of collateral.
						</div>
						<div class="col-md-4"><i class="text-bold">Column B</i>
							<strong>Value of collateral
								that supports this
								claim</strong>
						</div>
						<div class="col-md-4"><i class="text-bold">Column C</i>
							<strong>Unsecured
								portion</strong>
							any
						</div>
					</div>
				</div>
			</div>

			<div class="row ">

				<div class="col-md-3">
					<div class="row">
						<div class="col-md-12">
							<div class="input-group">
								<label>Creditor’s Name </label>
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
						<div class="col-md-12">
							<div class="input-group">
								<label><strong>Who owes the debt?</strong> Check one.</label>
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
								<label><strong>Date debt was incurred </strong></label>
								<input type="text" value="" class="form-control">
							</div>
						</div>
					</div>
				</div>


				<div class="col-md-4">
					<div class="input-group">
						<label>Describe the property that secures the claim: </label>
						<textarea name="" id="" cols="3" rows="2"
							class="form-control"></textarea>
					</div>
					<div class="input-group">
						<label><strong>As of the date you file, the claim is:</strong> : Check
							all
							that
							apply .</label>
					</div>
					<div class="input-group">
						<input type="text" value="" class="form-control">
						<label>Contingent </label>
					</div>
					<div class="input-group">
						<input type="text" value="" class="form-control">
						<label>Unliquidated </label>
					</div>
					<div class="input-group">
						<input type="text" value="" class="form-control">
						<label>Disputed </label>
					</div>
					<div class="input-group">
						<label><strong>Nature of lien:</strong> : Chec Check all that
							apply</label>
					</div>
					<div class="input-group">
						<input type="text" value="" class="form-control">
						<label>An agreement you made (such as mortgage or secured
							car loan) </label>
					</div>
					<div class="input-group">
						<input type="text" value="" class="form-control">
						<label>Statutory lien (such as tax lien, mechanic’s lien) </label>
					</div>
					<div class="input-group">
						<input type="text" value="" class="form-control">
						<label>Judgment lien from a lawsui </label>
					</div>
					<div class="input-group">
						<input type="text" value="" class="form-control">
						<label>Other (including a right to offset </label>
					</div>
					<div class="input-group">
						<label><strong>Last 4 digits of account number</strong> </label>
						<input type="number" value="" class="form-control">
					</div>
				</div>
				<div class="col-md-5">
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
		<div class="form-border">
			<div class="row ">
				<div class="col-md-12">
					<div class="input-group mb-0">
						<label for="">
							Add the dollar value of your entries in Column A on this page. Write
							that
							number
							here:
						</label>
						<input type="text" value="$" class="form-control">
					</div>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-12">
					<div class="input-group mb-0">
						<label for="">
							If this is the last page of your form, add the dollar value totals
							from
							all pages.
							Write that number here:
						</label>
						<input type="text" value="$" class="form-control doller">
					</div>

					<!-- Outline Styling Started  -->

					<style>
					 .doller {
 								border-style:solid;
 								border-color:black;
							 }
					</style>
					
					<!-- Styling Finish -->
				</div>
				
			</div>
		</div>


		<!-- Part 2 -->
		<div class="row align-items-center mt-3">
			<div class="col-md-12">
				<div class="part-form-title mb-3 ">
					<span>Part 2</span>
					<h2 class="font-lg-18">List Others to Be Notified for a Debt That You
						Already
						Listed</h2>
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-md-12 ">
				<div class="input-group column-heading mb-0">
					<strong>Use this page only if you have others to be notified about your
						bankruptcy for a debt that you already listed in Part 1. For example, if
						a
						collection
						agency is trying to collect from you for a debt you owe to someone else,
						list the creditor in Part 1, and then list the collection agency here.
						Similarly, if
						you have more than one creditor for any of the debts that you listed in
						Part
						1, list the additional creditors here. If you do not have additional
						persons
						to
						be notified for any debts in Part 1, do not fill out or submit this
						page.
					</strong>
				</div>
			</div>
		</div>
		<div class="form-border">
			<div class="row mt-3">
				<div class="col-md-6">
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
				<div class="col-md-6">
					<div class="input-group">
						<label for="">On which line in Part 1 did you enter the
							creditor?</label>
						<input type="text" value="" class="form-control">
					</div>
					<div class="input-group">
						<label for="">Last 4 digits of account number</label>
						<input type="number" value="" class="form-control">
					</div>
				</div>
			</div>
		</div>
		<div class="form-border">
			<div class="row mt-3">
				<div class="col-md-6">
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
				<div class="col-md-6">
					<div class="input-group">
						<label for="">On which line in Part 1 did you enter the
							creditor?</label>
						<input type="text" value="" class="form-control">
					</div>
					<div class="input-group">
						<label for="">Last 4 digits of account number</label>
						<input type="number" value="" class="form-control">
					</div>
				</div>
			</div>
		</div>
		<div class="form-border">
			<div class="row mt-3">
				<div class="col-md-6">
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
				<div class="col-md-6">
					<div class="input-group">
						<label for="">On which line in Part 1 did you enter the
							creditor?</label>
						<input type="text" value="" class="form-control">
					</div>
					<div class="input-group">
						<label for="">Last 4 digits of account number</label>
						<input type="number" value="" class="form-control">
					</div>
				</div>
			</div>
		</div>
		<div class="form-border">
			<div class="row mt-3">
				<div class="col-md-6">
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
				<div class="col-md-6">
					<div class="input-group">
						<label for="">On which line in Part 1 did you enter the
							creditor?</label>
						<input type="text" value="" class="form-control">
					</div>
					<div class="input-group">
						<label for="">Last 4 digits of account number</label>
						<input type="number" value="" class="form-control">
					</div>
				</div>
			</div>
		</div>
		<div class="form-border">
			<div class="row mt-3">
				<div class="col-md-6">
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
				<div class="col-md-6">
					<div class="input-group">
						<label for="">On which line in Part 1 did you enter the
							creditor?</label>
						<input type="text" value="" class="form-control">
					</div>
					<div class="input-group">
						<label for="">Last 4 digits of account number</label>
						<input type="number" value="" class="form-control">
					</div>
				</div>
			</div>
		</div>
		<div class="form-border">
			<div class="row mt-3">
				<div class="col-md-6">
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
				<div class="col-md-6">
					<div class="input-group">
						<label for="">On which line in Part 1 did you enter the
							creditor?</label>
						<input type="text" value="" class="form-control">
					</div>
					<div class="input-group">
						<label for="">Last 4 digits of account number</label>
						<input type="number" value="" class="form-control">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
