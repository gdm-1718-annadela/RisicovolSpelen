<?php

if (have_posts() ):
    while( have_posts() ): the_post();
    ?>

    <div class="container">
        <?php get_header();?>
        <div id="nav" class="nav second-nav"><?php wp_nav_menu( array( 'theme_location' => 'tool-menu' ) ); ?></div>

        <header>
            <div id="test" class="intro">
                <h1 class="title red-title"><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
                <img class="background-image" src="<?php the_field('achtergrond') ?>">
            </div>
        </header>
    </div>
    

    <div class="block-container column">
        <?php echo get_field('content_extra')?>
    </div>

    <div class="scroll"></div><?php

    get_template_part('blockWithoutContent');

    ?><div class="scroll" id="Draaikalender"></div><?php
    get_template_part('blueblock');
    ?><div class="scroll" id="ReplayMeth"></div><?php
    get_template_part('orangeblock');
    ?><div class="scroll" id="Tools"></div><?php
    get_template_part('greenblock');
    ?>
    <div class="vertical-bar"></div>
    <div class="horizontal-bar"></div>
    <div class="vertical-bar"></div>
    <div class="horizontal-bar"></div>
    <div class="tools">
    <?php
    $query = new WP_Query(array(
        'post_type' => 'Tools',
        'post_status' => 'publish',
        'order' => 'asc', 
        'posts_per_page' => 12,

    ));
    
    while ($query->have_posts()) {
        $query->the_post();
        $post_icon = get_field('illustratie');
        $post_link = get_field('link');

        ?>
        <div><a class="toolbox" href="<?php echo $post_link?>"><img src="<?php echo $post_icon?>"></a></div>
        <?php
        
        
    }
    ?>
     <p class="comment">Klik op het icoon om het bestand te downloaden</p>
    </div>
   
    <?php
    

    
    wp_reset_query();
    ?><div class="scroll"></div><?php
    get_template_part('redblock');
    endwhile;
endif;

get_footer();
