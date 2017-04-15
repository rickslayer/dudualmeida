<?php /*Template name: templateAgenda*/?>
<?php get_header();?>
<?php
$args = array(
    'post_type' => 'agenda',
    'post_per_page' => 3
);
$the_query = new WP_Query( $args );
?>
  <?php if ( $the_query->have_posts() ) : ?>
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

                         <?php endwhile; ?>

     <?php endif; ?>

    <div id="teste"></div>
    <script>
    $(function(){

      oDados = new Object();
     var teste = $("#teste").getdadosAgenda();
     console.log(teste);


    });
    </script>
<?php get_footer();?>