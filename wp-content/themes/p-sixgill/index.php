<?php get_header(); ?>

  <section id="main">
    <!-- POST - INDEX -->
    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
 
    <!--<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>-->
    
    <!-- espacio para el thumbnail  -->
    <!--<div class="thumbnail">
      <?php
          if ( has_post_thumbnail() ) {
                the_post_thumbnail();
          }
      ?>
   </div>-->
   <!-- -->
   <?php the_content(); ?>
 
  <?php endwhile; else: ?>
    <p><?php _e('No hay entradas .'); ?></p>
  <?php endif; ?>

    <!-- -->
  </section> <!-- Fin de main -->

  <?php get_footer(); ?>
