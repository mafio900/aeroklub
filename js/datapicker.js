$(document).ready(function() {
    $('.date').daterangepicker({
        singleDatePicker: true,
        timePicker: true,
        timePicker24Hour: true,
        minDate: new Date(),
        locale: {
            format: 'YYYY-MM-DD HH:mm',
            "separator": " - ",
            "applyLabel": "Wybierz",
            "cancelLabel": "Anuluj",
            "fromLabel": "Od",
            "toLabel": "Do",
            "customRangeLabel": "Dowolny",
            "daysOfWeek": [
                "Nd",
                "Pon",
                "Wt",
                "Śr",
                "Czw",
                "Pt",
                "Sob"
            ],
            "monthNames": [
                "Styczeń",
                "Luty",
                "Marzec",
                "Kwiecień",
                "Maj",
                "Czerwiec",
                "Lipiec",
                "Sierpień",
                "Wrzesień",
                "Październik",
                "Listopad",
                "Grudzień"
            ],
            "firstDay": 1
        },

    });
});
