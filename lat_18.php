<!DOCTYPE html>
<html>
<head>
	<title>Struktur kendali dengan SWITCH</title>
</head>
<body>
	<?php
		$english = date("l");
			switch ($english)
				{
					case "monday":
					$indonesian = "senin";
					break;
					case "Tuesday":
					$indonesian = "selasa";
					break;
					case "Wednesday":
					$indonesian = "Rabu";
					break;
					case "Thursday":
					$indonesian = "Kamis";
					break;
					case "Friday":
					$indonesian = "Jumat";
					break;
					case "Saturday":
					$indonesian = "Sabtu";
					break;
					default:
						$indonesian = "Minggu";
						break;
				}
				echo "<h2> Hari ini adalah hari $indonesian </h2>";
	?>
</body>
</html>