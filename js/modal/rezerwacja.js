$(document).ready(function() {
    if(typeof jQuery().loadModal !== "undefined") {
        $('.add-button').loadModal({klasa : 'loadValidationRezerwacja'});
        $('.edit-button').loadModal({klasa : 'loadValidationRezerwacja'});
    }
});
