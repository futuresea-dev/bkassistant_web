<div class="row mt-3">
    <div class="col-md-12">
        <p class="section-part-title"><span class="text-c-blue"> Joint Debtor's (Spouse's) Current Monthly Income Calculation </span></p>
    </div>
</div>
<!-- Debuts's Gross wages, salary, tips, bonuses, overtime, commissions -->
<div class="row">
    <div class="col-md-12">
        <label>
            Fill in your monthly income for each of the below categories. (if asked for month to month in a category “Month 1” is last month.)
        </label>
        <div class="form-group pt-3">
            <label class="d-block">Gross wages, salary, tips, bonuses, overtime,commissions.<i class="text-c-blue">(W-2 Income)</i></label>
            <div class="d-inline radio-primary">
                <input type="radio" id="Joint-gross-wages-no" name="joints_debtor_gross_wages" onchange="GetJointGrossWages('no');" value="0" required <?php echo Helper::validate_key_toggle('joints_debtor_gross_wages',$debtorspousemonthlyincome,0);?> />
                <label for="Joint-gross-wages-no" class="cr">No</label>
            </div>
            <div class="d-inline radio-primary">
                <input id="Joint-gross-wages-yes" type="radio" name="joints_debtor_gross_wages" onchange="GetJointGrossWages('yes');" value="1" required <?php echo Helper::validate_key_toggle('joints_debtor_gross_wages',$debtorspousemonthlyincome,1);?> />
                <label for="Joint-gross-wages-yes" class="cr">Yes</label>
            </div>
        </div>
    </div>
    <div class="col-md-12 <?php echo Helper::key_hide_show_v('joints_debtor_gross_wages',$debtorspousemonthlyincome);?>" id="Joint-gross-wages">
		<div class="row">
		<div class="col-md-12">
			 <div class="form-group">
				<label class="d-block">How often do you get paid?</label>
				<div class="d-inline radio-primary">
					<input type="radio" id="joints_often_get_paid_weekly" name="joints_often_get_paid" required  value="1" <?php echo Helper::validate_key_toggle('joints_often_get_paid',$debtorspousemonthlyincome,1);?>>
					<label for="joints_often_get_paid_weekly" class="cr"> once a week</label>
				</div>
				<div class="d-inline radio-primary">
					<input type="radio" id="joints_often_get_paid_twoweekly" name="joints_often_get_paid" required  value="2" <?php echo Helper::validate_key_toggle('joints_often_get_paid',$debtorspousemonthlyincome,2);?>>
					<label for="joints_often_get_paid_twoweekly" class="cr"> every two week</label>
				</div>
				<div class="d-inline radio-primary">
					<input type="radio" id="joints_often_get_paid_twicemonth" name="joints_often_get_paid" required  value="3" <?php echo Helper::validate_key_toggle('joints_often_get_paid',$debtorspousemonthlyincome,3);?>>
					<label for="joints_often_get_paid_twicemonth" class="cr"> twice a month</label>
				</div>
				<div class="d-inline radio-primary">
					<input type="radio" id="joints_often_get_paid_oncemonth" name="joints_often_get_paid" required  value="4" <?php echo Helper::validate_key_toggle('joints_often_get_paid',$debtorspousemonthlyincome,4);?>>
					<label for="joints_often_get_paid_oncemonth" class="cr"> once a month</label>
				</div>
				<div class="d-inline radio-primary">
					<input type="radio" id="joints_often_get_paid_other" name="joints_often_get_paid" required  value="5" <?php echo Helper::validate_key_toggle('joints_often_get_paid',$debtorspousemonthlyincome,5);?>>
					<label for="joints_often_get_paid_other" class="cr"> Other</label>
				</div>
			</div>
		</div>
		</div>
		<label>Your gross income is the amount before any deductions such as taxes, insurance etc.</label>
        <div class="row">
            <?php for($i=1;$i<=1;$i++){?>
            <div class="col-md-7">
                <div class="form-group">
                    <label class="d-block">Month <?php //echo $i;?> <?php if($i==1){?>(last month)<?php }?><?php if($i==2){?><?php }?> </label>
					<div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text">$</span>
	                    </div>
						<input type="text" class="form-control required" name="joints_debtor_gross_wages_month[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('joints_debtor_gross_wages_month',$debtorspousemonthlyincome,$i);?>"/>
					</div>
                </div>
            </div>
			<?php }?>
        </div>
		<div class="row">
			
			<div class="col-md-7">
                <div class="form-group">
                    <label class="d-block">What is your estimated overtime pay per month?</label>
                    <div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text" id="basic-addon1">$</span>
	                   	</div>
                    	<input type="number" class="form-control required" name="joints_overtime_per_month" value="<?php echo Helper::validate_key_value('joints_overtime_per_month',$debtorspousemonthlyincome);?>"/>
                    </div>
                </div>
            </div>
			<div class="col-md-7">
                <div class="form-group">
                    <label class="d-block">How much is taken out of each paycheck for Taxes <i class="text-c-blue">(Such as Fed. State Income Taxes, Medicare, Social Security etc)</i> ?</label>
                    <div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text" id="basic-addon1">$</span>
	                    </div>
                    	<input type="number" class="form-control required" name="joints_paycheck_for_security" value="<?php echo Helper::validate_key_value('joints_paycheck_for_security',$debtorspousemonthlyincome);?>"/>
                    </div>
                </div>
            </div>
			<div class="col-md-7">
                <div class="form-group">
                    <label class="d-block">How much taken out of each paycheck for Mandatory Contribution to Retirement ?</label>
                    <div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text" id="basic-addon1">$</span>
	                    </div>
                    	<input type="number" class="form-control required" name="joints_paycheck_mandatory_contribution" value="<?php echo Helper::validate_key_value('joints_paycheck_mandatory_contribution',$debtorspousemonthlyincome);?>"/>
                    </div>
                </div>
            </div>
			<div class="col-md-7">
                <div class="form-group">
                    <label class="d-block">How much taken out of each paycheck for Voluntary Contribution to Retirement ?</label>
                    <div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text" id="basic-addon1">$</span>
	                    </div>
                    	<input type="number" class="form-control required" name="joints_paycheck_voluntary_contribution" value="<?php echo Helper::validate_key_value('joints_paycheck_voluntary_contribution',$debtorspousemonthlyincome);?>"/>
                    </div>
                </div>
            </div>
			<div class="col-md-7">
                <div class="form-group">
	                    <label class="d-block">How much taken out of each paycheck for Required Repayment of Retirement and Loan ?</label>
	                    <div class="input-group">
		                    <div class="input-group-prepend">
		                        <span class="input-group-text" id="basic-addon1">$</span>
		                    </div>
		                    <input type="number" class="form-control required" name="joints_paycheck_required_repayment" value="<?php echo Helper::validate_key_value('joints_paycheck_required_repayment',$debtorspousemonthlyincome);?>"/>
	                	</div>
                </div>
            </div>
			<div class="col-md-7">
                <div class="form-group">
                    <label class="d-block">How much is deducted for insurance? <i class="text-c-blue"> (Health, vision, dental, etc.)</i></label>
                    <div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text" id="basic-addon1">$</span>
	                	</div>
                    	<input type="number" class="form-control required" name="joints_automatically_deduction_insurance" value="<?php echo Helper::validate_key_value('joints_automatically_deduction_insurance',$debtorspousemonthlyincome);?>"/>
                    </div>
                </div>
            </div>
			<div class="col-md-7">
                <div class="form-group">
                    <label class="d-block">How much taken out for Domestic Support Obligations ?</label>
                    <div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text" id="basic-addon1">$</span>
	                    </div>
                    	<input type="number" class="form-control required" name="joints_domestic_support_obligations" value="<?php echo Helper::validate_key_value('joints_domestic_support_obligations',$debtorspousemonthlyincome);?>"/>
                    </div>
                </div>
            </div>
			<div class="col-md-7">
                <div class="form-group">
                    <label class="d-block">How much is deducted for union dues ?</label>
                    <div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text" id="basic-addon1">$</span>
	                    </div>
                    	<input type="number" class="form-control required" name="joints_union_dues_deducted" value="<?php echo Helper::validate_key_value('joints_union_dues_deducted',$debtorspousemonthlyincome);?>"/>
                    </div>
                </div>
            </div>
			<div class="col-md-7">
                <div class="form-group s-d">
                    <label class="d-block">Other deductions ?</label>
                    <div class="d-inline radio-primary">
                        <input type="radio" id="otherDeductions22-no" name="otherDeductions22" onchange="GetotherDeductions22('no');" value="0" required <?php echo Helper::validate_key_toggle('otherDeductions22',$debtorspousemonthlyincome,0);?> />
                        <label for="otherDeductions22-no" class="cr">No</label>
                    </div>
                    <div class="d-inline radio-primary">
                        <input id="otherDeductions22-yes" type="radio" name="otherDeductions22" onchange="GetotherDeductions22('yes');" value="1" required <?php echo Helper::validate_key_toggle('otherDeductions22',$debtorspousemonthlyincome,1);?> />
                        <label for="otherDeductions22-yes" class="cr">Yes</label>
                    </div>
                    <div class="<?php echo Helper::key_hide_show_v('otherDeductions22',$debtorspousemonthlyincome);?>" id="otherDeductions22_data">
                        <label class="d-block font-small">Specify deduction</label>
                        <div class="input-group">
                            <input type="text" class="form-control required" name="" value=""/>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">$</span>
                            </div>
                            <input type="number" class="form-control required" name="joints_other_deduction" value="<?php echo Helper::validate_key_value('joints_other_deduction',$debtorspousemonthlyincome);?>"/>
                        </div>
                    </div>
                </div>
            </div>
		 </div>
    </div>
