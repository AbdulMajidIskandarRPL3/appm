<?php
ob_start();
session_start();
        include "../../koneksi.php";
        $sql=mysqli_query($koneksi, "UPDATE pengaduan SET status='proses' WHERE id_pengaduan='$_GET[id]'");
        if($sql)
        {
            header('location:tanggapan.php');
        }
?> 