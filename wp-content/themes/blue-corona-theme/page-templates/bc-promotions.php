<?php
/**
 * Template Name: Promotions Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
global $post;
?>
<main>
    <div class="container-fluid p-0 bc_hero_container bc_home_section_bg py-5" <?php if (has_post_thumbnail() ) { $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id() ), 'single-post-thumbnail' ); ?> style="background-image: url('<?php echo $image[0]; ?>');" <?php }?>>
        <div class="container p-4">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="bc_subpage_hero_overlay d-block d-md-flex text-center">
                        <?php $title = get_post_meta( $post->ID, 'title_overlay', true );
                        if(isset($title) && !empty($title)){
                            echo $title;
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

        <div class="container-fluid">
            <div class="container">
                <div class="row">
                <!-- The Content Starts -->
		                <div class="col-lg-8 col-md-12 col-xs-12 mt-2 px-5">
		  					<div class="row text-center">
                <div class="col-md-4 col-lg-4 p-2 text-center">
                    <a href="<?php echo get_site_url()?>/single-promotion/" target="_blank">
                        <div class="bc_color_secondary bc_color_primary_bg p-3 mb-3">
                            <div class="py-4 px-3 pt-0 border-white bc_coupon_container">
                                <span class="pb-3  bc_font_alt_1 bc_text_36 d-block">Coupon 1</span>
                                <span class="bc_text_30 d-block my-2">$50 OFF</span>
                                <span class="mt-3 bc_text_16">expires 00/00/00</span>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-4 col-lg-4 p-2 text-center">
                    <a href="<?php echo get_site_url()?>/single-promotion/" target="_blank">
                        <div class="bc_color_secondary bc_color_primary_bg p-3 mb-3">
                            <div class="py-4 px-3 pt-0 border-white bc_coupon_container">
                                <span class="pb-3  bc_font_alt_1 bc_text_36 d-block">Coupon 2</span>
                                <span class="bc_text_30 d-block my-2">$50 OFF</span>
                                <span class="mt-3 bc_text_16">expires 00/00/00</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-4 p-2 text-center">
                    <a href="<?php echo get_site_url()?>/single-promotion/" target="_blank">
                        <div class="bc_color_secondary bc_color_primary_bg p-3 mb-3">
                            <div class="py-4 px-3 pt-0 border-white bc_coupon_container">
                                <span class="pb-3  bc_font_alt_1 bc_text_36 d-block">Coupon 3</span>
                                <span class="bc_text_30 d-block my-2">$50 OFF</span>
                                <span class="mt-3 bc_text_16">expires 00/00/00</span>
                            </div>
                        </div>
                    </a>
                </div>

                 <div class="col-md-4 col-lg-4 p-2 text-center">
                    <a href="<?php echo get_site_url()?>/single-promotion/" target="_blank">
                        <div class="bc_color_secondary bc_color_primary_bg p-3 mb-3">
                            <div class="py-4 px-3 pt-0 border-white bc_coupon_container">
                                <span class="pb-3  bc_font_alt_1 bc_text_36 d-block">Coupon 4</span>
                                <span class="bc_text_30 d-block my-2">$50 OFF</span>
                                <span class="mt-3 bc_text_16">expires 00/00/00</span>
                            </div>
                        </div>
                    </a>
                </div>
                 <div class="col-md-4 col-lg-4 p-2 text-center">
                    <a href="<?php echo get_site_url()?>/single-promotion/" target="_blank">
                        <div class="bc_color_secondary bc_color_primary_bg p-3 mb-3">
                            <div class="py-4 px-3 pt-0 border-white bc_coupon_container">
                                <span class="pb-3  bc_font_alt_1 bc_text_36 d-block">Coupon 5</span>
                                <span class="bc_text_30 d-block my-2">$50 OFF</span>
                                <span class="mt-3 bc_text_16">expires 00/00/00</span>
                            </div>
                        </div>
                    </a>
                </div>
                 <div class="col-md-4 col-lg-4 p-2 text-center">
                    <a href="<?php echo get_site_url()?>/single-promotion/" target="_blank">
                        <div class="bc_color_secondary bc_color_primary_bg p-3 mb-3">
                            <div class="py-4 px-3 pt-0 border-white bc_coupon_container">
                                <span class="pb-3  bc_font_alt_1 bc_text_36 d-block">Coupon 6</span>
                                <span class="bc_text_30 d-block my-2">$50 OFF</span>
                                <span class="mt-3 bc_text_16">expires 00/00/00</span>
                            </div>
                        </div>
                    </a>
                </div>
                 <div class="col-md-4 col-lg-4 p-2 text-center">
                    <a href="<?php echo get_site_url()?>/single-promotion/" target="_blank">
                        <div class="bc_color_secondary bc_color_primary_bg p-3 mb-3">
                            <div class="py-4 px-3 pt-0 border-white bc_coupon_container">
                                <span class="pb-3  bc_font_alt_1 bc_text_36 d-block">Coupon 7</span>
                                <span class="bc_text_30 d-block my-2">$50 OFF</span>
                                <span class="mt-3 bc_text_16">expires 00/00/00</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
		    
		  				</div>
				
                <!-- The Content ends --> 
                <!-- right sidebar starts -->
                <?php get_template_part( 'sidebar-templates/sidebar', 'subpagerightsidebar' ); ?>
                <!-- right sidebar ends -->
                </div>
            </div>
        </div>
        <!--  Include Heating Services Features file here -->
        <?php get_template_part( 'page-templates/common/bc-heating-services-features' ); ?>

        <?php get_template_part( 'page-templates/common/bc-dont-see-service' ); ?>
        
        
    <!--  Include blogs file here -->
    <?php get_template_part( 'page-templates/common/blogs' ); ?>

    <!--  Include testimonial file here -->
    <?php get_template_part( 'page-templates/common/testimonials' ); ?>
</main>
<?php get_footer();?>