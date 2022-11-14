<form action="<?php echo site_url('Welcome/UpdateDataJadwal'); ?>" method="post">
<table>
	<tr>
		<td>Kd Jadwal</td>
		<td>:</td>
		<td><input type="hidden" name="kd_jadwal" value="<?php echo $detail['kd_jadwal']; ?>">
		</td>
	</tr>
	<tr>
		<td>Kd Kelas</td>
		<td>:</td>
		<td>
			<input type="text" name="kd_kelas" value="<?php echo $detail['kd_kelas']; ?>">
		</td>
	</tr>
	<tr>
		<td>Kd Matpel</td>
		<td>:</td>
		<td>
			<input type="text" name="kd_matpel" value="<?php echo $detail['kd_matpel']; ?>">
		</td>
	</tr>
	<tr>
		<td>NIP</td>
		<td>:</td>
		<td>
			<input type="text" name="nip" value="<?php echo $detail['nip']; ?>">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan">
		</td>
	</tr>
</table>
</form>
