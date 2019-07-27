<?php
/*
	McCausland Construction Child Theme Functions
*/



// Enqueue Scripts / Styles
add_action( 'wp_enqueue_scripts', 'mcd_enqueue_styles_scripts', 99 );
function mcd_enqueue_styles_scripts() {
 
    $parent_style = 'parent-style'; 
		
		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/assets/css/custom.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    ); 
		
		
}


function mcd_child_theme_setup() {
// Editor Styles
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/editor-style.css' );

	// Image Sizes
	// add_image_size( 'ea_featured', 400, 100, true );

	// Gutenberg

	// -- Wide Images
	add_theme_support( 'align-wide' );
	
	// -- Editor Color Palette
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Blue', 'ea_genesis_child' ),
			'slug'  => 'blue',
			'color'	=> '#59BACC',
		),
		array(
			'name'  => __( 'Green', 'ea_genesis_child' ),
			'slug'  => 'green',
			'color' => '#58AD69',
		),
		array(
			'name'  => __( 'Orange', 'ea_genesis_child' ),
			'slug'  => 'orange',
			'color' => '#FFBC49',
		),
		array(
			'name'	=> __( 'Red', 'ea_genesis_child' ),
			'slug'	=> 'red',
			'color'	=> '#E2574C',
		),
	) );
	
	}
add_action( 'after_setup_theme', 'mcd_child_theme_setup', 15 );