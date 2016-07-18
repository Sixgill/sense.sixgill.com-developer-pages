<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="mk-page-wrapper">
 *
 * @package Mk
 */
 
 global $data;
 
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="http://travel-app.ru/wp-content/themes/mk/css/responsive.css" type="text/css" />

<?php wp_head(); ?>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="WeezLabs" />
	<!-- Stylesheets -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="http://ideasendesarrollo.com/weezlabs/sixgill/js/jquery.js"></script>

	<link rel="stylesheet" href="http://travel-app.ru/wp-content/themes/mk/css/bootstrap.css" type="text/css" />

	<link rel="stylesheet" href="http://ideasendesarrollo.com/weezlabs/sixgill/css/swiper.css" type="text/css" />
	<!--<link rel="stylesheet" href="http://ideasendesarrollo.com/weezlabs/sixgill/css/dark.css" type="text/css" />-->
	<link rel="stylesheet" href="http://ideasendesarrollo.com/weezlabs/sixgill/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="http://ideasendesarrollo.com/weezlabs/sixgill/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="http://ideasendesarrollo.com/weezlabs/sixgill/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="http://ideasendesarrollo.com/weezlabs/sixgill/css/responsive.css" type="text/css" />
  
  
  <link rel="stylesheet" href="http://ideasendesarrollo.com/weezlabs/sixgill/css/colors.css" type="text/css" />

  
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!--[if lte IE 8]>
  	<script charset="utf-8" type="text/javascript" src="http://js.hsforms.net/forms/v2-legacy.js"></script>
  <![endif]-->
  <script charset="utf-8" type="text/javascript" src="http://js.hsforms.net/forms/v2.js"></script>


</head>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-body">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#57B82A;">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel" style="color:#FFF;" align="center">REQUEST A DEMO</h4>
            </div>
            <div class="modal-body" align="center">
            	<script>
							 hbspt.forms.create({ 
								 portalId: '1792815',
								 formId: 'ec3f606f-0f75-45cf-8ee8-4919d408e4de'
							 	});
							</script>	
            </div>
            <div class="modal-footer center"></div>
          </div>
        </div>
      </div>
    </div>
<body <?php body_class(); ?>>

		<div id="mk-main-wrapper">
	
	<?php do_action('mk_before_wrappers');?>
	
		<a class="skip-link screen-reader-text" href="#page-wrapper"><?php _e( 'Skip to content', 'mk' ); ?></a>

	<?php mk_navigation_sidebar(); ?>

	 <div id="mk-page-wrapper">
	
	<?php do_action('mk_page_wrapper_before');?>
	
	