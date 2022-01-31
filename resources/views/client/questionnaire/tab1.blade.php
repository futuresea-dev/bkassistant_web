<!-- Tab 1 -->
<div class="scan-os cstm-id  onetimewelcomevideo">
	<a class="btn shadow-2 mb-4 download-form" data-toggle="modal" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video" data-video="https://www.youtube.com/embed/YrqFXVxBUis" data-video2="https://www.youtube.com/embed/nUsenppRGUc">
		<img src="{{url('assets/images/video-play1.jpg')}}" style="height: 36px;display: block;margin: 1px auto;">
		Welcome Video
	</a>
</div>

<div class="scan-os cstm-id step-to-cl">
	<a class="btn shadow-2 mb-4 download-form" data-toggle="modal" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video" data-video="https://www.youtube.com/embed/YrqFXVxBUis" data-video2="https://www.youtube.com/embed/nUsenppRGUc">
		<img src="{{url('assets/images/video-play.jpg')}}" style="height: 36px;display: block;margin: 1px auto 0px 40px ;">
		Step to step Tutorial
	</a>
</div>
<?php 
$usa_states='{ "AL": "Alabama", "AK": "Alaska", "AS": "American Samoa", "AZ": "Arizona", "AR": "Arkansas", "CA": "California", "CO": "Colorado", "CT": "Connecticut", "DE": "Delaware", "DC": "District Of Columbia", "FM": "Federated States Of Micronesia", "FL": "Florida", "GA": "Georgia", "GU": "Guam", "HI": "Hawaii", "ID": "Idaho", "IL": "Illinois", "IN": "Indiana", "IA": "Iowa", "KS": "Kansas", "KY": "Kentucky", "LA": "Louisiana", "ME": "Maine", "MH": "Marshall Islands", "MD": "Maryland", "MA": "Massachusetts", "MI": "Michigan", "MN": "Minnesota", "MS": "Mississippi", "MO": "Missouri", "MT": "Montana", "NE": "Nebraska", "NV": "Nevada", "NH": "New Hampshire", "NJ": "New Jersey", "NM": "New Mexico", "NY": "New York", "NC": "North Carolina", "ND": "North Dakota", "MP": "Northern Mariana Islands", "OH": "Ohio", "OK": "Oklahoma", "OR": "Oregon", "PW": "Palau", "PA": "Pennsylvania", "PR": "Puerto Rico", "RI": "Rhode Island", "SC": "South Carolina", "SD": "South Dakota", "TN": "Tennessee", "TX": "Texas", "UT": "Utah", "VT": "Vermont", "VI": "Virgin Islands", "VA": "Virginia", "WA": "Washington", "WV": "West Virginia", "WI": "Wisconsin", "WY": "Wyoming" }';
	$usa_states=json_decode($usa_states,1);
