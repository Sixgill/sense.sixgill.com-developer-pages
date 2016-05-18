<a name="top"></a>

<!-- Content-->
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<section id="content">

		<div id="single-page-content" class="container-fluid clearfix nomargin nopadding" style="background-color:#FFF;">

			<div id="aside-blog">
				<ul class="marginShareButton">
					<li>

					</li>
					<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" target="_blank" title="Share on Facebook.">
						<img src="/wp-content/themes/sixgill/images/td/blog/social_Facebook.svg" alt="Mountain View" id="image-fecebook-share" class="shareButton-blog">
					</a>
					<li>
						<a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" target="_blank" title="Tweet this!">
							<img src="/wp-content/themes/sixgill/images/td/blog/social_Twitter.svg" alt="Mountain View" id="image-twitter-share" class="shareButton-blog">
						</a>
					</li>
					<li>
						<a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" target="_blank" title="Share on LinkedIn">
							<img src="/wp-content/themes/sixgill/images/td/blog/social_LinkedIn.svg" alt="Mountain View"  id="image-linkedin-share" class="shareButton-blog">
						</a>
					</li>
					<li>
						<a href="mailto:?subject=<?php the_title(); ?> &amp;body=<?php the_permalink(); ?>" target="_blank" data-route="false" class="page-action email" data-social-type="vertical" data-social-tool="email">
							<!--<img src="/wp-content/themes/sixgill/images/td/blog/email_normal.svg" alt="Mountain View" id="image-email-share" class="shareButton">-->
	            <img src="/wp-content/themes/sixgill/images/td/blog/email_normal.svg" alt="Mountain View"  id="image-linkedin-share" class="shareButton-blog">
						</a>
					</li>
				</ul>
			</div>

			<div class="container-fluid center clearfix my_containerSolution my_containerSolution_indent" style="padding-top:0px;">

				<div id="press-text-post" class="col_full" style="text-align: left; margin-bottom: 30px; z-index: 200; margin-top:70px">

                    <?php if ( has_post_thumbnail()) { ?>

                        <h3 id="press-date-post" class="press-date no-bottom-margin" style="color:#000"><?php echo $post->post_title; ?></h3>
					   <h4 id="press-author-post" class="press-by-author author-with-date-blogPost"><?php echo the_time('F j, Y'); ?> | Post by <?php echo get_field('author'); ?></h4>

                        <div id="background-image-header" class="swiper-slide" style="  background-position: center; height: 350px; width:100%;     margin-bottom: 30px;">
                            <?php the_post_thumbnail( 'spec_thumb' ); ?>
				        </div>

                        <div class="topShareBottonMobile">
				<table style="width:100%; height:60px;">
					<tr style="text-align: center;">
						<td style="width: 25%; height: 60px;">
							<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" target="_blank" title="Share on Facebook.">
								<img src="/wp-content/themes/sixgill/images/td/blog/social_Facebook.svg" alt="Mountain View" id="image-mobile-fecebook-share" class="shareButton-mobile">
							</a>
						</td>
						<td style="width: 25%; height: 60px;">
							<a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" target="_blank" title="Tweet this!">
								<img src="/wp-content/themes/sixgill/images/td/blog/social_Twitter.svg" alt="Mountain View" id="image-mobile-twitter-share" class="shareButton-mobile">
							</a>
						</td>
						<td style="width: 25%; height: 60px;">
							<a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" target="_blank" title="Share on LinkedIn">
								<img src="/wp-content/themes/sixgill/images/td/blog/social_LinkedIn.svg" alt="Mountain View"  id="image-mobile-linkedin-share" class="shareButton-mobile">
							</a>
						</td>
						<td style="width: 25%; height: 60px;">
							<a href="mailto:?subject=<?php the_title(); ?> &amp;body=<?php the_permalink(); ?>" target="_blank" data-route="false" class="page-action email" data-social-type="vertical" data-social-tool="email">
								<img src="/wp-content/themes/sixgill/images/td/blog/email_normal.svg" alt="Mountain View" id="image-mobile-email-share" class="shareButton-mobile">
							</a>
						</td>
					</tr>
				</table>
			</div>

                    <?php } else { ?>

                        <h3 id="press-date-post" class="press-date no-bottom-margin" style="color:#000"><?php echo $post->post_title; ?></h3>
                        <div class="topShareBottonMobile">
				<table style="width:100%; height:60px; ">
					<tr style="text-align: center;">
						<td style="width: 25%; height: 60px;">
							<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" target="_blank" title="Share on Facebook.">
								<img src="/wp-content/themes/sixgill/images/td/blog/social_Facebook.svg" alt="Mountain View" id="image-mobile-fecebook-share" class="shareButton-mobile">
							</a>
						</td>
						<td style="width: 25%; height: 60px;">
							<a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" target="_blank" title="Tweet this!">
								<img src="/wp-content/themes/sixgill/images/td/blog/social_Twitter.svg" alt="Mountain View" id="image-mobile-twitter-share" class="shareButton-mobile">
							</a>
						</td>
						<td style="width: 25%; height: 60px;">
							<a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" target="_blank" title="Share on LinkedIn">
								<img src="/wp-content/themes/sixgill/images/td/blog/social_LinkedIn.svg" alt="Mountain View"  id="image-mobile-linkedin-share" class="shareButton-mobile">
							</a>
						</td>
						<td style="width: 25%; height: 60px;">
							<a href="mailto:?subject=<?php the_title(); ?> &amp;body=<?php the_permalink(); ?>" target="_blank" data-route="false" class="page-action email" data-social-type="vertical" data-social-tool="email">
								<img src="/wp-content/themes/sixgill/images/td/blog/email_normal.svg" alt="Mountain View" id="image-mobile-email-share" class="shareButton-mobile">
							</a>
						</td>
					</tr>
				</table>
			</div>
					   <h4 id="press-author-post" class="press-by-author author-with-date-blogPost"><?php echo the_time('F j, Y'); ?> | Post by <?php echo get_field('author'); ?></h4>

                    <?php } ?>

					<?php the_content(); ?>
				</div>

				<div class="col_full" style="text-align: center;">
					<a href="/company_blog" id="press-button-back" class="button button-large nobottommargin btnCompany" style="margin:30px 0px 0px 0px;">BACK TO BLOG</a>
				</div>
			</div>
		</div>

	</section><!-- #content end -->
<?php endwhile; // end of the loop. ?>
