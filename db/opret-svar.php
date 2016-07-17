<?php
require "connect.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO svar (indlaegsid,brugernavn,indhold) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $indlaegsid, $brugernavn, $indhold);

// set parameters and execute
$indlaegsid = strip_tags($_POST["indlaegId"]);
$brugernavn = "Jan_Skov_Kristensen";
$indhold = strip_tags($_POST["indhold"]);
$stmt->execute();

echo "New records created successfully";



$sql = "UPDATE indlaeg SET antalSvar=antalSvar+1 WHERE id=$indlaegsid";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}


/*
$stmt = 'UPDATE indlaeg SET antalSvar = antalSvar + 1 WHERE ( indlaegsid = $indlaegsid )';
$prepStatement = $pdo->prepare($stmt);
$prepStatement->execute(array(':indlaegsid' => $indlaegsid));
*/

$stmt->close();
$conn->close();

header("Location: ../indlaeg.php?id=$indlaegsid");
die();
?>