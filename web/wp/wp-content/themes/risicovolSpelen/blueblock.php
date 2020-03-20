<div class="container">
<div class="head">
    <h3 class="title blue-title"><?php echo get_field('titel_blauw') ?></h3>
    <?php echo get_field('intro_blauw') ?>
</div>
<?php
if (get_field('achtergrond')){
    ?>
    <div class="background" style="background-image: url(<?php echo get_field('achtergrond_blauw')?>">
    <?php
    }else {
    ?><div class="background"><?php
    }
?>
<div class="box">

    <?php
    if(get_field('illustratie_blauw')){
        ?>
        <img src="<?php echo get_field('illustratie_blauw') ?>">
        <?php
    }
    ?>
    <?php echo get_field('tekst_blauw') ;
        if(get_field('link_blauw')){
            ?>
            <div class="download download-blue" ><a href="<?php echo get_field('link_blauw')?>"><?php echo get_field('titel_link_blauw')?></a></div>
            <div class="download btn-border"></div>
            <?php
        }
        ?>

    </div> 
</div>