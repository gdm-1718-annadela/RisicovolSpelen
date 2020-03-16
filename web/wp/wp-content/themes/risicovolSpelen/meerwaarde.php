
<?php
$query = new WP_Query(array(
    'post_type' => 'Meerwaarde',
    'post_status' => 'publish',
    'order' => 'asc', 
));

while ($query->have_posts()) {
    $query->the_post();
    $post_title = get_the_title();
    $post_content = get_the_content();
    $post_img = get_field('illustratie');
    
    if (get_field('achtergrond')){
        ?>
        <div class="background" style="background-image: url(<?php echo get_field('achtergrond')?>">
        <?php
    }else {
        ?><div class="background"><?php
    }
    ?>
        <div  class="box">
            <img src="<?php echo $post_img ?>">
            <p ><?php echo $post_content ?></p>
        </div>
    </div>
    <?php
}

wp_reset_query();