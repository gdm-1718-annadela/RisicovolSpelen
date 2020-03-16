<H3> events </h3>

<?php
    $query = new WP_Query(array(
        'post_type' => 'Event',
        'post_status' => 'publish',
        'order' => 'asc', 
    ));
    
    while ($query->have_posts()) {
        $query->the_post();
        $post_volzet = get_field('volzet');
        $post_title = get_the_title();
        $post_content = get_the_content();
        $post_background = get_field('achtergrond');
        $post_image = get_field('illustratie');
        $post_color = get_field('kleur');
        ?>
        <div class="container gevaar-container">
        <div class="head">
            <h3 class="title" style="color: <?php echo $post_color?>"><?php echo $post_title ?></h3>
        </div>
        <?php
        if ($post_background){
            ?>
            <div class="background" style="background-image: url(<?php echo $post_background?>">
            <?php
        }else {
            ?><div class="background"><?php
        }
        ?>
        <div class="box">
        <?php
        if($post_image){
            ?>
            <img src="<?php echo $post_image ?>">
            <?php
        }
        if(get_field('link')){
            ?>
            <div class="download" style="background-color: <?php echo $post_color?>" ><a href="<?php echo get_field('link')?>"><?php echo get_field('titel_link')?></a></div>
            <div class="download btn-border"></div>
            <?php
        }
         echo $post_content;
         if($post_volzet == 1){
             ?><h3>volzet</h3><?php
         }
        ?>
    </div> 
</div>
        <?php

    }
    wp_reset_query();
?>

