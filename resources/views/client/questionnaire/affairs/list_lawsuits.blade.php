<div class="form-main w-100 list_lawsuits" id="list-lawsuits-data-1">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Case Title</label>
				<input type="text" name="list_lawsuits_data[case_title][{{$i}}]" class="form-control required case_title"
					 placeholder="Case Title" value="<?php echo Helper::validate_key_loop_value('case_title',$finacial_affairs,$i);?>">
			</div>
			<div class="form-group">
				<label>Case Number</label>
				<input type="text" name="list_lawsuits_data[case_number][{{$i}}]" class="form-control required case_number" placeholder="Case Number" value="<?php echo Helper::validate_key_loop_value('case_number',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<?php 
				$nature_of_case = array(
					'Civil Case' => 'Civil Case',
					'Class Action Case' => 'Class Action Case',
					'Criminal Case' => 'Criminal Case',
					'Dissolution Case' => 'Dissolution Case',
					'Personal Injury Case' => 'Personal Injury Case',
					'Other Type of Case' => 'Other Type of Case'
				);
				?>
				<div class="col-md-12">
					<div class="form-group">
						<label>Nature of the Case</label>
						<select class="form-control required case_nature" name="list_lawsuits_data[case_nature][{{$i}}]">
						<option value="">Please Select Nature of the Case</option>
						@foreach($nature_of_case as $us_key=>$usa_vl)
						<option value="<?php echo $us_key;?>" {{($us_key == @$finacial_affairs['case_nature'][$i]) ? 'selected':''}} ><?php echo $usa_vl;?></option>
						@endforeach
						</select>
					</div>
				</div>
				
				<div class="col-md-12">
					<label>Status or Disposition</label>
					<div class="form-group">
						<div class="d-inline radio-primary ">
							<input type="radio" id="list-lawsuits_disposition_pending" class="disposition" name="list_lawsuits_data[disposition][{{$i}}]" value="1" required <?php echo Helper::validate_key_loop_toggle('disposition',$finacial_affairs,1,$i);?>>
							<label for="list-lawsuits_disposition_pending" class="cr">Pending</label>
						</div>
						<div class="d-inline radio-primary ">
							<input type="radio" id="list-lawsuits_disposition_appeal" class="disposition" name="list_lawsuits_data[disposition][{{$i}}]" value="2" required <?php echo Helper::validate_key_loop_toggle('disposition',$finacial_affairs,2,$i);?>>
							<label for="list-lawsuits_disposition_appeal" class="cr">On Appeal </label>
						</div>
						<div class="d-inline radio-primary ">
							<input type="radio" id="list-lawsuits_disposition_concluded" class="disposition" name="list_lawsuits_data[disposition][{{$i}}]" value="3" required <?php echo Helper::validate_key_loop_toggle('disposition',$finacial_affairs,3,$i);?>>
							<label for="list-lawsuits_disposition_concluded" class="cr">Concluded </label>
						</div>										
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">							
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Court or Agency Name</label>
						<input type="text" class="form-control required agency_location" name="list_lawsuits_data[agency_location][{{$i}}]" value="<?php echo Helper::validate_key_loop_value('agency_location',$finacial_affairs,$i);?>">
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label>Street Address</label>
						<input type="text" class="form-control required agency_street" name="list_lawsuits_data[agency_street][{{$i}}]" placeholder="Street Address" value="<?php echo Helper::validate_key_loop_value('agency_street',$finacial_affairs,$i);?>">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>City</label>
						<input type="text" class="form-control required agency_city" name="list_lawsuits_data[agency_city][{{$i}}]" placeholder="City" value="<?php echo Helper::validate_key_loop_value('agency_city',$finacial_affairs,$i);?>">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>State</label>
						<select class="form-control required agency_state" name="list_lawsuits_data[agency_state][{{$i}}]">
						<option value="">Please Select State or Territory</option>
						<?php foreach($usa_states as $us_key=>$usa_vl){?>
						<option value="<?php echo $us_key;?>" {{($us_key == @$finacial_affairs['agency_state'][$i]) ? 'selected':''}} ><?php echo $usa_vl;?></option>
						<?php }?>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Zip</label>
						<input type="number" class="form-control required agency_zip" name="list_lawsuits_data[agency_zip][{{$i}}]" placeholder="Zip" value="<?php echo Helper::validate_key_loop_value('agency_zip',$finacial_affairs,$i);?>">
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>