<?php
require_once("conn.php");
$id;
if (isset($_GET["id"])) {
	$id = $_GET["id"];
} else {
	$id = 1;
}

$dane = query("SELECT img_blob FROM `samochody` WHERE id=%d", [$id]);

header("Content-type: image/jpeg");
echo $dane[0]['img_blob'];
