<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/<?php global $style; echo $style; ?>.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/geral.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bower_components/wow/css/libs/animate.css">

    <?php if(is_front_page()) : ?>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bower_components/slick-carousel/slick/slick-theme.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bower_components/slick-carousel/slick/slick.css">
    <?php endif; ?>

    <?php if(is_page('portfolio')) : ?>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bower_components/lightbox2/dist/css/lightbox.min.css">
    <?php endif; ?>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/plugins.css">

    <!-- Controlador de cache, retirar quando acabar o desenvolvimento -->
    <meta http-equiv="Cache-Control" content="no-store" />
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <?php include('includes/organisms/menu-responsivo.php'); ?>
    
    <div class="layout">

        <style>
            <?php if(get_the_post_thumbnail()) : ?>
                header {
                    background-image: url('<?php the_post_thumbnail_url(); ?>');
                }
            <?php else : ?>
                header {
                    background-image: url('<?php bloginfo('template_url'); ?>/images/fundo-slide-pagina-inicial.jpg');
                }
            <?php endif; ?>
        </style>


        <header>
            <div class="container"> <!-- DIV CONTAINER -->
                <div class="logo wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
                    <a href="<?php bloginfo('url'); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/images/logo-tag-topo.svg" alt="Logo tag topo">
                    </a>
                </div>

                <div class="links">

                    <?php include('includes/organisms/menu.php'); ?>
                    
                    <a class="toggle" href="javascript:;">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <ul class="social">
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-github-alt"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="slide">
                    
                    <?php query_posts('post_type=slide'); ?>
                        <?php while(have_posts()): the_post(); ?>

                            <div class="item">
                                <h1><?php the_title(); ?></h1>

                                <p><?php the_content(); ?></p>                     
                            </div>

                            <div class="item">
                                <h1><?php echo $chamada; ?></h1>

                                <p>Code // Share // Reboot</p>
                            </div>

                            <div class="item">
                                <h1>Chamada 3 HTML5</h1>

                                <p>Code // Share // Reboot</p>
                            </div>

                            <div class="item">
                                <h1>Chamada 4 HTML5</h1>

                                <p>Code // Share // Reboot</p>
                            </div>

                        <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>

            </div> <!-- FIM DIV CONTAINER -->
        </header>

        <main>