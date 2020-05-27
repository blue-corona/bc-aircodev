<?php
/**
 * Plugin Name:       BC Schema
 * Plugin URI:        https://github.com/nikhil-twinspark/bc-schema
 * Description:       A simple plugin for creating custom post types for displaying schema.
 * Version:           1.0.0
 * Author:            Blue Corona
 * Author URI:        #
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bc-schema
 * Domain Path:       /languages
 */

 if ( ! defined( 'WPINC' ) ) {
     die;
 }

define( 'BC_SCHEMA_VERSION', '1.0.0' );
define( 'BCSCHEMADOMAIN', 'bc-schema' );
define( 'BCSCHEMAPATH', plugin_dir_path( __FILE__ ) );
define('BCPLUGINURL', plugins_url());

require_once( BCSCHEMAPATH . '/post-types/register.php' );
add_action( 'init', 'bc_schema_register_schema_type' );

require_once( BCSCHEMAPATH . '/custom-fields/register.php' );

function bc_schema_rewrite_flush() {
    bc_schema_register_schema_type();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'bc_schema_rewrite_flush' );

// plugin uninstallation
register_uninstall_hook( BCSCHEMAPATH, 'bc_schema_uninstall' );
function bc_schema_uninstall() {
    // Removes the directory not the data
}


/** ADMIN COLUMN - HEADERS*/
add_filter('manage_edit-bc_schemas_columns', 'add_new_schemas_columns');
function add_new_schemas_columns($columns) {
    return array(
                'cb' => $columns['cb'],
                'title' => $columns['title'],
                'name' => __('Type'),
                'updated' => __('Updated'),
                'date' => 'Status',
            ); 
}

/** ADMIN COLUMN - CONTENT*/
add_action('manage_bc_schemas_posts_custom_column', 'manage_schemas_columns', 10, 2);
function manage_schemas_columns($column_name, $id) {
    global $post;
    switch ($column_name) {
        case 'name':
        	$get_post = get_post_meta( $post->ID , 'schema_type' , true );
        	$strip_post_data = stripslashes($get_post);
			$json_data = json_decode($strip_post_data);
        	if(isset($json_data->type2->name) && !empty($json_data->type2->name)){
        		echo $json_data->type2->name;
        	}
            break;
        case 'updated':
            $updated_day = get_the_modified_time('m/d/Y');
            echo $updated_day;
            break;
        default:
            break;
    } // end switch
}

function bc_so_screen_layout_columns( $columns ) {
    $columns['post'] = 1;
    return $columns;
}
add_filter( 'screen_layout_columns', 'bc_so_screen_layout_columns' );
function bc_so_screen_layout_post() {
    return 1;
}
add_filter('get_user_option_screen_layout_bc_schemas', 'bc_so_screen_layout_post' );