</div>
<!--Debuts Income from operation of business: a. Gross Income - b. Expenses = c. Net Income -->
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label class="d-block">Income from operation of business: a. Gross Income - b. Expenses = c. Net Income. <i class="text-c-blue">(Self Employment Income)</i></label>
            <div class="d-inline radio-primary">
                <input type="radio" id="joint_operation_business-no" name="joints_operation_business" onchange="GetJointOperationBusiness('no');" value="0" required <?php echo Helper::validate_key_toggle('joints_operation_business',$debtorspousemonthlyincome,0);?> />
                <label for="joint_operation_business-no" class="cr">No</label>
            </div>
            <div class="d-inline radio-primary">
                <input id="joint_operation_business-yes" type="radio" name="joints_operation_business" onchange="GetJointOperationBusiness('yes');" value="1" required <?php echo Helper::validate_key_toggle('joints_operation_business',$debtorspousemonthlyincome,1);?> />
                <label for="joint_operation_business-yes" class="cr">Yes</label>
            </div>
        </div>
    </div>
    <div class="col-md-12 <?php echo Helper::key_hide_show_v('joints_operation_business',$debtorspousemonthlyincome);?>" id="joint_operation_business">
        <div class="row">
            <?php for($i=1;$i<=6;$i++){?>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="d-block">Month <?php echo $i;?> <?php if($i==1){?>(last month)<?php }?><?php if($i==2){?><?php }?> </label>
					<div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text">$</span>
	                    </div>
						<input type="text" class="form-control required" name="joints_operation_business_month[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('joints_operation_business_month',$debtorspousemonthlyincome,$i);?>"/>
					</div>
                </div>
            </div>
			<?php }?>
        </div>
    </div>
