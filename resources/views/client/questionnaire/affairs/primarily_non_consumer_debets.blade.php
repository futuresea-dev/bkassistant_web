<div class="form-main w-100 primarily_non_consumer_debets" id="primarily-non-consumer-debets-1">
	<div class="row">
	<?php //echo"<pre>";print_r($finacial_affairs);echo "</pre>";?>
		<div class="col-md-12">
			<div class="form-group">
				<label>Name and Address of Creditor</label>
				<input name="non_consumer[non_consumer_creditor_address][<?php echo $i;?>]" class="form-control required non_consumer_creditor_address" placeholder="Name and Address of Creditor" value="<?php echo Helper::validate_key_loop_value('non_consumer_creditor_address',$finacial_affairs,$i);?>">
				<!--<textarea name="non_consumer[non_consumer_creditor_address][<?php echo $i;?>]" class="form-control required non_consumer_creditor_address"-->
				<!--	cols="30" rows="4"-->
				<!--	placeholder="Name and Address of Creditor"><?php echo Helper::validate_key_loop_value('non_consumer_creditor_address',$finacial_affairs,$i);?></textarea>-->
			</div>
			<div class="form-group ">
				<label>
					Street Address
				</label>
				<input type="text" name="non_consumer[non_consumer_creditor_street][<?php echo $i;?>]" class="form-control non_consumer_creditor_street required" placeholder="Street Address" value="<?php echo Helper::validate_key_loop_value('non_consumer_creditor_street',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>City</label>
				<input type="text" class="form-control non_consumer_creditor_city required" name="non_consumer[non_consumer_creditor_city][<?php echo $i;?>]" placeholder="City" value="<?php echo Helper::validate_key_loop_value('non_consumer_creditor_city',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>State</label>
				<select class="form-control required non_consumer_creditor_state" name="non_consumer[non_consumer_creditor_state][<?php echo $i;?>]">
				<option value="">Please Select State or Territory</option>
				<?php foreach($usa_states as $us_key=>$usa_vl){?>
				<option value="<?php echo $us_key;?>" {{($us_key == $finacial_affairs['non_consumer_creditor_state'][$i]) ? 'selected':''}} ><?php echo $usa_vl;?></option>
				<?php }?>
				</select>
				<!--<input type="text" class="form-control non_consumer_creditor_state required" name="non_consumer[non_consumer_creditor_state][<?php echo $i;?>]" placeholder="State" value="<?php echo Helper::validate_key_loop_value('non_consumer_creditor_state',$finacial_affairs,$i);?>">-->
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Zip</label>
				<input type="number" class="form-control non_consumer_creditor_zip required" name="non_consumer[non_consumer_creditor_zip][<?php echo $i;?>]" placeholder="Zip" value="<?php echo Helper::validate_key_loop_value('non_consumer_creditor_zip',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-6">
			<label> Date of Payment</label>
			<div class="form-group">
				<input type="text" placeholder="Dates of Payment" class="form-control required non_consumer_payment_dates" name="non_consumer[non_consumer_payment_dates][<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('non_consumer_payment_dates',$finacial_affairs,$i);?>">
			</div>
		</div>
		<div class="col-md-6">
			<label>Total Amount Paid</label>
			<div class="form-group">
			<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">$</span>
					 </div>
				<input type="text" class="form-control required non_consumer_total_amount_paid" name="non_consumer[non_consumer_total_amount_paid][<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('non_consumer_total_amount_paid',$finacial_affairs,$i);?>">
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
				<input type="text" class="form-control required non_consumer_amount_still_owed" name="non_consumer[non_consumer_amount_still_owed][<?php echo $i;?>]" value="<?php echo Helper::validate_key_loop_value('non_consumer_amount_still_owed',$finacial_affairs,$i);?>">
			</div>
			</div>
		</div>
		<div class="col-md-12">
			<label>Was this payment for</label>
			<div class="form-group">
				<div class="d-inline radio-primary ">
					<input type="radio" id="payment-mortgage" class="non_consumer_creditor_payment_for"
						name="non_consumer[non_consumer_creditor_payment_for][<?php echo $i;?>]" value="1" required <?php echo Helper::validate_key_loop_toggle('non_consumer_creditor_payment_for',$finacial_affairs,1,$i);?>>
					<label for="payment-mortgage"
						class="cr">Mortgage</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio" id="payment-car" class="non_consumer_creditor_payment_for"
						name="non_consumer[non_consumer_creditor_payment_for][<?php echo $i;?>]" value="2" required <?php echo Helper::validate_key_loop_toggle('non_consumer_creditor_payment_for',$finacial_affairs,2,$i);?>>
					<label for="payment-car" class="cr">Car</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio" id="payment-credit-card" class="non_consumer_creditor_payment_for"
						name="non_consumer[non_consumer_creditor_payment_for][<?php echo $i;?>]" value="3" required <?php echo Helper::validate_key_loop_toggle('non_consumer_creditor_payment_for',$finacial_affairs,3,$i);?>>
					<label for="payment-credit-card"
						class="cr">Credit card</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio" id="payment-loan-repayment" class="non_consumer_creditor_payment_for"
						name="non_consumer[non_consumer_creditor_payment_for][<?php echo $i;?>]" value="4" required <?php echo Helper::validate_key_loop_toggle('non_consumer_creditor_payment_for',$finacial_affairs,4,$i);?>>
					<label for="payment-loan-repayment"
						class="cr">Loan repayment</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio"
						id="payment-suppliers_vendor" class="non_consumer_creditor_payment_for"
						name="non_consumer[non_consumer_creditor_payment_for][<?php echo $i;?>]" value="5" required <?php echo Helper::validate_key_loop_toggle('non_consumer_creditor_payment_for',$finacial_affairs,5,$i);?>>
					<label for="payment-suppliers_vendor"
						class="cr">Suppliers or vendor</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio" id="payment-other" class="non_consumer_creditor_payment_for"
						name="non_consumer[non_consumer_creditor_payment_for][<?php echo $i;?>]" value="6" required <?php echo Helper::validate_key_loop_toggle('non_consumer_creditor_payment_for',$finacial_affairs,6,$i);?>>
					<label for="payment-other"
						class="cr">Other</label>
				</div>
			</div>
		</div>
	</div>
</div>