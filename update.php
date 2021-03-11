<?php 
 
include 'koneksi.php';
$_SESSION['akun_id'] = ['id_user'];
$_SESSION['akun_nik'] = ['nik'];       
$_SESSION['akun_nama'] = ['nama'];
$_SESSION['akun_username'] = ['username'];
$_SESSION['akun_password'] = ['password'];
$_SESSION['akun_telp'] = ['telp'];
$_SESSION['akun_foto'] = ['foto'];
$_SESSION['akun_alamat'] = ['alamat'];
 
mysqli_query($koneksi, "UPDATE user SET nik='$_SESSION[akun_nik]', nama='$_SESSION[akun_nama]', username='$_SESSION[akun_username]', password='$_SESSION[akun_password]', telp='$_SESSION[akun_telp]', foto='$_SESSION[akun_foto]', alamat='$_SESSION[akun_alamat]' WHERE id_user='$_SESSION[akun_id] '");
 
header("location:profil.php?pesan=update");
 
?>