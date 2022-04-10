<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./styles/main.css">
</head>

<body>
	<form action="add.php" method="POST">
		<div class="one">
			<label for="Imie">Imię:</label>
			<input required type="text" name="Imie">
		</div>
		<div class="one">
			<label for="Nazwisko">Nazwisko:</label>
			<input required type="text" name="Nazwisko">
		</div>
		<div class="one">
			<label for="Klasa">Klasa:</label>
			<select name="Klasa" required>
				<option>1A</option>
				<option>1B</option>
				<option>2A</option>
				<option>2B</option>
				<option>3A</option>
				<option>3B</option>
			</select>
		</div>
		<div class="one">
			<label for="Srednia">Średnia:</label>
			<input required type="number" min="1" max="6" step="any" name="Srednia">
		</div>
		<div class="one">
			<label for="Orzeczenie">Posiada orzeczenie:</label>
			<input type="checkbox" name="Orzeczenie">
		</div>
		<button>Wprowadź</button>
	</form>
</body>

</html>