<?php
$propertyresident=$property_info['propertyresident']->toArray();

$propertyvehicle=$property_info['propertyvehicle']->toArray();

$propertyhousehold=$property_info['propertyhousehold'];

$financialassets=$property_info['financialassets'];

$businessassets=$property_info['businessassets'];

$farmcommercial=$property_info['farmcommercial'];

$miscellaneous=$property_info['miscellaneous'];

// dump($miscellaneous);
?>
<!-- Residence, Building, Land, Other Real Estate -->
<div class="part-a px-3">
	<span class="section-title font-weight-bold font-lg-18 ">Residence, Building, Land, Other Real Estate</span>
	<?php if(!empty($propertyresident)){foreach($propertyresident as $key =>$resident){ ?>
	<div class="col-md-12 sec_merger">		
		<label class="font-weight-bold py-2">Do you rent or own where you currently live?:
			<span class="font-weight-normal"><?php echo Helper::key_display('currently_lived',$resident)?></span></label>

	</div>
	<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('currently_lived',$resident)?>">		
		<?php $property=[1=>"Single family home",2=>"Duplex or multi-unit building",3=>"Condominium or cooperative",4=>"Manufactured or mobile home",5=>"Land",6=>"Investment property",7=>"Timeshare",8=>"Other"];?>
		<div class="col-md-12">
			<label class="font-weight-bold py-2">What is the property? Check all that apply:
				<span class="font-weight-normal"><?php echo (!empty($resident['property']))?$property[$resident['property']]:"";?></span></label>
		</div>
		<div class="col-md-12">
		<span class="section-title font-weight-bold font-lg-12 ">List all mortgages, home equity loans and other liens against the property:</span>
		<p>Please provide details requested below.</p>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Who issued the mortgage, lien or loan? (Name):
				<span class="font-weight-normal"><?php echo Helper::validate_key_value('mortgage_name',$resident)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Who issued the mortgage, lien or loan? (Address):
				<span class="font-weight-normal"><?php echo Helper::validate_key_value('mortgage_address',$resident)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">What is the amount of the mortgage, lien or loan?:
				<span class="font-weight-normal"><?php echo Helper::validate_key_value('mortgage_loan',$resident)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">What is your current interest rate on the loan?:
				<span class="font-weight-normal"><?php echo Helper::validate_key_value('mortgage_loan_rate',$resident)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">What is your monthly payment?:
				<span class="font-weight-normal"><?php echo Helper::validate_key_value('monthly_payment',$resident)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Does payment include taxes and/or insurance?:
				<span class="font-weight-normal"><?php echo Helper::key_display('taxes_insurance',$resident)?></span></label>
		</div>
		<div class="col-md-12">
		<span class="section-title font-weight-bold font-lg-12 ">Estimated Value of Property</span>		
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Property Value:
				<span class="font-weight-normal"><?php echo Helper::validate_key_value('estimated_property_value',$resident)?></span></label>
		</div>
		<div class="col-md-6">
			<?php $owned_by=[1=>"You",2=>"Spouse",3=>"Joint",4=>"Other"];?>
			<label class="font-weight-bold py-2">Owned by:
				<span class="font-weight-normal"><?php echo (!empty($resident['property_owned_by']))?$owned_by[$resident['property_owned_by']]:"";?></span></label>
		</div>
		<div class="col-md-12 sec_merger">		
			<label class="font-weight-bold py-2">Do you have loan on this property?:
				<span class="font-weight-normal"><?php echo Helper::key_display('loan_own_type_property',$resident)?></span></label>

		</div>

		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('loan_own_type_property',$resident)?>">
			<div class="col-md-12">
			<p class="section-title font-weight-bold font-lg-14 ">Home Loan</p>
			</div>
			<?php 
			$home_car_loan=	json_decode($resident['home_car_loan'],1);
			?>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Amount Owed :
					<span class="font-weight-normal"><?php echo Helper::validate_key_value('amount_own',$home_car_loan)?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Account Number, if any:
					<span class="font-weight-normal"><?php echo Helper::validate_key_value('account_number',$home_car_loan)?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Date/range of dates when debt was incurred:
					<span class="font-weight-normal"><?php echo Helper::validate_key_value('debt_incurred_date',$home_car_loan)?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Creditor Name and Address:
					<span class="font-weight-normal"><?php echo Helper::validate_key_value('creditor_name_addresss',$home_car_loan)?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Monthly payment amount:
					<span class="font-weight-normal"><?php echo Helper::validate_key_value('monthly_payment',$home_car_loan)?></span></label>
			</div>
			<div class="col-md-6">
				<?php $owned_by1=[1=>"Self",2=>"Spouse",3=>"Joint",4=>"Other"];?>
				<label class="font-weight-bold py-2">Who owes the debt?:
					<span class="font-weight-normal"><?php echo (!empty($home_car_loan['debt_owned_by']))?$owned_by1[$home_car_loan['debt_owned_by']]:"";?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Is there a codebtor or cosigner on this loan?:
					<span class="font-weight-normal"><?php echo (!empty($home_car_loan['codebtor']))?'Yes':'No';?></span></label>
			</div>
			<div class="row col-md-12 <?php echo Helper::key_hide_show_v('codebtor',$home_car_loan)?>">
				<div class="col-md-6">
					<label class="font-weight-bold py-2">Please provide name and address::
						<span class="font-weight-normal"><?php echo Helper::validate_key_value('codebtor_info',$home_car_loan)?></span></label>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<?php }}?>
