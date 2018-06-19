<div class="remodal-bg">
  <div class="remodal" data-remodal-id="review-form-modal">
  	<?php if( $current_options['testimonials_modal'] != '' ) {
  		$foo = $current_options['testimonials_modal'];
  		$foo = preg_replace("[ninja_form id=]", "", $foo);
  		$foo = preg_replace("/[^a-zA-Z0-9]/", "", $foo);
  		settype($foo, "integer");
  		?>
						<?php if (function_exists('ninja_forms_display_form')) {echo ninja_forms_display_form( $foo); } ?>
						<?php } ?>
   	<button data-remodal-action="close" class="remodal-close form-modal-close"></button>
   </div>
 </div>
