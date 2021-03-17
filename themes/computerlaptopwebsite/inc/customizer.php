<?php
/**
 * Computer_Laptop_website Theme Customizer
 *
 * @package Computer_Laptop_website
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function clw_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'clw_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'clw_customize_partial_blogdescription',
			)
		);
	}

// add social media panel

$wp_customize->add_panel(
	'social_media',
	array(
		'title' 		=> 'Social Media',
		'description' 	=> 'Add social links',
	)
);

// facebook

$wp_customize->add_section(
	'facebook_link',
	array(
		'title' => 'Facebook Link',
		'panel' => 'social_media',
	)
);

$wp_customize->add_setting(
	'facebook_url'
);

$wp_customize->add_control(
	'facebook_url',
	array(
		'label' => 'Facebook URL',
		'section' => 'facebook_link',
		'setting' => 'facebook_url',
	)
);

// twitter

$wp_customize->add_section(
	'twitter_link',
	array(
		'title' => 'Twitter Link',
		'panel' => 'social_media',
	)
);

$wp_customize->add_setting(
	'twitter_url'
);

$wp_customize->add_control(
	'twitter_url',
	array(
		'label' => 'Twitter URL',
		'section' => 'twitter_link',
		'setting' => 'twitter_url',
	)
);

// instagram

$wp_customize->add_section(
	'instagram_link',
	array(
		'title' => 'Instagram Link',
		'panel' => 'social_media',
	)
);

$wp_customize->add_setting(
	'instagram_url'
);

$wp_customize->add_control(
	'instagram_url',
	array(
		'label' => 'Instagram URL',
		'section' => 'instagram_link',
		'setting' => 'instagram_url',
	)
);

}
add_action( 'customize_register', 'clw_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function clw_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function clw_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function clw_customize_preview_js() {
	wp_enqueue_script( 'clw-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'clw_customize_preview_js' );
