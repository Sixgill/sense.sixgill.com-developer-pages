<?php get_header(); ?>
<a name="top"></a>
<section id="slider" class="slider-parallax swiper_wrapper clearfix" style="border:0px solid #FF0004;">
  <div class="slider-parallax-inner">
    <div class="swiper-container swiper-parent">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('/wp-content/themes/sixgill/images/td/hero/dollarphotoclub_84369125_web.jpg'); background-position: center;"></div>
      </div>
    </div>
  </div>
</section>

<!-- Content-->

<section id="content">

  <div class="content-wrap nomargin nopadding" style="border:0px solid #FF0004;">

  <!-- Header of the section -->
  <div class="container-fluid clearfix nomargin nopadding" style="background-color:#F8F8F8;">
    <div class="container-fluid center clearfix my_containerSolution">
      <?php echo getPageContentBySlug("solutions-text-1"); ?>
    </div>
  </div>
  <div class="clear"></div>
  <div class="container-fluid clearfix nomargin nopadding" style="background-color:#F8F8F8;">
    <img src="/wp-content/themes/sixgill/images/td/solutions_fig1.png" alt="" width="100%"/>
  </div>

  <a name="people"></a>
  <div id="people" class="container-fluid clearfix nomargin nopadding" style="background-color:#FFF;">
    <div class="container-fluid center clearfix my_containerSolution">
      <div class="col_one_third"><img src="/wp-content/themes/sixgill/images/td/icons/iconPeople.png" class="iconSolutions" alt=""/></div>
      <div class="col_two_third my_txtSolutions_noline col_last">
        <div class=""><img src="/wp-content/themes/sixgill/images/td/solutions/header_people.png" class="my_headerBoxSolution" alt=""/></div>
        <?php echo getPageContentBySlug("solutions-text-2"); ?>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>
  <div class="container-fluid clearfix nomargin nopadding" style="background-color:#F8F8F8;">
    <img src="/wp-content/themes/sixgill/images/td/solutions_fig2.png" alt="" width="100%"/>
  </div>


  <a name="assets"></a>
  <div id="assets" class="container-fluid clearfix nomargin nopadding" style="background-color:#F8F8F8;">
    <div class="container-fluid center clearfix my_containerSolution">
      <div class="col_one_third"><img src="/wp-content/themes/sixgill/images/td/icons/iconCrane.png" class="iconSolutions" alt=""/></div>
      <div class="col_two_third my_txtSolutions_noline col_last">
        <div class=""><img src="/wp-content/themes/sixgill/images/td/solutions/header_assets.png" class="my_headerBoxSolution" alt=""/></div>
        <?php echo getPageContentBySlug("solutions-text-3"); ?>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>
  <div class="container-fluid clearfix nomargin nopadding" style="background-color:#F8F8F8;">
    <img src="/wp-content/themes/sixgill/images/td/solutions_fig3.png" alt="" width="100%"/>
  </div>
  <div class="clearfix"></div>

  <a name="crowds"></a>
  <div id="crowds" class="container-fluid clearfix nomargin nopadding" style="background-color:#FFF;">
    <div class="container-fluid center clearfix my_containerSolution">
      <div class="col_one_third"><img src="/wp-content/themes/sixgill/images/td/icons/iconCrowds.png" class="iconSolutions" alt=""/></div>
      <div class="col_two_third my_txtSolutions_noline col_last">
        <div class=""><img src="/wp-content/themes/sixgill/images/td/solutions/header_crowds.png" class="my_headerBoxSolution" alt=""/></div>
        <?php echo getPageContentBySlug("solutions-text-4"); ?>
      </div>
    </div>
  </div>


  </div>


</section><!-- #content end -->
<?php get_footer(); ?>
