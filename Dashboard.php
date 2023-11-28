<?php include("config.php"); ?>
<link rel="stylesheet" type="text/css" href="asset/bootstrap/css/bootstrap.css">
<!DOCTYPE html>
<html>
    <head>
        <title>Sistem   Informasi Adiwiyata SMK N 2 Yogyakarta</title>
        <style>
    * {
    text-decoration: none;
    margin: 0px;
}

    header {
        width: 100%;
        margin: auto;
        display: flex;
        line-height: 20px;
        position: sticky;
        position: -webkit-sticky;
        top: 0;
        background: #40E0D0;
        z-index: 1;
        border: 1px solid black;    
    }

    h3 {
        margin: 50px;
        margin-bottom: 40px;
        font-size: 30px;
        font-weight: 1600;
        font-family: calibri;
        color: black;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        background:url('images/kota.jpg');
        background-size:1280px 610px; 
        background-position:center;
        background-repeat: no-repeat;
    }

    table {
        background: white;
        font-family: sans-serif;
        font-size: 10pt;
        border-collapse: collapse;
        width: 50%;
        border: 1px solid #cccccc;
        margin: -40px 312px ;
    }

    table tr th {
        background: blue;
        color: #fff;
        font-weight: normal;
        height: 30px;
    }

    table, th, td {
        padding: 3px;
        height: 25px;
        text-align: center;
    }

    table tr:nth-child(even) {
        background: lightblue;
        color: black;
    }

    nav {
        position: relative;
        margin: 30px;
        top: 0;
    }

    nav button {
        width: 130px;
        height: 42px;
        border-radius: 10px;
        font-family: calibri;
        font-weight: bold;
        font-size: 14px;
        outline: none;
        margin: 0px 280px -5px;
    }

    .tambah-btn {
        background-color: black;
        color: white;
        border: none;
    }

    .tambah-btn:hover {
        background: silver;
        text-decoration: none;
        color: black; 
    }

    p {
        text-align: center;
        border-radius: 10px;
        font-family: calibri;
        font-weight: bold;
        font-size: 20px;
        outline: none;
        margin: 60px;
    }

    .btn-edit {
        border: 1px solid #FF0000;
        background: #FF0000 url('images/edit.png') no-repeat 5px 4px;
        height: 22px;
        padding-left: 15px;
        padding-top: 5px;
        color: white;
    }

    .btn-edit:hover {
        border: 1px solid #00FF00;
        background: #00FF00  url('images/edit.png') no-repeat 5px 4px;
    }

    .btn-delete {
        border: 1px solid #00FF00 ;
        background: #00FF00 url('images/hapus.png') no-repeat 5px 4px;
        height: 22px;
        padding-left: 15px;
        padding-top: 5px;
        color: white;
    }

    .btn-delete:hover {
        border: 1px solid #FF0000;
        background: #FF0000 url('images/hapus.png') no-repeat 5px 4px;
    }
</style>
</head>
<body>
            <header>
                <h3>SISTEM INFORMASI ADIWIYATA SMK N 2 YOGYAKARTA</h3>
</header>

<nav>
    <a href="frm-input.php">
        <button class="tambah-btn">Tambah Data Baru
        </button>
    </a>
</nav>

<br>

<table border="1" align="center" >
    <thead>
        <tr>
            <th>ID Tanaman</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Tanggal Penanaman</th>
            <th>Lokasi Tanaman</th>
            <th>Aksi</th>
</tr>
</thead>
<tbody>

<?php
$sql = "SELECT * FROM tbl_tanaman";
$query = mysqli_query($conn, $sql);

while($tanaman = mysqli_fetch_array($query)){
    echo "<tr>";

    echo"<td>".$tanaman['id_tanaman']."</td>";
    echo"<td>".$tanaman['nama_tanaman']."</td>";
    echo"<td>".$tanaman['jenis_tanaman']."</td>";
    echo"<td>".$tanaman['tgl_penanaman']."</td>";
    echo"<td>".$tanaman['lokasi_tanaman']."</td>";


    echo "<td>";
    echo "<a href='frm-edit.php?id_tanaman=".$tanaman['id_tanaman']."'>
    <button class='btn-edit'<input type='images' class='btn-edit'>
    </button>
    </a> | ";
    echo "<a href='act-delete.php?id_tanaman=".$tanaman['id_tanaman']."' onclick=\"return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')\">
    <button class='btn-delete'<input type='images' class='btn-delete'>
    </button>
    </a>";
    echo "</td>";

    echo "</tr>";
}
?>
</tbody>
</table>
<p> Total: <?php echo mysqli_num_rows($query) ?></p> 
</body>
</html>