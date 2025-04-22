<?php
include_once "../../config/database.php";

$data = json_decode(file_get_contents("php://input"));

$query = "INSERT INTO kamar (nomor_kamar, tipe_kamar, harga_per_malam, status) 
          VALUES (:nomor, :tipe, :harga, :status)";

$stmt = $conn->prepare($query);
$stmt->bindParam(":nomor", $data->nomor_kamar);
$stmt->bindParam(":tipe", $data->tipe_kamar);
$stmt->bindParam(":harga", $data->harga_per_malam);
$stmt->bindParam(":status", $data->status);

if ($stmt->execute()) {
    echo json_encode(["message" => "Kamar berhasil ditambahkan."]);
} else {
    echo json_encode(["message" => "Gagal menambahkan kamar."]);
}
?>
