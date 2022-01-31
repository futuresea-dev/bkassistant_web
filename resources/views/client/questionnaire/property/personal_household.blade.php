<div class="col-md-12">
   <p class="section-part-title"><span> Personal and Household
      Items
      </span>
   </p>
</div>
<?php 
$final=[];
if(!empty($propertyhousehold)){
	foreach($propertyhousehold as $household){
		$type_data		=json_decode($household['type_data'],1);		
		if(!empty($type_data)){			
			$household['description']=(!empty($type_data[0]))?$type_data[0]:"";
			$household['property_value']=(!empty($type_data[1]))?$type_data[1]:"";
			$household['owned_by']=(!empty($type_data['owned_by']))?$type_data['owned_by']:"";
		}		
		unset($household['type_data']);
		$final[$household['type']]	=$household;	
	}
}
// echo "<pre>";print_r($final);echo"</pre>";
$household_goods=(!empty($final['household_goods_furnishings']))?$final['household_goods_furnishings']:[];

$electronics=(!empty($final['electronics']))?$final['electronics']:[];

$collectibles=(!empty($final['collectibles']))?$final['collectibles']:[];

$sports=(!empty($final['sports']))?$final['sports']:[];

$firearms=(!empty($final['firearms']))?$final['firearms']:[];

$clothing=(!empty($final['clothing']))?$final['clothing']:[];

$jewelry=(!empty($final['jewelry']))?$final['jewelry']:[];

$pets=(!empty($final['pets']))?$final['pets']:[];

