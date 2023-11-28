<?php
include("config.php");


if(isset($_POST['simpan'])){


    $idtanaman = $_POST['idtanaman'];
    $namatanaman = $_POST['namatanaman'];
    $jenistanaman = $_POST['jenistanaman'];
    $tglpenanaman = $_POST['tglpenanaman'];
    $lokasitanaman = $_POST['lokasitanaman'];


    $sql = "UPDATE tbl_tanaman SET nama_tanaman='$namatanaman',
    jenis_tanaman='$jenistanaman', tgl_penanaman='$tglpenanaman',
    lokasi_tanaman= '$lokasitanaman' WHERE id_tanaman='$idtanaman'";
    $query = mysqli_query($conn, $sql);


    if( $query ) {

        echo "<script>alert('Data Telah Berhasil Di Edit');window.location='Dashboard.php'</script>";
    } else {

        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}
?>