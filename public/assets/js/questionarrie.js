function submitFormSectionA() {
    document.getElementById('section1-tab').classList.remove("active");
    document.getElementById('section2-tab').classList.add("active");

    document.getElementById('section1').classList.remove("active", "show");
    document.getElementById('section2').classList.add("active", "show");

}
var num = 0;


function changeStep(obj) {
    var marital_status = $('input[name="part1[marital_status]"]:checked').val();
    if (marital_status == 1 || marital_status == 5) {
        var second_parent = $(obj).parents('form').parent().parent().next();
        if ($(second_parent).attr('id') == 'basic-info-part-b') {
            $(second_parent).next().removeClass('hidestep');
            $(obj).parents('form').parent().parent().addClass('hidestep');
        } else {
            $(obj).parents('form').parent().parent().next('.hidestep').removeClass('hidestep');
            $(obj).parents('form').parent().parent().addClass('hidestep');
        }
    } else {
        $(obj).parents('form').parent().parent().next('.hidestep').removeClass('hidestep');
        $(obj).parents('form').parent().parent().addClass('hidestep');
    }
}
// Hidden Data
// Section A
function current_employed_obj(value) {
    if (value == 'yes') {
        document.getElementById('current_employed_obj_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('current_employed_obj_data').classList.add("hide-data");
    }
}

function current_spouse_employed_obj(value) {
    if (value == 'yes') {
        document.getElementById('current_spouse_employed_obj_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('current_spouse_employed_obj_data').classList.add("hide-data");
    }
}

function getHiddenData(value) {
    if (value == 'yes') {
        document.getElementById('condition-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('condition-data').classList.add("hide-data");
    }
}

function getspouse_HiddenData(value) {
    if (value == 'yes') {
        document.getElementById('spouse-condition-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('spouse-condition-data').classList.add("hide-data");
    }
}

function getHiddenData730Days(value) {
    if (value == 'no') {
        document.getElementById('least_730_condition_data').classList.remove("hide-data");
    } else if (value == 'yes') {
        document.getElementById('least_730_condition_data').classList.add("hide-data");
    }
}

function getDiffMailAddress(value) {
    if (value == 'yes') {
        document.getElementById('different_mailing_addresss').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('different_mailing_addresss').classList.add("hide-data");
    }
}

function get_eviction_pending(value) {
    if (value == 'yes') {
        document.getElementById('get_eviction_pending').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('get_eviction_pending').classList.add("hide-data");
    }
}

function get_used_business_ein(value) {
    if (value == 'yes') {
        document.getElementById('get_used_business_ein').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('get_used_business_ein').classList.add("hide-data");
    }
}
//// Section B  ////
// Steps
function submitFormSectionB() {
    document.getElementById('section2-tab').classList.remove("active");
    document.getElementById('section3-tab').classList.add("active");

    document.getElementById('section2').classList.remove("active", "show");
    document.getElementById('section3').classList.add("active", "show");
}

var sectionTwoNum = 0;

function changeSectionBStep(obj) {
    // console.log($(obj).parents('form').parent().attr('id'));
    $(obj).parents('form').parent().next('.hidestep').removeClass('hidestep');
    $(obj).parents('form').parent().addClass('hidestep');
}

function addOther_names() {
    var clnln = $(document).find(".other_name_frm").length;
    if (clnln > 2) {
        alert("You can only insert 3 properties.");
        return false;
    }
    if (clnln == 1) {
        $('.remove-btn').show();
        var itm = $(document).find(".other_name_frm").last();
        var index_val = $(itm).index() + 1;
        var cln = $(itm).clone();
        var any_other_fname = cln.find('.any_other_fname');
        var any_other_mname = cln.find('.any_other_mname');
        var any_other_lname = cln.find('.any_other_lname');
        $(any_other_fname).each(function() {
            $(this).attr('name', 'part1[any_other_name][name][' + index_val + ']');
        });
        $(any_other_mname).each(function() {
            $(this).attr('name', 'part1[any_other_name][middle_name][' + index_val + ']');
        });
        $(any_other_lname).each(function() {
            $(this).attr('name', 'part1[any_other_name][last_name][' + index_val + ']');
        });
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        $(itm).after(cln);
    } else {
        $('.remove-btn').show();
        var itm = $(document).find(".other_name_frm").last();
        var index_val = $(itm).index() + 1;
        var cln = $(itm).clone();
        var any_other_fname = cln.find('.any_other_fname');
        var any_other_mname = cln.find('.any_other_mname');
        var any_other_lname = cln.find('.any_other_lname');
        $(any_other_fname).each(function() {
            $(this).attr('name', 'part1[any_other_name][name][' + index_val + ']');
        });
        $(any_other_mname).each(function() {
            $(this).attr('name', 'part1[any_other_name][middle_name][' + index_val + ']');
        });
        $(any_other_lname).each(function() {
            $(this).attr('name', 'part1[any_other_name][last_name][' + index_val + ']');
        });
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        $(itm).after(cln);
    }
}

function removeOtherNames() {
    var clnln = $(document).find(".other_name_frm").length;
    if (clnln > 1) {
        $(document).find(".other_name_frm").last().remove();
    }
    if (clnln == 2) {
        $('.remove-btn').hide();
    }
}

function removeOther() {
    var clnln = $(document).find(".spouse_other_name_frm").length;
    if (clnln > 1) {
        $(document).find(".spouse_other_name_frm").last().remove();
    }
    if (clnln == 2) {
        $('.remove-other-names').hide();
    }
}


/*my sumil code*/

function addOther_bankruptcy_clone() {
    var clnln = $(document).find(".bankruptcy_clone").length;
    if (clnln > 2) {
        alert("You can only insert 3 item.");
        return false;
    } else {
        $('.remove_bankruptcy_clone').show();
        var itm = $(document).find(".bankruptcy_clone").last();
        var index_val = $(itm).index() + 1;

        var remove_btn_index = itm.find('button.remove_bankruptcy_clone').data('index');
        if (remove_btn_index > 0) {
            itm.find('button.remove_bankruptcy_clone').hide();
        }

        var cln = $(itm).clone();
        var case_filed_state = cln.find('.case_filed_state');
        var case_number = cln.find('.case_number');
        var date_filed = cln.find('.date_filed');
        var date_discharge = cln.find('.date_discharge');
        var is_case_dismissed_option = cln.find('.is_case_dismissed_option');
        var dismissed_date = cln.find('.dismissed_date');

        var filed_case_dismissed_data = cln.find('.dismiss_data_class');

        cln.find('button.remove_bankruptcy_clone').attr('data-index', index_val);
        cln.find('button.remove_bankruptcy_clone').show();

        $(filed_case_dismissed_data).each(function() {
            $(this).removeAttr('id');
            $(this).attr('id', 'filed_case_dismissed_data' + index_val);
        });

        $(case_filed_state).each(function() {
            $(this).attr('name', 'part3[case_filed_state][' + index_val + ']');
        });
        $(case_number).each(function() {
            $(this).attr('name', 'part3[case_number][' + index_val + ']');
        });
        $(date_filed).each(function() {
            $(this).attr('name', 'part3[date_filed][' + index_val + ']');
        });
        $(date_discharge).each(function() {
            $(this).attr('name', 'part3[date_discharge][' + index_val + ']');
        });
        $(is_case_dismissed_option).each(function() {

            $(this).attr('name', 'part3[is_case_dismissed][' + index_val + ']');
            cln.find('input[type="text"]').val('');
            cln.find('input[type="number"]').val('');
            cln.find('select').val('');
            var comonval = $(this).val();
            if (comonval == 1) {
                $(this).attr('onchange', 'common_toggle_fn("yes","filed_case_dismissed_data' + index_val + '")');
            }
            if (comonval == 0) {
                $(this).attr('onchange', 'common_toggle_fn("no","filed_case_dismissed_data' + index_val + '")');
            }

        });

        $(dismissed_date).each(function() {
            $(this).attr('name', 'part3[dismissed_date][' + index_val + ']');
        });

        $(itm).after(cln);
        $('input[name="part3[is_case_dismissed][' + index_val + ']"]').trigger('change');

    }
}
// Shahid Code
function addOther_bankruptcybefore_clone() {
    var clnln = $(document).find(".any_bankruptcy_filed_before_data").length;
    if (clnln > 2) {
        alert("You can only insert 3 item.");
        return false;
    } else {
        var itm = $(document).find(".any_bankruptcy_filed_before_data").last();

        var index_val = $(itm).index() + 1;

        var remove_btn_index = itm.find('button.bankruptcybefore_clone').data('index');
        if (remove_btn_index > 0) {
            itm.find('button.bankruptcybefore_clone').hide();
        }

        var cln = $(itm).clone();
        var case_name = cln.find('.case_name');
        var case_numbers = cln.find('.case_numbers');
        var data_field = cln.find('.data_field');
        var date_discharged = cln.find('.date_discharged');
        var district_if_known = cln.find('.district_if_known');
        var dismissed_date = cln.find('.dismissed_date');

        var filed_case_dismissed_data = cln.find('.dismiss_data_class');
        
        cln.find('button.bankruptcybefore_clone').attr('data-index', index_val);
        cln.find('button.bankruptcybefore_clone').show();

        $(filed_case_dismissed_data).each(function() {
            $(this).removeAttr('id');
            $(this).attr('id', 'filed_case_dismissed_data' + index_val);
        });
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(case_name).each(function() {
            $(this).attr('name', 'part3[any_bankruptcy_filed_before_data][case_name][' + index_val + ']');
        });
        $(case_numbers).each(function() {
            $(this).attr('name', 'part3[any_bankruptcy_filed_before_data][case_numbers][' + index_val + ']');
        });
        $(data_field).each(function() {
            $(this).attr('name', 'part3[any_bankruptcy_filed_before_data][data_field][' + index_val + ']');
        });
        $(date_discharged).each(function() {
            $(this).attr('name', 'part3[any_bankruptcy_filed_before_data][date_discharged][' + index_val + ']');
        });


        $(district_if_known).each(function() {
            $(this).attr('name', 'part3[any_bankruptcy_filed_before_data][district_if_known][' + index_val + ']');
        });

        $(itm).after(cln);
        $('.remove_bankruptcybefore_clone').show();

    }
}
// Shahid Code pending
function addOther_bankruptcypending_clone() {
    var clnln = $(document).find(".addOther_bankruptcypending_clone").length;
    if (clnln > 2) {
        alert("You can only insert 3 item.");
        return false;
    } else {
        var itm = $(document).find(".addOther_bankruptcypending_clone").last();

        var index_val = $(itm).index() + 1;

        var remove_btn_index = itm.find('button.stepfourdelete').data('index');
        if (remove_btn_index > 0) {
            itm.find('button.remove_bankruptcypending_clone').hide();
        }

        var cln = $(itm).clone();
        var debtor_name = cln.find('.debtor_name');
        var relationship = cln.find('.relanship');
        var case_number = cln.find('.case_nmbr');
        var date_filed = cln.find('.date-fild');
        var distrct = cln.find('.dsitrct');

        cln.find('button.remove_bankruptcypending_clone').attr('data-index', index_val);
        cln.find('button.remove_bankruptcypending_clone').show();

        $(debtor_name).each(function() {
            $(this).attr('name', 'part3[any_bankruptcy_cases_pending_data][debator_name][' + index_val + ']');
        });
        $(relationship).each(function() {
            $(this).attr('name', 'part3[any_bankruptcy_cases_pending_data][your_relationship][' + index_val + ']');
        });
        $(case_number).each(function() {
            $(this).attr('name', 'part3[any_bankruptcy_cases_pending_data][partner_case_number][' + index_val + ']');
        });
        $(date_filed).each(function() {
            $(this).attr('name', 'part3[any_bankruptcy_cases_pending_data][partner_date_filed][' + index_val + ']');
        });
        $(distrct).each(function() {
            $(this).attr('name', 'part3[any_bankruptcy_cases_pending_data][district][' + index_val + ']');
        });
    
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(itm).after(cln);
        $('.remove_bankruptcypending_clone').show();

    }
}

// remove_bankruptcy_clone
$(document).on('click', '.remove_bankruptcy_clone', function() {
    var clnln = $(".bankruptcy_clone").length;
    if (clnln > 1) {
        $(".bankruptcy_clone").last().remove();
    }
    if (clnln == 2) {
        $('.remove_bankruptcy_clone').hide();
    }
});

//step2 part3
$(document).on('click', '.remove_bankruptcybefore_clone', function() {
    var clnln = $(".any_bankruptcy_filed_before_data").length;
    if (clnln > 1) {
        $(".any_bankruptcy_filed_before_data").last().remove();
    }
    if (clnln == 2) {
        $(this).hide();
    }
});


//pending fields deleteion

$(document).on('click', '.remove_bankruptcypending_clone', function() {
    var clnln = $(".addOther_bankruptcypending_clone").length;
    var itm = $(document).find(".addOther_bankruptcypending_clone").last();
    if (clnln > 1) {
        itm.remove();
    }
    if (clnln == 2) {
        $('.remove_bankruptcypending_clone').hide();
    }
});

//step 4 code

function stepfour() {
    let indexR = 1;
    var clnln = $(document).find(".stepfour_clone").length;
    if (clnln > 5) {
        alert("You can only insert 6 item.");
        return false;
    } else {
        var itm = $(document).find(".stepfour_clone").last();
        var index_val = $(itm).index();


        var cln = $(itm).clone();



        var businessname = cln.find('.own_business_name');
        var case_number = cln.find('.own_ein_no');
        var own_business_selection = cln.find('.own_business_selection');
        
        cln.find('select').val('');

        $(businessname).each(function() {
            $(this).attr('name', 'used_business_ein_data[own_business_name][' + index_val + ']');
        });

        $(own_business_selection).each(function() {
            $(this).attr('name', 'used_business_ein_data[own_business_selection][' + index_val + ']');
        });
        $(case_number).each(function() {
            $(this).attr('name', 'used_business_ein_data[own_ein_no][' + index_val + ']');
        });


        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        $(itm).after(cln);
        indexR++;

    }
}

var count2 = 3;
$(document).on('click', '.step5-yes', function() {
    $('#stepp5').show();
});
$(document).on('click', '.step5-No', function() {
    $('#stepp5').hide();
});

//step4 delete

$(document).on('click', '.stepfourdelete', function() {
    var clnln = $(".stepfour_child_div").length;
    var itm = $(document).find(".stepfour_child_div").last();
    if (clnln > 1) {
        itm.remove();
    }
    if (clnln == 2) {
        $('.stepfourdelete').hide();
    }
});
/*over*/

function spouse_addOther_names() {
    var clnln = $(document).find(".spouse_other_name_frm").length;
    if (clnln > 2) {
        alert("You can only insert 3 properties.");
        return false;
    } else {
        $('.remove-other-names').show();
        var itm = $(document).find(".spouse_other_name_frm").last();
        var index_val = $(itm).index() + 1;
        var cln = $(itm).clone();
        var spouse_other_name = cln.find('.spouse_other_name');
        var spouse_other_middle_name = cln.find('.spouse_other_middle_name');
        var spouse_other_last_name = cln.find('.spouse_other_last_name');
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(spouse_other_name).each(function() {
            $(this).attr('name', 'part2[spouse_other_name][' + index_val + ']');
        });
        $(spouse_other_middle_name).each(function() {
            $(this).attr('name', 'part2[spouse_other_middle_name][' + index_val + ']');
        });
        $(spouse_other_last_name).each(function() {
            $(this).attr('name', 'part2[spouse_other_last_name][' + index_val + ']');
        });
        $(itm).after(cln);
    }
}

function addResidenceForm() {
    var clnln = $(document).find(".residence_form").length;
    if (clnln > 4) {
        alert("You can only insert 5 properties.");
        return false;
    } else {
        var itm = $(document).find(".residence_form").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone();
        var owned_by = cln.find('.property_owned_by');
        var address = cln.find('.address');
        var mortgage_name = cln.find('.mortgage_name');
        var not_primary_address = cln.find('.not_primary_address');
        var mortgage_address = cln.find('.mortgage_address');
        var mortgage_city = cln.find('.mortgage_city');
        var mortgage_state = cln.find('.mortgage_state');
        var mortgage_zip = cln.find('.mortgage_zip');
        var mortgage_county = cln.find('.mortgage_county');
        var mortgage_loan = cln.find('.mortgage_loan');
        var mortgage_loan_rate = cln.find('.mortgage_loan_rate');
        var payments_left = cln.find('.payments_left');
        var estimated_property_value = cln.find('.estimated_property_value');

        var monthly_payment = cln.find('.monthly_payment');
        var property = cln.find('.property');
        var taxes_insurance = cln.find('.taxes_insurance');
        var currently_lived = cln.find('.currently_lived');

        var retain_above_property = cln.find('.retain_above_property');

        
        //home loan section
        var loan_own_type_property = cln.find('.loan_own_type_property');
        var vehicle_amount_own = cln.find('.vehicle_amount_own');
        var vehicle_account_number = cln.find('.vehicle_account_number');
        var vehicle_debt_incurred_date = cln.find('.vehicle_debt_incurred_date');
        var vehicle_creditor_name = cln.find('.vehicle_creditor_name');
        var vehicle_creditor_name_addresss = cln.find('.vehicle_creditor_name_addresss');
        var vehicle_creditor_city = cln.find('.vehicle_creditor_city');
        var vehicle_creditor_state = cln.find('.vehicle_creditor_state');
        var vehicle_creditor_zip = cln.find('.vehicle_creditor_zip');
        var vehicle_payment_tax_insurance = cln.find('.vehicle_payment_tax_insurance');
        var vehicle_monthly_payment = cln.find('.vehicle_monthly_payment');
        var vehicle_payment_remaining = cln.find('.vehicle_payment_remaining');
        var vehicle_debt_owned_by = cln.find('.vehicle_debt_owned_by');
        var vehicle_codebtor = cln.find('.vehicle_codebtor');
        var vehicle_codebtor_info = cln.find('.vehicle_codebtor_info');

        $(property).each(function() {
            $(this).attr('id', $(this).attr('id') + index_val);
            $(this).attr('name', 'property_resident[property][' + index_val + ']');
            $(this).next('label').attr('for', $(this).attr('id'));
        });
        $(address).each(function() {
            $(this).attr('name', 'property_resident[address][' + index_val + ']');
        });
        $(mortgage_name).each(function() {
            $(this).attr('name', 'property_resident[mortgage_name][' + index_val + ']');
        });
        $(not_primary_address).each(function() {
            $(this).attr('name', 'property_resident[not_primary_address][' + index_val + ']');
        });
        $(mortgage_address).each(function() {
            $(this).attr('name', 'property_resident[mortgage_address][' + index_val + ']');
        });
        $(mortgage_city).each(function() {
            $(this).attr('name', 'property_resident[mortgage_city][' + index_val + ']');
        });
        $(mortgage_state).each(function() {
            $(this).attr('name', 'property_resident[mortgage_state][' + index_val + ']');
        });
        $(mortgage_zip).each(function() {
            $(this).attr('name', 'property_resident[mortgage_zip][' + index_val + ']');
        });
        $(mortgage_county).each(function() {
            $(this).attr('name', 'property_resident[mortgage_county][' + index_val + ']');
        });
        $(mortgage_loan).each(function() {
            $(this).attr('name', 'property_resident[mortgage_loan][' + index_val + ']');
        });
        $(mortgage_loan_rate).each(function() {
            $(this).attr('name', 'property_resident[mortgage_loan_rate][' + index_val + ']');
        });
        $(monthly_payment).each(function() {
            $(this).attr('name', 'property_resident[monthly_payment][' + index_val + ']');
        });
        $(payments_left).each(function() {
            $(this).attr('name', 'property_resident[payments_left][' + index_val + ']');
        });
        $(estimated_property_value).each(function() {
            $(this).attr('name', 'property_resident[estimated_property_value][' + index_val + ']');
        });
        $(taxes_insurance).each(function() {
            $(this).attr('id', $(this).attr('id') + index_val);
            $(this).attr('name', 'property_resident[taxes_insurance][' + index_val + ']');
            $(this).next('label').attr('for', $(this).attr('id'));
        });
        $(currently_lived).each(function() {
            debugger
            $(this).attr('id', $(this).attr('id') + '_' + index_val);
            
            $(this).attr('name', 'property_resident[currently_lived][' + index_val + ']');
            $(this).next('label').attr('for', $(this).attr('id'));
        });
        $(owned_by).each(function() {
            $(this).attr('id', $(this).attr('id') + index_val);
            $(this).attr('name', 'property_resident[property_owned_by][' + index_val + ']');
            $(this).next('label').attr('for', $(this).attr('id'));
        });
        //Home loan
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        
        $(vehicle_amount_own).each(function() {
            $(this).attr('name', 'property_resident[home_car_loan][amount_own][' + index_val + ']');
        });
        $(vehicle_account_number).each(function() {
            $(this).attr('name', 'property_resident[home_car_loan][account_number][' + index_val + ']');
        });
        $(vehicle_debt_incurred_date).each(function() {
            $(this).attr('name', 'property_resident[home_car_loan][debt_incurred_date][' + index_val + ']');
        });
        $(vehicle_creditor_name).each(function() {
            $(this).attr('name', 'property_resident[home_car_loan][creditor_name][' + index_val + ']');
        });
        $(vehicle_creditor_name_addresss).each(function() {
            $(this).attr('name', 'property_resident[home_car_loan][creditor_name_addresss][' + index_val + ']');
        });
        $(vehicle_creditor_city).each(function() {
            $(this).attr('name', 'property_resident[home_car_loan][creditor_city][' + index_val + ']');
        });
        $(vehicle_creditor_state).each(function() {
            $(this).attr('name', 'property_resident[home_car_loan][creditor_state][' + index_val + ']');
        });
        $(vehicle_creditor_zip).each(function() {
            $(this).attr('name', 'property_resident[home_car_loan][creditor_zip][' + index_val + ']');
        });
        $(vehicle_payment_tax_insurance).each(function() {
            $(this).attr('name', 'property_resident[home_car_loan][payment_tax_insurance][' + index_val + ']');
        });
        $(vehicle_monthly_payment).each(function() {
            $(this).attr('name', 'property_resident[home_car_loan][monthly_payment][' + index_val + ']');
        });
        $(vehicle_payment_remaining).each(function() {
            $(this).attr('name', 'property_resident[home_car_loan][payment_remaining][' + index_val + ']');
        });
        $(vehicle_debt_owned_by).each(function() {
            $(this).attr('name', 'property_resident[home_car_loan][debt_owned_by][' + index_val + ']');
        });
        $(vehicle_codebtor).each(function() {
            $(this).attr('id', $(this).attr('id') + index_val);
            $(this).attr('name', 'property_resident[home_car_loan][codebtor][' + index_val + ']');
            $(this).next('label').attr('for', $(this).attr('id'));
        });
        $(vehicle_codebtor_info).each(function() {
            $(this).attr('name', 'property_resident[home_car_loan][codebtor_info][' + index_val + ']');
        });
        $(loan_own_type_property).each(function() {
            $(this).attr('id', $(this).attr('id') + index_val);
            $(this).attr('name', 'property_resident[loan_own_type_property][' + index_val + ']');
            $(this).next('label').attr('for', $(this).attr('id'));
        });
        $(retain_above_property).each(function() {
            $(this).attr('id', $(this).attr('id') + index_val);
            $(this).attr('name', 'property_resident[retain_above_property][' + index_val + ']');
            $(this).next('label').attr('for', $(this).attr('id'));
        });

        
        $(itm).after(cln);
    }
}

// Hidden Data
function getHiddenOwnedByYou(value) {
    if (value == 'you') {
        document.getElementById('condition-data').classList.remove("hide-data");
    } else if (value == 'spouse') {
        document.getElementById('condition-data').classList.add("hide-data");
    } else if (value == 'joint') {
        document.getElementById('condition-data').classList.add("hide-data");
    } else if (value == 'other') {
        document.getElementById('condition-data').classList.add("hide-data");
    }
}

function addListNatureBusinessForm(){

    var clnln = $(document).find(".list_nature_business_data").length;
    if (clnln > 5) {
        alert("You can only insert 6 business.");
        return false;
    } else {


        var itm = $(document).find(".list_nature_business_data").last();
        var index_val = $(itm).index();
        index_val = index_val +1;
        var cln = $(itm).clone();
        
        var name = cln.find('.name');
        var street_number = cln.find('.street_number');
        var city = cln.find('.city');
        var state = cln.find('.state');
         
        var zip = cln.find('.zip');
        var business_nature = cln.find('.business_nature');
        var business_accountant = cln.find('.business_accountant');
        var eiin = cln.find('.eiin');
        var operation_date = cln.find('.operation_date');
        
        
        $(name).each(function() {
            $(this).attr('name', 'list_nature_business_data[name][' + index_val + ']');
        });
        
        $(street_number).each(function() {
            $(this).attr('name', 'list_nature_business_data[street_number][' + index_val + ']');
        });
        $(city).each(function() {
            $(this).attr('name', 'list_nature_business_data[city][' + index_val + ']');
        });
        $(state).each(function() {
            $(this).attr('name', 'list_nature_business_data[state][' + index_val + ']');
        });
        $(zip).each(function() {
            $(this).attr('name', 'list_nature_business_data[zip][' + index_val + ']');
        });
        $(business_nature).each(function() {
            $(this).attr('name', 'list_nature_business_data[business_nature][' + index_val + ']');
        });
        $(business_accountant).each(function() {
            $(this).attr('name', 'list_nature_business_data[business_accountant][' + index_val + ']');
        });
        $(eiin).each(function() {
            $(this).attr('name', 'list_nature_business_data[eiin][' + index_val + ']');
        });
        $(operation_date).each(function() {
            $(this).attr('name', 'list_nature_business_data[operation_date][' + index_val + ']');
        });
        cln.find('select').val('');
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        
        cln.find('textarea').val('');
        
        $(itm).after(cln);
    }
}



// Part B
function addVehicleForm() {
    // var itm = $(document).find(".vehicle-form");
    var clnln = $(document).find(".vehicle-form").length;
    if (clnln > 4) {
        alert("You can only insert 5 properties.");
        return false;
    } else {
        var itm = $(document).find(".vehicle-form").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone();
        var own_any_property = cln.find('.own_any_property');
        var own_by_property = cln.find('.own_by_property');

        var vehicle_property_type = cln.find('.property_type');
        var vehicle_property_year = cln.find('.vehicle_property_year');
        var vehicle_property_make = cln.find('.vehicle_property_make');
        var vehicle_property_model = cln.find('.vehicle_property_model');
        var vehicle_property_mileage = cln.find('.vehicle_property_mileage');
        var vehicle_property_other_info = cln.find('.vehicle_property_other_info');
        var vehicle_property_estimated_value = cln.find('.vehicle_property_estimated_value');

        //car loan section
        var loan_own_type_property = cln.find('.loan_own_type_property');
        var vehicle_amount_own = cln.find('.vehicle_amount_own');
        var vehicle_account_number = cln.find('.vehicle_account_number');
        var vehicle_debt_incurred_date = cln.find('.vehicle_debt_incurred_date');
        var vehicle_creditor_name_addresss = cln.find('.vehicle_creditor_name_addresss');
        var vehicle_creditor_name = cln.find('.vehicle_creditor_name');
        var vehicle_creditor_city = cln.find('.vehicle_creditor_city');
        var vehicle_creditor_state = cln.find('.vehicle_creditor_state');
        var vehicle_creditor_zip = cln.find('.vehicle_creditor_zip');
        var vehicle_monthly_payment = cln.find('.vehicle_monthly_payment');
        var vehicle_payment_remaining = cln.find('.vehicle_payment_remaining');
        var vehicle_debt_owned_by = cln.find('.vehicle_debt_owned_by');
        var vehicle_codebtor = cln.find('.vehicle_codebtor');
        var vehicle_codebtor_info = cln.find('.vehicle_codebtor_info');
        //work only update case
        cln.find('.property_vehicle_ids').remove();

        $(own_any_property).each(function() {
            $(this).attr('id', $(this).attr('id') + index_val);
            $(this).attr('name', 'property_vehicle[own_any_property][' + index_val + ']');
            $(this).next('label').attr('for', $(this).attr('id'));
        });
        $(own_by_property).each(function() {
            $(this).attr('id', $(this).attr('id') + index_val);
            $(this).attr('name', 'property_vehicle[own_by_property][' + index_val + ']');
            $(this).next('label').attr('for', $(this).attr('id'));
        });
        $(vehicle_property_type).each(function() {
            $(this).attr('name', 'property_vehicle[property_type][' + index_val + ']');
        });
        $(vehicle_property_year).each(function() {
            $(this).attr('name', 'property_vehicle[property_year][' + index_val + ']');
        });
        $(vehicle_property_make).each(function() {
            $(this).attr('name', 'property_vehicle[property_make][' + index_val + ']');
        });
        $(vehicle_property_model).each(function() {
            $(this).attr('name', 'property_vehicle[property_model][' + index_val + ']');
        });
        $(vehicle_property_mileage).each(function() {
            $(this).attr('name', 'property_vehicle[property_mileage][' + index_val + ']');
        });
        $(vehicle_property_other_info).each(function() {
            $(this).attr('name', 'property_vehicle[property_other_info][' + index_val + ']');
        });
        $(vehicle_property_estimated_value).each(function() {
            $(this).attr('name', 'property_vehicle[property_estimated_value][' + index_val + ']');
        });
        //car loan
        $(vehicle_amount_own).each(function() {
            $(this).attr('name', 'property_vehicle[vehicle_car_loan][amount_own][' + index_val + ']');
        });
        $(vehicle_account_number).each(function() {
            $(this).attr('name', 'property_vehicle[vehicle_car_loan][account_number][' + index_val + ']');
        });
        $(vehicle_debt_incurred_date).each(function() {
            $(this).attr('name', 'property_vehicle[vehicle_car_loan][debt_incurred_date][' + index_val + ']');
        });
        $(vehicle_creditor_name).each(function() {
            $(this).attr('name', 'property_vehicle[vehicle_car_loan][creditor_name_addresss][' + index_val + ']');
        });
        $(vehicle_creditor_name_addresss).each(function() {
            $(this).attr('name', 'property_vehicle[vehicle_car_loan][creditor_name_addresss][' + index_val + ']');
        });
        $(vehicle_creditor_city).each(function() {
            $(this).attr('name', 'property_vehicle[vehicle_car_loan][creditor_city][' + index_val + ']');
        });
        $(vehicle_creditor_state).each(function() {
            $(this).attr('name', 'property_vehicle[vehicle_car_loan][creditor_state][' + index_val + ']');
        });
        $(vehicle_creditor_zip).each(function() {
            $(this).attr('name', 'property_vehicle[vehicle_car_loan][creditor_zip][' + index_val + ']');
        });
        $(vehicle_monthly_payment).each(function() {
            $(this).attr('name', 'property_vehicle[vehicle_car_loan][monthly_payment][' + index_val + ']');
        });
        $(vehicle_payment_remaining).each(function() {
            $(this).attr('name', 'property_vehicle[vehicle_car_loan][payment_remaining][' + index_val + ']');
        });
        $(vehicle_debt_owned_by).each(function() {
            $(this).attr('name', 'property_vehicle[vehicle_car_loan][debt_owned_by][' + index_val + ']');
        });
        $(vehicle_codebtor).each(function() {
            $(this).attr('id', $(this).attr('id') + index_val);
            $(this).attr('name', 'property_vehicle[vehicle_car_loan][codebtor][' + index_val + ']');
            $(this).next('label').attr('for', $(this).attr('id'));
        });
        $(vehicle_codebtor_info).each(function() {
            $(this).attr('name', 'property_vehicle[vehicle_car_loan][codebtor_info][' + index_val + ']');
        });
        $(loan_own_type_property).each(function() {
            $(this).attr('id', $(this).attr('id') + index_val);
            $(this).attr('name', 'property_vehicle[loan_own_type_property][' + index_val + ']');
            $(this).next('label').attr('for', $(this).attr('id'));
        });
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        cln.find('textarea').val('');
        
        $(itm).after(cln);
    }
}

function getOwnTypeProperty(value) {
    if (value == 'yes') {
        document.getElementById('own_property_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('own_property_data').classList.add("hide-data");
    }
}

function currently_lived_property(value, obj) {

    if (value == 'yes') {
        $(obj).parents('.currently_lived_parents').next('.currently_lived_data').removeClass("hide-data");
        // document.getElementById('own_property_data').classList.remove("hide-data");
    } else if (value == 'no') {
        $(obj).parents('.currently_lived_parents').next('.currently_lived_data').addClass("hide-data");
        // document.getElementById('own_property_data').classList.add("hide-data");
    }
}

function not_primary_address_property(value, obj) {

    if (value == 'no') {
        $(obj).parents('.payment_not_primary_address_parents').next('.payment_not_primary_address_data').removeClass("hide-data");
        // document.getElementById('own_property_data').classList.remove("hide-data");
    } else if (value == 'yes') {
        $(obj).parents('.payment_not_primary_address_parents').next('.payment_not_primary_address_data').addClass("hide-data");
        // document.getElementById('own_property_data').classList.add("hide-data");
    }
}

function laon_property_obj(value, obj) {

    if (value == 'yes') {
        $(obj).parents('.laon_property_obj_data').next('.loan_own_type_property_sec').removeClass("hide-data");
        // document.getElementById('own_property_data').classList.remove("hide-data");
    } else if (value == 'no') {
        $(obj).parents('.laon_property_obj_data').next('.loan_own_type_property_sec').addClass("hide-data");
        // document.getElementById('own_property_data').classList.add("hide-data");
    }
}

function getOwnTypeProperty_obj(value, obj) {

    if (value == 'yes') {
        $(obj).parents('.getOwnTypeProperty_obj_data').next('.getOwnTypeProperty').removeClass("hide-data");
        
        // document.getElementById('own_property_data').classList.remove("hide-data");
    } else if (value == 'no') {
        $(obj).parents('.getOwnTypeProperty_obj_data').next('.getOwnTypeProperty').addClass("hide-data");
        //$("#add-more-vehicle-form").parent().addClass('hide-data');
        // document.getElementById('own_property_data').classList.add("hide-data");
    }
}
// Part C

function getHouseHoldItems(value) {
    if (value == 'yes') {
        document.getElementById('household_items_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('household_items_data').classList.add("hide-data");
    }
}

function getHouseElectronicsItems(value) {
    if (value == 'yes') {
        document.getElementById('electronics_items_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('electronics_items_data').classList.add("hide-data");
    }
}

function getHouseCollectiblesItems(value) {
    if (value == 'yes') {
        document.getElementById('Collectibles_items_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('Collectibles_items_data').classList.add("hide-data");
    }
}

function getHouseSportsItems(value) {
    if (value == 'yes') {
        document.getElementById('sports_items_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('sports_items_data').classList.add("hide-data");
    }
}

function getHouseFirearmsItems(value) {
    if (value == 'yes') {
        document.getElementById('firearms_items_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('firearms_items_data').classList.add("hide-data");
    }
}

function getHouseClothingItems(value) {
    if (value == 'yes') {
        document.getElementById('clothing_items_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('clothing_items_data').classList.add("hide-data");
    }
}

function getHouseJewelryItems(value) {
    if (value == 'yes') {
        document.getElementById('jewelry_items_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('jewelry_items_data').classList.add("hide-data");
    }
}

function getHouseNonFarmAnimalsItems(value) {
    if (value == 'yes') {
        document.getElementById('non_farm_animals_items_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('non_farm_animals_items_data').classList.add("hide-data");
    }
}

function getHouseHEathAidItems(value) {
    if (value == 'yes') {
        document.getElementById('health_aids_items_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('health_aids_items_data').classList.add("hide-data");
    }
}

// Part D
function getCashItems(value) {
    if (value == 'yes') {
        document.getElementById('cash_items_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('cash_items_data').classList.add("hide-data");
    }
}

function getCheckingAccountItems(value) {
    if (value == 'yes') {
        document.getElementById('checking_account_items_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('checking_account_items_data').classList.add("hide-data");
    }
}

function getSavingsAccountItems(value) {
    if (value == 'yes') {
        document.getElementById('savings_account_items_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('savings_account_items_data').classList.add("hide-data");
    }
}

function getCertificateDepositeItems(value) {
    if (value == 'yes') {
        document.getElementById('certificate_of_deposit_items_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('certificate_of_deposit_items_data').classList.add("hide-data");
    }
}

function getOtherFinacialAccountItems(value) {
    if (value == 'yes') {
        document.getElementById('other_financial_account_items_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('other_financial_account_items_data').classList.add("hide-data");
    }
}

function getMutualFundsItems(value) {
    if (value == 'yes') {
        document.getElementById('bonds_mutual_funds_items_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('bonds_mutual_funds_items_data').classList.add("hide-data");
    }
}

function getNonPubliclyItems(value) {
    if (value == 'yes') {
        document.getElementById('non_publicly_items_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('non_publicly_items_data').classList.add("hide-data");
    }
}

function getGovernmentCoperateItems(value) {
    if (value == 'yes') {
        document.getElementById('government_corporate_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('government_corporate_data').classList.add("hide-data");
    }
}

function getRetirementPensionItems(value) {
    if (value == 'yes') {
        document.getElementById('retirement_pension_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('retirement_pension_data').classList.add("hide-data");
    }
}

function getSecurityDepositsItems(value) {
    if (value == 'yes') {
        document.getElementById('security_deposits_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('security_deposits_data').classList.add("hide-data");
    }
}

function getPrepaymentsItems(value) {
    if (value == 'yes') {
        document.getElementById('prepayments_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('prepayments_data').classList.add("hide-data");
    }
}

function getAnnuitiesItems(value) {
    if (value == 'yes') {
        document.getElementById('annuities_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('annuities_data').classList.add("hide-data");
    }
}

function getEducationIRAItems(value) {
    if (value == 'yes') {
        document.getElementById('education_IRA_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('education_IRA_data').classList.add("hide-data");
    }
}

function getInterestPropertyItems(value) {
    if (value == 'yes') {
        document.getElementById('interestin_property_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('interestin_property_data').classList.add("hide-data");
    }
}

function getintellectualPropertyItems(value) {
    if (value == 'yes') {
        document.getElementById('intellectual_property_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('intellectual_property_data').classList.add("hide-data");
    }
}

function getGeneralIntangiblesItems(value) {
    if (value == 'yes') {
        document.getElementById('genral_intangibles_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('genral_intangibles_data').classList.add("hide-data");
    }
}

function getTaxRefundsItems(value) {
    if (value == 'yes') {
        document.getElementById('tax_refunds_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('tax_refunds_data').classList.add("hide-data");
    }
}

function getAlimonyChildItems(value) {
    if (value == 'yes') {
        document.getElementById('alimony_child_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('alimony_child_data').classList.add("hide-data");
    }
}

function getUnpaidWagesItems(value) {
    if (value == 'yes') {
        document.getElementById('unpaid_wages_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('unpaid_wages_data').classList.add("hide-data");
    }
}

function getInsurancePoliciesItems(value) {
    if (value == 'yes') {
        document.getElementById('insurance_policies_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('insurance_policies_data').classList.add("hide-data");
    }
}

function getInheritancesBenefitsItems(value) {
    if (value == 'yes') {
        document.getElementById('Inheritances_benefits_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('Inheritances_benefits_data').classList.add("hide-data");
    }
}

function getPersonalInjuryItems(value) {
    if (value == 'yes') {
        document.getElementById('personal_injury_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('personal_injury_data').classList.add("hide-data");
    }
}

function getLawsuitsItems(value) {
    if (value == 'yes') {
        document.getElementById('Lawsuits_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('Lawsuits_data').classList.add("hide-data");
    }
}

function getOtherClaimsItems(value) {
    if (value == 'yes') {
        document.getElementById('other_claims_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('other_claims_data').classList.add("hide-data");
    }
}

function getFinancialAssetItems(value) {
    if (value == 'yes') {
        document.getElementById('financial_asset_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('financial_asset_data').classList.add("hide-data");
    }
}

// Part E //
function getAccountsReceivableItems(value) {
    if (value == 'yes') {
        document.getElementById('account_receivable_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('account_receivable_data').classList.add("hide-data");
    }
}

function getOfficeEquipmentItems(value) {
    if (value == 'yes') {
        document.getElementById('office_equipment_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('office_equipment_data').classList.add("hide-data");
    }
}

function getMachineryTradeItems(value) {
    if (value == 'yes') {
        document.getElementById('machinery_trade_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('machinery_trade_data').classList.add("hide-data");
    }
}

function getBusinessInventoryItems(value) {
    if (value == 'yes') {
        document.getElementById('business_inventory_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('business_inventory_data').classList.add("hide-data");
    }
}

function getInterestsPartnershipsItems(value) {
    if (value == 'yes') {
        document.getElementById('interest_partnerships_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('interest_partnerships_data').classList.add("hide-data");
    }
}

function getCustomerMailingItems(value) {
    if (value == 'yes') {
        document.getElementById('customer_mailing_lists_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('customer_mailing_lists_data').classList.add("hide-data");
    }
}

function getOtherBusimessItems(value) {
    if (value == 'yes') {
        document.getElementById('other_business_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('other_business_data').classList.add("hide-data");
    }
}

// Part F //

function getFarmAnimalsItems(value) {
    if (value == 'yes') {
        document.getElementById('farm_animals_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('farm_animals_data').classList.add("hide-data");
    }
}

function getCropsItems(value) {
    if (value == 'yes') {
        document.getElementById('crops_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('crops_data').classList.add("hide-data");
    }
}

function getCommercialFishingEquipmentItems(value) {
    if (value == 'yes') {
        document.getElementById('commercial_fishing_equipment_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('commercial_fishing_equipment_data').classList.add("hide-data");
    }
}

function getCommercialFishingItems(value) {
    if (value == 'yes') {
        document.getElementById('commercial_fishing_supplies_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('commercial_fishing_supplies_data').classList.add("hide-data");
    }
}

// Part G

function getPreviouslylistedItems(value) {
    if (value == 'yes') {
        document.getElementById('previously_listed_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('previously_listed_data').classList.add("hide-data");
    }
}

function GetotherDeductions11(value) {
    if (value == 'yes') {
        document.getElementById('otherDeductions11_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('otherDeductions11_data').classList.add("hide-data");
    }
}

function GetotherDeductions22(value) {
    if (value == 'yes') {
        document.getElementById('otherDeductions22_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('otherDeductions22_data').classList.add("hide-data");
    }
}

function getotherInsNotListedSpouse(value) {
    if (value == 'yes') {
        document.getElementById('otherInsNotListedSpouse_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('otherInsNotListedSpouse_data').classList.add("hide-data");
    }
}

function getPaymentsforadditionaldepSpouse(value) {
    if (value == 'yes') {
        document.getElementById('PaymentsforadditionaldepSpouse_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('PaymentsforadditionaldepSpouse_data').classList.add("hide-data");
    }
}

function getotherRealPropertyNotAddedSpouse(value) {
    if (value == 'yes') {
        document.getElementById('otherRealPropertyNotAddedSpouse_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('otherRealPropertyNotAddedSpouse_data').classList.add("hide-data");
    }
}

//// Section C  ////
// Steps
function submitFormSectionC() {
    document.getElementById('section3-tab').classList.remove("active");
    document.getElementById('section4-tab').classList.add("active");

    document.getElementById('section3').classList.remove("active", "show");
    document.getElementById('section4').classList.add("active", "show");
}
var sectionThreeNum = 0;

function changeSectionCStep() {
    sectionThreeNum = sectionThreeNum + 1
    if (sectionThreeNum == 1) {
        var partA = document.getElementById("debts-part-a");
        var partB = document.getElementById("debts-part-b");
        partA.classList.add('hidestep');
        partB.classList.remove('hidestep');
    }
    // if (sectionThreeNum == 2) {
    //     var partB = document.getElementById("debts-part-b");
    //     var partC = document.getElementById("debts-part-c");
    //     partB.classList.add('hidestep');
    //     partC.classList.remove('hidestep');
    // }
    // if (sectionThreeNum == 3) {
    //     var partC = document.getElementById("debts-part-c");
    //     var partD = document.getElementById("debts-part-d");
    //     partC.classList.add('hidestep');
    //     partD.classList.remove('hidestep');
    // }
    // if (sectionThreeNum == 4) {
    //     var partD = document.getElementById("debts-part-d");
    //     var partE = document.getElementById("debts-part-e");
    //     partD.classList.add('hidestep');
    //     partE.classList.remove('hidestep');
    // }
    // if (sectionThreeNum == 5) {
    //     var partE = document.getElementById("debts-part-e");
    //     var partF = document.getElementById("debts-part-f");
    //     partE.classList.add('hidestep');
    //     partF.classList.remove('hidestep');
    // }
    // if (sectionThreeNum == 6) {
    //     var partE = document.getElementById("debts-part-f");
    //     var partF = document.getElementById("debts-part-g");
    //     partE.classList.add('hidestep');
    //     partF.classList.remove('hidestep');
    // }
}


// Part A
function geCodebtorCosignerItems(value, obj) {
    if (value == 'yes') {
        $(obj).parents('.codebtor_cosigner_data_obj').next('.codebtor_cosigner_data').removeClass("hide-data");
        // document.getElementById('own_property_data').classList.remove("hide-data");
    } else if (value == 'no') {
        $(obj).parents('.codebtor_cosigner_data_obj').next('.codebtor_cosigner_data').addClass("hide-data");
        // document.getElementById('own_property_data').classList.add("hide-data");
    }
}

function getUnpaidTaxesItems(value) {
    var x = document.getElementById("type_of_debt").value;
    if (x == '8') {
        debugger
        document.getElementById('unpaid_taxes_data').classList.remove("hide-data");
    } else {
        document.getElementById('unpaid_taxes_data').classList.add("hide-data");
    }
}

//// Section D  ////

// Steps

var sectionFourNum = 0;

function changeSectionDStep() {
    sectionFourNum = sectionFourNum + 1
    if (sectionFourNum == 1) {
        var partA = document.getElementById("current-income-part-a");
        var partB = document.getElementById("current-income-part-b");
        partA.classList.add('hidestep');
        partB.classList.remove('hidestep');
    }
    if (sectionFourNum == 2) {
        var partB = document.getElementById("current-income-part-b");
        var partC = document.getElementById("current-income-part-c");
        partB.classList.add('hidestep');
        partC.classList.remove('hidestep');
    }
    if (sectionFourNum == 3) {
        var partC = document.getElementById("current-income-part-c");
        var partD = document.getElementById("current-income-part-d");
        partC.classList.add('hidestep');
        partD.classList.remove('hidestep');
    }

}

function GetDebtorGrossWages(value) {
    if (value == 'yes') {
        document.getElementById('debtor-gross-wages').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('debtor-gross-wages').classList.add("hide-data");
    }
}

function GetDebtorOperationBusiness(value) {
    if (value == 'yes') {
        document.getElementById('operation_business').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('operation_business').classList.add("hide-data");
    }
}

function GetDebtorRentalRealProperty(value) {
    if (value == 'yes') {
        document.getElementById('rent_real_property').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('rent_real_property').classList.add("hide-data");
    }
}

function GetDebtorRoyalties(value) {
    if (value == 'yes') {
        document.getElementById('royalties').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('royalties').classList.add("hide-data");
    }
}

function GetDebtorretiRementIncome(value) {
    if (value == 'yes') {
        document.getElementById('retirement_income').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('retirement_income').classList.add("hide-data");
    }
}

function GetDebtorRegularContributions(value) {
    if (value == 'yes') {
        document.getElementById('regular_contributions').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('regular_contributions').classList.add("hide-data");
    }
}

function GetDebtorUnemploymentCompensation(value) {
    if (value == 'yes') {
        document.getElementById('unemployment_compensation').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('unemployment_compensation').classList.add("hide-data");
    }
}

function GetDebtorSocialIncome(value) {
    if (value == 'yes') {
        document.getElementById('social_security').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('social_security').classList.add("hide-data");
    }
}

function GetDebtoOtherSource(value) {
    if (value == 'yes') {
        document.getElementById('other_sources').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('other_sources').classList.add("hide-data");
    }
}

// Joint Debuts
function GetJointGrossWages(value) {
    if (value == 'yes') {
        document.getElementById('Joint-gross-wages').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('Joint-gross-wages').classList.add("hide-data");
    }
}

function GetJointOperationBusiness(value) {
    if (value == 'yes') {
        document.getElementById('joint_operation_business').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('joint_operation_business').classList.add("hide-data");
    }
}

function GetJointRentalRealProperty(value) {
    if (value == 'yes') {
        document.getElementById('joint_rent_real_property').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('joint_rent_real_property').classList.add("hide-data");
    }
}

function GetJointRoyalties(value) {
    if (value == 'yes') {
        document.getElementById('joints_royalties').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('joints_royalties').classList.add("hide-data");
    }
}

function GetJointretiRementIncome(value) {
    if (value == 'yes') {
        document.getElementById('joints_retirement_income').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('joints_retirement_income').classList.add("hide-data");
    }
}

function GetJointRegularContributions(value) {
    if (value == 'yes') {
        document.getElementById('joints_regular_contributions').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('joints_regular_contributions').classList.add("hide-data");
    }
}

function GetJointUnemploymentCompensation(value) {
    if (value == 'yes') {
        document.getElementById('joints_unemployment_compensation').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('joints_unemployment_compensation').classList.add("hide-data");
    }
}

function GetJointSocialIncome(value) {
    if (value == 'yes') {
        document.getElementById('joints_social_security').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('joints_social_security').classList.add("hide-data");
    }
}

function GetJointsOtherSource(value) {
    if (value == 'yes') {
        document.getElementById('joints_other_sources').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('joints_other_sources').classList.add("hide-data");
    }
}

function getotherInsurance_notListed(value) {
    if (value == 'yes') {
        document.getElementById('other_insurance1').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('other_insurance1').classList.add("hide-data");
    }
}

function getPaymentforsupport_n(value) {
    if (value == 'yes') {
        document.getElementById('paymentforsupport_dependents_n1').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('paymentforsupport_dependents_n1').classList.add("hide-data");
    }
}


//// Section E  ////

// Steps

function addRelationshipForm() {
    var clnln = $(document).find(".all_dependents_form").length;
    if (clnln > 4) {
        alert("You can only insert 5 dependents.");
        return false;
    } else {
        var itm = $(document).find(".all_dependents_form").last();
        var index_val = $(itm).index() + 1;
        var cln = $(itm).clone();

        var dependent_live_with = cln.find('.dependent_live_with');
        var dependent_relationship = cln.find('.dependent_relationship');
        var dependent_age = cln.find('.dependent_age');
        //work only update case
        // cln.find('.property_vehicle_ids').remove();

        $(dependent_relationship).each(function() {
            $(this).attr('name', 'dependent_relationship[' + index_val + ']');
        });
        $(dependent_age).each(function() {
            $(this).attr('name', 'dependent_age[' + index_val + ']');
        });
        $(dependent_live_with).each(function() {
            $(this).attr('name', 'dependent_live_with[' + index_val + ']');
        });
        cln.find('input[type="text"]').val('');
        $(itm).after(cln);
    }
}

function addMonthyAmountForm() {
    // var itm2 = document.getElementById("monthly-amount-1");
    // var cln2 = itm2.cloneNode(true);
    // document.getElementById("monthly-amount-2").appendChild(cln2);
    var clnln = $(document).find(".monthly_amount").length;
    if (clnln > 4) {
        alert("You can only insert 5 utility bills.");
        return false;
    } else {
        var itm = $(document).find(".monthly_amount").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone();

        var monthly_utilities_bills = cln.find('.monthly_utilities_bills');
        var monthly_utilities_value = cln.find('.monthly_utilities_value');

        //work only update case
        // cln.find('.property_vehicle_ids').remove();

        $(monthly_utilities_bills).each(function() {
            $(this).attr('name', 'monthly_utilities_bills[' + index_val + ']');
        });
        $(monthly_utilities_value).each(function() {
            $(this).attr('name', 'monthly_utilities_value[' + index_val + ']');
        });
        cln.find('input[type="text"]').val('');
        cln.find('textarea').val('');
        $(itm).after(cln);
    }
}

function addOtherInsuranceForm() {
    // var itm2 = document.getElementById("other-insurance-1");
    // var cln2 = itm2.cloneNode(true);
    // document.getElementById("other-insurance-2").appendChild(cln2);
    var clnln = $(document).find(".other_insurance").length;
    if (clnln > 4) {
        alert("You can only describe 5 Other insurance.");
        return false;
    } else {
        var itm = $(document).find(".other_insurance").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone();

        var other_insurance_value = cln.find('.other_insurance_value');
        var other_insurance_price = cln.find('.other_insurance_price');

        //work only update case
        // cln.find('.property_vehicle_ids').remove();

        $(other_insurance_value).each(function() {
            $(this).attr('name', 'other_insurance_value[' + index_val + ']');
        });
        $(other_insurance_price).each(function() {
            $(this).attr('name', 'other_insurance_price[' + index_val + ']');
        });
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        $(itm).after(cln);
    }
}

function addTaxbillsForm() {
    // var itm2 = document.getElementById("tax-bills-1");
    // var cln2 = itm2.cloneNode(true);
    // document.getElementById("tax-bills-2").appendChild(cln2);
    var clnln = $(document).find(".tax_bills").length;
    if (clnln > 4) {
        alert("You can only describe 5 Other insurance.");
        return false;
    } else {
        var itm = $(document).find(".tax_bills").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone();

        var taxbills_value = cln.find('.taxbills_value');
        var taxbills_price = cln.find('.taxbills_price');

        //work only update case
        // cln.find('.property_vehicle_ids').remove();

        $(taxbills_value).each(function() {
            $(this).attr('name', 'taxbills_value[' + index_val + ']');
        });
        $(taxbills_price).each(function() {
            $(this).attr('name', 'taxbills_price[' + index_val + ']');
        });

        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        $(itm).after(cln);
    }
}

function addListAllPropertyTransferForm() {
    var clnln = $(document).find(".all_property_transfer_10_year_data").length;
    if (clnln > 3) {
        alert("You can add only 4 entries.");
        return false;
    } else {
        var itm = $(document).find(".all_property_transfer_10_year_data").last();
        var index_val = ($(itm).index() + 1);
        var cln = $(itm).clone().find("input").val("").end();

        var trust_name = cln.find('.trust_name');
        var year_property_transfer = cln.find('.10year_property_transfer');
        var year_property_transfer_date = cln.find('.10year_property_transfer_date');
        cln.find('input').val('');
        cln.find('select').val('');
        $(trust_name).each(function() {
            $(this).attr('name', 'all_property_transfer_10_year_data[trust_name][' + index_val + ']');
        });
        $(year_property_transfer).each(function() {
            $(this).attr('name', 'all_property_transfer_10_year_data[10year_property_transfer][' + index_val + ']');
        });
        $(year_property_transfer_date).each(function() {
            $(this).attr('name', 'all_property_transfer_10_year_data[10year_property_transfer_date][' + index_val + ']');
        });

        $(itm).after(cln);

    }
}


function addInstallmentPaymentsForm() {
    // var itm2 = document.getElementById("installment-payments-1");
    // var cln2 = itm2.cloneNode(true);
    // document.getElementById("installment-payments-2").appendChild(cln2);
    var clnln = $(document).find(".installment_payments").length;
    if (clnln > 3) {
        alert("You can only describe 4 Installment Payments.");
        return false;
    } else {
        var itm = $(document).find(".installment_payments").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone();

        var installmentpayments_value = cln.find('.installmentpayments_value');
        var installmentpayments_price = cln.find('.installmentpayments_price');

        //work only update case
        // cln.find('.property_vehicle_ids').remove();

        $(installmentpayments_value).each(function() {
            $(this).attr('name', 'installmentpayments_value[' + index_val + ']');
        });
        $(installmentpayments_price).each(function() {
            $(this).attr('name', 'installmentpayments_price[' + index_val + ']');
        });
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(itm).after(cln);
    }
}

function addOtherExpensesForm() {
    // var itm2 = document.getElementById("other-expenses-1");
    // var cln2 = itm2.cloneNode(true);
    // document.getElementById("other-expenses-2").appendChild(cln2);
    var clnln = $(document).find(".other_expenses").length;
    if (clnln > 4) {
        alert("You can only describe 5 Other insurance.");
        return false;
    } else {
        var itm = $(document).find(".other_expenses").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone();

        var additional_expenses_value = cln.find('.additional_expenses_value');
        var additional_expenses_price = cln.find('.additional_expenses_price');

        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(additional_expenses_value).each(function() {
            $(this).attr('name', 'additional_expenses_value[' + index_val + ']');
        });
        $(additional_expenses_price).each(function() {
            $(this).attr('name', 'additional_expenses_price[' + index_val + ']');
        });

        $(itm).after(cln);
    }
}

function addPayrollDeductionsForm() {
    // var itm2 = document.getElementById("payroll-deductions-1");
    // var cln2 = itm2.cloneNode(true);
    // document.getElementById("payroll-deductions-2").appendChild(cln2);
    var clnln = $(document).find(".payroll_deductions").length;
    if (clnln > 4) {
        alert("You can only describe 5 Other insurance.");
        return false;
    } else {
        var itm = $(document).find(".payroll_deductions").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone();

        var payroll_deductions_value = cln.find('.payroll_deductions_value');
        var payroll_deductions_price = cln.find('.payroll_deductions_price');

        //work only update case
        // cln.find('.property_vehicle_ids').remove();
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(payroll_deductions_value).each(function() {
            $(this).attr('name', 'payroll_deductions_value[' + index_val + ']');
        });
        $(payroll_deductions_price).each(function() {
            $(this).attr('name', 'payroll_deductions_price[' + index_val + ']');
        });

        $(itm).after(cln);
    }
}

function addOrderedPaymentsForm() {
    // var itm2 = document.getElementById("ordered-payments-1");
    // var cln2 = itm2.cloneNode(true);
    // document.getElementById("ordered-payments-2").appendChild(cln2);
    var clnln = $(document).find(".ordered_payments").length;
    if (clnln > 4) {
        alert("You can only list 5 Court ordered payments.");
        return false;
    } else {
        var itm = $(document).find(".ordered_payments").last();
        var index_val = $(itm).index() + 1;
        var cln = $(itm).clone();

        var court_payments_value = cln.find('.court_payments_value');
        var court_payments_price = cln.find('.court_payments_price');

        //work only update case
        // cln.find('.property_vehicle_ids').remove();
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(court_payments_value).each(function() {
            $(this).attr('name', 'court_payments_value[' + index_val + ']');
        });
        $(court_payments_price).each(function() {
            $(this).attr('name', 'court_payments_price[' + index_val + ']');
        });

        $(itm).after(cln);
    }
}

function addRetirementAccountsForm() {
    // var itm2 = document.getElementById("retirement-accounts-1");
    // var cln2 = itm2.cloneNode(true);
    // document.getElementById("retirement-accounts-2").appendChild(cln2);
    var clnln = $(document).find(".retirement_accounts").length;
    if (clnln > 4) {
        alert("You can only list 5 non-mandatory contributions to retirement accounts.");
        return false;
    } else {
        var itm = $(document).find(".retirement_accounts").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone();

        var retirement_account_value = cln.find('.retirement_account_value');
        var retirement_account_price = cln.find('.retirement_account_price');

        //work only update case
        // cln.find('.property_vehicle_ids').remove();

        $(retirement_account_value).each(function() {
            $(this).attr('name', 'non_mandatory_contributions_value[' + index_val + ']');
        });
        $(retirement_account_price).each(function() {
            $(this).attr('name', 'non_mandatory_contributions_price[' + index_val + ']');
        });
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(itm).after(cln);

    }
}

function getAllDependents(value) {
    if (value == 'yes') {
        document.getElementById('all_dependents').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('all_dependents').classList.add("hide-data");
    }
}

function getLiveSeparationData(value) {
    if (value == 'yes') {
        document.getElementById('live_separately_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('live_separately_data').classList.add("hide-data");
    }
}

function getRealEstateTaxData(value) {
    if (value == 'yes') {
        document.getElementById('real_estate_taxes_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('real_estate_taxes_data').classList.add("hide-data");
    }
}

function getAmountIncludePropertyData(value) {
    if (value == 'yes') {
        document.getElementById('amount_include_property_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('amount_include_property_data').classList.add("hide-data");
    }
}

function getAmountIncludehomeData(value) {
    if (value == 'yes') {
        document.getElementById('amount_include_home_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('amount_include_home_data').classList.add("hide-data");
    }
}

function getAmountIncludeHomeOwnerData(value) {
    if (value == 'yes') {
        document.getElementById('amount_include_homeowner_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('amount_include_homeowner_data').classList.add("hide-data");
    }
}

function getMortgagePaymentsrData(value) {
    if (value == 'no') {
        document.getElementById('mortgage_payments_data').classList.remove("hide-data");
    } else if (value == 'yes') {
        document.getElementById('mortgage_payments_data').classList.add("hide-data");
    }
}

function getUtilityBillsData(value) {
    if (value == 'yes') {
        document.getElementById('utility_bills_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('utility_bills_data').classList.add("hide-data");
    }
}

function getRealPropertyexpenses(value) {
    if (value == 'yes') {
        document.getElementById('RealPropertyexpenses_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('RealPropertyexpenses_data').classList.add("hide-data");
    }
}


//// Section F  ////

// Steps

function addEveryAddressForm() {
    // var itm2 = document.getElementById("list-every-address-1");
    // var cln2 = itm2.cloneNode(true);
    // document.getElementById("list-every-address-2").appendChild(cln2);
    var clnln = $(document).find(".list_every_addresses").length;
    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {
        var itm = $(document).find(".list_every_addresses").last();

        var remove_btn_index = itm.find('button.remove_list_every_addresses_clone').data('index');
        if (remove_btn_index > 0) {
            itm.find('button.remove_list_every_addresses_clone').hide();
        }

        var index_val = $(itm).index();
        if (index_val == 0) {
            index_val = 1;
        }
        var cln = $(itm).clone().find("input").val("").end();
        var creditor_name = cln.find('.creditor_name');
        var creditor_street = cln.find('.creditor_street');
        var creditor_city = cln.find('.creditor_city');
        var creditor_state = cln.find('.creditor_state');
        var creditor_zip = cln.find('.creditor_zip');
        var prev_address_from = cln.find('.prev_address_from');
        var prev_address_to = cln.find('.prev_address_to');


        //work only update case
        // cln.find('.property_vehicle_ids').remove();

        $(creditor_name).each(function() {
            $(this).attr('name', 'prev_address[creditor_name][' + index_val + ']');
        });

        $(creditor_city).each(function() {
            $(this).attr('name', 'prev_address[creditor_city][' + index_val + ']');
        });

        $(creditor_state).each(function() {
            $(this).attr('name', 'prev_address[creditor_state][' + index_val + ']');
        });

        $(creditor_zip).each(function() {
            $(this).attr('name', 'prev_address[creditor_zip][' + index_val + ']');
        });

        $(creditor_street).each(function() {
            $(this).attr('name', 'prev_address[creditor_street][' + index_val + ']');
        });
        $(prev_address_from).each(function() {
            $(this).attr('name', 'prev_address[from][' + index_val + ']');
        });
        $(prev_address_to).each(function() {
            $(this).attr('name', 'prev_address[to][' + index_val + ']');
        });

        var new_index_val = (index_val + 1);
        cln.find('button.remove_list_every_addresses_clone').attr('data-index', new_index_val);
        cln.find('button.remove_list_every_addresses_clone').show();
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(itm).after(cln);

    }
}

function addNameAddressSpouseForm() {
    var clnln = $(document).find(".living_domestic_partners").length;
    if (clnln > 9) {
        alert("You can add only 10 entries.");
        return false;
    } else {
        var itm = $(document).find(".living_domestic_partners").last();
        var index_val = $(itm).index();

        var remove_btn_index = itm.find('button.remove_living_domestic_partners_clone').data('index');
        if (remove_btn_index > 0) {
            itm.find('button.remove_living_domestic_partners_clone').hide();
        }

        var cln = $(itm).clone();
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        var community_property_state = cln.find('.community_property_state');
        var domestic_partner = cln.find('.domestic_partner');

        //work only update case
        // cln.find('.property_vehicle_ids').remove();

        $(community_property_state).each(function() {
            $(this).attr('name', 'community_property_state[' + index_val + ']');
        });
        $(domestic_partner).each(function() {
            $(this).attr('name', 'domestic_partner[' + index_val + ']');
        });

        var new_index_val = (index_val + 1);
        cln.find('button.remove_living_domestic_partners_clone').attr('data-index', new_index_val);
        cln.find('button.remove_living_domestic_partners_clone').show();
        cln.find('input').val('');
        cln.find('select').val('');
        $(itm).after(cln);

    }
}

function addListPropertyYouHoldForm() {
    var clnln = $(document).find(".list_property_you_hold_data").length;
    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {
        var itm = $(document).find(".list_property_you_hold_data").last();
        var index_val = ($(itm).index() + 1);
        var cln = $(itm).clone().find("input").val("").end();

        var name = cln.find('.name');
        var street_number = cln.find('.street_number');
        var city = cln.find('.city');
        var state = cln.find('.state');
        var zip = cln.find('.zip');
        var location_street_number = cln.find('.location_street_number');
        var location_city = cln.find('.location_city');
        var location_state = cln.find('.location_state');
        var location_zip = cln.find('.location_zip');

        var property_desc = cln.find('.property_desc');
        var property_value = cln.find('.property_value');
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(name).each(function() {
            $(this).attr('name', 'list_property_you_hold_data[name][' + index_val + ']');
        });
        $(street_number).each(function() {
            $(this).attr('name', 'list_property_you_hold_data[street_number][' + index_val + ']');
        });
        $(city).each(function() {
            $(this).attr('name', 'list_property_you_hold_data[city][' + index_val + ']');
        });

        $(state).each(function() {
            $(this).attr('name', 'list_property_you_hold_data[state][' + index_val + ']');
        });

        $(zip).each(function() {
            $(this).attr('name', 'list_safe_deposit_data[zip][' + index_val + ']');
        });

        $(location_street_number).each(function() {
            $(this).attr('name', 'list_property_you_hold_data[location_street_number][' + index_val + ']');
        });
        $(location_city).each(function() {
            $(this).attr('name', 'list_property_you_hold_data[location_city][' + index_val + ']');
        });

        $(location_state).each(function() {
            $(this).attr('name', 'list_property_you_hold_data[location_state][' + index_val + ']');
        });

        $(location_zip).each(function() {
            $(this).attr('name', 'list_property_you_hold_data[location_zip][' + index_val + ']');
        });

        $(property_desc).each(function() {
            $(this).attr('name', 'list_property_you_hold_data[property_desc][' + index_val + ']');
        });

        $(property_value).each(function() {
            $(this).attr('name', 'list_property_you_hold_data[property_value][' + index_val + ']');
        });

        $(itm).after(cln);

    }
}

function addPrimarilyConsumerDebetsForm() {
    // var itm2 = document.getElementById("primarily-consumer-debets-1");
    // var cln2 = itm2.cloneNode(true);
    // document.getElementById("primarily-consumer-debets-2").appendChild(cln2);
    var clnln = $(document).find(".primarily_consumer_debets").length;
    if (clnln > 9) {
        alert("You can add only 10 entries.");
        return false;
    } else {
        var itm = $(document).find(".primarily_consumer_debets").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone();

        var creditor_address = cln.find('.creditor_address');
        var creditor_street = cln.find('.creditor_street');
        var creditor_city = cln.find('.creditor_city');
        var creditor_state = cln.find('.creditor_state');
        var creditor_zip = cln.find('.creditor_zip');
        var payment_dates = cln.find('.payment_dates');
        var total_amount_paid = cln.find('.total_amount_paid');
        var amount_still_owed = cln.find('.amount_still_owed');
        var creditor_payment_for = cln.find('.creditor_payment_for');

        //work only update case
        // cln.find('.property_vehicle_ids').remove();
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(creditor_address).each(function() {
            $(this).attr('name', 'primarily_consumer_debets[creditor_address][' + index_val + ']');
        });
        $(creditor_street).each(function() {
            $(this).attr('name', 'primarily_consumer_debets[creditor_street][' + index_val + ']');
        });
        $(creditor_city).each(function() {
            $(this).attr('name', 'primarily_consumer_debets[creditor_city][' + index_val + ']');
        });
        $(creditor_state).each(function() {
            $(this).attr('name', 'primarily_consumer_debets[creditor_state][' + index_val + ']');
        });
        $(creditor_zip).each(function() {
            $(this).attr('name', 'primarily_consumer_debets[creditor_zip][' + index_val + ']');
        });
        $(payment_dates).each(function() {
            $(this).attr('name', 'primarily_consumer_debets[payment_dates][' + index_val + ']');
        });
        $(total_amount_paid).each(function() {
            $(this).attr('name', 'primarily_consumer_debets[total_amount_paid][' + index_val + ']');
        });
        $(amount_still_owed).each(function() {
            $(this).attr('name', 'primarily_consumer_debets[amount_still_owed][' + index_val + ']');
        });
        $(creditor_payment_for).each(function() {
            $(this).attr('name', 'primarily_consumer_debets[creditor_payment_for][' + index_val + ']');
        });
        $(itm).after(cln);

    }
}

function addPrimarilyNonConsumerDebetsForm() {
    // var itm2 = document.getElementById("primarily-non-consumer-debets-1");
    // var cln2 = itm2.cloneNode(true);
    // document.getElementById("primarily-non-consumer-debets-2").appendChild(cln2);
    var clnln = $(document).find(".primarily_non_consumer_debets").length;
    if (clnln > 9) {
        alert("You can add only 10 entries.");
        return false;
    } else {
        var itm = $(document).find(".primarily_non_consumer_debets").last();
        var index_val = $(itm).index() + 1;
        var cln = $(itm).clone();

        var non_consumer_creditor_address = cln.find('.non_consumer_creditor_address');
        var non_consumer_creditor_street = cln.find('.non_consumer_creditor_street');
        var non_consumer_creditor_city = cln.find('.non_consumer_creditor_city');
        var non_consumer_creditor_state = cln.find('.non_consumer_creditor_state');
        var non_consumer_creditor_zip = cln.find('.non_consumer_creditor_zip');
        var non_consumer_payment_dates = cln.find('.non_consumer_payment_dates');
        var non_consumer_total_amount_paid = cln.find('.non_consumer_total_amount_paid');
        var non_consumer_amount_still_owed = cln.find('.non_consumer_amount_still_owed');
        var non_consumer_creditor_payment_for = cln.find('.non_consumer_creditor_payment_for');

        //work only update case
        // cln.find('.property_vehicle_ids').remove();
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(non_consumer_creditor_address).each(function() {
            $(this).attr('name', 'non_consumer[non_consumer_creditor_address][' + index_val + ']');
        });
        $(non_consumer_creditor_street).each(function() {
            $(this).attr('name', 'non_consumer[non_consumer_creditor_street][' + index_val + ']');
        });
        $(non_consumer_creditor_city).each(function() {
            $(this).attr('name', 'non_consumer[non_consumer_creditor_city][' + index_val + ']');
        });
        $(non_consumer_creditor_state).each(function() {
            $(this).attr('name', 'non_consumer[non_consumer_creditor_state][' + index_val + ']');
        });
        $(non_consumer_creditor_zip).each(function() {
            $(this).attr('name', 'non_consumer[non_consumer_creditor_zip][' + index_val + ']');
        });
        $(non_consumer_payment_dates).each(function() {
            $(this).attr('name', 'non_consumer[non_consumer_payment_dates][' + index_val + ']');
        });
        $(non_consumer_total_amount_paid).each(function() {
            $(this).attr('name', 'non_consumer[non_consumer_total_amount_paid][' + index_val + ']');
        });
        $(non_consumer_amount_still_owed).each(function() {
            $(this).attr('name', 'non_consumer[non_consumer_amount_still_owed][' + index_val + ']');
        });
        $(non_consumer_creditor_payment_for).each(function() {
            $(this).attr('name', 'non_consumer[non_consumer_creditor_payment_for][' + index_val + ']');
        });

        $(itm).after(cln);

    }
}

function addPropertyRepossessedDataForm() {
    // var itm2 = document.getElementById("property-repossessed-data-form-1");
    // var cln2 = itm2.cloneNode(true);
    // document.getElementById("property-repossessed-data-form-2").appendChild(cln2);
    var clnln = $(document).find(".property_repossessed_data_form").length;
    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {
        var itm = $(document).find(".property_repossessed_data_form").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone();

        var property_repossessed_address = cln.find('.property_repossessed_address');
        var property_repossessed_creditor_street = cln.find('.property_repossessed_creditor_street');
        var property_repossessed_creditor_city = cln.find('.property_repossessed_creditor_city');
        var property_repossessed_creditor_state = cln.find('.property_repossessed_creditor_state');
        var property_repossessed_creditor_zip = cln.find('.property_repossessed_creditor_zip');
        var property_repossessed_creditor_Property = cln.find('.property_repossessed_creditor_Property');
        var property_repossessed_date = cln.find('.property_repossessed_date');
        var property_repossessed_what_happened = cln.find('.property_repossessed_what_happened');


        //work only update case
        // cln.find('.property_vehicle_ids').remove();
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(property_repossessed_address).each(function() {
            $(this).attr('name', 'property_repossessed_data[creditor_address][' + index_val + ']');
        });
        $(property_repossessed_creditor_street).each(function() {
            $(this).attr('name', 'property_repossessed_data[creditor_street][' + index_val + ']');
        });
        $(property_repossessed_creditor_city).each(function() {
            $(this).attr('name', 'property_repossessed_data[creditor_city][' + index_val + ']');
        });
        $(property_repossessed_creditor_state).each(function() {
            $(this).attr('name', 'property_repossessed_data[creditor_state][' + index_val + ']');
        });
        $(property_repossessed_creditor_zip).each(function() {
            $(this).attr('name', 'property_repossessed_data[creditor_zip][' + index_val + ']');
        });
        $(property_repossessed_creditor_Property).each(function() {
            $(this).attr('name', 'property_repossessed_data[creditor_Property][' + index_val + ']');
        });
        $(property_repossessed_date).each(function() {
            $(this).attr('name', 'property_repossessed_data[property_repossessed_date][' + index_val + ']');
        });
        $(property_repossessed_what_happened).each(function() {
            $(this).attr('name', 'property_repossessed_data[what_happened][' + index_val + ']');
        });

        $(itm).after(cln);

    }
}

function addlistAllFinancialAccountsForm() {
    // var itm2 = document.getElementById("list_all_financial_accounts-form-1");
    // var cln2 = itm2.cloneNode(true);
    // document.getElementById("list_all_financial_accounts-form-2").appendChild(cln2);
    var clnln = $(document).find(".list_all_financial_accounts").length;
    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {
        var itm = $(document).find(".list_all_financial_accounts").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone();

        var institution_name = cln.find('.institution_name');
        var all_financial_account_number = cln.find('.all_financial_account_number');
        var all_financial_type_of_account = cln.find('.all_financial_type_of_account');

        //work only update case
        // cln.find('.property_vehicle_ids').remove();
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(institution_name).each(function() {
            $(this).attr('name', 'list_all_financial_accounts_data[institution_name][' + index_val + ']');
        });
        $(all_financial_account_number).each(function() {
            $(this).attr('name', 'list_all_financial_accounts_data[account_number][' + index_val + ']');
        });
        $(all_financial_type_of_account).each(function() {
            $(this).attr('name', 'list_all_financial_accounts_data[type_of_account][' + index_val + ']');
        });

        $(itm).after(cln);

    }
}

function getListEveryAddressData(value) {
    if (value == 'yes') {
        document.getElementById('list-every-address-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('list-every-address-data').classList.add("hide-data");
    }
}

function getLivingDomesticPartnerData(value) {
    if (value == 'yes') {
        document.getElementById('living-domestic-partner-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('living-domestic-partner-data').classList.add("hide-data");
    }
}

function getTotalAmountIncomeData(value) {
    if (value == 'yes') {
        document.getElementById('total-amount-income-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('total-amount-income-data').classList.add("hide-data");
    }
}

function getTotalAmountIncomeSpouseData(value) {
    if (value == 'yes') {
        document.getElementById('total-amount-income-spouse-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('total-amount-income-spouse-data').classList.add("hide-data");
    }
}

function getOtherIncomeRecivedData(value) {
    if (value == 'yes') {
        document.getElementById('other-income-received-income-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('other-income-received-income-data').classList.add("hide-data");
    }
}

function getOtherIncomeSpouseData(value) {
    if (value == 'yes') {
        document.getElementById('other-income-received-spouse-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('other-income-received-spouse-data').classList.add("hide-data");
    }
}

function getPrimarilyConsumerDebetsData(value) {
    if (value == 'yes') {
        document.getElementById('primarily-consumer-debets-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('primarily-consumer-debets-data').classList.add("hide-data");
    }
}

function getPrimarilyNonConsumerDebetsData(value) {
    if (value == 'yes') {
        document.getElementById('primarily-non-consumer-debets-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('primarily-non-consumer-debets-data').classList.add("hide-data");
    }
}

function getPaymentPastYearData(value) {
    if (value == 'yes') {
        document.getElementById('payment-past-one-year-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('payment-past-one-year-data').classList.add("hide-data");
    }
}

function getTransferPropertyData(value) {
    if (value == 'yes') {
        document.getElementById('transfers-property-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('transfers-property-data').classList.add("hide-data");
    }
}

function getListLawsuitsData(value) {
    if (value == 'yes') {
        document.getElementById('list-lawsuits-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('list-lawsuits-data').classList.add("hide-data");
    }
}

function getPropertyRepossessedData(value) {
    if (value == 'yes') {
        document.getElementById('property-repossessed-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('property-repossessed-data').classList.add("hide-data");
    }
}

function getSetoffsCreditorData(value) {
    if (value == 'yes') {
        document.getElementById('setoffs_creditor-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('setoffs_creditor-data').classList.add("hide-data");
    }
}

function getListGiftsData(value) {
    if (value == 'yes') {
        document.getElementById('list-any-gifts-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('list-any-gifts-data').classList.add("hide-data");
    }
}

function getGiftsCharityData(value) {
    if (value == 'yes') {
        document.getElementById('gifts-charity-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('gifts-charity-data').classList.add("hide-data");
    }
}

function getLossesFireData(value) {
    if (value == 'yes') {
        document.getElementById('losses_from_fire-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('losses_from_fire-data').classList.add("hide-data");
    }
}

function getPropertyTransferredData(value) {
    if (value == 'yes') {
        document.getElementById('property-transferred-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('property-transferred-data').classList.add("hide-data");
    }
}

function getPropertyTransferredCreditorsData(value) {
    if (value == 'yes') {
        document.getElementById('property-transferred-creditors-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('property-transferred-creditors-data').classList.add("hide-data");
    }
}

function getPropertyallData(value) {
    if (value == 'yes') {
        document.getElementById('Property_all-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('Property_all-data').classList.add("hide-data");
    }
}

function getAllTransferPropertyData(value) {
    if (value == 'yes') {
        document.getElementById('list-all-property_transfer-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('list-all-property_transfer-data').classList.add("hide-data");
    }
}

function getListFinancialAccountsData(value) {
    if (value == 'yes') {
        document.getElementById('list_all_financial_accounts-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('list_all_financial_accounts-data').classList.add("hide-data");
    }
}

function getSafeDepositData(value) {
    if (value == 'yes') {
        document.getElementById('list-safe-deposit-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('list-safe-deposit-data').classList.add("hide-data");
    }
}

function getStorageUnitData(value) {
    if (value == 'yes') {
        document.getElementById('list-storage-unit-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('list-storage-unit-data').classList.add("hide-data");
    }
}

function getPropertyHoldData(value) {
    if (value == 'yes') {
        document.getElementById('list-property-you-hold-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('list-property-you-hold-data').classList.add("hide-data");
    }
}

function getNoticeByGovData(value) {
    if (value == 'yes') {
        document.getElementById('list-noticeby-gov-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('list-noticeby-gov-data').classList.add("hide-data");
    }
}

function getEnvironmentLawData(value) {
    if (value == 'yes') {
        document.getElementById('list-environment_law-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('list-environment_law-data').classList.add("hide-data");
    }
}

function getJudicialProceedingsData(value) {
    if (value == 'yes') {
        document.getElementById('list-judicial-proceedings-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('list-judicial-proceedings-data').classList.add("hide-data");
    }
}

function getNatureOfBussinessData(value) {
    if (value == 'yes') {
        document.getElementById('list-nature-business-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('list-nature-business-data').classList.add("hide-data");
    }
}

function getFinancialInstitutionsData(value) {
    if (value == 'yes') {
        document.getElementById('list-financial-institutions-data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('list-financial-institutions-data').classList.add("hide-data");
    }
}

function common_toggle_fn(value, id) {
    if (value == 'yes') {
        document.getElementById(id).classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById(id).classList.add("hide-data");
    }
}

function getExpIncBox(value) {
    if (value == 'yes') {
        document.getElementById('div_desc_incexp').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('div_desc_incexp').classList.add("hide-data");
    }
}

function bank_addmore() {
    var clnln = $(document).find(".bank_mutisec").length;
    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {
        var itm = $(document).find(".bank_mutisec").last();
        $rowNo = itm.attr('rowNo');
        if ($rowNo == undefined || $rowNo == null || $rowNo == NaN || $rowNo == '') {
            $rowNo = 1;
        } else {
            $rowNo = parseInt($rowNo) + 1;
        }
        itm.attr('rowNo', $rowNo);
        var index_val = $(itm).index() + 1;
        var cln = $(itm).clone();
        cln.find('.bank_description').val('');
        cln.find('.bank_property_value').val('');
        var bank_description = cln.find('.bank_description');
        var bank_property_value = cln.find('.bank_property_value');
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(bank_description).each(function() {
            $(this).attr('name', 'bank[data][description][' + index_val + ']');
        });
        $(bank_property_value).each(function() {
            $(this).attr('name', 'bank[data][property_value][' + index_val + ']');
        });

        $(itm).after(cln);
        $('.remove-bank-mutisec').show();

    }
}


function addListNoticebyGovForm() {
    // list_noticeby_gov_data
    var clnln = $(document).find(".list_noticeby_gov_data").length;

    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {

        var itm = $(document).find(".list_noticeby_gov_data").last();
        var index_val = $(itm).index() + 1;

        var cln = $(itm).clone();

        var name = cln.find('.name');
        var street_number = cln.find('.street_number');
        var city = cln.find('.city');
        var state = cln.find('.state');
        var zip = cln.find('.zip');
        var gov_name = cln.find('.gov_name');
        var gov_street_number = cln.find('.gov_street_number');
        var gov_city = cln.find('.gov_city');
        var gov_state = cln.find('.gov_state');
        var gov_zip = cln.find('.gov_zip');
        var environmental_law = cln.find('.environmental_law');
        var notice_date = cln.find('.notice_date');

        $(name).each(function() {
            $(this).attr('name', 'list_noticeby_gov_data[name][' + index_val + ']');
        });

        $(street_number).each(function() {
            $(this).attr('name', 'list_noticeby_gov_data[street_number][' + index_val + ']');
        });

        $(city).each(function() {
            $(this).attr('name', 'list_noticeby_gov_data[city][' + index_val + ']');
        });

        $(state).each(function() {
            $(this).attr('name', 'list_noticeby_gov_data[state][' + index_val + ']');
        });

        $(zip).each(function() {
            $(this).attr('name', 'list_noticeby_gov_data[zip][' + index_val + ']');
        });

        $(gov_name).each(function() {
            $(this).attr('name', 'list_noticeby_gov_data[gov_name][' + index_val + ']');
        });

        $(gov_street_number).each(function() {
            $(this).attr('name', 'list_noticeby_gov_data[gov_street_number][' + index_val + ']');
        });

        $(gov_city).each(function() {
            $(this).attr('name', 'list_noticeby_gov_data[gov_city][' + index_val + ']');
        });

        $(gov_state).each(function() {
            $(this).attr('name', 'list_noticeby_gov_data[gov_state][' + index_val + ']');
        });

        $(gov_zip).each(function() {
            $(this).attr('name', 'list_noticeby_gov_data[gov_zip][' + index_val + ']');
        });

        $(environmental_law).each(function() {
            $(this).attr('name', 'list_noticeby_gov_data[environmental_law][' + index_val + ']');
        });

        $(notice_date).each(function() {
            $(this).attr('name', 'list_noticeby_gov_data[notice_date][' + index_val + ']');
        });

        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        cln.find('textarea').val('');

        $(itm).after(cln);
    }
}


function addPropertyAllForm() {
    // Property_all_data
    var clnln = $(document).find(".Property_all_data").length;

    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {

        var itm = $(document).find(".Property_all_data").last();
        var index_val = $(itm).index() + 1;
        var cln = $(itm).clone();

        var name = cln.find('.name');
        var street_number = cln.find('.street_number');
        var city = cln.find('.city');
        var state = cln.find('.state');
        var zip = cln.find('.zip');
        var property_transfer_value = cln.find('.property_transfer_value');
        var property_exchange = cln.find('.property_exchange');
        var relationship_to_you = cln.find('.relationship_to_you');
        var property_transfer_date = cln.find('.property_transfer_date');


        $(name).each(function() {
            $(this).attr('name', 'Property_all_data[name][' + index_val + ']');
        });

        $(street_number).each(function() {
            $(this).attr('name', 'Property_all_data[street_number][' + index_val + ']');
        });

        $(city).each(function() {
            $(this).attr('name', 'Property_all_data[city][' + index_val + ']');
        });

        $(state).each(function() {
            $(this).attr('name', 'Property_all_data[state][' + index_val + ']');
        });

        $(zip).each(function() {
            $(this).attr('name', 'Property_all_data[zip][' + index_val + ']');
        });

        $(property_transfer_value).each(function() {
            $(this).attr('name', 'Property_all_data[property_transfer_value][' + index_val + ']');
        });

        $(property_exchange).each(function() {
            $(this).attr('name', 'Property_all_data[property_exchange][' + index_val + ']');
        });

        $(relationship_to_you).each(function() {
            $(this).attr('name', 'Property_all_data[relationship_to_you][' + index_val + ']');
        });

        $(property_transfer_date).each(function() {
            $(this).attr('name', 'Property_all_data[property_transfer_date][' + index_val + ']');
        });

        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        cln.find('textarea').val('');
        $(itm).after(cln);
    }
}

function addListEnvironmentLawForm() {
    // list_environment_law_data
    var clnln = $(document).find(".list_environment_law_data").length;

    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {

        var itm = $(document).find(".list_environment_law_data").last();
        var index_val = $(itm).index() + 1;
        var cln = $(itm).clone();

        var name = cln.find('.name');
        var street_number = cln.find('.street_number');
        var city = cln.find('.city');
        var state = cln.find('.state');
        var zip = cln.find('.zip');
        var gov_name = cln.find('.gov_name');
        var gov_street_number = cln.find('.gov_street_number');
        var gov_city = cln.find('.gov_city');
        var gov_state = cln.find('.gov_state');
        var gov_zip = cln.find('.gov_zip');
        var notice_date = cln.find('.notice_date');
        var environment_law_know = cln.find('.environment_law_know');

        $(name).each(function() {
            $(this).attr('name', 'list_environment_law_data[name][' + index_val + ']');
        });

        $(street_number).each(function() {
            $(this).attr('name', 'list_environment_law_data[street_number][' + index_val + ']');
        });

        $(city).each(function() {
            $(this).attr('name', 'list_environment_law_data[city][' + index_val + ']');
        });
        $(state).each(function() {
            $(this).attr('name', 'list_environment_law_data[state][' + index_val + ']');
        });
        $(zip).each(function() {
            $(this).attr('name', 'list_environment_law_data[zip][' + index_val + ']');
        });
        $(gov_name).each(function() {
            $(this).attr('name', 'list_environment_law_data[gov_name][' + index_val + ']');
        });
        $(gov_street_number).each(function() {
            $(this).attr('name', 'list_environment_law_data[gov_street_number][' + index_val + ']');
        });
        $(gov_city).each(function() {
            $(this).attr('name', 'list_environment_law_data[gov_city][' + index_val + ']');
        });
        $(gov_state).each(function() {
            $(this).attr('name', 'list_environment_law_data[gov_state][' + index_val + ']');
        });
        $(gov_zip).each(function() {
            $(this).attr('name', 'list_environment_law_data[gov_zip][' + index_val + ']');
        });
        $(notice_date).each(function() {
            $(this).attr('name', 'list_environment_law_data[notice_date][' + index_val + ']');
        });
        $(environment_law_know).each(function() {
            $(this).attr('name', 'list_environment_law_data[environment_law_know][' + index_val + ']');
        });


        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        cln.find('textarea').val('');
        $(itm).after(cln);
    }
}



function addPropertyTransferredCreditorsForm() {

    var clnln = $(document).find(".property_transferred_creditors_data").length;

    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {
        var itm = $(document).find(".property_transferred_creditors_data").last();
        var index_val = $(itm).index() + 1;
        var cln = $(itm).clone();


        var person_paid_address = cln.find('.person_paid_address');
        var person_paid_street = cln.find('.person_paid_street');
        var person_paid_city = cln.find('.person_paid_city');
        var person_paid_state = cln.find('.person_paid_state');
        var person_paid_zip = cln.find('.person_paid_zip');
        var property_transfer_value = cln.find('.property_transfer_value');
        var property_transfer_date = cln.find('.property_transfer_date');
        var property_transfer_amount_payment = cln.find('.property_transfer_amount_payment');

        $(person_paid_address).each(function() {
            $(this).attr('name', 'property_transferred_creditors_data[person_paid_address][' + index_val + ']');
        });
        $(person_paid_street).each(function() {
            $(this).attr('name', 'property_transferred_creditors_data[person_paid_street][' + index_val + ']');
        });

        $(person_paid_city).each(function() {
            $(this).attr('name', 'property_transferred_creditors_data[person_paid_city][' + index_val + ']');
        });

        $(person_paid_state).each(function() {
            $(this).attr('name', 'property_transferred_creditors_data[person_paid_state][' + index_val + ']');
        });
        $(person_paid_zip).each(function() {
            $(this).attr('name', 'property_transferred_creditors_data[person_paid_zip][' + index_val + ']');
        });
        $(property_transfer_value).each(function() {
            $(this).attr('name', 'property_transferred_creditors_data[property_transfer_value][' + index_val + ']');
        });
        $(property_transfer_date).each(function() {
            $(this).attr('name', 'property_transferred_creditors_data[property_transfer_date][' + index_val + ']');
        });
        $(property_transfer_amount_payment).each(function() {
            $(this).attr('name', 'property_transferred_creditors_data[property_transfer_amount_payment][' + index_val + ']');
        });

        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');

        $(itm).after(cln);
    }
}



function addListFinancialInstitutionsForm() {
    var clnln = $(document).find(".list_financial_institutions_data").length;

    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {

        var itm = $(document).find(".list_financial_institutions_data").last();
        var index_val = $(itm).index() + 1;
        var cln = $(itm).clone();
        var name = cln.find('.name');
        var street_number = cln.find('.street_number');
        var city = cln.find('.city');
        var state = cln.find('.state');
        var zip = cln.find('.zip');
        var date_issued = cln.find('.date_issued');

        $(name).each(function() {
            $(this).attr('name', 'list_financial_institutions_data[name][' + index_val + ']');
        });

        $(street_number).each(function() {
            $(this).attr('name', 'list_financial_institutions_data[street_number][' + index_val + ']');
        });

        $(city).each(function() {
            $(this).attr('name', 'list_financial_institutions_data[city][' + index_val + ']');
        });

        $(state).each(function() {
            $(this).attr('name', 'list_financial_institutions_data[state][' + index_val + ']');
        });

        $(zip).each(function() {
            $(this).attr('name', 'list_financial_institutions_data[zip][' + index_val + ']');
        });

        $(date_issued).each(function() {
            $(this).attr('name', 'list_financial_institutions_data[date_issued][' + index_val + ']');
        });

        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');

        $(itm).after(cln);
    }
}


function addJointsSocialSecurityForm() {
    //list_judicial_proceedings_data
    var clnln = $(document).find(".list_judicial_proceedings_data").length;

    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {

        var itm = $(document).find(".list_judicial_proceedings_data").last();
        var index_val = $(itm).index() + 1;

        var cln = $(itm).clone();
        var case_name = cln.find('.case_name');
        var name = cln.find('.name');
        var street_number = cln.find('.street_number');
        var city = cln.find('.city');
        var state = cln.find('.state');
        var zip = cln.find('.zip');
        var nature_case = cln.find('.nature_case');
        var case_number = cln.find('.case_number');

        $(case_number).each(function() {
            $(this).attr('name', 'list_judicial_proceedings_data[case_number][' + index_val + ']');
        });

        $(case_name).each(function() {
            $(this).attr('name', 'list_judicial_proceedings_data[case_name][' + index_val + ']');
        });

        $(name).each(function() {
            $(this).attr('name', 'list_judicial_proceedings_data[name][' + index_val + ']');
        });

        $(street_number).each(function() {
            $(this).attr('name', 'list_judicial_proceedings_data[street_number][' + index_val + ']');
        });

        $(city).each(function() {
            $(this).attr('name', 'list_judicial_proceedings_data[city][' + index_val + ']');
        });

        $(state).each(function() {
            $(this).attr('name', 'list_judicial_proceedings_data[state][' + index_val + ']');
        });

        $(zip).each(function() {
            $(this).attr('name', 'list_judicial_proceedings_data[zip][' + index_val + ']');
        });

        $(nature_case).each(function() {
            $(this).attr('name', 'list_judicial_proceedings_data[nature_case][' + index_val + ']');
        });

        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');

        $(itm).after(cln);
    }
}


function addPropertyAllForm() {
    // Property_all_data
    var clnln = $(document).find(".Property_all_data").length;

    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {

        var itm = $(document).find(".Property_all_data").last();
        var index_val = $(itm).index() + 1;
        var cln = $(itm).clone();

        var name = cln.find('.name');
        var street_number = cln.find('.street_number');
        var city = cln.find('.city');
        var state = cln.find('.state');
        var zip = cln.find('.zip');
        var property_transfer_value = cln.find('.property_transfer_value');
        var property_exchange = cln.find('.property_exchange');
        var relationship_to_you = cln.find('.relationship_to_you');
        var property_transfer_date = cln.find('.property_transfer_date');

        $(name).each(function() {
            $(this).attr('name', 'Property_all_data[name][' + index_val + ']');
        });

        $(street_number).each(function() {
            $(this).attr('name', 'Property_all_data[street_number][' + index_val + ']');
        });

        $(city).each(function() {
            $(this).attr('name', 'Property_all_data[city][' + index_val + ']');
        });

        $(state).each(function() {
            $(this).attr('name', 'Property_all_data[state][' + index_val + ']');
        });

        $(zip).each(function() {
            $(this).attr('name', 'Property_all_data[zip][' + index_val + ']');
        });

        $(property_transfer_value).each(function() {
            $(this).attr('name', 'Property_all_data[property_transfer_value][' + index_val + ']');
        });

        $(property_exchange).each(function() {
            $(this).attr('name', 'Property_all_data[property_exchange][' + index_val + ']');
        });

        $(relationship_to_you).each(function() {
            $(this).attr('name', 'Property_all_data[relationship_to_you][' + index_val + ']');
        });

        $(property_transfer_date).each(function() {
            $(this).attr('name', 'Property_all_data[property_transfer_date][' + index_val + ']');
        });

        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        cln.find('textarea').val('');
        $(itm).after(cln);
    }
}

function savings_account_addmore() {
    var clnln = $(document).find(".savings_account_mutisec").length;
    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {
        var itm = $(document).find(".savings_account_mutisec").last();
        var index_val = $(itm).index() + 1;
        var cln = $(itm).clone();
        $rowNo = itm.attr('rowNo');
        if ($rowNo == undefined || $rowNo == null || $rowNo == NaN || $rowNo == '') {
            $rowNo = 1;
        } else {
            $rowNo = parseInt($rowNo) + 1;
        }
        itm.attr('rowNo', $rowNo);
        var index_val = $(itm).index() + 1;
        var cln = $(itm).clone();
        cln.find('.savings_account_description').val('');
        cln.find('.savings_account_property_value').val('');
        var savings_account_description = cln.find('.savings_account_description');
        var savings_account_property_value = cln.find('.savings_account_property_value');

        $(savings_account_description).each(function() {
            $(this).attr('name', 'savings_account[data][description][' + index_val + ']');
        });
        $(savings_account_property_value).each(function() {
            $(this).attr('name', 'savings_account[data][property_value][' + index_val + ']');
        });
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(itm).after(cln);
        $('.remove-other-names').show();

    }
}

function common_financial_addmore(element, removebuttonclass) {
    var clnln = $(document).find("." + element + "_mutisec").length;
    console.log("hello");
    if (clnln > 3) {
        alert("You can add only 3 entries.");
        return false;
    } else {
        var itm = $(document).find("." + element + "_mutisec").last();
        var index_val = $(itm).index() + 1;
        var cln = $(itm).clone();
        $rowNo = itm.attr('rowNo');
        if ($rowNo == undefined || $rowNo == null || $rowNo == NaN || $rowNo == '') {
            $rowNo = 1;
        } else {
            $rowNo = parseInt($rowNo) + 1;
        }
        itm.attr('rowNo', $rowNo);
        var index_val = $(itm).index() + 1;
        var cln = $(itm).clone();
        cln.find('.' + element + '_type_of_account').val('');
        cln.find('.' + element + '_description').val('');
        cln.find('.' + element + '_property_value').val('');

        var common_type_of_account = cln.find('.' + element + '_type_of_account');
        var common_description = cln.find('.' + element + '_description');
        var common_property_value = cln.find('.' + element + '_property_value');

        $(common_type_of_account).each(function() {
            $(this).attr('name', element + '[data][type_of_account][' + index_val + ']');
        });
        $(common_description).each(function() {
            $(this).attr('name', element + '[data][description][' + index_val + ']');
        });
        $(common_property_value).each(function() {
            $(this).attr('name', element + '[data][property_value][' + index_val + ']');
        });

        $(itm).after(cln);
        $('.remove-' + removebuttonclass).show();

    }
}

function common_financial_addmore_with_limit(element, entries_count) {
    var clnln = $(document).find("." + element + "_mutisec").length;
    if (clnln > (entries_count - 1)) {
        alert("You can add only " + entries_count + " entries.");
        return false;
    } else {
        var itm = $(document).find("." + element + "_mutisec").last();
        var index_val = $(itm).index() + 1;
        $rowNo = itm.attr('rowNo');
        if ($rowNo == undefined || $rowNo == null || $rowNo == NaN || $rowNo == '') {
            $rowNo = 1;
        } else {
            $rowNo = parseInt($rowNo) + 1;
        }
        
        itm.attr('rowNo', $rowNo);
        var index_val = $(itm).index() + 1;
        var cln = $(itm).clone().find("input").val("").end().find("textarea").val("").end().find("select").val("").end();
        cln.find('.' + element + '_type_of_account').val('');
        cln.find('.' + element + '_description').val('');
        cln.find('.' + element + '_property_value').val('');
        
        var common_type_of_account = cln.find('.' + element + '_type_of_account');
        var common_description = cln.find('.' + element + '_description');
        var common_property_value = cln.find('.' + element + '_property_value');
        
        $(common_type_of_account).each(function() {
            $(this).attr('name', element + '[data][type_of_account][' + index_val + ']');
        });
        $(common_description).each(function() {
            $(this).attr('name', element + '[data][description][' + index_val + ']');
        });
        $(common_property_value).each(function() {
            $(this).attr('name', element + '[data][property_value][' + index_val + ']');
        });
        
        $(itm).after(cln);
        //$('.remove-' + removebuttonclass).show();

    }
}

function other_financial_addmore(element) {
    var clnln = $(document).find("." + element + "_mutisec").length;
    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {
        var itm = $(document).find("." + element + "_mutisec").last();
        var index_val = clnln;
        var cln = $(itm).clone().find("input").val("").end().find("textarea").val("").end().find("select").val("").end();

        $rowNo = itm.attr('rowNo');
        if ($rowNo == undefined || $rowNo == null || $rowNo == NaN || $rowNo == '') {
            $rowNo = 1;
        } else {
            $rowNo = parseInt($rowNo) + 1;
        }
        itm.attr('rowNo', $rowNo);
        var index_val = $(itm).index() + 1;
        var cln = $(itm).clone();
        cln.find('.' + element + '_description').val('');
        cln.find('.' + element + '_property_value').val('');

        var common_description = cln.find('.' + element + '_description');
        var common_property_value = cln.find('.' + element + '_property_value');

        $(common_description).each(function() {
            $(this).attr('name', element + '[data][description][' + index_val + ']');
        });
        $(common_property_value).each(function() {
            $(this).attr('name', element + '[data][property_value][' + index_val + ']');
        });

        $(itm).after(cln);
        $('.remove-other-financial-account-mutisec').show();

    }
}

function remove_clone_box(box_class) {
    var clnln = $(document).find("." + box_class).length;
    if (clnln <= 1) {
        alert("You can delete because min 1 entries require.");
        return false;
    } else {
        $(document).find("." + box_class).last().remove();
        var itm = $(document).find("." + box_class).last();
        var remove_btn_index = itm.find('button.remove_clone').data('index');
        if (remove_btn_index > 0) {
            itm.find('button.' + button_class).show();
        }
    }
}

function addPaymentPastOneYearForm() {
    var clnln = $(document).find(".payment_past_one_year").length;
    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {
        var itm = $(document).find(".payment_past_one_year").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone().find("input").val("").end();

        var creditor_address_past_one_year = cln.find('.creditor_address_past_one_year');
        var creditor_street_past_one_year = cln.find('.creditor_street_past_one_year');
        var creditor_city_past_one_year = cln.find('.creditor_city_past_one_year');
        var creditor_state_past_one_year = cln.find('.creditor_state_past_one_year');
        var creditor_zip_past_one_year = cln.find('.creditor_zip_past_one_year');
        var past_one_year_payment_dates = cln.find('.past_one_year_payment_dates');
        var past_one_year_total_amount_paid = cln.find('.past_one_year_total_amount_paid');
        var past_one_year_amount_still_owed = cln.find('.past_one_year_amount_still_owed');
        var past_one_year_payment_reason = cln.find('.past_one_year_payment_reason');

        //work only update case
        // cln.find('.property_vehicle_ids').remove();
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(creditor_address_past_one_year).each(function() {
            $(this).attr('name', 'past_one_year_data[creditor_address_past_one_year][' + index_val + ']');
        });
        $(creditor_street_past_one_year).each(function() {
            $(this).attr('name', 'past_one_year_data[creditor_street_past_one_year][' + index_val + ']');
        });
        $(creditor_city_past_one_year).each(function() {
            $(this).attr('name', 'past_one_year_data[creditor_city_past_one_year][' + index_val + ']');
        });
        $(creditor_state_past_one_year).each(function() {
            $(this).attr('name', 'past_one_year_data[creditor_state_past_one_year][' + index_val + ']');
        });
        $(creditor_zip_past_one_year).each(function() {
            $(this).attr('name', 'past_one_year_data[creditor_zip_past_one_year][' + index_val + ']');
        });
        $(past_one_year_payment_dates).each(function() {
            $(this).attr('name', 'past_one_year_data[past_one_year_payment_dates][' + index_val + ']');
        });
        $(past_one_year_total_amount_paid).each(function() {
            $(this).attr('name', 'past_one_year_data[past_one_year_total_amount_paid][' + index_val + ']');
        });
        $(past_one_year_amount_still_owed).each(function() {
            $(this).attr('name', 'past_one_year_data[past_one_year_amount_still_owed][' + index_val + ']');
        });
        $(past_one_year_payment_reason).each(function() {
            $(this).attr('name', 'past_one_year_data[past_one_year_payment_reason][' + index_val + ']');
        });

        $(itm).after(cln);

    }
}

function addTransfersPropertyForm() {
    var clnln = $(document).find(".transfers_property").length;
    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {
        var itm = $(document).find(".transfers_property").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone().find("input").val("").end();

        var creditor_address_transfers_property = cln.find('.creditor_address_transfers_property');
        var creditor_street_transfers_property = cln.find('.creditor_street_transfers_property');
        var creditor_city_transfers_property = cln.find('.creditor_city_transfers_property');
        var creditor_state_transfers_property = cln.find('.creditor_state_transfers_property');
        var creditor_zip_transfers_property = cln.find('.creditor_zip_transfers_property');
        var payment_dates_transfers_property = cln.find('.payment_dates_transfers_property');
        var total_amount_paid_transfers_property = cln.find('.total_amount_paid_transfers_property');
        var amount_still_owed_transfers_property = cln.find('.amount_still_owed_transfers_property');
        var payment_reason_transfers_property = cln.find('.payment_reason_transfers_property');

        //work only update case
        // cln.find('.property_vehicle_ids').remove();
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(creditor_address_transfers_property).each(function() {
            $(this).attr('name', 'transfers_property_data[creditor_address_transfers_property][' + index_val + ']');
        });
        $(creditor_street_transfers_property).each(function() {
            $(this).attr('name', 'transfers_property_data[creditor_street_transfers_property][' + index_val + ']');
        });
        $(creditor_city_transfers_property).each(function() {
            $(this).attr('name', 'transfers_property_data[creditor_city_transfers_property][' + index_val + ']');
        });
        $(creditor_state_transfers_property).each(function() {
            $(this).attr('name', 'transfers_property_data[creditor_state_transfers_property][' + index_val + ']');
        });
        $(creditor_zip_transfers_property).each(function() {
            $(this).attr('name', 'transfers_property_data[creditor_zip_transfers_property][' + index_val + ']');
        });
        $(payment_dates_transfers_property).each(function() {
            $(this).attr('name', 'transfers_property_data[payment_dates_transfers_property][' + index_val + ']');
        });
        $(total_amount_paid_transfers_property).each(function() {
            $(this).attr('name', 'transfers_property_data[total_amount_paid_transfers_property][' + index_val + ']');
        });
        $(amount_still_owed_transfers_property).each(function() {
            $(this).attr('name', 'transfers_property_data[amount_still_owed_transfers_property][' + index_val + ']');
        });
        $(payment_reason_transfers_property).each(function() {
            $(this).attr('name', 'transfers_property_data[payment_reason_transfers_property][' + index_val + ']');
        });

        $(itm).after(cln);

    }
}

function addListLawsuitsForm() {
    var clnln = $(document).find(".list_lawsuits").length;
    if (clnln > 7) {
        alert("You can add only 8 entries.");
        return false;
    } else {
        var itm = $(document).find(".list_lawsuits").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone().find("input").val("").end();

        var case_title = cln.find('.case_title');
        var case_number = cln.find('.case_number');
        var case_nature = cln.find('.case_nature');
        var agency_location = cln.find('.agency_location');
        var agency_street = cln.find('.agency_street');
        var agency_city = cln.find('.agency_city');
        var agency_state = cln.find('.agency_state');
        var agency_zip = cln.find('.agency_zip');
        var disposition = cln.find('.disposition');
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(case_title).each(function() {
            $(this).attr('name', 'list_lawsuits_data[case_title][' + index_val + ']');
        });
        $(case_number).each(function() {
            $(this).attr('name', 'list_lawsuits_data[case_number][' + index_val + ']');
        });
        $(disposition).each(function() {
            $(this).attr('name', 'list_lawsuits_data[disposition][' + index_val + ']');
        });
        $(agency_location).each(function() {
            $(this).attr('name', 'list_lawsuits_data[agency_location][' + index_val + ']');
        });
        $(agency_street).each(function() {
            $(this).attr('name', 'list_lawsuits_data[agency_street][' + index_val + ']');
        });
        $(agency_street).each(function() {
            $(this).attr('name', 'list_lawsuits_data[agency_street][' + index_val + ']');
        });
        $(agency_city).each(function() {
            $(this).attr('name', 'list_lawsuits_data[agency_city][' + index_val + ']');
        });
        $(agency_state).each(function() {
            $(this).attr('name', 'list_lawsuits_data[agency_state][' + index_val + ']');
        });
        $(agency_zip).each(function() {
            $(this).attr('name', 'list_lawsuits_data[agency_zip][' + index_val + ']');
        });
        $(itm).after(cln);

    }
}

function addSetoffsCreditorForm() {
    var clnln = $(document).find(".setoffs_creditor_data").length;
    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {
        var itm = $(document).find(".setoffs_creditor_data").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone().find("input").val("").end();

        var creditors_address = cln.find('.creditors_address');
        var creditor_street = cln.find('.creditor_street');
        var creditor_city = cln.find('.creditor_city');
        var creditor_state = cln.find('.creditor_state');
        var creditor_zip = cln.find('.creditor_zip');
        var creditors_action = cln.find('.creditors_action');
        var date_action = cln.find('.date_action');
        var account_number = cln.find('.account_number');
        var amount_data = cln.find('.amount_data');

        $(creditors_address).each(function() {
            $(this).attr('name', 'setoffs_creditor_data[creditors_address][' + index_val + ']');
        });
        $(creditor_street).each(function() {
            $(this).attr('name', 'setoffs_creditor_data[creditor_street][' + index_val + ']');
        });
        $(creditor_city).each(function() {
            $(this).attr('name', 'setoffs_creditor_data[creditor_city][' + index_val + ']');
        });
        $(creditor_state).each(function() {
            $(this).attr('name', 'setoffs_creditor_data[creditor_state][' + index_val + ']');
        });
        $(creditor_zip).each(function() {
            $(this).attr('name', 'setoffs_creditor_data[creditor_zip][' + index_val + ']');
        });
        $(creditors_action).each(function() {
            $(this).attr('name', 'setoffs_creditor_data[creditors_action][' + index_val + ']');
        });
        $(date_action).each(function() {
            $(this).attr('name', 'setoffs_creditor_data[date_action][' + index_val + ']');
        });
        $(account_number).each(function() {
            $(this).attr('name', 'setoffs_creditor_data[account_number][' + index_val + ']');
        });

        $(amount_data).each(function() {
            $(this).attr('name', 'setoffs_creditor_data[amount_data][' + index_val + ']');
        });
        $(itm).after(cln);

    }
}

function addlistAnyGiftsForm() {
    var clnln = $(document).find(".list_any_gifts_data").length;
    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {
        var itm = $(document).find(".list_any_gifts_data").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone().find("input").val("").end();

        var recipient_address = cln.find('.recipient_address');
        var creditor_street = cln.find('.creditor_street');
        var creditor_city = cln.find('.creditor_city');
        var creditor_state = cln.find('.creditor_state');
        var creditor_zip = cln.find('.creditor_zip');
        var relationship = cln.find('.relationship');
        var gifts = cln.find('.gifts');
        var gifts_date_from = cln.find('.gifts_date_from');
        var gifts_date_to = cln.find('.gifts_date_to');
        var gifts_value = cln.find('.gifts_value');

        $(recipient_address).each(function() {
            $(this).attr('name', 'list_any_gifts_data[recipient_address][' + index_val + ']');
        });
        $(creditor_street).each(function() {
            $(this).attr('name', 'list_any_gifts_data[creditor_street][' + index_val + ']');
        });
        $(creditor_city).each(function() {
            $(this).attr('name', 'list_any_gifts_data[creditor_city][' + index_val + ']');
        });
        $(creditor_state).each(function() {
            $(this).attr('name', 'list_any_gifts_data[creditor_state][' + index_val + ']');
        });
        $(creditor_zip).each(function() {
            $(this).attr('name', 'list_any_gifts_data[creditor_zip][' + index_val + ']');
        });
        $(relationship).each(function() {
            $(this).attr('name', 'list_any_gifts_data[relationship][' + index_val + ']');
        });
        $(gifts).each(function() {
            $(this).attr('name', 'list_any_gifts_data[gifts][' + index_val + ']');
        });
        $(gifts_date_from).each(function() {
            $(this).attr('name', 'list_any_gifts_data[gifts_date_from][' + index_val + ']');
        });

        $(gifts_date_to).each(function() {
            $(this).attr('name', 'list_any_gifts_data[gifts_date_to][' + index_val + ']');
        });

        $(gifts_value).each(function() {
            $(this).attr('name', 'list_any_gifts_data[gifts_value][' + index_val + ']');
        });
        $(itm).after(cln);

    }
}

function addGiftsCharityForm() {
    var clnln = $(document).find(".gifts_charity_data").length;
    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {
        var itm = $(document).find(".gifts_charity_data").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone().find("input").val("").end();

        var charity_address = cln.find('.charity_address');
        var charity_street = cln.find('.charity_street');
        var charity_city = cln.find('.charity_city');
        var charity_state = cln.find('.charity_state');
        var charity_zip = cln.find('.charity_zip');
        var charity_contribution = cln.find('.charity_contribution');
        var charity_contribution_date = cln.find('.charity_contribution_date');
        var charity_contribution_value = cln.find('.charity_contribution_value');

        $(charity_address).each(function() {
            $(this).attr('name', 'gifts_charity_data[charity_address][' + index_val + ']');
        });
        $(charity_street).each(function() {
            $(this).attr('name', 'gifts_charity_data[charity_street][' + index_val + ']');
        });
        $(charity_city).each(function() {
            $(this).attr('name', 'gifts_charity_data[charity_city][' + index_val + ']');
        });
        $(charity_state).each(function() {
            $(this).attr('name', 'gifts_charity_data[charity_state][' + index_val + ']');
        });
        $(charity_zip).each(function() {
            $(this).attr('name', 'gifts_charity_data[charity_zip][' + index_val + ']');
        });
        $(charity_contribution).each(function() {
            $(this).attr('name', 'gifts_charity_data[charity_contribution][' + index_val + ']');
        });
        $(charity_contribution_date).each(function() {
            $(this).attr('name', 'gifts_charity_data[charity_contribution_date][' + index_val + ']');
        });
        $(charity_contribution_value).each(function() {
            $(this).attr('name', 'gifts_charity_data[charity_contribution_value][' + index_val + ']');
        });
        $(itm).after(cln);

    }
}

function addLossesFromFireForm() {
    var clnln = $(document).find(".losses_from_fire_data").length;
    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {
        var itm = $(document).find(".losses_from_fire_data").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone().find("input").val("").end();

        var loss_description = cln.find('.loss_description');
        var transferred_description = cln.find('.transferred_description');
        var loss_date_payment = cln.find('.loss_date_payment');
        var loss_amount_payment = cln.find('.loss_amount_payment');
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(loss_description).each(function() {
            $(this).attr('name', 'losses_from_fire_data[loss_description][' + index_val + ']');
        });
        $(transferred_description).each(function() {
            $(this).attr('name', 'losses_from_fire_data[transferred_description][' + index_val + ']');
        });
        $(loss_date_payment).each(function() {
            $(this).attr('name', 'losses_from_fire_data[loss_date_payment][' + index_val + ']');
        });
        $(loss_amount_payment).each(function() {
            $(this).attr('name', 'losses_from_fire_data[loss_amount_payment][' + index_val + ']');
        });
        $(itm).after(cln);

    }
}

function addPropertyTransferredForm() {
    var clnln = $(document).find(".property_transferred_data").length;
    if (clnln > 3) {
        alert("You can add only 4 entries.");
        return false;
    } else {
        var itm = $(document).find(".property_transferred_data").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone().find("input").val("").end();

        var person_paid = cln.find('.person_paid');
        var person_paid_street = cln.find('.person_paid_street');
        var person_paid_address_line2 = cln.find('.person_paid_address_line2');
        var person_paid_city = cln.find('.person_paid_city');
        var person_paid_state = cln.find('.person_paid_state');
        var person_paid_zip = cln.find('.person_paid_zip');
        var person_made_payment = cln.find('.person_made_payment');
        var property_transferred_value = cln.find('.property_transferred_value');
        var property_transferred_date = cln.find('.property_transferred_date');
        var property_transferred_payment = cln.find('.property_transferred_payment');
        cln.find('input[type="text"]').val('');
        cln.find('input[type="number"]').val('');
        cln.find('select').val('');
        $(person_paid).each(function() {
            $(this).attr('name', 'losses_from_fire_data[person_paid][' + index_val + ']');
        });
        $(person_paid_street).each(function() {
            $(this).attr('name', 'losses_from_fire_data[person_paid_street][' + index_val + ']');
        });
        $(person_paid_address_line2).each(function() {
            $(this).attr('name', 'losses_from_fire_data[person_paid_address_line2][' + index_val + ']');
        });
        $(person_paid_city).each(function() {
            $(this).attr('name', 'losses_from_fire_data[person_paid_city][' + index_val + ']');
        });
        $(person_paid_state).each(function() {
            $(this).attr('name', 'losses_from_fire_data[person_paid_state][' + index_val + ']');
        });
        $(person_paid_zip).each(function() {
            $(this).attr('name', 'losses_from_fire_data[person_paid_zip][' + index_val + ']');
        });
        $(person_made_payment).each(function() {
            $(this).attr('name', 'losses_from_fire_data[person_made_payment][' + index_val + ']');
        });
        $(property_transferred_value).each(function() {
            $(this).attr('name', 'losses_from_fire_data[property_transferred_value][' + index_val + ']');
        });
        $(property_transferred_date).each(function() {
            $(this).attr('name', 'losses_from_fire_data[property_transferred_date][' + index_val + ']');
        });
        $(property_transferred_payment).each(function() {
            $(this).attr('name', 'losses_from_fire_data[property_transferred_payment][' + index_val + ']');
        });
        $(itm).after(cln);

    }
}


function removeButton(mainclass, removeclass) {
    var clnln = $(mainclass).length;
    var itm = $(document).find(mainclass).last();
    if (clnln > 1) {
        itm.remove();
    }
    if (clnln == 2) {
        $(removeclass).hide();
    }
}

/** Kamlesh Changes */
function addListFinancialInstitutionsForm() {
    var clnln=$(document).find(".list_financial_institutions_data").length;
	if(clnln>5){
		alert("You can add only 6 entries.");return false;
	}else{
		var itm = $(document).find(".list_financial_institutions_data").last();
		var index_val = ($(itm).index() + 1);
		var cln=$(itm).clone().find("input").val("").end();

		var name=cln.find('.name');
		var street_number=cln.find('.street_number');
		var city=cln.find('.city');
		var state=cln.find('.state');
		var zip=cln.find('.zip');
		var date_issued=cln.find('.date_issued');

		$(name).each(function() {
			$(this).attr('name','list_financial_institutions_data[name]['+index_val+']');
		});
		$(street_number).each(function() {
			$(this).attr('name','list_financial_institutions_data[street_number]['+index_val+']');
		});
		$(city).each(function() {
			$(this).attr('name','list_financial_institutions_data[city]['+index_val+']');
		});

		$(state).each(function() {
			$(this).attr('name','list_financial_institutions_data[state]['+index_val+']');
		});

		$(zip).each(function() {
			$(this).attr('name','list_financial_institutions_data[zip]['+index_val+']');
		});

		$(date_issued).each(function() {
			$(this).attr('name','list_financial_institutions_data[date_issued]['+index_val+']');
		});

		$(itm).after(cln);

	}
}