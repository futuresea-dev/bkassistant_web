<div class="col-md-12">
   <p class="section-part-title"><span>Business-Related Assets
      </span>
   </p>
</div>
<?php 
$final=[];
if(!empty($businessassets)){
	foreach($businessassets as $business){
		$b_type_data		=json_decode($business['type_data'],1);	
		if(!empty($b_type_data)){			
			$business['description']=(!empty($b_type_data['description']))?$b_type_data['description']:"";
			$business['property_value']=(!empty($b_type_data['property_value']))?$b_type_data['property_value']:"";
			$business['owned_by']=(!empty($b_type_data['owned_by']))?$b_type_data['owned_by']:"";
		}		
		unset($business['type_data']);
		$final[$business['type']]	=$business;	
	}
}
// echo "<pre>";print_r($final);echo"</pre>";
$commissions=(!empty($final['commissions']))?$final['commissions']:[];
// echo "<pre>";print_r($commissions);echo"</pre>";
$office_equipment=(!empty($final['office_equipment']))?$final['office_equipment']:[];

$machinery_fixtures=(!empty($final['machinery_fixtures']))?$final['machinery_fixtures']:[];

$business_inventory=(!empty($final['business_inventory']))?$final['business_inventory']:[];

$interests=(!empty($final['interests']))?$final['interests']:[];

$customer_mailing=(!empty($final['customer_mailing']))?$final['customer_mailing']:[];