?>
<div class="tab-pane fade <?php if(!empty($tab) && $tab=='tab1'){?>active show <?php }?>" id="section1" role="tabpanel"
	aria-labelledby="section1-tab">

	<h3 class="section-main-title text-c-blue f-w-800"> Basic Information</h3>



	<div id="basic-info-part-a" <?php if(!$step1){?> class="hidestep" <?php }?>>

		<div class="row mt-3">

		<form name="client_basic_info_step1" id="client_basic_info_step1" action="{{route('client_basic_info_step1')}}" method="post">

		@csrf

			<div class="col-md-12">

				<p class="section-part-title"><span> Name and Address

					</span>

				</p>

			</div>

			<div class="col-md-12">

				<label>Name</label>

				<div class="row name-fields">

					<div class="col-md-4">

						<div class="form-group">

							<input type="text" class="form-control required" placeholder="First Name"  name="part1[name]" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartA);?>">

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<input type="text" class="form-control required" placeholder="Middle Name"  name="part1[middle_name]" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartA);?>">

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<input type="text" class="form-control required" placeholder="Last Name"  name="part1[last_name]" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartA);?>">

						</div>

					</div>
				</div>
			</div>

			<!-- Condition here -->

			<div class="col-md-12">

				<div class="form-group">

					<label class="d-block">Have you used any other names in the past eight years?</label>

					<div class="d-inline radio-primary">

						<input type="radio" id="other-name-no" name="part1[any_other_name][past_eight]"

                        onchange="getHiddenData('no');" required <?php echo Helper::validate_key_toggle('any_other_name',$BasicInfoPartA,0);?> value="0">

						<label for="other-name-no" class="cr">No</label>

					</div>

					<div class="d-inline radio-primary">

						<input type="radio" id="other-name-yes" name="part1[any_other_name][past_eight]"

							onchange="getHiddenData('yes');" required <?php echo Helper::validate_key_toggle('any_other_name',$BasicInfoPartA,1);?> value="1">

						<label for="other-name-yes" class="cr">Yes</label>

					</div>

				</div>

			</div>

			<!-- Condition data -->
			<div class="col-md-12 <?php echo Helper::key_hide_show_v('any_other_name',$BasicInfoPartA);?>" id="condition-data">
				<?php

				$k=0;

				if(!empty($BasicInfo_AnyOtherName['name']) && is_array($BasicInfo_AnyOtherName['name'])){
					if(count($BasicInfo_AnyOtherName['name'])>0){
                        for($k=0;$k<count($BasicInfo_AnyOtherName['name']);$k++){
				?>
                            @include("client.questionnaire.basic.other_names",$BasicInfo_AnyOtherName)
                <?php } ?>
                <?php }
                } else { $k = 0;?>
                    @include("client.questionnaire.basic.other_names",$BasicInfo_AnyOtherName)
                    
                <?php $k++; }?>

				<div class="col-12 mt-3 p-0">
                    <button class="btn btn-primary shadow-2 rounded-0" onclick="addOther_names(); return false;">
					<i class="feather icon-plus mr-0"></i>Add More
                    </button>
                    <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names remove-btn text-danger cursor-pointer" style="position: absolute;right: 20px;"
                        onclick="remove_clone_box('other_name_frm')"></i><br/>
                </div>
			</div>

			<div class="col-md-12">

			<label>Telephone Numbers\Email address:</label>

			<div class="row">

				<div class="col-md-6">

					<div class="form-group">

						<label>Home</label>

						<input type="text" class="form-control required" name="part1[any_other_name][home]" placeholder="Home" value="<?php echo Helper::validate_key_value('home',$BasicInfo_AnyOtherName);?>">

					</div>

				</div>

				<div class="col-md-6">

					<div class="form-group">

						<label>Work</label>

						<input type="text" class="form-control required" name="part1[any_other_name][work]" placeholder="Work" value="<?php echo Helper::validate_key_value('work',$BasicInfo_AnyOtherName);?>">

					</div>

				</div>

				<div class="col-md-6">

					<div class="form-group">

						<label>Cell</label>

						<input type="text" class="form-control required" name="part1[any_other_name][cell]" placeholder="Cell" value="<?php echo Helper::validate_key_value('cell',$BasicInfo_AnyOtherName);?>">

					</div>

				</div>

				<div class="col-md-6">

					<div class="form-group">

						<label>Email</label>

						<?php $any_other_name_email= Helper::validate_key_value('email',$BasicInfo_AnyOtherName);

							$any_other_name_email=(!empty($any_other_name_email))?$any_other_name_email:Auth::user()->email;;

						?>

						<input type="text" class="form-control required" name="part1[any_other_name][email]" placeholder="Email" value="<?php echo $any_other_name_email;?>">

					</div>

				</div>

			</div>
			

			<div class="row">

			<!-- Condition data End -->

			<div class="col-md-6">

				<div class="form-group">

					<label>Social Security Number</label>

					<label style="float: right;">I don’t have a SSN <input type="checkbox" name="part1[has_security_number]" <?php echo Helper::validate_key_toggle('has_security_number',$BasicInfoPartA,1);?> value="1" onclick="

					if($(this).is(':checked'))

						{

							$('.security_number_sec').removeClass('required');

							$('#part1_itin').removeAttr('disabled');

							$('.security_number_sec').attr('disabled',true)

						}else{

							$('.security_number_sec').addClass('required');

							$('#part1_itin').attr('disabled',true);

							$('.security_number_sec').attr('disabled',false)

						}">

						</label>

					<?php

						$required='required';

						$disabled='disabled';

						if(!empty($BasicInfoPartA['has_security_number'])){

							$required='';

							$disabled='';

						}

					?>

					<input type="number" name="part1[security_number]" class="form-control security_number_sec <?php echo $required;?>"

						placeholder="Social Security Number" value="<?php echo Helper::validate_key_value('security_number',$BasicInfoPartA);?>">

				</div>

			</div>

			<div class="col-md-6 d-none">

				<div class="form-group">

					<label>Date of Birth</label>

					<input type="date" class="form-control required" name="part1[date_of_birth]" placeholder="Date of Birth" value="<?php echo Helper::validate_key_value('date_of_birth',$BasicInfoPartA);?>">

				</div>

			</div>

			<div class="col-md-6">

				<div class="form-group">

					<label>ITIN (Individual Taxpayer Identification Numbers)</label>

					<input type="text" class="form-control" id="part1_itin" name="part1[itin]" placeholder="ITIN" value="<?php echo Helper::validate_key_value('itin',$BasicInfoPartA);?>" <?php echo $disabled;?>>

				</div>

			</div>

			<div class="col-md-6">

				<div class="form-group">

					<label>Address</label>

					<input type="text" class="form-control required" name="part1[Address]" placeholder="Address" value="<?php echo Helper::validate_key_value('Address',$BasicInfoPartA);?>">

				</div>

			</div>

			<div class="col-md-6">

				<div class="form-group">

					<label>City</label>

					<input type="text" class="form-control required" name="part1[City]" placeholder="City" value="<?php echo Helper::validate_key_value('City',$BasicInfoPartA);?>">

				</div>

			</div>

			<div class="col-md-4">
				<div class="form-group">
					<label>County</label>
					<input type="text" class="form-control required" name="part1[country]" placeholder="County" value="<?php echo Helper::validate_key_value('country',$BasicInfoPartA);?>">
				</div>
			</div>

			<div class="col-md-4">

				<div class="form-group">

					<label>State</label>

					<select class="form-control required" name="part1[state]">
						<option disabled="">Please Select State</option>
						<?php foreach($usa_states as $us_key=>$usa_vl){?>
						<option value="<?php echo $us_key;?>" {{($us_key == Helper::validate_key_value('state',$BasicInfoPartA)) ? 'selected' : ''}} ><?php echo $usa_vl;?></option>
						<?php }?>

					</select>
				</div>

			</div>

			<div class="col-md-4">

				<div class="form-group">

					<label>Zip</label>

					<input type="number" class="form-control required" name="part1[zip]" placeholder="Zip" value="<?php echo Helper::validate_key_value('zip',$BasicInfoPartA);?>">

				</div>

			</div>





			<div class="col-md-6">

				<div class="form-group">

					<label class="d-block">Have you lived at this address for at

						least

						180 days?</label>

					<div class="d-inline radio-primary">

						<input type="radio" id="lived-addressed-no" name="part1[lived_address_from_180]" required <?php echo Helper::validate_key_toggle('lived_address_from_180',$BasicInfoPartA,0);?>>

						<label for="lived-addressed-no" class="cr">No</label>

					</div>

					<div class="d-inline radio-primary">

						<input type="radio" id="lived-addressed-yes" name="part1[lived_address_from_180]" required <?php echo Helper::validate_key_toggle('lived_address_from_180',$BasicInfoPartA,1);?>>

						<label for="lived-addressed-yes" class="cr">Yes</label>

					</div>

				</div>

			</div>

			</div>

			</div>

			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">Marital Status:</label>
					<div class="d-inline radio-primary">
						<input type="radio" id="never-married" name="part1[marital_status]" required <?php echo Helper::validate_key_toggle('marital_status',$BasicInfoPartA,1);?> value="1">
						<label for="never-married" class="cr">Single</label>
					</div>
                    <div class="d-inline radio-primary">
						<input type="radio" id="divorced" name="part1[marital_status]" required <?php echo Helper::validate_key_toggle('marital_status',$BasicInfoPartA,5);?> value="5">
						<label for="divorced" class="cr">Divorced</label>
					</div>
					<div class="d-inline radio-primary">
						<input type="radio" id="living-together" name="part1[marital_status]" required <?php echo Helper::validate_key_toggle('marital_status',$BasicInfoPartA,2);?> value="2">
						<label for="living-together" class="cr">Married & living together</label>
					</div>
                    <div class="d-inline radio-primary">
						<input type="radio" id="living-apart" name="part1[marital_status]" required <?php echo Helper::validate_key_toggle('marital_status',$BasicInfoPartA,4);?> value="4">
						<label for="living-apart" class="cr">Married & living in separate households</label>
					</div>
					<div class="d-inline radio-primary">
						<input type="radio" id="widowed" name="part1[marital_status]" required <?php echo Helper::validate_key_toggle('marital_status',$BasicInfoPartA,3);?> value="3">
						<label for="widowed" class="cr">Widowed</label>
					</div>
				</div>
			</div>

			<div class="col-md-12">

				<div class="next-part-btn text-right">

				<?php if(!empty($can_editable)){?>

				<?php if(!empty($BasicInfoPartA['id'])){?>

					<input type="hidden" name="basicinfo_parta_id" value="<?php echo Helper::validate_key_value('id',$BasicInfoPartA);?>">

					<input type="hidden" name="basicinfo_anyothername_id" value="<?php echo Helper::validate_key_value('id',$BasicInfo_AnyOtherName);?>">

					<input type="hidden" name="basicinfo_addressfrom730_id" value="<?php echo Helper::validate_key_value('id',$BasicInfo_AddressFrom730);?>">

					<button type="submit" class="btn btn-primary shadow-2 mb-4">Save <i

							class="feather icon-chevron-right mr-0"></i></button>



				<?php }else{?>

					<button type="submit" class="btn btn-primary shadow-2 mb-4">Next Part <i

							class="feather icon-chevron-right mr-0"></i></button>

				<?php }?>

				<?php }else{?>

					<button class="btn btn-primary shadow-2 mb-4" onclick="changeStep(this);return false;">Next Part <i class="feather icon-chevron-right mr-0"></i></button>

				<?php }?>

				</div>

			</div>

		</form>

		</div>

	</div>

	<div id="basic-info-part-b" <?php if(!$step2){?> class="hidestep" <?php }?>>

		<div class="row mt-3">

		<form name="client_basic_info_step2" id="client_basic_info_step2" action="{{route('client_basic_info_step2')}}" method="post">

		@csrf

			<div class="col-md-12">

				<p class="section-part-title"><span>Name and Address of

						Spouse

					</span>

				</p>

			</div>

			<div class="col-md-12">

				<p class="section-part-title">If you are filing jointly with your

					spouse, fill in the following information about your spouse:

				</p>

			</div>

			<div class="col-md-12">

				<label>Name</label>

				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<input type="text" class="form-control" required placeholder="Name" name="part2[name]" value="<?php echo Helper::validate_key_value('name',$BasicInfoPartB);?>">

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<input type="text" class="form-control required" placeholder="Middle Name"  name="part2[middle_name]" value="<?php echo Helper::validate_key_value('middle_name',$BasicInfoPartB);?>">

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<input type="text" class="form-control required" placeholder="Last Name"  name="part2[last_name]" value="<?php echo Helper::validate_key_value('last_name',$BasicInfoPartB);?>">

						</div>

					</div>

				</div>

			</div>

			<!-- condition here -->

			<div class="col-md-12">

				<div class="form-group">

					<label class="d-block">Has your spouse used any other names in the past 8 years?</label>

					<div class="d-inline radio-primary">

						<input type="radio" id="past8years-no" name="part2[spouse_any_other_name]" required <?php echo Helper::validate_key_toggle('spouse_any_other_name',$BasicInfoPartB,0);?> onchange="common_toggle_fn('no','spouse_any_other_name_data');">

						<label for="past8years-no" class="cr">No</label>

					</div>

					<div class="d-inline radio-primary">

						<input type="radio" id="past8years-yes" name="part2[spouse_any_other_name]" required <?php echo Helper::validate_key_toggle('spouse_any_other_name',$BasicInfoPartB,1);?> onchange="common_toggle_fn('yes','spouse_any_other_name_data');">

						<label for="past8years-yes" class="cr">Yes</label>

					</div>

				</div>

			</div>

			<div class="col-md-12 <?php echo Helper::key_hide_show_v('spouse_any_other_name',$BasicInfoPartB);?>" id="spouse_any_other_name_data">
			@if(!empty($BasicInfoPartB['spouse_other_name']) && is_array($BasicInfoPartB['spouse_other_name']))

			@for($j=0; $j < count($BasicInfoPartB['spouse_other_name']); $j++)

				@include("client.questionnaire.basic.spouse_other_names",$BasicInfoPartB)
			
			@endfor
			@else

				@include("client.questionnaire.basic.spouse_other_names",$BasicInfoPartB)
			@endif
				
			<div class="col-12 mt-3 p-0">
                <button class="btn btn-primary shadow-2 rounded-0" onclick="spouse_addOther_names();return false;"><i class="feather icon-plus mr-0"></i> Add More </button>
                <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names remove-btn text-danger cursor-pointer" style="position: absolute;right: 20px;"
                    onclick="remove_clone_box('spouse_other_name_frm')"></i><br/>
            </div>
				
			</div>
			

			<!-- condition here -->

			<div class="col-md-12 d-none">

				<div class="form-group">

					<label class="d-block">Has your spouse used any business names

						or

						Employer Identification Numbers (EIN) in the last 8

						years?</label>

					<div class="d-inline radio-primary">

						<input type="radio" id="einpast8years-no" name="part2[spouse_has_ein]" required <?php echo Helper::validate_key_toggle('spouse_has_ein',$BasicInfoPartB,0);?>>

						<label for="einpast8years-no" class="cr">No</label>

					</div>

					<div class="d-inline radio-primary">

						<input type="radio" id="EIN-yes" name="part2[spouse_has_ein]" required <?php echo Helper::validate_key_toggle('spouse_has_ein',$BasicInfoPartB,1);?>>

						<label for="EIN-yes" class="cr">Yes</label>

					</div>

				</div>

			</div>


			<!-- condition data -->

		<div class="col-md-12" style='margin-top:30px'>

			<div class="row">

			<div class="col-md-6">

				<div class="form-group">

					<label>Social Security Number</label>

					<label style="float: right;">I don’t have a SSN <input type="checkbox" name="part2[has_security_number]" <?php echo Helper::validate_key_toggle('has_security_number',$BasicInfoPartB,1);?> value="1" onclick="

					if($(this).is(':checked')){

						$('.security_number_secp2').removeClass('required');

						$('#part2_itin').removeAttr('disabled');

						$('.security_number_secp2').attr('disabled',true)

					}

					else{

						$('.security_number_secp2').attr('disabled',false)

							$('.security_number_secp2').addClass('required');$('#part2_itin').attr('disabled',true);

						}">

				</label>

					<?php

						$required='required';

						$disabled='disabled';

						if(!empty($BasicInfoPartB['has_security_number'])){

							$required='';

							$disabled='';

						}

					?>

					<input type="number" name="part2[social_security_number]" class="form-control security_number_secp2 <?php echo $required;?>"

						placeholder="Social Security Number" value="<?php echo Helper::validate_key_value('social_security_number',$BasicInfoPartB);?>">

				</div>

			</div>

			<div class="col-md-6 d-none">

				<div class="form-group">

					<label>Driver's License Number</label>

					<input type="number" name="part2[license_number]" class="form-control required"

						placeholder="Driver's License Number" value="<?php echo Helper::validate_key_value('license_number',$BasicInfoPartB);?>">

				</div>

			</div>

			<div class="col-md-6 d-none">

				<div class="form-group">

					<label>Expiration Date</label>

					<input type="date" name="part2[expiration_date]" class="form-control required"

						placeholder="Expiration Date" value="<?php echo Helper::validate_key_value('expiration_date',$BasicInfoPartB);?>">

				</div>

			</div>

			<div class="col-md-6 d-none">

				<div class="form-group">

					<label>State</label>

					<input type="text" name="part2[state]" class="form-control required" placeholder="State" value="<?php echo Helper::validate_key_value('state',$BasicInfoPartB);?>">

				</div>

			</div>

			<div class="col-md-6 d-none">

				<div class="form-group">

					<label>Date of Birth</label>

					<input type="date" name="part2[date_of_birth]" class="form-control required" placeholder="Date of Birth" value="<?php echo Helper::validate_key_value('date_of_birth',$BasicInfoPartB);?>">

				</div>

			</div>

			<div class="col-md-6">

				<div class="form-group">

					<label>ITIN (Individual Taxpayer Identification Numbers)</label>

					<input type="text" name="part2[itin]" id="part2_itin" class="form-control"

						placeholder="ITIN" value="<?php echo Helper::validate_key_value('itin',$BasicInfoPartB);?>" <?php echo $disabled;?>>

				</div>

			</div>

			<div class="col-md-6" style="user-select: auto;">

