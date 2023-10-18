<?php

//include koneksi database
include('koneksi.php');

$id = $_POST['id'];
//get data dari form
$jenis_kendaraan  = $_POST['jenis_kendaraan'];
$plat_nomor     = $_POST['plat_nomor'];
$jam_masuk       = $_POST['jam_masuk'];
$jam_keluar       = $_POST['jam_keluar'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_parkir SET jenis_kendaraan = '$jenis_kendaraan', plat_nomor = '$plat_nomor' WHERE id_parkir = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>