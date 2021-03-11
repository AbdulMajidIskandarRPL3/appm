<?php
//proses simpan data
include "koneksi.php";
$proses=mysqli_escape_string($koneksi, @$_GET['proses']);
if($proses=="simpan"){
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $isi_laporan=$_POST['isi_laporan'];
    $nama_gambar=@$_FILES['gambar']['name'];
    $tmp_gambar=@$_FILES['gambar']['tmp_name'];
    $fotobaru = date('dmYHis').$nama_gambar;
    if(!empty($fotobaru)){
        copy($tmp_gambar, "assets/brand/$fotobaru");
    }
    $tgl_pengaduan=date("Y-m-d");
    $simpan=mysqli_query($koneksi,"INSERT INTO laporan(nik, nama, isi_laporan, gambar, tgl_pengaduan) VALUES('$tgl_pengaduan','$nik',$nama','$isi_laporan','gambar_produk/$nama_gambar')");
    if($simpan){
        echo "<h3>Input Data Berhasil</h3>";
    }else{
        echo "<h3>Input Data Gagal</h3>";
    }
}
?>

<?php
//script php dimodifikasi berdasarkan script
//http://www.phpeasystep.com/phptu/18.html

//koneksi ke database
include "koneksi-database.php";

//menangkap posting dari field input form
$nama        = $_POST['nama'];
$transfer    = $_POST['transfer'];
$bank        = $_POST['bank'];

$namafolder="gambar/"; //folder tempat menyimpan file
if (!empty($_FILES["gambar"]["tmp_name"]))
{
$jenis_gambar=$_FILES['gambar']['type']; //memeriksa format gambar
if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
{
$nama_gambar = $namafolder . basename($_FILES['gambar']['name']);

//mengupload gambar dan update row table database dengan path folder dan nama image
if (move_uploaded_file($_FILES['gambar']['tmp_name'], $nama_gambar)) {

$query_insert = "INSERT INTO dataimage (nama,transfer,bank,image)
VALUES ('$nama','$transfer','$bank','$nama_gambar')";
$insert = mysqli_query($query_insert);

echo"
Data berhasil disimpan <br/>
Nama : $nama <br/>
Transfer: $transfer<br/>
Bank: $bank<br/>
<br/><br/>
<img src='$lampiran' height='300'>";

//Jika gagal upload, tampilkan pesan Gagal
} else {
echo "Gambar gagal dikirim";
}
} else {
echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
}
} else {
echo "Anda belum memilih gambar";
}
?>

<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $isi_laporan=$_POST['isi_laporan'];
    $gambar=@$_FILES['gambar']['name'];
    $tmp=@$_FILES['gambar']['tmp_name'];
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$gambar;
// Set path folder tempat menyimpan fotonya
$path = "gambar/".$fotobaru;

$tgl_pengaduan=date("Y-m-d");
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  mysqli_query($koneksi,"INSERT INTO laporan(nik, nama, isi_laporan, gambar, tgl_pengaduan) VALUES(:nik,:nama,:isi_laporan,:gambar,:tgl_pengaduan)");
  

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: user.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='user.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='user.php'>Kembali Ke Form</a>";
}
?>
