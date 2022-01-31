<div class="form-main w-100 list_financial_institutions_data" id="list-financial-institutions-data-1">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12 ">									
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="list_financial_institutions_data[name][{{$i}}]" class="form-control required name" placeholder="Name " value="{{@$finacial_affairs['name'][$i]}}">
							</div>							
						</div>
						<div class="col-md-12">
							<div class="form-group ">
								<label>
									Number Street
								</label>
								<input type="text" name="list_financial_institutions_data[street_number][{{$i}}]" class="form-control required street_number" placeholder="Number Street" value="{{@$finacial_affairs['street_number'][$i]}}">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>City</label>
								<input type="text" class="form-control required city" name="list_financial_institutions_data[city][{{$i}}]" placeholder="City" value="{{@$finacial_affairs['city'][$i]}}">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>State</label>
								<select class="form-control required state" name="list_financial_institutions_data[state][{{$i}}]">
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
								<input type="number" class="form-control required zip" name="list_financial_institutions_data[zip][{{$i}}]" placeholder="Zip Code" value="{{@$finacial_affairs['zip'][$i]}}">
							</div>
						</div>		
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label> Date Issued</label>
				<div class="form-group">
					<input type="text" placeholder="Date" class="form-control required date_issued" name="list_financial_institutions_data[date_issued][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('date_issued',$finacial_affairs,$i);?>">
				</div>
			</div>
		</div>
	</div>
</div>