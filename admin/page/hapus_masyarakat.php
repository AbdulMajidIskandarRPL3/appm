<?php
include "../../koneksi.php";
    $id=$_GET['id'];
        $sql=mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id'");
        if($sql){
            echo '<script language="javascript">
                  alert ("Data berhasil Dihapus!");
                  window.location="data_petugas.php";
                  </script>';
                  exit();
        }
?>