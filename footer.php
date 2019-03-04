<!--================Footer Area =================-->
<footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
            <?php wp_footer(); ?>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>About Me</h3>
        					</div>
        					<p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills.</p>
        					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | WordPress Template customized by <a href="http://prestonwallace.com">Preston Wallace</a>. Original html Design by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>Another Cool Spot</h3>
        					</div>
        					<p>Stay updated with our latest trends</p>
        					
        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Follow Me</h3>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
        						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        						<li><a href="#"><i class="fa fa-behance"></i></a></li>
        					</ul>
        				</aside>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <?php 

        wp_enqueue_script('jquery');
        wp_enqueue_script(
          'popper', 
          get_template_directory_uri() . '/js/popper.js', 
          array()
          ); 
        wp_enqueue_script(
          'bootstrap', 
          get_template_directory_uri() . '/js/bootstrap.min.js', 
          array()
          ); 
        wp_enqueue_script(
          'stellar', 
          get_template_directory_uri() . '/js/stellar.js', 
          array()
          ); 
        wp_enqueue_script(
          'simpleLightbox', 
          get_template_directory_uri() . '/vendors/lightbox/simpleLightbox.min.js', 
          array()
          ); 
        wp_enqueue_script(
          'jqueryNiceSelect', 
          get_template_directory_uri() . '/vendors/nice-select/js/jquery.nice-select.min.js', 
          array()
          ); 
        wp_enqueue_script(
          'imagesLoaded', 
          get_template_directory_uri() . '/vendors/isotope/imagesloaded.pkgd.min.js', 
          array()
          ); 
        wp_enqueue_script(
          'isotope-min', 
          get_template_directory_uri() . '/vendors/isotope/isotope-min.js', 
          array()
          ); 
        wp_enqueue_script(
          'owlCarousel', 
          get_template_directory_uri() . '/vendors/owl-carousel/owl.carousel.min.js', 
          array()
          ); 
        wp_enqueue_script(
          'ajaxChimp', 
          get_template_directory_uri() . '/js/jquery.ajaxchimp.min.js', 
          array()
          ); 
        wp_enqueue_script(
          'wayPoints', 
          get_template_directory_uri() . '/vendors/counter-up/jquery.waypoints.min.js', 
          array()
          ); 
        wp_enqueue_script(
          'counterUp', 
          get_template_directory_uri() . '/vendors/counter-up/jquery.counterup.min.js', 
          array()
          ); 
        wp_enqueue_script(
          'mailScript', 
          get_template_directory_uri() . '/js/mail-script.js', 
          array()
          ); 
        ?>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="<?php echo get_bloginfo('template_url') ?>/js/gmaps.min.js"></script>
        <script src="<?php echo get_bloginfo('template_url') ?>/js/theme.js"></script>
    </body>
