<?php
require_once "../../db-connect/koneksi.php";

$lapangan_id     = $_POST['lapangan_id'];
$nama_lapangan   = $_POST['nama_lapangan'];
$harga           = $_POST['harga'];

$tanggal = "2025-08-20";

$jam_mulai_random = rand(8, 22); 
$waktu_mulai = sprintf("%02d:00:00", $jam_mulai_random);

$durasi = rand(1, 2);  
$jam_selesai = $jam_mulai_random + $durasi;

if ($jam_selesai > 24) {
    $jam_selesai = $jam_selesai - 24; 
}

$waktu_selesai = sprintf("%02d:00:00", $jam_selesai);

$status = "paid";

$query = "INSERT INTO booking_lapangan 
(lapangan_id, nama_lapangan, tanggal, waktu_mulai, waktu_selesai, harga, status)
VALUES 
('$lapangan_id', '$nama_lapangan', '$tanggal', '$waktu_mulai', '$waktu_selesai', '$harga', '$status')";

mysqli_query($connection, $query);

header("Location: pop-up.php");
exit;
?>
