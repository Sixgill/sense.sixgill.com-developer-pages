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
	$jsSource =array($path."/wp-content/themes/sixgill/js/custom/*.{js, JS}");

	$cssResultFile = $path."/wp-content/themes/sixgill/css/custom_build.css";
	$cssSource = array(
		$path."/wp-content/themes/sixgill/css/custom/all_*.{css, CSS}",
		$path."/wp-content/themes/sixgill/css/custom/desktop_*.{css, CSS}",
		$path."/wp-content/themes/sixgill/css/custom/tablet_*.{css, CSS}",
		$path."/wp-content/themes/sixgill/css/custom/mobile_*.{css, CSS}",
		$path."/wp-content/themes/sixgill/css/custom/custom_resolutions.{css, CSS}"
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
