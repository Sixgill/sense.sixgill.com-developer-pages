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
	<link rel="stylesheet" href="/wp-content/themes/sixgill/style.css" type="text/css" />
	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/responsive.css" type="text/css" />


	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/colors.css" type="text/css" />
	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/custom.css" type="text/css" />

	<link rel="stylesheet" href="/wp-content/themes/sixgill/css/custom_build.css?<?php echo time(); ?>" type="text/css" />


	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!--[if lte IE 8]>
	<script charset="utf-8" type="text/javascript" src="http://js.hsforms.net/forms/v2-legacy.js"></script>
	<![endif]-->
	<script charset="utf-8" type="text/javascript" src="http://js.hsforms.net/forms/v2.js"></script>

	<title>
		<?php
		global $page, $paged;

		wp_title( '|', true, 'right' );

		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			echo " | $site_description";
		}

		?>
	</title>

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
				<div id="logo" class="noborder nopadding">
					<a href="/" class="logo-sixgill"></a>
				</div>

				<div id="primary-menu-trigger" class="tright">
					<img id="show-menu-icon" class="" src="/wp-content/themes/sixgill/images/td/logo/mobileNavIcon.png" height="100%" alt=""/>
					<img id="close-menu-icon" class="hide" src="/wp-content/themes/sixgill/images/td/logo/mobileNavIconClose.png" height="100%" alt=""/>
				</div>
				<div id="mobile-table-search" class="background-search no-desktop-display hide mobile-margin-search-page">
					<div class="search-form-container form-page-search padding-search">
						<?php get_search_form(); ?>
					</div>
				</div>

				<div class="container clearfix menu-container">
					<?php get_template_part('menu'); ?>
				</div>
			</div>
		</header>

		<div class="search-form-container header-search display-only-desktop position-button-schedule">
			<div class="search-header-position">
				<button href="#" data-toggle="modal" data-target="#myModal" class="button button-large nobottommargin btnSchedule">
					SCHEDULE A DEMO
				</button>
			</div>
			<div class="form-search-header">
				<?php get_search_form_header(); ?>
			</div>
		</div>
