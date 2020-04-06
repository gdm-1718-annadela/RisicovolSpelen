<?php
get_header();

if (have_posts() ):
    while( have_posts() ): the_post();
    get_template_part('sidebar')
    ?>

<div>
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
    <?php
    $query = new WP_Query(array(
        'post_type' => 'Audio',
        'post_status' => 'publish',
        'order' => 'asc', 
    ));
    
    while ($query->have_posts()) {
        $query->the_post();

        ?>
        <div class="block-container block-none-box">
        <h3 class="title green-title"><?php echo get_the_title() ?></h3>

        <div class="box margin-top">
            <?php
            if(get_field('illustratie')){
                ?>
                <img src="<?php echo get_field('illustratie') ?>">
                <?php
            }
            ?>
            <div class="margin-left"><?php echo get_the_content() ?></div>

            </div> 
        </div>        
        <div class="scroll"></div>
        <?php


        
        
    }
    ?>
    </div>
   
    <?php
    endwhile;
endif;

get_footer();
