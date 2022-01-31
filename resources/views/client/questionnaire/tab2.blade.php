<!-- Tab 2 -->
<?php if($step1){ ?>
<div class="scan-os cstm-id">
	<a class="btn shadow-2 mb-4 download-form" data-toggle="modal" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video" data-video="https://www.youtube.com/embed/0GfdvkfjaR8" data-video2="https://www.youtube.com/embed/HCXpV96hqi4">
		<img src="{{url('assets/images/video-play.jpg')}}" style="height: 36px;display: block;margin: 1px auto;">
		Click for Step by Step video 
	</a>
</div>
<?php }?>
<?php if($step3){ ?>
<div class="scan-os cstm-id">
	<a class="btn shadow-2 mb-4 download-form" data-toggle="modal" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video" data-video="https://www.youtube.com/embed/IhBINzPsKrI" data-video2="https://www.youtube.com/embed/8OMBFK2AYjo">
		<img src="{{url('assets/images/video-play.jpg')}}" style="height: 36px;display: block;margin: 1px auto;">
		Click for Step by Step video 
	</a>
</div>
<?php }?>
<div class="tab-pane fade <?php if(!empty($tab) && $tab=='tab2'){?>active show <?php }?>" id="section2" role="tabpanel"
	aria-labelledby="section2-tab">
	<h3 class="section-main-title text-c-blue f-w-800"> Property</h3>
	<!-- Property-Part-A -->
	<div id="property-part-a"<?php if(!$step1){?> class="hidestep" <?php }?>>
		<form name="client_property_step1" id="client_property_step1" action="{{route('client_property_step1')}}" method="post">
		@csrf
		<div class="row mt-3">
			<div class="col-md-12">
				<p class="section-part-title"><span> Residence, Building, Land,
						Other Real Estate
					</span>
				</p>
			</div>
			<?php 
			$i=0;
			$resident=[];
			if(!empty($propertyresident) && count($propertyresident)>0){
				foreach($propertyresident as $resident){?>
			@include("client.questionnaire.property.resident",$resident)
			<?php $i++;}}else{?>
			@include("client.questionnaire.property.resident",$resident)
			<?php }?>
			<!-- Condition data End -->
			<div class="col-md-12 mt-3">
                <button class="btn btn-primary shadow-2 rounded-0"
                    id="add-more-residence-form" onclick="addResidenceForm();return false;"><i
                        class="feather icon-plus mr-0"></i> Add
                    More </button>
                <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
                style="position: absolute;right: 20px;"
                onclick="remove_clone_box('residence_form')"></i><br/>
            </div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="next-part-btn text-right">
				<?php if(!empty($can_editable)){?>
				<?php if(!empty($propertyresident) && count($propertyresident)>0){?>					
					<button type="submit" class="btn btn-primary shadow-2 mb-4">Save <i class="feather icon-chevron-right mr-0"></i></button>
				<?php }else{?>
					<button type="submit" class="btn btn-primary shadow-2 mb-4">Save & Next Part <i class="feather icon-chevron-right mr-0"></i></button>
				<?php }?>	
				<?php }else{?>
						<button class="btn btn-primary shadow-2 mb-4" onclick="changeSectionBStep(this);return false;">Next Part <i class="feather icon-chevron-right mr-0"></i></button>
				<?php }?>				
				</div>
			</div>
		</div>
		</form>
	</div>
	<!-- Property-Part-A End -->

	<!-- Property Part-B  -->
	<div id="property-part-b" <?php if(!$step2){?> class="hidestep" <?php }?>>
		<form name="client_property_step2" id="client_property_step2" action="{{route('client_property_step2')}}" method="post">
		@csrf
		<div class="row mt-3">
			<div class="col-md-12">
				<p class="section-part-title">Cars, Vans, Trucks, Tractors, SUVs, Motorcycles, RVs, Watercraft, Aircraft, Motor Homes, ATVs, Other Vehicles</p>				
			</div>
			<?php 
			$i=0;
			$vehicle=[];
			if(!empty($propertyvehicle) && count($propertyvehicle)>0){
			foreach($propertyvehicle as $vehicle){?>
				@include("client.questionnaire.property.vehicle",$vehicle)
			<?php $i++;}}else{?>
				@include("client.questionnaire.property.vehicle",$vehicle)
			<?php }?>
			@php $i = $i + 1; @endphp
            <div class="col-md-12 mt-3">
                <button class="btn btn-primary shadow-2 rounded-0"
                    id="add-more-vehicle-form" onclick="addVehicleForm();return false;"><i
                        class="feather icon-plus mr-0"></i> Add
                    More </button>
                <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names text-danger cursor-pointer remove_clone"
                style="position: absolute;right: 20px;"
                onclick="remove_clone_box('vehicle-form')"></i><br/>

            </div>
        </div>
		<div class="row">
			<div class="col-md-12">
				<div class="next-part-btn text-right">
				<?php if(!empty($can_editable)){?>
				<?php if(!empty($propertyvehicle) && count($propertyvehicle)>0){?>
					<a href="{{route('property_information')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
					<button type="submit" class="btn btn-primary shadow-2 mb-4">Save <i
							class="feather icon-chevron-right mr-0"></i></button>
					<!--<button class="btn btn-primary shadow-2 mb-4" onclick="changeSectionBStep(this);return false;">Next <i class="feather icon-chevron-right mr-0"></i></button>-->
				<?php }else{?>
					<button type="submit" class="btn btn-primary shadow-2 mb-4">Save & Next Part <i
							class="feather icon-chevron-right mr-0"></i></button>
				<?php }?>
				<?php }else{?>
						<a href="{{route('property_information')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
						<button class="btn btn-primary shadow-2 mb-4" onclick="changeSectionBStep(this);return false;">Next Part <i class="feather icon-chevron-right mr-0"></i></button>
				<?php }?>
				</div>
			</div>
		</div>
		</form>
	</div>
	<!-- Property Part-B End -->

	<!-- Property Part-C  -->
	<div id="property-part-c" <?php if(!$step3){?> class="hidestep" <?php }?>>
		<form name="client_property_step3" id="client_property_step3" action="{{route('client_property_step3')}}" method="post">
		@csrf
		<div class="row mt-3">
		<?php 
			$i=0;
			// dd($propertyhousehold);
			if(!empty($propertyhousehold) && count($propertyhousehold)>0){
			//foreach($propertyvehicle as $resident){?>
			@include("client.questionnaire.property.personal_household",$propertyhousehold)
		<?php }else{?>
				@include("client.questionnaire.property.personal_household")
		<?php }?>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="next-part-btn text-right">
				<?php if(!empty($can_editable)){?>
					<?php if(!empty($propertyhousehold) && count($propertyhousehold)>0){?>	
					<a href="{{route('client_property_step1')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
					<button type="submit" class="btn btn-primary shadow-2 mb-4">Save <i
							class="feather icon-chevron-right mr-0"></i></button>
					<!--<button class="btn btn-primary shadow-2 mb-4" onclick="changeSectionBStep(this);return false;">Next <i class="feather icon-chevron-right mr-0"></i></button>-->
				<?php }else{?>
					<button type="submit" class="btn btn-primary shadow-2 mb-4">Save & Next Part <i
							class="feather icon-chevron-right mr-0"></i></button>
				<?php }?>
				<?php }else{?>
						<a href="{{route('client_property_step1')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
						<button class="btn btn-primary shadow-2 mb-4" onclick="changeSectionBStep(this);return false;">Next Part <i class="feather icon-chevron-right mr-0"></i></button>
				<?php }?>
				</div>
			</div>
		</div>
		</form>
	</div>
	<!-- Property Part-C End -->

	<!-- Property Part-D  -->
	<div id="property-part-d" <?php if(!$step4){?> class="hidestep" <?php }?>>
		<form name="client_property_step4" id="client_property_step4" action="{{route('client_property_step4')}}" method="post">
		@csrf
		<div class="row mt-3">
			<?php if(!empty($financialassets) && count($financialassets)>0){?>
			@include("client.questionnaire.property.financial_assets",$financialassets)
			<?php }else{?>
				@include("client.questionnaire.property.financial_assets")
			<?php }?>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="next-part-btn text-right">
				<?php if(!empty($can_editable)){?>
				<?php if(!empty($financialassets) && count($financialassets)>0){?>	
					<a href="{{route('client_property_step2')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
					<button type="submit" class="btn btn-primary shadow-2 mb-4">Save <i
							class="feather icon-chevron-right mr-0"></i></button>
					<!--<button class="btn btn-primary shadow-2 mb-4" onclick="changeSectionBStep(this);return false;">Next <i class="feather icon-chevron-right mr-0"></i></button>-->
				<?php }else{?>
					<button type="submit" class="btn btn-primary shadow-2 mb-4">Save & Next Part <i
							class="feather icon-chevron-right mr-0"></i></button>
				<?php }?>
				<?php }else{?>
						<a href="{{route('client_property_step2')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
						<button class="btn btn-primary shadow-2 mb-4" onclick="changeSectionBStep(this);return false;">Next Part <i class="feather icon-chevron-right mr-0"></i></button>
				<?php }?>
				</div>
			</div>
		</div>
		</form>
	</div>
	<!-- Property Part-D End -->

	<!-- Property Part-E  -->
	<div id="property-part-e" <?php if(!$step5){?> class="hidestep" <?php }?>>
		<form name="client_property_step5" id="client_property_step5" action="{{route('client_property_step5')}}" method="post">
		@csrf
		<div class="row mt-3">
		<?php if(!empty($businessassets) && count($businessassets)>0){?>
			@include("client.questionnaire.property.business_assets",$businessassets)
			<?php }else{?>
			@include("client.questionnaire.property.business_assets")
			<?php }?>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="next-part-btn text-right">
				<?php if(!empty($can_editable)){?>
				<?php if(!empty($businessassets) && count($businessassets)>0){?>	
					<a href="{{route('client_property_step3')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
					<button type="submit" class="btn btn-primary shadow-2 mb-4">Save <i
							class="feather icon-chevron-right mr-0"></i></button>
					<!--<button class="btn btn-primary shadow-2 mb-4" onclick="changeSectionBStep(this);return false;">Next <i class="feather icon-chevron-right mr-0"></i></button>-->
				<?php }else{?>
					<button type="submit" class="btn btn-primary shadow-2 mb-4">Save & Next Part <i
							class="feather icon-chevron-right mr-0"></i></button>
				<?php }?>
				<?php }else{?>
						<a href="{{route('client_property_step3')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
						<button class="btn btn-primary shadow-2 mb-4" onclick="changeSectionBStep(this);return false;">Next Part <i class="feather icon-chevron-right mr-0"></i></button>
				<?php }?>
				</div>
			</div>
		</div>
		</form>
	</div>
	<!-- Property Part-E End -->

	<!-- Property Part-F farm_commercial.blade.php -->
	<div id="property-part-f" <?php if(!$step6){?> class="hidestep" <?php }?>>
		<form name="client_property_step6" id="client_property_step6" action="{{route('client_property_step6')}}" method="post">
		@csrf
		<div class="row mt-3">
			<?php if(!empty($farmcommercial) && count($farmcommercial)>0){?>
			@include("client.questionnaire.property.farm_commercial",$farmcommercial)
			<?php }else{?>
			@include("client.questionnaire.property.farm_commercial")
			<?php }?>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="next-part-btn text-right">
				<?php if(!empty($can_editable)){?>
				<?php if(!empty($farmcommercial) && count($farmcommercial)>0){?>
					<a href="{{route('client_property_step4')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
					<button type="submit" class="btn btn-primary shadow-2 mb-4">Save <i
							class="feather icon-chevron-right mr-0"></i></button>
					<!--<button class="btn btn-primary shadow-2 mb-4" onclick="changeSectionBStep(this);return false;">Next <i class="feather icon-chevron-right mr-0"></i></button>-->
				<?php }else{?>
					<button type="submit" class="btn btn-primary shadow-2 mb-4">Save & Next Part <i
							class="feather icon-chevron-right mr-0"></i></button>
				<?php }?>
				<?php }else{?>
						<a href="{{route('client_property_step4')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
						<button class="btn btn-primary shadow-2 mb-4" onclick="changeSectionBStep(this);return false;">Next Part <i class="feather icon-chevron-right mr-0"></i></button>
				<?php }?>
				</div>
			</div>
		</div>
		</form>
	</div>
	<!-- Property Part-F End -->

	<!-- Property Part-G  -->
	<div id="property-part-g" <?php if(!$step7){?> class="hidestep" <?php }?>>
