<div class="form-main w-100 gifts_charity_data" id="gifts-charity-data-1">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Name and Address of Charity</label>
				<input type="text" name="gifts_charity_data[charity_address][{{$i}}]" class="form-control required charity_address"
					 placeholder="Name of Charity" value="<?php echo Helper::validate_key_loop_value('charity_address',$finacial_affairs,$i);?>">
			</div>
			<div class="form-group">
					<label>Street Address</label>
					<input type="text" class="form-control required charity_street" name="gifts_charity_data[charity_street][{{$i}}]" placeholder="Street Address" value="<?php echo Helper::validate_key_loop_value('charity_street',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>City</label>
				<input type="text" class="form-control required charity_city" name="gifts_charity_data[charity_city][{{$i}}]" placeholder="City" value="<?php echo Helper::validate_key_loop_value('charity_city',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>State</label>
				<select class="form-control required charity_state" name="gifts_charity_data[charity_state][{{$i}}]">
				<option value="">Please Select State or Territory</option>
				<?php foreach($usa_states as $us_key=>$usa_vl){?>
				<option value="<?php echo $us_key;?>" {{($us_key == @$finacial_affairs['charity_state'][$i]) ? 'selected':''}} ><?php echo $usa_vl;?></option>
				<?php }?>
				</select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Zip</label>
				<input type="number" class="form-control required charity_zip" name="gifts_charity_data[charity_zip][{{$i}}]" placeholder="Zip" value="<?php echo Helper::validate_key_loop_value('charity_zip',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label> Description of Contribution</label>
				<textarea name="gifts_charity_data[charity_contribution][{{$i}}]" class="form-control required charity_contribution"
					cols="30" rows="4"
					placeholder=" Description of Contribution"><?php echo Helper::validate_key_loop_value('charity_contribution',$finacial_affairs,$i);?></textarea>
			</div>
		</div>

		<div class="col-md-6">
			<label> Contribution Date</label>
			<div class="form-group">
				<input type="text" placeholder="Date" class="form-control required charity_contribution_date" name="gifts_charity_data[charity_contribution_date][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('charity_contribution_date',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-6">
			<label>Value</label>
			<div class="form-group">
				<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">$</span>
				</div>
				<input type="text" class="form-control required charity_contribution_value" name="gifts_charity_data[charity_contribution_value][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('gifts_charity_data',$finacial_affairs,$i);?>">
				</div>
			</div>
		</div>
	</div>
</div>