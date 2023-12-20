<?php 
include("koneksi.php");
$id = $_POST['id'];
$jumlah = $_POST["nama_barang"];
$harga = $_POST["tambah_barang"];


$update = mysqli_query($koneksi, "UPDATE barang_masuk SET nama_barang='$jumlah', tambah_barang='$harga' WHERE id ='$id'");
    
header("Location: list-brg-msk.php");

?>