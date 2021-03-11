<?php
        include "koneksi.php";
?>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="lihat.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">

</head>
<body class="bg-funky"> 
    <div class="container">
    <h3 class="heading text-center">Tanggapan</h3>
        <div class="messaging">
         <div class="inbox_msg">

           <div class="mesgs">
            <div c9lass="msg_history">
             <?php 
               $sql_login = mysqli_query($koneksi, "SELECT * FROM pengaduan, tanggapan WHERE tanggapan.id_pengaduan='$_GET[id]' and
                 tanggapan.id_pengaduan=pengaduan.id_pengaduan");
                 $cek=mysqli_num_rows($sql_login);
                //jika username terdaftar maka
                if($cek>1)
               {
                   echo "<font>Mohon Bersabar Pengaduan Anda Belum Ditanggapi</font>";
               }
               else 
               {
              if($row_akun = mysqli_fetch_array($sql_login))
               {
             ?>
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
              <span class="time_date"><?php echo $row_akun['nama']; ?></span>
                <div class="received_withd_msg">
                  <p><?php echo $row_akun['isi_laporan']; ?></p>
                  <span class="time_date"><?php echo $row_akun['tgl_pengaduan']; ?></span>
                </div>
              </div>
            </div>
            <div class="outgoing_msg">
              <div class="sent_msg">
              <span class="time_date">Petugas Desa</span>
                <p><?php echo $row_akun['tanggapan']; ?></p>
                <span class="time_date"><?php echo $row_akun['tgl_tanggapan']; ?></span> </div>
            </div>

            </div>
<?php } } ?>
          </div>
          </div>
          <div class="contact1">
		<div class="container-contact1">
			<form class="contact1-form validate-form" method="POST" action="tanggapan.php">
				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span>
							Kembali 
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
      </form>
		</div>
        </div>
	</div>

      </div>
    
  </div>
 
  </body>
    </html>