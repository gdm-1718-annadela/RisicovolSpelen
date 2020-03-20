<div class="container ">
<div class="head">
    <h3 class="title orange-title"><?php echo get_field('titel_orangje') ?></h3>
    <?php echo get_field('intro_orangje') ?>
</div>
<?php
if (get_field('achtergrond')){
    ?>
    <div class="background" style="background-image: url(<?php echo get_field('achtergrond_oranje')?>">
    <?php
    }else {
    ?><div class="background"><?php
    }
?>
<div class="box">
    <?php
    if(get_field('illustratie_oranje')){
        ?>
        <img src="<?php echo get_field('illustratie_oranje') ?>">
        <?php
    }
    ?>
    <?php echo get_field('tekst_orangje') ;
        if(get_field('link_orangje')){
            ?>
            <div class="download download-orange" ><a href="<?php echo get_field('link_orangje')?>"><?php echo get_field('titel_link_orangje')?></a></div>
            <div class="download btn-border"></div>
            <?php
        }
        ?>

    </div> 
</div>