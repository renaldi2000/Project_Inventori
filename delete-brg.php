<?php 
include("koneksi.php");
$id = $_GET['id'];

$delete = mysqli_query($koneksi,"DELETE FROM barang WHERE id ='$id'");

header("Location: list-brg.php");

?>