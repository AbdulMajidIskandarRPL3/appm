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
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <style>
    body {
        color: #566787;
		background: #131b25;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}

</style>
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
                <img class="mb-4" src="assets/brand/Group1.png" alt="" width="190" height="50">
                <ul class="list-unstyled components mb-5">
	          <li>
	            <a href="user.php"><span class="fa fa-home mr-3"></span> Dashboard</a>
	          </li>
	          <li>
	              <a href="pengaduan.php"><span class="fa fa-pencil mr-3"></span> Pengaduan</a>
			  </li>
			  <li>
              <a href="tanggapan.php"><span class="fa fa-sticky-note mr-3"></span> Tanggapan</a>
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
</body>
 
        <!-- Page Content  -->
        
  <div class="main-content">
    <div class="container mt-7">
      <!-- Table -->
     
      <div class="row">
        <div class="col-xl-8 m-auto order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
          <?php
                 $tampilPeg =mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$_SESSION[akun_id]'");
                 
                 $peg    =mysqli_fetch_array($tampilPeg);
            ?>
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="<?php echo $peg['foto']; ?>" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="edit.php" class="btn btn-sm btn-default float-right">Edit Profil</a>
              </div>
            </div>
           
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span class="heading">22</span>
                      <span class="description">Friends</span>
                    </div>
                    <div>
                      <span class="heading">10</span>
                      <span class="description">Photos</span>
                    </div>
                    <div>
                      <span class="heading">89</span>
                      <span class="description">Comments</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">No NIK</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $peg['nik']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Lengkap</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $peg['nama']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Username</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $peg['username']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">No Telepon</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $peg['telp']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Alamat</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $peg['alamat']; ?>
                    </div>
                  </div>
                 
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
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