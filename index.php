<?php get_header();?>
 <script type="text/javascript">
    $(function(){
            $("#home a").addClass("active");
			$('.users-fa').append('<i class="fa fa-users" aria-hidden="true"></i>');
			$('.film-fa').append('<i class="fa fa-film" aria-hidden="true"></i>');
			$('.dedo-fa').append('<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>');
    });
</script>
	<?php
		$getIcones = getDadosPostInterno('icones-iniciais');
		$conteudo  = $getIcones[0]->post_content;

		echo $conteudo;

	?>
	<!-- welcome -->
	<div class="welcome agileits">
			<?php
				$bemvindo = getDadosPostInterno('seja-bem-vindo');
				$idPost   = $bemvindo[0]->ID;
				$conteudo = $bemvindo[0]->post_content;
				$titulo   = $bemvindo[0]->post_title;

			?>

		<div class="container">

			<h2 class="agile-title"><?=$titulo;?></h2>
			<p>><?=$conteudo;?></p>
			<div class="welcome-agileinfo">
                <?php
                   /* $setList = getDadosPostPublicado('minha-set-list');

                    $idPostset   = $setList[0]->ID;
                    $conteudoset = $setList[0]->post_content;
                    $conteudoset = substr($conteudoset, 0,100);
                    $tituloset   = $setList[0]->post_title;
                    $linkset        = get_permalink($idPostset);
                    $thumnailset = get_the_post_thumbnail_url($idPostset);*/
                    $args = array (
                     'page_id' => 97,
                     'post_type'   => 'page',
                     'numberposts' => 1
                     );
                     $setList = get_posts($args);
                      $idPostset   = $setList[0]->ID;
                     $conteudoset = $setList[0]->post_content;
                     $conteudoset = substr($conteudoset, 0,100);
                     $tituloset   = $setList[0]->post_title;
                     $linkset        = get_permalink($idPostset);
                     $thumnailset = get_the_post_thumbnail_url($idPostset);

                ?>
				<div class="col-md-6 col-sm-6 col-xs-6 welcome-grids">
					<div class="view view-w3-agile">
                        <a href="<?=$linkset;?>" title="Clique para ver mais">
						<img src="<?=$thumnailset;?>" alt="" class="img-responsive" />
						<div class="agileits-w3layouts-mask">
							<h4><?=$tituloset;?></h4>
							<p>Clique para ver ...</p>
						</div>
                        </a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6 welcome-grids">
            <?php
                $args = array (
                    'post_type' => 'post',
                    'numberposts' =>'1',
                    'orderby'   => 'rand',
                    'post_status' => 'publish'
                 );
                $post_randomico = get_posts($args);
                     $idPostrand   = $post_randomico[0]->ID;
                     $conteudorad = $post_randomico[0]->post_content;
                     $conteudorad = substr($conteudorad, 0,100);
                     $titulorad   = $post_randomico[0]->post_title;
                     $linkrad       = get_permalink($idPostrand);
                     $thumnailrad = get_the_post_thumbnail_url($idPostrand);

             ?>


					<div class="view view-w3-agile">
            <a href="<?=$linkrad;?>" title="Clique para ver mais">
						<img src="<?=$thumnailrad?>" alt="" class="img-responsive" />
						<div class="agileits-w3layouts-mask">
							<h4><?=$titulorad;?></h4>
							<p><?=$conteudorad;?></p>
                <p>Clique para ver ...</p>
						</div>
             </a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //welcome -->
    <!-- events -->
    <div class="events">
		<div class="container">
			<h3 class="agile-title">Minha Agenda</h3>
			<div class="events-info">
    <?php
                $args = array(
                    'post_type' => 'agenda',
                    'numberposts' => 3,
                    'posts_per_page' => 3,
                    'order' => 'desc'
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
                                        $dataAgenda_id     = $agenda_meta_data['dataAgenda_id'][0];
                                        $enderecoAgenda_id = $agenda_meta_data['enderecoAgenda_id'][0];
                                        $horarioAgenda_id  = $agenda_meta_data['horarioAgenda_id'][0];
                                        ?>
                     <div class="col-md-4 event-grids">
					        <div class="w3layouts-text">
						        <h4><a href="#<?=$link;?>" class="wp_info" data-id="<?=$idPost?>" data-toggle="modal" data-target="#myModal" title="Clique para ver mais"><?= $titulo?></a></h4>
					</div>


						        <div class="clearfix"> </div>

					                <p> <?= $dataAgenda_id . ' - ' . $conteudo?></p>
				     </div>

                                        <?php endwhile; ?>

                    <?php endif; ?>
                     <script type="text/javascript">
                            $(function(){
                                    let url_site = $("#url_site").val();
                                    $(".wp_info").on('click', function(){
                                        let idPost = $(this).data('id');
                                          $.ajax(
                                            {
                                                url: url_site + '/wp-json/wp/v2/agenda/'+idPost+'',
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
                                  <h3 class="agile-title">Agenda Edu</h3>
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
					 <div class="col-md-2 event-grids">
						  <div class="w3layouts-text">
                   			<h6><a href="<?=home_url();?>/minha-agenda/" title="Veja mais...">Veja mais...</a></h6>
					     </div>
					      </div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //events -->
<?php get_footer();?>