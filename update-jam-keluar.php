<?php
include('koneksi.php');

$id = $_GET['id_parkir'];

$query = "UPDATE tbl_parkir SET jam_keluar = NOW() WHERE id_parkir = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>