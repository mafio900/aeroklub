$(document).ready(function() {
    if(typeof jQuery().loadModal !== "undefined") {
        $('.add-button').loadModal({klasa : 'loadValidationStatus'});
        $('.edit-button').loadModal({klasa : 'loadValidationStatus'});
    }
});