$health_aids=(!empty($final['health_aids']))?$final['health_aids']:[];
?>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <h5>Type of Property</h5>
         <label class="d-block">Household Goods and
         Furnishings <i>(Major
         appliances, furniture, linens,
         china, kitchenware, etc.)</i></label>
         <input type="hidden" name="household_goods_furnishings[type]" value="household_goods_furnishings">
		 <input type="hidden" name="household_goods_furnishings[id]" value="<?php echo Helper::validate_key_value('id',$household_goods);?>">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$household_goods,1);?> required id="household_items_yes"
               name="household_goods_furnishings[type_value]"
               onchange="getHouseHoldItems('yes');" value="1">
            <label for="household_items_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$household_goods,0);?> required id="household_items_no"
               name="household_goods_furnishings[type_value]"
               onchange="getHouseHoldItems('no');" value="0">
            <label for="household_items_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$household_goods);?> pt-3" id="household_items_data">
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="household_goods_furnishings[data][]" class="form-control required"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_value('description',$household_goods);?></textarea>
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
					<input type="text" name="household_goods_furnishings[data][]" class="form-control required"
					  placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$household_goods);?>">
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
         <label class="d-block">Electronics <i>(TVs, stereos,
         computers, game consoles,
         tablets, iPods, mobile
         phones, etc.)</i></label>
         <input type="hidden" name="electronics[type]" value="electronics">
		  <input type="hidden" name="electronics[id]" value="<?php echo Helper::validate_key_value('id',$electronics);?>">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$electronics,1);?> required id="electronics_items_yes"
               name="electronics[type_value]"
               onchange="getHouseElectronicsItems('yes');" value="1">
            <label for="electronics_items_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$electronics,0);?> required id="electronics_items_no"
               name="electronics[type_value]"
               onchange="getHouseElectronicsItems('no');" value="0">
            <label for="electronics_items_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$electronics);?> pt-3" id="electronics_items_data">
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="electronics[data][]" class="form-control required"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_value('description',$electronics);?></textarea>
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
               <input type="text" name="electronics[data][]" class="form-control required"
                  placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$electronics);?>">
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
         <label class="d-block"><i>Collectibles of value (art,
         paintings, prints,
         memorabilia, antiques,
         stamp/coin/card collections,
         etc.)</i></label>
         <input type="hidden" name="collectibles[type]" value="collectibles">
		 <input type="hidden" name="collectibles[id]" value="<?php echo Helper::validate_key_value('id',$collectibles);?>">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$collectibles,1);?> required id="collectibles_items_yes"
               name="collectibles[type_value]" value="1"
               onchange="getHouseCollectiblesItems('yes');">
            <label for="collectibles_items_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$collectibles,0);?> required id="collectibles_items_no"
               name="collectibles[type_value]" value="0"
               onchange="getHouseCollectiblesItems('no');">
            <label for="collectibles_items_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$collectibles);?> pt-3" id="Collectibles_items_data">
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="collectibles[data][]" class="form-control required"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_value('description',$collectibles);?></textarea>
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
               <input type="text" name="collectibles[data][]" class="form-control required"
                  placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$collectibles);?>">
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
         <label class="d-block">Sports, photo, exercise, and
         other hobby equipment;
         musical instruments</label>
         <input type="hidden" name="sports[type]" value="sports">
		 <input type="hidden" name="sports[id]" value="<?php echo Helper::validate_key_value('id',$sports);?>">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$sports,1);?> required id="sports_items_yes"
               name="sports[type_value]" value="1"
               onchange="getHouseSportsItems('yes');">
            <label for="sports_items_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$sports,0);?> required id="sports_items_no"
               name="sports[type_value]" value="0"
               onchange="getHouseSportsItems('no');">
            <label for="sports_items_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$sports);?> pt-3" id="sports_items_data">
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="sports[data][]" class="form-control required"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_value('description',$sports);?></textarea>
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
               <input type="text" name="sports[data][]" class="form-control required"
                  placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$sports);?>">
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
         <label class="d-block">Firearms, ammunition, and
         related equipment</label>
         <input type="hidden" name="firearms[type]" value="firearms">
		 <input type="hidden" name="firearms[id]" value="<?php echo Helper::validate_key_value('id',$firearms);?>">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$firearms,1);?> required id="firearms_items_yes"
               name="firearms[type_value]" value="1"
               onchange="getHouseFirearmsItems('yes');">
            <label for="firearms_items_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$firearms,0);?> required id="firearms_items_no"
               name="firearms[type_value]" value="0"
               onchange="getHouseFirearmsItems('no');">
            <label for="firearms_items_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$firearms);?> pt-3" id="firearms_items_data">
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="firearms[data][]" class="form-control required"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_value('description',$firearms);?></textarea>
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
               <input type="text" name="firearms[data][]" class="form-control required"
                  placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$firearms);?>">
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
         <label class="d-block">Clothing <i>(everyday clothes,
         furs, leather coats, designer
         wear, shoes, accessories)</i>
         </label>
         <input type="hidden" name="clothing[type]" value="clothing">
		 <input type="hidden" name="clothing[id]" value="<?php echo Helper::validate_key_value('id',$clothing);?>">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$clothing,1);?> required id="clothing_items_yes"
               name="clothing[type_value]" value="1"
               onchange="getHouseClothingItems('yes');">
            <label for="clothing_items_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$clothing,0);?> required id="clothing_items_no"
               name="clothing[type_value]" value="0"
               onchange="getHouseClothingItems('no');">
            <label for="clothing_items_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$clothing);?> pt-3" id="clothing_items_data">
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="clothing[data][]" class="form-control required"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_value('description',$clothing);?></textarea>
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
               <input type="text" name="clothing[data][]" class="form-control required"
                  placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$clothing);?>">
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
         <label class="d-block">Jewelry
         </label>
         <input type="hidden" name="jewelry[type]" value="jewelry">
		  <input type="hidden" name="jewelry[id]" value="<?php echo Helper::validate_key_value('id',$jewelry);?>">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$jewelry,1);?> required id="jewelry_items_yes"
               name="jewelry[type_value]" value="1"
               onchange="getHouseJewelryItems('yes');">
            <label for="jewelry_items_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$jewelry,0);?> required id="jewelry_items_no"
               name="jewelry[type_value]" value="0"
               onchange="getHouseJewelryItems('no');">
            <label for="jewelry_items_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$jewelry);?> pt-3" id="jewelry_items_data">
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="jewelry[data][]" class="form-control required"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_value('description',$jewelry);?></textarea>
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
               <input type="text" name="jewelry[data][]" class="form-control required"
                  placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$jewelry);?>">
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
         <label class="d-block">Pets/non-farm animals
         </label>
         <input type="hidden" name="pets[type]" value="pets">
		 <input type="hidden" name="pets[id]" value="<?php echo Helper::validate_key_value('id',$pets);?>">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$pets,1);?> required id="non_farm_animals_items_yes"
               name="pets[type_value]" value="1"
               onchange="getHouseNonFarmAnimalsItems('yes');">
            <label for="non_farm_animals_items_yes"
               class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$pets,0);?> required id="non_farm_animals_items_no"
               name="pets[type_value]" value="0"
               onchange="getHouseNonFarmAnimalsItems('no');">
            <label for="non_farm_animals_items_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$pets);?> pt-3" id="non_farm_animals_items_data">
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="pets[data][]" class="form-control required"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_value('description',$pets);?></textarea>
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
               <input type="text" name="pets[data][]" class="form-control required"
                  placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$pets);?>">
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
         <label class="d-block">All other personal and household items not already listed  <span class="text-c-blue">(including health aids)</span>
         </label>
         <input type="hidden" name="health_aids[type]" value="health_aids">
		 <input type="hidden" name="health_aids[id]" value="<?php echo Helper::validate_key_value('id',$health_aids);?>">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$health_aids,1);?> required id="health_aids_items_yes"
               name="health_aids[type_value]" value="1"
               onchange="getHouseHEathAidItems('yes');">
            <label for="health_aids_items_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$health_aids,0);?> required id="health_aids_items_no"
               name="health_aids[type_value]" value="0"
               onchange="getHouseHEathAidItems('no');">
            <label for="health_aids_items_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$health_aids);?> pt-3" id="health_aids_items_data">
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="health_aids[data][]" class="form-control required"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_value('description',$health_aids);?></textarea>
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
               <input type="text" name="health_aids[data][]" class="form-control required"
                  placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$health_aids);?>">
				</div>
            </div>
         </div>
        
      </div>
   </div>
   <!-- Condition data End-->
</div>