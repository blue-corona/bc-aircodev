// 

jQuery(document).ready(function($) {
    "use strict";

    // *************  Multi_Input_Custom_control  *********************

    function customize_multi_write($element){
        var customize_multi_val = '';
        $element.find('.customize_multi_fields .customize_multi_single_field').each(function(){
            customize_multi_val += $(this).val()+'|';
        });
        $element.find('.customize_multi_value_field').val(customize_multi_val.slice(0, -1)).change();
    }

    function customize_multi_add_field(e){
        e.preventDefault();
        var $control = $(this).parents('.customize_multi_input');
        $control.find('.customize_multi_fields').append('<div class="set"><input type="text" value="" class="customize_multi_single_field" /><a href="#" class="customize_multi_remove_field">X</a></div>');
    }

    function customize_multi_single_field() {
        var $control = $(this).parents('.customize_multi_input');
        customize_multi_write($control);
    }

    function customize_multi_remove_field(e){
        e.preventDefault();
        var $this = $(this);
        var $control = $this.parents('.customize_multi_input');
        $this.parent().remove();
        customize_multi_write($control);
    }

    $(document).on('click', '.customize_multi_add_field', customize_multi_add_field)
               .on('keyup', '.customize_multi_single_field', customize_multi_single_field)
               .on('click', '.customize_multi_remove_field', customize_multi_remove_field);

    $('.customize_multi_input').each(function(){
        var $this = $(this);
        var multi_saved_value = $this.find('.customize_multi_value_field').val();
        if(multi_saved_value.length>0){
            var multi_saved_values = multi_saved_value.split("|");
            $this.find('.customize_multi_fields').empty();
            $.each(multi_saved_values, function( index, value ) {
                $this.find('.customize_multi_fields').append('<div class="set"><input type="text" value="'+value+'" class="customize_multi_single_field" /><a href="#" class="customize_multi_remove_field">X</a></div>');
            });
        }
    });

    // *************  Multi_Input_Custom_control END *********************

});

