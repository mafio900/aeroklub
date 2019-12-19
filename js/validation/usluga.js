$(function() {
    $.validator.addMethod("literyispacje", function(value, element) {
        return this.optional(element) || /^[^\s][0-9a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ.-\s]*$/.test(value);
    }, "To pole musi posiadać tylko litery, cyfry, kropki oraz myślniki!");

    $('input[name="UslugaNazwa"]').rules('remove', "nowhitespace");
    $('input[name="Opis"]').rules('remove', "required nowhitespace");

    $('input[name="UslugaNazwa"]').rules( "add", {
        literyispacje: true,
        maxlength: '100',
    });

    $('input[name="CenaJedn"]').rules( "add", {
        number_not_negative: true,
        messages: {
            number_not_negative: "Proszę podać poprawną cenę!"
        }
    });

    $('input[name="JednMiary"]').rules( "add", {
        alpha_pl: true,
        maxlength: '20',
        messages: {
            alpha_pl: "To pole może posiadać tylko litery!"
        }
    });

    $('input[name="Opis"]').rules( "add", {
        literyispacje: true,
        maxlength: '100',
    });

});
