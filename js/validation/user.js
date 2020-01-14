(function($) {
    $.fn.loadValidationUser = function() {
        $.validator.addMethod("literyispacje", function(value, element) {
            return this.optional(element) || /^[^\s][a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ.-\s]*$/.test(value);
        }, "To pole musi posiadać tylko litery, kropki i myślniki!");
        $.validator.addMethod("passwd", function(value, element) {
            return this.optional(element) || /^[^\s][0-9a-zA-Z_!@#$%^&*-]*$/.test(value);
        }, "Hasło może zawierać tylko litery (bez polskich znaków) i _!@#$%^&*-");
        $.validator.addMethod("login", function(value, element) {
            return this.optional(element) || /^[^\s][0-9a-zA-Z]*$/.test(value);
        }, "Login może zawierać tylko litery (bez polskich znaków) i cyfry!");


        $('input[name="Nazwisko"]').rules('remove', "nowhitespace");
        $('input[name="Ulica"]').rules('remove', "nowhitespace");
        $('input[name="Miejscowosc"]').rules('remove', "nowhitespace");
        $('input[name="NrLokalu"]').rules('remove', "required");

        $('input[name="Imie"]').rules( "add", {
            alpha_pl: true,
            maxlength: '50',
            messages: {
                alpha_pl: "To pole może posiadać tylko litery!"
            }
        });

        $('input[name="Nazwisko"]').rules( "add", {
            lastname: true,
            maxlength: '50',
            messages: {
                lastname: "Proszę podać poprawne nazwisko!"
            }
        });

        $('input[name="Pesel"]').rules( "add", {
            pesel: true,
            messages: {
                pesel: "Proszę podać poprawny numer PESEL!"
            }
        });

        $('input[name="Ulica"]').rules( "add", {
            literyispacje: true,
            maxlength: '50'
        });

        $('input[name="NrDomu"]').rules( "add", {
            building_number: true,
            maxlength: '10',
            messages: {
                building_number: "Proszę podać poprawny numer domu!"
            }
        });

        $('input[name="NrLokalu"]').rules( "add", {
            house_number: true,
            maxlength: '10',
            messages: {
                house_number: "Proszę podać poprawny numer lokalu!"
            }
        });

        $('input[name="Miejscowosc"]').rules( "add", {
            city: true,
            maxlength: '50',
            messages: {
                city: "Proszę podać poprawną nazwę miejscowości!"
            }
        });

        $('input[name="KodPocztowy"]').rules( "add", {
            postal_code: true,
            messages: {
                postal_code: "Proszę podać poprawny kod pocztowy!"
            }
        });

        $('input[name="NrTelefonu"]').rules( "add", {
            number: true,
            phonePL: true,
            messages: {
                number: "Numer telefonu może zawierać tylko cyfry!",
                phonePL: "Proszę podać poprawny numer telefonu!"
            }
        });

        $('input[name="Email"]').rules( "add", {
            required: true,
            email: true,
            maxlength: '50',
            messages: {
                required: "To pole jest wymagane!",
                email: "Proszę podać prawidłowy adres e-mail!"
            }
        });

        $('input[name="Ranga"]').rules( "add", {
            alpha_pl: true,
            maxlength: '20',
            messages: {
                alpha_pl: "To pole może posiadać tylko litery!"
            }
        });

        $('input[name="Login"]').rules( "add", {
            login: true,
            maxlength: '30'
        });

        $('input[name="Password"]').rules( "add", {
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
