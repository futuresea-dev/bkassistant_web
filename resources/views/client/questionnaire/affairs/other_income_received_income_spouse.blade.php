<table class="other-income-received-income-table table">
	<tr>
		<th>Period</th>
		<th>Source of income</th>
		<th>Gross income<br>
			<i>(before deductions and exclusions)</i>
		</th>
	</tr>
	<tr>
		<td>
			<div class="form-group">
				<label>January 1 of this year through date
					of<br>
					commencement of case</label>
			</div>
		</td>
		<td>
			<div class="amount-this-year form-group">				
				<input type="text" class="form-control required"  name="other_income_received_spouse_this_year" value="<?php echo Helper::validate_key_value('other_income_received_spouse_this_year',$finacial_affairs);?>">
			</div>
		</td>
		<td class="text-center">
			<div class="form-group">
			<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">$</span>
					 </div>
				<input type="number" class="form-control required" name="other_amount_spouse_this_year_income" value="<?php echo Helper::validate_key_value('other_amount_spouse_this_year_income',$finacial_affairs);?>">
			</div>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="form-group">
				<label>Last year (January 1 - December
					31)</label>
			</div>
		</td>
		<td>

			<div class="amount-last-year form-group">
				
				<input type="text" class="form-control required"  name="other_income_received_spouse_last_year" value="<?php echo Helper::validate_key_value('other_income_received_spouse_last_year',$finacial_affairs);?>">
			</div>
		</td>
		<td class="text-center">
			<div class="form-group">
			<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">$</span>
					 </div>
				<input type="number" class="form-control required" name="other_amount_spouse_last_year_income" value="<?php echo Helper::validate_key_value('other_amount_last_year_income',$finacial_affairs);?>">
			</div>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="form-group">
				<label>The year before last (January 1 -
					December
					31)</label>
			</div>
		</td>
		<td class="">
			<div class="amount-last-before-year form-group">
				<input type="text" class="form-control required"  name="other_income_received_spouse_lastbefore_year" value="<?php echo Helper::validate_key_value('other_income_received_spouse_lastbefore_year',$finacial_affairs);?>">
			</div>
		</td>
		<td class="text-center">
			<div class="form-group">
			<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">$</span>
					 </div>
				<input type="number" class="form-control required" name="other_amount_spouse_lastbefore_year_income" value="<?php echo Helper::validate_key_value('other_amount_spouse_lastbefore_year_income',$finacial_affairs);?>">
			</div>
			</div>
		</td>
	</tr>
</table>