</div>
<hr>
<div class="part-a px-3">
	<span class="section-title font-weight-bold font-lg-18 ">Cars, Vans, Trucks, Tractors, SUVs, Motorcycles, RVs, Watercraft, Aircraft, Motor Homes, ATVs, Other Vehicles</span>
	<?php if(!empty($propertyvehicle)){foreach($propertyvehicle as $key =>$vehicle){ ?>	
	<div class="row">		
		<!--div class="col-md-6">
			<label class="font-weight-bold py-2">Type of Property:
				<span class="font-weight-normal"><?php //echo Helper::validate_key_value('property_type',$vehicle)?></span></label>

		</div-->		
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Do you own this type of property?:
				<span class="font-weight-normal"><?php echo Helper::key_display('own_any_property',$vehicle)?></span></label>
		</div>
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('own_any_property',$vehicle)?>">
			<div class="col-md-12">
			<span class="section-title font-weight-bold font-lg-12 ">Description:</span>			
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Type:
					<span class="font-weight-normal"><?php echo Helper::validate_key_value('property_type',$vehicle)?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Year:
					<span class="font-weight-normal"><?php echo Helper::validate_key_value('property_year',$vehicle)?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Make:
					<span class="font-weight-normal"><?php echo Helper::validate_key_value('property_make',$vehicle)?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Model:
					<span class="font-weight-normal"><?php echo Helper::validate_key_value('property_model',$vehicle)?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Mileage:
					<span class="font-weight-normal"><?php echo Helper::validate_key_value('property_mileage',$vehicle)?></span></label>
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Other Information:
					<span class="font-weight-normal"><?php echo Helper::key_display('property_other_info',$vehicle)?></span></label>
			</div>
			<div class="col-md-12">
			<span class="section-title font-weight-bold font-lg-12 ">Estimated Value of Property</span>		
			</div>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">Property Value:
					<span class="font-weight-normal"><?php echo Helper::validate_key_value('property_estimated_value',$vehicle)?></span></label>
			</div>
			<div class="col-md-6">
				<?php $owned_by=[1=>"You",2=>"Spouse",3=>"Joint",4=>"Other"];?>
				<label class="font-weight-bold py-2">Property Value:
					<span class="font-weight-normal"><?php echo (!empty($vehicle['own_by_property']))?$owned_by[$vehicle['own_by_property']]:"";?></span></label>
			</div>
			<div class="col-md-12">		
				<label class="font-weight-bold py-2">Do you have loan on this property?:
				<span class="font-weight-normal"><?php echo Helper::key_display('loan_own_type_property',$vehicle)?></span></label>

			</div>

			<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('loan_own_type_property',$vehicle)?>">
				<div class="col-md-12">
				<p class="section-title font-weight-bold font-lg-14 ">Car  Loan</p>
				</div>
				<?php 
				$vehicle_car_loan=	json_decode($vehicle['vehicle_car_loan'],1);
				?>
				<div class="col-md-6">
					<label class="font-weight-bold py-2">Amount Owed :
						<span class="font-weight-normal"><?php echo Helper::validate_key_value('amount_own',$vehicle_car_loan)?></span></label>
				</div>
				<div class="col-md-6">
					<label class="font-weight-bold py-2">Account Number, if any:
						<span class="font-weight-normal"><?php echo Helper::validate_key_value('account_number',$vehicle_car_loan)?></span></label>
				</div>
				<div class="col-md-6">
					<label class="font-weight-bold py-2">Date/range of dates when debt was incurred:
						<span class="font-weight-normal"><?php echo Helper::validate_key_value('debt_incurred_date',$vehicle_car_loan)?></span></label>
				</div>
				<div class="col-md-6">
					<label class="font-weight-bold py-2">Creditor Name and Address:
						<span class="font-weight-normal"><?php echo Helper::validate_key_value('creditor_name_addresss',$vehicle_car_loan)?></span></label>
				</div>
				<div class="col-md-6">
					<label class="font-weight-bold py-2">Monthly payment amount:
						<span class="font-weight-normal"><?php echo Helper::validate_key_value('monthly_payment',$vehicle_car_loan)?></span></label>
				</div>
				<div class="col-md-6">
					<?php $owned_by1=[1=>"Self",2=>"Spouse",3=>"Joint",4=>"Other"];?>
					<label class="font-weight-bold py-2">Who owes the debt?:
						<span class="font-weight-normal"><?php echo (!empty($vehicle_car_loan['debt_owned_by']))?$owned_by1[$vehicle_car_loan['debt_owned_by']]:"";?></span></label>
				</div>
				<div class="col-md-6">
					<label class="font-weight-bold py-2">Is there a codebtor or cosigner on this loan?:
						<span class="font-weight-normal"><?php echo (!empty($vehicle_car_loan['codebtor']))?'Yes':'No';?></span></label>
				</div>
				<div class="row col-md-12 <?php echo Helper::key_hide_show_v('codebtor',$vehicle_car_loan)?>">
					<div class="col-md-6">
						<label class="font-weight-bold py-2">Please provide name and address::
							<span class="font-weight-normal"><?php echo Helper::validate_key_value('codebtor_info',$vehicle_car_loan)?></span></label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<?php }}?>
