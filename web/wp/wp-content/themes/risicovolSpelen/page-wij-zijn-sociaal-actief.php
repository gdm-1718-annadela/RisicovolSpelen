<?php

if (have_posts() ):
    while( have_posts() ): the_post();
    get_template_part('sidebar')
    ?>

    <div class="container">
        <?php get_header();
?>
        <header>
            <div id="test" class="intro">
                <h1 class="title green-title"><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
                <img class="background-image" src="<?php the_field('achtergrond') ?>">
            </div>
        </header>
    </div>

    <div class="block-container">
    <h2 class="title green-title">Méér weten over risicovol spelen? Bekijk onze media!</h2>
    <div id="nav" class="nav nav-media"><?php wp_nav_menu( array( 'theme_location' => 'media-menu' ) ); ?></div>
    <div id="nav" class="nav-phone"><?php wp_nav_menu( array( 'theme_location' => 'media-menu' ) ); ?></div>
    
    
</div> 
<?php get_template_part('blueblock')?>
    <?php get_template_part('greenblock')?>
    <?php get_template_part('redblock')?>
    <?php get_template_part('orangeblock')?>

    <?php
    endwhile;
endif;

get_footer();