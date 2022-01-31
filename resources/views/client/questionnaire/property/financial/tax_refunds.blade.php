<div class="col-md-12 tax_refunds_mutisec">
    <div class="row">
        <div class="col-md-7">
            <div class="form-group">
                <label>{{ $type }}</label>
                <input name="tax_refunds[data][description][{{ $i }}]" class="form-control tax_refunds_description" 
                    value="{{ $tax_refunds && array_key_exists('description', $tax_refunds) ? $tax_refunds['description'][$i] : '' }}">
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label>Value of Property</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">$</span>
                    </div>
                    <input type="text" name="tax_refunds[data][property_value][{{$i}}]" class="form-control tax_refunds_property_value" placeholder="Property value" 
                        value="{{ Helper::validate_key_loop_value('property_value',$tax_refunds,$i) }}">
                </div>
            </div>
        </div>
    </div>
</div>