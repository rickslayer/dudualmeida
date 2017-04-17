<?php /*Template name: templateSetlist*/?>
<?php get_header();?>
<?php
       if(have_posts()) {
         while(have_posts()){
                the_post();
                ?>
<div class="about agileits">
        <div class="container">
            <h2 class="agile-title"><?=the_title();?></h2>
                 <div class="about-info">
                           <?=the_content();?>
                     </div>

         </div>
</div>
<?php
         }
         }
?>
<?php get_footer(); ?>