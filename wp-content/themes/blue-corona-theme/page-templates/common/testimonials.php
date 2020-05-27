<?php
/**
 * Testimonials
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="container-fluid bc_testimonials_container bc_home_section_bg py-5  text-center" style="background-image:url('<?php echo get_template_directory_uri();?>/img/testimonial_bg.png'); background-position:center;">
    <div class="text-center"><h2 class="bc_font_alt_1 pb-4 text-capitalize">Testimonials</h2></div>
    <div class="container">
        <div class="bc_testimonial_swiper swiper-container">
            <div class="swiper-wrapper text-center">
                <div class="swiper-slide"> 
                    <div class="swiper-slide-container">
                        <div class="swiper-slide-content">
                            <div class="d-none d-md-block">
                                <img  src="<?php echo get_template_directory_uri();?>/img/testimonial.png">
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </div>
                            <div class="mt-2 d-none d-md-block">
                                <span class="bc_alternate_font_blue m-0 bc_text_18">- Ben L.</span>
                                <p class="m-0">CEO CORONA</p>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"> 
                    <div class="swiper-slide-container">
                        <div class="swiper-slide-content">
                            <div class="d-none d-md-block" >
                                <img  src="<?php echo get_template_directory_uri();?>/img/testimonial.png">
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </div>
                            <div class="mt-2 d-none d-md-block">
                                <span class="bc_alternate_font_blue m-0 bc_text_18">- Ben L.</span>
                                <p class="m-0">CEO CORONA</p>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"> 
                    <div class="swiper-slide-container">
                        <div class="swiper-slide-content">
                            <div class="d-none d-md-block" >
                                <img  src="<?php echo get_template_directory_uri();?>/img/testimonial.png">
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </div>
                            <div class="mt-2 d-none d-md-block">
                                <span class="bc_alternate_font_blue m-0 bc_text_18">- Ben L.</span>
                                <p class="m-0">CEO CORONA</p>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <!-- Add Arrows -->
            <div class="bc_testimonial_swiper_next swiper-button-next d-none d-lg-block"><em class="fa fa-chevron-circle-right"></em></div>
            <div class="bc_testimonial_swiper_prev swiper-button-prev d-none d-lg-block"><em class="fa fa-chevron-circle-left"></em></div>
        </div>
    </div>
    <br>
    <button class="btn bc_color_primary_bg mt-2 mb-2 px-4 text-white " type="button">Read Testimonials</button>
    <br>
</div>

<?php function swiperJavascript() {?>
<script>
var testimonialSwiper = new Swiper('.bc_testimonial_swiper', {
    pagination: false,
    navigation: {
        nextEl: '.bc_testimonial_swiper_next',
        prevEl: '.bc_testimonial_swiper_prev',
    },
});
</script>
<?php }
add_action( 'wp_footer' , 'swiperJavascript' );?>
