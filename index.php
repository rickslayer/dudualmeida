<?php get_header();?>
 <script type="text/javascript">
    $(function(){
            $("#home a").addClass("active");
    });
</script>
	<!-- welcome -->
	<div class="welcome agileits">
		<div class="container">
			<h2 class="agile-title">Welcome To Our Site</h2> 
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra auctor dolor, id egestas felis tristique vel. Donec malesuada, lorem sed vulputate tincidunt, nulla quam pulvinar mi, blandit placerat odio neque quis risus. Nullam ultricies erat non lectus aliquam, eu finibus neque semper. Morbi viverra, neque sit amet pretium blandit, dui mauris lacinia metus, a rhoncus erat ipsum vitae augue. Morbi laoreetvenenatis nulla, et venenatis purus scelerisque id. Vestibulum non facilisis lectus, quis accumsan mi.</p>
			<div class="welcome-agileinfo">
				<div class="col-md-6 col-sm-6 col-xs-6 welcome-grids">
					<div class="view view-w3-agile">
						<img src="images/img1.jpg" alt="" class="img-responsive" />
						<div class="agileits-w3layouts-mask">
							<h4>Our New Albums</h4>
							<p>Nullam ut nibh dapibus elit placerat ullamcorper</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6 welcome-grids">
					<div class="view view-w3-agile">
						<img src="images/img2.jpg" alt="" class="img-responsive" />
						<div class="agileits-w3layouts-mask">
							<h4>Letraset sheets</h4>
							<p>Nullam ut nibh dapibus elit placerat ullamcorper</p>
						</div>
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
						        <h4><?= $dataAgenda_id?></h4>
                                   
						                <h6><a href="<?=$link?>"><?=$titulo?> </a></h6>
						                    <div class="clearfix"> </div>
					        </div>
					                <p><?=$conteudo?></p>
				            </div>
                    
                                        <?php endwhile; ?>

                    <?php endif; ?>
                   			
				<div class="clearfix"> </div>
			</div>
		</div> 
	</div> 
	<!-- //events -->
<?php get_footer();?>