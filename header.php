<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__body">
                <div class="header__logo">
                    <?php echo the_custom_logo(); ?>
                </div>
                <div class="header__burger">
                    <span></span>
                </div>
                <nav class="header__menu">
                    <ul class="header__list">
                        <li class="header__item">
                            <a class="header__link" href="#about"><?php the_field('menu_link_1'); ?></a>
                        </li>
                        <li class="header__item">
                            <a class="header__link" href="#our-clients"><?php the_field('menu_link_2'); ?></a>
                        </li>
                        <li class="header__item">
                            <a class="header__link" href="#our-service"><?php the_field('menu_link_3'); ?></a>
                        </li>
                        <li class="header__item">
                            <a class="header__link" href="#contacts"><?php the_field('menu_link_4'); ?></a>
                        </li>
                    </ul>
                </nav> 
                <div class="header__btn">
                    <a class="header__btn--link link-btn modal-toggle" href="#">Submit an application</a>
                </div> 
            </div>     
        </div>        
    </header>
    <div class="main">


            
        