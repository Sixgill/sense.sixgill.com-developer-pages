<?php get_header(); ?>
<a name="top"></a>
<!-- Content-->
<section id="content">

  <div class="content-wrap" style="padding-bottom:0px;">

	<section id="what" class="container-fluid center clearfix nomargin nopadding">
		<section id="" class="container-fluid center clearfix">
        <?php echo getPageContentBySlug("press-content"); ?>
        <?php echo do_shortcode( '[widget id="rpwe_widget-2"]' ); ?>


		</section>

	</section>

  </div>

</section><!-- #content end -->
<?php get_footer(); ?>
