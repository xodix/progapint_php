<?php
require_once("conn.php");
$file;
if (isset($_POST['submit'])) {
	$name       = $_FILES['file']['name'];
	$file = addslashes(file_get_contents($_FILES['file']['tmp_name']));

	query(
		"INSERT INTO `samochody` (`marka`, `model`, `rok_produkcji`, `kolor`, `img_blob`) VALUES ('%s','%s','%s','%s','0x%s')",
		[$_POST['marka'], $_POST['model'], $_POST["rok"], $_POST["kolor"], $file],
		false
	);

	echo "Dodawanie zakończone powodzeniem";
}
