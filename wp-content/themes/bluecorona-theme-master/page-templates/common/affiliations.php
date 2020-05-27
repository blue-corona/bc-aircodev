<?php
/**
 * Affiliations
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="container-fluid ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto text-center">
                    <h2 class="text-center mb-5 mt-5 bc_font_alt_1 text-capitalize">Affiliations</h2>
                    <div class="swiper-container bc_affiliation_swiper container mb-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class='text-center'><a href=""><img class="img-fluid bc_affliations_img" alt="bbblogo" src="<?php echo get_template_directory_uri();?>/img/bbb_logo.png"></a></div>
                            </div>
                            <div class="swiper-slide">
                                <div class='text-center'><a href=""><img class="img-fluid bc_affliations_img" alt="eslogo" src="<?php echo get_template_directory_uri();?>/img/angies_logo.png"></a></div>
                            </div>
                            <div class="swiper-slide">
                                <div class='text-center'><a href=""><img class="img-fluid bc_affliations_img" alt="brlogo" src="<?php echo get_template_directory_uri();?>/img/bryant_logo.png"></a></div>
                            </div>
                            <div class="swiper-slide">
                                <div class='text-center'><a href=""><img class="img-fluid bc_affliations_img" alt="allogo" src="<?php echo get_template_directory_uri();?>/img/energystar_logo.png"></a></div>
                            </div>
                            <div class="swiper-slide">
                                <div class='text-center'><a href=""><img class="img-fluid bc_affliations_img" alt="bbblogo" src="<?php echo get_template_directory_uri();?>/img/bbb_logo.png"></a></div>
                            </div>
                            <div class="swiper-slide">
                                <div class='text-center'><a href=""><img class="img-fluid bc_affliations_img" alt="eslogo" src="<?php echo get_template_directory_uri();?>/img/angies_logo.png"></a></div>
                            </div>
                            <div class="swiper-slide">
                                <div class='text-center'><a href=""><img class="img-fluid bc_affliations_img" alt="brlogo" src="<?php echo get_template_directory_uri();?>/img/bryant_logo.png"></a></div>
                            </div>
                            <div class="swiper-slide">
                                <div class='text-center'><a href=""><img class="img-fluid bc_affliations_img" alt="allogo" src="<?php echo get_template_directory_uri();?>/img/energystar_logo.png"></a></div>
                            </div>
                        </div>
                        <div class="af-swiper-button-next swiper-button-next d-none d-lg-block"><em class="fa fa-angle-right"></em></div>
                        <div class="af-swiper-button-prev swiper-button-prev d-none d-lg-block"><em class="fa fa-angle-left"></em></div>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php function swiperAffiliationJavascript() {?>
<script>
    var swiper = new Swiper('.bc_affiliation_swiper', {
        slidesPerView: 4,
        spaceBetween: 32,
        slidesPerGroup: 4,
        loop: true,
        loopFillGroupWithBlank: true,
        breakpoints: {
            // when window width is <= 320px
            320: {slidesPerView: 1},
            // when window width is <= 480px
            480: {slidesPerView: 2},
            // when window width is <= 640px
            640: {slidesPerView: 2},
            // when window width is <= 768px
            768: {slidesPerView: 3},
            1000: {slidesPerView: 4}
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: false,
        },
        navigation: {
            nextEl: '.af-swiper-button-next',
            prevEl: '.af-swiper-button-prev',
        },
    });
</script>
<?php }
add_action( 'wp_footer' , 'swiperAffiliationJavascript' );
?>
