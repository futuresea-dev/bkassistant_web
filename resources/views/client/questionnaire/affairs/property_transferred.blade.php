<div class="form-main w-100 property_transferred_data" id="property_transferred-data-1">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Name and Address of Person Paid</label>
				<input type="text" name="property_transferred_data[person_paid][{{$i}}]" class="form-control required person_paid"
					 placeholder="Name and Address of Person Paid" value="<?php echo Helper::validate_key_loop_value('person_paid',$finacial_affairs,$i);?>">
			</div>
			<div class="form-group">
					<label>Street Address</label>
					<input type="text" class="form-control required person_paid_street" name="property_transferred_data[person_paid_street][{{$i}}]" placeholder="Street Address" value="<?php echo Helper::validate_key_loop_value('person_paid_street',$finacial_affairs,$i);?>">
			</div>
			<div class="form-group">
				<label>Address Line 2</label>
				<input type="text" class="form-control required person_paid_address_line2" name="property_transferred_data[person_paid_address_line2][{{$i}}]" placeholder="Address Line 2" value="<?php echo Helper::validate_key_loop_value('person_paid_address_line2',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>City</label>
				<input type="text" class="form-control required person_paid_city" name="property_transferred_data[person_paid_city][{{$i}}]" placeholder="City" value="<?php echo Helper::validate_key_loop_value('person_paid_city',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>State</label>
				<select class="form-control required person_paid_state" name="property_transferred_data[person_paid_state][{{$i}}]">
				<option value="">Please Select State or Territory</option>
				<?php foreach($usa_states as $us_key=>$usa_vl){?>
				<option value="<?php echo $us_key;?>" {{($us_key == @$finacial_affairs['person_paid_state'][$i]) ? 'selected':''}} ><?php echo $usa_vl;?></option>
				<?php }?>
				</select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Zip</label>
				<input type="number" class="form-control required person_paid_zip" name="property_transferred_data[person_paid_zip][{{$i}}]" placeholder="Zip" value="<?php echo Helper::validate_key_loop_value('person_paid_zip',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label> Name of Person Who Made the Payment, if Not
					You</label>
				<div class="form-group">
					<input type="text" class="form-control required person_made_payment" name="property_transferred_data[person_made_payment][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('person_made_payment',$finacial_affairs,$i);?>">
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label>Email or website address</label>
				<div class="form-group">
					<input type="text" class="form-control required person_email_or_website" name="property_transferred_data[person_email_or_website][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('person_email_or_website',$finacial_affairs,$i);?>">
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<label> Description and Value of Any
				Property Transferred</label>
			<textarea name="property_transferred_data[property_transferred_value][{{$i}}]" class="form-control required property_transferred_value" cols="30"
				rows="4"
				placeholder="Description of Property Transferred"><?php echo Helper::validate_key_loop_value('property_transferred_value',$finacial_affairs,$i);?></textarea>
		</div>
		<div class="col-md-6">
			<label> Date of Payment or Transfer</label>
			<div class="form-group">
				<input type="text" placeholder="Date" class="form-control required property_transferred_date" name="property_transferred_data[property_transferred_date][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('property_transferred_date',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-6">
			<label>Amount of Payment</label>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">$</span>
					</div>
				<input type="text" class="form-control required property_transferred_payment" name="property_transferred_data[property_transferred_payment][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('property_transferred_payment',$finacial_affairs,$i);?>">
			</div>
			</div>
		</div>
	</div>
</div>