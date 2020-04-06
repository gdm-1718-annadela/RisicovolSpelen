<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon shortcut" href="/assets/logo's/replay.png" type="image/x-icon">
    <title>Risicovol Spelen</title>
    <?php wp_head() ?>
</head>
<body id="body">
<div id="nav" class="nav"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></div>
<div id="nav-icon" class="nav-icon"><i id="fa" class="fas fa-bars"></i></div>

<script type="text/javascript">
  document.getElementById('nav-icon').addEventListener('click',function(){
      document.getElementById('nav').classList.add("phoneNav")
      document.getElementById('nav-icon').style.display = "none"
      document.getElementById('body').style.position = "fixed"
  })

</script>