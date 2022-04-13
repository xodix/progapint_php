<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./styles/style.css">
	<title>Dodaj</title>
</head>

<body>
	<main>
		<h1>Dodaj użytwkonika</h1>
		<form action="add.php" method="POST" enctype="multipart/form-data">
			<label>
				Marka:
				<input type="text" name="marka">
			</label>
			<label>
				Model:
				<input type="text" name="model">
			</label>
			<label>
				Rok:
				<input type="number" step="1" min="0" value="<?php echo date("Y"); ?>" name="rok">
			</label>
			<label>
				kolor:
				<input type="text" name="kolor">
			</label>
			<label>
				IMG:
				<input type="file" name="file" id="file">
			</label>

			<input type="submit" name="submit" value="dodaj">
		</form>
	</main>
</body>

</html>