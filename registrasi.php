<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login APPM</title>
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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/indec.css">
<!--===============================================================================================-->
</head>
<body>
	
<div class="page-content">
		<div class="form-v8-content">
			<div class="form-right">
			
        <img class="mb-4" src="assets/brand/Group1.png" alt="" width="190" height="50">
        
				<form class="login100-form validate-form" method="POST" action="cek_registrasi.php">
					<span class="login100-form-title">
                    Silahkan Registrasi Terlebih Dahulu
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid Username is required: ex@abc.xyz">
			<input class="input100" type="text" name="nik" placeholder="No NIK">
				<span class="focus-input100"></span> 
				<span class="symbol-input100">
				  <i class="fa fa-id-card" aria-hidden="true"></i>
				</span>
		  </div>

          <div class="wrap-input100 validate-input" data-validate = "Valid Username is required: ex@abc.xyz">
			<input class="input100" type="text" name="nama" placeholder="Nama Lengkap">
				<span class="focus-input100"></span>
				<span class="symbol-input100">
				  <i class="fa fa-user" aria-hidden="true"></i>
				</span>
          </div>
          
          <div class="wrap-input100 validate-input" data-validate = "Valid Username is required: ex@abc.xyz">
			<input class="input100" type="text" name="username" placeholder="Username">
				<span class="focus-input100"></span>
				<span class="symbol-input100">
				  <i class="fa fa-user" aria-hidden="true"></i>
				</span>
          </div>
          
          <div class="wrap-input100 validate-input" data-validate = "Password is required">
			<input class="input100" type="password" name="password" placeholder="Password">
				<span class="focus-input100"></span>
				<span class="symbol-input100">
					<i class="fa fa-lock" aria-hidden="true"></i>
				</span>
          </div>
          
          <div class="wrap-input100 validate-input" data-validate = "Valid Username is required: ex@abc.xyz">
			<input class="input100" type="text" name="telp" placeholder="No Telepon">
				<span class="focus-input100"></span>
				<span class="symbol-input100">
				  <i class="fa fa-phone" aria-hidden="true"></i>
				</span>
				</div>
          <div class="container-login100-form-btn">
				<button class="login100-form-btn" name="Proses user" value="Proses user">
					Registrasi
				</button>
		  </div>
          <div class="text-center p-t-12">
						<span class="txt1">
						I have on account?
						</span>
						<a class="txt2" href="index.php">
							Login
						</a>
                    </div>
                    <br>
                    
                    
        <p class="mt-5 mb-3 text-muted text-center">&copy; DESA TAJUR | 2020-<?= date('Y') ?></p>
      
				</form>
			</div>
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
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>