<div class="form-group" style="user-select: auto;">

	<label class="d-block" style="user-select: auto;">Has your spouse lived at this address for

		at

		least 180 days?</label>

	<div class="d-inline radio-primary" style="user-select: auto;">

		<input type="radio" id="spouselived-no" name="part2[lived_address_from_180]" required="" style="user-select: auto;">

		<label for="spouselived-no" class="cr" style="user-select: auto;">No</label>

	</div>

	<div class="d-inline radio-primary" style="user-select: auto;">

		<input type="radio" id="spouselived-yes" name="part2[lived_address_from_180]" required="" checked="checked" style="user-select: auto;">

		<label for="spouselived-yes" class="cr" style="user-select: auto;">Yes</label>

	</div>

</div>



</div>

			<div class="col-md-12">

				<div class="form-group">

					<label class="d-block">Does your spouse lives at a different address?</label>

					<div class="d-inline radio-primary">

						<input type="radio" id="spouse_different_address-no" name="part2[spouse_different_address]" required <?php echo Helper::validate_key_toggle('spouse_different_address',$BasicInfoPartB,0);?> onchange="common_toggle_fn('no','condition_spouse_different_address');" value="0">

						<label for="spouse_different_address-no" class="cr">No</label>

					</div>

					<div class="d-inline radio-primary">

						<input type="radio" id="spouse_different_address-yes" name="part2[spouse_different_address]" required <?php echo Helper::validate_key_toggle('spouse_different_address',$BasicInfoPartB,1);?> onchange="common_toggle_fn('yes','condition_spouse_different_address');" value="1">

						<label for="spouse_different_address-yes" class="cr">Yes</label>

					</div>

				</div>

			</div>

			<div class="col-md-12 <?php echo Helper::key_hide_show_v('spouse_different_address',$BasicInfoPartB);?>" id="condition_spouse_different_address">

			<div class="col-md-12">

				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label>Address</label>

							<input type="text" name="part2[Address]" class="form-control required"

								placeholder="Address" value="<?php echo Helper::validate_key_value('Address',$BasicInfoPartB);?>">

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label>City</label>

							<input type="text" name="part2[City]" class="form-control required" placeholder="City" value="<?php echo Helper::validate_key_value('City',$BasicInfoPartB);?>">

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label>County</label>

							<input type="text" name="part2[country]" class="form-control required" placeholder="County" value="<?php echo Helper::validate_key_value('country',$BasicInfoPartB);?>">

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label>State</label>

							<select name="part2[state]" class="form-control required">
								<option disabled="">Please Select State</option>
								<?php foreach($usa_states as $us_key=>$usa_vl){?>
								<option value="<?php echo $us_key;?>" {{($us_key == Helper::validate_key_value('state',$BasicInfoPartB)) ? 'selected' : ''}} ><?php echo $usa_vl;?></option>
								<?php }?>

							</select>

						</div>



					</div>



					<div class="col-md-4">

						<div class="form-group">

							<label>Zip</label>

							<input type="number" name="part2[zip]" class="form-control required" placeholder="Zip" value="<?php echo Helper::validate_key_value('zip',$BasicInfoPartB);?>">

						</div>

					</div>



				</div>

			</div>

			</div>

		</div>

		</div>

			<!-- condition-data -->



			<div class="col-md-12">

				<div class="next-part-btn text-right">

				<?php if(!empty($can_editable)){?>

				<?php if(!empty($BasicInfoPartB['id'])){?>

					<input type="hidden" name="basicinfo_partb_id" value="<?php echo $BasicInfoPartB['id'];  ?>">

					<a href="{{route('client_dashboard')}}" class="btn btn-primary shadow-2 mb-4">Back</a>

					<button type="submit" class="btn btn-primary shadow-2 mb-4">Save <i

							class="feather icon-chevron-right mr-0"></i></button>

				<!--<button class="btn btn-primary shadow-2 mb-4" onclick="changeStep(this);return false;">Next <i class="feather icon-chevron-right mr-0"></i></button>-->

				<?php }else{?>

					<button type="submit" class="btn btn-primary shadow-2 mb-4">Next Part <i

							class="feather icon-chevron-right mr-0"></i></button>

				<?php }?>

				<?php }else{?>

					<a href="{{route('client_dashboard')}}" class="btn btn-primary shadow-2 mb-4">Back</a>

					<button class="btn btn-primary shadow-2 mb-4" onclick="changeStep(this);return false;">Next Part <i class="feather icon-chevron-right mr-0"></i></button>

				<?php }?>

				</div>

			</div>

		</form>

		</div>

	</div>



	<div id="basic-info-part-c" <?php if(!$step3){?> class="hidestep" <?php }?>>

		<div class="mt-3">

		<form name="client_basic_info_step3" id="client_basic_info_step3" action="{{route('client_basic_info_step3')}}" method="post">

		@csrf

			<div class="col-md-12">

				<p class="section-part-title"><span>Prior and/or Pending

						Bankruptcy

						Cases </span>

				</p>

			</div>



			<!-- Condition here -->

			<div class="col-md-12">

				<div class="form-group">

					<label class="d-block">Have you filed a bankruptcy case in the 	last 8 years?</label>

					<div class="d-inline radio-primary">

						<input type="radio" id="bankruptcy-no" onchange="common_toggle_fn('no','filed_bankruptcy_case_data');" name="part3[filed_bankruptcy_case_last_8years]" required <?php echo Helper::validate_key_toggle('filed_bankruptcy_case_last_8years',$BasicInfo_PartC,0);?> value="0">

						<label for="bankruptcy-no" class="cr">No</label>

					</div>

					<div class="d-inline radio-primary">

						<input type="radio" id="bankruptcy-yes" onchange="common_toggle_fn('yes','filed_bankruptcy_case_data');" name="part3[filed_bankruptcy_case_last_8years]" required <?php echo Helper::validate_key_toggle('filed_bankruptcy_case_last_8years',$BasicInfo_PartC,1);?> value="1">

						<label for="bankruptcy-yes" class="cr">Yes</label>

					</div>

				</div>

			</div>

			<div class="col-md-12 <?php echo Helper::key_hide_show_v('filed_bankruptcy_case_last_8years',$BasicInfo_PartC);?>" id="filed_bankruptcy_case_data">

				@if(!empty($BasicInfo_PartC['case_filed_state']) && is_array($BasicInfo_PartC['case_filed_state']))

				@for($j=0; $j < count($BasicInfo_PartC['case_filed_state']);$j++)
					
				@include("client.questionnaire.basic.bankruptcy_field",$BasicInfo_PartC)
				@endfor
				@else
				<?php $j = 0; ?>
				@include("client.questionnaire.basic.bankruptcy_field",$BasicInfo_PartC)

				@endif
			<div class="col-12 mt-3 p-0">
				<button class="btn btn-primary shadow-2 rounded-0"
					id="add-more-residence-form"
					onclick="addOther_bankruptcy_clone(); return false;"><i
						class="feather icon-plus mr-0"></i> Add
					More </button>

				 <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
        style="position: absolute;right: 20px;"
        onclick="remove_clone_box('bankruptcy_clone')"></i><br/>
			</div>
		</div>

			<!-- condition-data -->



			<div class="col-md-12 mt-3">

				<div class="form-group">

					<label class="d-block">Are any bankruptcy cases pending or being filed by your spouse, a business partner, or an affiliate?</label>

					<div class="d-inline radio-primary">

						<input type="radio" id="business-partner-no"

							name="part3[any_bankruptcy_cases_pending]" required <?php echo Helper::validate_key_toggle('any_bankruptcy_cases_pending',$BasicInfo_PartD,0);?> onchange="common_toggle_fn('no','any_bankruptcy_cases_pending_data');" value="0">

						<label for="business-partner-no" class="cr">No</label>

					</div>

					<div class="d-inline radio-primary">

						<input type="radio" name="part3[any_bankruptcy_cases_pending]"

							id="business-partner-yes" required <?php echo Helper::validate_key_toggle('any_bankruptcy_cases_pending',$BasicInfo_PartD,1);?> onchange="common_toggle_fn('yes','any_bankruptcy_cases_pending_data');" value="1">

						<label for="business-partner-yes" class="cr">Yes</label>

					</div>

				</div>

				<div class="col-md-12 <?php echo Helper::key_hide_show_v('any_bankruptcy_cases_pending',$BasicInfo_PartD);?>" id="any_bankruptcy_cases_pending_data">



				@if(!empty($BasicInfo_PartD['debator_name']) && is_array($BasicInfo_PartD['debator_name']))

					@for($i=0; $i < count($BasicInfo_PartD['debator_name']); $i++)
						@include("client.questionnaire.basic.bankruptcy_case_pending",$BasicInfo_PartD)

					@endfor
					@else

						@include("client.questionnaire.basic.bankruptcy_case_pending",$BasicInfo_PartD)
