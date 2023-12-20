<?php 
include("koneksi.php");
$id = $_GET['id'];

$delete = mysqli_query($koneksi,"DELETE FROM barang_masuk WHERE id ='$id'");

header("Location: list-brg-msk.php");

?>