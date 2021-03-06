//gravity forms error handling
jQuery(document).on('gform_post_render', function(event, form_id, current_page){
    // code to trigger on form or form page render
    //Error for form with static labels
	jQuery('.gfield_error > .ginput_container').focusin(function(){
    jQuery(this).parent('li').children('label').show();
		jQuery(this).parent('li').children('.validation_message').hide();
		jQuery(this).parent('li').removeClass('gfield_error');
	});
    console.log('form render');
    toggleFloatLabel('.ginput_container_text');
  //Code for form with floating labels
    jQuery('.ginput_container_text').focusin(function(){
      jQuery(this).parent('li').children('label').addClass('float_label');
    });
    

    jQuery('.ginput_container_text').focusout(function(){
       toggleFloatLabel(this);
        
    });


    //Error handling for form with floating labels
    jQuery('.floating_labels .gfield_error > label').hide();
    jQuery('.floating_labels .gfield_error > .validation_message').addClass('validation_message--float');    

});

function toggleFloatLabel(selector){
  jQuery(selector).children('input').each(function(){
    if(!jQuery(this).val()) {
      jQuery(this).parent('.ginput_container_text').parent('li').children('label').removeClass('float_label');
      console.log(2);
    } else {
      jQuery(this).parent('.ginput_container_text').parent('li').children('label').addClass('float_label');
      console.log(3);
    }
  })
}


jQuery(document).ready(function(){
    jQuery(".navbar-nav li").hover(
    function(){
        jQuery(this).children('ul').hide();
        jQuery(this).children('ul').show();
    },
    function () {
        jQuery('ul', this).hide();            
    });
});

jQuery(function() {
  // ------------------------------------------------------- //
  // Multi Level dropdowns
  // ------------------------------------------------------ //
  jQuery("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
    event.preventDefault();
    event.stopPropagation();

    jQuery(this).siblings().toggleClass("show");


    if (!jQuery(this).next().hasClass('show')) {
      jQuery(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    jQuery(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
      jQuery('.dropdown-submenu .show').removeClass("show");
    });

  });
});

jQuery(".bc_toggle_content").on('click', function(e){
  e.preventDefault();
  var dataToToggle = jQuery(this).data('toggle');
  // jQuery(dataToToggle).toggleClass('d-none');
  jQuery(dataToToggle).animate({
    height:'toggle'
  },"slow");
  var currentIcon = jQuery(this).children('svg').data('icon');
  var newIcon = currentIcon == "plus-circle" ? "minus-circle" : "plus-circle";

  // jQuery(this).children('svg').data('icon', newIcon);
  jQuery(this).children('svg').toggleClass("fa-"+currentIcon);
  jQuery(this).children('svg').toggleClass("fa-"+newIcon);
})

//Top level nav item clickable
jQuery('.navbar ul.navbar-nav > .dropdown > a[href]').click(function() { var dropdown = jQuery(this).next('.dropdown-menu'); 
if (dropdown.length == 0 || jQuery(dropdown).css('display') !== 'none') { if (this.href) { location.href = this.href; } } });

//Focus search on icon click
jQuery('#searchsubmit').click(function(){jQuery('#s').focus()});

//Hide announcement bar on scroll
jQuery(window).scroll(function() {
  if (jQuery(this).scrollTop() > 0) {
    jQuery('.bc_announcement_bar').hide();
  } else {
    jQuery('.bc_announcement_bar').show();
  }
});