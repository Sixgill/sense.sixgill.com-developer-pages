<?php get_header(); ?>
<a name="top"></a>
<section id="slider" class="slider-parallax swiper_wrapper clearfix">
  <div class="slider-parallax-inner">
    <div class="swiper-container swiper-parent">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('/wp-content/themes/sixgill/images/td/hero/dollarphotoclub_77872129_web.jpg'); background-position:center bottom;"></div>
      </div>
    </div>
  </div>
</section>

<!-- Content-->
<section id="content">

  <div class="content-wrap nobottommargin nobottompadding">

    <div class="header-stick" style="background-color:#F8F8F8; border:0px solid #FF0004;">
			<div class="container-fluid center clearfix" style="padding-top:75px; max-width:950px;  border:0px solid #FF0004;">
				<div class="col_one_third my_titSolutions">
				<?php echo get_field('top_header'); ?>
				</div>
				<div class="col_two_third col_last text-left my_txtSolutions">
					<?php echo get_field('top_paragraph'); ?>
				</div>
			</div>

    </div>

    <div class="clear"></div>
    <div class="container-fluid clearfix nomargin nopadding" style="background-color:#F8F8F8;">
      <img src="/wp-content/themes/sixgill/images/td/tech/00_Shape1.jpg" alt="" width="100%"/>
    </div>

    <a name="location"></a>
    <div id="location" class="container-fluid clearfix nomargin nopadding" style="background-color:#FFF;">
      <div class="container-fluid center clearfix my_containerSolution">
        <div class="col_full"><img src="<?php echo get_field('image_1_header'); ?>" alt="" style="max-width:500px; width: 100%;"/></div>
        <div class="col_one_third my_boxTech_image hidden-top-imageTech"><img src="<?php echo get_field('image_1_tech'); ?>" alt=""/></div>
        <div class="col_two_third my_txtSolutions_noline col_last">
          <div class="my_txtSolution">
            <?php echo get_field('section_1_text'); ?>

          </div>
        </div>
        <div class="col_one_third my_boxTech_image hidden-bottom-imageTech"><img src="/wp-content/themes/sixgill/images/td/tech/heatmap.png" alt=""/></div>
      </div>
    </div>



  <div class="clear"></div>
  <div class="container-fluid clearfix nomargin nopadding" style="background-color:#FFF;">
    <img src="/wp-content/themes/sixgill/images/td/tech/shape2.png" alt="" width="100%" />
  </div>

  <a name="proximity"></a>
  <div id="proximity" class="container-fluid clearfix nomargin nopadding" style="background-color:#F8F8F8;">
    <div class="container-fluid center clearfix my_containerSolution">
      <div class="col_full"><img src="<?php echo get_field('image_2_header'); ?>" alt="" style="max-width:500px; width: 100%;"/></div>
      <div class="col_two_third my_txtSolutions_noline col_last">
        <div class="my_txtSolution">
            <?php echo get_field('section_2_text'); ?>
        </div>
      </div>
      <div class="col_one_third my_boxTech_image" style="padding-left: 5%;"><img src="<?php echo get_field('image_2_tech'); ?>" alt=""/></div>

    </div>
  </div>

<div class="clear"></div>
<div class="container-fluid clearfix nomargin nopadding" style="background-color:#F8F8F8;">
  <img src="/wp-content/themes/sixgill/images/td/tech/shape3.png" alt="" width="100%" />
</div>


 <a name="openplatform"></a>
  <div id="openplatform" class="container-fluid clearfix nomargin nopadding" style="background-color:#F8F8F8;">
    <div class="container-fluid center clearfix my_containerSolution">
      <div class="col_full"><img src="<?php echo get_field('image_3_header'); ?>" alt="" style="max-width:500px; width: 100%;"/></div>
      <div class="col_one_third my_boxTech_image hidden-top-imageTech"><img src="<?php echo get_field('image_3_tech'); ?>" alt=""/></div>
      <div class="col_two_third my_txtSolutions_noline col_last">
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
