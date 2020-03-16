<?php
get_header();

if (have_posts() ):
    while( have_posts() ): the_post();
    ?>

<div class="container" >
        <?php get_header();?>
        <div id="nav" class="nav nav-media-above"><?php wp_nav_menu( array( 'theme_location' => 'media-menu' ) ); ?></div>

        <header>
            <div class="intro">
                <h1 class="title"><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
                <img class="background-icoon" src="<?php the_field('achtergrond') ?>">
            </div>
        </header>
    </div>
    <div class="block-container">
        <?php echo get_field('gallerij')?>
    </div>
    

    <?php
    endwhile;
endif;

get_footer();
