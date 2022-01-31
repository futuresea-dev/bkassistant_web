<div class="form-main w-100 losses_from_fire_data" id="losses_from_fire-data-1">
	<div class="row">
		<div class="col-md-12">
		    <div class="row">
				<div class="col-md-4">
					<div class="col-md-12">
						<div class="form-group">
							<label>Describe the property you lost and how the loss occured:</label>
							<br>
							<textarea class="form-control required loss_description" rows="8" name="losses_from_fire_data[loss_description][{{$i}}]" placeholder="Describe the property you lost and how the loss occured"><?php echo Helper::validate_key_loop_value('loss_description',$finacial_affairs,$i);?></textarea>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="col-md-12">
						<div class="form-group">
							<label>Description and value of any property transferred:</label>
							<br>
							<textarea class="form-control required transferred_description" rows="8" name="losses_from_fire_data[transferred_description][{{$i}}]" placeholder="Description and value of any property transferred"><?php echo Helper::validate_key_loop_value('transferred_description',$finacial_affairs,$i);?></textarea>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row mb-3">
						<div class="col-md-6">
							<label>Date of loss</label>
							<input type="text" placeholder="Date of loss" class="form-control required loss_date_payment" name="losses_from_fire_data[loss_date_payment]" value="<?php echo Helper::validate_key_loop_value('loss_date_payment',$finacial_affairs,$i);?>">
						</div>
						<div class="col-md-6">
							<label>Value of Property</label>
							<div class="form-group">
							<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">$</span>
										<input type="text" style="width: 100% !important;" placeholder="Value of Property" class="form-control required" name="losses_from_fire_data[loss_amount_payment][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('loss_amount_payment',$finacial_affairs,$i);?>">
									 </div>
								
							</div>					
							</div>								
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>