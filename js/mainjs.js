(function(factory) {
    if (typeof define === "function" && define.amd) {
        define([ "jquery" ], factory);
    } else if (typeof module === "object" && module.exports) {
        module.exports = factory(require("jquery"));
    } else {
        factory(jQuery);
    }
}
(function($){
    $.fn.getdadosAgenda = function(options){

            var settings = $.extend({

                filters: ""
                },options);

            $.ajax(
                {
                    url: 'http://localhost/dudualmeida/wp-json/wp/v2/agenda',
                    dataType: 'json',
                    method: 'GET'

                }

                )
                .done(function(data){



                });

                 return this;

            }




}));