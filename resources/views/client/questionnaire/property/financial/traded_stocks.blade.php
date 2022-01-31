<div class="col-md-12 traded_stocks_mutisec">
	<div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="traded_stocks[data][description][<?php echo $i;?>]" class="form-control required traded_stocks_description"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_loop_value('description',$traded_stocks,$i);?></textarea>
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
		   <input type="text" name="traded_stocks[data][property_value][<?php echo $i;?>]" class="form-control required traded_stocks_property_value"
			  placeholder="Property value" value="<?php echo Helper::validate_key_loop_value('property_value',$traded_stocks,$i);?>">
			</div>
		</div>
	 </div>
 </div>