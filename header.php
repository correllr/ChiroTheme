<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
			<meta name="viewport" content="width=device-width">
			<meta name="description" content="<!-- FILL THIS IN LATER! -->"/>
			<title><?php echo get_bloginfo('name'); ?></title>
		
			<?php wp_head(); ?>
			
	<!---------- FONTS ---------->	
		
		
	</head>

<body <?php body_class(); ?>> 
				
			
<!--- SITE HEADER --->
	<header class="site-header">
	
	<div id="hero">
		<img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/Howwework.jpg" alt="hero-banner" width="100%">
		<h1 id="hero--title">Clinic Name</h1>
		<h2 id="hero--subtitle">Location or Slogan</h2>
		<a id="hero--cta" class="btn" href="#">CTA HERE</a>
	</div>
	
	<div id="logosection">
		<div id="logo">
			<img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/04/QUIROPRACTICO-PROMOVER-1.jpg" alt="logo" width="250px">
		</div>
		
		<div id="header-menu"><?php
			$args = array(
			'theme_location' => 'primary'
			);
		?>
		<?php wp_nav_menu( $args ); ?>	
		</div>
	</div>
	
	
	
	</header>
<!-- /site-header -->

<div class="container">