<div class="form-main w-100 list_property_you_hold_data" id="list-property-you-hold-data-1">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Name of Site</label>
						<input type="text" name="list_property_you_hold_data[name][{{$i}}]" class="form-control required name" placeholder="Name of Site" value="{{@$finacial_affairs['name'][$i]}}">
					</div>							
				</div>
				<div class="col-md-12">
					<div class="form-group ">
						<label>
							Number Street
						</label>
						<input type="text" name="list_property_you_hold_data[street_number][{{$i}}]" class="form-control required street_number" placeholder="Number Street" value="{{@$finacial_affairs['street_number'][$i]}}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>City</label>
						<input type="text" class="form-control required city" name="list_property_you_hold_data[city][{{$i}}]" placeholder="City" value="{{@$finacial_affairs['city'][$i]}}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>State</label>
						<select class="form-control required state" name="list_property_you_hold_data[state][{{$i}}]">
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
						<input type="number" class="form-control required zip" name="list_property_you_hold_data[zip][{{$i}}]" placeholder="Zip Code" value="{{@$finacial_affairs['zip'][$i]}}">
					</div>
				</div>		
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label><b>Location of Property</b></label>
			</div>
		</div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group ">
						<label>
							Number Street
						</label>
						<input type="text" name="list_property_you_hold_data[location_street_number][{{$i}}]" class="form-control required location_street_number" placeholder="Number Street" value="{{@$finacial_affairs['location_street_number'][$i]}}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>City</label>
						<input type="text" class="form-control required location_city" name="list_property_you_hold_data[location_city][{{$i}}]" placeholder="City" value="{{@$finacial_affairs['location_city'][$i]}}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>State</label>
						<select class="form-control required location_state" name="list_property_you_hold_data[location_state][{{$i}}]">
						<option value="">State</option>
						<?php foreach($usa_states as $us_key=>$usa_vl){?>
						<option value="<?php echo $us_key;?>" <?php echo Helper::validate_key_option_loop('location_state',$finacial_affairs,$i,$us_key);?>><?php echo $usa_vl;?></option>
						<?php }?>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Zip Code</label>
						<input type="number" class="form-control required location_zip" name="list_property_you_hold_data[location_zip][{{$i}}]" placeholder="Zip Code" value="{{@$finacial_affairs['location_zip'][$i]}}">
					</div>
				</div>		
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label> Description of Property</label>
				<textarea name="list_property_you_hold_data[property_desc][{{$i}}]" class="form-control required property_desc"
					cols="30" rows="4"
					placeholder=" Description of Property"><?php echo Helper::validate_key_loop_value('property_desc',$finacial_affairs,$i);?></textarea>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label> Value</label>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">$</span>
						</div>
						<input type="text" class="form-control required property_value" name="list_property_you_hold_data[property_value][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('property_value',$finacial_affairs,$i);?>">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>