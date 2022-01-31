<?php
$incomedebtoremployer=$income_info['incomedebtoremployer'];

$debtorspouseemployer=$income_info['debtorspouseemployer'];

$debtormonthlyincome=$income_info['debtormonthlyincome'];

$debtorspousemonthlyincome=$income_info['debtorspousemonthlyincome'];

// dump($debtorspousemonthlyincome);
// echo "<pre>";
// print_r($debtorspousemonthlyincome);
// die("===============");
?>
<div class="part-a px-3">
	<span class="section-title font-weight-bold font-lg-18 ">Debtor's Employer Information.</span>
	
	<div class="row">
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Name and Address of your employer: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('name_address_employer',$incomedebtoremployer)?></span></label>
		</div>		
		<div class="col-md-6">
			<label class="font-weight-bold py-2">How long have you been employed at this job:				
				<span class="font-weight-normal"><?php echo Helper::validate_key_value('employer_job_period',$incomedebtoremployer)?></span></label>

		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Occupation (please state job title or provide brief description): <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('employer_occupation',$incomedebtoremployer)?></span></label>
		</div>
		<div class="col-md-12">
			<span class="section-title font-weight-bold font-lg-12 ">Second employer ((if applicable):</span>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Name and Address of your Second employer: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('name_address_second_employer',$incomedebtoremployer)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">How long have you been employed at this second job: <span class="font-weight-normal">31
					<?php echo Helper::validate_key_value('second_employer_job_period',$incomedebtoremployer)?>
				</span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Occupation (please state job title or provide brief description): <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('second_employer_occupation',$incomedebtoremployer)?>
				</span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Notes: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('notes',$incomedebtoremployer)?>
				</span></label>
		</div>		
	</div>
</div>
<hr>
<div class="part-a px-3">
	<span class="section-title font-weight-bold font-lg-18 ">Joint Debtor's (Spouse's) Employer Information.</span>
	
	<div class="row">
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Name and Address of your spouse's employer: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('name_address_spouse_employer',$debtorspouseemployer)?></span></label>
		</div>		
		<div class="col-md-6">
			<label class="font-weight-bold py-2">How long has spouse been employed at this job:				
				<span class="font-weight-normal"><?php echo Helper::validate_key_value('spouse_employer_job_period',$debtorspouseemployer)?></span></label>

		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Occupation (please state job title or provide brief description): <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('spouse_employer_occupation',$debtorspouseemployer)?></span></label>
		</div>
		<div class="col-md-12">
			<span class="section-title font-weight-bold font-lg-12 ">Second employer ((if applicable):</span>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Name and Address of your spouse's Second employer: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('name_address_spouse_second_employer',$debtorspouseemployer)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">How long has spouse been employed at this second job: <span class="font-weight-normal">31
					<?php echo Helper::validate_key_value('spouse_second_employer_job_period',$debtorspouseemployer)?>
				</span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Occupation (please state job title or provide brief description): <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('spouse_second_employer_occupation',$debtorspouseemployer)?>
				</span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Notes: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('notes',$debtorspouseemployer)?>
				</span></label>
		</div>		
	</div>
</div>
<hr>
<?php
$monthly_income=["Gross wages, salary, tips, bonuses, overtime,commissions.",
"Your gross income is the amount before any deductions such as taxes,insurance etc",
"How often do you get paid?",
"What is your estimated overtime pay per month?",
"How much taken out of each paycheck for taxes,Medicare and social security ?",
"How much taken out of each paycheck for Mandatory Contribution to Retirement ?",
"How much taken out of each paycheck for Voluntary Contribution to Retirement ?",
"How much taken out of each paycheck for Required Repayment of Retirement and Loan ?",
"How much automatically deduction for insurance ?",
"How much taken out for Domestic Support Obligations ?",
"How much is deducted for union dues ?",
"Other deductions ?",
"Income from operation of business: a. Gross Income - b. Expenses = c. Net Income.","Rent and other real property income: a. Gross Income - b. Expenses = c. Net Income.","Interest, dividends, and royalties","Pension and retirement income (NOT Social Security)","Regular contributions from others to the household expenses, including child support","Unemployment Compensation","Social Security income.","Other sources not already mentioned.Describe"];
?>
<div class="part-a px-3">
	<span class="section-title font-weight-bold font-lg-18 ">Debtor's Current Monthly Income Calculation</span>
	<p>Fill in your monthly income for the categories below in the column labeled "Month 1." If your income for one of the below categories varies from month to month, complete the below form by entering in your income for all six months.</p>
	<?php if(!empty($debtormonthlyincome)){ 
	unset($debtormonthlyincome['id'],$debtormonthlyincome['client_id'],$debtormonthlyincome['created_on'],$debtormonthlyincome['updated_on']);		
	?>
	<div class="row">
		<?php //$j=0;$k=0;foreach($debtormonthlyincome as $key=>$debtormonthly){?>
		<?php 		
		//if(is_numeric($debtormonthly)){?>
		<div class="col-md-12">
			<label class="font-weight-bold py-2"><?php// if($j%2==0){ echo $monthly_income[$k];$k++;?> <?php }?>:
				<span class="font-weight-normal"><?php// echo Helper::key_display($key,$debtormonthlyincome)?></span></label>
		</div>
		<?php //}if(is_array($debtormonthly)){?>
		<?php// }?>
		<?php// }?>
	</div>
	<?php// }?>
</div>
<hr>
<?php
$monthly_income=["Gross wages, salary, tips, bonuses, overtime,commissions.","Income from operation of business: a. Gross Income - b. Expenses = c. Net Income.","Rent and other real property income: a. Gross Income - b. Expenses = c. Net Income.","Interest, dividends, and royalties","Pension and retirement income (NOT Social Security)","Regular contributions from others to the household expenses, including child support","Unemployment Compensation","Social Security income.","Other sources not already mentioned.Describe"];
?>
<div class="part-a px-3">
	<span class="section-title font-weight-bold font-lg-18 "> Joint Debtor's (Spouse's) Current Monthly Income Calculation</span>
	<p>Fill in your monthly income for the categories below in the column labeled "Month 1." If your income for one of the below categories varies from month to month, complete the below chart by entering in your income for all six months.</p>
	<?php if(!empty($debtorspousemonthlyincome)){ 
	unset($debtorspousemonthlyincome['id'],$debtorspousemonthlyincome['client_id'],$debtorspousemonthlyincome['created_on'],$debtorspousemonthlyincome['updated_on']);		
	?>
	<div class="row">
		<?php $j=0;$k=0;foreach($debtorspousemonthlyincome as $key=>$debtorspousemonthly){?>
		<?php 		
		if(is_numeric($debtorspousemonthly)){?>
		<div class="col-md-12">
			<label class="font-weight-bold py-2"><?php if($j%2==0){ echo @$monthly_income[$k];$k++;?> <?php }?>:
				<span class="font-weight-normal"><?php echo Helper::key_display($key,$debtorspousemonthlyincome)?></span></label>

		</div>
		<?php }if(is_array($debtorspousemonthly)){?>
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v(str_replace('_month','',$key),$debtorspousemonthlyincome)?>">
			<?php if(!empty($debtorspousemonthly)){?>
			<?php $i=1;foreach($debtorspousemonthly as $key=>$val){?>
			<div class="col-md-4">
				<label class="font-weight-bold py-2">Month <?php echo $i;?> <?php if($i==1){?>(last month)<?php }?><?php if($i==2){?>(2 months ago)<?php }?>: <span
						class="font-weight-normal">{{$val}}</span></label>
			</div>
			<?php $i++;}}?>
		</div>	
		<?php }?>
		<?php }?>
	</div>
	<?php }?>
</div>

