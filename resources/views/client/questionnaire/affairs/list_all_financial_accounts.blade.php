<div class="form-main w-100 list_all_financial_accounts" id="list_all_financial_accounts-form-1">
	<div class="row">
		<div class="col-md-12">
		    <div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Name of Institution</label>
						<input type="text" name="list_all_financial_accounts_data[institution_name][{{$i}}]" class="form-control required institution_name" placeholder="Name of Institution" value="{{@$finacial_affairs['list_all_financial_accounts_data']['institution_name'][$i]}}">
					</div>							
				</div>
				<div class="col-md-12">
					<div class="form-group ">
						<label>
							Number Street
						</label>
						<input type="text" name="list_all_financial_accounts_data[street_number][{{$i}}]" class="form-control required" placeholder="Number Street" value="{{@$finacial_affairs['list_all_financial_accounts_data']['street_number'][$i]}}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>City</label>
						<input type="text" class="form-control required" name="list_all_financial_accounts_data[city][{{$i}}]" placeholder="City" value="{{@$finacial_affairs['list_all_financial_accounts_data']['city'][$i]}}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>State</label>
						<select class="form-control required domestic_partner_state" name="list_all_financial_accounts_data[state][{{$i}}]">
						<option value="">State</option>
						<?php foreach($usa_states as $us_key=>$usa_vl){?>
						<option value="<?php echo $us_key;?>" {{(@$finacial_affairs['list_all_financial_accounts_data']['state'][$i]==$us_key)?'selected':''}} ><?php echo $usa_vl;?></option>
						<?php }?>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Zip Code</label>
						<input type="number" class="form-control required" name="list_all_financial_accounts_data[zip][{{$i}}]" placeholder="Zip Code" value="{{@$finacial_affairs['list_all_financial_accounts_data']['zip'][$i]}}">
					</div>
				</div>		
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label> Last 4 Digits of
					Account Number
				</label>
				<div class="form-group">
					<input type="number" class="form-control required account_number" name="list_all_financial_accounts_data[account_number][<?php echo $i;?>]" value="{{@$finacial_affairs['list_all_financial_accounts_data']['account_number'][$i]}}">
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Date account was closed, sold, moved or trasfered</label>
				<div class="form-group">
					<input type="text" class="form-control required date_account_closed" name="list_all_financial_accounts_data[date_account_closed][<?php echo $i;?>]" value="{{@$finacial_affairs['list_all_financial_accounts_data']['date_account_closed'][$i]}}">
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label> Last balance before closing or transfer
				</label>
				<div class="form-group">
					<input type="number" class="form-control required last_balance" name="list_all_financial_accounts_data[last_balance][<?php echo $i;?>]" value="{{@$finacial_affairs['list_all_financial_accounts_data']['last_balance'][$i]}}">
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<label> Type of Account or
				Instrument</label>
			<div class="form-group">
				<div class="d-inline radio-primary ">
					<input type="radio" id="type-of-account_checking" class="all_financial_type_of_account" 
						name="list_all_financial_accounts_data[type_of_account][<?php echo $i;?>]" value="1" required <?php echo Helper::validate_key_loop_toggle('type_of_account',$finacial_affairs,1,$i);?>>
					<label for="type-of-account_checking" class="cr">
						Checking</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio" id="type-of-account_savings" class="all_financial_type_of_account"
						name="list_all_financial_accounts_data[type_of_account][<?php echo $i;?>]" value="2" required <?php echo Helper::validate_key_loop_toggle('type_of_account',$finacial_affairs,2,$i);?>>
					<label for="type-of-account_savings"
						class="cr">Savings
					</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio"
						id="type-of-account-money-market" class="all_financial_type_of_account"
						name="list_all_financial_accounts_data[type_of_account][<?php echo $i;?>]" value="3" required <?php echo Helper::validate_key_loop_toggle('type_of_account',$finacial_affairs,3,$i);?>>
					<label for="type-of-account-money-market"
						class="cr">
						Money Market</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio" id="type-of-account-brokerage" class="all_financial_type_of_account"
						name="list_all_financial_accounts_data[type_of_account][<?php echo $i;?>]" value="4" required <?php echo Helper::validate_key_loop_toggle('type_of_account',$finacial_affairs,4,$i);?>>
					<label for="type-of-account-brokerage" class="cr">
						Brokerage</label>
				</div>
				<div class="d-inline radio-primary ">
					<input type="radio" id="type-of-account-other" class="all_financial_type_of_account"
						name="list_all_financial_accounts_data[type_of_account][<?php echo $i;?>]" value="5" required <?php echo Helper::validate_key_loop_toggle('type_of_account',$finacial_affairs,5,$i);?>>
					<label for="type-of-account-other" class="cr">
						Other</label>
				</div>
			</div>
		</div>
	</div>
</div>