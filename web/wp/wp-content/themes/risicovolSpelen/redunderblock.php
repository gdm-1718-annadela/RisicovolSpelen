<div class="block-container red-container">
    <h3 class="title"><?php echo get_field('titel_rood') ?></h3>
    <?php
    if(get_field('intro_rood')&& get_field('afbeelding_rood')){
    ?>
        <div>
            <img src="<?php echo get_field('afbeelding_rood') ?>">
            <?php echo get_field('intro_rood') ?>
        </div>
        <?php echo get_field('content_rood') ?>
    <?php
    } else if (get_field('intro_rood')){
    ?>
        <div>
            <?php echo get_field('intro_rood') ?>
        </div>
        <?php echo get_field('content_rood');
    }else if (get_field('afbeelding_rood')){
    ?>
        <div>
            <img src="<?php echo get_field('afbeelding_rood') ?>">
        </div>
        <?php echo get_field('content_rood'); 
    } else {
        echo get_field('content_rood');
        }
    ?>
</div>