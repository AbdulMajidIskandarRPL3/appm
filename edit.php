<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	

    <?php 
    ob_start();
    session_start();
	include "koneksi.php";
	$query_mysql = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$_SESSION[akun_id]'");
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
        <tr>
				<td>nik</td>
				<td>
					<input type="text" name="nama" value="<?php echo $data['nik'] ?>">
				</td>					
            </tr>	
            <tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id_user'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
            </tr>	
            <tr>
				<td>Username</td>
				<td>
                <input type="hidden" name="id" value="<?php echo $data['id_user'] ?>">
					
					<input type="text" name="nama" value="<?php echo $data['username'] ?>">
				</td>					
            </tr>	
            <tr>
				<td>Password</td>
				<td>
					<input type="text" name="nama" value="<?php echo $data['password'] ?>">
				</td>					
            </tr>	
            <tr>
				<td>Telepon</td>
				<td>
					<input type="text" name="nama" value="<?php echo $data['telp'] ?>">
				</td>					
            </tr>
            <tr>
				<td>Foto Profil</td>
				<td>
                <input type="file" id="upload_file" name="gambar">
            </td>					
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>