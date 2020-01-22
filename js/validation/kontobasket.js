(function($) {
    $.fn.LoadValidationBasket = function() {
        $.validator.addMethod("valueNotEquals", function(value, element, arg){
            return arg !== value;
        }, "Value must not equal arg.");
        $.validator.addMethod("number_not_negative", function(value, element) {
            let val = value;
            val = val.replace(",", ".");
            const isNumber =
            !isNaN(parseFloat(val)) && isFinite(val) && parseFloat(value) >= 0;
            return this.optional(element) || isNumber;
        }, "Proszę wpisać poprawną liczbę.");

        $('input[name="TerminRealizacji"]').rules('remove', "nowhitespace");

        $('input[name="TerminRealizacji"]').rules( "add", {
            dateValidator: {
                format: 'YYYY-MM-DD HH:mm',
                separator: '-'
            }
        });

        $('input[name="Ilosc"]').rules( "add", {
            number_not_negative: true,
            messages: {
                number_not_negative: "Proszę podać poprawną ilość!"
            }
        });

        $('select[name="IdUsluga"]').rules( "add", {
            valueNotEquals: "def",
            messages: {
                valueNotEquals: "Proszę wybrać usługę!"
            }
        });

        $('.js-select2').on('change', function() {
            $(this).valid();
        });
    }
})(jQuery);
