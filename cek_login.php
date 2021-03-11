<?php

    //panggil kneksi database
    include "koneksi.php";
 
    if(isset($_POST['submit_login']));
    $username =  $_POST['username'];
    $password =  $_POST["password"];

    //cek username, terdaftar atau tidak
    $sql_login = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    $cek=mysqli_num_rows($sql_login);
    //jika username terdaftar maka
    if($cek>0) {
        $row_akun = mysqli_fetch_array($sql_login);
        session_start();
        $_SESSION['akun_pengaduan'] = $row_akun['id_pengaduan'];
        $_SESSION['akun_id'] = $row_akun['id_user'];
        $_SESSION['akun_nik'] = $row_akun['nik'];       
        $_SESSION['akun_nama'] = $row_akun['nama'];
        $_SESSION['akun_username'] = $row_akun['username'];
        $_SESSION['akun_password'] = $row_akun['password'];
        $_SESSION['akun_telp'] = $row_akun['telp'];
        $_SESSION['akun_foto'] = $row_akun['foto'];
        $_SESSION['akun_alamat'] = $row_akun['alamat'];
            //uji level user
            header("location: user.php");
        } else {
            echo "<script>alert('Maaf login anda gagal, password anda tidak sesuai');
            document.location='index.php'</script>";
        }
    