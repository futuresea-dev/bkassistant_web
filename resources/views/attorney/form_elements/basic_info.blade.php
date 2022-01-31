<?php
$BasicInfoPartA=$basic_info['BasicInfoPartA'];
$BasicInfo_AnyOtherName=(!empty($basic_info['BasicInfo_AnyOtherName']))?$basic_info['BasicInfo_AnyOtherName']->toArray():[];

$BasicInfo_AddressFrom730=(!empty($basic_info['BasicInfo_AddressFrom730']))?$basic_info['BasicInfo_AddressFrom730']->toArray():[];

$BasicInfoPartB=(!empty($basic_info['BasicInfoPartB']))?$basic_info['BasicInfoPartB']->toArray():[];

$BasicInfo_PartC=(!empty($basic_info['BasicInfo_PartC']))?$basic_info['BasicInfo_PartC']->toArray():[];

$BasicInfo_PartRest=(!empty($basic_info['BasicInfo_PartRest']))?$basic_info['BasicInfo_PartRest']->toArray():[];

// dump($BasicInfo_PartRest);
?>
<div class="part-a px-3">
	<span class="section-title font-weight-bold font-lg-18 ">Name and Address</span>
	<div class="row">
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Name: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('name',$BasicInfoPartA)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Middle Name: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('middle_name',$BasicInfoPartA)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Last Name: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('last_name',$BasicInfoPartA)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Have you used any other names in the past
				eight:
				<span class="font-weight-normal"><?php echo Helper::key_display('any_other_name',$BasicInfoPartA)?></span></label>

		</div>
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('any_other_name',$BasicInfoPartA)?>">
			<?php if(!empty($BasicInfo_AnyOtherName)){ unset($BasicInfo_AnyOtherName['id'],$BasicInfo_AnyOtherName['client_id']);?>
			<?php foreach($BasicInfo_AnyOtherName as $key=>$val){?>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">{{ucfirst($key)}}: <span
						class="font-weight-normal">{{$val}}</span></label>
			</div>
			<?php }}?>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Social Security Number: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('security_number',$BasicInfoPartA)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">ITIN: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('itin',$BasicInfoPartA)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Date of Birth: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('date_of_birth',$BasicInfoPartA)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Address: <span class="font-weight-normal">31
					<?php echo Helper::validate_key_value('Address',$BasicInfoPartA)?>
				</span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">City: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('City',$BasicInfoPartA)?>
				</span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">State: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('state',$BasicInfoPartA)?>
				</span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Have you lived at this address for at least 180
				days?: <span class="font-weight-normal"><?php echo Helper::key_display('lived_address_from_180',$BasicInfoPartA)?>
				</span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Have you lived at this address for at least (2
				years)?: <span class="font-weight-normal"><?php echo Helper::key_display('lived_address_from_730',$BasicInfoPartA)?>
				</span></label>
		</div>
		<div class="row col-md-12 sec_merger <?php echo Helper::key_hide_show_v('lived_address_from_730',$BasicInfoPartA)?>">
			<?php if(!empty($BasicInfo_AddressFrom730)){ unset($BasicInfo_AddressFrom730['id'],$BasicInfo_AddressFrom730['client_id']);?>
			<?php foreach($BasicInfo_AddressFrom730 as $key=>$val){?>
			<div class="col-md-6">
				<label class="font-weight-bold py-2">{{ucfirst($key)}}: <span
						class="font-weight-normal">{{$val}}</span></label>
			</div>
			<?php }}?>
		</div>
		<div class="col-md-6">
			<?php
			$marital_status=[1=>"Never Married",2=>"Married and living together",3=>"Widowed",4=>"Married and living apart",5=>"Divorced"]
			?>
			<label class="font-weight-bold py-2">Marital Status: <span
					class="font-weight-normal">
				<?php echo (!empty($BasicInfoPartA['marital_status']))?$marital_status[$BasicInfoPartA['marital_status']]:"";?>
				</span></label>
		</div>
	</div>
