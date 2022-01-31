

<div class="row mt-3" xmlns="http://www.w3.org/1999/html">
    <div class="col-md-12">
        <p class="section-part-title"><span class="text-c-blue"> Debtor's Current Monthly Income Calculation </span></p>
    </div>
</div>
<!-- Debuts's Gross wages, salary, tips, bonuses, overtime, commissions -->
<div class="row">
    <div class="col-md-12">
        <label>
          Fill in your monthly income for each of the below categories. (if asked for month to month in a category “Month 1” is last month.)
        </label>
        <div class="form-group pt-3">
            <label class="d-block">Gross wages, salary, tips, bonuses, overtime,commissions. <span style="color:#012cae;font-size:15px">(W-2 Income)</span></label>
            <div class="d-inline radio-primary">
                <input type="radio" id="debtor-gross-wages-no" name="debtor_gross_wages" onchange="GetDebtorGrossWages('no');" value="0" required <?php echo Helper::validate_key_toggle('debtor_gross_wages',$debtormonthlyincome,0);?> />
                <label for="debtor-gross-wages-no" class="cr">No</label>
            </div>
            <div class="d-inline radio-primary">
                <input id="debtor-gross-wages-yes" type="radio" name="debtor_gross_wages" onchange="GetDebtorGrossWages('yes');" value="1" required <?php echo Helper::validate_key_toggle('debtor_gross_wages',$debtormonthlyincome,1);?> />
                <label for="debtor-gross-wages-yes" class="cr">Yes</label>
            </div>
        </div>
    </div>
    <div class="col-md-12 <?php echo Helper::key_hide_show_v('debtor_gross_wages',$debtormonthlyincome);?>" id="debtor-gross-wages">
		<div class="row">
		<div class="col-md-12">
			 <div class="form-group">
				<label class="d-block">How often do you get paid?</label>
				<div class="d-inline radio-primary">
					<input type="radio" id="often_get_paid_weekly" name="often_get_paid" required  value="1" <?php echo Helper::validate_key_toggle('often_get_paid',$debtormonthlyincome,1);?>>
					<label for="often_get_paid_weekly" class="cr"> once a week</label>
				</div>
				<div class="d-inline radio-primary">
					<input type="radio" id="often_get_paid_twoweekly" name="often_get_paid" required  value="2" <?php echo Helper::validate_key_toggle('often_get_paid',$debtormonthlyincome,2);?>>
					<label for="often_get_paid_twoweekly" class="cr"> every two week</label>
				</div>
				<div class="d-inline radio-primary">
					<input type="radio" id="often_get_paid_twicemonth" name="often_get_paid" required  value="3" <?php echo Helper::validate_key_toggle('often_get_paid',$debtormonthlyincome,3);?>>
					<label for="often_get_paid_twicemonth" class="cr"> twice a month</label>
				</div>
				<div class="d-inline radio-primary">
					<input type="radio" id="often_get_paid_oncemonth" name="often_get_paid" required  value="4" <?php echo Helper::validate_key_toggle('often_get_paid',$debtormonthlyincome,4);?>>
					<label for="often_get_paid_oncemonth" class="cr"> once a month</label>
				</div>
				<div class="d-inline radio-primary">
					<input type="radio" id="often_get_paid_other" name="often_get_paid" required  value="5" <?php echo Helper::validate_key_toggle('often_get_paid',$debtormonthlyincome,5);?>>
					<label for="often_get_paid_other" class="cr"> Other</label>
				</div>
			</div>
		</div>
		</div>
		<label>Your gross income is the amount before any deductions such as taxes, insurance etc.</label>
        <div class="row">
			<?php for($i=1;$i<=1;$i++){?>
            <div class="col-md-7">
                <div class="form-group">
                    <label class="d-block">Month <?php //echo $i;?> <?php if($i==1){?>(Average over last 6 Months)<?php }?><?php if($i==2){?>(2 months ago)<?php }?> </label>
                    <div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text" id="basic-addon1">$</span>
	                    </div>
	                    <input type="number" class="form-control required" name="debtor_gross_wages_month[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('debtor_gross_wages_month',$debtormonthlyincome,$i);?>"/>
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
                    	<input type="number" class="form-control required" name="overtime_per_month" value="<?php echo Helper::validate_key_value('overtime_per_month',$debtormonthlyincome);?>"/>
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
                    	<input type="number" class="form-control required" name="paycheck_for_security" value="<?php echo Helper::validate_key_value('paycheck_for_security',$debtormonthlyincome);?>"/>
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
                    	<input type="number" class="form-control required" name="paycheck_mandatory_contribution" value="<?php echo Helper::validate_key_value('paycheck_mandatory_contribution',$debtormonthlyincome);?>"/>
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
                    	<input type="number" class="form-control required" name="paycheck_voluntary_contribution" value="<?php echo Helper::validate_key_value('paycheck_voluntary_contribution',$debtormonthlyincome);?>"/>
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
		                    <input type="number" class="form-control required" name="paycheck_required_repayment" value="<?php echo Helper::validate_key_value('paycheck_required_repayment',$debtormonthlyincome);?>"/>
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
                    	<input type="number" class="form-control required" name="automatically_deduction_insurance" value="<?php echo Helper::validate_key_value('automatically_deduction_insurance',$debtormonthlyincome);?>"/>
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
                    	<input type="number" class="form-control required" name="domestic_support_obligations" value="<?php echo Helper::validate_key_value('domestic_support_obligations',$debtormonthlyincome);?>"/>
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
                    	<input type="number" class="form-control required" name="union_dues_deducted" value="<?php echo Helper::validate_key_value('union_dues_deducted',$debtormonthlyincome);?>"/>
                    </div>
                </div>
            </div>
			<div class="col-md-7">
                <div class="form-group s-d">
                    <label class="d-block">Other deductions ?</label>
                    <div class="d-inline radio-primary">
                        <input type="radio" id="otherDeductions11-no" name="otherDeductions11" onchange="GetotherDeductions11('no');" value="0" required <?php echo Helper::validate_key_toggle('otherDeductions11',$debtormonthlyincome,0);?> />
                        <label for="otherDeductions11-no" class="cr">No</label>
                    </div>
                    <div class="d-inline radio-primary">
                        <input id="otherDeductions11-yes" type="radio" name="otherDeductions11" onchange="GetotherDeductions11('yes');" value="1" required <?php echo Helper::validate_key_toggle('otherDeductions11',$debtormonthlyincome,1);?> />
                        <label for="otherDeductions11-yes" class="cr">Yes</label>
                    </div>
                    <div class="<?php echo Helper::key_hide_show_v('otherDeductions11',$debtormonthlyincome);?>" id="otherDeductions11_data">
                    <label class="d-block font-small">Specify deduction</label>
                    <div class="input-group">
	                    <input type="text" class="form-control required" name="" value=""/>
                    </div>
                    <div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text" id="basic-addon1">$</span>
	                    </div>
                    	<input type="number" class="form-control required" name="other_deduction" value="<?php echo Helper::validate_key_value('other_deduction',$debtormonthlyincome);?>"/>
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
            <label class="d-block">Income from operation of business: a. Gross Income - b. Expenses = c. Net Income. <span style="color:#012cae;font-size:15px">(Self Employment Income)</span></label>
            <div class="d-inline radio-primary">
                <input type="radio" id="operation_business-no" name="operation_business" onchange="GetDebtorOperationBusiness('no');" value="0" required <?php echo Helper::validate_key_toggle('operation_business',$debtormonthlyincome,0);?> />
                <label for="operation_business-no" class="cr">No</label>
            </div>
            <div class="d-inline radio-primary">
                <input id="operation_business-yes" type="radio" name="operation_business" onchange="GetDebtorOperationBusiness('yes');" value="1" required <?php echo Helper::validate_key_toggle('operation_business',$debtormonthlyincome,1);?> />
                <label for="operation_business-yes" class="cr">Yes</label>
            </div>
        </div>
    </div>
    <div class="col-md-12 <?php echo Helper::key_hide_show_v('operation_business',$debtormonthlyincome);?>" id="operation_business">
        <div class="row">
            <?php for($i=1;$i<=6;$i++){?>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="d-block">Month <?php echo $i;?> <?php if($i==1){?>(last month)<?php }?><?php if($i==2){?><?php }?> </label>
                    <div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text" id="basic-addon1">$</span>
	                    </div>
                    	<input type="number" class="form-control required" name="operation_business_month[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('operation_business_month',$debtormonthlyincome,$i);?>"/>
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
            <label class="d-block">Rent and other real property income: a. Gross Income - b. Expenses = c. Net Income.<span  style="color:#012cae;font-size:15px" class="text-c-blue"> (Rental Income)</span></label>
            <div class="d-inline radio-primary">
                <input type="radio" id="rent_real_property-no" name="rent_real_property" onchange="GetDebtorRentalRealProperty('no');" value="0" required <?php echo Helper::validate_key_toggle('rent_real_property',$debtormonthlyincome,0);?> />
                <label for="rent_real_property-no" class="cr">No</label>
            </div>
            <div class="d-inline radio-primary">
                <input id="rent_real_property-yes" type="radio" name="rent_real_property" onchange="GetDebtorRentalRealProperty('yes');" value="1" required <?php echo Helper::validate_key_toggle('rent_real_property',$debtormonthlyincome,1);?> />
                <label for="rent_real_property-yes" class="cr">Yes</label>
            </div>
        </div>
    </div>
    <div class="col-md-12 <?php echo Helper::key_hide_show_v('rent_real_property',$debtormonthlyincome);?>" id="rent_real_property">
        <div class="row">
           <?php for($i=1;$i<=6;$i++){?>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="d-block">Month <?php echo $i;?> <?php if($i==1){?>(last month)<?php }?><?php if($i==2){?><?php }?> </label>
                    <div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text" id="basic-addon1">$</span>
	                    </div>
                    	<input type="number" class="form-control required" name="rent_real_property_month[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('rent_real_property_month',$debtormonthlyincome,$i);?>"/>
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
                <input type="radio" id="royalties-no" name="royalties" onchange="GetDebtorRoyalties('no');" value="0" required <?php echo Helper::validate_key_toggle('royalties',$debtormonthlyincome,0);?> />
                <label for="royalties-no" class="cr">No</label>
            </div>
            <div class="d-inline radio-primary">
                <input id="royalties-yes" type="radio" name="royalties" onchange="GetDebtorRoyalties('yes');" value="1" required <?php echo Helper::validate_key_toggle('royalties',$debtormonthlyincome,1);?> />
                <label for="royalties-yes" class="cr">Yes</label>
            </div>
        </div>
    </div>
    <div class="col-md-12 <?php echo Helper::key_hide_show_v('royalties',$debtormonthlyincome);?>" id="royalties">
        <div class="row">
           <?php for($i=1;$i<=6;$i++){?>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="d-block">Month <?php echo $i;?> <?php if($i==1){?>(last month)<?php }?><?php if($i==2){?><?php }?> </label>
                    <div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text" id="basic-addon1">$</span>
	                    </div>
                    	<input type="number" class="form-control required" name="royalties_month[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('royalties_month',$debtormonthlyincome,$i);?>"/>
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
            <label class="d-block">Pension and retirement income (NOT Social Security)<span  style="color:#012cae;font-size:15px" class="text-c-blue"> (Retirement Income)</span></label>
            <div class="d-inline radio-primary">
                <input type="radio" id="retirement_income-no" name="retirement_income" onchange="GetDebtorretiRementIncome('no');" value="0" required <?php echo Helper::validate_key_toggle('retirement_income',$debtormonthlyincome,0);?> />
                <label for="retirement_income-no" class="cr">No</label>
            </div>
            <div class="d-inline radio-primary">
                <input id="retirement_income-yes" type="radio" name="retirement_income" onchange="GetDebtorretiRementIncome('yes');" value="1" required <?php echo Helper::validate_key_toggle('retirement_income',$debtormonthlyincome,1);?> />
                <label for="retirement_income-yes" class="cr">Yes</label>
            </div>
        </div>
    </div>
    <div class="col-md-7 <?php echo Helper::key_hide_show_v('retirement_income',$debtormonthlyincome);?>" id="retirement_income">
        <div class="row">
            <?php for($i=1;$i<=1;$i++){?>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="d-block">Month <?php //echo $i;?> <?php if($i==1){?>(last month)<?php }?><?php if($i==2){?><?php }?> </label>
                    <div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text" id="basic-addon1">$</span>
	                    </div>
                    	<input type="number" class="form-control required" name="retirement_income_month[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('retirement_income_month',$debtormonthlyincome,$i);?>"/>
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
                <input type="radio" id="regular_contributions-no" name="regular_contributions" onchange="GetDebtorRegularContributions('no');" value="0" required <?php echo Helper::validate_key_toggle('regular_contributions',$debtormonthlyincome,0);?> />
                <label for="regular_contributions-no" class="cr">No</label>
            </div>
            <div class="d-inline radio-primary">
                <input id="regular_contributions-yes" type="radio" name="regular_contributions" onchange="GetDebtorRegularContributions('yes');" value="1" required <?php echo Helper::validate_key_toggle('regular_contributions',$debtormonthlyincome,1);?> />
                <label for="regular_contributions-yes" class="cr">Yes</label>
            </div>
        </div>
    </div>
    <div class="col-md-12 <?php echo Helper::key_hide_show_v('regular_contributions',$debtormonthlyincome);?>" id="regular_contributions">
        <div class="row">
            <?php for($i=1;$i<=6;$i++){?>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="d-block">Month <?php //echo $i;?> <?php if($i==1){?>(last month)<?php }?><?php if($i==2){?><?php }?> </label>
                    <div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text" id="basic-addon1">$</span>
	                    </div>
                    	<input type="number" class="form-control required" name="regular_contributions_month[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('regular_contributions_month',$debtormonthlyincome,$i);?>"/>
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
                <input type="radio" id="unemployment_compensation-no" name="unemployment_compensation" onchange="GetDebtorUnemploymentCompensation('no');" value="0" required <?php echo Helper::validate_key_toggle('unemployment_compensation',$debtormonthlyincome,0);?> />
                <label for="unemployment_compensation-no" class="cr">No</label>
            </div>
            <div class="d-inline radio-primary">
                <input id="unemployment_compensation-yes" type="radio" name="unemployment_compensation" onchange="GetDebtorUnemploymentCompensation('yes');" value="1" required <?php echo Helper::validate_key_toggle('unemployment_compensation',$debtormonthlyincome,1);?> />
                <label for="unemployment_compensation-yes" class="cr">Yes</label>
            </div>
        </div>
    </div>
    <div class="col-md-12 <?php echo Helper::key_hide_show_v('unemployment_compensation',$debtormonthlyincome);?>" id="unemployment_compensation">
        <div class="row">
           <?php for($i=1;$i<=6;$i++){?>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="d-block">Month <?php //echo $i;?> <?php if($i==1){?>(last month)<?php }?><?php if($i==2){?><?php }?> </label>
                    <div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text" id="basic-addon1">$</span>
	                    </div>
                    	<input type="number" class="form-control required" name="unemployment_compensation_month[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('unemployment_compensation_month',$debtormonthlyincome,$i);?>"/>
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
            <label class="d-block">Social Security income.<span style="color:#012cae;font-size:15px" class="text-c-blue"> (SSI Income)</span></label>
            <div class="d-inline radio-primary">
                <input type="radio" id="social_security-no" name="social_security" onchange="GetDebtorSocialIncome('no');" value="0" required <?php echo Helper::validate_key_toggle('social_security',$debtormonthlyincome,0);?> />
                <label for="social_security-no" class="cr">No</label>
            </div>
            <div class="d-inline radio-primary">
                <input id="social_security-yes" type="radio" name="social_security" onchange="GetDebtorSocialIncome('yes');" value="1" required <?php echo Helper::validate_key_toggle('social_security',$debtormonthlyincome,1);?> />
                <label for="social_security-yes" class="cr">Yes</label>
            </div>
        </div>
    </div>
    <div class="col-md-7 <?php echo Helper::key_hide_show_v('social_security',$debtormonthlyincome);?>" id="social_security">
        <div class="row">
            <?php for($i=1;$i<=1;$i++){?>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="d-block">Month <?php //echo $i;?> <?php if($i==1){?>(last month)<?php }?><?php if($i==2){?><?php }?> </label>
                    <div class="input-group">
	                    <div class="input-group-prepend">
	                        <span class="input-group-text" id="basic-addon1">$</span>
	                    </div>
                    	<input type="number" class="form-control required" name="social_security_month[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('social_security_month',$debtormonthlyincome,$i);?>"/>
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
                <input type="radio" id="other_sources-no" name="other_sources" onchange="GetDebtoOtherSource('no');" value="0" required <?php echo Helper::validate_key_toggle('other_sources',$debtormonthlyincome,0);?> />
                <label for="other_sources-no" class="cr">No</label>
            </div>
            <div class="d-inline radio-primary">
                <input id="other_sources-yes" type="radio" name="other_sources" onchange="GetDebtoOtherSource('yes');" value="1" required <?php echo Helper::validate_key_toggle('other_sources',$debtormonthlyincome,1);?> />
                <label for="other_sources-yes" class="cr">Yes</label>
            </div>
        </div>
    </div>
    <div class="col-md-12 <?php echo Helper::key_hide_show_v('other_sources',$debtormonthlyincome);?>" id="other_sources">
        <div class="row">
            <div class="col-md-6">
                    <div class="form-group">
                        <label class="d-block">Source of income</label>
                        <div class="input-group">
                            
                            <input placeholder="Source of income" type="text" class="form-control" name="other_options_income" value="<?php echo Helper::validate_key_value('other_options_income',$debtormonthlyincome);?>">
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
	                        <span class="input-group-text" id="basic-addon1">$</span>
	                    </div>
                    	<input type="number" class="form-control required" name="other_sources_month[<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('other_sources_month',$debtormonthlyincome,$i);?>"/>
                    </div>
                </div>
            </div>
			<?php }?>
        </div>
    </div>

    


</div>
<div class="col-md-12">
    <div class="next-part-btn text-right">
		<?php if(!empty($can_editable)){?>
        <?php if(!empty($debtormonthlyincome['id'])){?>
			<input type="hidden" class="property_vehicle_ids"  name="id" value="<?php echo Helper::validate_value($debtormonthlyincome['id']);?>">
			<?php if(!empty($redirect)){?>
			<a href="{{route('client_income')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
			<?php }else{?>
			<a href="{{route('client_income_step1')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
			<?php }?>
			 <button class="btn btn-primary shadow-2 mb-4" type="submit">Save<i class="feather icon-chevron-right mr-0"></i></button>

		<?php }else{?>
            <button class="btn btn-primary shadow-2 mb-4" type="submit">Save & Next Part <i class="feather icon-chevron-right mr-0"></i></button>
		<?php }?>
		<?php }else{?>
			<?php if(!empty($redirect)){?>
			<a href="{{route('client_income')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
			<?php }else{?>
			<a href="{{route('client_income_step1')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
			<?php }?>
			<button class="btn btn-primary shadow-2 mb-4" onclick="changeSectionDStep();return false;">Next Part <i class="feather icon-chevron-right mr-0"></i></button>
		<?php }?>
    </div>
</div>
