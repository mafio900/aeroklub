$(document).ready(function() {
    if(typeof jQuery().loadModal !== "undefined") {
        $('.add-button').loadModal({klasa : 'loadValidationUser'});
        $('.edit-button').loadModal({klasa : 'loadValidationUser'});
    }
});
