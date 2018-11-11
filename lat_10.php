<!DOCTYPE html>
<html>
<head>
	<title>Perangkat CPU dan Daftar Peralatan yang Dibeli</title>
</head>
<body>
	<center>
		<table border="1" cellspacing="0" cellpadding="3">
			<tr>
				<td colspan="4" align="center" valign="middle">
					<b> Daftar Pemesanan Peralatan Perangkat CPU </b>
				</td>
			</tr>
			<tr>
				<td><b>Nama Peralatan</b></td>
				<td><b>Jumlah</b></td>
				<td><b>Harga Satuan</b></td>
				<td><b>Jumlah Harga</b></td>
			</tr>
			//Mulai untuk mengisi tabel daftar dengan data yang ada
			<tr>
				<td align="left"><? echo $alat_Perangkat_cpul; ?></td>
				<td align="right"><? echo $jumlah_alat_perangkat_cpul; ?></td>
				<td align="right"><? echo $harga_alat_perangkat_cpu1; ?></td>
				<td align="right"><? echo $total_alat_perangkat_cpul; ?></td>
			</tr>
			<tr>
				<td align="left"><? echo $alat_Perangkat_cpu2; ?></td>
				<td align="right"><? echo $jumlah_alat_perangkat_cpu2; ?></td>
				<td align="right"><? echo $harga_alat_perangkat_cpu2; ?></td>
				<td align="right"><? echo $total_alat_perangkat_cpu2; ?></td>
			</tr>
			<tr>
				<td align="left"><? echo $alat_Perangkat_cpu3; ?></td>
				<td align="right"><? echo $jumlah_alat_perangkat_cpu3; ?></td>
				<td align="right"><? echo $harga_alat_perangkat_cpu3; ?></td>
				<td align="right"><? echo $total_alat_perangkat_cpu3; ?></td>
			</tr>
			<tr>
				<td align="left"><? echo $alat_Perangkat_cpu4; ?></td>
				<td align="right"><? echo $jumlah_alat_perangkat_cpu4; ?></td>
				<td align="right"><? echo $harga_alat_perangkat_cpu4; ?></td>
				<td align="right"><? echo $total_alat_perangkat_cpu4; ?></td>
			</tr>
			<tr>
				<td colspan="3" align="right">Total Harga </td>
				<td align="right"><? echo $total_harga; ?></td>
			</tr>
			<tr>
				<td colspan="3" align="right">
					Diskon<? echo "($diskon % )"; ?>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="right"> Jumlah harus dibayar </td>
				<td align="right"><? echo $total_harga_dibayar; ?></td>
			</tr>
		</table>
	</center>

</body>
</html>