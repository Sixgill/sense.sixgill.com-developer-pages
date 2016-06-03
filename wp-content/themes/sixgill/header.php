<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<?php include(locate_template('build.php')); ?>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Sixgill" />

	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
	<!-- Stylesheets -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="/wp-content/themes/sixgill/style.css?<?php echo time(); ?>" type="text/css" />
	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/responsive.css" type="text/css" />


	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/colors.css" type="text/css" />
	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/custom.css?<?php echo time(); ?>" type="text/css" />

	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/custom_build.css?<?php echo time(); ?>" type="text/css" />


	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!--[if lte IE 8]>
	<script charset="utf-8" type="text/javascript" src="http://js.hsforms.net/forms/v2-legacy.js"></script>
	<![endif]-->
	<script charset="utf-8" type="text/javascript" src="http://js.hsforms.net/forms/v2.js"></script>

	<!-- Document Title -->
	<title><?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;

		wp_title( '|', true, 'right' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";

		?></title>

	<?php wp_head(); ?>
</head>

<body class="side-header stretched" data-loader-timeout="7000">

	<!-- Document Wrapper -->
	<div id="wrapper" class="clearfix">
		<a name="top"></a>
		<section id="top"></section>
		<!-- Header -->
		<div id="menu-background"></div>
		<header id="header" class="no-sticky no-border">

			<div id="header-wrap">
				
					<div id="logo" class="noborder nopadding" style="margin-left: 15px;">
						<a href="/" class="logo-sixgill"></a>
					</div>

					<div id="primary-menu-trigger" class="tright" style="margin-right: 15px;">
						<img id="show-menu-icon" class="" src="/wp-content/themes/sixgill/images/td/logo/mobileNavIcon.png" height="100%" alt=""/>
						<img id="close-menu-icon" class="hide" src="/wp-content/themes/sixgill/images/td/logo/mobileNavIconClose.png" height="100%" alt=""/>
					</div>
			<div id="mobile-table-search" class="background-search no-desktop-display no-mobile-landscape-display hide mobile-margin-search-page">
				<div class="search-form-container form-page-search padding-search">
					<?php get_search_form(); ?>
				</div>
			</div>
			
				<div class="container clearfix menu-container">

<!--
					<div id="logo" class="noborder nopadding no-margin">
						<a href="/" class="logo-sixgill"></a>
					</div>

					<div id="primary-menu-trigger" class="tright">
						<img id="show-menu-icon" class="" src="/wp-content/themes/sixgill/images/td/logo/mobileNavIcon.png" height="100%" alt=""/>
						<img id="close-menu-icon" class="hide" src="/wp-content/themes/sixgill/images/td/logo/mobileNavIconClose.png" height="100%" alt=""/>
					</div>
-->
					


					<!-- Primary Navigation -->
					<nav id="primary-menu">
									<ul style="top: 0px;">

							<?php if(strcasecmp(getCurrentSlug(), "home")==0) { ?>
								<a class="menu-link-selected" href="#top"><div class="menu-first-item">Home</div></a>
								<div class="my_subMenus display-only-desktop" style="margin-left:15px;">
									<a href="#what">What we do</a><br>
									<a href="#products">Products</a><br>
									<a href="#solutions">Solutions</a><br>
									<a href="#clients">Clients</a>
								</div>
							<?php }else{ ?>
								<a href="/"><div class="menu-first-item">Home</div></a>
							<?php } ?>

								<?php if(strcasecmp(getCurrentSlug(), "solutions")==0) { ?>
									<a class="menu-link-selected" href="#top"><div>Solutions</div></a>
									<div class="my_subMenus display-only-desktop" style="margin-left:15px;">
										<a href="#people">People</a><br>
										<a href="#assets">Assets</a><br>
										<a href="#crowds">Crowds</a>
									</div>
								<?php } else if (strcasecmp(getParentSlug(), "solutions")==0) { ?>
									<a class="menu-link-selected" href="/solutions/"><div>Solutions</div></a>
								<?php }else{ ?>
									<a href="/solutions/"><div>Solutions</div></a>
								<?php } ?>

								<?php if(strcasecmp(getCurrentSlug(), "products")==0) { ?>
									<a class="menu-link-selected" href="#top"><div>Products</div></a>
									<div class="my_subMenus display-only-desktop" style="margin-left:15px;">
										<a href="#ssense">Sense</a><br>
										<a href="#ssdk">Reach</a><br>
										<a href="#sassist">Assist</a>
									</div>
								<?php }else{ ?>
									<a href="/products/"><div>Products</div></a>
								<?php } ?>

								<?php if(strcasecmp(getCurrentSlug(), "tech")==0) { ?>
									<a class="menu-link-selected" href="#top"><div>Tech</div></a>
									<div class="my_subMenus display-only-desktop" style="margin-left:15px;">
										<a href="#location">Location</a><br>
										<a href="#proximity">Proximity</a><br>
										<a href="#openplatform">Open Platform</a>
									</div>
								<?php }else{ ?>
									<a href="/tech/"><div>Tech</div></a>
								<?php } ?>

								<?php if(strcasecmp(getCurrentSlug(), "company")==0) { ?>
									<a class="menu-link-selected" href="#top"><div>Company</div></a>
									<div class="my_subMenus display-only-desktop" style="margin-left:15px;">
										<a href="#company">The Company</a><br>
										<a href="#team">The Team</a><br>
										<a href="#board">The Board</a><br>
										<a href="#press">Press</a>
									</div>
								<?php }else{ ?>
									<a href="/company/"><div>Company</div></a>
								<?php } ?>

								<?php if(strcasecmp(getCurrentSlug(), "company_blog")==0 || strcasecmp(getCategorySlug(), "blog")==0) { ?>
									<a class="menu-link-selected" href="#top"><div>Blog</div></a>
								<?php }else{ ?>
									<a href="/company_blog/"><div>Blog</div></a>
								<?php } ?>

								<?php
								$globalSocialButtonsInfoId = getPageBySlug('global-social-buttons')->ID;

								$facebookLink = get_field('facebook_link', $globalSocialButtonsInfoId);
								$twitterLink = get_field('twitter_link', $globalSocialButtonsInfoId);
								$linkedinLink = get_field('linkedin_link', $globalSocialButtonsInfoId);
								?>

								<div class="global-social-buttons-container global-social-buttons-list">
									<hr class="global-social-buttons-separator">

									<a href="<?php echo $facebookLink; ?>" class="menu-social-link" target="_blank">
										<img width="13px" src="/wp-content/themes/sixgill/images/td/blog/facebook_normal.svg">
									</a>

									<a href="<?php echo $twitterLink; ?>" class="menu-social-link" target="_blank">
										<img width="22px" src="/wp-content/themes/sixgill/images/td/blog/twitter_normal.svg">
									</a>

									<a href="<?php echo $linkedinLink; ?>" class="menu-social-link" target="_blank">
										<img width="22px" src="/wp-content/themes/sixgill/images/td/blog/linkedin_normal.svg">
									</a>
								</div>
							</ul>
						</nav><!-- #primary-menu end -->
					</div>
				</div>
			</header><!-- #header end -->

			<div class="search-form-container header-search display-only-desktop position-button-schedule">
				<div class="search-header-position"><button href="#" data-toggle="modal" data-target="#myModal" class="button button-large nobottommargin btnSchedule">SCHEDULE A DEMO</button></div>
				<div class="form-search-header"><?php get_search_form_header(); ?></div>
			</div>