</div>
<!--Debuts Rent and other real: a. Gross Income - b. Expenses = c. Net Income -->
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label class="d-block">Rent and other real property income: a. Gross Income - b. Expenses = c. Net Income.<i class="text-c-blue">(Rental Income)</i></label>
            <div class="d-inline radio-primary">
                <input type="radio" id="joint_rent_real_property-no" name="joints_rent_real_property" onchange="GetJointRentalRealProperty('no');" value="0" required <?php echo Helper::validate_key_toggle('joints_rent_real_property',$debtorspousemonthlyincome,0);?> />
                <label for="joint_rent_real_property-no" class="cr">No</label>
            </div>
            <div class="d-inline radio-primary">
                <input id="joint_rent_real_property-yes" type="radio" name="joints_rent_real_property" onchange="GetJointRentalRealProperty('yes');" value="1" required <?php echo Helper::validate_key_toggle('joints_rent_real_property',$debtorspousemonthlyincome,1);?> />
                <label for="joint_rent_real_property-yes" class="cr">Yes</label>
            </div>
        </div>
    </div>
    <div class="col-md-12 <?php echo Helper::key_hide_show_v('joints_rent_real_property',$debtorspousemonthlyincome);?>" id="joint_rent_real_property">
        <div class="row">
            <?php for($i=1;$i<=6;$i++){?>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="d-block">Month <?php echo $i;?> <?php if($i==1){?>(last month)<?php }?><?php if($i==2){?><?php }?> </label>
					<div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text">$</span>
	                    </div>
						<input type="text" class="form-control required" name="joints_rent_real_property_month[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('joints_rent_real_property_month',$debtorspousemonthlyincome,$i);?>"/>
					</div>
                </div>
            </div>
			<?php }?>
        </div>
    </div>