</div>
<hr>
<?php
$household_items=[ "Household Goods and Furnishings (Major appliances, furniture, linens, china, kitchenware, etc.)" ,"Electronics (TVs, stereos, computers, game consoles, tablets, iPods, mobile phones, etc.)" ,"Collectibles of value (art, paintings, prints, memorabilia, antiques, stamp/coin/card collections, etc.)" ,"Sports, photo, exercise, and other hobby equipment; musical instruments" ,"Firearms, ammunition, and related equipment" ,"Clothing (everyday clothes, furs, leather coats, designer wear, shoes, accessories)" ,"Jewelery" ,"Pets/non-farm animals" ,"Health aids and all other household items not listed" ];
?>
<div class="part-a px-3">
	<span class="section-title font-weight-bold font-lg-18 ">Personal and Household Items</span>	
	<div class="col-md-12 sec_merger">
		<br>
		<span class="section-title font-weight-bold font-lg-12 ">Type of Property:</span>			
	</div>		
	<?php if(!empty($propertyhousehold)){$i=0;foreach($propertyhousehold as $key =>$household){?>	
	<div class="row">
		<div class="col-md-6">
			<label class="font-weight-bold py-2">{{$household_items[$i]}}:
				<span class="font-weight-normal"><?php echo Helper::key_display('type_value',$household)?></span></label>
		</div>		
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('type_value',$household)?>">
			<?php if(is_array(json_decode($household['type_data'],1))){
				$household_data=	json_decode($household['type_data'],1);				
			?>			
			<div class="col-md-12">
				<label class="font-weight-bold py-2">Description:
					<span class="font-weight-normal"><?php echo Helper::validate_key_value('0',$household_data)?></span></label>
			</div>			
			
			<div class="col-md-6">
				<span class="section-title font-weight-bold font-lg-12 ">Value of Property:</span><br>		
				<label class="font-weight-bold py-2">Property Value:
					<span class="font-weight-normal"><?php echo Helper::validate_key_value('1',$household_data)?></span></label>
			</div>			
			<div class="col-md-6">
				<span class="section-title font-weight-bold font-lg-12 ">Owned by:</span>		
				<?php $owned_by=[1=>"You",2=>"Spouse",3=>"Joint",4=>"Other"];?>
				<label class="font-weight-bold py-2">You, your spouse, both you and your spouse, you and at least one person other than your spouse.:
					<span class="font-weight-normal"><?php echo (!empty($household_data['owned_by']))?$owned_by[$household_data['owned_by']]:"";?></span></label>
			</div>
			<?php }?>
		</div>		
	</div>
	<hr>
	<?php $i++;}}?>	
