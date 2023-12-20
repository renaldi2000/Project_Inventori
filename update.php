<?php 
include("koneksi.php");
$id = $_POST['id'];
$nama = $_POST["nama"];
$no_tlp = $_POST["no_tlp"];
$alamat = $_POST["alamat"];


$update = mysqli_query($koneksi, "UPDATE supplier SET nama='$nama', alamat='$alamat', no_tlp='$no_tlp' WHERE id ='$id'");
    
header("Location: list.php");

?>