<div class="row list_every_addresses">
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group ">
					<label>
						Street Address
					</label>
					<input type="text" class="form-control required creditor_street"
				placeholder="Street Address" name="prev_address[creditor_street][{{$i}}]" value="<?php echo Helper::validate_key_loop_value("creditor_street",$finacial_affairs,$i);?>">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>City</label>
					<input type="text" class="form-control required creditor_city" name="prev_address[creditor_city][{{$i}}]" placeholder="City" value="<?php echo Helper::validate_key_loop_value("creditor_city",$finacial_affairs,$i);?>">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>State</label>
					<select class="form-control required creditor_state" name="prev_address[creditor_state][{{$i}}]">
					<option value="">State</option>
					<?php foreach($usa_states as $us_key=>$usa_vl){?>
					<option value="<?php echo $us_key;?>" {{($us_key == @$finacial_affairs['creditor_state'][$i]) ? 'selected':''}}> <?php echo $usa_vl;?> </option>
					<?php }?>
					</select>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Zip</label>
					<input type="number" class="form-control required creditor_zip" name="prev_address[creditor_zip][{{$i}}]" placeholder="Zip" value="<?php echo Helper::validate_key_loop_value("creditor_zip",$finacial_affairs,$i);?>">
				</div>
			</div>
		</div>
			
	</div>
	<div class="col-md-3">
		<label>From</label>
		<div class="form-group">
			<input type="text" placeholder="From Date" class="form-control required prev_address_from" name="prev_address[from][{{$i}}]" value="<?php echo Helper::validate_key_loop_value("from",$finacial_affairs,$i);?>">
		</div>
	</div>
	<div class="col-md-3">
		<label>To</label>
		<div class="form-group">
			<input type="text" placeholder="To Date"  class="form-control required prev_address_to" name="prev_address[to][{{$i}}]" value="<?php echo Helper::validate_key_loop_value("to",$finacial_affairs,$i);?>">
		</div>
	</div>
</div>