<?php 
$miscellan_final=[];
if(!empty($miscellaneous)){
	foreach($miscellaneous as $miscellan){
		$ml_type_data		=json_decode($miscellan['type_data'],1);	
		if(!empty($ml_type_data)){			
			$miscellan['description']=(!empty($ml_type_data['description']))?$ml_type_data['description']:"";
			$miscellan['property_value']=(!empty($ml_type_data['property_value']))?$ml_type_data['property_value']:"";
			$miscellan['owned_by']=(!empty($ml_type_data['owned_by']))?$ml_type_data['owned_by']:"";
		}		
		unset($miscellan['type_data']);
		$miscellan_final[$miscellan['type']]	=$miscellan;	
	}
}
// echo "<pre>";print_r($miscellan_final);echo"</pre>";
$miscellaneous=(!empty($miscellan_final['miscellaneous']))?$miscellan_final['miscellaneous']:[];
?>
		<form name="client_property_step7" id="client_property_step7" action="{{route('client_property_step7')}}" method="post">
		@csrf
		<div class="row mt-3">
			<div class="col-md-12">
				<p class="section-part-title">Miscellaneous</p>
			</div>
			<input type="hidden" name="miscellaneous[id]" value="<?php echo Helper::validate_key_value('id',$miscellaneous);?>">
			<input type="hidden" name="miscellaneous[type]" value="miscellaneous">
			<div class="form-main mt-3 w-100">
				<div class="col-md-12">
					<div class="form-group">
						<h5>Type of Property</h5>
						<label class="d-block">All other property of any kind
							not previously listed
						</label>
						<div class="d-inline radio-primary">
							<input type="radio" <?php echo Helper::validate_key_toggle('type_value',$miscellaneous,1);?>  id="previously_listed_yes"
								name="miscellaneous[type_value]"
								onchange="getPreviouslylistedItems('yes');" value="1" required>
							<label for="previously_listed_yes" class="cr">Yes</label>
						</div>
						<div class="d-inline radio-primary">
							<input type="radio" <?php echo Helper::validate_key_toggle('type_value',$miscellaneous,0);?> id="previously_listed_no"
								name="miscellaneous[type_value]"
								onchange="getPreviouslylistedItems('no');" value="0" required>
							<label for="previously_listed_no" class="cr">No</label>
						</div>
					</div>
				</div>
				<!-- Condition data -->
				<div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$miscellaneous);?> pt-3" id="previously_listed_data">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Description
								</label>
								<textarea name="miscellaneous[data][description]" class="form-control required"
									cols="30" rows="4"
									placeholder="Description"><?php echo Helper::validate_key_value('description',$miscellaneous);?></textarea>
							</div>
						</div>
						<div class="col-md-12 pt-3">
							<h5 class="mb-2"><strong> Value </strong>
								of Property</h5>
							<div class="form-group">
								<label>Property Value</label>
								<div class="input-group col-md-6">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">$</span>
									 </div>
								<input type="text" name="miscellaneous[data][property_value]" class="form-control required"
									placeholder="Property value" value="<?php echo Helper::validate_key_value('property_value',$miscellaneous);?>">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Condition data End-->
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="next-part-btn text-right">
				<?php if(!empty($can_editable)){?>
					<?php if(!empty($miscellaneous) && count($miscellaneous)>0){?>
					<a href="{{route('client_property_step5')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
					<button type="submit" class="btn btn-primary shadow-2 mb-4">Save <i
							class="feather icon-chevron-right mr-0"></i></button>					
				<?php }else{?>
					<button type="submit" class="btn btn-primary shadow-2 mb-4">Save & Next Part <i
							class="feather icon-chevron-right mr-0"></i></button>
				<?php }?>
				<?php }else{?>
						<a href="{{route('client_property_step5')}}" class="btn btn-primary shadow-2 mb-4">Back</a>
						<a href="{{route('client_debts_step2')}}" class="btn btn-primary shadow-2 mb-4">Submit</a>
				<?php }?>
				</div>
			</div>
		</div>
		</form>
	</div>
	<!-- Property Part-G End -->
