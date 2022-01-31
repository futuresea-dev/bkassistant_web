<div class="col-md-12">
   <p class="section-part-title">Financial Assets</p>
</div>
<?php 
$final=[];
if (!empty($financialassets)) {
    foreach ($financialassets as $financial) {
        $f_type_data = json_decode($financial['type_data'], 1);
        if (!empty($f_type_data)) {
            // TypeOfAccount is only used for property->retirement
            $financial['type_of_account'] = $f_type_data['type_of_account'] ?? '';
            $financial['description'] = $f_type_data['description'] ?? '';
            $financial['property_value'] = $f_type_data['property_value'] ?? '';
            $financial['owned_by'] = $f_type_data['owned_by'] ?? '';
        }
        unset($financial['type_data']);
        $final[$financial['type']] = $financial;
    }
}
$cash=(!empty($final['cash']))?$final['cash']:[];

$bank=(!empty($final['bank']))?$final['bank']:[];

$savings_account=(!empty($final['savings_account']))?$final['savings_account']:[];

$certificate_deposit=(!empty($final['certificate_deposit']))?$final['certificate_deposit']:[];

$other_financial_account=(!empty($final['other_financial_account']))?$final['other_financial_account']:[];

$mutual_funds=(!empty($final['mutual_funds']))?$final['mutual_funds']:[];

$traded_stocks=(!empty($final['traded_stocks']))?$final['traded_stocks']:[];

$government_corporate_bonds=(!empty($final['government_corporate_bonds']))?$final['government_corporate_bonds']:[];

$retirement_pension=(!empty($final['retirement_pension']))?$final['retirement_pension']:[];

$security_deposits=(!empty($final['security_deposits']))?$final['security_deposits']:[];

$prepayments=(!empty($final['prepayments']))?$final['prepayments']:[];

$annuities=(!empty($final['annuities']))?$final['annuities']:[];

$education_ira=(!empty($final['education_ira']))?$final['education_ira']:[];

$trusts_life_estates=(!empty($final['trusts_life_estates']))?$final['trusts_life_estates']:[];

$patents_copyrights=(!empty($final['patents_copyrights']))?$final['patents_copyrights']:[];

$licenses_franchises=(!empty($final['licenses_franchises']))?$final['licenses_franchises']:[];

$tax_refunds=(!empty($final['tax_refunds']))?$final['tax_refunds']:[];

$alimony_child_support=(!empty($final['alimony_child_support']))?$final['alimony_child_support']:[];

$unpaid_wages=(!empty($final['unpaid_wages']))?$final['unpaid_wages']:[];

$insurance_policies=(!empty($final['insurance_policies']))?$final['insurance_policies']:[];

$inheritances=(!empty($final['inheritances']))?$final['inheritances']:[];

$inheritances=(!empty($final['inheritances']))?$final['inheritances']:[];

$injury_claims=(!empty($final['injury_claims']))?$final['injury_claims']:[];

$lawsuits=(!empty($final['lawsuits']))?$final['lawsuits']:[];

$other_claims=(!empty($final['other_claims']))?$final['other_claims']:[];

