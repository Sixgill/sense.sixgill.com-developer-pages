<?php
 get_template_part( 'mailsend' );
 get_header();   
?>
        <?php if ( have_posts() ) : ?>
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>      

        <?php the_content();?>

        <?php endwhile; ?>
        <?php endif; // have post?>
  
<?php
    get_footer();
?>

