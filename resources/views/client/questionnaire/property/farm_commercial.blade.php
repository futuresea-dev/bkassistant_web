<div class="col-md-12">
   <p class="section-part-title"><span> Farm and Commercial
      Fishing-Related Property
      </span>
   </p>
</div>
<?php 
    $final=[];
    if (!empty($farmcommercial)) {
        foreach ($farmcommercial as $farm) {
            $fr_type_data = json_decode($farm['type_data'], 1);
            if (!empty($fr_type_data)) {
                $farm['description'] = $fr_type_data['description'] ?? '';
                $farm['property_value'] = $fr_type_data['property_value'] ?? '';
                $farm['owned_by'] = $fr_type_data['owned_by'] ?? '';
            }
            unset($farm['type_data']);
            $final[$farm['type']] = $farm;
        }
    }

    $farm_animals = $final['farm_animals'] ?? [];
    $crops = $final['crops'] ?? [];
    $fishing_equipment = $final['fishing_equipment'] ?? [];
    $fishing_supplies = $final['fishing_supplies'] ?? [];
?>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <h5>Type of Property</h5>
         <label class="d-block">Farm animals <i>(livestock,
         poultry, farm-raised fish,
         etc.)</i></label>
         <input type="hidden" name="farm_animals[id]" value="<?php echo Helper::validate_key_value('id',$farm_animals);?>"><input type="hidden" name="farm_animals[type]" value="farm_animals">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$farm_animals,1);?> id="farm_animals_yes" name="farm_animals[type_value]"
               onchange="getFarmAnimalsItems('yes');" value="1" required>
            <label for="farm_animals_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$farm_animals,0);?> id="farm_animals_no" name="farm_animals[type_value]"
               onchange="getFarmAnimalsItems('no');" value="0" required>
            <label for="farm_animals_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$farm_animals);?> pt-3" id="farm_animals_data">
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="farm_animals[data][description]" class="form-control required"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_value('description',$farm_animals);?></textarea>
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
               <input type="text"  name="farm_animals[data][property_value]" class="form-control required"
                  placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$farm_animals);?>">
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
         Crops <i>(growing or
         harvested)</i>
         </label>
         <input type="hidden" name="crops[id]" value="<?php echo Helper::validate_key_value('id',$crops);?>"><input type="hidden" name="crops[type]" value="crops">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$crops,1);?> id="crops_yes" name="crops[type_value]" value="1" required
               onchange="getCropsItems('yes');">
            <label for="crops_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$crops,0);?> id="crops_no" name="crops[type_value]"
               onchange="getCropsItems('no');" value="0" required>
            <label for="crops_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$crops);?> pt-3" id="crops_data">
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="crops[data][description]" class="form-control required"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_value('description',$crops);?></textarea>
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
               <input type="text"  name="crops[data][property_value]" class="form-control required"
                  placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$crops);?>">
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
         Farm and commercial fishing
         equipment, implements,
         machinery, fixtures, and
         tools of trade<i>(list)</i>
         </label>
         <input type="hidden" name="fishing_equipment[id]" value="<?php echo Helper::validate_key_value('id',$fishing_equipment);?>"><input type="hidden" name="fishing_equipment[type]" value="fishing_equipment">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$fishing_equipment,1);?> id="commercial_fishing_equipment_yes" name="fishing_equipment[type_value]"
               onchange="getCommercialFishingEquipmentItems('yes');" value="1" required>
            <label for="commercial_fishing_equipment_yes"
               class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$fishing_equipment,0);?> id="commercial_fishing_equipment_no" name="fishing_equipment[type_value]"
               onchange="getCommercialFishingEquipmentItems('no');" value="0" required>
            <label for="commercial_fishing_equipment_no"
               class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$fishing_equipment);?> pt-3"
      id="commercial_fishing_equipment_data">
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="fishing_equipment[data][description]" class="form-control required"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_value('description',$fishing_equipment);?></textarea>
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
               <input type="text"  name="fishing_equipment[data][property_value]" class="form-control required"
                  placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$fishing_equipment);?>">
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
         Farm and commercial fishing
         supplies, chemicals, and
         feed <i>(list)</i>
         </label>
         <input type="hidden" name="fishing_supplies[id]" value="<?php echo Helper::validate_key_value('id',$fishing_supplies);?>"><input type="hidden" name="fishing_supplies[type]" value="fishing_supplies">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$fishing_supplies,1);?> id="commercial_fishing_supplies_yes" name="fishing_supplies[type_value]"
               onchange="getCommercialFishingItems('yes');" value="1" required>
            <label for="commercial_fishing_supplies_yes"
               class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$fishing_supplies,0);?> id="commercial_fishing_supplies_no" name="fishing_supplies[type_value]"
               onchange="getCommercialFishingItems('no');" value="0" required>
            <label for="commercial_fishing_supplies_no"
               class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$fishing_supplies);?> pt-3" id="commercial_fishing_supplies_data">
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <label>Description
               </label>
               <textarea name="fishing_supplies[data][description]" class="form-control required"
                  cols="30" rows="4"
                  placeholder="Description"><?php echo Helper::validate_key_value('description',$fishing_supplies);?></textarea>
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
               <input type="text"  name="fishing_supplies[data][property_value]" class="form-control required"
                  placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$fishing_supplies);?>">
				</div>
            </div>
         </div>
      </div>
   </div>
   <!-- Condition data End-->
</div>