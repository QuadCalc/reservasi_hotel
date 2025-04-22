<?php
include_once "../../config/database.php";

$data = json_decode(file_get_contents("php://input"));

$query = "INSERT INTO reservasi (id_tamu, id_kamar, tanggal_checkin, tanggal_checkout)
          VALUES (:id_tamu, :id_kamar, :checkin, :checkout)";

$stmt = $conn->prepare($query);
$stmt->bindParam(":id_tamu", $data->id_tamu);
$stmt->bindParam(":id_kamar", $data->id_kamar);
$stmt->bindParam(":checkin", $data->tanggal_checkin);
$stmt->bindParam(":checkout", $data->tanggal_checkout);

if ($stmt->execute()) {
    echo json_encode(["message" => "Reservasi berhasil."]);
} else {
    echo json_encode(["message" => "Reservasi gagal."]);
}
?>
