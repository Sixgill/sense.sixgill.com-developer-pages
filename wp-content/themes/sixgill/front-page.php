<?php 
	get_template_part( 'mailsend' );
    get_header();    
?>
<div id="top-video">
    <video autoplay width="100%">
        <source src="hero-final.mp4" type="video/mp4">
    </video>
</div>

<div id="top-image">
        <img src="home-mobile-2.png" width="100%">
</div>

	<?php 
	$post_6 = get_page_by_title( 'Homepage experts content' );	
	$post_content = $post_6->post_content;
	if(!empty($post_content)){
		echo $post_content;
	}
	?>

    <section class="sense-header">
	<div class="container">
<h2 style="color:#4daa5a!important;">Sixgill Sense<span style="font-size:15px; vertical-align: super;">&trade;</span> tracks, determines, and acts on the changing proximity of people, places, and things</h2>
    	</div>
	<div><img src="http://www.sixgill.com/wp-content/uploads/2016/03/tda-graphic-4-v2.png" width="100%"></div>
     </section>

	<section class="view_solution_col">
	  <div class="container">
		<div class="col-md-4"> <span><img src="<?=get_template_directory_uri();?>/images/proximity_people.svg"></span>
		  <h2><b>Proximity</b> for People</h2>
		  <a href="/solutions/#people">Learn More</a> </div>
		<div class="col-md-4"> <span><img src="<?=get_template_directory_uri();?>/images/proximity_assets.svg"></span>
		  <h2><b>Proximity</b> for Assets</h2>
		  <a href="/solutions/#assets">Learn More</a> </div>
		<div class="col-md-4"> <span><img src="<?=get_template_directory_uri();?>/images/proximity_crowds.svg"></span>
		  <h2><b>Proximity</b> for Crowds</h2>
		  <a href="/solutions/#crowds">Learn More</a> </div>
	  </div>
	</section>
	<section class="served_col2">
	  <div class="container">
		<h6><span>Over a Billion Guided and Served</span></h6>
		<ul>
		  <li><img src="wp-content/uploads/2016/03/ATT_logo.jpg"></li>
		  <li><img src="wp-content/uploads/2016/03/2015_Rugby_World_Cup.svg_.jpg"></li>
		  <li><img src="wp-content/uploads/2016/03/NYAutoShow.jpg"></li>
		  <li><img src="wp-content/uploads/2016/03/New-York-Fashion-Week-logo.png-adedb41177ab61be75af33ff253b98293b773dc6list_image.jpg"></li>
		  <li><img src="wp-content/uploads/2016/03/LiveNation.jpg"></li>
		  <li><img src="wp-content/uploads/2016/03/ing-logo.jpg"></li>
		  <li><img src="wp-content/uploads/2016/03/img.jpg"></li>
		  <li><img src="wp-content/uploads/2016/03/HSBC-logo.jpg"></li>
		  <li><img src="wp-content/uploads/2016/03/Auburn.jpg"></li>
		  <li><img src="wp-content/uploads/2016/03/1024px-New_York_Jets_logo.svg_.jpg"></li>
		</ul>
	  </div>
	</section>
<section class="demo_col">
  <div class="container"> <a href="#" data-toggle="modal" data-target="#request_form">Schedule Demo</a> </div>
</section>
<?php 
    get_footer();    
?>   