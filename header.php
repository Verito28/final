<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>

<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>

<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.html">
        <img border="0" alt="" src="assets/images/logos/logo_cc.png" width="100" height="100">
    </a>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">INDICADORES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FEEDBACK'S</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CALIDAD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ROCKING NEWS</a>
      </li>
      
   
              
    </ul>
  
  </div>
</nav>