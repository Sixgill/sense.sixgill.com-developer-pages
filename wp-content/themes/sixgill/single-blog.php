<a name="top"></a>

<!-- Content-->
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); 
	$ptitle = get_the_title();?>
	<section id="content">
        <div id="single-page-content" class="container-fluid clearfix nomargin nopadding" style="background-color:#FFF;">
            <div class="container-fluid center clearfix my_containerSolution my_containerSolution_indent" style="padding-top:0px;">   
                <div id="aside-blog">
                    <ul class="marginShareButton">
                        <li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" target="_blank" title="Share on Facebook."> <img src="/wp-content/themes/sixgill/images/td/blog/social_Facebook.svg" alt="Facebook" id="image-fecebook-share" class="shareButton-blog"></a></li>
                        
                        <li><a href="http://twitter.com/home/?status=<?php echo urlencode(html_entity_decode($ptitle)); ?> - <?php echo wp_get_shortlink(); ?>" target="_blank" title="Tweet this!"> <img src="/wp-content/themes/sixgill/images/td/blog/social_Twitter.svg" alt="Twitter" id="image-twitter-share" class="shareButton-blog"></a></li>
                        
                        <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" target="_blank" title="Share on LinkedIn"><img src="/wp-content/themes/sixgill/images/td/blog/social_LinkedIn.svg" alt="LinkedIn"  id="image-linkedin-share" class="shareButton-blog"></a></li>
					
                        <li><a href="mailto:?subject=<?php the_title(); ?> &amp;body=<?php the_permalink(); ?>" target="_blank" data-route="false" class="page-action email" data-social-type="vertical" data-social-tool="email"><img src="/wp-content/themes/sixgill/images/td/blog/social_Email.svg" alt="Email"  id="image-linkedin-share" class="shareButton-blog"></a></li>
                    </ul>
                </div>

				<div id="press-text-post" class="col_full post-blog">

                    <?php if ( has_post_thumbnail()) { ?>

                    <div class="shareIcons-desktop">
                       <h3 id="press-date-post" class="press-date no-bottom-margin" style="color:#000"><?php echo $post->post_title; ?></h3>
					   <h4 id="press-author-post" class="press-by-author author-with-date-blogPost"><?php echo the_time('F j, Y'); ?> | Post by <?php echo get_field('author'); ?></h4>

                        <div id="background-image-header" class="swiper-slide" style="  background-position: center; height: 350px; width:100%;     margin-bottom: 30px;">
                            <?php the_post_thumbnail( 'spec_thumb' ); ?>
				        </div>
                        <?php include(locate_template('social_buttons.php')); ?>
                    </div>

                    <div class="shareIcons-tablet">
                        <h3 id="press-date-post" class="press-date no-bottom-margin" style="color:#000; margin-bottom: 10px;"><?php echo $post->post_title; ?></h3>
 
                         <div id="background-image-header" class="swiper-slide" style="  background-position: center; height: 350px; width:100%;     margin-bottom: 30px;">
                             <?php the_post_thumbnail( 'spec_thumb' ); ?>
 				        </div>
                         <?php include(locate_template('social_buttons.php')); ?>
                         
                         <p id="press-author-post" style="font-size: 20px; font-weight: normal; color:#000; margin-bottom: 0px; line-height: 1;"><?php echo the_time('F j, Y'); ?></p>
                         <p id="press-author-post" style="font-size: 20px; font-weight: normal; color:#999999; line-height: 1; "> Post by <?php echo get_field('author'); ?></p>
                     </div>
                    
                    <div class="shareIcons-mobile">
                       <h3 id="press-date-post" class="press-date no-bottom-margin" style="color:#000; margin-bottom: 10px;"><?php echo $post->post_title; ?></h3>
                        <div id="background-image-header" class="swiper-slide" style="  background-position: center; height: 350px; width:100%;     margin-bottom: 30px;">
                            <?php the_post_thumbnail( 'spec_thumb' ); ?>
				        </div>
                        
                        <?php include(locate_template('social_buttons.php')); ?>

                    <p id="press-author-post" style="font-size: 20px; font-weight: normal; color:#000; margin-bottom: 0px; line-height: 1;"><?php echo the_time('F j, Y'); ?></p>
                    <p id="press-author-post" style="font-size: 20px; font-weight: normal; color:#999999; line-height: 1; "> Post by <?php echo get_field('author'); ?></p>
                    </div>
                    <?php } else { ?>
                    <div class="shareIcons-desktop">
                        <h3 id="press-date-post" class="press-date no-bottom-margin" style="color:#000"><?php echo $post->post_title; ?></h3>
                        
                        <?php include(locate_template('social_buttons.php')); ?>
                        <h4 id="press-author-post" class="press-by-author author-with-date-blogPost"><?php echo the_time('F j, Y'); ?> | Post by <?php echo get_field('author'); ?></h4>
                    </div>

                    <div class="shareIcons-tablet">
                        <h3 id="press-date-post" class="press-date no-bottom-margin" style="color:#000"><?php echo $post->post_title; ?></h3>
 					   <h4 id="press-author-post" class="press-by-author author-with-date-blogPost"><?php echo the_time('F j, Y'); ?> | Post by <?php echo get_field('author'); ?></h4>
  
 
                         <?php include(locate_template('social_buttons.php')); ?>
                     </div>
                    
                    <div class="shareIcons-mobile">
                         <h3 id="press-date-post" class="press-date no-bottom-margin" style="color:#000; margin-bottom: 30px;"><?php echo $post->post_title; ?></h3>
                        
                        <?php include(locate_template('social_buttons.php')); ?>
                    <p id="press-author-post" style="font-size: 20px; font-weight: normal; color:#000; margin-bottom: 0px; line-height: 1;"><?php echo the_time('F j, Y'); ?></p>
                    <p id="press-author-post" style="font-size: 20px; font-weight: normal; color:#999999; line-height: 1; "> Post by <?php echo get_field('author'); ?></p>
                    </div>

                    <?php } ?>

					<?php the_content(); ?>
				</div>

                <?php comments_template( '', true ); ?>

				<div class="col_full" style="text-align: center;">
					<a href="/company_blog" id="press-button-back" class="button button-large nobottommargin btnCompany" style="margin:30px 0px 0px 0px;">BACK TO BLOG</a>
				</div>
			</div>
		</div>

	</section><!-- #content end -->
<?php endwhile; // end of the loop. ?>
