$(document).ready(function() {
    if(typeof jQuery().loadModal !== "undefined") {
        $('.add-button').loadModal({klasa: 'LoadValidationBasket'});
        $('.edit-button').loadModal({klasa: 'LoadValidationBasket'});
        $('.date').loadDatePicker();
    }
});
