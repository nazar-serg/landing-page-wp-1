<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
<div class="what-do-we-offer">
        <div class="container">
            <div class="what-do-we-offer__inner">
                <div class="what-do-we-offer__column-left">
                    <div class="what-do-we-offer__column-left--text">
                        <h1><?php the_field('title'); ?></h1>
                        <p><?php the_field('text_on_the_main_screen'); ?></p>
                        <a class="what-do-we-offer__column-left--link link-btn modal-toggle" href="#">Submit an application</a>
                    </div>
                </div>
                <div class="what-do-we-offer__column-right">
                    <div class="what-do-we-offer__column-right--img">
                        <img src="<?php the_field('image_main_screen'); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
</div>  
<section id="about" class="about reveal">
    <div class="container">
        <div class="about__inner">
            <div class="about__column-left">
                <div class="about__text-top">
                    <h2><?php the_field('about_title'); ?></h2>
                    <p><?php the_field('about_text'); ?></p>
                </div>
                <div class="about__text-bottom">
                    <div class="about__text-bottom--column">
                        <img src="<?php the_field('about_text_bottom_column_left_icon'); ?>" alt="">
                        <?php the_field('about_text_bottom_column_left'); ?>
                    </div>
                    <div class="about__text-bottom--column">
                        <img src="<?php the_field('about_text_bottom_column_right_icon'); ?>" alt="">
                        <?php the_field('about_text_bottom_column_right'); ?>
                    </div>
                </div>
            </div>
            <div class="about__column-right">
                <img src="<?php the_field('about_image'); ?>" alt="">
            </div>
        </div>
    </div>
</section>
<section id="our-clients" class="our-clients reveal">
    <div class="container">
        <h2>Our clients</h2>
        <div class="our-clients__inner">
            <img class="our-clients__img" src="<?php the_field('our_clients_img_1'); ?>" alt="">
            <img class="our-clients__img" src="<?php the_field('our_clients_img_2'); ?>" alt="">
            <img class="our-clients__img" src="<?php the_field('our_clients_img_3'); ?>" alt="">
            <img class="our-clients__img" src="<?php the_field('our_clients_img_4'); ?>" alt="">
        </div>
    </div>
