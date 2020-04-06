<?php

if (have_posts() ):
    while( have_posts() ): the_post();

    get_template_part('sidebar')
    ?>

<div class="container">
        <?php get_header();
?>
        <header>
            <div class="intro">
                <h1 class="title"><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
                <?php if(the_field('achtergrond')){
                    ?>
                    <img class="background-image" src="<?php the_field('achtergrond') ?>"/>
                    <?php
                }
                ?>
            </div>
        </header>
    </div>

    

    <?php
    endwhile;
endif;

get_footer();
