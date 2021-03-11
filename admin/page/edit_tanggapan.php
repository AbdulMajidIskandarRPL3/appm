<?php
ob_start();
session_start();
        include "../../koneksi.php";
?>                                                                                                                                               
<!doctype html>
<html lang="en">
  <head>
  	<title>APPM</title> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="icon" href="assets/brand/icon.svg" type="image/gif" sizes="16x16">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/tambah.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <style>
    body {
        color: #566787;
		background: #131b25;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}

</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	                    <i class="fa fa-bars"></i>
	                    <span class="sr-only">Toggle Menu</span>
	                </button>
                </div>
				<div class="p-4">
                <img class="mb-4" src="../../assets/brand/Group1.png" alt="" width="190" height="50">
                <br>
                <br>
                <ul class="list-unstyled components mb-5">
	          <li>
	            <a href="../admin.php"><span class="fa fa-home mr-3"></span> Dashboard</a>
	          </li>
	          <li>
	              <a href="tanggapan.php"><span class="fa fa-check mr-3"></span> Verifikasi Pengaduan</a>
              </li>

              <li>
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"><span class="fa fa-file mr-3"></span> Data</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="data_petugas.php">Data Petugas</a>
                </li>
                <li>
                    <a href="data_masyarakat.php">Data Masyarakat</a>
                </li>
                <li>
                    <a href="data_laporan.php">Data Laporan</a>
                </li>
                <li>
                    <a href="data_tanggapan.php">Data Tanggapan</a>
                </li>
	            </ul>
            </li>
            <li>
	            <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-print mr-3"></span> Generate Laporan</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu1">
                <li>
                    <a href="#">Laporan Data Registrasi</a>
                </li>
                <li>
                    <a href="#">Laporan Semua Pengaduan</a>
                </li>
                <li>
                    <a href="#">Laporan Tanggapan </a>
                </li>
	            </ul>
	          </li>
            
			  <li>
              <a href="../../logout.php"><span class="fa fa-sign-out mr-3"></span> Logout</a>
	          </li>
            </ul>  
	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  <i class="icon-heart" aria-hidden="true"></i> by <a target="_blank">Desa Tajur </a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>
	      </div>
    	</nav>
 
        <!-- Page Content  -->
        <?php
        $proses=mysqli_escape_string($koneksi, @$_GET['proses']);
if($proses=="simpan"){
    $id = $_POST['id_tanggapan'];
        $id_pengaduan = $_POST['id_pengaduan'];
        $id_petugas = $_POST['id_petugas'];
        $tanggapan = $_POST['tanggapan'];
        $tgl =  $_POST['tgl_tanggapan'];
// Set path folder tempat menyimpan fotonya
    $simpan=mysqli_query($koneksi,"UPDATE tanggapan SET id_tanggapan='$id', id_pengaduan='$id_pengaduan', id_petugas='$id_petugas',
    tanggapan='$tanggapan', tgl_tanggapan='$tgl' WHERE id_tanggapan='$id'");
if($simpan){
    echo '<script language="javascript">
          alert ("Data berhasil diperbaharui!");
          window.location="data_tanggapan.php";
          </script>';
          exit();
}else{
    echo '<script language="javascript">
          alert ("Data gagal Di Lakukan! Silahkan Untuk Mengulangi kembali");
          window.location="data_tanggapan.php";
          </script>';
          exit(); 
}
}

?>
<?php
$sql=mysqli_query($koneksi, "SELECT * FROM tanggapan WHERE id_tanggapan='$_GET[id]'");
if($data=mysqli_fetch_array($sql))
?>
         <div class="contact1-pic js-tilt" data-tilt>
     </div>
    <form class="contact1-form validate-form" method="POST" action="edit_tanggapan.php?proses=simpan" enctype="multipart/form-data">
        <span class="contact1-form-title">
            Form Edit Tanggapan
        </span>
        <div class="wrap-input1 validate-input" data-validate = "Name is required">
            <input class="input1" type="text" name="id_tanggapan" readonly="" value="<?php echo $data['id_tanggapan'] ?>">
            <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate = "Name is required">
            <input class="input1" type="text" name="id_pengaduan" readonly="" value="<?php echo $data['id_pengaduan'] ?>">
            <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate = "Name is required">
            <input class="input1" type="text" name="id_petugas" readonly="" value="<?php echo $data['id_petugas'] ?>">
            <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" >
            <input class="input1" type="text" name="tanggapan" value="<?php echo $data['tanggapan'] ?>">
            <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" >
            <input class="input1" type="text" name="tgl_tanggapan" value="<?php echo $data['tgl_tanggapan'] ?>">
            <span class="shadow-input1"></span>
        </div>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<div class="container-contact1-form-btn">
            <button class="contact1-form-btn" type="submit">
                <span>
                    Edit Tanggapan
                </span>
            </button>
</div>
    </form>
</div>
</div>
  </div>
          
       <!--===============================================================================================-->
	<script src="../../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../../popper.js"></script>
	<script src="../../bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../../vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="../../js/main.js"></script>
 

    <script src="../../jquery.min.js"></script>
    <script src="../../popper.js"></script>
    <script src="../../bootstra.min.js"></script>
    <script src="../../main.js"></script>
  </body>
</html>