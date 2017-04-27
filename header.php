<!DOCTYPE html>
<?php wp_head(); ?>
<html lang="pt-br">
<head>
<title><?php
if (is_home())
{
  bloginfo('name');
}else{
  geraTitle();
}


?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<?php
  if (is_single())
  {?>
    <meta name="description" content="<?=bloginfo('description');?>" />
<?php
    $getPost = get_post();

    $author_obj = get_user_by('id', $getPost->post_author);
    $link        = get_permalink($getPost->ID);
    $thumbnail   = get_the_post_thumbnail_url();
    $resumo      = substr($getPost->post_content, 0,100);
    $postdata    = $getPost->post_date;
    $postmod     = $getPost->post_modified;

 ?>
<!-- Twitter Card data -->
<meta name="twitter:card" content="<?=$resumo?>">
<meta name="twitter:site" content="@dudualmeida">
<meta name="twitter:title" content="<?=single_post_title('', true)?>">
<meta name="twitter:description" content="<?=$getPost->post_content?>">
<meta name="twitter:creator" content="@<?=$author_obj->user_nicename;?>">
<meta name="twitter:image" content="<?=$thumbnail?>">

<!-- Open Graph data -->
<meta property="og:title" content="<?=single_post_title('', true)?>" />
<meta property="og:type" content="<?=$getPost->post_content?>" />
<meta property="og:url" content="<?=$link?>" />
<meta property="og:image" content="<?=$thumbnail?>" />
<meta property="og:description" content="<?=$getPost->post_content?>" />
<meta property="og:site_name" content="dudualmeida" />
<meta property="fb:admins" content="1593428724298623" />
<meta property="article:published_time" content="<?=$postdata?>+03:00" />
<meta property="article:modified_time" content="<?=$postmod?>+03:00" />
 <?php  }

?>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="shortcut icon" type="image/png" href="<?= getHome();?>/images/favicon.png"/>
<!-- Custom Theme files -->
<link href="<?= getHome();?>/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?= getHome();?>/css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="<?= getHome();?>/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="<?= getHome();?>/js/jquery-2.2.3.min.js"></script>
<script src="<?= getHome();?>/js/jquery.mask.min.js"></script>
<script src="<?= getHome();?>/js/mainjs.js"></script>
<script src="<?= getHome();?>/js/dudualmeida-app.js"></script>


<script src="<?= getHome();?>/js/jquery.fop-1.0.2.min.js"></script>
<script src="<?= getHome();?>/js/jquery.snippet.js"></script>


<!-- //js -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Aladin" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="<?= getHome();?>/js/move-top.js"></script>
<script type="text/javascript" src="<?= getHome();?>/js/easing.js"></script>
<script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
</script>
<!-- //end-smooth-scrolling -->
    <!-- Google Analytics -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97569996-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<input type="hidden" name="url_site" id="url_site" value="<?=url_site();?>">
    <!-- banner start here -->
    <div class="agileinfo-main">
        <div class="slider">
            <script src="<?= getHome();?>/js/responsiveslides.min.js"></script>
            <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                  // Slideshow 1
                  $("#slider1").responsiveSlides({
                     auto: true,
                     nav: true,
                     speed: 500,
                     namespace: "callbacks",
                  });
                });
            </script>
            <?php
                $dadosGaleria = getDadosPostInterno('galeria-do-inicio');

                $idPost = $dadosGaleria[0]->ID;
                $gallery = get_post_gallery($idPost, false);?>
                     <ul class="rslides" id="slider1">
                     <?php
                foreach($gallery['src'] as $src): ?>

                <li>
                    <div class="banner banner">

                       <img class="img-responsive" src="<?= $src;?>"/>
                    </div>
                </li>
                 <?php
                                endforeach;

            ?>
            </ul>



        </div>

        <audio id="nota_re" src="<?=getHome()?>/arch/D.MP3" type="audio/mp3">Seu browser não suporta a tag audio</audio>
        <audio id="nota_la" src="<?=getHome()?>/arch/A.MP3" type="audio/mp3">Seu browser não suporta a tag audio</audio>
        <audio id="nota_do" src="<?=getHome()?>/arch/C.MP3" type="audio/mp3">Seu browser não suporta a tag audio</audio>
        <audio id="nota_mi" src="<?=getHome()?>/arch/E.MP3" type="audio/mp3">Seu browser não suporta a tag audio</audio>
        <audio id="nota_fa" src="<?=getHome()?>/arch/F.MP3" type="audio/mp3">Seu browser não suporta a tag audio</audio>
        <audio id="nota_sol" src="<?=getHome()?>/arch/G.MP3" type="audio/mp3">Seu browser não suporta a tag audio</audio>
        <audio id="guitar"  src="<?=getHome()?>/arch/Guitar25.mp3" type="audio/mp3">Seu browser não suporta a tag audio</audio>

        <div class="agileinfo-header">
            <div class="container">
                <div class="agile-logo">
                    <h1><a id="ativaSom" href="<?=home_url();?>" title="POSICIONE O MOUSE EM CIMA "><i class="fa fa-music bounce bounceIn animated" aria-hidden="true"></i> Dudu Almeida</a></h1>
                </div>
                <div class="agileits-w3layouts-icons">
                <?php getRedesById(2); ?>

              <!--  <div class="social-icon">
                        <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="social-button skype"><i class="fa fa-skype"></i></a>
                    </div>-->
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- navigation start here -->
        <div class="top-nav">
            <span class="menu">Menu</span>
            <ul class="w3l">
                <li id="home" title="Dó (C)"><a href="<?=home_url();?>"><i aria-hidden="true" class="glyphicon glyphicon-home"></i><span>Home</span></a></li>
                <li id="portfolio" title="Ré (D)"><a href="<?=home_url();?>/portfolio"><i class="glyphicon glyphicon-music"></i><span>Portfólio</span></a></li>
                <li id="blog" title="Mi (E)"><a href="<?=home_url();?>/blog"><i class="glyphicon glyphicon-list-alt"></i><span>Blog</span></a></li>
                <li id="sobre" title="Fá (F)"><a href="<?=home_url();?>/sobre"><i class="glyphicon glyphicon-user"></i><span>Sobre</span></a></li>
                <li id="agenda" title="Sol (G)"><a href="<?=home_url();?>/minha-agenda"><i class="glyphicon glyphicon-calendar"></i><span>Agenda</span></a></li>
                <li id="contato" title="Lá (A)"><a href="<?=home_url();?>/contato"><i class="glyphicon glyphicon-envelope"></i><span>Contato</span></a></li>
            </ul>
            <!-- script-for-menu -->
            <script>
               $( "span.menu" ).click(function() {
                 $( "ul.w3l" ).slideToggle( 300, function() {
                 // Animation complete.
                  });
                 });
            </script>
            <!-- //script-for-menu -->
        </div>
    </div>
    <!-- navigation end here -->
    <!-- banner end here -->
