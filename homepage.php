<?php 
/**
 * Template Name: Homepage
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */
 get_header(); ?>

 <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="<?php bloginfo('template_url'); ?>/images/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php bloginfo('template_url'); ?>/images/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php bloginfo('template_url'); ?>/images/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                   
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">

                        <section id="projetos">
            <div class="row">

                <div class="col-md-3 col-sm-3">
                    <h2>MAAC</h2>
                    <div class="thumbnails">
                        <img src="<?php bloginfo('template_url'); ?>/images/bloco.jpg" rel="" title="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h2>MAAC</h2>
                    <div class="thumbnails">
                        <img src="<?php bloginfo('template_url'); ?>/images/bloco.jpg" rel="" title="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h2>MAAC</h2>
                    <div class="thumbnails">
                        <img src="<?php bloginfo('template_url'); ?>/images/bloco.jpg" rel="" title="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h2>MAAC</h2>
                    <div class="thumbnails">
                        <img src="<?php bloginfo('template_url'); ?>/images/bloco.jpg" rel="" title="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 ">
                    <h2>MAAC</h2>
                    <div class="thumbnails">
                        <img src="<?php bloginfo('template_url'); ?>/images/bloco.jpg" rel="" title="">
                    </div>
                </div>
            </div>
        </section>

                <section class="noticias">

            <div class="row">

                    <div class="col-md-6  col-sm-6 news">
                        <h2><a href="#">Titulo</a></h2>
                        <div>
                         <a href="#">  <img src="<?php bloginfo('template_url'); ?>/images/img2.jpg" rel="" title=""></a>
                        </div>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis doloribus incidunt, dicta ipsum voluptate aut nobis, accusamus mollitia voluptatum odit natus sint hic est sit? Velit iure ipsum, tempora esse.</p>

                        <a href="#" class="read-more pull-right btn btn-sm btn-info">Leia Mais</a>
                    </div>
    
                                <div class="col-md-6  col-sm-6 news">
                        <h2><a href="#">Titulo</a></h2>
                        <div>
                         <a href="#">  <img src="<?php bloginfo('template_url'); ?>/images/img2.jpg" rel="" title=""></a>
                        </div>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis doloribus incidunt, dicta ipsum voluptate aut nobis, accusamus mollitia voluptatum odit natus sint hic est sit? Velit iure ipsum, tempora esse.</p>

                        <a href="#" class="read-more pull-right btn btn-sm btn-info">Leia Mais</a>
                    </div>
         
        </div>
        </section>
                   
                </div>
<?php get_footer(); ?>
