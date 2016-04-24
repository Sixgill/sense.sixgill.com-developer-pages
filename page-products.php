<?php get_header(); ?>
<a name="top"></a>
<section id="slider" class="slider-parallax swiper_wrapper clearfix">
  <div class="slider-parallax-inner">
    <div class="swiper-container swiper-parent">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('/wp-content/themes/sixgill/images/td/hero/adobestock_69002740_web.jpg'); background-position:center;"></div>
      </div>
    </div>
  </div>
</section>

<!-- Content-->
<section id="content">

  <div class="content-wrap" style="padding-bottom: 0px;">

    <div class="header-stick" style="background-color:#F8F8F8; border:0px solid #FF0004;">
      <div class="container-fluid center clearfix" style="padding-top:75px; max-width:1100px;  border:0px solid #FF0004;">
        <?php echo getPageContentBySlug("product-text-1"); ?>
      </div>
    </div>


    <section class="container-fluid center clearfix nomargin nopadding">
      <img src="/wp-content/themes/sixgill/images/td/product_fig1.png" alt="" width="100%"/>
    </section>

    <a name="ssense"></a>
    <section id="ssense" style="background-color:#FFF;">
      <div class="container-fluid center topmargin-sm" style="max-width:1100px;  border:0px solid #FF0004;">
        <div class="col_one_third titleInside text-right"><img src="/wp-content/themes/sixgill/images/td/product/logoSense.svg" alt=""/></div>
        <div class="col_two_third col_last text-left">
          <p class="pProduct">
            <?php echo getPageContentBySlug("product-text-2"); ?>
          </p></div>
      </div>
    </section>

    <section id="before_ssdk" class="container-fluid center clearfix nomargin nopadding">
      <img src="/wp-content/themes/sixgill/images/td/product_fig2.png" alt="" width="100%"/>
    </section>

    <a name="ssdk"></a>
    <section id="ssdk" style="background-color:#F8F8F8;">
      <div class="container-fluid center clearfix nobottommargin nobottompadding" style="max-width:1100px;  border:0px solid #FF0004;">
        <div class="col_one_third titleInside text-right topmargin-sm"><img src="/wp-content/themes/sixgill/images/td/product/logoReach.svg" alt=""/></div>
        <div class="col_two_third col_last text-left topmargin-sm">
          <p class="pProduct">
            <?php echo getPageContentBySlug("product-text-3"); ?>
          </p></div>
      </div>
      <img src="/wp-content/themes/sixgill/images/td/product_fig3.png" alt="" width="100%"/>
    </section>

    <a name="sassist"></a>
    <section id="sassist" style="background-color:#FFF;">
      <div class="container-fluid center clearfix notopmargin notoppadding nobottommargin nobottompadding" style="max-width:1100px;  border:0px solid #FF0004;">
        <div class="col_one_third titleInside text-right"><img src="/wp-content/themes/sixgill/images/td/product/logoAssist.svg" alt=""/></div>
        <div class="col_two_third col_last text-left" style="margin-bottom: 0px;">
          <p class="pProduct">
            <?php echo getPageContentBySlug("product-text-4"); ?>
          </p>
        </div>
      </div>
    </section>


  </div>

</section><!-- #content end -->
<?php get_footer(); ?>
