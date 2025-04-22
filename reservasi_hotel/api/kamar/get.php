<?php
include_once "../../config/database.php";

$query = "SELECT * FROM kamar";
$stmt = $conn->prepare($query);
$stmt->execute();

$kamar = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($kamar);
?>
