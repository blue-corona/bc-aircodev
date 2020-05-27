<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.

	'/widgets/bc-services-widget.php',            // BC Service widget area.
	'/widgets/bc-testimonials-widget.php',        // BC Testimonial widget area.
	'/widgets/bc-gravity-form-widget.php',        // BC Gravity widget area.
	'/widgets/bc-promotions-widget.php',          // BC Promotions widget area.

	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/class-wp-bc-navwalker.php', 			// Load BC custom Wordpress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
	'/custom-functions.php',                // Load custom functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

/*
* Enqueue theme customizer files 
* path : inc/theme-customizer
*/
$theme_customizer_includes = array(
	'bc-site-identity.php',                // Load site identity
	'bc-navigation.php',                   // Load site navigation property
	'bc-header.php',                       // Load site header property
	'bc-fonts.php',                        // Load site fonts property
	// 'bc-home.php',                         // Load site home property
	// 'bc-social-media.php',                 // Load site social media property
	// 'bc-footer.php',                       // Load site footer property
);

foreach ( $theme_customizer_includes as $file ) {
	$filepath = locate_template( 'inc/theme-customizer/' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

/*
 * Enqueue required javascript & CSS libraries required for the theme
 */
add_action('wp_enqueue_scripts', 'bc_theme_include_css_js');
function bc_theme_include_css_js(){
	//including animate.css
	wp_enqueue_style('bc-animate-css','https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css',true);
	//including font awesome pro
	wp_enqueue_script('bc-font-awesome-pro', 'https://kit.fontawesome.com/f6a235ce10.js');
	//wp_enqueue_script('bc-font-awesome-pro-pseudoelements', 'https://use.fontawesome.com/releases/latest/js/all.js');
	 
}

/*
 * Enqueue required javascript & CSS libraries required for the theme admin
 */
add_action('admin_enqueue_scripts', 'bc_include_admin_css_js');
function bc_include_admin_css_js($hook){
	wp_enqueue_style('bc-admin-css', get_template_directory_uri().'/css/blue-corona-custom-style.css',true);
	if ( $hook == 'customize.php') {
	wp_enqueue_script( 'bc-admin-js-theme-customizer',  get_template_directory_uri().'/js/customizer-preview.js',true );
	}
}

/* For multple checkbox selection
Reference Link :
http://justintadlock.com/archives/2015/05/26/multiple-checkbox-customizer-control
*/
add_action( 'customize_register', 'bc_load_customize_controls', 0 );
function bc_load_customize_controls() {
	require_once( trailingslashit( get_template_directory() ) . 'inc/theme-customizer/control-checkbox-multiple.php' );
}

/*Test Start / End*/
// include_once trailingslashit( dirname(__FILE__) ) . 'custom/inc/customizer.php';
require_once trailingslashit(get_template_directory())."custom/inc/custom-controls.php";



add_action( 'admin_enqueue_scripts', 'bc_wordpress_default_colorpicker');
if ( ! function_exists( 'bc_wordpress_default_colorpicker' ) ){
    function bc_wordpress_default_colorpicker( $hook ) {
        wp_enqueue_style( 'wp-color-picker');
        wp_enqueue_script( 'wp-color-picker');
    }
}

/*Create custom field (title) for pages, post, custom posts */
function bc_create_landing_page($post) {
	global $post;
    if(!empty($post)) {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if($pageTemplate == 'page-templates/bc-landingpage.php' ){
            add_meta_box(
		        'bc_landing_layout', // Metabox ID
		        'Landing Page Settings', // Title to display
		        'bc_landing_layout', // Function to call that contains the metabox content
		        'page', // $page
                'side', // $context
                'low'); // $priority
        }
    }
}
add_action( 'add_meta_boxes', 'bc_create_landing_page' );

function bc_landing_layout() {
global $post;
$nav_setting = get_post_meta( $post->ID, 'bc_navigation_setting_landing_page_'.$post->ID, true );
$announcement_setting = get_post_meta( $post->ID, 'bc_announcement_setting_landing_page_'.$post->ID, true );
$colorpicker_setting = get_post_meta( $post->ID, 'bc_colorpicker_landing_page_'.$post->ID, true );
$colorpicker_value_setting = get_post_meta( $post->ID, 'bc_colorpicker_value_landing_page_'.$post->ID, true );
?>

<table style="width:100%">
	<tr> 
		<th><label for="bc_navigation_setting_landing_page">Navigation Menu</label></th>
		<td align="left" valign="middle">
			<input name="bc_navigation_setting_landing_page" type="radio" id="bc_navigation_setting_landing_page" value="On" <?php echo (esc_attr($nav_setting)== 'On') ?  "checked" : "" ;  ?>/> On
			<input name="bc_navigation_setting_landing_page" type="radio" id="bc_navigation_setting_landing_page" value="Off" <?php echo (esc_attr($nav_setting)== 'Off') ?  "checked" : "" ;  ?>/> Off
		</td>
	</tr>
	<tr> 
		<th><label for="bc_announcement_setting_landing_page">Announcement Bar</label></th>
		<td align="left" valign="middle">
			<input name="bc_announcement_setting_landing_page" type="radio" id="bc_announcement_setting_landing_page" value="Yes" <?php echo (esc_attr($announcement_setting)== 'Yes') ?  "checked" : "" ;  ?>/> On
			<input name="bc_announcement_setting_landing_page" type="radio" id="bc_announcement_setting_landing_page" value="No" <?php echo (esc_attr($announcement_setting)== 'No') ?  "checked" : "" ;  ?>/> Off
		</td>
	</tr>
	<tr>
		<th><label for="bc_announcement_setting_landing_page">Overlay Color</label></th>
	    <script>
	    jQuery(document).ready(function($){
	        $('.color_field').each(function(){
	            $(this).wpColorPicker();
			});
	    });
	    </script>
		<td align="left" valign="middle">
		    <div class="pagebox">
				<input class="color_field" type="text" name="bc_colorpicker_landing_page" value="<?php esc_attr_e( $colorpicker_setting ); ?>" data-default-color="#000063"/>
		    </div>
		</td>
	</tr>
	<tr> 
		<th><label for="bc_announcement_setting_landing_page">Overlay Color Opacity(0-99)</label></th>
		<td align="left" valign="middle">
		    <div class="pagebox">
		       <input type="number" name="bc_colorpicker_value_landing_page" id="bc_colorpicker_value_landing_page" value="<?php echo esc_attr( $colorpicker_value_setting ); ?>" class="form-control" min='0' max='99'>
		    </div>
		</td>
	</tr>
</table>

<?php
wp_nonce_field( 'bc_landing_page_overlay_metabox_nonce', 'bc_landing_page_overlay_metabox_process' );
}
/**
 * Save the metabox
 * @param  Number $post_id The post ID
 * @param  Array  $post    The post data
 */
function bc_save_landing_overlay( $post_id, $post ) {
    if ( !isset( $_POST['bc_landing_page_overlay_metabox_process'] ) ) return;
    // Verify data came from edit/dashboard screen
    if ( !wp_verify_nonce( $_POST['bc_landing_page_overlay_metabox_process'], 'bc_landing_page_overlay_metabox_nonce' ) ) {
        return $post->ID;
    }
    // Verify user has permission to edit post
    if ( !current_user_can( 'edit_post', $post->ID )) {
        return $post->ID;
    }
    if ( !isset( $_POST['bc_navigation_setting_landing_page'] ) ) {
        return $post->ID;
    }

    if ( !isset( $_POST['bc_announcement_setting_landing_page'] ) ) {
        return $post->ID;
    }
    if ( !isset( $_POST['bc_colorpicker_landing_page'] ) ) {
        return $post->ID;
    }
    if ( !isset( $_POST['bc_colorpicker_value_landing_page'] ) ) {
        return $post->ID;
    }
    

    
    $sanitizednavigation = wp_filter_post_kses( $_POST['bc_navigation_setting_landing_page'] );
    $sanitizedannouncementbar = wp_filter_post_kses( $_POST['bc_announcement_setting_landing_page'] );
    $sanitizedcolorpicker = wp_filter_post_kses( $_POST['bc_colorpicker_landing_page'] );
    $sanitizedcolorpickervalue = wp_filter_post_kses( $_POST['bc_colorpicker_value_landing_page'] );

    update_post_meta( $post->ID, 'bc_navigation_setting_landing_page_'.$post->ID, $sanitizednavigation );
    update_post_meta( $post->ID, 'bc_announcement_setting_landing_page_'.$post->ID, $sanitizedannouncementbar );
    update_post_meta( $post->ID, 'bc_colorpicker_landing_page_'.$post->ID, $sanitizedcolorpicker );
    update_post_meta( $post->ID, 'bc_colorpicker_value_landing_page_'.$post->ID, $sanitizedcolorpickervalue );
}
add_action( 'save_post', 'bc_save_landing_overlay', 1, 2 );

add_filter( 'gform_submit_button', 'add_custom_css_class1', 10, 2 );

function add_custom_css_class1( $button, $form ) {
    if ($form['id'] != 3) return $button;
    $dom = new DOMDocument();
    $dom->loadHTML( '<?xml encoding="utf-8" ?>' . $button );
    $input = $dom->getElementsByTagName( 'input' )->item(0);
    $classes = $input->getAttribute( 'class' );
    $classes .= " mt-3";
    $input->setAttribute( 'class', $classes );
    
    return $dom->saveHtml( $input );
}