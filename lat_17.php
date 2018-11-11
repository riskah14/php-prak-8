<!DOCTYPE html>
<html>
<head>
	<title>Kelulusan Matkul PW</title>
</head>
<body>
	<?php
	$nilai = 80;
	if ($nilai >= 80)
	{
		echo "A";
	}
	elseif ($nilai >= 60)
	{
		echo "B";
	}
	elseif ($nilai >= 40)
	{
		echo "C";
	}
	elseif ($nilai >= 20)
	{
		echo "D";
	}
	else
	{
		echo " maaf anda harus belajar lagi";
	}
	?>
</body>
</html>