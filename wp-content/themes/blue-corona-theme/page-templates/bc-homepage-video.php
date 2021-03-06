<?php
/**
 * Template Name: HomePage Video Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();?>

  <main role="main">
  	
    <div class="container-fluid p-0 bc_hero_container ">
        <iframe width="100%" height="610" class="position-absolute" src="https://www.youtube.com/embed/Wjrrgrvq1ew?controls=0&autoplay=1&loop=1&rel=0&playlist=668nUCeBHyY"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <!-- <iframe src="https://player.vimeo.com/video/76979871" width="100%" height="540" class="position-absolute" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe> -->
        <div class="container px-4 pt-4">
            <div class="row text-center text-lg-left text-md-left">
                <div class="col-md-6 col-xs-12 col-lg-6 col-sm-12 m-auto">
                    <h2 class="bc_color_secondary text-capitalize">Have an 
                        <span class="bc_color_primary bc_font_alt_1 ">Emergency</span><em>?</em>
                    </h2>
                    <h2 class="bc_color_secondary text-capitalize">We're Here for 
                        <span class="bc_color_primary bc_font_alt_1 ">You</span> 24/7 <em>!</em>
                    </h2>
                    <button class="btn bc_color_secondary text-capitalize bc_color_primary_bg py-2 mt-2"> Schedule Service Today &nbsp;<i aria-hidden="true" class="fa fa-chevron-circle-right"></i></button>
                </div>
                <div class="col-md-6 col-xs-12 col-lg-6 col-sm-12 p-4">
                    <div class=" col-md-12 col-lg-9 col-sm-12 col-xs-12 offset-lg-2">
                        <div class="bc_color_info_bg d-flex py-3 px-4">
                            <img alt="icon" class="img-fluid align-self-center " src="<?php echo get_template_directory_uri();?>/img/24icon.png">
                            <h2 class="bc_color_secondary text-capitalize text-capitalize bc_text_30 bc_font_alt_1 text-center px-2 pt-1">
                                Emergency Service
                            </h2>
                        </div>
                        <div class="entry-content bc_hero_form_body">
                           <?php echo do_shortcode('[gravityform id=2 ajax=true]')?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
    <?php 
    if ( have_posts() ) : 
    	while ( have_posts() ) : the_post();
			the_content();
		endwhile;
	endif;
	?>
    <?php get_template_part( 'page-templates/common/bc-locations-section' ); ?>
	
    <!--  Include coupons file here -->
	<?php get_template_part( 'page-templates/common/coupons' ); ?>

    <!--  Include testimonial file here -->
	<?php get_template_part( 'page-templates/common/testimonials' ); ?>
    <!-- Include affiliations file here -->
    <?php get_template_part( 'page-templates/common/affiliations' ); ?>

</main>

<?php function serviceAreaJavascript() {?>
<script>
	jQuery(document).ready(function() {
		jQuery(".hide_div").hide();
	});
	jQuery(document).ready(function() {
		jQuery(".abc").click(function() {
			jQuery(".hide_div").toggle(500);
		});
	});
</script>

<?php }
add_action( 'wp_footer' , 'serviceAreaJavascript' );?>


<?php get_footer(); ?>
