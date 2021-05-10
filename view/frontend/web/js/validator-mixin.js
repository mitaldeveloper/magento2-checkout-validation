define([
    'jquery',
    'moment'
], function ($, moment) {
    'use strict';

    return function (validator) {
        validator.addRule(
            'custom-validate-telephone',
            function (value, params) {
                var phoneno = /^\(?([0-9]{3})\)?[-]?([0-9]{3})[-]?([0-9]{4})$/;

                if((value.match(phoneno))){
                    return true;
                }else{
                    return false;
                }                        
            },
            $.mage.__("Please enter phone number in form of 123-456-7890.")
        );

        return validator;
    };
});