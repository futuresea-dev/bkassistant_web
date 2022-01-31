<?php
//dump($debts);
?>
<div class="part-a px-3">
	<span class="section-title font-weight-bold font-lg-18 ">Please list below all debts that you owe OR that creditors claim you owe that are secured by property.</span>
	<div class="col-md-12 sec_merger">
		<br>
		<span class="section-title font-weight-bold font-lg-12 ">Type of Debt</span>
	</div>
	<?php
		$home_loan_mortgage=[1=>"Home loan and/or mortgage",2=>"Car loans",3=>"Major credit card debts (Visa,Express,Master Card,Discover)",4=>"Major credit card debts (Visa,American Express,Master Card, Discover)",5=>"Department store credit card debts",6=>"Other credit card debts (gas cards,phone cards, etc.)",7=>"Cash advances",8=>"Unpaid taxes"];
	?>
	<div class="row">
		<div class="col-md-12">
			<label class="font-weight-bold py-2">Home loan and/or mortgage: <span
					class="font-weight-normal"><?php echo (!empty($debts['home_loan_mortgage']))?$home_loan_mortgage[$debts['home_loan_mortgage']]:"";?></span></label>
		</div>
		<div class="col-md-12">
			<span class="section-title font-weight-bold font-lg-18 ">Creditor Information</span>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Amount Owed (amount of claim):				
				<span class="font-weight-normal"><?php echo Helper::key_display('amount_own',$debts)?></span></label>

		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Account Number, if any: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('account_number',$debts)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Date/range of dates when debt was incurred: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('debt_incurred_date',$debts)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Creditor Name and Address: <span class="font-weight-normal">31
					<?php echo Helper::validate_key_value('creditor_name_addresss',$debts)?>
				</span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Contact person's name and address if different: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('contact_name_addresss',$debts)?>
				</span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Monthly payment amount: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('monthly_payment',$debts)?>
				</span></label>
		</div>
		<div class="col-md-12">
			<span class="section-title font-weight-bold font-lg-12 ">Person(s) Responsible/Codebtor:</span>
		</div>
		<div class="col-md-6">			
			<?php $owned_by=[1=>"You",2=>"Spouse",3=>"Joint",4=>"Other"];?>
			<label class="font-weight-bold py-2">Who owes the debt? :
				<span class="font-weight-normal"><?php echo (!empty($debts['debt_owned_by']))?$owned_by[$debts['debt_owned_by']]:"";?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Is there a codebtor or cosigner on this loan?:
				<span class="font-weight-normal"><?php echo Helper::key_display('codebtor',$debts)?></span></label>

		</div>
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('codebtor',$debts)?>">
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Please provide name and address:: <span
						class="font-weight-normal"><?php echo Helper::validate_key_value('codebtor_name_addresss',$debts)?></span></label>
			</div>
		</div>
		<div class="col-md-12">
			<span class="section-title font-weight-bold font-lg-12 ">Do you dispute the debt?:</span>
		</div>
		
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Is there a codebtor or cosigner on this loan?:
				<span class="font-weight-normal"><?php echo Helper::key_display('debt_dispute',$debts)?></span></label>
		</div>
	</div>
</div>
<hr>

