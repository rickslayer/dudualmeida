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

            var element = $(this);
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

                      var ul = $("<ul>");
                    for (var i = 0 ; i < data.length; i++)
                    {

                        var li = $("<li>");

                        li.append(data[i].title.rendered);
                        ul.append(li);

                        $(element).append(ul);
                        console.log(data[i].title.rendered);
                    }

                });

            }



}));