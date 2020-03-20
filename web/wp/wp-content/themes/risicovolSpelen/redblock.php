<div class="container">
<div class="head">
    <h3 class="title red-title"><?php echo get_field('titel_red') ?></h3>
    <?php echo get_field('intro_red') ?>
</div>
<?php
if (get_field('achtergrond_red')){
    ?>
    <div class="background" style="background-image: url(<?php echo get_field('achtergrond_red')?>">
    <?php
    }else {
    ?><div class="background"><?php
    }
?>
<div class="box">
    <?php
    if(get_field('illustratie_red')){
        ?>
        <img src="<?php echo get_field('illustratie_red') ?>">
        <?php
    }
    ?>
    <?php echo get_field('tekst_red');
        if(get_field('link_red')){
            ?>
            <div class="download download-red" ><a href="<?php echo get_field('link_red')?>"><?php echo get_field('titel_link_red')?></a></div>
            <div class="download btn-border"></div>
            <?php
        }
        ?>

    </div> 
</div>