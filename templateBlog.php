<?php /*Template name: templateBlog*/ ?>
<?php get_header()?>
 <script type="text/javascript">
    $(function(){
            $("#blog a").addClass("active");
    });
</script>
    <div class="albums agile-blog">
        <div class="container">
            <h2 class="agile-title">Meu Blog</h2>
           <?php echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="2" images_loaded="true" button_label="Carregar Mais" button_loading_label="Carregando..."]') ?>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php
                    wp_reset_postdata();
                    ?>
<?php get_footer()?>