</div>
<!--Interest, dividends, and royalties.-->
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label class="d-block">Interest, dividends, and royalties</label>
            <div class="d-inline radio-primary">
                <input type="radio" id="joint_royalties-no" name="joints_royalties" onchange="GetJointRoyalties('no');" value="0" required <?php echo Helper::validate_key_toggle('joints_royalties',$debtorspousemonthlyincome,0);?> />
                <label for="joint_royalties-no" class="cr">No</label>
            </div>
            <div class="d-inline radio-primary">
                <input id="joints_royalties-yes" type="radio" name="joints_royalties" onchange="GetJointRoyalties('yes');" value="1" required <?php echo Helper::validate_key_toggle('joints_royalties',$debtorspousemonthlyincome,1);?> />
                <label for="joints_royalties-yes" class="cr">Yes</label>
            </div>
        </div>
    </div>
    <div class="col-md-12 <?php echo Helper::key_hide_show_v('joints_royalties',$debtorspousemonthlyincome);?>" id="joints_royalties">
        <div class="row">
            <?php for($i=1;$i<=6;$i++){?>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="d-block">Month <?php echo $i;?> <?php if($i==1){?>(last month)<?php }?><?php if($i==2){?><?php }?> </label>
					<div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text">$</span>
	                    </div>
						<input type="text" class="form-control required" name="joints_royalties_month[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('joints_royalties_month',$debtorspousemonthlyincome,$i);?>"/>
					</div>
                </div>
            </div>
			<?php }?>
        </div>
    </div>
</div>
<!--Pension and retirement income (NOT Social Security)..-->

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label class="d-block">Pension and retirement income (NOT Social Security) <i class="text-c-blue">(Retirement Income)</i></label>
            <div class="d-inline radio-primary">
                <input type="radio" id="Joints_retirement_income-no" name="joints_retirement_income" onchange="GetJointretiRementIncome('no');" value="0" required <?php echo Helper::validate_key_toggle('joints_retirement_income',$debtorspousemonthlyincome,0);?> />
                <label for="Joints_retirement_income-no" class="cr">No</label>
            </div>
            <div class="d-inline radio-primary">
                <input id="Joints_retirement_income-yes" type="radio" name="joints_retirement_income" onchange="GetJointretiRementIncome('yes');" value="1" required <?php echo Helper::validate_key_toggle('joints_retirement_income',$debtorspousemonthlyincome,1);?> />
                <label for="Joints_retirement_income-yes" class="cr">Yes</label>
            </div>
        </div>
    </div>
    <div class="col-md-7 <?php echo Helper::key_hide_show_v('joints_retirement_income',$debtorspousemonthlyincome);?>" id="joints_retirement_income">
        <div class="row">
            <?php for($i=1;$i<=1;$i++){?>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="d-block">Month <?php //echo $i;?> <?php if($i==1){?>(last month)<?php }?><?php if($i==2){?><?php }?> </label>
					<div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text">$</span>
	                    </div>
						<input type="number" class="form-control required" name="Joints_retirement_income_month1[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('Joints_retirement_income_month1',$debtorspousemonthlyincome,$i);?>"/>
					</div>
                </div>
            </div>
			<?php }?>
        </div>
    </div>
