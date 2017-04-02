<?php wp_footer(); ?>
    <!-- footer start here -->
    <div class="agilebg-footer">
        <div class="footer">
            <div class="container">
                <div class="footer-agileinfo">
                    <div class="col-md-3 col-sm-3 footer-wthree-grid">
                        <h3>Navegação</h3>
                        <ul>
                            <li><a href="<?=home_url();?>">Home</a></li>
                            <li><a href="<?=home_url();?>/cursos">Cursos</a></li>
                            <li><a href="<?=home_url();?>/blog">Blog</a></li>
                            <li><a href="<?=home_url();?>/sobre">Sobre</a></li>
                            <li><a href="<?=home_url();?>/contato">Contato</a></li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-sm-5 footer-wthree-grid">
                        <h3>Última Publicação</h3>
                        <div class="agileits-w3layouts-tweets">
                            <h5><i class="fa fa-file-text-o" aria-hidden="true"></i> Lorem ipsum</h5>
                        </div>
                        <p>Aenean vitae metus sit amet purus sodales blandit. Nullam ut dolor eu urna viverra semper. Mauris est odio, laoreet laoreet sapien non, sollicitudin bibendum nulla.</p>
                    </div>
                    <div class="col-md-4 col-sm-4 footer-wthree-grid">
                        <h3>Entre em contato</h3>
                        <div class="ftr-icons">
                            <div class="ftr-iblock">
                                <span class="glyphicon glyphicon-map-marker">  </span>
                            </div>
                            <div class="ftr-text">
                                <p>Proin vel enim nec ipsum finibus. Duis euismod massa ut sem fringilla blandit.</p>
                            </div>
                            <div class="clearfix"> </div>
                       </div>
                       <div class="ftr-icons">
                            <div class="ftr-iblock">
                                <span class="glyphicon glyphicon-earphone">  </span>
                            </div>
                            <div class="ftr-text">
                                <p>+333 222 23456</p>
                            </div>
                            <div class="clearfix"> </div>
                       </div>
                       <div class="ftr-icons">
                            <div class="ftr-iblock">
                               <span class="glyphicon glyphicon-envelope">  </span>
                            </div>
                            <div class="ftr-text">
                                <p><a href="mailto:contato@dudualmeida.com.br">contato@dudualmeida.com.br</a></p>
                            </div>
                            <div class="clearfix"> </div>
                       </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //footer end here -->
    <!-- copy rights start here -->
    <div class="copy-right">
        <div class="container">
            <p>© <?= the_time('Y');?> by <?php bloginfo('name'); ?> </p>
        </div>
    </div>
    <!-- //copy right end here -->
    <!-- smooth-scrolling-of-move-up -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };
            */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= getHome();?>/js/bootstrap.js"></script>
</body>
</html>