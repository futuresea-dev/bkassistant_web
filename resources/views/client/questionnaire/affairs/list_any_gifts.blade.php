<div class="form-main w-100 list_any_gifts_data" id="list-any-gifts-data-1">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Name and Address of Recipient</label>
				<input type="text" name="list_any_gifts_data[recipient_address][{{$i}}]" class="form-control required recipient_address"
					 placeholder="Name of Recipien" value="<?php echo Helper::validate_key_loop_value('recipient_address',$finacial_affairs,$i);?>">
			</div>
			<div class="form-group">
				<label>Street Address</label>
				<input type="text" class="form-control required creditor_street" name="list_any_gifts_data[creditor_street][{{$i}}]" placeholder="Street Address" value="<?php echo Helper::validate_key_loop_value('creditor_street',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>City</label>
				<input type="text" class="form-control required creditor_city" name="list_any_gifts_data[creditor_city][{{$i}}]" placeholder="City" value="<?php echo Helper::validate_key_loop_value('creditor_city',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>State</label>
				<select class="form-control required creditor_state" name="list_any_gifts_data[creditor_state][{{$i}}]">
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
				<input type="number" class="form-control required" name="list_any_gifts_data[creditor_zip][{{$i}}]" placeholder="Zip" value="<?php echo Helper::validate_key_loop_value('creditor_zip',$finacial_affairs,$i);?>">
			</div>
		</div>
		
		<div class="col-md-6">
			<label> Relationship to You</label>
			<div class="form-group">
				<input type="text" class="form-control required relationship" name="list_any_gifts_data[relationship][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('relationship',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label> Description of Gifts</label>
				<textarea name="list_any_gifts_data[gifts][{{$i}}]" class="form-control required gifts"
					cols="30" rows="4"
					placeholder=" Description of Gifts"><?php echo Helper::validate_key_loop_value('gifts',$finacial_affairs,$i);?></textarea>
			</div>
		</div>

		<div class="col-md-6">
			<label>Dates you gave the Gifts</label>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" placeholder="From Date" class="form-control required gifts_date_from" name="list_any_gifts_data[gifts_date_from][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('gifts_date_from',$finacial_affairs,$i);?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" placeholder="To Date" class="form-control required gifts_date_to" name="list_any_gifts_data[gifts_date_to][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('gifts_date_to',$finacial_affairs,$i);?>">
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<label>Value of gifts</label>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">$</span>
					</div>
					<input type="number" class="form-control required gifts_value" name="list_any_gifts_data[gifts_value][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('gifts_value',$finacial_affairs,$i);?>">
				</div>
			</div>
		</div>
	</div>
</div>