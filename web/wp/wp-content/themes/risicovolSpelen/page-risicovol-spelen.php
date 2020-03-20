<?php
if (have_posts() ):
    while( have_posts() ): the_post();
    get_template_part('sidebar')
    ?>
    <div class="container">
        <?php get_header();?>
        <div id="nav" class="nav second-nav"><?php wp_nav_menu( array( 'theme_location' => 'second-menu' ) ); ?></div>

        <header>
            <div class="intro">
                <h1 class="title orange-title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <img class="background-image" src="<?php the_field('achtergrond') ?>">
            </div>
        </header>
    </div>

    <div class="scroll" id="Gevaar"></div>
    <?php get_template_part('orangeblock') ?>

    <div class="scroll" id="vormen"></div>
    <div class="vormen-container">
        <h3 class="title red-title"><?php echo get_field('titel_vormen')?></h3>
        <?php echo get_field('intro_vormen')?>
        <div class="download-btn">
        <div class="download download-red download-vormen" ><a href="<?php echo get_field('link_vormen')?>"><?php echo get_field('titel_link_vormen')?></a></div>
        <div class="download btn-border download-vormen"></div></div>
        <?php get_template_part('vormen') ?>
    </div>
   
    <div class="scroll" id="risico"></div>
    <?php get_template_part('greenblock'); ?>
    
    <div class="scroll" id="veilig"></div>
    <?php get_template_part('redunderblock');

    endwhile;
endif;

get_footer();
