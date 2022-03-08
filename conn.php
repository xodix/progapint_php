<?php

function query(string $query, array $params = null): array
{
	$db = "szkola";
	$user = "root";
	$password = "";
	$host = "localhost";

	$conn = new mysqli($host, $user, $password, $db);

	if ($err = $conn->connect_error) {
		echo "Error connecting to database: " . $err;
		exit();
	}

	if ($params) {
		for ($i = 0; $i < count($params); $i++) {
			$params[$i] = mysqli_escape_string($conn, htmlentities($params[$i]));
		}

		$query = sprintf($query, ...$params);
	}

	mysqli_set_charset($conn, "utf-8");

	$q = $conn->query($query);

	if (!$q) {
		echo "Query: " . mysqli_error($conn);
	}

	$res = $q->fetch_all(MYSQLI_ASSOC);

	if ($res) {
		$conn->close();

		if (is_bool($res)) {
			return [];
		}

		return $res;
	}
}
