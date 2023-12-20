<?php 
include("koneksi.php");

$id = $_POST['id'];
$karyawan = $_POST["nama_karyawan"];
$jumlah = $_POST["nama_barang"];
$harga = $_POST["jumlah_barang_keluar"];


$update = mysqli_query($koneksi, "UPDATE barang_keluar SET nama_karyawan='$karyawan', nama_barang='$jumlah', jumlah_barang_keluar='$harga' WHERE id ='$id'");
    
header("Location: list-brg-keluar.php");

?>