<?php
if($_SERVER['SERVER_NAME']=="dev-sixgill.pantheonsite.io") {
?>
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />

<?php

	$path = getCurrentDir();

	$jsResultFile = $path."/wp-content/themes/sixgill/js/custom_build.js";
	$jsSource = array($path."/wp-content/themes/sixgill/js/custom/*.{js, JS}");

	$cssResultFile = $path."/wp-content/themes/sixgill/css/custom_build.css";
	$cssSource = array(
		$path."/wp-content/themes/sixgill/css/custom/all_{general,blog,company,home,solutions,resources,tech,press,legal,products,search}.css",
		$path."/wp-content/themes/sixgill/css/custom/desktop_{general,blog,company,home,solutions,resources,tech,press,legal,products,search}.css",
		$path."/wp-content/themes/sixgill/css/custom/tablet_{general,blog,company,home,solutions,resources,tech,press,legal,products,search}.css",
		$path."/wp-content/themes/sixgill/css/custom/mobile_portrait_{general,blog,company,home,solutions,resources,tech,press,legal,products,search}.css",
		$path."/wp-content/themes/sixgill/css/custom/mobile_landscape_{general,blog,company,home,solutions,resources,tech,press,legal,products,search}.css",
		$path."/wp-content/themes/sixgill/css/custom/mobile_portrait_landscape_{general,blog,company,home,solutions,resources,tech,press,legal,products,search}.css",
		$path."/wp-content/themes/sixgill/css/custom/tablet_and_mobile.css",
		$path."/wp-content/themes/sixgill/css/custom/custom_resolutions.css",
		$path."/wp-content/themes/sixgill/css/custom/atomic.css"
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
?>
