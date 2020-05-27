<?php 
function bc_customize_social_media($wp_customize){
    
    $wp_customize->add_section('bc_site_social_media_scheme', array(
        'title'    => __('Social Media (still needs to work on)', 'bc'),
        'description' => 'Shortcode: [social-icons]',
        'priority' => 150,
    ));

    //  =============================
    //  = Color Picker Social Icon  =
    //  =============================
    $wp_customize->add_setting('bc_theme_social_media[bc_social_icon_color]', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_social_icon_color', array(
        'label'    => __('Icon Color', 'bc'),
        'section'  => 'bc_site_social_media_scheme',
        'settings' => 'bc_theme_social_media[bc_social_icon_color]',
    )));

    //  ======================================
    //  = Color Picker Social Icon Hover  =
    //  ======================================
    $wp_customize->add_setting('bc_theme_social_media[bc_social_icon_hover_color]', array(
        'default'           => '#1e73be',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_social_icon_hover_color', array(
        'label'    => __('Hover Color', 'bc'),
        'section'  => 'bc_site_social_media_scheme',
        'settings' => 'bc_theme_social_media[bc_social_icon_hover_color]',
    )));

    //  =======================================
    //  = Facebook icon inputbox    =
    //  ========================================
    $wp_customize->add_setting('bc_theme_social_media[bc_facebook_link]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));
    $wp_customize->add_control('bc_facebook_link_value', array(
        'label'      => __('Facebook', 'bc'),
        'section'    => 'bc_site_social_media_scheme',
        'type'           => 'text',
        'settings'   => 'bc_theme_social_media[bc_facebook_link]',
    ));

    $wp_customize->add_setting('bc_theme_social_media[bc_facebook_icon]', array(
        'default'        => '<i class="fa fa-facebook" aria-hidden="true"></i>',
        'capability'     => 'edit_theme_options',
    ));
    $wp_customize->add_control('bc_facebook_icon_value', array(
        'label'      => __('Icon', 'bc'),
        'section'    => 'bc_site_social_media_scheme',
        'type'           => 'text',
        'settings'   => 'bc_theme_social_media[bc_facebook_icon]',
    ));

    //  =======================================
    //  = Linkedin icon inputbox    =
    //  ========================================
    $wp_customize->add_setting('bc_theme_social_media[bc_linkedin_link]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));
    $wp_customize->add_control('bc_linkedin_link_value', array(
        'label'      => __('Linkedin', 'bc'),
        'section'    => 'bc_site_social_media_scheme',
        'type'           => 'text',
        'settings'   => 'bc_theme_social_media[bc_linkedin_link]',
    ));

    $wp_customize->add_setting('bc_theme_social_media[bc_linkedin_icon]', array(
        'default'        => '<i class="fa fa-linkedin" aria-hidden="true"></i>',
        'capability'     => 'edit_theme_options',
    ));
    $wp_customize->add_control('bc_linkedin_icon_value', array(
        'label'      => __('Icon', 'bc'),
        'section'    => 'bc_site_social_media_scheme',
        'type'           => 'text',
        'settings'   => 'bc_theme_social_media[bc_linkedin_icon]',
    ));

    //  =======================================
    //  = Twitter icon inputbox    =
    //  ========================================
    $wp_customize->add_setting('bc_theme_social_media[bc_twitter_link]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));
    $wp_customize->add_control('bc_twitter_link_value', array(
        'label'      => __('Twitter', 'bc'),
        'section'    => 'bc_site_social_media_scheme',
        'type'           => 'text',
        'settings'   => 'bc_theme_social_media[bc_twitter_link]',
    ));

    $wp_customize->add_setting('bc_theme_social_media[bc_twitter_icon]', array(
        'default'        => '<i class="fa fa-twitter" aria-hidden="true"></i>',
        'capability'     => 'edit_theme_options',
    ));
    $wp_customize->add_control('bc_twitter_icon_value', array(
        'label'      => __('Icon', 'bc'),
        'section'    => 'bc_site_social_media_scheme',
        'type'           => 'text',
        'settings'   => 'bc_theme_social_media[bc_twitter_icon]',
    ));

    //  =======================================
    //  = Instagram icon inputbox    =
    //  ========================================
    $wp_customize->add_setting('bc_theme_social_media[bc_instagram_link]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));
    $wp_customize->add_control('bc_instagram_link_value', array(
        'label'      => __('Instagram', 'bc'),
        'section'    => 'bc_site_social_media_scheme',
        'type'           => 'text',
        'settings'   => 'bc_theme_social_media[bc_instagram_link]',
    ));

    $wp_customize->add_setting('bc_theme_social_media[bc_instagram_icon]', array(
        'default'        => '<i class="fa fa-instagram" aria-hidden="true"></i>',
        'capability'     => 'edit_theme_options',
    ));
    $wp_customize->add_control('bc_instagram_icon_value', array(
        'label'      => __('Icon', 'bc'),
        'section'    => 'bc_site_social_media_scheme',
        'type'           => 'text',
        'settings'   => 'bc_theme_social_media[bc_instagram_icon]',
    ));

    //  =======================================
    //  = YouTube icon inputbox    =
    //  ========================================
    $wp_customize->add_setting('bc_theme_social_media[bc_youtube_link]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));
    $wp_customize->add_control('bc_youtube_link_value', array(
        'label'      => __('YouTube', 'bc'),
        'section'    => 'bc_site_social_media_scheme',
        'type'           => 'text',
        'settings'   => 'bc_theme_social_media[bc_youtube_link]',
    ));

    $wp_customize->add_setting('bc_theme_social_media[bc_youtube_icon]', array(
        'default'        => '<i class="fa fa-youtube" aria-hidden="true"></i>',
        'capability'     => 'edit_theme_options',
    ));
    $wp_customize->add_control('bc_youtube_icon_value', array(
        'label'      => __('Icon', 'bc'),
        'section'    => 'bc_site_social_media_scheme',
        'type'           => 'text',
        'settings'   => 'bc_theme_social_media[bc_youtube_icon]',
    ));

    //  =======================================
    //  = Pinterest icon inputbox    =
    //  ========================================
    $wp_customize->add_setting('bc_theme_social_media[bc_pinterest_link]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'transport' => 'refresh',
        // 'sanitize_callback' => 'bluecorona_url_sanitization'
    ));
    $wp_customize->add_control('bc_pinterest_link_value', array(
        'label'      => __('Pinterest', 'bc'),
        'section'    => 'bc_site_social_media_scheme',
        'type'           => 'text',
        'settings'   => 'bc_theme_social_media[bc_pinterest_link]',
    ));

    $wp_customize->add_setting('bc_theme_social_media[bc_pinterest_icon]', array(
        'default'        => '<i class="fa fa-pinterest" aria-hidden="true"></i>',
        'capability'     => 'edit_theme_options',
    ));
    $wp_customize->add_control('bc_pinterest_icon_value', array(
        'label'      => __('Icon', 'bc'),
        'section'    => 'bc_site_social_media_scheme',
        'type'           => 'text',
        'settings'   => 'bc_theme_social_media[bc_pinterest_icon]',
    ));


    // Add our Sortable Repeater setting and Custom Control for Social media URLs
    $wp_customize->add_setting( 'sample_sortable_repeater_control',
        array(
            'default' => '',
            'transport' => 'refresh',
            // 'sanitize_callback' => 'bluecorona_url_sanitization'
        )
    );
    // echo "<pre>"; print_r($wp_customize); echo "</pre>";
    $wp_customize->add_control( new BlueCorona_Sortable_Repeater_Custom_Control( $wp_customize, 'sample_sortable_repeater_control',
        array(
            'label' => __( 'Custom Social Media', 'skyrocket' ),
            'description' => esc_html__( 'This is the control description.', 'skyrocket' ),
            'section' => 'bc_site_social_media_scheme',
            'button_labels' => array(
                'add' => __( 'Add Row', 'skyrocket' ),
            )
        )
    ) );

    /**
     * URL sanitization
     *
     * @param  string   Input to be sanitized (either a string containing a single url or multiple, separated by commas)
     * @return string   Sanitized input
     */
    /*if ( ! function_exists( 'bluecorona_url_sanitization' ) ) {
        function bluecorona_url_sanitization( $input ) {
            if ( strpos( $input, ',' ) !== false) {
                $input = explode( ',', $input );
            }
            if ( is_array( $input ) ) {
                foreach ($input as $key => $value) {
                    $input[$key] = esc_url_raw( $value );
                }
                $input = implode( ',', $input );
            }
            else {
                $input = esc_url_raw( $input );
            }
            return $input;
        }
    }*/

}

add_action('customize_register', 'bc_customize_social_media');
