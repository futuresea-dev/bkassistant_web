
<div class="col-md-12 retirement_pension_mutisec">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
               <select class="form-control retirement_pension_type_of_account" name="retirement_pension[data][type_of_account][<?=$i?>]" required>
                    <option selected disabled hidden>Type of account</option>
                    <option value="401" @if($retirement_pension && array_key_exists('type_of_account', $retirement_pension) && $retirement_pension['type_of_account'][$i] == '401') selected @endif>401K</option>
                    <option value="pension" @if($retirement_pension && array_key_exists('type_of_account', $retirement_pension) && $retirement_pension['type_of_account'][$i] == 'pension') selected @endif>Pension plan</option>
                    <option value="ira" @if($retirement_pension && array_key_exists('type_of_account', $retirement_pension) && $retirement_pension['type_of_account'][$i] == 'ira') selected @endif>IRA</option>
                    <option value="keogh" @if($retirement_pension && array_key_exists('type_of_account', $retirement_pension) && $retirement_pension['type_of_account'][$i] == 'keogh') selected @endif>Keogh</option>
                    <option value="other" @if($retirement_pension && array_key_exists('type_of_account', $retirement_pension) && $retirement_pension['type_of_account'][$i] == 'other') selected @endif>Other retirement account</option>
                  </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input name="retirement_pension[data][description][<?=$i?>]" class="form-control required retirement_pension_description" placeholder="Institution name"
                    value="{{ Helper::validate_key_loop_value('description',$retirement_pension,$i) }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">$</span>
                    </div>
                    <input type="number" name="retirement_pension[data][property_value][{{$i}}]" class="form-control required retirement_pension_property_value" placeholder="Value" value="{{ Helper::validate_key_loop_value('property_value',$retirement_pension,$i) }}">
                </div>
            </div>
        </div>
    </div>
</div>
