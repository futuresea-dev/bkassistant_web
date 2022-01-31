<?php
// dump($expenses_info);
?>
<div class="part-a px-3">
	<span class="section-title font-weight-bold font-lg-18 ">Debtor's Employer Information.</span>
	<p>Please list all dependents of you and your spouse with their age and relationship to you (if applicable).</p>
	<div class="row">
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Do you own this type of property?: <span
					class="font-weight-normal"><?php echo Helper::key_display('type_property',$expenses_info)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Please list all dependents of you and your spouse with their age and relationship to you (if applicable):
				<span class="font-weight-normal"><?php echo Helper::key_display('any_dependents',$expenses_info)?></span></label>

		</div>
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('any_dependents',$expenses_info)?>">
			<?php if(!empty($expenses_info['dependent_relationship'])){?>
			<?php for($i=0;$i<count($expenses_info['dependent_relationship']);$i++){?>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">Relationship: <span
						class="font-weight-normal">{{$expenses_info['dependent_relationship'][$i]}}</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">Age: <span
						class="font-weight-normal">{{$expenses_info['dependent_age'][$i]}}</span></label>
			</div>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">Who does the dependent live with?: <span
						class="font-weight-normal">{{$expenses_info['dependent_live_with'][$i]}}</span></label>
			</div>
			<?php }}?>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Do you and your spouse live separately and maintain separate households?: <span
					class="font-weight-normal"><?php echo Helper::key_display('live_separately',$expenses_info)?></span></label>
		</div>
		<div class="col-md-12">
			<span class="section-title font-weight-bold font-lg-12 ">Indicate how much you pay for each item each month:</span>
		</div>
		<div class="col-md-12">
			<label class="font-weight-bold py-2">Primary rent or home mortgage: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('rent_home_mortage',$expenses_info)?></span></label>
		</div>
		<!--No hide show section-->
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Does that amount include real estate taxes?: <span
					class="font-weight-normal"><?php echo Helper::key_display('real_estate_taxes',$expenses_info)?></span></label>
		</div>
		<div class="row col-md-6 sec_merger <?php echo Helper::key_hide_show_v2('real_estate_taxes',$expenses_info)?>">
			<div class="col-md-6">
				<label class="font-weight-bold py-2">how much do you pay?: <span
						class="font-weight-normal"><?php echo Helper::validate_key_value('estate_taxes_pay',$expenses_info)?></span></label>
			</div>
		</div>

		<div class="col-md-6">
			<label class="font-weight-bold py-2">Does that amount include property, homeowner's, or renter's insurance?: <span
					class="font-weight-normal"><?php echo Helper::key_display('amount_include_property',$expenses_info)?></span></label>
		</div>
		<div class="row col-md-6 sec_merger <?php echo Helper::key_hide_show_v2('amount_include_property',$expenses_info)?>">
			<div class="col-md-6">
				<label class="font-weight-bold py-2">how much do you pay?: <span
						class="font-weight-normal"><?php echo Helper::validate_key_value('amount_include_property_pay',$expenses_info)?></span></label>
			</div>
		</div>

		<div class="col-md-6">
			<label class="font-weight-bold py-2">Does that amount include any home maintenance, repair, or upkeep expenses?: <span
					class="font-weight-normal"><?php echo Helper::key_display('amount_include_home',$expenses_info)?></span></label>
		</div>
		<div class="row col-md-6 sec_merger <?php echo Helper::key_hide_show_v2('amount_include_home',$expenses_info)?>">
			<div class="col-md-6">
				<label class="font-weight-bold py-2">how much do you pay?: <span
						class="font-weight-normal"><?php echo Helper::validate_key_value('amount_include_home_pay',$expenses_info)?></span></label>
			</div>
		</div>

		<div class="col-md-6">
			<label class="font-weight-bold py-2">Does that amount include any homeowner's association or condominium dues?: <span
					class="font-weight-normal"><?php echo Helper::key_display('amount_include_homeowner',$expenses_info)?></span></label>
		</div>
		<div class="row col-md-6 sec_merger <?php echo Helper::key_hide_show_v2('amount_include_homeowner',$expenses_info)?>">
			<div class="col-md-6">
				<label class="font-weight-bold py-2">how much do you pay?: <span
						class="font-weight-normal"><?php echo Helper::validate_key_value('amount_include_homeowner_pay',$expenses_info)?></span></label>
			</div>
		</div>

		<div class="col-md-6">
			<label class="font-weight-bold py-2">Are there additional mortgage payments?: <span
					class="font-weight-normal"><?php echo Helper::key_display('mortgage_payments',$expenses_info)?></span></label>
		</div>
		<div class="row col-md-6 sec_merger <?php echo Helper::key_hide_show_v2('mortgage_payments',$expenses_info)?>">
			<div class="col-md-6">
				<label class="font-weight-bold py-2">how much do you pay?: <span
						class="font-weight-normal"><?php echo Helper::validate_key_value('mortgage_payments_pay',$expenses_info)?></span></label>
			</div>
		</div>
		<div class="col-md-12">
			<span class="section-title font-weight-bold font-lg-12 ">Utilities :</span>
		</div>
		<?php
			$utilities=["a. Electricity and heating fuel","b. Water and sewer","c. Telephone service/long distance"];
		?>
		<?php
		if(!empty($expenses_info['utilities'])){
		$utilities_info=array_chunk($expenses_info['utilities'],2);
		$j=0;foreach($utilities_info as $key=>$utilitval){?>
		<div class="col-md-12">
			<b>{{$utilities[$j]}}</b>
		</div>
		<?php if(!empty($utilitval)){
		foreach($utilitval as $key=>$val){?>
		<div class="col-md-6">
			<label class="font-weight-bold py-2"><span
						class="font-weight-normal"><?php echo $val;?></span></label>
		</div>
		<?php }}$j++;}?>
		<div class="col-md-12">
			<label class="font-weight-bold py-2">d. Do you have any other utility bills?: <span
					class="font-weight-normal"><?php echo Helper::key_display('utility_bills',$expenses_info)?></span></label>
		</div>
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('utility_bills',$expenses_info)?>">
		<?php if(!empty($expenses_info['monthly_utilities_bills'])){
			if(is_array($expenses_info['monthly_utilities_bills'])){
			for($i=0;$i<count(@$expenses_info['monthly_utilities_bills']);$i++){?>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Describe and enter monthly amount below: <span
						class="font-weight-normal"><?php echo @$expenses_info['monthly_utilities_bills'][$i];?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal"><?php echo @$expenses_info['monthly_utilities_value'][$i];?></span></label>
			</div>
		<?php }} else{?>

			<div class="col-md-6">
				<label class="font-weight-bold py-2">Describe and enter monthly amount below: <span
						class="font-weight-normal"><?php echo Helper::current($expenses_info['monthly_utilities_bills']);?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal"><?php echo Helper::current(@$expenses_info['monthly_utilities_value']);?></span></label>
			</div>

		<?php }}}?>
		</div>
		<?php
			$food_housekeeping=[
						"food_housekeeping"=>"Food and housekeeping supplies",
						"childcare"=>"Childcare and Children Education Costs",
						"laundry"=>"Clothing, laundry, and dry cleaning",
						"personal_care"=>"Personal care products and services:",
						"medical_dental"=>"Medical and dental expenses:",
						"transportation"=>"Transportation (do NOT include car payments):",
						"entertainment"=>"Recreation,entertainment, newspapers, magazines, and books:",
						"charitablet"=>"Charitable contributions and religious donations:",
						"life_insurance"=>"a. Life insurance",
						"health_insurance"=>"b. Health insurance",
						"auto_insurance"=>"c. Auto insurance"
			];
		?>
		<?php foreach($food_housekeeping as $key=>$housevalue){?>
		<div class="col-md-12">
				<p><b>{{$housevalue}}: </b></p>
			</div>
		<div class="col-md-6">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal"><?php echo Helper::validate_key_value($key.'_value',$expenses_info)?></span></label>
		</div>
		<div class="col-md-6">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal"><?php echo Helper::validate_key_value($key.'_price',$expenses_info)?></span></label>
		</div>
		<?php }?>
		<?php
			$food_housekeeping2=[
						"other_insurance"=>"d. Other insurance(describe and list monthly amount):",
						"taxbills"=>"Tax bills NOT deducted from wages or included in home mortgage payments or other real estate property expenses:",
						"installmentpayments"=>"Installment payments for car, furniture, etc. (Describe):",
			];
			foreach($food_housekeeping2 as $key=>$housevalue){
		?>
		<?php if(!empty($expenses_info[$key.'_value'])){?>
			<div class="col-md-12">
				<p><b>{{$housevalue}}: </b></p>
			</div>
			<?php
			//dd($expenses_info[$key.'_value']);
			if(is_array($expenses_info[$key.'_value'])){
			for($i=0;$i<count($expenses_info[$key.'_value']);$i++){?>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">&nbsp;<span
						class="font-weight-normal">{{$expenses_info[$key.'_value'][$i]}}</span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal">{{$expenses_info[$key.'_price'][$i]}}</span></label>
			</div>
		<?php }} else{ ?>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">&nbsp;<span
						class="font-weight-normal"><?php echo $expenses_info[$key.'_value']; ?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal"><?php echo $expenses_info[$key.'_price']; ?></span></label>
			</div>

		<?php } } ?>
	

	
	<?php }?>
		<?php
			$food_housekeeping3=[
						"alimony"=>"Alimony, maintenance and support paid to others:",
						"payments_dependents"=>"Payments for support of additional dependents not living at your home:"
			];
		?>
		<?php foreach($food_housekeeping3 as $key=>$housevalue){?>
		<div class="col-md-6">
				<label class="font-weight-bold py-2">{{$housevalue}}: <span
						class="font-weight-normal"><?php echo Helper::validate_key_value($key.'_value',$expenses_info)?></span></label>
		</div>
		<div class="col-md-6">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal"><?php echo Helper::validate_key_value($key.'_price',$expenses_info)?></span></label>
		</div>
		<?php }?>
		<?php
			$food_housekeeping4=[
						"other_real_estate_price"=>"a. Mortgage payment on other Real Estate Property:",
						"tax"=>"b. Taxes on other Real Estate Property",
						"rental_insurance_price"=>"c. Other Real Property, Homeowner's, or Renter's Insurance payments:",
						"home_maintenance_price"=>"d. Home maintenance (including repairs and upkeep):",
						"condominium_price"=>"e. Homeowner's association or condominium dues:",
			];
		?>
			<div class="col-md-12">
				<p><b>Other Real Estate Property expenses NOT included with Rent or Home Mortgage Property: </b></p>
			</div>
			<?php foreach($food_housekeeping4 as $key=>$housevalue){?>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">{{$housevalue}}<span
						class="font-weight-normal"><?php echo Helper::validate_key_loop_value('mortgage_property',$expenses_info,$key)?></span></label>
			</div>
		<?php }?>
		<?php
			$food_housekeeping5=[
					"additional_expenses"=>"Other expenses (Describe): (please see 'Additional Expenses' below before putting anything here:",
			];
			foreach($food_housekeeping5 as $key=>$housevalue){
		?>
		<?php if(!empty($expenses_info[$key.'_value'])){?>
			<div class="col-md-12">
				<p><b>{{$housevalue}} </b></p>
			</div>
			<?php for($i=0;$i<count($expenses_info[$key.'_value']);$i++){?>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">&nbsp;<span
						class="font-weight-normal">{{$expenses_info[$key.'_value'][$i]}}</span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal">{{$expenses_info[$key.'_price'][$i]}}</span></label>
			</div>
		<?php }}}?>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Describe any increase or decrease in expenses you expect to occur within the next year?<span
					class="font-weight-normal"><?php echo Helper::validate_key_value('increase_decrease_expenses',$expenses_info,$key)?></span></label>
		</div>
		<?php
			$food_housekeeping6=[
					"payroll_deductions"=>"Mandatory payroll deductions not already listed:",
					"court_payments"=>"Court ordered payments not already listed:",
			];
			foreach($food_housekeeping6 as $key=>$housevalue){
		?>
		<?php if(!empty($expenses_info[$key.'_value'])){?>
			<div class="col-md-12">
				<p><b>{{$housevalue}} </b></p>
			</div>
			<?php for($i=0;$i<count($expenses_info[$key.'_value']);$i++){?>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">&nbsp;<span
						class="font-weight-normal">{{$expenses_info[$key.'_value'][$i]}}</span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal">{{$expenses_info[$key.'_price'][$i]}}</span></label>
			</div>
		<?php }}}?>
		<?php
			$food_housekeeping7=[
						"education_employment"=>"Education for employment or for a physically or mentally challenged child:",
						"child_care"=>"Child care (baby sitting, day care, nursery & preschool, etc.):",
						"disability_insurance"=>"Disability Insurance (if not listed above):",
						"health_savings"=>"Health Savings Account:",
						"elderly"=>"Care for elderly, chronically ill or disabled family members:",
						"education_expense"=>"Education expense for your children under 18:",
			];
		?>
		<?php foreach($food_housekeeping7 as $key=>$housevalue){?>
		<div class="col-md-12">
				<p><b>{{$housevalue}} </b></p>
			</div>
		<div class="col-md-6">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal"><?php echo Helper::validate_key_value($key.'_value',$expenses_info)?></span></label>
		</div>
		<div class="col-md-6">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal"><?php echo Helper::validate_key_value($key.'_price',$expenses_info)?></span></label>
		</div>
		<?php }?>
		<?php
			$food_housekeeping8=[
					"non_mandatory_contributions"=>"Non-mandatory contributions to retirement accounts(including loan repayments) :",

			];
			foreach($food_housekeeping8 as $key=>$housevalue){
		?>
		<?php if(!empty($expenses_info[$key.'_value'])){?>
			<div class="col-md-12">
				<p><b>{{$housevalue}} </b></p>
			</div>
			<?php for($i=0;$i<count($expenses_info[$key.'_value']);$i++){?>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">&nbsp;<span
						class="font-weight-normal">{{$expenses_info[$key.'_value'][$i]}}</span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">&nbsp; <span
						class="font-weight-normal">{{$expenses_info[$key.'_price'][$i]}}</span></label>
			</div>
		<?php }}}?>

	</div><!--main row ending-->
</div>
<hr>



