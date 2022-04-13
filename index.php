<?php
require_once("conn.php");
$dane;
$curr;

if (isset($_GET["curr"])) {
	$curr = (int)$_GET["curr"];
} else {
	$curr = 1;
}

label1:
$dane = query("SELECT id, marka, model, rok_produkcji, kolor FROM `samochody` WHERE `id`=%d", [$curr]);

if (count($dane) == 0) {
	$curr = 1;
	goto label1;
}

$dane = $dane[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./styles/style.css">
	<title>Główna</title>
</head>

<body>
	<main>
		<a href="dodaj.php">Dodaj samochód</a>
		<h1><?php echo $dane["model"] ?></h1>
		<img src="obraz.php?id=<?php echo $curr ?>" width="300" height="300" alt="obraz produktu">
		<br>
		<div class="inline">
			<span><a href="index.php?curr=<?php echo htmlentities($curr) - 1 ?>">⬅</a></span>
			<table>
				<tr>
					<th>id</th>
					<th>marka</th>
					<th>rok produkcji</th>
					<th>kolor</th>
				</tr>
				<tr>
					<?php
					echo "<td>" . htmlentities($dane["id"]) . "</td>";
					echo "<td>" . htmlentities($dane["marka"]) . "</td>";
					echo "<td>" . htmlentities($dane["rok_produkcji"]) . "</td>";
					echo "<td>" . htmlentities($dane["kolor"]) . "</td>";
					?>
				<tr>
			</table>
			<span><a href="index.php?curr=<?php echo htmlentities($curr) + 1 ?>">➡</a></span>
		</div>
	</main>
</body>

</html>