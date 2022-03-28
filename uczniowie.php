<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./styles/main.css">
</head>

<body>
	<h2>Wybierz klasę</h2>
	<a href="http://localhost/progapint_php/uczniowie.php?klasa=1A">1A</a>
	<a href="http://localhost/progapint_php/uczniowie.php?klasa=1B">1B</a>
	<a href="http://localhost/progapint_php/uczniowie.php?klasa=2A">2A</a>
	<a href="http://localhost/progapint_php/uczniowie.php?klasa=2B">2B</a>
	<a href="http://localhost/progapint_php/uczniowie.php?klasa=3A">3A</a>
	<a href="http://localhost/progapint_php/uczniowie.php?klasa=3B">3B</a>
	<table>

		<thead>
			<tr>
				<th>imię</th>
				<th>nazwisko</th>
				<th>średnia</th>
				<th>orzeczenie</th>
			</tr>
		</thead>

		<?php

		require_once("conn.php");

		$res = [];
		if (isset($_GET["klasa"])) {
			$res = query("SELECT * FROM `uczniowie` WHERE `Klasa`='%s'", [$_GET["klasa"]]);
		}


		for ($i = 0; $i < count($res); $i++) {
			echo "<tr>";

			$row = $res[$i];

			echo "<td>";
			echo $row["Imie"];
			echo "</td>";

			echo "<td>";
			echo $row["Nazwisko"];
			echo "</td>";

			echo "<td>";
			echo $row["SREDNIA"];
			echo "</td>";

			echo "<td>";
			$orzeczenie = (bool)$row["Orzeczenie"];

			if ($orzeczenie) {
				echo "TAK";
			} else {
				echo "NIE";
			}

			echo "</td>";


			echo "</tr>";
		}
		?>
	</table>
</body>

</html>