jQuery( document ).ready(function($) {
	
	jQuery( '.customize-control-checkbox-multiple input[type="checkbox"]' ).live('change',function() {
		checkbox_values = jQuery( this )
							.parents( '.customize-control' )
							.find( 'input[type="checkbox"]:checked' )
							.map(function() { return this.value;} )
							.get()
							.join( ',' );
						jQuery( this )
							.parents( '.customize-control' )
							.find( 'input[type="hidden"]' )
							.val( checkbox_values )
							.trigger( 'change' );
	});

	// Append the search icon list item to the main nav
	wp.customize.bind( 'change', function ( setting ) {
		if ( 0 === setting.id.indexOf( 'bc_theme_home_options[bc_hero_type]' ) ) {
			console.log( setting.get());
			var hero_type = setting.get();
			// image_slider,backgound_image,video
			if( hero_type == 'backgound_image'){
				// console.log('in background image section');
				// Show video fields 
				toggle_hero_video_options(false);
				// Hide Image Slider
				toggle_hero_image_slider_options(false);
				// Hide background image
				toggle_hero_background_image_options(true);
			}else if( hero_type == 'image_slider'){
				// console.log('in image slider section');
				// Show video fields 
				toggle_hero_video_options(false);	
				// Hide background image
				toggle_hero_background_image_options(false);
				// Hide Image Slider
				toggle_hero_image_slider_options(true);
			}else if( hero_type == 'video'){
				// console.log('in video section');
				// Hide background image
				toggle_hero_background_image_options(false);
				// Hide Image Slider
				toggle_hero_image_slider_options(false);
				// Show video fields 
				toggle_hero_video_options(true);	
			}
		}
		// For Background Image Section
		if ( 0 === setting.id.indexOf( 'bc_theme_home_options[background_image][bc_background_overlay_type]' ) ) {
			console.log( setting.get());
			var image_overlay_type = setting.get();
			if( image_overlay_type == 'gradient'){
				wp.customize.control('bc_theme_home_options[background_image][bc_background_overlay_solid_color]').toggle(false);
				wp.customize.control('bc_theme_home_options[background_image][bc_background_gradient_start]').toggle(true);
				wp.customize.control('bc_theme_home_options[background_image][bc_background_gradient_end]').toggle(true);
				wp.customize.control('bc_theme_home_options[background_image][bc_background_gradient_rotation]').toggle(true);
			}else if(image_overlay_type == 'solid'){
				wp.customize.control('bc_theme_home_options[background_image][bc_background_gradient_start]').toggle(false);
				wp.customize.control('bc_theme_home_options[background_image][bc_background_gradient_end]').toggle(false);
				wp.customize.control('bc_theme_home_options[background_image][bc_background_gradient_rotation]').toggle(false);
				wp.customize.control('bc_theme_home_options[background_image][bc_background_overlay_solid_color]').toggle(true);
			}
		}

		// For Image Slider Section One
		if ( 0 === setting.id.indexOf( 'bc_theme_home_options[image_slider][bc_overlay_type_one]' ) ) {
			console.log( setting.get());
			var image_overlay_type = setting.get();
			if( image_overlay_type == 'gradient'){
				wp.customize.control('bc_theme_home_options[image_slider][bc_overlay_solid_color_one]').toggle(false);
				wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_start_one]').toggle(true);
				wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_end_one]').toggle(true);
				wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_rotation_one]').toggle(true);
			}else if(image_overlay_type == 'solid'){
				wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_start_one]').toggle(false);
				wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_end_one]').toggle(false);
				wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_rotation_one]').toggle(false);
				wp.customize.control('bc_theme_home_options[image_slider][bc_overlay_solid_color_one]').toggle(true);
			}
		}

		// For Image Slider Section Two
		if ( 0 === setting.id.indexOf( 'bc_theme_home_options[image_slider][bc_overlay_type_two]' ) ) {
			console.log( setting.get());
			var image_overlay_type = setting.get();
			if( image_overlay_type == 'gradient'){
				wp.customize.control('bc_theme_home_options[image_slider][bc_overlay_solid_color_two]').toggle(false);
				wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_start_two]').toggle(true);
				wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_end_two]').toggle(true);
				wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_rotation_two]').toggle(true);
			}else if(image_overlay_type == 'solid'){
				wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_start_two]').toggle(false);
				wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_end_two]').toggle(false);
				wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_rotation_two]').toggle(false);
				wp.customize.control('bc_theme_home_options[image_slider][bc_overlay_solid_color_two]').toggle(true);
			}
		}

		// For Image Slider Section Three
		if ( 0 === setting.id.indexOf( 'bc_theme_home_options[image_slider][bc_overlay_type_three]' ) ) {
			console.log( setting.get());
			var image_overlay_type = setting.get();
			if( image_overlay_type == 'gradient'){
				wp.customize.control('bc_theme_home_options[image_slider][bc_overlay_solid_color_three]').toggle(false);
				wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_start_three]').toggle(true);
				wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_end_three]').toggle(true);
				wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_rotation_three]').toggle(true);
			}else if(image_overlay_type == 'solid'){
				wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_start_three]').toggle(false);
				wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_end_three]').toggle(false);
				wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_rotation_three]').toggle(false);
				wp.customize.control('bc_theme_home_options[image_slider][bc_overlay_solid_color_three]').toggle(true);
			}
		}

		// For Video Section
		if ( 0 === setting.id.indexOf( 'bc_theme_home_options[background_video][bc_video_overlay_type]' ) ) {
			console.log( setting.get());
			var image_overlay_type = setting.get();
			if( image_overlay_type == 'gradient'){
				wp.customize.control('bc_theme_home_options[background_video][bc_video_overlay_color]').toggle(false);
				wp.customize.control('bc_theme_home_options[background_video][bc_video_gradient_start]').toggle(true);
				wp.customize.control('bc_theme_home_options[background_video][bc_video_gradient_end]').toggle(true);
				wp.customize.control('bc_theme_home_options[background_video][bc_video_gradient_rotation]').toggle(true);
			}else if(image_overlay_type == 'solid'){
				wp.customize.control('bc_theme_home_options[background_video][bc_video_gradient_start]').toggle(false);
				wp.customize.control('bc_theme_home_options[background_video][bc_video_gradient_end]').toggle(false);
				wp.customize.control('bc_theme_home_options[background_video][bc_video_gradient_rotation]').toggle(false);
				wp.customize.control('bc_theme_home_options[background_video][bc_video_overlay_color]').toggle(true);
			}
		}
	});

	//validation for background gradient rotation
	wp.customize( 'bc_theme_home_options[background_image][bc_background_gradient_rotation]', function ( setting ) {
    setting.validate = function ( value ) {
        var code, notification;
 		code = 'required';
 		if (value > 360) {
            notification = new wp.customize.Notification( code, {message: 'Not more than 360'} );
            setting.notifications.add( code, notification );

 		}else if ( !Number( value ) ) {
            notification = new wp.customize.Notification( code, {message: 'only integer values'} );
            setting.notifications.add( code, notification );
        }else {
            setting.notifications.remove( code );
 		}
        return value;
    };
	} );
	//validation for image gradient rotation one
	wp.customize( 'bc_theme_home_options[image_slider][bc_gradient_rotation_one]', function ( setting ) {
    setting.validate = function ( value ) {
        var code, notification;
 		code = 'required';
 		if (value > 360) {
            notification = new wp.customize.Notification( code, {message: 'Not more than 360'} );
            setting.notifications.add( code, notification );

 		}else if ( !Number( value ) ) {
            notification = new wp.customize.Notification( code, {message: 'only integer values'} );
            setting.notifications.add( code, notification );
        }else {
            setting.notifications.remove( code );
 		}
        return value;
    };
	} );

	//validation for image gradient rotation two
	wp.customize( 'bc_theme_home_options[image_slider][bc_gradient_rotation_two]', function ( setting ) {
    setting.validate = function ( value ) {
        var code, notification;
 		code = 'required';
 		if (value > 360) {
            notification = new wp.customize.Notification( code, {message: 'Not more than 360'} );
            setting.notifications.add( code, notification );

 		}else if ( !Number( value ) ) {
            notification = new wp.customize.Notification( code, {message: 'only integer values'} );
            setting.notifications.add( code, notification );
        }else {
            setting.notifications.remove( code );
 		}
        return value;
    };
	} );

	//validation for image gradient rotation two
	wp.customize( 'bc_theme_home_options[image_slider][bc_gradient_rotation_three]', function ( setting ) {
    setting.validate = function ( value ) {
        var code, notification;
 		code = 'required';
 		if (value > 360) {
            notification = new wp.customize.Notification( code, {message: 'Not more than 360'} );
            setting.notifications.add( code, notification );

 		}else if ( !Number( value ) ) {
            notification = new wp.customize.Notification( code, {message: 'only integer values'} );
            setting.notifications.add( code, notification );
        }else {
            setting.notifications.remove( code );
 		}
        return value;
    };
	} );
	//validation for video opacity
	wp.customize( 'bc_theme_home_options[background_video][bc_video_gradient_rotation]', function ( setting ) {
    setting.validate = function ( value ) {
        var code, notification;
 		code = 'required';
 		if(value > 360 ) {
            notification = new wp.customize.Notification( code, {message: 'Not more than 360'} );
            setting.notifications.add( code, notification );
 		}else if ( !Number( value ) ) {
            notification = new wp.customize.Notification( code, {message: 'only integer values'} );
            setting.notifications.add( code, notification );
        }else {
            setting.notifications.remove( code );
 		}
        return value;
    };
	});

	//validation for image opacity
	wp.customize( 'bc_theme_home_options[background_image][bc_background_image_opacity]', function ( setting ) {
    setting.validate = function ( value ) {
        var code, notification;
 		code = 'required';
 		if(value > 100 ) {
            notification = new wp.customize.Notification( code, {message: 'Not more than 100'} );
            setting.notifications.add( code, notification );
 		}else if ( !Number( value ) ) {
            notification = new wp.customize.Notification( code, {message: 'only integer values'} );
            setting.notifications.add( code, notification );
        }else {
            setting.notifications.remove( code );		
 		}
        return value;
    };
	});

	//validation for image opacity one
	wp.customize( 'bc_theme_home_options[image_slider][bc_opacity_one]', function ( setting ) {
    setting.validate = function ( value ) {
        var code, notification;
 		code = 'required';
 		if(value > 100 ) {
            notification = new wp.customize.Notification( code, {message: 'Not more than 100'} );
            setting.notifications.add( code, notification );
 		}else if ( !Number( value ) ) {
            notification = new wp.customize.Notification( code, {message: 'only integer values'} );
            setting.notifications.add( code, notification );
        }else {
            setting.notifications.remove( code );	
 		}
        return value;
    };
	});
	//validation for image opacity two
	wp.customize( 'bc_theme_home_options[image_slider][bc_opacity_two]', function ( setting ) {
    setting.validate = function ( value ) {
        var code, notification;
 		code = 'required';
 		if(value > 100 ) {
            notification = new wp.customize.Notification( code, {message: 'Not more than 100'} );
            setting.notifications.add( code, notification );
 		}else if ( !Number( value ) ) {
            notification = new wp.customize.Notification( code, {message: 'only integer values'} );
            setting.notifications.add( code, notification );
        }else {
            setting.notifications.remove( code );	
 		}
        return value;
    };
	});
	//validation for image opacity Three
	wp.customize( 'bc_theme_home_options[image_slider][bc_opacity_three]', function ( setting ) {
    setting.validate = function ( value ) {
        var code, notification;
 		code = 'required';
 		if(value > 100 ) {
            notification = new wp.customize.Notification( code, {message: 'Not more than 100'} );
            setting.notifications.add( code, notification );
 		}else if ( !Number( value ) ) {
            notification = new wp.customize.Notification( code, {message: 'only integer values'} );
            setting.notifications.add( code, notification );
        }else {
            setting.notifications.remove( code );	
 		}
        return value;
    };
	});

	//validation for image opacity
	wp.customize( 'bc_theme_home_options[image_slider][bc_slider_rotation_time_one]', function ( setting ) {
    setting.validate = function ( value ) {
        var code, notification;
 		code = 'required';
 		if(value > 7 ) {
            notification = new wp.customize.Notification( code, {message: 'Not more than 7'} );
            setting.notifications.add( code, notification );
 		}else if ( !Number( value ) ) {
            notification = new wp.customize.Notification( code, {message: 'only integer values'} );
            setting.notifications.add( code, notification );
        }else {
            setting.notifications.remove( code );
 		}
        return value;
    };
	});

	

});

