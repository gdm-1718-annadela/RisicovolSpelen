<div id="nieuws" class="news-container block-container">

<?php
$query = new WP_Query(array(
    'post_type' => 'news',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'orderby' => 'date', 
    'order' => 'desc', 
));

while ($query->have_posts()) {
    $query->the_post();
    $post_title = get_the_title();
    $post_content = get_the_content();
    $post_date = get_the_date();
    $post_profile = get_field('post_afbeelding');
    $post_img = get_field('nieuws_afbeelding');
    ?>
    <div>
        <div class="news-header flex">
            <img class="profile-img" src="<?php echo $post_profile ?>">
            <div>
                <h3><?php echo $post_title ?></h3>
                <p class="date"><?php echo $post_date ?></p>
            </div>
        </div>
        <img class="news-img" src="<?php echo $post_img ?>">
        <p><?php echo $post_content ?></p>
    </div>
    <?php
}

wp_reset_query();
?>
</div>