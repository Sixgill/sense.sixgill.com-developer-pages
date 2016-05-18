<?php
if($_SERVER['SERVER_NAME']!="dev-sixgill.pantheonsite.io" && $_SERVER['SERVER_NAME']!="test-sixgill.pantheonsite.io") {
	exit();
}
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

	$resultFile = $path."/wp-content/themes/sixgill/js/custom_build.js";
	$sourceDir = $path."/wp-content/themes/sixgill/js/custom/*.{js, JS}";
	$buffer = "";
	$out = fopen($resultFile, "w");
	foreach(glob($sourceDir, GLOB_BRACE) as $file){
		$in = fopen($file, "r");
		while ($line = fgets($in)){
			fwrite($out, $line);
		}
		fclose($in);
	}
	fclose($out);
?>
