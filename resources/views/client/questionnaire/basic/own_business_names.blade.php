<div class="col-md-12 stepfour_clone">
                  
				  <div class="col-md-12">

					  <label>Business Name</label>

					  <div class="form-group">

					  <div class="d-inline radio-primary">


					  <input type="radio" class="own_business_selection" id="own_business-name-no" name="used_business_ein_data[own_business_selection][<?php echo $j;?>]"

					  <?php echo (Helper::validate_key_loop_value('own_business_selection',$used_business_data, $j) != 1) ? 'checked' : ''; ?> required <?php echo Helper::validate_key_toggle('own_business_selection',$used_business_data,$j);?> value="0">

					  <label for="own_business-name-no" class="cr">Debtor</label>

					  </div>

						  <div class="d-inline radio-primary">

							  <input type="radio" class="own_business_selection" value="1" id="own_business-name-yes" name="used_business_ein_data[own_business_selection][<?php echo $j;?>]"

							  <?php echo (Helper::validate_key_loop_value('own_business_selection',$used_business_data, $j) == 1) ? 'checked' : ''; ?>	required <?php echo Helper::validate_key_toggle('own_business_selection',$used_business_data,$j);?> value="1">

							  <label for="own_business-name-yes" class="cr">Spouse</label>

						  </div>

					  </div>

				  </div>

				  <div class="col-md-12">

					  <div class="form-group">

						  <input type="text" class="form-control own_business_name required" name="used_business_ein_data[own_business_name][<?php echo $j;?>]"

							  placeholder="Business Name"  value="<?php echo Helper::validate_key_loop_value('own_business_name',$used_business_data, $j);?>">

					  </div>

				  </div>

				  <div class="col-md-12">

					  <div class="form-group">

						  <label>EIN</label>

						  <input type="number" class="form-control own_ein_no required" name="used_business_ein_data[own_ein_no][<?php echo $j;?>]"

							  placeholder="EIN" value="<?php echo Helper::validate_key_loop_value('own_ein_no',$used_business_data, $j);?>">

					  </div>

				  </div>
				  </div>