<div class="form-main w-100 list_judicial_proceedings_data" id="list-judicial-proceedings-data-1">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Case Title</label>
				<input type="text" name="list_judicial_proceedings_data[case_number][{{$i}}]" class="form-control required case_number" placeholder="Case Title" value="{{@$finacial_affairs['case_number'][$i]}}">
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label>Case Name</label>
				<input type="text" name="list_judicial_proceedings_data[case_name][{{$i}}]" class="form-control required case_name" placeholder="Case Name" value="{{@$finacial_affairs['case_name'][$i]}}">
			</div>
		</div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Name of Court or Agency</label>
						<input type="text" name="list_judicial_proceedings_data[name][{{$i}}]" class="form-control required name" placeholder="Name of Court or Agency" value="{{@$finacial_affairs['list_judicial_proceedings_data']['name']}}">
					</div>							
				</div>
				<div class="col-md-12">
					<div class="form-group ">
						<label>
							Number Street
						</label>
						<input type="text" name="list_judicial_proceedings_data[street_number][{{$i}}]" class="form-control required street_number" placeholder="Number Street" value="{{@$finacial_affairs['list_judicial_proceedings_data']['street_number']}}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>City</label>
						<input type="text" class="form-control required city" name="list_judicial_proceedings_data[city][{{$i}}]" placeholder="City" value="{{@$finacial_affairs['list_judicial_proceedings_data']['city']}}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>State</label>
						<select class="form-control required state" name="list_judicial_proceedings_data[state][{{$i}}]">
						<option value="">State</option>
						<?php foreach($usa_states as $us_key=>$usa_vl){?>
						<option value="<?php echo $us_key;?>" <?php echo Helper::validate_key_option_loop('state',$finacial_affairs,$i,$us_key);?>><?php echo $usa_vl;?></option>
						<?php }?>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Zip Code</label>
						<input type="number" class="form-control required zip" name="list_judicial_proceedings_data[zip][{{$i}}]" placeholder="Zip Code" value="{{@$finacial_affairs['list_judicial_proceedings_data']['zip']}}">
					</div>
				</div>		
			</div>
		</div>
		<div class="col-md-12">
			<label> Nature of the Case</label>
			<div class="form-group">
				<div class="d-inline radio-primary ">
					<input type="radio" id="Nature-case_pending_yes" class="nature_case"
						name="list_judicial_proceedings_data[nature_case][{{$i}}]" value="1" required <?php echo Helper::validate_key_loop_toggle('nature_case',$finacial_affairs,1,$i);?>>
					<label for="Nature-case_pending_yes"
						class="cr">Pending</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio" id="Nature-case_on_appeal_no" class="nature_case"
						name="list_judicial_proceedings_data[nature_case][{{$i}}]" value="2" required <?php echo Helper::validate_key_loop_toggle('nature_case',$finacial_affairs,2,$i);?>>
					<label for="Nature-case_on_appeal_no" class="cr"> On
						Appeal</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio" id="Nature-case-concluded_no" class="nature_case"
						name="list_judicial_proceedings_data[nature_case][{{$i}}]" value="3" required <?php echo Helper::validate_key_loop_toggle('nature_case',$finacial_affairs,3,$i);?>>
					<label for="Nature-case-concluded_no"
						class="cr">Concluded</label>
				</div>
			</div>
		</div>

	</div>
</div>