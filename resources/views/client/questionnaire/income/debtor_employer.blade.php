<div class="row mt-3">
	<div class="col-md-12">
		<div class="form-group">
			<label class="d-block">Are you current employed?
			</label>
			<div class="d-inline radio-primary">
				<input type="radio" required  id="current_employed_yes"
					onchange="current_employed_obj('yes');" class="current_employed_yes" name="current_employed" value="1" <?php echo Helper::validate_key_toggle('current_employed',$incomedebtoremployer,1);?>>
				<label for="current_employed_yes" class="cr">Yes</label>
			</div>
			<div class="d-inline radio-primary">
				<input type="radio" required  id="current_employed_no"
					onchange="current_employed_obj('no');" class="current_employed" name="current_employed" value="0" <?php echo Helper::validate_key_toggle('current_employed',$incomedebtoremployer,0);?>>
				<label for="current_employed_no" class="cr">No</label>
			</div>

		</div>
	</div>
	<div class="col-md-12 <?php echo Helper::key_hide_show_v('current_employed',$incomedebtoremployer);?>" id="current_employed_obj_data">
		<div class="row">
		<div class="col-md-7">
			<p class="section-part-title"><span> Debtor's Employer Information </span></p>
		</div>
	   <div class="col-md-12">
			<div class="form-group">
				<label class="d-block">Name of your  employer:</label>
				 <input type="text" name="employer_name" class="form-control required" value="<?php echo Helper::validate_key_value('employer_name',$incomedebtoremployer);?>"/><br>				
			</div>
		</div>
		<div class="col-md-12">
			<label class="d-block">Address of your  employer:</label>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label class="d-block">Street Address</label>
				<input type="text" name="name_address_employer" class="form-control required"  placeholder="Street Address" value="<?php echo Helper::validate_key_value('name_address_employer',$incomedebtoremployer);?>">
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label class="d-block">Address Line 2</label>
				<input type="text" name="employer_address_line" class="form-control required"  placeholder="Address Line 2" value="<?php echo Helper::validate_key_value('employer_address_line',$incomedebtoremployer);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>City</label>
				<input type="text" class="form-control required" name="employer_city" placeholder="City" value="<?php echo Helper::validate_key_value('employer_city',$incomedebtoremployer);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>State</label>
				{{-- <input type="text" class="form-control required" name="employer_state" placeholder="State" value="<?php echo Helper::validate_key_value('employer_state',$incomedebtoremployer);?>"> --}}

				<select class="form-control required" name="employer_state" >

					<option disabled="">Please Select State</option>
	
				<option value="AL" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'AL')  echo'selected'; else '' ?> >Alabama (AL)</option>
				
				<option value="AK" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'AK')  echo'selected'; else '' ?> >Alaska (AK)</option>
				
				<option value="AZ" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'AZ')  echo'selected'; else '' ?> >Arizona (AZ)</option>
				
				<option value="AR" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'AR')  echo'selected'; else '' ?> >Arkansas (AR)</option>
				
				<option value="CA" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'CA')  echo'selected'; else '' ?> >California (CA)</option>
				
				<option value="CO" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'CO')  echo'selected'; else '' ?> >Colorado (CO)</option>
				
				<option value="CT" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'CT')  echo'selected'; else '' ?> >Connecticut (CT)</option>
				
				<option value="DE" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'DE')  echo'selected'; else '' ?> >Delaware (DE)</option>
				
				<option value="DC" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'DC')  echo'selected'; else '' ?> >District Of Columbia (DC)</option>
				
				<option value="FL" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'FL')  echo'selected'; else '' ?> >Florida (FL)</option>
				
				<option value="GA" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'GA')  echo'selected'; else '' ?> >Georgia (GA)</option>
				
				<option value="HI" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'HI')  echo'selected'; else '' ?> >Hawaii (HI)</option>
				
				<option value="ID" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'ID')  echo'selected'; else '' ?> >Idaho (ID)</option>
				
				<option value="IL" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'IL')  echo'selected'; else '' ?> >Illinois (IL)</option>
				
				<option value="IN" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'IN')  echo'selected'; else '' ?> >Indiana (IN)</option>
				
				<option value="IA" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'IA')  echo'selected'; else '' ?> >Iowa (IA)</option>
				
				<option value="KS" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'KS')  echo'selected'; else '' ?> >Kansas (KS)</option>
				
				<option value="KY" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'KY')  echo'selected'; else '' ?> >Kentucky (KY)</option>
				
				<option value="LA" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'LA')  echo'selected'; else '' ?> >Louisiana (LA)</option>
				
				<option value="ME" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'ME')  echo'selected'; else '' ?> >Maine (ME)</option>
				
				<option value="MD" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'MD')  echo'selected'; else '' ?> >Maryland (MD)</option>
				
				<option value="MA" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'MA')  echo'selected'; else '' ?> >Massachusetts (MA)</option>
				
				<option value="MI" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'MI')  echo'selected'; else '' ?> >Michigan (MI)</option>
				
				<option value="MN" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'MN')  echo'selected'; else '' ?> >Minnesota (MN)</option>
				
				<option value="MS" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'MS')  echo'selected'; else '' ?> >Mississippi (MS)</option>
				
				<option value="MO" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'MO')  echo'selected'; else '' ?> >Missouri (MO)</option>
				
				<option value="MT" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'MT')  echo'selected'; else '' ?> >Montana (MT)</option>
				
				<option value="NE" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'NE')  echo'selected'; else '' ?> >Nebraska (NE)</option>
				
				<option value="NV" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'NV')  echo'selected'; else '' ?> >Nevada (NV)</option>
				
				<option value="NH" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'NH')  echo'selected'; else '' ?> >New Hampshire (NH)</option>
				
				<option value="NJ" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'NJ')  echo'selected'; else '' ?> >New Jersey (NJ)</option>
				
				<option value="NM" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'NM')  echo'selected'; else '' ?> >New Mexico (NM)</option>
				
				<option value="NY" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'NY')  echo'selected'; else '' ?> >New York (NY)</option>
				
				<option value="NC" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'NC')  echo'selected'; else '' ?> >North Carolina (NC)</option>
				
				<option value="ND" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'ND')  echo'selected'; else '' ?> >North Dakota (ND)</option>
				
				<option value="OH" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'OH')  echo'selected'; else '' ?> >Ohio (OH)</option>
				
				<option value="OK" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'OK')  echo'selected'; else '' ?> >Oklahoma (OK)</option>
				
				<option value="OR" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'OR')  echo'selected'; else '' ?> >Oregon (OR)</option>
				
				<option value="PA" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'PA')  echo'selected'; else '' ?> >Pennsylvania (PA)</option>
				
				<option value="RI" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'RI')  echo'selected'; else '' ?> >Rhode Island (RI)</option>
				
				<option value="SC" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'SC')  echo'selected'; else '' ?> >South Carolina (SC)</option>
				
				<option value="SD" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'SD')  echo'selected'; else '' ?> >South Dakota (SD)</option>
				
				<option value="TN" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'TN')  echo'selected'; else '' ?> >Tennessee (TN)</option>
				
				<option value="TX" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'TX')  echo'selected'; else '' ?> >Texas (TX)</option>
				
				<option value="UT" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'UT')  echo'selected'; else '' ?> >Utah (UT)</option>
				
				<option value="VT" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'VT')  echo'selected'; else '' ?> >Vermont (VT)</option>
				
				<option value="VA" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'VA')  echo'selected'; else '' ?> >Virginia (VA)</option>
				
				<option value="WA" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'WA')  echo'selected'; else '' ?> >Washington (WA)</option>
				
				<option value="WV" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'WV')  echo'selected'; else '' ?> >West Virginia (WV)</option>
				
				<option value="WI" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'WI')  echo'selected'; else '' ?> >Wisconsin (WI)</option>
				
				<option value="WY" <?php if(Helper::validate_key_value('employer_state',$incomedebtoremployer) == 'WY')  echo'selected'; else '' ?> >Wyoming (WY)</option>
			</select>

			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Zip</label>
				<input type="number" class="form-control required" name="employer_zip" placeholder="Zip" value="<?php echo Helper::validate_key_value('employer_zip',$incomedebtoremployer);?>">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label class="d-block">How long you been employed at this job:</label>
				<input type="number" name="employer_job_period" class="form-control required" value="<?php echo Helper::validate_key_value('employer_job_period',$incomedebtoremployer);?>"/>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label class="d-block">Occupation <i>(please state job title or provide brief description)</i>:</label>
				<input type="text" name="employer_occupation" class="form-control required" cols="30" rows="4" placeholder="Title or Description" value="<?php echo Helper::validate_key_value('employer_occupation',$incomedebtoremployer);?>">
			</div>
		</div>
		<div class="col-md-7">
			<div class="form-group">
				<label class="d-block">Do you have any other jobs or additional employers?</label>
				<div class="d-inline radio-primary">
					<input type="radio" id="other-jobs-no" name="any_other_jobs"
						onchange="getHiddenData('no');" required <?php echo Helper::validate_key_toggle('any_other_jobs',$incomedebtoremployer,0);?> value="0">
					<label for="other-jobs-no" class="cr">No</label>
				</div>
				<div class="d-inline radio-primary">
					<input type="radio" id="other-jobs-yes" name="any_other_jobs"
						onchange="getHiddenData('yes');" required <?php echo Helper::validate_key_toggle('any_other_jobs',$incomedebtoremployer,1);?> value="1">
					<label for="other-jobs-yes" class="cr">Yes</label>
				</div>
			</div>
		</div>
		<div class="col-md-12 <?php echo Helper::key_hide_show_v('any_other_jobs',$incomedebtoremployer);?>" id="condition-data">
			<div class="row">
			<div class="col-md-12 pt-3">
				<label class="d-block"><strong>Second</strong> employer <i>(if applicable)</i> :</label>
				<div class="form-group">
					<label class="d-block">Name and Address of your  <strong> Second </strong> employer:</label>
					<input type="text" name="second_employer_name" class="form-control required" value="<?php echo Helper::validate_key_value('second_employer_name',$incomedebtoremployer);?>"/>					
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">Street Address</label>
					<input type="text" name="name_address_second_employer" class="form-control required"  placeholder="Street Address" value="{{(@$incomedebtoremployer['name_address_second_employer'] != '')?@$incomedebtoremployer['name_address_second_employer']:@$incomedebtoremployer['name_address_employer']}}">
					<!-- <?php echo Helper::validate_key_value('name_address_second_employer',$incomedebtoremployer);?> -->
				</div>
			</div>	
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">Address Line 2</label>
					<input type="text" name="second_employer_address_line" class="form-control required"  placeholder="Address Line 2" value="{{(@$incomedebtoremployer['second_employer_address_line'] != '')?@$incomedebtoremployer['second_employer_address_line']:@$incomedebtoremployer['employer_address_line']}}" >

					<!-- value="<?php echo Helper::validate_key_value('second_employer_address_line',$incomedebtoremployer);?>"> -->
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>City</label>
					<input type="text" class="form-control required" name="second_employer_city" placeholder="City"
					value="{{(@$incomedebtoremployer['second_employer_city'] != '')?@$incomedebtoremployer['second_employer_city']:@$incomedebtoremployer['employer_city']}}"
					> <!-- value="<?php echo Helper::validate_key_value('second_employer_city',$incomedebtoremployer);?>"> -->
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>State</label>
					{{-- <input type="text" class="form-control required" name="second_employer_state" placeholder="State" value="<?php echo Helper::validate_key_value('second_employer_state',$incomedebtoremployer);?>"> --}}
					<select  class="form-control required" name="second_employer_state" >

					<option disabled="">Please Select State</option>
				@php
				$stt = (@$incomedebtoremployer['second_employer_state'] == '')?@$incomedebtoremployer['employer_state']:@$incomedebtoremployer['second_employer_state']
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
					<input type="number" class="form-control required" name="second_employer_zip" placeholder="Zip"
						value="{{(@$incomedebtoremployer['second_employer_zip'] != '')?@$incomedebtoremployer['second_employer_zip']:@$incomedebtoremployer['employer_zip']}}"
						>
					 <!-- value="<?php echo Helper::validate_key_value('second_employer_zip',$incomedebtoremployer);?>"> -->
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label class="d-block">How long you been employed at this second job:</label>
					<input type="number" name="second_employer_job_period" class="form-control required"
					value="{{(@$incomedebtoremployer['second_employer_job_period'] != '')?@$incomedebtoremployer['second_employer_job_period']:@$incomedebtoremployer['employer_job_period']}}" >
					<!-- value="<?php echo Helper::validate_key_value('second_employer_job_period',$incomedebtoremployer);?>"/> -->
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label class="d-block">Occupation <i>(please state job title or provide brief description)</i>:</label>
					<input type="text" name="second_employer_occupation" class="form-control required" cols="30" rows="4" placeholder="Title or Description" value="{{(@$incomedebtoremployer['second_employer_occupation'] != '')?@$incomedebtoremployer['second_employer_occupation']:@$incomedebtoremployer['employer_occupation']}}" >
					<!-- value="<?php echo Helper::validate_key_value('second_employer_occupation',$incomedebtoremployer);?>" /> -->
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">Notes</label>
					<textarea name="notes" class="form-control" cols="30" rows="4" placeholder="Notes"><?php echo Helper::validate_key_value('notes',$incomedebtoremployer);?></textarea>
				</div>
			</div>
			</div>
		</div>
		</div>
    </div>
    <div class="col-md-12">
        <div class="next-part-btn text-right">
		<?php if(!empty($can_editable)){?>
		<?php if(!empty($incomedebtoremployer['id'])){?>
			<input type="hidden" class="property_vehicle_ids"  name="id" value="<?php echo Helper::validate_value($incomedebtoremployer['id']);?>">
			 <button class="btn btn-primary shadow-2 mb-4" type="submit">Save<i class="feather icon-chevron-right mr-0"></i></button>			 
		<?php }else{?>
            <button class="btn btn-primary shadow-2 mb-4" type="submit">Save & Next Part <i class="feather icon-chevron-right mr-0"></i></button>
		<?php }?>
		<?php }else{?>
			<?php if(!empty($redirect)){?>
				<a class="btn btn-primary shadow-2 mb-4" href="{{route('client_income_step2')}}">Next Part<i class="feather icon-chevron-right mr-0"></i></a>
			 <?php }else{?>			 
			 <button class="btn btn-primary shadow-2 mb-4" onclick="changeSectionDStep();return false;">Next Part<i class="feather icon-chevron-right mr-0"></i></button>
			 <?php }?>
		<?php }?>
        </div>
    </div>
</div>
