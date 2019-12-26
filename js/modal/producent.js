$(document).ready(function() {
    if(typeof jQuery().loadModal !== "undefined") {
        $('.add-button').loadModal({klasa : 'loadValidationProducent'});
        $('.edit-button').loadModal({klasa : 'loadValidationProducent'});
    }
});
