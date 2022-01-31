<div class="form-main w-100 Property_all_data" id="property-all-data-1">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Name of Person Who Received the Transfer</label>
						<input type="text" name="Property_all_data[name][{{$i}}]" class="form-control required name" placeholder="Person Who Received the Transfer" value="{{@$finacial_affairs['name'][$i]}}">
					</div>							
				</div>
				<div class="col-md-12">
					<div class="form-group ">
						<label>
							Number Street
						</label>
						<input type="text" name="Property_all_data[street_number][{{$i}}]" class="form-control required street_number" placeholder="Number Street" value="{{@$finacial_affairs['street_number'][$i]}}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>City</label>
						<input type="text" class="form-control required city" name="Property_all_data[city][{{$i}}]" placeholder="City" value="{{@$finacial_affairs['city'][$i]}}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>State</label>
						<select class="form-control required state" name="Property_all_data[state][{{$i}}]">
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
						<input type="number" class="form-control required zip" name="Property_all_data[zip][{{$i}}]" placeholder="Zip Code" value="{{@$finacial_affairs['zip'][$i]}}">
					</div>
				</div>		
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label> Description and Value of Property Transferred</label>
				<textarea name="Property_all_data[property_transfer_value][{{$i}}]" class="form-control required property_transfer_value" rows="4" placeholder="Description and Value of Property Transferred"><?php echo Helper::validate_key_loop_value('property_transfer_value',$finacial_affairs,$i);?></textarea>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label> Describe Any Property or
					Payments Received or Debts Paid
					in Exchange</label>
				<textarea name="Property_all_data[property_exchange][{{$i}}]" class="form-control required property_exchange" rows="4" placeholder="Describe Any Property or Payments Received or Debts Paid in Exchange"><?php echo Helper::validate_key_loop_value('property_exchange',$finacial_affairs,$i);?></textarea>
			</div>
		</div>

		<div class="col-md-6">
			<label>Person's relationship to you </label>
			<input type="text" placeholder="Person's relationship to you" class="form-control required relationship_to_you" name="Property_all_data[relationship_to_you][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('relationship_to_you',$finacial_affairs,$i);?>">
		</div>
		<div class="col-md-6">
			<label> Date of Transfer</label>
			<div class="form-group">
				<input type="text" placeholder="Date" class="form-control required property_transfer_date" name="Property_all_data[property_transfer_date][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('property_transfer_date',$finacial_affairs,$i);?>">
			</div>
		</div>

	</div>
</div>