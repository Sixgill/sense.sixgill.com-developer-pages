<?php
/* Template Name: Thank You */
	get_template_part( 'mailsend' );
    get_header();    
?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php
				// Preparing variables
				$page_header = get_field('page_header');
				$page_text = get_field('page_text');
			?>

<section class="experts_col">
	<div class="container">
		<h2><?php echo $page_header; ?></h2>
        <?php echo $page_text; ?><br/>
	</div>
</section>

      <?php endwhile; ?>
      <?php endif; // have post?>

<?php
    get_footer();
?>