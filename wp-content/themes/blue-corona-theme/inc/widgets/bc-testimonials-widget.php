<?php 

// BC Testimonials Widget
class BC_Testimonials_Widget extends WP_Widget {
	public function __construct() {
		$id = 'BC_Testimonials_widget';
		$title = esc_html__('BC Testimonials', 'bc-testimonial-custom-widget');
		$options = array(
			'classname' => 'bc-testimonial-markup-widget',
			'description' => esc_html__('Add Custom HTML in inputbox', 'bc-testimonial-custom-widget')
		);
		parent::__construct( $id, $title, $options );
	}

	function addSwiperInitTestimonialJsToFooter($instance){
			echo "
			<script>
			var sidebarTestimonialSwiper = new Swiper('#".$instance."', {
			    pagination: false,
			    navigation: {
			        nextEl: '.bc_testimonial_swiper_next',
			        prevEl: '.bc_testimonial_swiper_prev',
			    },
			});
			</script>
			";
	}

	public function widget( $args, $instance ) {
		//Add JS for widget to footer
		$widgetInstance = $this->id;
		add_action('wp_footer', function() use ( $widgetInstance ) { 
        $this->addSwiperInitTestimonialJsToFooter( $widgetInstance ); });
	?>
	<div class="mt-5">
		<?php 
		if ( isset( $instance['title'] ) && !empty($instance['title']) ) {
			echo $args['before_title'] . $instance['title'] . $args['after_title']; 
		}else{
			echo '<h2 class="text-center m-0 bc_alternate_font_blue">Testimonials</h2>';
		}
		?>
		<!-- before pase -->
		<div id="<?php echo $this->id ?>" class="bc_testimonial_photos_swiper swiper-container text-center my-4">
		<div class="swiper-wrapper text-center">
			<div class="swiper-slide">
				<div class="row">
				<div class="col-sm-12"><img class=" w-25 rounded-circle" src="<?php echo get_template_directory_uri();?>/img/testimonial03.png" alt="testimonial02" /></div>
					<div class="col-sm-12">
					<p class="bc_primary_content_blue mb-0">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's"</p>
					<p class="bc_alternate_font_blue mb-0">- Ben L.</p>
					<p class="mb-0">CEO BLUE CORONA</p>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="row">
				<div class="col-sm-12"><img class=" w-25 rounded-circle" src="<?php echo get_template_directory_uri();?>/img/testimonial03.png" alt="testimonial02" /></div>
					<div class="col-sm-12">
					<p class="bc_primary_content_blue mb-0">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's"</p>
					<p class="bc_alternate_font_blue mb-0">- Ben L.</p>
					<p class="mb-0">CEO BLUE CORONA</p>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="row">
				<div class="col-sm-12"><img class=" w-25 rounded-circle" src="<?php echo get_template_directory_uri();?>/img/testimonial03.png" alt="testimonial02" /></div>
					<div class="col-sm-12">
					<p class="bc_primary_content_blue mb-0">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's"</p>
					<p class="bc_alternate_font_blue mb-0">- Ben L.</p>
					<p class="mb-0">CEO BLUE CORONA</p>
					</div>
				</div>
			</div>
		</div>
		<ul class=" list-unstyled">
		 	<li class="list-inline-item bc_testimonial_swiper_prev bc_swiper-button-prev"> <em class="fa fa-chevron-circle-left"></em> </li>
		 	<li class="list-inline-item bc_testimonial_swiper_next bc_swiper-button-next"> <em class="fa fa-chevron-circle-right"></em> </li>
		</ul>
		</div>
		<div class="text-center"><button class="btn bc_default_primary text-white " type="button">Read Testimonials</button></div>
	</div>
<?php echo $args['after_widget'];
}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		if ( isset( $new_instance['title'] ) && ! empty( $new_instance['title'] ) ) {
			$instance['title'] = $new_instance['title'];
		}
		return $instance;
	}
	public function form( $instance ) {
		$id = $this->get_field_id( 'title' );
		$for = $this->get_field_id( 'title' );
		$name = $this->get_field_name( 'title' );
		$label = __( 'Title', 'bc-testimonial-custom-widget' );
		$title = '<h2 class="text-center m-0 bc_alternate_font_blue">'.__( 'Testimonials', 'bc-testimonial-custom-widget' ).'</h2>';
		if ( isset( $instance['title'] ) && ! empty( $instance['title'] ) ) {
			$title = $instance['title'];
		}
		?>
		<p>
			<label for="<?php echo esc_attr( $for ); ?>"><?php echo esc_html( $label ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $id ); ?>" name="<?php echo esc_attr( $name ); ?>"><?php echo esc_textarea( $title ); ?></textarea>
		</p>
<?php }
}
// register widget
function bc_testimonials_register_widgets() {
	register_widget( 'BC_Testimonials_Widget' );
}
add_action( 'widgets_init', 'bc_testimonials_register_widgets' );
