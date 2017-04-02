<?php /*Template name: templateAgenda*/?>
<?php get_header();?>
<?php 
$args = array(
    'post_type' =>'agenda',
    'post_per_page' => 3
);
$loop = new WP_Query ($args);


    if($loop->have_post()):
        while($loop->have_posts()) : $loop->the_post();?>
        <?php get_template_part('content', 'archive');?>

    <?php 
        endwhile;
        endif;
    ?>
<b>teste</b>
<?php get_footer();?>