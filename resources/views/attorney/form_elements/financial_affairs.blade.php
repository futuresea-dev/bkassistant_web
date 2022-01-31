<?php
// dump($financialaffairs_info);
?>
<div class="part-a px-3">
	<span class="section-title font-weight-bold font-lg-18 ">If you are filing jointly with your spouse, include information about both you and your spouse.</span>
	<div class="row">		
		<div class="col-md-6">
			<label class="font-weight-bold py-2">List every address where you have lived other than where you live now during the last <strong>3 years:</strong>
				<span class="font-weight-normal"><?php echo Helper::key_display('list_every_address',$financialaffairs_info)?></span></label>

		</div>
		
		<div class="col-md-6">
			<label class="font-weight-bold py-2">If you lived with a spouse or domestic partner in a <a class="text-c-blue">community property</a> state or 
			territory <strong>(Arizona, California, Idaho, Louisiana, Nevada, New Mexico, Puerto Rico, Texas, Washington, and Wisconsin)</strong> within the last <strng>8 years</strong>, list the state or territory where you lived and the name and current address of your spouse or domestic partner:
				<span class="font-weight-normal"><?php echo Helper::key_display('living_domestic_partner',$financialaffairs_info)?></span></label>

		</div>
		<div class="col-md-12">
			<label class="font-weight-bold py-2">List the total amount of income that you received from all jobs and all businesses, including part-time activities, during <strong>this year and the two previous calendar years.:</strong>
				<span class="font-weight-normal"><?php echo Helper::key_display('total_amount_income',$financialaffairs_info)?></span></label>

		</div>
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('total_amount_income',$financialaffairs_info)?>">
			<p>Debtor</p>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">Period</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">Source of income</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">Gross income(before deductions and exclusions)</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">January 1 of this year through date of commencement of case</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span class="font-weight-normal"><?php echo (!empty($financialaffairs_info['total_amount_this_year']) && $financialaffairs_info['total_amount_this_year']==1)?"Wages, commissions, bonuses, tips":"Operating a business"?>
					</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal"><?php echo Helper::validate_key_value('total_amount_this_year_income',$financialaffairs_info)?>
					</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">Last year (January 1 - December 31)</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span class="font-weight-normal"><?php echo (!empty($financialaffairs_info['total_amount_last_year']) && $financialaffairs_info['total_amount_last_year']==1)?"Wages, commissions, bonuses, tips":"Operating a business"?>
					</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal"><?php echo Helper::validate_key_value('total_amount_last_year_income',$financialaffairs_info)?>
					</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">The year before last (January 1 - December 31)</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span class="font-weight-normal"><?php echo (!empty($financialaffairs_info['total_amount_lastbefore_year']) && $financialaffairs_info['total_amount_lastbefore_year']==1)?"Wages, commissions, bonuses, tips":"Operating a business"?>
					</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal"><?php echo Helper::validate_key_value('total_amount_lastbefore_year_income',$financialaffairs_info)?>
					</span></label>
			</div>
		</div>
		<!--Spouse-->		
		<div class="col-md-12">
			<label class="font-weight-bold py-2">Spouse (if applicable)
				<span class="font-weight-normal"><?php echo Helper::key_display('total_amount_income_spouse',$financialaffairs_info)?></span></label>

		</div>
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('total_amount_income_spouse',$financialaffairs_info)?>">
			<p>Debtor</p>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">Period</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">Source of income</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">Gross income(before deductions and exclusions)</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">January 1 of this year through date of commencement of case</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nsbp; <span class="font-weight-normal"><?php echo (!empty($financialaffairs_info['total_amount_spouse_this_year']) && $financialaffairs_info['total_amount_spouse_this_year']==1)?"Wages, commissions, bonuses, tips":"Operating a business"?>
					</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal"><?php echo Helper::validate_key_value('total_amount_spouse_this_year_income',$financialaffairs_info)?>
					</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">Last year (January 1 - December 31)</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span class="font-weight-normal"><?php echo (!empty($financialaffairs_info['total_amount_spouse_last_year']) && $financialaffairs_info['total_amount_spouse_last_year']==1)?"Wages, commissions, bonuses, tips":"Operating a business"?>
					</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal"><?php echo Helper::validate_key_value('total_amount_spouse_last_year_income',$financialaffairs_info)?>
					</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">The year before last (January 1 - December 31)</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span class="font-weight-normal"><?php echo (!empty($financialaffairs_info['total_amount_spouse_lastbefore_year']) && $financialaffairs_info['total_amount_spouse_lastbefore_year']==1)?"Wages, commissions, bonuses, tips":"Operating a business"?>
					</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal"><?php echo Helper::validate_key_value('total_amount_spouse_lastbefore_year_income',$financialaffairs_info)?>
					</span></label>
			</div>
		</div>
		<!-- List any other income that you received during this year and the two previous calendar years-->
		<div class="col-md-12">
			<label class="font-weight-bold py-2">List any other income that you received during <strong>this year and the two previous calendar years</strong>
			<i class="text-c-blue">(Examples of other income are alimony; child support; Social Security, unemployment, and other public benefit payments; pensions; rental income; interest; dividends; money collected from lawsuits; royalties; gambling & lottery winnings. If you are filing a joint case and you have income that you received together, list it only once under Debtor 1.)</i>
				<span class="font-weight-normal"><?php echo Helper::key_display('other_income_received_income',$financialaffairs_info)?></span></label>

		</div>
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('other_income_received_income',$financialaffairs_info)?>">
			<p>Debtor</p>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">Period</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">Source of income</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">Gross income(before deductions and exclusions)</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">January 1 of this year through date of commencement of case</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span class="font-weight-normal"><?php echo (!empty($financialaffairs_info['other_income_received_this_year']) && $financialaffairs_info['other_income_received_this_year']==1)?"Wages, commissions, bonuses, tips":"Operating a business"?>
					</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal"><?php echo Helper::validate_key_value('other_amount_this_year_income',$financialaffairs_info)?>
					</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">Last year (January 1 - December 31)</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span class="font-weight-normal"><?php echo (!empty($financialaffairs_info['other_income_received_last_year']) && $financialaffairs_info['other_income_received_last_year']==1)?"Wages, commissions, bonuses, tips":"Operating a business"?>
					</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal"><?php echo Helper::validate_key_value('other_amount_last_year_income',$financialaffairs_info)?>
					</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">The year before last (January 1 - December 31)</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span class="font-weight-normal"><?php echo (!empty($financialaffairs_info['other_income_received_lastbefore_year']) && $financialaffairs_info['other_income_received_lastbefore_year']==1)?"Wages, commissions, bonuses, tips":"Operating a business"?>
					</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal"><?php echo Helper::validate_key_value('other_amount_lastbefore_year_income',$financialaffairs_info)?>
					</span></label>
			</div>
		</div>
		<!--Spouse-->		
		<div class="col-md-12">
			<label class="font-weight-bold py-2">Spouse (if applicable)
				<span class="font-weight-normal"><?php echo Helper::key_display('other_income_received_income_spouse',$financialaffairs_info)?></span></label>

		</div>
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('other_income_received_income_spouse',$financialaffairs_info)?>">
			<p>Debtor</p>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">Period</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">Source of income</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">Gross income(before deductions and exclusions)</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">January 1 of this year through date of commencement of case</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span class="font-weight-normal"><?php echo (!empty($financialaffairs_info['other_income_received_income_spouse_this_year']) && $financialaffairs_info['other_income_received_this_year']==1)?"Wages, commissions, bonuses, tips":"Operating a business"?>
					</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal"><?php echo Helper::validate_key_value('other_income_received_income_spouse_this_year_income',$financialaffairs_info)?>
					</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">Last year (January 1 - December 31)</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span class="font-weight-normal"><?php echo (!empty($financialaffairs_info['oother_income_received_income_spouse_last_year']) && $financialaffairs_info['other_income_received_last_year']==1)?"Wages, commissions, bonuses, tips":"Operating a business"?>
					</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal"><?php echo Helper::validate_key_value('other_income_received_income_spouse_last_year_income',$financialaffairs_info)?>
					</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">The year before last (January 1 - December 31)</label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span class="font-weight-normal"><?php echo (!empty($financialaffairs_info['other_income_received_income_spouse_lastbefore_year']) && $financialaffairs_info['other_income_received_income_spouse_lastbefore_year']==1)?"Wages, commissions, bonuses, tips":"Operating a business"?>
					</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal"><?php echo Helper::validate_key_value('other_income_received_income_spouse_lastbefore_year_income',$financialaffairs_info)?>
					</span></label>
			</div>
		</div>
		<div class="col-md-12">
			<label class="font-weight-bold py-2"><b>If your debts are primarily consumer debts (i.e. non-business),</b> list each creditor to whom you paid a total of <b>$600 </b>or more within the last <b>90 days</b>. Do not include payments for domestic support obligations, such as child support and alimony.
			<span class="font-weight-normal"><?php echo Helper::key_display('primarily_consumer_debets',$financialaffairs_info)?></span></label>
		</div>
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('primarily_consumer_debets',$financialaffairs_info)?>">
			<?php if(!empty($financialaffairs_info['primarily_consumer_debets_data'])){ ?>
			<?php for($i=0;$i<count($financialaffairs_info['primarily_consumer_debets_data']['creditor_address']);$i++){?>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Name and Address of Creditor <span
						class="font-weight-normal"><?php echo Helper::validate_key_loop_value("creditor_address",@$financialaffairs_info['primarily_consumer_debets_data'],$i);?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Dates of Payment <span
						class="font-weight-normal"><?php echo Helper::validate_key_loop_value("payment_dates",@$financialaffairs_info['primarily_consumer_debets_data'],$i);?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Total Amount Paid <span
						class="font-weight-normal"><?php echo Helper::validate_key_loop_value("total_amount_paid",@$financialaffairs_info['primarily_consumer_debets_data'],$i);?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Amount Still Owed <span
						class="font-weight-normal"><?php echo Helper::validate_key_loop_value("amount_still_owed",@$financialaffairs_info['primarily_consumer_debets_data'],$i);?></span></label>
			</div>
			<div class="col-md-6">
			<?php
			$payment_for_status=[1=>"Mortgage",2=>"Car",3=>"Credit card",4=>"Loan repayment",5=>"Suppliers or vendor",6=>"Other"]
			?>
			<label class="font-weight-bold py-2">Was this payment for <span
					class="font-weight-normal">
				<?php echo (!empty($financialaffairs_info['primarily_consumer_debets_data']['creditor_payment_for']))?$payment_for_status[$financialaffairs_info['primarily_consumer_debets_data']['creditor_payment_for'][$i]]:"";?>
				</span></label>
		</div>
			<?php }}?>
		</div>
		<div class="col-md-12">
			<label class="font-weight-bold py-2"><b>If your debts are primarily non-consumer debts (i.e. non-business),</b> list each creditor to whom you paid a total of <b>$600 </b>or more within the last <b>90 days</b>. Do not include payments for domestic support obligations, such as child support and alimony.
			<span class="font-weight-normal"><?php echo Helper::key_display('primarily_non_consumer_debets',$financialaffairs_info)?></span></label>
		</div>
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('primarily_non_consumer_debets',$financialaffairs_info)?>">
			<?php if(!empty($financialaffairs_info['non_consumer'])){ ?>
			<?php for($i=0;$i<count($financialaffairs_info['non_consumer']['non_consumer_creditor_address']);$i++){?>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Name and Address of Creditor <span
						class="font-weight-normal"><?php echo Helper::validate_key_loop_value("non_consumer_creditor_address",@$financialaffairs_info['non_consumer'],$i);?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Dates of Payment <span
						class="font-weight-normal"><?php echo Helper::validate_key_loop_value("non_consumer_payment_dates",@$financialaffairs_info['non_consumer'],$i);?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Total Amount Paid <span
						class="font-weight-normal"><?php echo Helper::validate_key_loop_value("non_consumer_total_amount_paid",@$financialaffairs_info['non_consumer'],$i);?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Amount Still Owed <span
						class="font-weight-normal"><?php echo Helper::validate_key_loop_value("non_consumer_amount_still_owed",@$financialaffairs_info['non_consumer'],$i);?></span></label>
			</div>
			<div class="col-md-6">
			<?php
			$payment_for_status=[1=>"Mortgage",2=>"Car",3=>"Credit card",4=>"Loan repayment",5=>"Suppliers or vendor",6=>"Other"]
			?>
			<label class="font-weight-bold py-2">Was this payment for <span
					class="font-weight-normal">
				<?php echo (!empty($financialaffairs_info['non_consumer']['non_consumer_creditor_payment_for']))?$payment_for_status[$financialaffairs_info['non_consumer']['non_consumer_creditor_payment_for'][$i]]:"";?>
				</span></label>
		</div>
			<?php }}?>
		</div>
		<div class="col-md-12">
			<label class="font-weight-bold py-2"><b>List all payments that you made within the past 1 year to any "insider." ("Insiders" include your relatives, your business partners and their relatives, your corporations, or your affiliates.)
			<span class="font-weight-normal"><?php echo Helper::key_display('payment_past_one_year',$financialaffairs_info)?></span></label>
		</div>
		<?php
		$past_one_year_data=[
			'creditor_address_past_one_year'=>'Name and Address of Creditor',
			'creditor_street_past_one_year'=>'Street Address',
			'creditor_city_past_one_year'=>'City',
			'creditor_state_past_one_year'=>'State',
			'creditor_zip_past_one_year'=>'Zip',
			'past_one_year_payment_dates'=>'Dates of Payment',
			'past_one_year_total_amount_paid'=>'Total Amount Paid',
			'past_one_year_amount_still_owed'=>'Amount Still Owed',
			'past_one_year_payment_reason'=>'Reason for payment',
		];
		?>
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('payment_past_one_year',$financialaffairs_info)?>">
			<?php if(!empty($financialaffairs_info['past_one_year_data'])){ ?>
			<?php foreach($financialaffairs_info['past_one_year_data'] as $key=>$val){?>
			<div class="col-md-6">
				<?php
				
				?>
				<label class="font-weight-bold py-2">{{$past_one_year_data[$key]}} <span
						class="font-weight-normal"><?php echo Helper::validate_key_loop_value($past_one_year_data[$key],@$financialaffairs_info,$key);?></span></label>
			</div>			
			<?php }}?>
		</div>
		<div class="col-md-12">
			<label class="font-weight-bold py-2"><b>List all payments or transfers of property that you made within the past 1 year that benefitted an "insider."
			<span class="font-weight-normal"><?php echo Helper::key_display('transfers_property',$financialaffairs_info)?></span></label>
		</div>
		<?php
		$transfers_property_data=[
			'creditor_address_transfers_property'=>'Name and Address of Creditor',
			'creditor_street_transfers_property'=>'Street Address',
			'creditor_city_transfers_property'=>'City',
			'creditor_state_transfers_property'=>'State',
			'creditor_zip_transfers_property'=>'Zip',
			'payment_dates_transfers_property'=>'Dates of Payment',
			'total_amount_paid_transfers_property'=>'Total Amount Paid',
			'amount_still_owed_transfers_property'=>'Amount Still Owed',
			'payment_reason_transfers_property'=>'Reason for payment',
		];
		?>
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('transfers_property',$financialaffairs_info)?>">
			<?php if(!empty($financialaffairs_info['transfers_property_data'])){ ?>
			<?php foreach($financialaffairs_info['transfers_property_data'] as $key=>$val){?>
			<div class="col-md-6">
				
				<label class="font-weight-bold py-2">{{$transfers_property_data[$key]}} <span
						class="font-weight-normal"><?php echo Helper::validate_key_loop_value($transfers_property_data[$key],@$financialaffairs_info,$key);?></span></label>
			</div>			
			<?php }}?>
		</div>
		<div class="col-md-12">
			<label class="font-weight-bold py-2"><b>List any lawsuits, court actions, or administrative proceedings to which you are or were a party within the past 1 year
			<span class="font-weight-normal"><?php echo Helper::key_display('list_lawsuits',$financialaffairs_info)?></span></label>
		</div>
		<?php
		$list_lawsuits_data=[
			'case_title'=>'Case Title',
			'case_number'=>'Case Number',
			'case_nature'=>'Nature of the Case',
			'agency_location'=>'Court or Agency',
			'agency_street'=>'Street Address',
			'agency_city'=>'City',
			'agency_state'=>'State',
			'agency_zip'=>'Zip',
			'disposition'=>'Status or Disposition',
		];
		?>
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('list_lawsuits',$financialaffairs_info)?>">
			<?php if(!empty($financialaffairs_info['list_lawsuits_data'])){ ?>
			<?php foreach($financialaffairs_info['list_lawsuits_data'] as $key=>$val){?>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">{{$list_lawsuits_data[$key]}} <span
						class="font-weight-normal"><?php echo Helper::validate_key_loop_value($list_lawsuits_data[$key],@$financialaffairs_info,$key);?></span></label>
			</div>			
			<?php }}?>
		</div>
		<div class="col-md-12">
			<label class="font-weight-bold py-2">Describe all property that has been repossessed, foreclosed, garnished, attached, seized, or levied within the past 1 year.
			<span class="font-weight-normal"><?php echo Helper::key_display('property_repossessed',$financialaffairs_info)?></span></label>
		</div>
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('property_repossessed',$financialaffairs_info)?>">
			<?php if(!empty($financialaffairs_info['property_repossessed_data'])){ ?>
			<?php for($i=0;$i<count($financialaffairs_info['property_repossessed_data']['creditor_address']);$i++){?>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Creditor's Name and Address <span
						class="font-weight-normal"><?php echo Helper::validate_key_loop_value("creditor_address",@$financialaffairs_info['property_repossessed_data'],$i);?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Description and Value of Property <span
						class="font-weight-normal"><?php echo Helper::validate_key_loop_value("creditor_Property",@$financialaffairs_info['property_repossessed_data'],$i);?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Date <span
						class="font-weight-normal"><?php echo Helper::validate_key_loop_value("property_repossessed_date",@$financialaffairs_info['property_repossessed_data'],$i);?></span></label>
			</div>			
			<div class="col-md-6">
			<?php
			$what_happened=[1=>"Property was repossessed",2=>"Property was foreclosed",3=>"Property was garnished",4=>"Property was attached, seized, or levied"]
			?>
			<label class="font-weight-bold py-2">Explain what happened <span
					class="font-weight-normal">
				<?php echo (!empty($financialaffairs_info['primarily_consumer_debets_data']['what_happened']))?$what_happened[$financialaffairs_info['primarily_consumer_debets_data']['what_happened'][$i]]:"";?>
				</span></label>
		</div>
			<?php }}?>
		</div>
		
		<div class="col-md-12">
			<label class="font-weight-bold py-2"><b>List all setoffs made by any creditor, including a bank or financial institution, against a debt or deposit within 90 days before the filing of this case. Include any refusals by a creditor to make a payment because you owed a debt.
			<span class="font-weight-normal"><?php echo Helper::key_display('setoffs_creditor',$financialaffairs_info)?></span></label>
		</div>
		<?php
		$setoffs_creditor_data=[
			'creditors_address'=>"Creditor's Name and Address",
			'creditor_address_line2'=>"Address Line 2",
			'creditor_street'=>'Street Address',
			'creditor_city'=>'City',
			'creditor_state'=>'State',
			'creditor_zip'=>'Zip',
			'creditors_action'=>'Description of action taken by creditor',
			'date_action'=>'Date Action Taken',
			'account_number'=>'Setoff Amount and Last 4 Digits of Account Number',
			'amount_data'=>'Amount and Data',
		];
		?>
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('setoffs_creditor',$financialaffairs_info)?>">
			<?php if(!empty($financialaffairs_info['setoffs_creditor_data'])){ ?>
			<?php foreach($financialaffairs_info['setoffs_creditor_data'] as $key=>$val){?>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">{{$setoffs_creditor_data[$key]}} <span
						class="font-weight-normal"><?php echo Helper::validate_key_loop_value($setoffs_creditor_data[$key],@$financialaffairs_info,$key);?></span></label>
			</div>			
			<?php }}?>
		</div>
		
		<div class="col-md-12">
			<label class="font-weight-bold py-2">Within the past 1 years , was any of your property in the possession of an assignee for the benefit of creditors, a court-appointed receiver, a custodian, or another official?.
			<span class="font-weight-normal"><?php echo Helper::key_display('court_appointed',$financialaffairs_info)?></span></label>
		</div>
		<div class="col-md-12">
			<label class="font-weight-bold py-2">List any gifts that you made within the past 2 years that have a total value of more than $600 per person.
			<span class="font-weight-normal"><?php echo Helper::key_display('list_any_gifts',$financialaffairs_info)?></span></label>
		</div>
		<?php
		$list_any_gifts_data=[
			'recipient_address'=>"Name and Address of Recipient",
			'creditor_address_line2'=>"Address Line 2",
			'creditor_street'=>'Street Address',
			'creditor_city'=>'City',
			'creditor_state'=>'State',
			'creditor_zip'=>'Zip',
			'relationship'=>'Relationship to You',
			'gifts'=>'Description of Gifts',
			'gifts_date_from'=>'Dates from you Gifts Given',
			'gifts_date_to'=>'Dates to Gifts Given',
			'gifts_value'=>'Value',
		];
		?>
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('list_any_gifts',$financialaffairs_info)?>">
			<?php if(!empty($financialaffairs_info['list_any_gifts_data'])){ ?>
			<?php foreach($financialaffairs_info['list_any_gifts_data'] as $key=>$val){?>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">{{$list_any_gifts_data[$key]}} <span
						class="font-weight-normal"><?php echo Helper::validate_key_loop_value($list_any_gifts_data[$key],@$financialaffairs_info,$key);?></span></label>
			</div>			
			<?php }}?>
		</div>
		<div class="col-md-12">
			<label class="font-weight-bold py-2">List any gifts or contributions that you made to a charity within the past 2 years that have a total value of more than $600.
			<span class="font-weight-normal"><?php echo Helper::key_display('gifts_charity',$financialaffairs_info)?></span></label>
		</div>
		<?php
		$gifts_charity_data=[
			'charity_address'=>"Name and Address of Charity",
			'charity_address_line2'=>"Address Line 2",
			'charity_street'=>'Street Address',
			'charity_city'=>'City',
			'charity_state'=>'State',
			'charity_zip'=>'Zip',
			'charity_contribution'=>'Description of Contribution',
			'charity_contribution_date'=>'Contribution Date',
			'charity_contribution_value'=>'Value',
		];
		?>
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('gifts_charity',$financialaffairs_info)?>">
			<?php if(!empty($financialaffairs_info['gifts_charity_data'])){ ?>
			<?php foreach($financialaffairs_info['gifts_charity_data'] as $key=>$val){?>
			<div class="col-md-6">ckkm
				<label class="font-weight-bold py-2">{{$gifts_charity_data[$key]}} <span
						class="font-weight-normal"><?php echo Helper::validate_key_loop_value($gifts_charity_data[$key],@$financialaffairs_info,$key);?></span></label>
			</div>			
			<?php }}?>
		</div>
		<div class="col-md-12">
			<label class="font-weight-bold py-2">List any gifts or contributions that you made to a charity within the past 2 years that have a total value of more than $600.
			<span class="font-weight-normal"><?php echo Helper::key_display('losses_from_fire',$financialaffairs_info)?></span></label>
		</div>
		<?php
		$losses_from_fire_data=[
			'loss_occurred'=>"Description of Property and How Loss Occurred",
			'insurance_coverage'=>'Description of any Insurance Coverage(include the amount that insurance has paid)',
			'loss_date'=>'Date of Loss',
			'loss_property_value'=>'Value of Property Lost',
		];
		?>
		<div class="col-md-12">
			<label class="font-weight-bold py-2">List all payments made or property transferred by you or by someone acting on your behalf to anyone you consulted about filing for bankruptcy or preparing a bankruptcy petition within the past 1 year. Include any attorneys, bankruptcy petition preparers, or credit counseling agencies.
			<span class="font-weight-normal"><?php echo Helper::key_display('property_transferred',$financialaffairs_info)?></span></label>
		</div>
		<?php
		$property_transferred=[
			'person_paid'=>"Name and Address of Person Paid",
			'person_paid_address_line2'=>"Address Line 2",
			'person_paid_street'=>'Street Address',
			'person_paid_city'=>'City',
			'person_paid_state'=>'State',
			'person_paid_zip'=>'Zip',
			'person_made_payment'=>'Name of Person Who Made the Payment, if Not You',
			'property_transferred_value'=>'Description and Value of Any Property Transferred',
			'property_transferred_date'=>'Date of Payment or Transfer',
			'property_transferred_payment'=>'Amount of Payment',
		];
		?>
		
		<div class="col-md-12">
			<label class="font-weight-bold py-2">List all payments made or property transferred by you or by someone acting on your behalf within the past 1 year to anyone who promised to help you deal with your creditors or to make payments to your creditors.
			<span class="font-weight-normal"><?php echo Helper::key_display('property_transferred_creditors',$financialaffairs_info)?></span></label>
		</div>
		<?php
		$property_transferred_creditors=[
			'person_paid_address'=>"Name and Address of Person Paid",
			'person_paid_address_line2'=>"Address Line 2",
			'person_paid_street'=>'Street Address',
			'person_paid_city'=>'City',
			'person_paid_state'=>'State',
			'person_paid_zip'=>'Zip',
			'person_who_paid'=>'Name of Person Who Made the Payment, if Not You',
			'property_transfer_value'=>'Description and Value of Any Property Transferred',
			'property_transfer_date'=>'Date of Payment or Transfer',
			'property_transfer_amount_payment'=>'Amount of Payment',
		];
		?>
		
		<div class="col-md-12">
			<label class="font-weight-bold py-2">List all property, other than property transferred in the ordinary course of your business or financial affairs, that you sold, traded, or transferred either absolutely or as a security within the past 2 years.
			<span class="font-weight-normal"><?php echo Helper::key_display('Property_all',$financialaffairs_info)?></span></label>
		</div>
		<?php
		$property_all_data=[
			'person_address'=>"Name and Address of Person Who Received the Transfer/ Relationship to You",
			'property_transfer_value'=>'Description and Value of Property Transferred',
			'property_exchange'=>'Describe Any Property or Payments Received or Debts Paid in Exchange',
			'property_transfer_any_value'=>'Description and Value of Any Property Transferred',
			'property_transfer_date'=>'Date of Transfer',
		];
		?>
		<div class="col-md-12">
			<label class="font-weight-bold py-2">List all property you transferred within the past 10 years to a self-settled trust or a similar device of which you are a beneficiary.
			<span class="font-weight-normal"><?php echo Helper::key_display('all_property_transfer_10_year',$financialaffairs_info)?></span></label>
		</div>
		<?php
		$all_property_transfer_10_year_data=[
			'trust_name'=>"Name of Trust",
			'10year_property_transfer'=>'Description and Value of Property Transferred',
			'10year_property_transfer_date'=>'Date of Transfer',
		];
		?>
		
		<div class="col-md-12">
			<label class="font-weight-bold py-2">List all financial accounts and instruments held in your name or for your benefit that were closed, sold, moved, or transferred within the past 1 year.
			<span class="font-weight-normal"><?php echo Helper::key_display('list_all_financial_accounts',$financialaffairs_info)?></span></label>
		</div>
		
		<div class="col-md-12">
			<label class="font-weight-bold py-2">List each safe deposit box or other depository for securities, cash, or other valuables that you have had within the past 1 year.
			<span class="font-weight-normal"><?php echo Helper::key_display('list_safe_deposit',$financialaffairs_info)?></span></label>
		</div>
		<?php
		$list_safe_deposit_data=[
			'financial_institution'=>"Name and Address of Financial Institution",
			'access_box'=>'Name and Address of Anyone With Access to Box or Depository',
			'contents'=>'Description of Contents',			
		];
		?>
		<div class="col-md-12">
			<label class="font-weight-bold py-2">List any storage unit or place other than your home in which you have stored property within the past 1 year.
			<span class="font-weight-normal"><?php echo Helper::key_display('list_storage_unit',$financialaffairs_info)?></span></label>
		</div>
		<?php
		$list_storage_unit_data=[
			'storage_facility'=>"Name and Address of Storage Facility",
			'access_box_facility'=>'Name and Address of Anyone With Access to Box or Depository',
			'contents'=>'Description of Contents',
			'still_have_storage_unit'=>'Do You Still Have It?',
		];
		?>
		<div class="col-md-12">
			<label class="font-weight-bold py-2">List any storage unit or place other than your home in which you have stored property within the past 1 year.
			<span class="font-weight-normal"><?php echo Helper::key_display('other_storage_unit',$financialaffairs_info)?></span></label>
		</div>
		<?php
		$other_storage_unit_data=[
			'storage_facility'=>"Name and Address of Storage Facility",
			'access_box'=>'Name and Address of Anyone With Access to Box or Depository',
			'contents'=>'Description of Contents',
			'still_have_storage_unit'=>'Do You Still Have It?',
		];
		?>
		<div class="col-md-12">
			<label class="font-weight-bold py-2">List all property that you hold or control that is owned by someone else.
			<span class="font-weight-normal"><?php echo Helper::key_display('list_property_you_hold',$financialaffairs_info)?></span></label>
		</div>
		<?php
		
		$list_property_you_hold_data=[
			'owner_address'=>"Name and Address of Owner",
			'property_location'=>'Location of Propery',
			'property_desc'=>'Description of Property',
			'property_value'=>'Value',
		];
		?>
		
			<div class="col-md-12">
			<label class="font-weight-bold py-2">List every site for which you received notice by a governmental unit that you may be liable under or in violation of an environmental law. Include the name and address of the governmental unit, the date of the notice, and, if known, the environmental law.
