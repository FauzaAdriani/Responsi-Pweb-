<?php
   echo "<head><title>Rental Mobil</title></head>";
   $fp = fopen("daftar.txt", "r");
   echo "<center><h1>Daftar Pengguna Jasa Rental Mobil</h1>";
   echo "<a href='rent.php'></a>";
   echo "<hr>";
   echo "<table border=1 style=text-align: center width=80%>";
   echo "<tr><td><center>Nama</td><td><center>Alamat</td><td><center>Jenis Mobil Yang Digunakan</td><td><center>Keterangan Penggunaan</center></td></tr>";

   while ($sisi = fgets($fp,80))
   {
       $pisah = explode("|", $sisi);
       echo "<tr><td><center>$pisah[0]</td><td><center>$pisah[1]</td><td><center>$pisah[2]</td><td><center>$pisah[3]</td></center>";
   }
   echo "</table></center>";   
?>

