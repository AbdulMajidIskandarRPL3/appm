<?php 
    include "koneksi.php";
    $cek_user=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pengaduan WHERE isi_laporan='$_POST[isi_laporan]'"));
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
        $isi_laporan = $_POST['isi_laporan'];
        $nama_gambar= @$_FILES['gambar']['name'];
        $tmp_gambar= @$_FILES['gambar']['tmp_name'];
        $fotobaru = date('dmYHis').$gambar;
         if(!empty($nama_gambar)){
             copy($tmp_gambar, "gambar/$nama_gambar");
        }
        mysqli_query($koneksi,"INSERT INTO pengaduan (nik, nama, isi_laporan, gambar)
        VALUES ('','$nik', '$nama', '$isi_laporan', 'gambar/$nama_gambar'), or die(mysqli_error($koneksi))");
        
        
    }
?>