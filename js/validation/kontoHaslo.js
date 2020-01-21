(function($) {
    $.fn.loadValidationKontoHaslo = function() {
        $.validator.addMethod("passwd", function(value, element) {
            return this.optional(element) || /^[^\s][0-9a-zA-Z_!@#$%^&*-]*$/.test(value);
        }, "Hasło może zawierać tylko litery (bez polskich znaków) i _!@#$%^&*-");

        $('input[type="password"]').rules( "add", {
            required: true,
            passwd: true,
            minlength: 4,
            maxlength: '30',
            nowhitespace: true,
            messages: {
                required: "To pole jest wymagane!",
                nowhitespace: "To pole nie może posiadać spacji!"
            }
        });
    }
})(jQuery);