</section>
<section class="why-choose-us reveal">
    <div class="container">
        <div class="why-choose-us__inner">
            <div class="why-choose-us__column-left">
                <h2><?php the_field('why_choose_us_title'); ?></h2>
                <p><?php the_field('why_choose_us_text'); ?></p>
            </div>
            <div class="why-choose-us__column-right">
                <div class="why-choose-us__column-right--modal">
                    <div class="why-choose-us__column-right--number">
                        <p class="why-choose-us__column-right--numeric" data-n="<?php the_field('why_choose_us_number_1'); ?>"></p>
                        <p class="why-choose-us__column-right--number-text"><?php the_field('why_choose_us_number_text_1'); ?></p>
                    </div>
                    <div class="why-choose-us__column-right--text">
                        <p><?php the_field('why_choose_us_description_1'); ?></p>
                    </div>
                </div>
                <div class="why-choose-us__column-right--modal">
                    <div class="why-choose-us__column-right--number">
                        <p class="why-choose-us__column-right--numeric" data-n="<?php the_field('why_choose_us_number_2'); ?>"></p>
                        <p class="why-choose-us__column-right--number-text"><?php the_field('why_choose_us_number_text_2'); ?></p>
                    </div>
                    <div class="why-choose-us__column-right--text">
                        <p><?php the_field('why_choose_us_description_2'); ?></p>
                    </div>
                </div>
                <div class="why-choose-us__column-right--modal">
                    <div class="why-choose-us__column-right--number">
                        <p class="why-choose-us__column-right--numeric" data-n="<?php the_field('why_choose_us_number_3'); ?>"></p>
                        <p class="why-choose-us__column-right--number-text"><?php the_field('why_choose_us_number_text_3'); ?></p>
                    </div>
                    <div class="why-choose-us__column-right--text">
                        <p><?php the_field('why_choose_us_description_3'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="our-service" class="our-service reveal">
    <div class="container">
        <h2><?php the_field('our_service_title'); ?></h2>
        <div class="our-service__inner">
            <div class="our-service__column">
                <div class="our-service__column--module">
                    <div class="our-service__column--img">
                        <img src="<?php the_field('our_service_icon_1'); ?>" alt="">
                    </div>
                    <div class="our-service__column--text">
                        <p><?php the_field('our_service_text_1'); ?></p>
                    </div>
                </div>
            </div>
            <div class="our-service__column">
                <div class="our-service__column--module">
                    <div class="our-service__column--img">
                        <img src="<?php the_field('our_service_icon_2'); ?>" alt="">
                    </div>
                    <div class="our-service__column--text">
                        <p><?php the_field('our_service_text_2'); ?></p>
                    </div>
                </div>
            </div>
            <div class="our-service__column">
                <div class="our-service__column--module">
                    <div class="our-service__column--img">
                        <img src="<?php the_field('our_service_icon_3'); ?>" alt="">
                    </div>
                    <div class="our-service__column--text">
                        <p><?php the_field('our_service_text_3'); ?></p>
                    </div>
                </div>
            </div>
            <div class="our-service__column">
                <div class="our-service__column--module">
                    <div class="our-service__column--img">
                        <img src="<?php the_field('our_service_icon_4'); ?>" alt="">
                    </div>
                    <div class="our-service__column--text">
                        <p><?php the_field('our_service_text_4'); ?></p>
                    </div>
                </div>
            </div>
            <div class="our-service__column">
                <div class="our-service__column--module">
                    <div class="our-service__column--img">
                        <img src="<?php the_field('our_service_icon_5'); ?>" alt="">
                    </div>
                    <div class="our-service__column--text">
                        <p><?php the_field('our_service_text_5'); ?></p>
                    </div>
                </div>
            </div>
            <div class="our-service__column">
                <div class="our-service__column--module">
                    <div class="our-service__column--img">
                        <img src="<?php the_field('our_service_icon_6'); ?>" alt="">
                    </div>
                    <div class="our-service__column--text">
                        <p><?php the_field('our_service_text_6'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="rewiews reveal">
    <div class="container">
        <h2>Rewiews</h2>
        <div class="rewiews__inner">
            <div class="rewiews__column">
                <div class="rewiews__column--text">
                    <p><?php the_field('rewiew_text_1'); ?></p>
                </div>
                <div class="rewiews__column--name">
                    <p><?php the_field('rewiew_name_1'); ?></p>
                </div>
                <div class="rewiews__column--profession">
                    <p><?php the_field('rewiew_profession_1'); ?></p>
                </div>
            </div>
            <div class="rewiews__column">
                <div class="rewiews__column--text">
                    <p><?php the_field('rewiew_text_2'); ?></p>
                </div>
                <div class="rewiews__column--name">
                    <p><?php the_field('rewiew_name_2'); ?></p>
                </div>
                <div class="rewiews__column--profession">
                    <p><?php the_field('rewiew_profession_2'); ?></p>
                </div>
            </div>
            <div class="rewiews__column">
                <div class="rewiews__column--text">
                    <p><?php the_field('rewiew_text_3'); ?></p>
                </div>
                <div class="rewiews__column--name">
                    <p><?php the_field('rewiew_name_3'); ?></p>
                </div>
                <div class="rewiews__column--profession">
                    <p><?php the_field('rewiew_profession_3'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="slider">
    <h2>Introduce Our Projects</h2>
    <div class="slider__items">
        <?php
        global $post;

        $myposts = get_posts([ 
            'numberposts' => 10,
        ]);

        if( $myposts ){
            foreach( $myposts as $post ){
                setup_postdata( $post );
                ?>
                <div class="slider__content">
                    <?php the_post_thumbnail(
                        array(400, 300),
                        array (
                            'class' => 'slider__img',
                        )

                    ); ?>
                    <div class="slider__info">
                        <div class="slider__title"><?php the_title(); ?></div>
                        <div class="slider__text"><?php the_content(); ?></div>
                    </div>
                </div>
                <?php }} wp_reset_postdata();
        ?>
    </div>
</section>
<?php get_footer(); ?>