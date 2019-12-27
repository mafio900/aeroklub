(function($) {
    $.fn.loadValidationRezUsluga = function() {
        $(".js-select2").valid();
        $.validator.addMethod("valueNotEquals", function(value, element, arg){
            return arg !== value;
        }, "Value must not equal arg.");

        $('input[name="Ilosc"]').rules('remove', "nowhitespace");

        $('select[name="IdUsluga"]').rules( "add", {
            valueNotEquals: "def",
            messages: {
                valueNotEquals: "Proszę wybrać usługę!"
            }
        });

        $('input[name="Ilosc"]').rules( "add", {
            number_not_negative: true,
            messages: {
                number_not_negative: "Proszę podać poprawną ilość!"
            }
        });

        $('.js-select2').on('change', function() {
            $(this).valid();
        });
        }
})(jQuery);
