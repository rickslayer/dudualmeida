<?php /*Template name: templateSobre*/?>
<?php get_header();?>
 <script type="text/javascript">
    $(function(){
            $("#sobre a").addClass("active");
    });
</script>
	<!-- about -->
    <?php
       if(have_posts()) {
         while(have_posts()){
                the_post();
                ?>
	<div class="about agileits">
		<div class="container">
			<h2 class="agile-title"><?=the_title();?></h2>  
			<div class="about-info">
				<div class="col-md-8 about-grids">
					<h4>José Eduardo Rube de Almeida </h4>
					<p><?=the_content();?></p>		
				</div>
				<div class="col-md-4 about-grids">
					<h4>Curiosidades</h4>
					<div class="pince">
						<div class="pince-left">
							<h5>01</h5>
						</div>
						<div class="pince-right">
							<p>Dudu também compõe, escreve textos literários e já foi finalista de um célebre concurso de Literatura Infanto-juvenil em 2013 (Concurso Barco a Vapor) com o romance juvenil "Deu a louca no folclore".</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<h5>02</h5>
						</div>
						<div class="pince-right">
							<p>Ele tem como hobby estudar línguas estrangeiras, além de inglês e Francês, hoje ele estuda Russo. Ele lê uma hora por dia, de domingo a domingo.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<h5>03</h5>
						</div>
						<div class="pince-right">
							<p>Em fevereiro de 2016 Dudu completa 20 anos como violonista e tem o dedo anelar esquerdo quase do tamanho do dedo médio devido a um enorme calo provindo do uso constante do instrumento. Ele faz tratamento para o dedo com um gel cauterizador.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<h5>04</h5>
						</div>
						<div class="pince-right">
							<p>Também tem um site outro site denomidado http://duduenglish.com.br</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div> 
			</div>	
		</div>	
	</div>
	<!-- //about -->
	<!-- about-team -->
	<div class="about team">		
		<div class="container">
			<h3 class="agile-title">Fotos</h3>  
			<div class="team-row">
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/t1.jpg" class="img-responsive" alt="...">
						<div class="w3agile-caption">
							<h4>Vaura Tegsner</h4>
							<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
							<div class="social-icon">
								<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
								<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
								<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
							</div> 	
						</div> 
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/t2.jpg" class="img-responsive" alt="...">
						<div class="w3agile-caption">
							<h4>Jark Kohnson</h4>
							<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
							<div class="social-icon">
								<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
								<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
								<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
							</div> 		
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/t3.jpg" class="img-responsive" alt="...">
						<div class="w3agile-caption">
							<h4>Goes Mehak</h4>
							<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>						
							<div class="social-icon">
								<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
								<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
								<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
							</div> 	
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/t4.jpg" class="img-responsive" alt="...">
						<div class="w3agile-caption">
							<h4>Chunk Erson</h4>
							<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>						
							<div class="social-icon">
								<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
								<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
								<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
							</div> 	
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>  <?php
         }


       }
 ?>
	<!-- //about-team -->
<?php get_footer();?>