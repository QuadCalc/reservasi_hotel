<?php
include_once "../../config/database.php";

$data = json_decode(file_get_contents("php://input"));

$query = "INSERT INTO tamu (nama, email, no_telepon)
          VALUES (:nama, :email, :no_telepon)";

$stmt = $conn->prepare($query);
$stmt->bindParam(":nama", $data->nama);
$stmt->bindParam(":email", $data->email);
$stmt->bindParam(":no_telepon", $data->no_telepon);

if ($stmt->execute()) {
    echo json_encode(["message" => "Tamu berhasil ditambahkan."]);
} else {
    echo json_encode(["message" => "Gagal menambahkan tamu."]);
}
?>
