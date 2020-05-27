<?php 
function bc_customize_navigation($wp_customize){
    
    $wp_customize->add_section('bc_site_navigation_scheme', array(
        'title'    => __('Navigation', 'bc'),
        'description' => '',
        'priority' => 110,
    ));
 
    //  =============================
    //  = Nav bar background        =
    //  =============================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][nav_bar_background]', array(
        'default'           => '#253e91',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][nav_bar_background]', array(
        'label'    => __('Nav bar background', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][nav_bar_background]',
    )));

    //  =============================
    //  = Top Level Link        =
    //  =============================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][top_level_link]', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][top_level_link]', array(
        'label'    => __('Top-level link', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][top_level_link]',
    )));

    //  =============================
    //  = Top Level Link Hover      =
    //  =============================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][top_level_link_hover]', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][top_level_link_hover]', array(
        'label'    => __('Top-level link hover', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][top_level_link_hover]',
    )));

    //  =============================
    //  = Top level Dropdown Icon      =
    //  =============================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][top_level_dropdown_icon]', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][top_level_dropdown_icon]', array(
        'label'    => __('Top level dropdown icon', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][top_level_dropdown_icon]',
    )));

    //  ======================================
    //  = Top level dropdown background      =
    //  ======================================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][top_level_dropdown_background]', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][top_level_dropdown_background]', array(
        'label'    => __('Top level dropdown background hover', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][top_level_dropdown_background]',
    )));

    //  ======================================
    //  = Top level dropdown icon hover      =
    //  ======================================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][top_level_dropdown_icon_hover]', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][top_level_dropdown_icon_hover]', array(
        'label'    => __('Top level dropdown icon hover', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][top_level_dropdown_icon_hover]',
    )));

    //  =============================
    //  = Dropdown Icon      =
    //  =============================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][dropdown_icon]', array(
        'default'           => '#116eab',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][dropdown_icon]', array(
        'label'    => __('Dropdown Icon', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][dropdown_icon]',
    )));

    //  =============================
    //  = Dropdown Icon Hover      =
    //  =============================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][dropdown_icon_hover]', array(
        'default'           => '#253E91',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][dropdown_icon_hover]', array(
        'label'    => __('Dropdown Icon Hover', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][dropdown_icon_hover]',
    )));

    //  =============================
    //  = Dropdown Background      =
    //  =============================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][dropdown_background]', array(
        'default'           => '#116eab',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][dropdown_background]', array(
        'label'    => __('Dropdown Background', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][dropdown_background]',
    )));

    //  =============================
    //  = Dropdown Link      =
    //  =============================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][dropdown_link]', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][dropdown_link]', array(
        'label'    => __('Dropdown Link', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][dropdown_link]',
    )));

    //  =============================
    //  = Dropdown Link Hover     =
    //  =============================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][dropdown_link_hover]', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][dropdown_link_hover]', array(
        'label'    => __('Dropdown Link Hover', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][dropdown_link_hover]',
    )));

    //  =====================================
    //  = Dropdown Link Hover Background    =
    //  =====================================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][dropdown_link_hover_background]', array(
        'default'           => '#F38527',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][dropdown_link_hover_background]', array(
        'label'    => __('Dropdown Link Hover Background', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][dropdown_link_hover_background]',
    )));
    
    //  =====================================
    //  = Mobile Nav Icon    =
    //  =====================================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][mobile_nav_icon]', array(
        'default'           => '#F38527',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][mobile_nav_icon]', array(
        'label'    => __('Mobile Nav Icon', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][mobile_nav_icon]',
    )));

    //  ============================
    //  = Mobile Nav Background    =
    //  ============================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][mobile_nav_background]', array(
        'default'           => '#253E91',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bc_theme_options[navigation_bar][mobile_nav_background]', array(
        'label'    => __('Mobile Nav Background', 'bc'),
        'section'  => 'bc_site_navigation_scheme',
        'settings' => 'bc_theme_options[navigation_bar][mobile_nav_background]',
    )));
    
    //  =======================================
    //  = Mobile nav icon  =
    //  ========================================
    $wp_customize->add_setting('bc_theme_options[navigation_bar][mobile_nav_icon_code]', array(
        'default'        => '<i class="fa fa-address-book-o" aria-hidden="true"></i>',
        'capability'     => 'edit_theme_options',
        
    ));
    $wp_customize->add_control('bc_theme_options[navigation_bar][mobile_nav_icon_code]', array(
        'label'      => __('Mobile nav icon', 'bc'),
        'section'    => 'bc_site_navigation_scheme',
        'type'           => 'text',
        'settings'   => 'bc_theme_options[navigation_bar][mobile_nav_icon_code]',
    ));

}

