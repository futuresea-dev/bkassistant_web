<div class="row other_name_frm">
	<div class="col-md-4">
		<div class="form-group">
			<label>First Name</label>
			<input type="text" class="form-control any_other_fname required" name="part1[any_other_name][name][<?php echo $k;?>]" placeholder="First Name" value="<?php echo Helper::validate_key_loop_value('name',$BasicInfo_AnyOtherName, $k);?>">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label>Middle Name</label>
			<input type="text" class="form-control any_other_mname required" name="part1[any_other_name][middle_name][<?php echo $k;?>]" placeholder="Middle Name" value="<?php echo Helper::validate_key_loop_value('middle_name',$BasicInfo_AnyOtherName, $k);?>">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label>Last Name</label>
			<input type="text" class="form-control any_other_lname required" name="part1[any_other_name][last_name][<?php echo $k;?>]" placeholder="Last Name" value="<?php echo Helper::validate_key_loop_value('last_name',$BasicInfo_AnyOtherName, $k);?>">
		</div>
	</div>
</div>