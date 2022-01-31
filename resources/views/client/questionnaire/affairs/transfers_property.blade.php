<div class="form-main w-100 transfers_property" id="transfers-property-data-1">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Name and Address of Creditor</label>
				<input type="text" name="transfers_property_data[creditor_address_transfers_property][{{$i}}]" class="form-control required creditor_address_transfers_property" placeholder="Name and Address of Creditor" value="<?php echo Helper::validate_key_loop_value('creditor_address_transfers_property',$finacial_affairs,$i);?>">
			</div>
			<div class="form-group ">
				<label>
					Street Address
				</label>
				<input type="text" name="transfers_property_data[creditor_street_transfers_property][{{$i}}]" class="form-control required creditor_street_transfers_property" placeholder="Street Address" value="<?php echo Helper::validate_key_loop_value('creditor_street_transfers_property',$finacial_affairs,$i);?>">
			</div>
			
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>City</label>
				<input type="text" class="form-control required creditor_city_transfers_property" name="transfers_property_data[creditor_city_transfers_property][{{$i}}]" placeholder="City" value="<?php echo Helper::validate_key_loop_value('creditor_city_transfers_property',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>State</label>
				<select class="form-control required creditor_state_transfers_property" name="transfers_property_data[creditor_state_transfers_property][{{$i}}]">
				<option value="">Please Select State or Territory</option>
				<?php foreach($usa_states as $us_key=>$usa_vl){?>
				<option value="<?php echo $us_key;?>" {{($us_key == @$finacial_affairs['creditor_state_transfers_property'][$i]) ? 'selected':''}} ><?php echo $usa_vl;?></option>
				<?php }?>
				</select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Zip</label>
				<input type="number" class="form-control required creditor_zip_transfers_property" name="transfers_property_data[creditor_zip_transfers_property][{{$i}}]" placeholder="Zip" value="<?php echo Helper::validate_key_loop_value('creditor_zip_transfers_property',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-6">
			<label> Dates of Payment</label>
			<div class="form-group">
				<input type="text" placeholder="Dates of Payment" class="form-control required payment_dates_transfers_property" name="transfers_property_data[payment_dates_transfers_property][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('payment_dates_transfers_property',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-6">
			<label>Total Amount Paid</label>
			<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">$</span>
				 </div>
				<input type="text" class="form-control required total_amount_paid_transfers_property" name="transfers_property_data[total_amount_paid_transfers_property][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('total_amount_paid_transfers_property',$finacial_affairs,$i);?>">
			</div>
			</div>
		</div>
		<div class="col-md-6">
			<label>Amount Still Owed</label>
			<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">$</span>
				 </div>
				<input type="text" class="form-control required amount_still_owed_transfers_property" name="transfers_property_data[amount_still_owed_transfers_property][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('amount_still_owed_transfers_property',$finacial_affairs,$i);?>">
			</div>
			</div>
		</div>
		<div class="col-md-12">
			<label>Reason for payment<i> (include the
					creditor's name)</i></label>
			<div class="form-group">
				<input type="text" class="form-control required payment_reason_transfers_property" name="transfers_property_data[payment_reason_transfers_property][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('payment_reason_transfers_property',$finacial_affairs,$i);?>">
			</div>
		</div>
	</div>
</div>