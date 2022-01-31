<div class="form-main w-100 primarily_consumer_debets" id="primarily-consumer-debets-1">
	<div class="row">
	<?php //echo"<pre>";print_r($finacial_affairs);echo "</pre>";?>
		<div class="col-md-12">
			<div class="form-group">
				<label>Name and Address of Creditor</label>
				<input type="text" name="primarily_consumer_debets_data[creditor_address][<?php echo $i;?>]" class="creditor_address form-control required"	placeholder="Name and Address of Creditor" value="<?php echo Helper::validate_key_loop_value('creditor_address',$finacial_affairs,$i);?>">
			</div>
			<div class="form-group ">
				<label>
					Street Address
				</label>
				<input type="text" name="primarily_consumer_debets_data[creditor_street][<?php echo $i;?>]" class="form-control creditor_street required" placeholder="Street Address" value="<?php echo Helper::validate_key_loop_value('creditor_street',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>City</label>
				<input type="text" class="form-control creditor_city required" name="primarily_consumer_debets_data[creditor_city][<?php echo $i;?>]" placeholder="City" value="<?php echo Helper::validate_key_loop_value('creditor_city',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>State</label>
				<select class="form-control required creditor_state" name="primarily_consumer_debets_data[creditor_state][<?php echo $i;?>]">
				<option value="">Please Select State or Territory</option>
				<?php foreach($usa_states as $us_key=>$usa_vl){?>
				<option value="<?php echo $us_key;?>" {{($us_key == @$finacial_affairs['creditor_state'][$i]) ? 'selected':''}} ><?php echo $usa_vl;?></option>
				<?php }?>
				</select>
				<!--<input type="text" class="form-control creditor_state required" name="primarily_consumer_debets_data[creditor_state][<?php echo $i;?>]" placeholder="State" value="<?php echo Helper::validate_key_loop_value('creditor_state',$finacial_affairs,$i);?>">-->
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Zip</label>
				<input type="number" class="form-control creditor_zip required" name="primarily_consumer_debets_data[creditor_zip][<?php echo $i;?>]" placeholder="Zip" value="<?php echo Helper::validate_key_loop_value('creditor_zip',$finacial_affairs,$i);?>">
			</div>
		</div>


		<div class="col-md-6">
			<label> Date of Payment</label>
			<div class="form-group">
				<input type="text" placeholder="Dates of Payment" class="form-control required payment_dates" name="primarily_consumer_debets_data[payment_dates][<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('payment_dates',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-6">
			<label>Total Amount Paid</label>
			<div class="form-group">
			<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">$</span>
					 </div>
				<input type="text" class="form-control required total_amount_paid" name="primarily_consumer_debets_data[total_amount_paid][<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('total_amount_paid',$finacial_affairs,$i);?>">
			</div>
			</div>
		</div>
		<div class="col-md-6">
			<label>Amount Still Owed</label>
			<div class="form-group">
			<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">$</span>
					 </div>
				<input type="text" class="form-control required amount_still_owed" name="primarily_consumer_debets_data[amount_still_owed][<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('amount_still_owed',$finacial_affairs,$i);?>">
			</div>
			</div>
		</div>
		<div class="col-md-12">
			<label>Was this payment for</label>
			<div class="form-group">
				<div class="d-inline radio-primary ">
					<input type="radio" id="payment-mortgage" class="creditor_payment_for" 
						name="primarily_consumer_debets_data[creditor_payment_for][<?php echo $i;?>]" value="1" required <?php echo Helper::validate_key_loop_toggle('creditor_payment_for',$finacial_affairs,1,$i);?>>
					<label for="payment-mortgage"
						class="cr">Mortgage</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio" id="payment-car" class="creditor_payment_for" 
						name="primarily_consumer_debets_data[creditor_payment_for][<?php echo $i;?>]" value="2" required <?php echo Helper::validate_key_loop_toggle('creditor_payment_for',$finacial_affairs,2,$i);?>>
					<label for="payment-car" class="cr">Car</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio" id="payment-credit-card" class="creditor_payment_for" 
						name="primarily_consumer_debets_data[creditor_payment_for][<?php echo $i;?>]" value="3" required <?php echo Helper::validate_key_loop_toggle('creditor_payment_for',$finacial_affairs,3,$i);?>>
					<label for="payment-credit-card"
						class="cr">Credit card</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio" id="payment-loan-repayment" class="creditor_payment_for" 
						name="primarily_consumer_debets_data[creditor_payment_for][<?php echo $i;?>]" value="4" required <?php echo Helper::validate_key_loop_toggle('creditor_payment_for',$finacial_affairs,4,$i);?>>
					<label for="payment-loan-repayment"
						class="cr">Loan repayment</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio"
						id="payment-suppliers_vendor" class="creditor_payment_for" 
						name="primarily_consumer_debets_data[creditor_payment_for][<?php echo $i;?>]" value="5" required <?php echo Helper::validate_key_loop_toggle('creditor_payment_for',$finacial_affairs,5,$i);?>>
					<label for="payment-suppliers_vendor"
						class="cr">Suppliers or vendor</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio" id="payment-other" class="creditor_payment_for" 
						name="primarily_consumer_debets_data[creditor_payment_for][<?php echo $i;?>]" value="6" required <?php echo Helper::validate_key_loop_toggle('creditor_payment_for',$finacial_affairs,6,$i);?>>
					<label for="payment-other"
						class="cr">Other</label>
				</div>
			</div>
		</div>
	</div>
</div>