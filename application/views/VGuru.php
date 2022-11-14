<table border="1px">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddGuru'); ?>">Add</a>
		</td>
	</tr>
	<tr>
		<th>NIP</th>
		<th>Nama</th>
		<th>No. HP</th>
		<th>Email</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataGuru))
	{
		foreach($DataGuru as $ReadDG)
		{
	?>

	<tr>
		<td><?php echo $ReadDG->nip; ?></td>
		<td><?php echo $ReadDG->nama; ?></td>
		<td><?php echo $ReadDG->no_hp; ?></td>
		<td><?php echo $ReadDG->email; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataGuru/'.$ReadDG->nip.'/view') ?>">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataGuru/'.$ReadDG->nip) ?>">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>