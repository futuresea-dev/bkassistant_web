<div class="tab-pane fade show active" id="section6" role="tabpanel" style="overflow: auto;" aria-labelledby="section6-tab">
	<h3 class="section-main-title text-c-blue f-w-800">Statement of Financial Affairs
	</h3>
	<form name="client_finacial_affairs" id="client_finacial_affairs" action="{{route('client_finacial_affairs')}}" method="post">
	@csrf
	<?php $i=0;?>
	<div id="statement-financial-affairs pt-3">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<h3 class="font-lg-18">
						If you are filing jointly with your spouse, include information
						about both you and your spouse.
					</h3>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">What is your current Marital Status?</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="current_marital_Status_yes"
							name="current_marital_Status"
							value="1"
							required <?php echo Helper::validate_key_toggle('current_marital_Status',$finacial_affairs,1);?>>
						<label for="current_marital_Status_yes" class="cr">Married</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="current_marital_Status_no"
							name="current_marital_Status"
							value="0"
							required <?php echo Helper::validate_key_toggle('current_marital_Status',$finacial_affairs,0);?>>
						<label for="current_marital_Status_no" class="cr">Not Married</label>
					</div>
				</div>
				<div class="form-group">
					<label class="d-block">List every address where you have lived other
						than where you live now during the last <strong>3 years:</strong>
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-every-address_yes"
							name="list_every_address"
							onchange="getListEveryAddressData('yes');" value="1" required <?php echo Helper::validate_key_toggle('list_every_address',$finacial_affairs,1);?>>
						<label for="list-every-address_yes" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-every-address_no"
							name="list_every_address"
							onchange="getListEveryAddressData('no');" value="0" required <?php echo Helper::validate_key_toggle('list_every_address',$finacial_affairs,0);?>>
						<label for="list-every-address_no" class="cr">No</label>
					</div>
				</div>
				<?php
				$usa_states='{ "AL": "Alabama", "AK": "Alaska", "AS": "American Samoa", "AZ": "Arizona", "AR": "Arkansas", "CA": "California", "CO": "Colorado", "CT": "Connecticut", "DE": "Delaware", "DC": "District Of Columbia", "FM": "Federated States Of Micronesia", "FL": "Florida", "GA": "Georgia", "GU": "Guam", "HI": "Hawaii", "ID": "Idaho", "IL": "Illinois", "IN": "Indiana", "IA": "Iowa", "KS": "Kansas", "KY": "Kentucky", "LA": "Louisiana", "ME": "Maine", "MH": "Marshall Islands", "MD": "Maryland", "MA": "Massachusetts", "MI": "Michigan", "MN": "Minnesota", "MS": "Mississippi", "MO": "Missouri", "MT": "Montana", "NE": "Nebraska", "NV": "Nevada", "NH": "New Hampshire", "NJ": "New Jersey", "NM": "New Mexico", "NY": "New York", "NC": "North Carolina", "ND": "North Dakota", "MP": "Northern Mariana Islands", "OH": "Ohio", "OK": "Oklahoma", "OR": "Oregon", "PW": "Palau", "PA": "Pennsylvania", "PR": "Puerto Rico", "RI": "Rhode Island", "SC": "South Carolina", "SD": "South Dakota", "TN": "Tennessee", "TX": "Texas", "UT": "Utah", "VT": "Vermont", "VI": "Virgin Islands", "VA": "Virginia", "WA": "Washington", "WV": "West Virginia", "WI": "Wisconsin", "WY": "Wyoming" }';
				$usa_states=json_decode($usa_states,1);
				
				?>
				<div class="form-group <?php echo Helper::key_hide_show_v('list_every_address',$finacial_affairs);?>" id="list-every-address-data">
					<div class="form-main w-100">


					
					<?php
						if(!empty($finacial_affairs['prev_address']['creditor_street'])){
							for($i=0;$i<count($finacial_affairs['prev_address']['creditor_street']);$i++)

							{
					?>
								@include("client.questionnaire.affairs.prev_address",['finacial_affairs'=>$finacial_affairs['prev_address'],$i,$usa_states])
					<?php   }
						} else { ?>
								@include("client.questionnaire.affairs.prev_address", [$usa_states, 'i'=> 0])
					<?php } ?>
					</div>
					<?php 
					if(!empty($finacial_affairs['prev_address']['creditor_street']) && count($finacial_affairs['prev_address']['creditor_street'])<6)
						{
					?>
					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addEveryAddressForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>
							<i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('list_every_addresses')"></i><br/>
					</div>
					<?php } else { ?>
					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addEveryAddressForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>
						<i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('list_every_addresses')"></i><br/>
					</div>
					<?php } ?>
				</div>
			</div>

			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">If you lived with a spouse or domestic
						partner in a <a class="text-c-blue">community property</a> state or territory <strong>(Arizona,
						California, Idaho, Louisiana,
						Nevada, New Mexico, Puerto Rico, Texas, Washington, and
						Wisconsin)</strong> within the last <strong>8 years</strong>, list the state or territory
						where you lived
						and the name and current address of your spouse or domestic
						partner.
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="living-domestic-partner_yes"
							name="living_domestic_partner"
							onchange="getLivingDomesticPartnerData('yes');" value="1" required <?php echo Helper::validate_key_toggle('living_domestic_partner',$finacial_affairs,1);?>>
						<label for="living-domestic-partner_yes" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="living-domestic-partner_no"
							name="living_domestic_partner"
							onchange="getLivingDomesticPartnerData('no');" value="0" required <?php echo Helper::validate_key_toggle('living_domestic_partner',$finacial_affairs,0);?>>
						<label for="living-domestic-partner_no" class="cr">No</label>
					</div>
				</div>
				
				<div class="form-group <?php echo Helper::key_hide_show_v('living_domestic_partner',$finacial_affairs);?>" id="living-domestic-partner-data">
					<label class="d-block"></label>
						<?php if(!empty($finacial_affairs['community_property_state'])){
								for($i=0;$i<count($finacial_affairs['community_property_state']);$i++){
						?>
						<div class="form-main w-100 living_domestic_partners">
							<div class="row">
								<div class="col-md-12 row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Community Property State or Territory</label>
											<!-- <input type="text" class="form-control required community_property_state" name="community_property_state[]" placeholder="Please Select State or Territory" value="{{@$finacial_affairs['community_property_state'][$i]}}"> -->
											<select class="form-control required community_property_state" name="community_property_state[{{$i}}]">
											<option value="">Please Select State or Territory</option>
											<?php foreach($usa_states as $us_key=>$usa_vl){?>
											<option value="<?php echo $us_key;?>" <?php echo Helper::validate_key_option_loop('community_property_state',$finacial_affairs,$i,$us_key);?>><?php echo $usa_vl;?></option>
											<?php }?>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Name of your Spouse, former spouse, or Legal equivalent</label>
													<input type="text" name="domestic_partner[{{$i}}]" class="form-control required domestic_partner" placeholder="Name of your Spouse, former spouse, or Legal equivalent" value="{{@$finacial_affairs['domestic_partner'][$i]}}">
												</div>							
											</div>
											<div class="col-md-12">
												<div class="form-group ">
													<label>
														Number Street
													</label>
													<input type="text" name="domestic_partner_street_address[{{$i}}]" class="form-control required domestic_partner_number_street" placeholder="Number Street" value="{{@$finacial_affairs['domestic_partner_street_address'][$i]}}">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>City</label>
													<input type="text" class="form-control required domestic_partner_city" name="domestic_partner_city[{{$i}}]" placeholder="City" value="{{@$finacial_affairs['domestic_partner_city'][$i]}}">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>State</label>
													<select class="form-control required domestic_partner_state" name="domestic_partner_state[{{$i}}]">
													<option value="">State</option>
													<?php foreach($usa_states as $us_key=>$usa_vl){?>
													<option value="<?php echo $us_key;?>" <?php echo Helper::validate_key_option_loop('domestic_partner_state',$finacial_affairs,$i,$us_key);?>><?php echo $usa_vl;?></option>
													<?php }?>
													</select>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>Zip Code</label>
													<input type="number" class="form-control required domestic_partner_zip" name="domestic_partner_zip[{{$i}}]" placeholder="Zip Code" value="{{@$finacial_affairs['domestic_partner_zip'][$i]}}">
												</div>
											</div>		

											
										</div>
											
									</div>
								</div>	

							</div>
						</div>
						<?php }?>
						<?php }else{?>
						<div class="form-main w-100 living_domestic_partners">
							<div class="row">
								<div class="col-md-12 row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Community Property State or Territory</label>
											<!-- <input type="text" class="form-control required community_property_state" name="community_property_state[]" placeholder="Please Select State or Territory"> -->
											<select class="form-control required community_property_state" name="community_property_state[0]">
											<option value="">Please Select State or Territory</option>
											<?php foreach($usa_states as $us_key=>$usa_vl){?>
											<option value="<?php echo $us_key;?>"><?php echo $usa_vl;?></option>
											<?php }?>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Name of your Spouse, former spouse, or Legal equivalent</label>
													<input type="text" name="domestic_partner[0]" class="form-control required" placeholder="Name and Address of Creditor" >
												</div>							
											</div>
											<div class="col-md-12">
												<div class="form-group ">
													<label>
														Number  Street
													</label>
													<input type="text" name="domestic_partner_street_address[0]" class="form-control required" placeholder="Street Address" >
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>City</label>
													<input type="text" class="form-control required" name="domestic_partner_city[0]" placeholder="City" >
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>Community Property State or Territory</label>
													<!-- <input type="text" class="form-control required community_property_state" name="community_property_state[]" placeholder="Please Select State or Territory"> -->
													<select class="form-control required domestic_partner_state" name="domestic_partner_state[0]">
													<option value="">Please Select State or Territory</option>
													<?php foreach($usa_states as $us_key=>$usa_vl){?>
													<option value="<?php echo $us_key;?>"><?php echo $usa_vl;?></option>
													<?php }?>
													</select>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>Zip Code</label>
													<input type="number" class="form-control required" name="domestic_partner_zip[0]" placeholder="Zip Code" >
												</div>
											</div>		
											
										</div>
											
									</div>
								</div>
							</div>
						</div>
						<?php }?>
					<?php if(!empty($finacial_affairs['community_property_state']) && count($finacial_affairs['community_property_state'])<6){?>
					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addNameAddressSpouseForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>
						<i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('living_domestic_partners')"></i><br/>
					</div>
					<?php }else{?>
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addNameAddressSpouseForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>
						<i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('living_domestic_partners')"></i><br/>
					<?php }?>
				</div>
			</div>
			<!--5. Total amount of income received -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">List the total amount of income that you
						received from all jobs and all businesses, including part-time
						activities, during <strong>this year and
						the two previous calendar years:</strong>
						<!--<i class="text-c-blue">(Examples of other income are alimony; child support; Social Security,
unemployment, and other public benefit payments; pensions; rental income; interest; dividends; money collected from lawsuits; royalties; gambling & lottery winnings. If you are filing a joint case and you have income that you received together, list it only once under Debtor 1.)</i>-->
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="total-amount-income_yes"
							name="total_amount_income"
							onchange="getTotalAmountIncomeData('yes');" value="1" required <?php echo Helper::validate_key_toggle('total_amount_income',$finacial_affairs,1);?>>
						<label for="total-amount-income_yes" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="total-amount-income_no"
							name="total_amount_income"
							onchange="getTotalAmountIncomeData('no');" value="0" required <?php echo Helper::validate_key_toggle('total_amount_income',$finacial_affairs,0);?>>
						<label for="total-amount-income_no" class="cr">No</label>
					</div>
				</div>

				<div class="form-group <?php echo Helper::key_hide_show_v('total_amount_income',$finacial_affairs);?>" id="total-amount-income-data">
					<h4 class="font-lg-18">Debtor</h4>
					<a class="btn shadow-2 mb-4 download-form" data-toggle="modal" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video" data-video="https://www.youtube.com/embed/hrEU1C-sq84" data-video2="https://www.youtube.com/embed/T2PUDRk4uMU" style="top: 74px; left: 160px; width: 270px">
						Click for Step by Step video <img src="{{url('assets/images/video-play.jpg')}}" style="height: 24px;">
					</a>
					<div class="table-responsive">
						@include("client.questionnaire.affairs.total_amount_income_table")
					</div>

					<a class="btn shadow-2 mb-4" data-toggle="modal" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video" data-video="https://www.youtube.com/embed/WIS0ssI3khU" data-video2="https://www.youtube.com/embed/afSf_qKZCIY" style="float: right;margin-right: 346px;">
						Click for Step by Step video <img src="{{url('assets/images/video-play.jpg')}}" style="height: 24px;">
					</a>
					<h4 class="font-lg-18">Spouse (if applicable)</h4>
					<div class="d-inline radio-primary ">
						<input type="radio" id="total-amount-income-spouse_yes"
							name="total_amount_income_spouse"
							onchange="getTotalAmountIncomeSpouseData('yes');" value="1" required <?php echo Helper::validate_key_toggle('total_amount_income_spouse',$finacial_affairs,1);?>>
						<label for="total-amount-income-spouse_yes"
							class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="total-amount-income-spouse_no"
							name="total_amount_income_spouse"
							onchange="getTotalAmountIncomeSpouseData('no');" value="0" required <?php echo Helper::validate_key_toggle('total_amount_income_spouse',$finacial_affairs,0);?>>
						<label for="total-amount-income-spouse_no" class="cr">No</label>
					</div>
					<div class="form-group <?php echo Helper::key_hide_show_v('total_amount_income_spouse',$finacial_affairs);?>"
						id="total-amount-income-spouse-data">
						<div class="table-responsive">
							@include("client.questionnaire.affairs.total_amount_income_spouse")
						</div>
					</div>


				</div>
			</div>
			<!--6. Other amount of income received -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">List any other income that you received
						during this year and the two previous calendar years
						<i class="text-c-blue">(Examples of other income are alimony; child support; Social Security,
unemployment, and other public benefit payments; pensions; rental income; interest; dividends; money collected from lawsuits; royalties; gambling & lottery winnings. If you are filing a joint case and you have income that you received together, list it only once under Debtor 1.)</i>
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="other-income-received-income_yes"
							name="other_income_received_income"
							onchange="getOtherIncomeRecivedData('yes');" value="1" required <?php echo Helper::validate_key_toggle('other_income_received_income',$finacial_affairs,1);?>>
						<label for="other-income-received-income_yes"
							class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="other-income-received-income_no"
							name="other_income_received_income"
							onchange="getOtherIncomeRecivedData('no');" value="0" required <?php echo Helper::validate_key_toggle('other_income_received_income',$finacial_affairs,0);?>>
						<label for="other-income-received-income_no"
							class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('other_income_received_income',$finacial_affairs);?>"
					id="other-income-received-income-data">
					<h4 class="font-lg-18">Debtor</h4>
					<div class="table-responsive">
						@include("client.questionnaire.affairs.other_income_received_income")
					</div>

					<h4 class="font-lg-18">Spouse (if applicable)</h4>
					<div class="d-inline radio-primary ">
						<input type="radio" id="other-income-received-income-spouse_yes"
							name="other_income_received_income_spouse"
							onchange="getOtherIncomeSpouseData('yes');" value="1" required <?php echo Helper::validate_key_toggle('other_income_received_income_spouse',$finacial_affairs,1);?>>
						<label for="other-income-received-income-spouse_yes"
							class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="other-income-received-income-spouse_no"
							name="other_income_received_income_spouse"
							onchange="getOtherIncomeSpouseData('no');" value="0" required <?php echo Helper::validate_key_toggle('other_income_received_income_spouse',$finacial_affairs,0);?>>
						<label for="other-income-received-income-spouse_no"
							class="cr">No</label>
					</div>
					<div class="form-group <?php echo Helper::key_hide_show_v('joints_social_security',$finacial_affairs);?>"
						id="other-income-received-spouse-data">
						<div class="table-responsive">
							@include("client.questionnaire.affairs.other_income_received_income_spouse")
						</div>
					</div>


				</div>
			</div>

			<!--7. Primarily consumer debts -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">
						If your debts and/or codebtors debts are <a class="text-c-blue">primarily consumer debts</a> <strong>(i.e. non-business)</strong>, list each creditor to whom you paid a total of <strong>$600</strong> or more within the last <strong>90 days.</strong> Do not include payments for domestic support obligations, such as child support and alimony.
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="primarily-consumer-debets_yes"
							name="primarily_consumer_debets"
							onchange="getPrimarilyConsumerDebetsData('yes');" value="1" required <?php echo Helper::validate_key_toggle('primarily_consumer_debets',$finacial_affairs,1);?>>
						<label for="primarily-consumer-debets_yes"
							class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="primarily-consumer-debets_no"
							name="primarily_consumer_debets"
							onchange="getPrimarilyConsumerDebetsData('no');" value="0" required <?php echo Helper::validate_key_toggle('primarily_consumer_debets',$finacial_affairs,0);?>>
						<label for="primarily-consumer-debets_no" class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('primarily_consumer_debets',$finacial_affairs);?>" id="primarily-consumer-debets-data">
					<?php
						if(!empty($finacial_affairs['primarily_consumer_debets_data']['creditor_address']))
						{
							for($i=0;$i<count($finacial_affairs['primarily_consumer_debets_data']['creditor_address']);$i++){
					?>
									@include("client.questionnaire.affairs.primarily_consumer_debets",['finacial_affairs'=>$finacial_affairs['primarily_consumer_debets_data'],$i])
						<?php }
						} else { ?>
									@include("client.questionnaire.affairs.primarily_consumer_debets")
					<?php } ?>
					<?php if(!empty($finacial_affairs['primarily_consumer_debets_data']['creditor_address']) && count($finacial_affairs['primarily_consumer_debets_data']['creditor_address'])<6){?>
						<div class="add-more-btn">
							<button class="btn btn-primary shadow-2 rounded-0"
								id="add-more-residence-form"
								onclick="addPrimarilyConsumerDebetsForm(); return false;"><i
									class="feather icon-plus mr-0"></i> Add
								More </button>
							<i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('primarily_consumer_debets')"></i><br/>
						</div>
					<?php }else{?>
					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addPrimarilyConsumerDebetsForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>
						<i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('primarily_consumer_debets')"></i><br/>
					</div>
					<?php }?>
				</div>
			</div>

			<!--8. Primarily non-consumer debts -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">
						If your debts and/or codebtors debts are <a class="text-c-blue">primarily business debts</a>, list each creditor to whom you paid a total of <strong>$6,825.00</strong> or more in one or more payments within the last <strong>90 days</strong>. Do not include payments for domestic support obligations, such as child support and alimony.
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="primarily-non-consumer-debets_yes"
							name="primarily_non_consumer_debets"
							onchange="getPrimarilyNonConsumerDebetsData('yes');" value="1" required <?php echo Helper::validate_key_toggle('primarily_non_consumer_debets',$finacial_affairs,1);?>>
						<label for="primarily-non-consumer-debets_yes"
							class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="primarily-non-consumer-debets_no"
							name="primarily_non_consumer_debets"
							onchange="getPrimarilyNonConsumerDebetsData('no');" value="0" required <?php echo Helper::validate_key_toggle('primarily_non_consumer_debets',$finacial_affairs,0);?>>
						<label for="primarily-non-consumer-debets_no"
							class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('primarily_non_consumer_debets',$finacial_affairs);?>"
					id="primarily-non-consumer-debets-data">
					<?php
						if(!empty($finacial_affairs['non_consumer']['non_consumer_creditor_address'])){
							for($i=0;$i<count($finacial_affairs['non_consumer']['non_consumer_creditor_address']);$i++){
					?>
					@include("client.questionnaire.affairs.primarily_non_consumer_debets",['finacial_affairs'=>$finacial_affairs['non_consumer'],$i])
						<?php }}else{?>
						@include("client.questionnaire.affairs.primarily_non_consumer_debets")
					<?php }?>
					<?php if(!empty($finacial_affairs['non_consumer']['non_consumer_creditor_address']) && count($finacial_affairs['non_consumer']['non_consumer_creditor_address'])<6){?>

					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addPrimarilyNonConsumerDebetsForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>
						<i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('primarily_non_consumer_debets')"></i><br/>
					</div>
					<?php }else{?>
					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addPrimarilyNonConsumerDebetsForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>
						<i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('primarily_non_consumer_debets')"></i><br/>
					</div>
					<?php }?>
				</div>
			</div>
			<!--9.  Payments that you made within the past 1 year -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">List all payments that you made on a debt within the <strong>last year</strong> to any <a style="color: blue;">"insider"</a>.
					<i>("Insiders" include your relatives, your business partners and their relatives, your corporations, or your affiliates.)</i>
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="payment-past-one-year_yes"
							name="payment_past_one_year"
							onchange="getPaymentPastYearData('yes');" value="1" required <?php echo Helper::validate_key_toggle('payment_past_one_year',$finacial_affairs,1);?>>
						<label for="payment-past-one-year_yes" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="payment-past-one-year_no"
							name="payment_past_one_year"
							onchange="getPaymentPastYearData('no');" value="0" required <?php echo Helper::validate_key_toggle('payment_past_one_year',$finacial_affairs,0);?>>
						<label for="payment-past-one-year_no" class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('payment_past_one_year',$finacial_affairs);?>" id="payment-past-one-year-data">
				@if (!empty($finacial_affairs['past_one_year_data']['creditor_address_past_one_year']) && is_array($finacial_affairs['past_one_year_data']['creditor_address_past_one_year']))
				@for ($i = 0; $i < count($finacial_affairs['past_one_year_data']['creditor_address_past_one_year']); $i++)
		
				 @include("client.questionnaire.affairs.payment_past_one_year",['finacial_affairs'=>$finacial_affairs['past_one_year_data'],$i])

				@endfor
				@else
					@include("client.questionnaire.affairs.payment_past_one_year", ['i'=>0])
				@endif
				
				<div class="add-more-btn">
					<button class="btn btn-primary shadow-2 rounded-0"
						id="add-more-residence-form"
						onclick="addPaymentPastOneYearForm(); return false;"><i
							class="feather icon-plus mr-0"></i> Add
						More </button>

					 <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
            style="position: absolute;right: 20px;"
            onclick="remove_clone_box('payment_past_one_year')"></i><br/>
				</div>
				</div>
			</div>

			<!--10. List all payments or transfers of property -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">List all payments or transfers of property
						that you made within the past <strong>1 year</strong> that
						benefitted an
						<a style="color: blue;">"insider"</a>.

					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="transfers-property_yes"
							name="transfers_property"
							onchange="getTransferPropertyData('yes');" value="1" required <?php echo Helper::validate_key_toggle('transfers_property',$finacial_affairs,1);?>>
						<label for="transfers-property_yes" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="transfers-property_no"
							name="transfers_property"
							onchange="getTransferPropertyData('no');" value="0" required <?php echo Helper::validate_key_toggle('transfers_property',$finacial_affairs,0);?>>
						<label for="transfers-property_no" class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('transfers_property',$finacial_affairs);?>" id="transfers-property-data">
				@if (!empty($finacial_affairs['transfers_property_data']['creditor_address_transfers_property']) && is_array($finacial_affairs['transfers_property_data']['creditor_address_transfers_property']))
				@for ($i = 0; $i < count($finacial_affairs['transfers_property_data']['creditor_address_transfers_property']); $i++)
		
				 @include("client.questionnaire.affairs.transfers_property",['finacial_affairs'=>$finacial_affairs['transfers_property_data'],$i])

				@endfor
				@else
					@include("client.questionnaire.affairs.transfers_property", ['i'=> 0])
				@endif
				
				<div class="add-more-btn">
					<button class="btn btn-primary shadow-2 rounded-0"
						id="add-more-residence-form"
						onclick="addTransfersPropertyForm(); return false;"><i
							class="feather icon-plus mr-0"></i> Add
						More </button>

					 <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
            style="position: absolute;right: 20px;"
            onclick="remove_clone_box('transfers_property')"></i><br/>
				</div>
					
				</div>
			</div>

			<!--11. List any lawsuits, court actions -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">List any <a style="color:blue;">lawsuits, court actions, or
						administrative</a> proceedings to which you are or were a party
						within the past <strong>1 year.</strong>
						</i>
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-lawsuits_yes" name="list_lawsuits"
							onchange="getListLawsuitsData('yes');" value="1" required <?php echo Helper::validate_key_toggle('list_lawsuits',$finacial_affairs,1);?>>
						<label for="list-lawsuits_yes" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-lawsuits_no" name="list_lawsuits"
							onchange="getListLawsuitsData('no');" value="0" required <?php echo Helper::validate_key_toggle('list_lawsuits',$finacial_affairs,0);?>>
						<label for="list-lawsuits_no" class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('list_lawsuits',$finacial_affairs);?>" id="list-lawsuits-data">
				@if (!empty($finacial_affairs['list_lawsuits_data']['case_title']) && is_array($finacial_affairs['list_lawsuits_data']['case_title']))
				@for ($i = -2; $i < count($finacial_affairs['list_lawsuits_data']['case_title']); $i++)
		
				 @include("client.questionnaire.affairs.list_lawsuits",['finacial_affairs'=>$finacial_affairs['list_lawsuits_data'],$i])

				@endfor
				@else
					@include("client.questionnaire.affairs.list_lawsuits", ['i'=>0])
				@endif
				
				<div class="add-more-btn">
					<button class="btn btn-primary shadow-2 rounded-0"
						id="add-more-residence-form"
						onclick="addListLawsuitsForm(); return false;"><i
							class="feather icon-plus mr-0"></i> Add
						More </button>

					 <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
            style="position: absolute;right: 20px;"
            onclick="remove_clone_box('list_lawsuits')"></i><br/>
				</div>
				</div>
			</div>

			<!--12. Property Repossessed-->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">Describe all property that has been
						repossessed, foreclosed, garnished, attached, seized, or levied
						within the past <strong>1 year.</strong>
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="property-repossessed_yes"
							name="property_repossessed"
							onchange="getPropertyRepossessedData('yes');" value="1" required <?php echo Helper::validate_key_toggle('property_repossessed',$finacial_affairs,1);?>>
						<label for="property-repossessed_yes" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="property-repossessed_no"
							name="property_repossessed"
							onchange="getPropertyRepossessedData('no');" value="0" required <?php echo Helper::validate_key_toggle('property_repossessed',$finacial_affairs,0);?>>
						<label for="property-repossessed_no" class="cr">No</label>
					</div>
				</div>
				<div class="<?php echo Helper::key_hide_show_v('property_repossessed',$finacial_affairs);?>" id="property-repossessed-data">
					<?php
						if(!empty($finacial_affairs['property_repossessed_data']['creditor_address'])){
							for($i=0;$i<count($finacial_affairs['property_repossessed_data']['creditor_address']);$i++){
					?>
					@include("client.questionnaire.affairs.property_repossessed_data_form",['finacial_affairs'=>$finacial_affairs['property_repossessed_data'],$i])
					<?php }}else{?>
						@include("client.questionnaire.affairs.property_repossessed_data_form")
					<?php }?>
					<?php if(!empty($finacial_affairs['property_repossessed_data']['creditor_address']) && count($finacial_affairs['property_repossessed_data']['creditor_address'])<6){?>
					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addPropertyRepossessedDataForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>
						<i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
            style="position: absolute;right: 20px;"
            onclick="remove_clone_box('property_repossessed_data_form')"></i><br/>
					</div>
					<?php }else{?>
					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addPropertyRepossessedDataForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>
						<i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
            style="position: absolute;right: 20px;"
            onclick="remove_clone_box('property_repossessed_data_form')"></i><br/>
					</div>
					<?php }?>
				</div>
			</div>

			<!--13. List any lawsuits, court actions -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">List all setoffs made by any creditor,
						including a bank or financial institution, against a debt or
						deposit within <strong>90 days</strong> before the filing
						of this case. Include any refusals by a creditor to make a
						payment because you owed a debt.
						</i>
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="setoffs_creditor_yes"
							name="setoffs_creditor"
							onchange="getSetoffsCreditorData('yes');" value="1" required <?php echo Helper::validate_key_toggle('setoffs_creditor',$finacial_affairs,1);?>>
						<label for="setoffs_creditor_yes" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="setoffs_creditor_no"
							name="setoffs_creditor"
							onchange="getSetoffsCreditorData('no');" value="0" required <?php echo Helper::validate_key_toggle('setoffs_creditor',$finacial_affairs,0);?>>
						<label for="setoffs_creditor_no" class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('setoffs_creditor',$finacial_affairs);?>" id="setoffs_creditor-data">
					@if (!empty($finacial_affairs['setoffs_creditor_data']['creditors_address']) && is_array($finacial_affairs['setoffs_creditor_data']['creditors_address']))
				@for ($i = 0; $i < count($finacial_affairs['setoffs_creditor_data']['creditors_address']); $i++)
		
				 @include("client.questionnaire.affairs.setoffs_creditor",['finacial_affairs'=>$finacial_affairs['setoffs_creditor_data'],$i])

				@endfor
				@else
					@include("client.questionnaire.affairs.setoffs_creditor", ['i'=>0])
				@endif
				
				<div class="add-more-btn">
					<button class="btn btn-primary shadow-2 rounded-0"
						id="add-more-residence-form"
						onclick="addSetoffsCreditorForm(); return false;"><i
							class="feather icon-plus mr-0"></i> Add
						More </button>

					 <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
            style="position: absolute;right: 20px;"
            onclick="remove_clone_box('setoffs_creditor_data')"></i><br/>
				</div>
				</div>
			</div>

			<!--14. court- appointed -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">Within the past <strong>1 years</strong> ,
						was any of your
						property in the possession of an assignee for the benefit of
						creditors, a court-appointed
						receiver, a custodian, or another official?
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="court-appointed_yes"
							name="court_appointed" value="1" required <?php echo Helper::validate_key_toggle('court_appointed',$finacial_affairs,1);?>>
						<label for="court-appointed_yes" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="court-appointed_no"
							name="court_appointed" value="0" required <?php echo Helper::validate_key_toggle('court_appointed',$finacial_affairs,0);?>>
						<label for="court-appointed_no" class="cr">No</label>
					</div>
				</div>
			</div>
			
			<!--15. List any gifts -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">List any gifts that you gave within the
						past <strong>2 years</strong> that have a total value of more
						than <i class="text-c-blue">$600 per person</i>
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-any-gifts_yes"
							name="list_any_gifts" onchange="getListGiftsData('yes');" value="1" required <?php echo Helper::validate_key_toggle('list_any_gifts',$finacial_affairs,1);?>>
						<label for="list-any-gifts_yes" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-any-gifts_no" name="list_any_gifts"
							onchange="getListGiftsData('no');" value="0" required <?php echo Helper::validate_key_toggle('list_any_gifts',$finacial_affairs,0);?>>
						<label for="list-any-gifts_no" class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('list_any_gifts',$finacial_affairs);?>" id="list-any-gifts-data">
				@if (!empty($finacial_affairs['list_any_gifts_data']['recipient_address']) && is_array($finacial_affairs['list_any_gifts_data']['recipient_address']))
				@for ($i = 0; $i < count($finacial_affairs['list_any_gifts_data']['recipient_address']); $i++)
		
				 @include("client.questionnaire.affairs.list_any_gifts",['finacial_affairs'=>$finacial_affairs['list_any_gifts_data'],$i])

				@endfor
				@else
					@include("client.questionnaire.affairs.list_any_gifts", ['i'=>0])
				@endif
				
				<div class="add-more-btn">
					<button class="btn btn-primary shadow-2 rounded-0"
						id="add-more-residence-form"
						onclick="addlistAnyGiftsForm(); return false;"><i
							class="feather icon-plus mr-0"></i> Add
						More </button>

					 <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
            style="position: absolute;right: 20px;"
            onclick="remove_clone_box('list_any_gifts_data')"></i><br/>
				</div>
				</div>
			</div>

			<!--16. List any Charity gifts -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">List any gifts or contributions that you made
						to a charity within the past <strong>2 years</strong> that have
						a total value of more than <i class="text-c-blue">$600 to any charity</i>
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="gifts-charity_yes" name="gifts_charity"
							onchange="getGiftsCharityData('yes');" value="1" required <?php echo Helper::validate_key_toggle('gifts_charity',$finacial_affairs,1);?>>
						<label for="gifts-charity_yes" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="gifts-charity_no" name="gifts_charity"
							onchange="getGiftsCharityData('no');" value="0" required <?php echo Helper::validate_key_toggle('gifts_charity',$finacial_affairs,0);?>>
						<label for="gifts-charity_no" class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('gifts_charity',$finacial_affairs);?>" id="gifts-charity-data">
					@if (!empty($finacial_affairs['gifts_charity_data']['recipient_address']) && is_array($finacial_affairs['gifts_charity_data']['recipient_address']))
					@for ($i = 0; $i < count($finacial_affairs['gifts_charity_data']['recipient_address']); $i++)
			
					 @include("client.questionnaire.affairs.gifts_charity",['finacial_affairs'=>$finacial_affairs['gifts_charity_data'],$i])

					@endfor
					@else
						@include("client.questionnaire.affairs.gifts_charity", ['i'=>0])
					@endif
					
					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addGiftsCharityForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>

						 <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('gifts_charity_data')"></i><br/>
					</div>
				</div>
			</div>

			<!--17. Losses from fire -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">List all losses from fire, theft, or other
						disaster, or gambling within the past <strong>1 year or since
							the filing of this case.</strong>
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="losses_from_fire_yes"
							name="losses_from_fire"
							onchange="getLossesFireData('yes');" value="1" required <?php echo Helper::validate_key_toggle('losses_from_fire',$finacial_affairs,1);?>>
						<label for="losses_from_fire_yes" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="losses_from_fire_no"
							name="losses_from_fire" onchange="getLossesFireData('no');" value="0" required <?php echo Helper::validate_key_toggle('losses_from_fire',$finacial_affairs,0);?>>
						<label for="losses_from_fire_no" class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('losses_from_fire',$finacial_affairs);?>" id="losses_from_fire-data">
					@if (!empty($finacial_affairs['losses_from_fire_data']['loss_description']) && is_array($finacial_affairs['losses_from_fire_data']['loss_description']))
					@for ($i = 0; $i < count($finacial_affairs['losses_from_fire_data']['loss_description']); $i++)
			
					 @include("client.questionnaire.affairs.losses_from_fire",['finacial_affairs'=>$finacial_affairs['losses_from_fire_data'],$i])

					@endfor
					@else
						@include("client.questionnaire.affairs.losses_from_fire", ['i' =>0])
					@endif
					
					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addLossesFromFireForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>

						 <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('losses_from_fire_data')"></i><br/>
					</div>
				</div>
			</div>


			<!--18. property transferred -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">List all payments made or property
						transferred by you or by someone acting on your behalf to anyone
						you consulted about filing for
						bankruptcy or preparing a bankruptcy petition within the
						past<strong> 1 year.</strong> Include any attorneys, bankruptcy
						petition preparers, or credit
						counseling agencies. <a style="color:blue;">(Don’t include your current attorney in this)</a>

					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="property-transferred_yes"
							name="property_transferred"
							onchange="getPropertyTransferredData('yes');" value="1" required <?php echo Helper::validate_key_toggle('property_transferred',$finacial_affairs,1);?>>
						<label for="property-transferred_yes" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="property-transferred_no"
							name="property_transferred"
							onchange="getPropertyTransferredData('no');" value="0" required <?php echo Helper::validate_key_toggle('property_transferred',$finacial_affairs,0);?>>
						<label for="property-transferred_no" class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('property_transferred',$finacial_affairs);?>" id="property-transferred-data">
					@if (!empty($finacial_affairs['property_transferred_data']['person_paid']) && is_array($finacial_affairs['property_transferred_data']['person_paid']))
					@for ($i = 0; $i < count($finacial_affairs['property_transferred_data']['person_paid']); $i++)
			
					 @include("client.questionnaire.affairs.property_transferred",['finacial_affairs'=>$finacial_affairs['property_transferred_data'],$i])

					@endfor
					@else
						@include("client.questionnaire.affairs.property_transferred", ['i'=>0])
					@endif
					
					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addPropertyTransferredForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>

						 <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('property_transferred_data')"></i><br/>
					</div>
				</div>
			</div>


			<!--19. property transferred creditors -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">List all payments made or property
						transferred by you or by someone acting on your behalf within
						the past <strong>1 year</strong> to anyone who
						promised to help you deal with your creditors or to make
						payments to your creditors.
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="property-transferred-creditors_yes"
							name="property_transferred_creditors"
							onchange="getPropertyTransferredCreditorsData('yes');" value="1" required <?php echo Helper::validate_key_toggle('property_transferred_creditors',$finacial_affairs,1);?>>
						<label for="property-transferred-creditors_yes"
							class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="property-transferred-creditors_no"
							name="property_transferred_creditors"
							onchange="getPropertyTransferredCreditorsData('no');" value="0" required <?php echo Helper::validate_key_toggle('property_transferred_creditors',$finacial_affairs,0);?>>
						<label for="property-transferred-creditors_no"
							class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('property_transferred_creditors',$finacial_affairs);?>"
					id="property-transferred-creditors-data">
					@if (!empty($finacial_affairs['property_transferred_creditors_data']['person_paid_address']) && is_array($finacial_affairs['property_transferred_creditors_data']['person_paid_address']))
					@for ($i = 0; $i < count($finacial_affairs['property_transferred_creditors_data']['person_paid_address']); $i++)
			
					 @include("client.questionnaire.affairs.property_transferred_creditors",['finacial_affairs'=>$finacial_affairs['property_transferred_creditors_data'],$i])

					@endfor
					@else
						@include("client.questionnaire.affairs.property_transferred_creditors", ['i'=>0])
					@endif
					
					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addPropertyTransferredCreditorsForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>

						 <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('property_transferred_creditors_data')"></i><br/>
					</div>
				</div>
			</div>
			<!-- 18 Listing -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">List all property, other than property
						transferred in the ordinary course of your business or financial
						affairs, that you sold, traded, or
						transferred either absolutely or as a security within the past
						<strong>2 years.</strong>
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="Property_all_yes" name="Property_all"
							onchange="getPropertyallData('yes');" value="1" required <?php echo Helper::validate_key_toggle('Property_all',$finacial_affairs,1);?>>
						<label for="Property_all_yes" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="Property_all_no" name="Property_all"
							onchange="getPropertyallData('no');" value="0" required <?php echo Helper::validate_key_toggle('Property_all',$finacial_affairs,0);?>>
						<label for="Property_all_no" class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('Property_all',$finacial_affairs);?>" id="Property_all-data">
					@if (!empty($finacial_affairs['Property_all_data']['name']) && is_array($finacial_affairs['Property_all_data']['name']))
					@for ($i = 0; $i < count($finacial_affairs['Property_all_data']['name']); $i++)
			
					 @include("client.questionnaire.affairs.Property_all",['finacial_affairs'=>$finacial_affairs['Property_all_data'],$i])

					@endfor
					@else
						@include("client.questionnaire.affairs.Property_all", ['i' => 0])
					@endif
					
					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addPropertyAllForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>

						 <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('Property_all_data')"></i><br/>
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">List all property you transferred within
						the past <strong>10 years</strong> to a self-settled trust or a
						similar device of
						which you are a beneficiary</strong>
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-all-property_transfer_yes"
							name="all_property_transfer_10_year"
							onchange="getAllTransferPropertyData('yes');" value="1" required <?php echo Helper::validate_key_toggle('all_property_transfer_10_year',$finacial_affairs,1);?>>
						<label for="list-all-property_transfer_yes"
							class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-all-property_transfer_no"
							name="all_property_transfer_10_year"
							onchange="getAllTransferPropertyData('no');" value="0" required <?php echo Helper::validate_key_toggle('all_property_transfer_10_year',$finacial_affairs,0);?>>
						<label for="list-all-property_transfer_no" class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('all_property_transfer_10_year',$finacial_affairs);?>" id="list-all-property_transfer-data">
					@if (!empty($finacial_affairs['all_property_transfer_10_year_data']['trust_name']) && is_array($finacial_affairs['all_property_transfer_10_year_data']['trust_name']))
					@for ($i = 0; $i < count($finacial_affairs['all_property_transfer_10_year_data']['trust_name']); $i++)
			
					 @include("client.questionnaire.affairs.list_all_property_transfer_data",['finacial_affairs'=>$finacial_affairs['all_property_transfer_10_year_data'],$i])

					@endfor
					@else
						@include("client.questionnaire.affairs.list_all_property_transfer_data", ['i' => 0])
					@endif

					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addListAllPropertyTransferForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>

						 <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('all_property_transfer_10_year_data')"></i><br/>
					</div>
				</div>
			</div>
			<!-- 19 Listing -->
			<div class="col-md-12">
				<label class="d-block">List all financial accounts and instruments held
					in
					your name or for your benefit that were closed, sold, moved, or
					transferred within
					the past <strong>1 year</strong>
				</label>
				<div class="d-inline radio-primary ">
					<input type="radio" id="list_all_financial_accounts_yes"
						name="list_all_financial_accounts"
						onchange="getListFinancialAccountsData('yes');" value="1" required <?php echo Helper::validate_key_toggle('list_all_financial_accounts',$finacial_affairs,1);?>>
					<label for="list_all_financial_accounts_yes" class="cr">Yes</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio" id="list_all_financial_accounts_no"
						name="list_all_financial_accounts"
						onchange="getListFinancialAccountsData('no');" value="0" required <?php echo Helper::validate_key_toggle('list_all_financial_accounts',$finacial_affairs,0);?>>
					<label for="list_all_financial_accounts_no" class="cr">No</label>
				</div>
			</div>
			<div class="col-md-12 <?php echo Helper::key_hide_show_v('list_all_financial_accounts',$finacial_affairs);?> " id="list_all_financial_accounts-data">
				<?php
						if(!empty($finacial_affairs['list_all_financial_accounts_data']['institution_name'])){
							for($i=0;$i<count($finacial_affairs['list_all_financial_accounts_data']['institution_name']);$i++){
					?>
				@include("client.questionnaire.affairs.list_all_financial_accounts",['finacial_affairs'=>$finacial_affairs['list_all_financial_accounts_data'],$i])
				<?php }}else{?>
						@include("client.questionnaire.affairs.list_all_financial_accounts", ['i' => 0])
				<?php }?>
				<?php if(!empty($finacial_affairs['list_all_financial_accounts_data']['institution_name']) && count($finacial_affairs['list_all_financial_accounts_data']['institution_name'])<6){?>

				<!-- Condition data End -->
				<div class="col-md-12 mt-3">
					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addlistAllFinancialAccountsForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>
						<i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('list_all_financial_accounts')"></i><br/>
					</div>
				</div>
				<?php }else{?>
				<div class="col-md-12 mt-3">
					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addlistAllFinancialAccountsForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>
						<i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('list_all_financial_accounts')"></i><br/>
					</div>
				</div>
				<?php }?>
			</div>
			<!-- 20 Listing -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">Do you now have, or did you have within <strong>1 year</strong> before you filed for bankruptcy, any safe deposit box or other depository for securities, cash, or other valuables?
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-safe-deposit_yes"
							name="list_safe_deposit"
							onchange="getSafeDepositData('yes');" value="1" required <?php echo Helper::validate_key_toggle('list_safe_deposit',$finacial_affairs,1);?>>
						<label for="list-safe-deposit_yes" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-safe-deposit_no"
							name="list_safe_deposit"
							onchange="getSafeDepositData('no');" value="0" required <?php echo Helper::validate_key_toggle('list_safe_deposit',$finacial_affairs,0);?>>
						<label for="list-safe-deposit_no" class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('list_safe_deposit',$finacial_affairs);?>" id="list-safe-deposit-data">
					@if (!empty($finacial_affairs['list_safe_deposit_data']['name']) && is_array($finacial_affairs['list_safe_deposit_data']['name']))
					@for ($i = 0; $i < count($finacial_affairs['list_safe_deposit_data']['name']); $i++)
			
					 @include("client.questionnaire.affairs.list_safe_deposit",['finacial_affairs'=>$finacial_affairs['list_safe_deposit_data'],$i])

					@endfor
					@else
						@include("client.questionnaire.affairs.list_safe_deposit", ['i' => 0])
					@endif

					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addListSafeDepositForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>

						 <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('list_safe_deposit_data')"></i><br/>
					</div>
				</div>
			</div>
			<!--  22. Listing -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">List any storage unit or place other than
						your home in which you have stored property within the past
						<strong>1 year</strong>
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-storage-unit_yes"
							name="other_storage_unit"
							onchange="getStorageUnitData('yes');" value="1" required <?php echo Helper::validate_key_toggle('other_storage_unit',$finacial_affairs,1);?>>
						<label for="list-storage-unit_yes" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-storage-unit_no"
							name="other_storage_unit"
							onchange="getStorageUnitData('no');" value="0" required <?php echo Helper::validate_key_toggle('other_storage_unit',$finacial_affairs,0);?>>
						<label for="list-storage-unit_no" class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('other_storage_unit',$finacial_affairs);?>" id="list-storage-unit-data">
					@if (!empty($finacial_affairs['other_storage_unit_data']['name']) && is_array($finacial_affairs['other_storage_unit_data']['name']))
					@for ($i = 0; $i < count($finacial_affairs['other_storage_unit_data']['name']); $i++)
			
					 @include("client.questionnaire.affairs.other_storage_unit",['finacial_affairs'=>$finacial_affairs['other_storage_unit_data'],$i])

					@endfor
					@else
						@include("client.questionnaire.affairs.other_storage_unit", ['i' => 0])
					@endif
					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addOtherStorageUnitForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>
						<i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('other_storage_unit_data')"></i><br/>
					</div>
				</div>
			</div>
			<!--  23. Listing -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">List all property that you hold or control
						that is owned by someone else.
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-property-you-hold_yes"
							name="list_property_you_hold"
							onchange="getPropertyHoldData('yes');" value="1" required <?php echo Helper::validate_key_toggle('list_property_you_hold',$finacial_affairs,1);?>>
						<label for="list-property-you-hold_yes" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-property-you-hold_no"
							name="list_property_you_hold"
							onchange="getPropertyHoldData('no');" value="0" required <?php echo Helper::validate_key_toggle('list_property_you_hold',$finacial_affairs,0);?>>
						<label for="list-property-you-hold_no" class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('list_property_you_hold',$finacial_affairs);?>" id="list-property-you-hold-data">
					@if (!empty($finacial_affairs['list_property_you_hold_data']['name']) && is_array($finacial_affairs['list_property_you_hold_data']['name']))
					@for ($i = 0; $i < count($finacial_affairs['list_property_you_hold_data']['name']); $i++)
			
					 @include("client.questionnaire.affairs.list_property_you_hold",['finacial_affairs'=>$finacial_affairs['list_property_you_hold_data'],$i])

					@endfor
					@else
						@include("client.questionnaire.affairs.list_property_you_hold", ['i' => 0])
					@endif

					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addListPropertyYouHoldForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>

						 <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('list_property_you_hold_data')"></i><br/>
					</div>
				</div>
			</div>
			<!--  24. Listing -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">List every site for which you received notice
						by a governmental unit that you may be liable under or in
						violation of an environmental
						law. Include the name and address of the governmental unit, the
						date of the notice, and, if known, the environmental law.<br>
						<i>Environmental law </i>means any federal, state, or local
						statue or
						regulation regulating pollution, contamination, releases of
						hazardous or
						toxic substances, wastes or material into the air, land, soil
						surface water, ground water, or other medium, including,
						statutes or
						regulations controlling the cleanup of these substances, wastes,
						or material.<br>
						<i>Site </i> means any location, facility, or property as
						defined under
						any environmental law, whether you own, operate, or utilize it
						or used to
						own, operate, or utilize it, including disposal sites.<br>
						<i>Hazardous material </i>means anything an environmental law
						defines
						as a hazardous waste, hazardous substance, toxic substance,
						hazardous material, pollutant, or contaminant or similar term
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-noticeby-gov_yes"
							name="list_noticeby_gov"
							onchange="getNoticeByGovData('yes');" value="1" required <?php echo Helper::validate_key_toggle('list_noticeby_gov',$finacial_affairs,1);?>>
						<label for="list-noticeby-gov_yes" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-noticeby-gov_no"
							name="list_noticeby_gov"
							onchange="getNoticeByGovData('no');" value="0" required <?php echo Helper::validate_key_toggle('list_noticeby_gov',$finacial_affairs,0);?>>
						<label for="list-noticeby-gov_no" class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('list_noticeby_gov',$finacial_affairs);?>" id="list-noticeby-gov-data">
					@if (!empty($finacial_affairs['list_noticeby_gov_data']['name']) && is_array($finacial_affairs['list_noticeby_gov_data']['name']))
					@for ($i = 0; $i < count($finacial_affairs['list_noticeby_gov_data']['name']); $i++)
			
					 @include("client.questionnaire.affairs.list_noticeby_gov",['finacial_affairs'=>$finacial_affairs['list_noticeby_gov_data'],$i])

					@endfor
					@else
						@include("client.questionnaire.affairs.list_noticeby_gov", ['i' => 0])
					@endif

					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addListNoticebyGovForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>

						 <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('list_noticeby_gov_data')"></i><br/>
					</div>
				</div>
			</div>
			<!--  25. Listing -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">List the name and address of every site for
						which you have notified a governmental unit of a hazardous
						material release. Include the
						name and address of the governmental unit to which the notice
						was sent, the date of the notice, and, if know, the environment
						law.
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-environment_law_yes"
							name="list_environment_law"
							onchange="getEnvironmentLawData('yes');" value="1" required <?php echo Helper::validate_key_toggle('list_environment_law',$finacial_affairs,1);?>>
						<label for="list-environment_law_yes" class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-environment_law_no"
							name="list_environment_law"
							onchange="getEnvironmentLawData('no');" value="0" required <?php echo Helper::validate_key_toggle('list_environment_law',$finacial_affairs,0);?>>
						<label for="list-environment_law_no" class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('list_environment_law',$finacial_affairs);?>" id="list-environment_law-data">
					@if (!empty($finacial_affairs['list_environment_law_data']['name']) && is_array($finacial_affairs['list_environment_law_data']['name']))
					@for ($i = 0; $i < count($finacial_affairs['list_environment_law_data']['name']); $i++)
			
					 @include("client.questionnaire.affairs.list_environment_law",['finacial_affairs'=>$finacial_affairs['list_environment_law_data'],$i])

					@endfor
					@else
						@include("client.questionnaire.affairs.list_environment_law", ['i' => 0])
					@endif

					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addListEnvironmentLawForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>

						 <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('list_environment_law_data')"></i><br/>
					</div>
				</div>
			</div>
			<!--  26. Listing -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">List all judicial or administrative
						proceedings, including settlements and orders, under any
						environmental law to which you have
						been a party. Include the case title and the case number, the
						court or agency, the nature of the case, and the status.
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-judicial-proceedings_yes"
							name="list_judicial_proceedings"
							onchange="getJudicialProceedingsData('yes');" value="1" required <?php echo Helper::validate_key_toggle('list_judicial_proceedings',$finacial_affairs,1);?>>
						<label for="list-judicial-proceedings_yes"
							class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-judicial-proceedings_no"
							name="list_judicial_proceedings"
							onchange="getJudicialProceedingsData('no');" value="0" required <?php echo Helper::validate_key_toggle('list_judicial_proceedings',$finacial_affairs,0);?>>
						<label for="list-judicial-proceedings_no" class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('joints_social_security',$finacial_affairs);?>" id="list-judicial-proceedings-data">
					@if (!empty($finacial_affairs['list_judicial_proceedings_data']['name']) && is_array($finacial_affairs['list_judicial_proceedings_data']['name']))
					@for ($i = 0; $i < count($finacial_affairs['list_judicial_proceedings_data']['name']); $i++)
			
					 @include("client.questionnaire.affairs.joints_social_security",['finacial_affairs'=>$finacial_affairs['list_judicial_proceedings_data'],$i])

					@endfor
					@else
						@include("client.questionnaire.affairs.joints_social_security", ['i' => 0])
					@endif

					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addJointsSocialSecurityForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>

						 <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('list_judicial_proceedings_data')"></i><br/>
					</div>
				</div>
			</div>
			<!--  27. Listing -->
			
			<?php if(!empty($sole_proprietor->proprietor_status)){?>
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">List the name and address, nature of
						business, name of accountant or bookkeeper, Employer
						Identification Number (EIN), and
						dates of operation of every business you owned or with which you
						had any of the following connections within the past<strong> 4
							years.</strong>
					</label>

					<div class="form-group unique-sec">
						<div class=" d-block radio-primary ">
							<input type="radio" id="sole-proprietor"
								name="employer_identification" value="1" required <?php echo Helper::validate_key_toggle('employer_identification',$finacial_affairs,1);?>>
							<label for="sole-proprietor" class="cr">A sole proprietor or
								self-employed in a trade, profession, or other activity,
								either full-time or part-time</label>
						</div>
						<div class=" d-block radio-primary ">
							<input type="radio" id="limited liability"
								name="employer_identification" value="2" required <?php echo Helper::validate_key_toggle('employer_identification',$finacial_affairs,2);?>>
							<label for="limited liability" class="cr"> A member of a
								limited liability company
								(LLC) or limited liability partnership (LLP)</label>
						</div>
						<div class="d-block radio-primary ">
							<input type="radio" id="partner-partnership"
								name="employer_identification" value="3" required <?php echo Helper::validate_key_toggle('employer_identification',$finacial_affairs,3);?>>
							<label for="partner-partnership" class="cr">A partner in a
								partnership</label>
						</div>
						<div class="d-block radio-primary ">
							<input type="radio" id="corporation"
								name="employer_identification" value="4" required <?php echo Helper::validate_key_toggle('employer_identification',$finacial_affairs,4);?>>
							<label for="corporation" class="cr">An officer,
								director, or managing executive of a corporation</label>
						</div>
						<div class="d-block radio-primary ">
							<input type="radio" id="securities-corporation"
								name="employer_identification" value="5" required <?php echo Helper::validate_key_toggle('employer_identification',$finacial_affairs,5);?>>
							<label for="securities-corporation" class="cr">An owner of
								at least 5% of the voting or equity securities of a
								corporation</label>
						</div>
					</div>
				</div>
				<div class="form-group " id="list-nature-business-data">
					@if (!empty($finacial_affairs['list_nature_business_data']['name']) && is_array($finacial_affairs['list_nature_business_data']['name']))
					@for ($i = 0; $i < count($finacial_affairs['list_nature_business_data']['name']); $i++)
			
					 @include("client.questionnaire.affairs.list_nature_business",['finacial_affairs'=>$finacial_affairs['list_nature_business_data'],$i])

					@endfor
					@else
						@include("client.questionnaire.affairs.list_nature_business", ['i' => 0])
					@endif

					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addListNatureBusinessForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>

						 <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('list_nature_business_data')"></i><br/>
					</div>
				</div>
			</div>
			
			<!--  28. Listing -->
			<div class="col-md-12">
				<div class="form-group">
					<label class="d-block">List all financial institutions, creditors,
						or other parties to which you gave a financial statement about
						your business within the past <strong>2 years</strong>
					</label>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-financial-institutions_yes"
							name="list_financial_institutions"
							onchange="getFinancialInstitutionsData('yes');" value="1" required <?php echo Helper::validate_key_toggle('list_financial_institutions',$finacial_affairs,1);?>>
						<label for="list-financial-institutions_yes"
							class="cr">Yes</label>
					</div>
					<div class="d-inline radio-primary ">
						<input type="radio" id="list-financial-institutions_no"
							name="list_financial_institutions"
							onchange="getFinancialInstitutionsData('no');" value="0" required <?php echo Helper::validate_key_toggle('list_financial_institutions',$finacial_affairs,0);?>>
						<label for="list-financial-institutions_no"
							class="cr">No</label>
					</div>
				</div>
				<div class="form-group <?php echo Helper::key_hide_show_v('list_financial_institutions',$finacial_affairs);?>" id="list-financial-institutions-data">
					
					@if (!empty($finacial_affairs['list_financial_institutions_data']['name']) && is_array($finacial_affairs['list_financial_institutions_data']['name']))
					@for ($i = 0; $i < count($finacial_affairs['list_financial_institutions_data']['name']); $i++)
			
					 @include("client.questionnaire.affairs.list_financial_institutions",['finacial_affairs'=>$finacial_affairs['list_financial_institutions_data'],$i])
					@endfor
					@else
						@include("client.questionnaire.affairs.list_financial_institutions", ['i' => 0])
					@endif

					<div class="add-more-btn">
						<button class="btn btn-primary shadow-2 rounded-0"
							id="add-more-residence-form"
							onclick="addListFinancialInstitutionsForm(); return false;"><i
								class="feather icon-plus mr-0"></i> Add
							More </button>

						 <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
	            style="position: absolute;right: 20px;"
	            onclick="remove_clone_box('list_financial_institutions_data')"></i><br/>
					</div>

				</div>
			</div>
			<?php }?>
			<div class="col-md-12">
				<div class="next-part-btn text-right">
				<?php if(!empty($can_editable)){?>
				<?php if(!empty($finacial_affairs['id'])){?>
				<input type="hidden" class="property_vehicle_ids"  name="id" value="<?php echo Helper::validate_value($finacial_affairs['id']);?>">
				<?php }?>
					<button class="btn btn-primary shadow-2 mb-4" type="submit">Save </button>
				<?php }else{?>
						<a href="{{route('client_document_uploads')}}" class="btn btn-primary shadow-2 mb-4">Final Submit</a>
				<?php }?>
				</div>
			</div>
		</div>
	</div>
	</form>
<script>
	$(document).ready(function(){
		$("#client_finacial_affairs").validate({
			errorPlacement: function (error, element) {
				if($(element).parents(".form-group").next('label').hasClass('error')){
					$(element).parents(".form-group").next('label').remove();
					$(element).parents(".form-group").after($(error)[0].outerHTML);
				}else{
					$(element).parents(".form-group").after($(error)[0].outerHTML);
				}
				if($(element).parents(".input-group").next('label').hasClass('error')){
					$(element).parents(".input-group").next('label').remove();
					$(element).parents(".input-group").after($(error)[0].outerHTML);
				}else{
					$(element).parents(".input-group").after($(error)[0].outerHTML);
				}
			},
			success: function(label,element) {
				label.parent().removeClass('error');
				$(element).parents(".form-group").next('label').remove();
				$(element).parents(".input-group").next('label').remove();
			},
		});
	});
</script>
</div>
								<!-- Tab 6 End-->
