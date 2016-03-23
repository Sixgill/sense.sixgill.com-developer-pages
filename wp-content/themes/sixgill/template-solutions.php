<?php
/* Template Name: Solutions */
	get_template_part( 'mailsend' );
    get_header(); 
?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php
				// Preparing variables
				$top_paragraph = get_field('top_paragraph');

				$people_image = get_field('people_image');
				$people_header = get_field('people_header');
				$people_text = get_field('people_text');
				$people_list = get_field('people_list');

				$assets_image = get_field('assets_image');
				$assets_header = get_field('assets_header');
				$assets_text = get_field('assets_text');
				$assets_list = get_field('assets_list');
				
				$crowds_image = get_field('crowds_image');
				$crowds_header = get_field('crowds_header');
				$crowds_text = get_field('crowds_text');
				$crowds_list = get_field('crowds_list');
				
				$success_story_button_text = get_field('success_story_button_text');
				$success_story_file_link = get_field('success_story_file_link');
			?>

<section class="tech_col">
    <div class="container">
        <?php echo $top_paragraph; ?>
        <a id="people" name="people"></a>
  </div>
</section>
        

<section class="sixgill_solution">
	<div class="container">
    
		<div class="clearfix solution_space">
			<div class="col-md-3 text_cent">
				<img src="<?php echo $people_image; ?>" alt="" />
            </div>
			<div class="col-md-8">
				<h4><?php echo $people_header; ?></h4>
				<?php echo $people_text; ?>
               
                <?php if($people_list) : ?>
					<ul class="product_list">
						<?php foreach($people_list as $item) : ?>
						<li><?php echo $item['people_list_text']; ?></li>
						<?php endforeach; ?>
					</ul>				
				 <?php endif; ?>

				<a id="assets" name="assets"></a>
			</div>
		</div>

		<div class="clearfix solution_space">
			<div class="col-md-3 text_cent">
				<img src="<?php echo $assets_image; ?>" alt="" />
            </div>
			<div class="col-md-8">
				<h4><?php echo $assets_header; ?></h4>
				<?php echo $assets_text; ?>
               
                <?php if($assets_list) : ?>
					<ul class="product_list">
						<?php foreach($assets_list as $item) : ?>
						<li><?php echo $item['assets_list_text']; ?></li>
						<?php endforeach; ?>
					</ul>				
				 <?php endif; ?>
                 
			</div>
		</div>
        
<a id="events" name="crowds"></a>

		<div class="clearfix solution_space">
			<div class="col-md-3 text_cent">
				<img src="<?php echo $crowds_image; ?>" alt="" />
            </div>
			<div class="col-md-8">
				<h4><?php echo $crowds_header; ?></h4>
				<?php echo $crowds_text; ?>
               
                <?php if($crowds_list) : ?>
					<ul class="product_list">
						<?php foreach($crowds_list as $item) : ?>
						<li><?php echo $item['crowds_list_text']; ?></li>
						<?php endforeach; ?>
					</ul>				
				 <?php endif; ?>
                 
			</div>
		</div>
	</div>
</section>

<section class="demo_col pad_t80">
	<div class="container"><a href="<?php echo $success_story_file_link; ?>" target="_blank"><?php echo $success_story_button_text; ?></a></div>
</section>

      <?php endwhile; ?>
      <?php endif; // have post?>

<?php
    get_footer();
?>