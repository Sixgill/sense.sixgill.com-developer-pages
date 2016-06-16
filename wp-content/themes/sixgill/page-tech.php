<?php get_header(); ?>
<a name="top"></a>
<section id="slider" class="slider-parallax swiper_wrapper clearfix">
  <div class="slider-parallax-inner">
    <div class="swiper-container swiper-parent">
      <div class="swiper-wrapper">
        <div id="tech-page-header-background" class="swiper-slide"></div>
      </div>
    </div>
  </div>
</section>

<!-- Content-->
<section id="content" class="section-margin-fix">
  <div class="content-wrap no-bottom-margin no-bottom-padding">

    <div class="header-stick background-f8f8f8 no-border">
			<div class="container-fluid no-border center clearfix tech-top-spacing">
				<div class="col_one_third title-left-col center no-bottom-margin tech-top-header">
					<?php echo get_field('top_header'); ?>
				</div>
				<div class="col_two_third col_last text-left text-right-col tech-top-text">
					<?php echo get_field('top_paragraph'); ?>
				</div>
			</div>

    </div>

    <div class="clear"></div>
    <div class="container-fluid background-f8f8f8 clearfix no-margin nopadding">
      <img src="/wp-content/themes/sixgill/images/td/tech/00_Shape1.jpg" alt="" class="full-width"/>
    </div>

    <a name="location"></a>
    <div id="location" class="container-fluid background-white clearfix no-margin nopadding">
      <div class="container-fluid center clearfix my_containerSolution">
        <div class="col_full">
					<img src="<?php echo get_field('image_1_header'); ?>" alt="" class="full-width max-width-500"/>
				</div>
        <div class="col_one_third my_boxTech_image hidden-top-imageTech">
					<img src="<?php echo get_field('image_1_tech'); ?>" alt=""/>
				</div>
        <div class="col_two_third text-right-col-noline col_last">
          <div class="my_txtSolution">
            <?php echo get_field('section_1_text'); ?>
          </div>
        </div>
        <div class="col_one_third my_boxTech_image hidden-bottom-imageTech">
					<img src="/wp-content/themes/sixgill/images/td/tech/heatmap.png" alt=""/>
				</div>
      </div>
    </div>

	  <div class="clear"></div>
	  <div class="container-fluid background-white clearfix no-margin nopadding">
	    <img src="/wp-content/themes/sixgill/images/td/tech/shape2.png" alt="" class="full-width"/>
	  </div>

	  <a name="proximity"></a>
	  <div id="proximity" class="container-fluid background-f8f8f8 clearfix no-margin nopadding">
	    <div class="container-fluid center clearfix my_containerSolution">
	      <div class="col_full">
					<img src="<?php echo get_field('image_2_header'); ?>" alt="" class="full-width max-width-500"/>
				</div>
	      <div class="col_two_third text-right-col-noline col_last">
	        <div class="my_txtSolution">
	            <?php echo get_field('section_2_text'); ?>
	        </div>
	      </div>
	      <div class="col_one_third my_boxTech_image" style="padding-left: 5%;">
					<img src="<?php echo get_field('image_2_tech'); ?>" alt=""/>
				</div>
	    </div>
	  </div>

	<div class="clear"></div>
	<div class="container-fluid background-f8f8f8 clearfix no-margin nopadding">
	  <img src="/wp-content/themes/sixgill/images/td/tech/shape3.png" alt="" class="full-width" />
	</div>


	 <a name="openplatform"></a>
	  <div id="openplatform" class="container-fluid background-f8f8f8 clearfix no-margin nopadding">
	    <div class="container-fluid center clearfix my_containerSolution">
	      <div class="col_full">
					<img src="<?php echo get_field('image_3_header'); ?>" alt="" class="full-width max-width-500"/>
				</div>
	      <div class="col_one_third my_boxTech_image hidden-top-imageTech">
					<img src="<?php echo get_field('image_3_tech'); ?>" alt=""/>
				</div>
	      <div class="col_two_third text-right-col-noline col_last">
	        <div class="my_txtSolution" style="    margin-bottom: 0px;">
	            <?php echo get_field('section_3_text'); ?>
	        </div>
	      </div>
	    	<div class="col_one_third my_boxTech_image hidden-bottom-imageTech"><img src="/wp-content/themes/sixgill/images/td/tech/imageExtensiblePlatform.png" alt=""/></div>
	    </div>
	  </div>
  </div>

</section><!-- #content end -->
<?php get_footer(); ?>
