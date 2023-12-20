<?php 
    include("koneksi.php");

    $nama = $_POST["nama_barang"];
    $jumlah = $_POST["jumlah_barang"];
    $harga = $_POST["harga_satuan"];
    $total = $_POST["total_harga"];  

    $insert = mysqli_query($koneksi,"INSERT INTO barang SET nama_barang='$nama', jumlah_barang='$jumlah', harga_satuan='$harga', total_harga='$total'");
        
    header("Location: list-brg.php");
?>