</div>
<!--Regular contributions from others to the household expenses, including child support..-->
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label class="d-block">Regular contributions from others to the household expenses, including child support</label>
            <div class="d-inline radio-primary">
                <input type="radio" id="joints_regular_contributions-no" name="joints_regular_contributions" onchange="GetJointRegularContributions('no');" value="0" required <?php echo Helper::validate_key_toggle('joints_regular_contributions',$debtorspousemonthlyincome,0);?> />
                <label for="joints_regular_contributions-no" class="cr">No</label>
            </div>
            <div class="d-inline radio-primary">
                <input id="joints_regular_contributions-yes" type="radio" name="joints_regular_contributions" onchange="GetJointRegularContributions('yes');" value="1" required <?php echo Helper::validate_key_toggle('joints_regular_contributions',$debtorspousemonthlyincome,1);?> />
                <label for="joints_regular_contributions-yes" class="cr">Yes</label>
            </div>
        </div>
    </div>
    <div class="col-md-12 <?php echo Helper::key_hide_show_v('joints_regular_contributions',$debtorspousemonthlyincome);?>" id="joints_regular_contributions">
        <div class="row">
           <?php for($i=1;$i<=6;$i++){?>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="d-block">Month <?php //echo $i;?> <?php if($i==1){?>(last month)<?php }?><?php if($i==2){?><?php }?> </label>
					<div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text">$</span>
	                    </div>
						<input type="text" class="form-control required" name="joints_regular_contributions_month[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('joints_regular_contributions_month',$debtorspousemonthlyincome,$i);?>"/>
					</div>
                </div>
            </div>
			<?php }?>
        </div>
    </div>
</div>
<!--Unemployment Compensation..-->
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label class="d-block">Unemployment Compensation</label>
            <div class="d-inline radio-primary">
                <input type="radio" id="joints_unemployment_compensation-no" name="joints_unemployment_compensation" onchange="GetJointUnemploymentCompensation('no');" value="0" required <?php echo Helper::validate_key_toggle('joints_unemployment_compensation',$debtorspousemonthlyincome,0);?> />
                <label for="joints_unemployment_compensation-no" class="cr">No</label>
            </div>
            <div class="d-inline radio-primary">
                <input id="joints_unemployment_compensation-yes" type="radio" name="joints_unemployment_compensation" onchange="GetJointUnemploymentCompensation('yes');" value="1" required <?php echo Helper::validate_key_toggle('joints_unemployment_compensation',$debtorspousemonthlyincome,1);?> />
                <label for="joints_unemployment_compensation-yes" class="cr">Yes</label>
            </div>
        </div>
    </div>
    <div class="col-md-12 <?php echo Helper::key_hide_show_v('joints_unemployment_compensation',$debtorspousemonthlyincome);?>" id="joints_unemployment_compensation">
        <div class="row">
           <?php for($i=1;$i<=6;$i++){?>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="d-block">Month <?php //echo $i;?> <?php if($i==1){?>(last month)<?php }?><?php if($i==2){?><?php }?> </label>
					<div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text">$</span>
	                    </div>
						<input type="text" class="form-control required" name="joints_unemployment_compensation_month[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('joints_unemployment_compensation_month',$debtorspousemonthlyincome,$i);?>"/>
					</div>
                </div>
            </div>
			<?php }?>
        </div>
    </div>
