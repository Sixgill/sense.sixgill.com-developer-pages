<?php
if($_SERVER['SERVER_NAME']=="dev-sixgill.pantheonsite.io") {
?>
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />

<?php
	$base = dirname(__FILE__);
	$path = false;

	if (@file_exists(dirname(dirname($base))."/wp-config.php")) {
		$path = dirname(dirname($base));
	} else if (@file_exists(dirname(dirname(dirname($base)))."/wp-config.php")) {
		$path = dirname(dirname(dirname($base)));
	} else {
		$path = false;
	}

	if ($path != false)
	{
		$path = str_replace("\\", "/", $path);
	}

	$jsResultFile = $path."/wp-content/themes/sixgill/js/custom_build.js";
	$jsSourceDir = $path."/wp-content/themes/sixgill/js/custom/*.{js, JS}";

	$cssResultFile = $path."/wp-content/themes/sixgill/css/custom_build.css";
	$cssSourceDir = $path."/wp-content/themes/sixgill/css/custom/*.{css, CSS}";

	function concatFolder($sourceDir, $resultFilename) {
		$out = fopen($resultFilename, "w");
		foreach(glob($sourceDir, GLOB_BRACE) as $file){
			$in = fopen($file, "r");
			while ($line = fgets($in)){
				fwrite($out, $line);
			}
			fclose($in);
		}
		fclose($out);
	}

	concatFolder($jsSourceDir, $jsResultFile);
	concatFolder($cssSourceDir, $cssResultFile);
}
?>
