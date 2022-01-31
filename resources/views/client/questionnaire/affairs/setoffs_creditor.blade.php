<div class="form-main w-100 setoffs_creditor_data" id="setoffs_creditor-data-1">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Creditor's Name and Address</label>
				<input type="text" name="setoffs_creditor_data[creditors_address][{{$i}}]" class="form-control required creditors_address" placeholder="Creditor's Name and Address" value="<?php echo Helper::validate_key_loop_value('creditors_address',$finacial_affairs,$i);?>">
			</div>
			<div class="form-group">
				<label>Street Address</label>
				<input type="text" class="form-control required creditor_street" name="setoffs_creditor_data[creditor_street][{{$i}}]" placeholder="Street Address" value="<?php echo Helper::validate_key_loop_value('creditor_street',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>City</label>
				<input type="text" class="form-control required creditor_city" name="setoffs_creditor_data[creditor_city][{{$i}}]" placeholder="City" value="<?php echo Helper::validate_key_loop_value('creditor_city',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>State</label>
				<select class="form-control required creditor_state" name="setoffs_creditor_data[creditor_state][{{$i}}]">
				<option value="">Please Select State or Territory</option>
				<?php foreach($usa_states as $us_key=>$usa_vl){?>
				<option value="<?php echo $us_key;?>" {{($us_key == @$finacial_affairs['creditor_state'][$i]) ? 'selected':''}} ><?php echo $usa_vl;?></option>
				<?php }?>
				</select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Zip</label>
				<input type="number" class="form-control required creditor_zip" name="setoffs_creditor_data[creditor_zip][{{$i}}]" placeholder="Zip" value="<?php echo Helper::validate_key_loop_value('creditor_zip',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-6">
			<label> Description of action taken by creditor</label>
			<textarea name="setoffs_creditor_data[creditors_action][{{$i}}]" class="form-control required creditors_action" cols="30"
				rows="4" placeholder="Description"><?php echo Helper::validate_key_loop_value('creditors_action',$finacial_affairs,$i);?></textarea>
		</div>
		<div class="col-md-6">
			<label>Date Action Taken</label>
			<div class="form-group">
				<input type="text" placeholder="Date" class="form-control required date_action" name="setoffs_creditor_data[date_action][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('date_action',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-6">
			<label>Last 4 Digits of Account Number</label>
			<div class="form-group">
				<input type="text" class="form-control required account_number" name="setoffs_creditor_data[account_number][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('account_number',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-6">
			<label>Amount</label>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">$</span>
					 </div>
					<input type="text" class="form-control required amount_data" name="setoffs_creditor_data[amount_data][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('amount_data',$finacial_affairs,$i);?>">
				</div>
			</div>
		</div>
	</div>
</div>