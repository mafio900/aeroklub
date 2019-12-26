(function($) {
$.fn.loadModal = function(extendDefaultOptions) {
    /**
    * [settings description]
    * @type {[type]} * tablica z parametrami domyślnymi, które są zastępowane podanymi w argumentach funkcji
    * wywołalnie:  selektor.loadModalForm({parametr : nadpisywana_wartosc, parametr2: nadpisywana_wartosc_2});
    */
    let settings = $.extend({
        eventName: 'click',   //zdarzenie wywołujące wtyczkę
        dataUrl : 'url',      //adres url formularza
        selectorModal : '#modal',       //selektor okna modalnego z formularzem
        selectorContent : '.modal-content', //miejsce załadowania wczytanego widoku formularza
        parameterForModal : 'show',         //zdarzenie dla okna modalnego
    }, extendDefaultOptions );

    // dla selektora, na którym wywołano wtyczkę
    return this.on(settings.eventName, function() {
        if(typeof $(this).data(settings.dataUrl) != typeof undefined) {
            path = $(this).data(settings.dataUrl);
            //console.log(path);
            //asynchroniczne załadowanie widoku formularza
            $(settings.selectorModal+" "+settings.selectorContent).load(path, function() {
                if(typeof jQuery().loadValidation !== "undefined"){
                    $(settings.selectorModal + ' form').loadValidation();
                    $(settings.selectorModal + ' form')[settings.klasa]();
                }
                $(settings.selectorModal).modal(settings.parameterForModal);
            });
        } else {
            console.log("error in loadModalForm");
            return (function() {});
        }
    });
}
})(jQuery);
