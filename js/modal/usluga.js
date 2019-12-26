$(document).ready(function() {
    if(typeof jQuery().loadModal !== "undefined") {
        $('.add-button').loadModal({klasa : 'loadValidationUsluga'});
        $('.edit-button').loadModal({klasa : 'loadValidationUsluga'});
    }
});
