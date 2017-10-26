<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?><?php wp_title('|',true,'left'); ?></title>
	
	<!-- META -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0"> 
	<meta name="apple-mobile-web-app-capable" content="yes"> 


	<!-- FAVICONS -->
	<link rel="shortcut icon" href="<?php echo IMAGES; ?>/favicons/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo IMAGES; ?>/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo IMAGES; ?>/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo IMAGES; ?>/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo IMAGES; ?>/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo IMAGES; ?>/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo IMAGES; ?>/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo IMAGES; ?>/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo IMAGES; ?>/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo IMAGES; ?>/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo IMAGES; ?>/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo IMAGES; ?>/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo IMAGES; ?>/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo IMAGES; ?>/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo IMAGES; ?>/favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo IMAGES; ?>/favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">


	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&subset=latin-ext" rel="stylesheet">


	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<div class="top"> <!-- start top -->
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="<?php echo home_url(); ?>" class="logo"> <!-- start logo -->
						<img src="<?php echo ot_get_option( 'logo' ); ?>" alt="<?php bloginfo('name'); ?>">
					</a> <!-- end logo -->
				</div>
				<div class="col-md-9">
					<div class="menu-toggle">
						<i class="fa fa-bars"></i>
					</div>

					<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>	
				</div>
			</div>
		</div>
	</div> <!-- end top -->