</div>
<!--Social Security income.-->
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label class="d-block">Social Security income. <i class="text-c-blue">(SSI Income)</i></label>
            <div class="d-inline radio-primary">
                <input type="radio" id="joints_social_security-no" name="joints_social_security" onchange="GetJointSocialIncome('no');" value="0" required <?php echo Helper::validate_key_toggle('joints_social_security',$debtorspousemonthlyincome,0);?> />
                <label for="joints_social_security-no" class="cr">No</label>
            </div>
            <div class="d-inline radio-primary">
                <input id="joints_social_security-yes" type="radio" name="joints_social_security" onchange="GetJointSocialIncome('yes');" value="1" required <?php echo Helper::validate_key_toggle('joints_social_security',$debtorspousemonthlyincome,1);?> />
                <label for="joints_social_security-yes" class="cr">Yes</label>
            </div>
        </div>
    </div>
    <div class="col-md-7 <?php echo Helper::key_hide_show_v('joints_social_security',$debtorspousemonthlyincome);?>" id="joints_social_security">
        <div class="row">
           <?php for($i=1;$i<=1;$i++){?>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="d-block">Month <?php //echo $i;?> <?php if($i==1){?>(last month)<?php }?><?php if($i==2){?><?php }?> </label>
					<div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text">$</span>
	                    </div>
						<input type="text" class="form-control required" name="joints_social_security_month[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('joints_social_security_month',$debtorspousemonthlyincome,$i);?>"/>
					</div>
                </div>
            </div>
			<?php }?>
        </div>
    </div>
</div>
 

<!--Other sources not already mentioned.Describe:.-->

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label class="d-block">Other sources of income not already mentioned</label>
            <div class="d-inline radio-primary">
                <input type="radio" id="joints_other_sources-no" name="joints_other_sources" onchange="GetJointsOtherSource('no');" value="0" required <?php echo Helper::validate_key_toggle('joints_other_sources',$debtorspousemonthlyincome,0);?> />
                <label for="joints_other_sources-no" class="cr">No</label>
            </div>
            <div class="d-inline radio-primary">
                <input id="joints_other_sources-yes" type="radio" name="joints_other_sources" onchange="GetJointsOtherSource('yes');" value="1" required <?php echo Helper::validate_key_toggle('joints_other_sources',$debtorspousemonthlyincome,1);?> />
                <label for="joints_other_sources-yes" class="cr">Yes</label>
            </div>
        </div>
    </div>
    <div class="col-md-12 <?php echo Helper::key_hide_show_v('joints_other_sources',$debtorspousemonthlyincome);?>" id="joints_other_sources">
    <div class="row">
	<div class="col-md-7">
		<div class="form-group">
			<label class="d-block">Source of income</label>
			<div class="input-group">
				<input placeholder="Source of income" type="text" class="form-control" name="joints_other_sources_of_income" value="<?php echo Helper::validate_key_value('joints_other_sources_of_income',$debtorspousemonthlyincome);?>"/>
			</div>
		</div>
	</div>
</div>
    <div class="row">
            
           <?php for($i=1;$i<=6;$i++){?>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="d-block">Month <?php echo $i;?> <?php if($i==1){?>(last month)<?php }?><?php if($i==2){?><?php }?> </label>
					<div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text">$</span>
	                    </div>
						<input type="text" class="form-control required" name="joints_other_sources_month[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('joints_other_sources_month',$debtorspousemonthlyincome,$i);?>"/>
					</div>
                </div>
            </div>
			<?php }?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="next-part-btn text-right">
		<?php if(!empty($can_editable)){?>
            <?php if(!empty($debtorspousemonthlyincome['id'])){?>
			<input type="hidden" class="property_vehicle_ids"  name="id" value="<?php echo Helper::validate_value($debtorspousemonthlyincome['id']);?>">
			<a href="{{route('client_income_step2')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
			 <button class="btn btn-primary shadow-2 mb-4" type="submit">Save<i class="feather icon-chevron-right mr-0"></i></button>
		<?php }else{?>
            <button class="btn btn-primary shadow-2 mb-4" type="submit">Save & Next Part <i class="feather icon-chevron-right mr-0"></i></button>
		<?php }?>
		<?php }else{?>
			<a href="{{route('client_income_step2')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
			<a href="{{route('client_expenses')}}" class="btn btn-primary shadow-2 mb-4">Submit</a>
		<?php }?>
        </div>
    </div>
</div>
