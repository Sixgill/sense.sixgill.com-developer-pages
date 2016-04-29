<?php get_header();
	$post = get_post();
?>
<a name="top"></a>
<section id="slider" class="slider-parallax swiper_wrapper clearfix" style="border:0px solid #FF0004;">
  <div class="slider-parallax-inner">
    <div class="swiper-container swiper-parent">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('/wp-content/themes/sixgill/images/td/single_header_desktop.png'); background-position: center;">
					<h1>
				</div>
      </div>
    </div>
  </div>
</section>

<!-- Content-->

<section id="content">

	<div id="location" class="container-fluid clearfix nomargin nopadding" style="background-color:#FFF;">
		<div class="container-fluid center clearfix my_containerSolution">
			<div class="col_full" style="text-align: left;">
				<h3><?php echo the_time('F j, Y'); ?></h3>
				<?php
					echo $post->post_content;
				 ?>
			</div>
		</div>
	</div>

	<pre>
		<?php var_dump(get_post()); ?>
	</pre>

</section><!-- #content end -->
<?php get_footer(); ?>
