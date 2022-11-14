<table border="1px">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddMatpel'); ?>">Add</a>
		</td>
	</tr>
	<tr>
		<th>Kd</th>
		<th>Nama</th>
		<th>KKM</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataMatpel))
	{
		foreach($DataMatpel as $ReadDM)
		{
	?>

	<tr>
		<td><?php echo $ReadDM->kd_matpel; ?></td>
		<td><?php echo $ReadDM->nama_matpel; ?></td>
		<td><?php echo $ReadDM->kkm; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataMatpel/'.$ReadDM->kd_matpel.'/view') ?>">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataMatpel/'.$ReadDM->kd_matpel) ?>">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>