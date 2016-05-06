<a name="top"></a>
<section id="slider" class="slider-parallax swiper_wrapper clearfix" style="border:0px solid #FF0004;">
  <div class="slider-parallax-inner">
    <div class="swiper-container swiper-parent">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('/wp-content/themes/sixgill/images/td/single_header_desktop.png'); background-position: center;">
					<div class="slider-caption slider-caption-center">
						<h1 class="press-title"><?php echo $post->post_title; ?></h1>
						<h4 class="press-subtitle"><?php echo get_field('subtitle'); ?></h4>
					</div>
				</div>
      </div>
    </div>
  </div>
</section>

<!-- Content-->

<section id="content">

	<div id="single-page-content" class="container-fluid clearfix nomargin nopadding" style="background-color:#FFF;">
        <div id="aside1"> 
        
            <ul style=" margin-left: 40px; list-style-type: none;">
                <li>

                </li>
<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook."><img src="/wp-content/themes/sixgill/images/td/blog/facebook_normal.svg" alt="Mountain View" class="shareButton"></a>

                <li>
                    <a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweet this!"><img src="/wp-content/themes/sixgill/images/td/blog/twitter_normal.svg" alt="Mountain View" class="shareButton"></a>

                </li>
                <li>
                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Share on LinkedIn"><img src="/wp-content/themes/sixgill/images/td/blog/linkedin_normal.svg" alt="Mountain View" class="shareButton"></a>

                </li>
                <li>
                    <a href="mailto:?subject=<?php the_title(); ?> &amp;body=<?php the_permalink(); ?>" data-route="false" class="page-action email" data-social-type="vertical" data-social-tool="email"><img src="/wp-content/themes/sixgill/images/td/blog/email_normal.jpeg" alt="Mountain View" class="shareButton"></a>

                </li>

</ul>
        
        </div>

		<div class="container-fluid center clearfix my_containerSolution">

			<div class="col_full" style="text-align: left; margin-bottom: 30px;">
				<h3 class="press-date"><?php echo the_time('F j, Y'); ?> by <?php echo get_field('author'); ?></h3>
				<?php echo $post->post_content; ?>
			</div>

			<?php comments_template( '', true ); ?>

			<div class="col_full" style="text-align: center;">
				<a href="/company_blog" class="button button-large nobottommargin btnCompany" style="margin:30px 0px 0px 0px;">BACK TO BLOG</a>
			</div>
		</div>
	</div>

</section><!-- #content end -->
