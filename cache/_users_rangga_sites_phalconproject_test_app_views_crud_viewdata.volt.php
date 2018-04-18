<?php
$no = 1;
?>
<?php $v97155800154182293671iterated = false; ?><?php $v97155800154182293671iterator = $data; $v97155800154182293671incr = 0; $v97155800154182293671loop = new stdClass(); $v97155800154182293671loop->self = &$v97155800154182293671loop; $v97155800154182293671loop->length = count($v97155800154182293671iterator); $v97155800154182293671loop->index = 1; $v97155800154182293671loop->index0 = 1; $v97155800154182293671loop->revindex = $v97155800154182293671loop->length; $v97155800154182293671loop->revindex0 = $v97155800154182293671loop->length - 1; ?><?php foreach ($v97155800154182293671iterator as $datas) { ?><?php $v97155800154182293671loop->first = ($v97155800154182293671incr == 0); $v97155800154182293671loop->index = $v97155800154182293671incr + 1; $v97155800154182293671loop->index0 = $v97155800154182293671incr; $v97155800154182293671loop->revindex = $v97155800154182293671loop->length - $v97155800154182293671incr; $v97155800154182293671loop->revindex0 = $v97155800154182293671loop->length - ($v97155800154182293671incr + 1); $v97155800154182293671loop->last = ($v97155800154182293671incr == ($v97155800154182293671loop->length - 1)); ?><?php $v97155800154182293671iterated = true; ?>
<?php if ($v97155800154182293671loop->first) { ?>
<table border=1 align='center'>
	<thead>
		<tr>
			<td>Id</td>
			<td>Nama</td>
			<td>No Telp</td>
			<td>Email</td>
			<th colspan="2">Action</th>
		<tr>
	<thead>
<?php } ?>
	<tbody>
		<tr>
			<td><?php echo $no;?></td>
			<td><?= $datas->nama ?></td>
			<td><?= $datas->telp ?></td>
			<td><?= $datas->email ?></td>
			<td> <a href="<?= $this->url->get('crud/editData/' . $datas->id) ?>">Edit</a> </td>
			<td> <a href="<?= $this->url->get('crud/deleteData/' . $datas->id) ?>">Hapus</a> </td>
		</tr>
	</tbody>
	<?php
	$no++;
	?>
<?php if ($v97155800154182293671loop->last) { ?>
</table>
<?php } ?>
<?php $v97155800154182293671incr++; } if (!$v97155800154182293671iterated) { ?>
	No Data
<?php } ?>
