<?php
	//Concat all custom js and css
	if($_SERVER['SERVER_NAME']=="dev-sixgill.pantheonsite.io") {
		$path = getCurrentDir()."/wp-content/themes/sixgill";

		$jsResultFile = $path."/js/custom_build.js";
		$jsSource = array(
			$path."/js/plugins.js",
			$path."/js/functions.js",
			$path."/js/custom/*.{js, JS}",
		);

		$cssResultFile = $path."/css/custom_build.css";
		$cssSource = array(
			$path."/css/custom/fonts.css",
			$path."/css/bootstrap.min.css",
			$path."/style.css",
			$path."/css/swiper.css",
			$path."/css/font-icons.css",
			$path."/css/animate.css",
			$path."/css/magnific-popup.css",
			$path."/css/responsive.css",
			$path."/css/colors.css",
			$path."/css/custom.css",
			$path."/css/custom/all_{general,blog,company,home,solutions,resources,tech,press,legal,products,search}.css",
			$path."/css/custom/desktop_{general,blog,company,home,solutions,resources,tech,press,legal,products,search}.css",
			$path."/css/custom/tablet_{general,blog,company,home,solutions,resources,tech,press,legal,products,search}.css",
			$path."/css/custom/mobile_portrait_{general,blog,company,home,solutions,resources,tech,press,legal,products,search}.css",
			$path."/css/custom/mobile_landscape_{general,blog,company,home,solutions,resources,tech,press,legal,products,search}.css",
			$path."/css/custom/mobile_portrait_landscape_{general,blog,company,home,solutions,resources,tech,press,legal,products,search}.css",
			$path."/css/custom/tablet_and_mobile.css",
			$path."/css/custom/custom_resolutions.css",
			$path."/css/custom/atomic.css"
		);

		function concatFiles($filesList, $resultFilename) {
			$out = fopen($resultFilename, "w");
			foreach($filesList as $filesSelector) {
				foreach(glob($filesSelector, GLOB_BRACE) as $file) {
					$in = fopen($file, "r");
					while ($line = fgets($in)) {
						fwrite($out, $line);
					}
					fclose($in);
				}
			}
			fclose($out);
		}

		concatFiles($jsSource, $jsResultFile);
		concatFiles($cssSource, $cssResultFile);
	}

	function getPageContentBySlug($slug) {
		$args = array(
			'name'        => $slug,
			'post_type'   => 'page',
			'post_status' => 'publish',
			'numberposts' => 1
		);
		return get_posts($args)[0]->post_content;
	}

	function getPageBySlug($slug) {
		$args = array(
			'name'        => $slug,
			'post_type'   => 'page',
			'post_status' => 'publish',
			'numberposts' => 1
		);
		return get_posts($args)[0];
	}

	function getCurrentSlug() {

		global $post;

		if ( is_single() || is_page() ) {
			return $post->post_name;
		} else {
			return "";
		}

	}

	function getCurrentDir() {
		$base = dirname(__FILE__);
		$path = false;

		if (@file_exists(dirname(dirname($base))."/wp-config.php")) {
			$path = dirname(dirname($base));
		} else if (@file_exists(dirname(dirname(dirname($base)))."/wp-config.php")) {
			$path = dirname(dirname(dirname($base)));
		} else {
			$path = false;
		}

		if ($path != false) {
			$path = str_replace("\\", "/", $path);
		}
		return $path;
	}

	function getChindrenByParentSlug($slug){

		$args = array(
			'name'        => $slug,
			'post_type'   => 'page',
			'post_status' => 'publish',
			'numberposts' => 1
		);

		$result = new WP_Query($args);

		$lookup = array(
			'post_parent' => $result->post->ID,
			'post_status' => 'any'
		);

		$childpages = get_children($lookup);

		return $childpages;
	}

	function getCategorySlug() {
		return @get_the_category()[0]->slug;
	}

	function getParentSlug() {
		global $post;
		if($post->post_parent == 0) return '';
		$post_data = get_post($post->post_parent);
		return $post_data->post_name;
	}

	function sixgill_widgets_init() {

		register_sidebar( array(
			'name'          => __( 'Company page latest press', 'mk' ),
			'id'            => 'sixgill-company-latest-press',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 style="font-size:30px; font-weight:bold;">',
			'after_title'   => '</h4>',
		));

		register_sidebar( array(
			'name'          => __( 'Company page latest news', 'mk' ),
			'id'            => 'sixgill-company-latest-news',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 style="font-size:30px; font-weight:bold;">',
			'after_title'   => '</h4>',
		));

		register_sidebar( array(
			'name'          => __( 'Blog Subscribe sidebar', 'mk' ),
			'id'            => 'blog-subscribe-sidebar',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 style="font-size:30px; font-weight:bold;">',
			'after_title'   => '</h4>',
		));

		register_sidebar( array(
			'name'          => __( 'Twitter Widget sidebar', 'mk' ),
			'id'            => 'twitter-widget-sidebar',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 style="font-size:30px; font-weight:bold;">',
			'after_title'   => '</h4>',
		) );

		register_sidebar( array(
			'name'          => __( 'Sixgill Deck Download Access', 'mk' ),
			'id'            => 'download-access',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 style="font-size:30px; font-weight:bold;">',
			'after_title'   => '</h4>',
		) );

	}

	function pagination($pages = '', $range = 4) {
		$showitems = 6;

		global $paged;

		echo "<table class=\"table-pagination\"><tr>";

		if(empty($paged)) $paged = 1;
		if($pages == '') {
			global $wp_query;
			$pages = $wp_query->max_num_pages;
			if(!$pages) {
				$pages = 1;
			}
		}
		$paddingPagination = 100/($pages + 2);

		if(1 != $pages) {
			if($paged > 1 ) {
				echo "<td style=\"width:".$paddingPagination."%;\">";
				echo "<a href='".get_pagenum_link($paged - 1)."'> <img src=\"/wp-content/themes/sixgill/images/icons/left-page.png\" class=\"pagination-image-left\"></a>";
				echo "</td>";

			} else {
				echo "<td style=\"width:".$paddingPagination."%;\">";
				echo "<img src=\"/wp-content/themes/sixgill/images/icons/left-no-page.png\" class=\"pagination-image-left\">";
				echo "</td>";
			}

			for ($i=1; $i <= $pages; $i++) {

				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
					echo "<td style=\"width:".$paddingPagination."%;\">";

					echo ($paged == $i)? "<span class=\"current\"><ins><b>".$i."</b></ins></span>":"<a href='".get_pagenum_link($i)."' class=\"inactive current-link\">".$i."</a>";
					echo "</td>";
				}
			}

			if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) {
				echo "<td style=\"width:".$paddingPagination."%;\">";
				echo "...";
				echo "</td>";
				echo "<td style=\"width:".$paddingPagination."%;\">";
				echo "<a href='".get_pagenum_link($pages)."' class=\"pagination-number\"> ".$pages." </a>";
				echo "</td>";
			}

			echo "<td style=\"width:".$paddingPagination."%;\">";

			if ($paged < $pages ) {
				echo "<a href=\"".get_pagenum_link($paged + 1)."\"> <img src=\"/wp-content/themes/sixgill/images/icons/right-page.png\" class=\"pagination-image-right\"> </a>";
				echo "</td>";

			} else {
				echo "<img src=\"/wp-content/themes/sixgill/images/icons/right-no-page.png\" class=\"pagination-image-right\">";
				echo "</td>";
			}
		}
		echo "</tr></table>";

	}

	function getTwitterShareLink($statusText) {
		$statusText = htmlspecialchars_decode($statusText);
		return "https://twitter.com/intent/tweet?text=".rawurlencode($statusText);
	}

	function getFacebookShareLink($title, $link) {
		$title = htmlspecialchars_decode($title);
		$link = htmlspecialchars_decode($link);
		return "https://www.facebook.com/sharer/sharer.php?u=".rawurlencode($link);
	}

	function getLinkedinShareLink($title, $link) {
		$title = htmlspecialchars_decode($title);
		$link = htmlspecialchars_decode($link);
		return "https://www.linkedin.com/shareArticle?title=".rawurlencode($title)."&url=".rawurlencode($link);
	}

	function getMailtoShareLink($title, $link) {
		$title = htmlspecialchars_decode($title);
		$link = htmlspecialchars_decode($link);
		return "mailto:?subject=".rawurlencode($title)."&body=".rawurlencode($link);
	}

	add_filter('excerpt_more', function($more) {
		return '...';
	});

	add_action( 'widgets_init', 'sixgill_widgets_init' );

	add_theme_support('post-thumbnails');
	add_theme_support('html5', array('search-form'));
	set_post_thumbnail_size(600, 315, false);
	add_image_size( 'spec_thumb', 1000, 350, true );
	add_image_size( 'solutions-thumbnails', 300, 650, false );

	/* SIX-225 */
	function remove_more_link_scroll( $link ) {
		$link = preg_replace( '|#more-[0-9]+|', '', $link );
		return $link;
	}
	add_filter( 'the_content_more_link', 'remove_more_link_scroll' );


?>
