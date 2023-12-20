<?php 
include("koneksi.php");
$id = $_GET['id'];

$delete = mysqli_query($koneksi,"DELETE FROM supplier WHERE id ='$id'");

header("Location: list.php");

?>