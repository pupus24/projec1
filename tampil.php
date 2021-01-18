<html>
<head> 
	<title> BUKU TAMU </title>
</head>
<body>
	<pre>
		<h1> BUKU TAMU </h1>
		<a href="indexx.php"> <-- Kembali ke Form Buku Tamu</a>
		<hr size=1>
		<?php
		$koneksi=mysql_connect("localhost","root","");
		mysql_select_db("db_bukutamu");
		$sql=mysql_query("SELECT *FROM tamu", $koneksi);
		while ($data=mysql_fetch_array($sql))
		{
			$id=$Data['id'];
			$name=$data['name'];
			$email=$data['email'];
			$alm=$data['addres'];
			$city=$data['city'];
			$msg=$msg['msg'];
echo "No 	: $id<br>";
echo "Nama  : $name<br>";
echo "E-Mail: $email<br>";
echo "Alamat: $alm, $city<br>";
echo "Pesan : $msg<br> <hr size=1>";

					}
			?>
		</pre>
	</body>
	</html>
	