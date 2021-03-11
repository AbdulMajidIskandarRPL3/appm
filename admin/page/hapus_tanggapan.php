<?php
include "../../koneksi.php";
    $id=$_GET['id'];
        $sql=mysqli_query($koneksi, "DELETE FROM tanggapan WHERE id_tanggapan='$id'");
        if($sql){
            echo '<script language="javascript">
                  alert ("Data berhasil Dihapus!");
                  window.location="data_tanggapan.php";
                  </script>';
                  exit();
        }
?>