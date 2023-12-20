<?php 
    include("koneksi.php");

    $nama = $_POST["nama_barang"];
    $jumlah = $_POST["tambah_barang"];

    $insert = mysqli_query($koneksi,"INSERT INTO barang_masuk SET nama_barang='$nama', tambah_barang='$jumlah'");
        
    header("Location: list-brg-msk.php");
?>