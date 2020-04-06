<?php
if (have_posts() ):
    while( have_posts() ): the_post();
    get_template_part('sidebar')
    ?>

<div class="container">
    <?php get_header();?>
    <div id="nav" class="nav second-nav"><?php wp_nav_menu( array( 'theme_location' => 'vorming-menu' ) ); ?></div>

    <header>
        <div class="intro">
            <h1 class="title blue-title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <img class="background-image" src="<?php the_field('achtergrond') ?>">
        </div>
    </header>
</div>
<div class="scroll" id="Aanbod"></div>
<h1 class="title green-title block-container">Ontdek ons aanbod!</h1>
<?php get_template_part('blockWithoutContent');?>
<?php get_template_part('beheerders');?>
<div class="scroll" id="Events"></div>
<?php get_template_part('events') ?>

<?php

// get_template_part('blueblock');

get_template_part('redblock');
    endwhile;
endif;

get_footer();
