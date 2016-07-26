<?php
	//Concat all custom js and css

	if($_SERVER['SERVER_NAME']=="dev-sixgill.pantheonsite.io") {
		$path = getCurrentDir()."/wp-content/themes/sixgill";

		$jsResultFile = $path."/js/custom_build.js";
		$jsSource = array(
			$path."/js/plugins.js",
			$path."/js/functions.js",
			$path."/js/custom/*.{js, JS}",
			$path."/js/owl.carousel.min.js",
		);

		$cssResultFile = $path."/css/custom_build.css";
		$pagesList = "{".
			"general,".
			"menu,".
			"footer,".
			"blog,".
			"company,".
			"home,".
			"solutions,".
			"resources,".
			"tech,".
			"press,".
			"legal,".
			"products".
		"}";

		$cssSource = array(
			array(
				"selector" => $path."/css/custom/fonts.css",
				"wrapper" => false
			),
			array(
				"selector" => $path."/css/bootstrap.min.css",
				"wrapper" => false
			),
			array(
				"selector" => $path."/css/owl.carousel.css",
				"wrapper" => false
			),
			array(
				"selector" => $path."/css/owl.theme.css",
				"wrapper" => false
			),
			array(
				"selector" => $path."/css/owl.transition.css",
				"wrapper" => false
			),
			array(
				"selector" => $path."/style.css",
				"wrapper" => false
			),
			array(
				"selector" => $path."/css/swiper.css",
				"wrapper" => false
			),
			array(
				"selector" => $path."/css/font-icons.css",
				"wrapper" => false
			),
			array(
				"selector" => $path."/css/animate.css",
				"wrapper" => false
			),
			array(
				"selector" => $path."/css/magnific-popup.css",
				"wrapper" => false
			),
			array(
				"selector" => $path."/css/responsive.css",
				"wrapper" => false
			),
			array(
				"selector" => $path."/css/jquery.fullpage.min.css",
				"wrapper" => false
			),
			array(
				"selector" => $path."/css/colors.css",
				"wrapper" => false
			),
			array(
				"selector" => $path."/css/custom.css",
				"wrapper" => false
			),
			array(
				"selector" => $path."/css/custom/all_".$pagesList.".css",
				"wrapper" => false
			),
			array(
				"selector" => $path."/css/custom/desktop_".$pagesList.".css",
				"wrapper" => "@media only screen and (min-width: 1201px) {"
			),
			array(
				"selector" => $path."/css/custom/tablet_".$pagesList.".css",
				"wrapper" => "@media (min-width: 500px) and (max-width: 1200px) and (max-aspect-ratio: 4/3), (min-width: 1001px) and (max-width: 1200px) {"
			),
			array(
				"selector" => $path."/css/custom/mobile_portrait_".$pagesList.".css",
				"wrapper" => "@media (max-width: 500px) and (max-aspect-ratio: 4/3) {"
			),
			array(
				"selector" => $path."/css/custom/mobile_landscape_".$pagesList.".css",
				"wrapper" => "@media (max-width: 1000px) and (min-aspect-ratio: 4/3) {"
			),
			array(
				"selector" => $path."/css/custom/mobile_portrait_landscape_".$pagesList.".css",
				"wrapper" => "@media (max-width: 1000px) and (min-aspect-ratio: 4/3), (max-width: 500px) and (max-aspect-ratio: 4/3) {"
			),
			array(
				"selector" => $path."/css/custom/tablet_and_mobile.css",
				"wrapper" => "@media (max-width: 1200px) {"
			),
			array(
				"selector" => $path."/css/custom/custom_resolutions.css",
				"wrapper" => false
			),
			array(
				"selector" => $path."/css/custom/atomic.css",
				"wrapper" => false
			)
		);

		function concatCssFiles($filesList, $resultFilename) {
			$out = fopen($resultFilename, "w");
			foreach($filesList as $filesDesc) {
				if($filesDesc['wrapper']!==false) {
					fwrite($out, $filesDesc['wrapper']);
				}
				foreach(glob($filesDesc['selector'], GLOB_BRACE) as $file) {
					$in = fopen($file, "r");
					while ($line = fgets($in)) {
						fwrite($out, $line);
					}
					fclose($in);
				}
				if($filesDesc['wrapper']!==false) {
					fwrite($out, "}");
				}
			}
			fclose($out);
		}

		function concatJsFiles($filesList, $resultFilename) {
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



		concatJsFiles($jsSource, $jsResultFile);
		concatCssFiles($cssSource, $cssResultFile);
	}

?>
