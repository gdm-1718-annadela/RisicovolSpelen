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

    <div class="block-container">
        <h1 class="second-title orange-title">Papieren lectuur</h1>
<?php

$query = new WP_Query(array(
    'post_type' => 'Artikels',
    'post_status' => 'publish',
    'category_name' => 'papier',
    'order' => 'asc', 
));

while ($query->have_posts()) {
    $query->the_post();
    $post_title = get_the_title();
    $post_content = get_the_content();
    $post_link = get_field('content_extra');
    ?>
    <div class="margin-top">
    <?php
     ?><h2 class="second-title green-title"><?php echo $post_title;?></h2><?php
     echo $post_link;
    ?><div><?php echo $post_content;?></div>
</div>

    <?php

}

wp_reset_query();
?><h1 class="margin-top second-title orange-title">Online lectuur</h1>
<?php
$query = new WP_Query(array(
    'post_type' => 'Artikels',
    'post_status' => 'publish',
    'category_name' => 'online',
    'order' => 'asc', 
));

while ($query->have_posts()) {
    $query->the_post();
    $post_title = get_the_title();
    $post_content = get_the_content();
    $post_link = get_field('content_extra');
    ?>
    <h2 class="margin-top second-title green-title"><?php echo $post_title;?></h2>
    <div class="flex">
    <?php
     echo $post_link;
    ?><div><?php echo $post_content;?></div>
</div>

    <?php

}
wp_reset_query();

?></div><?php
    
        endwhile;
endif;

get_footer();
