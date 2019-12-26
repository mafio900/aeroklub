$(document).ready(function() {
    if(typeof jQuery().loadModal !== "undefined") {
        $('.add-button').loadModal({klasa : 'loadValidationSamolot'});
        $('.edit-button').loadModal({klasa : 'loadValidationSamolot'});
    }
});
