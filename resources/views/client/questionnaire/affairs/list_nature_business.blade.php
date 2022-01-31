<div class="form-main w-100 list_nature_business_data" id="list-nature-business-data-1">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-12 ">									
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="list_nature_business_data[name][{{$i}}]" class="form-control required name" placeholder="Name " value="{{@$finacial_affairs['name'][$i]}}">
						</div>							
					</div>
					<div class="col-md-12">
						<div class="form-group ">
							<label>
								Number Street
							</label>
							<input type="text" name="list_nature_business_data[street_number][{{$i}}]" class="form-control required street_number" placeholder="Number Street" value="{{@$finacial_affairs['street_number'][$i]}}">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>City</label>
							<input type="text" class="form-control required city" name="list_nature_business_data[city][{{$i}}]" placeholder="City" value="{{@$finacial_affairs['city'][$i]}}">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>State</label>
							<select class="form-control required state" name="list_nature_business_data[state][{{$i}}]">
							<option value="">State</option>
							<?php foreach($usa_states as $us_key=>$usa_vl){?>
							<option value="<?php echo $us_key;?>" <?php echo Helper::validate_key_option_loop('state',$finacial_affairs,$i,$us_key);?>><?php echo $usa_vl;?></option>
							<?php }?>
							</select>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>Zip Code</label>
							<input type="number" class="form-control required zip" name="list_nature_business_data[zip][{{$i}}]" placeholder="Zip Code" value="{{@$finacial_affairs['zip'][$i]}}">
						</div>
					</div>		
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label> Nature of Business</label>
					<textarea name="list_nature_business_data[business_nature][{{$i}}]" class="form-control required business_nature"
						cols="30" rows="4"
						placeholder=" Nature of Business"><?php echo Helper::validate_key_loop_value('business_nature',$finacial_affairs,$i);?></textarea>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label> Name of Accountant or Bookkeeper</label>
					<textarea name="list_nature_business_data[business_accountant][{{$i}}]" class="form-control required business_accountant"
						cols="30" rows="4"
						placeholder="Name of Accountant or Bookkeeper"><?php echo Helper::validate_key_loop_value('business_accountant',$finacial_affairs,$i);?></textarea>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label> Employer Identification
						Number (EIIN)</label>
					<div class="form-group">
						<input type="text" class="form-control required eiin" name="list_nature_business_data[eiin][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('eiin',$finacial_affairs,$i);?>">
					</div>

				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label> Beginning thru End Dates of Operation</label>
					<div class="form-group">
						<input type="text" class="form-control required operation_date" name="list_nature_business_data[operation_date][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('operation_date',$finacial_affairs,$i);?>">
					</div>

				</div>
			</div>
		</div>
	</div>
</div>