Environmental law means any federal, state, or local statue or regulation regulating pollution, contamination, releases of hazardous or toxic substances, wastes or material into the air, land, soil surface water, ground water, or other medium, including, statutes or regulations controlling the cleanup of these substances, wastes, or material.
Site means any location, facility, or property as defined under any environmental law, whether you own, operate, or utilize it or used to own, operate, or utilize it, including disposal sites.
Hazardous material means anything an environmental law defines as a hazardous waste, hazardous substance, toxic substance, hazardous material, pollutant, or contaminant or similar term.
			<span class="font-weight-normal"><?php echo Helper::key_display('list_noticeby_gov',$financialaffairs_info)?></span></label>
		</div>
		<?php
		$list_noticeby_gov_data=[
			'site_address'=>"Site Name and Address",
			'governmental_unit_address'=>'Name and Address of Governmental Unit',
			'environmental_law'=>'Environmental Law, If You Know It',
			'notice_date'=>'Date of Notice',
		];
		?>
		<div class="col-md-12">
			<label class="font-weight-bold py-2">List the name and address of every site for which you have notified a governmental unit of a hazardous material release. Include the name and address of the governmental unit to which the notice was sent, the date of the notice, and, if know, the environment law.
			<span class="font-weight-normal"><?php echo Helper::key_display('list_environment_law',$financialaffairs_info)?></span></label>
		</div>
		<?php
		$list_environment_law_data=[
			'site_address'=>"Site Name and Address",
			'governmental_unit_address'=>'Name and Address of Governmental Unit',
			'notice_date'=>'Date of Notice',
			'environment_law_know'=>'Environmental Law, If You Know It',
		];
		?>
		<div class="col-md-12">
			<label class="font-weight-bold py-2">List the name and address of every site for which you have notified a governmental unit of a hazardous material release. Include the name and address of the governmental unit to which the notice was sent, the date of the notice, and, if know, the environment law.
			<span class="font-weight-normal"><?php echo Helper::key_display('list_environment_law',$financialaffairs_info)?></span></label>
		</div>
		<?php
		$list_environment_law_data=[
			'site_address'=>"Site Name and Address",
			'governmental_unit_address'=>'Name and Address of Governmental Unit',
			'notice_date'=>'Date of Notice',
			'environment_law_know'=>'Environmental Law, If You Know It',
		];
		?>
		<div class="col-md-12">
			<label class="font-weight-bold py-2">List all judicial or administrative proceedings, including settlements and orders, under any environmental law to which you have been a party. Include the case title and the case number, the court or agency, the nature of the case, and the status.
			<span class="font-weight-normal"><?php echo Helper::key_display('list_judicial_proceedings',$financialaffairs_info)?></span></label>
		</div>
		<?php
		$list_judicial_proceedings_data=[
			'case_number'=>"Case Title and Case Number",
			'agency_address'=>'Name and Address of Court or Agency',
			'nature_case'=>'Nature of the Case',
		];
		?>
		
		<div class="col-md-12">
			<?php 
			$value_data="";
			if(!empty($financialaffairs_info["employer_identification"])){
				if($financialaffairs_info['employer_identification']==1){
					$value_data='A sole proprietor orself-employed in a trade; profession; or other activity;either full-time or part-time';
				}else if($financialaffairs_info['employer_identification']==2){
					$value_data='A member of alimited liability company(LLC) or limited liability partnership (LLP)';
				}
				else if($financialaffairs_info['employer_identification']==3){
					$value_data='A partner in apartnership';
				}else if($financialaffairs_info['employer_identification']==4){
					$value_data='An officer;director; or managing executive of a corporation';
				}
				else if($financialaffairs_info['employer_identification']==5){
					$value_data='An owner ofat least 5% of the voting or equity securities of acorporation';
				}
				else{
					$value_data="";
				}
			}
				
				?>
			<label class="font-weight-bold py-2">List the name and address, nature of business, name of accountant or bookkeeper, Employer Identification Number (EIN), and dates of operation of every business you owned or with which you had any of the following connections within the past 4 years.
			<span class="font-weight-normal"><?php echo @$value_data?></span></label>
		</div>
		<div class="col-md-12">
			<label class="font-weight-bold py-2">&nbsp;
			<span class="font-weight-normal"><?php echo Helper::key_display('list_nature_business',$financialaffairs_info)?></span></label>
		</div>
		<?php
		$list_nature_business_data=[
			'business_address'=>"Business Name and Address",
			'business_nature'=>'Nature of Business',
			'business_accountant'=>'Name of Accountant or Bookkeeper',
			'eiin'=>'Employer Identification Number (EIIN)',
			'operation_date'=>'Beginning and End Dates of Operation',
		];
		?>
		<div class="col-md-12">
			<label class="font-weight-bold py-2">List all financial institutions, creditors, or other parties to which you gave a financial statement about your business within the past 2 years
			<span class="font-weight-normal"><?php echo Helper::key_display('list_financial_institutions',$financialaffairs_info)?></span></label>
		</div>
		<?php
		$list_financial_institutions_data=[
			'address_name'=>"Name and Address",
			'date_issued'=>'Date Issued',			
		];
		?>
		
		
	</div>
</div>
<hr>