<?php
/**
 * The template for Footer.
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */
?>

            </div>
        </div>
    </div>
    <!-- /.container -->


<div id="footer-wrap" class="site-footer clr">
        <div id="footer" class="row clr">
            <div class="container">
            <div class="col-md-6">
                <div class="row">
                    <div>
                        <div class="col-md-7">
                            <h3>Chico Pereira</h3>
                            <p class="ftp">
                                Artista visual e professor [aposentado] (Depto. de Artes Visuais/UFPB). Estudos básicos na Escola de Artes (Campina Grande-PB).
                            </p>
                        </div>
                        <div class="col-md-5">
                                <img src="http://r2ss.com.br/chicopereira/wp-content/themes/chicopereira2/images/chico.jpg" rel="" title="">
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <p>Patrocínio:</p>
                    </div>
                    <div class="col-md-12">
                        <img src="http://r2ss.com.br/chicopereira/wp-content/themes/chicopereira2/images/jp.png" rel="" title="">
                    </div>
                </div>
            </div>
        <div>
        </div><!-- #footer -->
    </div><!-- #footer-wrap -->

    <footer id="copyright-wrap" class="clear">
        <div id="copyright" role="contentinfo" class="clr">

                   <p>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?> | Desenvolvido por <a href='http://www.r2ss.com.br'>R2SS</a></p></div>

                </div><!-- #copyright -->
    </footer><!-- #footer-wrap -->

  </div>
</div>
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/inc/js/jquery.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/inc/js/bootstrap.js" type="text/javascript"></script>
 <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body></html>
