<?php get_header(); ?>
 
    <section id="container-fluid">
    	
        <article id="single">
          <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
 
            <!--<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?>. </a></h2>
              <small> Publicado por <?php the_author_posts_link() ?>  el <?php the_time('j/m/Y') ?>. Categoría: <?php the_category(', '); ?> </small><br>-->
          <div class="post">
             <?php the_content(); ?>
        </div>
 
 
<?php endwhile; ?>
 
<?php endif; ?>
 
  	   </article> <!-- Fin de single -->
 
  </section> <!-- Fin de main -->
  <?php  get_sidebar()?>
 
<?php get_footer(); ?>
