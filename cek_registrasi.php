<?php 
    include "koneksi.php";
    $cek_user=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM user WHERE nik='$_POST[nik]'"));
    if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("No NIK Sudah Anda Gunakan");
              window.location="registrasi.php";
              </script>';
              exit();
    }
    else {
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $telp = $_POST['telp'];
   
        mysqli_query($koneksi,"INSERT INTO user (nik, nama, username, password, telp, foto)
        VALUES ('$nik', '$nama', '$username', '$password', '$telp', 'gambar/user.png')");
        
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan! Anda akan Langsung Dialihkan Ke Menu Login");
              window.location="index.php";
              </script>';
              exit();
    }
?>