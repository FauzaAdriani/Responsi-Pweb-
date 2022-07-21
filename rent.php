<!DOCTYPE html>
<head>
	</head>
	<body>
		<link rel="stylesheet" type="text/css" href="style.css">
		<div align="center"><strong><font size="6" face="Times New Roman">SELAMAT DATANG DI RENTAL MOBIL PWEB<br></font></strong></div>
		<table border="1">
			<tr>
				<td><img width="300px" height="350px" src="avanza.jpg"></td>
				<td><img width="300px" height="350px" src="xenia.jpg"><br></td>
				<td><img width="300px" height="350px" src="xpander.jpg"><br></td>
				<td><img width="300px" height="350px" src="innova.png"><br></td>
				<td><img width="300px" height="350px" src="brio.png"><br></td>
				<td><img width="300px" height="350px" src="ignis.png"><br></td>
				<td><img width="300px" height="350px" src="ayla.jpg"><br></td>
				<td><img width="300px" height="350px" src="karimun.jpg"><br></td>
				<td><img width="300px" height="350px" src="creta.jpg"><br></td>
				<td><img width="300px" height="350px" src="jazz.jpg"><br></td>
				<td><img width="300px" height="350px" src="yaris.jpg"><br></td>
				<td><img width="300px" height="350px" src="city.jpg"><br></td>
			</tr>

			<form name="form1" method="post" action="proses.php">
				<table width="58%" border="0" align="center">
					<tr>
						<h1><center>SILAHKAN ISI DATA DIRI DIBAWAH INI</center></h1>
						<td>Nama</td>
						<td><input name="nama" type="text" id="nama"></td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td><input name="alamat" type="text" id="alamat"></td>
					</tr>

					<tr>
						<td>Jenis Mobil</td>
						<td><select name="mobil" id="mobil">
								<option>Avanza</option>
								<option>Xenia</option>
								<option>Xpander</option>
								<option>Innova</option>
								<option>Brio</option>
								<option>Ignis</option>
								<option>Ayla</option>
								<option>Karimun</option>
								<option>Creta</option>
								<option>Jazz</option>
								<option>Yaris</option>
								<option>City</option>
						</select>
					</tr>

					<tr>
						<td>Keterangan</td>
						<td><input type="keterangan" type="text" name="keterangan"></td>
					</tr>

					<tr>
						<td>Apakah data yang diinputkan sudah benar?</td>
						<td><input type="submit" name="Submit" value="Ya"><input type="reset" name="Submit2" value="Tidak">
					</td>
					</tr>
				</table>
			</form>
	</body>
</html>