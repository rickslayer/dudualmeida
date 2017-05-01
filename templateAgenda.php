<?php /*Template name: templateAgenda*/?>
<?php get_header();?>

<script type="text/javascript">
    $(function(){
            $("#agenda a").addClass("active");
    });
</script>
<div class="albums agile-blog">
        <div class="container sunset-posts-container">
          <h2 class="agile-title">Minha Agenda</h2>

<?php

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type' => 'agenda',
    'post_per_page' => 6,
    'paged' => $paged
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) : ?>
                       <?php

                       while ( $the_query->have_posts() ) : $the_query->the_post();
                           ?>
                            <?php
                           $idPost   =  get_the_ID();
                           $conteudo =  get_the_content();
                           $titulo   = get_the_title();
                           $link     = get_permalink($idPost);
                           $agenda_meta_data = get_post_meta($post->ID);

                           ?>



             <div class="col-md-6 w3lsalbums-grid">
                <div class="albums-w3top">
                    <h5><?php echo $titulo; ?> </h5>
                </div>

                <div class="albums-right">
                    <h4><a class="wp_info" data-id="<?=$idPost?>" href="#<?=$link ;?>" data-toggle="modal" data-target="#myModal"><?php the_title(); ?></a></h4>
                    <p><?= the_excerpt(); ?> ...</p>
                    <a class="w3more wp_info" href="#<?=$link ;?>" data-id="<?=$idPost?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Mais</a>
                </div>
                <div class="clearfix"></div>
            </div>

                         <?php endwhile; ?>

     <?php endif; ?>
      <div class="clearfix"></div>
       <nav>
                <ul class="pagination w3-agileits-paging">
                    <li class="disabled" >
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true"><<</span>
                        </a>
                    </li>

                     <li><?= previous_posts_link( 'Anterior',$the_query->max_num_pages ); ?></li>
                     <li><?= next_posts_link( 'Próxima', 6 ); ?></li>
                       <li class="disabled" >
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">>></span>
                        </a>
                    </li>
                </ul>
            </nav>

 </div>
            </div>
 <script type="text/javascript">
                            $(function(){

                                    $(".wp_info").on('click', function(){
                                        let idPost = $(this).data('id');
                                        let url_site = $("#url_site").val();
                                          $.ajax(
                                            {
                                                url: url_site +'/wp-json/wp/v2/agenda/'+idPost+'',
                                                dataType: 'json',
                                                method: 'GET',

                                            }

                                    )
                                          .done(function(data){

                                                console.log(data);
                                                $("#dataLocal").empty();
                                                $("#dataLocal").text(data.title.rendered + ' - ' + "teste");
                                                $("#info-agenda").empty();
                                                $("#info-agenda").append(data.content.rendered);
                                          });

                            });

                                });


                    </script>
<div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h3 class="agile-title">Agenda Dudu</h3>
                                </div>
                                <div class="modal-body">
                                  <h4 class="tituloagenda" >Data e Local</h4>
                                  <h4 id="dataLocal"></h4>
                                  <h4 class="tituloagenda">Informações</h4>
                                  <div id="info-agenda"></div>
                                    </div>
                                <div class="modal-footer">
                                 <div class="btnAgenda">
                                  <button type="button" data-dismiss="modal">Fechar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                      </div>
<?php get_footer();?>