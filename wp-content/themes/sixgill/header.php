<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Sixgill: More Mobility. More Control.</title>
<?php 
	wp_head();	
?>

<!-- Start of Async HubSpot Analytics Code -->
    <script type="text/javascript">
        (function(d,s,i,r) {
            if (d.getElementById(i)){return;}
            var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
            n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/1792815.js';
            e.parentNode.insertBefore(n, e);
        })(document,"script","hs-analytics",300000);
    </script>

<!-- End of Async HubSpot Analytics Code -->

<!-- Start of Google Analytics Code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75098635-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- End of Google Analytics Code -->
   
</head>
<!--/head-->
<body  <?php body_class(); ?>>
<header>
  <div class="container">
    <div class="logo pull-left"> 
	 <?php $header_image = get_header_image(); ?>
      <?php if(! empty( $header_image ) ):?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" rel="home"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
      <?php endif;?>	
	</div>
    <div class="head_right pull-right"> <span class="search">  </span>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

	  <span class="login request"> <a href="#" data-toggle="modal" data-target="#request_form">Request a Demo</a> </span>

      <div class="collapse navbar-collapse">
	   
        <?php wp_nav_menu( array( 'theme_location' => 'main', 'menu_class' => 'nav navbar-nav' ) ); ?>
       
        <!--<ul class="nav navbar-nav">
          <li><a href="#">Solutions</a></li>
          <li><a href="#">Product</a></li>
          <li><a href="#">Tech</a></li>
          <li><a href="#">About</a></li>
        </ul>-->
      </div>
    </div>
  </div>
</header>