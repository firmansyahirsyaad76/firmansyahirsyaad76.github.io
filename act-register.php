<?php

include ("config.php");

if( isset($_POST['masuk']) ){
    $username = $_POST['username'];
    $password = $_POST['password'];

$sql = "INSERT INTO tbl_login (username, password) VALUE
('$username', '$password')";
$query = mysqli_query($conn, $sql);

    if($query) {
        echo "<script>alert('Registrasi Berhasil');window.location='index.php?'</script>";
    }else{
        die("gagal registrasi...");
    }
    }
    ?>