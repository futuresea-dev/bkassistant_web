<div class="row spouse_other_name_frm">
	<div class="col-md-4">
		<div class="form-group">
			<label>First Name</label>
			<input type="text" class="form-control spouse_other_name required" name="part2[spouse_other_name][<?php echo $j;?>]" placeholder="First Name" value="<?php echo Helper::validate_key_loop_value('spouse_other_name',$BasicInfoPartB, $j);?>">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label>Middle Name</label>
			<input type="text" class="form-control spouse_other_middle_name required" name="part2[spouse_other_middle_name][<?php echo $j;?>]" placeholder="Middle Name" value="<?php echo Helper::validate_key_loop_value('spouse_other_middle_name',$BasicInfoPartB, $j);?>">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label>Last Name</label>
			<input type="text" class="form-control spouse_other_last_name required" name="part2[spouse_other_last_name][<?php echo $j;?>]" placeholder="Last Name" value="<?php echo Helper::validate_key_loop_value('spouse_other_name',$BasicInfoPartB, $j);?>">
		</div>
	</div>
</div>