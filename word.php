<?php
include("koneksi.php");

header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=Laporan.doc");

$keyword = $_GET['keyword'];

$query = mysqli_query($koneksi,"SELECT barang_keluar.tgl_transaksi, barang_keluar.nama_karyawan, barang_keluar.nama_barang, barang_keluar.jumlah_barang_keluar, barang_masuk.tambah_barang
FROM barang_keluar INNER JOIN barang_masuk ON barang_keluar.id = barang_masuk.id");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LAPORAN</h1>
    <table border="3" width='100%' height='20%'>
        <tr>
            <th colspan="7" height='60px'>LAPORAN</th>
        </tr>
        <tr height="70px">
            <th width="150px">Tgl <br> Transaksi</th>
            <th width="200px">Nama <br> Karyawan</th>
            <th width="200px">Nama <br> Barang Keluar</th>
            <th width="200px">Jumlah <br> Barang Keluar</th>
            <th width="200px">Tambah <br> Barang Supplier</th>
        <tr>    
        <?php foreach ($results as $result) :?> 
            <td height="50px"><?php echo $result['tgl_transaksi']?></td>
            <td><?php echo $result['nama_karyawan']?></td>
            <td><?php echo $result['nama_barang']?></td>
            <td><?php echo $result['jumlah_barang_keluar']?></td>
            <td><?php echo $result['tambah_barang']?></td>
        </tr>
        <?php endforeach;?>
    </table>
</div>
</section>
</body>
</html>

