<?php
/* Template Name: Product */
	get_template_part( 'mailsend' );
    get_header(); 
?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php
				// Preparing variables
				$top_paragraph = get_field('top_paragraph');

				$sixgill_sense_logo = get_field('sixgill_sense_logo');
				$sixgill_sense_header = get_field('sixgill_sense_header');
				$sixgill_sense_subheader = get_field('sixgill_sense_subheader');

				$track_image = get_field('track_image');
				$track_header = get_field('track_header');
				$track_text = get_field('track_text');
				$track_list = get_field('track_list');
				
				$determine_image = get_field('determine_image');
				$determine_header = get_field('determine_header');
				$determine_text = get_field('determine_text');
				$determine_list = get_field('determine_list');
				
				$act_image = get_field('act_image');
				$act_header = get_field('act_header');
				$act_text = get_field('act_text');
				$act_list = get_field('act_list');
				
				$sixgill_assist_logo = get_field('sixgill_assist_logo');
				$sixgill_assist_header = get_field('sixgill_assist_header');
				$sixgill_assist_list = get_field('sixgill_assist_list');
			?>

<section class="tech_col">
    <div class="container">
            <span style="margin-bottom:-30px;"><?php echo $top_paragraph; ?></span>
        </div>
    </div>
</section>
<section class="product_col">
    <div class="container">
        <div class="product_inner">
			<div class="col-md-1">&nbsp;</div>
        	<div class="col-md-2 product-sense"><img src="<?php echo $sixgill_sense_logo; ?>"></div>
        	<div class="col-md-1">&nbsp;</div>
        	<div class="col-md-8">
            		<h4><?php echo $sixgill_sense_header; ?></h4>
                	<h6><?php echo $sixgill_sense_subheader; ?></h6>
            </div>    
        </div>
        
        
        <div class="product_inner_col">
			<div class="product_inner_left"><img src="<?php echo $track_image; ?>"></div>
 			<div class="product_inner_right">
				<h2><?php echo $track_header; ?></h2>
				<?php echo $track_text; ?>
                	<?php if($track_list) : ?>
						<ul class="product_list">
							<?php foreach($track_list as $item) : ?>
							<li><?php echo $item['track_list_text']; ?></li>
							<?php endforeach; ?>
						</ul>				
					 <?php endif; ?>   
                </div>
            </div>
        
		<div class="product_inner_col">
			<div class="product_inner_left"><img src="<?php echo $determine_image; ?>"></div>
 			<div class="product_inner_right">
				<h2><?php echo $determine_header; ?></h2>
				<?php echo $determine_text; ?>
                	<?php if($determine_list) : ?>
						<ul class="product_list">
							<?php foreach($determine_list as $item) : ?>
							<li><?php echo $item['determine_list_text']; ?></li>
							<?php endforeach; ?>
						</ul>				
					 <?php endif; ?>   
                </div>
            </div>
        
		<div class="product_inner_col">
			<div class="product_inner_left"><img src="<?php echo $act_image; ?>"></div>
 			<div class="product_inner_right">
				<h2><?php echo $act_header; ?></h2>
				<?php echo $act_text; ?>
                	<?php if($act_list) : ?>
						<ul class="product_list">
							<?php foreach($act_list as $item) : ?>
							<li><?php echo $item['act_list_text']; ?></li>
							<?php endforeach; ?>
						</ul>				
					 <?php endif; ?>   
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="sixgill_asset">
			<div class="col-md-1">&nbsp;</div>
            <div class="col-md-2 sixgille_asset">
                <img src="<?php echo $sixgill_assist_logo; ?>">
            </div>
			<div class="col-md-1">&nbsp;</div>
            <div class="col-md-8">
                <p><?php echo $sixgill_assist_header; ?></p>
                	<?php if($sixgill_assist_list) : ?>
						<ul class="product_list">
							<?php foreach($sixgill_assist_list as $item) : ?>
							<li><?php echo $item['sixgill_assist_list_text']; ?></li>
							<?php endforeach; ?>
						</ul>				
					 <?php endif; ?>  
            </div>
        </div>
    </div>
</section>

      <?php endwhile; ?>
      <?php endif; // have post?>

<?php
    get_footer();
?>