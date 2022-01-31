<div class="col-md-12 government_corporate_bonds_mutisec">
    <div class="row">
        <div class="col-12 col-md-7 form-group">
            <input type="text" name="government_corporate_bonds[data][description][<?=$i?>]" class="form-control required government_corporate_bonds_description" 
                placeholder="Issuer name" value="<?php echo Helper::validate_key_loop_value('description',$government_corporate_bonds,$i);?>">
        </div>
        <div class="col-12 col-md-5 form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">$</span>
                </div>
                <input type="text" name="government_corporate_bonds[data][property_value][<?php echo $i;?>]" class="form-control required government_corporate_bonds_property_value" 
                    placeholder="Property value" value="<?php echo Helper::validate_key_loop_value('property_value',$government_corporate_bonds,$i);?>">
            </div>
        </div>
    </div>
</div>