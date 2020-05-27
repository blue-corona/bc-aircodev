<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
// $site_info_navigation = get_option('bc_theme_options');
// $site_info_navigation = get_theme_mod('bc_theme_options');
?>
<!-- Footer -->
   <footer class="page-footer font-small blue">

        <div class="container-fluid bc_color_info_bg">
        <!-- Include servicearea file here -->
        <?php if ( is_front_page() ) {?>
            <?php get_template_part( 'page-templates/common/servicearea' ); ?>
        <?php }else{?>
            <div class="container py-4"></div>
        <?php } ?>
        </div>

        <!-- Footer Links -->
        <div class="container-fluid bc_color_primary_bg text-md-left pl-0 pt-5">
            <img alt="footer man" height="323px" class="position-absolute d-none d-lg-block " src="<?php echo get_template_directory_uri();?>/img/footer_eng.png">
            <div class="container py-4">
                <div class="row">
                    <div class="col-lg-10 offset-0 offset-lg-2 col-md-12">
                        <div class="row">
                            <div class="col-md-4 px-5 px-md-0 bc_color_secondary">
                                <img alt="footer logo" src="<?php echo get_template_directory_uri();?>/img/footerlogo.png">
                                <hr style="background-color:#5692b9;">
                                <h4 class="text-uppercase bc_color_secondary"><em aria-hidden="true" class="fa fa-mobile"></em> <?php echo bc_get_theme_mod('bc_theme_options', 'bc_phone',false, '(555) 555-5555');?></h4>
                            <div class="row">
                                <div class="col-lg-1 pr-0"><h4 class="bc_color_secondary"><em aria-hidden="true" class="far fa-map-marker-alt"></em></h4></div>
                                <div class="col-lg-9">
                                    <p class="bc_color_secondary" style="font-size: 14px; line-height: 20px">
                                    <?php echo bc_get_theme_mod('bc_theme_options', 'bc_address',false, '1401 Central Avenue, Suite 11 Charlotte, NC 28205');?>
                                     </p>
                                </div>
                                <div class="ml-3">License - <?php echo bc_get_theme_mod('bc_theme_options', 'bc_license',false, 'CLT140111');?></div>
                            </div>
                                <div class="bc_social_media" style="color: #5692b9;">
                                    <a class="fa fa-facebook-square mr-1 bc_social_media_fb mr-2 fa-lg" title="facebook" href="#"></a>
                                    <a class="fa fa-instagram mr-1 bc_social_media_insta mr-2 fa-lg" title="instagram" href="#"></a>
                                    <a class="fa fa-twitter-square mr-1 bc_social_media_twitter fa-lg" title="twitter" href="#"></a>
                                </div>
                            </div>
                            <div class="col-md-4 px-5 pt-2">
                                <h3 class="bc_alternate_font_white bc_text_48 text-capitalize">Company</h3>
                                <ul class="list-unstyled ">
                                    <li>
                                        <a class="bc_color_secondary text-decoration-none bc_color_quaternary_hover" href="#!">About</a>
                                    </li>
                                    <li>
                                        <a class="bc_color_secondary text-decoration-none bc_color_quaternary_hover" href="#!">Promotions</a>
                                    </li>
                                    <li>
                                        <a class="bc_color_secondary text-decoration-none bc_color_quaternary_hover" href="#!">Blog</a>
                                    </li>
                                    <li>
                                        <a class="bc_color_secondary text-decoration-none bc_color_quaternary_hover" href="#!">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 px-5 pt-2">
                                <h3 class="bc_alternate_font_white bc_text_48 text-capitalize">Services</h3>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="bc_color_secondary text-decoration-none bc_color_quaternary_hover" href="#!">Heating</a>
                                    </li>
                                    <li>
                                        <a class="bc_color_secondary text-decoration-none bc_color_quaternary_hover" href="#!">Cooling</a>
                                    </li>
                                    <li>
                                        <a class="bc_color_secondary text-decoration-none bc_color_quaternary_hover" href="#!">Maintenance</a>
                                    </li>
                                    <li>
                                        <a class="bc_color_secondary text-decoration-none bc_color_quaternary_hover" href="#!">Air Quality</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <div class="bc_footer_copyright_bar text-center text-lg-left py-2 container bc_font_alt_3">
           © 2019 Blue Corona Heating & Cooling &nbsp;|&nbsp; Web Design by
           <a class="bc_footer_copyright_links no_hover_underline  d-block d-lg-inline d-md-inline" href="#"><img src="<?php echo get_template_directory_uri();?>/img/bc_logo.png">&nbsp;Blue Corona</a>
          <span class="d-none d-lg-inline d-md-inline">&nbsp; | &nbsp;</span><a class="bc_footer_copyright_links no_hover_underline d-block d-lg-inline d-md-inline" href="#" data-toggle="modal" data-target="#disclaimer">Disclaimer</a>
          <span class="d-none d-lg-inline d-md-inline">&nbsp; | &nbsp;</span><a class=" bc_footer_copyright_links no_hover_underline d-block d-lg-inline d-md-inline" href="#">Privacy Policy</a>
       </div>
    </footer>
    <!-- Footer -->
<?php wp_footer(); ?>
</body>
</html>

<div class="modal fade" id="disclaimer" tabindex="-1" role="dialog" aria-labelledby="disclaimerLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content rounded-0">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fal fa-times fa-2x"></i></span>
        </button>
      </div>
      <div class="modal-body p-5">
        <h1 id="disclaimerLabel">Disclaimer</h1>
            <p>The information on this website is for informational purposes only; it is deemed accurate but not guaranteed. It does not constitute professional advice. All information is subject to change at any time without notice. <a href="<?php echo get_site_url()?>/contact-us" target="_blank">Contact us</a> for complete details.</p>
      </div>
    </div>
  </div>
</div>
