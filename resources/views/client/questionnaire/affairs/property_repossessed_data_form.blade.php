<div class="form-main w-100 property_repossessed_data_form" id="property-repossessed-data-form-1">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Creditor's Name and Address</label>
				<input type="text" name="property_repossessed_data[creditor_address][<?php echo $i;?>]"
					class="form-control required property_repossessed_address" placeholder="Case Title and Case Number" value="<?php echo Helper::validate_key_loop_value('creditor_address',$finacial_affairs,$i);?>">
			</div>
			<div class="form-group ">
				<label>
					Street Address
				</label>
				<input type="text" name="property_repossessed_data[creditor_street][<?php echo $i;?>]" class="form-control property_repossessed_creditor_street required" placeholder="Street Address" value="<?php echo Helper::validate_key_loop_value('creditor_street',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>City</label>
				<input type="text" class="form-control property_repossessed_creditor_city required" name="property_repossessed_data[creditor_city][<?php echo $i;?>]" placeholder="City" value="<?php echo Helper::validate_key_loop_value('creditor_city',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>State</label>
				<select class="form-control required property_repossessed_creditor_state" name="property_repossessed_data[creditor_state][<?php echo $i;?>]">
				<option value="">Please Select State or Territory</option>
				<?php foreach($usa_states as $us_key=>$usa_vl){?>
				<option value="<?php echo $us_key;?>" {{($us_key == $finacial_affairs['creditor_state'][$i]) ? 'selected':''}} ><?php echo $usa_vl;?></option>
				<?php }?>
				</select>
				<!--<input type="text" class="form-control property_repossessed_creditor_state required" name="property_repossessed_data[creditor_state][<?php echo $i;?>]" placeholder="State" value="<?php echo Helper::validate_key_loop_value('creditor_state',$finacial_affairs,$i);?>">-->
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Zip</label>
				<input type="number" class="form-control property_repossessed_creditor_zip required" name="property_repossessed_data[creditor_zip][<?php echo $i;?>]" placeholder="Zip" value="<?php echo Helper::validate_key_loop_value('creditor_zip',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label>Description and Value of Property</label>
				<textarea name="property_repossessed_data[creditor_Property][<?php echo $i;?>]"
					class="form-control required property_repossessed_creditor_Property" cols="30" rows="4"
					placeholder="Case Title and Case Number"><?php echo Helper::validate_key_loop_value('creditor_Property',$finacial_affairs,$i);?></textarea>
			</div>
		</div>
		<div class="col-md-6">
			<label> Date</label>
			<div class="form-group">
				<input type="text" placeholder="Date" class="form-control required property_repossessed_date" name="property_repossessed_data[property_repossessed_date][<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('property_repossessed_date',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-12">
			<label> Explain what happened</label>

			<div class="form-group">
				<div class="d-inline radio-primary ">
					<input type="radio" id="property-repossessed" class="property_repossessed_what_happened" 
						name="property_repossessed_data[what_happened][<?php echo $i;?>]" value="1" required <?php echo Helper::validate_key_loop_toggle('what_happened',$finacial_affairs,1,$i);?>>
					<label for="property-repossessed"
						class="cr">Property was
						repossessed</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio" id="property-foreclosed" class="property_repossessed_what_happened"
						name="property_repossessed_data[what_happened][<?php echo $i;?>]" value="2" required <?php echo Helper::validate_key_loop_toggle('what_happened',$finacial_affairs,2,$i);?>>
					<label for="property-foreclosed"
						class="cr">Property
						was
						foreclosed</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio" id="property-garnished" class="property_repossessed_what_happened"
						name="property_repossessed_data[what_happened][<?php echo $i;?>]" value="3" required <?php echo Helper::validate_key_loop_toggle('what_happened',$finacial_affairs,3,$i);?>>
					<label for="property-garnished" class="cr">
						Property
						was
						garnished</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio" id="property-attached" class="property_repossessed_what_happened"
						name="property_repossessed_data[what_happened][<?php echo $i;?>]" value="4" required <?php echo Helper::validate_key_loop_toggle('what_happened',$finacial_affairs,4,$i);?>>
					<label for="property-attached"
						class="cr">Property
						was
						attached, seized, or
						levied</label>
				</div>
			</div>
		</div>
	</div>
</div>