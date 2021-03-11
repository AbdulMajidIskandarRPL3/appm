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
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">User</button>
					</div>
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-in')">Admin</button>
					</div>
				</div>
       			 <img class="mb-4" src="assets/brand/Group1.png" alt="" width="190" height="50">
        
				<form class="login100-form validate-form" method="POST" action="cek_login.php">
				<div class="tabcontent" id="sign-up">	
				<span class="login100-form-title">
                    Aplikasi Pelaporan <BR>Pengaduan Masyarakat<br>DESA TAJUR
					</span>

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

                    <div class="container-login100-form-btn">
			        	<button class="login100-form-btn">
					        Login
				        </button>
		            </div>
          <div class="text-center p-t-12">
						<span class="txt1">
						Don’n have on account?
						</span>
				 		<a class="txt2" href="registrasi.php">
							Register Now
						</a>
                    </div>
                    <br>
                    
                    
        <p class="mt-5 mb-3 text-muted text-center">&copy; DESA TAJUR | 2020-<?= date('Y') ?></p>
		</div>
				</form>
				<form class="login100-form validate-form" method="POST" action="cek_admin.php">
				<div class="tabcontent" id="sign-in">	
				<span class="login100-form-title">
                    Aplikasi Pelaporan <BR>Pengaduan Masyarakat<br>DESA TAJUR
					</span>
					<div class="wrap-input100 validate-input">
          <select class="input100" name="level">
		  <option>==Pilih==</option>
            <option value="Admin">Admin</option>
            <option value="petugas">Petugas</option>

		</select>
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

                    <div class="container-login100-form-btn">
			        	<button class="login100-form-btn">
					        Login
				        </button>
		            </div>
         
                    <br>
                    
                    
        <p class="mt-5 mb-3 text-muted text-center">&copy; DESA TAJUR | 2020-<?= date('Y') ?></p>
		</div>
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
	<script type="text/javascript">
		function openCity(evt, cityName) {
		    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }
		    document.getElementById(cityName).style.display = "block";
		    evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>