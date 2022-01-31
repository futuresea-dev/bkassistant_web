<div class="form-main w-100 other_storage_unit_data" id="list-storage-unit-data-1">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Name of Storage Facility</label>
						<input type="text" name="other_storage_unit_data[name][{{$i}}]" class="form-control required name" placeholder="Name of Storage Facility" value="{{@$finacial_affairs['name'][$i]}}">
					</div>							
				</div>
				<div class="col-md-12">
					<div class="form-group ">
						<label>
							Number Street
						</label>
						<input type="text" name="other_storage_unit_data[street_number][{{$i}}]" class="form-control required street_number" placeholder="Number Street" value="{{@$finacial_affairs['street_number'][$i]}}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>City</label>
						<input type="text" class="form-control required city" name="other_storage_unit_data[city][{{$i}}]" placeholder="City" value="{{@$finacial_affairs['city'][$i]}}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>State</label>
						<select class="form-control required state" name="other_storage_unit_data[state][{{$i}}]">
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
						<input type="number" class="form-control required zip" name="other_storage_unit_data[zip][{{$i}}]" placeholder="Zip Code" value="{{@$finacial_affairs['zip'][$i]}}">
					</div>
				</div>		
			</div>
		</div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<label>Did anyone else have access to the box or depository?</label>
					<div class="form-group have_access_of_box">
						<div class="d-inline radio-primary ">
							<input type="radio"
								id="have_access_of_box_yes"
								onchange="show_hide_base_on_select('other-depository-yes', 'abc', this.value)"
								name="other_storage_unit_data[have_access_of_box][{{$i}}]"  value="1" required <?php echo Helper::validate_key_loop_toggle('have_access_of_box',$finacial_affairs,1, $i);?>>
							<label for="have_access_of_box_yes"
								class="cr">Yes</label>
						</div>
						<div class="d-inline radio-primary ">
							<input type="radio" id="have_access_of_box_no"
								onchange="show_hide_base_on_select('other-depository-yes', 'abc', this.value)"
								name="other_storage_unit_data[have_access_of_box][{{$i}}]"  value="0" required <?php echo Helper::validate_key_loop_toggle('have_access_of_box',$finacial_affairs,0, $i);?>>
							<label for="have_access_of_box_no"
								class="cr">No</label>
						</div>
					</div>
				</div>
				<div class="col-md-12 other-depository-yes">
					<div class="form-group">
						<label>Name and Address of Anyone With Access to Box or Depository</label>
						<input type="text" name="other_storage_unit_data[bd_name][{{$i}}]" class="form-control required bd_name" placeholder="Name and Address of Anyone With Access to Box or Depository" value="{{@$finacial_affairs['bd_name'][$i]}}">
					</div>							
				</div>
				<div class="col-md-12 other-depository-yes">
					<div class="form-group ">
						<label>
							Number Street
						</label>
						<input type="text" name="other_storage_unit_data[bd_street_number][{{$i}}]" class="form-control required bd_street_number" placeholder="Number Street" value="{{@$finacial_affairs['bd_street_number'][$i]}}">
					</div>
				</div>
				<div class="col-md-4 other-depository-yes">
					<div class="form-group">
						<label>City</label>
						<input type="text" class="form-control required bd_city" name="other_storage_unit_data[bd_city][{{$i}}]" placeholder="City" value="{{@$finacial_affairs['bd_city'][$i]}}">
					</div>
				</div>
				<div class="col-md-4 other-depository-yes">
					<div class="form-group">
						<label>State</label>
						<select class="form-control required bd_state" name="other_storage_unit_data[bd_state][{{$i}}]">
						<option value="">State</option>
						<?php foreach($usa_states as $us_key=>$usa_vl){?>
						<option value="<?php echo $us_key;?>" <?php echo Helper::validate_key_option_loop('bd_state',$finacial_affairs,$i,$us_key);?>><?php echo $usa_vl;?></option>
						<?php }?>
						</select>
					</div>
				</div>
				<div class="col-md-4 other-depository-yes">
					<div class="form-group">
						<label>Zip Code</label>
						<input type="number" class="form-control required bd_zip" name="other_storage_unit_data[bd_zip][{{$i}}]" placeholder="Zip Code" value="{{@$finacial_affairs['bd_zip'][$i]}}">
					</div>
				</div>		
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label>Description of Contents</label>
				<textarea name="other_storage_unit_data[contents][{{$i}}]" class="form-control required contents"
					cols="30" rows="4"
					placeholder="Description of Contents"><?php echo Helper::validate_key_loop_value('contents',$finacial_affairs,$i);?></textarea>
			</div>
		</div>
		<div class="col-md-6">
			<label> Do You Still
				Have It?</label>
			<div class="form-group">
				<div class="d-inline radio-primary ">
					<input type="radio" class="still_have_storage_unit" id="still_have_storage-unit_yes"
						name="other_storage_unit_data[still_have_storage_unit][{{$i}}]" value="1" required <?php echo Helper::validate_key_loop_toggle('still_have_storage_unit',$finacial_affairs,1,$i);?>>
					<label for="still_have_storage-unit_yes"
						class="cr">Yes</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio" class="still_have_storage_unit" id="still_have_storage-unit_no"
						name="other_storage_unit_data[still_have_storage_unit][{{$i}}]" value="0" required <?php echo Helper::validate_key_loop_toggle('still_have_storage_unit',$finacial_affairs,0,$i);?>>
					<label for="still_have_storage-unit_no"
						class="cr">No</label>
				</div>
			</div>
		</div>

	</div>
</div>