</div>
<style>
input[type="radio"] {
    width: 18px;
    height: 18px;
    vertical-align: middle;
    margin: 0 4px;
}
<?php if($step1 || $step2){?>
#add-more-residence-form,#add-more-vehicle-form{display:none;}
<?php }?>
</style>
<script>
$(document).ready(function(){
	$('body').on('click','.removeThis',function(){
	  $(this).parents('.removeDiv').remove();
	})
	$('.currently_lived').each(function (i) {
		if($(this).is(':checked') && $(this).val()=='1'){			
			$("#add-more-residence-form").show();
		}
	});
	$('.own_any_property').each(function (i) {
		if($(this).is(':checked') && $(this).val()=='1'){			
			$("#add-more-vehicle-form").show();
		}
	});
	$(".currently_lived").on('click',function(){
		if($(this).is(':checked') && $(this).val()==1){
			$("#add-more-residence-form").show();
		}else{
			$("#add-more-residence-form").hide();
		}
	});
	$(".own_any_property").on('click',function(){
		if($(this).is(':checked') && $(this).val()==1){
			$("#add-more-vehicle-form").show();
		}else{
			$("#add-more-vehicle-form").hide();
		}
	});
	$("#client_property_step1").validate({
		errorPlacement: function (error, element) {			
			if($(element).parents(".form-group").next('label').hasClass('error')){
				$(element).parents(".form-group").next('label').remove();
				$(element).parents(".form-group").after($(error)[0].outerHTML); 
			}else{
				$(element).parents(".form-group").after($(error)[0].outerHTML); 
			}           
        },
		success: function(label,element) {
			label.parent().removeClass('error');
			$(element).parents(".form-group").next('label').remove(); 
		},
	});	
	$("#client_property_step2").validate({
		errorPlacement: function (error, element) {			
			if($(element).parents(".form-group").next('label').hasClass('error')){				
				$(element).parents(".form-group").next('label').remove();
				$(element).parents(".form-group").after($(error)[0].outerHTML); 
			}else{
				$(element).parents(".form-group").after($(error)[0].outerHTML); 
			}         
        },
		success: function(label,element) {
			label.parent().removeClass('error');
			$(element).parents(".form-group").next('label').remove(); 
		},
	});	
	$("#client_property_step3").validate({
		errorPlacement: function (error, element) {			
			if($(element).parents(".form-group").next('label').hasClass('error')){
				$(element).parents(".form-group").next('label').remove();
				$(element).parents(".form-group").after($(error)[0].outerHTML); 
			}else{
				$(element).parents(".form-group").after($(error)[0].outerHTML); 
			}         
        },
		success: function(label,element) {
			label.parent().removeClass('error');
			$(element).parents(".form-group").next('label').remove(); 
		},
	});	
	$("#client_property_step4").validate({
		errorPlacement: function (error, element) {			
			if($(element).parents(".form-group").next('label').hasClass('error')){
				$(element).parents(".form-group").next('label').remove();
				$(element).parents(".form-group").after($(error)[0].outerHTML); 
			}else{
				$(element).parents(".form-group").after($(error)[0].outerHTML); 
			}           
        },
		success: function(label,element) {
			label.parent().removeClass('error');
			$(element).parents(".form-group").next('label').remove(); 
		},
	});	
	$("#client_property_step5").validate({
		errorPlacement: function (error, element) {			
			if($(element).parents(".form-group").next('label').hasClass('error')){
				$(element).parents(".form-group").next('label').remove();
				$(element).parents(".form-group").after($(error)[0].outerHTML); 
			}else{
				$(element).parents(".form-group").after($(error)[0].outerHTML); 
			}          
        },
		success: function(label,element) {
			label.parent().removeClass('error');
			$(element).parents(".form-group").next('label').remove(); 
		},
	});	
	$("#client_property_step6").validate({
		errorPlacement: function (error, element) {			
			if($(element).parents(".form-group").next('label').hasClass('error')){
				$(element).parents(".form-group").next('label').remove();
				$(element).parents(".form-group").after($(error)[0].outerHTML); 
			}else{
				$(element).parents(".form-group").after($(error)[0].outerHTML); 
			}         
        },
		success: function(label,element) {
			label.parent().removeClass('error');
			$(element).parents(".form-group").next('label').remove(); 
		},
	});	
	$("#client_property_step7").validate({
		errorPlacement: function (error, element) {			
			if($(element).parents(".form-group").next('label').hasClass('error')){
				$(element).parents(".form-group").next('label').remove();
				$(element).parents(".form-group").after($(error)[0].outerHTML); 
			}else{
				$(element).parents(".form-group").after($(error)[0].outerHTML); 
			}          
        },
		success: function(label,element) {
			label.parent().removeClass('error');
			$(element).parents(".form-group").next('label').remove(); 
		},
	});
});
</script>
<!-- Tab 2 End-->