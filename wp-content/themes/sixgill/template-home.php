<?php
/* Template Name: Home */
	get_template_part( 'mailsend' );
    get_header(); 
?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php
				// Preparing variables
				$video_url = get_field('video_url');
				$blue_header_text_below_video = get_field('blue_header_text_below_video');

				$left_column = get_field('left_column');
				$right_column = get_field('right_column');

				$green_header_text = get_field('green_header_text');
				$flow_chart_image = get_field('flow_chart_image');
				
				$proximity_content = get_field('proximity_content');
				
				$logo_header_text = get_field('logo_header_text');
				$logo_images = get_field('logo_images');
			?>

<div id="top-video">
    <video autoplay width="100%">
        <source src="<?php echo $video_url; ?>" type="video/mp4">
    </video>
</div>

<div id="top-image">
	<img src="home-mobile-2.png" width="100%">
</div>

<section class="experts_col">

	<div class="container">
		
       <h2><span style="color: #0051c6;"><?php echo $blue_header_text_below_video; ?></span></h2>
        
		<div class="experts_col_left"><?php echo $left_column; ?></div>
    
		<div class="experts_col_right"><?php echo $right_column; ?></div>
        
	</div>

	<hr style="width: 98%; max-width: 1016px; border-top: 1px solid #ababab; margin-top: 45px;" />

</section>

    <section class="sense-header">
	<div class="container">
<h2 style="color:#4daa5a!important;"><?php echo $green_header_text; ?></h2>
    	</div>
	<div><img src="<?php echo $flow_chart_image['url']; ?>" width="100%"></div>
     </section>

<section class="view_solution_col">

	<?php if($proximity_content) : ?>
    	<div class="container">

			<?php $i = 0; foreach($proximity_content as $item) : $i++; ?>
        		<div class="col-md-4">
            		<span><img src="<?php echo $item['proximity_image']; ?>"></span>
		 			<h2><?php echo $item['proximity_text']; ?></h2>
		  			<a href="<?php echo $item['proximity_link']; ?>">Learn More</a> 
            	</div>
			<?php endforeach; ?>
        
		</div>
	<?php endif; ?>

</section>

<section class="served_col2">
	
	<?php if($logo_images) : ?>
    	<div class="container">
        
        	<h6><span><?php echo $logo_header_text; ?></span></h6>
    
			<ul>
				<?php foreach($logo_images as $logo) : ?>
				<li><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" /></li>
				<?php endforeach; ?>
			</ul>
   
		</div>					
	<?php endif; ?>

</section>
                            
	
<section class="demo_col">
  <div class="container"> <a href="#" data-toggle="modal" data-target="#request_form">Schedule Demo</a> </div>
</section>
      <?php endwhile; ?>
        <?php endif; // have post?>

<?php
    get_footer();
?>