</div>
<hr>
<!-- Spouse Section implmentation -->
<div class="part-a px-3">
	<span class="section-title font-weight-bold font-lg-18 ">Name and Address of Spouse</span>
	<div class="row">
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Name: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('name',$BasicInfoPartB)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Middle Name: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('middle_name',$BasicInfoPartB)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Last Name: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('last_name',$BasicInfoPartB)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Have your spouse used any other names in the past 8 years?:
				<span class="font-weight-normal"><?php echo Helper::key_display('spouse_any_other_name',$BasicInfoPartB)?></span></label>

		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Name: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('spouse_other_name',$BasicInfoPartB)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Middle Name: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('spouse_other_middle_name',$BasicInfoPartB)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Last Name: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('spouse_other_last_name',$BasicInfoPartB)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Has your spouse used any business names or Employer Identification Numbers (EIN) in the last 8 years?:
				<span class="font-weight-normal"><?php echo Helper::key_display('spouse_has_ein',$BasicInfoPartB)?></span></label>

		</div>		
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Social Security Number: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('social_security_number',$BasicInfoPartB)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">ITIN: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('itin',$BasicInfoPartB)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Date of Birth: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('date_of_birth',$BasicInfoPartB)?></span></label>
		</div>
		<div class="col-md-12">
			<span class="section-title font-weight-bold font-lg-12 ">If your spouse lives at a different address, please list :
			</span>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Address: <span class="font-weight-normal">31
					<?php echo Helper::validate_key_value('Address',$BasicInfoPartB)?>
				</span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">City: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('City',$BasicInfoPartB)?>
				</span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">State: <span
					class="font-weight-normal"><?php echo Helper::validate_key_value('state',$BasicInfoPartB)?>
				</span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Have you lived at this address for at least 180
				days?: <span class="font-weight-normal"><?php echo Helper::key_display('lived_address_from_180',$BasicInfoPartB)?>
				</span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Have you lived at this address for at least (2
				years)?: <span class="font-weight-normal"><?php echo Helper::key_display('lived_address_from_730',$BasicInfoPartB)?>
				</span></label>
		</div>		
	</div>
</div>
<hr>
<!-- Prior and/or Pending Bankruptcy Cases -->
<div class="part-a px-3">
	<span class="section-title font-weight-bold font-lg-18 ">Prior and/or Pending Bankruptcy Cases</span>
	<div class="row">		
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Have you filed a bankruptcy case in the last 8 years?:
				<span class="font-weight-normal"><?php echo Helper::key_display('filed_bankruptcy_case_last_8years',$BasicInfo_PartC)?></span></label>

		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Are any bankruptcy cases pending or being filed by your spouse, a business partner, or an affiliate?:
				<span class="font-weight-normal"><?php echo Helper::key_display('any_bankruptcy_cases_pending',$BasicInfo_PartC)?></span></label>

		</div>
	</div>
</div>
<hr>
<!-- Debtors Who Reside as Tenants of Residential Property -->
<div class="part-a px-3">
	<span class="section-title font-weight-bold font-lg-18 ">Debtors Who Reside as Tenants of Residential Property</span>
	<div class="row">		
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Do you have an eviction pending against you?:
				<span class="font-weight-normal"><?php echo Helper::key_display('eviction_pending',$BasicInfo_PartRest)?></span></label>

		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Are you the sole proprietor of a full- or part-time business?:
				<span class="font-weight-normal"><?php echo Helper::key_display('sole_proprietor',$BasicInfo_PartRest)?></span></label>
		</div>
		<div class="col-md-6">
			<label class="font-weight-bold py-2">Do you own or have any property that needs immediate attention or that poses or is alleged to pose a threat of imminent and identifiable harm to public health or safety?:
				<span class="font-weight-normal"><?php echo Helper::key_display('hazardous_property',$BasicInfo_PartRest)?></span></label>
		</div>
	</div>
</div>
<hr>
