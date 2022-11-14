<table border="1px">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddKelas'); ?>">Add</a>
		</td>
	</tr>
	<tr>
		<th>Kd</th>
		<th>Nama</th>
	</tr>
	<?php
	if(!empty($DataKelas))
	{
		foreach($DataKelas as $ReadDKls)
		{
	?>

	<tr>
		<td><?php echo $ReadDKls->kd_kelas; ?></td>
		<td><?php echo $ReadDKls->nama_kelas; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataKelas/'.$ReadDKls->kd_kelas.'/view') ?>">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataKelas/'.$ReadDKls->kd_kelas) ?>">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>