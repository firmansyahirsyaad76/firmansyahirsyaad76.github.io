<?php
include("config.php");

if(isset($_POST['simpan'])){


    $idtanaman = $_POST['id_tanaman'];
    $namatanaman = $_POST['nama_tanaman'];
    $jenistanaman = $_POST['jenis_tanaman'];
    $tglpenanaman = $_POST['tgl_penanaman'];
    $lokasitanaman = $_POST['lokasi_tanaman'];


    $sql = "INSERT INTO tbl_tanaman
    (id_tanaman, nama_tanaman, jenis_tanaman, tgl_penanaman, lokasi_tanaman) VALUE
    ('$idtanaman', '$namatanaman', '$jenistanaman', '$tglpenanaman', '$lokasitanaman')";
    $query = mysqli_query($conn, $sql);

    if( $query ) {
        echo "<script>alert('Data Telah Berhasil Di Simpan');window.location='Dashboard.php?status=sukses'</script>";
    } else {

        header('Location: data.php?status=gagal');
    }
    
} else {
    die("Akses dilarang...");
}
?>