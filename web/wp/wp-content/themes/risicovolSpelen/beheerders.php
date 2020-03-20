<div class="block-container">
<div class="beheer-partners">

<?php
$query = new WP_Query(array(
    'post_type' => 'Partners',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'category_name' => 'beheerders',
    'order' => 'asc', 
));

while ($query->have_posts()) {
    $query->the_post();
    $post_logo = get_field('illustratie');
    $post_name = get_the_title();
    // $post_link= get_field('link');
    ?>
    <div class="beheerders">
        <h2 class="name title"><?php echo $post_name ?></h2>
        <a href="<?php echo $post_link?>"><img src="<?php echo $post_logo ?>"></a>
    </div>
    <?php

}

wp_reset_query();
?>
    </div>


</div>