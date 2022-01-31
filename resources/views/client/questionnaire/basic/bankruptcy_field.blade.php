<div class="row bankruptcy_clone">

	<div class="col-md-6">
		<div class="form-group">
			<label>In which district of which state was the case filed?</label>
			<input type="text" class="form-control case_filed_state required" name="part3[case_filed_state][<?php echo $j;?>]"
				placeholder="District of which state was the case filed" value="<?php echo Helper::validate_key_loop_value('case_filed_state',$BasicInfo_PartC, $j);?>">
		</div>
	</div>



	<div class="col-md-6">



		<div class="form-group">



			<label>Case Number</label>



			<input type="text" class="form-control case_number required" name="part3[case_number][<?php echo $j;?>]" placeholder="Case Number" value="<?php echo Helper::validate_key_loop_value('case_number',$BasicInfo_PartC, $j);?>">



		</div>



	</div>



	<div class="col-md-6">



		<div class="form-group">



			<label>Date Filed</label>



			<input type="text" class="form-control date_filed required"  name="part3[date_filed][<?php echo $j;?>]" placeholder="Date Filed" value="<?php echo Helper::validate_key_loop_value('date_filed',$BasicInfo_PartC, $j);?>">



		</div>



	</div>



	<div class="col-md-6">



		<div class="form-group">



			<label>Date Discharge</label>



			<input type="text" class="form-control date_discharge required" name="part3[date_discharge][<?php echo $j;?>]" placeholder="Date Discharge" value="<?php echo Helper::validate_key_loop_value('date_discharge',$BasicInfo_PartC, $j);?>">



		</div>



	</div>



	<div class="col-md-12">



		<div class="form-group">



			<label>Was the case dismissed (you did not complete the bankruptcy)?</label>

			<div class="d-inline radio-primary">



				<input type="radio" class="is_case_dismissed_option" id="is_case_dismissed_no" name="part3[is_case_dismissed][<?php echo $j;?>]" required <?php echo Helper::validate_key_toggle('is_case_dismissed',$BasicInfo_PartC,Helper::validate_key_loop_value('is_case_dismissed',$BasicInfo_PartC, $j));?> <?php echo (empty(Helper::validate_key_loop_value('is_case_dismissed',$BasicInfo_PartC, $j))) ? 'checked' : ''; ?> onchange="common_toggle_fn('no','filed_case_dismissed_data_<?php echo $j;?>');" value="0">



				<label for="is_case_dismissed_no" class="cr">No</label>



			</div>



			<div class="d-inline radio-primary">



				<input type="radio" class="is_case_dismissed_option" id="is_case_dismissed_yes" name="part3[is_case_dismissed][<?php echo $j;?>]" required <?php echo Helper::validate_key_toggle('is_case_dismissed',$BasicInfo_PartC,Helper::validate_key_loop_value('is_case_dismissed',$BasicInfo_PartC, $j));?> onchange="common_toggle_fn('yes','filed_case_dismissed_data_<?php echo $j;?>');" <?php echo (Helper::validate_key_loop_value('is_case_dismissed',$BasicInfo_PartC, $j) == 1) ? 'checked' : ''; ?> value="1">



				<label for="is_case_dismissed_yes" class="cr">Yes</label>



			</div>



		</div>



	</div>
	<!-- <div class="col-md-12 text-right">
		<div class="fm-opt" >
            <button type="button" class='btn remove_bankruptcy_clone' style="display:none;">
			<i class="fa fa-trash m-0"></i></button>
        </div>
		
	</div> -->

	<?php if(empty(Helper::validate_key_loop_value('is_case_dismissed',$BasicInfo_PartC, $j))) {

		$datevalue = Helper::validate_key_loop_value('dismissed_date',$BasicInfo_PartC, $j);
		$status_date = 'hide-data';

	}else{
		$datevalue = Helper::validate_key_loop_value('dismissed_date',$BasicInfo_PartC, $j);
		$status_date = '';
		
	} ?>
	

	<div class="col-md-12 dismiss_data_class <?php echo $status_date;?>" id="filed_case_dismissed_data_<?php echo $j;?>">



		<div class="col-md-6">



			<div class="form-group">



				<label>if so what date was it Dismissed?</label>



				<input type="text" class="form-control dismissed_date required" name="part3[dismissed_date][<?php echo $j;?>]" placeholder="Date Discharge" value="<?php echo $datevalue ;?>">



			</div>



		</div>



	</div>					



</div>



	<!-- <div class="col-md-12 text-right">
		<div class="fm-opt" >
            <button type="button" class='btn remove_bankruptcy_clone' style="display:none;">
			<i class="fa fa-trash m-0"></i></button>
        </div>
		
	</div> -->

