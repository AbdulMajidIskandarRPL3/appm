
  <body >
				<img src="assets/brand/undraw.png" alt="IMG">
      </div>
			<form class="contact1-form validate-form" method="post" action="input.php" enctype="multipart/form-data">
				<span class="contact1-form-title">
					Form Pengaduan
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="nik" placeholder="No NIK">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="nama" placeholder="Nama Lengkap">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="isi_laporan" placeholder="Isi Laporan"></textarea>
					<span class="shadow-input1"></span>
        </div>
        
        <div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="file" name="gambar" placeholder="gambar">
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn" type="submit">
						<span>
							Kirim Laporan
						</span>
					</button>
        </div>
			</form>
