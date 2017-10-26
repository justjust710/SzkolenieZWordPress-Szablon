<?php
	
	// GLOBAL VARIABLES
	define('THEMEROOT', get_stylesheet_directory_uri());	
	define('IMAGES', THEMEROOT . '/images');	
	define('SCRIPTS', THEMEROOT . '/scripts');	
	define('STYLES', THEMEROOT . '/styles');	


	// ADD STYLES
	function styles() {
		/* 
			SKŁADNIA:
			wp_enqueue_style( nazwa_stylu, sciezka_do_pliku, zależny_od, wersja, media np. print, screen, (max-width: 640px) )
		*/
	    wp_enqueue_style( 'bootstrap', STYLES . '/bootstrap.min.css' );
	    wp_enqueue_style( 'font-awesome', STYLES . '/font-awesome.css' );
	    wp_enqueue_style( 'main', THEMEROOT . '/style.css' );
	}

	add_action( 'wp_enqueue_scripts', 'styles' );



	// ADD SCRIPTS
	function scripts() {
		/* 
			SKŁADNIA:
			wp_enqueue_script( nazwa_skryptu, sciezka_do_pliku, zależny_od, wersja, czy_w_stopce )
		*/
		wp_enqueue_script( 'custom', SCRIPTS . '/custom.js', array('jquery'), '1.0.0', false );
	}
	add_action( 'wp_enqueue_scripts', 'scripts' );



	// REGISTER MENUS
	function menu() {
		register_nav_menus(array(
	    	'main-menu' => 'Główne menu'
		));
	}
	add_action('init', 'menu');



	// ADD SEARCH BOX TO MAIN MENU
	function add_search_box_to_menu( $items, $args ) {
	    if( $args->theme_location == 'main-menu' ) {
	        return $items . '<li class="search"><a href="#"><i class="fa fa-search"></i></a><form action="' . get_site_url() . '"><input type="text" name="s" placeholder="Wyszukaj..."></form></li>';
	    }
	    return $items;
	}
	add_filter('wp_nav_menu_items','add_search_box_to_menu', 10, 2);



	// REGISTER SIDEBARS
	register_sidebar(array(
	  'name' => 'Pasek boczny',
	  'id' => 'main-sidebar',
	  'description' => 'Pasek boczny na podstronach',
	  'before_title' => '<h3>',
	  'after_title' => '</h3>',
	  'before_widget' => '<div class="block">',
	  'after_widget' => '</div>',
	));

	register_sidebar(array(
	  'name' => 'Strona główna 1',
	  'id' => 'main-page-sidebar-1',
	  'description' => 'Pierwszy obszar na stronie głównej',
	  'before_title' => '<h2>',
	  'after_title' => '</h2>',
	  'before_widget' => '<div class="info-box">',
	  'after_widget' => '</div>',
	));

	register_sidebar(array(
	  'name' => 'Strona główna 2',
	  'id' => 'main-page-sidebar-2',
	  'description' => 'Drugi obszar na stronie głównej',
	  'before_title' => '<h2>',
	  'after_title' => '</h2>',
	  'before_widget' => '<div class="info-box">',
	  'after_widget' => '</div>',
	));

	register_sidebar(array(
	  'name' => 'Strona główna 3',
	  'id' => 'main-page-sidebar-3',
	  'description' => 'Trzeci obszar na stronie głównej',
	  'before_title' => '<h2>',
	  'after_title' => '</h2>',
	  'before_widget' => '<div class="info-box">',
	  'after_widget' => '</div>',
	));

	register_sidebar(array(
	  'name' => 'Stopka 1',
	  'id' => 'footer-sidebar-1',
	  'description' => 'Pierwszy obszar w stopce',
	  'before_title' => '<h3>',
	  'after_title' => '</h3>',
	  'before_widget' => '<div class="footer-box">',
	  'after_widget' => '</div>',
	));

	register_sidebar(array(
	  'name' => 'Stopka 2',
	  'id' => 'footer-sidebar-2',
	  'description' => 'Drugi obszar w stopce',
	  'before_title' => '<h3>',
	  'after_title' => '</h3>',
	  'before_widget' => '<div class="footer-box">',
	  'after_widget' => '</div>',
	));

	register_sidebar(array(
	  'name' => 'Stopka 3',
	  'id' => 'footer-sidebar-3',
	  'description' => 'Trzeci obszar w stopce',
	  'before_title' => '<h3>',
	  'after_title' => '</h3>',
	  'before_widget' => '<div class="footer-box">',
	  'after_widget' => '</div>',
	));
		

