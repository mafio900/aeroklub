(function($) {
    $.fn.loadSelect2 = function() {
        $('.js-example-basic-single').select2();
        $(".js-example-language").select2({language: "pl"});
        $('select').select2({
            dropdownParent: $('#modal')
}       );
    }
})(jQuery);
