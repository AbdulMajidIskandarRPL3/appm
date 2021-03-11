<?php
ob_start();
session_start();
        include 'koneksi.php';
?> 
<!doctype html>
<html lang="en">
  <head>
  	<title>APPM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/brand/icon.svg" type="image/gif" sizes="16x16">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/pengadua.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">

  </head>
  <body >
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	                    <i class="fa fa-bars"></i>
	                    <span class="sr-only">Toggle Menu</span>
	                </button>
                </div>
				<div class="p-4">
                <img class="mb-4" src="assets/brand/Group1.png" alt="" width="190" height="50">
	        <ul class="list-unstyled components mb-5">
	          <li>
	            <a href="user.php"><span class="fa fa-home mr-3"></span> Dashboard</a>
	          </li>
	          <li>
	              <a href="pengaduan.php"><span class="fa fa-pencil mr-3"></span> Pengaduan</a>
			  </li>
			  <li>
              <a href="tanggapan.php"><span class="fa fa-sticky-note mr-3"></span> Lihat Pengaduan</a>
	          </li>
	          <li>
              <a href="profil.php"><span class="fa fa-user mr-3"></span> Tentang</a>
			  </li>
			  <li>
              <a href="logout.php"><span class="fa fa-sign-out mr-3"></span> Logout</a>
	          </li>
            </ul>
                     
	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  <i class="icon-heart" aria-hidden="true"></i> by <a target="_blank">Desa Tajur </a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

		<?php
//proses simpan data
$proses=mysqli_escape_string($koneksi, @$_GET['proses']); 
if($proses=="simpan"){
    $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $isi_laporan = $_POST['isi_laporan'];
        $nama_gambar= @$_FILES['gambar']['name'];
        $tmp_gambar= @$_FILES['gambar']['tmp_name'];
		$fotobaru = date('dmYHis').$nama_gambar;
// Set path folder tempat menyimpan fotonya
if(!empty($fotobaru)){
	copy($tmp_gambar, "gambar/$fotobaru");
}
$tgl_pengaduan=date("y-m-d");
$status=0;
    $simpan=mysqli_query($koneksi,"INSERT INTO pengaduan  (nik, nama, isi_laporan, gambar, tgl_pengaduan, status) 
	VALUES('$nik', '$nama', '$isi_laporan', 'gambar/$fotobaru', '$tgl_pengaduan', '$status')");
if ($simpan){
        echo '<script language="javascript">
              alert ("Pengaduan Anda Berhasil Di Lakukan! Anda hanya tinggal menunggu balasan dari pihak desa");
              window.location="pengaduan.php";
              </script>';
              exit();
    }else{
        echo '<script language="javascript">
              alert ("Pengaduan gagal Di Lakukan! Silahkan Untuk Melakukan pengaduan kembali");
              window.location="pengaduan.php";
              </script>';
              exit(); 
    }
}

?>
 
		<!-- Page Content  -->
		<a class="gambar" href="#"><img src="assets/brand/Group3.png" width="40" height="40"> </a>
	
		
			<div class="contact1-pic js-tilt" data-tilt>
		
				<img src="assets/brand/undraw.png" alt="IMG">
				<span class="contact1-form-title">
				<h1>  Suara Anda Adalah Perubahan</h1>
				<h2>  Suarakan aspirasi anda untuk membangun desa yang lebih baik</h2>
				
			</span>
     		</div>
			<form class="contact1-form validate-form" method="POST" action="pengaduan.php?proses=simpan" enctype="multipart/form-data">
				<span class="contact1-form-title">
					Form Pengaduan
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="nik" readonly="" value="<?php echo $_SESSION['akun_nik'];?>" >
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="nama" readonly="" value="<?php echo $_SESSION['akun_nama'];?>">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="isi_laporan" placeholder="Isi Laporan"></textarea>
					<span class="shadow-input1"></span>
        </div>
        
        
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<div class="panel">
			<div class="button_outer">
				<div class="btn_upload">
					<input type="file" id="upload_file" name="gambar">
					Upload Image
				</div>
				<div class="processing_bar"></div>
				<div class="success_box"></div>
			</div>
		</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn" type="submit">
						<span>
							Kirim Laporan
						</span>
					</button>
        </div>
			</form>
		</div>
	</div>

          </div>
          
       <!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="popper.js"></script>
	<script src="bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
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
	<script src="js/main.js"></script>
 

    <script src="jquery.min.js"></script>
    <script src="popper.js"></script>
    <script src="bootstra.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>