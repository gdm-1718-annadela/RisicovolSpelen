<div class="margin-top block-container">
<div class="logo-partners">
    <h1 class="title red-title">Partners in onze adviescommissie</h1>

<?php
$query = new WP_Query(array(
    'post_type' => 'Partners',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'category_name' => 'bedrijven',
    'order' => 'asc', 
));

while ($query->have_posts()) {
    $query->the_post();
    $post_logo = get_field('illustratie');
    $post_link= get_field('link');
    ?>
        <a href="<?php echo $post_link?>"><img src="<?php echo $post_logo ?>"></a>
    <?php

}

wp_reset_query();
?>
    </div>


</div>