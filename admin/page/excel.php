<?php
ob_start();
session_start();
        include "../../koneksi.php";
?>      
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pegawai.xls");
	?>

	<center>
		<h1>Data Pengaduan Masyarakat <br/> Desa Tajur</h1>
	</center>

	<table border="1">
		<tr>
        <th>No</th>
                        <th>Nik</th>
                        <th>Nama</th>						
                        <th>Tanggal Pengaduan</th>
                        <th>Isi Pengaduan</th>
		</tr>
		<?php 
		// koneksi database
		
		// menampilkan data pegawai
		$produktebaru = mysqli_query($koneksi,"SELECT * FROM pengaduan  ORDER BY id_pengaduan DESC ");
		$no = 1;
        while($tampilproduk=mysqli_fetch_array($produktebaru)){
            ?>
		<tr>
        <td><?php echo $no++; ?></td>
                        <td><?php echo $tampilproduk['nik']; ?></td>
                        <td><?php echo $tampilproduk['nama']; ?></td>
                        <td><?php echo $tampilproduk['tgl_pengaduan']; ?></td>
                        <td><?php echo $tampilproduk['isi_laporan']; ?></td>                        
        </tr>
		<?php 
		}
		?>
	</table>
</body>
</html>