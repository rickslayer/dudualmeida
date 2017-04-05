<!DOCTYPE html>
<?php wp_head(); ?>
<html lang="en">
<head>
<title>Rock a Music Category Flat Bootstrap Responsive website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Rock Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
</head>
<body>
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
            <ul class="rslides" id="slider1">
                <li>
                    <div class="banner">
                        <h3>Duis euismod massa ut sem fringilla blandit. Proin vel enim nec ipsum finibus. </h3>
                    </div>
                </li>
                <li>
                    <div class="banner banner2">
                        <h3>Proin vel enim nec ipsum finibus. Duis euismod massa ut sem fringilla blandit. </h3>
                    </div>
                </li>
                <li>
                    <div class="banner banner3">
                        <h3>Sem fringilla blandit duis euismod massa ut . Proin vel enim nec ipsum finibus. </h3>
                    </div>
                </li>
            </ul>
        </div>
        <div class="agileinfo-header">
            <div class="container">
                <div class="agile-logo">
                    <h1><a href="<?=home_url();?>"><i class="fa fa-music bounce bounceIn animated" aria-hidden="true"></i> Dudu Almeida</a></h1>
                </div>
                <div class="agileits-w3layouts-icons">
                    <div class="social-icon">
                        <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a>
                        <a href="#" class="social-button skype"><i class="fa fa-skype"></i></a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- navigation start here -->
        <div class="top-nav">
            <span class="menu">Menu</span>
            <ul class="w3l">
                <li id="home"><a href="<?=home_url();?>"><i aria-hidden="true" class="glyphicon glyphicon-home"></i><span>Home</span></a></li>
                <li id="portfolio"><a href="<?=home_url();?>/portfolio"><i class="glyphicon glyphicon-music"></i><span>Portfólio</span></a></li>
                <li id="blog"><a href="<?=home_url();?>/blog"><i class="glyphicon glyphicon-list-alt"></i><span>Blog</span></a></li>
                <li id="sobre"><a href="<?=home_url();?>/sobre"><i class="glyphicon glyphicon-user"></i><span>Sobre</span></a></li>
                <li id="contato"><a href="<?=home_url();?>/contato"><i class="glyphicon glyphicon-envelope"></i><span>Contato</span></a></li>
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