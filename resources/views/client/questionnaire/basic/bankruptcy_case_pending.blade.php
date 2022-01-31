<div class="row addOther_bankruptcypending_clone">
<?php $i = !isset($i) ? 0 : $i; ?>
        <div class="col-md-6">

            <div class="form-group">

                <label>Name of debtor</label>

                <input type="case_filed_state" class="form-control debtor_name required" name="part3[any_bankruptcy_cases_pending_data][debator_name][<?php echo $i; ?>]"

                    placeholder="Name of Debtor" value="<?php echo Helper::validate_key_loop_value('debator_name',$BasicInfo_PartD,$i);?>">

            </div>

        </div>

        <div class="col-md-6">

            <div class="form-group">

                <label>Relationship to you</label>

                <input type="text" class="form-control relanship required" name="part3[any_bankruptcy_cases_pending_data][your_relationship][<?php echo $i; ?>]" placeholder="Relationship to you" value="<?php echo Helper::validate_key_loop_value('your_relationship',$BasicInfo_PartD,$i);?>">

            </div>

        </div>

        <div class="col-md-6">

            <div class="form-group">

                <label>Case Number</label>

                <input type="text" class="form-control case_nmbr required" name="part3[any_bankruptcy_cases_pending_data][partner_case_number][<?php echo $i; ?>]" placeholder="Case Number" value="<?php echo Helper::validate_key_loop_value('partner_case_number',$BasicInfo_PartD,$i);?>">

            </div>

        </div>

        <div class="col-md-6">

            <div class="form-group">

                <label>Date Filed</label>

                <input type="text" class="form-control date-fild required"  name="part3[any_bankruptcy_cases_pending_data][partner_date_filed][<?php echo $i; ?>]" placeholder="Date Filed" value="<?php echo Helper::validate_key_loop_value('partner_date_filed',$BasicInfo_PartD,$i);?>">

            </div>

        </div>

        <div class="col-md-6">

            <div class="form-group">

                <label>District if (known):</label>

                <input type="text" class="form-control dsitrct required" name="part3[any_bankruptcy_cases_pending_data][district][<?php echo $i; ?>]" placeholder="District" value="<?php echo Helper::validate_key_loop_value('district',$BasicInfo_PartD,$i);?>">

            </div>

        </div>
    </div>