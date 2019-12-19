$(function() {
    $.validator.addMethod("literyispacje", function(value, element) {
        return this.optional(element) || /^[a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ\s]*$/.test(value);
    }, "To pole musi posiadać tylko litery!");
    $('input[name="ProducentNazwa"]').rules('remove', "nowhitespace");
    $('input[name="ProducentNazwa"]').rules( "add", {
        literyispacje: true,
        maxlength: '100'
    });
});
