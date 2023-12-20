<?php
include("koneksi.php");
$id = $_GET['id'];

$query = mysqli_query($koneksi,"SELECT * FROM barang_keluar WHERE id ='$id'");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Inventory ATK</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<html>
<section>
    <div class="navbar">
    <h1>APLIKASI INVENTORY ATK</h1>
    </div>
    </section>
    <section>
    <div class="menu"> 
        <img src="logo1.jpeg" alt="" width="150px" height="125px">
        <div class="data">
            <h4>DATA MASTER</h4>
            <i class="fa-brands fa-supple" id="icon"></i>
            <a href="list.php">Supplier</a>
            <br>    
            <i class="fa-solid fa-boxes-stacked" id="icon"></i>
            <a href="list-brg.php">Barang</a>
            <h4>TRANSAKSI</h4>
            <i class="fa-solid fa-truck-moving" id="icon"></i>
            <a href="list-brg-msk.php">Barang Masuk</a>
            <i class="fa-solid fa-cart-flatbed" id="icon"></i>
            <a href="#">Permintaan Barang</a>
            <h4>REPORT</h4>
            <i class="fa-solid fa-box-archive" id="icon"></i>
            <a href="#">Laporan</a>
            <h4>SETTING</h4>
            <i class="fa-regular fa-user" id="icon"></i>
            <a href="#">User Management</a>    
        </div>
    </div>
</section>
<section>
    <div class="form">
        <h1>EDIT DATA BARANG</h1>
    <br>
    <form action="update-brg-keluar.php" method="post">
        <input type="hidden" name="id" value='<?php echo $result[0]['id']?>'>
        <label for="">Tgl Transaksi :</label>
        <input type="date" name="tgl_transaksi" value='<?php echo $result[0]['tgl_transaksi']?>'>
        <br><br>
        <label for="">Nama Barang :</label>
        <input type="text" name="nama_karyawan" value='<?php echo $result[0]['nama_karyawan']?>'>
        <br><br>
        <label for="">Nama Barang :</label>
        <input type="text" name="nama_barang" value='<?php echo $result[0]['nama_barang']?>'>
        <br><br>
        <label for="">Tambah Barang :</label>
        <input type="text" name="jumlah_barang_keluar" value='<?php echo $result[0]['jumlah_barang_keluar']?>'>
        <br><br>
        <div>
        <button type="submit" onclick="alert('Edit Data Berhasil!')">Update Data</button>
        </div>
    </form>
</div>
</section>
</body>
<script src="https://kit.fontawesome.com/173b90739f.js" crossorigin="anonymous"></script>
</html>