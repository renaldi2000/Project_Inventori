<?php 
include("koneksi.php");
$id = $_POST['id'];
$nama = $_POST["nama_barang"];
$jumlah = $_POST["jumlah_barang"];
$harga = $_POST["harga_satuan"];
$total = $_POST["total_harga"];


$update = mysqli_query($koneksi, "UPDATE barang SET nama_barang='$nama', jumlah_barang='$jumlah', harga_satuan='$harga', total_harga='$total' WHERE id ='$id'");
    
header("Location: list-brg.php");

?>