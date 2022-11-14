<table border="1px">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddJadwal'); ?>">Add</a>
		</td>
	</tr>
	<tr>
		<th>Kd Jadwal</th>
		<th>Kd Kelas</th>
		<th>Kd Matpel</th>
		<th>NIP</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataJadwal))
	{
		foreach($DataJadwal as $ReadDJ)
		{
	?>

	<tr>
		<td><?php echo $ReadDJ->kd_jadwal; ?></td>
		<td><?php echo $ReadDJ->kd_kelas; ?></td>
		<td><?php echo $ReadDJ->kd_matpel; ?></td>
		<td><?php echo $ReadDJ->nip; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataJadwal/'.$ReadDJ->kd_jadwal.'/view') ?>">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataJadwal/'.$ReadDJ->kd_jadwal) ?>">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>