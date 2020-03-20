<div class="block-none-box">
<?php
if (get_field('achtergrond_without_box')){
    ?>
    <div class="background" style="background-image: url(<?php echo get_field('achtergrond_without_box')?>">
    <?php
    }else {
    ?><div class="background"><?php
    }
?>
<div class="flex">

    <?php
    if(get_field('illustratie_without_box')){
        ?>
        <img  src="<?php echo get_field('illustratie_without_box') ?>">
        <?php
    }
    ?>
    <div class=" margin-left"><?php echo get_field('content_without_box') ?></div>
    </div>

</div>
</div>