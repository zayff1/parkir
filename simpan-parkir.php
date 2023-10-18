<?php

include('koneksi.php');

$plat_nomor     = $_POST['plat_nomor'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];

$query = "INSERT INTO tbl_parkir (plat_nomor, jenis_kendaraan, jam_masuk) VALUES ('$plat_nomor', '$jenis_kendaraan', NOW())";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "Data Gagal Disimpan!";
}

?>