</div>
<hr>
<?php
$financial_assets=[
"Cash(spare change/money in your purse or wallet, cash not in accounts)",
"Checking account(s) (list name(s) on account, bank name, and account number)",
"Savings account(s) (list name(s) on account, bank name, and account number)",
"Certificate of deposit(list name(s) on account, bank name, and account number)",
"Other financial account(s) (list name(s) on account, bank name, and account number)",
"Bonds, mutual funds, and publicly traded stocks",
"Non-publicly traded stocks and interests in businesses",
"Government and corporate bonds and instruments (including U.S. Savings Bonds) (Privately held stock of companies if your self-employed your business entity would be listed here)",
"Retirement, pension, or profit-sharing plan #1 (IRA, 401(k), 403(b), thrift savings account, or other pension or profit-sharing plan) (list type of plan and where the account is held)",
"Security deposits (typically with landlord or utility) (list holder)",
"Prepayments (prepaid rent, layaway, gift cards, etc)",
"Annuities (list company)",
"Education IRA, Sec. 529 or Sec. 530 account, state tuition plan",
"Trusts, life estates, future, and equitable interests in property or assets",
"Patents, copyrights, trademarks, trade secrets, and other intellectual property",
"Licenses, franchises, and other general intangibles",
"Tax refunds owed to you (list years due)",
"Alimony and child support",
"Other amounts someone owes you (unpaid wages, disability benefits, sick pay, vacation pay, workers' compensation, unpaid loans made by you, etc.)",
"Cash value of insurance policies (whole or universal life, health, disability, HSA, etc.) (list insurance company and beneficiary",
"Inheritances, estate distributions, and death benefits",
"Personal injury claims or awards",
"Lawsuits or claims against anyone for anything",
"All other claims or rights to sue someone",
"Any other financial asset not listed"];
?>
<div class="part-a px-3">
    <span class="section-title font-weight-bold font-lg-18 ">Financial Assets</span>
    <div class="col-md-12 sec_merger">
        <br>
        <span class="section-title font-weight-bold font-lg-12 ">Type of Property:</span>
    </div>
    <?php
    if(!empty($financialassets)){
        unset($financialassets[25]);
        $i=0;
        foreach($financialassets as $key =>$financial){ 
            $financial_data	= json_decode($financial['type_data'],1);
            ?>
            <div class="row">
                <div class="col-md-6">
                    <label class="font-weight-bold py-2">{{ @$financial_assets[$i] }}:
                    <span class="font-weight-normal"><?php echo Helper::key_display('type_value', $financial); ?></span></label>
                </div>
                <div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('type_value', $financial); ?>">
                    <?php
                        if(!empty($financial_data['description']) && is_array($financial_data['description'])){
                            for($j=0;$j<count($financial_data['description']);$j++){
                                ?>
                                <div class="col-md-12">
                                    <label class="font-weight-bold py-2">Description:
                                        <span class="font-weight-normal"><?php echo Helper::validate_key_loop_value('description', $financial_data, $j); ?></span></label>
                                </div>

                                <div class="col-md-6">
                                    <span class="section-title font-weight-bold font-lg-12 ">Value of Property:</span><br>
                                    <label class="font-weight-bold py-2">Property Value:
                                        <span class="font-weight-normal"><?php echo Helper::validate_key_loop_value('property_value', $financial_data, $j); ?></span></label>
                                </div>
                                <div class="col-md-6">
                                    <span class="section-title font-weight-bold font-lg-12 ">Owned by:</span>
                                    <?php $owned_by = [1 => 'You', 2 => 'Spouse', 3 => 'Joint', 4 => 'Other']; ?>
                                    <label class="font-weight-bold py-2">You, your spouse, both you and your spouse, you and at least one person other than your spouse:
                                        <span class="font-weight-normal"><?php echo !empty($financial_data['owned_by']) ? $owned_by[$financial_data['owned_by']] : ''; ?></span>
                                    </label>
                                </div>
                                <?php 
                            }
                        }?>
                </div>
            </div>
            <hr>
        <?php $i++;
        }
    }?>
