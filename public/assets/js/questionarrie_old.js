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
        var mortgage_address = cln.find('.mortgage_address');
        var mortgage_loan = cln.find('.mortgage_loan');
        var mortgage_loan_rate = cln.find('.mortgage_loan_rate');
        var payments_left = cln.find('.payments_left');
        var estimated_property_value = cln.find('.estimated_property_value');

        var monthly_payment = cln.find('.monthly_payment');
        var property = cln.find('.property');
        var taxes_insurance = cln.find('.taxes_insurance');
        var currently_lived = cln.find('.currently_lived');
        $(property).each(function() {
            $(this).attr('id', $(this).attr('id') + index_val);
            $(this).attr('name', 'property_resident[property][' + index_val + ']');
            $(this).next('label').attr('for', $(this).attr('id'));
        });
        $(address).each(function() {
            $(this).attr('name', 'property_resident[address][' + index_val + ']');
        });
        $(mortgage_address).each(function() {
            $(this).attr('name', 'property_resident[mortgage_address][' + index_val + ']');
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
            $(this).attr('id', $(this).attr('id') + '_' + index_val);
            $(this).attr('name', 'property_resident[currently_lived][' + index_val + ']');
            $(this).next('label').attr('for', $(this).attr('id'));
        });
        $(owned_by).each(function() {
            $(this).attr('id', $(this).attr('id') + index_val);
            $(this).attr('name', 'property_resident[property_owned_by][' + index_val + ']');
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

        var vehicle_property_type = cln.find('.vehicle_property_type');
        var vehicle_property_year = cln.find('.vehicle_property_year');
        var vehicle_property_make = cln.find('.vehicle_property_make');
        var vehicle_property_model = cln.find('.vehicle_property_model');
        var vehicle_property_mileage = cln.find('.vehicle_property_mileage');
        var vehicle_property_other_info = cln.find('.vehicle_property_other_info');
        var vehicle_property_estimated_value = cln.find('.vehicle_property_estimated_value');
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

function getOwnTypeProperty_obj(value, obj) {

    if (value == 'yes') {
        $(obj).parents('.getOwnTypeProperty_obj_data').next('.getOwnTypeProperty').removeClass("hide-data");
        // document.getElementById('own_property_data').classList.remove("hide-data");
    } else if (value == 'no') {
        $(obj).parents('.getOwnTypeProperty_obj_data').next('.getOwnTypeProperty').addClass("hide-data");
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
function geCodebtorCosignerItems(value) {
    if (value == 'yes') {
        document.getElementById('codebtor_cosigner_data').classList.remove("hide-data");
    } else if (value == 'no') {
        document.getElementById('codebtor_cosigner_data').classList.add("hide-data");
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

        var dependent_relationship = cln.find('.dependent_relationship');
        var dependent_age = cln.find('.dependent_age');
        var dependent_live_with = cln.find('.dependent_live_with');
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
        cln.find('input').val('');
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

        $(itm).after(cln);
    }
}

function addInstallmentPaymentsForm() {
    // var itm2 = document.getElementById("installment-payments-1");
    // var cln2 = itm2.cloneNode(true);
    // document.getElementById("installment-payments-2").appendChild(cln2);
    var clnln = $(document).find(".installment_payments").length;
    if (clnln > 4) {
        alert("You can only describe 5 Other insurance.");
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

        //work only update case
        // cln.find('.property_vehicle_ids').remove();

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
    if (value == 'no') {
        document.getElementById('real_estate_taxes_data').classList.remove("hide-data");
    } else if (value == 'yes') {
        document.getElementById('real_estate_taxes_data').classList.add("hide-data");
    }
}

function getAmountIncludePropertyData(value) {
    if (value == 'no') {
        document.getElementById('amount_include_property_data').classList.remove("hide-data");
    } else if (value == 'yes') {
        document.getElementById('amount_include_property_data').classList.add("hide-data");
    }
}

function getAmountIncludehomeData(value) {
    if (value == 'no') {
        document.getElementById('amount_include_home_data').classList.remove("hide-data");
    } else if (value == 'yes') {
        document.getElementById('amount_include_home_data').classList.add("hide-data");
    }
}

function getAmountIncludeHomeOwnerData(value) {
    if (value == 'no') {
        document.getElementById('amount_include_homeowner_data').classList.remove("hide-data");
    } else if (value == 'yes') {
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
        var index_val = $(itm).index();
        var cln = $(itm).clone();

        var prev_address_add = cln.find('.prev_address_add');
        var prev_address_from = cln.find('.prev_address_from');
        var prev_address_to = cln.find('.prev_address_to');

        //work only update case
        // cln.find('.property_vehicle_ids').remove();

        $(prev_address_add).each(function() {
            $(this).attr('name', 'prev_address[address][' + index_val + ']');
        });
        $(prev_address_from).each(function() {
            $(this).attr('name', 'prev_address[from][' + index_val + ']');
        });
        $(prev_address_to).each(function() {
            $(this).attr('name', 'prev_address[to][' + index_val + ']');
        });

        $(itm).after(cln);

    }
}

function addNameAddressSpouseForm() {
    // var itm2 = document.getElementById("living-domestic-partner-1");
    // var cln2 = itm2.cloneNode(true);
    // document.getElementById("living-domestic-partner-2").appendChild(cln2);
    var clnln = $(document).find(".living_domestic_partners").length;
    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {
        var itm = $(document).find(".living_domestic_partners").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone();

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

        $(itm).after(cln);

    }
}

function addPrimarilyConsumerDebetsForm() {
    // var itm2 = document.getElementById("primarily-consumer-debets-1");
    // var cln2 = itm2.cloneNode(true);
    // document.getElementById("primarily-consumer-debets-2").appendChild(cln2);
    var clnln = $(document).find(".primarily_consumer_debets").length;
    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {
        var itm = $(document).find(".primarily_consumer_debets").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone();

        var creditor_address = cln.find('.creditor_address');
        var payment_dates = cln.find('.payment_dates');
        var total_amount_paid = cln.find('.total_amount_paid');
        var amount_still_owed = cln.find('.amount_still_owed');
        var creditor_payment_for = cln.find('.creditor_payment_for');

        //work only update case
        // cln.find('.property_vehicle_ids').remove();

        $(creditor_address).each(function() {
            $(this).attr('name', 'primarily_consumer_debets[creditor_address][' + index_val + ']');
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
    if (clnln > 4) {
        alert("You can add only 5 entries.");
        return false;
    } else {
        var itm = $(document).find(".primarily_non_consumer_debets").last();
        var index_val = $(itm).index();
        var cln = $(itm).clone();

        var non_consumer_creditor_address = cln.find('.non_consumer_creditor_address');
        var non_consumer_payment_dates = cln.find('.non_consumer_payment_dates');
        var non_consumer_total_amount_paid = cln.find('.non_consumer_total_amount_paid');
        var non_consumer_amount_still_owed = cln.find('.non_consumer_amount_still_owed');
        var non_consumer_creditor_payment_for = cln.find('.non_consumer_creditor_payment_for');

        //work only update case
        // cln.find('.property_vehicle_ids').remove();

        $(non_consumer_creditor_address).each(function() {
            $(this).attr('name', 'non_consumer[non_consumer_creditor_address][' + index_val + ']');
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
        var property_repossessed_creditor_Property = cln.find('.property_repossessed_creditor_Property');
        var property_repossessed_date = cln.find('.property_repossessed_date');
        var property_repossessed_what_happened = cln.find('.property_repossessed_what_happened');


        //work only update case
        // cln.find('.property_vehicle_ids').remove();

        $(property_repossessed_address).each(function() {
            $(this).attr('name', 'property_repossessed_data[creditor_address][' + index_val + ']');
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