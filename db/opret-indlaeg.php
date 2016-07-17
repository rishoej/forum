<?php
require "connect.php";

$kategori = strip_tags($_POST["kategori"]);

if($kategori == 1) {
    $genre = "Inspiration";	
}
if($kategori == 2) {
    $genre = "Programmering";		
}
if($kategori == 3) {
    $genre = "Projekter";		
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO indlaeg (kategori,titel,indhold) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $kategori, $titel, $indhold);

// set parameters and execute
$kategori = $genre;
$titel = strip_tags($_POST["titel"]);
$indhold = strip_tags($_POST["novelle"]);
$stmt->execute();

// Til test
//echo "Data blev oprettet";

$stmt->close();
$conn->close();

header("Location: ../index.php");
die();
?>