<div class="form-main w-100 payment_past_one_year" id="payment-past-one-year-data-1">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Name and Address of Creditor</label>
				<input type="text" name="past_one_year_data[creditor_address_past_one_year][{{$i}}]" class="form-control required creditor_address_past_one_year" placeholder="Name and Address of Creditor" value="<?php echo Helper::validate_key_loop_value('past_one_year_data',$finacial_affairs,'creditor_address_past_one_year');?>">
			</div>
			<div class="form-group ">
				<label>
					Street Address
				</label>
				<input type="text" name="past_one_year_data[creditor_street_past_one_year][{{$i}}]" class="form-control required creditor_street_past_one_year" placeholder="Street Address" value="<?php echo Helper::validate_key_loop_value('creditor_street_past_one_year',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>City</label>
				<input type="text" class="form-control required creditor_city_past_one_year" name="past_one_year_data[creditor_city_past_one_year][{{$i}}]" placeholder="City" value="<?php echo Helper::validate_key_loop_value('creditor_city_past_one_year',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>State</label>
				<select class="form-control required creditor_state_past_one_year" name="past_one_year_data[creditor_state_past_one_year][{{$i}}]">
				<option value="">Please Select State or Territory</option>
				<?php foreach($usa_states as $us_key=>$usa_vl){?>
				<option value="<?php echo $us_key;?>" {{($us_key == @$finacial_affairs['creditor_state_past_one_year'][$i]) ? 'selected':''}} ><?php echo $usa_vl;?></option>
				<?php }?>
				</select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Zip</label>
				<input type="number" class="form-control required creditor_zip_past_one_year" name="past_one_year_data[creditor_zip_past_one_year][{{$i}}]" placeholder="Zip" value="<?php echo Helper::validate_key_loop_value('creditor_zip_past_one_year',$finacial_affairs,$i);?>">
			</div>
		</div>

		<div class="col-md-6">
			<label> Dates of Payment</label>
			<div class="form-group">
				<input type="text" placeholder="Dates of Payment" class="form-control required past_one_year_payment_dates" name="past_one_year_data[past_one_year_payment_dates][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('past_one_year_payment_dates',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-6">
			<label>Total Amount Paid</label>
			<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">$</span>
				 </div>
				<input type="text" class="form-control required past_one_year_total_amount_paid" name="past_one_year_data[past_one_year_total_amount_paid][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('past_one_year_total_amount_paid',$finacial_affairs,$i);?>">
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
				<input type="text" class="form-control required past_one_year_amount_still_owed" name="past_one_year_data[past_one_year_amount_still_owed][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('past_one_year_amount_still_owed',$finacial_affairs,$i);?>">
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<label>Reason for payment</label>
			<div class="form-group">
				<input type="text" class="form-control required past_one_year_payment_reason" name="past_one_year_data[past_one_year_payment_reason][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('past_one_year_payment_reason',$finacial_affairs,$i);?>">
			</div>
		</div>
	</div>
</div>