@endif



					
					<div class="col-12 mt-3 p-0">
	                    <button class="btn btn-primary shadow-2 rounded-0" onclick="addOther_bankruptcypending_clone(); return false;">
						<i class="feather icon-plus mr-0"></i>Add More
	                    </button>
	                    <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names remove-btn text-danger cursor-pointer" style="position: absolute;right: 20px;"
	                        onclick="remove_clone_box('addOther_bankruptcypending_clone')"></i><br/>
	                </div>

				</div>
				

			</div>

			<div class="col-md-12 mt-3">

				<div class="form-group">

					<label class="d-block">Have you or your spouse ever filed a bankruptcy before?</label>

					<div class="d-inline radio-primary">

						<input type="radio" name="part3[bankruptcy_filed_before]" required <?php echo Helper::validate_key_toggle('bankruptcy_filed_before',$BasicInfo_PartD,0);?> onchange="common_toggle_fn('no','any_bankruptcy_filed_before_data');" value="0">

						<label for="business-partner-no" class="cr">No</label>

					</div>

					<div class="d-inline radio-primary">

						<input type="radio" name="part3[bankruptcy_filed_before]"

							id="business-partner-yes" required <?php echo Helper::validate_key_toggle('bankruptcy_filed_before',$BasicInfo_PartD,1);?> onchange="common_toggle_fn('yes','any_bankruptcy_filed_before_data');" value="1">

						<label for="business-partner-yes" class="cr">Yes</label>

					</div>

				</div>

			</div>

			<div class="col-md-12  <?php echo Helper::key_hide_show_v('bankruptcy_filed_before',$BasicInfo_PartD);?>" id="any_bankruptcy_filed_before_data">

			<div class="col-md-12">
			@if(!empty($BasicInfo_PartD['case_name']) && is_array($BasicInfo_PartD['case_name']))

			@for($j=0; $j < count($BasicInfo_PartD['case_name']); $j++)

				@include("client.questionnaire.basic.any_bankruptcy_filed",$BasicInfo_PartD)

			@endfor
			@else
					<?php $j=0; ?>
				@include("client.questionnaire.basic.any_bankruptcy_filed",$BasicInfo_PartD)
			@endif
			
				</div>
				<div class="col-12 mt-3 p-0">
                    <button class="btn btn-primary shadow-2 rounded-0" onclick="addOther_bankruptcybefore_clone(); return false;">
					<i class="feather icon-plus mr-0"></i>Add More
                    </button>
                    <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names remove-btn text-danger cursor-pointer" style="position: absolute;right: 20px;"
                        onclick="remove_clone_box('any_bankruptcy_filed_before_data')"></i><br/>
                </div>
			</div>
			
				

			<!-- condition-data -->




			<div class="col-md-12">

				<div class="next-part-btn text-right">

				<?php if(!empty($can_editable)){?>

				<?php if(!empty($BasicInfo_PartC['id'])){?>

					<input type="hidden" name="basicinfo_partc_id" value="<?php echo $BasicInfo_PartC['id'];  ?>">

					<?php if(!empty($redirect)){?>

					<a href="{{route('client_dashboard')}}" class="btn btn-primary shadow-2 mb-4">Back</a>

					<?php }else{?>

					<a href="{{route('client_basic_info_step1')}}" class="btn btn-primary shadow-2 mb-4">Back</a>

					<?php }?>

					<button type="submit" class="btn btn-primary shadow-2 mb-4">Save <i

							class="feather icon-chevron-right mr-0"></i></button>

					<!--<button class="btn btn-primary shadow-2 mb-4" onclick="changeStep(this);return false;">Next <i class="feather icon-chevron-right mr-0"></i></button>-->

				<?php }else{?>

					<button type="submit" class="btn btn-primary shadow-2 mb-4">Next Part <i

							class="feather icon-chevron-right mr-0"></i></button>

				<?php }?>

				<?php }else{?>

						<?php if(!empty($redirect)){?>

						<a href="{{route('client_dashboard')}}" class="btn btn-primary shadow-2 mb-4">Back</a>

						<?php }else{?>

						<a href="{{route('client_basic_info_step1')}}" class="btn btn-primary shadow-2 mb-4">Back</a>

						<?php }?>

						<button class="btn btn-primary shadow-2 mb-4" onclick="changeStep(this);return false;">Next Part <i class="feather icon-chevron-right mr-0"></i></button>

				<?php }?>

				</div>

			</div>

		</form>

		</div>

	</div>

	<div id="basic-info-part-d" <?php if(!$step4){?> class="hidestep" <?php }?>>

		<div class="mt-3">

		<form name="client_basic_info_step4" id="client_basic_info_step4" action="{{route('client_basic_info_step4')}}" method="post">

		@csrf

			<div class="col-md-12">

				<p class="section-part-title"><span>Debtors Who Reside as

						Tenants of Residential Property

					</span>

				</p>

			</div>

			<div class="col-md-12">

				<div class="form-group">

					<label class="d-block">Do you have an eviction pending against

						you?</label>

					<div class="d-inline radio-primary">

						<input type="radio" id="eviction-pending-no"

							name="part_rest[eviction_pending]" required <?php echo Helper::validate_key_toggle('eviction_pending',$BasicInfo_PartRest,0);?> onchange="get_eviction_pending('no');" value="0">

						<label for="eviction-pending-no" class="cr">No</label>

					</div>

					<div class="d-inline radio-primary">

						<input type="radio" id="eviction-pending-yes"

							name="part_rest[eviction_pending]" required <?php echo Helper::validate_key_toggle('eviction_pending',$BasicInfo_PartRest,1);?> onchange="get_eviction_pending('yes');" value="1">

						<label for="eviction-pending-yes" class="cr">Yes</label>

					</div>

				</div>

			</div>

			<div class="col-md-12 <?php echo Helper::key_hide_show_v('eviction_pending',$BasicInfo_PartRest);?>" id="get_eviction_pending">

				<label>please provide your landlord's name and address:</label>

				<?php

				$eviction_pending=[];



				if(!empty($BasicInfo_PartRest['eviction_pending_data'])){

					$eviction_dta_info=json_decode($BasicInfo_PartRest['eviction_pending_data'],1);

					$eviction_pending= (!empty($eviction_dta_info) && is_array($eviction_dta_info))?$eviction_dta_info:[];

				}

				?>

				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label>Name</label>

							<input type="text" class="form-control required" name="eviction_pending_data[Name]"

								placeholder="Name" value="<?php echo Helper::validate_key_value('Name',$eviction_pending);?>">

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label>Address</label>

							<input type="text" class="form-control required" name="eviction_pending_data[Address]"

								placeholder="Address" value="<?php echo Helper::validate_key_value('Address',$eviction_pending);?>">

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label>City</label>

							<input type="text" class="form-control required" name="eviction_pending_data[City]" placeholder="City" value="<?php echo Helper::validate_key_value('City',$eviction_pending);?>">

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label>State</label>

							<select  class="form-control required"  name="eviction_pending_data[State]">
								<option disabled="">Please Select State</option>
								<?php foreach($usa_states as $us_key=>$usa_vl){?>
								<option value="<?php echo $us_key;?>" {{($us_key == Helper::validate_key_value('state',$eviction_pending)) ? 'selected' : ''}} ><?php echo $usa_vl;?></option>
												<?php }?>

							</select>

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label>Zip</label>

							<input type="number" class="form-control required" name="eviction_pending_data[Zip]" placeholder="Zip" value="<?php echo Helper::validate_key_value('Zip',$eviction_pending);?>">

						</div>

					</div>



				</div>

			</div>

			<div class="col-md-12">

				<div class="form-group">

					<label class="d-block">Have you or your spouse used any Business names and/or EIN #'s in last 8 years?</label>

					<div class="d-inline radio-primary">

						<input type="radio" id="used_business-no"

							name="part_rest[used_business_ein]" required <?php echo Helper::validate_key_toggle('used_business_ein',$BasicInfo_PartRest,0);?> onchange="get_used_business_ein('no');" value="0">

						<label for="used_business-no" class="cr">No</label>

					</div>

					<div class="d-inline radio-primary">

						<input type="radio" id="used_business-yes"

							name="part_rest[used_business_ein]" required <?php echo Helper::validate_key_toggle('used_business_ein',$BasicInfo_PartRest,1);?> onchange="get_used_business_ein('yes');" value="1">

						<label for="used_business-yes" class="cr">Yes</label>

					</div>

				</div>

			</div>

			<div class="col-md-12 <?php echo Helper::key_hide_show_v('used_business_ein',$BasicInfo_PartRest);?>" id="get_used_business_ein">

				<!-- <label>Please provide your landlord's name and address:</label> -->

				<?php

				$used_business_data=[];



				if(!empty($BasicInfo_PartRest['used_business_ein_data'])){

					$used_business_dta_info=json_decode($BasicInfo_PartRest['used_business_ein_data'],1);

					$used_business_data= (!empty($used_business_dta_info) && is_array($used_business_dta_info))?$used_business_dta_info:[];

				}

				?>

				<div class="row stepfour_main_div">
					<?php //dd($used_business_data); ?>
				@if(!empty($used_business_data) && is_array($used_business_data['own_business_name']))
			
