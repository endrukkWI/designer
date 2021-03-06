<?php
if ( ! function_exists( 'blank_setup' ) ) :
	function blank_setup() {
		load_theme_textdomain( 'intentionally-blank' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );

		// This theme allows users to set a custom background.
		add_theme_support( 'custom-background', apply_filters( 'intentionally_blank_custom_background_args', array(
			'default-color' => 'f5f5f5',
		) ) );

		add_theme_support( 'custom-logo' );
		add_theme_support( 'custom-logo', array(
			'height'      => 256,
			'width'       => 256,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );

		function blank_custom_logo() {
			if ( function_exists( 'the_custom_logo' ) ) {
				return get_custom_logo();
			}else{
				return '';
			}
		}
	}
endif; // blank_setup
add_action( 'after_setup_theme', 'blank_setup' );

function blank_customizer_cleanup($wp_customize){
	$wp_customize->remove_section( 'static_front_page' );
}
add_action( 'customize_register', 'blank_customizer_cleanup');

function add_extra_js(){
    $extraJs = get_field('extra_js');
    if($extraJs && $extraJs != ""){
        $themeDir = get_template_directory_uri();
        $extraJs = explode(',',$extraJs);
        foreach ($extraJs as $js)
            echo '<script src="' . $themeDir .'/assets/js/'. trim($js) .'" type="text/javascript" charset="utf-8"></script>';
    }
}
add_action( 'extra_js', 'add_extra_js');

function add_extra_css(){
    $extraCss = get_field('extra_css');
    if($extraCss && $extraCss != ""){
        $themeDir = get_template_directory_uri();
        $extraCss = explode(',',$extraCss);
        foreach ($extraCss as $css)
            echo '<link rel="stylesheet" href="' . $themeDir . '/assets/css/' . trim($css) . '" />';
    }
}
add_action( 'extra_css', 'add_extra_css');