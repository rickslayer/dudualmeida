$(function(){

                 $("#home").Fop({
                      'phrase_class' : 'fop_phrase',
                      'phrase' : 'C',
                      'duration': 1000
                    });
                   $("#portfolio").Fop({
                      'phrase_class' : 'fop_phrase',
                      'phrase' : 'D',
                      'duration': 1000
                    });
                     $("#blog").Fop({
                      'phrase_class' : 'fop_phrase',
                      'phrase' : 'E',
                      'duration': 1000
                    });
                       $("#agenda").Fop({
                      'phrase_class' : 'fop_phrase',
                      'phrase' : 'F',
                      'duration': 1000
                    });
                         $("#sobre").Fop({
                      'phrase_class' : 'fop_phrase',
                      'phrase' : 'G',
                      'duration': 1000
                    });
                           $("#contato").Fop({
                      'phrase_class' : 'fop_phrase',
                      'phrase' : 'A',
                      'duration': 1000
                    });


                $("#ativaSom").on('mouseover', function(){

                  var guitar = $("#guitar");
                   guitar.get(0).play();

                });
                  $("#ativaSom").on('mouseout', function(){
                  var guitar = $("#guitar");
                   guitar.get(0).pause();

                });

                   $("#home").on('mouseover', function(){

                      var guitar = $("#nota_do");
                      guitar.get(0).play();


                });

                   $("#portfolio").on('mouseover', function(){
                  var guitar = $("#nota_re");
                   guitar.get(0).play();

                });

                   $("#blog").on('mouseover', function(){
                  var guitar = $("#nota_mi");
                   guitar.get(0).play();

                });

               $("#sobre").on('mouseover', function(){
                                var guitar = $("#nota_fa");
                                 guitar.get(0).play();

                              });

               $("#agenda").on('mouseover', function(){
                                var guitar = $("#nota_sol");
                                 guitar.get(0).play();

                              });

               $("#contato").on('mouseover', function(){
                                var guitar = $("#nota_la");
                                 guitar.get(0).play();

                              });







         });