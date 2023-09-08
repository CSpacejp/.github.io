<?php
/**
 * Theme Options.
 *
 * @package blog_storm
 */

// Add Panel.
$wp_customize->add_panel( 'theme_option_panel',
	array(
	'title'      => __( 'Theme Options', 'blog-storm' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

// Sidebar section
$wp_customize->add_section('section_sidebar', array(    
	'title'       => __('Sidebar Options', 'blog-storm'),
	'panel'       => 'theme_option_panel'    
));

// Blog Sidebar Option
$wp_customize->add_setting('blog_sidebar', 
	array(
	'default' 			=> 'no-sidebar',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'blog_storm_sanitize_select',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control('blog_sidebar', 
	array(		
	'label' 	=> __('Blog Sidebar', 'blog-storm'),
	'section' 	=> 'section_sidebar',
	'settings'  => 'blog_sidebar',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'left-sidebar' 	=> __( 'Left Sidebar', 'blog-storm'),						
		'right-sidebar' => __( 'Right Sidebar', 'blog-storm'),	
		'no-sidebar' 	=> __( 'No Sidebar', 'blog-storm'),	
		),	
	)
);

// Single Post Sidebar Option
$wp_customize->add_setting('single_post_sidebar', 
	array(
	'default' 			=> 'right-sidebar',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'blog_storm_sanitize_select',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control('single_post_sidebar', 
	array(		
	'label' 	=> __('Single Post Sidebar', 'blog-storm'),
	'section' 	=> 'section_sidebar',
	'settings'  => 'single_post_sidebar',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'left-sidebar' 	=> __( 'Left Sidebar', 'blog-storm'),						
		'right-sidebar' => __( 'Right Sidebar', 'blog-storm'),	
		'no-sidebar' 	=> __( 'No Sidebar', 'blog-storm'),	
		),	
	)
);

// Archive Sidebar Option
$wp_customize->add_setting('archive_sidebar', 
	array(
	'default' 			=> 'no-sidebar',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'blog_storm_sanitize_select',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control('archive_sidebar', 
	array(		
	'label' 	=> __('Archive Sidebar', 'blog-storm'),
	'section' 	=> 'section_sidebar',
	'settings'  => 'archive_sidebar',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'left-sidebar' 	=> __( 'Left Sidebar', 'blog-storm'),						
		'right-sidebar' => __( 'Right Sidebar', 'blog-storm'),	
		'no-sidebar' 	=> __( 'No Sidebar', 'blog-storm'),	
		),	
	)
);

// Page Sidebar Option
$wp_customize->add_setting('page_sidebar', 
	array(
	'default' 			=> 'no-sidebar',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'blog_storm_sanitize_select',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control('page_sidebar', 
	array(		
	'label' 	=> __('Page Sidebar', 'blog-storm'),
	'section' 	=> 'section_sidebar',
	'settings'  => 'page_sidebar',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'left-sidebar' 	=> __( 'Left Sidebar', 'blog-storm'),						
		'right-sidebar' => __( 'Right Sidebar', 'blog-storm'),	
		'no-sidebar' 	=> __( 'No Sidebar', 'blog-storm'),	
		),	
	)
);

// Excerpt Length
$wp_customize->add_section('section_excerpt_length', 
	array(    
	'title'       => __('Excerpt Length', 'blog-storm'),
	'panel'       => 'theme_option_panel'    
	)
);

$wp_customize->add_setting( 'excerpt_length', array(
	'default'           => '30',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'blog_storm_sanitize_number_range',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'excerpt_length', array(
	'label'       => __( 'Excerpt Length', 'blog-storm' ),
	'description' => __( 'Note: Min 5 & Max 100.', 'blog-storm' ),
	'section'     => 'section_excerpt_length',
	'type'        => 'number',
	'input_attrs' => array( 'min' => 5, 'max' => 100, 'style' => 'width: 55px;' ),
) );

// Read More
$wp_customize->add_section('section_read_more', 
	array(    
	'title'       => __('Read More', 'blog-storm'),
	'panel'       => 'theme_option_panel'    
	)
);

$wp_customize->add_setting( 'read_more_label', array(
	'default'           => esc_html__('Read More', 'blog-storm'),
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'read_more_label', array(
	'label'       => __( 'Read More Label', 'blog-storm' ),
	'section'     => 'section_read_more',
	'type'        => 'text',
) );