(function($) {
    $.fn.deleteConfirm = function(extendDefaultOptions) {
        /**
        * [settings description]
        * @type {[type]} * tablica z parametrami domyślnymi, które są zastępowane podanymi w argumentach funkcji
        * wywołalnie:  selektor.deleteConfirm({parametr : nadpisywana_wartosc, parametr2: nadpisywana_wartosc_2});
        */
        let settings = $.extend({
            eventName : 'click',              //zdarzenie wywołujące wtyczkę
            dataUrl : 'url',                  //adres url formularza
            alert : "Czy usunąć ",      //początek opisu
            dataDescription: 'description',   //dodatkowy opis wyświetlany w oknie

            selectorModal : '#delete-confirm-modal',       //selektor okna modalnego
            selectorContent : '.modal-body', //miejsce załadowania treści formularza
            selectorForm : '#delete-confirm-modal-form',   //selektor formularza

            parameterForModal : 'show',         //zdarzenie dla okna modalnego
        }, extendDefaultOptions );

        // dla selektora, na którym wywołano wtyczkę
        return this.on(settings.eventName, function() {
            if(typeof $(this).data(settings.dataUrl) != typeof undefined &&
                typeof $(this).data(settings.dataDescription) != typeof undefined) {
                path = $(this).data(settings.dataUrl);

                $(settings.selectorModal + " " + settings.selectorContent).html(settings.alert + $(this).data(settings.dataDescription) + '?');
                $(settings.selectorForm).attr('action', path);
                $(settings.selectorModal).modal('show');
            } else {
                console.log("error in deleteConfirm");
                return (function() {});
            }
        });
    }
})(jQuery);
