<form action="<?php echo site_url('Welcome/UpdateDataMatpel'); ?>" method="post">
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="hidden" name="kd_matpel" value="<?php echo $detail['kd_matpel']; ?>">
			<input type="text" name="nama_matpel" value="<?php echo $detail['nama_matpel']; ?>">
		</td>
	</tr>
	<tr>
		<td>KKM</td>
		<td>:</td>
		<td>
			<input type="text" name="kkm" value="<?php echo $detail['kkm']; ?>">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan">
		</td>
	</tr>
</table>
</form>
