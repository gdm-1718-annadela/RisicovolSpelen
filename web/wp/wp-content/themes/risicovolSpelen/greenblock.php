<div class="container gevaar-container">
<div class="head">
    <h3 class="title green-title"><?php echo get_field('titel_groen') ?></h3>
    <?php echo get_field('intro_groen') ?>
</div>
<?php
if (get_field('achtergrond')){
    ?>
    <div class="background" style="background-image: url(<?php echo get_field('achtergrond_groen')?>">
    <?php
    }else {
    ?><div class="background"><?php
    }
?>
<div class="box">
    <?php
    if(get_field('illustratie1_groen')){
        ?>
        <img src="<?php echo get_field('illustratie1_groen') ?>">
        <?php
    }
    ?>
    <?php echo get_field('tekst_groen') ;
    
    if(get_field('illustratie2_groen')){
        ?>
        <img class="second-green-img" src="<?php echo get_field('illustratie2_groen') ?>">
        <?php
    }
    if(get_field('tekst2_groen')){
        
    
  echo get_field('tekst2_groen') ;
  }
  ?>

    </div> 
</div>