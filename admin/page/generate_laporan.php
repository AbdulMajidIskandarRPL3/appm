<?php
ob_start();
session_start();
        include "../../koneksi.php";
?>  
<!DOCTYPE html>
<html>
<head>
	<title>Export Data </title>
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
	header("Content-Disposition: attachment; filename=Data Laporan.xls");
	?>

	<center>
		<h1>DATA LAPORAN DARI MASYARAKAT </h1>
	</center>

	<table border="1">
                    <tr>
                        <th>ID</th>
                        <th>NIK</th>	
                        <th>Nama</th>						
                        <th>Laporan</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        </tr>
                </thead>
                
                <tbody>
                <?php
                $produktebaru=mysqli_query($koneksi,"SELECT * FROM pengaduan ");
                while($tampilproduk=mysqli_fetch_array($produktebaru)){
            ?>
                    <tr>
                        <td><?php echo $tampilproduk['id_pengaduan']; ?></td>
                        <td><?php echo $tampilproduk['nik']; ?></td>
                        <td><?php echo $tampilproduk['nama']; ?></td>
                        <td><?php echo $tampilproduk['isi_laporan'];  ?></td>
                        <td><?php echo $tampilproduk['tgl_pengaduan']; ?></td>
                        <td><?php echo $tampilproduk['status']; ?></td>  
                    </tr>
                   
            <?php } ?>
                </tbody>
            </table>
        </div>
    </div>        
</div>  

          </div>
          
       <!--===============================================================================================-->
	<script src="../../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../../popper.js"></script>
	<script src="../../bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../../vendor/tilt/tilt.jquery.min.js"></script>
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
 

    <script src="../../jquery.min.js"></script>
    <script src="../../popper.js"></script>
    <script src="../../bootstra.min.js"></script>
    <script src="../../main.js"></script>
  </body>
</html>