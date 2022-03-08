<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./styles/main.css">
</head>

<body>
	<ol>

		<?php
		require_once("conn.php");
		$res = query("SELECT * FROM `uczniowie` WHERE `srednia`>5 ORDER BY `srednia`");

		for ($i = 0; $i < count($res); $i++) {
			echo "<li>";
			$row = $res[$i];
			echo sprintf("%s, %s, %s", $row["Imie"], $row["Nazwisko"], $row["Klasa"]);
			echo "</li>";
		}
		?>
	</ol>
</body>

</html>