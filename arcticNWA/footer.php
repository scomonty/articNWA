      <footer>
        <p>&copy; <span class="name-footer">ArcticNWA</span> <?php echo date('Y');?></p>
        <div class="footerSocial">
        <?php include 'includes/social.php'; ?>
        </div>
        <p class="legal">All Rights Reserved | <a href="sitemap">Sitemap</a> | Designed and Built by Webby D</p>

      </footer>
     <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
       var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvsmXUS0xsKnlv7D1nzp92PPfVHsrWL9E&callback=initMap"></script>
    <?php wp_footer(); ?>
  </body>
</html>
