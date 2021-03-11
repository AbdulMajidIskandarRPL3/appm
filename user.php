<?php
ob_start();
session_start();
        include "koneksi.php";
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
    <link rel="stylesheet" href="css/user.css">
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
	              <a href="pengaduan.php?nik=<?php echo $_SESSION['akun_nik']; ?>"><span class="fa fa-pencil mr-3"></span> Pengaduan</a>
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
 
        <!-- Page Content  -->
		<a class="gambar" href="#"><img src="assets/brand/Group3.png" width="40" height="40"> </a>
	<div class=malasngoding-slider>
		<div class=isi-slider>
			<img src="assets/brand/bg.jpg" alt="Gambar 1">
			<img src="assets/brand/bg1.jpg" alt="Gambar 2">
			<img src="assets/brand/bg2.jpg" alt="Gambar 3">
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