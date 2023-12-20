<?php 
    include("koneksi.php");
    
    $tgl = $_POST["tgl_transaksi"];
    $karyawan = $_POST["nama_karyawan"];
    $nama = $_POST["nama_barang"];
    $jumlah = $_POST["jumlah_barang_keluar"];

    $insert = mysqli_query($koneksi,"INSERT INTO barang_keluar SET tgl_transaksi = '$tgl', nama_karyawan='$karyawan', nama_barang='$nama', jumlah_barang_keluar='$jumlah'");
        
    header("Location: list-brg-keluar.php");
?>