<?php 
function bc_customize_home($wp_customize){
    
    $wp_customize->add_section('bc_site_home_scheme', array(
        'title'    => __('Home Page', 'bc'),
        'description' => '',
        'priority' => 140,
    ));

    //  =============================
    //  = Radio Hero Type       =
    //  =============================
    $wp_customize->add_setting('bc_theme_home_options[bc_hero_type]', array(
        'default'        => 'backgound_image',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
 
    $wp_customize->add_control('bc_home_hero_type', array(
        'label'      => __('Hero Type', 'bc'),
        'section'    => 'bc_site_home_scheme',
        'settings'   => 'bc_theme_home_options[bc_hero_type]',
        'type'       => 'radio',
        'choices'    => array(
            'backgound_image' => 'Background Image',
            'image_slider' => 'Image Slider',
            'video' => 'Video',
        ),
    ));

    // Include Background Image File
    $filepath_home_background_image = locate_template( 'inc/theme-customizer/bc-home-background-image.php' );
    require_once $filepath_home_background_image;

    // Include Video File
    $filepath_home_video = locate_template( 'inc/theme-customizer/bc-home-video.php' );
    require_once $filepath_home_video;

    // Include Image Slider File
    $filepath_home_image_slider = locate_template( 'inc/theme-customizer/bc-home-image-slider.php' );
    require_once $filepath_home_image_slider;

}

add_action('customize_register', 'bc_customize_home');