add_action('customize_register', 'bc_customize_navigation');

add_action( 'wp_head', 'navigation_style');
function navigation_style($wp_customize){
?>
<style type="text/css">
/*Menu Classes*/
    .bc_nav_container { background-color: <?php echo bc_get_theme_mod('bc_theme_options', 'navigation_bar','nav_bar_background', '#00395e');?>; } /* Nav bar Background */
    @media only screen and (max-width: 768px) {
      .bc_nav_container { background-color: <?php echo bc_get_theme_mod('bc_theme_options', 'navigation_bar','mobile_nav_background', '#ffffff');?>; } /* Mobile Nav Background */ 
    }
    .bc_nav_container .navbar-nav li a { color: <?php echo bc_get_theme_mod('bc_theme_options', 'navigation_bar','top_level_link', '#ffffff');?>; } /*Top level links */
    .bc_nav_container .navbar-nav li a svg { color: <?php echo bc_get_theme_mod('bc_theme_options', 'navigation_bar','top_level_dropdown_icon', '#116eab');?>; } /*NEW Top level dropdown icon*/
    .bc_nav_container .navbar-nav li:hover { background-color: <?php echo bc_get_theme_mod('bc_theme_options', 'navigation_bar','top_level_dropdown_background', '#116eab');?>; } /* NEW Top level dropdown background hover    */
    .bc_nav_container .navbar-nav li:hover svg { color: <?php echo bc_get_theme_mod('bc_theme_options', 'navigation_bar','top_level_dropdown_icon_hover', '#00395e;');?>; } /*NEW Top level dropdown icon hover*/
    .bc_nav_container .navbar-nav li:hover a { color: <?php echo bc_get_theme_mod('bc_theme_options', 'navigation_bar','top_level_link_hover', '#ffffff');?>; } /* Top level link hover */
    .bc_nav_container .navbar-nav .dropdown-menu { background-color: <?php echo bc_get_theme_mod('bc_theme_options', 'navigation_bar','dropdown_background', '#116eab');?>; } /* Dropdown background*/
    @media only screen and (max-width: 768px) {
      .bc_nav_container .navbar-nav .dropdown-menu { background-color: #ffffff00; } /* Dropdown Mobile background*/
    }
    .bc_nav_container .dropdown li a, .bc_nav_container .dropdown .dropdown-item a { color: <?php echo bc_get_theme_mod('bc_theme_options', 'navigation_bar','dropdown_link', '#ffffff');?>; } /* Dropdown link */
    .bc_nav_container .dropdown li a svg, .bc_nav_container .dropdown .dropdown-item a svg { color: <?php echo bc_get_theme_mod('bc_theme_options', 'navigation_bar','dropdown_icon', '#00395e');?>; } /* Dropdown icon */
    @media only screen and (max-width: 768px) {
      .bc_nav_container .dropdown li a svg, .bc_nav_container .dropdown .dropdown-item a svg { color: <?php echo bc_get_theme_mod('bc_theme_options', 'navigation_bar','top_level_dropdown_icon', '#116eab');?>; } /* Dropdown mobile icon */
    }
    .bc_nav_container .dropdown li:hover, .bc_nav_container .dropdown .dropdown-item:hover { background-color: <?php echo bc_get_theme_mod('bc_theme_options', 'navigation_bar','dropdown_link_hover_background', '#00395e');?>; } /* Dropdown Link Hover Background */ 
    .bc_nav_container .dropdown li:hover svg, .bc_nav_container .dropdown .dropdown-item:hover svg { color: <?php echo bc_get_theme_mod('bc_theme_options', 'navigation_bar','dropdown_icon_hover', '#ffffff');?>; } /* Dropdown icon hover */
    .bc_nav_container .dropdown li:hover a, .bc_nav_container .dropdown .dropdown-item:hover a { color: <?php echo bc_get_theme_mod('bc_theme_options', 'navigation_bar','dropdown_link_hover', '#ffffff');?>; } /* Dropdown Link Hover */
    .navbar-toggler-icon { color: <?php echo bc_get_theme_mod('bc_theme_options', 'navigation_bar','mobile_nav_icon', '#f38527');?>; } /* Mobile Nav Icon */
</style>
<?php
}
