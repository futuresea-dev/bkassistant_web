<div class="col-md-12 injury_claims_mutisec">
	<div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="injury_claims[data][description][<?php echo $i;?>]" class="form-control required injury_claims_description"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_loop_value('description',$injury_claims,$i);?></textarea>
            </div>
         </div>
	 <div class="col-md-12 pt-3">
		<h5 class="mb-2"><strong> Value </strong>
		   of Property
		</h5>
		<div class="form-group">
		   <label>Property Value</label>
		   <div class="input-group col-md-6">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">$</span>
				 </div>
		   <input type="text" name="injury_claims[data][property_value][<?php echo $i;?>]" class="form-control required injury_claims_property_value"
			  placeholder="Property value" value="<?php echo Helper::validate_key_loop_value('property_value',$injury_claims,$i);?>">
			</div>
		</div>
	 </div>
 </div>