<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php if (has_post_thumbnail() ): 
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'large' );?>
	<img src="<?php echo $image[0]; ?>" alt="post img" class=" img-responsive img-fluid">
<?php endif; ?>
<?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
<h1 class="text-uppercase font-weight-bold bc_primary_heading_blue mt-4"><?php the_title()?></h1>
<p class="m-0"><strong><?php the_time( 'm/d/y' ); ?></strong></p>
<?php the_content(); ?>