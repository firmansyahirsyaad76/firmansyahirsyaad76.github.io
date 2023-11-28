<?php
include("config.php");

if( !isset($_GET['id_tanaman']) ){
    header('Location: data.php');
}

$id = $_GET['id_tanaman'];

$sql = "SELECT * FROM tbl_tanaman WHERE id_tanaman=$id";
$query = mysqli_query($conn, $sql);
$tanaman = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sistem Informasi Adiwiyata SMK N 2 Yogyakarta</title>
        <link rel="stylesheet" type="text/css" href="asset/bootstrap/css/bootstrap.css">
        <style>
    * {
    text-decoration: none;
    margin: 0px;
}

    header {
        width: 100%;
        margin: auto;
        display: flex;
        line-height: 10px;
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
        background: linear-gradient(to right, #E0FFFF,#DCDCDC,#E0FFFF);
    }

    .invalid-feedback {
        display: none;
        width: 100%;
        margin-top: 0;
        margin-bottom: 0;
        font-size: 80%;
        color: #dc3545;
    }

    .valid-feedback {
        display: none;
        width: 100%;
        margin-top: 0;
        margin-bottom: 0;
        font-size: 80%;
        color: #28a745;
}

    .wrap {
        width: 45%;
        margin: auto;
        color: black;
        font-family: comic sans ms;
        background-color: #DCDCDC;
    }

    .container {
        padding: 5px;
        margin: 15px 0px;
    }
    
    form {
        padding: 15px;
    }

    label {
        margin: 10px -5px;
    }

    .label1 {
        margin: 0px 90px;
        padding: 18px 0px;
    }

    text {
        margin: 10px -20px;
    }

    .text {
        margin: 0px -135px;
        padding: 10px 205px 10px 20px;
    }

    .text1 {
        padding: 10px 205px 10px 20px;
    }

    .text2 {
        padding: 13px 205px 0px 20px;
    }

    .text3 {
        padding: 13px 205px 0px 20px;
    }

    .text4 {
        padding: 13px 205px 0px 20px;
    }

    .date {
        margin: 0px -135px;
        padding: 13px 205px 0px 20px;
    }

    .simpan {
        width: 65px;
        height: 30px;
        border-radius: 10px;
        font-family: calibri;
        font-weight: bold;
        font-size: 14px;
        outline: none;
        background-color: #0b0b0b;
        color: #ffffff;
        border: none;
        margin: 10px 0px 10px 350px;
    }

    .simpan:hover {
        background: #6c757d;
        text-decoration: none;
        color: black; 
    }
    </style>
</head>
<body>
<div class="wrap">
    <div class="container">
    <header>
        <h3>INPUT DATA TANAMAN</h3>
</header>
<form  class="needs-validation" action="act-simpan-edit.php" method="POST" novalidate>
    <fieldset>
    <div class="form-row">
            <label for="id_tanaman" class="col-sm-4 col-form-label offset-sm-2 label1">ID Tanaman: </label>
            <div class="col-sm-4 offset-sm-0">
                <div class="text text1">
            <input type="text"  class="form-control" name="idtanaman" value="<?php echo $tanaman['id_tanaman']?>" placeholder="Masukan ID Tanaman" required>
            <div class="invalid-feedback">Pertanyaan ini wajib diisi!</div>
            <div class="valid-feedback">Oke!</div>
            </div>
            </div>
</div>
            <div class="form-row">
            <label for="nama_tanaman" class="col-sm-4 col-form-label offset-sm-2 label1">Nama Tanaman: </label>
            <div class="col-sm-4 offset-sm-0">
            <div class="text text2">
            <input type="text" class="form-control" name="namatanaman" value="<?php echo $tanaman['nama_tanaman']?>" placeholder="Masukan Nama Tanaman" required>
            <div class="invalid-feedback">Pertanyaan ini wajib diisi!</div>
            <div class="valid-feedback">Oke!</div>
            </div>
</div>
</div>
            <div class="form-row">
            <label for="jenis_tanaman" class="col-sm-4 col-form-label offset-sm-2 label1">Jenis Tanaman: </label>
            <div class="col-sm-4 offset-sm-0">
            <div class="text text3">
            <input type="text"  class="form-control" name="jenistanaman" value="<?php echo $tanaman['jenis_tanaman']?>" placeholder="Masukan Jenis Tanaman" required>
            <div class="invalid-feedback">Pertanyaan ini wajib diisi!</div>
            <div class="valid-feedback">Oke!</div>
            </div>
            </div>
</div>
            <div class="form-row">
            <label for="tgl_penanaman" class="col-sm-4 col-form-label offset-sm-2 label1">Tanggal Penanaman: </label>
            <div class="col-sm-4 offset-sm-0">
                <div class="date">
            <input type="date" class="form-control is-invalid" name="tglpenanaman" value="<?php echo $tanaman['tgl_penanaman']?>" required>
            <div class="valid-feedback">Oke!</div>
            </div>
            </div>
</div> 
<div class="form-row">
            <label for="lokasi_tanaman" class="col-sm-4 col-form-label offset-sm-2 label1">Lokasi Tanaman: </label>
            <div class="col-sm-4 offset-sm-0">
            <div class="text text4">
            <input type="text"  class="form-control" name="lokasitanaman" value="<?php echo $tanaman['lokasi_tanaman']?>" placeholder="Masukan Lokasi Tanaman" required>
            <div class="invalid-feedback">Pertanyaan ini wajib diisi!</div>
            <div class="valid-feedback">Oke!</div>
            </div>
            </div>
</div>
<div class="form-row">
<div class="offset-sm-0">
    <input type="submit" value="simpan" name="simpan" class="simpan" />
    </div>
    </div>
</fieldset>
</form>
</div>
</div>
<script>
    // Self-executing function
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</body>
</html>