function toggle_hero_video_options(option = false){
	wp.customize.control('bc_theme_home_options[background_video][bc_video_url]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_video][bc_video_overlay_type]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_video][bc_video_overlay_color]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_video][bc_video_gradient_start]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_video][bc_video_gradient_end]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_video][bc_video_gradient_rotation]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_video][bc_video_overlay_text]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_video][bc_video_button_text]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_video][bc_video_button_color]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_video][bc_video_button_text_color]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_video][bc_video_button_link]').toggle(option);
}

function toggle_hero_background_image_options(option = false){
	wp.customize.control('bc_theme_home_options[background_image][bc_background_upload]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_image][bc_background_image_opacity]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_image][bc_background_overlay_type]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_image][bc_background_overlay_solid_color]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_image][bc_background_gradient_start]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_image][bc_background_gradient_end]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_image][bc_background_gradient_rotation]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_image][bc_background_image_overlay_text]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_image][bc_background_button_text]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_image][bc_background_button_color]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_image][bc_background_button_text_color]').toggle(option);
	wp.customize.control('bc_theme_home_options[background_image][bc_background_button_link]').toggle(option);
}

// Image slider functions
function toggle_hero_image_slider_options(option = false){
	wp.customize.control('bc_theme_home_options[image_slider][bc_auto_rotate_slide_one]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_slider_rotation_time_one]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_slider_image_one]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_opacity_one]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_overlay_type_one]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_overlay_solid_color_one]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_start_one]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_end_one]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_rotation_one]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_overlay_text_one]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_button_text_one]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_button_color_one]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_button_text_color_one]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_button_link_one]').toggle(option);
	
	// wp.customize.control('bc_theme_home_options[image_slider][bc_auto_rotate_slide_two]').toggle(option);
	// wp.customize.control('bc_theme_home_options[image_slider][bc_slider_rotation_time_two]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_slider_image_two]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_opacity_two]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_overlay_type_two]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_overlay_solid_color_two]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_start_two]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_end_two]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_rotation_two]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_overlay_text_two]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_button_text_two]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_button_color_two]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_button_text_color_two]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_button_link_two]').toggle(option);

	// wp.customize.control('bc_theme_home_options[image_slider][bc_auto_rotate_slide_three]').toggle(option);
	// wp.customize.control('bc_theme_home_options[image_slider][bc_slider_rotation_time_three]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_slider_image_three]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_opacity_three]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_overlay_type_three]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_overlay_solid_color_three]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_start_three]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_end_three]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_gradient_rotation_three]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_overlay_text_three]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_button_text_three]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_button_color_three]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_button_text_color_three]').toggle(option);
	wp.customize.control('bc_theme_home_options[image_slider][bc_button_link_three]').toggle(option);
}

