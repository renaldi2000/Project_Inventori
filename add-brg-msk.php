<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Inventory ATK</title>
</head>
<style>
* {
    margin: 0;
    padding: 0;
}

.home {
    width: 50%;
    height: 50%;
    margin-top: 130px;
    margin-left: 450px;
    padding-top: 60px;
    background-color:gray;
    color: white;
    border-bottom: 2px solid black;
    overflow: auto;
    position: fixed;
    border: 2px solid;
    border-radius: 20px 20px 20px;
    box-shadow: 5px 5px 20px 20px #888888;
}

.home h1 {
    letter-spacing: 5px;
    line-height: 80px;
    text-shadow: 10px 10px 8px red;
}

.navbar {
    text-align: center;
    width: 100%;
    padding-bottom: 15px;
    padding-top: 20px;
    background-color: darkorange;
    border-bottom: 2px solid black;
    overflow: auto;
    position: fixed;
}

.navbar h1 {
    display: inline;
    padding-left: 100px;
    margin-top: 50px;
    letter-spacing: 5px;
}

.navbar a {
    margin-left: 90%;
    margin-top: 10px;
    font-size: 1.5em;
    text-decoration: none;
    color: white;
    font-family: sans-serif;  
    border: 2px solid black;
    border-radius: 5px 5px 5px;
    padding: 5px 10px;
    background-color: blue;
}

img {
    margin-left: 30px;
}

button {
    display: inline-block;
    padding: 10px 10px 10px 10px;
    margin-left: 10px;
    border-radius: 10px 10px 10px;
    color: black;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    cursor: pointer;
    border: 2px solid #04AA6D;
}
button:hover {
    background-color:chartreuse;
    color: black;
    transition-duration: 0.5s;
  }

.menu {
    width: 220px;
    height: 100%;
    background-color:whitesmoke;
    border-right: 2px solid black;
    padding-top: 10px;
    position: fixed;
}

.menu h1  {
    display: block;
    font-size: 1.5em;
    text-align: center;
    margin-bottom: -20px;
}

.data h4 {
    border-bottom: 1px solid black;
    text-align: center;
    margin-top: 30px;
    padding-top: 20px;
}

.data a {
    display: inline-block;
    text-decoration: none;
    color: black;
    padding-top: 10px;
    margin-left: 10px;
    margin-bottom: 10px;
}

#icon {
    margin-left:40px;
    margin-top: 10px;
}

.form {
    display: inline-block;
    width: 80%;
    height: 80%;
    position:absolute ;
    margin-top: 100px;
    margin-left: 250px;
    padding-top: 10px;
    text-align: center;
}

.tambah {
    float: right;
    text-decoration: none;
    border: 2px solid black;
    padding: 5px 5px 5px 5px;
    border-radius: 10px 10px 10px;
    color: black;
    font-size: 1.5em;
    margin-top: 15px;
}

.tambah:hover {
    background-color: cyan;
    transition-duration: 0.5s;
}

form {
    width: 100%;
    margin-top: 10px;
    padding-left: 10px;
}

.form h1 {
    border-bottom: 2px solid black;
    padding-bottom: 1%;
}

label {
    font-size: 1.5em;
}

input {
    padding: 10px;
    border-radius: 5px 5px 5px;
    border: 1px solid black;
    margin-left: 10px;
    margin-bottom: 5px;
}

input[type="search"] {
    margin-left: 150px;
}

textarea {
    border-radius: 5px 5px 5px;
    padding: 5px 5px 10px 10px;
}  

th {
    background-color: blue;
    border-collapse: collapse;
    color: white;
    font-size: 1.5em;
    font-family: 'Times New Roman', Times, serif;
}

td {
    border-collapse: collapse;
    font-weight: bold;
    font-size: 1.2em;
    padding-left: 5px;
    padding-right: 5px;
}

tr:nth-child(even) {
    background-color: gray;
}

.edit {
    text-decoration: none;
    color: white;
    border-radius: 10px 10px 10px;
    border: 1px solid black ;
    padding: 5px 5px 5px 5px;
    margin: 10px 10px 10px 10px;
    background-color: darkcyan;
}
.delete {
    text-decoration: none;
    color: white;
    border-radius: 10px 10px 10px;
    border: 1px solid black ;
    padding: 5px 5px 5px 5px;
    background-color: darkred;
}
.word {
    text-decoration: none;
    border: 3px solid black;
    border-radius: 10px 10px 10px;
}
</style>
<body>
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
            <a href="list-brg-keluar.php">Permintaan Barang</a>
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
<section>
    <div class="form">
        <h1>FORM BARANG KELUAR</h1>
        <br>
            <form action="insert-brg-msk.php" method="post">
                <label for="nama_barang">Nama Barang :</label>   
                <br><br>
                <input type="text" name="nama_barang" id="" required>
                <br><br>
                <label for="tambah_barang">Jumlah Barang Masuk :</label> 
                <br><br>  
                <input type="text" name="tambah_barang" id="" required>
                <br><br>
                <div>
                    <button type="submit" onclick='alert("Tambah Data Berhasil !")'>Tambah Data</button>
                </div>
            </form> 
    </div>
</section>
<script src="https://kit.fontawesome.com/173b90739f.js" crossorigin="anonymous"></script>
</body>
</html>