$other_financial=(!empty($final['other_financial']))?$final['other_financial']:[];
?>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <h5>Type of Property</h5>
         <label class="d-block">Cash<i> (spare change/money
         in your purse or wallet, cash
         not in accounts)</i></label>
         <input type="hidden" name="cash[id]" value="<?php echo Helper::validate_key_value('id',$cash);?>"><input type="hidden" name="cash[type]" value="cash">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$cash,1);?> required id="cash_items_yes"
               name="cash[type_value]" onchange="getCashItems('yes');" value="1">
            <label for="cash_items_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$cash,0);?> required id="cash_items_no"
               name="cash[type_value]" onchange="getCashItems('no');" value="0">
            <label for="cash_items_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$cash);?> pt-3" id="cash_items_data">
      <div class="row">
                  <?php
                  $i=0;
         if(!empty($cash['description']) && is_array($cash['description'])){
            
            for($i=0;$i<count($cash['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.cash",['cash'=>$cash,$i])
         <?php }}else{?>
         @include("client.questionnaire.property.financial.cash")
      <?php }?>
        <?php if(!empty($cash['description']) && is_array($cash['description']) && count($cash['description'])<4){?>
      <?php }?>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Checking account(s) <i>(list
         name(s) on account, bank
         name, and account number)</i></label>
         <input type="hidden" name="bank[id]" value="<?php echo Helper::validate_key_value('id',$bank);?>"><input type="hidden" name="bank[type]" value="bank">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$bank,1);?> required id="checking_account_items_yes"
               name="bank[type_value]"
               onchange="getCheckingAccountItems('yes');" value="1" >
            <label for="checking_account_items_yes"
               class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$bank,0);?> required id="checking_account_items_no"
               name="bank[type_value]"
               onchange="getCheckingAccountItems('no');" value="0">
            <label for="checking_account_items_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <?php $i=0;?>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$bank);?> pt-3" id="checking_account_items_data">
      <div class="row">
      <?php $i=0;
         if(!empty($bank['description']) && is_array($bank['description'])){
            
            for($i=0;$i<count($bank['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.bank",['bank'=>$bank,$i])
         <?php }}else{?>
         @include("client.questionnaire.property.financial.bank")
      <?php }?>
        <?php if(!empty($bank['description']) && is_array($bank['description']) && count($bank['description'])<5){?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"
            id="add-more-residence-form"
            onclick="bank_addmore(); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-bank-mutisec" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.bank_mutisec', '.remove-bank-mutisec');"></i>
      </div>
      <?php }else{?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"
            id="add-more-residence-form"
            onclick="bank_addmore(); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-bank-mutisec" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.bank_mutisec', '.remove-bank-mutisec');"></i>
      </div>
      <?php }?>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Savings account(s) <i>(list
         name(s) on account, bank
         name, and account number)</i></label>
         <input type="hidden" name="savings_account[id]" value="<?php echo Helper::validate_key_value('id',$savings_account);?>"><input type="hidden" name="savings_account[type]" value="savings_account">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$savings_account,1);?> required id="savings_account_items_yes"
               name="savings_account[type_value]"
               onchange="getSavingsAccountItems('yes');" value="1">
            <label for="savings_account_items_yes"
               class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$savings_account,0);?> required id="savings_account_items_no"
               name="savings_account[type_value]"
               onchange="getSavingsAccountItems('no');" value="0">
            <label for="savings_account_items_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$savings_account);?> pt-3" id="savings_account_items_data">
      <div class="row">
         <?php
         $i=0;
         if(!empty($savings_account['description']) && is_array($savings_account['description'])){
            
            for($i=0;$i<count($savings_account['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.savings_account",['savings_account'=>$savings_account,$i])
         <?php }}else{?>
         @include("client.questionnaire.property.financial.savings_account")
      <?php }?>
        <?php if(!empty($savings_account['description']) && is_array($savings_account['description']) && count($savings_account['description'])<5){?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"          
            onclick="savings_account_addmore(); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.savings_account_mutisec', '.remove-other-names');"></i>
      </div>
      <?php }else{?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"          
            onclick="savings_account_addmore(); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.savings_account_mutisec', '.remove-other-names');"></i>
      </div>
      <?php }?>
      </div>
   </div>
   <!-- Condition data End-->
</div>

<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Other financial account(s)
         <i>(list name(s) on account,
         bank name, and account
         number)</i></label>
         <input type="hidden" name="other_financial_account[id]" value="<?php echo Helper::validate_key_value('id',$other_financial_account);?>"><input type="hidden" name="other_financial_account[type]" value="other_financial_account">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$other_financial_account,1);?> required id="other_financial_account_items_yes"
               name="other_financial_account[type_value]"
               onchange="getOtherFinacialAccountItems('yes');" value="1">
            <label for="other_financial_account_items_yes"
               class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$other_financial_account,0);?> required id="other_financial_account_items_no"
               name="other_financial_account[type_value]"
               onchange="getOtherFinacialAccountItems('no');" value="0">
            <label for="other_financial_account_items_no"
               class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$other_financial_account);?> pt-3"
      id="other_financial_account_items_data">
      <div class="row">
        <?php
        $i=0;
         if(!empty($other_financial_account['description']) && is_array($other_financial_account['description'])){
            
            for($i=0;$i<count($other_financial_account['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.other_financial_account",['other_financial_account'=>$other_financial_account,$i])
         <?php }}else{?>
         @include("client.questionnaire.property.financial.other_financial_account")
      <?php }?>
        <?php if(!empty($other_financial_account['description']) && is_array($other_financial_account['description']) && count($other_financial_account['description'])<6){?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"
            id="add-more-residence-form"
            onclick="other_financial_addmore('other_financial_account'); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-financial-account-mutisec" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.other_financial_account_mutisec', '.remove-other-financial-account-mutisec');"></i>
      </div>
      <?php }else{?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"          
            onclick="other_financial_addmore('other_financial_account'); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-financial-account-mutisec" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.other_financial_account_mutisec', '.remove-other-financial-account-mutisec');"></i>
      </div>
      <?php }?>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Bonds, mutual funds, and
         publicly traded stocks</label>
         <input type="hidden" name="mutual_funds[id]" value="<?php echo Helper::validate_key_value('id',$mutual_funds);?>"><input type="hidden" name="mutual_funds[type]" value="mutual_funds">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$mutual_funds,1);?> required id="bonds_mutual_funds_items_yes"
               name="mutual_funds[type_value]"
               onchange="getMutualFundsItems('yes');" value="1">
            <label for="bonds_mutual_funds_items_yes"
               class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$mutual_funds,0);?> required id="bonds_mutual_funds_items_no"
               name="mutual_funds[type_value]"
               onchange="getMutualFundsItems('no');" value="0">
            <label for="bonds_mutual_funds_items_no"
               class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$mutual_funds);?> pt-3"
      id="bonds_mutual_funds_items_data">
      <div class="row">
         <?php
         $i=0;
         if(!empty($mutual_funds['description']) && is_array($mutual_funds['description'])){
            
            for($i=0;$i<count($mutual_funds['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.mutual_funds",['mutual_funds'=>$mutual_funds,$i])
         <?php }}else{?>
         @include("client.questionnaire.property.financial.mutual_funds")
      <?php }?>
        <?php if(!empty($mutual_funds['description']) && is_array($mutual_funds['description']) && count($mutual_funds['description'])<4){?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"
            id="add-more-residence-form"
            onclick="common_financial_addmore('mutual_funds', 'mutual-funds-mutisec'); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-mutual-funds-mutisec" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.mutual_funds_mutisec', '.remove-mutual-funds-mutisec');"></i>
      </div>
      <?php }else{?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"          
            onclick="common_financial_addmore('mutual_funds', 'mutual-funds-mutisec'); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-mutual-funds-mutisec" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.mutual_funds_mutisec', '.remove-mutual-funds-mutisec');"></i>
      </div>
      <?php }?>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Non-publicly traded stocks and interests in businesses <i>(Privately held stock of companies if your self-employed your business entity would be listed here)</i></label>
         <input type="hidden" name="traded_stocks[id]" value="<?php echo Helper::validate_key_value('id',$traded_stocks);?>"><input type="hidden" name="traded_stocks[type]" value="traded_stocks">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$traded_stocks,1);?> required id="non_publicly_items_yes"
               name="traded_stocks[type_value]"
               onchange="getNonPubliclyItems('yes');" value="1">
            <label for="non_publicly_items_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$traded_stocks,0);?> required id="non_publicly_items_no"
               name="traded_stocks[type_value]"
               onchange="getNonPubliclyItems('no');" value="0">
            <label for="non_publicly_items_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$traded_stocks);?> pt-3" id="non_publicly_items_data">
      <div class="row">
          <?php
          $i=0;
         if(!empty($traded_stocks['description']) && is_array($traded_stocks['description'])){
            
            for($i=0;$i<count($traded_stocks['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.traded_stocks",['traded_stocks'=>$traded_stocks,$i])
         <?php }}else{?>
         @include("client.questionnaire.property.financial.traded_stocks")
      <?php }?>
        <?php if(!empty($traded_stocks['description']) && is_array($traded_stocks['description']) && count($traded_stocks['description'])<4){?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"
            id="add-more-residence-form"
            onclick="common_financial_addmore('traded_stocks','traded-stocks-mutisec'); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-traded-stocks-mutisec" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.traded_stocks_mutisec', '.remove-traded-stocks-mutisec');"></i>
      </div>
      <?php }else{?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"          
            onclick="common_financial_addmore('traded_stocks','traded-stocks-mutisec'); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-traded-stocks-mutisec" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.traded_stocks_mutisec', '.remove-traded-stocks-mutisec');"></i>
      </div>
      <?php }?>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Government and corporate
         bonds and instruments
         <i>(including U.S. Savings
         Bonds)</i></label>
         <input type="hidden" name="government_corporate_bonds[id]" value="<?php echo Helper::validate_key_value('id',$government_corporate_bonds);?>"><input type="hidden" name="government_corporate_bonds[type]" value="government_corporate_bonds">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$government_corporate_bonds,1);?> required id="government_corporate_yes"
               name="government_corporate_bonds[type_value]"
               onchange="getGovernmentCoperateItems('yes');" value="1">
            <label for="government_corporate_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$government_corporate_bonds,0);?> required id="government_corporate_no"
               name="government_corporate_bonds[type_value]"
               onchange="getGovernmentCoperateItems('no');" value="0">
            <label for="government_corporate_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$government_corporate_bonds);?>" id="government_corporate_data">
        <div class="row">
            <div class="col-md-7">Issuer Name</div>
            <div class="col-md-5">Value of Property</div>
        </div>
      <div class="row">
          <?php
            $i=0;
            if(!empty($government_corporate_bonds['description']) && is_array($government_corporate_bonds['description'])){
                for($i=0;$i<count($government_corporate_bonds['description']);$i++) { ?>
                    @include("client.questionnaire.property.financial.government_corporate_bonds",['government_corporate_bonds'=>$government_corporate_bonds,$i])
            <?php }}else{?>
                @include("client.questionnaire.property.financial.government_corporate_bonds")
            <?php }?>
        <?php if(!empty($government_corporate_bonds['description']) && is_array($government_corporate_bonds['description']) && count($government_corporate_bonds['description'])<4){?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0" id="add-more-residence-form"
            onclick="common_financial_addmore('government_corporate_bonds', 'government-corporate-bonds-mutisec'); return false;"><i class="feather icon-plus mr-0"></i>Add More</button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-government-corporate-bonds-mutisec" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.government_corporate_bonds_mutisec', '.remove-government-corporate-bonds-mutisec');"></i>
        </div>
      <?php }else{?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"          
            onclick="common_financial_addmore('government_corporate_bonds', 'government-corporate-bonds-mutisec'); return false;"><i class="feather icon-plus mr-0"></i> Add More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-government-corporate-bonds-mutisec" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.government_corporate_bonds_mutisec', '.remove-government-corporate-bonds-mutisec');"></i>
      </div>
      <?php }?>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Retirement, pension, or profit-sharing plan #1 (IRA, 401(k), 403(b), thrift savings account, or other pension or
            profit-sharing plan) (list type of plan and where the account is held)</label>
         <input type="hidden" name="retirement_pension[id]" value="<?php echo Helper::validate_key_value('id',$retirement_pension);?>"><input type="hidden" name="retirement_pension[type]" value="retirement_pension">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$retirement_pension,1);?> required id="retirement_pension_yes"
               name="retirement_pension[type_value]"
               onchange="getRetirementPensionItems('yes');" value="1">
            <label for="retirement_pension_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$retirement_pension,0);?> required id="retirement_pension_no"
               name="retirement_pension[type_value]"
               onchange="getRetirementPensionItems('no');" value="0">
            <label for="retirement_pension_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$retirement_pension);?> pt-3" id="retirement_pension_data">
      <div class="row">
        <div class="col-md-4">Type of Account</div>
        <div class="col-md-4">Institution Name</div>
        <div class="col-md-4">Value</div>
      </div>
      <div class="row">
        <?php
          $i=0;
         if(!empty($retirement_pension['description']) && is_array($retirement_pension['description'])){
            
            for($i=0;$i<count($retirement_pension['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.retirement_pension",['retirement_pension'=>$retirement_pension,$i])
         <?php }}else{?>
         @include("client.questionnaire.property.financial.retirement_pension")
      <?php }?>
      <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"
            id="add-more-residence-form"
            onclick="common_financial_addmore_with_limit('retirement_pension', 8); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-retirement-pension-mutisec" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.retirement_pension_mutisec', '.remove-retirement-pension-mutisec');"></i>
      </div>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Security deposits and prepayments</label>
         <input type="hidden" name="security_deposits[id]" value="<?php echo Helper::validate_key_value('id',$security_deposits);?>"><input type="hidden" name="security_deposits[type]" value="security_deposits">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$security_deposits,1);?> required id="security_deposits_yes"
               name="security_deposits[type_value]"
               onchange="getSecurityDepositsItems('yes');" value="1">
            <label for="security_deposits_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$security_deposits,0);?> required id="security_deposits_no"
               name="security_deposits[type_value]"
               onchange="getSecurityDepositsItems('no');" value="0">
            <label for="security_deposits_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$security_deposits);?> pt-3" id="security_deposits_data">
      <div class="row">
           <?php
           $i=0;
         if(!empty($security_deposits['description']) && is_array($security_deposits['description'])){
            
            for($i=0;$i<count($security_deposits['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.security_deposits",['security_deposits'=>$security_deposits,$i])
         <?php }}else{?>
         @include("client.questionnaire.property.financial.security_deposits")
      <?php }?>
        <?php if(!empty($security_deposits['description']) && is_array($security_deposits['description']) && count($security_deposits['description'])<4){?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"
            id="add-more-residence-form"
            onclick="common_financial_addmore_with_limit('security_deposits',6); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-security-deposits-mutisec" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.security_deposits_mutisec', '.remove-security-deposits-mutisec');"></i>
      </div>
      <?php }else{?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"
            id="add-more-residence-form"
            onclick="common_financial_addmore_with_limit('security_deposits'6); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-security-deposits-mutisec" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.security_deposits_mutisec', '.remove-security-deposits-mutisec');"></i>
      </div>
      <?php }?>
      </div>
   </div>
   <!-- Condition data End-->
</div>

<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Annuities <i> (list company)</i></label>
         <input type="hidden" name="annuities[id]" value="<?php echo Helper::validate_key_value('id',$annuities);?>"><input type="hidden" name="annuities[type]" value="annuities">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$annuities,1);?> required id="annuities_yes"
               name="annuities[type_value]"
               onchange="getAnnuitiesItems('yes');" value="1">
            <label for="annuities_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$annuities,0);?> required id="annuities_no"
               name="annuities[type_value]"
               onchange="getAnnuitiesItems('no');" value="0">
            <label for="annuities_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$annuities);?> pt-3" id="annuities_data">
      <div class="row">
         <?php
         $i=0;
         if(!empty($annuities['description']) && is_array($annuities['description'])){
            
            for($i=0;$i<count($annuities['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.annuities",['annuities'=>$annuities,$i])
         <?php }}else{?>
         @include("client.questionnaire.property.financial.annuities")
      <?php }?>
        <?php if(!empty($annuities['description']) && is_array($annuities['description']) && count($annuities['description'])<4){?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"
            id="add-more-residence-form"
            onclick="common_financial_addmore_with_limit('annuities',6); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-annuities-mutisec" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.annuities_mutisec', '.remove-annuities-mutisec');"></i>
      </div>
      <?php }else{?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"          
            onclick="common_financial_addmore_with_limit('annuities', 6); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-annuities-mutisec" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.annuities_mutisec', '.remove-annuities-mutisec');"></i>
      </div>
      <?php }?>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Interests in an education IRA, in an account in a qualified ABLE program, or under a qualified state tuition program</label>
         <input type="hidden" name="education_ira[id]" value="<?php echo Helper::validate_key_value('id',$education_ira);?>"><input type="hidden" name="education_ira[type]" value="education_ira">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$education_ira,1);?> required id="education_IRA_yes"
               name="education_ira[type_value]"
               onchange="getEducationIRAItems('yes');" value="1">
            <label for="education_IRA_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$education_ira,0);?> required id="education_IRA_no"
               name="education_ira[type_value]"
               onchange="getEducationIRAItems('no');" value="0">
            <label for="education_IRA_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$education_ira);?> pt-3" id="education_IRA_data">
      <div class="row">
         <?php
         $i=0;
         if(!empty($education_ira['description']) && is_array($education_ira['description'])){
            
            for($i=0;$i<count($education_ira['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.education_ira",['education_ira'=>$education_ira,$i])
         <?php }}else{?>
         @include("client.questionnaire.property.financial.education_ira")
      <?php }?>
        <?php if(!empty($education_ira['description']) && is_array($education_ira['description']) && count($education_ira['description'])<4){?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"
            id="add-more-residence-form"
            onclick="common_financial_addmore_with_limit('education_ira', 6); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-education-ira-mutisec" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.education_ira_mutisec', '.remove-education-ira-mutisec');"></i>
      </div>
      <?php }else{?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"          
            onclick="common_financial_addmore_with_limit('education_ira',6); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-education-ira-mutisec" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.education_ira_mutisec', '.remove-education-ira-mutisec');"></i>
      </div>
      <?php }?>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Trusts, life estates, future,
         and equitable interests in
         property or assets</label>
         <input type="hidden" name="trusts_life_estates[id]" value="<?php echo Helper::validate_key_value('id',$trusts_life_estates);?>"><input type="hidden" name="trusts_life_estates[type]" value="trusts_life_estates">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$trusts_life_estates,1);?> required id="interestin_property_yes"
               name="trusts_life_estates[type_value]"
               onchange="getInterestPropertyItems('yes');" value="1">
            <label for="interestin_property_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$trusts_life_estates,0);?> required id="interestin_property_no"
               name="trusts_life_estates[type_value]"
               onchange="getInterestPropertyItems('no');" value="0">
            <label for="interestin_property_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$trusts_life_estates);?> pt-3" id="interestin_property_data">
      <div class="row">
         <?php
         $i=0;
         if(!empty($trusts_life_estates['description']) && is_array($trusts_life_estates['description'])){
            
            for($i=0;$i<count($trusts_life_estates['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.trusts_life_estates",['trusts_life_estates'=>$trusts_life_estates,$i])
         <?php }}else{?>
         @include("client.questionnaire.property.financial.trusts_life_estates")
      <?php }?>
        <?php if(!empty($trusts_life_estates['description']) && is_array($trusts_life_estates['description']) && count($trusts_life_estates['description'])<4){?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"
            id="add-more-residence-form"
            onclick="common_financial_addmore('trusts_life_estates','trusts-life-estates-mutisec'); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-trusts-life-estates-mutisec" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.trusts_life_estates_mutisec', '.remove-trusts-life-estates-mutisec');"></i>
      </div>
      <?php }else{?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"          
            onclick="common_financial_addmore('trusts_life_estates','trusts-life-estates-mutisec'); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-trusts-life-estates-mutisec" name=""style="position: absolute;right: 20px;"
               onclick="removeButton('.trusts_life_estates_mutisec', '.remove-trusts-life-estates-mutisec');"></i>
      </div>
      <?php }?>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Patents, copyrights,
         trademarks, trade secrets,
         and other intellectual
         property</label>
         <input type="hidden" name="patents_copyrights[id]" value="<?php echo Helper::validate_key_value('id',$patents_copyrights);?>"><input type="hidden" name="patents_copyrights[type]" value="patents_copyrights">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$patents_copyrights,1);?> required id="intellectual_property_yes"
               name="patents_copyrights[type_value]"
               onchange="getintellectualPropertyItems('yes');" value="1">
            <label for="intellectual_property_yes"
               class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$patents_copyrights,0);?> required id="intellectual_property_no"
               name="patents_copyrights[type_value]"
               onchange="getintellectualPropertyItems('no');" value="0">
            <label for="intellectual_property_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$patents_copyrights);?> pt-3" id="intellectual_property_data">
      <div class="row">
          <?php
          $i=0;
         if(!empty($patents_copyrights['description']) && is_array($patents_copyrights['description'])){
            
            for($i=0;$i<count($patents_copyrights['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.patents_copyrights",['patents_copyrights'=>$patents_copyrights,$i])
         <?php }}else{?>
         @include("client.questionnaire.property.financial.patents_copyrights")
      <?php }?>
        <?php if(!empty($patents_copyrights['description']) && is_array($patents_copyrights['description']) && count($patents_copyrights['description'])<4){?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"
            id="add-more-residence-form"
            onclick="common_financial_addmore('patents_copyrights','patents-copyrights-mutisec'); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-patents-copyrights-mutisec" name=""style="position: absolute;right: 20px;"
            onclick="removeButton('.patents_copyrights_mutisec', '.remove-patents-copyrights-mutisec');"></i>
      </div>
      <?php }else{?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"          
            onclick="common_financial_addmore('patents_copyrights','patents-copyrights-mutisec'); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-patents-copyrights-mutisec" name=""style="position: absolute;right: 20px;"
            onclick="removeButton('.patents_copyrights_mutisec', '.remove-patents-copyrights-mutisec');"></i>
      </div>
      <?php }?>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Licenses, franchises, and
         other general intangibles</label>
         <input type="hidden" name="licenses_franchises[id]" value="<?php echo Helper::validate_key_value('id',$licenses_franchises);?>"><input type="hidden" name="licenses_franchises[type]" value="licenses_franchises">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$licenses_franchises,1);?> required id="genral_intangibles_yes"
               name="licenses_franchises[type_value]"
               onchange="getGeneralIntangiblesItems('yes');" value="1">
            <label for="genral_intangibles_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$licenses_franchises,0);?> required id="genral_intangibles_no"
               name="licenses_franchises[type_value]"
               onchange="getGeneralIntangiblesItems('no');" value="0">
            <label for="genral_intangibles_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$licenses_franchises);?> pt-3" id="genral_intangibles_data">
      <div class="row">
          <?php
          $i=0;
         if(!empty($licenses_franchises['description']) && is_array($licenses_franchises['description'])){
            
            for($i=0;$i<count($licenses_franchises['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.licenses_franchises",['licenses_franchises'=>$licenses_franchises,$i])
         <?php }}else{?>
         @include("client.questionnaire.property.financial.licenses_franchises")
      <?php }?>
        <?php if(!empty($licenses_franchises['description']) && is_array($licenses_franchises['description']) && count($licenses_franchises['description'])<4){?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"
            id="add-more-residence-form"
            onclick="common_financial_addmore_with_limit('licenses_franchises',6); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-licenses-franchises-mutisec" name=""style="position: absolute;right: 20px;"
            onclick="removeButton('.licenses_franchises_mutisec', '.remove-licenses-franchises-mutisec');"></i>
      </div>
      <?php }else{?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"          
            onclick="common_financial_addmore_with_limit('licenses_franchises',6); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-licenses-franchises-mutisec" name=""style="position: absolute;right: 20px;"
            onclick="removeButton('.licenses_franchises_mutisec', '.remove-licenses-franchises-mutisec');"></i>
      </div>
      <?php }?>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Tax refunds owed to you <i class="text-c-blue">(past years including if you expect to receive a refund at the end of this year)</i></label>
         <input type="hidden" name="tax_refunds[id]" value="<?php echo Helper::validate_key_value('id',$tax_refunds);?>"><input type="hidden" name="tax_refunds[type]" value="tax_refunds">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$tax_refunds,1);?> required id="tax_refunds_yes"
               name="tax_refunds[type_value]"
               onchange="getTaxRefundsItems('yes');" value="1">
            <label for="tax_refunds_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$tax_refunds,0);?> required id="tax_refunds_no"
               name="tax_refunds[type_value]"
               onchange="getTaxRefundsItems('no');" value="0">
            <label for="tax_refunds_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <div class="col-md-12 pt-3 {{ Helper::validate_key_toggle('type_value',$tax_refunds,0) ? 'hide-data' : '' }}" id="tax_refunds_data">
      <div class="row">
         @include("client.questionnaire.property.financial.tax_refunds", ['type' => 'Federal', 'tax_refunds' => $tax_refunds, 'i' => 0])
         @include("client.questionnaire.property.financial.tax_refunds", ['type' => 'State', 'tax_refunds' => $tax_refunds, 'i' => 1])
         @include("client.questionnaire.property.financial.tax_refunds", ['type' => 'Local', 'tax_refunds' => $tax_refunds, 'i' => 2])
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Family support <i class="text-c-blue">(Such as: child support and alimony, even if you’re not currently receiving it, lump sums and back due)
</i></label>
         <input type="hidden" name="alimony_child_support[id]" value="<?php echo Helper::validate_key_value('id',$alimony_child_support);?>"><input type="hidden" name="alimony_child_support[type]" value="alimony_child_support">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$alimony_child_support,1);?> required id="alimony_child_yes"
               name="alimony_child_support[type_value]"
               onchange="getAlimonyChildItems('yes');" value="1">
            <label for="alimony_child_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$alimony_child_support,0);?> required id="alimony_child_no"
               name="alimony_child_support[type_value]"
               onchange="getAlimonyChildItems('no');" value="0">
            <label for="alimony_child_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$alimony_child_support);?> pt-3" id="alimony_child_data">
      <div class="row">
            <?php
            $i=0;
         if(!empty($alimony_child_support['description']) && is_array($alimony_child_support['description'])){
             
            
            for($i=0;$i<count($alimony_child_support['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.alimony_child_support",['alimony_child_support'=>$alimony_child_support,$i])
         <?php }}else{?>
         @include("client.questionnaire.property.financial.alimony_child_support")
      <?php }?>
        <?php if(!empty($alimony_child_support['description']) && is_array($alimony_child_support['description']) && count($alimony_child_support['description'])<4){?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"
            id="add-more-residence-form"
            onclick="common_financial_addmore_with_limit('alimony_child_support',6); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-alimony-child-support-mutisec" name=""style="position: absolute;right: 20px;"
            onclick="removeButton('.alimony_child_support_mutisec', '.remove-alimony-child-support-mutisec');"></i>
      </div>
      <?php }else{?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"          
            onclick="common_financial_addmore_with_limit('alimony_child_support',6); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-alimony-child-support-mutisec" name=""style="position: absolute;right: 20px;"
            onclick="removeButton('.alimony_child_support_mutisec', '.remove-alimony-child-support-mutisec');"></i>
      </div>
      <?php }?>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Other amounts someone
         owes you (unpaid wages,
         disability benefits, sick pay,
         vacation pay, workers'
         compensation, unpaid loans
         made by you, etc.)</label>
         <input type="hidden" name="unpaid_wages[id]" value="<?php echo Helper::validate_key_value('id',$unpaid_wages);?>"><input type="hidden" name="unpaid_wages[type]" value="unpaid_wages">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$unpaid_wages,1);?> required id="unpaid_wages_yes"
               name="unpaid_wages[type_value]"
               onchange="getUnpaidWagesItems('yes');" value="1">
            <label for="unpaid_wages_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$unpaid_wages,0);?> required id="unpaid_wages_no"
               name="unpaid_wages[type_value]"
               onchange="getUnpaidWagesItems('no');" value="0">
            <label for="unpaid_wages_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$unpaid_wages);?> pt-3" id="unpaid_wages_data">
      <div class="row">
            <?php
            $i=0;
            
         if(!empty($unpaid_wages['description']) && is_array($unpaid_wages['description'])){            
            // echo'<pre>';print_r($unpaid_wages);die;
            for($i=0;$i<count($unpaid_wages['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.unpaid_wages",['unpaid_wages'=>$unpaid_wages,$i])
         <?php }}else{?>
         @include("client.questionnaire.property.financial.unpaid_wages")
      <?php }?>
        <?php if(!empty($unpaid_wages['description']) && is_array($unpaid_wages['description']) && count($unpaid_wages['description'])<4){?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"
            id="add-more-residence-form"
            onclick="common_financial_addmore('unpaid_wages','unpaid-wages-mutisec'); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-unpaid-wages-mutisec" name=""style="position: absolute;right: 20px;"
            onclick="removeButton('.unpaid_wages_mutisec', '.remove-unpaid-wages-mutisec');"></i>
      </div>
      <?php }else{?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"          
            onclick="common_financial_addmore('unpaid_wages','unpaid-wages-mutisec'); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-unpaid-wages-mutisec" name=""style="position: absolute;right: 20px;"
            onclick="removeButton('.unpaid_wages_mutisec', '.remove-unpaid-wages-mutisec');"></i>
      </div>
      <?php }?>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Cash value of insurance
         policies (whole or universal
         life, health, disability, HSA,
         etc.) (list insurance company
         and beneficiary</label>
         <input type="hidden" name="insurance_policies[id]" value="<?php echo Helper::validate_key_value('id',$insurance_policies);?>"><input type="hidden" name="insurance_policies[type]" value="insurance_policies">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$insurance_policies,1);?> required id="insurance_policies_yes"
               name="insurance_policies[type_value]"
               onchange="getInsurancePoliciesItems('yes');" value="1">
            <label for="insurance_policies_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$insurance_policies,0);?> required id="insurance_policies_no"
               name="insurance_policies[type_value]"
               onchange="getInsurancePoliciesItems('no');" value="0">
            <label for="insurance_policies_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$insurance_policies);?> pt-3" id="insurance_policies_data">
      <div class="row">
             <?php
             $i=0;
         if(!empty($insurance_policies['description']) && is_array($insurance_policies['description'])){
            
            for($i=0;$i<count($insurance_policies['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.insurance_policies",['insurance_policies'=>$insurance_policies,$i])
         <?php }}else{?>
         @include("client.questionnaire.property.financial.insurance_policies")
      <?php }?>
        <?php if(!empty($insurance_policies['description']) && is_array($insurance_policies['description']) && count($insurance_policies['description'])<4){?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"
            id="add-more-residence-form"
            onclick="common_financial_addmore_with_limit('insurance_policies',6); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-insurance-policies-mutisec" name=""style="position: absolute;right: 20px;"
            onclick="removeButton('.insurance_policies_mutisec', '.remove-insurance-policies-mutisec');"></i>
      </div>
      <?php }else{?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"          
            onclick="common_financial_addmore_with_limit('insurance_policies',6); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-insurance-policies-mutisec" name=""style="position: absolute;right: 20px;"
            onclick="removeButton('.insurance_policies_mutisec', '.remove-insurance-policies-mutisec');"></i>
      </div>
      <?php }?>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Inheritances, estate
         distributions, and death
         benefits</label>
         <input type="hidden" name="inheritances[id]" value="<?php echo Helper::validate_key_value('id',$inheritances);?>"><input type="hidden" name="inheritances[type]" value="inheritances">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$inheritances,1);?> required id="Inheritances_benefits_yes"
               name="inheritances[type_value]"
               onchange="getInheritancesBenefitsItems('yes');" value="1">
            <label for="Inheritances_benefits_yes"
               class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$inheritances,0);?> required id="Inheritances_benefits_no"
               name="inheritances[type_value]"
               onchange="getInheritancesBenefitsItems('no');" value="0">
            <label for="Inheritances_benefits_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$inheritances);?> pt-3" id="Inheritances_benefits_data">
      <div class="row">
              <?php
              $i=0;
         if(!empty($inheritances['description']) && is_array($inheritances['description'])){
            
            for($i=0;$i<count($inheritances['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.inheritances",['inheritances'=>$inheritances,$i])
         <?php }}else{?>
         @include("client.questionnaire.property.financial.inheritances")
      <?php }?>
        <?php if(!empty($inheritances['description']) && is_array($inheritances['description']) && count($inheritances['description'])<4){?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"
            id="add-more-residence-form"
            onclick="common_financial_addmore('inheritances','inheritances-mutisec'); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-inheritances-mutisec" name=""style="position: absolute;right: 20px;"
            onclick="removeButton('.inheritances_mutisec', '.remove-inheritances-mutisec');"></i>
      </div>
      <?php }else{?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"          
            onclick="common_financial_addmore('inheritances','inheritances-mutisec'); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-inheritances-mutisec" name=""style="position: absolute;right: 20px;"
            onclick="removeButton('.inheritances_mutisec', '.remove-inheritances-mutisec');"></i>
      </div>
      <?php }?>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Personal injury claims or
         awards</label>
         <input type="hidden" name="injury_claims[id]" value="<?php echo Helper::validate_key_value('id',$injury_claims);?>"><input type="hidden" name="injury_claims[type]" value="injury_claims">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$injury_claims,1);?> required id="personal_injury_yes"
               name="injury_claims[type_value]"
               onchange="getPersonalInjuryItems('yes');" value="1">
            <label for="personal_injury_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$injury_claims,0);?> required id="personal_injury_no"
               name="injury_claims[type_value]"
               onchange="getPersonalInjuryItems('no');" value="0">
            <label for="personal_injury_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$injury_claims);?> pt-3" id="personal_injury_data">
      <div class="row">
               <?php
               $i=0;
         if(!empty($injury_claims['description']) && is_array($injury_claims['description'])){
            
            for($i=0;$i<count($injury_claims['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.injury_claims",['injury_claims'=>$injury_claims,$i])
         <?php }}else{?>
         @include("client.questionnaire.property.financial.injury_claims")
      <?php }?>
        <?php if(!empty($injury_claims['description']) && is_array($injury_claims['description']) && count($injury_claims['description'])<4){?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"
            id="add-more-residence-form"
            onclick="common_financial_addmore_with_limit('injury_claims',6); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-injury-claims-mutisec" name=""style="position: absolute;right: 20px;"
            onclick="removeButton('.injury_claims_mutisec', '.remove-injury-claims-mutisec');"></i>
      </div>
      <?php }else{?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"          
            onclick="common_financial_addmore_with_limit('injury_claims',6); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-injury-claims-mutisec" name=""style="position: absolute;right: 20px;"
            onclick="removeButton('.injury_claims_mutisec', '.remove-injury-claims-mutisec');"></i>
      </div>
      <?php }?>
      </div>
   </div>
   <!-- Condition data End-->
</div>
{{--
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Lawsuits or claims against
         anyone for anything</label>
         <input type="hidden" name="lawsuits[id]" value="<?php echo Helper::validate_key_value('id',$lawsuits);?>"><input type="hidden" name="lawsuits[type]" value="lawsuits">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$lawsuits,1);?> required id="Lawsuits_yes"
               name="lawsuits[type_value]"
               onchange="getLawsuitsItems('yes');" value="1">
            <label for="Lawsuits_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$lawsuits,0);?> required id="Lawsuits_no"  name="lawsuits[type_value]"
               onchange="getLawsuitsItems('no');" value="0">
            <label for="Lawsuits_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$lawsuits);?> pt-3" id="Lawsuits_data">
      <div class="row">
                <?php
                $i=0;
         if(!empty($lawsuits['description']) && is_array($lawsuits['description'])){
            
            for($i=0;$i<count($lawsuits['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.lawsuits",['lawsuits'=>$lawsuits,$i])
         <?php }}else{?>
         @include("client.questionnaire.property.financial.lawsuits")
      <?php }?>
        <?php if(!empty($lawsuits['description']) && is_array($lawsuits['description']) && count($lawsuits['description'])<4){?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"
            id="add-more-residence-form"
            onclick="common_financial_addmore('lawsuits'); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
      </div>
      <?php }else{?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"          
            onclick="common_financial_addmore('lawsuits'); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
      </div>
      <?php }?>
      </div>
   </div>
   <!-- Condition data End-->
</div>--}}
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">All other claims contingent and unliquidated claims of any nature</label>
         <input type="hidden" name="other_claims[id]" value="<?php echo Helper::validate_key_value('id',$other_claims);?>"><input type="hidden" name="other_claims[type]" value="other_claims">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$other_claims,1);?> required id="other_claims_yes"
               name="other_claims[type_value]"
               onchange="getOtherClaimsItems('yes');" value="1">
            <label for="other_claims_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$other_claims,0);?> required id="other_claims_no"
               name="other_claims[type_value]"
               onchange="getOtherClaimsItems('no');" value="0">
            <label for="other_claims_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$other_claims);?> pt-3" id="other_claims_data">
      <div class="row">
                 <?php
                 $i=0;
         if(!empty($other_claims['description']) && is_array($other_claims['description'])){
            
            for($i=0;$i<count($other_claims['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.other_claims",['other_claims'=>$other_claims,$i])
         <?php }}else{?>
         @include("client.questionnaire.property.financial.other_claims")
      <?php }?>
        <?php if(!empty($other_claims['description']) && is_array($other_claims['description']) && count($other_claims['description'])<4){?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"
            id="add-more-residence-form"
            onclick="common_financial_addmore('other_claims','other-claims-mutisec'); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-claims-mutisec" name=""style="position: absolute;right: 20px;"
            onclick="removeButton('.other_claims_mutisec', '.remove-other-claims-mutisec');"></i>
      </div>
      <?php }else{?>
       <div class="col-md-12 add-more-btn">
         <button class="btn btn-primary shadow-2 rounded-0"          
            onclick="common_financial_addmore('other_claims','other-claims-mutisec'); return false;"><i
               class="feather icon-plus mr-0"></i> Add
            More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-claims-mutisec" name=""style="position: absolute;right: 20px;"
            onclick="removeButton('.other_claims_mutisec', '.remove-other-claims-mutisec');"></i>
      </div>
      <?php }?>
      </div>
   </div>
   <!-- Condition data End-->
</div>
<div class="form-main mt-3 w-100">
   <div class="col-md-12">
      <div class="form-group">
         <label class="d-block">Any other financial asset not listed</label>
         <input type="hidden" name="other_financial[id]" value="<?php echo Helper::validate_key_value('id',$other_financial);?>"><input type="hidden" name="other_financial[type]" value="other_financial">
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$other_financial,1);?> required id="financial_asset_yes"
               name="other_financial[type_value]"
               onchange="getFinancialAssetItems('yes');" value="1">
            <label for="financial_asset_yes" class="cr">Yes</label>
         </div>
         <div class="d-inline radio-primary">
            <input type="radio" <?php echo Helper::validate_key_toggle('type_value',$other_financial,0);?> required id="financial_asset_no"
               name="other_financial[type_value]"
               onchange="getFinancialAssetItems('no');" value="0">
            <label for="financial_asset_no" class="cr">No</label>
         </div>
      </div>
   </div>
   <!-- Condition data -->
   <div class="col-md-12 <?php echo Helper::key_hide_show_v('type_value',$other_financial);?> pt-3" id="financial_asset_data">
      <div class="row">
      <?php
      $i=0; 
      if(!empty($other_financial['description']) && is_array($other_financial['description'])){
                       
         for($i=0;$i<count($other_financial['description']);$i++){
      ?>
      @include("client.questionnaire.property.financial.other_financial",['other_financial'=>$other_financial,$i])
      <?php }
      }else{?>
         @include("client.questionnaire.property.financial.other_financial")
      <?php }?>
         <div class="col-md-12 add-more-btn">
            <button class="btn btn-primary shadow-2 rounded-0"
               id="add-more-residence-form"
               onclick="common_financial_addmore('other_financial'); return false;"><i
                  class="feather icon-plus mr-0"></i> Add
               More </button>
            <i class="fas fa-trash fa-lg mb-2 mt-2 remove-other-names remove-btn text-danger cursor-pointer" style="position: absolute;right: 20px;"
                        onclick="remove_clone_box('other_financial_mutisec')"></i><br/>
         </div>
      </div>
   </div>
   <!-- Condition data End-->
</div>

<hr class="w-100" />

<div class="form-group">
    <div class="col-md-12">
        <div class="form-group">
            <label class="d-block">Do you or your spouse own or have any legal or equitable interest in any business-related property?</label>
            <input type="hidden" name="is_business_property[id]" value="<?php echo Helper::validate_key_value('id',$isBusinessProperty);?>">
            <input type="hidden" name="is_business_property[type]" value="is_business_property">
            <div class="d-inline radio-primary">
                <input type="radio" {{ Helper::validate_key_toggle('type_value',$isBusinessProperty,1) ? 'checked' : '' }} required id="business_property_yes"
                    name="is_business_property[type_value]" value="1">
                <label for="business_property_yes" class="cr">Yes</label>
            </div>
            <div class="d-inline radio-primary">
                <input type="radio" {{ Helper::validate_key_toggle('type_value',$isBusinessProperty,0) ? 'checked' : '' }} required id="business_property_no"
                    name="is_business_property[type_value]" value="0">
                <label for="business_property_no" class="cr">No</label>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-12">
        <div class="form-group">
            <label class="d-block">Do you own or have any legal or equitable interest in any farm or commercial fishing-related property?</label>
            <input type="hidden" name="is_farm_property[id]" value="<?php echo Helper::validate_key_value('id',$isFarmProperty);?>">
            <input type="hidden" name="is_farm_property[type]" value="is_farm_property">
            <div class="d-inline radio-primary">
                <input type="radio" {{ Helper::validate_key_toggle('type_value',$isFarmProperty,1) ? 'checked' : '' }} required id="farm_property_yes"
                    name="is_farm_property[type_value]" value="1">
                <label for="farm_property_yes" class="cr">Yes</label>
            </div>
            <div class="d-inline radio-primary">
                <input type="radio" {{ Helper::validate_key_toggle('type_value',$isFarmProperty,0) ? 'checked' : '' }} required id="farm_property_no"
                    name="is_farm_property[type_value]" value="0">
                <label for="farm_property_no" class="cr">No</label>
            </div>
        </div>
    </div>
</div>