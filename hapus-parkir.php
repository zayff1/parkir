<?php

include('koneksi.php');

//get id
$id = $_GET['id_parkir'];

$query = "DELETE FROM tbl_parkir WHERE id_parkir = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>