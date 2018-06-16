<?php /* Template Name: FAQ Template */ ?>

<?php
get_header();
include 'includes/secondaryBanner.php';
$current_options = wp_parse_args(  get_option( 'arctic_theme_options', array() ), theme_setup_data() );
if( $current_options['frequently_asked_question_panel_enabled'] == 'on'){
    ?>
<div id="faq-panel">
	<div class="container">
		<div class="row">
        <div class="col-sd-12">
            <?php if($current_options['FAQ_head_title']!='') {?>
                            <h1><?php echo esc_html($current_options['FAQ_head_title']); ?></h1>
                            <?php }
                            else { ?> <h1><?php echo ($slide_options['FAQ_headline']); ?></h1> <?php }?>
            <div class="accordionFAQ">
<div class="accordion-section">
                    <a href="#accordion-1" class="accordion-section-title"><h2>FAQ Line One</h2></a>
                    <div id="accordion-1" class="accordionFAQ-section-content"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi optio non dicta. Suscipit fugiat perferendis assumenda tenetur beatae illo distinctio, dolor aspernatur, vero praesentium officia ducimus nulla! Porro, autem, doloribus.</p></div>
                </div>
                <div class="accordion-section">
                    <a href="#accordion-2" class="accordion-section-title"><h2>FAQ Line Two</h2></a>
                    <div id="accordion-2" class="accordionFAQ-section-content"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi optio non dicta. Suscipit fugiat perferendis assumenda tenetur beatae illo distinctio, dolor aspernatur, vero praesentium officia ducimus nulla! Porro, autem, doloribus.</p></div>
                </div>
                <div class="accordion-section">
                    <a href="#accordion-3" class="accordion-section-title"><h2>FAQ Line Three</h2></a>
                    <div id="accordion-3" class="accordionFAQ-section-content">
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi optio non dicta. Suscipit fugiat perferendis assumenda tenetur beatae illo distinctio, dolor aspernatur, vero praesentium officia ducimus nulla! Porro, autem, doloribus.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi optio non dicta. Suscipit fugiat perferendis assumenda tenetur beatae illo distinctio, dolor aspernatur, vero praesentium officia ducimus nulla! Porro, autem, doloribus.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi optio non dicta. Suscipit fugiat perferendis assumenda tenetur beatae illo distinctio, dolor aspernatur, vero praesentium officia ducimus nulla! Porro, autem, doloribus.</li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-section">
                    <a href="#accordion-4" class="accordion-section-title"><h2>FAQ Line Four</h2></a>
                    <div id="accordion-4" class="accordionFAQ-section-content">Lorem ipsum dolor sit amet:
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi optio non dicta. Suscipit fugiat perferendis assumenda tenetur beatae illo distinctio, dolor aspernatur, vero praesentium officia ducimus nulla! Porro, autem, doloribus.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi optio non dicta. Suscipit fugiat perferendis assumenda tenetur beatae illo distinctio, dolor aspernatur, vero praesentium officia ducimus nulla! Porro, autem, doloribus.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi optio non dicta. Suscipit fugiat perferendis assumenda tenetur beatae illo distinctio, dolor aspernatur, vero praesentium officia ducimus nulla! Porro, autem, doloribus.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi optio non dicta. Suscipit fugiat perferendis assumenda tenetur beatae illo distinctio, dolor aspernatur, vero praesentium officia ducimus nulla! Porro, autem, doloribus.</li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-section">
                    <a href="#accordion-5" class="accordion-section-title"><h2>FAQ Line Five</h2></a>
                    <div id="accordion-5" class="accordionFAQ-section-content"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi optio non dicta. Suscipit fugiat perferendis assumenda tenetur beatae illo distinctio, dolor aspernatur, vero praesentium officia ducimus nulla! Porro, autem, doloribus.</p></div>
                </div>
            </div>
        </div>
        		</div>
	</div>
</div>
        <div id="back-top"><a href="#"></a></div>
    <?php } ?>
<?php get_footer(); ?>
