<?php
include "../../koneksi.php";
$id_pengaduan = $_POST['id_pengaduan'];
$id_petugas = $_POST['id_petugas'];
$tanggapan = $_POST['tanggapan']; 
var_dump($tanggapan);
$tgl = date("y-m-d");
$st = 'selesai';

$simpan=mysqli_query($koneksi,"INSERT INTO tanggapan(id_pengaduan, id_petugas, tanggapan, tgl_pengaduan) 
VALUES('$id_pengaduan','$id_petugas', '$tanggapan', '$tgl')");
$update_st = mysqli_query($koneksi, "UPDATE pengaduan SET status='$st' WHERE id_pengaduan='$id_pengaduan'");
if($simpan){
    ?>
    <script type="text/javascript">
    alert ('Pengaduan Berhasil Ditanggapi');
    window.location="tanggapan.php";
    </script>
<?php
}else{?>
    <script type="text/javascript">
    alert ('Pengaduan gagal Ditanggapi');
    window.location="tanggapan.php";
    </script>
<?php

}

?>