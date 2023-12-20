<?php 
    include("koneksi.php");

    $nama = $_POST["nama"];
    $no_tlp = $_POST["no_tlp"];
    $alamat = $_POST["alamat"];

    $insert = mysqli_query($koneksi,"INSERT INTO supplier SET nama='$nama', alamat='$alamat', no_tlp='$no_tlp'");
        
    header("Location: list.php");
?>