@for($j=-1; $j < count($used_business_data['own_business_name']); $j++)

	@include("client.questionnaire.basic.own_business_names",$used_business_data)

@endfor
@else

	@include("client.questionnaire.basic.own_business_names",$used_business_data)
@endif
	
				<div class="col-md-12 row">
					<button class="btn btn-primary shadow-2 rounded-0"
						id="add-more-residence-form"
						onclick="stepfour(); return false;"><i
							class="feather icon-plus mr-0"></i> Add
						More </button>

					 <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
            style="position: absolute;right: 20px;"
            onclick="remove_clone_box('stepfour_clone')"></i><br/>
				</div>
				</div>
				
			</div>

			<!-- condition-data -->



			<div class="col-md-12">

				<div class="next-part-btn text-right">

				<?php if(!empty($can_editable)){?>

				<?php if(!empty($BasicInfo_PartRest['id'])){?>

					<input type="hidden" name="basicinfo_partrest_id" value="<?php echo $BasicInfo_PartRest['id'];  ?>">

					<a href="{{route('client_basic_info_step2')}}" class="btn btn-primary shadow-2 mb-4">Back</a>

					<button type="submit" class="btn btn-primary shadow-2 mb-4">Save <i

							class="feather icon-chevron-right mr-0"></i></button>

					<!--<button class="btn btn-primary shadow-2 mb-4" onclick="changeStep(this);return false;">Next <i class="feather icon-chevron-right mr-0"></i></button>-->

				<?php }else{?>

					<button type="submit" class="btn btn-primary shadow-2 mb-4">Next Part <i

							class="feather icon-chevron-right mr-0"></i></button>

				<?php }?>

				<?php }else{?>

						<a href="{{route('client_basic_info_step2')}}" class="btn btn-primary shadow-2 mb-4">Back</a>

						<button class="btn btn-primary shadow-2 mb-4" onclick="changeStep(this);return false;">Next Part <i class="feather icon-chevron-right mr-0"></i></button>

				<?php }?>

				</div>

			</div>

		</form>

		</div>

	</div>

	<div id="basic-info-part-e" <?php if(!$step5){?> class="hidestep" <?php }?>>

		<div class="row mt-3">

		<form name="client_basic_info_step5" id="client_basic_info_step5" action="{{route('client_basic_info_step5')}}" method="post">

		@csrf

			<div class="col-md-12">

				<p class="section-part-title"><span> Business Owned as a Sole

						Proprietor

					</span>

				</p>

			</div>

			<!-- <div class="col-md-12">

				<div class="form-group">

					<label class="d-block">Are you the sole proprietor of a full or part-time business?

					</label>

					<div class="d-inline radio-primary">

						<input type="radio" id="part-time-business-no"

							name="part_rest[sole_proprietor]" required  <?php echo Helper::validate_key_toggle('sole_proprietor',$BasicInfo_PartRest,0);?> value="0">

						<label for="part-time-business-no" class="cr">No</label>

					</div>

					<div class="d-inline radio-primary">

						<input id="part-time-business-yes" type="radio"

							name="part_rest[sole_proprietor]" required  <?php echo Helper::validate_key_toggle('sole_proprietor',$BasicInfo_PartRest,1);?> value="1">

						<label for="part-time-business-yes" class="cr">Yes</label>

					</div>

				</div>

			</div> -->

			<div class="col-md-12 mt-3">

				<div class="form-group">

					<label class="d-block"><strong>Are you a sole proprietor of any full or part-time business?</strong></label>

					<label class="d-block">A sole proprietorship is a business you operate as an individual, and is not a separate legal entity such as a corporation,partnership, or LLC. if you have more than one sole proprietorship, use a seperate sheet and attach it to this petition. </label>

					<div class="d-inline radio-primary">

						<input type="radio" name="part_rest[proprietor_status]" required <?php echo Helper::validate_key_toggle('proprietor_status',$BasicInfo_PartRestD,0);?> onchange="common_toggle_fn('no','any_proprietor_status_data');" value="0">

						<label for="business-partner-no" class="cr">No</label>

					</div>

					<div class="d-inline radio-primary">

						<input type="radio" name="part_rest[proprietor_status]" required <?php echo Helper::validate_key_toggle('proprietor_status',$BasicInfo_PartRestD,1);?> onchange="common_toggle_fn('yes','any_proprietor_status_data');" value="1">

						<label for="business-partner-yes" class="cr">Yes</label>

					</div>

				</div>

			</div>

			<div class="col-md-12 <?php echo Helper::key_hide_show_v('proprietor_status',$BasicInfo_PartRestD);?>" id="any_proprietor_status_data">

				<div class="col-md-12">
				<div class="row">


				<div class="col-md-12">

					<div class="form-group">
						<label>Name of business, if any</label>
						<input type="text" class="form-control name_of_business required " name="part_rest[any_proprietor_status_data][name_of_business]" placeholder="" value="<?php echo Helper::validate_key_value('name_of_business',$BasicInfo_PartRestD);?>" aria-invalid="true">
					</div>

				</div>

				<div class="col-md-12">

					<div class="form-group">
						<label>Street Address</label>
						<input type="text" class="form-control number_of_business required " name="part_rest[any_proprietor_status_data][number_of_business]" placeholder="" value="<?php echo Helper::validate_key_value('number_of_business',$BasicInfo_PartRestD);?>" aria-invalid="true">
					</div>

				</div>

				<div class="col-md-12">

					<div class="form-group">
						<label>Address 2</label>
						<input type="text" class="form-control street_of_business required " name="part_rest[any_proprietor_status_data][street_of_business]" placeholder="" value="<?php echo Helper::validate_key_value('street_of_business',$BasicInfo_PartRestD);?>" aria-invalid="true">
					</div>

				</div>


				<div class="col-md-4">

					<div class="form-group">
						<label>City</label>
						<input type="text" class="form-control city_of_business required " name="part_rest[any_proprietor_status_data][city_of_business]" placeholder="" value="<?php echo Helper::validate_key_value('city_of_business',$BasicInfo_PartRestD);?>" aria-invalid="true">
					</div>

				</div>

				<div class="col-md-4">

					<div class="form-group">
						<label>State</label>
						<select name="part_rest[any_proprietor_status_data][state_of_business]" class="form-control required state_of_business">
							<option disabled="">Please Select State</option>
							<?php foreach($usa_states as $us_key=>$usa_vl){?>
							<option value="<?php echo $us_key;?>" {{($us_key == Helper::validate_key_value('state_of_business',$BasicInfo_PartRestD)) ? 'selected' : ''}} ><?php echo $usa_vl;?></option>
							<?php }?>
						</select>
					</div>

				</div>

				<div class="col-md-4">

					<div class="form-group">
						<label>Zip Code</label>
						<input type="text" class="form-control zip_of_business required " name="part_rest[any_proprietor_status_data][zip_of_business]" placeholder="" value="<?php echo Helper::validate_key_value('zip_of_business',$BasicInfo_PartRestD);?>" aria-invalid="true">
					</div>

				</div>

				<div class="col-md-12">
					<div class="form-group">
						<strong>Check the appropriate box to describe your business</strong>
					</div>
				</div>

				<?php


					if(is_array(Helper::validate_key_value('describe_of_business',$BasicInfo_PartRestD))){

						$array_checkbox = Helper::validate_key_value('describe_of_business',$BasicInfo_PartRestD);

						//$array_checkbox = json_decode($jsondata,true);
					}else{
						$array_checkbox = array();
					}



				?>

				<div class="col-md-12">
					<div class="form-group">
						<ul class="listingcheck">
							<li>
								<input type="checkbox" name="part_rest[any_proprietor_status_data][describe_of_business][]" value="health_care_business" @if(in_array('health_care_business', $array_checkbox)) checked @endif><label>Health Care Business (as defined in U.S.C 101(27A))</label>
							</li>
							<li>
								<input type="checkbox" name="part_rest[any_proprietor_status_data][describe_of_business][]" value="single_asset_real_estate" @if(in_array('single_asset_real_estate', $array_checkbox)) checked @endif><label>Single Asset Real Estate (as defined in U.S.C 101(51B))</label>
							</li>
							<li>
								<input type="checkbox" name="part_rest[any_proprietor_status_data][describe_of_business][]" value="stockbroker" @if(in_array('stockbroker', $array_checkbox)) checked @endif><label>Stockbroker (as defined in U.S.C 101(53A))</label>
							</li>
							<li>
								<input type="checkbox" name="part_rest[any_proprietor_status_data][describe_of_business][]" value="commodity_broker" @if(in_array('commodity_broker', $array_checkbox)) checked @endif><label>Commodity Broker (as defined in U.S.C 101(6))</label>
							</li>
							<li>
								<input type="checkbox" name="part_rest[any_proprietor_status_data][describe_of_business][]" value="none" @if(in_array('none', $array_checkbox)) checked @endif><label>None of the above</label>
							</li>

						</ul>
					</div>
				</div>

				</div>
				</div>

			</div>

			

			<!-- condition-data -->



			<div class="col-md-12">

				<div class="next-part-btn text-right">

				<?php if(!empty($can_editable)){?>

				<?php if(!empty($BasicInfo_PartRest['id'])){?>

					<input type="hidden" name="basicinfo_partrest_id" value="<?php echo $BasicInfo_PartRest['id'];  ?>">

					<a href="{{route('client_basic_info_step3')}}" class="btn btn-primary shadow-2 mb-4">Back</a>

					<button type="submit" class="btn btn-primary shadow-2 mb-4">Save <i

							class="feather icon-chevron-right mr-0"></i></button>

					<!--<button class="btn btn-primary shadow-2 mb-4" onclick="changeStep(this);return false;">Next <i class="feather icon-chevron-right mr-0"></i></button>-->

				<?php }else{?>

					<button type="submit" class="btn btn-primary shadow-2 mb-4">Next Part <i

							class="feather icon-chevron-right mr-0"></i></button>

				<?php }?>

				<?php }else{?>

						<a href="{{route('client_basic_info_step3')}}" class="btn btn-primary shadow-2 mb-4">Back</a>

						<button class="btn btn-primary shadow-2 mb-4" onclick="changeStep(this);return false;">Next Part <i class="feather icon-chevron-right mr-0"></i></button>

				<?php }?>

				</div>

			</div>

		</form>

		</div>

	</div>

	<div id="basic-info-part-f" <?php if(!$step6){?> class="hidestep" <?php }?>>

		<div class="row mt-3">

		<form name="client_basic_info_step6" id="client_basic_info_step6" action="{{route('client_basic_info_step6')}}" method="post">

		@csrf

			<div class="col-md-12">

				<p class="section-part-title"><span>Hazardous Property or

						Property That Needs Immediate Attention

					</span>

				</p>

			</div>

			<div class="col-md-12">

				<div class="form-group">

					<label class="d-block">Do you own or have any property that

						needs

						immediate attention or that poses or is alleged to pose a

						threat

						of imminent

						and identifiable harm to public health or safety?

					</label>

					<div class="d-inline radio-primary">

						<input type="radio" id="own-property-no" class='step5-No' name="part_rest[hazardous_property]" required <?php echo Helper::validate_key_toggle('hazardous_property',$BasicInfo_PartRest,0);?> value="0">

						<label for="own-property-no" class="cr">No</label>

					</div>

					<div class="d-inline radio-primary">

						<input type="radio" id="own-property-yes" class='step5-yes' name="part_rest[hazardous_property]" required <?php echo Helper::validate_key_toggle('hazardous_property',$BasicInfo_PartRest,1);?> value="1">

						<label class="cr"  for="own-property-yes">Yes</label>

					</div>

				</div>

			</div>

			<div class="col-md-12" id="stepp5" style='display:none'>

				<div class="col-md-12 step5">
				<div class="row">


				<div class="col-md-12">

					<div class="form-group">
						<label>What is the hazard</label>
						<input type="text" class="form-control name_of_business required " name="part_rest[any_proprietor_status_data][name_of_business]" placeholder="" value="<?php echo Helper::validate_key_value('name_of_business',$BasicInfo_PartRestD);?>" aria-invalid="true">
					</div>

				</div>

				<div class="col-md-12">

					<div class="form-group">
						<label>If immediate attention is needed why is it needed?</label>
						<input type="text" class="form-control number_of_business required " name="part_rest[any_proprietor_status_data][number_of_business]" placeholder="" value="<?php echo Helper::validate_key_value('number_of_business',$BasicInfo_PartRestD);?>" aria-invalid="true">
					</div>

				</div>

				<div class="col-md-12">

					<div class="form-group">
						<label>Where is the property?</label>
						<input type="text" class="form-control street_of_business required " name="part_rest[any_proprietor_status_data][street_of_business]" placeholder="" value="<?php echo Helper::validate_key_value('street_of_business',$BasicInfo_PartRestD);?>" aria-invalid="true">
					</div>

				</div>


				<div class="col-md-4">

					<div class="form-group">
						<label>City</label>
						<input type="text" class="form-control city_of_business required " name="part_rest[any_proprietor_status_data][city_of_business]" placeholder="" value="<?php echo Helper::validate_key_value('city_of_business',$BasicInfo_PartRestD);?>" aria-invalid="true">
					</div>

				</div>

				<div class="col-md-4">

					<div class="form-group">
						<label>State</label>
						<select name="part_rest[any_proprietor_status_data][state_of_business]" class="form-control required state_of_business">
							<option disabled="">Please Select State</option>
							<?php foreach($usa_states as $us_key=>$usa_vl){?>
							<option value="<?php echo $us_key;?>" {{($us_key == Helper::validate_key_value('state',$BasicInfo_PartRestD)) ? 'selected' : ''}} ><?php echo $usa_vl;?></option>
							<?php }?>

						</select>
					</div>

				</div>

				<div class="col-md-4">

					<div class="form-group">
						<label>Zip Code</label>
						<input type="text" class="form-control zip_of_business required " name="part_rest[any_proprietor_status_data][zip_of_business]" placeholder="" value="<?php echo Helper::validate_key_value('zip_of_business',$BasicInfo_PartRestD);?>" aria-invalid="true">
					</div>

				</div>

				<?php


					if(is_array(Helper::validate_key_value('describe_of_business',$BasicInfo_PartRestD))){

						$array_checkbox = Helper::validate_key_value('describe_of_business',$BasicInfo_PartRestD);

						//$array_checkbox = json_decode($jsondata,true);
					}else{
						$array_checkbox = array();
					}
				?>

				</div>
				</div>

			</div>

			<!-- condition-data -->



			<div class="col-md-12">

				<div class="next-part-btn text-right">

				<?php if(!empty($can_editable)){?>

					<?php if(!empty($BasicInfo_PartRest['id'])){?>

					<input type="hidden" name="basicinfo_partrest_id" value="<?php echo $BasicInfo_PartRest['id'];  ?>">

					<a href="{{route('client_basic_info_step4')}}" class="btn btn-primary shadow-2 mb-4">Back</a>

					<button type="submit" class="btn btn-primary shadow-2 mb-4">Save <i

							class="feather icon-chevron-right mr-0"></i></button>

					<!--<button class="btn btn-primary shadow-2 mb-4" onclick="submitFormSectionA();return false;">Next <i class="feather icon-chevron-right mr-0"></i></button>-->

				<?php }else{?>

					<button type="submit" class="btn btn-primary shadow-2 mb-4">Next Part <i

							class="feather icon-chevron-right mr-0"></i></button>

				<?php }?>

				<?php }else{?>

						<a href="{{route('client_basic_info_step4')}}" class="btn btn-primary shadow-2 mb-4">Back</a>

						<a href="{{route('property_information')}}" class="btn btn-primary shadow-2 mb-4">Submit</a>

				<?php }?>

				</div>

			</div>

		</form>

		</div>

	</div>



