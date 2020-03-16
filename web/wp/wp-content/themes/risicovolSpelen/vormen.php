<div class="vorm-box">
<div class="vertical-line"></div>

<div class="vormen">
    <?php
    $query = new WP_Query(array(
        'post_type' => 'vormen',
        'post_status' => 'publish',
        'posts_per_page' => 8,
        'orderby' => 'date', 
        'order' => 'asc', 
    ));
    
    while ($query->have_posts()) {
        $query->the_post();
        $post_title = get_the_title();
        $post_content = get_the_content();
        $post_icoon = get_field('icoon');
        $post_foto = get_field('foto');
        ?>
        <div class="vorm">
            <div class="tekst">
                <h4 class='orange-title'><?php echo $post_title ?></h4>
                <?php echo $post_content ?>
            </div>
            <div class="foto">
                <img src="<?php echo $post_foto?>">
            </div>
            <div class="icoon">
                <div class="line"></div>
                <img src="<?php echo $post_icoon ?>">
            </div>
        </div>

        <?php
    }
    
    wp_reset_query();
    ?>
</div>
</div>
