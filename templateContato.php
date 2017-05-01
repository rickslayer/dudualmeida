<?php /*Template name: templateContato*/ ?>
<?php get_header()?>
<script type="text/javascript">
    $(function(){
            $("#contato a").addClass("active");
    });
</script>

	<!-- contact -->
	<div class="contact">
		<div class="container">
				<?php
       if(have_posts()) {
         while(have_posts()){
                the_post();
                $contato_metaData = get_post_meta($post->ID);
                $contato_telefone = $contato_metaData['contato_telefone'][0];
                $contato_celular  = $contato_metaData['contato_celular'][0];
                $contato_endereco = $contato_metaData['contato_endereco'][0];
                $contato_email    = $contato_metaData['contato_email'][0];


			?>
			<h2 class="agile-title"><?=the_title();?></h2>
			<div class="col-md-7 contact-right">
				<form action="#" method="post">
					<?php echo do_shortcode('[contact-form-7 id="66" title="Formulário de contato 1"]') ?>

				</form>
			</div>
			<div class="col-md-5 contact-left">
				<p><?=the_content();?></p>
				<ul>
					<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
						<?=$contato_endereco;?>
					</li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
						<?=$contato_telefone . ' - ' . $contato_celular;?>
					</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						<a href="mailto:<?=$contato_email?>"><?=$contato_email;?></a>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="map">
				<h3 class="agile-title">Como nos achar?</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3661.797676769056!2d-46.31680838494029!3d-23.395535484765514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce877ccb18a0cb%3A0xeb1ca00cc09443dc!2sRua+Urias+Pithon+Barreto%2C+120%2C+Aruj%C3%A1+-+SP%2C+07432-575!5e0!3m2!1spt-BR!2sbr!4v1492122277600" allowfullscreen></iframe>
				<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4376542.827441857!2d133.94238155277205!3d-25.73870281693212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2sin!4v1439377130002" allowfullscreen></iframe>-->
			</div>
		</div>
	</div>
	<?php
         }


       }
 ?>
	<!-- //contact -->
<?php get_footer()?>