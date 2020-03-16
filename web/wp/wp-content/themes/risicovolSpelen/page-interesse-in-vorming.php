<?php
if (have_posts() ):
    while( have_posts() ): the_post();
    ?>

<div class="container">
    <?php get_header();
?>
    <header>
        <div class="intro">
            <h1 class="title blue-title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <img class="background-image" src="<?php the_field('achtergrond') ?>">
        </div>
    </header>
</div>

<!-- <?php get_template_part('orangeblock') ?> -->
<?php get_template_part('events') ?>

    


<?php

// get_template_part('blueblock');

get_template_part('redblock');
    endwhile;
endif;

get_footer();
