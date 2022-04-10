<?php
require_once("conn.php");

$orzeczenie;

if (isset($_POST["Orzeczenie"])) {
	$orzeczenie = "True";
} else {
	$orzeczenie = "False";
}

$params = ["NULL", $_POST["Imie"], $_POST["Nazwisko"], $_POST["Klasa"], $_POST["Srednia"], $orzeczenie];

query("INSERT INTO `uczniowie` VALUES (%s,'%s','%s','%s',%f,%s);", $params);

echo "<h1 style='color: white; text-align: center;'>Prawidłowo dodano urzytkownika!</h1>";
