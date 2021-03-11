<?php
ob_start();
session_start();
        include "../../koneksi.php";
?>   
<!DOCTYPE html>
<html lang="en">
<head>
	<title>APPM</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../util.css">
	<link rel="stylesheet" type="text/css" href="../../main.css">
<!--===============================================================================================-->
</head>
<body>
<?php
//proses simpan data
$proses=mysqli_escape_string($koneksi, @$_GET['proses']);
if($proses=="simpan"){
    $id_pengaduan = $_POST['id_pengaduan'];
    $id_petugas = $_POST['id_petugas'];
    $tanggapan = $_POST['tanggapan'];
	$tgl = date("y-m-d");
	$st = 'selesai';
    $simpan=mysqli_query($koneksi,"INSERT INTO tanggapan(id_pengaduan, id_petugas, tanggapan, tgl_tanggapan) 
VALUES('$id_pengaduan','$id_petugas', '$tanggapan', '$tgl')");
$update_st = mysqli_query($koneksi, "UPDATE pengaduan SET status='$st' WHERE id_pengaduan='$id_pengaduan'");
if($simpan){
    ?>
    <script type="text/javascript">
    alert ('Pengaduan Berhasil Ditanggapi');
    window.location="tanggapan.php";
    </script>
<?php
}else{?>
    <script type="text/javascript">
    alert ('Pengaduan gagal Ditanggapi');
    window.location="tanggapan.php";
    </script>
<?php

}
}

?>
	<div class="contact1">
		<div class="container-contact1">
       		
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="../../assets/brand/undraw.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form" method="POST" action="detail_pengaduan.php?proses=simpan">
				<span class="contact1-form-title">
					Buat Tanggapan
				</span>
                   
				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="id_pengaduan" readonly="" value="<?php echo $_GET['id'];?>" >
					<span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="id_petugas" readonly="" value="<?php echo $_SESSION['akun_id'];?>" >
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="tanggapan" placeholder="Tanggapan" ></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
                <a href="tanggapan.php" class="contact1-form-btn" ">
						<span>
							Kembali
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</a>
					<button class="contact1-form-btn">
						<span>
							Kirim
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
                    </button>
				</div>
            </form>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
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

</body>
</html>
