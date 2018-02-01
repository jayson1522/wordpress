<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
  <title>what is Affiliate</title>
  <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <div id="container" class="shadow">

     <p class="login">
      
      <a href="index.html">Create Account |</a>
      <a href="index.html">Login</a>  
     </p>

  <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Portfolio Logo" width="177" height="59" />
    
    <?php wp_nav_menu(array('theme_location' => 'header_menu', 'menu_id' => 'nav', 'container' => 'ul')); ?>