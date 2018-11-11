<!DOCTYPE html>
<html>
<head>
	<title>Penyisipan variable pada HTML</title>
</head>
<body>
	Silahkan sebutkan warna kesukaan anda..?<br>
	<?php
	//Berikut adalah inisiasi beberapa variabel
	$warna1 = "Merah";
	$warna2 = "Hijau";
	$warna3 = "Kuning";
	?>
	<b> Di Bawah ini adalah warna kesukaanku:<br>
		<?php
	print ("$warna1, $warna2, dan $warna3 </b>");
	?>
</body>
</html>