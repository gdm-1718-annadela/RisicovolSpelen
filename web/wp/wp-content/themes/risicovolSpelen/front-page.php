<?php
if (have_posts() ):
    while( have_posts() ): the_post();
    get_template_part('sidebar')
    ?>

    <div class="container">
        <?php get_header();?>
        <header>
            <div id="test" class="intro">
                <h1 class="title red-title"><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
                <img class="background-image" src="<?php the_field('achtergrond') ?>">
            </div>
        </header>
    </div>
    <img class="blue-background" src="./wp/wp-content/themes/risicovolSpelen/assets/illustrations/watDoeJijAls.png">
    <?php get_template_part('news');?>
    <div class="background-white">
    <div class="facebooktext">
        <?php the_field('facebook_tekst')?></p>
    </div>
    </div>

    <div class="container blue-container">
        <h3><?php echo get_field('titel') ?></h3>
        <p><?php echo get_field('tekst') ?></p>
    </div>

    <?php get_template_part('meerwaarde');?>
    <?php get_template_part('redunderblock');
    get_template_part('partners');
    
    endwhile;
endif;

get_footer();
