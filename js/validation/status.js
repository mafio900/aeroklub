$(function() {
    $('input[name="StatusNazwa"]').rules( "add", {
        alpha_pl: true,
        maxlength: '50',
        messages: {
            alpha_pl: "To pole może posiadać tylko litery!"
        }
    });
});
