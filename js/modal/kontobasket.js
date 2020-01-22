$(document).ready(function() {
    if(typeof jQuery().loadModal !== "undefined") {
        $('.add-button').loadModal({klasa: 'LoadValidationBasketAdd'});
        $('.edit-button').loadModal({klasa: 'LoadValidationBasketFinish'});
    }
});