</div>
<hr>
<?php
$business_assets=[
"Accounts receivable or commissions earned(list)",
"Office equipment, furnishings, and supplies(list)",
"Machinery, fixtures, equipment, business supplies, and tools of your trade (list)",
"Business inventory(list)",
"Interests in partnerships or joint ventures (name and type of business, % interest)",
"Customer and mailing lists",
"Other business-related property not already listed",
];
?>
<div class="part-a px-3">
	<span class="section-title font-weight-bold font-lg-18 ">Financial Assets</span>	
	<div class="col-md-12 sec_merger">
		<br>
		<span class="section-title font-weight-bold font-lg-12 ">Type of Property:</span>			
	</div>		
	<?php if(!empty($businessassets)){	
	$i=0;foreach($businessassets as $key =>$business){?>	
	<div class="row">
		<div class="col-md-6">
			<label class="font-weight-bold py-2">{{@$business_assets[$i]}}:
				<span class="font-weight-normal"><?php echo Helper::key_display('type_value',$business)?></span></label>
		</div>		
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('type_value',$business)?>">
			<?php if(is_array(json_decode($business['type_data'],1))){
				$business_data=	json_decode($business['type_data'],1);				
			?>			
			<div class="col-md-12">
				<label class="font-weight-bold py-2">Description:
					<span class="font-weight-normal"><?php echo Helper::validate_key_value('description',$business_data)?></span></label>
			</div>			
			
			<div class="col-md-6">
				<span class="section-title font-weight-bold font-lg-12 ">Value of Property:</span><br>		
				<label class="font-weight-bold py-2">Property Value:
					<span class="font-weight-normal"><?php echo Helper::validate_key_value('property_value',$business_data)?></span></label>
			</div>			
			<div class="col-md-6">
				<span class="section-title font-weight-bold font-lg-12 ">Owned by:</span>		
				<?php $owned_by=[1=>"You",2=>"Spouse",3=>"Joint",4=>"Other"];?>
				<label class="font-weight-bold py-2">You, your spouse, both you and your spouse, you and at least one person other than your spouse.:
					<span class="font-weight-normal"><?php echo (!empty($business_data['owned_by']))?$owned_by[$business_data['owned_by']]:"";?></span></label>
			</div>
			<?php }?>
		</div>		
	</div>
	<hr>
	<?php $i++;}}?>	
