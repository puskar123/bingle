<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <meta name ="viewport" content = "width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <?php?>
    <body>
    <header class = "top-header">
        <div class="container">
            <div class="top-header-wrap">
                <div class="email">
                    <a><i class="fa fa-envelope-square"></i></a>
                    <a href="">Email Address: info@8degreethemes.com</a>
                </div>
                <div class="address">
                <a><i class="fa fa-map-pin"></i></a>
                    <a href="">Office Address: Mathurisadan, Kathmandu</a>
                </div>
                <div class="icons">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </header>
    <header class="main-herader">
        <div class="container">
            <div class="header-topbar">
                <div class="row">
                    <div class="logo">
                        <a class="navbar-brand" href="<?php site_url('/');?>">
                            <?php if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
                            } ?>
                    
                        </a>
                    </div>
                    <div class="navigation">
                    <?php
                      wp_nav_menu([
                        'menu'            => 'primary',
                        'theme_location'  => 'headerMenuLocation'
                      ]);
                    ?>
                    </div>
                    <div class="contact">
                        <div class="contact-icon">
                            <i class="dashicons dashicons-format-chat"></i>
                        </div>
                        <div class="contact-text">
                            <span class= "block">Need A Help</span>
                            <a href="">9848833322</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    