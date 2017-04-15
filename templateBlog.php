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
             <?php
                   $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                   $typePost = 'publish';
                   $numeroPost = '6';
                   // the query
                   $the_query = new WP_Query( 'posts_per_page=' .$numeroPost.
                                              '&post_status=' .$typePost.
                                              '&paged=' . $paged );
                   ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                       <?php

                       while ( $the_query->have_posts() ) : $the_query->the_post();
                           ?>
                           <?php
                           $idPost   =  get_the_ID();
                           $conteudo = get_the_content();
                           $conteudo = substr($conteudo, 0,300);
                           $titulo   = get_the_title();
                           $link     = get_permalink($idPost);
                           $comentarios = get_comments_number_text();
                           $categoria = get_the_category($idpost);
                           $user        = get_the_author();
                           $dataPublicacao = $resp[0]->post_date;
                           $dataPublicacao = date("d/m/Y");
                           ?>
                            <div class="col-md-6 w3lsalbums-grid">
                <div class="albums-w3top">
                    <h5><?= $dataPublicacao?> </h5>
                </div>
                <div class="albums-left">
                    <a href="<?=$link ;?>" class="wthree-almub">
                    <?php the_post_thumbnail(); ?>
                    </a>
                </div>
                <div class="albums-right">
                    <h4><a href="<?=$link ;?>"><?= $titulo; ?></a></h4>
                    <p><?= $conteudo; ?> ...</p>
                    <a class="w3more" href="<?=$link ;?>"><i class="fa fa-mail-forward" aria-hidden="true"></i> Mais</a>
                </div>
                <div class="clearfix"></div>
            </div>

                              <?php endwhile; ?>

                   <?php endif; ?>

       <!--     <div class="col-md-6 w3lsalbums-grid">
                <div class="albums-w3top">
                    <h5>10th November 2016 </h5>
                </div>
                <div class="albums-left">
                    <a href="single.html" class="wthree-almub wthree-almub2">
                    </a>
                </div>
                <div class="albums-right">
                    <h4><a href="single.html">Consequat</a></h4>
                    <p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
                    <a class="w3more" href="single.html"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6 w3lsalbums-grid">
                <div class="albums-w3top">
                    <h5>18th November 2016 </h5>
                </div>
                <div class="albums1-right">
                    <a href="single.html" class="wthree-almub wthree-almub3">
                    </a>
                </div>
                <div class="albums1-left">
                    <h4><a href="single.html">Dolores Btrs</a></h4>
                    <p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
                    <a class="w3more" href="single.html"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6 w3lsalbums-grid">
                <div class="albums-w3top">
                    <h5>25th November 2016 </h5>
                </div>
                <div class="albums1-right">
                    <a href="single.html" class="wthree-almub wthree-almub4">
                    </a>
                </div>
                <div class="albums1-left">
                    <h4><a href="single.html">Nam aliquam</a></h4>
                    <p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
                    <a class="w3more" href="single.html"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6 w3lsalbums-grid">
                <div class="albums-w3top">
                    <h5>4th November 2016 </h5>
                </div>
                <div class="albums-left">
                    <a href="single.html" class="wthree-almub">
                    </a>
                </div>
                <div class="albums-right">
                    <h4><a href="single.html">Dolor Sit</a></h4>
                    <p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
                    <a class="w3more" href="single.html"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6 w3lsalbums-grid">
                <div class="albums-w3top">
                    <h5>10th November 2016 </h5>
                </div>
                <div class="albums-left">
                    <a href="single.html" class="wthree-almub wthree-almub2">
                    </a>
                </div>
                <div class="albums-right">
                    <h4><a href="single.html">Consequat</a></h4>
                    <p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
                    <a class="w3more" href="single.html"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
                </div>
                <div class="clearfix"></div>
            </div>-->
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
    <?php
                    wp_reset_postdata();
                    ?>
<?php get_footer()?>