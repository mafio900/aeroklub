$(document).ready(function(){
    $('.js-select2').select2({
        language: "pl"
    });
    $('#formularz').loadValidation("#formularz");
    $('#formularz').loadValidationRezerwacja();
    $('.date').loadDatePicker();
});
