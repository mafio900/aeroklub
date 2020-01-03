(function($) {
    $.fn.loadValidationSamolot = function() {
        $.validator.addMethod("valueNotEquals", function(value, element, arg){
            return arg !== value;
        }, "Value must not equal arg.");
        $.validator.addMethod("literyispacje", function(value, element) {
            return this.optional(element) || /^[^\s][0-9a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ.-\s]*$/.test(value);
        }, "To pole musi posiadać tylko litery, cyfry, kropki oraz myślniki!");
        $.validator.addMethod("rejestacja", function(value, element) {
            const reg = /^([A-Z]{2}-[A-Z]{3})|([A-Z]{2}-[0-9]{4})$/;
            return this.optional(element) || reg.test(value);
        }, "Proszę podać poprawną rejestrację!");

        $('input[name="Model"]').rules('remove', "nowhitespace");
        $('input[name="Opis"]').rules('remove', "nowhitespace required");

        $('select[name="IdProducent"]').rules( "add", {
            valueNotEquals: "def",
            messages: {
                valueNotEquals: "Proszę wybrać producenta!"
            }
        });

        $('input[name="Model"]').rules( "add", {
            literyispacje: true,
            maxlength: '100',
        });

        $('input[name="Rejestracja"]').rules( "add", {
            rejestacja: true
        });

        $('input[name="Opis"]').rules( "add", {
            literyispacje: true,
            maxlength: '100',
        });

        $('.js-select2').on('change', function() {
            $(this).valid();
        });
    }
})(jQuery);
