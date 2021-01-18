<html>
<head>
	<title> Simpan Data </title>
</head>
<body>
	<?php
	$nama=$_POST['name'];
	$email=$_POST['email'];
	$alm=$_POST['alamat'];
	$kota=$_POSR['kota'];
	$msg=$_POST['msg'];

	$koneksi=mysql_connect("localhost","root","");
	mysql_select_db("db_bukutamu");
	$proses="INSERT INTO tamu(name,email,addres,city,msg)
	VALUES('$nama','$email','$alm','$kota','$msg')";
	$hasil=mysql_query($proses,$koneksi);
	echo "<font color=red size=5>Buku Tamu BERHASIL Diisi</font>";

	?>
	<br>

	<a href="tampil.php"> <h3>Lihat Buku Tamu</h3> </a>


	</body>
	</html>
	