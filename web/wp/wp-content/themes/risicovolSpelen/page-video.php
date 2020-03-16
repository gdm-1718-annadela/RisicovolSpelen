<?php
get_header();

if (have_posts() ):
    while( have_posts() ): the_post();
    ?>

<div class="container">
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
        'post_type' => 'Video',
        'post_status' => 'publish',
        'order' => 'asc', 
    ));
    
    while ($query->have_posts()) {
        $query->the_post();

        ?>
        <div class="">
        <div class="head">
            <h1 ><?php echo get_the_title() ?></h1>
        </div>
        <?php
        ?>
        <div class="without-box videos">
            <?php
            if(get_field('video')){
                ?>
                <div class="video"><?php echo get_field('video') ?></div>
                <?php
            }
            ?>
            <div><?php echo get_the_content() ?></div>

            </div> 
        </div>      
        <?php
    }
    ?>
    

    <?php
    endwhile;
endif;

get_footer();
