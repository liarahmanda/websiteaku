<form action="<?php echo site_url('Welcome/UpdateDataKontak'); ?>" method="post">
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="hidden" name="kd_kontak" value="<?php echo $detail['kd_kontak']; ?>">
			<input type="text" name="nama_kontak" value="<?php echo $detail['nama_kontak']; ?>">
		</td>
	</tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan">
		</td>
	</tr>
</table>
</form>