</div>

<style>

input[type="radio"] {

    width: 18px;

    height: 18px;

    vertical-align: middle;

    margin: 0 4px;

}

</style>

<script>

$(document).ready(function(){


	$("#client_basic_info_step1").validate({

		errorPlacement: function (error, element) {

			if($(element).parents(".form-group").next('label').hasClass('error')){

				$(element).parents(".form-group").next('label').remove();

				$(element).parents(".form-group").after($(error)[0].outerHTML);

			}else{

				$(element).parents(".form-group").after($(error)[0].outerHTML);

			}

        },

		success: function(label,element) {

			label.parent().removeClass('error');

			$(element).parents(".form-group").next('label').remove();

		},

	});

	$("#client_basic_info_step2").validate({

		errorPlacement: function (error, element) {

			if($(element).parents(".form-group").next('label').hasClass('error')){

				$(element).parents(".form-group").next('label').remove();

				$(element).parents(".form-group").after($(error)[0].outerHTML);

			}else{

				$(element).parents(".form-group").after($(error)[0].outerHTML);

			}

        },

		success: function(label,element) {

			label.parent().removeClass('error');

			$(element).parents(".form-group").next('label').remove();

		},

	});

	$("#client_basic_info_step3").validate({

		errorPlacement: function (error, element) {

			if($(element).parents(".form-group").next('label').hasClass('error')){

				$(element).parents(".form-group").next('label').remove();

				$(element).parents(".form-group").after($(error)[0].outerHTML);

			}else{

				$(element).parents(".form-group").after($(error)[0].outerHTML);

			}

        },

		success: function(label,element) {

			label.parent().removeClass('error');

			$(element).parents(".form-group").next('label').remove();

		},

	});

	$("#client_basic_info_step4").validate({

		errorPlacement: function (error, element) {

			if($(element).parents(".form-group").next('label').hasClass('error')){

				$(element).parents(".form-group").next('label').remove();

				$(element).parents(".form-group").after($(error)[0].outerHTML);

			}else{

				$(element).parents(".form-group").after($(error)[0].outerHTML);

			}

        },

		success: function(label,element) {

			label.parent().removeClass('error');

			$(element).parents(".form-group").next('label').remove();

		},

	});

	$("#client_basic_info_step5").validate({

		errorPlacement: function (error, element) {

			if($(element).parents(".form-group").next('label').hasClass('error')){

				$(element).parents(".form-group").next('label').remove();

				$(element).parents(".form-group").after($(error)[0].outerHTML);

			}else{

				$(element).parents(".form-group").after($(error)[0].outerHTML);

			}

        },

		success: function(label,element) {

			label.parent().removeClass('error');

			$(element).parents(".form-group").next('label').remove();

		},

	});

	$("#client_basic_info_step6").validate({

		errorPlacement: function (error, element) {

			if($(element).parents(".form-group").next('label').hasClass('error')){

				$(element).parents(".form-group").next('label').remove();

				$(element).parents(".form-group").after($(error)[0].outerHTML);

			}else{

				$(element).parents(".form-group").after($(error)[0].outerHTML);

			}

        },

		success: function(label,element) {

			label.parent().removeClass('error');

			$(element).parents(".form-group").next('label').remove();

		},

	});

});

</script>

<style type="text/css" media="screen">
	.listingcheck li{list-style: none;}
	.listingcheck li label{padding:0px 10px;}
	ul.listingcheck {padding: 0px 10px;}
</style>

<!-- Tab 1 End-->