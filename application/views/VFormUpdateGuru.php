<form action="<?php echo site_url('Welcome/UpdateDataGuru'); ?>" method="post">
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="hidden" name="nip" value="<?php echo $detail['nip']; ?>">
			<input type="text" name="nama" value="<?php echo $detail['nama']; ?>">
		</td>
	</tr>
	<tr>
		<td>No. HP</td>
		<td>:</td>
		<td>
			<input type="text" name="no_hp" value="<?php echo $detail['no_hp']; ?>">
		</td>
	</tr>
	<tr>
		<td>Email</td>
		<td>:</td>
		<td>
			<input type="text" name="email" value="<?php echo $detail['email']; ?>">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan">
		</td>
	</tr>
</table>
</form>
