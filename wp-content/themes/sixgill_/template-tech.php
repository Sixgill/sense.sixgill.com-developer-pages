<?php
/* Template Name: Tech */
	get_template_part( 'mailsend' );
    get_header(); 
?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php
				// Preparing variables
				$top_header = get_field('top_header');
				$top_paragraph = get_field('top_paragraph');

				$section_1_header = get_field('section_1_header');
				$section_1_text = get_field('section_1_text');
				$section_2_header = get_field('section_2_header');
				$section_2_text = get_field('section_2_text');
				$section_3_header = get_field('section_3_header');
				$section_3_text = get_field('section_3_text');
				
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				
				$image_1_popup_text = get_field('image_1_popup_text');
				$image_1_popup_image = get_field('image_1_popup_image');
	
				$image_2_popup_text = get_field('image_2_popup_text');
				$image_2_popup_image = get_field('image_2_popup_image');
			?>

<section class="tech_col">
	<div class="container">
		<h2><?php echo $top_header; ?></h2>
		<?php echo $top_paragraph; ?>
			<div class="clearfix pad_t_80">
				<div class="row">
					<div class="col-md-6">
						<h3><?php echo $section_1_header; ?></h3>
						<?php echo $section_1_text; ?>
						
                        <h4><?php echo $section_2_header; ?></h4>
						<?php echo $section_2_text; ?>
						
                        <h4><?php echo $section_3_header; ?></h4>
						<?php echo $section_3_text; ?>
					</div>
					<div class="col-md-6">
                    	<a data-toggle="modal" data-target="#myModal"><img src="<?php echo $image_1; ?>" alt="" /></a>
                        <a data-toggle="modal" data-target="#myModal2"><img src="<?php echo $image_2; ?>" alt="" /></a>
					</div>
				</div>
			</div>
	</div>
</section>

      <?php endwhile; ?>
      <?php endif; // have post?>
      
      
<!-- Modal 1 POPUP -->

<div class="modal fade popmap" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">
            	<?php if($image_1_popup_text) : ?>
                <?php echo $image_1_popup_text; ?>
                <?php endif; ?>
                <img src="<?php echo $image_1_popup_image; ?>">
            </div>

        </div>
    </div>
</div>

<!-- Modal 2 POPUP -->

<div class="modal fade popmap" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">
            	<?php if($image_2_popup_text) : ?>
                <?php echo $image_2_popup_text; ?>
                <?php endif; ?>
                <img src="<?php echo $image_2_popup_image; ?>">
            </div>

        </div>
    </div>
</div>



<?php
    get_footer();
?>