</div>
<hr>
<?php
$farm_assets=[
"Farm animals (livestock, poultry, farm- raised fish, etc.)",
"Crops (growing or harvested",
"Farm and commercial fishing equipment, implements, machinery, fixtures, and tools of trade(list)",
"Farm and commercial fishing supplies, chemicals, and feed (list)",
"Any farm and commercial fishing-related property not already listed, see Video Property Tab Step 5 issue"
];
?>
<div class="part-a px-3">
	<span class="section-title font-weight-bold font-lg-18 "> Farm and Commercial Fishing-Related Property</span>	
	<div class="col-md-12 sec_merger">
		<br>
		<span class="section-title font-weight-bold font-lg-12 ">Type of Property:</span>			
	</div>		
	<?php if(!empty($farmcommercial)){	
	$i=0;foreach($farmcommercial as $key =>$farm){?>	
	<div class="row">
		<div class="col-md-6">
			<label class="font-weight-bold py-2">{{@$farm_assets[$i]}}:
				<span class="font-weight-normal"><?php echo Helper::key_display('type_value',$farm)?></span></label>
		</div>		
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('type_value',$farm)?>">
			<?php if(is_array(json_decode($farm['type_data'],1))){
				$farm_data=	json_decode($farm['type_data'],1);				
			?>			
			<div class="col-md-12">
				<label class="font-weight-bold py-2">Description:
					<span class="font-weight-normal"><?php echo Helper::validate_key_value('description',$farm_data)?></span></label>
			</div>			
			
			<div class="col-md-6">
				<span class="section-title font-weight-bold font-lg-12 ">Value of Property:</span><br>		
				<label class="font-weight-bold py-2">Property Value:
					<span class="font-weight-normal"><?php echo Helper::validate_key_value('property_value',$farm_data)?></span></label>
			</div>			
			<div class="col-md-6">
				<span class="section-title font-weight-bold font-lg-12 ">Owned by:</span>		
				<?php $owned_by=[1=>"You",2=>"Spouse",3=>"Joint",4=>"Other"];?>
				<label class="font-weight-bold py-2">You, your spouse, both you and your spouse, you and at least one person other than your spouse.:
					<span class="font-weight-normal"><?php echo (!empty($farm_data['owned_by']))?$owned_by[$farm_data['owned_by']]:"";?></span></label>
			</div>
			<?php }?>
		</div>		
	</div>
	<hr>
	<?php $i++;}}?>	
</div>
<hr>
<?php
$miscellaneous_assets=[
"All other property of any kind not previously listed",
];
?>
<div class="part-a px-3">
	<span class="section-title font-weight-bold font-lg-18 "> Miscellaneous</span>	
	<div class="col-md-12 sec_merger">
		<br>
		<span class="section-title font-weight-bold font-lg-12 ">Type of Property:</span>			
	</div>		
	<?php if(!empty($miscellaneous)){	
	$i=0;foreach($miscellaneous as $key =>$miscellaneous){?>	
	<div class="row">
		<div class="col-md-6">
			<label class="font-weight-bold py-2">{{@$miscellaneous_assets[$i]}}:
				<span class="font-weight-normal"><?php echo Helper::key_display('type_value',$miscellaneous)?></span></label>
		</div>		
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('type_value',$miscellaneous)?>">
			<?php if(is_array(json_decode($miscellaneous['type_data'],1))){
				$miscellaneous_data=	json_decode($miscellaneous['type_data'],1);				
			?>			
			<div class="col-md-12">
				<label class="font-weight-bold py-2">Description:
					<span class="font-weight-normal"><?php echo Helper::validate_key_value('description',$miscellaneous_data)?></span></label>
			</div>			
			
			<div class="col-md-6">
				<span class="section-title font-weight-bold font-lg-12 ">Value of Property:</span><br>		
				<label class="font-weight-bold py-2">Property Value:
					<span class="font-weight-normal"><?php echo Helper::validate_key_value('property_value',$miscellaneous_data)?></span></label>
			</div>			
			<div class="col-md-6">
				<span class="section-title font-weight-bold font-lg-12 ">Owned by:</span>		
				<?php $owned_by=[1=>"You",2=>"Spouse",3=>"Joint",4=>"Other"];?>
				<label class="font-weight-bold py-2">You, your spouse, both you and your spouse, you and at least one person other than your spouse.:
					<span class="font-weight-normal"><?php echo (!empty($miscellaneous_data['owned_by']))?$owned_by[$miscellaneous_data['owned_by']]:"";?></span></label>
			</div>
			<?php }?>
		</div>		
	</div>
	<hr>
	<?php $i++;}}?>	
</div>