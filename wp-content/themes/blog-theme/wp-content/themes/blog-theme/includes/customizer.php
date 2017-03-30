<?php

function _tk_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    $wp_customize->add_section( 'header' , array(
        'title'      => __( 'Header', '_tk' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'blog-name-left' , array(
        'default'   => 'Blog Name Left',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'blog-name-left', array(
        'label'      => __( 'Blog Name Left', '_tk' ),
        'section'    => 'header',
        'settings'   => 'blog-name-left',
    ) ) );

    $wp_customize->add_setting( 'blog-name-right' , array(
        'default'   => 'Blog Name Right',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'blog-name-right', array(
        'label'      => __( 'Blog Name Right', '_tk' ),
        'section'    => 'header',
        'settings'   => 'blog-name-right',
    ) ) );

    $wp_customize->add_section( 'blog' , array(
        'title'      => __( 'Blog page', '_tk' ),
        'priority'   => 29,
    ) );

    $wp_customize->add_setting( 'blog-posts-title' , array(
        'default'   => 'Blog posts title',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'blog-posts-title', array(
        'label'      => __( 'Blog posts title', '_tk' ),
        'section'    => 'blog',
        'settings'   => 'blog-posts-title',
    ) ) );

    $wp_customize->add_setting( 'slider-effect' , array(
        'default'   => 'slide',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'slider-effect', array(
        'label'      => __( 'Slider effect', '_tk' ),
        'section'    => 'blog',
        'settings'   => 'slider-effect',
        'type'       => 'radio',
        'choices'    => array(
            'slide'  => __( 'Slide' ),
            'flip'   => __( 'Flip' ),
            'fade'   => __( 'Fade' ),
            'coverflow'  => __( 'Coverflow' )
    ))));

    $wp_customize->add_setting( 'category-2-title' , array(
        'default'   => 'Category 2 - Gallery',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'category-2-title', array(
        'label'      => __( 'Category 2 title', '_tk' ),
        'section'    => 'header',
        'settings'   => 'category-2-title',
    ) ) );

    $wp_customize->add_setting( 'theme-color-picker' , array(
        'default'   => '#ffd500',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme-color-picker', array(
        'label'      => __( 'THEME MAIN COLOR', '_tk' ),
        'section'    => 'colors',
        'settings'   => 'theme-color-picker',
        'default'   => '#ffd500',
    ) ) );

    // FOOTER SECTION

    $wp_customize->add_section( 'footer' , array(
        'title'      => __( 'Footer', '_tk' ),
        'priority'   => 31,
    ) );

    // Facebook social

    $wp_customize->add_setting( 'fb-checkbox' , array(
        'default'    =>  true,
        'transport'  =>  'postMessage'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fb-checkbox', array(
        'section'   => 'footer',
        'label'     => __( 'Show facebook link', '_tk' ),
        'type'      => 'checkbox'
    ) ) );

    $wp_customize->add_setting( 'fb-link' , array(
        'default'   => 'facebook.com',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fb-link', array(
        'label'      => __( 'Facebook link', '_tk' ),
        'section'    => 'footer',
        'settings'   => 'fb-link',
    ) ) );

    // Twitter social

    $wp_customize->add_setting( 'tw-checkbox' , array(
        'default'    =>  true,
        'transport'  =>  'postMessage'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tw-checkbox', array(
        'section'   => 'footer',
        'label'     => __( 'Show twitter link', '_tk' ),
        'type'      => 'checkbox'
    ) ) );

    $wp_customize->add_setting( 'tw-link' , array(
        'default'   => 'twitter.com',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tw-link', array(
        'label'      => __( 'Twitter link', '_tk' ),
        'section'    => 'footer',
        'settings'   => 'tw-link',
    ) ) );

    // google-plus social

    $wp_customize->add_setting( 'gl-checkbox' , array(
        'default'    =>  true,
        'transport'  =>  'postMessage'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gl-checkbox', array(
        'section'   => 'footer',
        'label'     => __( 'Show google-plus link', '_tk' ),
        'type'      => 'checkbox'
    ) ) );

    $wp_customize->add_setting( 'gl-link' , array(
        'default'   => 'google.com',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gl-link', array(
        'label'      => __( 'Google Plus Link', '_tk' ),
        'section'    => 'footer',
        'settings'   => 'gl-link',
    ) ) );

    // linedin social

    $wp_customize->add_setting( 'ln-checkbox' , array(
        'default'    =>  true,
        'transport'  =>  'postMessage'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ln-checkbox', array(
        'section'   => 'footer',
        'label'     => __( 'Show LinkedIn link', '_tk' ),
        'type'      => 'checkbox'
    ) ) );

    $wp_customize->add_setting( 'ln-link' , array(
        'default'   => 'linkedin.com',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ln-link', array(
        'label'      => __( 'LinkedIn Link', '_tk' ),
        'section'    => 'footer',
        'settings'   => 'ln-link',
    ) ) );

    // Tumblr social

    $wp_customize->add_setting( 'tm-checkbox' , array(
        'default'    =>  true,
        'transport'  =>  'postMessage'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tm-checkbox', array(
        'section'   => 'footer',
        'label'     => __( 'Show tumblr link', '_tk' ),
        'type'      => 'checkbox'
    ) ) );

    $wp_customize->add_setting( 'tm-link' , array(
        'default'   => 'tmblr.com',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tm-link', array(
        'label'      => __( 'Tmblr link', '_tk' ),
        'section'    => 'footer',
        'settings'   => 'tm-link',
    ) ) );
}
add_action( 'customize_register', '_tk_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function _tk_customize_preview_js() {
	wp_enqueue_script( '_tk_customizer', get_template_directory_uri() . '/includes/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', '_tk_customize_preview_js' );


