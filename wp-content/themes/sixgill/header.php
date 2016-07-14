<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Sixgill" />
	<meta name="google-site-verification" content="YI36Rs0Zki_Iw6jdf8RNTnIkOZIrqcUoilY5LNDFrBY" />
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
	<script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!--[if lte IE 8]>
	<script charset="utf-8" type="text/javascript" src="https://js.hsforms.net/forms/v2-legacy.js"></script>
	<![endif]-->

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
	<?php include(locate_template('share_scheme.php')); ?>

</head>

<body class="side-header stretched no-touch" data-loader-timeout="7000">

	<!--GoogleTagManager-->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5X4VP7" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<script>
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-5X4VP7');
	</script>
	<!-- End Google Tag Manager -->

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
					<img id="show-menu-icon" class="" src="/wp-content/themes/sixgill/images/td/logo/mobileNavIcon.png" style="height: 100%;" alt=""/>
					<img id="close-menu-icon" class="hide" src="/wp-content/themes/sixgill/images/td/logo/mobileNavIconClose.png" style="height: 100%;" alt=""/>
				</div>

				<div class="clearfix menu-container">
					<?php get_template_part('menu'); ?>
				</div>

				<div class="menu-schedule-button-wrapper display-only-desktop">
					<a href="#" class="menu-schedule-button-link">
						<div class="menu-schedule-button">
							<div class="vertical-centered">
								Schedule a Demo
							</div>
						</div>
					</a>
				</div>

			</div>
		</header>
