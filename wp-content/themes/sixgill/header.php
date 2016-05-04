<!DOCTYPE html><!-- header.php start -->
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="WeezLabs" />
	<!-- Stylesheets -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="/wp-content/themes/sixgill/style.css" type="text/css" />
	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/responsive.css" type="text/css" />


  <link rel="stylesheet" href="/wp-content/themes/sixgill/css/colors.css" type="text/css" />
  <link rel="stylesheet" href="/wp-content/themes/sixgill/css/custom.css" type="text/css" />

  <link rel="stylesheet" href="/wp-content/themes/sixgill/css/custom_2016.css" type="text/css" />


	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!--[if lte IE 8]>
  	<script charset="utf-8" type="text/javascript" src="http://js.hsforms.net/forms/v2-legacy.js"></script>
  <![endif]-->
  <script charset="utf-8" type="text/javascript" src="http://js.hsforms.net/forms/v2.js"></script>

	<!-- Document Title -->
	<title>Sixgill | Homepage</title>
</head>

<body class="side-header stretched">
	<!-- Document Wrapper -->
	<a name="top"></a>
	<section id="top"></section>
	<div id="wrapper" class="clearfix">
<!-- Header -->
<header id="header" class="no-sticky">

	<div id="header-wrap">

		<div class="container clearfix">

			<div id="primary-menu-trigger" class="tright" style="border:0px solid #FF0004; width:100%;"><img src="/wp-content/themes/sixgill/images/td/logo/mobileNavIcon.png" height="100%" alt=""/></div>

			<div id="logo" class="noborder nopadding nomargin">
				<a href="/" class="logoSIXGILL"></a>
			</div>

			<!-- Primary Navigation -->
			<nav id="primary-menu">
				<ul>

				<?php if(strcasecmp(getCurrentSlug(), "home")==0) { ?>
					<a href="#top"><div>Home</div></a>
					<div class="my_subMenus" style="margin-left:15px;">
						<a href="#what">What we do</a><br>
						<a href="#products">Products</a><br>
						<a href="#solutions">Solutions</a><br>
						<a href="#clients">Clients</a>
					</div>
				<?php }else{ ?>
					<a href="/"><div>Home</div></a>
				<?php } ?>

				<?php if(strcasecmp(getCurrentSlug(), "solutions")==0) { ?>
					<a href="#top"><div>Solutions</div></a>
					<div class="my_subMenus" style="margin-left:15px;">
						<a href="#people">People</a><br>
						<a href="#assets">Assets</a><br>
						<a href="#crowds">Crowds</a>
					</div>
				<?php }else{ ?>
					<a href="/solutions/"><div>Solutions</div></a>
				<?php } ?>

				<?php if(strcasecmp(getCurrentSlug(), "products")==0) { ?>
					<a href="#top"><div>Products</div></a>
					<div class="my_subMenus" style="margin-left:15px;">
						<a href="#ssense">Sense</a><br>
						<a href="#ssdk">Reach</a><br>
						<a href="#sassist">Assist</a>
					</div>
				<?php }else{ ?>
					<a href="/products/"><div>Products</div></a>
				<?php } ?>

				<?php if(strcasecmp(getCurrentSlug(), "tech")==0) { ?>
					<a href="#top"><div>Tech</div></a>
					<div class="my_subMenus" style="margin-left:15px;">
						<a href="#location">Location</a><br>
						<a href="#proximity">Proximity</a><br>
						<a href="#openplatform">Open Platform</a>
					</div>
					<?php }else{ ?>
						<a href="/tech/"><div>Tech</div></a>
					<?php } ?>

				<?php if(strcasecmp(getCurrentSlug(), "company")==0) { ?>
					<a href="#top"><div>Company</div></a>
					<div class="my_subMenus" style="margin-left:15px;">
						<a href="#company">The Company</a><br>
						<a href="#team">The Team</a><br>
						<a href="#board">The Board</a><br>
						<a href="#press">Press</a>
					</div>
				<?php }else{ ?>
					<a href="/company/"><div>Company</div></a>
				<?php } ?>

				<?php if(strcasecmp(getCurrentSlug(), "Blog")==0) { ?>
					<a href="#top"><div>Blog</div></a>
					</div>
				<?php }else{ ?>
					<a href="/company_blog/"><div>Blog</div></a>
				<?php } ?>

				</ul>

			</nav><!-- #primary-menu end -->

		</div>

	</div>

</header><!-- #header end -->
<!-- header.php end -->
