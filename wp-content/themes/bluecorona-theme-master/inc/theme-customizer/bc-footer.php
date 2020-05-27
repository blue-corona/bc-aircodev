<?php 
function bc_customize_footer($wp_customize){
    
    $wp_customize->add_section('bc_site_footer_scheme', array(
        'title'    => __('Footer', 'bc'),
        'description' => '',
        'priority' => 160,
    ));

    //  =============================
    //  = # of columns              =
    //  =============================
    $wp_customize->add_setting('bc_theme_options[footer][columns]', array(
        'default'        => '3',
    ));
    $wp_customize->add_control('bc_theme_options[footer][columns]', array(
        'label' => esc_html__( '# of columns(1-6)', 'theme_slug' ),
        'section' => 'bc_site_footer_scheme',
        'type' => 'number',
        'settings' => 'bc_theme_options[footer][columns]',
    ));

    //  =============================
    //  = # of rows              =
    //  =============================
    $wp_customize->add_setting('bc_theme_options[footer][rows]', array(
        'default'        => '1',
    ));
    $wp_customize->add_control('bc_theme_options[footer][rows]', array(
        'label' => esc_html__( '# of rows(1-6)', 'theme_slug' ),
        'section' => 'bc_site_footer_scheme',
        'type' => 'number',
        'settings' => 'bc_theme_options[footer][rows]',
    ));

    
    //  =================================================
    //  = Color Picker Footer Background Color          =
    //  =================================================
    $wp_customize->add_setting('bc_theme_options[footer][footer_background_color]', array(
        'default'           => '#253E91',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[footer][footer_background_color]', array(
        'label'    => __('Footer background', 'bc'),
        'section'  => 'bc_site_footer_scheme',
        'settings' => 'bc_theme_options[footer][footer_background_color]',
    )));

    //  =====================================
    //  = Color Picker Footer text Color  =
    //  =====================================
    $wp_customize->add_setting('bc_theme_options[footer][footer_text_color]', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[footer][footer_text_color]', array(
        'label'    => __('Footer text', 'bc'),
        'section'  => 'bc_site_footer_scheme',
        'settings' => 'bc_theme_options[footer][footer_text_color]',
    )));

    //  =====================================
    //  = Color Picker Copyright bar background  =
    //  =====================================
    $wp_customize->add_setting('bc_theme_options[footer][copyright_bar_background]', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[footer][copyright_bar_background]', array(
        'label'    => __('Copyright bar background', 'bc'),
        'section'  => 'bc_site_footer_scheme',
        'settings' => 'bc_theme_options[footer][copyright_bar_background]',
    )));

    //  ==================================
    //  = Color Picker Copyright text  =
    //  ==================================
    $wp_customize->add_setting('bc_theme_options[footer][copyright_bar_text_color]', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[footer][copyright_bar_text_color]', array(
        'label'    => __('Copyright Text', 'bc'),
        'section'  => 'bc_site_footer_scheme',
        'settings' => 'bc_theme_options[footer][copyright_bar_text_color]',
    )));

    //  =============================
    //  = Copyright Text            =
    //  =============================
    $wp_customize->add_setting('bc_theme_options[footer][copyright_text]', array(
        'default'        => 'Copyright Len the plumber, 2019<br/>Web design by Blue Corona',
        'capability'     => 'edit_theme_options',
        
    ));
    $wp_customize->add_control('bc_theme_options[footer][copyright_text]', array(
        'label'      => __('Copyright text', 'bc'),
        'section'    => 'bc_site_footer_scheme',
        'type'       => 'textarea',
        'settings'   => 'bc_theme_options[footer][copyright_text]',
    ));

}

add_action('customize_register', 'bc_customize_footer');
