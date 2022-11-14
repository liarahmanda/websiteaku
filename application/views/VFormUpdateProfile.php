<form action="<?php echo site_url('Welcome/UpdateDataProfile'); ?>" method="post">
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="hidden" name="kd_profile" value="<?php echo $detail['kd_profile']; ?>">
			<input type="text" name="nama_profile" value="<?php echo $detail['nama_profile']; ?>">
		</td>
	</tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan">
		</td>
	</tr>
</table>
</form>
