<?php

include("config.php");

if( isset($_GET['id_tanaman']) ){


    $idtanaman = $_GET['id_tanaman'];


    $sql = "DELETE FROM tbl_tanaman WHERE id_tanaman=$idtanaman";
    $query = mysqli_query($conn, $sql);


    if( $query ){
        echo "<script>alert('Data Berhasil Di Hapus');window.location='Dashboard.php'</script>";
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>