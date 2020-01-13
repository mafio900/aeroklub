$(document).ready(function() {
    if(typeof jQuery().deleteConfirm !== "undefined"){
        $(".delete-button").deleteConfirm();
    }
    if(typeof jQuery().loadModal !== "undefined") {
        $('.add-button').loadModal({klasa : 'loadValidationRezUsluga'});
        $('.edit-button').loadModal({klasa : 'loadValidationRezUsluga'});
    }
});
