<?php
/*Define Excerpt Lenght*/
function custom_excerpt_length( $length ) {
    global $post;
    return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/*Hard crop Image for blog post page*/
add_theme_support( 'post-thumbnails' );
add_image_size( 'blogpost-thumbnail', 250, 170, true ); // Hard Crop Mode

/*Create custom field (title) for pages, post, custom posts */
function bc_create_title_overlay_metabox() {
    add_meta_box(
        'bc_title_overlay', // Metabox ID
        'Hero Overlay text', // Title to display
        'bc_title_overlay', // Function to call that contains the metabox content
        '', // Post type to display metabox on
        'normal' // Where to put it (normal = main colum, side = sidebar, etc.)
    );
}
add_action( 'add_meta_boxes', 'bc_create_title_overlay_metabox' );
function bc_title_overlay() {
global $post;
$title = get_post_meta( $post->ID, 'title_overlay', true );
?>

    <textarea class="form-control" rows="6" cols="85" name="bc_title_overlay_heading" id="title"><?= $title ?></textarea>
<?php
wp_nonce_field( 'bc_title_overlay_metabox_nonce', 'bc_title_overlay_metabox_process' );
}
/**
 * Save the metabox
 * @param  Number $post_id The post ID
 * @param  Array  $post    The post data
 */
function bc_save_title_overlay( $post_id, $post ) {
    if ( !isset( $_POST['bc_title_overlay_metabox_process'] ) ) return;
    // Verify data came from edit/dashboard screen
    if ( !wp_verify_nonce( $_POST['bc_title_overlay_metabox_process'], 'bc_title_overlay_metabox_nonce' ) ) {
        return $post->ID;
    }
    // Verify user has permission to edit post
    if ( !current_user_can( 'edit_post', $post->ID )) {
        return $post->ID;
    }
    if ( !isset( $_POST['bc_title_overlay_heading'] ) ) {
        return $post->ID;
    }
    $sanitizedtitle = wp_filter_post_kses( $_POST['bc_title_overlay_heading'] );
    update_post_meta( $post->ID, 'title_overlay', $sanitizedtitle );
}
add_action( 'save_post', 'bc_save_title_overlay', 1, 2 );

add_filter( 'gform_submit_button', 'add_custom_css_class', 10, 2 );

function add_custom_css_class( $button, $form ) {
    if ($form['id'] != 3) return $button;
    $dom = new DOMDocument();
    $dom->loadHTML( '<?xml encoding="utf-8" ?>' . $button );
    $input = $dom->getElementsByTagName( 'input' )->item(0);
    $classes = $input->getAttribute( 'class' );
    $classes .= " mt-3";
    $input->setAttribute( 'class', $classes );
    
    return $dom->saveHtml( $input );
}

// Button Style 
add_action( 'wp_head', 'button_style');
function button_style($wp_customize){
?>
<style type="text/css">
input[type=button], input[type=submit], input[type=reset],button {
background-color: <?php echo bc_get_theme_mod('bc_theme_options', 'bc_button_color',false, '#00395e');?> ;color: <?php echo bc_get_theme_mod('bc_theme_options', 'bc_button_text_color',false, '#00395e');?>;
}input:hover[type=button], input:hover[type=submit], input:hover[type=reset],button:hover{
background-color: <?php echo bc_get_theme_mod('bc_theme_options', 'bc_button_hover_color',false, '#00395e');?> ;color: <?php echo bc_get_theme_mod('bc_theme_options', 'bc_button_text_hover_color',false, '#00395e');?>;}
</style>
<?php 
}

// Function to set the theme customizer mod values
function bc_get_theme_mod($setting, $key1 = false, $key2 = false, $default = false){
    $theme_mod = get_theme_mod($setting);
    if($key1 && !$key2) {
        if (isset($theme_mod[$key1]) && !empty($theme_mod[$key1])){
            return $theme_mod[$key1];
        } else {
            return $default;
        }
    } else if ($key2) {
        if (isset($theme_mod[$key1][$key2]) && !empty($theme_mod[$key1][$key2])){
            return $theme_mod[$key1][$key2];
        }else{
            return $default;
        }
    }
    return get_theme_mod($setting, $default);
}

