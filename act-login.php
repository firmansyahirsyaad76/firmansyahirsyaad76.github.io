<?php

include ("config.php");

if( isset($_POST['login']) ){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($conn, "SELECT * FROM tbl_login WHERE username='$username' AND password='$password'");

    if(mysqli_num_rows ($data)) {
        echo "<script>alert('Login Berhasil');window.location='Dashboard.php?'</script>";
    }else{
        die("gagal login...");
    }
    }
    ?>