<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset= <?php bloginfo( 'charset' ); ?>">

  <title><?php wp_title(); ?></title>

  <!-- Definir viewport para dispositivos web móviles -->
  <meta name="viewport" content="width=device-width, minimum-scale=1">

  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/funciones.js"></script>

  <?php wp_head(); ?>

</head>
<body class="stretched side-header">
  <div class="wrapper">
    <header id="header" class="no-sticky">
			<a href="#" id="btn-prueba">btn-prueba</a>
			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo -->
					<div id="logo" class="nobottomborder">
						<a href="index.html" class="standard-logo" data-dark-logo="<?php echo get_stylesheet_directory_uri(); ?>/images/3_Global/Sixgill_LogoTagline.svg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/3_Global/Sixgill_LogoTagline.svg" alt="Sixgill"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="<?php echo get_stylesheet_directory_uri(); ?>/images/3_Global/Sixgill_LogoTagline.svg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/3_Global/Sixgill_LogoTagline.svg" alt="Sixgill"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation -->
					<nav id="primary-menu">
						<ul>
							<li class="current"><a href="index.html"><div>Home</div></a>
								<ul>
									<li><a href="#"><div>What we do</div></a></li>
									<li><a href="#"><div>Solutions</div></a></li>
									<li><a href="#"><div>Product</div></a></li>
									<li><a href="#"><div>Clients</div></a></li>
								</ul>
							</li>
							<li><a href="http://dev-sixgill.pantheonsite.io/solutions-n/"><div>Solutions</div></a></li>
							<li><a href="http://dev-sixgill.pantheonsite.io/products-n/"><div>Product</div></a></li>
							<li><a href="http://dev-sixgill.pantheonsite.io/tech-n/"><div>Tech</div></a></li>
							<li><a href="http://dev-sixgill.pantheonsite.io/company-n/"><div>Company</div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->

					<div class="clearfix visible-md visible-lg">
						<a href="#" class="social-icon si-small si-borderless si-facebook">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>

						<a href="#" class="social-icon si-small si-borderless si-twitter">
							<i class="icon-twitter"></i>
							<i class="icon-twitter"></i>
						</a>

						<a href="#" class="social-icon si-small si-borderless si-instagram">
							<i class="icon-instagram2"></i>
							<i class="icon-instagram2"></i>
						</a>
					</div>

				</div>

			</div>

		</header>
