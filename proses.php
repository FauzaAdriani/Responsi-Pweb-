<?php
	$nama       = $_POST['nama'];
	$alamat     = $_POST['alamat'];
	$mobil      = $_POST['mobil'];
	$keterangan = $_POST['keterangan'];

		echo "<head><title>Rental Mobil </head></title>";
		$fp = fopen("daftar.txt", "a+");
		fputs($fp,"$nama|$alamat|$mobil|$keterangan\n");
		fclose($fp);
		echo "<center>Anda Sudah Mengisi Data Diri<br>";
		echo "<center>Jika Ingin Melihat Daftar Pengguna Yang Lain , Dapat Dilihat Pada Link Dibawah Ini<br>";
		echo "<center><a href=look.php>Daftar Pengguna Rental Mobil</a><br>";
?>