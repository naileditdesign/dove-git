
<footer>
	

	<div class="row tops">
<div class="large-3 columns">

<p class="right"><span>Call Us:</span> 01757 249 171</p>

</div>
<div class="large-5 columns">
	
	<p><span>Email Us:</span> info@dovefurnitureandkitchens.co.uk</p>
	
</div>
<div class="large-4 columns">
	<p><span>Like Us:</span> <a class="facebook" href="#">Find us on Facebook</a> </p>
</div>
	</div>

<div class="row mids">
	<div class="large-3 columns">
		
	<h4>Site Map</h4>
	<span>View the rest of our website</span>
	<?php wp_nav_menu(array('theme_location'=>'sitemap-menu'));?>
	
</div>
<div class="large-3 columns menu">
	
	<h4>Visit our showroom</h4>
	<span>Come visit us</span>
	
	<?php echo do_shortcode("[smartblock id=32]"); ?>
	
</div>

<div class="large-6 columns">
	
	<h4>Our Shop</h4>
	<span>Most recently added items</span>
	
	
	
	
</div>
    </div>

<div class="footer-lower row">
    	
    	<div class="large-12 columns">
<address>© Nailed it Design Obviously <?php echo date('Y'); ?></address>
    </div>
</div>

</footer>

<script>
	
            $('nav li ul').each(function(index) {
    		$(this).addClass("dropdown");
			});
			
			$('.top-bar-section ul').parent('li').addClass('has-dropdown');
       

				$('.featured li').each(function(index){
			  $(this).attr('class', 'item list_' + index);
				});
				
				$('.about,.social,.tuts,.portfolio,.responsive,.food').hover(
			       function(){ $(this).addClass('active') },
			       function(){ $(this).removeClass('active') }
			       )
			       
			       $('.top-bar li:last').addClass('last');
			       
			       	
			       	$('.our-block li,.bottom-section li').hover(
       function(){ $(this).addClass('active') },
       function(){ $(this).removeClass('active') }
       )

</script>


<!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  -->
  
  <!-- Included JS Libs -->


  
  <!-- Initialize JS Plugins -->
 <script src="<?php bloginfo('template_url'); ?>/js/foundation/tweet.js"></script>

  
  <!-- Initialize Foundation JS Plugins -->

<script src="<?php bloginfo('template_url'); ?>/js/foundation/foundation.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/foundation/foundation.topbar.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/foundation/foundation.orbit.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/foundation/foundation.reveal.js"></script>



  <script>
    $(document).foundation();
</script>
  <?php wp_footer(); ?>
</body>
</html>