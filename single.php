<?php get_header() ?>
<!-- single -->
    <div class="single">
        <div class="container">
            <div class="wthree_single_grid">
              <?php
                if(have_posts()){
                    while (have_posts()) {

                        the_post();
                        ?>
                        <?php
                        $idPost      = get_the_ID();
                        $user        = get_the_author();
                        $user_nome =  get_the_author_meta( 'first_name' );
                        $user_sobrenome = get_the_author_meta('last_name');
                        $user_email  = get_the_author_meta( 'user_email' );
                        $user_bio    = get_the_author_meta( 'description' );
                        $link        = get_permalink($idPost);
                        $titulo      = get_the_title();
                        $comentarios = get_comments_number_text();
                        $categoria   = get_the_category($idpost);
                        $thumbnail   = get_the_post_thumbnail_url();

                        ?>
                <h2><?=$titulo?></h2>
                <ul>
                    <li><span class="fa fa-user" aria-hidden="true"></span><a href="#"><?=$user?></a></li>
                    <li><span class="fa fa-tags" aria-hidden="true"></span><a href="#">5 Tags</a></li>
                    <li><span class="fa fa-envelope-o" aria-hidden="true"></span><a href="#">5 Comments</a></li>
                    <li><span class="fa fa-pencil-square-o" aria-hidden="true"></span>Recusandae</li>
                </ul>
            </div>
            <div class="agile_single_banner">
                <img src="<?=$thumbnail?>" alt="" class="img-responsive" />
            </div>
            <div class="wthree_single_grid1">
                <p> <?php the_content(); ?></p>
            </div>
            <div class="popular-posts">
                <h4 class="w3ls-title">Veja Também</h4>
                <div class="popular-posts-grids">
                   <?php
                   echo  wpb_rand_posts();
                    echo  wpb_rand_posts();
                     echo  wpb_rand_posts();
                      echo  wpb_rand_posts();
                   ?>



                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="author">
                <h4 class="w3ls-title"> Sobre <?=$user;?> </h4>
                <div class="author-grid">
                    <div class="author-grid-left">
                        <img src="images/t1.jpg" alt=" " class="img-responsive ">
                    </div>
                    <div class="author-grid-right">
                        <h4><a href="mailto:<?=$user_email;?>" title="Me envie um e-mail"><?=$user_nome . ' ' . $user_sobrenome;?></a><span><?=$user_email;?></span></h4>
                        <p><?=$user_bio;?> </p>
                            <?php getRedesSociais();?>
                      <!--  <div class="social-icon">
                            <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a>
                        </div>-->
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="write-reply">
                <h4 class="w3ls-title">Write a Comment</h4>
                <form action="#" method="post">
                    <input type="text" name="Name" placeholder="Name"  required="">
                    <input type="text" name="Email" placeholder="Email" required="">
                    <textarea name="Comment" placeholder="Write a comment here..." required=""></textarea>
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
    </div>
          <?php
                    }
                }
                ?>

<?php get_footer() ?>