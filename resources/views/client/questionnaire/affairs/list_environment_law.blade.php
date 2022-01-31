<div class="form-main w-100 list_environment_law_data" id="list-judicial-proceedings-data-1">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Name of Site</label>
						<input type="text" name="list_environment_law_data[name][{{$i}}]" class="form-control required name" placeholder="Name of Site" value="{{@$finacial_affairs['name'][$i]}}">
					</div>							
				</div>
				<div class="col-md-12">
					<div class="form-group ">
						<label>
							Number Street
						</label>
						<input type="text" name="list_environment_law_data[street_number][{{$i}}]" class="form-control required street_number" placeholder="Number Street" value="{{@$finacial_affairs['street_number'][$i]}}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>City</label>
						<input type="text" class="form-control required city" name="list_environment_law_data[city][{{$i}}]" placeholder="City" value="{{@$finacial_affairs['city'][$i]}}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>State</label>
						<select class="form-control required state" name="list_environment_law_data[state][{{$i}}]">
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
						<input type="number" class="form-control required zip" name="list_environment_law_data[zip][{{$i}}]" placeholder="Zip Code" value="{{@$finacial_affairs['zip'][$i]}}">
					</div>
				</div>		
			</div>
		</div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Name of Government Unit</label>
						<input type="text" name="list_environment_law_data[gov_name][{{$i}}]" class="form-control required" placeholder="Name of Government Unit" value="{{@$finacial_affairs['gov_name'][$i]}}">
					</div>							
				</div>
				<div class="col-md-12">
					<div class="form-group ">
						<label>
							Number Street
						</label>
						<input type="text" name="list_environment_law_data[gov_street_number][{{$i}}]" class="form-control required gov_street_number" placeholder="Number Street" value="{{@$finacial_affairs['gov_street_number'][$i]}}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>City</label>
						<input type="text" class="form-control required gov_city" name="list_environment_law_data[gov_city][{{$i}}]" placeholder="City" value="{{@$finacial_affairs['gov_city'][$i]}}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>State</label>
						<select class="form-control required gov_state" name="list_environment_law_data[gov_state][{{$i}}]">
						<option value="">State</option>
						<?php foreach($usa_states as $us_key=>$usa_vl){?>
						<option value="<?php echo $us_key;?>" <?php echo Helper::validate_key_option_loop('gov_state',$finacial_affairs,$i,$us_key);?>><?php echo $usa_vl;?></option>
						<?php }?>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Zip Code</label>
						<input type="number" class="form-control required gov_zip" name="list_environment_law_data[gov_zip][{{$i}}]" placeholder="Zip Code" value="{{@$finacial_affairs['gov_zip'][$i]}}">
					</div>
				</div>		
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label> Date of Notice</label>
				<div class="form-group">
					<input type="text" placeholder="Date" class="form-control required notice_date" name="list_environment_law_data[notice_date][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('notice_date',$finacial_affairs,$i);?>">
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label> Environmental Law, If You Know It</label>
				<textarea name="list_environment_law_data[environment_law_know][{{$i}}]" class="form-control required environment_law_know"
					cols="30" rows="4"
					placeholder="Environmental Law, If You Know It"><?php echo Helper::validate_key_loop_value('environment_law_know',$finacial_affairs,$i);?></textarea>
			</div>
		</div>
	</div>
</div>