$other_business=(!empty($final['other_business']))?$final['other_business']:[];
?>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <h5>Type of Property</h5>
         <label class="d-block">Accounts receivable or
         commissions earned <i>(list)</i></label>
         <input type="hidden" name="commissions[id]" value="<?php echo Helper::validate_key_value('id',$commissions);?>"><input type="hidden" name="commissions[type]" value="commissions">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$commissions,1);?>  id="account_receivable_yes"
               name="commissions[type_value]"
               onchange="getAccountsReceivableItems('yes');" value="1" required>
            <label for="account_receivable_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$commissions,0);?>  id="account_receivable_no"
               name="commissions[type_value]"
               onchange="getAccountsReceivableItems('no');" value="0" required>
            <label for="account_receivable_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$commissions);?> pt-3" id="account_receivable_data">
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="commissions[data][description]" class="form-control required"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_value('description',$commissions);?></textarea>
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
               <input type="text"  name="commissions[data][property_value]" class="form-control required"
                  placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$commissions);?>">
				</div>
            </div>
         </div>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">
         Office equipment,
         furnishings, and supplies <i>(list)</i>
         </label>
         <input type="hidden" name="office_equipment[id]" value="<?php echo Helper::validate_key_value('id',$office_equipment);?>"><input type="hidden" name="office_equipment[type]" value="office_equipment">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$office_equipment,1);?> id="office_equipment_yes"
               name="office_equipment[type_value]" required
               onchange="getOfficeEquipmentItems('yes');" value="1">
            <label for="office_equipment_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$office_equipment,0);?> id="office_equipment_no"
               name="office_equipment[type_value]" required
               onchange="getOfficeEquipmentItems('no');" value="0">
            <label for="office_equipment_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$office_equipment);?> pt-3" id="office_equipment_data">
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="office_equipment[data][description]" class="form-control required"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_value('description',$office_equipment);?></textarea>
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
               <input type="text"  name="office_equipment[data][property_value]" class="form-control required"
                  placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$office_equipment);?>">
				</div>
            </div>
         </div>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">
         Machinery, fixtures,
         equipment, business
         supplies, and tools of your
         trade <i>(list)</i>
         </label>
         <input type="hidden" name="machinery_fixtures[id]" value="<?php echo Helper::validate_key_value('id',$machinery_fixtures);?>"><input type="hidden" name="machinery_fixtures[type]" value="machinery_fixtures">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$machinery_fixtures,1);?> id="machinery_trade_yes"
               name="machinery_fixtures[type_value]" required
               onchange="getMachineryTradeItems('yes');" value="1">
            <label for="machinery_trade_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$machinery_fixtures,0);?> id="machinery_trade_no"
               name="machinery_fixtures[type_value]" required
               onchange="getMachineryTradeItems('no');" value="0">
            <label for="machinery_trade_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$machinery_fixtures);?> pt-3" id="machinery_trade_data">
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="machinery_fixtures[data][description]" class="form-control required"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_value('description',$machinery_fixtures);?></textarea>
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
               <input type="text"  name="machinery_fixtures[data][property_value]" class="form-control required"
                  placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$machinery_fixtures);?>">
            </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">
         Business inventory<i>(list)</i>
         </label>
         <input type="hidden" name="business_inventory[id]" value="<?php echo Helper::validate_key_value('id',$business_inventory);?>"><input type="hidden" name="business_inventory[type]" value="business_inventory">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$business_inventory,1);?> id="business_inventory_yes"
               name="business_inventory[type_value]" required
               onchange="getBusinessInventoryItems('yes');" value="1">
            <label for="business_inventory_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$business_inventory,0);?> id="business_inventory_no"
               name="business_inventory[type_value]" required
               onchange="getBusinessInventoryItems('no');" value="0">
            <label for="business_inventory_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$business_inventory);?> pt-3" id="business_inventory_data">
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="business_inventory[data][description]" class="form-control required"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_value('description',$business_inventory);?></textarea>
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
               <input type="text"  name="business_inventory[data][property_value]" class="form-control required"
                  placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$business_inventory);?>">
				</div>
            </div>
         </div>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">
         Interests in partnerships or
         joint ventures <i> (name and
         type of business, % interest)</i>
         </label>
         <input type="hidden" name="interests[id]" value="<?php echo Helper::validate_key_value('id',$interests);?>"><input type="hidden" name="interests[type]" value="interests">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$interests,1);?> id="interest_partnerships_yes"
               name="interests[type_value]" required
               onchange="getInterestsPartnershipsItems('yes');" value="1">
            <label for="interest_partnerships_yes"
               class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$interests,0);?> id="interest_partnerships_no"
               name="interests[type_value]" required
               onchange="getInterestsPartnershipsItems('no');" value="0">
            <label for="interest_partnerships_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$interests);?> pt-3" id="interest_partnerships_data">
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="interests[data][description]" class="form-control required"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_value('description',$interests);?></textarea>
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
               <input type="text"  name="interests[data][property_value]" class="form-control required"
                  placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$interests);?>">
				</div>
            </div>
         </div>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">
         Customer and mailing lists
         </label>
         <input type="hidden" name="customer_mailing[id]" value="<?php echo Helper::validate_key_value('id',$customer_mailing);?>"><input type="hidden" name="customer_mailing[type]" value="customer_mailing">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$customer_mailing,1);?> id="customer_mailing_lists_yes"
               name="customer_mailing[type_value]" required
               onchange="getCustomerMailingItems('yes');" value="1">
            <label for="customer_mailing_lists_yes"
               class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$customer_mailing,0);?> id="customer_mailing_lists_no"
               name="customer_mailing[type_value]" required
               onchange="getCustomerMailingItems('no');" value="0">
            <label for="customer_mailing_lists_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$customer_mailing);?> pt-3" id="customer_mailing_lists_data">
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="customer_mailing[data][description]" class="form-control required"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_value('description',$customer_mailing);?></textarea>
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
               <input type="text"  name="customer_mailing[data][property_value]" class="form-control required"
                  placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$customer_mailing);?>">
				</div>
            </div>
         </div>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">
         Other business-related
         property not already listed
         </label>
         <input type="hidden" name="other_business[id]" value="<?php echo Helper::validate_key_value('id',$other_business);?>"><input type="hidden" name="other_business[type]" value="other_business">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$other_business,1);?> id="other_business_yes"
               name="other_business[type_value]" required
               onchange="getOtherBusimessItems('yes');" value="1">
            <label for="other_business_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$other_business,0);?> id="other_business_no"
               name="other_business[type_value]" required
               onchange="getOtherBusimessItems('no');" value="0">
            <label for="other_business_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$other_business);?> pt-3" id="other_business_data">
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="other_business[data][description]" class="form-control required"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_value('description',$other_business);?></textarea>
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
               <input type="text"  name="other_business[data][property_value]" class="form-control required"
                  placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$other_business);?>">
				</div>
            </div>
         </div>
      </div>
   </div>
   <!-- Condition data End-->
</div>