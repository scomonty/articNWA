     <?php $current_options = wp_parse_args(  get_option( 'arctic_theme_options', array() ), theme_setup_data() ); ?>
      <footer>
        <div class="container">
          <div class="row">
        <div class="col-md-3 foot-space">
      <?php if($current_options['find_us_business']!='') {?><h3><?php echo esc_html($current_options['find_us_business']); ?></h3><?php }else { ?> <h3><?php echo ($slide_options['find_us_business_default']); ?></h3> <?php }?>
      <?php if($current_options['find_us_street']!='')?><p class="street"><?php { echo esc_html($current_options['find_us_street']); ?></p><?php } ?>
      <?php if($current_options['find_us_city']!='')?><p class="cityState"><?php { echo esc_html($current_options['find_us_city']); ?></p><?php } ?>
      <?php if($current_options['find_us_phone']!='')?><p class="phoneNumber"><?php { echo esc_html($current_options['find_us_phone']); ?></p><?php } ?>
        </div>
        <div class="col-md-6 foot-space">
        <p>&copy; <span class="name-footer">ArcticNWA</span> <?php echo date('Y');?></p>
        <p class="legal"><?php
        if( $current_options['footer_copyright_text'] != '' ) { ?>
        <?php echo $current_options['footer_copyright_text']; ?>
        <?php } ?></p>
        </div>
        <div class="col-md-3">
                <div class="footerSocial">
          <?php if( $current_options['footer_social_media_enabled'] == 'on'){
        include 'includes/social.php'; } ?>
        </div>
        </div>
        </div>
        </div>
      </footer>
     <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvsmXUS0xsKnlv7D1nzp92PPfVHsrWL9E&callback=initMap"></script>
    <?php wp_footer(); ?>
  </body>
</html>
