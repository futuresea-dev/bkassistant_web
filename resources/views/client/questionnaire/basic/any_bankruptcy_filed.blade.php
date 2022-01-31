
				<div class="row any_bankruptcy_filed_before_data">


				<div class="col-md-6">

					<div class="form-group">
						<label>Case Name</label>
						
						<input placeholder="Case Name" type="text" class="form-control case_name required " name="part3[any_bankruptcy_filed_before_data][case_name][<?php echo $j; ?>]" placeholder="" value="<?php echo Helper::validate_key_loop_value('case_name',$BasicInfo_PartD,$j);?>" aria-invalid="true">
					</div>

				</div>

				<div class="col-md-6">

					<div class="form-group">
						<label>Date Filed</label>
						<input placeholder="Date Filed" type="text" class="form-control data_field required " name="part3[any_bankruptcy_filed_before_data][data_field][<?php echo $j; ?>]" value="<?php echo Helper::validate_key_loop_value('data_field',$BasicInfo_PartD,$j);?>" aria-invalid="true">
					</div>

				</div>

				<div class="col-md-6">

					<div class="form-group">
						<label>Case Number</label>
						<input placeholder="Case Number" type="text" class="form-control case_numbers required " name="part3[any_bankruptcy_filed_before_data][case_numbers][<?php echo $j; ?>]" value="<?php echo Helper::validate_key_loop_value('case_numbers',$BasicInfo_PartD,$j);?>" aria-invalid="true">
					</div>

				</div>


				<div class="col-md-6">

					<div class="form-group">
						<label>Date Discharged</label>
						<input placeholder="Date Discharged" type="text" class="form-control date_discharged required " name="part3[any_bankruptcy_filed_before_data][date_discharged][<?php echo $j; ?>]" value="<?php echo Helper::validate_key_loop_value('date_discharged',$BasicInfo_PartD,$j);?>" aria-invalid="true">
					</div>

				</div>

				<div class="col-md-6">

					<div class="form-group">
						<label>District if(known):</label>
						<input placeholder="District if(known):" type="text" class="form-control district_if_known required " name="part3[any_bankruptcy_filed_before_data][district_if_known][<?php echo $j; ?>]" value="<?php echo Helper::validate_key_loop_value('district_if_known',$BasicInfo_PartD,$j);?>" aria-invalid="true">
					</div>

				</div>
			</div>
			