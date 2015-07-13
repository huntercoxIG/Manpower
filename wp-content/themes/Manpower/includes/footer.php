<!-- Fat Footer -->
<section class="container footer">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1">
      <div class="row">

        <!-- Sitemap / Address -->
        <div class="col-sm-12 col-md-5 col-lg-4">
          <div class="row">
            <div class="col-xs-6">
              <p><strong>Associates</strong></p>
              <ul class="associates-links">
                <li><a href="#" title="E-Connect">E-Connect</a></li>
                <li><a href="#" title="Services">Services</a></li>
                <li><a href="#" title="Testimonials">Testimonials</a></li>
                <li><a href="#" title="Resources">Resources</a></li>
                <li><a href="#" title="Downloads">Downloads</a></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="site-links">
                <li><a href="#">Clients</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Staff</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          
          <div class="row">
            <!-- Manpower Richmond Address -->
            <div class="col-xs-6 col-md-12 richmond-address">
              <p><strong>Manpower Richmond</strong></p>
              <p>500 E Main St <br> Richmond, IN 47374</p>
              <p>(765) 966-2664</p>
            </div><!-- /.richmond-address -->

            <!-- Manpower Portland Address -->
            <div class="col-xs-6 col-md-12 portland-address">
              <p><strong>Manpower Portland</strong></p>
              <p>609 N Meridian St <br> Portland, IN 47371</p>
              <p>(270) 726-2888</p>
            </div><!-- /.portland-address -->
          </div><!-- /.row --> 
        </div><!-- /.col-sm- -->

        <!-- Facebook Feed - MP Richmond/Portland -->
        <div class="col-sm-12 col-md-7 col-lg-8">
          <div class="fb-richmond">
            <?php echo do_shortcode('[custom-facebook-feed id=ManpowerRichmond num=2 limit=2]') ?>
          </div>

           <div class="fb-portland">
            <?php echo do_shortcode( '[custom-facebook-feed id=ManpowerPortlandIN num=2 limit=2]' ) ?>
          </div>
            
        </div>
      </div>
    </div> 
  </div>
</section>

<!-- Small footer -->
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 site-sub-footer">
        <div class="row">

          <div class="col-sm-12 col-md-6">
            <p class="copyright">Copyright &copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
          </div><!-- /. col-sm-12 -->
          
          <div class="col-sm-12 col-md-6 sub-footer-links"> 
            <p><a href="<?php echo get_permalink( 127 ); ?>">Terms &amp; Conditions</a></p>
            <p><a href="<?php echo get_permalink( 125 ); ?>">Privacy Policy</a></p>
            <p><a href="http://www.manpower.us/en/Index.htm">Manpower.us</a></p>
          </div><!-- /.sub-footer -->

        </div><!-- /.row -->
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
