<!--	<?php
				// Preparing variables				
				$variable = get_field('legal_link', 420);
				
				$variable = get_field('contact_header', 420);
				$variable = get_field('contact_text', 420);
				$variable = get_field('google_map_embed_code', 420);
				
				$variable = get_field('facebook_link', 420);
				$variable = get_field('twitter_link', 420);
				$variable = get_field('instagram_link', 420);
			?>
            
<footer>
    <div class="container">
        <div class="ftr_left">
            <ul>
                <li><a href="<?php the_field('legal_link', 420); ?>">Legal</a></li>
                <li><a data-toggle="modal" data-target="#myModal3">Contact</a></li>
            </ul>
            <p>Copyright © 2016 Sixgill, LLC</p>
        </div>
    </div>
</footer>-->
<!-- Footer-->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets -->
				<div class="footer-widgets-wrap clearfix" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/TD/solutions_footer.png);">
					<div class="col_two_third alignleft" style="color:#FFF; font-size:20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.</div>
					<div class="col_one_third col_last" align="right"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/TD/btnScheduleDemo_Full.png" width="245" alt=""></a></div>
				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights -->
			<div id="copyrights">
				<div class="container clearfix">
					<div class="col_half"><a href="#">RESOURCES</a> &nbsp; <a href="#">LEGAL</a> &nbsp; <a href="#">CONTACT</a></div>
					<div class="col_half col_last tright">&copy; Copyright Sixgill, 2016. All Rights Reserved.</div>
				</div>
			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->
<?php wp_footer(); ?> 



<!-- /.modal --> 
</div><!-- #wrapper end -->

	<!-- Go To Top -->
	<div id="gotoTop" class="icon-angle-up"></div> 
    
</body>
</html>
</html>