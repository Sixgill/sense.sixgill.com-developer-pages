<?php
$errorMessage = "This link is invalid";
$id = preg_replace("/[^0-9]/","", $_GET['id']);

if(get_post_status( $id ) === false) {
	die($errorMessage);
}
$postNameHash = md5(md5(get_post($_GET['id'])->post_name));
$providedNameHash = $_GET['key'];
$attachmentPath = get_attached_file($_GET['id']);

if($postNameHash != $providedNameHash || strlen($attachmentPath)==0 ) {
	die($errorMessage);
}

$maxRead = 1 * 1024 * 1204; // 1MB
$fh = fopen($attachmentPath, 'r');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($attachmentPath) . '"');
while (!feof($fh)) {
	echo fread($fh, $maxRead);
	ob_flush();
}
exit;
?>
