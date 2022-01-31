<div class="form-main w-100 all_property_transfer_10_year_data" id="list-all-property_transfer-data-1">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Name of Trust</label>
				<div class="form-group">
					<input type="text" class="form-control required trust_name" placeholder="Name of Trust" name="all_property_transfer_10_year_data[trust_name][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('trust_name',$finacial_affairs,$i);?>">
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label> Description and Value of Property
					Transferred</label>
				<textarea name="all_property_transfer_10_year_data[10year_property_transfer][{{$i}}]" class="form-control required 10year_property_transfer"
					cols="30" rows="4"
					placeholder="Description and Value of Property Transferred"><?php echo Helper::validate_key_loop_value('10year_property_transfer',$finacial_affairs,$i);?></textarea>
			</div>
		</div>
		<div class="col-md-6">
			<label> Date of Transfer</label>
			<div class="form-group">
				<input type="text" placeholder="Date of Transfer" class="form-control required 10year_property_transfer_date" name="all_property_transfer_10_year_data[10year_property_transfer_date][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('10year_property_transfer_date',$finacial_affairs,$i);?>">
			</div>
		</div>

	</div>
</div>