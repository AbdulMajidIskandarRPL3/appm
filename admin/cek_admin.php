<?php

    //panggil kneksi database
    include "koneksi.php";

    if(isset($_POST['submit_login']));
    $username =  $_POST['username'];
    $password =  $_POST["password"];
    $level =  $_POST["level"];

    //cek username, terdaftar atau tidak
    $sql_login = mysqli_query($koneksi, "SELECT * FROM petugas WHERE username = '$username' AND and level='$level'");
    $cek=mysqli_num_rows($sql_login);
    if($cek>0) {
    //jika username terdaftar maka
    $row_akun = mysqli_fetch_array($sql_login);
    session_start();
    $_SESSION['akun_id'] = $row_akun['id_petugas'];       
    $_SESSION['akun_nama'] = $row_akun['nama_petugas'];
    $_SESSION['akun_username'] = $row_akun['username'];
    $_SESSION['akun_password'] = $row_akun['password'];
    $_SESSION['akun_telepon'] = $row_akun['telepon'];
    $_SESSION['akun_level'] = $row_akun['level'];

            //uji level user
            if($level == "Admin"){
                header('location:admin/admin.php');
            } elseif ($level == "petugas"){
                header('location:petugas/petugas.php');
            }
        } else {
            echo "<script>alert('Maaf login anda gagal, password anda tidak sesuai');
            document.location='index.php'</script>";
        }
    