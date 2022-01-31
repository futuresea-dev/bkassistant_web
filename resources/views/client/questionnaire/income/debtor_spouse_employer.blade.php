<div class="row mt-3">
	<div class="col-md-12">
		<div class="form-group">
			<label class="d-block">Is your spouse currently employed?
			</label>
			<div class="d-inline radio-primary">
				<input type="radio" required  id="current_spouse_employed_yes"
					onchange="current_spouse_employed_obj('yes');" class="current_employed_yes" name="current_employed" value="1" <?php echo Helper::validate_key_toggle('current_employed',$debtorspouseemployer,1);?>>
				<label for="current_spouse_employed_yes" class="cr">Yes</label>
			</div>
			<div class="d-inline radio-primary">
				<input type="radio" required  id="current_spouse_employed_no"
					onchange="current_spouse_employed_obj('no');" class="current_employed" name="current_employed" value="0" <?php echo Helper::validate_key_toggle('current_employed',$debtorspouseemployer,0);?>>
				<label for="current_spouse_employed_no" class="cr">No</label>
			</div>

		</div>
	</div>
	<div class="col-md-12 <?php echo Helper::key_hide_show_v('current_employed',$debtorspouseemployer);?>" id="current_spouse_employed_obj_data">
	<div class="row">
		<div class="col-md-12">
			<p class="section-part-title"><span> Joint Debtor's (Spouse's) Employer Information </span></p>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label class="d-block">Name of your spouse's employer:</label>
				<input type="text" name="spouse_employer_name" class="form-control required" value="<?php echo Helper::validate_key_value('spouse_employer_name',$debtorspouseemployer);?>"/><br>
			</div>
		</div>
		<div class="col-md-12">
			<label class="d-block">Address of your  employer:</label>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label class="d-block">Street Address</label>
				<input type="text" name="name_address_spouse_employer" class="form-control required"  placeholder="Street Address" value="<?php echo Helper::validate_key_value('name_address_spouse_employer',$debtorspouseemployer);?>">
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label class="d-block">Address Line 2</label>
				<input type="text" name="spouse_employer_address_line" class="form-control required"  placeholder="Address Line 2" value="<?php echo Helper::validate_key_value('spouse_employer_address_line',$debtorspouseemployer);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>City</label>
				<input type="text" class="form-control required" name="spouse_employer_city" placeholder="City" value="<?php echo Helper::validate_key_value('spouse_employer_city',$debtorspouseemployer);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>State</label>
			{{-- 	<input type="text" class="form-control required" name="spouse_employer_state" placeholder="State" value="<?php echo Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer);?>"> --}}
				<select class="form-control required" name="spouse_employer_state" >

					<option disabled="">Please Select State</option>
	
				<option value="AL" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'AL')  echo'selected'; else '' ?> >Alabama (AL)</option>
				
				<option value="AK" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'AK')  echo'selected'; else '' ?> >Alaska (AK)</option>
				
				<option value="AZ" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'AZ')  echo'selected'; else '' ?> >Arizona (AZ)</option>
				
				<option value="AR" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'AR')  echo'selected'; else '' ?> >Arkansas (AR)</option>
				
				<option value="CA" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'CA')  echo'selected'; else '' ?> >California (CA)</option>
				
				<option value="CO" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'CO')  echo'selected'; else '' ?> >Colorado (CO)</option>
				
				<option value="CT" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'CT')  echo'selected'; else '' ?> >Connecticut (CT)</option>
				
				<option value="DE" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'DE')  echo'selected'; else '' ?> >Delaware (DE)</option>
				
				<option value="DC" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'DC')  echo'selected'; else '' ?> >District Of Columbia (DC)</option>
				
				<option value="FL" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'FL')  echo'selected'; else '' ?> >Florida (FL)</option>
				
				<option value="GA" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'GA')  echo'selected'; else '' ?> >Georgia (GA)</option>
				
				<option value="HI" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'HI')  echo'selected'; else '' ?> >Hawaii (HI)</option>
				
				<option value="ID" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'ID')  echo'selected'; else '' ?> >Idaho (ID)</option>
				
				<option value="IL" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'IL')  echo'selected'; else '' ?> >Illinois (IL)</option>
				
				<option value="IN" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'IN')  echo'selected'; else '' ?> >Indiana (IN)</option>
				
				<option value="IA" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'IA')  echo'selected'; else '' ?> >Iowa (IA)</option>
				
				<option value="KS" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'KS')  echo'selected'; else '' ?> >Kansas (KS)</option>
				
				<option value="KY" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'KY')  echo'selected'; else '' ?> >Kentucky (KY)</option>
				
				<option value="LA" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'LA')  echo'selected'; else '' ?> >Louisiana (LA)</option>
				
				<option value="ME" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'ME')  echo'selected'; else '' ?> >Maine (ME)</option>
				
				<option value="MD" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'MD')  echo'selected'; else '' ?> >Maryland (MD)</option>
				
				<option value="MA" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'MA')  echo'selected'; else '' ?> >Massachusetts (MA)</option>
				
				<option value="MI" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'MI')  echo'selected'; else '' ?> >Michigan (MI)</option>
				
				<option value="MN" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'MN')  echo'selected'; else '' ?> >Minnesota (MN)</option>
				
				<option value="MS" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'MS')  echo'selected'; else '' ?> >Mississippi (MS)</option>
				
				<option value="MO" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'MO')  echo'selected'; else '' ?> >Missouri (MO)</option>
				
				<option value="MT" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'MT')  echo'selected'; else '' ?> >Montana (MT)</option>
				
				<option value="NE" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'NE')  echo'selected'; else '' ?> >Nebraska (NE)</option>
				
				<option value="NV" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'NV')  echo'selected'; else '' ?> >Nevada (NV)</option>
				
				<option value="NH" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'NH')  echo'selected'; else '' ?> >New Hampshire (NH)</option>
				
				<option value="NJ" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'NJ')  echo'selected'; else '' ?> >New Jersey (NJ)</option>
				
				<option value="NM" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'NM')  echo'selected'; else '' ?> >New Mexico (NM)</option>
				
				<option value="NY" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'NY')  echo'selected'; else '' ?> >New York (NY)</option>
				
				<option value="NC" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'NC')  echo'selected'; else '' ?> >North Carolina (NC)</option>
				
				<option value="ND" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'ND')  echo'selected'; else '' ?> >North Dakota (ND)</option>
				
				<option value="OH" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'OH')  echo'selected'; else '' ?> >Ohio (OH)</option>
				
				<option value="OK" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'OK')  echo'selected'; else '' ?> >Oklahoma (OK)</option>
				
				<option value="OR" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'OR')  echo'selected'; else '' ?> >Oregon (OR)</option>
				
				<option value="PA" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'PA')  echo'selected'; else '' ?> >Pennsylvania (PA)</option>
				
				<option value="RI" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'RI')  echo'selected'; else '' ?> >Rhode Island (RI)</option>
				
				<option value="SC" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'SC')  echo'selected'; else '' ?> >South Carolina (SC)</option>
				
				<option value="SD" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'SD')  echo'selected'; else '' ?> >South Dakota (SD)</option>
				
				<option value="TN" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'TN')  echo'selected'; else '' ?> >Tennessee (TN)</option>
				
				<option value="TX" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'TX')  echo'selected'; else '' ?> >Texas (TX)</option>
				
				<option value="UT" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'UT')  echo'selected'; else '' ?> >Utah (UT)</option>
				
				<option value="VT" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'VT')  echo'selected'; else '' ?> >Vermont (VT)</option>
				
				<option value="VA" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'VA')  echo'selected'; else '' ?> >Virginia (VA)</option>
				
				<option value="WA" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'WA')  echo'selected'; else '' ?> >Washington (WA)</option>
				
				<option value="WV" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'WV')  echo'selected'; else '' ?> >West Virginia (WV)</option>
				
				<option value="WI" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'WI')  echo'selected'; else '' ?> >Wisconsin (WI)</option>
				
				<option value="WY" <?php if(Helper::validate_key_value('spouse_employer_state',$debtorspouseemployer) == 'WY')  echo'selected'; else '' ?> >Wyoming (WY)</option>
			</select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Zip</label>
				<input type="number" class="form-control required" name="spouse_employer_zip" placeholder="Zip" value="<?php echo Helper::validate_key_value('spouse_employer_zip',$debtorspouseemployer);?>">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label class="d-block">How long has spouse been employed at this job:</label>
				<input type="number" name="spouse_employer_job_period" class="form-control required" value="<?php echo Helper::validate_key_value('spouse_employer_job_period',$debtorspouseemployer);?>"/>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label class="d-block">Occupation <i>(please state job title or provide brief description)</i>:</label>
				<input type="text" name="spouse_employer_occupation" class="form-control required" cols="30" rows="4" placeholder="Title or Description" value="<?php echo Helper::validate_key_value('spouse_employer_occupation',$debtorspouseemployer);?>">
			</div>
		</div>
		<div class="col-md-7">
			<div class="form-group">
				<label class="d-block">Do you have any other jobs or additional employers?</label>
				<div class="d-inline radio-primary">
					<input type="radio" id="spouseother-jobs-no" name="spouse_any_other_jobs"
						onchange="getspouse_HiddenData('no');" required <?php echo Helper::validate_key_toggle('spouse_any_other_jobs',$debtorspouseemployer,0);?> value="0">
					<label for="spouseother-jobs-no" class="cr">No</label>
				</div>
				<div class="d-inline radio-primary">
					<input type="radio" id="spouseother-jobs-yes" name="spouse_any_other_jobs"
						onchange="getspouse_HiddenData('yes');" required <?php echo Helper::validate_key_toggle('spouse_any_other_jobs',$debtorspouseemployer,1);?> value="1">
					<label for="spouseother-jobs-yes" class="cr">Yes</label>
				</div>
			</div>
		</div>
		<div class="col-md-12 <?php echo Helper::key_hide_show_v('spouse_any_other_jobs',$debtorspouseemployer);?>" id="spouse-condition-data">
			<div class="row">
			<div class="col-md-12 pt-3">
				<label class="d-block"><strong>Second</strong> employer <i>(if applicable)</i> :</label>
				<div class="form-group">
					<label class="d-block">Name and Address of your spouse's <strong> Second </strong> employer:</label>
					<input type="text" name="spouse_second_employer_name" class="form-control required" value="<?php echo Helper::validate_key_value('spouse_second_employer_name',$debtorspouseemployer);?>"/>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">Street Address</label>
					<input type="text" name="name_address_spouse_second_employer" class="form-control required"  placeholder="Street Address" value="{{(@$debtorspouseemployer['name_address_spouse_second_employer'] != '')?@$debtorspouseemployer['name_address_spouse_second_employer']:@$debtorspouseemployer['name_address_spouse_employer']}}" >
					<!-- value="<?php echo Helper::validate_key_value('name_address_spouse_second_employer',$debtorspouseemployer);?>"> -->
				</div>
			</div>	
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">Address Line 2</label>
					<input type="text" name="second_spouse_employer_address_line" class="form-control required"  placeholder="Address Line 2" value="{{(@$debtorspouseemployer['second_spouse_employer_address_line'] != '')?@$debtorspouseemployer['second_spouse_employer_address_line']:@$debtorspouseemployer['spouse_employer_address_line']}}" >
					<!-- value="<?php echo Helper::validate_key_value('second_spouse_employer_address_line',$debtorspouseemployer);?>"> -->
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>City</label>
					<input type="text" class="form-control required" name="second_spouse_employer_city" placeholder="City" value="{{(@$debtorspouseemployer['second_spouse_employer_city'] != '')?@$debtorspouseemployer['second_spouse_employer_city']:@$debtorspouseemployer['spouse_employer_city']}}" >
					<!-- value="<?php echo Helper::validate_key_value('second_spouse_employer_city',$debtorspouseemployer);?>"> -->
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>State</label>
					{{-- <input type="text" class="form-control required" name="second_spouse_employer_state" placeholder="State" value="<?php echo Helper::validate_key_value('second_spouse_employer_state',$debtorspouseemployer);?>"> --}}

					<select class="form-control required" name="second_spouse_employer_state">

					<option disabled="">Please Select State</option>
				@php
				$stt = (@$debtorspouseemployer['second_spouse_employer_state'] == '')?@$debtorspouseemployer['spouse_employer_state']:@$debtorspouseemployer['second_spouse_employer_state']
				@endphp
				<option value="AL" <?php if($stt == 'AL')  echo'selected'; else '' ?> >Alabama (AL)</option>
				
				<option value="AK" <?php if($stt == 'AK')  echo'selected'; else '' ?> >Alaska (AK)</option>
				
				<option value="AZ" <?php if($stt == 'AZ')  echo'selected'; else '' ?> >Arizona (AZ)</option>
				
				<option value="AR" <?php if($stt == 'AR')  echo'selected'; else '' ?> >Arkansas (AR)</option>
				
				<option value="CA" <?php if($stt == 'CA')  echo'selected'; else '' ?> >California (CA)</option>
				
				<option value="CO" <?php if($stt == 'CO')  echo'selected'; else '' ?> >Colorado (CO)</option>
				
				<option value="CT" <?php if($stt == 'CT')  echo'selected'; else '' ?> >Connecticut (CT)</option>
				
				<option value="DE" <?php if($stt == 'DE')  echo'selected'; else '' ?> >Delaware (DE)</option>
				
				<option value="DC" <?php if($stt == 'DC')  echo'selected'; else '' ?> >District Of Columbia (DC)</option>
				
				<option value="FL" <?php if($stt == 'FL')  echo'selected'; else '' ?> >Florida (FL)</option>
				
				<option value="GA" <?php if($stt == 'GA')  echo'selected'; else '' ?> >Georgia (GA)</option>
				
				<option value="HI" <?php if($stt == 'HI')  echo'selected'; else '' ?> >Hawaii (HI)</option>
				
				<option value="ID" <?php if($stt == 'ID')  echo'selected'; else '' ?> >Idaho (ID)</option>
				
				<option value="IL" <?php if($stt == 'IL')  echo'selected'; else '' ?> >Illinois (IL)</option>
				
				<option value="IN" <?php if($stt == 'IN')  echo'selected'; else '' ?> >Indiana (IN)</option>
				
				<option value="IA" <?php if($stt == 'IA')  echo'selected'; else '' ?> >Iowa (IA)</option>
				
				<option value="KS" <?php if($stt == 'KS')  echo'selected'; else '' ?> >Kansas (KS)</option>
				
				<option value="KY" <?php if($stt == 'KY')  echo'selected'; else '' ?> >Kentucky (KY)</option>
				
				<option value="LA" <?php if($stt == 'LA')  echo'selected'; else '' ?> >Louisiana (LA)</option>
				
				<option value="ME" <?php if($stt == 'ME')  echo'selected'; else '' ?> >Maine (ME)</option>
				
				<option value="MD" <?php if($stt == 'MD')  echo'selected'; else '' ?> >Maryland (MD)</option>
				
				<option value="MA" <?php if($stt == 'MA')  echo'selected'; else '' ?> >Massachusetts (MA)</option>
				
				<option value="MI" <?php if($stt == 'MI')  echo'selected'; else '' ?> >Michigan (MI)</option>
				
				<option value="MN" <?php if($stt == 'MN')  echo'selected'; else '' ?> >Minnesota (MN)</option>
				
				<option value="MS" <?php if($stt == 'MS')  echo'selected'; else '' ?> >Mississippi (MS)</option>
				
				<option value="MO" <?php if($stt == 'MO')  echo'selected'; else '' ?> >Missouri (MO)</option>
				
				<option value="MT" <?php if($stt == 'MT')  echo'selected'; else '' ?> >Montana (MT)</option>
				
				<option value="NE" <?php if($stt == 'NE')  echo'selected'; else '' ?> >Nebraska (NE)</option>
				
				<option value="NV" <?php if($stt == 'NV')  echo'selected'; else '' ?> >Nevada (NV)</option>
				
				<option value="NH" <?php if($stt == 'NH')  echo'selected'; else '' ?> >New Hampshire (NH)</option>
				
				<option value="NJ" <?php if($stt == 'NJ')  echo'selected'; else '' ?> >New Jersey (NJ)</option>
				
				<option value="NM" <?php if($stt == 'NM')  echo'selected'; else '' ?> >New Mexico (NM)</option>
				
				<option value="NY" <?php if($stt == 'NY')  echo'selected'; else '' ?> >New York (NY)</option>
				
				<option value="NC" <?php if($stt == 'NC')  echo'selected'; else '' ?> >North Carolina (NC)</option>
				
				<option value="ND" <?php if($stt == 'ND')  echo'selected'; else '' ?> >North Dakota (ND)</option>
				
				<option value="OH" <?php if($stt == 'OH')  echo'selected'; else '' ?> >Ohio (OH)</option>
				
				<option value="OK" <?php if($stt == 'OK')  echo'selected'; else '' ?> >Oklahoma (OK)</option>
				
				<option value="OR" <?php if($stt == 'OR')  echo'selected'; else '' ?> >Oregon (OR)</option>
				
				<option value="PA" <?php if($stt == 'PA')  echo'selected'; else '' ?> >Pennsylvania (PA)</option>
				
				<option value="RI" <?php if($stt == 'RI')  echo'selected'; else '' ?> >Rhode Island (RI)</option>
				
				<option value="SC" <?php if($stt == 'SC')  echo'selected'; else '' ?> >South Carolina (SC)</option>
				
				<option value="SD" <?php if($stt == 'SD')  echo'selected'; else '' ?> >South Dakota (SD)</option>
				
				<option value="TN" <?php if($stt == 'TN')  echo'selected'; else '' ?> >Tennessee (TN)</option>
				
				<option value="TX" <?php if($stt == 'TX')  echo'selected'; else '' ?> >Texas (TX)</option>
				
				<option value="UT" <?php if($stt == 'UT')  echo'selected'; else '' ?> >Utah (UT)</option>
				
				<option value="VT" <?php if($stt == 'VT')  echo'selected'; else '' ?> >Vermont (VT)</option>
				
				<option value="VA" <?php if($stt == 'VA')  echo'selected'; else '' ?> >Virginia (VA)</option>
				
				<option value="WA" <?php if($stt == 'WA')  echo'selected'; else '' ?> >Washington (WA)</option>
				
				<option value="WV" <?php if($stt == 'WV')  echo'selected'; else '' ?> >West Virginia (WV)</option>
				
				<option value="WI" <?php if($stt == 'WI')  echo'selected'; else '' ?> >Wisconsin (WI)</option>
				
				<option value="WY" <?php if($stt == 'WY')  echo'selected'; else '' ?> >Wyoming (WY)</option>
			</select>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Zip</label>
					<input type="number" class="form-control required" name="second_spouse_employer_zip" placeholder="Zip" value="{{(@$debtorspouseemployer['second_spouse_employer_zip'] != '')?@$debtorspouseemployer['second_spouse_employer_zip']:@$debtorspouseemployer['spouse_employer_zip']}}">
					<!-- value="<?php echo Helper::validate_key_value('second_spouse_employer_zip',$debtorspouseemployer);?>"> -->
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label class="d-block">How long has spouse been employed at this second job:</label>
					<input type="number" name="spouse_second_employer_job_period" class="form-control required" value="{{(@$debtorspouseemployer['spouse_second_employer_job_period'] != '')?@$debtorspouseemployer['spouse_second_employer_job_period']:@$debtorspouseemployer['spouse_employer_job_period']}}">
					<!-- value="<?php echo Helper::validate_key_value('spouse_second_employer_job_period',$debtorspouseemployer);?>"/> -->
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label class="d-block">Occupation <i>(please state job title or provide brief description)</i>:</label>
					<input type="text" name="spouse_second_employer_occupation" class="form-control required" cols="30" rows="4" placeholder="Title or Description" value="{{(@$debtorspouseemployer['spouse_second_employer_occupation'] != '')?@$debtorspouseemployer['spouse_second_employer_occupation']:@$debtorspouseemployer['spouse_employer_occupation']}}">
					<!-- value="<?php echo Helper::validate_key_value('spouse_second_employer_occupation',$debtorspouseemployer);?>" /> -->
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">Notes</label>
					<textarea name="notes" class="form-control" cols="30" rows="4" placeholder="Notes"><?php echo Helper::validate_key_value('notes',$debtorspouseemployer);?></textarea>
				</div>
			</div>
			</div>
		</div>
		</div>
    </div>
    <div class="col-md-12">
        <div class="next-part-btn text-right">
		<?php if(!empty($can_editable)){?>
            <?php if(!empty($debtorspouseemployer['id'])){?>
			<input type="hidden" class="property_vehicle_ids"  name="id" value="<?php echo Helper::validate_value($debtorspouseemployer['id']);?>">
			<a href="{{route('client_income')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
			 <button class="btn btn-primary shadow-2 mb-4" type="submit">Save<i class="feather icon-chevron-right mr-0"></i></button>

		<?php }else{?>
            <button class="btn btn-primary shadow-2 mb-4" type="submit">Save & Next Part <i class="feather icon-chevron-right mr-0"></i></button>
		<?php }?>
		<?php }else{?>
			<a href="{{route('client_income')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
			<button class="btn btn-primary shadow-2 mb-4" onclick="changeSectionDStep();return false;">Next Part <i class="feather icon-chevron-right mr-0"></i></button>
		<?php }?>
        </div>
    </div>
</div>
