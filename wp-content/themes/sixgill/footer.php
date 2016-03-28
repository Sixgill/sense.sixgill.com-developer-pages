			<?php
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
        <!-- <div class="social">
        	<a href="<?php the_field('facebook_link', 420); ?>" target="_blank"><i class="fa fa-facebook"></i></a> 
            <a href="<?php the_field('twitter_link', 420); ?>" target="_blank"><i class="fa fa-twitter"></i></a> 
            <a href="<?php the_field('instagram_link', 420); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
		</div> -->
    </div>
</footer>
<?php wp_footer(); ?> 

<!-- Contact Modal POPUP -->

<div class="modal fade popmap" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">
            <h1><?php the_field('contact_header', 420); ?></h1>
                <p><?php the_field('contact_text', 420); ?></p><?php the_field('google_map_embed_code', 420); ?>
            </div>

        </div>
    </div>
</div>
 
<!-- Demo Request Modal POPUP -->
<div class="modal fade popmap" id="request_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h1> request a demo</h1>
				<form action="<?php echo the_permalink();?>" id="form" method="post">
                <div class="form_mid">
                    <p class="fieldsmarked">Fields marked with a <i>*</i> are required</p>
                    <p class="welcom_text">We welcome the opportunity to work with your organization. Please provide the following information so we can prepare a demo for you.</p>
                    <label>First Name <i>*</i></label>
                    <input type="text" name="first_name" value="" required="required">
                    <label>Last Name <i>*</i></label>
                    <input type="text" name="last_name" value="" required="required">
                    <label>Company <i>*</i></label>
                    <input type="text" name="company" value="" required="required">
                    <label>Email <i>*</i></label>
                    <input type="email" name="email" value="" required="required">
                    <label>Phone</label>
                    <input type="text" name="phone" value="">
                    <div class="text-center">
                        <button> send your request </button>
                    </div>
                </div>
				  <input type="hidden" name="submitted" value="true" />
				</form>
            </div>
        </div>
    </div>
</div>
<script>
$(function(){
		$('.carousel').carousel({
			//interval: 8000
			interval: false
		});
	});
</script>
<!-- /.modal -->  
</body>
</html>
</html>