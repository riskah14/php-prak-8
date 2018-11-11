<!DOCTYPE html>
<html>
<head>
	<title>Struktur kendali dengan SWITCH</title>
</head>
<body>
	<?php
		$nilai = 60;
			switch ($nilai) 
				{
					case "$nilai >= 80":
					$hasil = "A";
					break;
					case "$nilai >= 60":
					$hasil = "B";
					break;
					case "$nilai >= 40":
					$hasil = "C";
					break;
					case "$nilai >= 20":
					$hasil = "D";
					break;
					default:
						$hasil = "anda harus belajar lagi";
						break;
				}
				echo "<h2> nilai anda : $hasil </h2>";
	?>
</body>
</html>